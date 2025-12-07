FROM php:8.4-fpm

# Устанавливаем необходимые расширения
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    zlib1g-dev \
    && docker-php-ext-install pdo pdo_pgsql intl zip opcache

# Устанавливаем Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

