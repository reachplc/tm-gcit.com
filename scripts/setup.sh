#!/bin/sh
#
# Provision the CodeShip environment


# Setup PHP
phpenv local 5.5

# Install PHP dependancies
composer install --no-interaction
./vendor/bin/phpcs --config-set installed_paths /home/rof/src/github.com/trinitymirror/tm-gcit.com/vendor/wp-coding-standards/wpcs/ /home/rof/src/github.com/trinitymirror/tm-gcit.com/vendor/wimg/php-compatibility/
