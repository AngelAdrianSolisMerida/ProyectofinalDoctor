# Imagen base con Apache y PHP 8
FROM php:8.2-apache

# Instala extensiones necesarias para PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql

# Copia los archivos del proyecto al directorio web de Apache
COPY . /var/www/html/

# Habilita módulos útiles de Apache
RUN a2enmod rewrite
