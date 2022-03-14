FROM debian:buster

RUN apt-get update && apt-get -y upgrade \
	&&	apt-get install -y nginx \
							openssl

RUN openssl req -newkey rsa:2048 -x509 -nodes -days 365 \
			-out /etc/ssl/localhost.crt \
			-keyout /etc/ssl/localhost.key \
			-subj '/C=RU/O=School21/ST=TATARSTAN/L=Kazan/CN=localhost/OU=cdionna'

COPY ./default /etc/nginx/sites-enabled/default

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
