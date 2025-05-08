FROM php:8.2-apache

#Instalar Composer
RUN apt-get update && apt-get install -y unzip \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

#Ativar mod_rewrite do Apache
RUN a2enmod rewrite

#Definir diretório
WORKDIR /var/www/html

#Copiar arquivos do projeto para o Container
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

#Instalar as dependências
RUN if [ -f composer.json ]; then composer install; fi


