# Admin Portal - Laravel Application

This is a Laravel-based Admin Portal for managing customers and invoices dynamic modules with customizable fields.

## Requirements

- PHP >= 8.0.2
- Laravel 9.19
- Composer
- MySQL
---

## Installation

1. **Clone the Repository**

git clone https://github.com/dilnamohanan1994/adminportal.git
cd adminportal

2. **Install PHP Dependencies**

composer install

3. **Create .env File**

cp .env.example .env

4. **Generate Application Key**

php artisan key:generate

5. **Run Migrations**
   
php artisan migrate

7. **Run Seeders**
   
php artisan db:seed

9. **Run Laravel Server**

php artisan serve
