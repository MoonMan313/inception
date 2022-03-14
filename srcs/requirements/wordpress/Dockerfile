FROM debian:buster

RUN apt-get update && apt-get -y upgrade && \
	apt-get install -y php-fpm wget php-mysql php-mbstring php-gd php-xml wget curl wordpress

RUN mkdir -p ./run/php/ /var/www/html
RUN mv usr/share/wordpress /var/www/html/wordpress
COPY ./tools/wp-config.php /var/www/html/wordpress
RUN mv /var/www/html/index.html /var/www/html/wordpress/
RUN rm -rf /var/www/html/wordpress/wp-config-sample.php

COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d/
COPY ./tools/wp-config.php ./var/www/html/wordpress/

COPY ./tools/run_php.sh /

EXPOSE 9000
ENTRYPOINT [ "bash", "/run_php.sh" ]

CMD [ "./usr/sbin/php-fpm7.3", "-F" ]
