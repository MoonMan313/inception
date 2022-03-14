DOCK=srcs/docker-compose.yml

all: create_dir build up


create_dir:
		mkdir -p /home/${USER}/data/wordpress
		mkdir -p /home/${USER}/data/mariadb

build:
		docker-compose -f $(DOCK) build

up:
		docker-compose -f $(DOCK) up
		say "EEEEEEEEEEEEEEEEEEEEEE"

down:
		docker-compose -f $(DOCK) down

stop:
		docker stop $$(docker ps -aq)
		docker rm $$(docker ps -aq)

fclean:
		docker stop $$(docker ps -aq)
		docker rm $$(docker ps -aq)
		docker rmi $$(docker images -aq) -f
		docker volume rm $$(docker volume ls -q)
		sudo rm -rf ../../data/mariadb ../../data/wordpress
		docker volume rm srcs_mariadb srcs_wordpress -f
