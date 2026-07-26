# Stage 1: Build composer dependencies
FROM composer:2.7 as vendor
WORKDIR /app

# Copy composer files
COPY composer.json composer.json
COPY composer.lock composer.lock

# Install dependencies ignoring platform requirements for now
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-scripts \
    --prefer-dist \
    --no-dev \
    --optimize-autoloader

# Stage 2: Build Node dependencies
FROM node:20 as frontend
WORKDIR /app
COPY package.json package-lock.json vite.config.js ./
COPY resources/ resources/
RUN npm ci
RUN npm run build

# Stage 3: Final Image
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    libpq-dev \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-configure intl && \
    docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd intl zip

# Set working directory
WORKDIR /var/www

# Copy the application code
COPY . /var/www

# Copy vendor and node_modules/build from previous stages
COPY --from=vendor /app/vendor/ /var/www/vendor/
COPY --from=frontend /app/public/build/ /var/www/public/build/

# Ensure .env exists
RUN cp .env.example .env

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Run package discovery and artisan commands on startup, then serve
CMD php artisan package:discover --ansi && \
    php artisan filament:upgrade && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force --seed && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
