FROM php:7.2-apache
RUN apt-get update && docker-php-ext-install mysqli && docker-php-ext-enable mysqli