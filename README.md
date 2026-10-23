# PPDB Online — SMP Negeri 1 Pirime

Repositori prototipe antarmuka Penerimaan Peserta Didik Baru dengan Bahasa Indonesia dan desain responsif untuk HP maupun desktop.

## Pratinjau

Buka `index.html` di browser untuk melihat halaman publik dan alur demo antarmuka.

## Fitur prototipe saat ini

- Beranda dengan informasi PPDB, persyaratan, alur pendaftaran, dan pengumuman.
- Desain biru tua, biru cerah, putih, dan kuning.
- Layout responsif untuk layar ponsel dan desktop.
- Modal registrasi dan login demo.
- Pratinjau dashboard calon siswa dan status dokumen.
- Konsep navigasi sidebar dashboard.

## Belum aktif / perlu backend

File `index.html` adalah prototipe front-end. Data demo disimpan lokal di browser dan bukan sistem pendaftaran sungguhan. Fitur berikut masih perlu implementasi backend Laravel 11, database, dan pengujian:

- Registrasi dan autentikasi nyata serta pemisahan hak akses siswa, panitia, dan admin.
- Formulir lima tahap dengan validasi server.
- Penyimpanan data dan pembuatan nomor pendaftaran yang unik.
- Unggah dokumen dengan validasi tipe/ukuran dan penyimpanan privat.
- Verifikasi dokumen, catatan panitia, perubahan status, serta pengumuman.
- Cetak bukti pendaftaran yang bersumber dari data tersimpan.
- Proteksi CSRF, otorisasi, pembatasan akses, dan audit keamanan.

## Rencana instalasi Laravel 11

Persyaratan: PHP 8.2+, Composer, Node.js/npm, dan MySQL/MariaDB.

```bash
composer create-project laravel/laravel:^11.0 ppdb-smpn1-pirime
cd ppdb-smpn1-pirime
php artisan key:generate
npm install
npm run build
php artisan serve
```

Atur kredensial database pada `.env` sebelum menjalankan migrasi. Implementasi Laravel berikutnya harus mencakup migrations, model, controller, Form Request validation, middleware/authorization, dan Blade views.

**Penting:** Jangan gunakan prototipe ini untuk mengumpulkan data pribadi atau dokumen asli siswa sebelum backend dan keamanan selesai diuji. Jadwal, kuota, dan persyaratan resmi PPDB harus dikonfirmasi oleh pihak sekolah.
