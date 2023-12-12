-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2023 pada 05.12
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cleon5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `dsection` varchar(1500) DEFAULT NULL,
  `jkontenp1` varchar(255) DEFAULT NULL,
  `gambarp1` varchar(50) NOT NULL,
  `kontenp1` varchar(2000) DEFAULT NULL,
  `jkontenp2` varchar(255) DEFAULT NULL,
  `gambarp2` varchar(50) NOT NULL,
  `kontenp2` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul`, `dsection`, `jkontenp1`, `gambarp1`, `kontenp1`, `jkontenp2`, `gambarp2`, `kontenp2`) VALUES
(1, 'About Us', 'Cleon adalah suatu layanan yang disediakan oleh PT. Sarana InsanMuda Selaras dalam pengembangan Wifi. Cleon cocok dipasang pada kost, kontrakan, kantor, maupun warung-warung yang ramai dikunjungi.', 'Emang iyyayyayayayayyahhahahah', 'about.jpg', 'Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea. Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit.\r\n', 'Voluptatem dignissimos provident quasi corporis', 'about-2.jpg', 'Ut fugiat ut sunt quia veniam. Voluptate perferendis perspiciatis quod nisi et. Placeat debitis quia recusandae odit et consequatur voluptatem. Dignissimos pariatur consectetur fugiat voluptas ea. Temporibus nihil enim deserunt sed ea. Provident sit expedita aut cupiditate nihil vitae quo officia vel. Blanditiis eligendi possimus et in cum. Quidem eos ut sint rem veniam qui. Ut ut repellendus nobis tempore doloribus debitis explicabo similique sit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apuser`
--

CREATE TABLE `apuser` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `apuser`
--

INSERT INTO `apuser` (`user_id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'hah', 'hu@gmail.com', 'he', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'coba', 'coba@gmail.com', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Nama Pengguna', 'email@example.com', 'admin', 'ec6a6536ca304edf844d1d248a4f08dc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_content`
--

CREATE TABLE `faq_content` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `faq_content`
--

INSERT INTO `faq_content` (`id`, `question`, `answer`) VALUES
(1, 'Apa itu Cleon ?', 'Cleon adalah suatu layanan yang disediakan oleh PT. Sarana InsanMuda Selaras dalam pengembangan Wifi. Cleon cocok dipasang pada kost, kontrakan, kantor, maupun warung-warung yang ramai dikunjungi.'),
(2, 'Apakah saya mendapakan TV Kabel langganan gratis ?', 'Jika anda seorang mitra Cleon maka akan mendapatkan Free TV langganan di satu titik. Syarat dan ketentuan juga berlaku.'),
(3, 'Mengapa harus menggunakan Cleon ?', 'Cleon sebagai alternatif layanan yang memberikan kemudahan bagi pelanggan dalam menikmati layanan internet dimana tidak perlu berlangganan cukup dengan membeli voucher ketika akan menggunakan internet.'),
(4, 'Seberapa cepat koneksi internet Cleon ?', 'Sesuai dengan paket yang digunakan oleh masing-masing user.'),
(5, 'Fitur apa sajakah yang ditawarkan oleh Cleon ?', 'Fitur-fitur akan ditampilkan disini, sesuai dengan kebutuhan Anda.'),
(6, 'Berapa biaya yang diperlukan untuk menggunakan Layanan internet Cleon ?', 'Tidak ada biaya yang dikeluarkan untuk pemasangan Cleon Internet. Jika ingin menggunakan Cleon Internet dapat membeli vocher yang berkisaran dari harga Rp 2000,-'),
(7, 'Bagaimana saya bisa berlangganan Cleon ?', 'Mengapa saya tidak bisa login? Potensi double voucher, kemungkinan duplikat satu voucher dipakai dua user Akun tidak valid, penggunaan huruf kapital dan huruf kecil berpengaruh saat registrasi atau mendaftar akun Cleon Kemungkinan akun masih dalam keadaan online atau belum dilogout'),
(8, 'Paket apa saja yang ditawarkan Cleon ?', 'Tidak ada biaya yang dikeluarkan untuk pemasangan Cleon Internet. Jika ingin menggunakan Cleon Internet dapat membeli vocher yang berkisaran dari harga Rp 2000,-'),
(9, 'Mengapa saya tidak bisa login?', 'Potensi double voucher, kemungkinan duplikat satu voucher dipakai dua user Akun tidak valid, penggunaan huruf kapital dan huruf kecil berpengaruh saat registrasi atau mendaftar akun Cleon'),
(10, 'Apa yang dimaksud dengan top-up?', 'Top up yaitu menambah masa aktif akun dengan cara memasukkan card number dan pin voucher yang baru'),
(11, 'Mengapa saya tidak bisa top-up?', 'Potensi double voucher, kemungkinan duplikat satu voucher dipakai dua user Akun tidak valid, penggunaan huruf kapital dan huruf kecil berpengaruh saat registrasi atau mendaftar akun Cleon'),
(12, 'Bagaimana jika saya lupa password untuk Login ?', 'Jika lupa password untuk login, bisa hubungi customer care di nomor berikut +62-822-2598-8821/ +62-813-1415-2347'),
(13, 'Kenapa Koneksi internet saya mengalami penurunan atau lambat?', 'Jika menggunakan paket unlimited, apabila pemakaian sudah mencapai 12GB maka kecepatan akses akan menurutn atau mengalami down speed 0.5 Mbps Pengaruh cuaca juga dapat mempengaruhi kecepatan koneksi internet'),
(14, 'Mengapa saya tidak bisa connect internet ?', 'Kemungkinan perangkat belum mendapatkan IP Jarak atau radius sinyal terlalu jauh atau sedikit'),
(15, 'Mengapa tidak bisa Logout ?', 'Jika terjadi koneksi dari AP ke Router ada Tenda, perlu direstart baik di Router dan AP? Hubungi admin untuk dibantu/dipandu proses restartnya'),
(16, 'Jika terjadi koneksi dari AP ke Router ada Tenda, perlu direstart baik di Router dan AP?', 'Isi pertanyaan dan jawaban disesuaikan dengan kebutuhan FAQ Anda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `filter_button`
--

CREATE TABLE `filter_button` (
  `id` int(11) NOT NULL,
  `button1` varchar(90) NOT NULL,
  `button2` varchar(90) NOT NULL,
  `button3` varchar(90) NOT NULL,
  `button4` varchar(90) NOT NULL,
  `button5` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `filter_button`
--

INSERT INTO `filter_button` (`id`, `button1`, `button2`, `button3`, `button4`, `button5`) VALUES
(1, 'semua', 'Time Based', 'Used Based', 'Unlimited', 'SS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hero_content`
--

CREATE TABLE `hero_content` (
  `id` int(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `tagline` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hero_content`
--

INSERT INTO `hero_content` (`id`, `title`, `tagline`, `deskripsi`, `gambar`) VALUES
(1, 'Cleon', 'InternetGaspoLL!!!', 'Cleon, alternatif layanan yang memberikan kemudahan dalam menikmati layanan internet. Tidak perlu berlangganan tetap bisa terhubung dengan nyaman.', 'bg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `icon` varchar(155) NOT NULL,
  `alamat` varchar(155) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `icon`, `alamat`, `email`, `kontak`, `twitter`, `facebook`, `instagram`) VALUES
(1, 'assets/img/cleon_icon.png', 'Jl. Parangtritis Km. 1 No. 97, Brontokusuman, Kec. Mergangsan, Kota Yogyakarta, 55143', 'cleon.jogjamedianet@gmail.com', '+62 851-7432-8821', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `navbar`
--

CREATE TABLE `navbar` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `home` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `my_cleon` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `navbar`
--

INSERT INTO `navbar` (`id`, `logo`, `home`, `product`, `my_cleon`, `login`) VALUES
(1, 'assets/img/logo_cleon.png', 'Home', 'Product', 'My Cleon', 'Login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_internet`
--

CREATE TABLE `paket_internet` (
  `id` int(20) NOT NULL,
  `koneksi` varchar(20) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `harga` decimal(10,3) NOT NULL,
  `masa_aktiv` varchar(11) NOT NULL,
  `kuota` varchar(11) NOT NULL,
  `kecepatan` decimal(5,2) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paket_internet`
--

INSERT INTO `paket_internet` (`id`, `koneksi`, `kategori`, `nama_paket`, `harga`, `masa_aktiv`, `kuota`, `kecepatan`, `deskripsi`) VALUES
(11, 'Optik', 'Paket Used Based', 'Paket Used Based 5k', 5.000, '5 hari', '5 Gb', 2.00, 'Cocok untuk pengguna yang melakukan akses internet untuk kebutuhan ringan seperti chating, cek, dan kirim email, update sosmed, bahkan main game.'),
(12, 'Optik', 'Paket Used Based', 'Paket Used Based 10K', 10.000, '10 hari', '10 Gb', 2.00, 'Cocok untuk pengguna yang melakukan akses internet untuk kebutuhan ringan seperti chating, cek, dan kirim email, update sosmed, bahkan main game.'),
(13, 'Optik', 'Paket Used Based', 'Paket Used Based 20K', 20.000, '20 hari', '20 GB', 2.00, 'Cocok untuk pengguna yang melakukan akses internet untuk kebutuhan ringan seperti chating, cek, dan kirim email, update sosmed, bahkan main game.'),
(14, 'Optik', 'Paket Used Based', 'Paket Used Based 40K', 40.000, '30 hari', '40 Gb', 2.00, 'Cocok untuk pengguna yang melakukan akses internet untuk kebutuhan ringan seperti chating, cek, dan kirim email, update sosmed, bahkan main game.'),
(15, 'Optik', 'Paket Time Based', 'Paket 2 Jam', 2.000, '1 hari', '3 jam', 2.00, 'Cocok untuk pengguna yang suka download dan akses data yang besar dalam waktu tertentu.'),
(16, 'Optik', 'Paket Unlimited', 'Paket Unlimited Hemat 1', 60.000, '30 hari', 'Unlimited', 1.20, 'Untuk pengguna yang ingin menggunakan internet sebulan penuh tanpa perlu takut kuota habis, layanan ini sangat cocok.'),
(18, 'Optik', 'Paket Unlimited', 'Paket Unlimited Hemat 2', 100.000, '30 hari', 'Unlimited', 2.00, 'Untuk pengguna yang ingin menggunakan internet sebulan penuh tanpa perlu takut kuota habis, layanan ini sangat cocok.'),
(25, 'Optik', 'Paket SS', 'Paket SS 1 ', 50.000, '30 hari', '40 Gb', 1.50, 'Paket baru dari cleon yang bisa dipakai untuk 2 perangkat secara bersamaan, jadi bisa ngerjain tugas di laptop sambil main sosmed di gadget.'),
(31, 'Optik', 'Paket SS', 'Paket SS 2', 100.000, '30 hari', '100 GB', 1.50, 'Paket baru dari cleon yang bisa dipakai untuk 2 perangkat secara bersamaan, jadi bisa ngerjain tugas di laptop sambil main sosmed di gadget.'),
(128, 'Optik', 'Paket Time Based', 'Paket 10 Jam', 10.000, '1 hari', '10 Jam', 2.00, 'Cocok untuk pengguna yang suka download dan akses data yang besar dalam waktu tertentu.'),
(129, 'Fiber', 'Paket Unlimited', 'Paket OK 1', 30.000, '30 Hari', 'Unlimited', 1.20, 'Untuk pengguna yang ingin menggunakan internet sebulan penuh tanpa perlu takut kuota habis, layanan ini sangat cocok.'),
(130, 'Fiber', 'Paket Unlimited', 'Paket OK 2', 50.000, '30 Hari', 'Unlimited', 3.00, 'Untuk pengguna yang ingin menggunakan internet sebulan penuh tanpa perlu takut kuota habis, layanan ini sangat cocok.'),
(131, 'Fiber', 'Paket Unlimited', 'Paket OK 3', 100.000, '30 Hari', 'Unlimited', 4.00, 'Untuk pengguna yang ingin menggunakan internet sebulan penuh tanpa perlu takut kuota habis, layanan ini sangat cocok.'),
(132, 'Fiber', 'Paket Time Based', 'Paket FO 5K', 5.000, '5 hari', '10 Gb', 5.00, 'Cocok untuk pengguna yang suka download dan akses data yang besar dalam waktu tertentu.'),
(133, 'Fiber', 'Paket Time Based', 'Paket FO 10K', 10.000, '5 hari', '20 Gb', 5.00, 'Cocok untuk pengguna yang suka download dan akses data yang besar dalam waktu tertentu.'),
(134, 'Optik', 'Paket Time Based', 'Paket 24 Jam', 10.000, '1 hari', '24 Jam', 2.00, 'Cocok untuk pengguna yang suka download dan akses data yang besar dalam waktu tertentu.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `happy_clients` int(11) DEFAULT NULL,
  `happy_clients_description` text DEFAULT NULL,
  `projects` int(11) DEFAULT NULL,
  `projects_description` text DEFAULT NULL,
  `hours_of_support` int(11) DEFAULT NULL,
  `hours_of_support_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`id`, `happy_clients`, `happy_clients_description`, `projects`, `projects_description`, `hours_of_support`, `hours_of_support_description`) VALUES
(1, 150, 'Jumlah klien yang puas dengan layanan kami', 123, 'Jumlah proyek yang telah selesai', 382, 'Jumlah jam dukungan yang diberikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `peringkat` int(11) DEFAULT NULL,
  `teks_testimonial` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `nama`, `jabatan`, `peringkat`, `teks_testimonial`) VALUES
(2, 'Sara Wilsson', 'Designer', 5, 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.'),
(6, 'Rizky Kurniawan', 'Pengusaha', 4, 'Saya sangat puas dengan layanan Cleon. Koneksi internetnya cepat dan stabil. Terima kasih Cleon!'),
(7, 'Dewi Sartika', 'Ibu Rumah Tangga', 5, 'Cleon membantu saya untuk tetap terhubung dengan keluarga dan teman-teman saya. Harga yang terjangkau dan kualitas yang baik.'),
(8, 'Budi Setiawan', 'Mahasiswa', 4, 'Saya menggunakan Cleon selama kuliah online dan sangat membantu saya dalam mengakses materi perkuliahan. Terima kasih Cleon!'),
(9, 'Lina Susanti', 'Pekerja Kantor', 5, 'Layanan Cleon sangat memudahkan saya untuk bekerja dari rumah. Koneksi internetnya cepat dan tidak pernah ada masalah. Saya sangat merekomendasikannya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tos_content`
--

CREATE TABLE `tos_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `icon_class` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tos_content`
--

INSERT INTO `tos_content` (`id`, `title`, `deskripsi`, `icon_class`) VALUES
(1, 'Layanan', 'Layanan yang diberikan oleh CLEON meliputi secara garis besar layanan internet dengan menggunakan teknologi Wireless untuk dapat akses ke Internet yang berada di lokasi-lokasi tertentu yang memasang internet CLEON.', 'bi-activity'),
(2, 'Syarat dan Ketentuan User CLEON', 'Setiap Pengguna CLEON (untuk selanjutnya disebut USER) bersedia terikat dan tunduk terhadap syarat dan ketentuan ini (untuk selanjutnya disebut PERATURAN). CLEON berhak dari waktu ke waktu merubah dan atau mengganti Peraturan tanpa ada pemberitahuan terlebih dahulu. User diwajibkan untuk selalu melihat syarat dan ketentuan ini.', 'bi-broadcast'),
(3, 'User dilarang untuk', 'Melakukan perbaikan, penginstalasian, perubahan konfigurasi dalam bentuk apapun terhadap perangkat yang dipinjamkan.<br>Mencoba merusak, mencoba mengganti data & system server milik CLEON.<br>Menggunakan koneksi internet CLEON untuk kegiatan-kegiatan yang melanggar hukum yang berlaku di wilayah Republik Indonesia atau hukum yang berlaku di wilayah yang bersangutan serta hukum Internasional.', 'bi-x-octagon-fill'),
(4, 'CLEON berhak untuk', 'Memutuskan koneksi internet wireless secara permanen jika mitra menyatakan berhenti berlangganan.<br>Memutuskan koneksi internet wireless jika mitra dikatakan tidak dapat memenuhi target penjualan<br>Memutuskan koneksi internet wireless sementara jika user diketahui melakukan aksi yang dilarang oleh undang-undang misal: Hacking, Cracking, dan kegiatan yang merugikan.', 'bi-bounding-box-circles'),
(5, 'Perubahan Term Of Services', 'CLEON berhak untuk merubah syarat dan ketentuan ini kapan saja, sangat dianjurkan memeriksa halaman ini sedikitnya sekali sebulan.<br> CLEON berusaha untuk menyediakan layanan terbaik bagi anda, tetapi kami tidak akan memberikan toleransi terhadap kegiatan yang melanggar hukum atau segala bentuk penyimpangan yang dilakukan terhadap server kami.<br>Petunjuk ringkas ini dibuat untuk melindungi kepentingan anda, pelanggan lainnya dan kami.', 'bi-calendar4-week'),
(6, 'Dolori Architecto', 'lah kok', 'bi-chat-square-text'),
(27, 'awikwok', 'selamanya', 'shoping cart');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `apuser`
--
ALTER TABLE `apuser`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `faq_content`
--
ALTER TABLE `faq_content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `filter_button`
--
ALTER TABLE `filter_button`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hero_content`
--
ALTER TABLE `hero_content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_internet`
--
ALTER TABLE `paket_internet`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tos_content`
--
ALTER TABLE `tos_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `apuser`
--
ALTER TABLE `apuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `faq_content`
--
ALTER TABLE `faq_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `filter_button`
--
ALTER TABLE `filter_button`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hero_content`
--
ALTER TABLE `hero_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paket_internet`
--
ALTER TABLE `paket_internet`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT untuk tabel `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tos_content`
--
ALTER TABLE `tos_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
