This repository create for learn PHP and Laravel framework in 2 + 5 days. 

## The Goal 

PHP -> LARAVEL -> MySQL/PostgreSQL (backend developer) 

---

## Deadline

- PHP + MYSQL = 2 DAYS

- LARAVEL = 5 DAYS 

---
## ChatGPT 7 Days Plan → Laravel Basics

### **Day 1: Local Environment Setup**

**Goal:** Local PHP + MySQL + GUI ready করা।

**Tools:** **Herd, DBngin, MySQL, TablePlus**

**Steps:**

1. Herd install করো (Mac users) বা XAMPP/Laragon (Windows)
2. DBngin দিয়ে MySQL server setup করো
3. TablePlus দিয়ে MySQL connect করো → verify server running
4. Create a test database, e.g., `company_test`
5. Write a simple PHP script to connect using PDO

   ```php
   <?php
   $dsn = "mysql:host=127.0.0.1;dbname=company_test";
   $pdo = new PDO($dsn, 'root', '');
   echo "Connected!";
   ```
6. Test that it prints “Connected!” in browser

**Tip:** আজকে শুধু setup confirm করো। Syntax অনেক গুরুত্বপূর্ণ নয় এখন, connection কাজ করলেই হবে।

---

### **Day 2: Basic PHP & PDO**

**Goal:** PHP syntax + database connection বোঝা।

**Steps:**

1. PHP basics: variables, arrays, echo/print, if/else, loops
2. PDO basics: connect, select, insert
3. Practice small CRUD operations in `company_test`

   * Table: `users` (id, name, email)
   * Insert one user, fetch all users, update & delete
4. Test queries in TablePlus → see results

---

### **Day 3: REST API with PHP**

**Goal:** Mini API understanding

**Steps:**

1. Create `api.php` handling: GET, POST, PUT, DELETE
2. Use JSON input/output:

   ```php
   header('Content-Type: application/json');
   echo json_encode(['status' => 'ok']);
   ```
3. Test API using **Postman**
4. Practice: GET all users, POST new user

**Tip:** Employers love candidates who can make API quickly.

---

### **Day 4: Move to Laravel – Setup**

**Goal:** Laravel install + environment ready

**Steps:**

1. Install Composer (dependency manager)
2. Install Laravel:

   ```bash
   composer create-project laravel/laravel laravel-app
   ```
3. Set `.env` database:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=company_test
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. Test Laravel server:

   ```bash
   php artisan serve
   ```

   → Open `http://127.0.0.1:8000`

---

### **Day 5: Laravel Basics – Routes & Controllers**

**Goal:** Laravel workflow বোঝা

**Steps:**

1. Route create করা: `routes/web.php`

   ```php
   Route::get('/hello', function() {
       return 'Hello Laravel!';
   });
   ```
2. Controller তৈরি করা:

   ```bash
   php artisan make:controller UserController
   ```
3. Controller থেকে simple function call করে response দেখাও

---

### **Day 6: Laravel + Database (Eloquent ORM)**

**Goal:** Laravel database operations

**Steps:**

1. Create migration & model:

   ```bash
   php artisan make:model User -m
   ```
2. Migration modify করে table columns define করো
3. Run migration: `php artisan migrate`
4. Eloquent practice: insert, fetch, update, delete

   ```php
   $user = User::create(['name'=>'Mojnu','email'=>'mojnu@example.com']);
   $users = User::all();
   ```

---

### **Day 7: Mini Project & Demo**

**Goal:** Ready for job + portfolio-ready

**Steps:**

1. Mini CRUD API in Laravel (users)

   * GET `/api/users` → fetch all
   * POST `/api/users` → create
   * PUT `/api/users/{id}` → update
   * DELETE `/api/users/{id}` → delete
2. Test everything in Postman
3. Prepare a small **demo video/screenshots** for employer
4. Review Day 1–6, make sure all commands, syntax, Laravel basics ready

---

💡 **Extra Tips:**

* Focus **PDO → Laravel Eloquent** (query logic same, syntax different)
* Laravel workflow: **Routes → Controller → Model → Migration → Views**
* Always test on **Postman** or browser


