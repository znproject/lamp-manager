#!/bin/sh

cd ../..
ls -l
rm var/sqlite/database.db
cd vendor/bin
/usr/local/php-cgi/7.2/bin/php zn db:migrate:up --withConfirm=0
/usr/local/php-cgi/7.2/bin/php zn db:fixture:import --withConfirm=0
