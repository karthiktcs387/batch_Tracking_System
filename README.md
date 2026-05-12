# Laravel Batch Processing System

A scalable batch processing system built using Laravel.

## Features

- File Upload System
- Store Data in MySQL
- Batch Processing
- Queue Worker
- Process Records in Chunks
- Update Status from Pending to Completed
- Download Files
- Delete Files
- Display Uploaded Records

---

## Technologies Used

- PHP
- Laravel 9
- MySQL
- XAMPP
- Laravel Artisan Commands

---

## Project Setup

### Clone Repository

```bash
git clone <your-github-repository-link>
Move to Project Folder
cd batch-processing-system
Install Dependencies
composer install
Configure Environment

Copy .env.example to .env

copy .env.example .env

Generate application key:

php artisan key:generate
Database Setup

Create database in phpMyAdmin:

batch_processing

Update .env file:

DB_DATABASE=batch_processing
DB_USERNAME=root
DB_PASSWORD=
Run Migration
php artisan migrate
Start Laravel Server
php artisan serve

Open:

http://127.0.0.1:8000
Batch Processing
Create Seeder Data
php artisan db:seed --class=BatchTestSeeder

This generates 1000 records.

Start Queue Worker
php artisan queue:work
Run Batch Command
php artisan process:batch

Records will be processed and status changes from:

pending -> completed
