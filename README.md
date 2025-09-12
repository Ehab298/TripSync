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
APP_NAME=TripSync
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tripsync
DB_USERNAME=root
DB_PASSWORD=your_password_here

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


<div align="center">
  Made with ❤️ by the TripSync Team
</div>
