# Personal snippet manager for Designer & Developer

Its build with latest laravel 5.6 and css framework bulma css. Developer can store their code snippet for future use. User can fork their own code. 


# Technology
* Bulma css framework
* Laravel 5.6 

# How to run this project

#### First clone project from github and cd into this project inside terminal

~~~bash
git clone https://github.com/poloey/laravel_snippet_manager.git
cd laravel_snippet_manager
~~~

#### Downloading composer package  and dumping

~~~bash
composer install
composer dump-autoload
~~~


#### Configure project by resetting old data and generating new key
~~~php
php artisan cache:clear
php artisan view:clear
php artisan config:clear
php artisan key:generate
~~~
### Create a database name with `snippet`. Or you can change database name from `.env` file 

~~~bash
php artisan migrate
~~~

### seed database with dummy data 

~~~bash
php artisan db:seed
~~~


### Serving laravel project

~~~
php artisan serve
~~~

Take care 
