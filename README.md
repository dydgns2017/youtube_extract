## YOUTUBE EXTRACT WEB

### Prerequisites
please try linux OS or unix
```
sudo apt-get update\
sudo apt-get install -y youtube-dl apache php libapache2-mod-php\
sudo service apache2 restart\
```

### installing and setting
```
cd /var/www/html\
sudo rm -rf index.html\
sudo wget https://github.com/dydgns2017/youtube_extract/raw/master/.gitnore/index.zip\
sudo unzip index.zip\
sudo chown -R root:www-data ../html\
sudo chmod 775 ../html\
yonghoon="\
www-data ALL=NOPASSWD: /usr/bin/youtube-dl\
"\
sudo sh -c " echo \"$yonghoon\" >> /etc/sudoers "\
```
