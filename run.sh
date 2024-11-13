#!/bin/bash

git pull origin main
composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Deployment complete."
