up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose up -d --build

sh-php:
	docker exec -it example_php sh

sh-nginx:
	docker exec -it example_php sh
