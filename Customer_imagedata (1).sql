-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2023 at 08:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer_imagedata`
--

CREATE TABLE `Customer_imagedata` (
  `username` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `image_id` varchar(255) NOT NULL,
  `Image_file` varchar(255) NOT NULL,
  `Image_name` varchar(255) NOT NULL,
  `temp_name` varchar(255) NOT NULL,
  `customer_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer_imagedata`
--

INSERT INTO `Customer_imagedata` (`username`, `id`, `image_id`, `Image_file`, `Image_name`, `temp_name`, `customer_id`) VALUES
('', 1, '0', 'earth-size-1024x1024-scale200-modern-600w-1306931020.webp', 'uploads/devtrainee123.myshopify.com_1695905705.webp', '', NULL),
('', 2, '0', 'image_2023_07_26T10_23_47_555Z.png', 'uploads/abhishekjaiswal@cedcommerce.com_1695906639.png', '', NULL),
('', 3, '0', '1694244699463.JPEG', 'uploads/abhishekjaisweral@cedcommerce.com_1695911581.JPEG', '', NULL),
('', 4, '0', '1691390175952.JPEG', 'uploads/abhishekjaiswwwal@cedcommerce.com_1695911812.JPEG', '', NULL),
('', 5, '0', 'image_2023_07_26T10_23_47_555Z.png', 'uploads/shitaal@cedcoss.com_1695911318.png', '', NULL),
('', 6, '0', 'image (1).png', 'uploads/shitalgupta1097@gmail.com_1695911516.png', '', NULL),
('', 7, '0', 'image_2023_07_26T10_23_47_555Z.png', 'uploads/shitassal@cedcoss.com_1695911740.png', '', NULL),
('', 8, '0', '1694244179486.JPEG', 'uploads/devtraienee123.myshopify.com_1695922112.JPEG', '', NULL),
('', 9, '0', '1694244699463.JPEG', 'uploads/VAR12_1695922614.JPEG', '', NULL),
('shital_gupta', 10, '0', 'Screenshot from 2023-09-26 18-36-01.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-26 18-36-01.png', '', NULL),
('shital_gupta', 11, '0', 'Screenshot from 2023-09-26 18-36-01.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-26 18-36-01.png', '', 8),
('shital_gupta', 12, '0', 'Screenshot from 2023-09-26 18-36-01.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-26 18-36-01.png', '', 8),
('shital_gupta', 13, '0', 'Screenshot from 2023-09-26 18-36-01.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-26 18-36-01.png', '', 8),
('shital_gupta', 14, '0', 'Screenshot from 2023-09-26 18-36-01.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-26 18-36-01.png', '', 8),
('shital_gupta', 15, '0', 'Screenshot from 2023-09-26 18-36-01.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-26 18-36-01.png', '', 8),
('shital_gupta', 16, '0', 'Screenshot from 2023-09-08 15-17-56.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-08 15-17-56.png', '', 8),
('shital_gupta', 17, '0', 'Screenshot from 2023-09-08 15-17-56.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-08 15-17-56.png', '', 8),
('shital_gupta', 18, 'cYvxnMp', 'Screenshot from 2023-09-12 18-43-37.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-12 18-43-37.png', '', 8),
('shital_gupta', 19, 'cYvxnMp', 'Screenshot from 2023-09-12 18-43-37.png', '/home/cedcoss/Pictures/Screenshot from 2023-09-12 18-43-37.png', '', 8),
('Shital@11', 21, 'd7TVv08', 'Screenshot from 2022-06-25 11-55-19.png', '/home/cedcoss/Pictures/Screenshot from 2022-06-25 11-55-19.png', '', 20),
('Shital@11', 22, 'd7TVv08', 'Screenshot from 2022-06-25 11-55-19.png', '/home/cedcoss/Pictures/Screenshot from 2022-06-25 11-55-19.png', '', 20),
('Shital@11', 23, 'd7TVv08', 'Screenshot from 2022-06-25 11-55-19.png', '/home/cedcoss/Pictures/Screenshot from 2022-06-25 11-55-19.png', '', 20),
('Shital@11', 24, 'd7TVv08', 'Screenshot from 2022-06-25 11-55-19.png', '/home/cedcoss/Pictures/Screenshot from 2022-06-25 11-55-19.png', '', 20),
('Shital@11', 25, 'FDmZQZQ', 'Screenshot from 2022-06-29 22-37-28.png', '/home/cedcoss/Pictures/Screenshot from 2022-06-29 22-37-28.png', '', 20),
('ankur@1097', 41, 'wWXTrZV', 'php-Ph-Nwe-P', 'https://i.ibb.co/R0m14Gf/php-Ph-Nwe-P.png', '/opt/lampp/temp/phpPhNweP', 23),
('Anjali gupta', 42, 'wWXTrZV', 'php-Ph-Nwe-P', 'https://i.ibb.co/R0m14Gf/php-Ph-Nwe-P.png', '/opt/lampp/temp/phpMu3IcQ', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer_imagedata`
--
ALTER TABLE `Customer_imagedata`
  ADD UNIQUE KEY `id_x` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer_imagedata`
--
ALTER TABLE `Customer_imagedata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
