FROM php:8.3-fpm

WORKDIR /var/www/html

COPY app/ /var/www/html/

EXPOSE 9000

CMD ["php-fpm"]
