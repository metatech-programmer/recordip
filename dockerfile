# Use the official PHP image as the base image
FROM php:8.2-cli

# Install PostgreSQL client and development files
RUN apt-get update && apt-get install -y libpq-dev

# Install additional PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql

# Set the working directory inside the container
WORKDIR /usr/src/recordip

# Copy the application code into the container
COPY . /usr/src/recordip

# Specify the default command to run when the container starts
CMD ["php", "./"]
