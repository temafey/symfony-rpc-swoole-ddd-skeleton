FROM php:7.4-cli

RUN apt-get clean
RUN apt-get update

# php settings
ADD conf.ini /usr/local/etc/php/conf.d/
RUN chmod +r /usr/local/etc/php/conf.d/conf.ini

# curl for cmd
RUN apt-get install -y curl

# php extensions

# mcrypt
RUN apt-get install -y libmcrypt-dev

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

# install swoole
#TIP: it always get last stable version of swoole coroutine.
RUN export SWOOLE_VERSION=4.4.17 && cd /tmp && \
    curl -o /tmp/swoole.tgz https://pecl.php.net/get/swoole-${SWOOLE_VERSION}.tgz && \
    tar zxvf swoole.tgz && \
    cd swoole-${SWOOLE_VERSION} && \
    phpize  && \
    ./configure \
    --enable-coroutine \
    --enable-http2  \
    --enable-coroutine-postgresql \
    --enable-async-redis && \
    make && make install && \
    docker-php-ext-enable swoole && \
    echo "swoole.fast_serialize=On" >> /usr/local/etc/php/conf.d/docker-php-ext-swoole-serialize.ini && \
    rm -rf /tmp/*
