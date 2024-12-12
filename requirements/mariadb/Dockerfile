
FROM debian:11

# Update package index and install MariaDB server
RUN apt-get update && \
    apt-get install -y mariadb-server
#    systemctl enable mariadb put in seet up script

COPY ./tools/maria-script.sh /

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

RUN chmod 0644 /etc/mysql/mariadb.conf.d/50-server.cnf
RUN chmod 777 /maria-script.sh
# Start MariaDB service
EXPOSE 3306

ENTRYPOINT ["/maria-script.sh"]
CMD ["mysqld_safe"]
