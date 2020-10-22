#!/bin/bash
chown -R www-data:www-data php
find php -type f -exec chmod 644 {} \;
find php -type d -exec chmod 755 {} \;
chmod -R ug+rwx php/storage php/bootstrap/cache
cp apache2/ingenious.partners.conf /etc/apache2/sites-available/ingenious.partners.conf
