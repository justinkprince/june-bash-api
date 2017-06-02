FROM php:7-fpm-alpine

# persistent / runtime deps
ENV PHPIZE_DEPS \
    autoconf \
    cmake \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    git \
    pkgconf \
    re2c \
    curl \
    nano

RUN apk add --no-cache --virtual .persistent-deps \
    # for intl extension
    icu-dev \
    # for mcrypt extension
    libmcrypt-dev

RUN set -xe \
    && apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        openssl-dev \
    && docker-php-ext-configure bcmath --enable-bcmath \
    && docker-php-ext-configure intl --enable-intl \
    && docker-php-ext-configure pcntl --enable-pcntl \
    && docker-php-ext-configure mbstring --enable-mbstring \
    && docker-php-ext-install \
        bcmath \
        intl \
        mcrypt \
        pcntl \
        mbstring \
        opcache \
        pdo \
        pdo_mysql \
    && pecl install xdebug \
    && apk del .build-deps \
    && rm -rf /tmp/* \
    && rm -rf /var/www \
    && mkdir -p /var/www/app \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Possible values for ext-name:
# bcmath bz2 calendar ctype curl dba dom enchant exif fileinfo filter ftp gd gettext gmp hash iconv imap interbase intl
# json ldap mbstring mcrypt mssql mysql mysqli oci8 odbc opcache pcntl pdo pdo_dblib pdo_firebird pdo_mysql pdo_oci
# pdo_odbc pdo_pgsql pdo_sqlite pgsql phar posix pspell readline recode reflection session shmop simplexml snmp soap
# sockets spl standard sybase_ct sysvmsg sysvsem sysvshm tidy tokenizer wddx xml xmlreader xmlrpc xmlwriter xsl zip

# Copy configuration
COPY config/php.ini /usr/local/etc/php/
COPY config/xdebug.ini /usr/local/etc/php/conf.d/
COPY config/php7.ini /usr/local/etc/php/conf.d/
#COPY config/pdo_mysql.ini /usr/local/etc/php/conf.d/
COPY config/php-fpm.conf /usr/local/etc/
COPY config/pool.d /usr/local/etc/pool.d

WORKDIR /var/www/app

CMD ["php-fpm", "-F"]

EXPOSE 9000
