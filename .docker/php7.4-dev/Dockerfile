ARG CI_COMMIT_REF_SLUG='master'
ARG CI_SERVICE_NAME

FROM temafey/php7.4-composer

RUN apt-get install -y gnupg
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
RUN pecl install ast
RUN docker-php-ext-enable ast

RUN rm -rf /var/cache/apk/* /var/tmp/* /tmp/*

WORKDIR /app



