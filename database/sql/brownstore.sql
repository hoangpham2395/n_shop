SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_type` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT 'super admin: 1, admin: 2',
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'Administrator', 'admin@gmail.com', '$2y$10$t1BtqrSIjwrj0OZq0uVJjOLy80JR74ElXPFw8CdfhbsYOtsYlq3WK', '1', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `admin` VALUES (2, 'Hoang Pham', 'hoangpham2395@gmail.com', '$2y$10$eCvHA1Cqu4awMir3fBMPjOY3UQrtpiUE5Hmj/i3zb34LSsnDe/kdW', '2', NULL, NULL, '2019-07-14 16:18:05', '2019-07-17 18:32:26', '2019-07-17 18:32:26');
INSERT INTO `admin` VALUES (4, 'Tran Minh Quan', 'quantm@gmail.com', '$2y$10$gbnfCNG5tbgp5Sdgqimn1ekiRAFtFIEu9rnJkl45Oiuit0TsC5m1u', '2', NULL, NULL, '2019-07-14 17:08:17', '2019-07-14 17:08:17', NULL);
INSERT INTO `admin` VALUES (5, 'Dinh Van Dung', 'dungdv@gmail.com', '$2y$10$ZgFtHfpBfU.vBOtmVW4P6.vatF2uEp1NXxScZYQUVOHI12mHO8t0G', '2', NULL, NULL, '2019-07-14 17:11:33', '2019-07-14 17:11:33', NULL);
INSERT INTO `admin` VALUES (6, 'Hoang Pham', 'hoangpham2395@gmail.com', '$2y$10$lZ1ZD5S0xNCY2zVTyRBHXuq8vxTwYdcwXCSj8cNiy3xnOnxEd4p4O', '2', 1, NULL, '2019-07-19 16:03:59', '2019-07-19 16:03:59', NULL);
INSERT INTO `admin` VALUES (7, 'Dao Xuan Vu', 'vudx@gmail.com', '$2y$10$XG3ShseI638V1mNKpdl3ZuWuC6gqWvs4c5GcLRwfA9w.7NuU/QdSe', '2', 1, 1, '2019-07-19 17:56:22', '2019-07-20 09:17:46', NULL);

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_parent` int(11) DEFAULT NULL,
  `category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, NULL, 'Áo', 'ao', 1, 1, '2019-07-20 07:57:17', '2019-08-11 03:17:13', NULL);
INSERT INTO `categories` VALUES (2, NULL, 'Quần', 'quan', 1, 1, '2019-07-20 08:22:06', '2019-08-11 03:17:19', NULL);
INSERT INTO `categories` VALUES (3, NULL, 'Đầm váy', 'dam-vay', 1, 1, '2019-07-20 08:22:18', '2019-08-11 03:07:04', NULL);
INSERT INTO `categories` VALUES (4, NULL, 'Giày dép', 'giay-dep', 1, 1, '2019-07-20 11:25:15', '2019-08-11 03:07:16', NULL);
INSERT INTO `categories` VALUES (5, NULL, 'Túi', 'tui', 1, 1, '2019-08-09 22:17:27', '2019-08-11 03:07:38', NULL);
INSERT INTO `categories` VALUES (6, NULL, 'Phụ kiện', 'phu-kien', 1, 1, '2019-08-11 02:56:33', '2019-08-11 03:08:24', NULL);
INSERT INTO `categories` VALUES (7, 6, 'Mũ nón', 'mu-non', 1, 1, '2019-08-11 02:59:46', '2019-08-11 17:02:19', NULL);
INSERT INTO `categories` VALUES (8, 6, 'Kính', 'kinh', 1, NULL, '2019-08-11 03:10:24', '2019-08-11 03:10:24', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (3, '2019_07_09_172828_create_admin_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_07_17_184240_create_products_table', 2);
INSERT INTO `migrations` VALUES (7, '2019_07_18_150655_create_categories_table', 2);
INSERT INTO `migrations` VALUES (10, '2019_07_20_145807_create_product_option_table', 3);
INSERT INTO `migrations` VALUES (11, '2019_07_20_150039_create_product_image_table', 3);
INSERT INTO `migrations` VALUES (14, '2019_07_25_164641_add_product_id_to_product_image_table', 4);
INSERT INTO `migrations` VALUES (16, '2019_08_03_065144_add_image_in_products_table', 5);

-- ----------------------------
-- Table structure for order_detail
-- ----------------------------
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_unit_price` int(11) NOT NULL,
  `size` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_tel` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for product_image
-- ----------------------------
DROP TABLE IF EXISTS `product_image`;
CREATE TABLE `product_image`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_image
-- ----------------------------
INSERT INTO `product_image` VALUES (9, 25, '/media/product_image/2019/08/09/9_ao_lung_banh_beo_2.png', 1, NULL, '2019-08-09 20:57:06', '2019-08-09 20:57:06', NULL);
INSERT INTO `product_image` VALUES (10, 25, '/media/product_image/2019/08/09/10_ao_lung_banh_beo_3.png', 1, NULL, '2019-08-09 20:57:06', '2019-08-09 20:57:06', NULL);
INSERT INTO `product_image` VALUES (15, 24, '/media/product_image/2019/08/09/15_ao_thun_co_tron_2.png', 1, NULL, '2019-08-09 21:00:58', '2019-08-09 21:00:58', NULL);
INSERT INTO `product_image` VALUES (16, 24, '/media/product_image/2019/08/09/16_ao_thun_co_tron_3.png', 1, NULL, '2019-08-09 21:00:58', '2019-08-09 21:00:58', NULL);
INSERT INTO `product_image` VALUES (17, 24, '/media/product_image/2019/08/09/17_ao_thun_co_tron_4.png', 1, NULL, '2019-08-09 21:00:58', '2019-08-09 21:00:58', NULL);
INSERT INTO `product_image` VALUES (18, 12, '/media/product_image/2019/08/09/18_dam_dai_thuot_tha_2.png', 1, NULL, '2019-08-09 21:03:31', '2019-08-09 21:03:31', NULL);
INSERT INTO `product_image` VALUES (19, 11, '/media/product_image/2019/08/09/19_ao_vay_anh_kim_2.png', 1, NULL, '2019-08-09 21:07:44', '2019-08-09 21:07:44', NULL);
INSERT INTO `product_image` VALUES (20, 8, '/media/product_image/2019/08/09/20_dam_baby_doll_2.png', 1, NULL, '2019-08-09 21:09:40', '2019-08-09 21:09:40', NULL);
INSERT INTO `product_image` VALUES (21, 8, '/media/product_image/2019/08/09/21_dam_baby_doll_3.png', 1, NULL, '2019-08-09 21:09:40', '2019-08-09 21:09:40', NULL);
INSERT INTO `product_image` VALUES (22, 4, '/media/product_image/2019/08/09/22_dam_vest_tay_lo_2.png', 1, NULL, '2019-08-09 21:11:32', '2019-08-09 21:11:32', NULL);
INSERT INTO `product_image` VALUES (23, 3, '/media/product_image/2019/08/09/23_ao_co_banh_beo_lech_vai_1.png', 1, NULL, '2019-08-09 21:13:20', '2019-08-09 21:13:20', NULL);
INSERT INTO `product_image` VALUES (24, 2, '/media/product_image/2019/08/09/24_vay_hm_2.jpg', 1, NULL, '2019-08-09 21:14:56', '2019-08-09 21:14:56', NULL);
INSERT INTO `product_image` VALUES (25, 1, '/media/product_image/2019/08/09/25_vay_zara_2.jpg', 1, NULL, '2019-08-09 21:16:04', '2019-08-09 21:16:04', NULL);
INSERT INTO `product_image` VALUES (26, 38, '/media/product_image/2019/08/11/26_tui_da_lon_zara_2.jpg', 1, NULL, '2019-08-11 16:14:45', '2019-08-11 16:14:45', NULL);
INSERT INTO `product_image` VALUES (27, 38, '/media/product_image/2019/08/11/27_tui_da_lon_zara_3.jpg', 1, NULL, '2019-08-11 16:14:45', '2019-08-11 16:14:45', NULL);
INSERT INTO `product_image` VALUES (28, 38, '/media/product_image/2019/08/11/28_tui_da_lon_zara_4.jpg', 1, NULL, '2019-08-11 16:14:45', '2019-08-11 16:14:45', NULL);
INSERT INTO `product_image` VALUES (29, 42, '/media/product_image/2019/08/11/29_khan_co_bershka_2.png', 1, NULL, '2019-08-11 16:20:32', '2019-08-11 16:20:32', NULL);
INSERT INTO `product_image` VALUES (30, 44, '/media/product_image/2019/08/11/30_giay_trainers_2.jpg', 1, NULL, '2019-08-11 16:27:29', '2019-08-11 16:27:29', NULL);
INSERT INTO `product_image` VALUES (31, 44, '/media/product_image/2019/08/11/31_giay_trainers_3.jpg', 1, NULL, '2019-08-11 16:27:29', '2019-08-11 16:27:29', NULL);
INSERT INTO `product_image` VALUES (32, 44, '/media/product_image/2019/08/11/32_giay_trainers_4.jpg', 1, NULL, '2019-08-11 16:27:30', '2019-08-11 16:27:30', NULL);
INSERT INTO `product_image` VALUES (33, 45, '/media/product_image/2019/08/11/33_giay_bershka_2.jpg', 1, NULL, '2019-08-11 16:30:35', '2019-08-11 16:30:35', NULL);
INSERT INTO `product_image` VALUES (34, 45, '/media/product_image/2019/08/11/34_giay_bershka_3.jpg', 1, NULL, '2019-08-11 16:30:35', '2019-08-11 16:30:35', NULL);
INSERT INTO `product_image` VALUES (35, 45, '/media/product_image/2019/08/11/35_giay_bershka_4.jpg', 1, NULL, '2019-08-11 16:30:35', '2019-08-11 16:30:35', NULL);
INSERT INTO `product_image` VALUES (36, 46, '/media/product_image/2019/08/11/36_dep_bershka_2.jpg', 1, NULL, '2019-08-11 16:31:29', '2019-08-11 16:31:29', NULL);

-- ----------------------------
-- Table structure for product_option
-- ----------------------------
DROP TABLE IF EXISTS `product_option`;
CREATE TABLE `product_option`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `size` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_option
-- ----------------------------
INSERT INTO `product_option` VALUES (58, 32, 'S', 'Vàng nâu', 6, 1, NULL, '2019-08-09 23:41:55', '2019-08-09 23:41:55', NULL);
INSERT INTO `product_option` VALUES (59, 31, 's', 'Sọc trắng đen', NULL, 1, NULL, '2019-08-09 23:42:07', '2019-08-09 23:42:07', NULL);
INSERT INTO `product_option` VALUES (60, 30, 'S', 'Xanh beige da lộn', 5, 1, NULL, '2019-08-09 23:42:19', '2019-08-09 23:42:19', NULL);
INSERT INTO `product_option` VALUES (61, 29, 'S', 'Xanh dương', 5, 1, NULL, '2019-08-09 23:49:35', '2019-08-09 23:49:35', NULL);
INSERT INTO `product_option` VALUES (62, 27, 'S', 'Đỏ', NULL, 1, NULL, '2019-08-09 23:49:47', '2019-08-09 23:49:47', NULL);
INSERT INTO `product_option` VALUES (63, 26, 'S', 'Sọc đỏ trắng xanh', 7, 1, NULL, '2019-08-09 23:50:00', '2019-08-09 23:50:00', NULL);
INSERT INTO `product_option` VALUES (64, 25, 'M', 'Xám', 5, 1, NULL, '2019-08-09 23:50:13', '2019-08-09 23:50:13', NULL);
INSERT INTO `product_option` VALUES (65, 25, 'L', 'Đỏ sẫm', 6, 1, NULL, '2019-08-09 23:50:13', '2019-08-09 23:50:13', NULL);
INSERT INTO `product_option` VALUES (66, 25, 'XL', 'Vàng', 5, 1, NULL, '2019-08-09 23:50:13', '2019-08-09 23:50:13', NULL);
INSERT INTO `product_option` VALUES (67, 24, 'S', 'Trắng', 10, 1, NULL, '2019-08-09 23:50:25', '2019-08-09 23:50:25', NULL);
INSERT INTO `product_option` VALUES (68, 24, 'M', 'Trắng', 8, 1, NULL, '2019-08-09 23:50:25', '2019-08-09 23:50:25', NULL);
INSERT INTO `product_option` VALUES (69, 12, 'S', 'Xanh dương', 5, 1, NULL, '2019-08-09 23:50:41', '2019-08-09 23:50:41', NULL);
INSERT INTO `product_option` VALUES (70, 12, 'S', 'Hồng', 5, 1, NULL, '2019-08-09 23:50:41', '2019-08-09 23:50:41', NULL);
INSERT INTO `product_option` VALUES (71, 11, 'XL', 'Trắng đen', 5, 1, NULL, '2019-08-09 23:50:56', '2019-08-09 23:50:56', NULL);
INSERT INTO `product_option` VALUES (72, 11, 'XXL', 'Đỏ đen', 6, 1, NULL, '2019-08-09 23:50:56', '2019-08-09 23:50:56', NULL);
INSERT INTO `product_option` VALUES (73, 8, 'S', NULL, NULL, 1, NULL, '2019-08-09 23:51:08', '2019-08-09 23:51:08', NULL);
INSERT INTO `product_option` VALUES (74, 4, 'S', NULL, NULL, 1, NULL, '2019-08-09 23:51:18', '2019-08-09 23:51:18', NULL);
INSERT INTO `product_option` VALUES (75, 3, 'S', NULL, NULL, 1, NULL, '2019-08-09 23:51:33', '2019-08-09 23:51:33', NULL);
INSERT INTO `product_option` VALUES (76, 2, 'S', 'Xanh dương', NULL, 1, NULL, '2019-08-09 23:51:42', '2019-08-09 23:51:42', NULL);
INSERT INTO `product_option` VALUES (77, 1, 'S', 'Xanh', 5, 1, NULL, '2019-08-09 23:51:52', '2019-08-09 23:51:52', NULL);
INSERT INTO `product_option` VALUES (78, 1, 'S', 'Vàng', 6, 1, NULL, '2019-08-09 23:51:52', '2019-08-09 23:51:52', NULL);
INSERT INTO `product_option` VALUES (79, 33, 'S', 'Đen', 2, NULL, NULL, '2019-08-11 15:21:49', '2019-08-11 15:21:49', NULL);
INSERT INTO `product_option` VALUES (80, 34, 's', 'Hồng đất', 5, NULL, NULL, '2019-08-11 15:41:48', '2019-08-11 15:41:48', NULL);
INSERT INTO `product_option` VALUES (81, 35, 'S', 'Đen', 3, NULL, NULL, '2019-08-11 15:43:23', '2019-08-11 15:43:23', NULL);
INSERT INTO `product_option` VALUES (83, 37, 's', 'Xanh dương', 4, NULL, NULL, '2019-08-11 16:10:58', '2019-08-11 16:10:58', NULL);
INSERT INTO `product_option` VALUES (84, 38, 'One size', 'Vàng nâu', 2, NULL, NULL, '2019-08-11 16:14:10', '2019-08-11 16:14:10', NULL);
INSERT INTO `product_option` VALUES (86, 40, 'One size', NULL, NULL, NULL, NULL, '2019-08-11 16:18:59', '2019-08-11 16:18:59', NULL);
INSERT INTO `product_option` VALUES (87, 39, 'One size', NULL, NULL, 1, NULL, '2019-08-11 16:19:20', '2019-08-11 16:19:20', NULL);
INSERT INTO `product_option` VALUES (88, 41, 'One size', NULL, NULL, NULL, NULL, '2019-08-11 16:19:52', '2019-08-11 16:19:52', NULL);
INSERT INTO `product_option` VALUES (89, 42, 'One size', NULL, NULL, NULL, NULL, '2019-08-11 16:20:23', '2019-08-11 16:20:23', NULL);
INSERT INTO `product_option` VALUES (91, 44, 'S', NULL, NULL, NULL, NULL, '2019-08-11 16:27:06', '2019-08-11 16:27:06', NULL);
INSERT INTO `product_option` VALUES (92, 45, 'Inbox', NULL, NULL, NULL, NULL, '2019-08-11 16:30:11', '2019-08-11 16:30:11', NULL);
INSERT INTO `product_option` VALUES (94, 46, 'Full size', 'Cam', 5, 1, NULL, '2019-08-26 22:30:01', '2019-08-26 22:30:01', NULL);
INSERT INTO `product_option` VALUES (95, 46, 'Full size', 'Vàng', 2, 1, NULL, '2019-08-26 22:30:01', '2019-08-26 22:30:01', NULL);
INSERT INTO `product_option` VALUES (97, 36, 's', 'Xanh dương', 4, 1, NULL, '2019-09-19 21:33:27', '2019-09-19 21:33:27', NULL);
INSERT INTO `product_option` VALUES (99, 43, 'One size', 'Đen', 5, 1, NULL, '2019-09-19 22:09:26', '2019-09-19 22:09:26', NULL);

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_code` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `made_in` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_new` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:old,1:new',
  `sale` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price_sale` int(11) DEFAULT NULL,
  `ins_id` int(11) DEFAULT NULL,
  `upd_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 3, 'V01', 'Váy Zara', 'vay-zara', NULL, NULL, 309000, '/media/products/2019/08/09/1_vay_zara_1.jpg', 'Váy Zara Ngon bổ ré , giảm hết nấc', '0', NULL, NULL, 1, 1, '2019-07-20 11:26:46', '2019-08-09 23:51:52', NULL);
INSERT INTO `products` VALUES (2, 3, 'V02', 'Váy H&M', 'vay-hm', NULL, NULL, 135000, '/media/products/2019/08/09/2_vay_hm_1.jpg', 'H&M dễ thương chưa #135k 🙀', '0', NULL, NULL, 1, 1, '2019-07-21 17:40:35', '2019-08-09 23:51:42', NULL);
INSERT INTO `products` VALUES (3, 1, 'BS111', 'Áo cổ bánh bèo lệch vai', 'ao-co-banh-beo-lech-vai', NULL, NULL, 252000, '/media/products/2019/08/09/3_ao_co_banh_beo_lech_vai_2.png', 'Áo cổ bánh bèo lệch vai quyến rũ à nghen', '0', NULL, NULL, 1, 1, '2019-07-21 18:05:53', '2019-08-09 23:51:33', NULL);
INSERT INTO `products` VALUES (4, 3, 'BS12', 'Đầm vest tay lở', 'dam-vest-tay-lo', NULL, NULL, 630000, '/media/products/2019/08/09/4_dam_vest_tay_lo_1.png', 'Đầm vest tay lở cực sang chảnh nha các ce.', '0', NULL, NULL, 1, 1, '2019-07-21 18:07:39', '2019-08-09 23:51:18', NULL);
INSERT INTO `products` VALUES (8, 3, 'BS090', 'Đầm baby doll', 'dam-baby-doll', NULL, NULL, 390000, '/media/products/2019/08/09/8_dam_baby_doll_1.png', 'Đầm baby doll, màu cực iu, chất mịn mát.', '0', NULL, NULL, 1, 1, '2019-07-22 16:16:55', '2019-08-09 23:51:08', NULL);
INSERT INTO `products` VALUES (11, 3, 'BS08', 'Áo váy lấp lánh ánh kim', 'ao-vay-lap-lanh-anh-kim', NULL, NULL, 500000, '/media/products/2019/08/09/11_ao_vay_anh_kim_1.png', 'Siêu phẩm summer 2019, set áo váy lấp lánh ánh kim', '0', NULL, NULL, 1, 1, '2019-07-22 16:55:30', '2019-08-09 23:50:56', NULL);
INSERT INTO `products` VALUES (12, 3, 'BS07', 'Đầm dài thướt tha', 'dam-dai-thuot-tha', NULL, NULL, 500000, '/media/products/2019/08/09/12_dam_dai_thuot_tha_1.png', 'Đầm dài thướt tha', '0', NULL, NULL, 1, 1, '2019-07-22 17:34:25', '2019-08-09 23:50:41', NULL);
INSERT INTO `products` VALUES (24, 1, 'BS06', 'Áo thun cổ tròn in họa tiết đơn giản', 'ao-thun-co-tron-in-hoa-tiet-don-gian', NULL, NULL, 240000, '/media/products/2019/08/09/24_ao_thun_co_tron_1.png', 'Bộ sưu tập áo thun cổ tròn in họa tiết đơn giản', '0', NULL, NULL, 1, 1, '2019-07-22 17:42:42', '2019-08-09 23:50:25', NULL);
INSERT INTO `products` VALUES (25, 1, 'BS05', 'Áo lửng tay bèo với dây thắt trước ngực', 'ao-lung-tay-beo-voi-day-that-truoc-nguc', NULL, NULL, 280000, '/media/products/2019/08/09/25_ao_lung_banh_beo_1.png', 'Áo lửng tay bèo với dây thắt trước ngực', '0', NULL, NULL, 1, 1, '2019-07-22 17:45:05', '2019-08-09 23:50:13', NULL);
INSERT INTO `products` VALUES (26, 1, 'BS16', 'Áo Thun H&M Sọc viền cổ', 'ao-thun-hm-soc-vien-co', NULL, 'Cotton 100%', 145000, '/media/products/2019/08/09/26_ao_thun_hm_soc_vien_co.png', 'Áo tay ngắn, viền phối cổ tròn, chất liệu 100% cotton thoáng mát.\r\nKết hợp với jean rất năng động đấy các nàng nha.', '0', NULL, NULL, 1, 1, '2019-08-03 10:01:17', '2019-08-09 23:50:00', NULL);
INSERT INTO `products` VALUES (27, 1, 'BS09', 'Sơ mi nữ cổ chữ V', 'so-mi-nu-co-chu-v', NULL, 'Viscose 100%', 175000, '/media/products/2019/08/09/27_so_mi_nu_co_chu_v.jpg', 'Áo cổ chữ V dáng suông ,kiểu dệt viscose chất mát, thoáng mồ hôi với tay áo ngắn và cài nút phía trước.\r\nDễ kết hợp quần short hay jean, chân váy...', '0', NULL, NULL, 1, 1, '2019-08-03 13:40:31', '2019-08-09 23:49:47', NULL);
INSERT INTO `products` VALUES (29, 3, 'BS11', 'Chân váy jean', 'chan-vay-jean', NULL, 'Jean', 255000, '/media/products/2019/08/09/29_chan_vay_jean.png', 'Chân váy Jean màu xanh nhạt , có mài  nhẹ , xẻ chữ V ngược phía trước', '0', NULL, NULL, 1, 1, '2019-08-04 14:57:39', '2019-08-09 23:49:35', NULL);
INSERT INTO `products` VALUES (30, 3, 'BS10', 'Chân váy chữ A', 'chan-vay-chu-a', NULL, 'Polyester 100%', 289000, '/media/products/2019/08/09/30_chan_vay_chu_a.jpg', 'Kiểu Váy ngắn, chữ A có nút trang trí dọc giữa xuống mặt trước.', '0', NULL, NULL, 1, 1, '2019-08-04 15:07:36', '2019-08-09 23:42:19', NULL);
INSERT INTO `products` VALUES (31, 1, 'BS19', 'Áo H&M caro chữ U', 'ao-hm-caro-chu-u', NULL, 'Viscose', 235000, '/media/products/2019/08/09/31_ao_h_r_caro_chu_u.jpg', 'Áo ngắn tay, cổ vuông đang trend mùa hè này nha. \r\nChất liệu viscose thoáng mát.\r\nCó nút cài nẹp áo trước.', '0', NULL, NULL, 1, 1, '2019-08-04 15:10:50', '2019-08-09 23:42:07', NULL);
INSERT INTO `products` VALUES (32, 1, 'BS18', 'Áo Vịt Donald -Cropptop dài tay', 'ao-vit-donald-cropptop-dai-tay', 'Pháp', 'Cotton 69%, Polyester 31%', 315000, '/media/products/2019/08/09/32_ao_vit_donald.jpg', 'Áo Crop top dài tay, ống tay có bo.\r\nIn hình Vịt Donald ngộ nghĩnh.', '0', NULL, NULL, 1, 1, '2019-08-04 15:14:41', '2019-08-09 23:41:55', NULL);
INSERT INTO `products` VALUES (33, 8, 'K01', 'Kính mắt mèo H&M', 'kinh-mat-meo-hm', NULL, 'Nhựa', 149000, '/media/products/2019/08/11/33_kinh_mat_meo_hm.jpg', 'Kính râm mắt mèo bằng nhựa với tròng kính chống tia UV.', '0', NULL, NULL, 1, NULL, '2019-08-11 15:21:49', '2019-08-11 15:21:49', NULL);
INSERT INTO `products` VALUES (34, 1, 'BS15', 'Cropptop trễ vai', 'cropptop-tre-vai', NULL, 'Polyester 92%, Elastane 8%', 145000, '/media/products/2019/08/11/34_croptop_tre_vai.jpg', 'Áo co giãn ôm khít cơ thể . nữ tính', '0', NULL, NULL, 1, NULL, '2019-08-11 15:41:48', '2019-08-11 15:41:48', NULL);
INSERT INTO `products` VALUES (35, 8, 'K02', 'Kính nữ H&M dáng tròn', 'kinh-nu-hm-dang-tron', NULL, 'Polycarbonate 100%', 120000, '/media/products/2019/08/11/35_kinh_nu_hm_dang_tron.jpg', 'Kính râm tròn với gọng nhựa và tròng kính chống tia UV.', '0', NULL, NULL, 1, NULL, '2019-08-11 15:43:23', '2019-08-11 15:43:23', NULL);
INSERT INTO `products` VALUES (36, 2, 'Q01', 'Quần short jeans', 'quan-short-jeans', NULL, 'Jean', 230000, '/media/products/2019/08/11/36_quan_sort_1.png', 'Quần short jeans dễ kết hợp.', '1', NULL, NULL, 1, 1, '2019-08-11 15:48:44', '2019-09-19 21:33:27', NULL);
INSERT INTO `products` VALUES (37, 2, 'Q02', 'Jeans suông gấp lai', 'jeans-suong-gap-lai', NULL, 'Jean', 240000, '/media/products/2019/08/11/37_quan_jean_suong.png', 'eans suông gấp lai cho các nàng năng động nhé.\r\nCó 2 màu xanh nhạt và xanh đậm.', '0', NULL, NULL, 1, NULL, '2019-08-11 16:10:58', '2019-08-11 16:10:58', NULL);
INSERT INTO `products` VALUES (38, 5, 'T01', 'Túi da lộn ZARA', 'tui-da-lon-zara', NULL, 'Da', 469000, '/media/products/2019/08/11/38_tui_da_lon_zara_1.jpg', 'Túi da lộn ZARA màu vàng nâu ưng quá cưng', '0', NULL, NULL, 1, NULL, '2019-08-11 16:14:10', '2019-08-11 16:14:10', NULL);
INSERT INTO `products` VALUES (39, 6, 'PK01', 'Vòng cổ bershka', 'vong-co-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/39_vong_co_bershka.png', NULL, '0', NULL, NULL, 1, 1, '2019-08-11 16:18:14', '2019-08-11 16:19:20', NULL);
INSERT INTO `products` VALUES (40, 6, 'PK02', 'Khuyên tai bershka', 'khuyen-tai-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/40_khuyen_tai_bershka.png', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 16:18:59', '2019-08-11 16:18:59', NULL);
INSERT INTO `products` VALUES (41, 6, 'PK03', 'Tất bershka', 'tat-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/41_tat_bershka.png', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 16:19:52', '2019-08-11 16:19:52', NULL);
INSERT INTO `products` VALUES (42, 6, 'PK04', 'Khăn cổ bershka', 'khan-co-bershka', 'Bồ đào nha', NULL, 85000, '/media/products/2019/08/11/42_khan_co_bershka_1.png', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 16:20:23', '2019-08-11 16:20:23', NULL);
INSERT INTO `products` VALUES (43, 7, 'M01', 'Mũ bershka', 'mu-bershka', 'Bồ Đào Nha', NULL, 85000, '/media/products/2019/08/11/43_mu_bershka.png', 'Mũ bershka được nhập khẩu từ Bồ Đào Nha', '0', 'Khuyến mại 6%', 80000, 1, 1, '2019-08-11 16:21:05', '2019-09-19 22:09:26', NULL);
INSERT INTO `products` VALUES (44, 4, 'GD01', 'Giầy trainers bershka', 'giay-trainers-bershka', 'Bồ đào nha', NULL, 580000, '/media/products/2019/08/11/44_giay_trainers_1.jpg', 'Giầy trainers 1xxx giảm 50% chất như nước cất', '0', NULL, NULL, 1, NULL, '2019-08-11 16:27:06', '2019-08-11 16:27:06', NULL);
INSERT INTO `products` VALUES (45, 4, 'GD02', 'Giầy bershka', 'giay-bershka', 'Bồ đào nha', NULL, 309000, '/media/products/2019/08/11/45_giay_bershka_1.jpg', NULL, '0', NULL, NULL, 1, NULL, '2019-08-11 16:30:11', '2019-08-11 16:30:11', NULL);
INSERT INTO `products` VALUES (46, 4, 'GD04', 'Dép bershka', 'dep-bershka', 'Bồ đào nha', NULL, 195000, '/media/products/2019/08/11/46_dep_bershka_1.jpg', 'DÉP Bershka ĐI BAO NỔI TRỘI', '1', NULL, NULL, 1, 1, '2019-08-11 16:31:19', '2019-08-26 22:30:01', NULL);

SET FOREIGN_KEY_CHECKS = 1;
