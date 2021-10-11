#!/bin/sh

cd ..
php console db:migrate:down --withConfirm=0 --env=test
php console db:migrate:up --withConfirm=0 --env=test
cd ..

#chmod -R a+rw var
#rm -rf var/cache/test/*
#rm var/log/test.log

php vendor/phpunit/phpunit/phpunit