# Fitur Otentikasi di Laravel 11

Ini adalah contoh proyek Laravel 11 yang mencakup fitur otentikasi. Proyek ini juga menunjukkan cara menggunakan seeder data untuk mengisi basis data dengan data awal.

## Fitur

-   cread data/membuat data
-   read data/menampilkan data
-   update data/mengubah data
-   delete data/menghapus data

## Kelebihan

-   Preview data saat proses create, read, dan update data
-   Memiliki 3 Tabel yang berbeda
-   Sudah terdapat relasi antar Tabel
-   Mampu buat dan ubah data gambar, video, file, dan audio
-   Tampilan Dashboard

## Instalasi

### Prasyarat

-   PHP >= 8.2
-   Composer
-   MySQL atau basis data lain yang didukung
-   Tool Code Editor
-   Tool untuk menjalankannya di local server

### Langkah-langkah

1. Kloning repositori:

    ```bash
    git clone https://github.com/hamdaniqhmqd/create-view-update-and-delete-features-in-laravel-11.git
    cd create-view-update-and-delete-features-in-laravel-11
    ```

2. Instal dependensi:

    ```bash
    composer install
    ```

3. Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Konfigurasi basis data Anda di file `.env`:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda
    ```

6. Jalankan migrasi:

    ```bash
    php artisan migrate
    ```

7. Mulai server pengembangan:

    ```bash
    php artisan serve
    ```

## Penggunaan

### Tampilan Dashboard

Pengguna bisa mengubah dan mengatur tampilan dashboard sesuai dengan keinginan.

### Routing

Terdapat pilihan route, antara lain

-   `/dashboard` untuk mengarah ke tampilan dashboard
-   `/teks` untuk mengarah ke tampilan data yang digunakan untuk mengelola data teks
-   `/file` untuk mengarah ke tampilan file yang digunakan untuk mengelola data file seperti:
    -   file gambar
    -   file dokumen
    -   file audio
    -   file video
-   `/select` untuk mengarah ke tampilan yang digunakan untuk mengelola data select, yang dimana tabel select dan tabel teks saling memiliki relasi
