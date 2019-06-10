# 유튜브 추출 사이트

## 환경

우분투 16.04>=
or 데비안 계열 OS

## youtube-dl 설치

```
sudo wget https://yt-dl.org/downloads/latest/youtube-dl -O /usr/local/bin/youtube-dl
sudo chmod a+rx /usr/local/bin/youtube-dl
```

## service 설치

```
sudo apt-get install -y apache2 php
```

## 프로그램 설치 및 설정

```
cd ~
git clone https://github.com/dydgns2017/youtube_extract
sudo rm -rf /var/www/html
sudo ln -s ~/youtube_extract /var/www/html
sudo chmod 755 ~/youtube_extract/temp
sudo chown www-data: ~/youtube_extract/temp
```
