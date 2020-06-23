# Project Title

Blog

# Project Description

Blog created with laravel and blade. Mysql is used as the backend API database of choose. Theme provided by html5up.net , at the moment there is no functionality for comments and sending out email.

## Features
```
Create Post
Remove Post
Update Post
Edit Post

Login / register (Authentication)
```

## Getting Started

The instructions below will help you setup the copy of the web interface on your development machine.

### Prerequisites

Make sure to have composer installed on your local computer to run the code

Copy the .env.example file into .env

### Installing


After you clone this project, do the following:

```bash
# go into the project
cd laravelblog

# create a .env file
cp .env.example .env

# install composer dependencies
composer install

# generate a key for your application
php artisan key:generate

# create a local MySQL database (make sure you have MySQL up and running)
mysql -u root

> create database laravelblog;
> exit;

# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=laravelblog
DB_USERNAME=root
DB_PASSWORD=

# run the migration files to generate the schema
php artisan migrate:fresh

# seed your databse with some users and messages
php artisan db:seed

```

## Debuging
```bash
# if you encounter issues
php artisan cache:clear
php artisan config:clear

#for permission issues 
chmod -R 775 /path/to/your/project
```

## Running the tests
```bash
# laravel backend api
php artisan serve / sudo php artisan serve --host 192.168.0.51 --port 9723

```


## Built With

* [Laravel](https://laravel.com/) - PHP framework

## Authors

* **Hendrikus van Katwijk** - [Github](https://github.com/vankatwijk) - [Personal website](https://hpvk.com)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
