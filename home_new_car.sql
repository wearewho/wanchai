-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 02:54 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_new_car`
--

CREATE TABLE `home_new_car` (
  `id` int(10) UNSIGNED NOT NULL,
  `newcar_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `newcar_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_new_car`
--

INSERT INTO `home_new_car` (`id`, `newcar_header`, `newcar_detail`, `property_header`, `property_detail`, `review_header`, `review_detail`, `created_at`, `updated_at`) VALUES
(1, 'โตโยต้า แข็งแกร่งสุด ๆ นะจ๊ะ', 'ล้อแม็กเต็มขอบทองประตูเหลือบเงินสะท้อนแสงได้', 'ตัวถังของรถ', 'ด้วยเครื่องยนต์ที่ไม่มีการย้อมแมวจึงทำให้คุณภาพรถ เยี่ยมยอดกระเทียมดอง', 'รีวิว จากคุณ ประยุทธ์', 'ใช้แล้วดี ใช้ๆ ไปเหอะ ช่วยๆ กันหน่อย นะ เข้าใจกันด้วยว่า รถเนี่ยดีมาก', '2019-04-20 17:00:00', '2019-04-21 09:13:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_new_car`
--
ALTER TABLE `home_new_car`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_new_car`
--
ALTER TABLE `home_new_car`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
