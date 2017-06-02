# Initial install
install: build up composer-install npm-install

# Docker container management
up:
	docker-compose up -d --remove-orphans

down:
	docker-compose down

build:
	docker-compose build

docker-ip-alias:
	sudo ifconfig en0 alias 203.0.113.0 255.255.255.0

# Symfony helpers
assets:
	docker exec php bin/console assets:install

check:
	docker exec php bin/symfony_requirements

cache-clear:
	docker exec php bin/console cache:clear

schema-update:
	docker exec php bin/console doctrine:schema:update

schema-update-force:
	docker exec php bin/console doctrine:schema:update -f

shell:
	docker exec -it php /bin/sh

# Compose: dependency management
composer-install:
	docker-compose run composer install

composer-update:
	docker-compose run composer update

# Node JS dependencies
npm-install:
	yarn

# Holding off until a container is ready.
#npm-install:
#    docker-compose run --rm --no-deps node bash -ci 'npm install'
