<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Fruit App
- Laravel v11.x
- PHP v8.3.x
- MySQL v8.1.x (default)
- phpMyAdmin v5.x

# Requirements
- Stable version of [Docker](https://docs.docker.com/engine/install/)
- Compatible version of [Docker Compose](https://docs.docker.com/compose/install/#install-compose)

# How To Deploy

### For first time only !
- `git clone https://github.com/viethoang1469/fruit.git`
- `cd fruit-app`
- `docker compose up -d --build`
- `docker compose exec php bash`
- `composer install`
- `php artisan migrate:fresh --seed`

### From the second time onwards
- `docker compose up -d`

# Notes

### Fruit App
- URL: http://localhost

### phpMyAdmin
- URL: http://localhost:8080
- Server: `db`
- Username: `user`
- Password: `password`
- Database: `fruit`