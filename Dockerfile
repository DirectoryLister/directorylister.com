# Install PHP dependencies
FROM composer:1.10 AS php-dependencies
COPY . /app

# Install and compile JavaScript assets
FROM node:13.2 AS js-dependencies
ARG FONT_AWESOME_TOKEN
COPY --from=php-dependencies /app /app
RUN cd /app && npm install && npm run production

# Build application image
FROM php:7.4-apache as application
LABEL maintainer="Chris Kankiewicz <Chris@ChrisKankiewicz.com>"

COPY --from=js-dependencies /app /var/www/html

RUN apt-get update && apt-get install -y libxml2-dev zlib1g-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install bcmath pdo_mysql \
    && pecl install redis && docker-php-ext-enable redis

RUN a2enmod rewrite

# Build (local) development image
FROM application as development

COPY ./.docker/php/config/php.dev.ini /usr/local/etc/php/php.ini
COPY ./.docker/apache2/config/000-default.dev.conf /etc/apache2/sites-available/000-default.conf

RUN pecl install xdebug && docker-php-ext-enable xdebug

# Build production image
FROM application as production

COPY ./.docker/php/config/php.prd.ini /usr/local/etc/php/php.ini
COPY ./.docker/apache2/config/000-default.prd.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install opcache
