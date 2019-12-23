#!/bin/bash
sudo apt update
sudo apt upgrade -y
sudo apt -y install lsb-release apt-transport-https ca-certificates
sudo wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | sudo tee /etc/apt/sources.list.d/php7.3.list
sudo apt update
sudo debconf-set-selections <<< "postfix postfix/mailname string ingenious.partners"
sudo debconf-set-selections <<< "postfix postfix/main_mailer_type string 'Internet Site'"
sudo apt -y install ufw apache2 mariadb-server php7.3 postfix dovecot-core dovecot-imapd composer certbot python-certbot-apache php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql php7.3-zip php7.3-gd php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath libapache2-mod-php7.3
sudo ufw enable
sudo ufw allow 'WWW Full'
sudo ufw allow 'OpenSSH'
sudo ufw allow 'SMTP'
sudo ufw allow 'IMAPS'
sudo mkdir /src
sudo git clone https://github.com/awjans/ingenious.git /src/ingenious
sudo chmod ug+x /src/ingenious/refresh.sh
sudo /src/ingenious/refresh.sh
sudo ln -s /src/ingenious/php/public /var/www/ingenious
sudo a2enmod ssl
sudo a2ensite ingenious.partners
sudo certbot run -n --apache --agree-tos --email webmaster@jans.org --domains ingenious.partners,www.ingenious.partners
sudo systemctl restart apache2
