# Laravel API Starter Kit 🚀

<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="100" alt="Laravel Logo">
  <h1 align="center">Laravel API Starter Kit</h1>
  <p align="center">Production-ready API foundation with comprehensive authentication system</p>
</p>

## 📌 Introduction

A robust Laravel starter kit featuring:

- **JWT Authentication** (Register, Login, Logout, Profile)
- **OTP Verification** via Email
- **Social Authentication** (Google, GitHub, Facebook)
- **Admin Panel** with User Management
- **API Documentation** (Postman Collection included)
- **Pre-configured CI/CD** setup

## ✨ Features

### Authentication System
- User registration with email verification
- JWT-based authentication
- Social login integration
- Password reset via OTP
- Role-based access control

### Admin Panel
- User management (CRUD operations)
- System monitoring
- Profile settings
- Activity logs

### Developer Experience
- Clean, modular codebase
- API documentation
- Postman collection
- Docker support
- CI/CD configuration

## 🛠️ Installation

### Prerequisites
- PHP 8.1+
- Composer 2.0+
- MySQL 5.7+/MariaDB 10.3+
- Node.js 16+ (for frontend assets)

### Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/Faheem2407/Laravel-API-Starter-Kit.git
cd Laravel-API-Starter-Kit
Install dependencies:

bash
composer install
npm install
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

Password: Secret123

User Access
URL: http://127.0.0.1:8000/login

Email: user@example.com

Password: Password123

📚 Documentation
API Documentation

Postman Collection

Development Guide

🚀 Deployment
Traditional Deployment
bash
php artisan optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
Docker Deployment
bash
docker-compose up -d
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

📜 License
This project is licensed under the MIT License - see the LICENSE file for details.

<p align="center"> Made with ❤️ by <a href="https://github.com/Faheem2407">Faheem Ahmed</a> </p> ```