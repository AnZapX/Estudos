# Usar uma imagem base do PHP com Apache
FROM php:8.2-apache

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    libssl-dev \
    && docker-php-ext-install pdo_mysql

# Instalar o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar o arquivo composer.json e instalar dependências
COPY composer.json .


# Copiar o restante do código da aplicação
COPY . .

# Gerar o autoload do Composer
RUN composer dump-autoload --optimize

# Habilitar o módulo rewrite do Apache (opcional, se precisar de URLs amigáveis)
RUN a2enmod rewrite

# Expor a porta 80
EXPOSE 80
