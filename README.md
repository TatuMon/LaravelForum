# Good Mambo
A forum where you can find others with the same preferences as you about gaming

- Technologies:
    * Frontend
        * HTML/SCSS
        * Blade

    * Backend
        * PHP
        * Laravel
        * MySQL

### How to run locally
First, you must have PHP, Composer and MySQL installed in your system. You can download them here [PHP](https://www.php.net/downloads.php) | [COMPOSER](https://getcomposer.org/download/).
Once you have PHP and Composer, clone or download the project and run `composer install` inside the project's root directory. If all went good, follow these steps:  
    1. Copy **.env.example** to **.env** by using `copy .env.example .env` (Windows) or `cp .env.exmaple .env` (Linux)  
    2. Inside .env set your database **name** and **password**  
    3. Run `php artisan key:generate`  
    4. Run `php artisan migrate`  
    5. Run `php artisan serve`  
    6. Go to localhost:8000  
