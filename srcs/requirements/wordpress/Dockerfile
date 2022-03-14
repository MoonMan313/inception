FROM debian:buster

RUN apt-get update && \
	apt-get install -y php-fpm php-mysql php7.3 mariadb-client

COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d/

ADD https://ru.wordpress.org/wordpress-5.7.2-ru_RU.tar.gz /var/www/
RUN cd /var/www && tar -xzvf wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz
RUN rm -f /var/www/wordpress/wp-config-sample.php

# RUN mkdir -p ./run/php/ /var/www/html
# RUN mv usr/share/wordpress /var/www/html/wordpress
COPY ./tools/wp-config.php /var/www/wordpress/
# RUN mv /var/www/html/index.html /var/www/html/wordpress/
# RUN rm -rf /var/www/html/wordpress/wp-config-sample.php

# COPY ./tools/wp-config.php ./var/www/html/wordpress/

# COPY ./tools/run_php.sh /
RUN mkdir ./run/php/
EXPOSE 9000
# ENTRYPOINT [ "bash", "/run_php.sh" ]

CMD [ "./usr/sbin/php-fpm7.3", "-F" ]
