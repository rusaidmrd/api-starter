#!/bin/sh
# chmod u+x scripts/reset.sh

echo "\nResetting up project ... \n"

echo "\nClearing the Cache ... \n"

php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear


echo "\nDropping/Recreate database with user seed ... \n"
php artisan migrate:fresh --seed

echo "\nDone :) \n"
