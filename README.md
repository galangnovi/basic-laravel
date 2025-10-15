<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🚀 Basic Laravel Project

This repository contains my practice project built with **Laravel**, focusing on learning backend fundamentals, MVC architecture, and API development.  
The goal of this project is to strengthen my understanding of Laravel’s ecosystem, routing, controllers, Eloquent ORM, authentication, and database relationships.

---

## ✨ Features

- CRUD (Create, Read, Update, Delete) operations  
- User authentication (Login & Register)  
- RESTful API endpoints  
- Eloquent ORM relationships  
- Form validation and error handling  
- Blade templating (for UI-based exercises)  
- API testing using Postman / Thunder Client  

---

## ⚙️ Requirements

Make sure you have the following installed:

- **PHP** ≥ 8.1  
- **Composer**  
- **Laravel** ≥ 11
- **MySQL**  
- **Node.js & npm** 

---

## 🚀 Installation

### 1️⃣ Clone Repository

```bash
git clone https://github.com/galangnovi/basic-laravel.git
cd basic-laravel
```
2️⃣ Install Dependencies
```bash
composer install
npm install && npm run dev
```

3️⃣ Configure Environment

Copy the .env.example file and set up your database connection:

cp .env.example .env


Then generate the application key:
```bash
php artisan key:generate
```

4️⃣ Run Migrations
```bash
php artisan migrate
```

5️⃣ Start the Application
```bash
php artisan serve
```

Access it in your browser at:
👉 http://localhost:8000

🧩 Tech Stack

Framework: Laravel 12

Database: MySQL 

Frontend : Blade

ORM: Eloquent


🧠 Learning Objectives

This project is part of my Laravel learning journey to understand:

MVC architecture

Routing and middleware

Eloquent relationships

API development and resource controllers

Authentication and session handling

Database migrations and seeding


💬 Notes

This repository is a learning sandbox, so expect experimental code, testing endpoints, and evolving features as I explore more of Laravel’s capabilities.
git clone https://github.com/galangnovi/laravel-practice.git
cd laravel-practice
