# 🏥 Sistem Antrian Klinik Mini

Aplikasi **Sistem Antrian Klinik Mini** berbasis web menggunakan **Laravel**, yang digunakan untuk mengelola pendaftaran dan antrian pasien pada sebuah klinik sederhana.

---

## 📌 Deskripsi Aplikasi

Sistem ini memungkinkan:
- **Admin** mengelola data poli, dokter, serta mengatur status antrian pasien.
- **User (Pasien)** mendaftar antrian dokter, melihat riwayat antrian, dan membatalkan antrian jika belum dipanggil.

Aplikasi dibuat untuk memenuhi tugas **UAS Pemrograman Web**.

---

## 🛠️ Teknologi yang Digunakan

- **Laravel 10**
- **PHP 8+**
- **SQLite** (Database)
- **Blade Template Engine**
- **Tailwind CSS**
- **Laravel Auth (Login & Register)**

---

## 👤 Role Pengguna

### 1️⃣ Admin
Fitur:
- Login sebagai admin
- Manajemen Poli (CRUD)
- Manajemen Dokter (CRUD)
- Melihat seluruh data antrian
- Mengubah status antrian:
  - WAITING
  - CALLED
  - DONE
  - CANCELED

### 2️⃣ User (Pasien)
Fitur:
- Registrasi & Login
- Melihat daftar dokter & poli
- Mendaftar antrian dokter
- Melihat riwayat antrian
- Membatalkan antrian (jika status masih WAITING)

untuk masuk sebagai admin :
email : admin
pasword : admin
---

## 📂 Struktur Folder Penting

app/
├── Models/
│ ├── User.php
│ ├── Doctor.php
│ ├── Poli.php
│ └── Queue.php
│
├── Http/
│ └── Controllers/
│ ├── Admin/
│ └── User/

resources/
├── views/
│ ├── admin/
│ └── user/
│ └── antrian/

database/
├── migrations/
└── database.sqlite


---

## 🧱 Struktur Tabel Utama

### Tabel `queues`
| Kolom | Tipe |
|------|------|
| id | bigint |
| user_id | foreign key |
| doctor_id | foreign key |
| visit_date | date |
| queue_number | integer |
| complaint | text |
| status | enum |
| created_at | timestamp |
| updated_at | timestamp |

Status antrian:
- `WAITING`
- `CALLED`
- `DONE`
- `CANCELED`

---

## ⚙️ Cara Menjalankan Aplikasi

### 1️⃣ Clone Repository
```bash
git clone <repository_url>
cd sistem_antrian_klinik_mini


2️⃣ Install Dependency
    composer install

3️⃣ Copy Environment
    cp .env.example .env
    php artisan key:generate

4️⃣ Konfigurasi Database
    touch database/database.sqlite

.env:
    DB_CONNECTION=sqlite
    B_DATABASE=/full/path/database/database.sqlite

Jalankan Migrasi
    php artisan migrate

6️⃣ Jalankan Server
    php artisan serve

Akses aplikasi:
    http://127.0.0.1:8000
    

👨‍💻 nama Kelompok :
        Mohammad Zainul Hasan : 2402510080
        Rizky Akbar Maulana : 2402510082
        Nur Aulia Shafira : 2402510078


Program Studi : SISTEM INFORMASI
    
Mata Kuliah : Web Basic Programming# antrian-klinik-mini
