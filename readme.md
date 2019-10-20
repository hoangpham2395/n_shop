#Setting project

- Required
    - Laravel 5.8
    - PHP 7.2
    - MySQL 5.6
    - Composer 1.9

- Clone project
```bash
git clone https://github.com/hoangpham2395/n_shop.git brownstore
cd brownstore
```
- Install
```bash
composer install
cp .env.example .env
```
- Set key
```
php artisan key:generate
OR
sudo vim .env
Paste key: base64:Zkfvi9SM8Sz4O1nvgXq5Nk1c+CQ6N+HQhlbyYyLDVo8=
```
- Permission
```bash
sudo chmod -R 777 bootstrap/cache
sudo chmod -R 777 public/images
sudo chmod -R 777 public/media
sudo chmod -R 777 public/tmp
```

* Open file .env and config database
```bash
DB_DATABASE=brownstore
DB_USERNAME=root
DB_PASSWORD=
```

* Delete cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

* Install Form collective 5.4.0
```bash
composer require "laravelcollective/html":"^5.4.0"
```

* Install Doctrine dbal for migration
```bash
composer require doctrine/dbal
```

* Database
    - Run file database/sql/brownstore.sql
