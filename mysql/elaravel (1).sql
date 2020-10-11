-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 07:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elaravel`
--

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
(1, '2020_08_18_152638_create_users_table', 1),
(2, '2020_08_19_141118_create_tbl_brand_table', 2),
(3, '2020_08_19_183739_create_brands_table', 3),
(4, '2020_08_19_184656_create_tbl_brands_table', 4),
(5, '2020_08_20_045922_create_tbl_categories_table', 5),
(6, '2020_08_20_151152_create_tbl_sub_categories_table', 6),
(7, '2020_08_21_045008_create_tbl_products_table', 7),
(8, '2020_08_21_115103_create_tbl_products_table', 8),
(9, '2020_08_22_104005_create_tbl_sliders_table', 9),
(10, '2020_09_06_034430_create_tbl_customers_table', 10),
(11, '2020_09_06_114146_create_tbl_shippings_table', 11),
(12, '2020_09_06_184437_create_tbl_payments_table', 12),
(13, '2020_09_06_184728_create_tbl_orders_table', 12),
(14, '2020_09_06_185041_create_tbl_order_details_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'ahosien57@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Anowar Hossain', '01947552010', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brands`
--

CREATE TABLE `tbl_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brands`
--

INSERT INTO `tbl_brands` (`id`, `brand_name`, `brand_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'it is new product in&nbsp;', 1, '2020-08-19 13:12:36', '2020-08-19 21:32:34'),
(2, 'i phone', '1st class brand in bangladesh', 1, '2020-08-19 13:13:14', '2020-08-19 14:30:00'),
(4, 'vivo', 'new brand', 1, '2020-08-19 22:50:20', '2020-08-19 22:50:20'),
(5, 'western', 'new arrival brand', 1, '2020-08-22 09:04:09', '2020-08-22 09:04:09'),
(6, 'Konka', 'best', 1, '2020-08-22 09:22:35', '2020-08-22 09:22:35'),
(7, 'Fashion', 'for cloth', 1, '2020-08-22 09:23:25', '2020-08-22 09:23:25'),
(8, 'Men', 'for jandale', 1, '2020-08-22 09:24:01', '2020-08-22 09:24:01'),
(9, 'Women', 'for girl', 1, '2020-08-22 09:24:11', '2020-08-22 09:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category_name`, `category_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', 'all product', 1, '2020-08-19 23:30:19', '2020-08-21 12:49:26'),
(2, 'Electronics', 'all products', 1, '2020-08-19 23:31:37', '2020-08-19 23:31:37'),
(3, 'Shoes', 'new', 1, '2020-08-19 23:32:11', '2020-08-19 23:32:11'),
(4, 'Whatches', 's', 1, '2020-08-19 23:32:51', '2020-08-19 23:32:51'),
(5, 'Jewellery', 'gold diamond', 1, '2020-08-19 23:33:17', '2020-08-20 00:35:25'),
(7, 'Health & Beauty', 'cosmetics', 1, '2020-08-20 11:03:26', '2020-08-20 11:03:26'),
(8, 'Kids And Babies', 'all', 1, '2020-08-20 11:04:54', '2020-08-20 11:04:54'),
(9, 'Sports', 'ssssss', 1, '2020-08-20 11:05:10', '2020-08-20 11:05:10'),
(10, 'Home And Garden', 'hm', 1, '2020-08-20 11:05:30', '2020-08-20 11:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `name`, `email`, `number`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anowar Hossain', 'ahosien57@gmail.com', '01947552010', '566c533ddcdea0ef0122643bddb8b57c', '2020-09-06 14:43:17', '2020-09-06 14:43:17'),
(2, 'Apurbo', 'datingbaby03@gmail.com', '01755323215', '566c533ddcdea0ef0122643bddb8b57c', '2020-09-06 16:06:24', '2020-09-06 16:06:24'),
(3, 'Apurbo', 'apurbo@gmail.com', '01856570209', 'e10adc3949ba59abbe56e057f20f883e', '2020-09-06 17:02:22', '2020-09-06 17:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(55) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 2, '5920', 0, '2020-09-07 01:37:42', '2020-09-07 01:37:42'),
(2, 1, 6, 3, '8490', 0, '2020-09-07 01:40:47', '2020-09-07 01:40:47'),
(3, 1, 7, 4, '68000', 0, '2020-09-07 01:55:55', '2020-09-07 01:55:55'),
(4, 1, 8, 5, '299', 0, '2020-09-07 02:03:27', '2020-09-07 02:03:27'),
(5, 1, 8, 6, '0', 0, '2020-09-07 02:04:35', '2020-09-07 02:04:35'),
(6, 1, 8, 7, '0', 0, '2020-09-07 02:04:55', '2020-09-07 02:04:55'),
(7, 1, 8, 8, '0', 0, '2020-09-07 02:05:10', '2020-09-07 02:05:10'),
(8, 1, 8, 9, '0', 0, '2020-09-07 02:05:35', '2020-09-07 02:05:35'),
(9, 2, 9, 10, '1495', 0, '2020-09-07 04:56:43', '2020-09-07 04:56:43'),
(10, 1, 10, 11, '68598', 0, '2020-09-10 09:17:17', '2020-09-10 09:17:17'),
(11, 3, 11, 12, '7488', 0, '2020-09-22 09:29:33', '2020-09-22 09:29:33'),
(12, 3, 12, 13, '70960', 0, '2020-10-10 22:03:51', '2020-10-10 22:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Color full shirt', '1480', '4', '2020-09-07 01:37:42', '2020-09-07 01:37:42'),
(2, 2, 8, 'Color full Sharee', '8000', '1', '2020-09-07 01:40:47', '2020-09-07 01:40:47'),
(3, 2, 11, 'Bindu', '490', '1', '2020-09-07 01:40:48', '2020-09-07 01:40:48'),
(4, 3, 1, 'i phone 8 plus', '68000', '1', '2020-09-07 01:55:55', '2020-09-07 01:55:55'),
(5, 4, 3, 'Marvel', '299', '1', '2020-09-07 02:03:27', '2020-09-07 02:03:27'),
(6, 9, 3, 'Marvel', '299', '5', '2020-09-07 04:56:43', '2020-09-07 04:56:43'),
(7, 10, 1, 'i phone 8 plus', '68000', '1', '2020-09-10 09:17:17', '2020-09-10 09:17:17'),
(8, 10, 3, 'Marvel', '299', '2', '2020-09-10 09:17:17', '2020-09-10 09:17:17'),
(9, 11, 3, 'Marvel', '299', '2', '2020-09-22 09:29:33', '2020-09-22 09:29:33'),
(10, 11, 4, 'Color full shirt', '1480', '3', '2020-09-22 09:29:33', '2020-09-22 09:29:33'),
(11, 11, 5, 'Full Shirt', '2450', '1', '2020-09-22 09:29:33', '2020-09-22 09:29:33'),
(12, 12, 4, 'Color full shirt', '1480', '2', '2020-10-10 22:03:51', '2020-10-10 22:03:51'),
(13, 12, 1, 'i phone 8 plus', '68000', '1', '2020-10-10 22:03:51', '2020-10-10 22:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'bkash', 0, '2020-09-07 00:47:36', '2020-09-07 00:47:36'),
(2, 'bank', 0, '2020-09-07 01:37:42', '2020-09-07 01:37:42'),
(3, 'd_card', 0, '2020-09-07 01:40:47', '2020-09-07 01:40:47'),
(4, 'hand_cash', 0, '2020-09-07 01:55:55', '2020-09-07 01:55:55'),
(5, 'hand_cash', 0, '2020-09-07 02:03:27', '2020-09-07 02:03:27'),
(6, 'hand_cash', 0, '2020-09-07 02:04:35', '2020-09-07 02:04:35'),
(7, 'hand_cash', 0, '2020-09-07 02:04:55', '2020-09-07 02:04:55'),
(8, 'hand_cash', 0, '2020-09-07 02:05:10', '2020-09-07 02:05:10'),
(9, 'hand_cash', 0, '2020-09-07 02:05:35', '2020-09-07 02:05:35'),
(10, 'hand_cash', 0, '2020-09-07 04:56:43', '2020-09-07 04:56:43'),
(11, 'hand_cash', 0, '2020-09-10 09:17:17', '2020-09-10 09:17:17'),
(12, 'hand_cash', 0, '2020-09-22 09:29:33', '2020-09-22 09:29:33'),
(13, 'hand_cash', 0, '2020-10-10 22:03:51', '2020-10-10 22:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `special_price` int(10) DEFAULT NULL,
  `sp_start` date DEFAULT NULL,
  `sp_end` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `brand_id`, `cat_id`, `subcat_id`, `product_name`, `product_model`, `product_color`, `product_size`, `quantity`, `price`, `special_price`, `sp_start`, `sp_end`, `image`, `description`, `long_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 10, 'i phone 8 plus', '8 plus', 'gold', '6\"', 1, 68000, NULL, NULL, NULL, '20202108025031.png', 'new phone', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularisedSans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">Lorem I', 1, '2020-08-21 08:50:31', '2020-08-22 04:33:40'),
(3, 8, 1, 5, 'Marvel', '12', 'red, blue, white', 'M,L.XL', 12, 299, NULL, NULL, NULL, '20202208033057.jpg', 'best seller', NULL, 1, '2020-08-22 09:30:57', '2020-08-22 09:30:57'),
(4, 5, 1, 5, 'Color full shirt', 'm87', 'red, blue, white', 'M,L.XL', 12, 1480, NULL, NULL, NULL, '20202208045900.jpg', 'sdafae ef&nbsp;', NULL, 1, '2020-08-22 10:59:00', '2020-08-22 10:59:00'),
(5, 8, 1, 5, 'Full Shirt', '12', 'red, blue, white', 'M,L.XL', 24, 2450, NULL, NULL, NULL, '20202208045955.jpg', 'qwer4ec 4rfgr er&nbsp;<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 10:59:55', '2020-08-22 10:59:55'),
(6, 6, 2, 9, '56\" Konka Led', 'v96', 'black', '56\"', 3, 72000, NULL, NULL, NULL, '20202208050110.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:01:10', '2020-08-22 11:01:10'),
(7, 9, 1, 6, 'Jorjet Sharee', 'j32', 'red, blue, white', 'M,L.XL', 8, 14000, NULL, NULL, NULL, '20202208050241.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised', 1, '2020-08-22 11:02:41', '2020-08-22 11:02:41'),
(8, 9, 1, 6, 'Color full Sharee', 'dsaf', 'red, blue, white', '56\"', 6, 8000, 7500, '2020-08-22', '2020-10-31', '20202208050359.jpeg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', 1, '2020-08-22 11:03:59', '2020-08-22 11:03:59'),
(9, 7, 1, 6, 'standard sharee', 's22', 'red, blue, white', '6\"', 3, 9300, NULL, NULL, NULL, '20202208050513.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:05:13', '2020-08-22 11:05:13'),
(10, 7, 1, 7, 'Marvel', 'j32', 'black', 'M,L.XL', 5, 490, NULL, NULL, NULL, '20202208050602.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, NULL, '2020-08-22 11:06:02', '2020-08-24 08:47:21'),
(11, 7, 1, 7, 'Bindu', 'v96', 'red', 'M,L.XL', 8, 490, NULL, NULL, NULL, '20202208050645.jpeg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:06:45', '2020-08-22 11:06:45'),
(12, 7, 1, 4, 'Dj pant', 'alcout 12', 'black', '33', 6, 1900, NULL, NULL, NULL, '20202208050757.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:07:57', '2020-08-22 11:07:57'),
(13, 7, 1, 4, 'Denim', 'd56', 'gold', '32', 12, 2380, NULL, NULL, NULL, '20202208050917.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:09:17', '2020-08-22 11:09:17'),
(14, 7, 1, 8, 'Beautyfull dress', 'l8980M', 'Pink', '18', 6, 4800, 3500, '2020-08-22', '2020-09-26', '20202208051138.png', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:11:38', '2020-08-22 11:11:38'),
(15, 7, 1, 8, 'Cute Dress', 'pl99', 'red, blue, white', '16,18,20,22', 24, 1390, NULL, NULL, NULL, '20202208051408.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, NULL, '2020-08-22 11:14:08', '2020-08-22 11:14:08'),
(16, 9, 1, 2, 'Kironmala', 'k95', 'red, blue, white,black', 'M,L.XL', 12, 1780, 1250, '2020-08-22', '2020-09-30', '20202208051552.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify; background-color: rgb(255, 255, 255);\">It is a long established fact that a reader will be</span>', NULL, 1, '2020-08-22 11:15:52', '2020-08-22 11:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shippings`
--

CREATE TABLE `tbl_shippings` (
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shippings`
--

INSERT INTO `tbl_shippings` (`shipping_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-06 22:01:03', '2020-09-06 22:01:03'),
(2, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 00:47:30', '2020-09-07 00:47:30'),
(3, 'Anowar', 'Hossain Apurbo', 'datingbaby03@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 00:51:55', '2020-09-07 00:51:55'),
(4, 'Anowar', 'Hossain Apurbo', 'sojib@gmail.com', '01755323215', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 01:35:53', '2020-09-07 01:35:53'),
(5, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 01:37:38', '2020-09-07 01:37:38'),
(6, 'Mahbuba', 'Tabassum Dolon', 'datingbaby03@gmail.com', '01947552010999', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 01:40:41', '2020-09-07 01:40:41'),
(7, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 01:55:52', '2020-09-07 01:55:52'),
(8, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 02:03:24', '2020-09-07 02:03:24'),
(9, 'Mahbuba', 'Tabassum Dolon', 'datingbaby03@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-07 04:56:39', '2020-09-07 04:56:39'),
(10, 'Mahbuba', 'Tabassum Dolon', 'datingbaby03@gmail.com', '01755323215', 'kamrangir char 48', 'Dhaka', '2020-09-10 09:17:12', '2020-09-10 09:17:12'),
(11, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-09-22 09:29:28', '2020-09-22 09:29:28'),
(12, 'Hamza', 'zahiudul', 'hamza@gmail.com', '98656465456', 'soudi', 'madina', '2020-10-10 22:03:39', '2020-10-10 22:03:39'),
(13, 'Anowar', 'Hossain Apurbo', 'ahosien57@gmail.com', '01947552010', 'Jamirdiya, Bhaluka , Mymensingh', 'Dhaka', '2020-10-10 22:06:38', '2020-10-10 22:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

CREATE TABLE `tbl_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`id`, `title`, `sub_title`, `image`, `url`, `start`, `end`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New Collection', 'Lorem Ipsum dolor sit amet etc..', '20202208030154.jpg', 'https://www.lipsum.com/http', '2020-08-22', '2023-04-22', 1, '2020-08-22 05:00:21', '2020-08-22 09:03:10'),
(2, 'New Collection', 'Lorem Ipsum dolor sit amet etc..', '20202208110049.jpg', 'https://www.lipsum.com/', '2020-08-22', '2023-04-22', 1, '2020-08-22 05:00:49', '2020-08-22 05:00:49'),
(3, 'Women Fashion', 'Lorem Ipsum dolor sit amet etc..', '20202208110144.jpg', 'https://www.youtube.com/watch?v=BTp6b_TQ77Y', '2020-08-22', '2021-11-22', 1, '2020-08-22 05:01:44', '2020-08-22 05:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_categories`
--

CREATE TABLE `tbl_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tbl_category_id` int(11) NOT NULL,
  `subCategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subCategory_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sub_categories`
--

INSERT INTO `tbl_sub_categories` (`id`, `tbl_category_id`, `subCategory_name`, `subCategory_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Men', 'mens fashion', 1, '2020-08-20 09:28:46', '2020-08-20 11:00:10'),
(2, 1, 'Women', 'Women Fashion', 1, '2020-08-20 09:30:00', '2020-08-20 09:30:00'),
(3, 2, 'Fan', 'electronics accessories fan category', 1, '2020-08-20 09:30:40', '2020-08-20 09:30:40'),
(4, 1, 'Pants For Men', 'men pants', 1, '2020-08-22 09:25:38', '2020-08-22 09:25:38'),
(5, 1, 'T-Shirt', 'for men', 1, '2020-08-22 09:26:12', '2020-08-22 09:26:12'),
(6, 1, 'Sharee', 'tyuru', 1, '2020-08-22 09:27:03', '2020-08-22 09:27:03'),
(7, 1, 'T-Shirt For Women', 'dsafgs', 1, '2020-08-22 09:27:33', '2020-08-22 09:27:33'),
(8, 1, 'Babies', 'asdfasdf', 1, '2020-08-22 09:27:58', '2020-08-22 09:27:58'),
(9, 2, 'Led TV', 'ytutur', 1, '2020-08-22 09:28:31', '2020-08-22 09:28:31'),
(10, 2, 'Mobile', 'dsafa', 1, '2020-08-22 09:28:56', '2020-08-22 09:28:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_shippings`
--
ALTER TABLE `tbl_shippings`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_categories`
--
ALTER TABLE `tbl_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brands`
--
ALTER TABLE `tbl_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_shippings`
--
ALTER TABLE `tbl_shippings`
  MODIFY `shipping_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sub_categories`
--
ALTER TABLE `tbl_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
