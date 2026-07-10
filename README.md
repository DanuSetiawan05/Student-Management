# Student Management System

A web-based student management system with multi-role access (**Admin** & **User**). Built with Laravel, it streamlines academic administration — managing students, teachers, courses, batches, enrollments, and payments — while giving general users an informative campus profile experience.

## ✨ Key Features

### For Admin
- Secure login with role-based access
- Dashboard with **data visualization** (charts showing student & teacher distribution/overview)
- Full CRUD (Create, Read, Update, Delete) for:
  - **Student** data (with photo upload)
  - **Teacher** data (with photo upload)
  - **Course** data
  - **Batch** data
  - **Enrollment** data
  - **Payment** data
- **Export payment receipts to PDF** for easier record-keeping and reporting

### For User
- Register & login
- Home page with informative navigation (Campus Profile, News, Achievements, Contact)
- View campus/company profile details
- View news (Berita) and student achievements (Prestasi)
- Send messages via contact form (delivered to admin's email)
- Logout

## 📸 Screenshots

### User Side

**Login**

<div align="center">
  <img src="https://github.com/user-attachments/assets/047120b2-b5c6-4e38-b352-9d6bbfe5e983" alt="Login Page" width="600">
</div>

**Register**

<div align="center">
  <img src="https://github.com/user-attachments/assets/9fa3514c-c56e-4eeb-ba5c-fa0a339d2b1e" alt="Register Page" width="600">
</div>

**Home User**

<div align="center">
  <img src="https://github.com/user-attachments/assets/d89d9737-5c82-408b-a4f7-9758c22c983f" alt="Home User" width="600">
</div>

*Displays the homepage after login, where users can browse available campus information sections.*

### Admin Side

**Dashboard (Homepage Admin)**

<div align="center">
  <img src="https://github.com/user-attachments/assets/00a5f040-9989-41a9-807b-af2a6d35c105" alt="Admin Dashboard" width="600">
</div>

*Shows a welcome overview along with charts comparing student and teacher data.*

**Student Management**

<div align="center">
  <img src="https://github.com/user-attachments/assets/0c85ddd6-6b69-4890-b71a-40549f87b217" alt="Student Page" width="600">
</div>

**Teacher Management**

<div align="center">
  <img src="https://github.com/user-attachments/assets/d4b11e74-2e90-4e28-9421-b1fe4cc7781b" alt="Teacher Page" width="600">
</div>

**Course Management**

<div align="center">
  <img src="https://github.com/user-attachments/assets/7ac911a7-1226-4be4-89f9-04c04f572768" alt="Course Page" width="600">
</div>

**Batch Management**

<div align="center">
  <img src="https://github.com/user-attachments/assets/63803632-29e8-4881-80b2-095e0ee15e9f" alt="Batches Page" width="600">
</div>

**Enrollment Management**

<div align="center">
  <img src="https://github.com/user-attachments/assets/d422aa07-3307-4199-97e3-89f22642ba76" alt="Enrollment Page" width="600">
</div>

**Payment Management**

<div align="center">
  <img src="https://github.com/user-attachments/assets/8855eaeb-e265-478f-886f-73c3dba52481" alt="Payment Page" width="600">
</div>

**Payment Receipt (PDF Export)**

<div align="center">
  <img src="https://github.com/user-attachments/assets/683214a7-992b-49c8-acc2-906aa0b66f06" alt="Payment Receipt PDF" width="600">
</div>

## 🛠️ Tech Stack

- **Backend:** Laravel 11 (PHP)
- **Frontend:** HTML, CSS, JavaScript, Blade Template
- **Database:** MySQL
- **Reporting:** PDF export for payment receipts

## 🚀 Getting Started

### Prerequisites
- PHP >= 8.0
- Composer
- MySQL
- Node.js & NPM

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/DanuSetiawan05/Student-Management.git
cd Student-Management

# 2. Install PHP dependencies
composer install

# 3. Install frontend dependencies
npm install
npm run dev

# 4. Copy the environment file and generate the app key
cp .env.example .env
php artisan key:generate

# 5. Configure your database in the .env file
# DB_DATABASE=student_management
# DB_USERNAME=root
# DB_PASSWORD=

# 6. Run database migrations
php artisan migrate

# 7. Serve the application
php artisan serve
```

The app will be available at `http://127.0.0.1:8000`.

## 👥 Team

This project was built collaboratively as a group project:

| Name |
|---|
| Annas Wicaksono | 
| Mochammad Irsyad Kurniawan | 
| **Muhammad Danu Setiawan** | 
| Muhammad Ilza Batistuta | 


## 📄 License

This project is open source and available for learning purposes.
