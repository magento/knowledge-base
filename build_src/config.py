import converter

# Write in your username here in the format email/token
user = "cedilloj@adobe.com/token"

# Write out your article ids here as a comma separated list
articles = [360047637951, 360047633331, 360047251111, 360046906191]

# Add in the base path for your repo here
base_path= "src"

converter.get_published_articles(user, base_path, articles)








