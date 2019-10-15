# uotz_test
Instadev app with API created with laravel. Instadev is a photo-sharing social networking service. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

What things you need to install the software and how to install them

```
Laravel 5.8
PHP 7.3
SQL database, such as MySQL 5.1
XAMP 7.3 or MAMP 5.5
```

### Installing

1. On your desktop clone this repo through your terminal: git clone [link]
2. Cd into the directory: cd instadev
3. Run composer install in case you do't have Laravel: composer global require laravel/installer
4. Run: php artisan key:generate
5. Set up your .env file with the correct data: change your DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWOR to your current settings.
6. Create a database in your MySQL named instadev.
6. Run the table migrations: php artisan migrate
7. Seed the database php artisan: db:seed
8. Start the serve: php artisan serve

Now you should have the same project I ended with.

## Authors

* **Lais Guttilla**
