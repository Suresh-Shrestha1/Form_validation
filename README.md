# 🔐 User Registration Form with Validation

![PHP](https://img.shields.io/badge/PHP-7.4%2B-777bb3?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-00758f?logo=mysql&logoColor=white)
![Status](https://img.shields.io/badge/Status-Active-brightgreen)
![Responsive](https://img.shields.io/badge/Responsive-Yes-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![PRs Welcome](https://img.shields.io/badge/PRs-welcome-orange)

A robust and secure PHP-based user registration system featuring comprehensive server-side validation, MySQL database integration, and a modern, responsive user interface.

---

## ✨ Features

- 📝 **Clean Registration Form** with intuitive user interface
- ✅ **Server-side Validation** for enhanced security
- 🗄️ **MySQL Database Integration** with proper table structure
- 📱 **Fully Responsive Design** that works on all devices
- 🎨 **Modern UI/UX** with smooth animations and transitions
- 🔒 **Secure Data Handling** with POST method
- 💬 **Real-time Feedback** with error and success messages
- 🚀 **Easy Setup** with automated table creation

---

## 🗂️ Project Structure

```
user-registration/
│
├── 📄 index.php              # Main registration form
├── 📄 submit.php             # Handles form submission, validation, and database insertion
├── 📄 createTable&db.php     # DB connection + creates the `users` table
├── 🎨 styles.css             # Styling and animations
├── 📁 screenshots/           # Project screenshots
└── 📄 README.md             # Documentation
```

> Note: Using `&` in file names can cause issues on some systems. If you encounter problems, consider renaming to `create_table_and_db.php` and update references.
---

## 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP 7.4+** | Backend logic & validation |
| **MySQL 5.7+** | Data persistence |
| **HTML5** | Structure & semantics |
| **CSS3** | Styling & animations |
| **JavaScript** | Client-side interactions |

---

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- 🐘 **PHP** (version 7.4 or higher)
- 🗄️ **MySQL** (version 5.7 or higher)
- 🌐 **Web Server** (Apache, Nginx, or XAMPP/WAMP/MAMP)
- 🖥️ **Web Browser** (Chrome, Firefox, Safari, or Edge)

---

## 🚀 Installation Guide

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/Suresh-Shrestha1/user-registration.git
cd user-registration
```

### 2️⃣ Database Setup
```sql
-- Create the database
CREATE DATABASE IF NOT EXISTS user_db;
USE user_db;
```

### 3️⃣ Configure Database Connection
Update the database credentials in `submit.php` and `createTable&db.php`:
```php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "user_db";
```

### 4️⃣ Create the Users Table
Run the setup script:
```bash
php createTable&db.php
```

### 5️⃣ Start Your Web Server
```bash
# If using PHP's built-in server
php -S localhost:8000

# Or place files in your web server's directory
# Example: /var/www/html/ or htdocs/
```

### 6️⃣ Access the Application
Open your browser and navigate to:
```
http://localhost:8000/index.php
```

---
