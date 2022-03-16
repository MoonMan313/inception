FROM debian:buster

RUN apt-get update &&  \
	apt-get install -y php-fpm php-mysql php7.3 mariadb-client 

COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d/

ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
RUN cd /var/www && tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress/wp-config-sample.php
COPY ./tools/wp-config.php /var/www/wordpress/

RUN mkdir ./run/php/ 

EXPOSE 9000

CMD [ "/usr/sbin/php-fpm7.3", "-F" ]
