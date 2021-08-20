-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 10:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myelectric`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `bab`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', 'sejarah my electric', 'jadi myelectric ini adalah ', NULL, NULL),
(3, 'Visi dan Misi', 'Visi', '<p>foya</p>', '2021-07-29 20:00:42', '2021-07-29 21:16:36'),
(4, 'Visi dan Misi', 'Misi', '<ul>\r\n	<li>foya</li>\r\n	<li>foya</li>\r\n	<li>foya</li>\r\n	<li>foya</li>\r\n</ul>', '2021-07-29 20:22:10', '2021-07-29 21:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `artikelkats`
--

CREATE TABLE `artikelkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikelkats`
--

INSERT INTO `artikelkats` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Tips and Trick', NULL, '2021-07-29 20:19:49'),
(2, 'Gadget and Llife Style', '2021-07-06 03:33:54', '2021-07-06 03:33:54'),
(4, 'New Trend', '2021-07-06 03:49:47', '2021-07-06 03:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kutipan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `id_kategori`, `judul`, `kutipan`, `isi`, `penulis`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, '5 Cara Mudah Mengembalikan Kontak yang Hilang di WhatsApp', 'Apa kamu pernah kehilangan kontak di aplikasi WhatsApp? Rasanya pasti bingung dan kesal kan', '<p>1. Bersihkan&nbsp;<em>cache</em>&nbsp;aplikasi WhatsApp-mu</p>\r\n\r\n<p>2. Aktifkan menu&nbsp;<em>Permission</em></p>\r\n\r\n<p>3. Tampilkan semua kontak dari pengaturan WhatsApp</p>\r\n\r\n<p>4. Aktifkan kontak di akun Gmail-mu</p>\r\n\r\n<p>5. Kalau sudah mentok, coba hapus dan instal ulang WhatsApp-mu</p>', 'unknown', 'M9CFN6MxX5BwEbOMNCVbfyIeAnyos2MhTDUoH8JL.png', NULL, '2021-07-14 22:35:26'),
(3, 1, 'Ini 6 Hal yang Wajib Kamu Pertimbangkan Sebelum Beli Earphone', 'Bisa dibilang, earphone itu perangkat yang paling dibutuhkan sekarang setelah smartphone. Pasalnya, earphone itu fungsinya beraneka ragam....', '<p>1. Jangan tergiur harga murah</p>\r\n\r\n<p>2. Ketahui kebutuhanmu</p>\r\n\r\n<p>3. Jangan malas cek spesifikasi earphone yang mau dibeli</p>', 'unknown', '8KaGRMN7cqVyMTHZEFcFllpjOQZueMLoCCmqGWKn.jpg', '2021-07-08 04:46:42', '2021-07-14 22:36:09'),
(4, 2, 'Tips Pola Asuh Digital Bagi Orangtua Agar Anak Tak Kecanduan Ponsel', 'Era teknologi membuat ponsel atau gadget seolah menjadi kebutuhan yang sulit dilepaskan. Bukan hanya orang dewasa bahkan juga anak-anak. ...', '<p>Psikolog Rumah Sakit Pondok Indah Meriyati M.Psi., mengatakan bahwa&nbsp;<a href=\"https://www.suara.com/tag/pola-asuh-digital\">pola asuh digital</a>&nbsp;bukan sekadar orangtua memfasilitasi kebutuhan teknologi bagi anak. Ia mengingatkan bahwa peran orangtua harus tetap hadir, baik fisik juga psikis, bagi anak.&nbsp;</p>\r\n\r\n<p>&quot;Pengasuhan digital tidak hanya sebatas dialog dan pemasangan fitur-fitur parenting control. Namun tetap diperlukan pendampingan secara psikologis untuk anak dan remaja yang berkaitan dengan teknologi dan internet,&quot; jelas Meriyati dalam webinar RSPI Jakarta, Selasa (29/6/2021).</p>', 'unknown', '65WjEVFYIxKcR40JwHpFsPBwI35w6JGIT6XppvSu.jpg', '2021-07-08 04:47:24', '2021-07-14 22:36:56'),
(6, 4, 'adss', 'asdsads', '<p>adsasd</p>', 'asda', 'zUdqqytmDg5V9oCZAzmhu4vEmKoTh3VdfOAv7kV7.png', '2021-07-14 00:07:09', '2021-07-14 00:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `slug`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'LG', 'lgggg', '9995ebjWvlPyX5BkoZqN1OFAadTpYOUXWpLC9VTt.jpg', NULL, '2021-08-13 18:57:01'),
(2, 'Acer', 'acer', 'FdVTvPdIWUMgjMOVNO48IBfwFpz216XKbeXpgYMs.jpg', '2021-07-05 19:57:20', '2021-07-05 20:18:28'),
(3, 'JBL', 'jbl', 'NVaKFHPg7ZTUosmlYu36eNuCMAU5QsV002D2u693.png', '2021-07-05 20:16:23', '2021-07-05 20:16:23'),
(8, 'Polytron', 'polytron', 'E4a0dJ6T1cWzCu1EZjO4JoiHOkuOwfHV9gKQUUu1.png', '2021-07-08 05:46:33', '2021-07-08 05:46:33'),
(9, 'Daikin', 'daikin', 'KjPCAIkBfsBhBb3MastZtw0TCfH9T8Pag5HyuHBO.png', '2021-07-08 05:48:06', '2021-07-08 05:48:06'),
(10, 'Samsung', 'samsung', 'O7xf4rXNjuXfHmayLe8fkWGwILi4g4uR4FyY6sBL.png', '2021-07-12 21:09:44', '2021-07-12 21:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(11) NOT NULL,
  `id_produk` bigint(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_produk`, `quantity`, `created_at`, `updated_at`) VALUES
(12, 4, 5, 0, '2021-07-24 00:37:22', '2021-07-24 00:37:22'),
(13, 4, 5, 0, '2021-07-24 01:13:44', '2021-07-24 01:13:44'),
(32, 1, 3, 2, '2021-07-30 22:45:21', '2021-07-30 22:45:21'),
(36, 3, 4, 1, '2021-08-12 22:50:48', '2021-08-12 22:50:48'),
(37, 3, 5, 2, '2021-08-12 22:57:00', '2021-08-12 22:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_05_100538_create_produkkats_table', 1),
(5, '2021_07_06_021115_create_brands_table', 2),
(6, '2021_07_06_035655_create_produks_table', 3),
(7, '2021_07_06_100818_create_artikelkats_table', 4),
(8, '2021_07_08_041039_create_artikels_table', 5),
(9, '2021_07_08_060616_create_sliders_table', 6),
(10, '2021_07_24_020033_create_carts_table', 7),
(11, '2021_07_26_043926_create_medsos_table', 8),
(12, '2021_07_29_131451_create_about_us_table', 9);

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
-- Table structure for table `produkkats`
--

CREATE TABLE `produkkats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produkkats`
--

INSERT INTO `produkkats` (`id`, `kategori`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Audio', 'audio', NULL, '2021-07-29 20:03:39'),
(7, 'Kulkas', 'kulkas', '2021-07-05 08:58:50', '2021-07-05 08:58:50'),
(8, 'Laptop', 'laptop', '2021-07-05 08:58:59', '2021-07-05 08:58:59'),
(9, 'Televisi', 'televisi', '2021-07-05 08:59:10', '2021-07-05 08:59:10'),
(10, 'Air Conditioner', 'air-conditioner', '2021-07-05 08:59:30', '2021-07-05 08:59:30'),
(12, 'apa aja', 'a', '2021-08-12 22:28:42', '2021-08-12 22:28:42'),
(13, 'apa aja', 'a', '2021-08-12 22:32:43', '2021-08-12 22:32:43'),
(14, 'apa', 'a', '2021-08-12 22:34:55', '2021-08-12 22:34:55'),
(15, 'apa aja', 'a', '2021-08-12 22:35:46', '2021-08-12 22:35:46'),
(16, 'apa aja', 'a', '2021-08-12 22:36:28', '2021-08-12 22:36:28'),
(17, 'apa aja', 'a', '2021-08-12 22:36:45', '2021-08-12 22:36:45'),
(18, 'apa aja', 'a', '2021-08-12 22:37:43', '2021-08-12 22:37:43'),
(19, 'apa aja', 'a', '2021-08-12 22:42:19', '2021-08-12 22:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_brand` bigint(20) UNSIGNED DEFAULT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `id_kategori`, `id_brand`, `produk`, `harga`, `deskripsi`, `keterangan`, `stock`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 1, 3, 'Audio JBL', 1000, '<p>bagus banget</p>', 'bagus', 2, 'GadBlHw62bOWFftmkE398waZRh8TKhIZItb2DqZp.png', '2021-07-06 06:36:27', '2021-07-12 21:07:20'),
(4, 7, 1, 'Kulkas LG', 22, '<p>fsfss <strong>dfdf</strong></p>', 'sd', 2, 'KCdL1fmgSLCilMUpboRbqPSncQ2SZp2NcuYdnH0X.jpg', '2021-07-06 06:43:17', '2021-07-12 21:07:32'),
(5, 8, 2, 'Laptop Acer', 4000, '<p>bagus</p>', 'bagus', 32, 'Ma0PO46m4n2pZTTVy6EMPArQwOubxgnrOzjMcl5A.jpg', '2021-07-08 05:53:13', '2021-07-08 05:53:13'),
(6, 9, 8, 'TV Polytron', 564, '<p>asda</p>', 'asd', 45, 'x7qW25VBXGbN5ol3Dw2tdr62WqloZyDYUkLR4xMS.jpg', '2021-07-08 05:54:29', '2021-07-08 05:54:29'),
(7, 10, 10, 'AC Samsung', 43, '<p>bagus</p>', 'bagus', 34, 'BjjbaRJC1QBUu0YPDvgsLUslYzqDLdN3nO93oGAM.jpg', '2021-07-08 05:55:15', '2021-07-12 21:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Banner 1', '7fYYMIyjMxuIOyWJRnnjP2owq6FOLdyp6lA3pxMz.jpg', NULL, '2021-07-07 23:39:16'),
(2, 'Banner 2', 'qGE9fbrfm9frz44gz36zqamLWU4UHyOf5RGz9KWu.png', '2021-07-07 23:19:13', '2021-07-07 23:39:28'),
(3, 'Banner 3', '635Vs8PL4cpTHdi9pPfNa3r9aJahAhJqxilmR6c7.jpg', '2021-07-07 23:39:41', '2021-07-07 23:39:41'),
(4, 'Banner 4', 'tXVMieNjwDIzc7KBEYHw08CvZbVo6ldCExDEQu1g.jpg', '2021-07-07 23:39:52', '2021-07-07 23:39:52');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `nama`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Instagram', 'fab fa-instagram', 'https://www.instagram.com/oktaviadpp/', NULL, '2021-07-31 22:32:00'),
(2, 'Facebook', 'fab fa-facebook-f', 'https://www.facebook.com/oktaviadwiputri506/', '2021-07-25 23:22:00', '2021-07-31 22:32:08'),
(3, 'Youtube', 'fab fa-youtube', 'https://www.youtube.com/channel/UCcutWbPkvkcyfFUgr59JRKg', '2021-07-25 23:23:16', '2021-07-31 21:33:51'),
(4, 'Youtube Index', '', 'https://www.youtube.com/embed/Vd1q0EPQGcA', '2021-07-31 20:26:03', '2021-07-31 22:34:58');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'oktavia', 'oktavia@gmail.com', NULL, '$2y$10$o6Hti5Y2vsYhwUB6EHC.KOvWUuUfrj0vK.kmXMC0fhT8FvC1/VBve', NULL, '2021-07-23 06:03:23', '2021-07-23 06:03:23'),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$n7DIcA2IKCsw71qGasn9cOm27fExcZp2SPvKXx/jxIPdpZNezm9pK', NULL, '2021-07-23 09:39:45', '2021-07-23 09:39:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikelkats`
--
ALTER TABLE `artikelkats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `produkkats`
--
ALTER TABLE `produkkats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artikelkats`
--
ALTER TABLE `artikelkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produkkats`
--
ALTER TABLE `produkkats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
