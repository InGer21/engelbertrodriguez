FROM node:22-alpine AS build
WORKDIR /build

COPY package.json package-lock.json ./
RUN npm ci

COPY resources/ resources/
COPY vite.config.js ./
RUN npm run build

FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    postgresql-dev \
    sqlite-dev \
    nginx \
    supervisor \
    && docker-php-ext-install pdo_pgsql pdo_sqlite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

COPY --from=build /build/public/build public/build

RUN composer install --no-dev --optimize-autoloader \
    && php artisan storage:link \
    && chown -R www-data:www-data storage bootstrap/cache database

COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/entrypoint.sh /entrypoint.sh

RUN mkdir -p /var/log/supervisor /var/run && chmod -R 755 /var/log/supervisor /entrypoint.sh

EXPOSE 80

ENTRYPOINT ["/entrypoint.sh"]
