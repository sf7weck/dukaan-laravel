# Dukaan App

A Laravel-based application for managing shops, accounts, and related operations.

## 🚀 Features
- User account management (UUID, shop-wise accounts, balance tracking)
- Authentication & authorization
- API-ready structure
- Database migrations and seeding
- Integration with Node.js (Vite, frontend build system)

## 🛠️ Requirements
- PHP 8.2+
- Composer
- Node.js & npm
- MySQL 8+

## ⚡ Installation

```bash
# Clone the repository
git clone https://github.com/sf7weck/dukaan-laravel.git
cd dukaan-app

# Install PHP dependencies
composer install

# Install Node dependencies
npm install && npm run dev

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Run migrations
php artisan migrate
