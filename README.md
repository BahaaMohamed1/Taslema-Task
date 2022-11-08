after cloning this
1- Run composer install 
2- Copy env.example file to .env on the root folder 
3- Open your .env file and change database name to taslema
4- Run php artisan key:generate
5- php artisan migrate:fresh --seed
6- php artisan optimize:clear
7- php artisan serve
