# -*- coding: utf-8 -*-
import sys
import codecs
#pip install beautifulsoup4     <=> pip install bs4

SiteUrl = sys.argv[1]
WebType = sys.argv[2]

import base64
SiteUrl = base64.b64decode(SiteUrl).decode()



# "Chrome" or "Firefox" or "curl"
from bs4 import BeautifulSoup

if 'curl' in WebType :
	from urllib.request import urlopen
	page_html = urlopen(SiteUrl)
else:
	from selenium import webdriver

	if 'Chrome' in WebType :
		# 옵션 생성
		options = webdriver.ChromeOptions()
		# 창 숨기는 옵션 추가
		options.add_argument("headless")

		# driver 실행
		driver = webdriver.Chrome(options=options)
#		driver = webdriver.Chrome()
	else :
		# 옵션 생성	파폭은 잘안됨
		options = webdriver.FirefoxOptions()
		# 창 숨기는 옵션 추가
		options.add_argument("headless")

		driver = webdriver.Firefox(options=options)
#		driver = webdriver.Firefox()

	driver.get(SiteUrl);
	page_html = driver.page_source
	driver.quit()
	
html = BeautifulSoup(page_html, 'html.parser')
sys.stdout=codecs.getwriter("utf-8")(sys.stdout.detach())
print(html)