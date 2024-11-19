FROM php:8.3-cli

COPY . /usr/app

WORKDIR /usr/app

RUN docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable pdo pdo_mysql

CMD ["php", "-S", "0.0.0.0:8085"]