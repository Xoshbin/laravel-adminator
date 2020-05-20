# Laravel Administrator

This is a Laravel implementation of **Adminator** 

Original source: https://github.com/puikinsh/Adminator-admin-dashboard

**Adminator** is a responsive Bootstrap 4 Admin Template. It provides you with a collection of ready to use code snippets and utilities, custom pages, a collection of applications and some useful widgets. Preview of this awesome admin template available here: https://colorlib.com/polygon/adminator/index.html

## Setup:
All you need is to run these commands:

```bash

git clone https://github.com/xoshbin/laravel-adminator.git

cd laravel-adminator

composer install # Install backend dependencies



cp .env.example .env # Update database credentials configuration

php artisan key:generate # Generate new keys for Laravel

npm install #install npm

npm run production # To compile assets for prod
