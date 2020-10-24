#!/bin/sh

#Install composer and run dependencies
if [ ! -f /usr/local/bin/composer ]; then

EXPECTED_SIGNATURE=$(wget -q -O - https://composer.github.io/installer.sig)
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
ACTUAL_SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');")

if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
rm composer-setup.php

sudo mv composer.phar /usr/local/bin/composer

export COMPOSER_HOME=/usr/local/bin/composer

fi

mkdir -p /var/www/html/vendor

sudo chown -R $USER:$USER /var/www/html/vendor

/usr/local/bin/composer install -d /var/www/html --no-ansi --no-dev --no-interaction --no-progress --no-scripts --optimize-autoloader

sudo chown -R apache:apache /var/www/html

sudo chown -R apache:apache /var/www/html

service httpd restart