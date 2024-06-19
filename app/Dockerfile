FROM php:5.6.19-apache

# Rewrite the sources.list to use archived sources and update
RUN echo "deb http://archive.debian.org/debian jessie main contrib non-free" > /etc/apt/sources.list \
    && echo "deb http://archive.debian.org/debian-security jessie/updates main" >> /etc/apt/sources.list \
    && echo 'Acquire::Check-Valid-Until "false";' > /etc/apt/apt.conf.d/10no--check-valid-until \
    && echo 'Acquire::Check-Date "false";' >> /etc/apt/apt.conf.d/10no--check-valid-until \
    && apt-get update \
    && apt-get install -y --allow-unauthenticated \
       libpng-dev libicu-dev libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libxml2-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configure and install PHP extensions
RUN a2enmod rewrite \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd json mysqli soap zip

EXPOSE 80