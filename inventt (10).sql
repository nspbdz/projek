-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 04:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventt`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `penggunaid` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `donatur` enum('Internal','External','','') NOT NULL,
  `jenisid` int(11) NOT NULL,
  `lokasiid` int(11) NOT NULL,
  `stok` int(5) NOT NULL,
  `kondisi` enum('baru','bekas') NOT NULL,
  `status` enum('aktif','nonaktif','rusak','hilang') NOT NULL DEFAULT 'nonaktif',
  `tglmasuk` date NOT NULL,
  `foto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'nophoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `penggunaid`, `nama_barang`, `donatur`, `jenisid`, `lokasiid`, `stok`, `kondisi`, `status`, `tglmasuk`, `foto`) VALUES
(22, 1, 'Papan Tulis', 'Internal', 2, 1, 65, 'baru', 'nonaktif', '2019-12-31', '1572837849.jpg'),
(25, 1, 'Vacum Cleaner', 'Internal', 1, 2, 65, 'baru', 'nonaktif', '2019-12-31', '1572837696.jpg'),
(30, 5, 'Tong Sampah', 'Internal', 2, 3, 12, 'baru', 'nonaktif', '2019-11-01', '1572763337.jpg'),
(33, 5, 'infocus', 'External', 1, 5, 12, 'baru', 'nonaktif', '2019-11-06', '1573010584.png'),
(36, 14, 'Tong Sampah', 'Internal', 2, 6, 12, 'baru', 'nonaktif', '2019-11-01', '1573182623.jpg'),
(37, 5, 'infocus', 'External', 1, 4, 12, 'baru', 'nonaktif', '2019-11-02', '1573182721.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(1, 'elektronik'),
(2, 'furniture'),
(3, 'ATK'),
(4, 'olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`) VALUES
(1, 'asrama'),
(2, 'kelas'),
(3, 'kantor'),
(4, 'gudang'),
(5, 'masjid'),
(6, 'toilet');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_pengguna` enum('admin','ustadz') NOT NULL,
  `asal` varchar(45) NOT NULL,
  `hp` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foto` varchar(45) DEFAULT 'nophoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `jenis_pengguna`, `asal`, `hp`, `email`, `foto`) VALUES
(1, 'alfian', 'admin', 'indramayu', '0857xxx', 'alfian@gmail.com', '1573178478.png'),
(5, 'Iqbal', 'admin', 'Acehq', '0857xxx1', 'iqbal@gmail.com', '1573179085.jpg'),
(14, 'yuslam', 'ustadz', 'Malang', '0989382131233333', 'Yuslam@gmail.com', '1573179362.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('administrator','ustadz','') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT 'nophoto.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `foto`) VALUES
(1, 'alfian', 'alfian@gmail.com', NULL, '$2y$10$WMyjvQqcIE8t68Qzo9ly9.EGYyI1Uv43eOOXgL9GnR.Sb9FyQmYN.', NULL, '2019-11-03 19:47:52', '2019-11-03 19:47:52', 'ustadz', '1573048634.png'),
(3, 'alfiandasdasda', 'asdasgf@asdsa', NULL, '123123123', NULL, NULL, NULL, 'ustadz', 'nophoto.jpg'),
(4, 'baihaqi', 'baihaqi@gmail.com', NULL, '123123123', NULL, NULL, NULL, 'ustadz', '1573025569.jpg'),
(6, 'alfiansadsda', 'nspbdz21@gmail.com', NULL, '123123123', NULL, NULL, NULL, 'ustadz', 'nophoto.jpg'),
(7, 'alfian2333', 'asdsdasdasasgf@', NULL, '123123123', NULL, NULL, NULL, 'ustadz', '1573025196.jpg'),
(8, 'gaul', 'nspbdssz1@gmail.com', NULL, '123123123', NULL, NULL, NULL, 'administrator', '1573025260.jpg'),
(9, 'iqbal', 'iqbal1@gmail.com', NULL, '$2y$10$jO.tCtPD1Aso.lraGtHraOtiSUCqF8eoIxJoFqE8nil0oTCB1030e', NULL, '2019-11-07 03:01:25', '2019-11-07 03:01:25', NULL, 'nophoto.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_barang_jenis_idx` (`jenisid`),
  ADD KEY `fk_barang_lokasi1_idx` (`lokasiid`),
  ADD KEY `fk_barang_pengguna1_idx` (`penggunaid`),
  ADD KEY `fk_barang_donatur1_idx` (`donatur`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `fk_barang_jenis` FOREIGN KEY (`jenisid`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_lokasi1` FOREIGN KEY (`lokasiid`) REFERENCES `lokasi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_pengguna1` FOREIGN KEY (`penggunaid`) REFERENCES `pengguna` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
