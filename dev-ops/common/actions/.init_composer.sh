#!/usr/bin/env bash

composer install --no-interaction --optimize-autoloader --no-suggest

ln -srf vendor/bin/phpunit ./