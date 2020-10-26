#!/bin/sh

cd ../..

cd vendor/znlib/migration/bin
php console db:migrate:down --withConfirm=0
php console db:migrate:up --withConfirm=0
cd ../../../..

cd vendor/znlib/fixture/bin
php console db:fixture:import --withConfirm=0
