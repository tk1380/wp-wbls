FROM wordpress:latest

RUN apt-get update \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug
