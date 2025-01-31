# **Analisis Sistem Manajemen Komunitas Remaja Masjid Berbasis Laravel, Docker, dan MySQL Dengan Metode 5W1H**

---

## **1. Latar Belakang**

**Sosial** merujuk pada interaksi antarindividu dalam masyarakat yang membangun hubungan timbal balik, sementara **komunitas** adalah kelompok yang memiliki tujuan, nilai, atau minat bersama. **Remaja Masjid** adalah komunitas yang terdiri dari remaja aktif di lingkungan masjid, berfokus pada penguatan nilai keagamaan, pengembangan diri, dan kontribusi sosial. Komunitas ini berperan sebagai wadah untuk membangun solidaritas, meningkatkan kepedulian sosial, serta menjadi agen perubahan dalam masyarakat.

Namun, pengelolaan kegiatan Remaja Masjid seringkali menghadapi kendala seperti:

- Kurangnya sistem terstruktur untuk mengelola anggota, kegiatan, dan keuangan.
- Kesulitan dalam memantau partisipasi anggota dan evaluasi program.
- Minimnya transparansi dalam pelaporan kegiatan kepada masyarakat.
- Belum optimalnya pemanfaatan teknologi untuk meningkatkan efektivitas pengelolaan komunitas.

Oleh karena itu, diperlukan sistem manajemen berbasis teknologi untuk mengatasi tantangan tersebut.

---

## **2. Identifikasi Masalah**

1. Tidak adanya sistem terpusat untuk mengelola data anggota dan kegiatan Remaja Masjid.
2. Sulitnya memantau partisipasi anggota dalam kegiatan keagamaan dan sosial.
3. Kurangnya transparansi dalam pelaporan keuangan dan hasil kegiatan.
4. Belum adanya sistem evaluasi program untuk meningkatkan kualitas kegiatan.
5. Manajemen waktu yang tidak optimal dalam penyelenggaraan kegiatan.

---

## **3. Rumusan Masalah**

1. Bagaimana membangun sistem profil Remaja Masjid yang informatif dan menarik?
2. Bagaimana merancang dashboard untuk mengelola anggota, kegiatan, dan keuangan?
3. Bagaimana mengukur partisipasi anggota dalam kegiatan?
4. Bagaimana menyusun laporan kegiatan dan keuangan yang transparan?
5. Bagaimana merancang sistem evaluasi program untuk meningkatkan kualitas kegiatan?

---

## **4. Tujuan Penelitian**

1. Membangun sistem profil Remaja Masjid yang mencakup visi, misi, dan prestasi.
2. Merancang dashboard kontrol untuk manajemen anggota, kegiatan, dan keuangan.
3. Mengembangkan sistem pemantauan partisipasi anggota.
4. Membuat laporan kegiatan dan keuangan yang transparan.

---

## **5. Metode Analisis (5W1H)**

### **5.1. What (Apa)**

- **Apa yang ingin dicapai?** Membangun sistem manajemen komunitas Remaja Masjid berbasis teknologi untuk meningkatkan efektivitas pengelolaan kegiatan.
- **Apa masalah utama?**
  Manajemen anggota, kegiatan, dan laporan yang masih manual.

### **5.2. Why (Mengapa)**

- **Mengapa sistem ini diperlukan?** Untuk meningkatkan transparansi, partisipasi anggota, dan kualitas program.
- **Mengapa menggunakan Laravel, Docker, dan MySQL?**
  Laravel untuk pengembangan cepat, Docker untuk konsistensi lingkungan, MySQL untuk penyimpanan data terstruktur.

### **5.3. Who (Siapa)**

- **Siapa yang terlibat?** Pengurus Remaja Masjid, anggota, dan masyarakat.
- **Siapa pengguna sistem?**
  Pengurus untuk manajemen, anggota untuk melihat kegiatan, masyarakat untuk mengakses informasi.

### **5.4. When (Kapan)**

- **Kapan implementasi?** Setelah 4 bulan pengembangan dan uji coba.
- **Kapan evaluasi dilakukan?**
  Setiap selesai kegiatan dan periode bulanan.

### **5.5. Where (Di mana)**

- **Di mana sistem digunakan?** Di lingkungan Remaja Masjid dan diakses online via web.
- **Di mana data disimpan?**
  Database MySQL di server cloud.

### **5.6. How (Bagaimana)**

- **Bagaimana sistem dibangun?** Menggunakan Laravel untuk frontend/backend, Docker untuk containerisasi, MySQL untuk database.
- **Bagaimana cara kerja?**
  Anggota mendaftar, kegiatan direncanakan, partisipasi dicatat, dan laporan dihasilkan otomatis.

---

## **6. Perancangan Sistem**

### **6.1. Entity Relationship Diagram (ERD)**

Entitas utama:

- **Anggota** (ID_Anggota, Nama, Kontak, Partisipasi)
- **Kegiatan** (ID_Kegiatan, Judul, Tanggal, Lokasi)
- **Keuangan** (ID_Keuangan, Sumber, Jumlah, Keterangan)
- **Laporan** (ID_Laporan, ID_Kegiatan, Hasil)

### **6.2. Flowchart Sistem**

1. **Pendaftaran Anggota** → Input Data → Verifikasi → Database.
2. **Perencanaan Kegiatan** → Input Jadwal → Notifikasi Anggota → Pelaksanaan.
3. **Pelaporan** → Input Hasil Kegiatan → Generate Laporan → Publikasi.

---

## **7. Implementasi Teknologi**

### **7.1. Konfigurasi Docker**

```yaml
version: '3.8'
services:
  app:
    build: .
    container_name: laravel_app
    volumes:
      - .:/var/www/html
    depends_on:
      - db
  db:
    image: mysql:8
    container_name: mysql_db
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: remaja_masjid
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"
```

---

## **8. Implementasi Fitur**

### **8.1. Profil Remaja Masjid**

- **Fitur:**
  - Deskripsi komunitas dan visi-misi
- **Implementasi:**
  Dibuat dengan Laravel Blade dan database MySQL.

### **8.2. Dashboard Kontrol**

- **Fitur:**
  - Manajemen anggota (tambah, edit, hapus).
  - List kegiatan.
- **Implementasi:**
  ```sql
  CREATE TABLE Anggota (
      ID_Anggota INT PRIMARY KEY AUTO_INCREMENT,
      Nama VARCHAR(100),
      Kontak VARCHAR(20),
  );
  ```

### **8.3. Manajemen Kegiatan**

- **Fitur:**
  - Input jadwal kegiatan (pengajian, piket).
- **Implementasi:**
  ```sql
  CREATE TABLE Kegiatan (
      ID_Kegiatan INT PRIMARY KEY AUTO_INCREMENT,
      Judul VARCHAR(200),
      Tanggal DATE
  );
  ```

### **8.4. Pelaporan dan Evaluasi**

- **Fitur:**

  - Laporan keuangan (pemasukan/pengeluaran).
- **Implementasi:**

  ```sql
  CREATE TABLE Laporan (
      ID_Laporan INT PRIMARY KEY AUTO_INCREMENT,
      ID_Kegiatan INT,
      Hasil TEXT
      FOREIGN KEY (ID_Kegiatan) REFERENCES Kegiatan(ID_Kegiatan)
  );
  ```

---

# 9.Flowchart untuk Sistem Remaja Masjid

**Kode PlantUML** :

```uml
@startuml
start
:User mengakses sistem;
if (Sudah login?) then (Ya)
  :Tampilkan menu utama;
else (Tidak)
  :Registrasi/Login anggota;
endif

split
  -> **Kelola Kegiatan**;
  :Input jadwal (pengajian/bakti sosial);
  :Konfirmasi peserta via QR code;
  :Simpan ke database;
split again
  -> **Lihat Jadwal**;
  :Tampilkan kalender kegiatan;
  :Unduh jadwal (PDF/Excel);
split again
  -> **Berkontribusi**;
  :Daftar partisipasi kegiatan;
  :Upload laporan hasil kegiatan;
  :Beri feedback;
end split

if (Admin?) then (Ya)
  -> **Kelola Keuangan**;
  :Input pemasukan/pengeluaran;
  :Generate laporan keuangan;
else (Tidak)
endif

:User keluar atau kembali ke menu awal;
stop
@enduml
```

**Output:**

flowchart

# 10.Use Case untuk Sistem Remaja Masjid

```
@startuml
left to right direction
actor "Anggota" as A
actor "Pengurus" as P

rectangle "Sistem Remaja Masjid" {
  (Login/Registrasi) as UC1
  (Mengelola Kegiatan) as UC2
  (Melihat Jadwal) as UC3
  (Berkontribusi Kegiatan) as UC4
  (Mengelola Anggota) as UC5
  (Mengelola Laporan Keuangan) as UC6
  (Memantau Partisipasi) as UC7
}

A --> UC1
A --> UC3
A --> UC4

P --> UC1
P --> UC2
P --> UC5
P --> UC6
P --> UC7

UC2 .> (Konfirmasi Peserta) : Include
UC4 .> (Upload Laporan) : Extend
UC6 .> (Generate Laporan PDF) : Extend

note right of UC2
  Pengurus dapat menginput jadwal:
  - Pengajian
  - Bakti Sosial
  - Kegiatan Ramadhan
  dan konfirmasi peserta.
end note

note left of UC6
  Pengurus mencatat pemasukan (donasi)
  dan pengeluaran (operasional),
  lalu generate laporan bulanan.
end note

note right of UC4
  Anggota dapat mendaftar partisipasi
  dan mengupload dokumentasi kegiatan
  (foto/laporan tertulis).
end note
@enduml
```

**Output** :

contoh usecase
