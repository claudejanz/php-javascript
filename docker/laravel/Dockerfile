ARG PHP_BASE_IMAGE_VERSION
FROM php:${PHP_BASE_IMAGE_VERSION}
RUN apt-get update 


# Create a symlink for apache (if `/var/www/html` is available)
RUN rm -rf /var/www/html && ln -s /app/public/ /var/www/html || true