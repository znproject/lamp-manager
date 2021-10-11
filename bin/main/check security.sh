#!/bin/sh

cd ../..
php var/security-checker.phar security:check composer.lock
/home/vitaliy/.symfony/bin/symfony security:check