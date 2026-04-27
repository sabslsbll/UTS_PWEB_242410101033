<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/7f6ac470-4231-42d3-b902-6c43d91a8019" />
<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/1befcdf6-5419-46cc-ad61-cb590e83678e" />
<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/ca190592-0d47-4f2b-9941-de9c4a877841" />
<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/6ab7b667-872e-4815-acb7-848e98a85231" />

## 🔍 Penjelasan Detail Komponen Aplikasi

### 1. Halaman Login: Gerbang Autentikasi
Halaman ini merupakan *entry point* aplikasi yang mengintegrasikan aspek keamanan dan identitas brand.
* **Logika Backend (Route & Controller):** Form menggunakan method `POST` yang diarahkan ke route `login.process`. Controller menangkap data `username` dan `role` untuk didefinisikan ke dalam sesi aplikasi.
* **Strategi UI/UX:**
    * **Visual Identity:** Penempatan logo TyCake sebagai jangkar visual untuk memperkuat *branding*.
    * **Background Pattern:** Implementasi gambar motif roti dengan teknik *low-opacity*, menjaga fokus user pada form utama tanpa menghilangkan estetika tema "Bakery/Restaurant".
    * **Data Integrity:** Penggunaan elemen `<select>` pada input *Role* guna memastikan validitas data yang masuk ke sistem (hanya menerima 'Admin' atau 'User').

### 2. Halaman Dashboard: Personalisasi & Katalog
Pusat informasi utama yang menampilkan keberhasilan integrasi pengiriman data antar-halaman.
* **Dynamic Content Rendering:** Penggunaan sintaks Blade `{{ $username }}` untuk menampilkan sapaan personal (contoh: "HELLO, SAB!"). Ini membuktikan efektivitas *data passing* melalui URL Query String.
* **Product Mapping & Grid:**
    * **Component-Based:** Setiap produk ditampilkan melalui komponen kartu (*Card*) yang seragam.
    * **Tailwind Grid:** Menggunakan class `grid-cols-3` untuk tata letak yang presisi dan responsif di berbagai ukuran layar.
* **Visual Calm:** Penggunaan `z-index` rendah pada background dikombinasikan dengan animasi `floating-object` menciptakan suasana tenang, selaras dengan visi produk sebagai snack *anxiety relief*.

### 3. Halaman Pengelolaan: Pengolahan Data Iteratif
Mendemonstrasikan efisiensi manajemen data dalam jumlah besar menggunakan fitur bawaan Laravel.
* **Blade Data Loop:** Implementasi `@foreach` untuk merender seluruh daftar menu. Teknik ini memangkas redundansi kode HTML secara signifikan.
* **Controller-Side Data:** Data menu dikelola dalam *Array Asosiatif* di dalam Controller. Hal ini memungkinkan pembaruan data (seperti perubahan harga atau nama menu) secara terpusat tanpa menyentuh file View.
* **Conditional Rendering:** Adanya label "Mode: Admin" yang merupakan dasar dari sistem hak akses pengguna (*Access Control*), menggunakan logika `@if($role == 'admin')`.

### 4. Halaman Profile: Manajemen Sesi & Identitas
Berfungsi sebagai hub informasi pengguna sekaligus gerbang keamanan keluar sistem.
* **Identitas Visual:** Inisial pengguna otomatis ditampilkan dalam lingkaran avatar untuk kemudahan identifikasi akun secara cepat.
* **Role-Based Feedback:** Teks informasi yang menyesuaikan secara otomatis berdasarkan *role* pengguna, menunjukkan logika aplikasi yang adaptif.
* **Security Logout:** Mekanisme tombol keluar yang memicu route `logout` untuk mengeksekusi `Session::flush()`. Langkah ini krusial untuk menghapus seluruh jejak data sesi guna mencegah akses ilegal setelah user meninggalkan perangkat.

### 5. Arsitektur Teknis (The Secret Sauce)
Di balik antarmuka yang terlihat, terdapat dua pilar teknis yang menjaga performa aplikasi:
* **Layouting System (`app.blade.php`):** Menggunakan sistem master template dengan `@yield('content')`. Hal ini mencegah duplikasi kode Navbar dan Footer, sehingga pemeliharaan kode (maintenance) menjadi jauh lebih efisien.
* **Asset Management:** Pengelolaan aset gambar di direktori `public/img/` yang dipanggil melalui *helper* `asset()`. Ini merupakan *best practice* Laravel untuk memastikan jalur (path) gambar tetap valid dan cepat saat aplikasi dideploy ke server produksi.
