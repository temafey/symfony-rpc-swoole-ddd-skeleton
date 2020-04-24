sources = bin/console config src
version = $(shell git describe --tags --dirty --always)
build_name = application-$(version)
# use the rest as arguments for "run"
#RUN_ARGS := $(wordlist 2,$(words $(MAKECMDGOALS)),$(MAKECMDGOALS))
# ...and turn them into do-nothing targets
#$(eval $(RUN_ARGS):;@:)

# Default parallelism
JOBS=$(shell nproc)

.PHONY: fix-permission
fix-permission: ## fix permission for docker env
	echo chown -R $(shell whoami):$(shell whoami) *
	echo chown -R $(shell whoami):$(shell whoami) .docker/*
	echo chmod +x ./bin/console

wait:
ifeq ($(OS),Windows_NT)
	timeout 5
else
	sleep 5
endif

.PHONY: help
help: ## Display this help message
	@cat $(MAKEFILE_LIST) | grep -e "^[a-zA-Z_\-]*: *.*## *" | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: console
console: ## execute symfony console command
	docker-compose run --rm php sh -lc "./bin/console $(RUN_ARGS)"
