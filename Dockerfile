#vamos a usar una imagen base de PHP

FROM php:8.1-apache
#instalar las dependencias necesarias para trabajar con postgresql
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql
#copiamos el contenido de mi app al  contenedor
COPY . /var/www/html/
#exponiendo el puerto 80
EXPOSE 80