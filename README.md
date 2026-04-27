<img width="1366" height="768" alt="image" src="https://github.com/user-attachments/assets/7f6ac470-4231-42d3-b902-6c43d91a8019" />
1. Halaman Login
Halaman ini adalah titik awal aplikasi. Secara teknis, ini bukan sekadar form, melainkan proses pengumpulan data awal.
Logic (Route & Controller): Ketika tombol LOGIN diklik, form akan mengirimkan data via method POST ke route login.process. Controller kemudian menangkap input username dan role tersebut.
UI/UX:
Visual Identity: Penggunaan logo TyCake di atas form memberikan branding yang kuat.
Background Pattern: Menggunakan gambar motif roti dengan tingkat transparansi rendah (opacity) agar user tetap fokus pada form, namun tetap merasakan tema "Bakery/Restaurant".
Input Handling: Input Role menggunakan elemen <select> untuk memastikan data yang masuk ke sistem konsisten (hanya 'Admin' atau 'User').
