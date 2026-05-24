<div align="center">

# 🏥 Smart Hospital Management System (SHMS)

**Full-stack web application for modern hospital administration**

[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow?style=for-the-badge)](https://opensource.org/licenses/MIT)

> Patient Management · EHR · Appointment Scheduling · Inventory · Role-Based Access Control

</div>

---

## 📌 Overview

SHMS is a comprehensive hospital management platform built to digitalize and streamline core hospital operations. It replaces manual, paper-based workflows with a secure, role-based web system covering patient records, staff coordination, medical inventory, and data analytics.

**Problem it solves:** Ethiopian healthcare facilities — like many in developing regions — still manage patient records manually. SHMS provides a low-cost, deployable solution to modernize these workflows.

---

## ✨ Core Features

### 👤 Patient Management
- Patient registration with full medical history
- Appointment booking and calendar management
- Treatment record tracking with timeline view
- Prescription generation

### 👨‍⚕️ Staff & Access Control
- Role-Based Access Control (RBAC): Admin, Doctor, Nurse, Receptionist
- User authentication with session management
- Department-based access restrictions
- Audit trail for sensitive record changes

### 📦 Medical Inventory
- Real-time medication stock monitoring
- Low-stock alerts and reorder tracking
- Equipment maintenance scheduling

### 📊 Analytics Dashboard
- Patient admission trends (Chart.js visualizations)
- Staff performance metrics
- Daily/weekly/monthly report generation

---

## 🏗️ System Architecture

```
┌─────────────────────────────────────────────────────┐
│                   Frontend Layer                     │
│          HTML5 + Bootstrap 5 + Chart.js              │
│              AJAX for real-time updates              │
└──────────────────────┬──────────────────────────────┘
                       │
┌──────────────────────▼──────────────────────────────┐
│                  Backend Layer                       │
│               PHP 8.1 + REST API                     │
│        Authentication · Business Logic               │
└──────────────────────┬──────────────────────────────┘
                       │
┌──────────────────────▼──────────────────────────────┐
│                  Database Layer                      │
│                  MySQL 8.0                           │
│    Patients · Staff · Appointments · Inventory       │
└─────────────────────────────────────────────────────┘
```

---

## 📁 Project Structure

```
SHMS/
├── Style/               # CSS stylesheets
├── databasefile/        # SQL schema & seed data
├── image/               # Static assets
├── js/                  # JavaScript modules
├── lib/                 # PHP utility libraries
├── vendor/              # Third-party dependencies
├── index.php            # Entry point
├── login.php            # Authentication
├── adminpage.php        # Admin dashboard
├── Home.php             # Patient home
├── Measurements.php     # Health metrics tracking
├── Totalexdata.php      # Analytics/reporting
├── authenticateuser.php # Session & RBAC logic
└── README.md
```

---

## 🚀 Installation

### Prerequisites
- PHP 8.1+
- MySQL 8.0+
- Apache/Nginx web server (or XAMPP for local dev)

### Setup

```bash
# 1. Clone the repository
git clone https://github.com/eyop/SHMS.git
cd SHMS

# 2. Import database schema
mysql -u root -p -e "CREATE DATABASE shms;"
mysql -u root -p shms < databasefile/shms.sql

# 3. Configure database connection
# Edit db config in lib/ to match your MySQL credentials

# 4. Serve with Apache or XAMPP
# Place project in htdocs/ and visit http://localhost/SHMS
```

### Default Login Credentials (Dev)
| Role | Username | Password |
|------|----------|----------|
| Admin | admin | admin123 |
| Doctor | doctor | doctor123 |

> ⚠️ Change all default credentials before any production deployment.

---

## 🔐 Security Implementation

- Password hashing with `password_hash()` (bcrypt)
- Prepared statements to prevent SQL injection
- Session-based authentication with timeout
- Role-based route protection
- Input sanitization on all form fields
- CSRF protection on state-changing operations

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | HTML5, CSS3, Bootstrap 5, JavaScript |
| Charts | Chart.js |
| Backend | PHP 8.1 |
| Database | MySQL 8.0 |
| Auth | PHP Sessions + RBAC |
| Local Dev | XAMPP / Apache |

---

## 🔧 Roadmap

- [ ] REST API layer for mobile client
- [ ] Docker containerization
- [ ] Migrate to Laravel framework
- [ ] Add CI/CD pipeline with GitHub Actions
- [ ] Integrate SAST scanning (CodeQL)
- [ ] SMS appointment reminders
- [ ] Telemedicine module

---

## 📄 License

MIT License — see [LICENSE](LICENSE) for details.

---

<div align="center">

**Built by [Eyob Ketema](https://github.com/eyop)** · [LinkedIn](https://www.linkedin.com/in/eyob-ketema-14539b242/)

</div>
