FROM php:8.0.16-apache
LABEL maintainer="Nam Luu"
COPY .docker/php/php.ini $PHP_INI_DIR
COPY . /var/www/html
COPY .docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install opcache \
    # apache
    && a2enmod rewrite negotiation \
    # xdebug
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    # composer
    && apt-get -yqq update \
    && apt-get -yqq install --no-install-recommends unzip \
    && curl -sS https://getcomposer.org/installer \
    | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer


COPY .docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
COPY .docker/php/xdebug-dev.ini /usr/local/etc/php/conf.d/xdebug-dev.ini

ARG USER_ID=1000
ARG GROUP_ID=1000

RUN userdel -f www-data &&\
    if getent group www-data ; then groupdel www-data; fi &&\
    groupadd -g ${GROUP_ID} www-data &&\
    useradd -l -u ${USER_ID} -g www-data www-data
        
USER www-data

