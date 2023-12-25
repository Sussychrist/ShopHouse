-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 11:13 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(7, 'Nike', 'nike', 'Ut dolore enim ea laborum temporibus eos quibusdam laborum et molestiae repellat. Sit nihil quam sed similique veritatis sit praesentium animi. Est ducimus nemo id enim velit hic error voluptates.', 0, 0, '1679468329.jpg', 'Nike', 'Ut dolore enim ea laborum temporibus eos quibusdam laborum et molestiae repellat. Sit nihil quam sed similique veritatis sit praesentium animi. Est ducimus nemo id enim velit hic error voluptates.', 'Ut dolore enim ea laborum temporibus eos quibusdam laborum et molestiae repellat. Sit nihil quam sed similique veritatis sit praesentium animi. Est ducimus nemo id enim velit hic error voluptates.', '2023-03-22 06:58:49'),
(8, 'Laptop', 'laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0, 1, '1679741020.png', 'Laptop', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-25 10:43:40'),
(9, 'Mobile ', 'mobile', 'Smart phone', 0, 1, '1679767938.png', 'Mobile ', 'Smart phone', 'Smart phone', '2023-03-25 18:12:18'),
(10, 'Controller', 'controller', 'a device used to operate or control a machine, a computer game, etc.', 0, 1, '1679855050.png', 'controller', 'a device used to operate or control a machine, a computer game, etc.', 'controller', '2023-03-26 18:24:10'),
(11, 'Cooker', 'cooker', 'Much better than your girlfriend', 0, 1, '1679855173.jpg', 'Cooker', 'Much better than your girlfriend', 'Cooker', '2023-03-26 18:26:13'),
(12, 'Electronics', 'electronics', 'The scientific study of electric current and the technology that uses it.', 0, 1, '1679855532.jpg', 'Electronics', 'The scientific study of electric current and the technology that uses it.', 'Electronics', '2023-03-26 18:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(6, 'LOL550768368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'Momy', 2937, 720, 'COD', '', 2, NULL, '2023-04-08 20:25:38'),
(7, 'LOL487768368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'fwwdw', 4883, 150, 'COD', '', 0, NULL, '2023-04-08 22:06:41'),
(8, 'LOL241168368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'dfhjdfkjd', 6432, 150, 'Paid with PayPal', '34A10153H0133135X', 0, NULL, '2023-04-08 22:54:07'),
(9, 'LOL289968368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'das', 8978, 150, 'Paid with PayPal', '8H847778MK0980135', 0, NULL, '2023-04-08 22:55:32'),
(10, 'LOL360268368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'dwad', 85439, 150, 'Paid with PayPal', '15537968AA2230413', 0, NULL, '2023-04-08 23:02:33'),
(11, 'LOL482468368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'dsfsaf', 432, 420, 'Paid with PayPal', '5P090773J3328513B', 0, NULL, '2023-04-08 23:04:55'),
(12, 'LOL664168368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'dsada', 64565, 150, 'Paid with PayPal', '45588858NT688922Y', 0, NULL, '2023-04-08 23:13:17'),
(13, 'LOL934468368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, '54235fsf', 5345, 420, 'Paid with PayPal', '96U504003X856041J', 0, NULL, '2023-04-08 23:17:10'),
(14, 'LOL937368368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'dfff', 353, 420, 'Paid with PayPal', '12K25794GF391012M', 0, NULL, '2023-04-09 08:42:20'),
(15, 'LOL235868368631', 1, 'loltime31', '50000thuan@gmail.cpm', 868368631, 'édfe', 423, 150, 'Paid with PayPal', '7U905575C54580530', 0, NULL, '2023-04-09 08:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(9, 5, 8, 1, 150, '2023-04-08 18:57:46'),
(10, 5, 15, 1, 100, '2023-04-08 18:57:46'),
(11, 6, 10, 1, 150, '2023-04-08 20:25:38'),
(12, 6, 8, 1, 150, '2023-04-08 20:25:38'),
(13, 6, 9, 1, 420, '2023-04-08 20:25:38'),
(14, 7, 10, 1, 150, '2023-04-08 22:06:41'),
(15, 8, 8, 1, 150, '2023-04-08 22:54:07'),
(16, 9, 3, 1, 150, '2023-04-08 22:55:32'),
(17, 10, 8, 1, 150, '2023-04-08 23:02:33'),
(18, 11, 9, 1, 420, '2023-04-08 23:04:55'),
(19, 12, 8, 1, 150, '2023-04-08 23:13:17'),
(20, 13, 9, 1, 420, '2023-04-08 23:17:10'),
(21, 14, 9, 1, 420, '2023-04-09 08:42:20'),
(22, 15, 8, 1, 150, '2023-04-09 08:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'SmartPhone', 152.00, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 'Redmi', 'SmartPhone', 122.00, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Redmi', 'SmartPhone', 122.00, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Redmi', 'SmartPhone', 122.00, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Redmi', 'SmartPhone', 122.00, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Redmi', 'SmartPhone', 122.00, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Redmi', 'SmartPhone', 122.00, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Redmi', 'SmartPhone', 122.00, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Samsung', 'SmartPhone', 152.00, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Samsung', 'SmartPhone', 152.00, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Apple', 'SmartPhone', 152.00, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Apple', 'SmartPhone', 152.00, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Apple', 'SmartPhone', 152.00, './assets/products/15.png', '2020-03-28 11:08:57'),
(14, 'Toshiba', 'Cooker', 152.00, './assets/products/Cooker/10003002-noi-com-dien-happy-cook-0-6-lit-hc-060-1.jpg', '2020-03-28 11:08:57'),
(15, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10012149-noi-com-dien-cuckoo-1-8-lit-crp-g1015m-r-1_wjxt-q1.jpg', '2020-03-28 11:08:57'),
(16, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10026256-noi-com-dien-cuckoo-1-8-lit-cr-1055-1_sk7h-ep.jpg', '2020-03-28 11:08:57'),
(17, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10036633-noi-com-dien-toshiba-1-lit-rc-10jfm-h-vn-1.jpg', '2020-03-28 11:08:57'),
(18, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10036633-noi-com-dien-toshiba-1-lit-rc-10jfm-h-vn-1.jpg', '2020-03-28 11:08:57'),
(19, 'Toshiba', 'Cooker', 122.00, './assets/products/Cooker/10039245-noi-com-dien-tu-sharp-ks-com185ev-sl-1.jpg', '2020-03-28 11:08:57'),
(20, 'Dell Vostro', 'Laptop', 122.00, './assets/products/Laptop/10051065-laptop-dell-vostro-3405-v4r53500u003w1-1.jpg', '2020-03-28 11:08:57'),
(21, 'Asus Vivobook 15', 'Laptop', 122.00, './assets/products/Laptop/10052337-laptop-asus-vivobook-15-x1502za-bq127w-1.jpg', '2020-03-28 11:08:57'),
(22, 'Asus Tuf', 'Laptop', 152.00, './assets/products/Laptop/10052586-laptop-asus-tuf-gaming-f15-fx506hc-hn144w-1.jpg', '2020-03-28 11:08:57'),
(23, 'Acer Aspire 3', 'Laptop', 152.00, './assets/products/Laptop/10053511-laptop-acer-aspire-3-a315-59-381e-nx-k6tsv-006-1.jpg', '2020-03-28 11:08:57'),
(24, 'HP 340s', 'Laptop', 152.00, './assets/products/Laptop/10053987-laptop-hp-340s-g7-i3-1005g1-4gb-512gb-win10-224l0pa-1.jpg', '2020-03-28 11:08:57'),
(25, 'Lenovo Ideapad', 'Laptop', 152.00, './assets/products/Laptop/10054254-laptop-lenovo-ideapad-3-14iau7-i3-1215u-82rj001avn-1.jpg', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(3, 8, 'ASUS TUF', 'asus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 73, 150, '1679741103.jpg', 99, 0, 1, 'Laptop', 'Asus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-25 10:45:03'),
(8, 9, 'Iphone 5', 'iphone ', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 80, 150, '1679860682.png', 14, 0, 1, 'Mobile ', 'lol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-26 19:58:02'),
(9, 7, 'Grandma Shoes ', 'shoes', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 20, 420, '1679860750.jpg', 15, 0, 1, 'Lorem ipsum dolor sit ame', 'nike', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-26 19:59:10'),
(10, 10, 'Xbox', 'controller', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 80, 150, '1679860824.png', 63, 0, 1, 'Lorem ipsum dolor sit ame', 'Gaming', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-26 20:00:24'),
(11, 11, 'Toshiba', 'toshiba', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 73, 140, '1679860885.jpg', 39, 0, 1, 'Lorem ipsum dolor sit ame', 'Cooker', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-26 20:01:25'),
(12, 12, 'Motor', 'motor', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 20, 30, '1679860933.jpg', 20, 0, 1, 'Lorem ipsum dolor sit ame', 'Run', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2023-03-26 20:02:13'),
(13, 7, 'Lorem', 'lol', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus viverra adipiscing at in tellus integer. Duis ultricies lacus sed turpis tincidunt.\r\n\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus viverra adipiscing at in tellus integer. Duis ultricies lacus sed turpis tincidunt.\r\n\r\n', 150, 120, '1680127779.jpg', 19, 0, 1, 'Nike', '0', '0', '2023-03-29 22:09:39'),
(15, 7, 'dolor', 'dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus viverra adipiscing at in tellus integer. Duis ultricies lacus sed turpis tincidunt.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus viverra adipiscing at in tellus integer. Duis ultricies lacus sed turpis tincidunt.', 180, 100, '1680127902.jpg', 9, 0, 1, 'Nike', '0', '0', '2023-03-29 22:11:42'),
(17, 7, 'consectetur', 'consectetur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Risus pretium quam vulputate dignissim suspendisse in. In metus vulputate eu scelerisque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Risus pretium quam vulputate dignissim suspendisse in. In metus vulputate eu scelerisque.', 170, 76, '1680128023.jpg', 12, 0, 0, 'Nike', '0', '0', '2023-03-29 22:13:43'),
(18, 7, 'adipiscing ', 'adipiscing ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Risus pretium quam vulputate dignissim suspendisse in. In metus vulputate eu scelerisque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Risus pretium quam vulputate dignissim suspendisse in. In metus vulputate eu scelerisque.', 231, 100, '1680128082.jpg', 23, 0, 0, 'Nike', '0', '0', '2023-03-29 22:14:42'),
(19, 7, 'elit', 'elit', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Risus pretium quam vulputate dignissim suspendisse in. In metus vulputate eu scelerisque.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sit amet consectetur adipiscing elit pellentesque habitant. Risus pretium quam vulputate dignissim suspendisse in. In metus vulputate eu scelerisque.', 97, 56, '1680128220.jpg', 12, 0, 0, 'Nike', '0', '0', '2023-03-29 22:17:00'),
(20, 9, 'Samsung Galaxy S23 5G', 'Samsung Galaxy S23 5G', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 150, 100, '1680129006.png', 12, 0, 1, 'Mobile ', '0', '0', '2023-03-29 22:30:06'),
(21, 9, 'OPPO Reno8 T 5G', 'OPPO Reno8 T 5G', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 150, 76, '1680129070.png', 4, 0, 1, 'Mobile ', '0', '0', '2023-03-29 22:31:10'),
(22, 0, 'iPhone 14 Pro Max', 'iPhone 14 Pro Max', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 155, 80, '1680129150.png', 12, 0, 1, 'Mobile ', '0', '0', '2023-03-29 22:32:30'),
(23, 9, 'Samsung Galaxy S21 FE 5G', 'Samsung Galaxy S21 FE 5G', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 160, 78, '1680129208.png', 3, 0, 1, 'Mobile ', '0', '0', '2023-03-29 22:33:28'),
(24, 9, 'Xiaomi Redmi 12C', 'Xiaomi Redmi 12C', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 180, 130, '1680129278.png', 5, 0, 1, 'Mobile ', '0', '0', '2023-03-29 22:34:38'),
(25, 9, 'Samsung Galaxy S23 Ultra 5G', 'Samsung Galaxy S23 Ultra 5G', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 140, 100, '1680129333.png', 3, 0, 1, 'Mobile ', '0', '0', '2023-03-29 22:35:33'),
(26, 9, 'Vivo Y35', 'Vivo Y35', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 180, 100, '1680129418.png', 4, 1, 1, 'Mobile ', '0', '0', '2023-03-29 22:36:58'),
(27, 9, 'OPPO Reno8 series', 'OPPO Reno8 series', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 150, 140, '1680129463.png', 6, 1, 1, 'Mobile ', '0', '0', '2023-03-29 22:37:43'),
(28, 9, 'OPPO A55', 'OPPO A55', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie ac feugiat sed lectus vestibulum. Blandit cursus risus at ultrices mi. Scelerisque purus semper eget duis at tellus at urna condimentum.', 80, 26, '1680129508.png', 12, 1, 1, 'Mobile ', '0', '0', '2023-03-29 22:38:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `create_at`) VALUES
(1, 'loltime31', 'admin@gmail.cpm', 868368631, 'lol', 1, '2023-03-19 14:13:06'),
(2, 'loltime38', 'user@gmail.com', 868368631, 'klk', 0, '2023-03-19 14:13:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
