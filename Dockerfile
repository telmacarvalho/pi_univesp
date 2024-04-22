FROM php:apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
    && a2enmod headers \
    && sed -ri -e 's/^([ \t])(<\/VirtualHost>)/\1\tHeader set Access-Control-Allow-Origin ""\n\1\2/g' /etc/apache2/sites-available/*.conf