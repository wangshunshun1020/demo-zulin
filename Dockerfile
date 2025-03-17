# 使用 PHP 7.4 + FPM 运行环境
FROM php:7.4-fpm

# 安装必要的 PHP 扩展（pdo_mysql）
RUN apt-get update && apt-get install -y \
    nginx \
    zip unzip \
    mariadb-client \
    && docker-php-ext-install pdo pdo_mysql

# 设置工作目录到 `public`
WORKDIR /var/www/html/public

# 复制项目代码到 `/var/www/html`
COPY . /var/www/html

# 安装 Composer 依赖（优化自动加载）
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --optimize-autoloader

# 复制 Nginx 配置（如果使用 Nginx）
COPY docker/nginx.conf /etc/nginx/nginx.conf

# 运行 PHP-FPM & Nginx
CMD service nginx start && php-fpm
