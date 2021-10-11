#!/bin/sh
ssh kimvovq5_backend@kimvovq5.beget.tech
cd ~/kimvovq5.beget.tech/vendor/bin
/usr/local/php-cgi/7.2/bin/php zn package:git:pull
cd ../..
git pull


cd ~/kimvovq5.beget.tech/vendor/bin
/usr/local/php-cgi/7.2/bin/php zn db:migrate:up --withConfirm=0
/usr/local/php-cgi/7.2/bin/php zn db:fixture:import --withConfirm=0
