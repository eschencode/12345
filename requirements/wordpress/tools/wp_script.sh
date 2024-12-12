#!/bin/bash

wp core download --path=/var/www/html --allow-root

sleep 11

# Check if wp-config.php exists and remove it if it does
if [ -f "/var/www/html/wp-config.php" ]; then
    rm /var/www/html/wp-config.php
fi


# create necessary directories and set permissions not sure exactly which are correct, leaving for now
mkdir -p /run/php
chown -R www-data:www-data /run/php
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html
chmod 777 /var/www/html/wp-content

cd /var/www/html


# create wp-config.php
wp config create --allow-root --dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} --dbpass=${DB_PASSWORD} --dbhost=mariadb

# add authentication keys and salts to wp-config.php
wp config set AUTH_KEY "${WP_AUTH_KEY}" --allow-root
wp config set SECURE_AUTH_KEY "${WP_SECURE_AUTH_KEY}" --allow-root
wp config set LOGGED_IN_KEY "${WP_LOGGED_IN_KEY}" --allow-root
wp config set NONCE_KEY "${WP_NONCE_KEY}" --allow-root
wp config set AUTH_SALT "${WP_AUTH_SALT}" --allow-root
wp config set SECURE_AUTH_SALT "${WP_SECURE_AUTH_SALT}" --allow-root
wp config set LOGGED_IN_SALT "${WP_LOGGED_IN_SALT}" --allow-root
wp config set NONCE_SALT "${WP_NONCE_SALT}" --allow-root

# install WordPress
wp core install --url="${DOMAIN_NAME}" --title="${WP_TITLE}" --admin_user="${WP_ADMIN_USR}" --admin_password="${WP_ADMIN_PWD}" --admin_email="${WP_ADMIN_EMAIL}" --allow-root

# create a new user
wp user create "${WP_USER}" "${WP_USER_EMAIL}" --role=editor --user_pass="${WP_USER_PASS}" --allow-root

#download and install theme
wp theme install impressionist --activate --allow-root
wp config set WP_DEFAULT_THEME 'Impressionist' --type=constant --allow-root
# yield exec to passed args in dockerfile, in this case php-fpm
exec "$@"
