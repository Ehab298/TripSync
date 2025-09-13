# 🌍 TripSync

> A comprehensive travel synchronization and management platform built with Laravel

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)

## 🚀 About

TripSync is a powerful travel management platform that helps users synchronize their travel plans, collaborate with fellow travelers, and organize their trips efficiently.

## ⚡ Prerequisites

Before you begin, ensure you have the following installed:

- **PHP** >= 8.3
- **Composer** >= 2.0
- **MySQL** >= 8.0

## 🛠️ Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Ehab298/TripSync.git
cd TripSync
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Generate Application Key

```bash
php artisan key:generate
```

## ⚙️ Configuration

### Environment Setup

1. Copy the example environment file:
   ```bash
   cp .env.example .env
   ```

2. Edit the `.env` file with your configuration:

```env
# Application Settings
APP_NAME="apiato"
APP_ENV=local
APP_KEY=base64:PTOt4b2rRYG1D/jw9Cf+ZvoNBZrvTfcTL12zcFiPYEo=
APP_URL=http://TripSync.test
API_URL=http://TripSync.test
API_PREFIX=/
BACKUP_PATH="backups"
APP_DEBUG=true
API_DEBUG=true
DEBUGBAR_ENABLED=null

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

HASH_ID=false
HASH_ID_KEY=apiato
HASH_ID_LENGTH=16


PAGINATION_LIMIT_DEFAULT=10
PAGINATION_SKIP=false

API_TOKEN_EXPIRES=1440
API_REFRESH_TOKEN_EXPIRES=43200
API_ENABLE_IMPLICIT_GRANT=true

REQUIRE_EMAIL_VERIFICATION=true
EMAIL_VERIFICATION_LINK_EXPIRATION_TIME_IN_MINUTE=30

ELOQUENT_QUERY_CACHE=false
ELOQUENT_QUERY_CACHE_TIME=60

SRC_PATH=app

ROOT_NAMESPACE=App\
USER_NAMESPACE=App\Containers\AppSection\User\Models\
ADMIN_ROLE=admin

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=TripSync
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379


AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

QUEUE_CONNECTION=sync
DB_QUEUE_CONNECTION=mysql


PASSPORT_PRIVATE_KEY="file://C:/laragon/www/TripSync/storage/oauth-private.key"
PASSPORT_PUBLIC_KEY="file://C:/laragon/www/TripSync/storage/oauth-public.key"



# OAuth Keys (Laravel Passport)
PASSPORT_PRIVATE_KEY="file://storage/oauth-private.key"
PASSPORT_PUBLIC_KEY="file://storage/oauth-public.key"
```

> ⚠️ **Important**: Replace `your_password_here` with your actual MySQL password and update paths as needed for your environment.

## 🗄️ Database Setup

### 1. Create Database

Create a new MySQL database named `tripsync`:

```sql
CREATE DATABASE tripsync;
```

### 2. Run Migrations

Execute the database migrations to create all necessary tables:

```bash
php artisan migrate
```

### 3. Seed Database (Optional)

Populate the database with sample data:

```bash
php artisan db:seed
```
### 4. create admin 

local url 
```bash
php artisan make:filament-user

```
### 5. link admin 

local url 
```bash
http://tripsync.test/admin
```


<div align="center">
  Made with ❤️ by the TripSync Team
</div>
