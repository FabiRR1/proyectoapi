FROM php:8.2-cli

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crear directorio de trabajo
WORKDIR /app

# Copiar archivos
COPY . .

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Exponer puerto
EXPOSE 10000

# Comando para iniciar servidor
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]