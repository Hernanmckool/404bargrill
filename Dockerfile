FROM php:8.3-apache

COPY ./docker/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath xml \
    && docker-php-ext-install zip \
    && docker-php-ext-install intl
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
#     && apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#COPY . /var/www/html/
#RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

ENV APACHE_DOCUMENT_ROOT /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
