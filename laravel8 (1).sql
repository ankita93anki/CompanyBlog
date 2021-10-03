-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 06:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_name`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Ankita Singh', 'Angular is an extended version Of AngularJS .This is a framework of Java Script library.', 'Learn one way to build applications with Angular and reuse your code and abilities to build apps for any deployment target. For web, mobile web, native mobile and native desktop.Achieve the maximum speed possible on the Web Platform today, and take it further, via Web Workers and server-side rendering. Angular puts you in control over scalability. Meet huge data requirements by building data models on RxJS, Immutable.js or another push-model.Build features quickly with simple, declarative templates. Extend the template language with your own components and use a wide array of existing components. Get immediate Angular-specific help and feedback with nearly every IDE and editor. All this comes together so you can focus on building amazing apps rather than trying to make the code work.', 'image/blogs/1707786527316424.jpg', '2021-08-11 03:25:49', '2021-09-20 07:33:23'),
(4, 'Ankita Singh', 'Nodejs is used for backend support', 'This is in contrast to today\'s more common concurrency model, in which OS threads are employed. Thread-based networking is relatively inefficient and very difficult to use. Furthermore, users of Node.js are free from worries of dead-locking the process, since there are no locks. Almost no function in Node.js directly performs I/O, so the process never blocks except when the I/O is performed using synchronous methods of Node.js standard library. Because nothing blocks, scalable systems are very reasonable to develop in Node.js.\r\n\r\nIf some of this language is unfamiliar, there is a full article on Blocking vs. Non-Blocking.\r\n\r\nNode.js is similar in design to, and influenced by, systems like Ruby\'s Event Machine and Python\'s Twisted. Node.js takes the event model a bit further. It presents an event loop as a runtime construct instead of as a library. In other systems, there is always a blocking call to start the event-loop. Typically, behavior is defined through callbacks at the beginning of a script, and at the end a server is started through a blocking call like EventMachine::run(). In Node.js, there is no such start-the-event-loop call. Node.js simply enters the event loop after executing the input script. Node.js exits the event loop when there are no more callbacks to perform. This behavior is like browser JavaScript — the event loop is hidden from the user.', 'image/blogs/1707791786328859.jpg', '2021-08-11 04:49:24', '2021-09-20 07:34:55'),
(5, 'Ankita Singh', 'Laravel is best php framework and these day has huge demand', 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details. Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more. Whether you are new to PHP or web frameworks or have years of experience, Laravel is a framework that can grow with you. We\'ll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can\'t wait to see what you build.', 'image/blogs/1707791929768449.jpg', '2021-08-11 04:51:41', '2021-09-20 07:38:10'),
(6, 'Ankita Singh', 'ReactJs is best java script library this is the huge demand in frontend development skills.', 'React makes it painless to create interactive UIs. Design simple views for each state in your application, and React will efficiently update and render just the right components when your data changes. Build encapsulated components that manage their own state, then compose them to make complex UIs. Since component logic is written in JavaScript instead of templates, you can easily pass rich data through your app and keep state out of the DOM.\r\nWe don’t make assumptions about the rest of your technology stack, so you can develop new features in React without rewriting existing code. React can also render on the server using Node and power mobile apps using React Native.', 'image/blogs/1707880266206975.jpg', '2021-08-12 04:15:46', '2021-09-20 07:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'myob', 'image/brand/1707247111318718.png', '2021-08-05 04:32:01', NULL),
(2, 'Lifegroup', 'image/brand/1707247130011264.png', '2021-08-05 04:32:19', NULL),
(3, 'Lilly', 'image/brand/1707247143202622.png', '2021-08-05 04:32:32', NULL),
(4, 'citrus', 'image/brand/1707247157385282.png', '2021-08-05 04:32:45', NULL),
(5, 'trustly', 'image/brand/1707247172930863.png', '2021-08-05 04:33:00', NULL),
(6, 'oldenroff', 'image/brand/1707247187635361.png', '2021-08-05 04:33:14', NULL),
(7, 'grabyo', 'image/brand/1707247220999828.png', '2021-08-05 04:33:46', NULL),
(19, 'group', 'image/brand/1707705203582164.png', '2021-08-07 09:42:34', '2021-08-10 05:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'info@example.com', '+1 5589 55488 55', 'A108 Adam Street\r\nNew York, NY 535022\r\nUnited States', '2021-08-06 01:44:59', '2021-08-10 05:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Ankita Singh', 'ankitasingh7639369@gmail.com', 'testing', 'test case1', '2021-08-10 05:58:22', NULL),
(5, 'Upasana Singh', 'upasanasingh7639@gmail.com', 'jjkjkljklj', 'jhkhkjh', '2021-08-10 05:58:39', NULL),
(6, 'Sandeep Singh', 'sandeepsingh9369@gmail.com', 'testing', 'test cases1', '2021-08-10 06:04:58', NULL),
(7, 'Illiana Dcrouz\'', 'illiana45dcruz@gmail.com', 'discussion of my business requirement', 'please help my problem', '2021-09-20 07:41:08', NULL),
(8, 'Ankita Singh', 'ankitasingh7639369@gmail.com', 'testing', 'test cases', '2021-09-26 05:20:37', NULL);

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum', 'ri-store-line', '2021-08-09 04:11:22', NULL),
(3, 'dolor Sitema', 'ri-bar-chart-box-line', '2021-08-09 04:12:03', NULL),
(4, 'Sed perspiciatis', 'ri-calendar-todo-line', '2021-08-09 04:14:03', NULL),
(5, 'Magni Dolores', 'ri-paint-brush-line', '2021-08-09 04:14:43', NULL),
(6, 'Nemo Enim', 'ri-database-2-line', '2021-08-09 04:15:18', NULL),
(7, 'Eiusmod Tempor', 'ri-gradienter-line', '2021-08-09 04:16:03', NULL),
(8, 'Midela Teren', 'ri-file-list-3-line', '2021-08-09 04:17:00', NULL),
(9, 'Pira Neve', 'ri-price-tag-2-line', '2021-08-09 04:17:44', NULL),
(10, 'Dirada Pack', 'ri-anchor-line', '2021-08-09 04:18:21', NULL),
(11, 'Moton Ideal', 'ri-disc-line', '2021-08-09 04:19:16', NULL),
(12, 'Verdo Park', 'ri-base-station-line', '2021-08-09 04:19:50', NULL),
(13, 'Flavor Nivelanda', 'ri-fingerprint-line', '2021-08-09 04:20:20', '2021-08-10 05:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_dis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_dis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `title`, `short_dis`, `long_dis`, `created_at`, `updated_at`) VALUES
(1, 'We Are Good Company', 'Mindfulness, Compassion, Awareness, and Resilience In The Workplace', 'We believe business is a force for social change and it starts with our behaviors at work. More mindfulness, compassion, awareness, and resilience in the workplace will lead to more thoughtful decisions, better relationships, more meaning, and more unlocking of unique human potential—and these are the types of changes that ripple out to improve people’s lives and the planet in general.\r\n\r\nABC Company’ tools and programs are designed to promote individual and group behavior change in a scalable way—helping organizations improve performance, employee engagement, and stress resilience, while reducing employment and healthcare costs.', '2021-08-05 04:16:42', '2021-09-19 10:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_services`
--

CREATE TABLE `home_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icoon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_services`
--

INSERT INTO `home_services` (`id`, `title`, `description`, `icoon`, `created_at`, `updated_at`) VALUES
(1, 'Application Maintenance', 'Undertakes 3rd party application maintenance, monitoring and improvements', 'bx bxl-dribbble', '2021-08-05 04:17:40', '2021-09-19 09:31:38'),
(2, 'Block Chain', 'Undertake services such as smart contract development/auditing etc.', 'bx bx-file', '2021-08-05 04:18:27', '2021-09-19 09:30:02'),
(3, 'Cloud Services', 'Guide clients to choose IaaS, PaaS and SaaS models for their unique requirements.', 'bx bx-tachometer', '2021-08-05 04:18:57', '2021-09-19 09:28:53'),
(4, 'API Development', 'Build easy to integrate, scalable, secure and well documented APIs for integration.', 'bx bx-layer', '2021-08-05 04:19:35', '2021-09-19 09:28:11'),
(5, 'Mobile Development', 'develops mobile apps for iPhone, iPad, Android devices.', 'bx bx-slideshow', '2021-08-05 04:20:14', '2021-09-19 09:26:32'),
(6, 'Web Development', 'pioneers in building any B2B, B2C platform solutions.', 'bx bx-tachometer', '2021-08-05 04:20:50', '2021-09-19 09:25:26');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2021_07_28_093650_create_sessions_table', 1),
(19, '2021_07_28_115015_create_categories_table', 1),
(20, '2021_07_30_121530_create_brands_table', 1),
(21, '2021_07_31_111003_create_multipics_table', 1),
(22, '2021_08_04_092014_create_sliders_table', 1),
(23, '2021_08_04_181840_create_home_abouts_table', 1),
(24, '2021_08_05_061722_create_home_services_table', 1),
(25, '2021_08_05_105105_create_contacts_table', 2),
(26, '2021_08_06_095712_create_contact_forms_table', 3),
(27, '2021_08_08_172005_create_teams_table', 4),
(28, '2021_08_08_192837_create_testis_table', 5),
(29, '2021_08_08_202807_create_features_table', 6),
(30, '2021_08_10_121415_create_blogs_table', 7),
(31, '2021_08_11_070714_add_userid_to_blogs_table', 8),
(32, '2021_08_11_071517_add_userid_to_blogs_table', 9),
(33, '2021_08_11_073030_remove_user_id_column_from_blogs', 10),
(34, '2021_08_11_074502_add_user_id_to_blogs_table', 11),
(35, '2021_08_11_094219_rename_user_id_in_users_table', 12),
(36, '2021_08_11_095646_change_user_name_type_in_blogs_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `multipics`
--

CREATE TABLE `multipics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multipics`
--

INSERT INTO `multipics` (`id`, `category`, `image`, `created_at`, `updated_at`) VALUES
(13, 'React', 'image/multi/1711343823600008.png', '2021-09-19 09:47:31', NULL),
(14, 'Angular', 'image/multi/1711343954313966.png', '2021-09-19 09:49:35', NULL),
(15, 'Express', 'image/multi/1711343967728762.png', '2021-09-19 09:49:48', NULL),
(16, 'Laravel', 'image/multi/1711343993879546.png', '2021-09-19 09:50:13', NULL),
(17, 'Node', 'image/multi/1711344015222837.png', '2021-09-19 09:50:33', NULL),
(18, 'php', 'image/multi/1711344029649027.png', '2021-09-19 09:50:47', NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('azG2hK1qbRaxyolUwDrs6HolWQpjFlfJ1oF0wWYC', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidEtZcEdnNWQyTFBjVFhJcEFvaFkzakQyVWFGamZsa01zaTlxOWl5eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zbGlkZXIvZWRpdC8zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFRVYzJzVk1TM2w1Tnc0Wlc1NWVpOE9WdFp6OE0yOVZoLzBqdlVTVHo5eWVCQzdtczNFQVZPIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRUVWMyc1ZNUzNsNU53NFpXNTVlaThPVnRaejhNMjlWaC8wanZVU1R6OXllQkM3bXMzRUFWTyI7fQ==', 1632666324),
('ExZAAGyn1iPeBkEqUeh5c8WFIhAKStIL6y4n0EUM', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUhkZmM3cUdiY1U5ZEVtZDFlYTc2b3NQb0xSVERVaGNWTDVTc0dXNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvYmxvZy9wdWJsaWMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1632666180),
('m3Mew8dLP2Yix81FNYp7wEkRoTibjDf1GeGF4lwi', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicGZDOWpUcGRXa0lQaHV3b2x0UU5QMGZFa3RFS2NCRjM0eHJFS01neCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkVFVjMnNWTVMzbDVOdzRaVzU1ZWk4T1Z0Wno4TTI5VmgvMGp2VVNUejl5ZUJDN21zM0VBVk8iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFRVYzJzVk1TM2w1Tnc0Wlc1NWVpOE9WdFp6OE0yOVZoLzBqdlVTVHo5eWVCQzdtczNFQVZPIjt9', 1632993387),
('mZCEKrKfUB8OJK0Nw6IkvjqDkCdSRTlmIdwJ3Hnb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnM3d3FqNDlhSVlNNHczSVB3T2Nlb0dqZ2F5U2dNc1VGWjBWSG16UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1632941556),
('r9QfQktsT6czOXn3ah03vX9dNvw9loSRlG044M1z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYk1uMldwTW5uZ09xRXJtVGdDY1Z5cVhUaTh4N3Y4T2wyeVRiN3pHSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1632653437),
('ytgnps5mfCuYdrySDscIbq4klWeeJxxZx9OQhakt', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'YTo3OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6Im40bllYMWxaMktSdGFaQ1NOQm92cE45dkJuM21TVVNIamkwczdyeXQiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRadVZwUnp0Uy9odjN0YlEwQUhOdld1R3p2SlVtaktpMTcwZUhabHdUN1l5Rm1FWjkuNFZ3YSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWnVWcFJ6dFMvaHYzdGJRMEFITnZXdUd6dkpVbWpLaTE3MGVIWmx3VDdZeUZtRVo5LjRWd2EiO30=', 1632143499);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Extending the capabilities of your WordPress site', 'After having worked on 1500+ projects we’ve perfected the skill of seamlessly extending the functionality of your system. Want to build a new plugin? Or overhaul an existing one? We can help you build a reliable solution while saving you time and money.', 'image/slider/1707245964171592.jpg', '2021-08-05 04:13:48', '2021-09-19 09:06:48'),
(2, 'For your eCommerce Business', 'Whether you want to add custom functionality, build a high-traffic eCommerce site, or develop high-quality Woo Commerce plugins and themes - we understand your business needs and goals to come up with the ideal solution.', 'image/slider/1707246012167376.jpg', '2021-08-05 04:14:34', '2021-09-19 09:06:09'),
(3, 'For your eLearning Business', 'Tap into our complete range of Learn Dash services and leverage our expertise as the #1 recommended Learn Dash partner. With 8+ years of experience, we’ve mastered the art of creating learning experiences that your students want.', 'image/slider/1707703555814043.jpg', '2021-08-05 04:15:17', '2021-09-19 09:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `post`, `created_at`, `updated_at`) VALUES
(3, 'Walter White', 'image/team/1707598394571640.jpg', 'Chief Executive Officer', '2021-08-09 01:35:32', NULL),
(4, 'Sarah Johnson', 'image/team/1707598445398294.jpg', 'Product Manager', '2021-08-09 01:36:20', NULL),
(5, 'William Anderson', 'image/team/1707598637527610.jpg', 'CTO', '2021-08-09 01:39:23', NULL),
(6, 'Amandaa Jepson', 'image/team/1707605032084269.jpg', 'Accountant', '2021-08-09 01:40:29', '2021-08-09 03:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `testis`
--

CREATE TABLE `testis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testis`
--

INSERT INTO `testis` (`id`, `name`, `position`, `image`, `des`, `created_at`, `updated_at`) VALUES
(1, 'Saara Wilsson', 'CEO,Morgan', 'image/testi/1707557465963100.jpg', 'My business clients and customers is satisfied because of ABC Co. service and 24/7 support.', '2021-08-08 14:44:59', '2021-09-19 11:06:23'),
(2, 'Saul Godmen', 'CEO & Founder, DH Labs', 'image/testi/1707601814087271.jpg', 'I am very thankful to ABC Co. because my business is running very smoothly and my revenue has extended more than previous year.', '2021-08-08 14:49:47', '2021-09-19 11:03:14'),
(4, 'Jena Karlis', 'CEO , QuickSell', 'image/testi/1707604670409608.jpg', 'ABC Company know very well how to fulfil customer\'s wants of Quick Sell .I am really thankful to Quick Sell.', '2021-08-09 03:15:16', '2021-09-19 10:58:16'),
(5, 'Matt Brandonn', 'Owner, UCertify', 'image/testi/1707604734930114.jpg', 'The team of ABC Co. takes a personal interest in making sure we succeed together as a team!', '2021-08-09 03:16:18', '2021-09-19 10:52:47'),
(6, 'John Larson', 'Lead Developer, Digital Product Studio', 'image/testi/1707604823572432.jpg', 'They do quality work, are very responsive, and are great to collaborate with. I would highly recommend them.', '2021-08-09 03:17:42', '2021-09-19 10:49:03'),
(7, 'Emily Harison', 'CEO, HashLearner', 'image/testi/1707604978615623.jpg', 'ABC Co. understands what HashLearner users want, and are passionate about helping their customers succeed.', '2021-08-09 03:20:10', '2021-09-19 10:50:04');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Ankita Singh', 'asingh123@gmail.com', NULL, '$2y$10$7Y8hxFgvFJyl/5aRnNYrhu6PkOf6ktbgiHuiHLmKT5XQcq0v.clha', NULL, NULL, NULL, NULL, NULL, '2021-08-05 04:11:08', '2021-08-05 04:11:08'),
(2, 'Ankita Singh', 'ankitasingh7639369@gmail.com', NULL, '$2y$10$ZuVpRztS/hv3tbQ0AHNvWuGzvJUmjKi170eHZlwT7YyFmEZ9.4Vwa', NULL, NULL, NULL, NULL, 'image/profile/1707438108216066.jpg', '2021-08-06 01:42:25', '2021-08-07 07:07:50'),
(3, 'Upasana Singh', 'singhpsandeep777@gmail.com', NULL, '$2y$10$zJ8Ik1z3dk.xWJLfeERzaeVz5eGmwSUtNq4QNIfcEVvX8JMvCQOP6', NULL, NULL, NULL, NULL, NULL, '2021-08-11 05:55:28', '2021-08-11 05:55:28'),
(4, 'Ram Vijay', 'mcaramanand@gmail.com', NULL, '$2y$10$TUc2sVMS3l5Nw4ZW55ei8OVtZz8M29Vh/0jvUSTz9yeBC7ms3EAVO', NULL, NULL, NULL, NULL, NULL, '2021-09-20 07:05:05', '2021-09-20 07:05:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_abouts`
--
ALTER TABLE `home_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_services`
--
ALTER TABLE `home_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipics`
--
ALTER TABLE `multipics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testis`
--
ALTER TABLE `testis`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home_abouts`
--
ALTER TABLE `home_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_services`
--
ALTER TABLE `home_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `multipics`
--
ALTER TABLE `multipics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testis`
--
ALTER TABLE `testis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
