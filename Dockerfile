#PHP 7 and apache
FROM php:5.6-apache
COPY fqdn.conf /etc/apache2/conf-available/fqdn.conf
EXPOSE 80
RUN apt-get update
RUN apt-get install -y git zip unzip vim libpng12-dev libjpeg-dev libpq-dev libmcrypt-dev php5-mcrypt php5-mysql && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure gd --with-png-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd mysqli opcache

RUN docker-php-ext-install pdo pdo_mysql

# see https://secure.php.net/manual/en/opcache.installation.php
RUN { \
        echo 'opcache.memory_consumption=128'; \
        echo 'opcache.interned_strings_buffer=8'; \
        echo 'opcache.max_accelerated_files=4000'; \
        echo 'opcache.revalidate_freq=2'; \
        echo 'opcache.fast_shutdown=1'; \
        echo 'opcache.enable_cli=1'; \
    } > /usr/local/etc/php/conf.d/opcache-recommended.ini

# install phpredis extension
ENV PHPREDIS_VERSION 3.1.1

RUN mkdir -p /usr/src/php/ext/redis \
    && curl -L https://github.com/phpredis/phpredis/archive/$PHPREDIS_VERSION.tar.gz | tar xvz -C /usr/src/php/ext/redis --strip 1 \
    && echo 'redis' >> /usr/src/php-available-exts \
    && docker-php-ext-install redis

RUN a2enmod rewrite && service apache2 restart
