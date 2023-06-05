FROM php:8.0-apache

RUN apt update -y \
        && apt install -y \
            g++ \
            libicu-dev \
            libpq-dev \
            libzip-dev \
            zip \
            zlib1g-dev \
            vim \
        && docker-php-ext-install \
            intl \
            opcache \
            pdo \
            # pdo_pgsql \
            pdo_mysql

WORKDIR /var/www/cutin-finder

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
