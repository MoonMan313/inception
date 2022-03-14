FROM debian:buster

RUN apt-get update \
	&& apt install -y mariadb-server

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
RUN chmod 744 /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./tools/run_mariadb.sh /bin/run_mariadb.sh

EXPOSE 3306

ENTRYPOINT [ "bash", "/bin/run_mariadb.sh"]

