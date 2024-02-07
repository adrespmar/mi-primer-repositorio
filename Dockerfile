#Utiliza una imagen base con PHP y Apche
FROM php:7.2-apache
COPY ./ /var/www/html/
RUN docker-php-ext-install mysqli
