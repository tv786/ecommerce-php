-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 07:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerceapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(10, 'taha', 'tahavarda52@gmail.com', '$2y$10$rgEZHQCif2blwQs7OuuQQ.q9jcZjLx//pFbg09f2GFuuywOo0ZX.a', '0');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'Samsung '),
(6, 'Xiaomi '),
(12, 'One-Plus'),
(13, 'Apple'),
(14, 'Vivo'),
(15, 'Oppo'),
(16, 'Nokia');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `qty`) VALUES
(107, 89, 9, 1),
(108, 85, 9, 2),
(110, 89, 7, 1),
(112, 86, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'Leather Case'),
(5, 'Transparent Cover'),
(16, ' Plastic Case'),
(17, 'Rubber Cover'),
(18, ' Fabric Case'),
(19, ' Thin Slim Fit Case');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `design_details`
--

CREATE TABLE `design_details` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `design_desc` text NOT NULL,
  `design_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_details`
--

INSERT INTO `design_details` (`id`, `u_id`, `pro_id`, `name`, `design_desc`, `design_img`) VALUES
(64, 9, 85, 'unique shopee', 'HII EVERY ONE', 'designs_images/signup page.JPG'),
(69, 9, 90, 'abizer', 'nothing to say', 'designs_images/vector.png'),
(70, 9, 91, 'mufaddal', 'my name is muffu', 'designs_images/sprinter logo.JPG'),
(71, 9, 92, 'WOOCOMMERCE', 'HII EVERY ONE', 'designs_images/frontend start.jpg'),
(72, 9, 92, 'WOOCOMMERCE', 'HII EVERY ONE', 'designs_images/frontend start.jpg'),
(73, 9, 86, 'nv', 'nisreen here', 'designs_images/Chocolate  Milk Shake.jpg'),
(74, 9, 86, 'nv', 'nisreen here', 'designs_images/Chocolate  Milk Shake.jpg'),
(76, 9, 89, 'unique shopee', 'thank you very much', 'designs_images/choclate cake.jpg'),
(78, 7, 85, 'tv', 'thank you very much', 'designs_images/Fresh-Mango-Cake.jpg'),
(80, 7, 91, 'abi', 'hieverone', 'designs_images/jamea ul anwar.jpg'),
(81, 7, 91, 'abi', 'hieverone', 'designs_images/jamea ul anwar.jpg'),
(83, 7, 88, 'taha', 'in the centre', 'designs_images/IMG_20190116_150117-02.jpeg'),
(84, 7, 90, 'mufaddal', 'name in orange color', 'designs_images/Oreo Milk Shake.jpg'),
(90, 7, 92, 'taha', 'just for testing', 'designs_images/Banana Milk Shake.jpg'),
(91, 7, 92, 'taha', 'just for testing', 'designs_images/Banana Milk Shake.jpg'),
(92, 7, 92, 'taha', 'just for testing', 'designs_images/Banana Milk Shake.jpg'),
(93, 7, 86, 'Taha', '* name in centre ', 'designs_images/design 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 7, 88, 1, '9L434522M7706801A', 'Completed'),
(2, 9, 85, 1, '9L434522M7706801A', 'Completed'),
(5, 7, 88, 1, '0G980356JR892071E', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `short_desc`, `product_image`, `product_keywords`) VALUES
(85, 17, 6, 'Redmi Note 10 ', 149, 10, 'Get Your Design Printed on Your Mobile Phone Cover.\r\n-> Soft Cover', 'gs3', '1623655020_REDMI NOTE 10.png', 'y'),
(86, 18, 2, 'Samsung galaxy note 10 ', 5, 10, 'Get your Designed printed on your mobile cover.\r\n-> Lite cover', 'good product', '1623658930_SAMSUNG GALAXY NOTE 10.png', 'mobile phone cover, designed'),
(88, 17, 6, 'Redmi Note 9 Pro/Note 9 Pro Max', 149, 10, 'Get Customized Mobile cover now.\r\n->Hard Cover', '', '1623659358_REDMI NOTE 9 PRO.png', 'mobile phone cover, designed'),
(89, 3, 6, 'Remi Note 7 Pro', 149, 10, 'Get Your Name Printed on your mobile phone cover.', '', '1623664245_REMI NOTE 7 (leather ).png', 'mobile cover'),
(90, 5, 15, 'Oppo F17 Pro ', 149, 10, 'Get Your Name Printed on your mobile phone cover.', '', '1623665575_OPPO F17 PRO.png', 'mobile cover'),
(91, 17, 15, 'Oppo F9 Pro', 149, 10, 'get your design printed on your mobile cover now.', 'Very Good Rubber Case', '1623735985_OPPO F9 PRO.png', 'mobile cover'),
(92, 5, 14, 'Vivo v15 Pro ', 149, 10, 'best offer: get your favourite design printed on your mobile phone cover.', 'Very good case', '1623737054_vivo v15 pro.jpeg', 'mobile case');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(7, 'taha', 'varda', 'tahavarda52@gmail.com', 'd9476e829a290ecb1daf3466909e783a', '8134568224', 'opp.', 'on earth'),
(8, 'taha', 'varda', 'tahavarda@gmail.com', 'c63bbb0d869599dfbff762238793d56b', '8134568224', 'opp.', 'on earth'),
(9, 't', 'v', 'nisreenvarda5253@gmail.com', 'c46b476aca03f3d9f58dba2a35370d12', '8135568224', 'opp.', 'on earth, m'),
(10, 'm', 'v', 'vardamufaddal5253@gmail.com', '4f59edd89dcaf7ee182b84e42a339ba4', '0800375027', 'Celebration mall', 'udaipur'),
(11, 'g', 'n', 'xyz@gmail.com', 'ab75468e6b4e85f884394e907bc93f23', '0800325027', 'Celebration mall', 'rrhthtt'),
(13, 'h', 'v', 'hv@gmail.com', '22c463f00d1d790a7e680939ee5b7b49', '8003150279', 'Celebration mall', 'rg'),
(14, 'abizer', 'vd', 'ab@gmail.com', '1d57fead3028cfbfb88429aeb0f0baeb', '7627067656', 'sagwara', 'udaipur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_details`
--
ALTER TABLE `design_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_cat` (`product_cat`),
  ADD KEY `fk_product_brand` (`product_brand`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `design_details`
--
ALTER TABLE `design_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
