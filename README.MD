**Ghulwan Shihabuddin** <br>
**121140164** <br>
**RA** <br>

Bagian 1: Client-side Programming

1.1 Membuat beberapa halaman seperti index.php, cariData.php, editData.php, tambahData.php dan hapusData.php.

1.2 Membuat event untuk melakukan interaksi di halaman web dengan memanipulasi DOM saat menginputkan data, hal tersebut ada dalam script.js

Bagian 2: Server-side Programming

2.1 Menerapkan script PHP untuk mengelola data yang berasal dari formulir pada berbagai halaman. Gunakan variabel $_POST untuk mengakses data yang dikirim melalui formulir, dan $_GET untuk mrngambil data dari parameter URL.

2.2 Membuat sebuah objek PHP berbasis OOP yaitu Connection dan Anime yang memiliki metode dan menggunakan objek tersebut untuk koneksi ke database dan crud.

Bagian 3: Database Management

3.1 pembuatan database MySQL

langkah-langkah :
USE anime_list;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"

START TRANSACTION;

CREATE TABLE anime (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    genre VARCHAR(100) NOT NULL,
    rating FLOAT NOT NULL
);

INSERT INTO anime (title, genre, rating) VALUES
('One Piece', 'Action, Adventure, Comedy', 8.5),
('Naruto', 'Action, Adventure', 8.3),
('Attack on Titan', 'Action, Drama, Fantasy', 9.0),
('My Hero Academia', 'Action, Comedy, Super Power', 8.7),
('Demon Slayer', 'Action, Demons, Historical', 9.1),
('Fullmetal Alchemist: Brotherhood', 'Action, Adventure, Drama', 9.2),
('Death Note', 'Mystery, Psychological, Thriller', 9.0),
('One Punch Man', 'Action, Comedy, Super Power', 8.7),
('Dragon Ball Z', 'Action, Adventure, Comedy', 8.6),
('Sword Art Online', 'Action, Adventure, Fantasy', 7.6);

3.2 Membuat konfigurasi koneksi ke database MySQL

3.3 Melakukan manipulasi data pada tabel database dengan menggunakan query SQL dalam form crud. Misalnya, tambah data `$_POST`, ambil data `$_GET`, atau update data `$_POST`.

Bagian 4: State Management

4.1 membuatlah skrip PHP yang menggunakan session untuk menyimpan state pengguna user kedalam variabel global $_SESSION

4.2 menerapkan manajemen status (state) dengan memanfaatkan teknik cookie dengan menambahkan script js dan penyimpanan lokal di sisi klien menggunakan JavaScript menggunakan localstorage untuk memastikan efisiensi dan responsivitas dalam pengelolaan data status.

Bagian Bonus: Hosting Aplikasi Web 
- Bagaimana Anda meng-host aplikasi web Anda?
  Pilih penyedia hosting web gratis, lakukan registrasi dan login, kemudian ajukan permohonan pembuatan situs web. Setelah itu, buat database dan atur cPanel.

- Mengapa Anda memilih penyedia hosting web tertentu untuk aplikasi web Anda? Berikan alasan Anda.
  Saya memilih penyedia layanan hosting yang dianggap paling sesuai untuk aplikasi web saya dengan mempertimbangkan faktor biaya, terutama karena 000webhost menawarkan layanan hosting gratis tanpa biaya bulanan atau tahunan. Ini merupakan pilihan yang ekonomis, terutama untuk proyek-proyek kecil atau eksperimen, dan menyediakan lingkungan pengembangan yang lengkap. Proses pendaftaran dan konfigurasi dengan 000webhost berlangsung dengan cepat, memungkinkan pengguna untuk segera memulai hosting situs web tanpa menunggu lama. Layanan ini juga dirancang untuk pemula, menyediakan panel kontrol yang simpel.

- Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
  Keamanan aplikasi web yang dihosting ditingkatkan dengan menerapkan protokol HTTPS untuk mengenkripsi data yang dikirimkan.

- Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.
  Konfigurasi server untuk hosting gratis ini sederhana, kemungkinan hanya melibatkan penyesuaian versi PHP.