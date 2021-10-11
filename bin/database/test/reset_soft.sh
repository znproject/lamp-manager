#!/bin/sh
cd ../../../vendor/bin
php zn db:migrate:down --withConfirm=0 --env=test
php zn db:migrate:up --withConfirm=0 --env=test
php zn db:fixture:import --withConfirm=0 --env=test