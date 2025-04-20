# Hospital Management System (SHMS) 🏥

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![PHP 8.1+](https://img.shields.io/badge/PHP-8.1+-brightgreen)](https://www.php.net/)
[![MySQL 8.0+](https://img.shields.io/badge/MySQL-8.0+-orange)](https://www.mysql.com/)

A comprehensive web-based solution for modern hospital administration, patient care, and medical record management.

![SHMS Dashboard Preview](demo/dashboard-screenshot.png) <!-- Add actual screenshot -->

## 📋 Table of Contents
- [Project Overview](#-project-overview)
- [Key Features](#-key-features)
- [Technology Stack](#-technology-stack)
- [Installation Guide](#-installation-guide)
- [System Architecture](#-system-architecture)
- [Contributing](#-contributing)
- [License](#-license)
- [Acknowledgments](#-acknowledgments)

## 🌟 Project Overview

SHMS is a full-stack web application designed to streamline hospital operations by:
- Digitalizing patient records and medical history
- Automating appointment scheduling and staff management
- Providing real-time inventory tracking for medical supplies
- Generating analytical reports for decision-making 

**Core Components:**
- Patient Management Module
- Electronic Health Records (EHR) System
- Appointment Scheduling Engine
- Pharmacy Inventory Management
- Billing & Insurance Integration

## ✨ Key Features

### Patient Management
- Registration with biometric data integration
- Medical history tracking with timeline visualization
- Automated appointment reminders (SMS/Email)
- Prescription generation and digital signatures

### Staff Coordination
- Role-based access control (RBAC)
- Doctor shift scheduling with conflict detection
- Performance analytics dashboard
- Emergency response coordination system

### Inventory Control
- Real-time medication stock monitoring
- Automated reorder alerts with vendor integration
- Equipment maintenance scheduling
- Expiry date tracking and alerts 

### Advanced Analytics
- Patient admission trends visualization
- Disease outbreak prediction models
- Resource utilization heatmaps
- Financial performance reports

## 💻 Technology Stack

**Frontend**
- HTML5 & CSS3 with Bootstrap 5
- JavaScript (ES6+) with Chart.js
- AJAX for real-time updates

**Backend**
- PHP 8.1 (Laravel Framework)
- MySQL 8.0 (Relational Database)
- RESTful API Architecture

**DevOps**
- Docker Containerization
- CI/CD Pipeline with GitHub Actions
- Automated Testing (PHPUnit)

## 🛠️ Installation Guide

### Prerequisites
- PHP 8.1+
- MySQL 8.0+
- Composer 2.0+
- Node.js 16.x

### Setup Instructions
1. Clone repository:
```bash
git clone https://github.com/eyop/SHMS.git
cd SHMS
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Database setup:
```bash
mysql -u root -p -e "CREATE DATABASE shms;"
php artisan migrate --seed
```

5. Start development server:
```bash
php artisan serve
```

## 🏗️ System Architecture

### Database Schema
![ER Diagram](docs/er-diagram.png) <!-- Add actual ER diagram -->

**Key Entities:**
- Patients (ID, Name, Medical History, Insurance Info)
- Staff (ID, Role, Department, Qualifications)
- Appointments (Time, Doctor, Treatment Type)
- Inventory (Medication, Equipment, Suppliers) 

### Module Structure
```
src/
├── app/           # Core application logic
├── config/        # System configurations
├── database/      # Migrations & seeders
├── public/        # Frontend assets
├── resources/     # Views & localization
└── tests/         # Automated tests
```

## 🤝 Contributing

We welcome contributions! Please follow these steps:
1. Fork the repository
2. Create feature branch: `git checkout -b feature/your-feature`
3. Commit changes: `git commit -m 'Add some feature'`
4. Push to branch: `git push origin feature/your-feature`
5. Open a Pull Request

**Development Guidelines:**
- Follow PSR-12 coding standards
- Write unit tests for new features
- Document API endpoints using OpenAPI
- Maintain 85%+ test coverage

## 📄 License

Distributed under MIT License. See `LICENSE` for details.

## 🙏 Acknowledgments

- Inspired by GeeksforGeeks Hospital Management System guide 
- UI components from Bootstrap Community
- PHP Laravel Documentation Team
- MySQL Optimization Best Practices

