* Deskripsi
    proejct ini merupakan web sederhana untuk mengelola data motor yang berbasis laravel 12 yang menggunakan konsep CRUD
* Fitur
- Menampilkan data motor
- Menambahkan data motor
- Mengedit data motor
- Menghapus data motor

  
* CARA MENJALALANKAN PROJECT
  1. Persiapan database
     - Buka phpMyadmin
     - Buat database baru
     - Klik database yang sudah dibuat lalu pilih tab import
     - Pilih file "data-motor.sql" yang ada di dalam folder project ini
     - Klik Go hingga muncul pesan sukses
       
  2. Persiapan Project
     - Buka folder project
     - Buka terminal di dalam folder tersebut
     - Jalankan perintah "composer install"
     - lalu salin "cp .env.example .env"
       
  3. Konfigurasi Environment
         Buka File yang bernama ".env" menggunakan VScode lalu ssesuaikan bagian ini
DB_DATABASE= (sesuaikan dengan nama database yang sudah dibuat tadi)
DB_USERNAME=root
DB_PASSWORD=

   4. Aktivasi project
          Jalankan perintah ini secara berurutan :
      php artisan key:generate
      php artisan serve
      
   6. Cara akses web CRUD
          Buka browser dan masukkan : "http://127.0.0.1:8000/motor"


Nama : Muhammad Jupri Haikal
Nim  : 240180067
Kelas: A2
