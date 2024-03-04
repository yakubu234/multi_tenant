# FROM php:8.2-fpm-alpine

# RUN docker-php-ext-install pdo pdo_mysql sockets
# RUN curl -sS https://getcomposer.org/installer | php -- \
#     --install-dir=/usr/local/bin --filename=composer

# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# WORKDIR /var/www
# COPY . /var/www/
# RUN composer install


# COPY ./run.sh /tmp    

# CMD ["php-fpm"] && php artisan db:seed


FROM php:8.2-fpm
ARG user
ARG uid
RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev
RUN apt clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
WORKDIR /var/www

WORKDIR /var/www
COPY . /var/www/
RUN composer install


COPY ./run.sh /tmp    

USER $user
CMD ["php-fpm"] && php artisan db:seed

# RUN composer install