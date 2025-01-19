# Coffee Recipes

## Initial Setup

### 1. Clone the Repository
```bash
git clone git@github.com:umprej/coffee-lara.git
cd coffee-lara
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Environment Setup
- Copy the example environment file:
```bash
cp .env.example .env
```
- Generate application key:
```bash
php artisan key:generate
```
-  Create a symbolic link from source directory storage/app/public to target directory public/storage:
```bash
php artisan storage:link
```

### 4. Database Configuration
1. Download [XAMPP](https://sourceforge.net/projects/xampp/files/latest/download) and run it
2. Launch Apache and MySQL from XAMPP Control Panel
3. Open `.env` and update database settings:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=coffee-db
DB_USERNAME=root
DB_PASSWORD=
```
4. Create a new database in phpMyAdmin called *coffee-db*

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Seed the database
```bash
php artisan db:seed
```

### 7. Start Development Server
```bash
php artisan serve
```
