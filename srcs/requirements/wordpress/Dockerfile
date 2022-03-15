FROM debian:buster

RUN apt-get update && \
	apt-get install -y php-fpm php-mysql php7.3 mariadb-client 

COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d/www.conf

ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
RUN cd /var/www && tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress/wp-config-sample.php

RUN chown -R www-data:www-data /var/www/wordpress/* && \
	chmod -R 775 /var/www/wordpress/*

COPY ./tools/wp-config.php /var/www/wordpress/wp-config.php

RUN mkdir ./run/php/ &&\
	chmod -R 775 ./run/php/

EXPOSE 9000

CMD [ "./usr/sbin/php-fpm7.3", "-F" ]
