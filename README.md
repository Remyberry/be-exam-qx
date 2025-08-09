BE Exam - Laravel Project

Project Description
This is a web application built with the Laravel framework. It provides a simple dashboard to manage a list of factories and their associated employees. The application includes authentication and basic CRUD (Create, Read, Update, Delete) functionality for both factories and employees.

Prerequisites
Before you begin, ensure you have the following installed on your system:

PHP: Version 8.0 or higher
Composer
Node.js and npm
MySQL

Installation Steps
Follow these steps to get the project up and running:
Clone or Unzip: Download and extract the project files to your local machine.
Install PHP Dependencies: Navigate to the project's root directory in your terminal and install the Composer packages.


composer install


Configure Environment Variables: Copy the .env.example file to .env if you don't have one already. Your provided .env file is ready to use, but you may need to adjust the database settings.

APP_NAME=Laravel
APP_ENV=local
APP_KEY=secret
...
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=be-exam-qx
DB_USERNAME=admin
DB_PASSWORD=password
...

Note: If you're using a different database username or password, update the DB_USERNAME and DB_PASSWORD values in the .env file.

Generate Application Key: Run the command to generate a unique application key.


php artisan key:generate


Set Up the Database:
Create a new, empty database named be-exam-qx (or the name specified in your .env file).
Run the database migrations to create the factories and employees tables.


php artisan migrate


Install Node Dependencies: Install the front-end dependencies listed in your package.json file.


npm install


Compile Assets: Run the development script to compile your CSS and JavaScript files.


npm run dev


Serve the Application: Start the local development server to run the application.


php artisan serve


Default Admin Credentials
You can log in to the application with the following default credentials:
Email: admin@example.com
Password: password

