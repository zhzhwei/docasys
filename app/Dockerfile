FROM php:5.6.19-apache

RUN apt-get update && \
    apt-get install -y libpng-dev libicu-dev && \
    docker-php-ext-install gd && docker-php-ext-enable gd && \
    docker-php-ext-install mysqli && docker-php-ext-enable mysqli

EXPOSE 80