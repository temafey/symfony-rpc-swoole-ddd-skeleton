include .env
export

RUN_ARGS = $(filter-out $@,$(MAKECMDGOALS))

include .make/utils.mk
include .make/docker-compose-shared-services.mk
include .make/composer.mk
include .make/static-analysis.mk

.PHONY: install
install: erase build shared-service-up up wait setup ## clean current environment, recreate dependencies and spin up again

.PHONY: start up-services
up: ##up-services ## spin up environment
	docker-compose up -d

.PHONY: start services
up-services: shared-service-up ## up shared services

.PHONY: stop services
stop-services: shared-service-stop ## stop shared services

.PHONY: stop
stop: ## stop environment
	docker-compose stop

.PHONY: erase
erase: ## stop and delete containers, clean volumes.
	docker-compose stop
	docker-compose rm -v -f

.PHONY: build
build: ## build environment and initialize composer and project dependencies
	docker-compose build
	docker-compose run --rm --no-deps php sh -lc 'composer install'

.PHONY: composer-preload
composer-preload: ## Generate preload config file
	docker-compose run --rm --no-deps php sh -lc 'composer preload'

.PHONY: setup
setup: setup-enqueue setup-db ## build environment and initialize composer and project dependencies

.PHONY: setup-db
setup-db: ## recreate database
	docker-compose run --rm php sh -lc './bin/console d:d:d --force --if-exists'
	docker-compose run --rm php sh -lc './bin/console d:d:c'
	docker-compose run --rm php sh -lc './bin/console d:m:m -n'

.PHONY: setup-enqueue
setup-enqueue: ## setup enqueue
	docker-compose run --rm php sh -lc './bin/console enqueue:setup-broker -c task'
	docker-compose run --rm php sh -lc './bin/console enqueue:setup-broker -c taskevent'

.PHONY: clear-events
clear-events: ## setup enqueue
	docker-compose run --rm php sh -lc './bin/console cleaner:clear db'

.PHONY: schema-validate
schema-validate: ## validate database schema
	docker-compose run --rm php sh -lc './bin/console d:s:v'

.PHONY: migration-generate
migration-generate: ## generate new database migration
	docker-compose run --rm php sh -lc './bin/console d:m:g'

.PHONY: migration-migrate
migration-migrate: ## run database migration
	docker-compose run --rm php sh -lc './bin/console d:m:m'

.PHONY: php-shell
php-shell: ## PHP shell
	docker-compose run --rm php sh -l

.PHONY: php-test
php-test: ## PHP shell without deps
	docker-compose run --rm --no-deps php sh -l

.PHONY: clean
clean: ## Clear build vendor report folders
	rm -rf build/ vendor/ var/

.PHONY: test static-analysis coding-standards tests-unit tests-integration composer-validate
test: install static-analysis coding-standards tests-unit tests-integration composer-validate stop ## Run all test suites
