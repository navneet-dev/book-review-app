# 📚 Book Review App

A modern web application built with **Laravel 12** that allows users to explore books, read reviews, and share their own opinions. This project serves as a comprehensive example of a CRUD application with a relational database (MySQL).

---

## ✨ Features

- **📖 Book Catalog:** Browse a list of books with details like author, genre, and publication date.
- **✍️ User Reviews:** Add, edit, and delete reviews for any book.
- **⭐ Rating System:** Integrated star ratings for quick feedback.
- **🔍 Search & Filter:** Easily find books by title or author.
- **👤 Authentication:** Secure user registration and login (optional, but recommended).
- **🎨 Responsive UI:** Built with Tailwind CSS for a seamless experience on all devices.

---

## 🛠️ Tech Stack

- **Framework:** [Laravel 12](https://laravel.com)
- **Language:** PHP 8.3+
- **Database:** **MySQL 8.0+**
- **Frontend:** Tailwind CSS / Blade Templates

---

## 📦 Installation Guide

### 1. Clone the repository

```bash
git clone https://github.com/navneet-dev/book-review-app.git
cd book-review-app

```

### 2. Install Dependencies

```bash
composer install
npm install && npm run build

```

### 3. Environment Configuration

Laravel 12 defaults to SQLite. To use **MySQL**, update your `.env` file:

```bash
cp .env.example .env
php artisan key:generate

```

Open `.env` and update the database section:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=book_review
DB_USERNAME=root
DB_PASSWORD=your_password

```

### 4. Run Migrations & Seeders

Make sure your MySQL server is running and the database `book_review` exists.

```bash
php artisan migrate --seed

```

### 5. Launch the App

```bash
php artisan serve

```

Visit `http://127.0.0.1:8000` to see it in action!

---

## 📂 Key Components

- `app/Models/Book.php`: Model representing the books table.
- `app/Models/Review.php`: Model representing the reviews table (linked via `book_id`).
- `app/Http/Controllers/ReviewController.php`: Handles the logic for posting and managing reviews.
- `resources/views/books/index.blade.php`: The main dashboard for viewing books.
