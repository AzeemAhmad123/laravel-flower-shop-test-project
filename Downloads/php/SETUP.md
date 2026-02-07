# Quick Setup Guide

## Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL/MariaDB

## Step-by-Step Installation

### 1. Install Composer Dependencies
```bash
composer install
```

### 2. Configure Environment
```bash
# Copy the example environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 3. Configure Database
Edit the `.env` file and update these lines:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=flowershop
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Create Database
Create a MySQL database named `flowershop` (or your preferred name).

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Seed Sample Data (Optional)
```bash
php artisan db:seed --class=FlowerSeeder
```

### 7. Start the Server
```bash
php artisan serve
```

### 8. Access the Application
- Open your browser and go to: `http://localhost:8000`
- You'll be redirected to the login page
- Register a new account or login if you already have one

## Default Test Account
After running migrations, you can create a test account through the registration page at `/register`.

## Troubleshooting

### Permission Issues
If you encounter permission issues on storage directories:
```bash
# Linux/Mac
chmod -R 775 storage bootstrap/cache

# Windows
# Usually not needed, but ensure the directories are writable
```

### Database Connection Error
- Verify your database credentials in `.env`
- Ensure MySQL service is running
- Check if the database exists

### Composer Issues
- Make sure Composer is installed globally
- Try `composer update` if installation fails

## Project Structure
```
php/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   │   ├── LoginController.php
│   │   │   │   └── RegisterController.php
│   │   │   └── DashboardController.php
│   │   └── Middleware/
│   │       └── Authenticate.php
│   └── Models/
│       ├── User.php
│       └── Flower.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       └── dashboard.blade.php
└── routes/
    └── web.php
```

## Features Included
✅ User Registration
✅ User Login/Logout
✅ Protected Dashboard
✅ Flower Inventory Display
✅ Statistics Cards
✅ Responsive Design
✅ Beautiful UI with Gradient Themes

Enjoy your Flower Shop application! 🌸
