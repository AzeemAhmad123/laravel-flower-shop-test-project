# 🌸 Laravel Flower Shop - Test Project

A beautiful flower shop management system built with Laravel, featuring user authentication, dashboard, and comprehensive flower inventory management.

## ✨ Features

- 🔐 **User Authentication** - Login and Registration system
- 📊 **Dashboard** - Statistics and flower inventory overview
- 🌸 **Flower Management** - View and manage flower inventory
- 💰 **Revenue Tracking** - Track total revenue from flowers
- 📱 **Responsive Design** - Beautiful UI with gradient themes
- 📈 **UXCam Analytics** - Integrated analytics for user tracking

## 🚀 Quick Start

### Prerequisites
- PHP 8.1 or higher
- Composer
- SQLite (or MySQL/MariaDB)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/AzeemAhmad123/laravel-flower-shop-test-project.git
   cd laravel-flower-shop-test-project
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database setup**
   ```bash
   # For SQLite (default)
   touch database/database.sqlite
   
   # Or configure MySQL in .env file
   ```

5. **Run migrations**
   ```bash
   php artisan migrate
   ```

6. **Seed sample data (optional)**
   ```bash
   php artisan db:seed --class=FlowerSeeder
   ```

7. **Start development server**
   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` in your browser.

## 📁 Project Structure

```
├── app/
│   ├── Http/Controllers/     # Controllers (Auth, Dashboard)
│   ├── Models/               # Eloquent Models
│   └── Providers/            # Service Providers
├── database/
│   ├── migrations/           # Database migrations
│   └── seeders/              # Database seeders
├── resources/views/           # Blade templates
│   ├── auth/                 # Login & Register pages
│   ├── layouts/              # Main layout with UXCam
│   └── dashboard.blade.php   # Dashboard view
├── routes/                    # Application routes
├── public/                    # Public assets
└── vercel.json               # Vercel configuration
```

## 🌐 Deployment to Vercel

This project is configured for deployment on Vercel.

### Steps to Deploy:

1. **Install Vercel CLI** (if not already installed)
   ```bash
   npm i -g vercel
   ```

2. **Login to Vercel**
   ```bash
   vercel login
   ```

3. **Deploy**
   ```bash
   vercel
   ```

4. **Set Environment Variables** in Vercel Dashboard:
   - `APP_KEY` - Generate using `php artisan key:generate`
   - `APP_ENV=production`
   - `APP_DEBUG=false`
   - `DB_CONNECTION` - Use Vercel's database or external database
   - `APP_URL` - Your Vercel deployment URL

### Important Notes for Vercel:

- **Database**: Vercel doesn't support SQLite. You'll need to use:
  - Vercel Postgres
  - External MySQL/PostgreSQL database
  - Or update `config/database.php` for your database provider

- **Storage**: File storage may need to be configured for Vercel's serverless environment

- **Session Storage**: Consider using database sessions or Redis for production

### Alternative: Deploy via GitHub Integration

1. Push your code to GitHub (already done ✅)
2. Go to [Vercel Dashboard](https://vercel.com)
3. Click "New Project"
4. Import your GitHub repository
5. Configure environment variables
6. Deploy!

## 🔧 Configuration

### Database Configuration

Update `.env` file:
```env
DB_CONNECTION=sqlite
# OR for MySQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=flowershop
DB_USERNAME=root
DB_PASSWORD=
```

### UXCam Analytics

The UXCam Analytics SDK is already integrated in the main layout (`resources/views/layouts/app.blade.php`). It will automatically track all pages.

## 📝 Routes

- `/` - Redirects to login
- `/login` - Login page
- `/register` - Registration page
- `/dashboard` - Main dashboard (protected, requires authentication)

## 🗄️ Database Schema

### Users Table
- id, name, email, password, timestamps

### Flowers Table
- id, name, description, price, quantity, category, image, timestamps

## 🛠️ Technologies Used

- **PHP 8.1+**
- **Laravel 10**
- **SQLite/MySQL**
- **Blade Templates**
- **UXCam Analytics SDK**
- **rrweb** (for session replay)

## 📄 License

MIT License

## 👤 Author

Azeem Ahmad

---

**Note**: This is a test project for learning and demonstration purposes.
