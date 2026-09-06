# Library System

## Description
Simple Library Information System

## Requirements
- PHP
- Composer
- MySQL
- Laravel

## Installation

1. Install dependensi project
   ```terimnal 
   composer install 

2. Salin file env & generate app key
    ``` terminal
    cp .env.examplw .env
    php artisan key:generate

3. Konfigurasi DB
    ```atur koneksi database pada file .env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=library-system
    DB_USERNAME=root
    DB_PASSWORD=

4. Jalankan migrasi database
    ```terminal
    php artisan migrate

5. Jalankan server lokal
    ```terminal
    php artisan serve

## Author
Nama: Tania Dwi Andini
NPM: 2410631250076