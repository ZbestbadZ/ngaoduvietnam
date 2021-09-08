# Marketplace API

Language: PHP

Framework: Laravel 8

Database: MySQL/MariaDB (1 database for Admin and API)

## Setup

#### 1. Clone code

```shell script
git clone {git repository url}
```

#### 2. Install dependencies

```shell script
cd {your project folder}

composer install
```

#### 3. Create the cache folders

```shell script
mkdir -p storage/framework/cache/data
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p storage/logs
mkdir -p storage/debugbar
```

#### 4. Create the .env file

```shell script
cp .env.example .env
```

Import all the project's environment variables into the .env file

#### 5. Run migration

```shell script
php artisan migrate
```

#### 6. Generate key

```shell script
php artisan key:generate
```

#### 7. Setup file permission for the project's folder

Example of setup file permission in Mac OS
```shell script
sudo chmod -R 777 path/to/root
sudo chown -R www-data:www-data /path/to/root
sudo usermod -a -G www-data ubuntu
sudo find /path/to/root -type f -exec chmod 644 {} \;
sudo find /path/to/root -type d -exec chmod 755 {} \;
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```

#### 8. Install redis on the server/your computer

* [How to install redis cache on windows](https://redislabs.com/ebook/appendix-a/a-3-installing-on-windows/a-3-2-installing-redis-on-window/)
* [How to install redis cache in MacOS](https://medium.com/@petehouston/install-and-config-redis-on-mac-os-x-via-homebrew-eb8df9a4f298)
* [How to install redis cache in Ubuntu](https://tecadmin.net/install-redis-ubuntu/)

#### DONE