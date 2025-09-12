TripSync — Project Setup Guide
This README explains every step to set up the TripSync project locally
*****************************************************************************
1-Edit .env and set your database credentials and other required settings:
APP_NAME=TripSync
APP_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tripsync
DB_USERNAME=root
DB_PASSWORD=
PASSPORT_PRIVATE_KEY="file://C:/laragon/www/TripSync/storage/oauth-private.key"
PASSPORT_PUBLIC_KEY="file://C:/laragon/www/TripSync/storage/oauth-public.key"
*****************************************************************************
2-Database Setup
install composer packages :
composer install
php artisan key:generate
For database tables migration :
php artisan migrate
For seeds run :
php artisan db:seed

