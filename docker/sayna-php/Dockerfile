FROM php:7.4-fpm-alpine
RUN rm -rf /var/cache/apk/* && \
    rm -rf /tmp/*
RUN apk update && \
    apk upgrade && \
    apk add git libmemcached-dev zlib-dev pcre-dev ${PHPIZE_DEPS} oniguruma-dev icu-dev npm libxml2-dev libzip-dev nano libpng-dev && \
    pecl install memcached-3.1.5

RUN docker-php-ext-install mbstring tokenizer mysqli pdo_mysql intl ctype bcmath fileinfo json pdo xml zip gd && \
docker-php-ext-enable memcached && \
apk del pcre-dev ${PHPIZE_DEPS}

#composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV PATH ~/.composer/vendor/bin:$PATH
RUN ln -sf /bin/bash /bin/ash
