FROM php:8.2-apache

# Instalar extensiones necesarias (mysqli para tu conexión)
RUN docker-php-ext-install mysqli

# Copiar archivos al servidor
COPY . /var/www/html/

# Dar permisos correctos
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80