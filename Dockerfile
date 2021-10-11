FROM php:7.4.3-fpm

COPY . /var/www/html
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y --no-install-recommends \
  zip \
  unzip \
  libicu-dev \
  libpq-dev

RUN docker-php-ext-install intl pdo pdo_pgsql

#Для разработчиков
#RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

#Будет работать, когда пакеты обновят
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install
RUN composer up

# Permissions
#RUN chown -R root:www-data /var/www/html
#RUN chmod u+rwx,g+rx,o+rx /var/www/html
#RUN find /var/www/html -type d -exec chmod u+rwx,g+rx,o+rx {} +
#RUN find /var/www/html -type f -exec chmod u+rw,g+rw,o+r {} +
