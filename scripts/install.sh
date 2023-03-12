#!/bin/sh
# chmod u+x scripts/install.sh

echo "\nSetting up project ... \n"

echo "\nClearing the Cache ... \n"

php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear


echo "\nInstalling dependencies ... \n"
composer install --no-interaction

echo "\nDone :) \n"
