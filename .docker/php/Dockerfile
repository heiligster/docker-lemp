FROM php:8.0-fpm-alpine
RUN apk update && apk upgrade && apk add \
    build-base \
    php8-dev \
    zip \
    vim \
    unzip \
    git \
    curl
RUN docker-php-ext-install pdo_mysql bcmath opcache
RUN pecl install -f xdebug && docker-php-ext-enable xdebug
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY ./conf.d/opcache.ini $PHP_INI_DIR/conf.d/opcache.ini
RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
