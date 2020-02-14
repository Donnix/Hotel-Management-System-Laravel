-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2020 pada 04.45
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guests`
--

CREATE TABLE `guests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tamu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_tamu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guests`
--

INSERT INTO `guests` (`id`, `nama_tamu`, `jk_tamu`, `alamat_tamu`, `nohp_tamu`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Donnix', 'Laki-laki', 'Bogor', '081380085869', '20200102005640.jpg', '2020-01-01 17:44:58', '2020-01-01 17:56:41'),
(2, 'Lingya', 'Perempuan', 'bogor', '081380085869', '20200102063108.jpeg', '2020-01-01 18:44:32', '2020-01-01 23:31:08'),
(3, 'Dolmen', 'Laki-laki', 'Tajur', '0889080802', '20200102035413.jpeg', '2020-01-01 20:54:13', '2020-01-01 20:54:13'),
(4, 'Fatwa Fauzan', 'Laki-laki', 'Jl.Raya Tajur no.187', '08138008586', '20200121153948.jpeg', '2020-01-02 01:32:20', '2020-01-21 08:39:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatans`
--

CREATE TABLE `jabatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatans`
--

INSERT INTO `jabatans` (`id`, `jabatan`, `detail_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Cashier', 'Mencatat keluar masuknya keuangan yang berhubungan dengan pembayaran yang dilakukan tamu hotel', '2020-01-01 17:44:36', '2020-01-01 21:01:33'),
(2, 'Manager', 'Membawahi bagian-bagian yang ada di front office sekaligus bertanggung jawab pada kelacancaran tugas semua bagian. Biasanya di beberapa hotel, house keeping tidak di bawah manager Front Office, akan tetapi sebuah departement tersendiri', '2020-01-01 20:58:50', '2020-01-01 21:00:39'),
(3, 'House Keeping', 'Menjaga kebersihan dan kelancaran pelayanan operasional hotel', '2020-01-01 21:00:09', '2020-01-01 21:00:09'),
(4, 'Babu', 'Bikin kopi', '2020-02-10 02:57:21', '2020-02-10 02:57:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamars`
--

CREATE TABLE `kamars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kamar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kamar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `sisa_kamar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kamars`
--

INSERT INTO `kamars` (`id`, `nama_kamar`, `jenis_kamar`, `harga_kamar`, `sisa_kamar`, `created_at`, `updated_at`) VALUES
(1, 'Boungevile', 'Standard', 450000, 95, '2020-01-01 17:43:42', '2020-01-01 17:43:42'),
(2, 'Melati', 'Superior', 500000, 9, '2020-01-01 17:44:09', '2020-01-01 17:44:09'),
(3, 'kamar 7', 'Deluxe', 450000, 100, '2020-01-02 01:01:03', '2020-01-02 01:01:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_karyawan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_karyawan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama_karyawan`, `jk_karyawan`, `alamat_karyawan`, `nohp_karyawan`, `jabatan_karyawan`, `created_at`, `updated_at`) VALUES
(1, 'Hilman', 'Laki-laki', 'jalan raya maju tapi gak mundur no.321', '08028509580', 'Cashier', '2020-01-01 19:40:52', '2020-01-01 21:04:38'),
(2, 'Agisti', 'Perempuan', 'Jalan Raya Cicurug rusak no 32', '0802850952', 'Manager', '2020-01-01 21:03:30', '2020-01-01 21:03:30'),
(3, 'Fatwa', 'Laki-laki', 'Jalan Raya Tajur Macet no.141', '08028509580', 'House Keeping', '2020-01-01 21:04:01', '2020-01-01 21:04:01'),
(4, 'Faisal', 'Laki-laki', 'Total Solusi Teknologi', '38759317597298579875285', 'Babu', '2020-02-10 02:58:00', '2020-02-10 02:58:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_cekin` date NOT NULL,
  `tanggal_cekout` date NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `lama_inap` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporans`
--

INSERT INTO `laporans` (`id`, `nama_tamu`, `nama_kamar`, `tanggal_cekin`, `tanggal_cekout`, `jumlah_kamar`, `lama_inap`, `total`, `bayar`, `kembalian`, `created_at`, `updated_at`) VALUES
(1, 'Donnix', 'Boungevile', '2020-01-01', '2020-01-16', 1, 1, 450000, 500000, 50000, '2020-01-02 00:46:02', NULL),
(2, 'Donnix', 'Boungevile', '2020-01-01', '2020-01-02', 1, 1, 450000, 1000000, 550000, '2020-01-02 02:48:56', NULL),
(3, 'Dolmen', 'Boungevile', '2020-01-01', '2020-01-02', 1, 2, 900000, 1110000, 210000, '2020-01-02 03:55:05', NULL),
(6, 'Dolmen', 'Boungevile', '2020-01-03', '2020-01-04', 1, 2, 900000, 1000000, 100000, '2020-01-03 02:41:43', NULL),
(7, 'Fatwa Fauzan', 'kamar 7', '2020-01-02', '2020-01-03', 1, 2, 900000, 1000000, 100000, '2020-01-03 05:57:21', NULL),
(8, 'Donnix', 'Melati', '2020-01-09', '2020-01-01', 2, 2, 2000000, 3000000, 1000000, '2020-01-08 00:31:57', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_09_141148_create_kamars_table', 2),
(5, '2019_12_09_141213_create_tamus_table', 2),
(6, '2019_12_11_042519_create_karyawans_table', 3),
(7, '2019_12_11_054042_create_guests_table', 4),
(8, '2019_12_11_070341_create_jabatans_table', 5),
(9, '2019_12_21_054446_create_cekins_table', 6),
(10, '2019_12_21_071241_create_transactions_table', 7),
(11, '2019_12_22_134606_create_laporans_table', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tamu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_cekin` date NOT NULL,
  `tanggal_cekout` date NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `lama_inap` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `nama_tamu`, `nama_kamar`, `tanggal_cekin`, `tanggal_cekout`, `harga_kamar`, `jumlah_kamar`, `lama_inap`, `total`, `bayar`, `kembalian`, `created_at`, `updated_at`) VALUES
(4, 'Dolmen', 'Boungevile', '2020-01-10', '2020-01-24', 450000, 1, 1, 450000, 10000000, 9550000, '2020-01-01 21:06:30', '2020-01-01 21:06:59'),
(5, 'Lingya', 'Boungevile', '2020-01-03', '2020-01-06', 450000, 1, 2, 900000, 1000000, 100000, '2020-01-02 00:51:29', '2020-01-02 01:15:43');

--
-- Trigger `transactions`
--
DELIMITER $$
CREATE TRIGGER `abis hapus` AFTER DELETE ON `transactions` FOR EACH ROW UPDATE kamars
 SET sisa_kamar = sisa_kamar+OLD.jumlah_kamar
 WHERE
 nama_kamar= OLD.nama_kamar
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `abisupdate` AFTER UPDATE ON `transactions` FOR EACH ROW UPDATE kamars
 SET sisa_kamar = sisa_kamar-NEW.jumlah_kamar
 WHERE
 nama_kamar= NEW.nama_kamar
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kurang kamar` AFTER INSERT ON `transactions` FOR EACH ROW UPDATE kamars
 SET sisa_kamar = sisa_kamar-NEW.jumlah_kamar
 WHERE
 nama_kamar= NEW.nama_kamar
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `masuk ke tb laporan` AFTER DELETE ON `transactions` FOR EACH ROW INSERT INTO laporans
   ( id,nama_tamu,nama_kamar,tanggal_cekin,tanggal_cekout,jumlah_kamar,lama_inap,total,bayar,kembalian)
   VALUES
   ( OLD.id,OLD.nama_tamu,OLD.nama_kamar,OLD.tanggal_cekin,OLD.tanggal_cekout,OLD.jumlah_kamar,OLD.lama_inap,OLD.total,OLD.bayar,OLD.kembalian)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Donnix', 'donnix@gmail.com', NULL, '$2y$10$p0thNl67gEQv2aUaNlxBIOhn3AeY4fKP/uPrgGH.k50hv35zt0bDu', 'PuyZPRz96Y36IBFfX6mIKIGVEx4ZJM8XcltwSED7EUf1WLlRtnjuozWhyvG4', '2019-12-20 22:25:51', '2019-12-20 22:25:51'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$qiCR/23rzeHZ4kmyOYs/luov5qbd7jb25PG.BQSptIrr9hLDrbPE6', 'QRgOv58cPBtpHhYtu6jJ0O1jqJEkdFO8AE3i3svqgRieO8uZlBpSoKbULxCg', '2020-01-13 00:31:49', '2020-01-13 00:31:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamars`
--
ALTER TABLE `kamars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guests`
--
ALTER TABLE `guests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kamars`
--
ALTER TABLE `kamars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
