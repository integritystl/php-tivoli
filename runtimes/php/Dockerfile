FROM php:8.1-cli as PHP

# Install php extensions
RUN docker-php-ext-install \
        mysqli

# Install pecl extensions
RUN pecl install \
        xdebug

# Configure php
RUN echo "date.timezone = UTC" >> /usr/local/etc/php/php.ini
RUN echo "zend_extension=xdebug" >> /usr/local/etc/php/php.ini

ENV XDEBUG_MODE=coverage 

COPY . /project

WORKDIR /project