Backend RPC Api
============
 Backend RPC service. Part of the microservice core that contains business logic.

## Implementations

- [x] Environment in Docker
- [x] Command Bus, Event Bus
- [x] Event Store
- [x] Read Model
- [x] Async Event subscribers

## Stack

- PHP 7.4
- PostgreSQL 11
- RabbitMQ 3

## Project Setup

Up new environment:

`make install`

Execute tests:

`make phpunit`

Static code analysis:

`make style`

Code style fixer:

`make coding-standards-fixer`

Code style checker:

`make coding-standards`

Enter in php container:

`make php-shell`

Make release commit

`make release`

Make conventional commit,
read specs https://www.conventionalcommits.org/en/v1.0.0-beta.2

`make commit`

Watch containers logs

`make logs`

See all make commands

`make help`

Full test circle

`make test`
