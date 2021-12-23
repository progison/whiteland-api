FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql mbstring; \
    a2enmod rewrite
RUN groupadd agr && usermod -a -G agr www-data