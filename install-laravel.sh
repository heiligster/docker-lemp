#!/bin/bash
docker compose run --rm php-fpm composer create-project --prefer-dist laravel/laravel tmp '8.*'
docker compose run --rm php-fpm sh -c 'mv -n tmp/.* ./ && mv tmp/* ./ && rm -Rf tmp'
