FROM php:7.4-fpm

RUN apt-get update

# php settings
ADD conf.ini /usr/local/etc/php/conf.d/
RUN chmod +r /usr/local/etc/php/conf.d/conf.ini
COPY www.conf /usr/local/etc/php-fpm.d/www.conf

# curl for cmd
RUN apt-get install -y curl

# php extensions

# mcrypt
RUN apt-get install -y libmcrypt-dev
RUN pecl install mcrypt-1.0.3
RUN docker-php-ext-enable mcrypt

# bcmath
RUN docker-php-ext-install bcmath
RUN docker-php-ext-enable bcmath

# sockets
RUN docker-php-ext-install sockets
RUN docker-php-ext-enable sockets

# intl
RUN apt-get install -y libicu-dev
RUN docker-php-ext-install intl
RUN docker-php-ext-enable intl

# opcache
RUN docker-php-ext-install opcache
RUN docker-php-ext-enable opcache

# amqp
RUN apt-get install -y librabbitmq-dev
RUN pecl install amqp
RUN docker-php-ext-enable amqp

# redis
RUN pecl install redis
RUN docker-php-ext-enable redis

# zip
RUN apt-get install -y libzip-dev
RUN docker-php-ext-install zip
RUN docker-php-ext-enable zip

# pdo_pgsql
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-enable pdo_pgsql

# opcache
RUN docker-php-ext-install opcache
RUN docker-php-ext-enable opcache

#composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1

#CMD mkdir /.composer_cache
ENV COMPOSER_CACHE_DIR /.composer_cache

RUN apt-get update --fix-missing
RUN apt-get install -y git unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#boost composer
RUN composer -vvv global require hirak/prestissimo

#develop layer
RUN apt-get install -y gnupg
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN pecl install ast
RUN docker-php-ext-enable ast

RUN rm -rf /var/cache/apk/* /var/tmp/* /tmp/*

WORKDIR /app
