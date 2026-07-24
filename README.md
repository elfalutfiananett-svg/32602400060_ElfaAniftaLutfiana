# CRUD Buku - CodeIgniter 4

Aplikasi CRUD (Create, Read, Update, Delete) sederhana untuk mengelola data buku, dibuat menggunakan framework **CodeIgniter 4**.

---

## Fitur

- Menampilkan daftar buku
- Menambah data buku baru
- Mengedit data buku
- Menghapus data buku

## Teknologi yang Digunakan

- PHP 8.1 atau lebih tinggi
- CodeIgniter 4.7
- MySQL / MariaDB
- Composer

---

## Struktur Database

Aplikasi ini menggunakan database MySQL dengan nama `crud_buku` dan tabel `buku`.

### Buat Database dan Tabel

Jalankan query SQL berikut di phpMyAdmin atau MySQL CLI:

```sql
CREATE DATABASE crud_buku;

USE crud_buku;

CREATE TABLE buku (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    penulis VARCHAR(255) NOT NULL,
    penerbit VARCHAR(255) NOT NULL,
    tahun_terbit YEAR NOT NULL
);
```

---

## Cara Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/username/32602400060_ElfaAniftaLutfiana.git
cd 32602400060_ElfaAniftaLutfiana
```

### 2. Install Dependencies

Pastikan [Composer](https://getcomposer.org/) sudah terinstall, lalu jalankan:

```bash
composer update
```

### 3. Konfigurasi Environment

Salin file `env.example` menjadi `.env`:

```bash
# Windows
copy env.example .env

# Linux/Mac
cp env.example .env
```

Kemudian sesuaikan konfigurasi database di file `.env` jika diperlukan:

```
database.default.hostname = localhost
database.default.database = crud_buku
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.port = 3306
```

### 4. Buat Database

Buat database `crud_buku` dan tabel `buku` sesuai struktur SQL di atas.

### 5. Jalankan Aplikasi

```bash
php spark serve
```

Aplikasi akan berjalan di: **http://localhost:8080**

---

## Halaman yang Tersedia

| URL | Method | Keterangan |
|-----|--------|------------|
| `/` | GET | Halaman utama |
| `/buku` | GET | Daftar semua buku |
| `/buku/tambah` | GET | Form tambah buku |
| `/buku/simpan` | POST | Proses simpan buku baru |
| `/buku/edit/{id}` | GET | Form edit buku |
| `/buku/update/{id}` | POST | Proses update buku |
| `/buku/hapus/{id}` | GET | Hapus buku |

---

## Persyaratan Sistem

- PHP >= 8.1
- MySQL >= 5.7 atau MariaDB >= 10.3
- Composer >= 2.0
- Extension PHP yang dibutuhkan:
  - `intl`
  - `mbstring`
  - `json`
  - `mysqli`
  - `curl`

---

## Catatan

- Jika muncul warning `Module "mysqli" is already loaded`, itu tidak berbahaya dan bisa diabaikan.
- Pastikan extension PHP `intl` sudah aktif di `php.ini`.
- Gunakan `composer update` (bukan `composer install`) jika versi PHP kamu berbeda dari yang tercatat di `composer.lock`.
