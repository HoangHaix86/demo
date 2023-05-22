-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for hotel_nha_trang
DROP DATABASE IF EXISTS `hotel_nha_trang`;
CREATE DATABASE IF NOT EXISTS `hotel_nha_trang` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `hotel_nha_trang`;

-- Dumping structure for table hotel_nha_trang.accommodations
DROP TABLE IF EXISTS `accommodations`;
CREATE TABLE IF NOT EXISTS `accommodations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.accommodations: ~3 rows (approximately)
DELETE FROM `accommodations`;
INSERT INTO `accommodations` (`id`, `title`, `slug`, `room_number`, `area`, `bed_size`, `address`, `content`, `images`, `created_at`, `updated_at`) VALUES
	(1, 'Phòng VIP 001 Updated', 'phong-vip-001-updated', 'A001', 'A001', '100m2', 'Nha Trang 001', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '["images\\/pFSlkfzvx4UkwKJUTKNurdmNiVieRDy5YtQNp0Ln.jpg","images\\/Z442axUiqnU7rVSW8fawlOI2teW9Wk7WhnBjjPeY.jpg","images\\/5mtIXwVpz9aug7wG49odvjpXZD2C6gLzKbG7h3Ze.jpg"]', '2023-05-16 02:53:11', '2023-05-16 02:56:00'),
	(2, 'Phòng VIP Tổng Thống', 'phong-vip-tong-thong', '999', '999', '100m2', 'Nha Trang 999', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '["images\\/vbVhrY9gntHZBoWwBdLU4qGxZePE0Mi8qYlMDDzy.jpg","images\\/DjI5JWiAPDaJXY94laS1vil4oyMnVAP7xtAKrj7G.jpg","images\\/Q94YqtLlMu0wmaCFtLUReig6W9gv2lWeObUWZYaJ.jpg"]', '2023-05-16 02:53:47', '2023-05-16 02:53:47'),
	(3, 'Phòng Cặp đôi', 'phong-cap-doi', 'A003', 'A003', '9m2', 'Nha Trang 004', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '["images\\/YfBg4Jp2j0gsolcHlw5fQdMY6BkPTqqiwIhNKb4t.jpg","images\\/LOMyy0YYJsSAcVraLLBfVU5FbP33N2jRkTnkbUkN.jpg","images\\/cDNcIg5PEVGl9vPrswZN4k7bLVye9eckO7ptzJGG.jpg"]', '2023-05-16 02:54:27', '2023-05-16 02:54:27');

-- Dumping structure for table hotel_nha_trang.explores
DROP TABLE IF EXISTS `explores`;
CREATE TABLE IF NOT EXISTS `explores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.explores: ~2 rows (approximately)
DELETE FROM `explores`;
INSERT INTO `explores` (`id`, `title`, `slug`, `thumbnail`, `content`, `images`, `created_at`, `updated_at`) VALUES
	(1, 'Khám phá Nha Trang 1', 'kham-pha-nha-trang-1', 'images/TwVBxZOA7BrAjp0deh0LODCiOHM7KvIvXq2mT2hP.jpg', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '[]', '2023-05-16 03:04:03', '2023-05-16 03:04:03'),
	(2, 'Khám phá Nha Trang 2', 'kham-pha-nha-trang-2', 'images/9tUEL04vvJ3Sg0JtzeWhuWYOsJ3p9rLWsmqK2SFP.jpg', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '[]', '2023-05-16 03:04:20', '2023-05-16 03:04:20');

-- Dumping structure for table hotel_nha_trang.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table hotel_nha_trang.galleries
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.galleries: ~11 rows (approximately)
DELETE FROM `galleries`;
INSERT INTO `galleries` (`id`, `title`, `path`, `created_at`, `updated_at`) VALUES
	(1, 'Vr4xfmni8B8FrBdheRbBTu4JulQrjUXoGIHrPyI3', 'gallery/Vr4xfmni8B8FrBdheRbBTu4JulQrjUXoGIHrPyI3.jpg', '2023-05-16 02:48:28', '2023-05-16 02:48:28'),
	(2, 'JxDoeY6Ep9qFRYrSxAtN9lREjdCAy4lZTOs8Yr59', 'gallery/JxDoeY6Ep9qFRYrSxAtN9lREjdCAy4lZTOs8Yr59.jpg', '2023-05-16 02:48:28', '2023-05-16 02:48:28'),
	(3, 'TIDjSvA3Dqf2eYQUN9EwV5vPgbBj9lFTxu4A9Pir', 'gallery/TIDjSvA3Dqf2eYQUN9EwV5vPgbBj9lFTxu4A9Pir.jpg', '2023-05-16 02:48:28', '2023-05-16 02:48:28'),
	(4, 'i1asmh3ClFMMyI2inoeRE1hnvxAZmsy9AV5BFacg', 'gallery/i1asmh3ClFMMyI2inoeRE1hnvxAZmsy9AV5BFacg.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(5, 'iym37TEZmp1pbOLtxHCViTWJHOqUSIPt5MA1sfcM', 'gallery/iym37TEZmp1pbOLtxHCViTWJHOqUSIPt5MA1sfcM.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(6, 'w4tgvFP6mNavuW5HbNXsEPgRuJ54K3XZ7lfsJyLR', 'gallery/w4tgvFP6mNavuW5HbNXsEPgRuJ54K3XZ7lfsJyLR.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(7, 'AdLWDa9byqz8RRmGSNizIZY9YT6hvqAEV1MbHFRt', 'gallery/AdLWDa9byqz8RRmGSNizIZY9YT6hvqAEV1MbHFRt.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(8, 'GqRMOJs1Q6KhIa47alI9UyLcJnNJUfQyPXVK42tZ', 'gallery/GqRMOJs1Q6KhIa47alI9UyLcJnNJUfQyPXVK42tZ.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(9, 'LYoW4XMbDgm3qYuYDQ3W5sNxjlXetn7CPgzbd0F4', 'gallery/LYoW4XMbDgm3qYuYDQ3W5sNxjlXetn7CPgzbd0F4.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(10, 'Ah6AtMpfxF7IcISIGVlvpkUFG0oq2NRGCdfVB8CP', 'gallery/Ah6AtMpfxF7IcISIGVlvpkUFG0oq2NRGCdfVB8CP.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29'),
	(11, '0lBVTmIBR2W32WTUS1NpHwvwMUHST3KpZxBbTKEh', 'gallery/0lBVTmIBR2W32WTUS1NpHwvwMUHST3KpZxBbTKEh.jpg', '2023-05-16 03:04:29', '2023-05-16 03:04:29');

-- Dumping structure for table hotel_nha_trang.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.migrations: ~0 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_05_10_145458_create_galleries_table', 1),
	(6, '2023_05_10_155349_create_explores_table', 1),
	(7, '2023_05_11_040715_create_promotions_table', 1),
	(8, '2023_05_11_044223_create_services_table', 1),
	(9, '2023_05_11_083352_create_accommodations_table', 1);

-- Dumping structure for table hotel_nha_trang.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;

-- Dumping structure for table hotel_nha_trang.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table hotel_nha_trang.promotions
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.promotions: ~2 rows (approximately)
DELETE FROM `promotions`;
INSERT INTO `promotions` (`id`, `title`, `slug`, `thumbnail`, `content`, `created_at`, `updated_at`) VALUES
	(1, 'Mua 1 tặng 1', 'mua-1-tang-1', 'images/THDK6x1NPjXFsnMBcOa9tFRO4yO5fPsOvlzkw8T2.jpg', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '2023-05-16 03:02:51', '2023-05-16 03:02:59'),
	(2, 'Mua 1 tặng 2 tính tiền 3', 'mua-1-tang-2-tinh-tien-3', 'images/Uk2ClMcnIQO4mnxLyfYVZzAVbSMxRnwWKVub4htF.jpg', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '2023-05-16 03:03:20', '2023-05-16 03:03:20');

-- Dumping structure for table hotel_nha_trang.services
DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.services: ~3 rows (approximately)
DELETE FROM `services`;
INSERT INTO `services` (`id`, `title`, `slug`, `content`, `images`, `created_at`, `updated_at`) VALUES
	(1, 'Nhà Hàng Updated', 'nha-hang-updated', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '["images\\/CvA606zqxf0r2e9uWrZS9iPV2GbJwhAmKEQM1DgC.jpg"]', '2023-05-16 02:56:32', '2023-05-16 02:57:15'),
	(2, 'Dành cho Cặp đôi', 'danh-cho-cap-doi', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '["images\\/IylgHKpBywD74HxCvGrIbzHuhRl0yEomFLZUMdhF.jpg"]', '2023-05-16 02:56:51', '2023-05-16 02:56:51'),
	(3, 'Nhà Hàng', 'nha-hang', '<p>Nha Trang, một thành phố tuyệt đẹp nằm bên bờ biển Đông Nam của Việt Nam, được biết đến như "thành phố biển xinh đẹp" và là một trong những điểm đến du lịch hàng đầu của quốc gia. Với bãi biển dài, cát trắng mịn và nước biển trong xanh, Nha Trang thu hút hàng triệu du khách từ khắp nơi trên thế giới.</p><p>Với khí hậu ôn hòa quanh năm, Nha Trang là một điểm đến lý tưởng để thư giãn và tận hưởng những ngày nghỉ tuyệt vời. Du khách có thể thả mình vào biển xanh, bơi lội, lướt ván, thực hiện các hoạt động thể thao nước mạo hiểm, hoặc đơn giản chỉ nằm dưới bóng dừa, tắm nắng và thư giãn. Có nhiều bãi biển nổi tiếng như Bãi Dài, Bãi Trường, Nha Trang cung cấp một loạt các dịch vụ du lịch và tiện nghi đáng chú ý, bao gồm các khu nghỉ dưỡng sang trọng, nhà hàng phục vụ các món ăn đa dạng và thực đơn hải sản tươi ngon.</p><p>Bên cạnh vẻ đẹp biển cả, Nha Trang còn có nhiều điểm tham quan và di tích lịch sử hấp dẫn. Chùa Long Sơn với tượng Phật bằng đá cao 24 mét là một điểm tham quan nổi tiếng, mang lại cảm giác yên bình và tôn nghiêm. Tháp Bà Ponagar, một công trình kiến trúc Chăm độc đáo, mang đậm nét văn hóa dân tộc, cũng là một điểm đến không thể bỏ qua. Ngoài ra, du khách có thể thăm Bảo tàng Nha Trang để tìm hiểu về lịch sử, văn hóa và truyền thống của vùng đất này.</p><p>Với sự phát triển đô thị nhanh chóng, Nha Trang cũng cung cấp một loạt các hoạt động giải trí và mua sắm. Du khách có thể tìm thấy các khu chợ địa phương để khám phá và mua các sản phẩm đặc sản, từ quần áo, phụ kiện đến các món ăn đường phố độc đáo. Bên cạnh đó, thành phố cò</p>', '["images\\/JwT1zBYZEYVTAMJaA3QlTgcMdn1Vh6DXBO8BEvmr.jpg"]', '2023-05-16 02:57:07', '2023-05-16 02:57:07');

-- Dumping structure for table hotel_nha_trang.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table hotel_nha_trang.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', '$2y$10$CsYHNVVSflPv7bIuTfkxiuUyWhWZo0iLAaBVALqOPn8/chmv2TF4u', NULL, '2023-05-16 02:42:09', '2023-05-16 02:42:09');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
