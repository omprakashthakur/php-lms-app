# Use the official PHP 8.2 image with Apache
FROM php:8.2-apache

# Install mysqli extension for database connectivity
# docker-php-ext-install is a helper script provided by the base image
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy application source code to the Apache document root
COPY src/ /var/www/html/

# Apache's default port is 80, which is exposed by the base image
# No need to explicitly EXPOSE 80 unless overriding base image settings
