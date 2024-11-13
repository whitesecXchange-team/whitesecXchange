#!/bin/bash

git pull origin main

if [ ! -f .env ]; then
    echo ".env file not found. Creating it from .env.example..."
    cp .env.example .env
    echo ".env file created successfully."
else
    echo ".env file already exists. Skipping creation."
fi


composer install --optimize-autoloader --no-dev
php artisan key:generate
php artisan migrate:fresh --force
php artisan storage:link
php artisan config:cache
php artisan route:cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Deployment complete."
