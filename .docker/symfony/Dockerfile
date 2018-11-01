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

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
        php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
        php composer-setup.php --install-dir=/usr/bin --filename=composer && \
        php -r "unlink('composer-setup.php');"

# Create a symlink for apache (if `/var/www/html` is available)
RUN rm -rf /var/www/html && ln -s /app/public/ /var/www/html || true