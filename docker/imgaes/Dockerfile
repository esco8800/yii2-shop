FROM ci.chulakov.ru:5000/yii.php7.3.3.node.8.9.4

RUN echo http://dl.alpinelinux.org/alpine/latest-stable/community/ >> /etc/apk/repositories \
    && apk add --no-cache shadow curl vim zlib-dev autoconf g++ make re2c \
    && pecl install -o -f redis \
    && docker-php-ext-enable redis.so \
    && pecl clear-cache

#Install iconv
COPY ./entrypoint.sh /usr/local/bin/docker-php-entrypoint
RUN chmod +x /usr/local/bin/docker-php-entrypoint