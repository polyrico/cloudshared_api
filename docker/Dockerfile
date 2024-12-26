FROM php:8.2-fpm

# Necessary dependencies
RUN apt-get update && pecl install apcu uploadprogress xdebug && apt-get install -y \
    build-essential \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    git \
    curl \
    libpq-dev

# Necessary PHP extentions
RUN docker-php-ext-install pdo_pgsql pgsql zip exif pcntl bcmath calendar
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd
RUN docker-php-ext-enable apcu uploadprogress
RUN docker-php-ext-enable xdebug

# Dependency manager
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Define the workdir
WORKDIR /app/api

# Add user
ARG HOST_USER
ARG HOST_USER_ID
ARG HOST_GROUP
ARG HOST_GROUP_ID

RUN groupadd -g ${HOST_GROUP_ID} ${HOST_GROUP} && \
    useradd -u ${HOST_USER_ID} -g ${HOST_GROUP} -s /bin/bash -m ${HOST_USER}

RUN chown -R ${HOST_USER}:${HOST_GROUP} /app/api

# Execute the php-fpm command
CMD ["php-fpm"]