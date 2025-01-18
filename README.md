# Coffee Recipes

## Initial Setup

### 1. Clone the Repository
```bash
git clone [repository-url]
cd [project-name]
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

### 4. Database Configuration
1. Start XAMPP
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

### 6. Start Development Server
```bash
php artisan serve
```