-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 09:23 PM
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
-- Database: `s_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `img`) VALUES
(1, 'frontend-assets/img/brand1.png'),
(2, 'frontend-assets/img/brand2.png'),
(3, 'frontend-assets/img/brand3.png'),
(4, 'frontend-assets/img/brand4.png'),
(5, 'frontend-assets/img/brand5.png'),
(6, 'frontend-assets/img/brand6.png');

-- --------------------------------------------------------

--
-- Table structure for table `company_infos`
--

CREATE TABLE `company_infos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `short_des` varchar(255) NOT NULL,
  `long_des` text DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company_infos`
--

INSERT INTO `company_infos` (`id`, `name`, `logo`, `short_des`, `long_des`, `address`, `mobile`, `facebook`, `twitter`, `youtube`, `linkedin`) VALUES
(1, 'S-Shop', 'frontend-assets/img/logo.png', 'An online shop', 'Best online shop in your area', 'Shankar, Dhaka', '01306472108', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.youtube.com', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) DEFAULT NULL,
  `new_pice` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `details`, `new_pice`, `old_price`) VALUES
(1, 'frontend-assets/img/product-1.jpg', 'Samsung Galaxy s5- 2015', 'best phone for rough usage', '$700.00', '$100.00'),
(2, 'frontend-assets/img/product-2.jpg', 'Nokia Lumia 1320', 'you can use it as hammer', '$899011.00', '$9995454.00'),
(3, 'frontend-assets/img/product-3.jpg', 'LG Leon 2015', NULL, '$40075.00', '$4256565.00'),
(4, 'frontend-assets/img/product-4.jpg', 'Sony microsoft', NULL, '$20445240.00', '$22424545.00'),
(5, 'frontend-assets/img/product-5.jpg', 'iPhone 6', NULL, '$1245400.00', '$1344555.00'),
(6, 'frontend-assets/img/product-6.jpg', 'Samsung gallaxy note 4', NULL, '$404540.00', '$4.00'),
(8, NULL, 'ddsds', 'dgfdgfdgdf', '555', '5656565');

-- --------------------------------------------------------

--
-- Table structure for table `recently_vieweds`
--

CREATE TABLE `recently_vieweds` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) NOT NULL,
  `old_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recently_vieweds`
--

INSERT INTO `recently_vieweds` (`id`, `img`, `des`, `new_price`, `old_price`) VALUES
(1, 'frontend-assets/img/product-thumb-4.jpg', 'Sony playstation microsoft', '$44400.00', '$442222225.00'),
(2, 'frontend-assets/img/product-thumb-1.jpg', 'Sony Smart Air Condtion', '$424.00', '$4545.00'),
(3, 'frontend-assets/img/product-thumb-2.jpg', 'Samsung gallaxy note 4', '$55.00', '$11.00'),
(5, '', 'fdsfsdaf', '5656', '565646');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name_first` varchar(255) DEFAULT NULL,
  `name_second` varchar(255) DEFAULT NULL,
  `name_third` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `name_first`, `name_second`, `name_third`, `des`) VALUES
(1, 'frontend-assets/img/h4-slide.png', 'iPhone', '6', 'Plus', 'Dual SIM'),
(2, 'frontend-assets/img/h4-slide2.png', 'by one, get one', '50%', 'off', 'school supplies & backpacks.*'),
(3, 'frontend-assets/img/h4-slide3.png', 'Apple', 'Store', 'Ipoduu', 'Select Item'),
(4, 'frontend-assets/img/h4-slide4.png', 'Apple', 'Store', 'Ipod', '& Phone');

-- --------------------------------------------------------

--
-- Table structure for table `top_news`
--

CREATE TABLE `top_news` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) NOT NULL,
  `old_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `top_news`
--

INSERT INTO `top_news` (`id`, `img`, `des`, `new_price`, `old_price`) VALUES
(1, 'frontend-assets/img/product-thumb-3.jpg', 'Apple new i phone 6', '$4.00', '$6.00'),
(2, 'frontend-assets/img/product-thumb-4.jpg', 'Samsung gallaxy note 4', '$77.00', '$88.00'),
(3, 'frontend-assets/img/product-thumb-1.jpg', 'Sony playstation microsoft', '$0.00', '$8888.00');

-- --------------------------------------------------------

--
-- Table structure for table `top_sellers`
--

CREATE TABLE `top_sellers` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `new_price` varchar(255) NOT NULL,
  `old_price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `top_sellers`
--

INSERT INTO `top_sellers` (`id`, `img`, `des`, `new_price`, `old_price`) VALUES
(1, 'frontend-assets/img/product-thumb-1.jpg', 'Sony Smart TV - 2015', '$400.00', '$425.00'),
(2, 'frontend-assets/img/product-thumb-2.jpg', 'Apple new mac book 2015', '$44400.00', '$4454425.00'),
(3, 'frontend-assets/img/product-thumb-3.jpg', 'Apple new i phone 6', '$4454545400.00', '$4444425.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_infos`
--
ALTER TABLE `company_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recently_vieweds`
--
ALTER TABLE `recently_vieweds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_news`
--
ALTER TABLE `top_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_sellers`
--
ALTER TABLE `top_sellers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_infos`
--
ALTER TABLE `company_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recently_vieweds`
--
ALTER TABLE `recently_vieweds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_news`
--
ALTER TABLE `top_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `top_sellers`
--
ALTER TABLE `top_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
