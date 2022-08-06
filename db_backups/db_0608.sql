-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-08-2022 a las 11:32:26
-- Versión del servidor: 5.7.38-41-log
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db3pjqn5ftoiai`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT '0',
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Patagonia Planet', 'admin@gmail.com', '99006500', 0, '1643562241logooo (1).png', '$2y$10$I8dOaXe388ePegQJKdOTwOJkSNEY0.yoKbnGp75K/klxGCbWBqoKq', 1, 'z4M4JscmcwSUp4ffn9S1FWIgfapQ3MzrHrUWBC6OCxGEXTCWR3uriWhO7ZvU', '2018-02-27 23:27:08', '2022-01-30 17:04:01'),
(7, 'arturo', 'ventas@patagoniaplanet.com', '99999999', 27, '1638815006Logotipo-Patagonia-Planet-2018_Vertical.png', '$2y$10$PhafnpXqf/tuhxqN.CHZ.eslb2ZE.P73JCnL8HS1oRgfw/.1gyzze', 1, NULL, '2021-12-06 18:23:26', '2022-05-10 18:32:56'),
(8, 'carlos', 'carlos_amc@live.com', '958979069', 1, '1655582307Sin nombre.png', '$2y$10$GQWTgxthIW1oQPFzNVYvOu3SCBfqmskP1.HGLYFSYNBakSeoBR06i', 1, NULL, '2022-06-18 19:58:27', '2022-06-18 19:58:27'),
(9, 'prueba', 'joseparra9797@gmail.com', '2323233', 1, '1658754104wp6621654.png', '$2y$10$4EWabQp1Ms4IT1d4rxEVzOUNNegraK5LObcJQnTKErM6OZZmI/OTS', 1, NULL, '2022-07-25 13:01:44', '2022-07-25 13:01:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_languages`
--

CREATE TABLE `admin_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT '0',
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtl` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admin_languages`
--

INSERT INTO `admin_languages` (`id`, `name`, `is_default`, `language`, `file`, `rtl`, `created_at`, `updated_at`) VALUES
(1, '1601275975Y3cbzcjF', 0, 'English', '1601275975Y3cbzcjF.json', 0, NULL, NULL),
(2, '16587907370vM7y9oc', 1, 'Español', '16587907370vM7y9oc.json', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user_conversations`
--

CREATE TABLE `admin_user_conversations` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `subject` varchar(191) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_user_conversations`
--

INSERT INTO `admin_user_conversations` (`id`, `admin_id`, `subject`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(13, NULL, 'Hi', 9, 'Hello', '2020-03-27 22:25:48', '2020-03-27 22:25:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user_messages`
--

CREATE TABLE `admin_user_messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_user_messages`
--

INSERT INTO `admin_user_messages` (`id`, `conversation_id`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(113, 13, 'Hello', 9, '2020-03-27 22:25:48', '2020-03-27 22:25:48'),
(114, 13, 'hIII', NULL, '2020-03-27 22:30:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attr_trems`
--

CREATE TABLE `attr_trems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_attr_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `attr_trems`
--

INSERT INTO `attr_trems` (`id`, `name`, `hotel_attr_id`, `created_at`, `updated_at`) VALUES
(34, 'Motels', 19, '2020-10-10 00:04:11', '2020-10-10 00:04:11'),
(35, 'Resorts', 19, '2020-10-10 00:04:19', '2020-10-10 00:04:19'),
(36, 'Lodges', 19, '2020-10-10 00:04:35', '2020-10-10 00:04:35'),
(40, 'Car hire', 18, '2020-10-10 00:08:23', '2020-10-10 00:08:23'),
(41, 'Bicycle hire', 18, '2020-10-10 00:08:34', '2020-10-10 00:08:34'),
(42, 'Flat Tv', 18, '2020-10-10 00:08:39', '2020-10-10 00:08:39'),
(44, 'Internet  Wifi', 18, '2020-10-10 00:09:03', '2020-10-10 00:09:03'),
(45, 'Coffee and tea', 18, '2020-10-10 00:09:09', '2020-10-10 00:09:09'),
(46, 'Havana Lobby bar', 16, '2020-10-10 00:15:19', '2020-10-10 00:15:19'),
(47, 'Fiesta Restaurant', 16, '2020-10-10 00:15:26', '2020-10-10 00:15:26'),
(48, 'Hotel transport services', 16, '2020-10-10 00:15:32', '2020-10-10 00:15:32'),
(49, 'Free luggage deposit', 16, '2020-10-10 00:15:38', '2020-10-10 00:15:38'),
(50, 'Laundry Services', 16, '2020-10-10 00:15:45', '2020-10-10 00:15:45'),
(51, 'Pets welcome', 16, '2020-10-10 00:15:54', '2020-10-10 00:15:54'),
(52, 'Tickets', 16, '2020-10-10 00:16:02', '2020-10-10 00:16:02'),
(54, 'Swimming Pool', 19, '2021-10-06 17:55:57', '2021-10-06 17:55:57'),
(55, 'Laundry and Dry', 18, '2021-10-06 18:01:02', '2021-10-06 18:01:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(191) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `description`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `tags`, `created_at`, `updated_at`) VALUES
(59, 14, 'Morning in the Northern sea', 'morning-in-the-northern-sea', 'The North Sea is a sea of the Atlantic Ocean between Great Britain (specifically England and Scotland), Norway, Jutland (in Denmark), Germany, the Netherlands, Belgium and Hauts-de-France (in France). An epeiric (or \"shelf\") sea on the European continental shelf, it connects to the ocean through the English Channel in the south and the Norwegian Sea in the north. It is more than 970 kilometres (600 mi) long and 580 kilometres (360 mi) wide, covering 570,000 square kilometres.', 'https://dev.geniusocean.net/booking-genius', 54, 1, 'sea,ocean,morning,northern sea', 'It has long hosted key north European shipping lanes as well as provided a major fishery. The coast is a popular destination for recreation and tourism in bordering countries, and more recently the sea has developed into a rich source of energy resources, including fossil fuels, wind, and early efforts in wave power.', 'sea,ocean,morning,northern sea', '2020-10-09 22:23:36', '2022-06-07 18:29:23'),
(60, 14, 'America  National Parks with Denver', 'america-national-parks-with-denver', 'The Datai Langkawi is situated on the northwest tip of the island Langkawi in Malaysia. Located in a 10 million-year-old rainforest and overlooking the tranquil Datai Bay, awarded by National Geographic as one of the Top 10 beaches worldwide, the iconic property enchants with mesmerizing nature, visionary architecture, luxury and bespoke service. It\'s 54 rooms, 40 villas, 12 suites and 14 beach villas offer views of the surrounding nature.', 'test', 53, 1, 'sea,park,beach', 'Leisure facilities include two swimming pools; an award-winning spa and Els Club Teluk Datai - the most scenic 18-hole golf course in Southeast Asia designed by the golf legend Ernie Els.', 'park,nature,space,tour,sea', '2020-10-09 22:24:13', '2022-06-07 18:29:23'),
(61, 15, 'Cueva del Milodón', 'cueva-del-milodon', '<div style=\"text-align: justify;\"><font face=\"times new roman\"><span style=\"color: rgb(32, 33, 36); font-size: 1rem;\">Si quieres hacer la visita por tu cuenta, desde Puerto Natales hay que tomar la ruta 9 dirección norte y luego de 17 kilometros</span><span style=\"color: rgb(32, 33, 36); font-size: 1rem;\">&nbsp;tomar el </span><span style=\"color: rgb(32, 33, 36); font-size: 1rem;\">desvio</span><font color=\"#202124\"><span style=\"font-size: 1rem;\">&nbsp;hacia la izquierda rumbo al Monumento Natural Cueva del Milodón </span>después<span style=\"font-size: 1rem;\">&nbsp;de 8 </span>kilometros<span style=\"font-size: 1rem;\">&nbsp;, a </span>través<span style=\"font-size: 1rem;\">&nbsp;de un camino asfaltado de llega a destino , en donde </span>podras<span style=\"font-size: 1rem;\">&nbsp;comprar tu entrada para su posterior ingreso</span></font></font><br></div>', 'https://www.conaf.cl/parques/monumento-natural-cueva-del-milodon/', 77, 1, NULL, NULL, 'cueva de milodon,patagonia', '2021-08-12 15:36:01', '2022-06-07 18:28:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `status`) VALUES
(13, 'Adventure Travel', 'adventure-travel', 1),
(14, 'que comer', 'que-comer', 1),
(15, 'a donde ir', 'donde-ir', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_attr_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_term_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_title` text COLLATE utf8mb4_unicode_ci,
  `faq_content` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passenger` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baggage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `door` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL DEFAULT '0',
  `main_price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `is_extra_price` int(11) NOT NULL DEFAULT '0',
  `extra_price_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_price_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_check` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `average_review` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cars`
--

INSERT INTO `cars` (`id`, `title`, `slug`, `car_attr_id`, `attr_term_id`, `description`, `video`, `is_feature`, `user_id`, `author_id`, `author_type`, `faq_title`, `faq_content`, `banner_image`, `passenger`, `gear`, `baggage`, `door`, `country_id`, `state_id`, `address`, `number`, `main_price`, `sale_price`, `discount`, `is_extra_price`, `extra_price_name`, `extra_price`, `extra_price_type`, `seo_check`, `meta_title`, `meta_tag`, `meta_description`, `status`, `created_at`, `updated_at`, `average_review`) VALUES
(6, 'Natales - Grey', 'natales-grey', '4,4,5,5', '18,19,13,14', 'jjjjjjjjjjjj', 'https://patagoniaplanet.agency/admin/car/create', 1, NULL, 1, 'Admin', 'jjjjjjjj', 'jjjjjjj', '98494325WhatsApp Image 2022-05-10 at 9.33.29 AM.jpeg', '22', '22', '2', '2', 12, 17, '44444444', 22222222, 100, 125, 20, 0, NULL, NULL, NULL, 'yes', '[{\"value\":\"22\"}]', '22', '22', 'publish', '2022-05-10 20:35:48', '2022-05-13 14:47:26', '0.00'),
(8, 'Natales - Base Torres', 'natales-base-torres', '4,5', '17,11', 'ruta larga de transporte por todo el tour', 'https://patagoniaplanet.agency/admin/car/create', 1, NULL, 1, 'Admin', '3333333333333', '3333333333333', '676914710patagonia.png', '1', '1', '1', '0', 12, 17, '1111111111111', 111111111, 43.75, 56.25, 1, 0, NULL, NULL, NULL, 'yes', '[{\"value\":\"22\"}]', '22', '222', 'publish', '2022-05-13 14:19:55', '2022-05-13 14:52:01', '0.00'),
(9, 'Natales - Sarmiento', 'natales-sarmiento', '4,5', '18,11', 'Prueba del contenido', 'https://patagoniaplanet.agency/admin/car/create', 1, NULL, 1, 'Admin', 'titulos', 'contenidos', '145900532patagonia.png', '2', '2', '2', '2', 12, 17, 'palo verde', 222222222, 2.5, 2.5, 1, 0, NULL, NULL, NULL, 'yes', '[{\"value\":\"22\"}]', '22', '22', 'publish', '2022-05-13 14:37:46', '2022-05-13 18:25:10', '0.00'),
(10, 'Aeropuerto - Torres del Paine', 'aeropuerto-torres-del-paine', '4,4,4,4', '17,18,19,20', 'visipaatgoniatar la&nbsp; visipaatgoniatar la&nbsp; visipaatgoniatar la&nbsp;&nbsp;', NULL, 1, NULL, 1, 'Admin', 'patagonia', 'patagonia', '1932022888patagonia.png', '2', '2', '2', '2', 12, 17, 'patagonia', 5, 43.75, 62.5, 20, 0, NULL, NULL, NULL, 'no', '', '', '', 'publish', '2022-05-13 18:28:25', '2022-05-18 21:36:06', '0.00'),
(11, 'Punta Arenas - Natales', 'punta-arenas-natales', '4,5', '23,11', 'Transporte Privado<div><br></div>', NULL, 0, NULL, 1, 'Admin', NULL, NULL, '295276669IMG_4713-Quick_Preset_2500x1667.jpg', '4', '4', '2', '4', 15, 18, 'Natales', 5, 62.5, 75, 15, 0, NULL, NULL, NULL, 'no', '', '', '', 'publish', '2022-05-18 21:44:08', '2022-05-23 18:48:55', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `car_attrs`
--

CREATE TABLE `car_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `car_attrs`
--

INSERT INTO `car_attrs` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Car Type', 'car-type', '2020-10-14 23:08:21', '2020-10-14 23:08:21'),
(5, 'Car Features', 'car-features', '2020-10-14 23:08:45', '2020-10-14 23:08:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `car_terms`
--

CREATE TABLE `car_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_attr_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `car_terms`
--

INSERT INTO `car_terms` (`id`, `name`, `car_attr_id`, `created_at`, `updated_at`) VALUES
(11, 'Airbag', 5, '2020-10-14 23:09:12', '2020-10-14 23:09:12'),
(12, 'FM Radio', 5, '2020-10-14 23:09:20', '2020-10-14 23:09:20'),
(13, 'Power Windows', 5, '2020-10-14 23:09:31', '2020-10-14 23:09:31'),
(14, 'Sensor', 5, '2020-10-14 23:09:38', '2020-10-14 23:09:38'),
(15, 'Speed Km', 5, '2020-10-14 23:09:46', '2020-10-14 23:09:46'),
(16, 'Steering Wheel', 5, '2020-10-14 23:09:56', '2020-10-14 23:09:56'),
(17, 'Convertibles', 4, '2020-10-14 23:10:20', '2020-10-14 23:10:20'),
(18, 'Coupes', 4, '2020-10-14 23:10:28', '2020-10-14 23:10:28'),
(19, 'Hatchbacks', 4, '2020-10-14 23:10:35', '2020-10-14 23:10:35'),
(20, 'Minivans', 4, '2020-10-14 23:10:42', '2020-10-14 23:10:42'),
(21, 'Sedan', 4, '2020-10-14 23:10:49', '2020-10-14 23:10:49'),
(22, 'SUVs', 4, '2020-10-14 23:10:55', '2020-10-14 23:10:55'),
(23, 'Trucks', 4, '2020-10-14 23:11:01', '2020-10-14 23:11:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `upper_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`id`, `title`, `country`, `slug`, `status`, `created_at`, `updated_at`, `upper_title`) VALUES
(12, 'ACTIVIDADES', 'ACTIVIDADES', 'actividades', 1, '2021-12-06 16:25:41', '2022-03-19 00:27:50', '¡Salidas diarias!'),
(13, 'NOVEDADES', 'NOVEDADES', 'novedades', 1, '2021-12-06 18:13:53', '2022-03-11 20:55:41', '¡Imperdibles!'),
(15, 'PROGRAMAS', 'PROGRAMAS', 'programas', 1, '2021-12-06 18:18:41', '2022-03-16 14:19:34', '¡Desde 3 días / 2 noches!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` int(191) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `sign`, `value`, `is_default`) VALUES
(1, '$', 'USD', 1, 0),
(17, 'CLP', '$', 800, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `email_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_subject` mediumtext COLLATE utf8_unicode_ci,
  `email_body` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_type`, `email_subject`, `email_body`, `status`) VALUES
(1, 'new_order', 'Tu orden ha sido realizada', '<p>Hola, {customer_name},<br>Numero de orden es {order_number}<br>Your order has been placed successfully</p>', 1),
(2, 'new_registration', 'Welcome To Booking Core', '<p>Hello {customer_name},<br>You have successfully registered to {website_title}, We wish you will have a wonderful experience using our service.</p><p>Thank You<br></p>', 1),
(4, 'subscription_warning', 'Your subscrption plan will end after five days', '<p>Hello {customer_name},<br>Your subscription plan duration will end after five days. Please renew your plan otherwise all of your products will be deactivated.</p><p>Thank You<br></p>', 1),
(5, 'user_verification', 'Request for verification.', '<p>Hello {customer_name},<br>You are requested verify your account. Please send us photo of your passport.</p><p>Thank You<br></p>', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `details`, `status`) VALUES
(19, '¿Cómo modifico, actualizo o anulo mi reserva?', '<div style=\"text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; text-align: start;\">Toda modificación, actualización, reprogramación o anulación deberá ser solicitada mediante correo electrónico a </span><span style=\"font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; text-align: start;\">info@patagoniaplanet.com</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; text-align: start;\">. La posibilidad de anulación sin costo estará siempre sujeta a las políticas de anulación del servicio, mientras que la posibilidad de reprogramar estará siempre sujeta a las política de reprogramación del servicio, así como a la disponibilidad en la nueva fecha solicitada.</span><br></div>', 0),
(20, '¿Cómo y cuando me llegara la confirmación de reserva?', '<div style=\"text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; text-align: start;\">Una vez realizado el pago, te llegará un correo automático de asunto “Itinerario sujeto a confirmación”, que contiene el resumen de tu compra y la confirmación del pago. Luego, te enviaremos un segundo correo de asunto “Itinerario confirmado”, con la confirmación de los servicios y todos los detalles e indicaciones para tu viaje. Este correo de confirmación se envía en un plazo de hasta 48 horas en el caso de tours y traslados y de hasta 7 días en el caso de programas, de acuerdo a disponibilidad de cupos, mínimo de pasajeros, condiciones climáticas u otras razones. Para reservas realizadas con menos de 48 horas de anticipación, el correo se envía hasta las 21:00 del día previo a la fecha solicitada.</span><br></div>', 0),
(21, '¿Cuales son sus métodos de pago?', '<div style=\"text-align: justify;\"><ul class=\"pl-6 mb-4 list-disc\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-right: 0px; margin-bottom: 1rem; margin-left: 0px; padding: 0px 0px 0px 1.5rem; list-style-position: initial; list-style-image: initial; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; text-align: start;\"><li class=\"mb-2\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px; font-weight: bolder;\">Flow, </span><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px;\">para pagos con tarjetas de créditos y debito en cualquier pais.</span></li><li class=\"mb-2\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px; font-weight: bolder;\">WebPay</span>,&nbsp;para pagos con tarjetas de crédito emitidas en cualquier país.</li><li class=\"mb-2\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px; font-weight: bolder;\">Redcompra</span>,&nbsp;para pagos con tarjetas de débito emitidas en Chile.</li><li class=\"mb-2\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px; font-weight: bolder;\">PayPal</span>,&nbsp;para pagos con tarjetas de crédito emitidas en cualquier país.</li><li class=\"mb-2\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px; font-weight: bolder;\">Mercado Pago</span>,&nbsp;para pagos con tarjetas de crédito emitidas en cualquier país y solo para reservas realizadas con al menos 72 horas de anticipación.</li><li class=\"mb-2\" style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px solid currentcolor; --tw-shadow:0 0 transparent; --tw-ring-inset:var(--tw-empty, ); --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 transparent; --tw-ring-shadow:0 0 transparent; margin: 0px; padding: 0px; font-weight: bolder;\">Transferencia bancaria en CLP</span>&nbsp;(pesos chilenos),&nbsp;solo desde cuentas bancarias chilenas y para reservas realizadas con al menos 48 horas de anticipación.</li></ul></div>', 0),
(22, '¿Cómo se realiza una reserva?', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Las reservas se pueden realizar directamente dentro del sitio web , en donde podrás ver disponibilidad y realizar el pago, previamente completando con tus datos de contacto, también recibimos compra presenciales en nuestras oficinas ubicadas en Manuel Bulnes 407, Puerto Natales..</span></div>', 0),
(23, '¿Qué ocurre si mi reserva no es confirmada?', '<div style=\"text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium;\">Si bien confirmamos la totalidad de las reservas recibidas, en caso de que no se pueda confirmar una reserva según lo solicitado, se ofrecerán como alternativas las fechas y/u horarios más cercanos disponibles, junto con la devolución total del pago en caso que el pasajero no quiera optar por las alternativas propuestas.</span></div>', 0),
(24, '¿Qué sucede si no me llega el correo de confirmación de reserva?', 'En este caso usted puede llamar a los teléfonos +56 962273316 y/o como ultima opción llamar al teléfono de emergencia +56 99006500.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favarites`
--

CREATE TABLE `favarites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `favarites`
--

INSERT INTO `favarites` (`id`, `user_id`, `data_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 33, 5, 'tour', '2022-02-14 23:56:32', NULL),
(5, 44, 12, 'tour', '2022-06-30 14:43:47', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `features`
--

CREATE TABLE `features` (
  `id` int(191) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_name` varchar(250) DEFAULT NULL,
  `button_link` varchar(250) DEFAULT NULL,
  `car` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `features`
--

INSERT INTO `features` (`id`, `title`, `details`, `photo`, `button_name`, `button_link`, `car`) VALUES
(19, 'TRASLADO DE CONEXIÓN GLACIAR GREY', 'Traslado compartido para conectar con la Navegación al Glaciar Grey', '1654535488traslado grey.jpg', 'Reserva Aquí', 'https://patagoniaplanet.agency/tour1/traslado-compartido-puerto-natales-hotel-lago-grey-rt', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagable_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `imagable_id`, `image`, `type`, `created_at`, `updated_at`) VALUES
(246, 25, '1410188764hotel-gallery-2.jpg', 'hotel_room', '2020-10-10 03:51:21', '2020-10-10 03:51:21'),
(254, 9, '1774273591hotel-gallery-2.jpg', 'hotel', '2020-10-18 04:15:05', '2020-10-18 04:15:05'),
(255, 9, '1570301888hotel-gallery-3.jpg', 'hotel', '2020-10-18 04:15:05', '2020-10-18 04:15:05'),
(256, 9, '1251399059hotel-gallery-4.jpg', 'hotel', '2020-10-18 04:15:05', '2020-10-18 04:15:05'),
(257, 6, '1824310294ad1.jpg', 'space', '2020-10-19 23:46:47', '2020-10-19 23:46:47'),
(258, 6, '1224086742cersst.jpg', 'space', '2020-10-19 23:48:43', '2020-10-19 23:48:43'),
(259, 6, '936697779cersst.jpg', 'space', '2020-10-19 23:49:06', '2020-10-19 23:49:06'),
(260, 6, '1702758044ceaaaaart.jpg', 'space', '2020-10-19 23:49:21', '2020-10-19 23:49:21'),
(669, NULL, '178467143partner bike.png', 'partner', '2022-06-10 18:22:49', '2022-06-10 18:22:49'),
(670, NULL, '1810992613partner pg.png', 'partner', '2022-06-10 18:22:49', '2022-06-10 18:22:49'),
(671, NULL, '1180290843partner ap.png', 'partner', '2022-06-10 18:22:49', '2022-06-10 18:22:49'),
(672, NULL, '859653536partner cp.png', 'partner', '2022-06-10 18:22:49', '2022-06-10 18:22:49'),
(679, 21, '1832152865DJI_0109 WEB.jpg', 'tour', '2022-07-15 17:27:54', '2022-07-15 17:27:54'),
(680, 21, '1509453065DJI_0134WEB.jpg', 'tour', '2022-07-15 17:27:54', '2022-07-15 17:27:54'),
(681, 21, '2085586851DSC_3786WEB.jpg', 'tour', '2022-07-15 17:27:54', '2022-07-15 17:27:54'),
(682, 21, '1485558219DSC_3812WEB.jpg', 'tour', '2022-07-15 17:27:54', '2022-07-15 17:27:54'),
(683, 21, '91588695DSC_3964WEB.jpg', 'tour', '2022-07-15 17:27:54', '2022-07-15 17:27:54'),
(684, 21, '141390102DSC_4057WEB.jpg', 'tour', '2022-07-15 17:27:55', '2022-07-15 17:27:55'),
(685, 20, '84264961347246118DSC_6916.jpg', 'tour', '2022-07-28 19:33:59', '2022-07-28 19:33:59'),
(686, 20, '3716076891266817510DSC02441.jpg', 'tour', '2022-07-28 19:33:59', '2022-07-28 19:33:59'),
(687, 20, '19956078301341870910DSC02514.jpg', 'tour', '2022-07-28 19:33:59', '2022-07-28 19:33:59'),
(688, 20, '81905751393659464DSC_6964.jpg', 'tour', '2022-07-28 19:33:59', '2022-07-28 19:33:59'),
(689, 20, '136722411800759369DSC02457.jpg', 'tour', '2022-07-28 19:33:59', '2022-07-28 19:33:59'),
(694, 6, '14795558491511274653Lago Grey 18 web.jpg', 'tour', '2022-07-28 19:47:44', '2022-07-28 19:47:44'),
(695, 6, '8642782162033306047Lago Grey 4 web.jpg', 'tour', '2022-07-28 19:47:44', '2022-07-28 19:47:44'),
(696, 6, '211784128596509951Lago Grey 5 web.jpg', 'tour', '2022-07-28 19:47:44', '2022-07-28 19:47:44'),
(697, 6, '207035322372033904Lago Grey 1 web.jpg', 'tour', '2022-07-28 19:47:44', '2022-07-28 19:47:44'),
(698, 6, '3768463331066559824Lago Grey 13 web.jpg', 'tour', '2022-07-28 19:47:44', '2022-07-28 19:47:44'),
(699, 10, '106047854011296043Trekking Base de las Torres 14.jpg', 'tour', '2022-07-28 19:51:04', '2022-07-28 19:51:04'),
(700, 10, '1617816131230406716a2412eda-3fe6-4dde-b74c-77a99e046fb8 2.jpg', 'tour', '2022-07-28 19:51:05', '2022-07-28 19:51:05'),
(701, 10, '1091998772268617243Trekking Base de las Torres 4.jpg', 'tour', '2022-07-28 19:51:05', '2022-07-28 19:51:05'),
(702, 10, '2114714151446952894Trekking Base de las Torres 10.jpg', 'tour', '2022-07-28 19:51:05', '2022-07-28 19:51:05'),
(703, 10, '7909384121946768549Trekking Base de las Torres 1.jpg', 'tour', '2022-07-28 19:51:05', '2022-07-28 19:51:05'),
(704, 10, '10208690442052526780Trekking Base de las Torres 9.jpg', 'tour', '2022-07-28 19:51:05', '2022-07-28 19:51:05'),
(705, 12, '2054026478265024000Pinturas Rupestres 5.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(706, 12, '1818934921438982295Pinturas Rupestres 18.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(707, 12, '372973237580913450Pinturas Rupestres 4.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(708, 12, '1255491219749099957Pinturas Rupestres 11.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(709, 12, '1486205345786168653Pinturas Rupestres 17.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(710, 12, '10761893231067666114Pinturas Rupestres 9.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(711, 12, '12215580841686297361Pinturas Rupestres 13.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(712, 12, '513685986pinrura.jpg', 'tour', '2022-07-28 19:57:54', '2022-07-28 19:57:54'),
(713, 13, '26411980860228283Hiking Porterias 12 web.jpg', 'tour', '2022-07-28 21:06:33', '2022-07-28 21:06:33'),
(714, 13, '2125555266406940877Hiking Porterias 8 web.jpg', 'tour', '2022-07-28 21:06:33', '2022-07-28 21:06:33'),
(715, 13, '1447279174712753762Hiking Porterias 14 web.jpg', 'tour', '2022-07-28 21:06:33', '2022-07-28 21:06:33'),
(716, 13, '11925845921928673675Hiking Porterias 5 web.jpg', 'tour', '2022-07-28 21:06:33', '2022-07-28 21:06:33'),
(717, 15, '16826604511388033112City Bike Natales 15 web.jpg', 'tour', '2022-07-28 21:15:24', '2022-07-28 21:15:24'),
(718, 15, '15484144481825284854City Bike Natales 1 web.jpg', 'tour', '2022-07-28 21:15:24', '2022-07-28 21:15:24'),
(719, 15, '15257418811954412795City Bike Natales 8 web.jpg', 'tour', '2022-07-28 21:15:24', '2022-07-28 21:15:24'),
(720, 15, '2174732241985649353City Bike Natales 3 web.jpg', 'tour', '2022-07-28 21:15:24', '2022-07-28 21:15:24'),
(721, 15, '9112101432062513292City Bike Natales 2 web.jpg', 'tour', '2022-07-28 21:15:24', '2022-07-28 21:15:24'),
(726, 9, '1315250276IMG_6023.jpg', 'tour', '2022-07-29 18:51:45', '2022-07-29 18:51:45'),
(727, 9, '1603771466DSC_4653 2.JPG', 'tour', '2022-07-29 18:54:22', '2022-07-29 18:54:22'),
(728, 9, '1213562503DSC_9132 3.JPG', 'tour', '2022-07-29 18:54:22', '2022-07-29 18:54:22'),
(729, 9, '1408743596DSC_4705 2.jpg', 'tour', '2022-07-29 18:54:22', '2022-07-29 18:54:22'),
(730, 9, '412189770DSC_4049 2.jpg', 'tour', '2022-07-29 18:54:22', '2022-07-29 18:54:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` int(191) NOT NULL,
  `website_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_loader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_loader` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin_loader` int(11) NOT NULL DEFAULT '1',
  `is_website_loader` int(11) NOT NULL DEFAULT '1',
  `secendary_color` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_tawk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_disqus` tinyint(1) NOT NULL DEFAULT '0',
  `disqus` longtext COLLATE utf8mb4_unicode_ci,
  `paypal_check` tinyint(1) DEFAULT '0',
  `paypal_client_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_client_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_sendbox_check` int(11) NOT NULL DEFAULT '1',
  `stripe_check` tinyint(1) NOT NULL DEFAULT '0',
  `paypal_business` text COLLATE utf8mb4_unicode_ci,
  `stripe_key` text COLLATE utf8mb4_unicode_ci,
  `stripe_secret` text COLLATE utf8mb4_unicode_ci,
  `smtp_host` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smtp_port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_text` text COLLATE utf8mb4_unicode_ci,
  `smtp_user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_pass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_smtp` tinyint(1) NOT NULL DEFAULT '0',
  `is_currency` tinyint(1) NOT NULL DEFAULT '0',
  `currency_format` tinyint(1) NOT NULL DEFAULT '0',
  `subscribe_success` text COLLATE utf8mb4_unicode_ci,
  `subscribe_error` text COLLATE utf8mb4_unicode_ci,
  `error_title` text COLLATE utf8mb4_unicode_ci,
  `error_text` text COLLATE utf8mb4_unicode_ci,
  `error_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_service_fee` double DEFAULT NULL,
  `car_service_fee` double DEFAULT NULL,
  `space_serivce_fee` int(11) NOT NULL,
  `tour_service_fee` int(11) NOT NULL,
  `breadcumb_banner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `copy_right_text` text COLLATE utf8mb4_unicode_ci,
  `is_verification_email` int(11) NOT NULL DEFAULT '0',
  `decimal_separator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thousand_separator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_capcha` tinyint(4) NOT NULL DEFAULT '0',
  `withdraw_percentage_fee` double NOT NULL DEFAULT '0',
  `withdraw_extra_charge` double DEFAULT '0',
  `whatsapp_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_album_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ig_access_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tripadvisor_attraction_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ventana` longtext COLLATE utf8mb4_unicode_ci,
  `ventana_text` longtext COLLATE utf8mb4_unicode_ci,
  `ventana_link` longtext COLLATE utf8mb4_unicode_ci,
  `ventana_img` longtext COLLATE utf8mb4_unicode_ci,
  `titulo_qs` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo1_qs` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo2_qs` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitulo3_qs` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1_qs` longtext COLLATE utf8mb4_unicode_ci,
  `img2_qs` longtext COLLATE utf8mb4_unicode_ci,
  `img3_qs` longtext COLLATE utf8mb4_unicode_ci,
  `descripcion1_qs` longtext COLLATE utf8mb4_unicode_ci,
  `descripcion2_qs` longtext COLLATE utf8mb4_unicode_ci,
  `descripcion3_qs` longtext COLLATE utf8mb4_unicode_ci,
  `subtitulo4_qs` longtext COLLATE utf8mb4_unicode_ci,
  `img4_qs` longtext COLLATE utf8mb4_unicode_ci,
  `descripcion4_qs` longtext COLLATE utf8mb4_unicode_ci,
  `mail_encryption` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `website_title`, `header_logo`, `favicon`, `website_loader`, `admin_loader`, `is_admin_loader`, `is_website_loader`, `secendary_color`, `is_tawk`, `theme_color`, `is_verification`, `tawk_id`, `is_disqus`, `disqus`, `paypal_check`, `paypal_client_id`, `paypal_client_secret`, `paypal_sendbox_check`, `stripe_check`, `paypal_business`, `stripe_key`, `stripe_secret`, `smtp_host`, `smtp_port`, `order_title`, `order_text`, `smtp_user`, `smtp_pass`, `from_email`, `from_name`, `is_smtp`, `is_currency`, `currency_format`, `subscribe_success`, `subscribe_error`, `error_title`, `error_text`, `error_photo`, `hotel_service_fee`, `car_service_fee`, `space_serivce_fee`, `tour_service_fee`, `breadcumb_banner`, `footer_logo`, `footer_text`, `copy_right_text`, `is_verification_email`, `decimal_separator`, `thousand_separator`, `is_capcha`, `withdraw_percentage_fee`, `withdraw_extra_charge`, `whatsapp_link`, `instagram_album_link`, `ig_access_token`, `tripadvisor_attraction_url`, `ventana`, `ventana_text`, `ventana_link`, `ventana_img`, `titulo_qs`, `subtitulo1_qs`, `subtitulo2_qs`, `subtitulo3_qs`, `img1_qs`, `img2_qs`, `img3_qs`, `descripcion1_qs`, `descripcion2_qs`, `descripcion3_qs`, `subtitulo4_qs`, `img4_qs`, `descripcion4_qs`, `mail_encryption`) VALUES
(1, 'Patagonia Planet', '1655495077Logotipo-Patagonia-Planet-2021.png', '1638807175favi.png', '1641927342pequeno.gif', '1641928695pequeno.gif', 1, 0, '#00809e', '1', '#00809e', '0', '5bc2019c61d0b77092512d03', 0, 'text', 1, 'AcWYnysKa_elsQIAnlfsJXokR64Z31CeCbpis9G3msDC-BvgcbAwbacfDfEGSP-9Dp9fZaGgD05pX5Qi', 'EGZXTq6d6vBPq8kysVx8WQA5NpavMpDzOLVOb9u75UfsJ-cFzn6aeBXIMyJW2lN1UZtJg5iDPNL9ocYE', 1, 1, 'shaon143-facilitator-1@gmail.com', 'pk_test_UnU1Coi1p5qFGwtpjZMRMgJM', 'sk_test_QQcg3vGsKRPlW6T3dXcNJsor', 'mail.decsas.com.co', '26', 'THANK YOU FOR YOUR GREAT GENEROSITY.', 'THANK YOU FOR YOUR GREAT GENEROSITY.', 'ventas@decsas.com.co', 'Valentina@#12', 'ventas@decsas.com.co', 'Patagonia Planet', 1, 1, 0, 'You are subscribed Successfully...', 'This email has already been taken.', 'Estamos presentando algunos incovenientes', 'adfgadsf', '15826106951561878540404.png', 1, NULL, 0, 0, '1652902586Sin-título-1.jpg', '1652905208Logotipo Patagonia Planet 2021_Horizontal TRAZADO.png', NULL, '<font color=\"#000000\">COPYRIGHT 2022,</font> <a href=\"http://patagoniaplanet.agency\" title=\"\" target=\"\"><font color=\"#006699\">PATAGONIA PLANET</font></a>', 1, NULL, NULL, 1, 5, 5, 'https://api.whatsapp.com/send?phone=56962273316&text=Me%20interesa%C3%ADa%20saber%20m%C3%A1s%20de%20este%20tour%20', 'PATAGONIAPLANET', '3245399909113539', 'Attraction_Review-g297400-d15220519-Reviews-PATAGONIA_PLANET-Puerto_Natales_Magallanes_Region.html', '<span style=\"color: rgb(38, 38, 38); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.</span><span style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#262626\">&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"\" style=\"\"><font color=\"#3333ff\">Ver mas</font></a></span><br>', NULL, NULL, '/tmp/phpljoq6v', '¿Por qué elegirnos?', 'Máxima flexibilidad', 'Experiencias memorables', 'Calidad en nuestro núcleo', '1653082546Iconos web-04.png', '1653082546Iconos web-01.png', '1653082546Iconos web-02.png', '<span style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center;\">Usted tiene el control, con cancelación gratuita y opciones de pago para satisfacer cualquier plan o presupuesto.</span>', '<span style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center;\">Navega y reserva tours y actividades tan increíbles que querrás contárselo a tus amigos.</span><br>', '<font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">Altos estándares de calidad.&nbsp;</font><font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">Millones de reseñas.&nbsp;</font><font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">Una empresa de Tripadvisor.</font><br>', 'Soporte galardonado', '1653082546Iconos web-03.png', '<font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">¿Nuevo precio?&nbsp;</font><font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">¿Nuevo plan?&nbsp;</font><font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">No hay problema.&nbsp;</font><font style=\"color: rgb(42, 45, 50); font-family: Poppins, Helvetica, Arial, sans-serif; text-align: center; vertical-align: inherit;\">Estamos aquí para ayudar, 24/7.</font><br>', 'tls');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_attr_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_term_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `main_price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `is_extra_price` int(11) NOT NULL DEFAULT '0',
  `extra_price_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci,
  `extra_price_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `policy_title` text COLLATE utf8mb4_unicode_ci,
  `policy_content` text COLLATE utf8mb4_unicode_ci,
  `seo_check` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `average_review` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_attrs`
--

CREATE TABLE `hotel_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hotel_attrs`
--

INSERT INTO `hotel_attrs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(16, 'Property type', '2020-10-09 23:50:02', '2020-10-09 23:50:02'),
(18, 'Facilities', '2020-10-09 23:52:28', '2020-10-09 23:52:28'),
(19, 'Hotel Service', '2020-10-09 23:52:42', '2020-10-09 23:52:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_order_items`
--

CREATE TABLE `hotel_order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `room_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_qty` int(11) DEFAULT NULL,
  `square_fit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_night_cost` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hotel_order_items`
--

INSERT INTO `hotel_order_items` (`id`, `user_id`, `order_id`, `hotel_id`, `room_id`, `room_name`, `room_qty`, `square_fit`, `bed`, `per_night_cost`, `created_at`, `updated_at`) VALUES
(75, 29, 160, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-12 18:55:48', '2021-10-12 18:55:48'),
(76, 29, 161, 18, 32, 'VIP', 1, '280', '2', 0.29411764705882, '2021-10-12 18:57:30', '2021-10-12 18:57:30'),
(77, 29, 162, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-12 18:58:34', '2021-10-12 18:58:34'),
(78, 29, 162, 18, 37, 'Exclusive', 6, '300', '1', 5.8823529411765, '2021-10-12 18:58:34', '2021-10-12 18:58:34'),
(79, 29, 163, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-12 18:59:43', '2021-10-12 18:59:43'),
(80, 29, 163, 18, 37, 'Exclusive', 1, '300', '1', 5.8823529411765, '2021-10-12 18:59:43', '2021-10-12 18:59:43'),
(81, 29, 164, 18, 32, 'VIP', 5, '280', '2', 0.29411764705882, '2021-10-12 19:00:21', '2021-10-12 19:00:21'),
(82, 29, 164, 18, 37, 'Exclusive', 13, '300', '1', 5.8823529411765, '2021-10-12 19:00:21', '2021-10-12 19:00:21'),
(83, 29, 172, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-13 11:00:06', '2021-10-13 11:00:06'),
(84, 29, 172, 18, 37, 'Exclusive', 1, '300', '1', 5.8823529411765, '2021-10-13 11:00:06', '2021-10-13 11:00:06'),
(85, 29, 176, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-13 11:04:18', '2021-10-13 11:04:18'),
(86, 29, 176, 18, 37, 'Exclusive', 10, '300', '1', 5.8823529411765, '2021-10-13 11:04:18', '2021-10-13 11:04:18'),
(87, 29, 179, 18, 32, 'VIP', 1, '280', '2', 0.29411764705882, '2021-10-13 11:08:39', '2021-10-13 11:08:39'),
(88, 29, 179, 18, 37, 'Exclusive', 2, '300', '1', 5.8823529411765, '2021-10-13 11:08:39', '2021-10-13 11:08:39'),
(89, 29, 180, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-13 11:10:52', '2021-10-13 11:10:52'),
(90, 29, 180, 18, 37, 'Exclusive', 3, '300', '1', 5.8823529411765, '2021-10-13 11:10:52', '2021-10-13 11:10:52'),
(91, 29, 181, 18, 32, 'VIP', 1, '280', '2', 0.29411764705882, '2021-10-13 11:12:00', '2021-10-13 11:12:00'),
(92, 29, 181, 18, 37, 'Exclusive', 3, '300', '1', 5.8823529411765, '2021-10-13 11:12:00', '2021-10-13 11:12:00'),
(93, 29, 182, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-13 11:12:36', '2021-10-13 11:12:36'),
(94, 29, 183, 18, 32, 'VIP', 1, '280', '2', 0.29411764705882, '2021-10-13 11:12:48', '2021-10-13 11:12:48'),
(95, 29, 183, 18, 37, 'Exclusive', 3, '300', '1', 5.8823529411765, '2021-10-13 11:12:48', '2021-10-13 11:12:48'),
(96, 29, 184, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-13 11:12:49', '2021-10-13 11:12:49'),
(97, 30, 197, 18, 32, 'VIP', 1, '280', '2', 0.29411764705882, '2021-10-16 22:31:55', '2021-10-16 22:31:55'),
(98, 30, 201, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-17 00:22:40', '2021-10-17 00:22:40'),
(99, 30, 202, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-17 00:22:51', '2021-10-17 00:22:51'),
(100, 30, 203, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-17 00:25:17', '2021-10-17 00:25:17'),
(101, 30, 208, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-17 04:51:18', '2021-10-17 04:51:18'),
(102, 30, 209, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-17 21:35:27', '2021-10-17 21:35:27'),
(103, 30, 210, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-17 21:37:56', '2021-10-17 21:37:56'),
(104, 31, 214, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-18 22:12:09', '2021-10-18 22:12:09'),
(105, 31, 216, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-27 22:18:46', '2021-10-27 22:18:46'),
(106, 31, 217, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-27 22:19:26', '2021-10-27 22:19:26'),
(107, 31, 218, 18, 32, 'VIP', 2, '280', '2', 0.29411764705882, '2021-10-27 22:20:11', '2021-10-27 22:20:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `square_fit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed` int(11) NOT NULL,
  `adult` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `children` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_night_cost` double DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`id`, `hotel_id`, `room_name`, `square_fit`, `bed`, `adult`, `children`, `per_night_cost`, `stock`, `created_at`, `updated_at`) VALUES
(28, 8, 'Nice', '5', 5, '5', '5', 5, 5, '2020-10-16 23:20:50', '2020-10-16 23:20:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel_room_attrs`
--

CREATE TABLE `hotel_room_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instagram_album_images`
--

CREATE TABLE `instagram_album_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `instagram_album_images`
--

INSERT INTO `instagram_album_images` (`id`, `url`) VALUES
(951, 'https://patagoniaplanet.agency/assets/images/ig/gallery/2078182683.jpg'),
(952, 'https://patagoniaplanet.agency/assets/images/ig/gallery/1551069790.jpg'),
(953, 'https://patagoniaplanet.agency/assets/images/ig/gallery/327474313.jpg'),
(954, 'https://patagoniaplanet.agency/assets/images/ig/gallery/864145336.jpg'),
(955, 'https://patagoniaplanet.agency/assets/images/ig/gallery/1221253998.jpg'),
(956, 'https://patagoniaplanet.agency/assets/images/ig/gallery/373821777.jpg'),
(957, 'https://patagoniaplanet.agency/assets/images/ig/gallery/434797141.jpg'),
(958, 'https://patagoniaplanet.agency/assets/images/ig/gallery/2049856777.jpg'),
(959, 'https://patagoniaplanet.agency/assets/images/ig/gallery/1420137433.jpg'),
(960, 'https://patagoniaplanet.agency/assets/images/ig/gallery/874296335.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE `languages` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `name`, `is_default`, `language`, `file`, `rtl`) VALUES
(1, '1652050066BFsTjMc5', 0, 'English', '1652050066BFsTjMc5.json', 0),
(2, '1658936463LAHWyPMG', 1, 'Español', '1658936463LAHWyPMG.json', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`id`, `name`, `designation`, `message`, `photo`) VALUES
(13, 'PAOLA MIRANDA', 'Director de Operaciones', 'The restaurants were excellent, especially the Malaysian Restaurant; and the Spa massages and Batik Workshops were first class. Room was clean, food was amazing, spa was out standing and the beach is clean and full of energy. Thank you and Definitely I will come again.', '1633521336appliedmicrobiology-minl-2018-Rucha-Ridhorkar-62007-7135.png'),
(14, 'ARTURO BAEZ', 'Director', 'The hotel is wonderful - beautifully situated between rainforest and beach. Rooms are really great but we didn\'t spend much time in them. We spent most of our day lying on the beach or by the pool, often in the shade as weather was amazing but too much for Scottish skin.', '1633521217dummy-user.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_01_022715_create_hotel_attrs_table', 1),
(5, '2020_04_02_014652_create_attr_trems_table', 4),
(13, '2020_04_05_031317_create_tour_categories_table', 6),
(14, '2020_04_05_040622_create_tour_attrs_table', 7),
(16, '2020_04_05_041907_create_tour_terms_table', 8),
(20, '2020_04_06_022159_create_space_attrs_table', 9),
(24, '2020_04_08_041554_create_tour_inventories_table', 11),
(29, '2020_04_16_045809_create_space_terms_table', 13),
(32, '2020_04_19_021017_create_car_attrs_table', 15),
(34, '2020_04_19_023931_create_car_terms_table', 16),
(36, '2020_04_22_030027_create_gallery_images_table', 18),
(43, '2020_04_28_051432_create_favarites_table', 21),
(48, '2020_04_29_052633_create_locations_table', 22),
(49, '2020_05_04_042209_create_countries_table', 23),
(50, '2020_05_04_062921_create_states_table', 24),
(51, '2020_04_06_025559_create_tour_models_table', 25),
(52, '2020_04_01_040808_create_hotels_table', 26),
(53, '2020_04_16_073515_create_spaces_table', 27),
(55, '2020_04_19_033345_create_cars_table', 28),
(56, '2020_05_18_043007_create_reviews_table', 29),
(57, '2020_05_18_051748_average_review_field_add', 30),
(58, '2020_05_19_043139_average_review_field_add_car', 31),
(59, '2020_05_19_043158_average_review_field_add_space', 31),
(60, '2020_05_19_043210_average_review_field_add_hotels', 31),
(63, '2020_05_31_020852_create_hotel_rooms_table', 32),
(64, '2020_04_01_034436_create_hotel_room_attrs_table', 33),
(68, '2020_06_02_030857_create_orders_table', 34),
(74, '2020_06_15_092041_create_hotel_order_items_table', 35),
(75, '2014_10_12_000000_create_users_table', 36),
(76, '2014_10_12_000000_create_users_table', 36),
(77, '2019_08_19_000000_create_failed_jobs_table', 37),
(78, '2021_12_11_010426_add_whatsapp_link_column_to_generalsettings_table', 37),
(79, '2022_01_30_170452_create_users_social_providers_table', 38),
(80, '2022_02_12_122411_add_instagram_album_link_column_to_generalsettings_table', 39),
(82, '2022_02_12_123224_create_instagram_album_images_table', 40),
(83, '2022_02_12_200116_add_instagram_access_token_column_to_generalsettings_table', 41),
(84, '2022_02_12_205055_change_url_to_text_on_instagram_album_images', 42),
(85, '2022_03_08_231332_add_upper_title_column_to_countries_table', 43),
(86, '2022_03_09_111703_add_order_column_to_tour_models_table', 43),
(87, '2022_03_09_131914_create_popups_table', 43),
(88, '2022_03_17_173314_add_tripadvisor_attraction_url_column_to_generalsettings_table', 44),
(89, '2022_03_17_173932_create_reviews_table', 44),
(90, '2022_03_17_184044_add_review_titile_to_pagesettings_table', 44),
(91, '2022_03_24_015018_create_tour_calendars_table', 45),
(92, '2022_03_25_131549_add_orders_column_to_tour_calendars_table', 45),
(93, '2022_03_28_021145_add_closed_column_to_tour_calendars_table', 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` int(191) NOT NULL,
  `order_id` int(191) UNSIGNED DEFAULT NULL,
  `user_id` int(191) DEFAULT NULL,
  `conversation_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `order_type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summery` text COLLATE utf8mb4_unicode_ci,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `night` int(11) DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci,
  `extra_name` text COLLATE utf8mb4_unicode_ci,
  `extra_type` text COLLATE utf8mb4_unicode_ci,
  `person_type` text COLLATE utf8mb4_unicode_ci,
  `person_price` text COLLATE utf8mb4_unicode_ci,
  `service_charge` decimal(11,2) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_value` double DEFAULT NULL,
  `currency_sign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charge_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txnid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `order_type`, `user_id`, `item_id`, `author_id`, `author_type`, `name`, `email`, `number`, `address`, `city`, `state`, `country`, `zip_code`, `summery`, `start_date`, `end_date`, `night`, `adult`, `children`, `qty`, `extra_price`, `extra_name`, `extra_type`, `person_type`, `person_price`, `service_charge`, `total`, `method`, `currency_code`, `currency_value`, `currency_sign`, `order_number`, `payment_status`, `order_status`, `charge_id`, `txnid`, `invoice_number`, `created_at`, `updated_at`) VALUES
(36, 'Tour', 42, 9, 1, 'Admin', 'Carlos Mñz', 'carlos_amc@live.com', '56958979069', 'eusebio lillo 2024', '18240405-5', '1992-06-23', 'chile', NULL, NULL, '30/7/2022', '30/7/2022', 1, NULL, NULL, 2, NULL, NULL, NULL, 'Adulto', '52.5', NULL, 52.5, 'Transferencia Bancaria', 'CLP', 800, '$', 'nwEs1659128793', 'Pending', 'Completed', '', '123456789', NULL, '2022-07-29 21:06:33', '2022-07-29 21:06:44'),
(37, 'Tour', 42, 9, 1, 'Admin', 'Carlos Mñz', 'carlos_amc@live.com', '958979069', 'Remota', '18240405-5', '1992-06-23', 'Chilena', NULL, NULL, '6/8/2022', '6/8/2022', 1, NULL, NULL, 2, NULL, NULL, NULL, 'Adulto', '52.5', NULL, 52.5, 'Transferencia Bancaria', 'CLP', 800, '$', 'zqB41659725785', 'Pending', 'Completed', '', '134577', NULL, '2022-08-05 18:56:25', '2022-08-05 18:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderteams`
--

CREATE TABLE `orderteams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rut` varchar(100) DEFAULT NULL,
  `pais` varchar(191) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `order_number` varchar(191) DEFAULT NULL,
  `user_id` int(190) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_cancels`
--

CREATE TABLE `order_cancels` (
  `id` bigint(20) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `details` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `order_cancels`
--

INSERT INTO `order_cancels` (`id`, `order_id`, `status`, `user_id`, `type`, `method`, `details`) VALUES
(1, 7, 1, 36, 'tour', 'Paypal', 'nulo'),
(2, 8, 1, 36, 'tour', 'Paypal', 'jghjh'),
(3, 9, 1, 36, 'tour', 'Paypal', 'fds'),
(4, 16, 1, 33, 'tour', 'Bank', 'joijio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`) VALUES
(3, 'Nosotros', 'Nosotros', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql\" style=\"overflow-wrap: break-word; margin: 0px; font-family: &quot;Segoe UI Historic&quot;, &quot;Segoe UI&quot;, Helvetica, Arial, sans-serif; color: rgb(5, 5, 5); font-size: 14px;\"><div dir=\"auto\" style=\"text-align: justify; font-family: inherit;\"><div dir=\"auto\" style=\"font-family: inherit;\"><b>QUIENES SOMOS</b></div><div dir=\"auto\" style=\"font-family: inherit;\"><b><br></b></div><div dir=\"auto\" style=\"font-family: inherit;\">PATAGONIA PLANET creada en el año 2007 la compone un grupo de profesionales con amplio conocimiento de la Patagonia. Contamos con vehículos propios, organizamos y operamos excursiones regulares para &nbsp;grupos pequeños, diseñamos viajes a medida para &nbsp;individuales, familias y grupos, nos preocupamos de satisfacer los requerimiento de nuestros clientes y es por ello que trabajamos con una comunicación abierta y fluida para lograr el viaje perfecto.</div></div></div>', '', ''),
(4, 'Políticas', 'Políticas', '<p></p><div style=\"text-align: justify;\"><b style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">POLITICAS DE PRIVACIDAD</b><span style=\"font-size: medium; -webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">&nbsp;</span></div><font size=\"3\"><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Valoramos su privacidad y proteger su información es de vital importancia para nosotros. Lea atentamente nuestra política de privacidad para comprender claramente cómo recopilamos, usamos, protegemos o manejamos su información de identificación personal de acuerdo con nuestro sitio web.</span></div></font><p></p><p></p><div style=\"text-align: justify;\"><font size=\"3\"><br></font></div><font size=\"3\"><div style=\"text-align: justify;\"><b style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">¿Qué información personal recopilamos de usted cuando visita nuestro sitio web?</b></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Al realizar un pedido o registrarse en nuestro sitio, según corresponda, se le puede solicitar que ingrese su nombre, dirección de correo electrónico, dirección postal u otros detalles para ayudarlo con su experiencia.</span></div></font><p></p><p></p><div style=\"text-align: justify;\"><font size=\"3\"><br></font></div><font size=\"3\"><div style=\"text-align: justify;\"><b style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">¿Cuándo recopilamos información?</b></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Recopilamos información sobre usted cuando se registra en nuestro sitio, realiza un pedido, se suscribe a un boletín informativo, responde a una encuesta, llena un formulario, usa el chat en vivo, abre un ticket de soporte, nos da su opinión sobre nuestros productos o servicios, o ingrese información en nuestro sitio.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">¿Cómo usamos su información?</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Podemos utilizar la información que recopilamos de usted de las siguientes maneras:</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Para permitirnos brindarle un mejor servicio en las respuestas de servicio al cliente y mejorar nuestro sitio web.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Para administrar un concurso, promoción, encuesta u otra característica del sitio</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Para procesar rápidamente sus transacciones.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Solicite reseñas de productos o servicios.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Para dar seguimiento después de la correspondencia (correo electrónico, foro, chat en vivo o teléfono).</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span></div><b><div style=\"text-align: justify;\"><b style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">¿Cómo protegemos tu información?</b></div></b><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Su información personal está contenida detrás de redes seguras y solo es accesible para un número limitado de personas que tienen derechos especiales de acceso a dichos sistemas, y deben mantener la información confidencial. Además, toda la información confidencial / crediticia que proporciona está cifrada mediante la tecnología Secure Socket Layer (SSL)</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Implementamos una variedad de medidas de seguridad cuando un usuario realiza un pedido e ingresa, envía o accede a su información para mantener la seguridad de su información personal.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Todas las transacciones se procesan a través de un proveedor de puerta de enlace y no se almacenan ni procesan en nuestros servidores.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\"><b>¿Usamos ‘cookies’?</b></span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Sí, las cookies son pequeños archivos que un sitio o su proveedor de servicios transfieren al disco duro de su computadora a través de su navegador web (si usted lo permite) que permite que los sistemas del sitio o del proveedor de servicios reconozcan su navegador y capturen y recuerden cierta información. Por ejemplo, utilizamos cookies para ayudarnos a recordar y procesar los artículos en su carrito de compras. También se utilizan para ayudarnos a comprender sus preferencias en función de la actividad actual o pasada del sitio, lo que nos permite brindarle mejores servicios. También utilizamos cookies para ayudarnos a recopilar datos agregados sobre el tráfico del sitio y la interacción del sitio para que podamos ofrecer mejores experiencias y herramientas en el futuro.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Usamos cookies para:</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Ayuda a recordar y procesar los artículos del carrito de compras.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Ayuda a recordar la sesión de inicio de sesión de un usuario.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Comprender y guardar las preferencias del usuario para futuras visitas.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Seguimiento de los anuncios.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Recopile datos agregados sobre el tráfico del sitio y las interacciones del sitio para proporcionar mejores experiencias y herramientas en el futuro. También podemos utilizar servicios de terceros de confianza que rastrean esta información en nuestro nombre.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Puede elegir que su computadora le advierta cada vez que se envía una cookie, o puede optar por desactivar todas las cookies. Haz esto a través de la configuración de tu navegador. Dado que los navegadores son un poco diferentes, consulte el menú de ayuda de su navegador para conocer la forma correcta de modificar sus cookies.</span></div></font><p></p><p></p><div style=\"text-align: justify;\"><span style=\"font-size: medium; -webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\"><b>Divulgación de terceros</b></span></div><font size=\"3\"><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">No vendemos, intercambiamos ni transferimos su información de identificación personal a terceros a menos que notifiquemos a los usuarios con anticipación. Esto no incluye a los socios de alojamiento web y otras partes que nos ayudan a operar nuestro sitio web, llevar a cabo nuestro negocio o servir a nuestros usuarios, siempre que esas partes acuerden mantener esta información confidencial. También podemos divulgar información cuando sea apropiado para cumplir con la ley, hacer cumplir las políticas de nuestro sitio o proteger nuestros derechos, propiedad o seguridad o los de otros.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Sin embargo, la información del visitante no identificable personalmente se puede proporcionar a otras partes para fines de marketing, publicidad u otros usos.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Enlaces de terceros</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Ocasionalmente, a nuestra discreción, podemos incluir u ofrecer productos o servicios de terceros en nuestro sitio web. Estos sitios de terceros tienen políticas de privacidad separada e independiente. Por lo tanto, no tenemos ninguna responsabilidad por el contenido y las actividades de estos sitios vinculados. Sin embargo, buscamos proteger la integridad de nuestro sitio y agradecemos cualquier comentario sobre estos sitios.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\"><br></span></div><b><div style=\"text-align: justify;\"><b style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Ley de SPAM</b></div></b><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">La Ley de SPAM es una ley que establece las reglas para el correo electrónico comercial, establece los requisitos para los mensajes comerciales, otorga a los destinatarios el derecho a que se suspendan los correos electrónicos y establece sanciones severas por violaciones.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Recopilamos su dirección de correo electrónico para:</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Enviar información, responder consultas y / o solicitudes o consultas.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Procese pedidos y envíe información y actualizaciones relacionadas con el pedido.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Enviarle información adicional relacionada con su producto y / o servicio.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Vaya a nuestra lista de correo o continúe enviando correos electrónicos a nuestros clientes después de que se haya realizado la transacción original.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Para estar de acuerdo, aceptamos lo siguiente:</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">No utilice temas o direcciones de correo electrónico falsos o engañosos.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Identifique el mensaje como un anuncio de alguna manera razonable.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Supervise el cumplimiento de los servicios de marketing por correo electrónico de terceros, si se utiliza alguno.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Respete las solicitudes de cancelación / suscripción rápidamente.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">•</span><span class=\"Apple-tab-span\" style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%; white-space: pre;\">	</span><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Permita que los usuarios se den de baja usando el enlace en la parte inferior de cada correo electrónico.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\"><b>Cambios a la política de privacidad</b></span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Es posible que cambiemos la Política de privacidad de vez en cuando. Es probable que la mayoría de los cambios sean menores ya discreción del cliente. Recomendamos a los visitantes que consulten esta página con frecuencia para ver si hay cambios. Su uso continuado de este sitio después de cualquier cambio a esta Política de privacidad constituirá su aceptación de dicho cambio.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Contactando con nosotros</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Si tiene alguna pregunta con respecto a esta política de privacidad, puede comunicarse con nosotros utilizando la información a continuación.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Correo electrónico: info@patagoniaplanet.com</span></div></font><p></p><p></p><div style=\"text-align: justify;\"><font size=\"3\"><br></font></div><font size=\"3\"><div style=\"text-align: justify;\"><b style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">POLÍTICAS DE CALIDAD</b></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Nuestra prioridad es brindar &nbsp;confianza, transparencia, seguridad, satisfacción de expectativas y mejoras del servicio. Confianza de recibir el servicio tal como fue contratado. Transparencia de saber qué elementos en específico se ofrece en cada servicio.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Establecemos y mantenemos &nbsp;un Sistema de Gestión de la Calidad flexible y eficaz de acuerdo con la filosofía de la organización. Y al mismo tiempo tenemos muy presente nuestra Misión, Visión y Valores, los cuales nos guían y nos orientan para poder ofrecer un servicio de calidad.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Nuestra &nbsp;Misión &nbsp;es ofrecer a nuestros clientes un servicio integral de calidad que cubra todas las fases del proceso que sigue un cliente cuando decide disfrutar de unas vacaciones.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Nuestra &nbsp;Visión &nbsp;es la de ser líderes en la distribución de servicios turísticos de calidad y un referente a seguir por nuestros competidores.</span></div><div style=\"text-align: justify;\"><span style=\"-webkit-tap-highlight-color: transparent; -webkit-text-size-adjust: 100%;\">Crear una cultura de gestión fundamentada en la calidad del servicio, que sea extendida y percibida por todo el personal, asegurando su conocimiento, comprensión, cumplimiento y mantenimiento. De esta manera conseguiremos que nuestros clientes reciban el mejor servicio.</span></div></font><p></p>', '', '');
INSERT INTO `pages` (`id`, `title`, `slug`, `details`, `meta_tag`, `meta_description`) VALUES
(5, 'Terminos y Condiciones', 'terminosycondiciones', '<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom: 0cm; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\">TÉRMINOS<span style=\"border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm\">&nbsp;Y CONDICIONES COMPRA ON LINE</span></span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom: 0cm; text-align: center; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br>\r\n<b><span style=\"border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm\">SOC COM PATAGONIA BRAVA LTDA</span></b><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">PATAGONIA\r\nBRAVA LTDA </span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;<b>RUT:\r\n76.43.701-8</b>, en adelante también”&nbsp;<b>“PATAGONIA PLANET” </b>le da la\r\nbienvenida y agradeciendo su preferencia le invita a tener presente al momento\r\nde efectuar su compra, lo siguiente:</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">1.- Es\r\nimportante proporcionar sus datos reales para brindar una comunicación fluida y\r\nun buen y asistencia <br>\r\n<br>\r\n2.- Usted como consumidor tiene el deber de informarse sobre la documentación\r\nque necesita para poder realizar sin problemas su viaje.<br>\r\n<br>\r\n<br>\r\n3.- Antes de iniciar su viaje es importante que se informe sobre los requisitos\r\nde&nbsp; ingreso al país visitando el\r\nsiguiente link </span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"https://www.minsal.cl/plan-fronteras-protegidas/\"><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\">https://www.minsal.cl/plan-fronteras-protegidas/</span></a></span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br>\r\n4.- Para ingresara&nbsp; la región de&nbsp; Magallanes es importante que se informe sobre\r\nlas condiciones&nbsp; en el Plan Paso a Paso&nbsp; que se detalla en el siguiente link </span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"https://www.gob.cl/pasoapaso/\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">https://www.gob.cl/pasoapaso/</span></a></span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Este\r\ndocumento describe los términos y condiciones aplicables al uso del sitio\r\nweb&nbsp;</span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"http://www.patagoniaplanet.com/\"><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\">www.patagoniaplanet.com</span></a></span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"> </span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"https://www.travelsecurity.cl/\">https://www.travelsecurity.cl/</a></span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">, en adelante “el sitio” y a los\r\nproductos y servicios proveídos a través de dicho sitio, los que se regirán por\r\nla legislación chilena vigente, en particular la Ley N°19.496 sobre Protección\r\nde los Derechos de los Consumidores y la Ley N°19.628 sobre Protección a la\r\nVida Privada. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><br>\r\nLos presentes Términos y Condiciones forman parte de todos los actos y\r\ncontratos que se ejecuten o celebren mediante el sitio web&nbsp;www.patagoniaplanet.com</span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"https://www.travelsecurity.cl/\">https://www.travelsecurity.cl/</a></span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;, entre el consumidor o\r\nusuario y&nbsp;<b>PATAGONIA PLANET </b>, en adelante el “Proveedor”, quien es\r\nel exclusivo responsable ante los consumidores de los productos y servicios\r\nofertados en&nbsp;</span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"http://www.patagoniaplanet.com/\"><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\">www.patagoniaplanet.com</span></a></span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\">.-<br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Es\r\nrequisito para comprar en&nbsp;</span><span style=\"color:black;mso-color-alt:\r\nwindowtext\"><a href=\"http://www.patagoniaplanet.com/\"><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\">www.patagoniaplanet.com</span></a></span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"> , la aceptación expresa de los Términos y Condiciones que se describen\r\na continuación y de la Política de Privacidad de Patagonia Planet . Cualquier\r\npersona que no acepte íntegramente estos acuerdos, los cuales tienen un\r\ncarácter obligatorio y vinculante mediante la aceptación del usuario, deberá\r\nabstenerse de utilizar el servicio y de comprar productos y servicios por medio\r\nde esta.<br>\r\n<br>\r\nLe recomendamos leer detenidamente estos Términos y Condiciones.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><br></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\">SOBRE PATAGONIA PLANET</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">PATAGONIA\r\nBRAVA LTDA .,&nbsp;</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">R.U.T.\r\nN° 76.043.701-8 representada por don Luis Arturo Baez Hernandez , R.U.N. 8.796.620-8,\r\ndomiciliado en calle Manuel Bulnes 407 A (61) 2415118, contacto&nbsp;</span><span style=\"color:black;mso-color-alt:windowtext\"><a href=\"https://patagoniaplanet.com.br/contact\"><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">https://patagoniaplanet.com.br/contact</span></a></span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\"> es una agencia de viajes que actúa\r\ncomo intermediaria en la contratación de servicios de hoteles, de arriendo de\r\nautomóviles y de otros operadores turísticos que proveen de servicios y\r\nproductos a la Agencia; conforme a ello, informa a sus clientes sobre las\r\ncaracterísticas y/o condiciones de los servicios; gestiona solicitudes de\r\nreservas y compras; recauda los valores correspondientes a los precios de los\r\nservicios y/o productos contratados; y, apoya en la búsqueda de soluciones,\r\ncuando se presenta una inquietud o inconveniente por parte del Usuario.</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\">DERECHOS DE LOS USUARIOS QUE UTILIZAN\r\nEL SITIO PATAGONIAPLANET.COM </span></b><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">El\r\nusuario que utilice este sitio gozará de todos los derechos que le reconoce la\r\nlegislación chilena sobre protección al consumidor vigente en el territorio de\r\nChile y además los que se le otorgan en estos términos y condiciones.<br>\r\n<br>\r\nEl usuario dispondrá en todo momento de los derechos de información,\r\nrectificación y cancelación de los datos personales conforme a la Ley N°\r\n19.628.- sobre protección de datos de carácter personal.<br>\r\n<br>\r\nLa sola visita a este sitio en el cual se ofrecen determinados productos no\r\nimpone al consumidor obligación alguna, a menos que haya aceptado en forma\r\ninequívoca las condiciones ofrecidas por el proveedor, en la forma indicada en\r\nestos Términos y Condiciones.<br>\r\n<br>\r\nPara aceptar estos Términos y Condiciones, deberá hacer click donde el sitio\r\nweb disponga la opción “<b>Acepto expresamente los términos y condiciones de\r\nuso y la política de privacidad de PATAGONIA PLANET </b>” u otra equivalente\r\nque permita dar su consentimiento inequívoco respecto de la aceptación.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\">CONTRATO DE PRODUCTOS Y/O SERVICIOS A\r\nTRAVES DE PATAGONIA PLANET </span></b><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span style=\"font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;\r\nmso-ascii-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-ansi-language:ES-CL;mso-fareast-language:\r\nES-CL;mso-bidi-language:AR-SA\">Cuando el Usuario contrata un servicio de\r\ntransporte, traslado, alojamiento, asistencia en viaje o arriendo de un\r\nvehículo, a través de&nbsp;<b>PATAGONIA PLANET, </b>&nbsp;debe pagar el equivalente a la suma del precio\r\no tarifa del servicio y/o producto contratado o adquirido, más el cargo por\r\nservicio de intermediación cobrado por la Agencia. Del total recaudado por la\r\nAgencia esta última solo retiene el cargo por el servicio de intermediación. El\r\nprecio por él o los servicios y/o productos pertenece a él o los proveedores\r\nfinales.<br>\r\n<br>\r\nTenga presente que los precios de tarifas correspondientes a transporte,\r\ntraslados, alojamientos y cualquier otro servicio turístico son determinados\r\npor el proveedor de los servicios, sin intervención de&nbsp;<b>PATAGONIA PLANET</b>.\r\nEstos pueden experimentar variaciones por razones de disponibilidad u otras\r\ncausas que solo dependen de los proveedores finales.<br>\r\n<br>\r\nPor este motivo es importante tener presente que los precios en este sitio web\r\nsolo quedan fijos a partir del momento que se hace el pago y emisión de los\r\nboletos u órdenes de servicio,&nbsp;<b>en adelante vouchers</b>, y su\r\nfacturación.</span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">En el\r\ncaso que los servicios &nbsp;adquiridos y\r\npagados por el Usuario a través de este sitio, que no puedan emitirse por la\r\nAgencia por no estar disponibles debido a dificultades técnicas o fallas del\r\nsistema, o por cualquier circunstancia ajena a la Agencia,&nbsp;<b>PATAGONIA\r\nPLANET </b>&nbsp;no será responsable por cualquier daño, perjuicio o pérdida\r\nque dicha circunstancia pueda causar al Usuario o Consumidor. En este caso, la\r\nAgencia procederá a efectuar el reembolso del pago efectuado por el Usuario,\r\nincluyendo el cargo de agencia, y le informará las alternativas disponibles.<br>\r\n.&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\">CAPACIDAD DE ADQUIRIR PRODUCTOS Y/O\r\nSERVICIOS.</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">La\r\nadquisición de los servicios y/o productos ofrecidos en este sitio o su reserva\r\nsólo están disponibles para personas que tengan capacidad legal para contratar.\r\nNo podrán adquirir los servicios y/o productos o reservarlos las personas que\r\nno tengan esa capacidad ni los menores de edad. Si quien desee utilizar los\r\nservicios o adquirir los productos o efectuar su reserva fuere una persona\r\njurídica, quien actúe en su representación debe tener capacidad para contratar\r\na nombre de la entidad y de obligar a la misma en los términos de este Acuerdo.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\">MEDIOS DE PAGOS QUE SE PUEDEN UTILIZAR\r\nEN ESTE SITIO.</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Los\r\nproductos y servicios en este sitio, salvo que se señale una forma diferente\r\npara casos particulares, en virtud de convenios de fidelización o de ofertas de\r\ndeterminados productos o servicios,&nbsp;<b>sólo pueden ser pagados por el\r\nUsuario o Consumidor a través de Mercado pago, Flow , transferencia bancaria o\r\nBinance dependiendo del producto y servicio que contrata</b>.<br>\r\n<br>\r\nLos medios de pago que se pueden utilizar para compras en el sitio son las\r\ntarjetas bancarias habilitadas y emitidas en Chile, incluyendo tarjetas de\r\ncrédito, de débito y de prepago. El uso de las tarjetas antes indicadas se\r\nsujetará a lo establecido en estos Términos y Condiciones y en relación con su\r\nemisor a lo pactado en los Contratos de Apertura y Reglamento de Uso. En caso\r\nde contradicción, predominará lo expresado en el contrato con el emisor.<br>\r\n<br>\r\n<b>PATAGONIA PLANET </b>, no almacena los datos de la tarjeta bancaria\r\nutilizada para el pago, éstos quedarán almacenados de forma segura en Transbank\r\no Flow.<br>\r\n<br>\r\nCuando el consumidor utiliza el&nbsp;sistema\r\n<b>MERCADO PAGO &nbsp;y FLOW</b>&nbsp;autoriza\r\nel cargo por precio y/o tarifa y el pago del cargo por el servicio de\r\nintermediación de la Agencia.<br>\r\n<br>\r\nSi la compra se efectúa en cuotas con tarjeta de crédito debe tener presente\r\nque los intereses y/o impuestos que pudieren generar las compras en cuotas\r\nmediante tarjetas de crédito, dependerá de las condiciones que el consumidor\r\nhaya pactado con cada banco o emisor de la tarjeta. Le recomendamos informarse\r\nde las condiciones de uso y de interés de su tarjeta de crédito antes de\r\nutilizar la modalidad de compra en cuotas.<br>\r\n<br>\r\nLos voucher por los servicios contratados se emitirán una vez que se haya\r\nverificado el pago íntegro del cliente por parte de la Agencia.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;\r\npadding:0cm;mso-fareast-language:ES-CL\">FUNCIONAMIENTO DEL PROCESO DE COMPRA\r\nY/O RESERVA.</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:11.0pt;line-height:107%;font-family:&quot;Calibri&quot;,sans-serif;\r\nmso-ascii-theme-font:minor-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-ansi-language:ES-CL;mso-fareast-language:\r\nES-CL;mso-bidi-language:AR-SA\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">PATAGONIA\r\nPLANET </span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;informará,\r\nde manera inequívoca y fácilmente accesible, los pasos que el usuario debe\r\nseguir para proceder a la compra y reserva. El proceso de compra y/o reserva es\r\nactivado por el Usuario cuando este acepta expresamente los Términos y\r\nCondiciones, cuando autoriza a&nbsp;<b>PATAGONIA PLANET</b>&nbsp;a gestionar la\r\ncompra y/o reserva, procediéndose al respectivo cargo a la tarjeta de crédito o\r\ndébito por los sistemas proporcionados por la Agencia para estos efectos.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"color: rgb(31, 78, 121); font-size: 1rem;\">Para\r\nproceder a la compra, el usuario debe:</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: left; margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">I)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Iniciar sesión en el sitio web,\r\npresionando el botón de acceso en la esquina superior derecha.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">II)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Puede ingresar creando una nueva\r\ncuenta rellenando los campos requeridos, o accediendo a una de las opciones\r\ndesplegadas en la página. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">III)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dirigirse a la página de inicio\r\npresionando el icono de planeta en la esquina superior derecha. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">IV)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ingresar al servicio que es de su\r\ninterés, seleccionar la fecha deseada y presionar el botón de reservar ahora. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">V)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rellenar con información real y\r\ncompleta los campos. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">VI)&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Seleccionar método de pago. En caso\r\nde ser transferencia, el sitio web indicará los datos de la cuenta bancaria a\r\nla cual deberá transferir, y el usuario debe ingresar el numero de transacción\r\nen la casilla correspondiente. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">VII)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Aceptar haber leído los términos y\r\ncondiciones del sitio web de PATAGONIA PLANET<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">VIII)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; El sistema enviará un correo\r\nelectrónico de aviso, notificando que hemos recibido la solicitud y pago. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">IX)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Una vez verificado el pago, recibirá\r\nun correo de confirmación a la dirección indicada en el formulario, junto al\r\nvoucher del servicio. <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Dado que\r\nsimultáneamente varias personas pueden estar en el proceso de gestionar- una\r\nmisma reserva, esta se asignará a quién primero concluya el proceso. En dicho\r\ncaso la solicitud de reserva no será confirmada, mediante el envío de un\r\nsegundo correo electrónico con la confirmación de la compra y órdenes de\r\nservicios, en adelante vouchers. Asimismo, las condiciones de los servicios\r\npodrían experimentar variaciones de horario, postergaciones y/o cancelaciones\r\npor instrucciones del proveedor final. De producirse alguna de estas\r\nvariaciones, PATAGONIA PLANET procederá a efectuar el reverso del pago\r\nefectuado por el Usuario a su tarjeta de crédito o al reembolso en caso que de\r\npago con tarjeta de débito y le informará las alternativas disponibles. Sólo\r\nprocederá a realizar nuevas reservas con los nuevos valores con la confirmación\r\no aceptación por parte del Usuario.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Es\r\nimportante destacar que cualquier reserva realizada en el sitio, son de reserva\r\ny pago simultáneo, por lo que <b>PATAGONIA\r\nPLANET</b> no puede respetar precios de servicios que no se paguen\r\nsimultáneamente al realizar la reserva.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;</span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Para la\r\ncompra de los productos y servicios ofertados en <b>PATAGONIA PLANET,</b> es necesario que el usuario entregue todos los\r\ndatos que se indican en los campos obligatorios. Los datos proporcionados por\r\nel usuario serán considerados como fidedignos y será de responsabilidad de este\r\nmantenerlos actualizados.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">&nbsp;<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br></span></p><p class=\"MsoNormal\" style=\"margin: 0cm; text-align: justify; text-indent: -18pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\">7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><!--[endif]--><span style=\"border: 1pt none windowtext; padding: 0cm;\"><font color=\"#1f4e79\">&nbsp;</font><b style=\"color: rgb(31, 78, 121);\">&nbsp;CONSENTIMIENTO EN LOS\r\nCONTRATOS CELEBRADOS A </b><font color=\"#1f4e79\"><b>TRAVÉS</b></font><b style=\"color: rgb(31, 78, 121);\">&nbsp;DE ESTE SITIO.</b></span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">A través\r\nde este sitio web&nbsp;<b>PATAGONIA PLANET</b>&nbsp;realizará ofertas de\r\nproductos y servicios, que pondrán ser aceptadas por el usuario, vía\r\nelectrónica y utilizando los mecanismos que el mismo sitio ofrece para ello.<br>\r\nToda aceptación de una oferta por parte del Usuario quedará sujeta a la\r\ncondición suspensiva de que&nbsp;<b>PATAGONIA PLANET </b>&nbsp;valide la\r\ntransacción. En consecuencia, para toda operación que se efectúe en este sitio\r\nla confirmación y/o validación o verificación por parte de&nbsp;<b>PATAGONIA\r\nPLANET </b>, será requisito esencial para la formación del consentimiento.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">Para\r\nvalidar la transacción&nbsp;PATAGONIA PLANET &nbsp;verificara:</span></b><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><b><span style=\"color: rgb(31, 78, 121); border: 1pt none windowtext; padding: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">a.</span></b><span style=\"color: rgb(31, 78, 121); border: 1pt none windowtext; padding: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;Que dispone, en\r\nel momento de la aceptación de la oferta por parte del Usuario de las productos\r\no servicios en stock.</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\"><br>\r\n<b><span style=\"border: 1pt none windowtext; padding: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">b.</span></b><span style=\"border: 1pt none windowtext; padding: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;Que\r\nvalida y acepta el medio de pago ofrecido por el Usuario.</span><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">Será\r\nde exclusiva responsabilidad del cliente que los datos proporcionados al\r\nsolicitar su pedido, como nombre, dirección, comuna, ciudad, teléfonos de\r\ncontacto y casilla de correo electrónico, estén correctos. De no haber sido\r\nposible la verificación de estos datos a través de los medios disponibles,\r\nposibles, razonables e idóneos, la orden se dejará nula, lo cual será\r\noportunamente informado al usuario</span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><b><span style=\"color: rgb(31, 78, 121); border: 1pt none windowtext; padding: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">c.</span></b><span style=\"color: rgb(31, 78, 121); border: 1pt none windowtext; padding: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;Que los datos\r\nregistrados por el Usuario en el sitio coinciden con los proporcionados al\r\nefectuar su aceptación de oferta.</span><span style=\"mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;\r\ncolor:#1F4E79;mso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:\r\nES-CL\"><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;border:none windowtext 1.0pt;\r\nmso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:ES-CL\">&nbsp;</span><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:Calibri;\r\nmso-bidi-theme-font:minor-latin;color:#1F4E79;mso-themecolor:accent1;\r\nmso-themeshade:128;mso-fareast-language:ES-CL\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 0cm; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:Calibri;mso-bidi-theme-font:minor-latin;color:#1F4E79;\r\nmso-themecolor:accent1;mso-themeshade:128;mso-fareast-language:ES-CL\">Como una\r\nmedida de protección a la seguridad de las transacciones,&nbsp;<b>PATAGONIA\r\nPLANET</b>, podrá dejar sin efecto la compra en los siguientes casos: (i)\r\ncuando del proceso de validación resulte que uno o más de los datos suministrados\r\npor el cliente son erróneos; (ii) cuando exista una inconsistencia entre la\r\ninformación suministrada por el cliente en la orden de compra y los datos\r\nregistrados en la base de datos correspondiente al medio de pago que se\r\npretende utilizar. Se hace presente, que las transacciones realizadas con\r\ntarjetas de crédito están sujetas a una validación adicional que puede demorar\r\nhasta 48 horas hábiles más que el proceso habitual de validación.<br>\r\n<br>\r\nVerificada dicha validación,&nbsp;<b>PATAGONIA PLANET,</b>&nbsp;enviará a la\r\ncasilla de correo electrónico registrada por el usuario, informándole que su\r\ntransacción está siendo procesada. Dentro de las dos horas siguientes como\r\nmáximo, le llegará un segundo correo electrónico con la confirmación de la\r\ncompra, el e-ticket y/o vouchers de los servicios contratados El consentimiento\r\nse entenderá formado desde el momento en que se envía la confirmación escrita\r\nal usuario y en el lugar en que fue expedida.</span></p>', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagesettings`
--

CREATE TABLE `pagesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `success_message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` int(11) DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_page_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_section` tinyint(1) NOT NULL DEFAULT '1',
  `feature_section` tinyint(4) NOT NULL DEFAULT '1',
  `hotel_section` tinyint(1) NOT NULL DEFAULT '1',
  `car_section` tinyint(1) NOT NULL DEFAULT '1',
  `space_section` tinyint(1) NOT NULL DEFAULT '1',
  `destinations_section` tinyint(1) NOT NULL DEFAULT '1',
  `blog_section` tinyint(1) NOT NULL DEFAULT '1',
  `member_section` tinyint(1) NOT NULL DEFAULT '1',
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotel_menu` tinyint(1) NOT NULL DEFAULT '1',
  `car_menu` tinyint(1) NOT NULL DEFAULT '1',
  `space_menu` tinyint(1) NOT NULL DEFAULT '1',
  `tour_menu` tinyint(1) NOT NULL DEFAULT '1',
  `pages_menu` tinyint(1) NOT NULL DEFAULT '1',
  `blog_menu` tinyint(1) DEFAULT '1',
  `contact_menu` tinyint(1) NOT NULL DEFAULT '1',
  `member_background` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pagesettings`
--

INSERT INTO `pagesettings` (`id`, `success_message`, `contact_email`, `contact_title`, `contact_subtitle`, `day`, `time`, `street_address`, `contact_number`, `fax`, `home_page_title`, `tour_section`, `feature_section`, `hotel_section`, `car_section`, `space_section`, `destinations_section`, `blog_section`, `member_section`, `blog_title`, `blog_text`, `hotel_title`, `car_title`, `tour_title`, `space_title`, `destination_title`, `member_title`, `member_text`, `hotel_menu`, `car_menu`, `space_menu`, `tour_menu`, `pages_menu`, `blog_menu`, `contact_menu`, `member_background`, `review_title`, `review_text`) VALUES
(1, 'Success! Thanks for contacting us, we will get back to you shortly.', 'info@patagoniaplanet.com', '¿Necesitas otro servicio?', 'Envíanos un mensaje y te responderemos a la brevedad', 'Lunes a Viernes,Sabado:,Domingo y Festivos:', '09:00  a 13:00 - 14:00 a 18:00,09:00 a 13:00 - 14:00 a 18:00,Cerrado', 'Manuel Bulnes 407 \r\nPuerto Natales, Chile.', 962273316, '999006500 Emergencias', 'BROWSE ALL MOVIES & TV-SERIES', 1, 1, 0, 0, 0, 1, 1, 0, 'QUE VISITAR', 'Here is what people say about bookpro', 'Trending Hotel', 'TRASLADOS DESTACADOS', 'NUESTROS PROGRAMAS', 'Trending Space', 'PATAGONIA', 'Nuestro Equipo', 'Esta para ayudarte!!!', 0, 0, 0, 1, 1, 0, 1, '1646488379Lago Grey 1 web.jpg', 'Reseñas', 'Conoce las opiniones de los visitantes por Tripadvisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_gateways`
--

CREATE TABLE `payment_gateways` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('manual','automatic') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'manual',
  `information` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `keyword` varchar(191) DEFAULT NULL,
  `status` int(191) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `payment_gateways`
--

INSERT INTO `payment_gateways` (`id`, `title`, `details`, `name`, `type`, `information`, `keyword`, `status`) VALUES
(8, NULL, NULL, 'Authorize.Net', 'automatic', '{\"login_id\":\"76zu9VgUSxrJ\",\"txn_key\":\"2Vj62a6skSrP5U3X\",\"sandbox_check\":1,\"text\":\"Pay Via Authorize.Net\"}', 'Authorize', 0),
(13, NULL, NULL, 'Instamojo', 'automatic', '{\"key\":\"test_172371aa837ae5cad6047dc3052\",\"token\":\"test_4ac5a785e25fc596b67dbc5c267\",\"sandbox_check\":1,\"text\":\"Pay via your Instamojo account.\"}', 'Instamojo', 0),
(14, NULL, NULL, 'Stripe', 'automatic', '{\"key\":\"pk_test_UnU1Coi1p5qFGwtpjZMRMgJM\",\"secret\":\"sk_test_QQcg3vGsKRPlW6T3dXcNJsor\",\"text\":\"Pay via your Credit Card.\"}', 'Stripe', 0),
(15, NULL, NULL, 'Paypal', 'automatic', '{\"client_id\":\"AcWYnysKa_elsQIAnlfsJXokR64Z31CeCbpis9G3msDC-BvgcbAwbacfDfEGSP-9Dp9fZaGgD05pX5Qi\",\"client_secret\":\"EGZXTq6d6vBPq8kysVx8WQA5NpavMpDzOLVOb9u75UfsJ-cFzn6aeBXIMyJW2lN1UZtJg5iDPNL9ocYE\",\"sandbox_check\":1,\"text\":\"Pay via your PayPal account.\"}', 'Paypal', 0),
(20, NULL, NULL, 'Mollie Payment', 'automatic', '{\"key\":\"test_5HcWVs9qc5pzy36H9Tu9mwAyats33J\",\"text\":\"Pay with Mollie Payment.\"}', 'Mollie', 0),
(21, NULL, NULL, 'Paystack', 'automatic', '{\"key\":\"pk_test_162a56d42131cbb01932ed0d2c48f9cb99d8e8e2\",\"email\":\"junnuns@gmail.com\",\"text\":\"Pay via your Paystack account.\"}', 'Paystack', 0),
(22, NULL, NULL, 'Mercadopago', 'automatic', '{\"public_key\":\"TEST-84c3cc42-f7bd-4d3e-849a-bf462fe654e5\",\"token\":\"TEST-6671503538985128-022417-7ffd0642d2ea84b239e6d2cf49567488-110486041\",\"sandbox_check\":1,\"text\":\"Pagar con MercadoPago\"}', 'Mercadopago', 1),
(23, NULL, NULL, 'Razorpay', 'automatic', '{\"key\":\"rzp_test_xDH74d48cwl8DF\",\"secret\":\"cr0H1BiQ20hVzhpHfHuNbGri\",\"text\":\"Pay via your Razorpay account.\"}', 'Razorpay', 0),
(24, 'Flow', NULL, 'Flow', 'automatic', '{\"api_key\":\"25F038FE-9C0A-4536-9506-8D7CD4A8LDB4\",\"secret_key\":\"9006a13e331f6b13a6947562de0f4e7aaf808b65\",\"sandbox_check\":0,\"text\":\"Pagar con Flow\"}', 'Flow', 1),
(25, 'Transferencia Bancaria', 'Nombre: Soc. Com. Patagonia Brava Ltda.\r\nBanco Itau - Cuenta Corriente\r\nN° Cuenta: 0215462010\r\nCorreo: info@patagoniaplanet.com', NULL, 'manual', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `popups`
--

INSERT INTO `popups` (`id`, `title`, `subtitle`, `content`, `type`, `image`, `button_text`, `button_link`, `active`) VALUES
(1, '(valido desde 01/04/2022 hasta 31/05/2022)', NULL, '<div style=\"text-align: justify;\">Conoce nuestros programas y combínalos con los vuelos directos de <b><font color=\"#009999\">SKY AIRLINE</font></b> a Puerto Natales con frecuencias 3 veces por semana, hasta mayo 2022</div>', 'homepage', '2097281435651830330BF96B670-8668-48EF-B52A-0BC987CCBC09 (1) (1).jpeg', 'Reserva Aquí', 'https://patagoniaplanet.agency/tour/full-day-torres-del-paine-primera-clase', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Publish','Pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `section`) VALUES
(1, 'Administrador', 'Blog Section,Hotel Section,Tour Section,Space Section,Car Section,General Settings Section,Home Page Settings Section,Payment Settings Section,Menu Page Settings Section,Email Settings Section,Social Settings Section,Location Section,Language Section,Seo Tools Section,Manage Staff Section,User Manage Section,Manage Role Section,Subscriber Section');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seotools`
--

CREATE TABLE `seotools` (
  `id` int(10) UNSIGNED NOT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `meta_keys` text COLLATE utf8mb4_unicode_ci,
  `facebook_pixel` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seotools`
--

INSERT INTO `seotools` (`id`, `google_analytics`, `meta_keys`, `facebook_pixel`) VALUES
(1, 'UA-137437974-1', 'base torres,torres del paine,puerto natales,punta arenas,patagonia,full day torres del paine', 'UA-137437974-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `show_images`
--

CREATE TABLE `show_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `show_images`
--

INSERT INTO `show_images` (`id`, `image`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(213, '1634037734Rockefeller-Center.jpg', 59, 'App\\Models\\Blog', '2020-10-09 22:23:36', '2021-10-12 18:22:14'),
(214, '1634037662cable-car.jpg', 60, 'App\\Models\\Blog', '2020-10-09 22:24:13', '2021-10-12 18:21:02'),
(220, '1633517555beds.png', 34, 'App\\Models\\AttrTrem', '2020-10-10 00:04:12', '2021-10-06 17:52:35'),
(221, '1633517540resort.png', 35, 'App\\Models\\AttrTrem', '2020-10-10 00:04:19', '2021-10-06 17:52:20'),
(222, '1633517518hotel-bell.png', 36, 'App\\Models\\AttrTrem', '2020-10-10 00:04:35', '2021-10-06 17:51:58'),
(223, NULL, 37, 'App\\Models\\AttrTrem', '2020-10-10 00:04:46', '2020-10-10 00:04:46'),
(224, NULL, 38, 'App\\Models\\AttrTrem', '2020-10-10 00:04:54', '2020-10-10 00:04:54'),
(225, NULL, 39, 'App\\Models\\AttrTrem', '2020-10-10 00:08:07', '2020-10-10 00:08:07'),
(226, '1633518198car (1).png', 40, 'App\\Models\\AttrTrem', '2020-10-10 00:08:23', '2021-10-06 18:03:18'),
(227, '1633518168bicycle.png', 41, 'App\\Models\\AttrTrem', '2020-10-10 00:08:34', '2021-10-06 18:02:48'),
(228, '1633518104smart-tv.png', 42, 'App\\Models\\AttrTrem', '2020-10-10 00:08:39', '2021-10-06 18:01:44'),
(229, NULL, 43, 'App\\Models\\AttrTrem', '2020-10-10 00:08:47', '2020-10-10 00:08:47'),
(230, '1633518020resort.png', 44, 'App\\Models\\AttrTrem', '2020-10-10 00:09:03', '2021-10-06 18:00:20'),
(231, '161519635315542700464-min.jpg', 45, 'App\\Models\\AttrTrem', '2020-10-10 00:09:09', '2021-03-08 03:39:13'),
(232, '1633518383resort.png', 46, 'App\\Models\\AttrTrem', '2020-10-10 00:15:19', '2021-10-06 18:06:23'),
(233, '1633518373hotel-service.png', 47, 'App\\Models\\AttrTrem', '2020-10-10 00:15:26', '2021-10-06 18:06:13'),
(234, '1633518356bus.png', 48, 'App\\Models\\AttrTrem', '2020-10-10 00:15:32', '2021-10-06 18:05:57'),
(235, '1633518313room-service.png', 49, 'App\\Models\\AttrTrem', '2020-10-10 00:15:38', '2021-10-06 18:05:13'),
(236, '1633518244food-service.png', 50, 'App\\Models\\AttrTrem', '2020-10-10 00:15:45', '2021-10-06 18:04:04'),
(237, '1633518300swimmer.png', 51, 'App\\Models\\AttrTrem', '2020-10-10 00:15:54', '2021-10-06 18:05:00'),
(238, '1633518288car (1).png', 52, 'App\\Models\\AttrTrem', '2020-10-10 00:16:02', '2021-10-06 18:04:48'),
(242, '161519626715542700383-min.jpg', 8, 'App\\Models\\Hotel', '2020-10-10 02:05:47', '2021-03-08 03:37:47'),
(243, NULL, 13, 'App\\Models\\TourTerm', '2020-10-12 01:26:49', '2020-10-12 01:26:49'),
(244, NULL, 14, 'App\\Models\\TourTerm', '2020-10-12 01:28:47', '2020-10-12 01:28:47'),
(245, NULL, 15, 'App\\Models\\TourTerm', '2020-10-12 01:29:08', '2020-10-12 01:29:08'),
(246, NULL, 16, 'App\\Models\\TourTerm', '2020-10-12 01:29:13', '2020-10-12 01:29:13'),
(247, NULL, 17, 'App\\Models\\TourTerm', '2020-10-12 01:29:20', '2020-10-12 01:29:20'),
(248, NULL, 18, 'App\\Models\\TourTerm', '2020-10-12 01:29:27', '2020-10-12 01:29:27'),
(250, NULL, 20, 'App\\Models\\TourTerm', '2020-10-12 01:30:33', '2020-10-12 01:30:33'),
(251, NULL, 21, 'App\\Models\\TourTerm', '2020-10-12 01:30:40', '2020-10-12 01:30:40'),
(252, NULL, 22, 'App\\Models\\TourTerm', '2020-10-12 01:30:47', '2020-10-12 01:30:47'),
(253, NULL, 23, 'App\\Models\\TourTerm', '2020-10-12 01:30:52', '2020-10-12 01:30:52'),
(254, NULL, 24, 'App\\Models\\TourTerm', '2020-10-12 01:30:58', '2020-10-12 01:30:58'),
(255, NULL, 25, 'App\\Models\\TourTerm', '2020-10-12 01:31:04', '2020-10-12 01:31:04'),
(256, NULL, 26, 'App\\Models\\TourTerm', '2020-10-12 01:31:13', '2020-10-12 01:31:13'),
(257, '1647636449hik porterias grid.jpg', 13, 'App\\Models\\TourModel', '2020-10-12 02:55:54', '2022-03-18 20:47:29'),
(258, NULL, 11, 'App\\Models\\SpaceTerm', '2020-10-13 22:22:15', '2020-10-13 22:22:15'),
(259, NULL, 12, 'App\\Models\\SpaceTerm', '2020-10-13 22:22:24', '2020-10-13 22:22:24'),
(260, NULL, 13, 'App\\Models\\SpaceTerm', '2020-10-13 22:22:40', '2020-10-13 22:22:40'),
(261, NULL, 14, 'App\\Models\\SpaceTerm', '2020-10-13 22:22:48', '2020-10-13 22:22:48'),
(262, NULL, 15, 'App\\Models\\SpaceTerm', '2020-10-13 22:22:54', '2020-10-13 22:22:54'),
(263, NULL, 16, 'App\\Models\\SpaceTerm', '2020-10-13 22:23:00', '2020-10-13 22:23:00'),
(264, NULL, 17, 'App\\Models\\SpaceTerm', '2020-10-13 22:23:07', '2020-10-13 22:23:07'),
(265, NULL, 18, 'App\\Models\\SpaceTerm', '2020-10-13 22:23:25', '2020-10-13 22:23:25'),
(266, NULL, 19, 'App\\Models\\SpaceTerm', '2020-10-13 22:23:35', '2020-10-13 22:23:35'),
(267, NULL, 20, 'App\\Models\\SpaceTerm', '2020-10-13 22:23:56', '2020-10-13 22:23:56'),
(268, NULL, 21, 'App\\Models\\SpaceTerm', '2020-10-13 22:24:07', '2020-10-13 22:24:07'),
(269, NULL, 22, 'App\\Models\\SpaceTerm', '2020-10-13 22:24:54', '2020-10-13 22:24:54'),
(270, NULL, 23, 'App\\Models\\SpaceTerm', '2020-10-13 22:25:02', '2020-10-13 22:25:02'),
(271, NULL, 24, 'App\\Models\\SpaceTerm', '2020-10-13 22:25:08', '2020-10-13 22:25:08'),
(272, NULL, 25, 'App\\Models\\SpaceTerm', '2020-10-13 22:25:15', '2020-10-13 22:25:15'),
(273, NULL, 26, 'App\\Models\\SpaceTerm', '2020-10-13 22:25:21', '2020-10-13 22:25:21'),
(274, NULL, 27, 'App\\Models\\SpaceTerm', '2020-10-13 22:25:26', '2020-10-13 22:25:26'),
(276, NULL, 11, 'App\\Models\\CarTerm', '2020-10-14 23:09:12', '2020-10-14 23:09:12'),
(277, NULL, 12, 'App\\Models\\CarTerm', '2020-10-14 23:09:20', '2020-10-14 23:09:20'),
(278, NULL, 13, 'App\\Models\\CarTerm', '2020-10-14 23:09:31', '2020-10-14 23:09:31'),
(279, NULL, 14, 'App\\Models\\CarTerm', '2020-10-14 23:09:38', '2020-10-14 23:09:38'),
(280, NULL, 15, 'App\\Models\\CarTerm', '2020-10-14 23:09:46', '2020-10-14 23:09:46'),
(281, NULL, 16, 'App\\Models\\CarTerm', '2020-10-14 23:09:56', '2020-10-14 23:09:56'),
(282, NULL, 17, 'App\\Models\\CarTerm', '2020-10-14 23:10:20', '2020-10-14 23:10:20'),
(283, NULL, 18, 'App\\Models\\CarTerm', '2020-10-14 23:10:28', '2020-10-14 23:10:28'),
(284, NULL, 19, 'App\\Models\\CarTerm', '2020-10-14 23:10:35', '2020-10-14 23:10:35'),
(285, NULL, 20, 'App\\Models\\CarTerm', '2020-10-14 23:10:42', '2020-10-14 23:10:42'),
(286, NULL, 21, 'App\\Models\\CarTerm', '2020-10-14 23:10:49', '2020-10-14 23:10:49'),
(287, NULL, 22, 'App\\Models\\CarTerm', '2020-10-14 23:10:55', '2020-10-14 23:10:55'),
(288, NULL, 23, 'App\\Models\\CarTerm', '2020-10-14 23:11:01', '2020-10-14 23:11:01'),
(289, NULL, 24, 'App\\Models\\CarTerm', '2020-10-14 23:11:08', '2020-10-14 23:11:08'),
(291, '1603016105hotel-gallery-2.jpg', 9, 'App\\Models\\Hotel', '2020-10-18 04:15:05', '2020-10-18 04:15:05'),
(292, '1603165471hotel-gallery-4.jpg', 10, 'App\\Models\\Hotel', '2020-10-19 21:44:31', '2020-10-19 21:44:31'),
(293, '161519624615557542831-min.jpg', 11, 'App\\Models\\Hotel', '2020-10-19 21:46:55', '2021-03-08 03:37:26'),
(294, '1603167221hotel-gallery-4.jpg', 12, 'App\\Models\\Hotel', '2020-10-19 22:13:41', '2020-10-19 22:13:41'),
(295, '1603167659hotel-gallery-3.jpg', 13, 'App\\Models\\Hotel', '2020-10-19 22:15:06', '2020-10-19 22:20:59'),
(296, '1628934135top-attractions-in-the-world-france-eiffel-tower-lower-night.jpg', 14, 'App\\Models\\TourModel', '2020-10-19 22:35:19', '2021-08-14 16:42:15'),
(297, '16549099031654899111City Bike Natales.jpg', 15, 'App\\Models\\TourModel', '2020-10-19 22:36:29', '2022-06-11 01:11:43'),
(298, '1647636872b esperanza grid.jpg', 16, 'App\\Models\\TourModel', '2020-10-19 22:55:29', '2022-03-18 20:54:32'),
(302, NULL, 11, 'App\\Models\\Country', '2020-10-28 21:24:42', '2020-10-28 21:24:42'),
(304, '1628754900Place-Hyatt-Delray-Beach.jpg', 14, 'App\\Models\\Hotel', '2021-08-12 13:45:31', '2021-08-12 14:55:00'),
(305, '1628751329turkish-hotel-1024x576.jpg', 15, 'App\\Models\\Hotel', '2021-08-12 13:55:29', '2021-08-12 13:55:29'),
(306, '1628754925florida-jacksonville-pet-friendly-hotels-sheraton-jacksonville-hotel.jpg', 16, 'App\\Models\\Hotel', '2021-08-12 13:57:06', '2021-08-12 14:55:25'),
(307, '1628754538pool.jpg', 17, 'App\\Models\\Hotel', '2021-08-12 14:48:58', '2021-08-12 14:48:58'),
(309, '1628934050taj-mahal-places-to-visit-in-india-1024x678.jpg', 18, 'App\\Models\\TourModel', '2021-08-12 15:08:40', '2021-08-14 16:40:50'),
(317, '1654536605cm.jpg', 61, 'App\\Models\\Blog', '2021-08-12 15:36:01', '2022-06-06 17:30:05'),
(332, '1633517577boat.png', 33, 'App\\Models\\AttrTrem', '2021-10-06 17:52:57', '2021-10-06 17:52:57'),
(333, '1633517592boat.png', 33, 'App\\Models\\AttrTrem', '2021-10-06 17:53:12', '2021-10-06 17:53:12'),
(334, '1633517644boat.png', 33, 'App\\Models\\AttrTrem', '2021-10-06 17:54:04', '2021-10-06 17:54:04'),
(335, '1633517653boat.png', 29, 'App\\Models\\AttrTrem', '2021-10-06 17:54:13', '2021-10-06 17:54:13'),
(336, '1633517757swimmer.png', 54, 'App\\Models\\AttrTrem', '2021-10-06 17:55:57', '2021-10-06 17:55:57'),
(337, '1633517983boat.png', 43, 'App\\Models\\AttrTrem', '2021-10-06 17:59:43', '2021-10-06 17:59:43'),
(338, '1633518003swimmer.png', 43, 'App\\Models\\AttrTrem', '2021-10-06 18:00:03', '2021-10-06 18:00:03'),
(339, '1633518030valet-parking.png', 43, 'App\\Models\\AttrTrem', '2021-10-06 18:00:30', '2021-10-06 18:00:30'),
(340, '1633518062food-service.png', 55, 'App\\Models\\AttrTrem', '2021-10-06 18:01:02', '2021-10-06 18:01:02'),
(341, '1654910864actividaded.jpg', 12, 'App\\Models\\Country', '2021-12-06 16:25:42', '2022-06-11 01:27:44'),
(342, NULL, 27, 'App\\Models\\TourTerm', '2021-12-06 17:47:23', '2021-12-06 17:47:23'),
(343, '16549108391653847452Portada (1).jpg', 13, 'App\\Models\\Country', '2021-12-06 18:13:53', '2022-06-11 01:27:19'),
(344, '1654599910opz 1653847063DSC02525 web.jpg', 15, 'App\\Models\\Country', '2021-12-06 18:18:41', '2022-06-07 11:05:10'),
(345, '1638981345porfiado-cuarteto-e1525812402716.jpg', 24, 'App\\Models\\TourModel', '2021-12-08 16:35:46', '2021-12-08 16:35:46'),
(346, '1639185960porfiado-cuarteto-e1525812402716.jpg', 1, 'App\\Models\\TourModel', '2021-12-11 01:26:00', '2021-12-11 01:26:00'),
(347, '16392157974B892DD2-80A1-4FC0-910F-0CD9858ACFFA.jpeg', 2, 'App\\Models\\TourModel', '2021-12-11 09:43:17', '2021-12-11 09:43:17'),
(348, '1655563631Puerto natales escapada (1).jpg', 3, 'App\\Models\\TourModel', '2021-12-21 02:12:53', '2022-06-18 14:47:11'),
(349, NULL, 28, 'App\\Models\\TourTerm', '2022-01-07 18:48:22', '2022-01-07 18:48:22'),
(350, NULL, 29, 'App\\Models\\TourTerm', '2022-01-07 18:48:40', '2022-01-07 18:48:40'),
(351, NULL, 30, 'App\\Models\\TourTerm', '2022-01-07 18:49:11', '2022-01-07 18:49:11'),
(352, '1655563631Puerto natales escapada (1).jpg', 3, 'App\\Models\\TourModel', '2022-01-09 16:53:14', '2022-06-18 14:47:11'),
(353, '1647643941gtid programa 2.jpeg', 4, 'App\\Models\\TourModel', '2022-01-09 17:16:40', '2022-03-18 22:52:21'),
(354, '1647644026grid prog 3.jpeg', 5, 'App\\Models\\TourModel', '2022-01-09 17:28:32', '2022-03-18 22:53:46'),
(355, NULL, 31, 'App\\Models\\TourTerm', '2022-01-14 19:45:25', '2022-01-14 19:45:25'),
(356, NULL, 32, 'App\\Models\\TourTerm', '2022-01-14 19:45:31', '2022-01-14 19:45:31'),
(357, NULL, 33, 'App\\Models\\TourTerm', '2022-01-14 19:45:36', '2022-01-14 19:45:36'),
(358, '1647636021nav grey grid.jpeg', 6, 'App\\Models\\TourModel', '2022-01-14 19:49:06', '2022-03-18 20:40:21'),
(359, '1654868649lago grey grid.jpg', 7, 'App\\Models\\TourModel', '2022-01-14 20:15:50', '2022-06-10 13:44:09'),
(360, '1654868669lago grey gridd.jpg', 8, 'App\\Models\\TourModel', '2022-01-14 20:38:04', '2022-06-10 13:44:29'),
(361, NULL, 34, 'App\\Models\\TourTerm', '2022-01-15 00:17:00', '2022-01-15 00:17:00'),
(362, NULL, 35, 'App\\Models\\TourTerm', '2022-01-15 00:17:16', '2022-01-15 00:17:16'),
(363, '1647635792full day grid.jpg', 9, 'App\\Models\\TourModel', '2022-01-15 00:21:16', '2022-03-18 20:36:32'),
(364, '16549095851654902146Base Torres.jpg', 10, 'App\\Models\\TourModel', '2022-01-15 00:42:34', '2022-06-11 01:06:25'),
(365, '1646393887Portada.jpg', 11, 'App\\Models\\TourModel', '2022-01-22 13:50:15', '2022-03-04 11:38:07'),
(366, '1647636358rupestre grid.jpg', 12, 'App\\Models\\TourModel', '2022-01-22 13:55:55', '2022-03-18 20:45:58'),
(367, NULL, 36, 'App\\Models\\TourTerm', '2022-01-22 13:58:15', '2022-01-22 13:58:15'),
(368, '1647636449hik porterias grid.jpg', 13, 'App\\Models\\TourModel', '2022-01-22 14:02:18', '2022-03-18 20:47:29'),
(369, '1643200952264460545_4088707187897000_3139218886580436489_n.jpg', 14, 'App\\Models\\TourModel', '2022-01-26 12:42:32', '2022-01-26 12:42:32'),
(370, '16549099031654899111City Bike Natales.jpg', 15, 'App\\Models\\TourModel', '2022-01-26 19:18:27', '2022-06-11 01:11:43'),
(371, '1647636872b esperanza grid.jpg', 16, 'App\\Models\\TourModel', '2022-01-26 19:29:15', '2022-03-18 20:54:32'),
(372, '1643226026Portada.jpg', 18, 'App\\Models\\TourModel', '2022-01-26 19:40:26', '2022-01-26 19:40:26'),
(374, '1655563776Base de las Torres 9 (1).jpg', 19, 'App\\Models\\TourModel', '2022-01-27 17:08:47', '2022-06-18 14:49:36'),
(375, '1657902899DSC_6916.jpg', 20, 'App\\Models\\TourModel', '2022-01-27 17:56:52', '2022-07-15 16:34:59'),
(376, '1657906075DJI_0109 WEB.jpg', 21, 'App\\Models\\TourModel', '2022-01-27 18:21:08', '2022-07-15 17:27:55'),
(379, NULL, 39, 'App\\Models\\TourTerm', '2022-01-30 16:36:46', '2022-01-30 16:36:46'),
(381, '1645209256Wallpaper71LogoColor2 (1).png', 41, 'App\\Models\\TourTerm', '2022-01-30 16:41:45', '2022-02-18 18:34:16'),
(382, NULL, 42, 'App\\Models\\TourTerm', '2022-01-30 16:41:54', '2022-01-30 16:41:54'),
(383, '1645812636Screenshot from 2021-11-23 09-42-36.png', 18, 'App\\Models\\TourModel', '2022-02-25 18:10:36', '2022-02-25 18:10:36'),
(390, '1652453163IMG_4713-Quick_Preset_2500x1667.jpg', 6, 'App\\Models\\Car', '2022-05-10 20:35:50', '2022-05-13 14:46:03'),
(392, '165245345716.jpg', 8, 'App\\Models\\Car', '2022-05-13 14:19:57', '2022-05-13 14:50:57'),
(393, '165245366599.jpg', 9, 'App\\Models\\Car', '2022-05-13 14:37:48', '2022-05-13 14:54:25'),
(394, '165288310599.jpg', 10, 'App\\Models\\Car', '2022-05-13 18:28:26', '2022-05-18 14:11:45'),
(395, '1652910248IMG_4713-Quick_Preset_2500x1667.jpg', 11, 'App\\Models\\Car', '2022-05-18 21:44:08', '2022-05-18 21:44:08'),
(396, '1654183096Trekking Base de las Torres 7.jpg', 18, 'App\\Models\\TourModel', '2022-06-02 15:18:16', '2022-06-02 15:18:16'),
(397, '1655563776Base de las Torres 9 (1).jpg', 19, 'App\\Models\\TourModel', '2022-06-02 15:27:39', '2022-06-18 14:49:36'),
(398, '1655564466Base de las Torres 9 (1).jpg', 43, 'App\\Models\\TourTerm', '2022-06-18 15:01:06', '2022-06-18 15:01:06'),
(399, '1657902899DSC_6916.jpg', 20, 'App\\Models\\TourModel', '2022-07-05 19:48:04', '2022-07-15 16:34:59'),
(400, '1657906075DJI_0109 WEB.jpg', 21, 'App\\Models\\TourModel', '2022-07-15 17:23:57', '2022-07-15 17:27:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socialsettings`
--

CREATE TABLE `socialsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dribble` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_status` tinyint(4) NOT NULL DEFAULT '1',
  `g_status` tinyint(4) NOT NULL DEFAULT '1',
  `t_status` tinyint(4) NOT NULL DEFAULT '1',
  `l_status` tinyint(4) NOT NULL DEFAULT '1',
  `d_status` tinyint(4) NOT NULL DEFAULT '1',
  `f_check` tinyint(10) DEFAULT NULL,
  `g_check` tinyint(10) DEFAULT NULL,
  `fclient_id` text COLLATE utf8mb4_unicode_ci,
  `fclient_secret` text COLLATE utf8mb4_unicode_ci,
  `fredirect` text COLLATE utf8mb4_unicode_ci,
  `gclient_id` text COLLATE utf8mb4_unicode_ci,
  `gclient_secret` text COLLATE utf8mb4_unicode_ci,
  `gredirect` text COLLATE utf8mb4_unicode_ci,
  `website_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `socialsettings`
--

INSERT INTO `socialsettings` (`id`, `facebook`, `gplus`, `twitter`, `linkedin`, `dribble`, `f_status`, `g_status`, `t_status`, `l_status`, `d_status`, `f_check`, `g_check`, `fclient_id`, `fclient_secret`, `fredirect`, `gclient_id`, `gclient_secret`, `gredirect`, `website_url`) VALUES
(1, 'https://www.facebook.com/patagoniaplanet', 'https://www.instagram.com/patagoniaplanet/', 'https://twitter.com/patagoniaplanet', 'https://cl.linkedin.com/in/arturo-baez-patagonia-planet-12372021', 'https://www.youtube.com/channel/UCic2PYZyLId7OrsiGfXRSVg', 1, 1, 0, 0, 1, 1, 0, '1713533815677268', '5a3d02708d85f0475b6e8f90184fd8e6', 'http://localhost/booking-laravel-7', '589953372270-6itddmnpvof7mkq0fjttb0l3rkvtb9tm.apps.googleusercontent.com', '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', 'http://localhost/charity/main-charity/auth/google/callback', 'https://patagoniaplanet.agency');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spaces`
--

CREATE TABLE `spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `space_attr_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_term_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_title` text COLLATE utf8mb4_unicode_ci,
  `faq_content` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_bed` int(11) DEFAULT NULL,
  `extra_bathroom` int(11) DEFAULT NULL,
  `extra_square` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `is_extra_price` int(11) NOT NULL DEFAULT '0',
  `extra_price_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci,
  `extra_price_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_check` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `average_review` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `space_attrs`
--

CREATE TABLE `space_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `space_attrs`
--

INSERT INTO `space_attrs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Space Type', '2020-04-15 22:29:47', '2020-04-15 22:29:47'),
(3, 'Amenities', '2020-04-15 22:29:57', '2020-04-15 22:29:57'),
(4, 'Test Product', '2021-08-10 05:26:43', '2021-08-10 05:26:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `space_terms`
--

CREATE TABLE `space_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `space_attr_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `space_terms`
--

INSERT INTO `space_terms` (`id`, `name`, `space_attr_id`, `created_at`, `updated_at`) VALUES
(11, 'Deniz Manzaralı Villalar', 2, '2020-10-13 22:22:15', '2020-10-13 22:22:15'),
(12, 'Auditorium', 2, '2020-10-13 22:22:24', '2020-10-13 22:22:24'),
(13, 'Bar', 2, '2020-10-13 22:22:40', '2020-10-13 22:22:40'),
(14, 'Cafe', 2, '2020-10-13 22:22:48', '2020-10-13 22:22:48'),
(15, 'Ballroom', 2, '2020-10-13 22:22:54', '2020-10-13 22:22:54'),
(16, 'Dance Studio', 2, '2020-10-13 22:23:00', '2020-10-13 22:23:00'),
(17, 'Office', 2, '2020-10-13 22:23:07', '2020-10-13 22:23:07'),
(18, 'Recording Studio', 2, '2020-10-13 22:23:25', '2020-10-13 22:23:25'),
(19, 'Yoga Studio', 2, '2020-10-13 22:23:35', '2020-10-13 22:23:35'),
(20, 'Villa', 2, '2020-10-13 22:23:56', '2020-10-13 22:23:56'),
(21, 'Warehouse', 2, '2020-10-13 22:24:07', '2020-10-13 22:24:07'),
(22, 'Air Conditioning', 3, '2020-10-13 22:24:54', '2020-10-13 22:24:54'),
(23, 'Breakfast', 3, '2020-10-13 22:25:02', '2020-10-13 22:25:02'),
(24, 'Kitchen', 3, '2020-10-13 22:25:08', '2020-10-13 22:25:08'),
(25, 'Parking', 3, '2020-10-13 22:25:15', '2020-10-13 22:25:15'),
(26, 'Pool', 3, '2020-10-13 22:25:21', '2020-10-13 22:25:21'),
(27, 'Wi-Fi Internet', 3, '2020-10-13 22:25:26', '2020-10-13 22:25:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `states`
--

INSERT INTO `states` (`id`, `country_id`, `state`, `slug`, `created_at`, `updated_at`) VALUES
(16, 13, 'Torres del Paine', 'Torres del Paine', '2021-12-06 16:27:56', '2022-02-18 18:18:58'),
(17, 12, 'Puerto Natales', 'Puerto Natales', '2021-12-06 16:28:09', '2022-02-18 18:18:42'),
(18, 15, 'Pto. Natales', 'Pto. Natales', '2021-12-06 18:19:39', '2022-03-16 14:41:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(191) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(37, 'owner@gmail.com'),
(38, 'shaon@gmail.com'),
(39, 'showrav@gmail.com'),
(40, 'showrabhasan@gmail.com'),
(41, 'user@gmail.com'),
(42, 'farhadwts@gmail.com'),
(43, 'jorgepphotos@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_attrs`
--

CREATE TABLE `tour_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_attrs`
--

INSERT INTO `tour_attrs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'Tipo de tour', '2022-01-07 18:48:06', '2022-01-07 18:48:06'),
(9, 'Atracciones', '2022-01-14 19:45:15', '2022-01-14 19:45:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_calendars`
--

CREATE TABLE `tour_calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `orders` int(11) NOT NULL DEFAULT '0',
  `closed` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_calendars`
--

INSERT INTO `tour_calendars` (`id`, `date`, `min`, `max`, `tour_id`, `orders`, `closed`) VALUES
(25, '2022-06-19', 4, 18, 9, 1, 1),
(26, '2022-06-20', 4, 18, 9, 0, 1),
(27, '2022-06-21', 4, 18, 9, 0, 0),
(28, '2022-06-22', 4, 18, 9, 0, 0),
(29, '2022-06-23', 10, 18, 9, 1, 0),
(30, '2022-06-25', 2, 2, 7, 1, 0),
(31, '2022-06-25', 2, 2, 6, 0, 0),
(32, '2022-06-29', 1, 18, 9, 0, 1),
(33, '2022-06-30', 1, 18, 9, 0, 1),
(34, '2022-07-01', 1, 18, 9, 0, 0),
(35, '2022-07-02', 1, 18, 12, 0, 0),
(36, '2022-07-06', 1, 18, 9, 2, 0),
(37, '2022-07-07', 1, 18, 9, 0, 0),
(38, '2022-07-14', 1, 18, 9, 0, 0),
(39, '2022-07-15', 1, 18, 9, 0, 0),
(40, '2022-07-19', 1, 18, 9, 0, 0),
(41, '2022-07-20', 1, 18, 9, 3, 0),
(42, '2022-07-23', 1, 18, 9, 3, 0),
(43, '2022-07-24', 1, 18, 9, 0, 0),
(44, '2022-07-25', 1, 18, 9, 3, 0),
(45, '2022-07-26', 1, 18, 9, 10, 0),
(46, '2022-07-27', 1, 18, 9, 0, 0),
(47, '2022-07-28', 1, 4, 9, 6, 0),
(48, '2022-08-03', 1, 4, 9, 0, 0),
(49, '2022-07-21', 1, 4, 9, 0, 0),
(50, '2022-07-29', 1, 18, 9, 2, 0),
(51, '2022-07-30', 1, 18, 9, 6, 0),
(52, '2022-07-31', 1, 18, 9, 0, 0),
(53, '2022-08-06', 1, 18, 9, 4, 0),
(54, '2022-08-07', 1, 18, 9, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_categories`
--

CREATE TABLE `tour_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_categories`
--

INSERT INTO `tour_categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Half Day', 'half-day', 1, '2022-01-07 18:47:02', '2022-01-07 18:47:02'),
(9, 'Full Day', 'full-day', 1, '2022-01-07 18:47:22', '2022-01-07 18:47:22'),
(10, 'Excursiones', 'excursiones', 1, '2022-01-09 17:03:40', '2022-01-09 17:03:40'),
(11, 'Programas', 'programas', 1, '2022-01-11 20:00:12', '2022-06-18 15:01:38'),
(12, 'Traslados', 'traslados', 1, '2022-01-14 20:18:45', '2022-06-18 19:53:48'),
(13, 'Navegación', 'navegacion', 1, '2022-06-18 19:53:35', '2022-06-18 19:53:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_inventories`
--

CREATE TABLE `tour_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_inventories`
--

INSERT INTO `tour_inventories` (`id`, `tour_id`, `image`, `title`, `description`, `content`, `created_at`, `updated_at`) VALUES
(9, 3, '1746409852FB382108-83DA-40D9-87E1-45FE8E4465B8.jpeg', 'DIA 1', 'PUNTA ARENAS – PUERTO NATALES', 'Recepción en el aeropuerto de Punta Arenas y traslado a terminal de Bus Regular para iniciar viaje a Puerto\r\nNatales. Recepción en terminal de bus y traslado a su lugar de alojamiento.', NULL, '2022-05-27 17:24:27'),
(10, 3, '169666518877E0F2AD-215E-47A4-AB74-FCEBA5C50047.jpeg', 'DIA 2', 'PUERTO NATALES – TORRES DEL PAINE – PUERTO NATALES', 'Salida desde su hotel para iniciar una excursión de todo el día al Parque Nacional Torres del Paine visitando Cueva del Milodón, avistando en el camino Cordillera Prat, Lago Porteño, Lago y Sierra del Toro, Sierra Ballena, Cuernos del Paine, Lago Grey, Salto Grande, Mirador del Lago Nordenskjold, Lago Sarmiento, Laguna Amarga. Retornando al finalizar el día a Puerto Natales. Drop-off en hotel del pasajero. Para este día tenemos contemplado un almuerzo durante la excursión.', NULL, '2022-02-23 21:58:30'),
(11, 3, '709464179puerto-natales_prin-min.jpg', 'DIA 3', 'PUERTO NATALES – PUNTA ARENAS (APTO)', 'Salida desde su hotel para iniciar una excursión de todo el día al Parque Nacional Torres del Paine visitando Cueva del Milodón, avistando en el camino Cordillera Prat, Lago Porteño, Lago y Sierra del Toro, Sierra Ballena, Cuernos del Paine, Lago Grey, Salto Grande, Mirador del Lago Nordenskjold, Lago Sarmiento, Laguna Amarga. Retornando al finalizar el día a Puerto Natales. Drop-off en hotel del pasajero. Para este día tenemos contemplado un almuerzo durante la excursión.', NULL, '2022-01-10 13:32:27'),
(12, 9, '4355848672904eeac-8210-4e0c-a54f-a4a0350e5d52.JPG', 'OPERACION PRIMAVERA VERANO', '-', 'TEMPORADA: OCTUBRE A ABRIL\r\n- SALIDA: 7:00 HRS.\r\n- RETORNO: 17:30 HRS.\r\n- SIN MINIMO DE PASAJEROS\r\n-MÁXIMO GRUPOS DE 18 PERSONAS POR VEHICULO / GUIA', NULL, '2022-05-27 16:49:07'),
(13, 9, '1486543161DSC_2403.jpg', 'OPERACION OTOÑO INVIERNO', '-', 'TEMPORADA: MAYO A SEPTIEMBRE\r\n- SALIDA: 08:00 HRS.\r\n- RETORNO: 17:30 HRS.\r\n- MINIMO DE PASAJEROS: 2\r\n- MÁXIMO GRUPOS DE 18 PERSONAS POR VEHICULO / GUIA', NULL, '2022-03-04 12:02:39'),
(18, 19, '1844463598DSC00507 web.jpg', 'Día 1', 'Punta Arenas - Puerto Natales', 'Recepción en el aeropuerto de Punta Arenas y traslado a terminal de Bus Regular para iniciar viaje a Puerto\r\nNatales. Recepción en terminal de bus y traslado a su lugar de alojamiento.', NULL, NULL),
(19, 19, '9602885602904eeac-8210-4e0c-a54f-a4a0350e5d52.JPG', 'Día 2', 'Puerto Natales - Torres del Paine - Puerto Natales', 'Salida desde su alojamiento para iniciar una excursión de todo el día al Parque Nacional Torres del Paine\r\nvisitando Cueva del Milodón, avistando en el camino Cordillera Prat, Lago Porteño, Lago y Sierra del Toro, Sierra Ballena, Cuernos del Paine, Lago Grey, Salto Grande, Mirador del Lago Nordenskjold, Lago Sarmiento, Laguna Amarga. Retornando al finalizar el día a Puerto Natales.', NULL, NULL),
(20, 19, '50815949a2412eda-3fe6-4dde-b74c-77a99e046fb8 2.JPG', 'Día 3', 'Trekking Base de las Torres', 'Salida a las 7:00 AM. desde su lugar de alojamiento, rumbo al Parque Nacional Torres del Paine, dejamos el vehículo en el inicio del sendero, comenzando una caminata de dificultad media Alta y una duración aproximada entre 7 a 8 hrs. que nos llevará hasta la base de las tres torres de granito “Las Torres del Paine”. Para este día tenemos contemplado un almuerzo tipo box lunch durante la excursión. Al atardecer retornamos a Puerto Natales.', NULL, NULL),
(21, 19, '990454320DJI_0315.JPG', 'Día 4', 'Puerto Natales - Punta Arenas (Apto)', 'Traslado desde su lugar de alojamiento al terminal de Bus Regular, para iniciar un viaje de dos horas y media directo al aeropuerto de Punta Arenas.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_models`
--

CREATE TABLE `tour_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `author_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_min_people` int(11) DEFAULT NULL,
  `tour_max_people` int(11) DEFAULT NULL,
  `faq_title` text COLLATE utf8mb4_unicode_ci,
  `faq_content` text COLLATE utf8mb4_unicode_ci,
  `include` text COLLATE utf8mb4_unicode_ci,
  `exclude` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_attr_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_term_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_feature` int(11) NOT NULL DEFAULT '0',
  `main_price` double DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `is_person` int(11) NOT NULL DEFAULT '0',
  `person_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_type_min` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_type_max` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_type_price` text COLLATE utf8mb4_unicode_ci,
  `is_extra_price` int(11) NOT NULL DEFAULT '0',
  `extra_price_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci,
  `extra_price_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_check` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `average_review` decimal(11,2) NOT NULL DEFAULT '0.00',
  `tour_order` int(11) NOT NULL DEFAULT '1',
  `clima` longtext COLLATE utf8mb4_unicode_ci,
  `ventana` longtext COLLATE utf8mb4_unicode_ci,
  `ventana_img` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_models`
--

INSERT INTO `tour_models` (`id`, `title`, `slug`, `user_id`, `author_id`, `author_type`, `description`, `category_id`, `video`, `duration`, `tour_min_people`, `tour_max_people`, `faq_title`, `faq_content`, `include`, `exclude`, `banner_image`, `country_id`, `state_id`, `address`, `tour_attr_id`, `attr_term_id`, `is_feature`, `main_price`, `sale_price`, `discount`, `is_person`, `person_type`, `person_type_min`, `person_type_max`, `person_type_price`, `is_extra_price`, `extra_price_name`, `extra_price`, `extra_price_type`, `seo_check`, `meta_title`, `meta_tag`, `meta_description`, `status`, `created_at`, `updated_at`, `average_review`, `tour_order`, `clima`, `ventana`, `ventana_img`) VALUES
(3, 'PUERTO NATALES ESCAPADA 3D / 2N', 'puerto-natales-escapada-3d-2n', NULL, 1, 'Admin', '<div style=\"text-align: justify;\">En 3 días podrás conocer la pintoresca ciudad de Puerto Natales ubicada a orillas del Canal Señoret y visitar uno de los Parques Nacionales más impresionantes de Chile, Torres del Paine&nbsp;</div><div><br></div>', 11, NULL, '3', 4, 18, NULL, NULL, 'TRF APTO PUQ/BUS (PVD SIN GUIA),,,TKTS DE BUS PUQ/PNT (REG),,,TRF BUS/HTL (PVD SIN GUIA),,,EXC. TORRES DEL PAINE (REG),,,EXC. CUEVA DEL MILODON (REG),,,ALMUERZO DIA 2,,,INGRESOS PAINE – MILODON (PAXS NACIONAL),,,GUÍA LOCAL ESPAÑOL/INGLES DIA 2,,,TRF HTL/BUS (PVD SIN GUIA),,,TKTS DE BUS PNT/APTO PUQ (REG),,,ASISTENCIA 24/7', 'TKTS AÉREOS,,,ALIMENTACIÓN NO MENCIONADA,,,GUÍA NO MENCIONADO,,,PROPINAS,,,EXTRAS O GASTOS NO MENCIONADOS', '1204130178Escapada Banner.jpg', 15, 18, 'NOSE678', '8', '29', 1, 150, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-01-09 16:53:14', '2022-07-29 18:31:09', '0.00', 11, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '1954483398information-button.png'),
(6, 'NAVEGACIÓN GLACIAR GREY', 'navegacion-glaciar-grey', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Presentación en Hotel Lago Grey para realizar el Check In y posteriormente\r\niniciar la navegación al Glaciar Grey. Es una de las excursiones imperdibles\r\nsi visita el Parque Nacional Torres del Paine. Esta travesía de 3 horas de\r\nduración se realiza a bordo del catamarán “Grey III” y nos permite disfrutar\r\nde un inigualable paisaje compuesto de témpanos flotantes, exuberante\r\nvegetación e imponentes montañas.\r\nEl Glaciar Grey forma parte de los campos de hielo sur y esta ubicado en el\r\nsector occidental del Parque Nacional Torres del Paine, es una masa de\r\nhielo con aproximadamente 6 km de ancho y una altura que </span>fluctúa<span style=\"font-size: 1rem;\">&nbsp;entre\r\nlos 20 y 30 metros.\r\nDurante la navegación nos acercamos a la pared del Glaciar </span>permitiéndonos<span style=\"font-size: 1rem;\">&nbsp;observar la belleza y magnitud de este gigante de hielo.</span></div>', 9, 'https://www.youtube.com/embed/kYGl8E_j26E', '1', 4, 18, '¿Desde donde zarpa?,,,¿Qué incluye?,,,¿Qué no está incluido?,,,¿Cuánto dura la navegación?', 'Cada pasajero debe presentarse 1 hora antes del zarpe para realizar su check-in en Hotel Lago Grey, ubicado a unas 2 horas en vehículo desde Puerto Natales. Luego deberán dirigirse al Estacionamiento Pingo para iniciar caminata por la playa del Lago Grey hasta llegar al catamarán (35 a 45 min de caminata aproximadamente).,,,Navegación, anfitrión a bordo, bebestible con hielo de Glaciar.,,,Ingresos a Parque Nacional Torres del Paine, transporte, alimentación.,,,Aproximadamente 2 horas con 45 minutos.', 'Traslado desde Hotel Lago Grey al Catamarán,,,Guía bilingüe Español/Ingles (Abordo),,,Aperitivo con hielo milenario', 'Alimentación,,,Traslado desde y hacia Puerto Natales', '313964586164051852911455766Banner Navegación (1).jpg', 12, 17, 'Torres del Paine', '8,9,9,9', '28,31,32,33', 0, 100, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-01-14 19:49:06', '2022-07-29 18:16:35', '0.00', 2, '6 horas aprx.', '<span style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#262626\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar. </font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\"><font color=\"#0066ff\">Ver más</font></a></span><br>', '989305499information-button.png'),
(7, 'TRASLADO COMPARTIDO PUERTO NATALES / HOTEL LAGO GREY IDA Y VUELTA', 'traslado-compartido-puerto-natales-hotel-lago-grey-ida-y-vuelta', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Este servicio de traslado compartido que combina con\r\nla navegación al Glaciar Grey, se puede utilizar para\r\ntrasladar viajeros desde Puerto Natales a Hotel Lago\r\nGrey.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Patagonia Planet actúa solo como proveedor del\r\ntransporte terrestre por lo cual no tiene ingerencia en la\r\nsuspensión de la navegación por condiciones climáticas\r\no motivos de fuerza mayor informada por la empresa\r\nproveedora del servicio de navegación.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\"><b>TRAMO IDA&nbsp;</b><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\">PICK UP EN HOTELES 06:45</div><div style=\"text-align: justify;\">LLEGADA A GREY 09:00<br></div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">TRAMO REGRESO</span><br></div><div style=\"text-align: justify;\">RETORNO DESDE GREY 17:00</div><div style=\"text-align: justify;\">LLEGADA A NATALES 19:00<br></div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><b>IMPORTANTE:&nbsp;</b><br></div><div style=\"text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; line-height: normal;\">Este servicio de traslado conecta con la primera y segunda navegación.</p></div>', 12, 'https://www.youtube.com/embed/kYGl8E_j26E', '1', 2, 18, '¿A qué hora sale?,,,¿Cuánto dura el transporte?,,,¿A qué hora regresa?,,,¿Para qué navegación sirve?', 'Recogemos a los pasajeros en su alojamiento (dentro del radio urbano), a partir de las 6:45 AM, llegando a Hotel Lago Grey a las 9:00 AM aproximadamente.,,,El tramo entre Puerto Natales y Hotel Lago Grey, toma cerca de 2 horas.,,,El retorno desde Grey es a las 17:00hrs, llegando a Puerto Natales cerca de las 19:00hrs. Este retorno podría ser antes, siempre y cuando todos los pasajeros hayan navegado en el primer zarpe de Grey (10:00 AM), y estén todos de acuerdo.,,,Los horarios de nuestro traslado compartido son compatibles con el primer y segundo zarpe de Grey (10:00 y 13:00 respectivamente). Sin importar que navegación tengan, el horario de recogida sigue siendo a partir de las 6:45 AM.', 'Traslado compartido', 'Ticket de navegación Glaciar Grey,,,Ingresos al Parque Nacional Torres del Paine,,,Propinas,,,Guía local,,,Alimentación', '1104832601354742852Lago Grey Banner RT copia (1).jpg', 13, 16, 'NOSE678', '8', '28', 0, 56.25, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-01-14 20:15:50', '2022-07-29 18:27:50', '0.00', 7, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '851912736information-button.png'),
(8, 'TRASLADO COMPARTIDO PUERTO NATALES / HOTEL LAGO GREY SOLO IDA', 'traslado-compartido-puerto-natales-hotel-lago-grey-solo-ida', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Este servicio de traslado compartido que combina con\r\nla navegación Glaciar Grey, se puede utilizar para\r\ntrasladar viajeros desde Puerto Natales a Hotel Lago\r\nGrey.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Patagonia Planet actúa solo como proveedor del\r\ntransporte terrestre por lo cual no tiene </span>injerencia<span style=\"font-size: 1rem;\">&nbsp;en la\r\nsuspensión de la navegación por condiciones climáticas\r\no motivos de fuerza mayor informada por la empresa\r\nproveedora del servicio de navegación.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\"><b>TRAMO IDA</b><span style=\"font-size: 1rem;\"><br></span></div><div style=\"text-align: justify;\">PICK UP EN HOTELES 06:45<br></div><div style=\"text-align: justify;\">LLEGADA A GREY 09:00</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><b>TRAMO REGRESO\r\n</b><br></div><div style=\"text-align: justify;\">RETORNO DESDE GREY 17:00</div><div style=\"text-align: justify;\">LLEGADA A NATALES 19:00<br></div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><b>IMPORTANTE</b></div><div style=\"text-align: justify;\">Este servicio de traslado conecta con la primera y segunda navegación.<br></div><div style=\"text-align: justify;\">El valor publicado es por tramo</div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><br></span></div>', 12, 'https://www.youtube.com/embed/kYGl8E_j26E', '1', 2, 18, '¿A qué hora sale?,,,¿Cuánto dura el transporte?,,,¿A qué hora regresa?,,,¿Para qué navegación sirve?', 'Recogemos a los pasajeros en su alojamiento (dentro del radio urbano), a partir de las 6:45 AM, llegando a Hotel Lago Grey a las 9:00 AM aproximadamente.,,,El tramo entre Puerto Natales y Hotel Lago Grey, toma cerca de 2 horas.,,,El retorno desde Grey es a las 17:00hrs, llegando a Puerto Natales cerca de las 19:00hrs. Este retorno podría ser antes, siempre y cuando todos los pasajeros hayan navegado en el primer zarpe de Grey (10:00 AM), y estén todos de acuerdo.,,,Los horarios de nuestro traslado compartido son compatibles con el primer y segundo zarpe de Grey (10:00 y 13:00 respectivamente). Sin importar que navegación tengan, el horario de recogida sigue siendo a partir de las 6:45 AM.', 'Traslado compartido', 'Ticket de navegación Glaciar Grey,,,Ingresos al Parque Nacional Torres del Paine,,,Propinas,,,Guía local,,,Alimentación', '6866191341322646750Lago Grey Banner OW (1).jpg', 13, 16, 'NOSE678', '8', '28', 1, 43.75, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-01-14 20:38:04', '2022-07-29 18:29:28', '0.00', 8, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '387588240information-button.png'),
(9, 'FULL DAY TORRES DEL PAINE', 'full-day-torres-del-paine', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Tour full day Torres del Paine tiene salida desde su hotel con destino a Cueva del Milodón ubicada a 24\r\nkilómetros al norte de Puerto Natales. Antes de llegar a la cueva, el camino\r\nde acceso pasa por la “Silla del Diablo”, nombre que proviene de la\r\nimaginación popular dado a una estructura rocosa con aspecto de sillón de\r\nla cual se cuenta que fue “asiento” del Milodón y que la leyenda transformó\r\nen “diablo”.\r\nAl concluir la visita se continúa por el nuevo camino de acceso al Parque\r\nNacional Torres del Paine pudiendo observar en el trayecto lagunas y\r\ncordones montañosos. A continuación, es posible admirar el bellísimo\r\npaisaje que nos rodea desde el Mirador del Lago Grey (vista hacia el Glaciar\r\nGrey, el Macizo del Paine y el Lago del Toro). Un par de Kilómetros más\r\nadelante es posible observar los Cuernos del Paine, llegando a la bifurcación\r\nque nos lleva hacia la zona del Lago Grey. En este sector podremos realizar\r\nuna agradable caminata por la orilla del Lago Grey y si las condiciones nos\r\nayudan, es posible acceder hasta el mirador de la Península Grey.\r\nDe regreso en el estacionamiento de la Guardería, retomamos la ruta para\r\ndirigirnos a un restaurante ubicado dentro del parque para tomar un\r\nmomento de descanso con la opción de almorzar. (Almuerzo no incluido en\r\nla tarifa).\r\nAl concluir este reparador descanso comenzamos la segunda etapa de\r\nnuestra visita al Parque Nacional Torres del Paine dirigiéndonos al sectordel\r\nSalto Grande. Visitaremos el Mirador del Lago Nordenskjold y\r\ncontinuaremos disfrutado de diversas vistas en nuestra ondulante ruta que\r\nnos acerca poco a poco al sector del Laguna Amarga. Después de admirar\r\neste grato espectáculo regresaremos a la ciudad de Puerto Natales\r\npasando por el Mirador del Lago Sarmiento, llegando al caer la tarde y\r\ntrayendo consigo una experiencia inolvidable.</span></div>', 9, 'https://www.youtube.com/embed/M9ZngOWy75k', '1', 1, 18, '¿Qué se visita?,,,¿Qué incluye?,,,¿Qué no está incluido?,,,¿Cuánto dura la excursión?', 'Los miradores mas importantes dentro del circuito vehicular en el Parque Nacional Torres del Paine, y también el Monumento Natural Cueva del Milodon.,,,Recogida en su alojamiento (dentro del radio urbano), transporte compartido, guía.,,,Alimentación, ni ingresos. \r\nEstos últimos se deben comprar de manera directa en el siguiente link: https://www.aspticket.cl/index.xhtml\r\n1 para Parque Nacional Torres del Paine\r\n1 para Monumento Natural Cueva del Milodon,,,Entre 8 a 9 horas aproximadamente. La recogida es a partir de las 7:00 AM De Octubre a Abril, y a partir de las 8:00 AM de Mayo a Septiembre.', 'Transporte compartido,,,Guía bilingüe Español/Ingles,,,Snack a bordo (Agua, Frutos Secos),,,Seguro de responsabilidad civil (Transporte)', 'Ingreso al Parque Nacional Torres del Paine,,,Ingreso a Monumento Natural Cueva del Milodon,,,Almuerzo / Box Lunch,,,Propinas', '5151852771615048282418908540Full Day Banner.jpg', 12, 17, 'NOSE678', '9,9,9,9', '31,32,34,35', 0, 52.5, 0, NULL, 1, 'Adulto', '1', '18', '52.5', 0, '', '', '', 'yes', 'TOUR FULL DAY TORRES DEL PAINE : PATAGONIA PLANET', 'tour torres del paine,full day torres del paine', 'Tour full day Torres del Paine tiene salida desde su hotel con destino a Cueva del Milodón como primera parada seguido por diversos miradores en el cual podrás ver un sin fin de paisajes espectaculares.', 'publish', '2022-01-15 00:21:16', '2022-07-29 18:36:28', '5.00', 1, '6 horas aproximadamente', '<span style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#262626\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar. </font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"Ver más\" target=\"\"><font color=\"#0066ff\">Ver más</font></a></span><br>', '307057474information-button.png'),
(10, 'TREKKING BASE DE LAS TORRES', 'trekking-base-de-las-torres', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Salida desde Puerto Natales a las 07:00 am y traslado directo a sector Las\r\nTorres donde llegaremos a “Reserva Cerro Paine”, punto de partida del\r\nsendero. Allí recibiremos una charla previa instructiva por parte de nuestro\r\nguía. Inicio de la caminata.\r\nTomamos el camino en dirección al Valle y tras 10 minutos de caminata,\r\ncaminaremos sobre un antiguo puente colgante que cruza el rio Ascencio.\r\nCerca de 150 metros más adelante, aparece una bifurcación: a la izquierda\r\nconduce a la Base Las Torres.\r\nLuego sigue un zigzag de marcada pendiente y vegetación escasa por una\r\nhora. Se continúa el ascenso y se pasa junto a otra vertiente y luego de 45\r\nminutos se alcanza el Camping Chileno en la rivera opuesta del Rio\r\nAscencio, a la sombra de un bosque de lengas, con pendiente moderada,\r\ncruzando varias vertientes que caen desde el Almirante Nieto. Tras cerca de\r\nuna hora y 10 minutos desde el camping chileno, a 700 msnm., se alcanza el\r\npie de la morrena que da acceso al mirador. Desde este punto, el sendero\r\naumenta su pendiente.\r\nPrimero va junto a una vertiente y bajo la sombra de los pequeños arboles\r\nubicados albordede lamorrena,peromás arriba el sendero sepierde como\r\ntal y se debe continuar ascendiendo entre las rocas, algunas de las cuales\r\nestán marcadas para mostrar la ruta. Tras cerca de media hora desde el\r\nletrero a 700 msnm, se alcanza el extremo este de la laguna, desde donde\r\nse tiene unamaravillosa vista de las tres torres (Central,monzino, Dagostini)\r\ny de los cerros Peineta y Nido de Cóndores. Luego de descansar y almorzar\r\nen este contexto escénico extraordinario y único en el planeta,\r\ncomenzamos nuestro retorno por el mismo sendero hasta llegar al punto\r\nde partida, donde estará esperando nuestro conductor para regresar al\r\nfinalizar el día a Puerto Natales.</span></div>', 9, 'https://www.youtube.com/embed/br1rCY2x4uE', '1', 2, 18, '¿Qué se visita?,,,¿Cuánto dura la excursión?,,,¿Qué dificultad tiene?,,,¿Qué incluye?', 'La caminata inicia desde estancia Cerro Paine y pasa por todo el Valle del Ascencio hasta llegar al Mirador Base las Torres, donde se pueden ver las Torres del Paine y la laguna a sus pies (siempre y cuando las condiciones climáticas lo permitan).,,,Entre 12 a 13 horas. El viaje entre Puerto Natales y el punto de partida tiene una duración aproximada de 2 horas.,,,Es de dificultad media-alta. Son 8 horas aproximadas de solo caminata, de las cuales las primeras 4 son en su mayoría subiendo. No se recomienda esta excursión para personas con problemas cardio-respiratorios, ni articulares (sobre todo rodillas).,,,Recogida a partir de las 7:00am en su alojamiento (dentro del radio urbano, transporte compartido, guía. El Box lunch es opcional, por lo que consultar por tarifa sin alimentación.', 'Transporte compartido,,,Guía bilingüe Español/Ingles,,,Seguro de responsabilidad civil (Transporte),,,Opcionales: Bastones, Polainas, Crampones', 'Ingreso al Parque Nacional Torres del Paine,,,Propinas', '15104419341284174448Base Torres Banner (1).jpg', 12, 17, 'Torres del Paine', '9,9,9', '31,33,34', 0, 77.5, 0, NULL, 0, '', '', '', '', 1, 'CON BOX LUNCH', '12.5', 'one time', 'no', NULL, NULL, NULL, 'publish', '2022-01-15 00:42:34', '2022-07-29 18:17:39', '0.00', 3, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '1911526925information-button.png'),
(12, 'PINTURAS RUPESTRES - CERRO BENITEZ', 'pinturas-rupestres-cerro-benitez', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Descubriremos las huellas del pasado, nos dirigimos al norte de Puerto\r\nNatales a poco más de 25 Km, comenzamos una jornada de exploración\r\nvisitando el Parque Arqueológico ubicado al interior de la Estancia Ernesto\r\nHelmer, un paisaje que nace del fondo del mar y que hoy podemos recorrer\r\ny observar sus montañas, grietas, aleros y valles .\r\nEn el sector es posible acceder a las posaderas de cóndores que dominan\r\nlos cielos en dicho lugar y una vez que logramos la cumbre obtendremos\r\nuna espectacular vista panorámica hacia el Fiordo Eberhard y Canal\r\nSeñoret .\r\nCerro Benítez forma parte de un sector paleontológico que alberga\r\npinturas rupestres de aproximadamente 3.500 años. Visitaremos la cueva\r\nde la ventana y luego al costado sur este ingresaremos a la cueva\r\nescondida (aquí debemos acceder con lamparas frontales y en punta y\r\ncodo), esta cueva tiene una altura aproximada de 4 metros y su tamaño es\r\nde 70 metros cuadrados aproximadamente podremos observar\r\nmilenarias estalactivas que formaron producto de la acumulación de sales\r\ny minerales más un goteo de agua constante, tardándose miles de años en\r\nformarse. Una vez concluida esta excitante visita saliendo de la cueva\r\ncontinuamos nuestra caminada en direccion a los aleros denominado “Dos\r\nherraduras” atravesando frondosos bosques finalmente podremos\r\nobservar pinturas rupestres en las paredes rocosas.</span></div>', 9, 'https://www.youtube.com/embed/0FjEd8Dtf7Q', NULL, 2, 18, '¿Qué se visita?,,,¿Qué dificultad tiene?', 'Sendero dentro de un terreno privado en donde se pueden apreciar Pinturas Rupestres y Cerro Benítez (desde donde se puede ver Laguna Sofia).,,,Es de dificultad media-alta. Es una caminata de unas 3 horas en total, con subidas un tanto empinadas y prolongadas. No se recomienda esta excursión para personas con problemas cardio-respiratorios, ni articulares (sobre todo rodillas).', 'Transporte compartido,,,Guía local,,,Bastones de trekking,,,Lámparas frontales', 'Ingreso al Parque Arqueológico,,,Propinas,,,Alimentación', '213931239344486626Rupestres Banner (1).jpg', 12, 17, 'Bulnes', '8,9,9,9', '29,31,32,33', 0, 47.5, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-01-22 13:55:55', '2022-07-29 18:18:47', '0.00', 4, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '385217275information-button.png'),
(13, 'HIKING PORTERIA LAGO SARMIENTO', 'hiking-porteria-lago-sarmiento', NULL, 1, 'Admin', '<div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\">Una excursión que une dos de los cuatro accesos que posee el Parque\r\nNacional Torres del Paine permitiendo visitar una perspectiva poco\r\nconocida y muy atractiva para la observación de fauna. Su entorno\r\npaisajístico es sin duda, un sitio digno de recorrer. Al momento de ingresar\r\nal parque por la portería Lago Sarmiento iniciaremos nuestro sendero con\r\nuna suave inclinación con vista lateral del imponente Lago Sarmiento\r\ncolindando con terrenos privados, área habitual de caza para el depredador\r\nmás grande de la región, el Puma. Especie que encuentra en el Parque\r\nNacional Torres del Paine su principal fuente de alimento, el Guanaco.\r\nLuego de una hora de caminata llegaremos a un alero en donde es posible\r\nobservar una serie de pinturas rupestres con una data que supera los 6.000\r\naños de antigüedad, lugar frecuentado por grupos de cazadores conocidos\r\ncomo una de las primeras poblaciones que llegaron a la Patagonia. En este\r\nsitio podremos fotografiar el entorno y conocer un poco más de la historia\r\nlocal. La actividad continúa en dirección a Laguna Blanquillos, lugar de\r\nnidificación y alimentación de diferentes especies de aves endémicas de la\r\nPatagonia como patos, caiquenes y cisnes de cuello negro siempre con\r\nvista frontal hacia la cordillera Paine.\r\nAl cabo de cerca de 2 horas de caminata llegaremos al principal acceso del\r\nParque Nacional Torres del Paine: portería Laguna Amarga. Luego de una\r\ndetención para la utilización de servicios volveremos al vehículo para\r\ndirigirnos a un sector poco conocido en donde las aguas del Río Paine,\r\nprovenientes del glaciar Dickson, aumentan su caudal con gran\r\nconcentración de minerales y sedimentos. Nos referimos a la Cascada\r\nPaine. En este lugar tendremos tiempo libre para disfrutar de nuestro box\r\nlunch con una vista frontal hacia las torres de granito entre arbustos de\r\nñirre. La jornada continua rumbo a Cañadón Macho, zona en donde es\r\nposible observar grandes grupos de guanacos que conviven con especies\r\ncomo el Ñandú, Zorro Gris, Cóndor, Águila Mora entre otras</span></div>', 9, 'https://www.youtube.com/embed/A8lNH5sq7p8', NULL, 2, 18, '¿Qué se visita?,,,¿Cuánto dura la excursión?,,,¿Qué incluye?', 'Sendero que une la Portería Lago Sarmiento, con Portería Laguna Amarga, Cascada Paine y Cañadón Macho.,,,7 horas en total, aproximadamente.,,,Recogida a partir de las 9:00am en su alojamiento (dentro del radio urbano, transporte compartido, guía. El Box lunch es opcional, por lo que debe consultar por tarifa sin alimentación.', 'Transporte compartido,,,Guía bilingüe Español/Ingles,,,Seguro de responsabilidad civil (Transporte),,,Opcionales: Bastones, Polainas, Crampones', 'Ingreso al Parque Nacional Torres del Paine,,,Propinas', '125535911486038789Porterias Banner (1).jpg', 12, 17, 'Torres del Paine', '8,9,9,9', '36,31,32,34', 0, 77.5, 0, NULL, 0, '', '', '', '', 1, 'CON BOX LUCNH', '12.5', 'one time', 'no', NULL, NULL, NULL, 'publish', '2022-01-22 14:02:18', '2022-07-29 18:22:04', '0.00', 5, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '1620692973information-button.png'),
(15, 'CITY BIKE  - PUERTO NATALES', 'city-bike-puerto-natales', NULL, 1, 'Admin', '<p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"font-size:12.0pt;mso-bidi-font-size:11.0pt;\r\nline-height:107%;font-family:&quot;Helvetica&quot;,sans-serif;color:black\">Posterior a\r\nlas instrucciones de nuestro guia y la revisión de los equipos, comenzamos esta\r\nexcursión desde nuestra oficina, ubicada a escasos metros de la Plaza de Armas.\r\n</span><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"color: black; font-family: Helvetica, sans-serif; font-size: 12pt; text-align: justify;\">Puerto Natales\r\nse ubica a orillas del Canal Señoret, entre el Golfo Almirante Montt y el Seno\r\nÚltima Esperanza. Es la capital de la comuna Natales y de la provincia Última\r\nEsperanza, bautizada con ese nombre por el navegante Juan Ladrillero en la\r\nbúsqueda de una ruta al Estrecho de Magallanes.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"color: black; font-family: Helvetica, sans-serif; font-size: 12pt; text-align: justify;\">Pasaron tres\r\nsiglos desde el descubrimiento de Ladrillero antes que se incursionara\r\nnuevamente en la zona de Última Esperanza. Hacia 1830, la expedición de la\r\nfragata HMS Beagle, explora todo el sector recorrido por Ladrillero. Los\r\nnombres de algunos integrantes de esa expedición son hoy familiares en la zona:\r\nRobert fitz Roy, William Skyring, James Kirke y el naturalista Charles Darwin.\r\nHacia 1870, nuevamente renace el interés por las tierras de Última Esperanza.\r\nEntre los osados viajeros que se aventuraron por esos desolados territorios\r\ndestaca Santiago Zamora, quien pasó a la historia como el baqueano Zamora y a\r\nquien se le debe el descubrimiento de la región lacustre del Paine y de grandes\r\nmanadas de caballos salvajes o baguales.</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><o:p></o:p></p>\r\n\r\n<p class=\"MsoNormal\" style=\"text-align: justify;\"><span style=\"color: black; font-family: Helvetica, sans-serif; font-size: 12pt; text-align: justify;\">Durante la\r\nexcursión conoceremos diversos monumentos, calles y avenidas de la ciudad.\r\nVisitaremos la costanera, los principales miradores, casas pioneras, el pueblo\r\nartesanal Ether Aike, la plaza de los cuatro pueblos, Muelle Braun Blanchard,\r\nmural de pueblos originarios y la Plaza de Armas Arturo Prat. El tour concluye\r\nen la oficina de Patagonia Planet centro.&nbsp;</span></p><p class=\"MsoNormal\" style=\"text-align: justify;\"><o:p></o:p></p>', 8, 'https://www.youtube.com/embed/tSKwZ6NWwes', '1', 2, 8, '¿Qué tan difícil es?,,,¿Pueden ir niños?', 'Si bien hay que pedalear bastante, es dentro de la ciudad por lo que la exigencia es baja.,,,Contamos con bicicletas pequeñas para niños y niñas que cumplan con una estatura mínima de 1.50 Mts.', 'Bicicleta ARO 29 SPECIALIZED,,,Casco de seguridad,,,Riñonera,,,Binoculares,,,Guia bilingüe Español/Ingles', 'Alimentación,,,Propinas', '725301295185525814City Bike Natales Banner (1).jpg', 12, 17, 'Bulnes 407', '8,9,9,9,9', '37,33,40,41,42', 0, 35, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-01-26 19:18:27', '2022-07-29 18:23:35', '0.00', 6, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '1048415360information-button.png'),
(19, 'PUERTO NATALES OUTDOOR  4D / 3N', 'puerto-natales-outdoor-4d-3n', NULL, 1, 'Admin', 'Si eres amante de la aventura, el trekking y la naturaleza, este es el programa ideal para ti.', 11, NULL, '4', 2, 18, NULL, NULL, NULL, NULL, '602935742Base Torres Banner.jpg', 15, 18, 'PNT', '8,8,9,9,9,9,9', '29,36,31,32,33,34,35', 1, 248.75, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-06-02 15:27:38', '2022-07-29 18:32:50', '0.00', 12, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '1927640924information-button.png'),
(20, 'KAYAK FIORDO EBERHARD', 'kayak-fiordo-eberhard', NULL, 1, 'Admin', '<div class=\"page\" title=\"Page 3\"><div class=\"layoutArea\"><div class=\"column\"><h6 style=\"text-align: justify;\"><font color=\"#000000\">La excursión de Kayak en el fiordo Eberhard es una actividad de medio día que comienza en la localidad de Puerto Prat, distante a unos 30 minutos en auto desde Puerto Natales. Al llegar a Puerto Prat los clientes son recibidos en<span style=\"caret-color: rgb(0, 0, 0);\"> una antigua pero cálida casona de 1909 por sus propios dueños, quienes han vivido aquí toda su vida por varias generaciones. En este lugar nos vestimos con los trajes especiales para realizar la excursión y se dejan las cosas que no ocuparemos en un lugar seguro. Antes de comenzar a remar los guías les darán una charla de seguridad a los participantes.</span></font></h6><h6><div style=\"text-align: justify;\"><font color=\"#000000\"><br></font></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><font color=\"#000000\">La experiencia en kayak consiste en poder navegar por el histórico Fiordo Eberhard desde Puerto Prat hasta Puerto Consuelo pasando por la Isla Kruger (Isla de los Muertos) siempre y cuando las condiciones climáticas lo permitan. También es posible contemplar una gran cantidad de avifauna que habitan en el fiordo y sus alrededores.</font></span></div><div style=\"text-align: justify;\"><span style=\"font-size: 1rem;\"><font color=\"#000000\">Durante la excursión se realiza una caminata de 40 minutos aproximadamente para visitar los miradores del sector, momento en que hacemos una pausa para tomar nuestro snack junto a un té caliente. La ruta es variable por lo tanto los guías deciden el trazado de la navegación priorizando la seguridad en función de las condiciones climáticas y marinas del momento.</font></span></div></h6><h6><div style=\"text-align: justify;\"><font color=\"#000000\"><br></font></div><p style=\"text-align: justify;\"><font color=\"#000000\">Al regresar a la casona de Puerto Prat nos esperan con una típica once de la región, la que consiste en sopaipillas recién hechas, mermeladas caseras de la estación (calafate, grosella, frambuesa, ruibarbo o rosa mosqueta), mantequilla, huevos revueltos, café, té y leche.</font></p></h6></div></div></div>', 8, NULL, '1', 2, 8, NULL, NULL, 'Transporte compartido,,,Guia bilingüe Español/Ingles,,,Equipamiento completo: Kayaks dobles Necky Amaruk fabricados en Canadá; remos Cannon; trajes semi-secos de dos piezas marca Kokatat Y Palm; Zapatos de neopren; Chaleco salvavidas Nrs con silbato; Faldón Palm; Guantes Poggies de neopren; Casco y bolsa seca para cámaras y celulares.', 'Seguro de vida,,,Alimentación no mencionada,,,Propinas,,,Alojamiento', '1001287627DSC02457.jpg', 12, 17, 'PNT', '8,9,9,9,9,9', '28,31,32,33,34,35', 0, 112.5, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-07-05 19:48:03', '2022-08-04 21:11:42', '0.00', 13, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '302639085information-button.png'),
(21, 'CANAL DE LAS MONTAÑAS', 'canal-de-las-montanas', NULL, 1, 'Admin', '<div class=\"page\" title=\"Page 2\"><div class=\"layoutArea\"><div class=\"column\"><div class=\"page\" title=\"Page 1\"><div class=\"layoutArea\"><div class=\"column\"><p>Esta apasionante aventura comienza desde el muelle de Puerto Natales, lugar desde donde zarparemos en dirección hacia el paso White o Kirke, navegando por las aguas del Golfo Almirante Montt. El acceso por el paso White nos llevará a través del Canal Santa María frente a los imponentes acantilados de la Cordillera Riesco y que luego de casi 3 horas de recorrido nos permitirá observar a la distancia, el mítico Monte Burney (1.520 msnm), un estrato volcán pasivo cubierto de hielo, ubicado en la Península Sarmiento, distante a 90kms de Puerto Natales.</p><p>Desde la Cordillera Sarmiento se desprenden los cinco glaciares que componen la estructura principal del Fiordo de Las Montañas. De sur a norte figuran los glaciares Zamudio, Bernal, Herman, Alsina y Paredes.</p><p>El entorno de estos gigantes de hielo se caracteriza principalmente por morrenas, acantilados, bosques eternos y una variedad de cumbres cubiertas de nieve y hielo. El contraste es notorio en la cordillera frontal que se presenta en la Península Roca, con zona de mayor verticalidad, menor presencia de bosque, grietas y verdaderos muros que se elevan por sobre los 1.500 metros desde el nivel del mar.</p><p>La primera detención será frente al Glaciar Zamudio, coloso de hielo posible de observar desde la embarcación y que ofrece la primera e impactante vista hacia su estructura que forma una pequeña bahía resguardada por fondo rocoso, bosque siempre verde en la cara sur y laderas rocosas en la cara opuesta.</p></div></div></div><p>El siguiente hito a visitar es el Glaciar Bernal, cuyo acceso es más expuesto con una laguna que recibe los deshielos en su cara frontal y traslada el agua de este proceso mediante pequeños ycoloridos afluentes hacia el fiordo, pasando por zonas rocosas y vegetación de baja altura.<br>Continuando la ruta hacia el interior del fiordo, y luego de casi 05 horas de navegación, destacan imponentes las cumbres del Cerro Trono y Dama Blanca, con un promedio de 1.900 msnm. Si bien, son alturas no tan considerables en comparación a otras zonas montañosas de la región, estas destacan por su entorno y su abrupta elevación entre hielos, bosques y paredes desnudas de rocas erosionadas por glaciares durante miles de años. Entre estos cerros y hacia un valle oculto se encuentra el Glaciar Herman, cuyo deshielo y retroceso da forma a un pequeño fiordo adyacente homónimo y que contribuye con su caudal al Canal de Las Montañas.</p><p>A unos 25 minutos de navegación luego de pasar frente a la desembocadura del Glaciar Herman, arribamos al frontis del Glaciar Alsina, quizás el macizo de hielo con la cara más imponente debido a la altura de sus muros frontales. Al igual que en el Glaciar Herman, las alturas las domina el Cerro Dama Blanca con 1.941msnm.</p><p>El retorno será por la misma vía y permitirá obtener perspectivas distintas debido a la variación de la luz natural, la que ofrece grandes contrastes a medida que avanza el día, la mayor atracción además de contemplar nuevamente los glaciares antes descritos, radica en poder observar con mayor claridad los acantilados de la Península Roca. En este trayecto se robará nuestras miradas el conjunto de cumbres llamado Cerro Grupo de La Paz y cuyo apodo o sobrenombre local es “Dientes del Diablo”.</p><p>Desde este hermoso lugar, nos iremos despidiendo lentamente del Parque Nacional “Kaweskar” atesorando recuerdos imborrables que harán memorable nuestro regreso a la ciudad de Puerto Natales.</p></div></div></div>', 13, NULL, '1', 2, 18, NULL, NULL, 'Desayuno,,,Almuerzo y Café,,,Tasas portuarias', 'Alimentación no mencionada,,,Traslado Hotel/Muelle/Hotel,,,Bebidas alcohólicas y no alcohólicas', '375875575DJI_0109 WEB.jpg', 12, 17, 'pnt', '8,9,9,9,9,9', '28,31,32,33,34,35', 0, 312.5, 0, NULL, 0, '', '', '', '', 0, '', '', '', 'no', NULL, NULL, NULL, 'publish', '2022-07-15 17:23:57', '2022-07-29 18:34:41', '0.00', 14, NULL, '<font color=\"#262626\" style=\"font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Consigue la información que necesitas. Consulta las últimas restricciones por la COVID-19 antes de viajar.&nbsp;</font><a href=\"https://www.minsal.cl/plan-seguimos-cuidandonos-paso-a-paso/\" title=\"\" target=\"_blank\" style=\"color: rgb(88, 96, 111); outline: none; caret-color: rgb(88, 96, 111); font-family: BlinkMacSystemFont, -apple-system, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\"><font color=\"#0066ff\">Ver más</font></a><br>', '1414864306information-button.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_terms`
--

CREATE TABLE `tour_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_attr_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tour_terms`
--

INSERT INTO `tour_terms` (`id`, `name`, `tour_attr_id`, `created_at`, `updated_at`) VALUES
(13, 'Cultural', 7, '2020-10-12 01:26:49', '2020-10-12 01:26:49'),
(14, 'Nature & Adventure', 7, '2020-10-12 01:28:47', '2020-10-12 01:28:47'),
(15, 'Marine', 7, '2020-10-12 01:29:08', '2020-10-12 01:29:08'),
(16, 'Independent', 7, '2020-10-12 01:29:13', '2020-10-12 01:29:13'),
(17, 'Activities', 7, '2020-10-12 01:29:19', '2020-10-12 01:29:19'),
(18, 'Festival & Events', 7, '2020-10-12 01:29:26', '2020-10-12 01:29:26'),
(19, 'Special Interest', 7, '2020-10-12 01:29:42', '2020-10-12 01:29:42'),
(20, 'Wifi', 6, '2020-10-12 01:30:33', '2020-10-12 01:30:33'),
(21, 'Gymnasium', 6, '2020-10-12 01:30:40', '2020-10-12 01:30:40'),
(22, 'Mountain Bike', 6, '2020-10-12 01:30:46', '2020-10-12 01:30:46'),
(23, 'Satellite Office', 6, '2020-10-12 01:30:52', '2020-10-12 01:30:52'),
(24, 'Staff Lounge', 6, '2020-10-12 01:30:58', '2020-10-12 01:30:58'),
(25, 'Golf Cages', 6, '2020-10-12 01:31:04', '2020-10-12 01:31:04'),
(26, 'Aerobics Room', 6, '2020-10-12 01:31:13', '2020-10-12 01:31:13'),
(27, 'services', 6, '2021-12-06 17:47:23', '2021-12-06 17:47:23'),
(28, 'Navegación', 8, '2022-01-07 18:48:22', '2022-01-07 18:48:22'),
(29, 'Trekking', 8, '2022-01-07 18:48:40', '2022-01-07 18:48:40'),
(30, 'Caminata en Hielo', 8, '2022-01-07 18:49:11', '2022-01-07 18:49:11'),
(31, 'Flora', 9, '2022-01-14 19:45:25', '2022-01-14 19:45:25'),
(32, 'Fauna', 9, '2022-01-14 19:45:31', '2022-01-14 19:45:31'),
(33, 'Montaña', 9, '2022-01-14 19:45:36', '2022-01-14 19:45:36'),
(34, 'Rio y Lagos', 9, '2022-01-15 00:17:00', '2022-01-15 00:17:00'),
(35, 'Glaciares y Cascadas', 9, '2022-01-15 00:17:16', '2022-01-15 00:17:16'),
(36, 'Hiking', 8, '2022-01-22 13:58:15', '2022-01-22 13:58:15'),
(37, 'Bike', 8, '2022-01-30 16:36:10', '2022-01-30 16:36:10'),
(40, 'Monumentos', 9, '2022-01-30 16:39:15', '2022-01-30 16:39:15'),
(41, 'Arquitectura', 9, '2022-01-30 16:41:45', '2022-01-30 16:41:45'),
(42, 'Historia', 9, '2022-01-30 16:41:54', '2022-01-30 16:41:54'),
(43, 'd', 9, '2022-06-18 15:01:06', '2022-06-18 15:01:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tripadvisor_reviews`
--

CREATE TABLE `tripadvisor_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gander` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_provider` tinyint(10) NOT NULL DEFAULT '0',
  `status` tinyint(10) NOT NULL DEFAULT '0',
  `verification_link` text COLLATE utf8mb4_unicode_ci,
  `email_verified` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `total_earning` double NOT NULL DEFAULT '0',
  `pending_earning` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `email`, `birthday`, `address`, `city`, `state`, `zip_code`, `country`, `phone`, `gander`, `password`, `remember_token`, `created_at`, `updated_at`, `is_provider`, `status`, `verification_link`, `email_verified`, `total_earning`, `pending_earning`) VALUES
(32, 'José Parra', 'https://patagoniaplanet.agency/assets/images/users/1643565649download (1).jpeg', 'jose_parra97@outlook.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Male', NULL, NULL, '2022-01-30 17:25:03', '2022-01-30 18:00:49', 1, 0, NULL, 'Yes', 0, 0),
(33, 'Carlos Mñz', 'https://graph.facebook.com/v3.3/4949874101740665/picture?width=1920', 'carlos_amc@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-30 18:07:53', '2022-01-30 18:07:53', 1, 0, NULL, 'Yes', 0, 0),
(34, 'Jose Parra', 'https://lh3.googleusercontent.com/a-/AOh14Gig5u0x8IISQKACh01VhlcrdwV0lDr9IK2JUzmP_Q=s96-c', 'joseparra9797@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$w2k8BqOnrrom4VCdoVB65eMGIGeFTQ95NhrX26epoC7HSVdHK/LdC', NULL, '2022-01-30 18:44:29', '2022-07-25 12:55:51', 1, 0, NULL, 'Yes', 0, 0),
(35, 'Alixmar Segura', 'https://lh3.googleusercontent.com/a/AATXAJzCM0tmw2pbEVxlKB6hVv1ei8jln4EERvl-iYEC=s96-c', 'alixmarsegura@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-07 01:51:01', '2022-02-07 01:51:01', 1, 0, NULL, 'Yes', 0, 0),
(36, 'Pablo Meneses', 'https://graph.facebook.com/v3.3/4964131973643588/picture?width=1920', 'p4blo_stc@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-13 19:48:00', '2022-02-13 19:48:00', 1, 0, NULL, 'Yes', 0, 0),
(37, 'Arturo Báez Hernández', 'https://graph.facebook.com/v3.3/1812151195661180/picture?width=1920', 'ventas@patagoniaplanet.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-12 12:38:37', '2022-03-12 12:38:37', 1, 0, NULL, 'Yes', 0, 0),
(39, 'ArtHrnandez', 'https://lh3.googleusercontent.com/a-/AOh14Gi2N-BA4_kkPXo-cBQ2Hfq7puALqr6muH7YaYc0=s96-c', 'entreelcieloylatierrav@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-29 22:03:39', '2022-04-29 22:03:39', 1, 0, NULL, 'Yes', 0, 0),
(40, 'Tom Zhengsen', 'https://graph.facebook.com/v3.3/14002206604048/picture?width=1920', 'nur.a.bintishoppri@naturalgamma.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 08:49:18', '2022-05-30 08:49:18', 1, 0, NULL, 'Yes', 0, 0),
(41, 'Mitya Changson', 'https://graph.facebook.com/v3.3/17002206559809/picture?width=1920', 'kf+jr6puo@relay.candidate-email.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-30 09:02:05', '2022-05-30 09:02:05', 1, 0, NULL, 'Yes', 0, 0),
(42, 'Carlos Mñz', 'https://graph.facebook.com/v3.3/5347692938625444/picture?width=1920', 'carlos_amc@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-19 00:05:40', '2022-06-19 00:05:40', 1, 0, NULL, 'Yes', 0, 0),
(43, 'Carlos', NULL, 'carloscmc1992@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '9999999999', NULL, '$2y$10$jwymkllw8MIBg/6i0rmMeek6gjPqfuSwknnNc2v4m6ZVNshqvnOsi', NULL, '2022-06-22 02:01:14', '2022-06-22 02:01:14', 0, 0, 'ac239b0187d100af7c738ca03873452d', 'Yes', 0, 0),
(44, 'Camila Pérez', NULL, 'cam.elizabeth.16@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '942619830', NULL, '$2y$10$xgXrmXzNM0oS9iavFVblfux9XZAqoOBta5u7Tlj.76aFvu6ePfRMK', NULL, '2022-06-22 14:35:22', '2022-06-22 14:35:22', 0, 0, '3fa9bd7c78606e9f95d8977c5fd20bd5', 'Yes', 0, 0),
(45, 'Arturo Baez Hernández', NULL, 'espana1659@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '+56999006500', NULL, '$2y$10$UETfuHM8OjK2WiKewb4jd.HWSZ511KFUsSRppKtVIFKmw16mMQIYa', NULL, '2022-06-22 14:37:37', '2022-06-22 14:37:37', 0, 0, 'de07423964b0246da26acbefec178839', 'Yes', 0, 0),
(46, 'Carlos Arriagada', NULL, 'ciarriagadae@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '964887091', NULL, '$2y$10$SgNy15u0CB8cbLq9UuAnMu0usPd7StzvxPex4cgZizHtjTX8hN68K', NULL, '2022-06-22 14:37:52', '2022-06-22 14:37:52', 0, 0, '38f03164a0d844cdccd7153fc92c57ef', 'Yes', 0, 0),
(47, 'andrea', NULL, 'aella0912@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '954371536', NULL, '$2y$10$bDzimVTqCoVrZmzZqhOFAOK13aCig8TRdFn5MpUesjNvuSXfkrzae', NULL, '2022-06-22 14:37:58', '2022-06-22 14:37:58', 0, 0, '37a6d23de3efcedc51667f90616a5dd2', 'Yes', 0, 0),
(48, 'Paola Miranda Galindo', NULL, 'reservas@patagoniaplanet.com', NULL, NULL, NULL, NULL, NULL, NULL, '995696370', NULL, '$2y$10$Htp0GDbAp0L0yF6g1mpaGevWJ2nh7x2scyHzDfDjPpbl5hDak7BM6', NULL, '2022-06-22 14:38:03', '2022-06-22 14:38:03', 0, 0, 'f462021319011f0ba45b16928cd41649', 'Yes', 0, 0),
(49, 'Natalia Barría', NULL, 'nataliabarriasa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '+56994405579', NULL, '$2y$10$Kl7h0KJbKGH4PuteVUhgVeXh66yLiowGf0Sje05xdOUz4Flb.0OPW', NULL, '2022-06-30 14:30:22', '2022-06-30 14:30:22', 0, 0, 'cb3964b3d88d5aa7b697929088285169', 'Yes', 0, 0),
(50, 'carlos', NULL, 'carlos.ingeco92@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '958979069', NULL, '$2y$10$1W1EtELkNyBI7W09QsnxeOBVMfrq0aGeXm8oBQHxugdsqE1GTqI3C', NULL, '2022-07-19 01:12:47', '2022-07-19 01:12:47', 0, 0, '2f6f3073883c0f9bc9eed6bd005cc7b2', 'Yes', 0, 0),
(51, 'Josselyn Sanchez', NULL, 'josselynsanchez@yahoo.es', NULL, NULL, NULL, NULL, NULL, NULL, '31424710709', NULL, '$2y$10$QAoBD/kqHuZjmoXBb1A2bOhtRM6CU7WUbOo1z9LuG9SsVFkVeREB.', NULL, '2022-07-25 18:46:24', '2022-07-25 18:46:24', 0, 0, '036dded2c27d9d4a5802451efb4fef86', 'Yes', 0, 0),
(52, 'Jorge', NULL, 'jorgepphotos@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '+56946781655', NULL, '$2y$10$0Lc3Zh0j5D0lVT9izwpuGe11q7G8qOW0xWV5uyKWRN/shn37SWXi.', NULL, '2022-07-27 14:18:47', '2022-07-27 14:18:47', 0, 0, '21ef59af449607d98a306e97087aa433', 'Yes', 0, 0),
(53, 'Carlos Arriagada Erices', 'https://graph.facebook.com/v3.3/10229686364642553/picture?width=1920', 'naazhoo_h7@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 14:38:22', '2022-07-27 14:38:22', 1, 0, NULL, 'Yes', 0, 0),
(54, 'Arturo Báez Hernández', 'https://graph.facebook.com/v3.3/1914135428796089/picture?width=1920', 'ventas@patagoniaplanet.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 22:56:05', '2022-07-27 22:56:05', 1, 0, NULL, 'Yes', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_social_providers`
--

CREATE TABLE `users_social_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users_social_providers`
--

INSERT INTO `users_social_providers` (`id`, `provider`, `provider_id`, `user_id`) VALUES
(1, 'facebook', '1755562931314586', 32),
(2, 'facebook', '4949874101740665', 33),
(3, 'google', '113272199859051996422', 34),
(4, 'google', '111293296618840727950', 35),
(5, 'facebook', '4964131973643588', 36),
(6, 'facebook', '1812151195661180', 37),
(7, 'google', '103577998325004499381', 39),
(8, 'facebook', '14002206604048', 40),
(9, 'facebook', '17002206559809', 41),
(10, 'facebook', '5347692938625444', 42),
(11, 'facebook', '10229686364642553', 53),
(12, 'facebook', '1914135428796089', 54);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` bigint(20) NOT NULL,
  `user_id` int(191) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `conversation_id` int(11) DEFAULT NULL,
  `order_type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `withdraw_methods`
--

CREATE TABLE `withdraw_methods` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `withdraw_methods`
--

INSERT INTO `withdraw_methods` (`id`, `name`, `status`) VALUES
(2, 'Paypal', 1),
(3, 'Bank', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `withdrews`
--

CREATE TABLE `withdrews` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `amount` double NOT NULL DEFAULT '0',
  `details` text,
  `status` int(11) NOT NULL DEFAULT '0',
  `fee` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indices de la tabla `admin_languages`
--
ALTER TABLE `admin_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admin_user_conversations`
--
ALTER TABLE `admin_user_conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `admin_user_messages`
--
ALTER TABLE `admin_user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `attr_trems`
--
ALTER TABLE `attr_trems`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `car_attrs`
--
ALTER TABLE `car_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `car_terms`
--
ALTER TABLE `car_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favarites`
--
ALTER TABLE `favarites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel_attrs`
--
ALTER TABLE `hotel_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel_order_items`
--
ALTER TABLE `hotel_order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hotel_room_attrs`
--
ALTER TABLE `hotel_room_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instagram_album_images`
--
ALTER TABLE `instagram_album_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orderteams`
--
ALTER TABLE `orderteams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order_cancels`
--
ALTER TABLE `order_cancels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagesettings`
--
ALTER TABLE `pagesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payment_gateways`
--
ALTER TABLE `payment_gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seotools`
--
ALTER TABLE `seotools`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `show_images`
--
ALTER TABLE `show_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `socialsettings`
--
ALTER TABLE `socialsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `spaces`
--
ALTER TABLE `spaces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `space_attrs`
--
ALTER TABLE `space_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `space_terms`
--
ALTER TABLE `space_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour_attrs`
--
ALTER TABLE `tour_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour_calendars`
--
ALTER TABLE `tour_calendars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tour_calendars_tour_id_foreign` (`tour_id`);

--
-- Indices de la tabla `tour_categories`
--
ALTER TABLE `tour_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour_inventories`
--
ALTER TABLE `tour_inventories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour_models`
--
ALTER TABLE `tour_models`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour_terms`
--
ALTER TABLE `tour_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tripadvisor_reviews`
--
ALTER TABLE `tripadvisor_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_social_providers`
--
ALTER TABLE `users_social_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_social_providers_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `withdrews`
--
ALTER TABLE `withdrews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `admin_languages`
--
ALTER TABLE `admin_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `admin_user_conversations`
--
ALTER TABLE `admin_user_conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `admin_user_messages`
--
ALTER TABLE `admin_user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de la tabla `attr_trems`
--
ALTER TABLE `attr_trems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `car_attrs`
--
ALTER TABLE `car_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `car_terms`
--
ALTER TABLE `car_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `favarites`
--
ALTER TABLE `favarites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `features`
--
ALTER TABLE `features`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=731;

--
-- AUTO_INCREMENT de la tabla `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hotel_attrs`
--
ALTER TABLE `hotel_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `hotel_order_items`
--
ALTER TABLE `hotel_order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `hotel_room_attrs`
--
ALTER TABLE `hotel_room_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `instagram_album_images`
--
ALTER TABLE `instagram_album_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=961;

--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `members`
--
ALTER TABLE `members`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `orderteams`
--
ALTER TABLE `orderteams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `order_cancels`
--
ALTER TABLE `order_cancels`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pagesettings`
--
ALTER TABLE `pagesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `payment_gateways`
--
ALTER TABLE `payment_gateways`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seotools`
--
ALTER TABLE `seotools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `show_images`
--
ALTER TABLE `show_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT de la tabla `socialsettings`
--
ALTER TABLE `socialsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `spaces`
--
ALTER TABLE `spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `space_attrs`
--
ALTER TABLE `space_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `space_terms`
--
ALTER TABLE `space_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `tour_attrs`
--
ALTER TABLE `tour_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tour_calendars`
--
ALTER TABLE `tour_calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `tour_categories`
--
ALTER TABLE `tour_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tour_inventories`
--
ALTER TABLE `tour_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tour_models`
--
ALTER TABLE `tour_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tour_terms`
--
ALTER TABLE `tour_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `tripadvisor_reviews`
--
ALTER TABLE `tripadvisor_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `users_social_providers`
--
ALTER TABLE `users_social_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `withdraw_methods`
--
ALTER TABLE `withdraw_methods`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `withdrews`
--
ALTER TABLE `withdrews`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tour_calendars`
--
ALTER TABLE `tour_calendars`
  ADD CONSTRAINT `tour_calendars_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour_models` (`id`);

--
-- Filtros para la tabla `users_social_providers`
--
ALTER TABLE `users_social_providers`
  ADD CONSTRAINT `users_social_providers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
