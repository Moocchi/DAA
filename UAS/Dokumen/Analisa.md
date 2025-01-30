# **Analisis Sistem Manajemen Atlet Voli Berbasis Laravel, Docker, dan MySQL**

## **1. Latar Belakang**

Olahraga bola voli merupakan salah satu cabang olahraga yang berkembang pesat di Indonesia. Keberhasilan tim voli nasional dalam berbagai kompetisi menunjukkan bahwa Indonesia memiliki potensi besar dalam bidang	 ini. Namun, untuk mempertahankan dan meningkatkan prestasi, diperlukan regenerasi atlet yang berkelanjutan.

Pemerintah telah mengeluarkan kebijakan baru yang menekankan pentingnya pencarian bibit muda berbakat untuk regenerasi atlet. Hal ini bertujuan untuk memastikan bahwa atlet yang berkompetisi di tingkat nasional dan internasional memiliki kualitas yang unggul dan siap bersaing.

Sebagai perusahaan yang bergerak di bidang pelatihan olahraga, peran dalam menemukan, membina, dan mengembangkan atlet muda menjadi sangat penting. Dengan pendekatan berbasis teknologi, sistem pelatihan dapat lebih efektif dalam mengidentifikasi dan mengembangkan potensi atlet muda. Oleh karena itu, diperlukan sebuah sistem manajemen yang mencakup **company profile, dashboard kontrol, porsi latihan, data personal atlet, klasifikasi penilaian, klasemen atlet, serta manajemen waktu pertandingan**.

## **2. Identifikasi Masalah**

Berdasarkan latar belakang yang telah dijelaskan, beberapa permasalahan utama yang diidentifikasi dalam studi ini adalah:

1. Kurangnya sistem terstruktur dalam pencarian dan pembinaan bibit muda atlet voli.
2. Belum adanya sistem yang dapat mengelompokkan atlet berdasarkan performa dan kesiapan bertanding.
3. Kurangnya pemanfaatan teknologi dalam pemantauan dan evaluasi atlet secara real-time.
4. Belum adanya sistem manajemen waktu yang optimal dalam pengaturan jadwal latihan dan pertandingan.
5. Kurangnya transparansi dalam klasifikasi dan penilaian atlet berdasarkan performa latihan dan pertandingan.

## **3. Rumusan Masalah**

Berdasarkan identifikasi masalah di atas, rumusan masalah dalam penelitian ini adalah:

1. Bagaimana membangun sistem company profile yang dapat memberikan informasi lengkap mengenai perusahaan pelatihan atlet voli?
2. Bagaimana merancang dashboard kontrol yang dapat membantu dalam manajemen pelatihan dan evaluasi atlet?
3. Bagaimana menentukan porsi latihan yang efektif untuk meningkatkan performa atlet voli?
4. Bagaimana mengelola data personal atlet secara sistematis untuk mendukung pengambilan keputusan dalam pelatihan?
5. Bagaimana melakukan klasifikasi atlet berdasarkan performa dan kesiapan bertanding?
6. Bagaimana menyusun klasemen atlet yang hanya memungkinkan atlet dengan porsi latihan yang telah selesai untuk bertanding?
7. Bagaimana merancang sistem manajemen waktu yang efektif untuk jadwal pertandingan atlet?

## **4. Tujuan Penelitian**

Tujuan dari penelitian ini adalah:

1. Membuat company profile yang dapat memberikan gambaran lengkap mengenai perusahaan pelatihan atlet voli.
2. Merancang dashboard kontrol untuk mempermudah pemantauan dan pengelolaan data atlet.
3. Menentukan porsi latihan yang optimal untuk meningkatkan performa atlet.
4. Mengembangkan sistem pengelolaan data personal atlet yang terstruktur dan mudah diakses.
5. Membangun sistem klasifikasi atlet berdasarkan performa untuk menentukan kesiapan bertanding.
6. Menyusun klasemen atlet yang berbasis pada penyelesaian porsi latihan dan performa dalam latihan.
7. Merancang sistem manajemen waktu untuk mengatur jadwal pertandingan atlet secara efisien.

## **5. Metode Analisis**

Untuk menganalisis sistem ini, digunakan beberapa metode berikut:

### **5.1. SWOT Analysis**

- **Strengths (Kekuatan):**

  - Sistem pelatihan berbasis data.
  - Pelatih profesional dan fasilitas memadai.
  - Kebijakan pemerintah mendukung regenerasi atlet.
- **Weaknesses (Kelemahan):**

  - Keterbatasan anggaran dalam pengembangan teknologi.
  - Kurangnya sistem evaluasi performa berbasis real-time.
- **Opportunities (Peluang):**

  - Dukungan dari sponsor dan pemerintah.
  - Meningkatnya popularitas voli di Indonesia.
- **Threats (Ancaman):**

  - Persaingan dengan akademi olahraga lain.
  - Risiko cedera atlet yang dapat menghambat perkembangan.

### **5.2. Business Model Canvas (BMC)**

- **Key Partners:** Pemerintah, sponsor, sekolah, klub voli.
- **Key Activities:** Rekrutmen atlet, pelatihan, evaluasi performa, turnamen.
- **Value Proposition:** Menciptakan atlet voli unggulan.
- **Customer Segments:** Atlet muda berbakat, klub voli, sponsor.
- **Channels:** Website, media sosial, aplikasi monitoring atlet.
- **Revenue Streams:** Sponsorship, dana pemerintah, biaya akademi.
- **Cost Structure:** Biaya pelatihan, fasilitas, gaji pelatih.

### **5.3. Analisis GAP**

- **Kondisi Saat Ini:**
  - Sistem pelatihan masih manual.
  - Tidak ada sistem klasemen berbasis performa.
- **Target yang Diharapkan:**
  - Sistem berbasis data dengan dashboard evaluasi atlet.
  - Sistem klasifikasi dan manajemen waktu pertandingan.

## **6. Perancangan Sistem**

### **6.1. Entity Relationship Diagram (ERD)**

Sistem menggunakan beberapa entitas utama:

- **Atlet** (ID_Atlet, Nama, Usia, Posisi, Performa)
- **Pelatih** (ID_Pelatih, Nama, Spesialisasi)
- **Latihan** (ID_Latihan, ID_Atlet, Jenis Latihan, Hasil)
- **Pertandingan** (ID_Pertandingan, Tanggal, Lokasi)
- **Klasemen** (ID_Klasemen, ID_Atlet, Poin)

### **6.2. Flowchart Sistem**

Flowchart utama mencakup:

1. **Proses Pendaftaran Atlet** → Input Data → Verifikasi → Masuk Database.
2. **Proses Latihan Atlet** → Input Hasil Latihan → Evaluasi → Klasifikasi.
3. **Proses Manajemen Pertandingan** → Penyusunan Jadwal → Seleksi Atlet → Pelaksanaan.

## **7. Implementasi Teknologi**

Sistem ini dikembangkan menggunakan **Laravel, Docker, dan MySQL**:

- **Laravel:** Digunakan sebagai framework utama untuk membangun backend dan frontend dashboard.
- **Docker:** Digunakan untuk mengelola lingkungan pengembangan secara terisolasi dan memastikan kompatibilitas sistem.
- **MySQL:** Digunakan sebagai database untuk menyimpan data atlet, latihan, dan pertandingan.

Konfigurasi Docker untuk Laravel dan MySQL:

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
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: atlet_voli
      MYSQL_USER: user
      MYSQL_PASSWORD: password
    ports:
      - "3306:3306"
```

## **8. Implementasi Fitur Berdasarkan Studi Kasus**

### **8.1. Company Profile**

**Tujuan:**

- Memberikan informasi lengkap tentang perusahaan pelatihan atlet billiard.
- Menunjukkan visi, misi, dan prestasi perusahaan dalam mencetak atlet berprestasi.

**Fitur:**

- **Profil Perusahaan:** Deskripsi perusahaan, visi, misi, dan tujuan.
- **Prestasi:** Daftar prestasi atlet yang telah dibina.
- **Fasilitas:** Informasi tentang fasilitas pelatihan yang tersedia.
- **Tim Pelatih:** Profil pelatih dan spesialisasi mereka.

**Implementasi:**

- Dibuat menggunakan **Laravel** untuk frontend dengan desain responsif.
- Data disimpan dalam database MySQL dan diambil secara dinamis.

---

### **8.2. Dashboard Control**

**Tujuan:**

- Memantau dan mengelola data atlet, pelatihan, dan pertandingan secara real-time.

**Fitur:**

- **Ringkasan Data:** Statistik jumlah atlet, pelatih, dan pertandingan.
- **Monitoring Performa:** Grafik perkembangan performa atlet.
- **Manajemen Atlet:** Tambah, edit, dan hapus data atlet.
- **Manajemen Pelatihan:** Jadwal dan hasil latihan atlet.
- **Manajemen Pertandingan:** Jadwal dan hasil pertandingan.

**Implementasi:**

- Menggunakan **Laravel** untuk backend dan **Chart.js** untuk visualisasi data.
- Dashboard diakses oleh admin, pelatih, dan manajer.

---

### **8.3. Porsi Latihan untuk Atlet**

**Tujuan:**

- Menentukan porsi latihan yang efektif untuk meningkatkan performa atlet.

**Fitur:**

- **Jadwal Latihan:** Jadwal harian/mingguan untuk setiap atlet.
- **Jenis Latihan:** Latihan teknik, strategi, dan mental.
- **Evaluasi Latihan:** Catatan hasil latihan dan rekomendasi perbaikan.

**Implementasi:**

- Data latihan disimpan dalam tabel `latihan` di database.
- Sistem memberikan notifikasi jika atlet belum menyelesaikan porsi latihan.

```sql
CREATE TABLE Latihan (
    ID_Latihan INT PRIMARY KEY AUTO_INCREMENT,
    ID_Atlet INT,
    Jenis_Latihan VARCHAR(100),
    Tanggal DATE,
    Hasil TEXT,
    FOREIGN KEY (ID_Atlet) REFERENCES Atlet(ID_Atlet)
);
```

---

### **8.4. Data Personal Atlet**

**Tujuan:**

- Mengelola data personal atlet secara sistematis.

**Fitur:**

- **Profil Atlet:** Nama, usia, dan kontak.
- **Riwayat Latihan:** Data latihan yang telah diikuti.
- **Riwayat Pertandingan:** Data pertandingan yang diikuti dan hasilnya.

**Implementasi:**

- Data disimpan dalam tabel `atlet` di database.
- Atlet dapat mengakses profil mereka melalui dashboard.

```sql
CREATE TABLE Atlet (
    ID_Atlet INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Usia INT,
    Kontak VARCHAR(20)
);
```

---

### **8.5. Klasifikasi Penilaian Atlet**

**Tujuan:**

- Mengelompokkan atlet berdasarkan performa dan kesiapan bertanding.

**Fitur:**

- **Parameter Penilaian:** Teknik, strategi, mental, dan konsistensi.
- **Klasifikasi:** Atlet dikelompokkan menjadi kategori (misalnya, pemula, menengah, lanjutan).
- **Rekomendasi:** Rekomendasi latihan berdasarkan hasil penilaian.

**Implementasi:**

- Penilaian dilakukan oleh pelatih dan disimpan dalam tabel `penilaian`.

```sql
CREATE TABLE Penilaian (
    ID_Penilaian INT PRIMARY KEY AUTO_INCREMENT,
    ID_Atlet INT,
    Teknik INT,
    Strategi INT,
    Mental INT,
    Kategori VARCHAR(50),
    FOREIGN KEY (ID_Atlet) REFERENCES Atlet(ID_Atlet)
);
```

---

### **8.6. Klasemen Atlet**

**Tujuan:**

- Menyusun klasemen atlet yang hanya memungkinkan atlet dengan porsi latihan yang telah selesai untuk bertanding.

**Fitur:**

- **Kriteria Klasemen:** Berdasarkan penyelesaian porsi latihan dan performa.
- **Peringkat Atlet:** Atlet dengan performa terbaik ditempatkan di peringkat atas.
- **Seleksi Pertandingan:** Hanya atlet yang memenuhi kriteria yang boleh bertanding.

**Implementasi:**

- Klasemen dihitung berdasarkan data dari tabel `latihan` dan `penilaian`.

```sql
SELECT A.Nama, COUNT(L.ID_Latihan) AS Latihan_Selesai, AVG(P.Teknik + P.Strategi + P.Mental) AS Skor
FROM Atlet A
JOIN Latihan L ON A.ID_Atlet = L.ID_Atlet
JOIN Penilaian P ON A.ID_Atlet = P.ID_Atlet
GROUP BY A.ID_Atlet
ORDER BY Skor DESC;
```

---

### **8.7. Manajemen Waktu Pertandingan**

**Tujuan:**

- Mengatur jadwal pertandingan secara efisien.

**Fitur:**

- **Jadwal Pertandingan:** Tanggal, waktu, dan lokasi pertandingan.
- **Notifikasi:** Pengingat untuk atlet dan pelatih.
- **Pelaporan Hasil:** Input hasil pertandingan dan update klasemen.

**Implementasi:**

- Data pertandingan disimpan dalam tabel `pertandingan`.

```sql
CREATE TABLE Pertandingan (
    ID_Pertandingan INT PRIMARY KEY AUTO_INCREMENT,
    Tanggal DATE,
    Lokasi VARCHAR(100),
    ID_Atlet INT,
    Hasil VARCHAR(50),
    FOREIGN KEY (ID_Atlet) REFERENCES Atlet(ID_Atlet)
);
```
