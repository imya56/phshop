-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 05 2019 г., 19:04
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `cimage`, `curl`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '13.02.2019.16.43.19-ios-new-mobile-gadget-163096.jpeg', 'apple', '2019-01-25 20:24:04', '2019-02-13 16:43:19'),
(2, 'Samsung', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sams-cat.jpeg', 'samsung', '2019-01-25 20:36:12', '2019-01-25 20:36:12'),
(3, 'Tablets', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '11.02.2019.17.50.29-tabscat.jpg', 'tablets', '2019-01-25 20:52:38', '2019-02-11 17:50:49');

-- --------------------------------------------------------

--
-- Структура таблицы `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(16, 1, 'About us', '<section class=\"about_page\">\r\n         <div class=\"container\">\r\n            <div class=\"row\">\r\n               <div class=\"col-lg-8 col-md-8 mx-auto\">\r\n                  <div>\r\n                     <div class=\"section-header section-header-center text-center\">\r\n                        <h5 class=\"text-primary\">SINCE <b>1995</b></h5>\r\n                        <h3 class=\"heading-design-center-h3\">\r\n                           About Osahan Mobile\r\n                        </h3>\r\n                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque<br> lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. </p>\r\n                        <br>\r\n                     </div>\r\n                     <div class=\"row\">\r\n                        <div class=\"col-lg-4 col-md-4\">\r\n                           <div class=\"about_page_widget widget\">\r\n                              <i class=\"icofont icofont-files\"></i>\r\n                              <h2>60 Million+</h2>\r\n                              <h5>Products</h5>\r\n                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n                           </div>\r\n                        </div>\r\n                        <div class=\"col-lg-4 col-md-4\">\r\n                           <div class=\"about_page_widget widget\">\r\n                              <i class=\"icofont icofont-cart-alt\"></i>\r\n                              <h2>300,000</h2>\r\n                              <h5>Sellers</h5>\r\n                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n                           </div>\r\n                        </div>\r\n                        <div class=\"col-lg-4 col-md-4\">\r\n                           <div class=\"about_page_widget widget\">\r\n                              <i class=\"icofont icofont-globe\"></i>\r\n                              <h2>6000+</h2>\r\n                              <h5>Cities</h5>\r\n                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n                           </div>\r\n                        </div>\r\n                     </div>\r\n                  </div>\r\n               </div>\r\n            </div>\r\n         </div>\r\n      </section>', '2019-02-13 20:59:12', '2019-02-12 21:11:48'),
(17, 3, 'Contact', '<div>&nbsp;</div>      <section class=\"about_page\">\r\n         <div class=\"container\">\r\n            <div class=\"section-header section-header-center text-center\">\r\n               <h3 class=\"heading-design-center-h3\">\r\n                  contact information\r\n               </h3>\r\n               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque<br> lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. </p>\r\n               <br>\r\n            </div>\r\n            <div class=\"row\">\r\n               <div class=\"col-lg-8 col-md-8 mx-auto\">\r\n                  <div class=\"row\">\r\n                     <div class=\"col-lg-4 col-md-4\">\r\n                        <div class=\"about_page_widget widget\">\r\n                           <i class=\"icofont icofont-iphone\"></i>\r\n                           <h5>Phone</h5>\r\n                           <h2>+1-23-456789</h2>\r\n                           <p>Fax: +1-23-456789</p>\r\n                        </div>\r\n                     </div>\r\n                     <div class=\"col-lg-4 col-md-4\">\r\n                        <div class=\"about_page_widget widget\">\r\n                           <i class=\"icofont icofont-location-pin\"></i>\r\n                           <h5>Address</h5>\r\n                           <h2>London U.K</h2>\r\n                           <p>Sheram 113</p>\r\n                        </div>\r\n                     </div>\r\n                     <div class=\"col-lg-4 col-md-4\">\r\n                        <div class=\"about_page_widget widget\">\r\n                           <i class=\"icofont icofont-ui-email\"></i>\r\n                           <h5>Email</h5>\r\n                           <h2>info@abc.com</h2>\r\n                           <p>iamosahan@email.com</p>\r\n                        </div>\r\n                     </div>\r\n                  </div>\r\n               </div>\r\n            </div>\r\n         </div>\r\n      </section>', '2019-02-13 16:41:25', '2019-02-12 21:45:56');

-- --------------------------------------------------------

--
-- Структура таблицы `home_products`
--

CREATE TABLE `home_products` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_place` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home_products`
--

INSERT INTO `home_products` (`id`, `product_id`, `product_place`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 21, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 15, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 22, 3, '2019-04-15 21:11:06', '2019-04-15 21:11:06'),
(11, 14, 6, '2019-04-15 21:12:43', '2019-04-15 21:12:43'),
(19, 20, 7, '2019-05-02 15:38:41', '2019-05-02 15:38:41'),
(20, 25, 8, '2019-05-02 15:40:58', '2019-05-02 15:40:58'),
(22, 24, 4, '2019-05-02 15:57:15', '2019-05-02 15:57:15'),
(26, 27, 2, '2019-05-02 16:21:09', '2019-05-02 16:21:09'),
(28, 2, 1, '2019-05-02 17:02:57', '2019-05-02 17:02:57');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(1, 'About', 'about-us', 'About U', '2019-02-11 21:02:30', '2019-01-30 16:28:21'),
(2, 'Sale', 'sale', 'Our Sale', '2019-02-02 12:39:40', '2019-01-30 16:28:48'),
(3, 'Contact', 'contact-us', 'Contact', '2019-01-30 16:29:28', '2019-01-30 16:29:28'),
(4, 'test', 'test', 'test', '2019-02-13 16:33:29', '2019-02-13 16:33:29');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `data` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `data`, `updated_at`, `created_at`) VALUES
(1, 3, '1395.00', 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:14:\"Apple Iphone X\";s:5:\"price\";d:925;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:13:\"iphone-x.jpeg\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:14:\"Apple Iphone 6\";s:5:\"price\";d:470;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:13:\"iphone-6.jpeg\";}s:10:\"conditions\";a:0:{}}}', '2019-01-30 13:39:29', '2019-01-30 13:39:29'),
(2, 3, '800.00', 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:17:\"Samsung Galaxy S8\";s:5:\"price\";d:800;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:14:\"galaxy-s8.jpeg\";}s:10:\"conditions\";a:0:{}}}', '2019-01-30 13:41:15', '2019-01-30 13:41:15'),
(3, 3, '925.00', 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:14:\"Apple Iphone X\";s:5:\"price\";d:925;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:13:\"iphone-x.jpeg\";}s:10:\"conditions\";a:0:{}}}', '2019-01-30 13:42:11', '2019-01-30 13:42:11'),
(4, 9, '1395.00', 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:14:\"Apple Iphone X\";s:5:\"price\";d:925;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:13:\"iphone-x.jpeg\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:14:\"Apple Iphone 6\";s:5:\"price\";d:470;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:13:\"iphone-6.jpeg\";}s:10:\"conditions\";a:0:{}}}', '2019-02-09 18:23:14', '2019-02-09 18:23:14'),
(5, 3, '1707.00', 'a:3:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:14:\"Apple Iphone X\";s:5:\"price\";d:925;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:13:\"iphone-x.jpeg\";}s:10:\"conditions\";a:0:{}}i:16;a:6:{s:2:\"id\";s:2:\"16\";s:4:\"name\";s:9:\"Iphone SE\";s:5:\"price\";d:382;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:44:\"09.02.2019.13.41.11-pexels-photo-270686.jpeg\";}s:10:\"conditions\";a:0:{}}i:14;a:6:{s:2:\"id\";s:2:\"14\";s:4:\"name\";s:14:\"Iphone 6s PlUS\";s:5:\"price\";d:400;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:62:\"09.02.2019.13.33.02-iphone-6-apple-ios-iphone-ios-8-50680.jpeg\";}s:10:\"conditions\";a:0:{}}}', '2019-02-13 11:33:10', '2019-02-13 11:33:10'),
(6, 3, '2100.00', 'a:2:{i:20;a:6:{s:2:\"id\";s:2:\"20\";s:4:\"name\";s:12:\"Apple Ipad 3\";s:5:\"price\";d:500;s:8:\"quantity\";i:3;s:10:\"attributes\";a:1:{s:5:\"image\";s:39:\"11.02.2019.18.16.56-ipad-147691_640.png\";}s:10:\"conditions\";a:0:{}}i:22;a:6:{s:2:\"id\";s:2:\"22\";s:4:\"name\";s:16:\"Lenovo Tablet 10\";s:5:\"price\";d:600;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:41:\"11.02.2019.18.40.42-tablet-184888_640.jpg\";}s:10:\"conditions\";a:0:{}}}', '2019-02-13 21:31:23', '2019-02-13 21:31:23'),
(7, 3, '400.00', 'a:1:{i:17;a:6:{s:2:\"id\";s:2:\"17\";s:4:\"name\";s:24:\"Samsung Galaxy Note Edge\";s:5:\"price\";d:400;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:60:\"09.02.2019.13.44.42-samsung-galaxt-note-edge-1283897_640.jpg\";}s:10:\"conditions\";a:0:{}}}', '2019-02-13 21:33:43', '2019-02-13 21:33:43'),
(8, 14, '199.00', 'a:1:{i:21;a:6:{s:2:\"id\";s:2:\"21\";s:4:\"name\";s:20:\"Samsung Galaxy Tab 4\";s:5:\"price\";d:199;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:40:\"11.02.2019.18.21.24-ipad-1065284_640.png\";}s:10:\"conditions\";a:0:{}}}', '2019-02-16 18:10:46', '2019-02-16 18:10:46');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `new_price` decimal(8,2) DEFAULT NULL,
  `purl` varchar(255) NOT NULL,
  `onSale` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `price`, `new_price`, `purl`, `onSale`, `created_at`, `updated_at`) VALUES
(2, 1, 'Apple Iphone 6', 'When renaming/copying/moving a database/table/column/procedure, MySQL does not adjust the original privileges relating to these objects on its own. By selecting this option, phpMyAdmin will adjust the privilege table so that users have the same privileges on the new items.\r\n\r\nFor example: A user \'bob\'@\'localhost‘ has a ‘SELECT’ privilege on a column named ‘id’. Now, if this column is renamed to ‘id_new’, MySQL, on its own, would not adjust the column privileges to the new column name. phpMyAdmin can make this adjustment for you automatically.', 'iphone-6.jpeg', '470.00', '320.00', 'iphone-6', 1, '2019-01-25 22:47:32', '2019-02-10 08:56:37'),
(14, 1, 'Iphone 6s PlUS', '<p>fgdbs</p>', '09.02.2019.13.33.02-iphone-6-apple-ios-iphone-ios-8-50680.jpeg', '400.00', '345.00', 'iphone-6s-plus', 1, '2019-02-09 13:33:03', '2019-02-15 14:25:14'),
(15, 2, 'Galaxy s6 Edge', '<p>text text text</p><p><br></p>', '09.02.2019.13.37.48-electronics-gadget-mobile-phone-214488.jpg', '350.00', '0.00', 'galaxy-s6-edge', 0, '2019-02-09 13:37:49', '2019-05-01 16:01:27'),
(16, 1, 'Iphone SE', '<p>jboadk ngoj&nbsp;&nbsp;&nbsp;&nbsp;</p>', '09.02.2019.13.41.11-pexels-photo-270686.jpeg', '382.00', NULL, 'iphone-se', 0, '2019-02-09 13:41:11', '2019-02-09 13:41:11'),
(17, 2, 'Samsung Galaxy Note Edge', '<p>hbvdfbdfnbdfb</p>', '09.02.2019.13.44.42-samsung-galaxt-note-edge-1283897_640.jpg', '400.00', NULL, 'samsung-galaxy-note-edge', 0, '2019-02-09 13:44:42', '2019-02-09 13:44:42'),
(20, 3, 'Apple Ipad 3', '<p>texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext<br></p>', '11.02.2019.18.16.56-ipad-147691_640.png', '500.00', '45.00', 'apple-ipad-3', 1, '2019-02-11 18:16:56', '2019-02-15 14:23:24'),
(21, 3, 'Samsung Galaxy Tab 4', '<p>texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext<br></p>', '11.02.2019.18.21.24-ipad-1065284_640.png', '199.00', '234.00', 'samsung-galaxy-tab-4', 1, '2019-02-11 18:21:24', '2019-02-15 14:28:04'),
(22, 3, 'Lenovo Tablet 10', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; letter-spacing: -0.224px; white-space: nowrap;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><span style=\"color: rgb(51, 51, 51); font-family: &quot;SF Pro Text&quot;, &quot;SF Pro Icons&quot;, &quot;AOS Icons&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; letter-spacing: -0.224px; white-space: nowrap; font-size: 0.875rem;\">teztv&nbsp;</span><br></p>', '11.02.2019.18.40.42-tablet-184888_640.jpg', '600.00', NULL, 'lenovo-tablet-10', 0, '2019-02-11 18:40:42', '2019-02-15 13:57:55'),
(23, 2, 'Samsung S4', '<p>text text text text text text text&nbsp;</p>', '01.05.2019.16.02.20-smartphone-1957740_640.jpg', '234.00', '222.00', 'samsung-s4', 1, '2019-05-01 16:02:20', '2019-05-01 16:02:20'),
(24, 1, 'Iphone 7', '<p>text text text text text&nbsp;</p>', '01.05.2019.16.26.10-smartphone-1894723_640.jpg', '555.00', '0.00', 'iphone-7', 0, '2019-05-01 16:26:10', '2019-05-01 16:26:10'),
(25, 1, 'Iphone 4', '<p>txt text text text text text text text text text text text text text</p>', '02.05.2019.15.35.42-smartphone-153650_640.png', '222.00', '0.00', 'iphone-4', 0, '2019-05-02 15:35:42', '2019-05-02 15:35:42'),
(26, 1, 'iphone 4 mini', '<p>text text text text text text text text text text</p>', '02.05.2019.16.09.17-mobile-phone-2198770_640.png', '222.00', '0.00', 'iphone-4-mini', 0, '2019-05-02 16:09:18', '2019-05-02 16:09:18'),
(27, 1, 'iphone 5 white', '<p>text text text text text text text text text text</p>', '02.05.2019.16.20.56-smartphone-157082_1280.png', '345.00', '0.00', 'iphone-5-white', 0, '2019-05-02 16:20:56', '2019-05-02 16:20:56');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'imya56', 'imya56@gmail.com', '$2y$10$BqhhyC06a0.3ANFhdUsB/eSJj22MlAQ/vmkxfMSzSLu0tjbkiNm/O', '2019-02-27 22:40:18', '2019-02-27 22:40:18');

-- --------------------------------------------------------

--
-- Структура таблицы `users_roles`
--

CREATE TABLE `users_roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_roles`
--

INSERT INTO `users_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 6),
(2, 2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlists`
--

CREATE TABLE `wishlists` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wishlists`
--

INSERT INTO `wishlists` (`user_id`, `product_id`) VALUES
(9, 1),
(9, 2),
(9, 16),
(9, 14),
(14, 21),
(3, 20),
(3, 14),
(3, 16),
(3, 1),
(3, 2),
(1, 22);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `home_products`
--
ALTER TABLE `home_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`purl`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `home_products`
--
ALTER TABLE `home_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users_roles`
--
ALTER TABLE `users_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
