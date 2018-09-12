ARG PHP_BASE_IMAGE_VERSION
FROM php:${PHP_BASE_IMAGE_VERSION}

# Enable mod_rewrite
RUN a2enmod rewrite

# Install Imagemagick & PHP Imagick ext
RUN apt-get update && apt-get install -y \
        libmagickwand-dev --no-install-recommends

RUN pecl install imagick && docker-php-ext-enable imagick

# Install mysqli pdo pdo_mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Create a symlink for apache (if `/var/www/html` is available)
RUN rm -rf /var/www/html && ln -s /app/public/ /var/www/html || true