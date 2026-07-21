# --- Build stage: composer dependencies ---
FROM composer:2 AS composer_stage
WORKDIR /app
COPY composer.json composer.lock* ./
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist --optimize-autoloader
COPY . .
RUN composer dump-autoload --optimize --no-dev

# --- Runtime stage: PHP + Apache ---
FROM php:8.3-apache

# Apache: enable mod_rewrite en zet public/ als document root
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# PHP extensies die Symfony nodig heeft
RUN docker-php-ext-install pdo pdo_mysql opcache

WORKDIR /var/www/html
COPY --from=composer_stage /app ./

# Rechten zetten voor cache/log directories
RUN mkdir -p var/cache var/log \
    && chown -R www-data:www-data var

ENV APP_ENV=prod
ENV APP_DEBUG=0

EXPOSE 80
CMD ["apache2-foreground"]
