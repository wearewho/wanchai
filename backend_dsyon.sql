-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2019 at 05:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend_dsyon`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `header`, `type`, `brand`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(28, 'Toyota Hilux Vigo 2.5 CHAMP DOUBLE CAB (ปี 11-15) รุ่น E', 'รถกระบะ', 'TOYOTA', 'เครื่องยนต์ดีเซล 2.5 กุญแจรีโมทแท้ AIR bag +ABS พวงมาลัย Multifunction ล้อแม๊ค เครื่องเดิม ของเหลวใหม่ ท่อลั่น พร้อมบวก', 'publish', '2019-04-23 08:10:40', '2019-05-26 16:11:36'),
(29, 'Honda Accord 2.0 (ปี 07-13) E i-VTEC Sedan AT สีขาว', 'รถเก๋ง', 'HONDA', 'พวงมาลัย Multifunction AIRBAG +ABS เบาะหนังแท้ ปรับไฟฟ้า เครื่องเดิม2.4 น้ำมันล้วน เครื่องฟิต สตาร์ทติดง่าย กระจกไฟฟ้า กุญแจรีโมท พร้อมหล่อ ทุกสถานการณ์', 'publish', '2019-04-23 09:04:48', '2019-04-25 04:50:35'),
(30, 'Toyota Fortuner 2.5 (ปี 12-15) G SUV MT', 'รถอเนกประสงค์', 'TOYOTA', 'ยี่ห้อ - Toyota รุ่น - Fortuner โฉมรถยนต์ - (ปี 12-15) รายละเอียดรุ่น - G ปี - 2012 ขนาดเครื่องยนต์ - 2494 ซีซี ระบบเกียร์ - เกียร์ธรรมดา จำนวนที่นั่ง - 7 เลขไมล์ (กม.) - 100 สี - สีดำ', 'publish', '2019-04-23 09:06:00', '2019-04-23 09:06:00'),
(31, 'Mercedes-Benz CLA200 1.6 Urban Sedan AT', 'รถเก๋ง', 'MERCEDES-BENZ', 'ยี่ห้อ - Mercedes-Benz\r\nรุ่น - CLA200\r\nรายละเอียดรุ่น - Urban\r\nปี - 2017\r\nขนาดเครื่องยนต์ - 1595 ซีซี\r\nระบบเกียร์ - เกียร์อัตโนมัติ\r\nจำนวนที่นั่ง - 5\r\nเลขไมล์ (กม.) - 32500\r\nสี - สีดำ', 'publish', '2019-04-23 09:08:35', '2019-04-23 09:08:35'),
(32, 'Honda City 1.5 (ปี 14-18) รุ่น V', 'รถเก๋ง', 'HONDA', '2015 Honda City 1.5 (ปี 14-18) V i-VTEC Sedan AT', 'publish', '2019-05-26 16:17:42', '2019-05-26 16:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog_image`
--

CREATE TABLE `blog_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_image`
--

INSERT INTO `blog_image` (`id`, `blog_id`, `image_name`, `image_size`, `image_url`, `created_at`, `updated_at`) VALUES
(37, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_CuKm0UUUOz5AhkuowkDSYd_1555827776.jpg', 110785, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_CuKm0UUUOz5AhkuowkDSYd_1555827776.jpg', '2019-04-21 06:22:58', '2019-04-21 06:22:58'),
(38, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_inyJjiprGd00tKnrBYfHmG_1555827778.jpg', 105544, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_inyJjiprGd00tKnrBYfHmG_1555827778.jpg', '2019-04-21 06:22:58', '2019-04-21 06:22:58'),
(39, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_mF4iUF9eyFbsbFiXKTFf7r_1555827778.jpg', 89459, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_mF4iUF9eyFbsbFiXKTFf7r_1555827778.jpg', '2019-04-21 06:22:58', '2019-04-21 06:22:58'),
(40, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_MfMcF1Dos3agy9pK6mCIIn_1555827778.jpg', 117977, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_MfMcF1Dos3agy9pK6mCIIn_1555827778.jpg', '2019-04-21 06:22:58', '2019-04-21 06:22:58'),
(41, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_r1m5yEqUX0JjL4WqaM4Duj_1555827778.jpg', 106648, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_r1m5yEqUX0JjL4WqaM4Duj_1555827778.jpg', '2019-04-21 06:22:58', '2019-04-21 06:22:58'),
(42, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_yCfh17LHSWfSS1DzaiPT3o_1555827778.jpg', 113999, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_yCfh17LHSWfSS1DzaiPT3o_1555827778.jpg', '2019-04-21 06:22:58', '2019-04-21 06:22:58'),
(43, 6, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1555827778.jpg', 116983, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1555827778.jpg', '2019-04-21 06:22:59', '2019-04-21 06:22:59'),
(44, 7, 'blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_2QKKyWyrsz3TkKVT0MQ7SD_1555828701.jpeg', 99017, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_2QKKyWyrsz3TkKVT0MQ7SD_1555828701.jpeg', '2019-04-21 06:38:22', '2019-04-21 06:38:22'),
(45, 7, 'blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_bS1kxtXAnhAGTJgSRRJo7l_1555828702.jpeg', 92022, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_bS1kxtXAnhAGTJgSRRJo7l_1555828702.jpeg', '2019-04-21 06:38:23', '2019-04-21 06:38:23'),
(46, 7, 'blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_CbklGz5U1yFaiq0zZ46vWY_1555828703.jpeg', 93267, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_CbklGz5U1yFaiq0zZ46vWY_1555828703.jpeg', '2019-04-21 06:38:24', '2019-04-21 06:38:24'),
(47, 7, 'blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_DNkkDRXj4vKQEJOLWuITAw_1555828704.jpeg', 66754, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_DNkkDRXj4vKQEJOLWuITAw_1555828704.jpeg', '2019-04-21 06:38:24', '2019-04-21 06:38:24'),
(48, 7, 'blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_TXCjWdCFVjvdoKmaUr7KTj_1555828704.jpeg', 109316, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-mazda-2-sports-high-connect-hatchback-thailand_0957775_TXCjWdCFVjvdoKmaUr7KTj_1555828704.jpeg', '2019-04-21 06:38:25', '2019-04-21 06:38:25'),
(49, 8, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_cPRJKwFffkrRsa6gHCpHzZ_1555828953.jpeg', 87747, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_cPRJKwFffkrRsa6gHCpHzZ_1555828953.jpeg', '2019-04-21 06:42:33', '2019-04-21 06:42:33'),
(50, 8, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_D8msxDa5Y7oB46gOqMRk0P_1555828953.jpeg', 97080, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_D8msxDa5Y7oB46gOqMRk0P_1555828953.jpeg', '2019-04-21 06:42:34', '2019-04-21 06:42:34'),
(51, 8, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_kPrnTBIgJLe2SzbN4m7bmk_1555828954.jpeg', 115896, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_kPrnTBIgJLe2SzbN4m7bmk_1555828954.jpeg', '2019-04-21 06:42:34', '2019-04-21 06:42:34'),
(52, 8, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_S695qU3NJ5JQorj1467ZpJ_1555828954.jpeg', 96742, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_S695qU3NJ5JQorj1467ZpJ_1555828954.jpeg', '2019-04-21 06:42:34', '2019-04-21 06:42:34'),
(53, 8, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_YbAbjvmLiSKQFLYKwV1x2o_1555828954.jpeg', 107088, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_YbAbjvmLiSKQFLYKwV1x2o_1555828954.jpeg', '2019-04-21 06:42:34', '2019-04-21 06:42:34'),
(54, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_6Nuq7uGshaEZQJ79oYpyx2_1555829452.jpg', 83582, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_6Nuq7uGshaEZQJ79oYpyx2_1555829452.jpg', '2019-04-21 06:50:53', '2019-04-21 06:50:53'),
(55, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_9QePbyWJCHoVEw1YGoIfzt_1555829453.jpg', 106608, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_9QePbyWJCHoVEw1YGoIfzt_1555829453.jpg', '2019-04-21 06:50:54', '2019-04-21 06:50:54'),
(56, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e1MOeeghWekDF4cvrUAxYQ_1555829454.jpg', 98989, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e1MOeeghWekDF4cvrUAxYQ_1555829454.jpg', '2019-04-21 06:50:54', '2019-04-21 06:50:54'),
(57, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1555829454.jpg', 91371, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1555829454.jpg', '2019-04-21 06:50:54', '2019-04-21 06:50:54'),
(58, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_Kq8PxO91uuqIoqVifOOG9I_1555829454.jpg', 83703, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_Kq8PxO91uuqIoqVifOOG9I_1555829454.jpg', '2019-04-21 06:50:55', '2019-04-21 06:50:55'),
(59, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_oKFB4KW72IMI9Wcjv8vwEt_1555829455.jpg', 93946, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_oKFB4KW72IMI9Wcjv8vwEt_1555829455.jpg', '2019-04-21 06:50:55', '2019-04-21 06:50:55'),
(60, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_P1rLKLUWXGZsIPbJtH4ESA_1555829455.jpg', 97999, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_P1rLKLUWXGZsIPbJtH4ESA_1555829455.jpg', '2019-04-21 06:50:55', '2019-04-21 06:50:55'),
(61, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_T2ExOHiGAXitv09izxUQWQ_1555829455.jpg', 75753, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_T2ExOHiGAXitv09izxUQWQ_1555829455.jpg', '2019-04-21 06:50:55', '2019-04-21 06:50:55'),
(62, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_VrqQC0V5LdXEL25pGAkC8L_1555829455.jpg', 66651, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_VrqQC0V5LdXEL25pGAkC8L_1555829455.jpg', '2019-04-21 06:50:55', '2019-04-21 06:50:55'),
(63, 9, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_wGbvG8lkrs53WR8j1ANjzt_1555829455.jpg', 65637, 'https://porjai.s3.ap-southeast-1.amazonaws.com/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_wGbvG8lkrs53WR8j1ANjzt_1555829455.jpg', '2019-04-21 06:50:55', '2019-04-21 06:50:55'),
(105, 26, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1556006729.jpg', 91371, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1556006729.jpg', '2019-04-23 08:05:29', '2019-04-23 08:05:29'),
(106, 26, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_Kq8PxO91uuqIoqVifOOG9I_1556006729.jpg', 83703, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_Kq8PxO91uuqIoqVifOOG9I_1556006729.jpg', '2019-04-23 08:05:29', '2019-04-23 08:05:29'),
(107, 26, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_oKFB4KW72IMI9Wcjv8vwEt_1556006729.jpg', 93946, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_oKFB4KW72IMI9Wcjv8vwEt_1556006729.jpg', '2019-04-23 08:05:30', '2019-04-23 08:05:30'),
(108, 26, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_P1rLKLUWXGZsIPbJtH4ESA_1556006730.jpg', 97999, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_P1rLKLUWXGZsIPbJtH4ESA_1556006730.jpg', '2019-04-23 08:05:30', '2019-04-23 08:05:30'),
(109, 27, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_S695qU3NJ5JQorj1467ZpJ_1556006747.jpeg', 96742, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_S695qU3NJ5JQorj1467ZpJ_1556006747.jpeg', '2019-04-23 08:05:47', '2019-04-23 08:05:47'),
(110, 27, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_YbAbjvmLiSKQFLYKwV1x2o_1556006747.jpeg', 107088, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_YbAbjvmLiSKQFLYKwV1x2o_1556006747.jpeg', '2019-04-23 08:05:47', '2019-04-23 08:05:47'),
(121, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1556008954.jpg', 91371, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1556008954.jpg', '2019-04-23 08:42:34', '2019-04-23 08:42:34'),
(122, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_6Nuq7uGshaEZQJ79oYpyx2_1556008969.jpg', 83582, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_6Nuq7uGshaEZQJ79oYpyx2_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(123, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_9QePbyWJCHoVEw1YGoIfzt_1556008969.jpg', 106608, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_9QePbyWJCHoVEw1YGoIfzt_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(124, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e1MOeeghWekDF4cvrUAxYQ_1556008969.jpg', 98989, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e1MOeeghWekDF4cvrUAxYQ_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(125, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_Kq8PxO91uuqIoqVifOOG9I_1556008969.jpg', 83703, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_Kq8PxO91uuqIoqVifOOG9I_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(126, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_oKFB4KW72IMI9Wcjv8vwEt_1556008969.jpg', 93946, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_oKFB4KW72IMI9Wcjv8vwEt_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(127, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_P1rLKLUWXGZsIPbJtH4ESA_1556008969.jpg', 97999, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_P1rLKLUWXGZsIPbJtH4ESA_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(128, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_T2ExOHiGAXitv09izxUQWQ_1556008969.jpg', 75753, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_T2ExOHiGAXitv09izxUQWQ_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(129, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_VrqQC0V5LdXEL25pGAkC8L_1556008969.jpg', 66651, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_VrqQC0V5LdXEL25pGAkC8L_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(130, 28, 'blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_wGbvG8lkrs53WR8j1ANjzt_1556008969.jpg', 65637, 'image_car/blog/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_wGbvG8lkrs53WR8j1ANjzt_1556008969.jpg', '2019-04-23 08:42:49', '2019-04-23 08:42:49'),
(131, 29, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_kPrnTBIgJLe2SzbN4m7bmk_1556010288.jpeg', 115896, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_kPrnTBIgJLe2SzbN4m7bmk_1556010288.jpeg', '2019-04-23 09:04:48', '2019-04-23 09:04:48'),
(132, 29, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_cPRJKwFffkrRsa6gHCpHzZ_1556010304.jpeg', 87747, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_cPRJKwFffkrRsa6gHCpHzZ_1556010304.jpeg', '2019-04-23 09:05:04', '2019-04-23 09:05:04'),
(133, 29, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_D8msxDa5Y7oB46gOqMRk0P_1556010304.jpeg', 97080, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_D8msxDa5Y7oB46gOqMRk0P_1556010304.jpeg', '2019-04-23 09:05:04', '2019-04-23 09:05:04'),
(134, 29, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_S695qU3NJ5JQorj1467ZpJ_1556010304.jpeg', 96742, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_S695qU3NJ5JQorj1467ZpJ_1556010304.jpeg', '2019-04-23 09:05:05', '2019-04-23 09:05:05'),
(135, 29, 'blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_YbAbjvmLiSKQFLYKwV1x2o_1556010305.jpeg', 107088, 'image_car/blog/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_YbAbjvmLiSKQFLYKwV1x2o_1556010305.jpeg', '2019-04-23 09:05:05', '2019-04-23 09:05:05'),
(136, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1556010360.jpg', 116983, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1556010360.jpg', '2019-04-23 09:06:00', '2019-04-23 09:06:00'),
(137, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_CuKm0UUUOz5AhkuowkDSYd_1556010374.jpg', 110785, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_CuKm0UUUOz5AhkuowkDSYd_1556010374.jpg', '2019-04-23 09:06:14', '2019-04-23 09:06:14'),
(138, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_inyJjiprGd00tKnrBYfHmG_1556010374.jpg', 105544, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_inyJjiprGd00tKnrBYfHmG_1556010374.jpg', '2019-04-23 09:06:14', '2019-04-23 09:06:14'),
(139, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_mF4iUF9eyFbsbFiXKTFf7r_1556010374.jpg', 89459, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_mF4iUF9eyFbsbFiXKTFf7r_1556010374.jpg', '2019-04-23 09:06:14', '2019-04-23 09:06:14'),
(140, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_MfMcF1Dos3agy9pK6mCIIn_1556010374.jpg', 117977, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_MfMcF1Dos3agy9pK6mCIIn_1556010374.jpg', '2019-04-23 09:06:14', '2019-04-23 09:06:14'),
(141, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_r1m5yEqUX0JjL4WqaM4Duj_1556010374.jpg', 106648, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_r1m5yEqUX0JjL4WqaM4Duj_1556010374.jpg', '2019-04-23 09:06:14', '2019-04-23 09:06:14'),
(142, 30, 'blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_yCfh17LHSWfSS1DzaiPT3o_1556010374.jpg', 113999, 'image_car/blog/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_yCfh17LHSWfSS1DzaiPT3o_1556010374.jpg', '2019-04-23 09:06:14', '2019-04-23 09:06:14'),
(143, 31, 'blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_jbobdbrTBiIIUwbElQnRFo (1)_1556010515.jpeg', 119362, 'image_car/blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_jbobdbrTBiIIUwbElQnRFo (1)_1556010515.jpeg', '2019-04-23 09:08:35', '2019-04-23 09:08:35'),
(144, 31, 'blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_bJhPFavSkhrF1EUwHimW4Z_1556010537.jpeg', 123206, 'image_car/blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_bJhPFavSkhrF1EUwHimW4Z_1556010537.jpeg', '2019-04-23 09:08:57', '2019-04-23 09:08:57'),
(145, 31, 'blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_HJ8u32lCAwFAhiBCq7hK9e_1556010537.jpeg', 98413, 'image_car/blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_HJ8u32lCAwFAhiBCq7hK9e_1556010537.jpeg', '2019-04-23 09:08:57', '2019-04-23 09:08:57'),
(146, 31, 'blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_vSkzIsbzsIfYvvO4MMwMY6_1556010537.jpeg', 113494, 'image_car/blog/gallery_used-car-one2car-mercedes-benz-cla-class-cla200-urban-sedan-thailand_4752975_vSkzIsbzsIfYvvO4MMwMY6_1556010537.jpeg', '2019-04-23 09:08:57', '2019-04-23 09:08:57'),
(147, 32, 'blog/IMG_1967_1558887462.jpg', 194676, 'image_car/blog/IMG_1967_1558887462.jpg', '2019-05-26 16:17:43', '2019-05-26 16:17:43'),
(148, 32, 'blog/IMG_1968_1558887463.jpg', 206449, 'image_car/blog/IMG_1968_1558887463.jpg', '2019-05-26 16:17:43', '2019-05-26 16:17:43'),
(149, 32, 'blog/IMG_1969_1558887463.jpg', 184960, 'image_car/blog/IMG_1969_1558887463.jpg', '2019-05-26 16:17:43', '2019-05-26 16:17:43'),
(150, 32, 'blog/IMG_1970_1558887463.jpg', 194598, 'image_car/blog/IMG_1970_1558887463.jpg', '2019-05-26 16:17:43', '2019-05-26 16:17:43'),
(151, 32, 'blog/IMG_1971_1558887463.jpg', 181641, 'image_car/blog/IMG_1971_1558887463.jpg', '2019-05-26 16:17:44', '2019-05-26 16:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `lat_map` decimal(10,8) NOT NULL,
  `lng_map` decimal(11,8) NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instragram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `lat_map`, `lng_map`, `address1`, `address2`, `address3`, `address4`, `address5`, `phone1`, `phone2`, `facebook`, `instragram`, `youtube`, `line`, `created_at`, `updated_at`) VALUES
(1, '14.03264389', '100.34950256', '18/407 ถนนคู้บอน ซอยคู้บอน27แยก35', 'บางเขน', 'ท่าแร้ง', 'กรุงเทพ', '10220', '0812345678', '0823454460', 'porjaiauto', 'porjaiauto', 'porjaiauto', 'porjaiauto', '2019-04-19 10:00:00', '2019-04-21 09:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `header`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(14, 'บริการหลังการขาย', 'บริการทุกระดับ ประทับใจ', 'publish', '2019-04-23 08:46:02', '2019-04-23 08:46:02'),
(15, 'บริการหลังการขาย', 'ใช้ดีจริงๆคะ', 'publish', '2019-04-23 08:46:29', '2019-04-23 08:46:29'),
(16, 'บริการหลังการขาย', 'ช่างตรวจทุกซอกทุกมุมคะ', 'publish', '2019-04-23 08:47:02', '2019-04-23 08:47:02'),
(17, 'บริการหลังการขาย', 'สวยงามตามท้องเรื่อง', 'publish', '2019-04-23 08:48:35', '2019-04-23 08:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `image_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_size` int(11) NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `gallery_id`, `image_name`, `image_size`, `image_url`, `created_at`, `updated_at`) VALUES
(8, 4, 'gallery/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1555696460.jpg', 116983, 'https://porjai.s3.ap-southeast-1.amazonaws.com/gallery/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1555696460.jpg', '2019-04-19 17:54:20', '2019-04-19 17:54:20'),
(19, 10, 'gallery/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1555863134.jpg', 91371, 'https://porjai.s3.ap-southeast-1.amazonaws.com/gallery/gallery_used-car-one2car-toyota-hilux-vigo-e-prerunner-vn-turbo-pickup-thailand_0784865_e7oAafoZvDRSKSoszFqqRT_1555863134.jpg', '2019-04-21 16:12:15', '2019-04-21 16:12:15'),
(20, 1, 'gallery/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_kPrnTBIgJLe2SzbN4m7bmk_1555863415.jpeg', 115896, 'https://porjai.s3.ap-southeast-1.amazonaws.com/gallery/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_kPrnTBIgJLe2SzbN4m7bmk_1555863415.jpeg', '2019-04-21 16:16:57', '2019-04-21 16:16:57'),
(22, 15, 'gallery/alloy-asphalt-auto-241316_1556009189.jpg', 79122, 'image_car/gallery/alloy-asphalt-auto-241316_1556009189.jpg', '2019-04-23 08:46:29', '2019-04-23 08:46:29'),
(23, 16, 'gallery/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1556009222.jpg', 116983, 'image_car/gallery/gallery_used-car-one2car-toyota-fortuner-g-suv-thailand_9332875_zfbtESLzFa6lv5sbkSXa8M_1556009222.jpg', '2019-04-23 08:47:02', '2019-04-23 08:47:02'),
(25, 17, 'gallery/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_D8msxDa5Y7oB46gOqMRk0P_1556009339.jpeg', 97080, 'image_car/gallery/gallery_used-car-one2car-honda-accord-e-i-vtec-sedan-thailand_B1C87C6D8A9646B8AFA3CBED844A825E_0707315_D8msxDa5Y7oB46gOqMRk0P_1556009339.jpeg', '2019-04-23 08:48:59', '2019-04-23 08:48:59'),
(26, 14, 'gallery/pro1_1558889102.png', 249784, 'image_car/gallery/pro1_1558889102.png', '2019-05-26 16:45:03', '2019-05-26 16:45:03'),
(27, 14, 'gallery/pro2_1558889103.png', 196093, 'image_car/gallery/pro2_1558889103.png', '2019-05-26 16:45:03', '2019-05-26 16:45:03'),
(28, 14, 'gallery/pro3_1558889103.png', 234971, 'image_car/gallery/pro3_1558889103.png', '2019-05-26 16:45:03', '2019-05-26 16:45:03'),
(29, 14, 'gallery/pro4_1558889103.png', 228201, 'image_car/gallery/pro4_1558889103.png', '2019-05-26 16:45:03', '2019-05-26 16:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `home_new_car`
--

CREATE TABLE `home_new_car` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `image_name` text COLLATE utf8mb4_unicode_ci,
  `image_size` int(11) DEFAULT NULL,
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

INSERT INTO `home_new_car` (`id`, `image_url`, `image_name`, `image_size`, `newcar_header`, `newcar_detail`, `property_header`, `property_detail`, `review_header`, `review_detail`, `created_at`, `updated_at`) VALUES
(1, 'image_car/newcar/newcar_1556009837.png', 'newcar/newcar_1556009837.png', 135899, 'โตโยต้า แข็งแกร่งสุด ๆ นะจ๊ะ', 'ล้อแม็กเต็มขอบทองประตูเหลือบเงินสะท้อนแสงได้ <br> kkkk <br>', 'ตัวถังของรถ', 'ด้วยเครื่องยนต์ที่ไม่มีการย้อมแมวจึงทำให้คุณภาพรถ เยี่ยมยอดกระเทียมดอง', 'รีวิว จากคุณ ประยุทธ์ อาทิตย์โอชา', 'ใช้แล้วดี ใช้ๆ ไปเหอะ ช่วยๆ กันหน่อย นะ เข้าใจกันด้วยว่า รถเนี่ยดีมาก', '2019-04-20 17:00:00', '2019-05-14 11:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_promotion`
--

CREATE TABLE `home_promotion` (
  `id` int(10) UNSIGNED NOT NULL,
  `header` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_promotion`
--

INSERT INTO `home_promotion` (`id`, `header`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ผ่อน 0% 36 เดือน', 'Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus nisi, auctor nec auctor id, luctus sed dui. In ex tellus,', 'publish', '2019-04-12 09:04:36', '2019-04-21 06:17:09'),
(2, 'ผ่อนเบา', 'Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus nisi, auctor nec auctor id, luctus sed dui. In ex tellus,', 'publish', '2019-04-21 06:17:18', '2019-04-21 06:17:52'),
(3, 'ฟรีทุกค่าใช้จ่ายรับรถ', 'Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus nisi, auctor nec auctor id, luctus sed dui. In ex tellus,', 'publish', '2019-04-21 06:17:25', '2019-04-21 06:18:27'),
(4, 'บัตรสมนาคุณ Tesco Lotus 500 บาท', 'Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti. Sed risus nisi, auctor nec auctor id, luctus sed dui. In ex tellus,', 'publish', '2019-04-25 06:23:25', '2019-04-25 06:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `home_service`
--

CREATE TABLE `home_service` (
  `id` int(10) UNSIGNED NOT NULL,
  `document_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_header` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_service`
--

INSERT INTO `home_service` (`id`, `document_header`, `document_detail`, `promotion_header`, `promotion_detail`, `service_header`, `service_detail`, `created_at`, `updated_at`) VALUES
(1, 'เอกสารในการจัดไฟแนนซ์', '1. สำเนาบัตรประชาชน <br>\r\n2. สำเนาทะเบียนบ้าน <br>\r\n3. สลิปเงินเดือน <br>\r\n4. สำเนาบัตรประชาชน <br>\r\n  (ต้องเตรียมมาทั้งผู้ซื้อและผู้ค้ำประกัน(ถ้ามี)) <br>\r\n5. สเตทเมนท์บัญชีธนาคาร <br>', 'โปรโมชั่นประจำเดือน', '<ul style=\"padding-left:8px;\">\r\n  <li>บริการให้คำปรึกษาในการออกรถและเช็คเครดิตฟรี ไม่มีค่าใช้จ่าย</li>\r\n  <li>ฟรีดาวน์ ออกรถ 0 บาท</li>\r\n  <li>ฟรีดอกเบี้ย 6 เดือนแรก(ตามเงื่อนไขของไฟแนนซ์)</li>\r\n  <li>ฟรีค่าจัด/ค่าโอน</li>\r\n  <li>ฟรีบริการช่วยเหลือฉุกเฉิน 24 ชม. ทุกพื้นที่</li>\r\n  <li>ฟรีน้ำมันเต็มถัง</li>\r\n  <li>ฟรีประกันภัยรถยนต์ (ตามเงื่อนไขของธนาคาร)</li>\r\n  <li>ฟรี กล้องหน้ารถ/เซ็นเซอร์ถอยหลัง/รีโมตเซ็นทรัลล็อค/สายพ่วงแบตเตอรี่ (อย่างใดอย่างหนึ่ง)</li>\r\n  <li>ฟรี อุปกรณ์พื้นฐานที่จำเป็นสำหรับรถยนต์(ยางอะไหล่/แม่แรง/บล็อกขันล้อ)</li>\r\n</ul>', 'บริการหลังการขาย', '<ul style=\"padding-left:8px;\">\r\n   <li>รับประกันระบบไฟ เครื่องและเกียร์นาน 2 เดือน</li>\r\n   <li>ให้คำปรึกษาในการซ่อมบำรุง กรณีหมดระยะเวลารับประกัน</li>\r\n   <li>บริการตรวจเช็ครถฟรี....รายการ</li>\r\n </ul>', '2019-04-20 17:00:00', '2019-05-26 19:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `line` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appoint` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `tel`, `line`, `appoint`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'rerr', 0, 'fgfg', 'fgfg', 'tertetet', '2019-04-20 16:35:52', '2019-04-20 16:35:52'),
(2, 'Manager', 804299141, 'careeeeeeeeee', 'ต้องมีสักวัน', 'สนใจเข้าไปชมรถ', '2019-04-20 17:15:28', '2019-04-20 17:15:28'),
(3, 'Messy', 912334567, 'messyjaja', '21/04/2019', 'รถกระบะ 4 ประตู', '2019-04-20 17:19:31', '2019-04-20 17:19:31'),
(4, 'อาสี่แห่งชุมแสง', 21111111, 'seichumsang', '22/04/2019', 'อยากหารถให้ม๊าใช้ขายของสักคัน', '2019-04-21 07:55:08', '2019-04-21 07:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

CREATE TABLE `log_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_activities`
--

INSERT INTO `log_activities` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Update User successfully.', 'http://127.0.0.1:8000/admin/users/2', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1, '2019-04-10 07:58:29', '2019-04-10 07:58:29'),
(2, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1, '2019-04-12 09:46:14', '2019-04-12 09:46:14'),
(3, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1, '2019-04-12 09:48:36', '2019-04-12 09:48:36'),
(4, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1, '2019-04-12 09:48:44', '2019-04-12 09:48:44'),
(5, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1, '2019-04-12 09:48:51', '2019-04-12 09:48:51'),
(6, 'Create User successfully.', 'http://127.0.0.1:8000/admin/users/create', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', 1, '2019-04-17 04:38:35', '2019-04-17 04:38:35'),
(7, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1, '2019-04-21 06:17:09', '2019-04-21 06:17:09'),
(8, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/2', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1, '2019-04-21 06:17:52', '2019-04-21 06:17:52'),
(9, 'Update Promotion Successfully.', 'http://127.0.0.1:8000/admin/promotion/3', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1, '2019-04-21 06:18:27', '2019-04-21 06:18:27'),
(10, 'Update Blog By Admin', 'http://127.0.0.1:8000/admin/manageblog/28', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1, '2019-04-25 04:49:25', '2019-04-25 04:49:25'),
(11, 'Update Blog ID:29 By Admin', 'http://127.0.0.1:8000/admin/manageblog/29', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1, '2019-04-25 04:50:35', '2019-04-25 04:50:35'),
(12, 'Create Promotion byAdmin', 'http://127.0.0.1:8000/admin/store_promotion', 'POST', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36', 1, '2019-04-25 06:23:25', '2019-04-25 06:23:25'),
(13, 'Update New Car ID:1 By Manager', 'http://127.0.0.1:8000/admin/newcar/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 2, '2019-05-14 11:25:57', '2019-05-14 11:25:57'),
(14, 'Update New Car ID:1 By Manager', 'http://127.0.0.1:8000/admin/newcar/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 2, '2019-05-14 11:26:04', '2019-05-14 11:26:04'),
(15, 'Update New Car ID:1 By Manager', 'http://127.0.0.1:8000/admin/newcar/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 2, '2019-05-14 11:29:48', '2019-05-14 11:29:48'),
(16, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 15:12:08', '2019-05-26 15:12:08'),
(17, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 15:12:38', '2019-05-26 15:12:38'),
(18, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 15:13:26', '2019-05-26 15:13:26'),
(19, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 15:13:52', '2019-05-26 15:13:52'),
(20, 'Update Blog ID:28 By Admin', 'http://127.0.0.1:8000/admin/manageblog/28', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:06:31', '2019-05-26 16:06:31'),
(21, 'Update Blog ID:28 By Admin', 'http://127.0.0.1:8000/admin/manageblog/28', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:11:36', '2019-05-26 16:11:36'),
(22, 'Create Blog By Admin', 'http://127.0.0.1:8000/admin/manageblog', 'POST', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:17:44', '2019-05-26 16:17:44'),
(23, 'Update Blog ID:32 By Admin', 'http://127.0.0.1:8000/admin/manageblog/32', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:20:03', '2019-05-26 16:20:03'),
(24, 'Update Blog ID:32 By Admin', 'http://127.0.0.1:8000/admin/manageblog/32', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:20:14', '2019-05-26 16:20:14'),
(25, 'Update Blog ID:32 By Admin', 'http://127.0.0.1:8000/admin/manageblog/32', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:20:24', '2019-05-26 16:20:24'),
(26, 'Update Gallery By Admin', 'http://127.0.0.1:8000/admin/managegallery/14', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 16:45:03', '2019-05-26 16:45:03'),
(27, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 19:53:47', '2019-05-26 19:53:47'),
(28, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 19:54:58', '2019-05-26 19:54:58'),
(29, 'Update Service By Admin', 'http://127.0.0.1:8000/admin/service/1', 'PUT', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.131 Safari/537.36', 1, '2019-05-26 19:56:03', '2019-05-26 19:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_12_145959_create_permission_tables', 1),
(4, '2018_09_12_151210_create_log_activity_table', 2),
(5, '2019_03_13_185430_create_sales_result_table', 3),
(6, '2019_04_10_160301_create_home_promotion_table', 4),
(7, '2019_04_10_160336_create_home_new_car_table', 4),
(8, '2019_04_17_102654_create_blog_table', 5),
(9, '2019_04_18_100548_create_gallery_table', 6),
(10, '2019_04_18_110425_create_blog_image_table', 7),
(11, '2019_04_19_215842_create_contact_table', 8),
(12, '2019_04_19_233155_create_gallery_image_table', 8),
(13, '2019_04_20_214707_create_inquiry_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users_manage', 'web', '2018-09-03 21:39:19', '2018-09-03 21:39:19'),
(2, 'website_manage', 'web', '2019-04-25 05:00:48', '2019-04-25 06:12:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', '2018-09-03 21:39:19', '2018-09-03 21:39:19'),
(2, 'Manager', 'web', '2019-04-10 07:57:58', '2019-04-10 07:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$e69qau0JSFe8d8xVN4TSF.uQOaJvM9AHFwfNSpnTQ.Wc5cjNXuSKy', 'MS6bF12jEs6YVJ2B5mjkBzpJHxgkkNf14gxxf7gMooJyPBfoGXg1aCssJjku', '2018-09-03 21:39:19', '2018-09-03 21:39:19'),
(2, 'Manager', 'manager@manager.com', '$2y$10$6sbWAwSVDn9cny0EOB.dSeP881IZOFri7akzcySU9gSEHlHlHltA6', 'PBqyd8rP7LJO8LHrR7hCEkZi0GOrSVMam0EzbaeqgRYVsT7sSZ3augr4vAVL', '2018-09-03 21:42:38', '2019-04-10 07:58:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_image`
--
ALTER TABLE `blog_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_new_car`
--
ALTER TABLE `home_new_car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_promotion`
--
ALTER TABLE `home_promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_service`
--
ALTER TABLE `home_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activities`
--
ALTER TABLE `log_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `blog_image`
--
ALTER TABLE `blog_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `home_new_car`
--
ALTER TABLE `home_new_car`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_promotion`
--
ALTER TABLE `home_promotion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_service`
--
ALTER TABLE `home_service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
