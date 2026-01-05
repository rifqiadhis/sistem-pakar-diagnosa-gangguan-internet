<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="350" alt="Laravel Logo">
  </a>
</p>

<h1 align="center">Sistem Pakar Diagnosa Gangguan Jaringan Internet</h1>

<p align="center">
  <strong>Tugas Akhir Mata Kuliah Expert System</strong><br>
  Program Studi Teknik Informatika
</p>

---

## 📌 Deskripsi Proyek

Proyek ini merupakan **Tugas Akhir mata kuliah Expert System** yang bertujuan untuk membangun sebuah **Sistem Pakar Diagnosa Gangguan Jaringan Internet** berbasis web.

Sistem ini dirancang untuk membantu pengguna dalam **mengidentifikasi jenis gangguan jaringan internet** berdasarkan gejala yang dialami, dengan menerapkan **metode Certainty Factor (CF)** untuk menangani tingkat ketidakpastian dalam proses diagnosis.

---

## 🧠 Metode yang Digunakan

Sistem pakar ini menggunakan metode:

- **Certainty Factor (CF)**
- Pendekatan **Forward Chaining**
- Basis pengetahuan dari pakar jaringan

Setiap gejala memiliki bobot keyakinan dari pengguna, yang kemudian dikombinasikan dengan nilai CF pakar untuk menghasilkan **tingkat kepastian diagnosis gangguan**.

---

## 🗂️ Daftar Gangguan yang Dideteksi

Sistem ini mampu mendiagnosa beberapa gangguan jaringan, antara lain:

- Kabel LAN Terputus / Longgar
- Konfigurasi IP Salah / DHCP Bermasalah
- Modem / Router Bermasalah
- Gangguan dari ISP (Jaringan Eksternal)
- Masalah DNS
- Sinyal WiFi Lemah / Interferensi

---

## 🧾 Daftar Gejala

Terdapat **16 gejala** yang digunakan sebagai dasar diagnosis, seperti:

- Tidak bisa mengakses internet sama sekali
- Ikon tanda seru / No Internet Access
- Lampu indikator modem mati atau merah
- IP Address APIPA (169.254.x.x)
- WiFi sering terputus
- Beberapa website tidak bisa diakses
- Ping ke gateway atau IP publik gagal  
dan gejala lainnya.

---

## ⚙️ Teknologi yang Digunakan

- **Laravel** (Framework PHP)
- **Blade Template Engine**
- **Tailwind CSS**
- **MySQL / MariaDB**
- **Certainty Factor Method**

---

## 🔄 Alur Sistem

1. Pengguna memilih gejala yang dialami
2. Pengguna menentukan tingkat keyakinan (CF User)
3. Sistem menghitung nilai CF kombinasi
4. Sistem menampilkan:
   - Jenis gangguan
   - Nilai kepastian (CF)
   - Gangguan paling mungkin terjadi

---

## 📁 Struktur Utama Aplikasi

- `Gejala` → daftar gejala
- `Gangguan` → daftar gangguan
- `Basis Pengetahuan` → relasi gejala & gangguan beserta CF pakar
- `Diagnosa` → proses perhitungan dan hasil diagnosis

---

## 🚀 Cara Menjalankan Aplikasi

```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
