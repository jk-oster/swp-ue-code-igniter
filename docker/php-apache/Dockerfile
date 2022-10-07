ARG PHP_VERSION

FROM php:$PHP_VERSION-apache

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN apt-get update \
    && docker-php-source extract

RUN a2enmod rewrite
RUN a2enmod headers

COPY vhost.conf /etc/apache2/sites-available/000-default.conf
COPY php.ini /usr/local/etc/php/php.ini
