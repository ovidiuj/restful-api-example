#!/usr/bin/env bash

cd /app

php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force --env=dev --no-interaction

exec php-fpm