# 🍰 TyCake Management System

**TyCake Management** adalah aplikasi berbasis web yang dibangun menggunakan framework **Laravel 11**. Website ini dirancang khusus untuk mengelola inventaris dan katalog produk snack sehat yang mendukung kesehatan mental (*mental health awareness*). Dengan antarmuka yang modern dan interaktif, TyCake memberikan pengalaman pengguna yang menenangkan sekaligus fungsional.

---

## 📸 Dokumentasi & Penjelasan Antarmuka

### 1. Gerbang Autentikasi (Halaman Login)
Halaman awal yang berfungsi sebagai pengumpul data identitas pengguna sebelum mengakses sistem.

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/7f6ac470-4231-42d3-b902-6c43d91a8019" />

* User diwajibkan memasukkan Username, Email, dan memilih Role (Admin/User). Secara teknis, form ini menggunakan metode `POST` untuk keamanan data. Background motif roti dengan transparansi rendah digunakan untuk memperkuat tema "Bakery" tanpa mengganggu fokus pada form input.

### 2. Dashboard: Personalisasi & Katalog Produk
Halaman utama yang menyambut pengguna setelah berhasil masuk ke sistem.

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/1befcdf6-5419-46cc-ad61-cb590e83678e" />

* Dashboard menampilkan sapaan dinamis berdasarkan data login (Contoh: "HELLO, SAB!"). Katalog produk ditampilkan menggunakan **Tailwind Grid System**, mencakup berbagai snack seperti Pancake, Donuts, hingga Cheesecake. Animasi objek melayang (*floating objects*) di latar belakang ditambahkan untuk menciptakan efek tenang selaras dengan visi produk.

### 3. Pengelolaan Menu TyCake
Halaman khusus yang mendemonstrasikan efisiensi manajemen data dalam jumlah besar.

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/ca190592-0d47-4f2b-9941-de9c4a877841" />

* Menampilkan daftar harga menu dalam bentuk tabel yang rapi. Data menu dikelola secara terpusat dalam *Array Asosiatif* di Controller dan dirender ke View menggunakan perulangan `@foreach`. Hal ini memungkinkan pembaruan data secara efisien tanpa mengubah kode HTML.

### 4. Profil Pengguna & Manajemen Sesi
Halaman informasi akun dan kontrol keamanan bagi pengguna yang aktif.

<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/6ab7b667-872e-4815-acb7-848e98a85231" />

* Menampilkan avatar otomatis berdasarkan inisial nama dan memberikan pesan khusus berdasarkan *role* yang dipilih. Di sini juga terdapat tombol **Log Out** yang menjalankan fungsi `Session::flush()`, memastikan seluruh jejak data sesi dihapus saat pengguna keluar demi keamanan akun.


