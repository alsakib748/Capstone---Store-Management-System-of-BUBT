<!-- PROJECT BADGES -->
[![Laravel](https://img.shields.io/badge/Laravel-12.0-red?style=flat&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-blue?style=flat&logo=php)](https://www.php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.x-38bdf8?style=flat&logo=tailwind-css)](https://tailwindcss.com)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat)](LICENSE)

<!-- PROJECT HEADER -->
<div align="center">
  <img src="https://upload.wikimedia.org/wikipedia/en/3/37/Bangladesh_University_of_Business_and_Technology_%28BUBT%29_logo.png" alt="BUBT Logo" width="120"/>

  # Store Management System of BUBT

  ### A Comprehensive Inventory Management System for Bangladesh University of Business and Technology
</div>

---

## 📋 Table of Contents

1. [Project Overview](#1-project-overview)
2. [Features](#2-features)
3. [Technology Stack](#3-technology-stack)
4. [Project Structure](#4-project-structure)
5. [Database Schema](#5-database-schema)
6. [User Roles](#6-user-roles)
7. [Installation](#7-installation)
8. [Configuration](#8-configuration)
9. [Running the Application](#9-running-the-application)
10. [Screenshots](#10-screenshots)
11. [Contributing](#11-contributing)
12. [License](#12-license)

---

## 1. Project Overview

### 1.1 Introduction

The **Store Management System of BUBT** is a comprehensive Laravel-based inventory management application designed specifically for Bangladesh University of Business and Technology (BUBT). This system facilitates efficient management of products, purchases, requisitions, issues, and reporting across various departments within the university.

### 1.2 Project Details

| Attribute | Details |
|-----------|---------|
| **Project Type** | Capstone Project |
| **Framework** | Laravel 12.0 |
| **Language** | PHP 8.2 |
| **Database** | MySQL 8.x |
| **Frontend** | Blade Templates + Tailwind CSS + Alpine.js |
| **Institution** | Bangladesh University of Business and Technology (BUBT) |

### 1.3 Objectives

- ✅ Centralized inventory management for university store
- ✅ Streamlined purchase and procurement process
- ✅ Efficient requisition and issue management system
- ✅ Comprehensive reporting and analytics
- ✅ Role-based access control for security
- ✅ Real-time communication between users

---

## 2. Features

### 2.1 Product Management
- 📦 Product categories and subcategories
- 🏷️ Brand management
- 🔢 Automatic SKU generation
- 📊 Stock level monitoring with alert thresholds
- 💰 Fixed asset tracking
- 🖼️ Product image gallery

### 2.2 Purchase Management
- 📋 Purchase order creation
- 🏭 Supplier management
- 📅 Purchase tracking with dates
- 📎 File attachment support
- 🔍 Tracking number integration

### 2.3 Return Management
- ↩️ Return purchase orders
- 📝 Return reason tracking

### 2.4 Requisition System
- 📝 Product requisition requests
- ✅ Approval/rejection workflow
- 📊 Status tracking (Pending, Approved, Rejected)

### 2.5 Issue Management
- 📤 Product distribution to departments
- 🔗 Requisition fulfillment
- ↩️ Product return tracking

### 2.6 Damage Management
- 💥 Damage product reporting
- 📋 Damage details and reasons

### 2.7 Quotation Management
- 💵 Supplier quotations
- 📊 Price comparison

### 2.8 Report Generation
| Report | Description |
|--------|-------------|
| Purchase Report | All purchase transactions |
| Purchase Return Report | Return purchases |
| Damage Product Report | Damaged products |
| Issue Report | Product issues |
| Issue Return Report | Product returns |
| Stock Report | Current stock levels |
| Fixed Asset Report | Fixed asset products |
| Product TRX Report | Product transactions |
| Product Lifetime Report | Complete product lifecycle |

### 2.9 User Management
- 👥 Role-based access control
- 🏛️ Department management
- 📅 Semester management
- 💬 Real-time chat (Chatify)

---

## 3. Technology Stack

### 3.1 Backend
| Technology | Version | Purpose |
|------------|---------|---------|
| Laravel | 12.0 | PHP Framework |
| PHP | 8.2+ | Server-side Language |
| MySQL | 8.x | Database |
| Spatie Permission | 6.17 | Role & Permission Management |

### 3.2 Frontend
| Technology | Version | Purpose |
|------------|---------|---------|
| Tailwind CSS | 3.x | CSS Framework |
| Alpine.js | 3.x | JavaScript Framework |
| Vite | 6.x | Build Tool |
| Blade | - | Template Engine |

### 3.3 Additional Packages
| Package | Purpose |
|---------|---------|
| barryvdh/laravel-dompdf | PDF Generation |
| intervention/image | Image Handling |
| munafio/chatify | Real-time Chat |
| spatie/laravel-permission | Role & Permission |

---

## 4. Project Structure

```
Store Management System of BUBT/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php
│   │   │   ├── Auth/
│   │   │   └── Backend/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   │   ├── Brand.php
│   │   ├── Department.php
│   │   ├── Issue.php
│   │   ├── Product.php
│   │   ├── Purchase.php
│   │   ├── Quotation.php
│   │   ├── Requisition.php
│   │   ├── Semester.php
│   │   ├── Supplier.php
│   │   └── User.php
│   ├── Providers/
│   ├── Services/
│   └── View/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   ├── factories/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
└── vite.config.js
```

---

## 5. Database Schema

### 5.1 Core Entities

| Entity | Description |
|--------|-------------|
| **users** | System users with authentication |
| **departments** | University departments |
| **semesters** | Academic semesters |
| **brands** | Product brands |
| **suppliers** | Product suppliers |
| **product_categories** | Product categories |
| **subcategories** | Product subcategories |
| **products** | Main product inventory |
| **product_images** | Product images |

### 5.2 Transaction Entities

| Entity | Description |
|--------|-------------|
| **purchases** | Purchase orders |
| **purchase_items** | Items in purchases |
| **return_purchases** | Return purchases |
| **return_purchase_items** | Return items |
| **requisitions** | Product requests |
| **requisition_items** | Requested items |
| **issues** | Product issues |
| **issue_items** | Issued items |
| **issue_returns** | Issue returns |
| **damage_products** | Damage reports |
| **quotations** | Supplier quotations |

### 5.3 ER Diagram

See detailed ER diagrams in:
- `ER_Diagram_Part1_Large.txt` - Core Entities
- `ER_Diagram_Part2_Large.txt` - Purchase & Sales
- `ER_Diagram_Part3_Large.txt` - Operations & Communication

---

## 6. User Roles

| Role | Description | Access Level |
|------|-------------|--------------|
| **Super Admin** | Full system access | All |
| **Admin** | Administrative operations | Most |
| **Department User** | Request products only | Limited |

### Permission Groups
- Brand Management
- Supplier Management
- Product Management
- Category Management
- Purchase Management
- Requisition Management
- Issue Management
- Damage Product Management
- Quotation Management
- Report Generation
- User Management
- Role & Permission Management
- Chat/Messaging

---

## 7. Installation

### 7.1 Prerequisites

Ensure you have the following installed:
- PHP 8.2 or higher
- Composer
- Node.js 18+
- MySQL 8.x
- XAMPP/WAMP/Laragon (optional)

### 7.2 Installation Steps

```bash
# 1. Clone the repository
git clone <repository-url>
cd "Store Management System of BUBT"

# 2. Install PHP dependencies
composer install

# 3. Install Node.js dependencies
npm install

# 4. Copy environment file
copy .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Configure database in .env file
# Edit DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD

# 7. Run migrations
php artisan migrate

# 8. (Optional) Seed database
php artisan db:seed

# 9. Create storage link
php artisan storage:link
```

---

## 8. Configuration

### 8.1 Environment Variables (.env)

```env
APP_NAME="Store Management System of BUBT"
APP_ENV=local
APP_KEY=your_generated_key
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=store_management_system_of_bubt
DB_USERNAME=root
DB_PASSWORD=your_password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=database
SESSION_LIFETIME=120
```

### 8.2 Chatify Configuration (Optional)

```env
MESSENGER_COLOR="#007bff"
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

---

## 9. Running the Application

### 9.1 Development Server

```bash
# Start Laravel server
php artisan serve

# Start frontend development
npm run dev
```

### 9.2 Production Build

```bash
# Build frontend assets
npm run build
```

### 9.3 Cache Clearing

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### 9.4 Access

- **URL**: `http://localhost:8000`
- **Login**: Use registered credentials or seed data

---

## 10. Screenshots

> Add screenshots of your application here:
> - Dashboard
> - Product Management
> - Purchase Orders
> - Requisitions
> - Reports
> - User Management

---

## 11. Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 12. License

This project is licensed under the [MIT License](LICENSE).

---

## 📞 Support

For support, please contact:
- **Email**: store@bubt.edu.bd
- **Website**: https://www.bubt.edu.bd

---

**Project Version**: 1.0  
**Last Updated**: July 2026  
**Developed by**: BUBT Capstone Project Team
