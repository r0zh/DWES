FROM php:8.2-apache-buster

EXPOSE 80
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo_mysql

RUN a2enmod rewrite
RUN apachectl restart