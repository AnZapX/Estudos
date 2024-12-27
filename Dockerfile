# Usar a imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instalar dependências do PHP (exemplo: mysqli, pdo, etc.)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar os arquivos do projeto para o diretório da aplicação no contêiner
COPY ./src /var/www/html/

# Copiar o arquivo de configuração customizado do PHP para o contêiner
COPY ./php.ini /usr/local/etc/php/

# Habilitar mod_rewrite do Apache (se necessário para seu projeto)
RUN a2enmod rewrite

# Expor a porta 80
EXPOSE 80
