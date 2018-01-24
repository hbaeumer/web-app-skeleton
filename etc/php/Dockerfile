FROM php:7.2-fpm

RUN apt-get update && apt-get install -y \
    zip libxml2-dev

RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    xml

RUN	apt-get update && \
	apt-get install -y curl openssl && \
	curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
	chmod +x /usr/local/bin/composer

WORKDIR /var/www/html
