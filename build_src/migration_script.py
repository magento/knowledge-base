import json
import requests 
import datetime
import html2markdown
import os
from dotenv import load_dotenv

load_dotenv()

user=os.getenv('USER')+"@adobe.com/token"
password_prod=os.getenv('PWD_PROD')
headers={'content-type': 'application/json'}
base_path="/Users/cedilloj/Desktop/All_Python_Scripts/kb_to_zd/migration_directory"
date = str(datetime.datetime.now())
articles_json = []

def check_directory(directory):
    print(f'Directory {directory} already exists!') if os.path.exists(directory) else os.mkdir(directory)

def save_article(save_path, article):
    with open(save_path, mode='w', encoding='utf-8') as f:
            f.write(article)
    print(f'\n Successfully wrote article')

def get_published_articles(url, base_directory):
    while url: 
        response = requests.get(url, auth=(user, password_prod), headers=headers)
        json = response.json()
        response_status = response.status_code
        article_count = json['count']
        raw_articles = json['articles']
        print(f'\n This was the response code: {response_status}')
        print(f'\n There are {article_count} articles')

        for article in raw_articles:
            draft = article['draft']

            if draft == False:
                print(f'This is a published article')
                title = article['title']
                title = title.replace('/', 'or')
                body = html2markdown.convert(article['body'])

                save_path = f'{base_directory}/{title}.md'
                save_article(save_path, body)

                article_dict = {
                    "title": article['title'],
                    "body": html2markdown.convert(body)
                }
                articles_json.append(article_dict)
        url = json['next_page']

# get category id + name
categories_url="https://magento.zendesk.com/api/v2/help_center/categories.json"
cat_response = requests.get(categories_url, auth=(user, password_prod), headers=headers)
cat_json = cat_response.json()
raw_cats = cat_json['categories']
for category in raw_cats:
    cat_id = category['id']
    cat_name = category['name']
    print(f'Now looping through this category: {cat_name} \n')
    cat_directory = base_path+'/'+cat_name

    # create directory for category
    check_directory(cat_directory)

    # loop inside category and grab all section ids + names
    sect_url=f"https://magento.zendesk.com/api/v2/help_center/categories/{cat_id}/sections.json"
    sect_response = requests.get(sect_url, auth=(user, password_prod), headers=headers)
    sect_json = sect_response.json()
    raw_sects = sect_json['sections']
    for section in raw_sects:
        sect_id = section['id']
        sect_name = section['name']
        print(f'\n Now looping through this section: {sect_name}')
        sect_directory = cat_directory+ '/' +sect_name

    # create directory for section
        check_directory(sect_directory)

    # loop inside section and grab all article ids + names
        articles_url = f'https://magento.zendesk.com/api/v2/help_center/sections/{sect_id}/articles.json'
        get_published_articles(articles_url, sect_directory)

# articles_url = f'https://magento.zendesk.com/api/v2/help_center/sections/115001031253/articles.json'
# sect_directory = '/Users/cedilloj/Desktop/All_Python_Scripts/kb_to_zd/migration_directory/Troubleshooting/General'
# get_published_articles(articles_url, sect_directory)
    

print(len(articles_json))


