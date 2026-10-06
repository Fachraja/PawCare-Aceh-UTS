# 🐾 PawCare Aceh

PawCare Aceh adalah aplikasi web yang dibuat untuk membantu pengelolaan data kucing, proses adopsi, penitipan kucing, serta informasi lokasi penampungan kucing di Aceh.

Project ini dibuat menggunakan framework **Laravel** sebagai implementasi tugas **UTS Praktik POPL**.

## 👥 Anggota Tim

- **Fachraja** — 2408107010105
- **Arkan** — 2408107010076

## 🚀 Fitur

- Login dan autentikasi pengguna
- Melihat daftar kucing
- Menambahkan data kucing
- Mengedit dan menghapus data kucing
- Melihat detail kucing
- Pengajuan adopsi kucing
- Pengajuan penitipan kucing
- Melihat lokasi penampungan

## 🛠️ Teknologi

- **Laravel 12**
- **PHP 8.2**
- **MySQL**
- **Blade**
- **Tailwind CSS**
- **Vite**
- **Alpine.js**
- **Docker**
- **Git & GitHub**

## 🏗️ Arsitektur MVC

Project menggunakan pola arsitektur **MVC (Model-View-Controller)** yang merupakan pola utama pada Laravel.

- **Model** — Mengelola data dan interaksi dengan database.
- **View** — Menampilkan antarmuka aplikasi kepada pengguna menggunakan Blade.
- **Controller** — Mengatur proses dan alur data antara Model dan View.

Alur sederhana aplikasi:

```text
User
 ↓
Route
 ↓
Controller
 ↓
Model
 ↓
Database
 ↓
Controller
 ↓
View
 ↓
User
```

## ⚙️ Cara Menjalankan Project

### Persyaratan

Pastikan perangkat sudah memiliki:

- PHP 8.2 atau lebih baru
- Composer
- Node.js dan NPM
- MySQL
- Git

### 1. Clone Repository

```bash
git clone https://github.com/Fachraja/PawCare-Aceh-UTS.git
```

Masuk ke folder project:

```bash
cd PawCare-Aceh-UTS
```

### 2. Install Dependency

Install dependency Laravel:

```bash
composer install
```

Install dependency frontend:

```bash
npm install
```

### 3. Konfigurasi Environment

Buat file `.env` berdasarkan `.env.example`.

```bash
cp .env.example .env
```

Kemudian generate application key:

```bash
php artisan key:generate
```

Sesuaikan konfigurasi database pada file `.env`.

### 4. Jalankan Migration

```bash
php artisan migrate
```

### 5. Jalankan Aplikasi

Jalankan server Laravel:

```bash
php artisan serve
```

Kemudian buka:

```text
http://127.0.0.1:8000
```

Untuk menjalankan Vite dalam mode development, gunakan terminal lain:

```bash
npm run dev
```

### Cara Setup Otomatis

Project juga menyediakan script setup yang dapat digunakan untuk menjalankan proses instalasi secara otomatis:

```bash
composer run setup
```

Script tersebut menjalankan proses instalasi dependency, konfigurasi environment, generate application key, migration database, instalasi dependency frontend, dan build frontend.

## 🐳 Docker

PawCare Aceh menyediakan Docker Image untuk menjalankan aplikasi dalam container.

### Docker Image

Docker Hub:

https://hub.docker.com/r/fachraja/pawcare-aceh

### Image Tag

```text
fachraja/pawcare-aceh:1.0-UTS
```

### Pull Docker Image

```bash
docker pull fachraja/pawcare-aceh:1.0-UTS
```

### Menjalankan Container

```bash
docker run -p 8000:80 fachraja/pawcare-aceh:1.0-UTS
```

Setelah container berjalan, aplikasi dapat diakses melalui:

```text
http://localhost:8000
```

Dockerfile menggunakan **PHP 8.2 dengan Apache** dan mengarahkan Apache ke direktori `public` Laravel.

## 🌿 Branch Pengembangan

Pengembangan project menggunakan Git dan GitHub.

Kontribusi dokumentasi dilakukan pada branch:

```text
feat_dokumentasi/06-10-2026
```

## 🔗 Repository

### GitHub

https://github.com/Fachraja/PawCare-Aceh-UTS

### Docker Hub

https://hub.docker.com/r/fachraja/pawcare-aceh

## 📚 Tujuan Project

PawCare Aceh dikembangkan sebagai implementasi pembelajaran pengembangan aplikasi web menggunakan Laravel, penerapan arsitektur MVC, pengelolaan database, penggunaan Git dan GitHub, serta penggunaan Docker dalam pengembangan aplikasi.

## 📄 Lisensi

Project ini dibuat untuk keperluan akademik dalam mata kuliah **Praktik POPL**.