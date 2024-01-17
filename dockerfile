<<<<<<< HEAD
# Utilizar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Actualizar índices de paquetes y instalar dependencias
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libpq-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_pgsql

# Limpiar el sistema para reducir el tamaño de la imagen
RUN rm -rf /tmp/* /var/tmp/*

# Exponer el puerto 80 para el servidor Apache
EXPOSE 80

# CMD ["apache2-foreground"] # Descomentar si no se está utilizando una configuración personalizada de Apache
=======
# Utilizar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Actualizar índices de paquetes y instalar dependencias
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libpq-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo pdo_pgsql

# Limpiar el sistema para reducir el tamaño de la imagen
RUN rm -rf /tmp/* /var/tmp/*

# Exponer el puerto 80 para el servidor Apache
EXPOSE 80

# CMD ["apache2-foreground"] # Descomentar si no se está utilizando una configuración personalizada de Apache
>>>>>>> 3af5b5a7b7323ad005b11fdcb45832df85278acc
