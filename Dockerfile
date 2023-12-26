# Add PHP-Apache base image
FROM php:8.2-apache
# Install common extensions bundled with PHP
RUN docker-php-ext-install mysqli pdo_mysql

WORKDIR /var/www/html

COPY . /var/www/html

RUN echo "### Installing PHP and its Extensions are completed. ###"

# Add Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer 

RUN echo "### Installing Composer is completed. ###" 

EXPOSE 9000

CMD ["php-fpm"]