up:
	docker-compose up -d

down:
	docker-compose down

sh:
	docker exec -it example_php sh

cc:
	docker exec -it example_php bin/console cache:clear

md:
	docker exec -it example_php bin/console doctrine:migrations:diff

mm:
	docker exec -it example_php bin/console doctrine:migrations:migrate

fixtures:
	docker exec -it example_php bin/console doctrine:fixtures:load --append

composer-install:
	docker exec -it example_php composer install
