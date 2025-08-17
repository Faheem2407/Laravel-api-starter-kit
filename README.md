# Laravel API Starter Kit 🚀

<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="100" alt="Laravel Logo">
  <h1 align="center">Laravel API Starter Kit</h1>
  <p align="center">Production-ready API foundation with JWT authentication system</p>
</p>

## 📌 Introduction

A robust Laravel starter kit featuring:

- **JWT Authentication** (Register, Login, Logout, Profile)
- **OTP Verification** via Email
- **Admin Dashboard**
- **API Documentation** (Postman Collection included)

## ✨ Features

### Authentication System
- User registration with email verification
- JWT-based authentication
- Password reset via OTP
- Email verification workflow

### Admin Dashboard
- User management interface
- System information
- Profile settings

### Developer Experience
- Clean, modular codebase
- API documentation
- Postman collection

## 🛠️ Installation

### Prerequisites
- PHP 8.1+
- Composer 2.0+
- MySQL 5.7+

### Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/Faheem2407/Laravel-API-Starter-Kit.git
cd Laravel-API-Starter-Kit
Install dependencies:

bash
composer install
Configure environment:

bash
cp .env.example .env
php artisan key:generate
Update database configuration in .env:

env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
Run migrations and seeders:

bash
php artisan migrate:fresh --seed
php artisan optimize:clear
Start the development server:

bash
php artisan serve
🔐 Default Credentials
Admin Access
URL: http://127.0.0.1:8000/admin

Email: admin@admin.com

Password: 12345678

Regular User
Email: user@user.com

Password: 12345678

📚 Documentation
Postman Collection: API_Collection/laravel-api-starter.json

🤝 Contributing
We welcome contributions! Please follow these steps:

Fork the project

Create your feature branch (git checkout -b feature/AmazingFeature)

Commit your changes (git commit -m 'Add some AmazingFeature')

Push to the branch (git push origin feature/AmazingFeature)

Open a Pull Request

📧 Contact
Maintainer: Faheem2407
Email: faheem24072000@gmail.com

<p align="center"> Crafted with ❤️ by <a href="https://github.com/Faheem2407">Faheem2407</a> </p> ```