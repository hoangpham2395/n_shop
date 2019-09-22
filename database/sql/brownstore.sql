-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 04:40 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brownstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_type` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'super admin: 1, admin: 2',
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role_type`, `ins_id`, `upd_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', '$2y$10$t1BtqrSIjwrj0OZq0uVJjOLy80JR74ElXPFw8CdfhbsYOtsYlq3WK', '1', NULL, NULL, NULL, NULL, NULL),
(2, 'Hoang Pham', 'hoangpham2395@gmail.com', '$2y$10$eCvHA1Cqu4awMir3fBMPjOY3UQrtpiUE5Hmj/i3zb34LSsnDe/kdW', '2', NULL, NULL, '2019-07-14 09:18:05', '2019-07-17 11:32:26', '2019-07-17 11:32:26'),
(4, 'Tran Minh Quan', 'quantm@gmail.com', '$2y$10$gbnfCNG5tbgp5Sdgqimn1ekiRAFtFIEu9rnJkl45Oiuit0TsC5m1u', '2', NULL, NULL, '2019-07-14 10:08:17', '2019-07-14 10:08:17', NULL),
(5, 'Dinh Van Dung', 'dungdv@gmail.com', '$2y$10$ZgFtHfpBfU.vBOtmVW4P6.vatF2uEp1NXxScZYQUVOHI12mHO8t0G', '2', NULL, NULL, '2019-07-14 10:11:33', '2019-07-14 10:11:33', NULL),
(6, 'Hoang Pham', 'hoangpham2395@gmail.com', '$2y$10$lZ1ZD5S0xNCY2zVTyRBHXuq8vxTwYdcwXCSj8cNiy3xnOnxEd4p4O', '2', 1, NULL, '2019-07-19 09:03:59', '2019-07-19 09:03:59', NULL),
(7, 'Dao Xuan Vu', 'vudx@gmail.com', '$2y$10$XG3ShseI638V1mNKpdl3ZuWuC6gqWvs4c5GcLRwfA9w.7NuU/QdSe', '2', 1, 1, '2019-07-19 10:56:22', '2019-07-20 02:17:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_parent` int(11) DEFAULT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_parent`, `category_name`, `category_slug`, `ins_id`, `upd_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Áo', 'ao', 1, 1, '2019-07-20 00:57:17', '2019-08-10 20:17:13', NULL),
(2, NULL, 'Quần', 'quan', 1, 1, '2019-07-20 01:22:06', '2019-08-10 20:17:19', NULL),
(3, NULL, 'Đầm váy', 'dam-vay', 1, 1, '2019-07-20 01:22:18', '2019-08-10 20:07:04', NULL),
(4, NULL, 'Giày dép', 'giay-dep', 1, 1, '2019-07-20 04:25:15', '2019-08-10 20:07:16', NULL),
(5, NULL, 'Túi', 'tui', 1, 1, '2019-08-09 15:17:27', '2019-08-10 20:07:38', NULL),
(6, NULL, 'Phụ kiện', 'phu-kien', 1, 1, '2019-08-10 19:56:33', '2019-08-10 20:08:24', NULL),
(7, 6, 'Mũ nón', 'mu-non', 1, 1, '2019-08-10 19:59:46', '2019-08-11 10:02:19', NULL),
(8, 6, 'Kính', 'kinh', 1, NULL, '2019-08-10 20:10:24', '2019-08-10 20:10:24', NULL);

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
(3, '2019_07_09_172828_create_admin_table', 1),
(6, '2019_07_17_184240_create_products_table', 2),
(7, '2019_07_18_150655_create_categories_table', 2),
(10, '2019_07_20_145807_create_product_option_table', 3),
(11, '2019_07_20_150039_create_product_image_table', 3),
(14, '2019_07_25_164641_add_product_id_to_product_image_table', 4),
(16, '2019_08_03_065144_add_image_in_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `made_in` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `is_new` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:old,1:new',
  `sale` text COLLATE utf8mb4_unicode_ci,
  `price_sale` int(11) DEFAULT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_code`, `product_name`, `product_slug`, `made_in`, `material`, `price`, `image`, `content`, `is_new`, `sale`, `price_sale`, `ins_id`, `upd_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'V01', 'Váy Zara', 'vay-zara', NULL, NULL, 309000, '/media/products/2019/08/09/1_vay_zara_1.jpg', 'Váy Zara Ngon bổ ré , giảm hết nấc', '0', NULL, NULL, 1, 1, '2019-07-20 04:26:46', '2019-08-09 16:51:52', NULL),
(2, 3, 'V02', 'Váy H&M', 'vay-hm', NULL, NULL, 135000, '/media/products/2019/08/09/2_vay_hm_1.jpg', 'H&M dễ thương chưa #135k 🙀', '0', NULL, NULL, 1, 1, '2019-07-21 10:40:35', '2019-08-09 16:51:42', NULL),
(3, 1, 'BS111', 'Áo cổ bánh bèo lệch vai', 'ao-co-banh-beo-lech-vai', NULL, NULL, 252000, '/media/products/2019/08/09/3_ao_co_banh_beo_lech_vai_2.png', 'Áo cổ bánh bèo lệch vai quyến rũ à nghen', '0', NULL, NULL, 1, 1, '2019-07-21 11:05:53', '2019-08-09 16:51:33', NULL),
(4, 3, 'BS12', 'Đầm vest tay lở', 'dam-vest-tay-lo', NULL, NULL, 630000, '/media/products/2019/08/09/4_dam_vest_tay_lo_1.png', 'Đầm vest tay lở cực sang chảnh nha các ce.', '0', NULL, NULL, 1, 1, '2019-07-21 11:07:39', '2019-08-09 16:51:18', NULL),
(8, 3, 'BS090', 'Đầm baby doll', 'dam-baby-doll', NULL, NULL, 390000, '/media/products/2019/08/09/8_dam_baby_doll_1.png', 'Đầm baby doll, màu cực iu, chất mịn mát.', '0', NULL, NULL, 1, 1, '2019-07-22 09:16:55', '2019-08-09 16:51:08', NULL),
(11, 3, 'BS08', 'Áo váy lấp lánh ánh kim', 'ao-vay-lap-lanh-anh-kim', NULL, NULL, 500000, '/media/products/2019/08/09/11_ao_vay_anh_kim_1.png', 'Siêu phẩm summer 2019, set áo váy lấp lánh ánh kim', '0', NULL, NULL, 1, 1, '2019-07-22 09:55:30', '2019-08-09 16:50:56', NULL),
(12, 3, 'BS07', 'Đầm dài thướt tha', 'dam-dai-thuot-tha', NULL, NULL, 500000, '/media/products/2019/08/09/12_dam_dai_thuot_tha_1.png', 'Đầm dài thướt tha', '0', NULL, NULL, 1, 1, '2019-07-22 10:34:25', '2019-08-09 16:50:41', NULL),
(24, 1, 'BS06', 'Áo thun cổ tròn in họa tiết đơn giản', 'ao-thun-co-tron-in-hoa-tiet-don-gian', NULL, NULL, 240000, '/media/products/2019/08/09/24_ao_thun_co_tron_1.png', 'Bộ sưu tập áo thun cổ tròn in họa tiết đơn giản', '0', NULL, NULL, 1, 1, '2019-07-22 10:42:42', '2019-08-09 16:50:25', NULL),
(25, 1, 'BS05', 'Áo lửng tay bèo với dây thắt trước ngực', 'ao-lung-tay-beo-voi-day-that-truoc-nguc', NULL, NULL, 280000, '/media/products/2019/08/09/25_ao_lung_banh_beo_1.png', 'Áo lửng tay bèo với dây thắt trước ngực', '0', NULL, NULL, 1, 1, '2019-07-22 10:45:05', '2019-08-09 16:50:13', NULL),
(26, 1, 'BS16', 'Áo Thun H&M Sọc viền cổ', 'ao-thun-hm-soc-vien-co', NULL, 'Cotton 100%', 145000, '/media/products/2019/08/09/26_ao_thun_hm_soc_vien_co.png', 'Áo tay ngắn, viền phối cổ tròn, chất liệu 100% cotton thoáng mát.\r\nKết hợp với jean rất năng động đấy các nàng nha.', '0', NULL, NULL, 1, 1, '2019-08-03 03:01:17', '2019-08-09 16:50:00', NULL),
(27, 1, 'BS09', 'Sơ mi nữ cổ chữ V', 'so-mi-nu-co-chu-v', NULL, 'Viscose 100%', 175000, '/media/products/2019/08/09/27_so_mi_nu_co_chu_v.jpg', 'Áo cổ chữ V dáng suông ,kiểu dệt viscose chất mát, thoáng mồ hôi với tay áo ngắn và cài nút phía trước.\r\nDễ kết hợp quần short hay jean, chân váy...', '0', NULL, NULL, 1, 1, '2019-08-03 06:40:31', '2019-08-09 16:49:47', NULL),
(29, 3, 'BS11', 'Chân váy jean', 'chan-vay-jean', NULL, 'Jean', 255000, '/media/products/2019/08/09/29_chan_vay_jean.png', 'Chân váy Jean màu xanh nhạt , có mài  nhẹ , xẻ chữ V ngược phía trước', '0', NULL, NULL, 1, 1, '2019-08-04 07:57:39', '2019-08-09 16:49:35', NULL),
(30, 3, 'BS10', 'Chân váy chữ A', 'chan-vay-chu-a', NULL, 'Polyester 100%', 289000, '/media/products/2019/08/09/30_chan_vay_chu_a.jpg', 'Kiểu Váy ngắn, chữ A có nút trang trí dọc giữa xuống mặt trước.', '0', NULL, NULL, 1, 1, '2019-08-04 08:07:36', '2019-08-09 16:42:19', NULL),
(31, 1, 'BS19', 'Áo H&M caro chữ U', 'ao-hm-caro-chu-u', NULL, 'Viscose', 235000, '/media/products/2019/08/09/31_ao_h_r_caro_chu_u.jpg', 'Áo ngắn tay, cổ vuông đang trend mùa hè này nha. \r\nChất liệu viscose thoáng mát.\r\nCó nút cài nẹp áo trước.', '0', NULL, NULL, 1, 1, '2019-08-04 08:10:50', '2019-08-09 16:42:07', NULL),
(32, 1, 'BS18', 'Áo Vịt Donald -Cropptop dài tay', 'ao-vit-donald-cropptop-dai-tay', 'Pháp', 'Cotton 69%, Polyester 31%', 315000, '/media/products/2019/08/09/32_ao_vit_donald.jpg', 'Áo Crop top dài tay, ống tay có bo.\r\nIn hình Vịt Donald ngộ nghĩnh.', '0', NULL, NULL, 1, 1, '2019-08-04 08:14:41', '2019-08-09 16:41:55', NULL),
(33, 8, 'K01', 'Kính mắt mèo H&M', 'kinh-mat-meo-hm', NULL, 'Nhựa', 149000, '/media/products/2019/08/11/33_kinh_mat_meo_hm.jpg', 'Kính râm mắt mèo bằng nhựa với tròng kính chống tia UV.', '0', NULL, NULL, 1, NULL, '2019-08-11 08:21:49', '2019-08-11 08:21:49', NULL),
(34, 1, 'BS15', 'Cropptop trễ vai', 'cropptop-tre-vai', NULL, 'Polyester 92%, Elastane 8%', 145000, '/media/products/2019/08/11/34_croptop_tre_vai.jpg', 'Áo co giãn ôm khít cơ thể . nữ tính', '0', NULL, NULL, 1, NULL, '2019-08-11 08:41:48', '2019-08-11 08:41:48', NULL),
(35, 8, 'K02', 'Kính nữ H&M dáng tròn', 'kinh-nu-hm-dang-tron', NULL, 'Polycarbonate 100%', 120000, '/media/products/2019/08/11/35_kinh_nu_hm_dang_tron.jpg', 'Kính râm tròn với gọng nhựa và tròng kính chống tia UV.', '0', NULL, NULL, 1, NULL, '2019-08-11 08:43:23', '2019-08-11 08:43:23', NULL),
(36, 2, 'Q01', 'Quần short jeans', 'quan-short-jeans', NULL, 'Jean', 230000, '/media/products/2019/08/11/36_quan_sort_1.png', 'Quần short jeans dễ kết hợp.', '1', NULL, NULL, 1, 1, '2019-08-11 08:48:44', '2019-09-19 14:33:27', NULL),
(37, 2, 'Q02', 'Jeans suông gấp lai', 'jeans-suong-gap-lai', NULL, 'Jean', 240000, '/media/products/2019/08/11/37_quan_jean_suong.png', 'eans suông gấp lai cho các nàng năng động nhé.\r\nCó 2 màu xanh nhạt và xanh đậm.', '0', NULL, NULL, 1, NULL, '2019-08-11 09:10:58', '2019-08-11 09:10:58', NULL),
(38, 5, 'T01', 'Túi da lộn ZARA', 'tui-da-lon-zara', NULL, 'Da', 469000, '/media/products/2019/08/11/38_tui_da_lon_zara_1.jpg', 'Túi da lộn ZARA màu vàng nâu ưng quá cưng', '0', NULL, NULL, 1, NULL, '2019-08-11 09:14:10', '2019-08-11 09:14:10', NULL),
(39, 6, 'PK01', 'Vòng cổ bershka', 'vong-co-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/39_vong_co_bershka.png', NULL, '0', NULL, NULL, 1, 1, '2019-08-11 09:18:14', '2019-08-11 09:19:20', NULL),
(40, 6, 'PK02', 'Khuyên tai bershka', 'khuyen-tai-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/40_khuyen_tai_bershka.png', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 09:18:59', '2019-08-11 09:18:59', NULL),
(41, 6, 'PK03', 'Tất bershka', 'tat-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/41_tat_bershka.png', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 09:19:52', '2019-08-11 09:19:52', NULL),
(42, 6, 'PK04', 'Khăn cổ bershka', 'khan-co-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/42_khan_co_bershka_1.png', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 09:20:23', '2019-08-11 09:20:23', NULL),
(43, 7, 'M01', 'Mũ bershka', 'mu-bershka', 'Bồ Đào Nha', NULL, 85000, '/media/products/2019/08/11/43_mu_bershka.png', 'Mũ bershka được nhập khẩu từ Bồ Đào Nha', '0', 'Khuyến mại 6%', 80000, 1, 1, '2019-08-11 09:21:05', '2019-09-19 15:09:26', NULL),
(44, 4, 'GD01', 'Giầy trainers bershka', 'giay-trainers-bershka', 'Bồ đào nha', NULL, 580000, '/media/products/2019/08/11/44_giay_trainers_1.jpg', 'Giầy trainers 1xxx giảm 50% chất như nước cất', '0', NULL, NULL, 1, NULL, '2019-08-11 09:27:06', '2019-08-11 09:27:06', NULL),
(45, 4, 'GD02', 'Giầy bershka', 'giay-bershka', 'Bồ đào nha', NULL, 309000, '/media/products/2019/08/11/45_giay_bershka_1.jpg', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 09:30:11', '2019-08-11 09:30:11', NULL),
(46, 4, 'GD04', 'Dép bershka', 'dep-bershka', 'Bồ đào nha', NULL, 195000, '/media/products/2019/08/11/46_dep_bershka_1.jpg', 'DÉP Bershka ĐI BAO NỔI TRỘI', '1', NULL, NULL, 1, 1, '2019-08-11 09:31:19', '2019-08-26 15:30:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image`, `ins_id`, `upd_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 25, '/media/product_image/2019/08/09/9_ao_lung_banh_beo_2.png', 1, NULL, '2019-08-09 13:57:06', '2019-08-09 13:57:06', NULL),
(10, 25, '/media/product_image/2019/08/09/10_ao_lung_banh_beo_3.png', 1, NULL, '2019-08-09 13:57:06', '2019-08-09 13:57:06', NULL),
(15, 24, '/media/product_image/2019/08/09/15_ao_thun_co_tron_2.png', 1, NULL, '2019-08-09 14:00:58', '2019-08-09 14:00:58', NULL),
(16, 24, '/media/product_image/2019/08/09/16_ao_thun_co_tron_3.png', 1, NULL, '2019-08-09 14:00:58', '2019-08-09 14:00:58', NULL),
(17, 24, '/media/product_image/2019/08/09/17_ao_thun_co_tron_4.png', 1, NULL, '2019-08-09 14:00:58', '2019-08-09 14:00:58', NULL),
(18, 12, '/media/product_image/2019/08/09/18_dam_dai_thuot_tha_2.png', 1, NULL, '2019-08-09 14:03:31', '2019-08-09 14:03:31', NULL),
(19, 11, '/media/product_image/2019/08/09/19_ao_vay_anh_kim_2.png', 1, NULL, '2019-08-09 14:07:44', '2019-08-09 14:07:44', NULL),
(20, 8, '/media/product_image/2019/08/09/20_dam_baby_doll_2.png', 1, NULL, '2019-08-09 14:09:40', '2019-08-09 14:09:40', NULL),
(21, 8, '/media/product_image/2019/08/09/21_dam_baby_doll_3.png', 1, NULL, '2019-08-09 14:09:40', '2019-08-09 14:09:40', NULL),
(22, 4, '/media/product_image/2019/08/09/22_dam_vest_tay_lo_2.png', 1, NULL, '2019-08-09 14:11:32', '2019-08-09 14:11:32', NULL),
(23, 3, '/media/product_image/2019/08/09/23_ao_co_banh_beo_lech_vai_1.png', 1, NULL, '2019-08-09 14:13:20', '2019-08-09 14:13:20', NULL),
(24, 2, '/media/product_image/2019/08/09/24_vay_hm_2.jpg', 1, NULL, '2019-08-09 14:14:56', '2019-08-09 14:14:56', NULL),
(25, 1, '/media/product_image/2019/08/09/25_vay_zara_2.jpg', 1, NULL, '2019-08-09 14:16:04', '2019-08-09 14:16:04', NULL),
(26, 38, '/media/product_image/2019/08/11/26_tui_da_lon_zara_2.jpg', 1, NULL, '2019-08-11 09:14:45', '2019-08-11 09:14:45', NULL),
(27, 38, '/media/product_image/2019/08/11/27_tui_da_lon_zara_3.jpg', 1, NULL, '2019-08-11 09:14:45', '2019-08-11 09:14:45', NULL),
(28, 38, '/media/product_image/2019/08/11/28_tui_da_lon_zara_4.jpg', 1, NULL, '2019-08-11 09:14:45', '2019-08-11 09:14:45', NULL),
(29, 42, '/media/product_image/2019/08/11/29_khan_co_bershka_2.png', 1, NULL, '2019-08-11 09:20:32', '2019-08-11 09:20:32', NULL),
(30, 44, '/media/product_image/2019/08/11/30_giay_trainers_2.jpg', 1, NULL, '2019-08-11 09:27:29', '2019-08-11 09:27:29', NULL),
(31, 44, '/media/product_image/2019/08/11/31_giay_trainers_3.jpg', 1, NULL, '2019-08-11 09:27:29', '2019-08-11 09:27:29', NULL),
(32, 44, '/media/product_image/2019/08/11/32_giay_trainers_4.jpg', 1, NULL, '2019-08-11 09:27:30', '2019-08-11 09:27:30', NULL),
(33, 45, '/media/product_image/2019/08/11/33_giay_bershka_2.jpg', 1, NULL, '2019-08-11 09:30:35', '2019-08-11 09:30:35', NULL),
(34, 45, '/media/product_image/2019/08/11/34_giay_bershka_3.jpg', 1, NULL, '2019-08-11 09:30:35', '2019-08-11 09:30:35', NULL),
(35, 45, '/media/product_image/2019/08/11/35_giay_bershka_4.jpg', 1, NULL, '2019-08-11 09:30:35', '2019-08-11 09:30:35', NULL),
(36, 46, '/media/product_image/2019/08/11/36_dep_bershka_2.jpg', 1, NULL, '2019-08-11 09:31:29', '2019-08-11 09:31:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_option`
--

CREATE TABLE `product_option` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_option`
--

INSERT INTO `product_option` (`id`, `product_id`, `size`, `color`, `count`, `ins_id`, `upd_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(58, 32, 'S', 'Vàng nâu', 6, 1, NULL, '2019-08-09 16:41:55', '2019-08-09 16:41:55', NULL),
(59, 31, 's', 'Sọc trắng đen', NULL, 1, NULL, '2019-08-09 16:42:07', '2019-08-09 16:42:07', NULL),
(60, 30, 'S', 'Xanh beige da lộn', 5, 1, NULL, '2019-08-09 16:42:19', '2019-08-09 16:42:19', NULL),
(61, 29, 'S', 'Xanh dương', 5, 1, NULL, '2019-08-09 16:49:35', '2019-08-09 16:49:35', NULL),
(62, 27, 'S', 'Đỏ', NULL, 1, NULL, '2019-08-09 16:49:47', '2019-08-09 16:49:47', NULL),
(63, 26, 'S', 'Sọc đỏ trắng xanh', 7, 1, NULL, '2019-08-09 16:50:00', '2019-08-09 16:50:00', NULL),
(64, 25, 'M', 'Xám', 5, 1, NULL, '2019-08-09 16:50:13', '2019-08-09 16:50:13', NULL),
(65, 25, 'L', 'Đỏ sẫm', 6, 1, NULL, '2019-08-09 16:50:13', '2019-08-09 16:50:13', NULL),
(66, 25, 'XL', 'Vàng', 5, 1, NULL, '2019-08-09 16:50:13', '2019-08-09 16:50:13', NULL),
(67, 24, 'S', 'Trắng', 10, 1, NULL, '2019-08-09 16:50:25', '2019-08-09 16:50:25', NULL),
(68, 24, 'M', 'Trắng', 8, 1, NULL, '2019-08-09 16:50:25', '2019-08-09 16:50:25', NULL),
(69, 12, 'S', 'Xanh dương', 5, 1, NULL, '2019-08-09 16:50:41', '2019-08-09 16:50:41', NULL),
(70, 12, 'S', 'Hồng', 5, 1, NULL, '2019-08-09 16:50:41', '2019-08-09 16:50:41', NULL),
(71, 11, 'XL', 'Trắng đen', 5, 1, NULL, '2019-08-09 16:50:56', '2019-08-09 16:50:56', NULL),
(72, 11, 'XXL', 'Đỏ đen', 6, 1, NULL, '2019-08-09 16:50:56', '2019-08-09 16:50:56', NULL),
(73, 8, 'S', NULL, NULL, 1, NULL, '2019-08-09 16:51:08', '2019-08-09 16:51:08', NULL),
(74, 4, 'S', NULL, NULL, 1, NULL, '2019-08-09 16:51:18', '2019-08-09 16:51:18', NULL),
(75, 3, 'S', NULL, NULL, 1, NULL, '2019-08-09 16:51:33', '2019-08-09 16:51:33', NULL),
(76, 2, 'S', 'Xanh dương', NULL, 1, NULL, '2019-08-09 16:51:42', '2019-08-09 16:51:42', NULL),
(77, 1, 'S', 'Xanh', 5, 1, NULL, '2019-08-09 16:51:52', '2019-08-09 16:51:52', NULL),
(78, 1, 'S', 'Vàng', 6, 1, NULL, '2019-08-09 16:51:52', '2019-08-09 16:51:52', NULL),
(79, 33, 'S', 'Đen', 2, NULL, NULL, '2019-08-11 08:21:49', '2019-08-11 08:21:49', NULL),
(80, 34, 's', 'Hồng đất', 5, NULL, NULL, '2019-08-11 08:41:48', '2019-08-11 08:41:48', NULL),
(81, 35, 'S', 'Đen', 3, NULL, NULL, '2019-08-11 08:43:23', '2019-08-11 08:43:23', NULL),
(83, 37, 's', 'Xanh dương', 4, NULL, NULL, '2019-08-11 09:10:58', '2019-08-11 09:10:58', NULL),
(84, 38, 'One size', 'Vàng nâu', 2, NULL, NULL, '2019-08-11 09:14:10', '2019-08-11 09:14:10', NULL),
(86, 40, 'One size', NULL, NULL, NULL, NULL, '2019-08-11 09:18:59', '2019-08-11 09:18:59', NULL),
(87, 39, 'One size', NULL, NULL, 1, NULL, '2019-08-11 09:19:20', '2019-08-11 09:19:20', NULL),
(88, 41, 'One size', NULL, NULL, NULL, NULL, '2019-08-11 09:19:52', '2019-08-11 09:19:52', NULL),
(89, 42, 'One size', NULL, NULL, NULL, NULL, '2019-08-11 09:20:23', '2019-08-11 09:20:23', NULL),
(91, 44, 'S', NULL, NULL, NULL, NULL, '2019-08-11 09:27:06', '2019-08-11 09:27:06', NULL),
(92, 45, 'Inbox', NULL, NULL, NULL, NULL, '2019-08-11 09:30:11', '2019-08-11 09:30:11', NULL),
(94, 46, 'Full size', 'Cam', 5, 1, NULL, '2019-08-26 15:30:01', '2019-08-26 15:30:01', NULL),
(95, 46, 'Full size', 'Vàng', 2, 1, NULL, '2019-08-26 15:30:01', '2019-08-26 15:30:01', NULL),
(97, 36, 's', 'Xanh dương', 4, 1, NULL, '2019-09-19 14:33:27', '2019-09-19 14:33:27', NULL),
(99, 43, 'One size', 'Đen', 5, 1, NULL, '2019-09-19 15:09:26', '2019-09-19 15:09:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_option`
--
ALTER TABLE `product_option`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_option`
--
ALTER TABLE `product_option`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Table orders
--
CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` char(1) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_tel` varchar(12) NOT NULL,
  `user_email` varchar(256),
  `user_address` varchar(256) NOT NULL,
  `user_note` text COLLATE utf8mb4_unicode_ci,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `order_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_unit_price` int(11) NOT NULL,
  `size` varchar(64),
  `color` varchar(64),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
