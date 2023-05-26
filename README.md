# Laravel 8 base
# Setup with docker UNIX

- docker-compose up -d


# Set up set in server docker:

- docker exec -it app bash
- composer install
- cp .env.example .env
- php artisan config:clear
- php artisan key:generate
- php artisan migrate
