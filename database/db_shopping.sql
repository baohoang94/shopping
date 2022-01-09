-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql306.0fees.us
-- Thời gian đã tạo: Th1 09, 2022 lúc 06:05 AM
-- Phiên bản máy phục vụ: 5.7.36-39
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `0fe_20010865_shopping`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Quần áo', 0, 'quan-ao', '2021-12-06 08:33:55', '2021-12-06 08:33:55', NULL),
(8, 'Giầy dép', 0, 'giay-dep', '2021-12-06 08:34:08', '2021-12-06 08:34:08', NULL),
(9, 'Phụ kiện', 0, 'phu-kien', '2021-12-06 08:34:22', '2022-01-03 07:37:20', NULL),
(10, 'Áo', 7, 'ao', '2021-12-06 08:35:34', '2022-01-09 01:42:38', NULL),
(11, 'Quần', 7, 'quan', '2021-12-06 08:36:06', '2022-01-09 01:42:19', NULL),
(12, 'Quần áo nam mùa đông', 10, 'quan-ao-nam-mua-dong', '2021-12-06 08:36:27', '2022-01-02 01:32:43', '2022-01-02 01:32:43'),
(13, 'Giầy', 8, 'giay', '2021-12-06 08:36:53', '2022-01-09 01:42:01', NULL),
(15, 'Giường tủ gia đình test', 7, 'giuong-tu-gia-dinh-test', '2021-12-07 08:56:11', '2021-12-08 07:43:19', '2021-12-08 07:43:19'),
(16, 'ao nam long cho', 10, 'ao-nam-long-cho', '2022-01-02 08:20:03', '2022-01-09 00:53:57', '2022-01-09 00:53:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `created_at`, `updated_at`, `slug`, `deleted_at`) VALUES
(1, 'Menu 1', 0, NULL, NULL, '', NULL),
(2, 'Menu 1.1 edit', 1, NULL, '2021-12-12 08:43:36', 'menu-11-edit', '2021-12-12 08:43:36'),
(3, 'Menu 2', 0, NULL, NULL, '', NULL),
(4, 'Menu 1.1.1', 2, NULL, NULL, '', NULL),
(5, 'Menu 2.1 edit', 3, '2021-12-12 02:06:04', '2021-12-12 03:39:34', 'menu-21-edit', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_12_05_063146_create_categories_table', 1),
(4, '2021_12_08_140812_add_column_delete_at_table_categories', 2),
(5, '2021_12_11_142403_create_menus_table', 3),
(6, '2021_12_12_092938_add_column_slug_to_menus_table', 4),
(7, '2021_12_12_152049_add_column_soft_delete_to_menus_table', 5),
(8, '2021_12_14_141743_create_products_table', 6),
(9, '2021_12_14_142725_create_product_images_table', 6),
(10, '2021_12_14_143401_create_tags_table', 6),
(11, '2021_12_14_143743_create_product_tags_table', 6),
(12, '2021_12_18_161056_add_column_faeture_image_name', 7),
(13, '2021_12_19_043938_add_column_image_name_to_table_product_image', 8),
(14, '2021_12_24_155735_add_column_delete_at_to_product_table', 9),
(15, '2021_12_25_101112_create_sliders_table', 10),
(16, '2021_12_25_171310_add_column_delete_at_to_sliders', 11),
(17, '2021_12_26_070742_create_settings_table', 12),
(18, '2021_12_26_104533_add_column_type_to_table_setting', 13),
(19, '2021_12_28_160450_create_roles_table', 14),
(20, '2021_12_28_160513_create_permissions_table', 14),
(21, '2021_12_28_162031_create_table_permission_role', 15),
(22, '2021_12_28_162051_create_table_role_user', 15),
(23, '2021_12_30_163848_add_delete_at_to_users', 16),
(24, '2021_12_31_093958_add_column_parent_id_permission', 17),
(25, '2022_01_01_042832_add_key_code_to_permissions', 18),
(26, '2022_01_01_072157_add_delete_at_to_roles', 19),
(27, '2022_01_02_095609_add_views_count_products', 20),
(28, '2022_01_03_065348_add_feature_image_link_prducts', 21),
(29, '2022_01_03_145920_create_product_image_links_table', 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `key_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `parent_id`, `key_code`) VALUES
(1, 'category', 'category', '2022-01-01 05:23:48', '2022-01-01 05:23:48', 0, NULL),
(2, 'list', 'list', '2022-01-01 05:23:48', '2022-01-01 05:23:48', 1, 'list_category'),
(3, 'add', 'add', '2022-01-01 05:23:48', '2022-01-01 05:23:48', 1, 'add_category'),
(4, 'edit', 'edit', '2022-01-01 05:23:48', '2022-01-01 05:23:48', 1, 'edit_category'),
(5, 'delete', 'delete', '2022-01-01 05:23:48', '2022-01-01 05:23:48', 1, 'delete_category'),
(6, 'slider', 'slider', '2022-01-01 05:25:16', '2022-01-01 05:25:16', 0, NULL),
(7, 'list', 'list', '2022-01-01 05:25:16', '2022-01-01 05:25:16', 6, 'list_slider'),
(8, 'add', 'add', '2022-01-01 05:25:16', '2022-01-01 05:25:16', 6, 'add_slider'),
(9, 'edit', 'edit', '2022-01-01 05:25:16', '2022-01-01 05:25:16', 6, 'edit_slider'),
(10, 'delete', 'delete', '2022-01-01 05:25:16', '2022-01-01 05:25:16', 6, 'delete_slider'),
(11, 'menu', 'menu', '2022-01-01 05:25:23', '2022-01-01 05:25:23', 0, NULL),
(12, 'list', 'list', '2022-01-01 05:25:23', '2022-01-01 05:25:23', 11, 'list_menu'),
(13, 'add', 'add', '2022-01-01 05:25:23', '2022-01-01 05:25:23', 11, 'add_menu'),
(14, 'edit', 'edit', '2022-01-01 05:25:23', '2022-01-01 05:25:23', 11, 'edit_menu'),
(15, 'delete', 'delete', '2022-01-01 05:25:23', '2022-01-01 05:25:23', 11, 'delete_menu'),
(16, 'product', 'product', '2022-01-01 05:25:28', '2022-01-01 05:25:28', 0, NULL),
(17, 'list', 'list', '2022-01-01 05:25:28', '2022-01-01 05:25:28', 16, 'list_product'),
(18, 'add', 'add', '2022-01-01 05:25:28', '2022-01-01 05:25:28', 16, 'add_product'),
(19, 'edit', 'edit', '2022-01-01 05:25:28', '2022-01-01 05:25:28', 16, 'edit_product'),
(20, 'delete', 'delete', '2022-01-01 05:25:28', '2022-01-01 05:25:28', 16, 'delete_product'),
(21, 'setting', 'setting', '2022-01-01 05:25:34', '2022-01-01 05:25:34', 0, NULL),
(22, 'list', 'list', '2022-01-01 05:25:34', '2022-01-01 05:25:34', 21, 'list_setting'),
(23, 'add', 'add', '2022-01-01 05:25:34', '2022-01-01 05:25:34', 21, 'add_setting'),
(24, 'edit', 'edit', '2022-01-01 05:25:34', '2022-01-01 05:25:34', 21, 'edit_setting'),
(25, 'delete', 'delete', '2022-01-01 05:25:34', '2022-01-01 05:25:34', 21, 'delete_setting'),
(26, 'user', 'user', '2022-01-01 05:25:41', '2022-01-01 05:25:41', 0, NULL),
(27, 'list', 'list', '2022-01-01 05:25:41', '2022-01-01 05:25:41', 26, 'list_user'),
(28, 'add', 'add', '2022-01-01 05:25:41', '2022-01-01 05:25:41', 26, 'add_user'),
(29, 'edit', 'edit', '2022-01-01 05:25:41', '2022-01-01 05:25:41', 26, 'edit_user'),
(30, 'delete', 'delete', '2022-01-01 05:25:41', '2022-01-01 05:25:41', 26, 'delete_user'),
(31, 'role', 'role', '2022-01-01 05:25:47', '2022-01-01 05:25:47', 0, NULL),
(32, 'list', 'list', '2022-01-01 05:25:47', '2022-01-01 05:25:47', 31, 'list_role'),
(33, 'add', 'add', '2022-01-01 05:25:47', '2022-01-01 05:25:47', 31, 'add_role'),
(34, 'edit', 'edit', '2022-01-01 05:25:47', '2022-01-01 05:25:47', 31, 'edit_role'),
(35, 'delete', 'delete', '2022-01-01 05:25:47', '2022-01-01 05:25:47', 31, 'delete_role');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 5, 2, NULL, NULL),
(2, 5, 3, NULL, NULL),
(3, 5, 4, NULL, NULL),
(4, 5, 5, NULL, NULL),
(5, 5, 7, NULL, NULL),
(6, 5, 8, NULL, NULL),
(11, 6, 12, NULL, NULL),
(12, 6, 13, NULL, NULL),
(13, 6, 14, NULL, NULL),
(14, 6, 15, NULL, NULL),
(15, 6, 7, NULL, NULL),
(16, 6, 8, NULL, NULL),
(17, 6, 9, NULL, NULL),
(18, 6, 10, NULL, NULL),
(19, 6, 22, NULL, NULL),
(20, 6, 23, NULL, NULL),
(21, 6, 24, NULL, NULL),
(22, 6, 25, NULL, NULL),
(25, 1, 8, NULL, NULL),
(26, 1, 9, NULL, NULL),
(27, 1, 10, NULL, NULL),
(28, 6, 2, NULL, NULL),
(29, 1, 2, NULL, NULL),
(30, 1, 17, NULL, NULL),
(31, 1, 19, NULL, NULL),
(32, 1, 3, NULL, NULL),
(33, 1, 4, NULL, NULL),
(34, 1, 5, NULL, NULL),
(35, 1, 7, NULL, NULL),
(36, 1, 12, NULL, NULL),
(37, 1, 22, NULL, NULL),
(38, 1, 27, NULL, NULL),
(39, 1, 32, NULL, NULL),
(40, 1, 20, NULL, NULL),
(41, 1, 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `views_count` int(11) NOT NULL,
  `feature_image_link` longtext COLLATE utf8mb4_unicode_ci,
  `url_link` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `feature_image_path`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`, `feature_image_name`, `deleted_at`, `views_count`, `feature_image_link`, `url_link`) VALUES
(1, 'Giường gỗ', '10000000', '/storage/product/1/LYwaAkqJunhpn3RsBmT8.png', '<p>Giuong gỗ thịt</p>', 2, 10, '2021-12-18 21:32:11', '2022-01-06 04:06:47', 'Screenshot from 2021-07-30 21-59-44.png', '2022-01-06 04:06:47', 0, NULL, NULL),
(22, 'promotionId', '699000', '/storage/product/1/jMypBJpkNSfYzSQ1UeSm.png', '<p>fghj</p>', 1, 10, '2021-12-24 09:21:59', '2022-01-04 20:40:30', 'Screenshot from 2021-12-05 21-59-30.png', '2022-01-04 20:40:30', 1, NULL, NULL),
(24, 'fdgvhjdcfg yi', '699000', '/storage/product/1/jMypBJpkNSfYzSQ1UeSm.png', '<p>fghj</p>', 1, 10, '2021-12-24 09:21:59', '2022-01-04 20:40:36', 'Screenshot from 2021-12-05 21-59-30.png', '2022-01-04 20:40:36', 1, NULL, NULL),
(25, 'Giường gỗ 1', '10000000', '/storage/product/1/LYwaAkqJunhpn3RsBmT8.png', '<p>Giuong gỗ thịt</p>', 2, 11, '2021-12-18 21:32:11', '2022-01-06 04:06:54', 'Screenshot from 2021-07-30 21-59-44.png', '2022-01-06 04:06:54', 0, NULL, NULL),
(26, 'promotionId 2', '699000', '/storage/product/1/jMypBJpkNSfYzSQ1UeSm.png', '<p>fghj</p>', 1, 10, '2021-12-24 09:21:59', '2022-01-04 20:40:48', 'Screenshot from 2021-12-05 21-59-30.png', '2022-01-04 20:40:48', 1, NULL, NULL),
(27, 'promotionId 3', '699000', '/storage/product/1/jMypBJpkNSfYzSQ1UeSm.png', '<p>fghj</p>', 1, 10, '2021-12-24 09:21:59', '2022-01-03 03:15:29', 'Screenshot from 2021-12-05 21-59-30.png', '2022-01-03 03:15:29', 1, NULL, NULL),
(28, 'Quần bò nam rách gối', '299000', NULL, '<p>Quần b&ograve; nam r&aacute;ch gối</p>', 1, 11, '2022-01-03 00:31:08', '2022-01-09 02:15:08', NULL, NULL, 0, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/271599452_307284631290032_8496318617793837905_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=b9115d&_nc_ohc=IQkKH8rsowoAX_HPB4n&_nc_ht=scontent.fhan14-1.fna&oh=00_AT_ubISncULK3L2JF7IhTUhx6Xd2wjHi28g2rSAVxafHOg&oe=61DEF807', NULL),
(29, 'Áo sơ mi nam trắng', '199000', NULL, '<p>ao nam</p>', 1, 10, '2022-01-03 00:50:16', '2022-01-09 02:14:34', NULL, NULL, 0, 'https://thegioimay.org/wp-content/uploads/2020/11/quankun1064944672953574451157347377723221272784552n-1598176839047986668475-1598180650059-1598180650061951434006.jpg', NULL),
(30, 'Áo thun nam', '99000', NULL, '<p>ao thun nam</p>', 1, 10, '2022-01-03 00:55:40', '2022-01-09 20:48:24', NULL, NULL, 6, 'https://i.pinimg.com/236x/33/52/56/33525697fa75bd832a11c742e9bf4429.jpg', NULL),
(31, 'Áo nam Hàn Quốc', '399000', NULL, '<p>&Aacute;o nam Korea</p>', 1, 10, '2022-01-03 05:07:10', '2022-01-09 02:21:33', NULL, NULL, 8, 'https://i.pinimg.com/236x/6a/9c/90/6a9c906dee044e74f1fbb54b865bcb77.jpg', NULL),
(32, 'Áo len nam', '369000', NULL, '<p>&aacute;o len cho nam</p>', 1, 10, '2022-01-03 08:35:39', '2022-01-09 02:23:01', NULL, NULL, 11, 'https://i.pinimg.com/564x/d1/b1/69/d1b169157963ea05cb0c43e19f5410ba.jpg', NULL),
(33, 'Áo nam BROWNS', '269000', NULL, '<p>&Aacute;o nam BROWNS</p>', 1, 10, '2022-01-06 04:21:17', '2022-01-09 20:46:59', NULL, NULL, 3, 'https://i.pinimg.com/236x/13/8a/0d/138a0d40c3c648f61277ea8357ba4913.jpg', NULL),
(34, 'Áo nam dài tay', '169000', NULL, '<p>&Aacute;o nam thu đ&ocirc;ng d&agrave;i tay</p>', 1, 10, '2022-01-08 03:40:43', '2022-01-09 02:12:13', NULL, NULL, 0, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/271325994_2865486347075250_5060084891964522116_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=b9115d&_nc_ohc=p1nA_l8R4TEAX9-A61W&_nc_ht=scontent.fhan14-1.fna&oh=00_AT-EiPtP_2RC-oOmZ9vnqkASxffjRrbBg7k2yjLOLM2ADg&oe=61DD6094', NULL),
(35, 'Mùa đông không lạnh', '699000', NULL, '<p>&Aacute;o nam m&ugrave;a đ&ocirc;ng kh&ocirc;ng lạnh</p>', 1, 10, '2022-01-08 03:44:45', '2022-01-09 02:11:50', NULL, NULL, 0, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/s600x600/271474373_667066204327671_3939077855731065003_n.jpg?_nc_cat=103&_nc_rgb565=1&ccb=1-5&_nc_sid=b9115d&_nc_ohc=Xu_raPOxXrsAX-D0-7g&_nc_ht=scontent.fhan14-2.fna&oh=00_AT8PxikXyGUEQNAMW06dTw8dqIOY1VwAf2lM8h1go3PO8g&oe=61DCEF56', NULL),
(37, 'Áo thun nam tay ngắn', '99000', NULL, '<p>&aacute;o thun nam đen tay ngắn</p>', 1, 10, '2022-01-09 01:02:08', '2022-01-09 02:11:24', NULL, NULL, 0, 'https://storage.googleapis.com/cdn.nhanh.vn/store/7136/ps/20191104/6%20ao%20thun%20nam%20tay%20ngan%20(1).jpg', NULL),
(38, 'Áo sơ mi nam họa tiết', '199000', NULL, '<p>&Aacute;o sơ mi nam phối họa tiết đẹp</p>', 1, 10, '2022-01-09 01:53:01', '2022-01-09 02:16:53', NULL, NULL, 0, 'https://i.pinimg.com/originals/15/a8/57/15a8576e996019febd6db5c24e715b6b.jpg', NULL),
(39, 'Giày Sneaker Nam thể thao màu trắng cổ cao cho học sinh phong cách Hàn Quốc', '129000', NULL, '<p>Gi&agrave;y Sneaker Nam thể thao m&agrave;u trắng cổ cao cho học sinh phong c&aacute;ch H&agrave;n Quốc</p>', 1, 13, '2022-01-09 02:05:14', '2022-01-09 02:05:14', NULL, NULL, 0, 'https://cf.shopee.vn/file/8379949ac5c28ca58a451e36a52067ce', 'https://shopee.vn/Gi%C3%A0y-Sneaker-Nam-th%E1%BB%83-thao-m%C3%A0u-tr%E1%BA%AFng-c%E1%BB%95-cao-cho-h%E1%BB%8Dc-sinh-phong-c%C3%A1ch-H%C3%A0n-Qu%E1%BB%91c-2019-KHO-GI%C3%80Y-68-(KG23)-i.129743106.2041394591?sp_atk=855a5b10-4f56-47bb-8c76-e00b95518be9'),
(40, 'Quần bò nam đen trơn', '399000', NULL, '<p>Quần b&ograve; nam đen trơn chất đẹp</p>', 1, 11, '2022-01-09 02:10:48', '2022-01-09 02:10:48', NULL, NULL, 0, 'https://i.pinimg.com/564x/f6/8f/c6/f68fc6c954d9e14f0ccfcbd275ab79de.jpg', 'https://www.pinterest.com/pin/26599454041201645/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `product_id`, `created_at`, `updated_at`, `image_name`) VALUES
(1, '/storage/product/1/pjDjgBVXKwVM911r7Fud.png', 6, '2021-12-19 00:42:25', '2021-12-19 00:42:25', 'Screenshot from 2021-08-13 11-55-04.png'),
(2, '/storage/product/1/HEmwVh3npyu8zyg6hjmw.png', 6, '2021-12-19 00:42:25', '2021-12-19 00:42:25', 'Screenshot from 2021-09-22 22-49-29.png'),
(3, '/storage/product/1/rypU6vfg0ZKppIVFMfcz.png', 7, '2021-12-19 00:47:35', '2021-12-19 00:47:35', 'Screenshot from 2021-12-05 21-59-30.png'),
(4, '/storage/product/1/wKzR55Szjgmu0NUpjTAR.png', 7, '2021-12-19 00:47:35', '2021-12-19 00:47:35', 'Screenshot from 2021-09-22 22-49-29.png'),
(5, '/storage/product/1/NRJnaaJ5b7BCtbrbnqMe.png', 8, '2021-12-19 00:59:47', '2021-12-19 00:59:47', 'Screenshot from 2021-09-13 17-23-58.png'),
(6, '/storage/product/1/WuSH2QRl9VQYVgWRIySn.png', 8, '2021-12-19 00:59:47', '2021-12-19 00:59:47', 'Screenshot from 2021-07-30 21-52-53.png'),
(7, '/storage/product/1/3SO4rvdjMZe6qimP3A5D.png', 9, '2021-12-19 01:48:42', '2021-12-19 01:48:42', 'Screenshot from 2021-09-22 22-49-29.png'),
(8, '/storage/product/1/Pr5ncMGi6GGhyigb1POw.png', 9, '2021-12-19 01:48:42', '2021-12-19 01:48:42', 'Screenshot from 2021-07-30 21-52-53.png'),
(9, '/storage/product/1/DitVZCyT23Bgpuu0X6VS.png', 10, '2021-12-19 01:50:20', '2021-12-19 01:50:20', 'Screenshot from 2021-09-13 17-23-58.png'),
(10, '/storage/product/1/BFQaTgPjpYqLOMZ8vEUa.png', 10, '2021-12-19 01:50:20', '2021-12-19 01:50:20', 'Screenshot from 2021-10-09 19-09-01.png'),
(11, '/storage/product/1/r80V4dhjjXNmEiMJ5Fb9.png', 11, '2021-12-19 02:11:21', '2021-12-19 02:11:21', 'Screenshot from 2021-08-11 14-40-36.png'),
(12, '/storage/product/1/tQK0zdZxh6ufEBtYWl4b.png', 11, '2021-12-19 02:11:21', '2021-12-19 02:11:21', 'Screenshot from 2021-07-30 21-59-44.png'),
(13, '/storage/product/1/crnHG9bKw5zZ73YfGSUz.png', 12, '2021-12-20 08:21:02', '2021-12-20 08:21:02', 'Screenshot from 2021-09-13 17-23-58.png'),
(14, '/storage/product/1/Bf575OBpgPygGGXQJuIE.png', 12, '2021-12-20 08:21:02', '2021-12-20 08:21:02', 'Screenshot from 2021-09-22 22-49-29.png'),
(18, '/storage/product/1/RezBlg2dFtQl1n0Ivere.png', 16, '2021-12-20 09:01:46', '2021-12-20 09:01:46', 'Screenshot from 2021-09-22 22-49-29.png'),
(20, '/storage/product/1/OYvP9RMIdehVdHk92RsK.png', 18, '2021-12-20 09:04:21', '2021-12-20 09:04:21', 'Screenshot from 2021-08-13 11-55-04.png'),
(21, '/storage/product/1/Y9wNp0LccAwSbw6yAZWj.png', 21, '2021-12-20 09:18:42', '2021-12-20 09:18:42', 'Screenshot from 2021-12-11 23-01-46.png'),
(22, '/storage/product/1/5G6paOwXaRt75qiQsIwm.png', 14, '2021-12-22 08:20:51', '2021-12-22 08:20:51', 'Screenshot from 2021-09-13 17-23-58.png'),
(23, '/storage/product/1/2oY36UYghv3a7NRHn1PR.png', 14, '2021-12-22 08:20:51', '2021-12-22 08:20:51', 'Screenshot from 2021-08-13 11-55-04.png'),
(24, '/storage/product/1/FfGMOsfRrkSHKTavXlfV.png', 14, '2021-12-22 08:20:51', '2021-12-22 08:20:51', 'Screenshot from 2021-07-30 21-52-53.png'),
(25, '/storage/product/1/zDcmu2WfJb6L4EuaILwW.png', 22, '2021-12-24 09:21:59', '2021-12-24 09:21:59', 'Screenshot from 2021-09-22 22-49-29.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image_links`
--

CREATE TABLE `product_image_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image_links`
--

INSERT INTO `product_image_links` (`id`, `image_link`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/270486334_793625875368034_7222308580631041268_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=b9115d&_nc_ohc=60ZJNbUZh9sAX-68doL&_nc_ht=scontent.fhan2-2.fna&oh=00_AT-5ba3L4hbr6Vp5lbjukyjg1leTMAGv-hvIFVnRM4-KJg&oe=61D90025', 32, '2022-01-03 08:35:39', '2022-01-03 08:35:39'),
(2, 'https://scontent.fhan2-2.fna.fbcdn.net/v/t39.30808-6/270355899_793625998701355_3288430688563694648_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=b9115d&_nc_ohc=3LMgwgViP8sAX9UdJUe&tn=-rPtJGDL5QisjksZ&_nc_ht=scontent.fhan2-2.fna&oh=00_AT97K1P80yELNI9grZfu7y_VZdLTdYVs2zkfQdjvVIbbug&oe=61D8E23C', 32, '2022-01-03 08:35:39', '2022-01-03 08:35:39'),
(3, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/270278268_445130377107843_2258795980986892470_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=b9115d&_nc_ohc=s1jChXfaXt4AX_uhPw3&_nc_ht=scontent.fhan14-1.fna&oh=00_AT-T7mF4_X_Jlsm3kBX_UIQyHqgkzjGRIwM2z59k0QDz3g&oe=61D9C038', 33, '2022-01-06 04:21:17', '2022-01-06 04:21:17'),
(4, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/s600x600/270612835_445130360441178_7790559225276983054_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=b9115d&_nc_ohc=FKzFq-32t30AX_Q8442&_nc_ht=scontent.fhan14-2.fna&oh=00_AT89uYyip6tCG7WNXEJpiLRCYIGo_IxREh5al7-Cq8IfxA&oe=61DA0D9E', 33, '2022-01-06 04:21:17', '2022-01-06 04:21:17'),
(5, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/270048994_445130350441179_2608318553304063686_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=b9115d&_nc_ohc=bq-2fqesvtIAX9aoLmp&_nc_ht=scontent.fhan14-1.fna&oh=00_AT8mVlD2WiJS0k6aFe9sFRxLXwsiIynq_aG5vaWd_KjVZw&oe=61DB9C8B', 33, '2022-01-06 04:21:17', '2022-01-06 04:21:17'),
(6, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/271176793_2865486377075247_1202254204861506268_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=b9115d&_nc_ohc=vzZzfbc6BLsAX836jRb&_nc_ht=scontent.fhan14-1.fna&oh=00_AT-fcl5YrY4RoOIi7XRAbe0i-J84gj2ABlgGQ1U9Wn0jcw&oe=61DDED73', 34, '2022-01-08 03:40:43', '2022-01-08 03:40:43'),
(7, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/s600x600/271135270_2865486357075249_3046835644147285644_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=b9115d&_nc_ohc=KANU1bPe58YAX-q5UBU&_nc_ht=scontent.fhan14-2.fna&oh=00_AT-RmvXAHBAwLwbkTBUN5sgcnTYH6d6e5_Ccg9Ue8n8quQ&oe=61DE0B65', 34, '2022-01-08 03:40:43', '2022-01-08 03:40:43'),
(8, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/p480x480/270842047_2865486397075245_4594875897203867351_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=b9115d&_nc_ohc=mMz5FONTquIAX_pp3nS&_nc_ht=scontent.fhan14-1.fna&oh=00_AT8jFeIP9la-VjOLlRssyiApOYTnjpP3_piZCym93vATdQ&oe=61DC97F0', 34, '2022-01-08 03:40:43', '2022-01-08 03:40:43'),
(9, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/271563805_2865486383741913_8287015690419498586_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=b9115d&_nc_ohc=CXOw2Y_msiYAX-E3PeN&_nc_ht=scontent.fhan14-1.fna&oh=00_AT_2VoBH7fAvhU7bKc3YFxgUACz5crIOGTRsK2AVL-q6Ag&oe=61DCBB87', 34, '2022-01-08 03:40:43', '2022-01-08 03:40:43'),
(10, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/p417x417/244734669_667066230994335_717954334224474763_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=b9115d&_nc_ohc=VhzG4563osQAX-dN6Ib&_nc_ht=scontent.fhan14-2.fna&oh=00_AT8kGaflCbLnJrs_PCAPVDUR3QVjBR36uHP3bQqosbA8iA&oe=61DD1AA9', 35, '2022-01-08 03:44:45', '2022-01-08 03:44:45'),
(11, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/271584543_667066244327667_4001536301172182911_n.jpg?_nc_cat=110&_nc_rgb565=1&ccb=1-5&_nc_sid=b9115d&_nc_ohc=xmaZvqcDLlIAX8vzsjT&_nc_ht=scontent.fhan14-1.fna&oh=00_AT_yyghnR18kcw6Hf3umn0S1xFC4N9Qz9nf869ViH19D6A&oe=61DDEE82', 35, '2022-01-08 03:44:45', '2022-01-08 03:44:45'),
(12, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/s600x600/271585972_667066214327670_552027614142847171_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=b9115d&_nc_ohc=ma9UiwKPtUcAX-AjP-_&_nc_ht=scontent.fhan14-1.fna&oh=00_AT8z-j5Tp194l8dm_OaR2PQF5vM_V-pFDj_miStjwYjKHA&oe=61DCED97', 35, '2022-01-08 03:44:45', '2022-01-08 03:44:45'),
(13, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_wc8PWaMN8Mx_M8iUDlsSOWPLfK3n2XAh5UQlrDPfU1S4J_gmV-QF2chPggK_IGYouF0&usqp=CAU', 37, '2022-01-09 01:02:08', '2022-01-09 01:02:08'),
(14, 'https://i.pinimg.com/236x/db/b3/61/dbb36157bfd6c0e6e0d038efead985ad.jpg', 38, '2022-01-09 01:53:01', '2022-01-09 01:53:01'),
(15, 'https://cf.shopee.vn/file/bad737cf09de02906c39bbfc9c1e259d', 39, '2022-01-09 02:05:14', '2022-01-09 02:05:14'),
(16, 'https://i.pinimg.com/236x/0c/91/34/0c91342127d153729cae0f36b96329e2.jpg', 40, '2022-01-09 02:10:48', '2022-01-09 02:10:48'),
(17, 'https://i.pinimg.com/236x/eb/a7/a3/eba7a36d8942196004dbcb5b17005934.jpg', 40, '2022-01-09 02:10:48', '2022-01-09 02:10:48'),
(18, 'https://i.pinimg.com/236x/4e/63/c1/4e63c1beae4c901636648e5daefbb2b7.jpg', 40, '2022-01-09 02:10:48', '2022-01-09 02:10:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, '9', '1', '2021-12-19 01:48:42', '2021-12-19 01:48:42'),
(2, '9', '2', '2021-12-19 01:48:42', '2021-12-19 01:48:42'),
(3, '9', '3', '2021-12-19 01:48:42', '2021-12-19 01:48:42'),
(4, '10', '3', '2021-12-19 01:50:20', '2021-12-19 01:50:20'),
(5, '11', '4', '2021-12-19 02:11:21', '2021-12-19 02:11:21'),
(6, '11', '2', '2021-12-19 02:11:21', '2021-12-19 02:11:21'),
(7, '11', '5', '2021-12-19 02:11:21', '2021-12-19 02:11:21'),
(8, '12', '6', '2021-12-20 08:21:02', '2021-12-20 08:21:02'),
(9, '14', '7', '2021-12-20 08:59:19', '2021-12-20 08:59:19'),
(10, '16', '8', '2021-12-20 09:01:46', '2021-12-20 09:01:46'),
(11, '21', '9', '2021-12-20 09:18:42', '2021-12-20 09:18:42'),
(12, '14', '10', '2021-12-22 08:20:51', '2021-12-22 08:20:51'),
(13, '22', '11', '2021-12-24 09:21:59', '2021-12-24 09:21:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_views`
--

CREATE TABLE `product_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_views`
--

INSERT INTO `product_views` (`id`, `user_id`, `product_id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 1, '32', '', '2022-01-05 07:56:16', '2022-01-05 07:56:16'),
(2, NULL, '32', '', '2022-01-05 07:57:26', '2022-01-05 07:57:26'),
(3, 1, '32', '', '2022-01-05 15:02:49', '2022-01-05 15:02:49'),
(4, 1, '33', '', '2022-01-06 04:23:18', '2022-01-06 04:23:18'),
(5, NULL, '33', '', '2022-01-07 03:18:00', '2022-01-07 03:18:00'),
(6, 1, '32', '', '2022-01-07 05:32:37', '2022-01-07 05:32:37'),
(7, 1, '32', '', '2022-01-07 05:32:59', '2022-01-07 05:32:59'),
(8, NULL, '32', '', '2022-01-07 13:03:21', '2022-01-07 13:03:21'),
(9, NULL, '31', '', '2022-01-08 03:00:49', '2022-01-08 03:00:49'),
(10, NULL, '32', '', '2022-01-08 03:01:04', '2022-01-08 03:01:04'),
(11, NULL, '31', '', '2022-01-08 03:01:12', '2022-01-08 03:01:12'),
(12, 1, '31', '1.54.202.32', '2022-01-08 03:30:32', '2022-01-08 03:30:32'),
(13, NULL, '33', '1.54.202.32', '2022-01-09 20:38:02', '2022-01-09 20:38:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'Quản trị hệ thống', NULL, NULL, NULL),
(2, 'guest', 'Khách hàng', NULL, NULL, NULL),
(3, 'developer', 'Phát triển hệ thống', NULL, NULL, NULL),
(4, 'content', 'Chỉnh sửa nội dung', NULL, NULL, NULL),
(5, 'mod', 'nguoi kiem duyệt nội dung', '2021-12-31 23:13:06', '2022-01-01 00:27:34', '2022-01-01 00:27:34'),
(6, 'superadmin', 'sieu người dùng', '2021-12-31 23:15:59', '2022-01-01 00:13:57', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 3, 4, NULL, NULL),
(3, 2, 2, NULL, NULL),
(4, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `config_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`, `type`) VALUES
(7, 'facebook_link', 'https://www.facebook.com', '2021-12-26 03:48:01', '2022-01-03 01:18:06', 'Text'),
(8, 'email', 'google@gmail.com', '2021-12-26 03:51:46', '2022-01-03 01:17:53', 'Text'),
(9, 'phone_contact', 'Cuộc sống dễ dàng với mua sắm online', '2021-12-26 03:52:34', '2022-01-09 04:20:21', 'Textarea'),
(10, 'twitter_link', 'https://twitter.com/?lang=vi', '2022-01-02 06:20:55', '2022-01-02 06:20:55', 'Text'),
(11, 'footer_information', '<p class=\"pull-left\">Copyright © 2021 Men\'s Fashion Inc. All rights reserved.</p>\r\n                <p class=\"pull-right\">Designed 2022</span></p>', '2022-01-02 06:23:27', '2022-01-09 04:14:59', 'Textarea');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image_link` text COLLATE utf8mb4_unicode_ci,
  `url_link` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `description`, `image_path`, `image_name`, `created_at`, `updated_at`, `deleted_at`, `image_link`, `url_link`) VALUES
(2, 'VietinBank', 'asdfghjkl', '/storage/slider/1/WA6wUpDvXpYCnR2rRaYe.png', 'Screenshot from 2021-12-05 21-59-30.png', '2021-12-25 07:57:26', '2021-12-25 10:15:04', '2021-12-25 10:15:04', NULL, NULL),
(3, 'smart city', 'ahihi', '/storage/slider/1/YLwjQ0jcB1EwTojJhujO.png', 'Screenshot from 2021-09-22 22-49-29.png', '2021-12-25 08:17:09', '2021-12-26 08:33:24', '2021-12-26 08:33:24', NULL, NULL),
(4, '100% Responsive Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '/storage/slider/1/bDccbJ579dTXWngP49ZI.jpg', 'girl1.jpg', '2022-01-02 00:37:04', '2022-01-02 00:37:04', NULL, NULL, NULL),
(5, '2002 M76 67 kg', 'Cũng gọi là bằng cân nặng và chiều cao... Sao tôi mặc như c*c 🙂', NULL, 'girl2.jpg', '2022-01-02 00:37:38', '2022-01-07 05:08:18', NULL, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/p526x296/269511450_1125787728258855_306530897299848269_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=825194&_nc_ohc=cG06wj4cMT4AX_W1uW0&_nc_ht=scontent.fhan14-2.fna&oh=00_AT_kNgdpsVWe9zSo5GO3TVitae2pBlJFcrEdx0SUrJo7Mg&oe=61DC2D50', NULL),
(6, 'Ofits này ổn ko mn', 'Vẫn câu nói đó, ngóc cái đầu lên 🙂', NULL, 'girl3.jpg', '2022-01-02 00:38:03', '2022-01-07 05:03:57', NULL, 'https://scontent.fhan14-2.fna.fbcdn.net/v/t39.30808-6/p526x296/271212563_683480003090224_1710983695698018232_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=825194&_nc_ohc=IO5ZNwm5GWkAX-H_2RR&_nc_ht=scontent.fhan14-2.fna&oh=00_AT-bV0_OMxpywJKe_QX9E7ohRlf-10gst9vJbB34RaDSUQ&oe=61DCE407', NULL),
(7, '1m65 50kg một số phong cách mà mình yêu thích', 'Má da trắng mặc gì cũng đẹp chả bù cho t đen xì :((((', NULL, NULL, '2022-01-07 04:37:30', '2022-01-07 04:37:30', NULL, 'https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/p180x540/267915209_657764825382253_2976030211758969802_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=825194&_nc_ohc=I31pBejEAosAX8kfGQl&_nc_ht=scontent.fhan14-1.fna&oh=00_AT-XRLHe-2xoXhCmYBlbW8gI6eh-IMNJ6dT3mFzSYYzKlw&oe=61DBC67E', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'dep nam', '2021-12-19 01:48:42', '2021-12-19 01:48:42'),
(2, 'dep nam dep', '2021-12-19 01:48:42', '2021-12-19 01:48:42'),
(3, 'giay dep', '2021-12-19 01:48:42', '2021-12-19 01:48:42'),
(4, 'dep nam quai ngang', '2021-12-19 02:11:21', '2021-12-19 02:11:21'),
(5, 'dep nam nu', '2021-12-19 02:11:21', '2021-12-19 02:11:21'),
(6, 'rjdnfjk', '2021-12-20 08:21:02', '2021-12-20 08:21:02'),
(7, 'hej', '2021-12-20 08:59:19', '2021-12-20 08:59:19'),
(8, 'lkj', '2021-12-20 09:01:46', '2021-12-20 09:01:46'),
(9, 'fghjk', '2021-12-20 09:18:42', '2021-12-20 09:18:42'),
(10, 'ahihi', '2021-12-22 08:20:51', '2021-12-22 08:20:51'),
(11, 'ghj', '2021-12-24 09:21:59', '2021-12-24 09:21:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@admin.admin', NULL, '$2y$10$jKGrpgqwmcCcScz3XNj1lOpf5dHSUn9nHmfInShH2zXnnqurA6FXC', NULL, NULL, '2022-01-08 03:29:16', NULL),
(2, 'vietin', 'dev@dev.dev1', NULL, '$2y$10$K5k2/ZVRC2DSeo7gUDZcjeM4enFCYBbPMHyGIBFxFYH3YQ04RXjM.', NULL, '2021-12-29 09:14:03', '2021-12-30 09:24:40', NULL),
(3, 'ly tu trong', 'dev@dev.dev2', NULL, '$2y$10$aIMeccBTWEnlE1.52jZ9e.m//Q2tN5P/6YTY/WW1LIy6u3BE7peyi', NULL, '2021-12-29 09:19:43', '2021-12-30 09:42:27', '2021-12-30 09:42:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_image_links`
--
ALTER TABLE `product_image_links`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_views`
--
ALTER TABLE `product_views`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product_image_links`
--
ALTER TABLE `product_image_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_views`
--
ALTER TABLE `product_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
