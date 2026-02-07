# Flower Shop - Laravel Application

A beautiful flower shop management system built with Laravel, featuring user authentication and a comprehensive dashboard.

## Features

- 🔐 User Authentication (Login & Register)
- 📊 Dashboard with statistics
- 🌸 Flower inventory management
- 💰 Revenue tracking
- 📱 Responsive design

## Installation

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Database Configuration**
   - Update your `.env` file with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=flowershop
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Seed Database (Optional)**
   ```bash
   php artisan db:seed --class=FlowerSeeder
   ```

6. **Start Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## Usage

1. **Register a new account** at `/register`
2. **Login** at `/login`
3. **Access the dashboard** at `/dashboard` (requires authentication)

## Default Routes

- `/` - Redirects to login
- `/login` - Login page
- `/register` - Registration page
- `/dashboard` - Main dashboard (protected)

## Database Structure

### Users Table
- id
- name
- email
- password
- timestamps

### Flowers Table
- id
- name
- description
- price
- quantity
- category
- image
- timestamps

## Technologies Used

- PHP 8.1+
- Laravel 10
- MySQL
- Blade Templates
- CSS3 (Custom Styling)

## License

MIT License
