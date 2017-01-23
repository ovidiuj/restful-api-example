FROM php:7.0-fpm

RUN apt-get update && apt-get install -y
RUN docker-php-ext-install pdo pdo_mysql

RUN useradd -ms /bin/bash ovidiu
USER ovidiu
RUN usermod -u 1000 ovidiu

WORKDIR /app

# Add our initialisation script
ADD ./run.sh /tmp/run.sh

# Commands we need to create database
ENTRYPOINT [ "/bin/bash", "/tmp/run.sh" ]