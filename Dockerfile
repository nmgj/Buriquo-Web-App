FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
  && docker-php-ext-install pdo pdo_pgsql mbstring exif pcntl bcmath gd \
  && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
COPY public/conf/nginx/nginx-site.conf /etc/nginx/conf.d/default.conf

RUN sed -i 's|listen = 9000|listen = /var/run/php-fpm.sock|' /usr/local/etc/php-fpm.d/docker.conf \
  && printf '\nlisten.owner = www-data\nlisten.group = www-data\nlisten.mode = 0660\n' >> /usr/local/etc/php-fpm.d/docker.conf \
  && rm -f /etc/nginx/sites-enabled/default /etc/nginx/sites-available/default
RUN composer install --no-dev --prefer-dist --optimize-autoloader --working-dir=/var/www/html --no-interaction
RUN mkdir -p /var/www/html/storage/database \
  && touch /var/www/html/storage/database/database.sqlite \
  && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/vendor /var/www/html/database \
  && find /var/www/html/storage/database -type d -exec chmod 775 {} \; \
  && find /var/www/html/storage/database -type f -exec chmod 666 {} \;

# Ensure a writable sqlite file exists at /tmp for container environments
RUN touch /tmp/database.sqlite \
  && chown www-data:www-data /tmp/database.sqlite || true \
  && chmod 666 /tmp/database.sqlite || true

RUN chmod +x start.sh

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV COMPOSER_ALLOW_SUPERUSER=1
ENV PORT=10000

CMD ["./start.sh"]
