ARG CI_COMMIT_REF_SLUG='master'
ARG CI_SERVICE_NAME

FROM temafey/php7.4-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1

#CMD mkdir /.composer_cache
ENV COMPOSER_CACHE_DIR /.composer_cache

RUN apt-get update --fix-missing
RUN apt-get install -y git unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#boost composer
RUN composer -vvv global require hirak/prestissimo
