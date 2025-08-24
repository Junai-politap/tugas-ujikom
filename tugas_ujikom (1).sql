-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Agu 2025 pada 07.46
-- Versi server: 8.0.30
-- Versi PHP: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `deskripsi` text NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal_berita`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
(3, 'Penerimaan Siswa Baru', '2025-08-01', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 'app/berita/1756009439-QfCJN.png', '2025-08-23 21:23:59', '2025-08-23 21:23:59'),
(4, 'Praktik Menggunakan Komputer', '2025-08-04', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 'app/berita/1756009517-ELyrm.webp', '2025-08-23 21:25:17', '2025-08-23 21:25:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int NOT NULL,
  `nama_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_kegiatan` date DEFAULT NULL,
  `deskripsi_kegiatan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal_kegiatan`, `deskripsi_kegiatan`, `poto`, `created_at`, `updated_at`) VALUES
(2, 'Upacara 17 Agustus', '2025-08-17', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 'app/kegiatan/1756009131-0hdBo.png', '2025-08-23 21:18:51', '2025-08-23 21:18:51'),
(3, 'Belajar Mengajar', '2025-08-18', '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 'app/kegiatan/1756009193-18m3S.png', '2025-08-23 21:19:53', '2025-08-23 21:19:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telphone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `telphone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Rangge Sentap, Dalong, Sukaharja, Kec. Delta Pawan, Kabupaten Ketapang, Kalimantan Barat 78112', '05343037213', 'politap@gmail.com', '2025-08-24 05:58:30', '2025-08-23 22:58:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` int NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `judul`, `deskripsi`, `poto`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Kami', '<div style=\"line-height: 22px;\"><div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; text-align: justify;\"><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">Sekolah adalah sebuah lembaga pendidikan formal yang dirancang untuk menyelenggarakan</span></font></div><div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; text-align: justify;\"><font color=\"#000000\" style=\"\"><span style=\"font-family: Arial;\">proses </span></font><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-family: Arial;\">belajar-mengajar secara terstruktur. Di sekolah, siswa mendapatkan bimbingan dari</span></div><div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-family: Arial;\">guru untuk</span><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-family: Arial;\">mengembangkan pengetahuan, keterampilan, sikap, dan nilai yang dibutuhkan</span></div><div style=\"font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; text-align: justify;\"><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-family: Arial;\">dalam kehidupan </span><span style=\"color: rgb(0, 0, 0); font-size: 1rem; font-family: Arial;\">pribadi, sosial, maupun dunia kerja.</span></div><div style=\"\"><span style=\"font-family: Consolas, &quot;Courier New&quot;, monospace; white-space: pre; color: rgb(0, 0, 0); font-size: 1rem;\"><br></span><b>Ciri-ciri Sekolah</b></div><div style=\"\"><span style=\"font-size: 1rem;\">-Ada kurikulum → berisi materi pelajaran yang harus dipelajan</span></div><div style=\"\"><span style=\"font-size: 1rem;\">-Ada guru → berperan sebagai pendidik dan pembimbing.</span></div><div style=\"\"><span style=\"font-size: 1rem;\">-Ada siswa → peserta didik yang menerima pembelajaran.</span></div><div style=\"\"><span style=\"font-size: 1rem;\">-Ada aturan/tata tertib → agar proses belajar berjalan tertib.</span></div><div style=\"\"><span style=\"font-size: 1rem;\">-Ada tujuan → mencerdaskan, mendidik, dan membentuk karakter.</span></div><div style=\"\"><span style=\"font-size: 1rem;\"><br></span></div><p style=\"\"><b>Fungsi Sekolah</b></p><p style=\"\"><span style=\"font-size: 1rem;\">-</span>Pendidikan → mengajarkan ilmu pengetahuan dan keterampilan</p><p style=\"\">-Sosialisasi → membentuk kepribadian, sikap, dan perilaku sosial</p><p style=\"\">-Pembinaan karakter → menanamkan nilai moral, etika, dan budaya</p><p style=\"\">-Persiapan masa depan → membekali siswa untuk melanjutkan pendidikan atau bekerja.</p></div>', 'app/tentang-kami/1756016174-XMzqI.jpg', '2025-08-24 06:39:13', '2025-08-23 23:39:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$12$F0gSZeeOSG5ZNGR5aoLdK.HPXxDo/9rz/32feOHEgv7kUHE8jnnmm', NULL, '2025-08-24 00:33:43', '2025-08-24 00:33:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
