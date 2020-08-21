# Copyright 2020 Adobe
# All Rights Reserved.

# NOTICE: Adobe permits you to use, modify, and distribute this file in
# accordance with the terms of the Adobe license agreement accompanying
# it.

import converter

# Write in your username here in the format email/token
user = "cedilloj@adobe.com/token"

# Write out your article ids here as a comma separated list
articles = [360047637951, 360047633331, 360047251111, 360046906191]

# Add in the base path for your repo here
base_path= "src"

converter.get_published_articles(user, base_path, articles)








