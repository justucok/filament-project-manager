FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    zip \
    unzip \
    libpq-dev \
    nodejs \
    npm && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-configure intl && \
    docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd intl zip

ENV COMPOSER_ALLOW_SUPERUSER=1

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing application directory contents
COPY . /var/www

# Copy .env.example to .env so artisan scripts don't fail during composer install
RUN cp .env.example .env

# Set composer memory limit
ENV COMPOSER_MEMORY_LIMIT=-1

# Install composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Install NPM dependencies & build
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Run migration and start PHP dev server (untuk Render port otomatis diset di $PORT)
CMD php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force --seed && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
