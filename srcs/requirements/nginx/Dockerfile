FROM debian:buster

RUN apt-get update && apt-get -y upgrade \
	&&	apt-get install -y nginx \
							openssl

RUN	mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:2048 -x509 -nodes -days 365 \
			-out /etc/nginx/ssl/localhost.crt \
			-keyout /etc/nginx/ssl/localhost.key \
			-subj '/C=RU/O=School21/ST=TATARSTAN/L=Kazan/CN=localhost/OU=cdionna'
RUN chmod -R 755 /etc/nginx/ssl/localhost*

COPY ./default.conf /etc/nginx/sites-enabled/default.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
