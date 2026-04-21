# CRUD Data Motor (Laravel 12)

## Deskripsi

Project ini merupakan web sederhana untuk mengelola data motor berbasis Laravel 12 yang menggunakan konsep CRUD.

## Fitur

* Menampilkan data motor
* Menambahkan data motor
* Mengedit data motor
* Menghapus data motor

---

## Cara Menjalankan Project

### 1. Persiapan Database

1. Buka phpMyAdmin
2. Buat database baru
3. Klik database yang sudah dibuat, lalu pilih tab **Import**
4. Pilih file **data-motor.sql** yang ada di dalam folder project ini
5. Klik **Go** sampai muncul pesan sukses

---

### 2. Persiapan Project

1. Buka folder project
2. Buka terminal di dalam folder tersebut
3. Jalankan perintah:

```
composer install
```

4. Salin file environment:

```
cp .env.example .env
```

---

### 3. Konfigurasi Environment

Buka file **.env** menggunakan VS Code, lalu sesuaikan bagian berikut:

```
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

(Sesuaikan dengan database yang sudah dibuat sebelumnya)

---

### 4. Aktivasi Project

Jalankan perintah berikut secara berurutan:

```
php artisan key:generate
php artisan serve
```

---

### 5. Cara Akses Web

Buka browser dan masukkan:

```
http://127.0.0.1:8000/motor
```

---

Nama  : Muhammad Jupri Haikal
NIM   : 240180067
Kelas : A2
