# Dockerfile SENGAJA tidak selamat: digunakan untuk latihan IaC dan scan image.
FROM php:8.4-cli

RUN apt-get update && apt-get install -y git unzip iputils-ping curl
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ENV PAYMENT_API_KEY=Rk4pQ7xVn2LmZ8tYb5Hc3JdW

WORKDIR /app
COPY . .
RUN composer install --no-interaction \
    && cp .env.example .env \
    && touch database/database.sqlite \
    && php artisan key:generate

EXPOSE 8080
CMD php artisan migrate --force --seed && php artisan serve --host=0.0.0.0 --port=8080
