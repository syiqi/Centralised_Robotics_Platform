# CRP
 MARii's Centralised Robotics Plaform <br>
To run on localhost device, make sure Laravel, Composer, Node.js..etc are installed <br>
Follow the official installation guide on Laravel's website documentation <br>



 
**How to access from other device:-** <br>
Clone your project(if MACOS transfer cloned project inside Laravel Herd) <br>
Go to the folder application using cd command on your cmd or terminal <br>
Run composer install on your cmd or terminal <br>
Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu <br>
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. <br>
Run php artisan key:generate <br>
Run php artisan migrate <br> 
Run php artisan serve <br>
Go to http://localhost:8000/ <br>
