-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2024 at 01:38 PM
-- Server version: 8.0.39-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` bigint UNSIGNED NOT NULL,
  `provincesId` bigint UNSIGNED NOT NULL,
  `cityId` bigint UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `titleFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seoDescription` text COLLATE utf8mb4_unicode_ci,
  `seoKeyboard` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longDescriptionFa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `longDescriptionEn` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescriptionFa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescriptionEn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `titleFa`, `titleEn`, `slug`, `seoDescription`, `seoKeyboard`, `image`, `longDescriptionFa`, `longDescriptionEn`, `shortDescriptionFa`, `shortDescriptionEn`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'زیباترین داستان‌های شاهنامه', 'زیباترین داستان‌های شاهنامه', 'maarf-z-b-tr-n-d-st-n-h-sh-hn-mh', 'شاهنامه', 'شاهنامه', 'http://127.0.0.1:8000/blogImage/879331725980136.webp', 'می‌شود با اطمینان گفت حتی یک ایرانی هم پیدا نمی‌شود که آشنایی حداقلی با شاهنامه نداشته باشد. شاهنامه گنج ملی ما و یکی از مهم‌ترین ثروت‌های فرهنگی ایران است. اثری که از سال‌ها و قرن‌ها و سد قدرتمند زمان عبور کرده و حتی مرزهای جغرافیایی را هم درنوردیده است و می‌توان آن را شاهکاری جهانی دانست؛ شاهکاری که در کنار کتاب‌هایی مثل ایلیاد و اودیسه ایستاده و منتقدان سرتاسر جهان را به تحسین و ستایش واداشته است. در مورد دلیل اهمیت و شکوه شاهنامه می‌توان موارد زیادی را ذکر کرد؛ حفظ و زنده نگه داشتن تاریخ ایران و آن‌چه در زمان‌های دور بر این سرزمین گذشته، روایت حماسه‌ای تمام و کمال که خواننده را در خود غرق می‌کند، شاعرانگی بی‌بدیل فردوسی و قصه‌پردازی. قصه‌پردازی را شاید بتوان مهم‌ترین دلیل جهانی شدن شاهنامه دانست. شاهنامه پر از داستان‌های بی‌بدیل است، داستان‌هایی که فارغ از اهمیت تاریخی و ملی‌شان، شخصیت‌پردازی، زاویه‌دید و درون‌مایه‌های بی‌نظیری دارند و هر خواننده‌ای را مسحور می‌کنند. در این یادداشت می‌خواهیم از زیباترین داستان‌های شاهنامه بگوییم', 'می‌شود با اطمینان گفت حتی یک ایرانی هم پیدا نمی‌شود که آشنایی حداقلی با شاهنامه نداشته باشد. شاهنامه گنج ملی ما و یکی از مهم‌ترین ثروت‌های فرهنگی ایران است. اثری که از سال‌ها و قرن‌ها و سد قدرتمند زمان عبور کرده و حتی مرزهای جغرافیایی را هم درنوردیده است و می‌توان آن را شاهکاری جهانی دانست؛ شاهکاری که در کنار کتاب‌هایی مثل ایلیاد و اودیسه ایستاده و منتقدان سرتاسر جهان را به تحسین و ستایش واداشته است. در مورد دلیل اهمیت و شکوه شاهنامه می‌توان موارد زیادی را ذکر کرد؛ حفظ و زنده نگه داشتن تاریخ ایران و آن‌چه در زمان‌های دور بر این سرزمین گذشته، روایت حماسه‌ای تمام و کمال که خواننده را در خود غرق می‌کند، شاعرانگی بی‌بدیل فردوسی و قصه‌پردازی. قصه‌پردازی را شاید بتوان مهم‌ترین دلیل جهانی شدن شاهنامه دانست. شاهنامه پر از داستان‌های بی‌بدیل است، داستان‌هایی که فارغ از اهمیت تاریخی و ملی‌شان، شخصیت‌پردازی، زاویه‌دید و درون‌مایه‌های بی‌نظیری دارند و هر خواننده‌ای را مسحور می‌کنند. در این یادداشت می‌خواهیم از زیباترین داستان‌های شاهنامه بگوییم', 'می‌شود با اطمینان گفت حتی یک ایرانی هم پیدا نمی‌شود که آشنایی حداقلی با شاهنامه نداشته باشد', 'می‌شود با اطمینان گفت حتی یک ایرانی هم پیدا نمی‌شود که آشنایی حداقلی با شاهنامه نداشته باشد', NULL, '2024-09-10 11:25:36', '2024-09-10 11:35:06'),
(2, 'بهترین آثار کلاسیک که باید بخوانید', 'بهترین آثار کلاسیک که باید بخوانید', 'bhtr-n-th-r-l-s-h-b-d-bkho-n-d', 'بهترین', 'بهترین', 'http://127.0.0.1:8000/blogImage/837661725980226.webp', 'در جهان ادبیات، آثار کلاسیک همواره جایگاه ویژه‌ای داشته‌اند. این دسته از آثار، نه‌تنها سرمشق‌هایی هنری و ادبی، بلکه آینه‌هایی از جامعه و تاریخ بشریت نیز محسوب می‌شوند. آثار کلاسیک از حیث اثرگذاری نیز اهمیت بسزایی دارند، زیرا بسیاری از آن‌ها توانسته‌اند بر سلایق و ذهنیت انسان‌های متعددی آن هم به شکلی چشم‌گیر و عمیق اثر بگذارند.\r\n\r\nزمانی که از آثار برجسته‌ی کلاسیک در ادبیات جهان صحبت می‌کنیم، معمولا با شخصیت‌های جذاب، دستاوردهای مختلف انسانی، مبارزات اخلاقی و پرسش‌هایی اساسی در باب ماهیت وجودی انسان مواجه می‌شویم. یکی دیگر از نکات جذاب این آثار، آن است که در فهرست بلند بالای بهترین کتاب‌های کلاسیک، آثاری از سراسر جهان به چشم می‌خورند، از فرانسه تا روسیه و از انگلستان تا آمریکا. این موضوع، نشان می‌دهد که آثار کلاسیک برجسته، تاکنون به زبان‌های متعددی تولید شده‌اند، اما با گذشت زمان، نه تنها رونق خود را حفظ کرده‌اند، بلکه در سراسر جهان نیز بسیار پرطرفدار بوده‌اند.\r\n\r\nدر ادامه‌ی این یادداشت از وبلاگ طاقچه قصد داریم شماری از بهترین کتاب‌های کلاسیک جهان را این لیست معرفی کنیم، بنابراین اگر آماده‌ی سفری لذت‌بخش به دنیایی از شخصیت‌های بزرگ، داستان‌های پرماجرا و روایت‌هایی اثرگذار هستید، این مطلب را از دست ندهید!', 'در جهان ادبیات، آثار کلاسیک همواره جایگاه ویژه‌ای داشته‌اند. این دسته از آثار، نه‌تنها سرمشق‌هایی هنری و ادبی، بلکه آینه‌هایی از جامعه و تاریخ بشریت نیز محسوب می‌شوند. آثار کلاسیک از حیث اثرگذاری نیز اهمیت بسزایی دارند، زیرا بسیاری از آن‌ها توانسته‌اند بر سلایق و ذهنیت انسان‌های متعددی آن هم به شکلی چشم‌گیر و عمیق اثر بگذارند.\r\n\r\nزمانی که از آثار برجسته‌ی کلاسیک در ادبیات جهان صحبت می‌کنیم، معمولا با شخصیت‌های جذاب، دستاوردهای مختلف انسانی، مبارزات اخلاقی و پرسش‌هایی اساسی در باب ماهیت وجودی انسان مواجه می‌شویم. یکی دیگر از نکات جذاب این آثار، آن است که در فهرست بلند بالای بهترین کتاب‌های کلاسیک، آثاری از سراسر جهان به چشم می‌خورند، از فرانسه تا روسیه و از انگلستان تا آمریکا. این موضوع، نشان می‌دهد که آثار کلاسیک برجسته، تاکنون به زبان‌های متعددی تولید شده‌اند، اما با گذشت زمان، نه تنها رونق خود را حفظ کرده‌اند، بلکه در سراسر جهان نیز بسیار پرطرفدار بوده‌اند.\r\n\r\nدر ادامه‌ی این یادداشت از وبلاگ طاقچه قصد داریم شماری از بهترین کتاب‌های کلاسیک جهان را این لیست معرفی کنیم، بنابراین اگر آماده‌ی سفری لذت‌بخش به دنیایی از شخصیت‌های بزرگ، داستان‌های پرماجرا و روایت‌هایی اثرگذار هستید، این مطلب را از دست ندهید!', 'در جهان ادبیات، آثار کلاسیک همواره جایگاه ویژه‌ای داشته‌اند. این دسته از آثار، نه‌تنها سرمشق‌هایی هنری', 'در جهان ادبیات، آثار کلاسیک همواره جایگاه ویژه‌ای داشته‌اند. این دسته از آثار، نه‌تنها سرمشق‌هایی هنری', NULL, '2024-09-10 11:27:06', '2024-09-10 11:34:24'),
(3, 'معرفی رمان‌های ایرانی پرطرفدار', 'معرفی رمان‌های ایرانی پرطرفدار', 'maarf-rm-n-h-r-n-rtrfd-r', 'معرفی رمان', 'رمان', 'http://127.0.0.1:8000/blogImage/281121725980274.webp', 'رمان‌ها تجربه‌های دلچسبی هستند که ترکیبشان با یک فنجان چای برای شب‌های طولانی پاییز، معجزه می‌کند. گاهی اوقات رمان‌های خارجی می‌توانند لذت، فراغ بال و آرامش را به ما هدیه کنند و گاهی اوقات هم، رمان‌های ایرانی. انتخاب از میان رمان‌های ایرانی ممکن است برای برخی از خوانندگان رمان و علاقه‌مندان به ادبیات سخت باشد. در این یادداشت وبلاگ طاقچه به سراغ رمان های پرطرفدار ایرانی رفته‌ایم تا راه را برای علاقه‌مندان به رمان‌های ایرانی، کمی آسان کنیم. این رمان‌ها را از میان کتاب‌های پرفروش طاقچه انتخاب کرده‌ایم.', 'رمان‌ها تجربه‌های دلچسبی هستند که ترکیبشان با یک فنجان چای برای شب‌های طولانی پاییز، معجزه می‌کند. گاهی اوقات رمان‌های خارجی می‌توانند لذت، فراغ بال و آرامش را به ما هدیه کنند و گاهی اوقات هم، رمان‌های ایرانی. انتخاب از میان رمان‌های ایرانی ممکن است برای برخی از خوانندگان رمان و علاقه‌مندان به ادبیات سخت باشد. در این یادداشت وبلاگ طاقچه به سراغ رمان های پرطرفدار ایرانی رفته‌ایم تا راه را برای علاقه‌مندان به رمان‌های ایرانی، کمی آسان کنیم. این رمان‌ها را از میان کتاب‌های پرفروش طاقچه انتخاب کرده‌ایم.', 'رمان‌ها تجربه‌های دلچسبی هستند که ترکیبشان با یک فنجان چای برای شب‌های طولانی پاییز، معجزه می‌کند', 'رمان‌ها تجربه‌های دلچسبی هستند که ترکیبشان با یک فنجان چای برای شب‌های طولانی پاییز، معجزه می‌کند', NULL, '2024-09-10 11:27:54', '2024-09-10 11:27:54');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `book_id` bigint NOT NULL,
  `quantity` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `titleFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seoDescription` text COLLATE utf8mb4_unicode_ci,
  `seoKeyboard` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `titleFa`, `titleEn`, `slug`, `image`, `seoDescription`, `seoKeyboard`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'کتاب', 'saaat', 'کتاب', 'http://127.0.0.1:8000/Category/791481725906187.png', 'dsfsd', NULL, NULL, '2024-09-09 14:53:07', '2024-09-09 14:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `titleFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincesId` bigint UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `rating` int NOT NULL,
  `adminDescription` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `titleFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionFa` text COLLATE utf8mb4_unicode_ci,
  `descriptionEn` text COLLATE utf8mb4_unicode_ci,
  `seoDescription` text COLLATE utf8mb4_unicode_ci,
  `seoKeyboard` text COLLATE utf8mb4_unicode_ci,
  `start_time` datetime NOT NULL,
  `end_time` datetime DEFAULT NULL,
  `organizer_id` bigint UNSIGNED NOT NULL,
  `locationFa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locationEn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'scheduled',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fair`
--

CREATE TABLE `fair` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_17_150536_create_provinces_table', 1),
(7, '2021_08_18_150709_create_cities_table', 1),
(8, '2021_08_19_150733_create_addresses_table', 1),
(9, '2021_11_12_195512_create_galleries_table', 1),
(10, '2021_11_12_203206_create_product_galleries_table', 1),
(11, '2024_07_09_052015_create_blogs_table', 1),
(12, '2024_07_09_052246_create_product_table', 1),
(13, '2024_07_09_052252_create_fair_table', 1),
(14, '2024_07_09_052415_create_sliders_table', 1),
(15, '2024_08_24_045748_create_carts_table', 1),
(16, '2024_08_24_045811_create_orders_table', 1),
(17, '2024_08_24_045821_create_coupons_table', 1),
(18, '2024_08_24_045836_create_comments_table', 1),
(19, '2024_08_24_050532_create_events_table', 1),
(20, '2024_08_24_050701_create_order_items_table', 1),
(21, '2024_08_24_050811_create_wishlists_table', 1),
(22, '2024_08_24_050945_create_registrations_table', 1),
(23, '2024_08_28_072309_create_roles_table', 1),
(24, '2024_09_02_060419_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `total_price` bigint NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 18170000, 'pending', NULL, '2024-09-12 02:34:53', '2024-09-13 08:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 2, 2, 2, 2898000, NULL, '2024-09-12 02:35:10', '2024-09-13 10:02:29'),
(5, 2, 3, 46, 18170000, NULL, '2024-09-13 08:13:52', '2024-09-13 10:02:29');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint UNSIGNED NOT NULL,
  `titleFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptionFa` text COLLATE utf8mb4_unicode_ci,
  `descriptionEn` text COLLATE utf8mb4_unicode_ci,
  `publisherFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisherEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` datetime NOT NULL,
  `categoryId` bigint NOT NULL,
  `priceBook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offPercent` int DEFAULT '0',
  `offPrice` int DEFAULT '0',
  `available` bigint NOT NULL DEFAULT '0',
  `pages` int DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fa',
  `seoDescription` text COLLATE utf8mb4_unicode_ci,
  `seoKeyboard` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `titleFa`, `titleEn`, `slug`, `authorFa`, `authorEn`, `descriptionFa`, `descriptionEn`, `publisherFa`, `publisherEn`, `cover_image`, `published_at`, `categoryId`, `priceBook`, `offPercent`, `offPrice`, `available`, `pages`, `isbn`, `language`, `seoDescription`, `seoKeyboard`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'کتاب تاریخ تلخ', 'کتاب تاریخ تلخ', 's-aat-sho', 'افشین', 'afshin', '<p>بسیبسیبیسب</p>', 'dsfdsgfsddd', 'افشین', 'afshin', 'http://127.0.0.1:8000/cover_image/894101725988138.png', '1403-06-27 00:00:00', 1, '575000', 18, 520000, 15, 180, '545465646', 'fa', 'یببیبب', 'یسبیسب', NULL, '2024-09-09 14:57:30', '2024-09-10 13:38:58'),
(2, 'کتاب هفت عادت مردمان موثر', 'sdsdsdf', 's-aat-lo-s', 'افشین', 'afshin', '<p>سیبسییسب</p>', 'sfdf', 'افشین', 'afshin', 'http://127.0.0.1:8000/cover_image/700361725987715.png', '1403-06-03 00:00:00', 1, '580000', 12, 483000, 20, NULL, '2535353', 'fa', 'sdfdsf', 'لیی', NULL, '2024-09-09 17:53:40', '2024-09-10 13:31:55'),
(3, 'کتاب  هملت', 'dgddf', 's-aat-kd-m', 'افشین', 'afshin', '<p>لبذبیی</p>', 'sdfdsfsdf', 'افشین', 'afshin', 'http://127.0.0.1:8000/cover_image/256301725987991.png', '1403-06-18 00:00:00', 1, '530000', 33, 395000, 0, NULL, '5345345345', 'fa', 'fdsfds', 'لیی', NULL, '2024-09-09 17:55:22', '2024-09-10 13:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `productId` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `productId`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://127.0.0.1:8000/productGallery/501951725906450.jpg', '2024-09-09 14:57:30', '2024-09-09 14:57:30'),
(2, 1, 'http://127.0.0.1:8000/productGallery/254041725906450.jpg', '2024-09-09 14:57:30', '2024-09-09 14:57:30'),
(3, 2, 'http://127.0.0.1:8000/productGallery/820231725917020.jpg', '2024-09-09 17:53:40', '2024-09-09 17:53:40'),
(4, 2, 'http://127.0.0.1:8000/productGallery/246041725917020.jpg', '2024-09-09 17:53:40', '2024-09-09 17:53:40'),
(5, 3, 'http://127.0.0.1:8000/productGallery/634491725917122.jpg', '2024-09-09 17:55:22', '2024-09-09 17:55:22'),
(6, 3, 'http://127.0.0.1:8000/productGallery/258781725917122.jpg', '2024-09-09 17:55:22', '2024-09-09 17:55:22'),
(7, 3, 'http://127.0.0.1:8000/productGallery/385031725917122.jpg', '2024-09-09 17:55:22', '2024-09-09 17:55:22'),
(8, 1, 'http://127.0.0.1:8000/productGallery/342531725985825.jpg', '2024-09-10 13:00:25', '2024-09-10 13:00:25'),
(9, 2, 'http://127.0.0.1:8000/productGallery/495901725987554.webp', '2024-09-10 13:29:14', '2024-09-10 13:29:14'),
(10, 2, 'http://127.0.0.1:8000/productGallery/316971725987715.png', '2024-09-10 13:31:56', '2024-09-10 13:31:56'),
(11, 3, 'http://127.0.0.1:8000/productGallery/943561725987991.png', '2024-09-10 13:36:31', '2024-09-10 13:36:31'),
(12, 1, 'http://127.0.0.1:8000/productGallery/748171725988138.png', '2024-09-10 13:38:58', '2024-09-10 13:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint UNSIGNED NOT NULL,
  `titleFa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titleEn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint UNSIGNED NOT NULL,
  `event_id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users` int NOT NULL,
  `groups` int NOT NULL,
  `product` int NOT NULL,
  `slider` int NOT NULL,
  `role` int NOT NULL,
  `blog` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'http://127.0.0.1:8000/slider/810551725986343.jpg', NULL, NULL, '2024-09-10 11:55:49', '2024-09-10 16:46:06'),
(2, 'http://127.0.0.1:8000/slider/913631725986328.jpg', NULL, '2024-09-10 16:46:08', '2024-09-10 12:03:40', '2024-09-10 16:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `mobile`, `code`, `status`, `IsAdmin`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'افشین', 'طاهری', '09115135521', '32985', 'فعال', 0, NULL, 'C447X1F9RvjPrXBxqhmn7ijghL4hzYmc8McKtLkn7byLt9BkI99PwDAbfFVt', '2024-09-09 02:40:51', '2024-09-09 02:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `book_id` bigint NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_userid_foreign` (`userId`),
  ADD KEY `addresses_provincesid_foreign` (`provincesId`),
  ADD KEY `addresses_cityid_foreign` (`cityId`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_provincesid_foreign` (`provincesId`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fair`
--
ALTER TABLE `fair`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_isbn_unique` (`isbn`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`mobile`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fair`
--
ALTER TABLE `fair`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_cityid_foreign` FOREIGN KEY (`cityId`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_provincesid_foreign` FOREIGN KEY (`provincesId`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `addresses_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_provincesid_foreign` FOREIGN KEY (`provincesId`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
