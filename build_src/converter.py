import json
import requests 
import datetime
import html2markdown
import os
from dotenv import load_dotenv

load_dotenv()

###################### Don't Touch! ######################

def check_directory(json, type, path):
    raw = json[type][0]
    name = raw['name']
    directory = path+'/'+name
    if not os.path.exists(directory):
        os.mkdir(directory)
    return directory

def save_article(save_path, article, id):
    with open(save_path, mode='w', encoding='utf-8') as f:
            f.write(article)
    print(f'\n Successfully wrote article # {id}')

def get_published_articles(user, base_path, articles):
    password_prod = os.getenv('PWD_PROD')
    headers = {'content-type': 'application/json'}
    
    article_url_list = list(map(lambda x: f'https://magento.zendesk.com/api/v2/help_center/articles/{x}.json?include=categories,sections',articles))

    for url in article_url_list:
        id = article_url_list.index(url) + 1
        response = requests.get(url, auth=(user, password_prod), headers=headers)
        json = response.json()

        # create directory for category
        cat_directory = check_directory(json, "categories", base_path)

        # create directory for section
        sect_directory = check_directory(json, "sections", cat_directory)

        # update the article 
        raw_article = json['article']
        draft = raw_article['draft']

        if draft == False:
            title = raw_article['title']
            title = title.replace('/', 'or')
            body = html2markdown.convert(raw_article['body'])

            save_path = f'{sect_directory}/{title}.md'
            save_article(save_path, body, id)

        









