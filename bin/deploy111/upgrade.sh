#!/bin/sh

cd ../..
ls -l
git pull
composer install --ignore-platform-reqs
