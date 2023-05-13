import argparse
import requests
from bs4 import BeautifulSoup

parser = argparse.ArgumentParser()
parser.add_argument('url', help='the URL of the website to scrape')
args = parser.parse_args()

response = requests.get(args.url)

try:
    server = response.headers['Server']
except KeyError:
    server = 'Unknown'

software = response.headers.get('X-Powered-By', 'Unknown')
version = None

soup = BeautifulSoup(response.text, 'html.parser')
meta_tags = soup.find_all('meta')

for tag in meta_tags:
    if tag.get('name') == 'generator':
        version = tag.get('content')
        break

print('Server:', server)
print('Software:', software)
print('Version:', version if version else 'Unknown')
