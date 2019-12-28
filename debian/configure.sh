#!/bin/bash
# Change to Directory the Script is located in so we can use relative paths
# where it makes sense
cd "${0%/*}"

# Do something all configury
# Add the PHP 7.3 Debian Repositories
apt -y install lsb-release apt-transport-https ca-certificates
a2ensite ingenious.partners
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php7.3.list
apt update

# Set the DebConf Variables for an unattended install of Postfix
debconf-set-selections <<< "postfix postfix/mailname string ingenious.partners"
debconf-set-selections <<< "postfix postfix/main_mailer_type string 'Internet Site'"

# Install the Debian Packages we need
apt -y install apache2 mariadb-server php7.3 postfix dovecot-core dovecot-imapd composer certbot python-certbot-apache php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql php7.3-zip php7.3-gd php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath libapache2-mod-php7.3

# Set Permissions on the Directories and Files
find .. -type d -exec chmod 755 {} \;
find .. -type f -exec chmod 644 {} \;
chown -R root:www-data ../php

# Setup the Apache Site
cp ../apache2/ingenious.partners.conf /etc/apache2/sites-available/ingenious.partners.conf
a2ensite ingenious.partners

# Enable the required Apache Modules
a2enmod ssl

# Get Let's Encrypt SSL Certificates and Keys
certbot certonly -n --apache --agree-tos --email webmaster@jans.org --domains ingenious.partners,www.ingenious.partners,mail.ingenious.partners

# Restart Apache
systemctl restart apache2
