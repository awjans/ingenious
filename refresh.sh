#!/bin/bash
cd "${0%/*}"
git pull
find -type d -exec chmod -R 755 {} \;
find -type f -exec chmod -R 644 {} \;
chown -R root:www-data php
chmod ug+x refresh.sh
cp apache2/ingenious.partners.conf /etc/apache2/sites-available/ingenious.partners.conf
