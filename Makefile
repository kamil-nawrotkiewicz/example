up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose up -d --build

sh:
	docker exec -it example_php sh

symfony-sh:
	docker exec -it example_php sh