container_php = php-laravel
container_db = mysql-laravel
container_server = nginx-laravel


composer_dep: #install composer dependency >> ./vendors
	@docker run --rm -v $(CURDIR):/php composer install

laravel_install: #Create new Laravel project
	@docker-compose exec $(container_php) composer create-project --prefer-dist laravel/laravel .

key: #generate APP key
	@docker-compose exec $(container_php) php artisan key:generate

ownership: #Set ownership
	@sudo chown $(USER):$(USER) . -R


start: #start docker containers @docker-compose up -d
	@docker-compose up -d

build: #build docker container @docker-compose build
	@docker-compose build

stop: #stop docker containers
	@docker-compose down

show: #show docker's containers
	@sudo docker ps

connect_php: #Connect to APP container
	@docker exec -it $(container_php) bash

connect_db: #Connect to DB container
	@docker exec -it $(container_db) bash

connect_server: #Connect to container_server container
	@docker exec -it $(container_server) /bin/sh
