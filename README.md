
##📝 Penulis

#Nama: Muhamad Nabil Satriya Suntara 
#NIM: 312410365 
#Program Studi: Teknik Informatika, Universitas Pelita Bangsa

##📋 Deskripsi Proyek

Perusahaan objek penelitian ini sebelumnya menggunakan sistem manual yang memiliki risiko tinggi kesalahan pencatatan dan lambatnya pengecekan stok. Aplikasi ini hadir untuk meningkatkan akurasi data dan mempercepat proses pelayanan pelanggan.


##🚀 Fitur Utama

Autentikasi Keamanan: Login untuk admin untuk menjaga keamanan data.
Manajemen Inventaris (Kelola Stok): Fitur untuk menambah, mengedit, dan menghapus data produk blower.
Proses Transaksi: Perhitungan total harga otomatis dan pengurangan stok secara real-time saat pembayaran sukses.
Laporan Penjualan: Ringkasan data transaksi untuk membantu pengambilan keputusan bisnis.
Bukti Transaksi: Pembuatan nota atau bukti pembayaran digital secara otomatis.

##🛠️ Metodologi Pengembangan

Proyek ini menggunakan metode Prototype yang mencakup tahapan berikut:
Pengumpulan Kebutuhan: Identifikasi aktor dan fungsi sistem.
Membangun Prototyping: Perancangan struktur data dan alur kerja.
Evaluasi Prototyping: Validasi logika bisnis (misal: perhitungan total harga).
Pengkodean: Transformasi diagram ke dalam bahasa pemrograman.
Pengujian: Uji coba fungsi utama seperti pengurangan stok otomatis.

##📊 Perancangan Sistem

Sistem ini dirancang menggunakan alat bantu UML (Unified Modeling Language):
1. Use Case Diagram
Menggambarkan interaksi antara Pengguna dengan fitur sistem seperti Melihat Daftar Blower, Melakukan Pembelian, dan Melakukan Pembayaran.
2. Activity Diagram
Menjelaskan alur kerja dari login hingga transaksi selesai, termasuk penanganan kondisi jika pembayaran gagal.
3. Class Diagram
Struktur data yang terdiri dari kelas User, Blower, Transaksi, DetailTransaksi, dan Pembayaran.


##💻 Spesifikasi Teknis

Konektivitas: MySQLi (via database.php).
Database Name: penjualan_blower.
Host: localhost.
