import json
import requests 
import datetime
import markdown
import os
from dotenv import load_dotenv

user=os.getenv('USER')+"@adobe.com/token"
password_prod=os.getenv('PWD_PROD')
headers={'content-type': 'application/json'}