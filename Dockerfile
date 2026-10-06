FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Aktifkan Apache Rewrite
RUN a2enmod rewrite

# Folder kerja Laravel
WORKDIR /var/www/html

# Salin semua file project
COPY . .

# Atur permission Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Buat symbolic link storage
RUN php artisan storage:link

# Arahkan Apache ke folder public Laravel
RUN sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#' /etc/apache2/sites-available/000-default.conf

# Atur permission directory public Laravel
RUN sed -i 's#<Directory /var/www/>#<Directory /var/www/html/public>#' /etc/apache2/apache2.conf

# Port Apache
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]