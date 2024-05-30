FROM wordpress:latest

# Install necessary packages
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    nodejs \
    npm

# Install Composer globally
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Sass (Dart-Sass)
RUN npm install -g sass
RUN npm install babel-cli@latest
RUN npm install @babel/preset-env@latest

# Set working directory to the WordPress root directory
WORKDIR /var/www/html/

# Copy the theme directory to the correct location
COPY ./ailurotech /var/www/html/wp-content/themes/ailurotech

# Allow Composer plugins to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install Composer dependencies for the theme
RUN composer install --no-interaction --prefer-dist --optimize-autoloader --working-dir=/var/www/html/wp-content/themes/ailurotech

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
