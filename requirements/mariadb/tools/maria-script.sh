#!/bin/bash

echo "strating mariaDB"

service mariadb start

#wait for maria to boot
while ! mysqladmin ping --silent; do
	echo "waiting for maria tobe ready..."
	sleep 3
done

sleep 7 #allways sleep a bit longer just to be safe

#ste up USER if not exist
mysql -u root -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"
mysql -u root -e "CREATE USER IF NOT EXISTS '${MYSQL_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -u root -e "GRANT ALL PRIVILEGES ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%';"
mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PASSWORD}';"


# USE wordpress; SH
# Shutdown MariaDB

mysqladmin -u root -p"${DB_ROOT_PASSWORD}" shutdown

# replaces bash process with next command passed as args, in this case mysql-safe
exec "$@"
