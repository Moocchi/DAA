# Business Requirements Document (BRD)

## 1.1 Introduction
Dokumen ini merupakan Business Requirements Document (BRD) yang bertujuan untuk menjelaskan kebutuhan dan alur kerja pada proyek pengembangan **Sistem Manajemen Gudang**. Sistem ini dirancang untuk mendukung proses pengelolaan lokasi penyimpanan barang, pemantauan barang masuk dan keluar, pelacakan barang menggunakan barcode, serta pembuatan laporan ketersediaan barang di gudang tertentu.

## 1.2 Project Scope
Sistem ini akan mencakup modul-modul berikut:
- **Manajemen Gudang**: Mengelola data lokasi penyimpanan barang dan kapasitas gudang.
- **Manajemen Barang**: Menambah, mengedit, dan menghapus data barang.
- **Pemantauan Barang**: Memantau status barang yang masuk dan keluar dari gudang.
- **Pelacakan Barang**: Melacak barang dengan menggunakan teknologi barcode.
- **Laporan Ketersediaan Barang**: Membuat laporan ketersediaan barang di gudang tertentu untuk mempermudah pengambilan keputusan.

---

## 2. System Requirements

### 2.1 Business Flow
1. **Manajemen Gudang**:
   - Admin menambahkan data gudang beserta lokasi dan kapasitas penyimpanan.
   - Admin memperbarui informasi gudang jika terjadi perubahan.

2. **Manajemen Barang**:
   - Barang baru diinput ke dalam sistem dengan data detail, termasuk kategori, jumlah, dan lokasi penyimpanan.
   - Barang yang habis dapat ditandai sebagai *out of stock* atau dihapus dari sistem.

3. **Pemantauan Barang**:
   - Setiap barang yang masuk dan keluar dari gudang dicatat dengan detail, termasuk waktu transaksi dan pihak yang terkait.

4. **Pelacakan Barang**:
   - Sistem memungkinkan pelacakan lokasi barang tertentu dalam gudang menggunakan barcode atau pencarian manual.

5. **Laporan Ketersediaan Barang**:
   - Admin dapat menghasilkan laporan stok barang per gudang untuk mengetahui status ketersediaan dan kebutuhan restocking.

---

## 3. Business Requirements

### 3.1 Functional Requirements

| No | Kebutuhan Modul/Doctype                         | Status             |
|----|-------------------------------------------------|--------------------|
| 1  | **Manajemen Gudang**<br>- Insert<br>- View<br>- Update<br>- Delete | Modul/doctype baru |
| 2  | **Manajemen Barang**<br>- Insert<br>- View<br>- Update<br>- Delete | Modul/doctype baru |
| 3  | **Pemantauan Barang**<br>- Catatan barang masuk<br>- Catatan barang keluar | Modul/doctype baru |
| 4  | **Pelacakan Barang**<br>- Pencarian barang berdasarkan barcode<br>- Pencarian manual | Modul/doctype baru |
| 5  | **Laporan Ketersediaan Barang**<br>- Laporan stok barang<br>- Laporan kebutuhan restocking | Modul/doctype baru |

---

## 4. Approval

| No. | Modul/Doctype             | Tingkat Persetujuan                                               |
|-----|----------------------------|------------------------------------------------------------------|
| 1   | **Manajemen Gudang**       | Admin mengelola lokasi gudang, menentukan kapasitas, dan mengedit data gudang. |
| 2   | **Manajemen Barang**       | Admin bertanggung jawab atas validasi data barang yang masuk atau keluar. |
| 3   | **Pemantauan Barang**      | Admin mencatat dan memverifikasi setiap transaksi barang masuk dan keluar. |
| 4   | **Pelacakan Barang**       | Admin memastikan akurasi data barang melalui pencarian berbasis barcode atau manual. |
| 5   | **Laporan Ketersediaan**   | Admin membuat laporan untuk manajer gudang atau pihak terkait guna mendukung pengambilan keputusan. |

---

Dokumen ini dapat digunakan sebagai panduan untuk pengembangan **Sistem Manajemen Gudang**.