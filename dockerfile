# Use the official PHP image as the base image
FROM php:8.2-apache

# Enable Apache modules
RUN a2enmod rewrite

# Install PostgreSQL client and development files
RUN apt-get update && apt-get install -y libpq-dev

# Install additional PHP extensions if needed
RUN docker-php-ext-install pdo pdo_pgsql

# Set the working directory inside the container
WORKDIR /var/www/html

# Create a directory for your application code
RUN mkdir app

# Copy the application code into the container's app directory
COPY ./ /var/www/html/app

# Optionally, if you have a specific entry point script (e.g., index.php), you can set it here
#CMD ["php", "/var/www/html/app/index.php"]
