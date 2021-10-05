FROM php:5.6.19-apache

RUN apt-get update
RUN a2enmod rewrite
RUN apt install -y libpng-dev libicu-dev
RUN apt install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev
RUN apt install -y libxml2-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install json
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install soap
RUN docker-php-ext-install zip

EXPOSE 80