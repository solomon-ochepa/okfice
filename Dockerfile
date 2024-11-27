# This helps keep our Dockerfiles DRY -> https://bit.ly/dry-code
# You can see a list of required extensions for Laravel here: https://laravel.com/docs/11.x/deployment#server-requirements

################################
# Build arguments
################################
# Define the build arguments with default values
ARG PHPIZE_DEPS="libpng-dev libjpeg-dev libfreetype6-dev libicu-dev libzip-dev vim git zip unzip jq libssl-dev wget sudo lsb-release systemctl default-mysql-client"
ARG PHP_EXTS="pdo pdo_mysql mysqli zip ftp"
ARG PHP_PECL_EXTS=""
ARG APP_ENV="local"

#-------- --------

# Use the official PHP 8.2 Apache image as the base image
FROM php:8.2-apache

ARG WWWGROUP
ARG PHPIZE_DEPS
ARG PHP_EXTS
ARG PHP_PECL_EXTS
ARG APP_ENV

################################
# Environment variables
################################
# Set the build argument as an environment variable
ENV APP_ENV=${APP_ENV}
ENV COMPOSER_ALLOW_SUPERUSER=1

# Set the working directory in the container (Contains the composer.json file)
WORKDIR /var/www/html/

# Enable Apache modules
RUN a2enmod rewrite

################################
# System dependencies
################################
# Install system dependencies and PHP extensions with retries
RUN apt-get clean && apt-get update && apt-get upgrade -y && \
    dpkg --configure -a && \
    for i in 1 2 3; do apt-get install -y --fix-missing ${PHPIZE_DEPS} ca-certificates && break || sleep 5; done && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-configure intl && \
    docker-php-ext-configure ftp --with-openssl-dir=/usr && \
    if [ -n "$PHP_EXTS" ]; then \
        docker-php-ext-install -j$(nproc) ${PHP_EXTS}; \
    fi && \
    if [ -n "$PHP_PECL_EXTS" ]; then \
        pecl install ${PHP_PECL_EXTS} && \
        docker-php-ext-enable ${PHP_PECL_EXTS}; \
    fi

# Install Node.js
RUN curl -sL https://deb.nodesource.com/setup_current.x | bash - && \
    apt-get install -y nodejs

# Check for the latest version of npm and install the preceding version
RUN latest_npm_version=$(npm view npm version) && \
    echo "Latest npm version: $latest_npm_version" && \
    previous_npm_version=$(npm view npm versions --json | jq --arg latest "$latest_npm_version" -r '. | map(select(test("^" + ($latest | gsub("[0-9]+$";"")))))[-2]') && \
    echo "Previous npm version: $previous_npm_version" && \
    npm install -g npm@$latest_npm_version
    #npm install -g npm@$previous_npm_version

# Install Vite - NodeJS Packages
RUN npm install -g vite

# Clean up apt-get cache
RUN if [ "$APP_ENV" != "local" ]; then \
        apt-get clean; \
    fi

################################
# Source code
################################
# Copy the application files to the container
COPY . /var/www/html/

################################
# Configurations
################################
COPY php.ini /usr/local/etc/php/php.ini

# .env -  Conditional copying based on build argument
RUN if [ "$APP_ENV" = "local-dev" ]; then \
        cp .env.dev .env; \
    elif [ "$APP_ENV" = "local-prod" ]; then \
        cp .env.prod .env; \
    fi

################################
# Dependencies
################################
# Install Composer (PHP package manager)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install dependencies using Composer
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Install & Build Node.js packages
RUN npm install && \
    npm run build

################################
# Laravel - App Setup
################################
# Generate application key
RUN php artisan key:generate

# Storage link
RUN php artisan storage:link --force

# Publish Telescope assets
RUN php artisan vendor:publish --tag=telescope-assets --force

# Clear cached bootstrap files
RUN php artisan clear-compiled && \
    php artisan config:clear && \
    php artisan event:clear && \
    php artisan route:clear && \
    php artisan view:clear

################################
# Path Permissions
################################
RUN if [ "$APP_ENV" = "local" ]; then \
        groupadd --force -g $WWWGROUP sail; \
        useradd -ms /bin/bash --no-user-group -g $WWWGROUP -u 1337 sail; \
    fi

# Setting file permissions to run Laravel
RUN chown -R www-data:www-data /var/www/html/

# ################################
# # Wazuh Security
# ################################
# # Setup Wazuh Security Agent
# RUN if [ "$APP_ENV" != "local" ]; then \
#         wget https://packages.wazuh.com/4.x/apt/pool/main/w/wazuh-agent/wazuh-agent_4.7.5-1_amd64.deb; \
#     fi

# RUN if [ "$APP_ENV" = "dev" ]; then \
#         WAZUH_MANAGER='cyber.ignition633.org' WAZUH_AGENT_NAME='DEVCagingApp' dpkg -i ./wazuh-agent_4.7.5-1_amd64.deb; \
#     elif [ "$APP_ENV" = "prod" ]; then \
#         WAZUH_MANAGER='cyber.ignition633.org' WAZUH_AGENT_NAME='PRODCagingApp' dpkg -i ./wazuh-agent_4.7.5-1_amd64.deb; \
#     fi

# RUN if [ "$APP_ENV" != "local" ]; then \
#         sudo systemctl daemon-reload && \
#         sudo systemctl enable wazuh-agent && \
#         sudo systemctl start wazuh-agent; \
#     fi
