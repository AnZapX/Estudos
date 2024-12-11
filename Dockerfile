# Use uma imagem base com Apache e PHP
FROM php:8.2-apache

# Instale extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilite o mod_rewrite do Apache (se necessário)
RUN a2enmod rewrite

# Copie o arquivo de configuração customizado (se existir)
COPY php.ini /usr/local/etc/php/
