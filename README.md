# Installation

The application uses Laravel 4 framework. Composer is being used to manage the dependencies. 


#### Install dependencies

	composer install 
	
Or for standalone composer setup -

	php composer.phar install  
    
    
#### Autoloading custom classes

We added classes with custom functionality inside the `utils` directory under the `PHPLang` namespace. Please run this command to dump the autoloader for these classes - 

	composer dump-autoload
	

#### Configure Database

Edit `app/config/database.php` and fill up the mysql database details. 

#### Run migrations

For creating the necessary tables, we used Laravel 4 migrations. Run the following command to run the database migrations -

	php artisan migrate


#### Test Command

We have created a test command to test functionality. Run it like this -

	php artisan test