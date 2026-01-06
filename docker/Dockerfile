# docker/Dockerfile (development)
FROM php:8.2-cli

# system deps
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    git curl unzip libzip-dev zlib1g-dev libpng-dev nodejs npm build-essential supervisor ssh \
  && docker-php-ext-install pdo_mysql zip gd \
  && rm -rf /var/lib/apt/lists/*

# composer (copy from official composer image)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# copy only composer files first (cache)
COPY composer.json composer.lock ./
RUN composer install --no-interaction --no-progress --prefer-dist || true

# copy the rest of app
COPY . .

# install node deps (will be re-run if mounted volume overrides)
RUN npm ci || npm install || true

# set permissions for storage & cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# supervisord config
COPY .docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# expose typical ports (artisan & vite)
EXPOSE 9001 5174

# entrypoint: supervisord will start both processes
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
