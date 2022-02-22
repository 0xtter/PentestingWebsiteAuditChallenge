FROM php:7-fpm
RUN apt-get update && apt-get install
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli
