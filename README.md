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
4. Open phpMyAdmin and create a new database named *coffee-db*.

### 5. Run Migrations
```bash
php artisan migrate
```

### 6. Seed the database
```bash
php artisan db:seed
php artisan migrate:refresh --seed
```

### 7. Start Development Server
```bash
npm install
npm run dev
php artisan serve
```


## Troubleshooting
### 1. Failed to listen after 127.0.0.1:8000

If you see an error like this after running `php artisan serve`:

```bash
php artisan serve
  Failed to listen on 127.0.0.1:8000 (reason: ?)
```

Try running the following commands:

```bash
php --ini
```

Open the `php.ini` file at the path specified by the previous command and edit the following line the `variables_order`
```bash
variables_order = "GPCS"
```

### 2. MySQL Database not starting in XAMPP on MacOS
```bash
 sudo /Applications/XAMPP/xamppfiles/bin/mysql.server start
```

### 3. Old or duplicate data in the database
Refreshes the database and run all database seeds:
```bash
php artisan migrate:refresh --seed
```

