#!/usr/bin/env bash
echo "Running composer"

composer install --no-dev --working-dir=/var/www/html

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/vendor

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache


echo "Publishing cloudinary provider..."
php artisan vendor:publish --provider="CloudinaryLabs\CloudinaryLaravel\CloudinaryServiceProvider" --tag="cloudinary-laravel-config"