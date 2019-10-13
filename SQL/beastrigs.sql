-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 06:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beastrigs`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE `processors` (
  `serialNo` int(11) NOT NULL,
  `modelNo` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL COMMENT 'amd or intel',
  `productName` varchar(255) NOT NULL,
  `codeName` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `generation` varchar(20) NOT NULL,
  `cores` varchar(255) NOT NULL,
  `threads` varchar(255) NOT NULL,
  `baseSpeed` varchar(20) NOT NULL,
  `turboSpeed` varchar(20) NOT NULL,
  `cache` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `compatibility` varchar(255) NOT NULL,
  `p_image1` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`serialNo`, `modelNo`, `category`, `productName`, `codeName`, `price`, `generation`, `cores`, `threads`, `baseSpeed`, `turboSpeed`, `cache`, `description`, `title`, `compatibility`, `p_image1`, `p_image2`, `p_image3`, `created_at`, `updated_at`) VALUES
(1267, 'Anish1234', 'intel', 'I9', 'Coffee Lake', 48000, '3rd Gen', '8 cores', '16 Threads', '4.5ghz', '9.5Ghz', '75MB', '<p>Babay</p>', 'I9 turbo Babay', 'None', '1._1570973678.jpg', 'download_1570973678.png', 'websiteLogo1_1570973678.PNG', '2019-10-13', '2019-10-13 08:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email_id` varchar(500) NOT NULL,
  `first_name` text NOT NULL,
  `mid_name` text DEFAULT NULL,
  `last_name` text NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL COMMENT 'M: Male F: Female',
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `state` char(25) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email_id`, `first_name`, `mid_name`, `last_name`, `date_of_birth`, `mobile_no`, `gender`, `address_line_1`, `address_line_2`, `landmark`, `pincode`, `state`, `updated_at`, `created_at`) VALUES
('anish.chhabria007@gmail.com', 'Anish', 'Anish', 'Chhabria', '1888-01-02', 9619297842, 'M', 'abc', 'abc', 'abc', 400074, 'mizoram', '2019-10-06 10:47:42', '2019-10-06'),
('anish.chhabria087@gmail.com', 'Anish', 'Ashok', 'Chhabria', '2019-10-10', 9999954545, 'M', 'avc', 'sqsq', 'qsqsq', 400074, 'maharashtra', '2019-10-13 01:14:26', '2019-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`serialNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
