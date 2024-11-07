# Business Requirements Document (BRD)

**Sistem Pinjaman Uang** 

### 1.1 Intruduction

Dokumen ini merupakan Business Requirement Document (BRD) yang bertujuan untuk menjelaskan kebutuhan dan alur kerja pada proyek pengembangan Sistem Simpan Pinjam Uang. Sistem ini dirancang untuk mendukung proses pengajuan dana, manajemen Admin, manajemen Nasabah, peminjaman, dan pelunasan.

### 1.2 Project Scope

Sistem ini akan mencakup modul-modul berikut :

- **Manajemen Admin** : Melakukan perekrutan untuk anggota admin dan memberikan akses ADMIN.

- **Manajemen Nasabah** : Melakukan registrasi, pembaruan data nasabah, serta mengelola informasi profil nasabah untuk memastikan keakuratan data dan mendukung proses peminjaman serta pelunasan pinjaman.

- **Peminjaman** : Mendukung proses pengajuan pinjaman oleh nasabah, termasuk verifikasi kelayakan, persetujuan pinjaman, penentuan jumlah dana, suku bunga, dan jangka waktu pinjaman. Sistem ini juga akan mencatat setiap transaksi peminjaman untuk mempermudah monitoring dan pelaporan.

- **Pelunasan** : Memfasilitasi proses pelunasan pinjaman oleh nasabah, termasuk penjadwalan pembayaran, pencatatan pembayaran cicilan, perhitungan bunga dan denda keterlambatan (jika ada), serta memberikan notifikasi atau pengingat untuk pembayaran yang jatuh tempo.

# 2. System Requirment 

### 2.1 Business Flow

1. **Admin** : 
    - Admin melakukan registrasi, mendapatkan akses sistem dengan hak khusus dan mengatur nasabah.

2. **Registrasi Nasabah** :
   - Nasabah mengajukan registrasi dan input data untuk pinjaman.
   - Admin menerima notifikasi dan memverifikasi data nasabah.
   - Jika disetujui, nasabah dapat mengajukan pinjaman; jika ditolak, nasabah menerima notifikasi penolakan.

3. **Pengajuan Pinjaman** :
    - Nasabah yang terdaftar mengajukan permohonan pinjaman melalui sistem.
    - Admin mengecek kelayakan dan melakukan verifikasi data nasabah.
    - Jika disetujui, pinjaman diproses dan nasabah menerima notifikasi pencairan; jika ditolak, nasabah diberi tahu.

4. **Pembauaran cicilan** :
    - Nasabah melakukan pembayaran cicilan sesuai jadwal yang ditentukan.
    - Sistem mencatat setiap pembayaran dan memperbarui saldo pinjaman.
    - Jika ada keterlambatan, sistem menghitung denda dan menginformasikan nasabah.

5. **Pelunasan Pinjaman** :
    - Nasabah melunasi pinjaman secara penuh.
    - Admin memverifikasi pelunasan dan menutup status pinjaman di sistem.
    - Nasabah menerima konfirmasi bahwa pinjaman telah lunas.

## 3. Business Requirement

### 3.1 Fungsional Requirement

| No | Kebutuhan Modul/Doctype                          | Status             |
|----|--------------------------------------------------|--------------------|
| 1  | **Registrasi Nasabah**<br>- Insert<br>- View<br>- Update<br>- Delete | Modul/doctype baru |
| 2  | **Penerimaan/Notifikasi Status Registrasi**<br>- Ditolak<br>- Diterima | Modul/doctype baru |
| 3  | **Manajemen Pinjaman**<br>- Menambah Pinjaman<br>- Menghapus Pinjaman<br>- Update Data Pinjaman | Modul/doctype baru |
| 4  | **Pengecekan Kelayakan Pinjaman**<br>- Tersedia<br>- Tidak Tersedia | Modul/doctype baru |
| 5  | **Peminjaman Dana**<br>- Pengecekan Kelayakan<br>- Update Jadwal Pengembalian | Modul/doctype baru |
| 6  | **Pelunasan Pinjaman**<br>- Mengembalikan Dana<br>- Memberitahukan Status Pelunasan | Modul/doctype baru |


## 4. Persetujuan

| No. | Modul/Doctype             | Tingkat Persetujuan                                               |
|-----|----------------------------|------------------------------------------------------------------|
| 1   | **Registrasi Nasabah**     | Admin melakukan verifikasi data nasabah baru dan menentukan status diterima atau ditolak. |
| 2   | **Pengajuan Pinjaman**     | Admin memverifikasi kelayakan nasabah dan menyetujui pengajuan pinjaman jika memenuhi syarat. |
| 3   | **Pembayaran Cicilan**      | Sistem mencatat pembayaran cicilan dan memeriksa kelengkapan data pembayaran. |
| 4   | **Pelunasan Pinjaman**      | Admin memverifikasi pelunasan dan menutup status pinjaman di sistem. |

---

Dokumen ini dapat digunakan sebagai panduan untuk pengembangan sistem simpan pinjam uang.
