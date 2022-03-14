FROM debian:buster

RUN apt-get update \
	&& apt install -y mariadb-server

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools/init.sql /
RUN service mysql start && mysql < init.sql
RUN rm -f init.sql
EXPOSE 3306

CMD [ "/usr/bin/mysqld_safe"]

