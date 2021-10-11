#!/bin/sh
cd ../../../vendor/bin
php zn db:database:drop --withConfirm=0 --env=test
php zn db:migrate:up --withConfirm=0 --env=test
php zn db:fixture:import --withConfirm=0 --env=test