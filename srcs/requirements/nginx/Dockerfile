FROM debian:buster

RUN apt-get update && apt-get -y upgrade \
	&&	apt-get install -y nginx \
							openssl

RUN	mkdir key
RUN openssl req -newkey rsa:2048 -x509 -nodes -days 365 \
			-out /key/localhost.crt \
			-keyout /key/localhost.key \
			-subj '/C=RU/O=School21/ST=TATARSTAN/L=Kazan/CN=localhost/OU=cdionna'

COPY ./default.conf /etc/nginx/sites-enabled/default.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
