-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 02:54 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `emailId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `emailId`) VALUES
(0, '2017.anshul.chaudhary@ves.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `cabinets`
--

CREATE TABLE `cabinets` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `caseDimensions` varchar(255) COLLATE utf8_bin NOT NULL,
  `maxGpuLength` int(11) NOT NULL COMMENT '(in mm)',
  `maxPsuLength` int(11) NOT NULL COMMENT '(in mm)',
  `maxCoolerLength` int(11) NOT NULL COMMENT '(in mm)',
  `caseExpansionSlot` int(11) NOT NULL,
  `caseDriverBays` varchar(255) COLLATE utf8_bin NOT NULL,
  `formFactor` varchar(255) COLLATE utf8_bin NOT NULL,
  `caseWindowed` varchar(255) COLLATE utf8_bin NOT NULL,
  `caseMaterial` varchar(255) COLLATE utf8_bin NOT NULL,
  `radiatorCompatibility` varchar(255) COLLATE utf8_bin NOT NULL,
  `liquidCoolersCompatibility` varchar(255) COLLATE utf8_bin NOT NULL,
  `casePowerSupply` varchar(255) COLLATE utf8_bin NOT NULL,
  `driveBays3.5` int(11) NOT NULL,
  `drivebays2.5` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `inStock` int(11) NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `cabinetImage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `cabinetImage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cabinets`
--

INSERT INTO `cabinets` (`modelNo`, `caseDimensions`, `maxGpuLength`, `maxPsuLength`, `maxCoolerLength`, `caseExpansionSlot`, `caseDriverBays`, `formFactor`, `caseWindowed`, `caseMaterial`, `radiatorCompatibility`, `liquidCoolersCompatibility`, `casePowerSupply`, `driveBays3.5`, `drivebays2.5`, `categoryId`, `inStock`, `p_image1`, `cabinetImage2`, `cabinetImage3`, `productName`, `title`, `description`, `cost`) VALUES
('CoolerMaster 酷冷至尊', '321545', 5, 55, 55, 3, '3', 'ATX', 'yes', 'aluminium', 'yes', 'yes', '123', 21, 2, 107, 5, '51YHxbzYPkL._AC_UY218_ML3_.jpg', '', '', 'Gaming PC', 'Cooler Master MasterBox K501L RGB Mid Tower Gaming Cabinet with Pre-installed Fans and Transparent Side Panel', 'Play your favorite games Crazy Games Like Dota 2, Shadow of Mordor, Battlefield , Star Wars BattleFront, Far Cry Primal, GTA V, FIFA , PUBG etc\r\nSystem: Intel Core i5 | 8GB DDR3 RAM | 1TB HDD | DOS | NVIDIA 1050ti 4GB Video Card | WIFI | HDMI Cable\r\nPC is', 5000),
('EB-I5-8GB-1TB-1050TI-WIFI-HDMI', '321545', 5, 55, 55, 3, '3', 'ATX', 'yes', 'aluminium', 'yes', 'yes', '123', 21, 2, 107, 0, '71tneCfSAPL._SR500,500_.jpg', '', '', 'Gaming PC', 'Electrobot PUBG Gaming PC/Intel i5 / H61 Motherboard / 8GB Ram/ 1 TB HDD/Nvidia 4GB GTX 1050ti / WiFi & HDMI Cable, Gaming Cabinet with 1 RGB Strip Lig', 'Play your favorite games Crazy Games Like Dota 2, Shadow of Mordor, Battlefield , Star Wars BattleFront, Far Cry Primal, GTA V, FIFA , PUBG etc\r\nSystem: Intel Core i5 | 8GB DDR3 RAM | 1TB HDD | DOS | NVIDIA 1050ti 4GB Video Card | WIFI | HDMI Cable\r\nPC is', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `userId`) VALUES
(1, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `cartId` int(10) UNSIGNED NOT NULL,
  `categoryId` int(11) NOT NULL,
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `coolingsystem`
--

CREATE TABLE `coolingsystem` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `itemHeight` int(11) NOT NULL COMMENT 'in cms',
  `itemWeight` int(11) NOT NULL COMMENT 'in kgs',
  `itemWidth` int(11) NOT NULL COMMENT 'in cms',
  `socketType` varchar(255) COLLATE utf8_bin NOT NULL,
  `coolingType` varchar(255) COLLATE utf8_bin NOT NULL,
  `wattage` varchar(255) COLLATE utf8_bin NOT NULL,
  `components` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `coolerimage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `coolerimage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `coolingsystem`
--

INSERT INTO `coolingsystem` (`modelNo`, `productName`, `title`, `description`, `brand`, `color`, `itemHeight`, `itemWeight`, `itemWidth`, `socketType`, `coolingType`, `wattage`, `components`, `categoryId`, `p_image1`, `coolerimage2`, `coolerimage3`, `cost`) VALUES
('CL-W157-PL12SW-A', 'Thermaltake', 'Thermaltake Flow Riing RG', 'Easy and reliable - an easy install, reliable and low noise all-in-one liquid cooler for Intel and AMD systems\r\nDual dissipation pump - its unique low-profile dual chamber pump design features a low vibration pump for cool and quiet operation\r\nRobust FEP ', 'Cooler Master', 'Black', 6, 6, 4, 'INtel', 'yes', '30', 'Cooler', 108, '71tneCfSAPL._SR500,500_.jpg', '', '', 5000),
('MLW-D12M-A20PW-R1', 'Cooler Master', 'Cooler Master MasterLiquid Lite 120 CPU Liquid Cooler', 'Easy and reliable - an easy install, reliable and low noise all-in-one liquid cooler for Intel and AMD systems\r\nDual dissipation pump - its unique low-profile dual chamber pump design features a low vibration pump for cool and quiet operation\r\nRobust FEP ', 'Cooler Master', 'Black', 6, 6, 4, 'INtel', 'yes', '30', 'Cooler', 108, '61Env5sbJiL._SR500,500_.jpg', '', '', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
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
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email_id`, `first_name`, `mid_name`, `last_name`, `date_of_birth`, `mobile_no`, `gender`, `address_line_1`, `address_line_2`, `landmark`, `pincode`, `state`, `updated_at`, `created_at`) VALUES
('2017.anshul.chaudhary@ves.ac.in', 'Anshul', 'acv', 'Chaudhary', '2019-10-24', 9940405060, 'M', 'awf', 'wfaw', 'awffwaf', 121344, 'madhya_pradesh', '2019-10-23 10:40:35', '2019-10-23'),
('abc@123gmail.com', 'user13', 'Anish', 'Ashiok', '2019-10-01', 9619287840, 'M', 'sads', 'asds', 'Chembur', 40074, 'maharashtra', '2019-10-25 01:41:05', '2019-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `size` int(11) NOT NULL,
  `itemWeight` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `hardwareInterface` varchar(255) COLLATE utf8_bin NOT NULL,
  `graphicInterface` varchar(255) COLLATE utf8_bin NOT NULL,
  `wattage` varchar(255) COLLATE utf8_bin NOT NULL,
  `dataTransfer` varchar(255) COLLATE utf8_bin NOT NULL,
  `ampEdition` tinyint(1) NOT NULL COMMENT '1:yes 2:no',
  `categoryId` int(11) NOT NULL,
  `inStock` int(11) NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `gpuimage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `gpuimage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(5000) COLLATE utf8_bin NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`modelNo`, `size`, `itemWeight`, `brand`, `hardwareInterface`, `graphicInterface`, `wattage`, `dataTransfer`, `ampEdition`, `categoryId`, `inStock`, `p_image1`, `gpuimage2`, `gpuimage3`, `productName`, `title`, `description`, `cost`) VALUES
('08G-P4-5173-KR', 8, '998', 'nvidia', 'PCI Express x8', 'PCI-E', '500', '5', 0, 103, 5, '1070.jpg', '', '', 'Geforce GTX 1070', 'EVGA GeForce GTX 1070 FTW 8GB GDDR5 PCI-E Graphics Card', 'Real Base Clock: 1594 MHz / Real Boost Clock: 1784 MHz\r\nMemory Detail: 8192MB GDDR5', 75000),
('28IULBUCT2CK', 8, '1.93', 'amd', '-', '-', '500', '-', 1, 103, 10, '2080ti.jpg', '', '', 'Galaxy Geforce 2080Ti', 'GALAX GeForce® RTX 2080Ti SG (1-Click OC) 11GB GDDR6 352-bit DP*3/HDMI/USB Type-C™ Graphic Card', 'Real-Time Ray Tracing. VR Ready. Game Ready Drivers.\r\nNVIDIA GeForce Experience. NVIDIA Ansel. NVIDIA G-SYNC Compatible. NVIDIA Highlights. NVIDIA GPU Boost.\r\nMicrosoft DirectX 12 API, Vulkan API, OpenGL 4/5\r\nDisplayPort 1.4, HDMI 2.0b, HDCP 2.2\r\nDesigned for USB Type-C and VirtualLink*\r\n› See more product details', 105000),
('60IRL7DSY91C', 6, '871', 'nvidia', '-', '-', '-', '-', 0, 103, 10, '1660ti.jpg', '', '', 'GALAX GeForce® GTX 1660 Ti ', 'GALAX GeForce® GTX 1660 Ti (1-Click OC) 6GB GDDR6 192-bit DP/HDMI/DVI-D Graphic Card', 'Game Ready Drivers. VR Ready.\r\nNVIDIA Turing. NVIDIA GeForce Experience. NVIDIA Ansel. NVIDIA G-SYNC Compatible. NVIDIA Highlights.\r\nMicrosoft DirectX 12 API, Vulkan API, OpenGL 4/5\r\nDisplayPort 1.4, HDMI 2.0b, DVI-D\r\nNVIDIA GPU Boost. HDCP 2.2\r\n› See more product details', 24000),
('AREZ-PH-RX550-2G', 6, '454', 'amd', '-', '-', '500', '-', 0, 103, 32, 'nvidiagrapiccard.jpg', '', '', 'Radeon RX 480', 'ASUS AREZ-PH-RX550-2G GDDR5 DP HDMI DVI AMD Graphics Cards', 'GPU Tweak II makes monitoring performance and streaming easier than ever, featuring Game Booster and Split Game caster, all via an intuitive interface and 1-click overclocking\r\nAuto-extreme Manufacturing Technology delivers premium quality and reliability with aerospace-grade Super Alloy Power II components\r\nPlug & Play: Works with existing power supply with no external Pie power required\r\nFree Sync technology eliminates screen tearing for a smooth gaming experience\r\nDual-ball bearing fans reduces friction, further improving card lifespan and cooling efficiency', 5000),
('ZT-P10300A-10L', 2, '381', 'nvidia', '-', '-', '-', '-', 0, 103, 45, '1030img.jpg', '', '', 'Zotac GeForce GT 1030', 'Zotac GeForce GT 1030 2GB GDDR5 64-bit Graphic card (ZT-P10300A-10L)', 'CUDA Core : 384\r\nMemory Clock : 6.0 Ghz\r\nMemory Bus Width : 64-bit ; Memory Bandwidth :56 GB/s\r\nDirectX12.0 ;Vulkan1.0; OpenGL4.5 ;OpenCL1.2 ; Shader Model5.0\r\n› See more product details', 6500);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `monitors`
--

CREATE TABLE `monitors` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL,
  `screenSize` int(11) NOT NULL COMMENT 'in inches',
  `connectivityPort` varchar(255) COLLATE utf8_bin NOT NULL,
  `aspectRatio` varchar(255) COLLATE utf8_bin NOT NULL,
  `refreshRate` int(11) NOT NULL COMMENT 'in hz',
  `responseTime` int(11) NOT NULL COMMENT 'in ms',
  `viewingAngle` int(11) NOT NULL,
  `wallMount` tinyint(1) NOT NULL COMMENT '1:yes  0:no ',
  `filckerFreeTech` tinyint(1) NOT NULL COMMENT '1:yes  0:no ',
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `maxDispResolution` int(11) NOT NULL,
  `dimensions` varchar(255) COLLATE utf8_bin NOT NULL,
  `wattage` int(11) NOT NULL COMMENT 'in watts',
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `monitorImage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `monitorImage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `monitors`
--

INSERT INTO `monitors` (`modelNo`, `productName`, `title`, `description`, `categoryId`, `screenSize`, `connectivityPort`, `aspectRatio`, `refreshRate`, `responseTime`, `viewingAngle`, `wallMount`, `filckerFreeTech`, `brand`, `color`, `maxDispResolution`, `dimensions`, `wattage`, `p_image1`, `monitorImage2`, `monitorImage3`, `cost`) VALUES
('MON123', 'BENQ', '4K UHD Monitor: Extraordinary Clarity l BenQ', 'Get 4K UHD monitor for gaming, streaming, graphic design and photo editing with HDR and eye-care technology to enhance personal entertainment and work', 110, 24, '3', '16:9', 5, 1, 36, 1, 1, 'BENQ', 'Black', 1080, '16', 16, 'ew3270u-right45.png', '', '', 50000),
('MON12345', 'BENQ', '4K UHD Monitor: Extraordinary Clarity l BenQ', 'Get 4K UHD monitor for gaming, streaming, graphic design and photo editing with HDR and eye-care technology to enhance personal entertainment and work', 110, 27, '3', '16:9', 5, 1, 36, 1, 1, 'BENQ', 'Black', 1080, '16', 16, 'el2870u-right45.png', '', '', 50000),
('MON12367', 'BENQ', 'Designer Monitor with 32 inch, 4K UHD, sRGB |PD3200U', '100% Rec.709 and sRGB color space with IPS Technology\r\n\r\nDualView function\r\n\r\nDarkroom, CAD/CAM and Animation Display Mode\r\n\r\n', 110, 27, '3', '16:9', 5, 1, 36, 1, 1, 'BENQ', 'Black', 1080, '16', 16, 'pd3200u-gallery02.png', '', '', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `motherboards`
--

CREATE TABLE `motherboards` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `formFactor` varchar(255) COLLATE utf8_bin NOT NULL,
  `processorType` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'intel,amd',
  `itemweight` float NOT NULL,
  `processorSocket` varchar(255) COLLATE utf8_bin NOT NULL,
  `memoryTechnology` varchar(255) COLLATE utf8_bin NOT NULL,
  `memoryType` varchar(255) COLLATE utf8_bin NOT NULL,
  `graphicCard` varchar(255) COLLATE utf8_bin NOT NULL,
  `wirelessType` varchar(255) COLLATE utf8_bin NOT NULL,
  `usb2Ports` int(11) NOT NULL COMMENT 'number of usb ports',
  `hdmiPorts` int(11) NOT NULL COMMENT 'number of hdmi ports',
  `wattage` int(11) NOT NULL,
  `lithiumBatteryEnerge` int(11) NOT NULL,
  `nolithiumCells` int(11) NOT NULL,
  `includedComponents` varchar(255) COLLATE utf8_bin NOT NULL,
  `inStock` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `moboimage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `moboimage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `cost` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `motherboards`
--

INSERT INTO `motherboards` (`modelNo`, `brand`, `formFactor`, `processorType`, `itemweight`, `processorSocket`, `memoryTechnology`, `memoryType`, `graphicCard`, `wirelessType`, `usb2Ports`, `hdmiPorts`, `wattage`, `lithiumBatteryEnerge`, `nolithiumCells`, `includedComponents`, `inStock`, `categoryId`, `p_image1`, `moboimage2`, `moboimage3`, `productName`, `title`, `description`, `cost`, `created_at`, `updated_at`) VALUES
('ABC1234', 'asus', 'ATX', 'intel', 798, '1151', 'ABC', 'DDR4', 'No', 'no', 2, 2, 5, 2, 2, 'motherboard', 4, 102, 'download (1)_1571947656.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', 'intel2', 'ASUS TUF B365M-PLUS Gaming - LGA1151 9th Generation Motherboard (LGA1151, Intel B365 chipset, 6 x USB 3.1 Gen1, AMD 2-Way CrossFireX)', '<p>none</p>', 8500, '2019-10-24', '2019-10-25 06:14:27'),
('ABC12342', 'asus', 'ATX', 'intel', 798, '1151', 'ABC', 'DDR4', 'No', 'yes', 2, 2, 5, 2, 2, 'motherboard', 4, 102, 'download (1)_1571947706.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', 'intel2', 'ASUS TUF B365M-PLUS Gaming - LGA1151 9th Generation Motherboard (LGA1151, Intel B365 chipset, 6 x USB 3.1 Gen1, AMD 2-Way CrossFireX)', '<p>none</p>', 8500, '2019-10-24', '2019-10-25 06:14:23'),
('EX-B365M-V', 'asus', 'atx', 'amd', 200, 'qwerty', 'abcd', 'ddr4', 'yes', 'no', 2, 2, 2, 0, 0, 'motherboard', 10, 102, 'mb1_1571984730.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', 'amd', 'Asus EX-B365M-V', '<ul>\r\n	<li><a href=\"https://mdcomputers.in/asus-ex-b365m-v.html?search=intel%20motherboard&amp;category_id=0\">ASUS EX-B365M-V MOTHERBOARD (INTEL SOCKET 1151/9TH AND 8TH GENERATION CORE SERIES CPU/MAX 32GB DDR4 2666MHZ MEMORY)</a></li>\r\n</ul>', 5899, '2019-10-25', '2019-10-25 00:55:31'),
('FATAL1TY Z370', 'asrock', 'qwerty', 'intel', 250, 'abcd', 'abcd', 'ddr4', '1', 'no', 2, 2, 150, 0, 0, 'motherboard', 10, 102, 'mb2_1571985408.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', 'intel', 'Asrock FATAL1TY Z370 GAMING K6', '<ul>\r\n	<li><a href=\"https://mdcomputers.in/asrock-fatal1ty-z370-gaming-k6.html?search=intel%20motherboard&amp;category_id=0\">ASROCK FATAL1TY Z370 GAMING K6 MOTHERBOARD</a></li>\r\n</ul>', 14960, '2019-10-25', '2019-10-25 01:06:48'),
('PRIME X399-A', 'amd', 'ATX', 'amd', 2.04, 'AMD â€\" AM3+', 'DDR4', 'SDRAM', 'no', 'n', 2, 2, 140, 1, 1, 'PRIME X399-A motherboard, SLI HB BRIDGE(2-WAY-M), M.2 Screw Package, M.2 vertical bracket, Q-connector, ASUS Q-Shield, Supporting DVD, User\'s manual, Serial ATA 6.0Gb/s cables(4)', 2, 102, 'threadrippermotherboard_1572348715.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', 'amd', 'Asus PRIME X399-A AM3+ RGB Lighting Motherboard with USB 3.1 Gen2, AURA Sync RGB Lighting and 3D Printing Mounts', '<ul>\r\n	<li>Powered by AMD Ryzen Thread ripper TR4 processors support for up to 128GB of DDR4 memory, dual NV Me M.2 drives, front side U.2 and front panel USB 3.1 Gen2 port</li>\r\n	<li>5-Way Optimization featuring Auto-Tuning and Fan pert 4 provides automatic overclocking profiles for maximum OC performance while AIO and water-cooling headers deliver dynamic system cooling</li>\r\n	<li>Patent-pending Safe Slot (3X) features an injection molding process that integrates metal framing for a stronger, firmly anchored Pie slot built for heavyweight GPUs</li>\r\n	<li>Unmatched Personalization with ASUS exclusive AURA Sync RGB lighting, two additional RGB headers and 3D-printing mounts to customize your build</li>\r\n	<li>Power pre-regulator; Industry-leading 8-channel HD audio enhanced by ASUS exclusive Relate S1220A featuring Crystal Sound 3 and driven by Japanese capacitors for warm, immersive sound;</li>\r\n</ul>\r\n\r\n<p>&rsaquo;&nbsp;<a href=\"https://www.amazon.in/Asus-PRIME-Lighting-Motherboard-Printing/dp/B074HC93RX?tag=googinhydr18418-21&amp;tag=googinkenshoo-21&amp;ascsubtag=_k_EAIaIQobChMI5N76gq7B5QIVRx0rCh1dBw4aEAQYASABEgJSnfD_BwE_k_&amp;gclid=EAIaIQobChMI5N76gq7B5QIVRx0rCh1dBw4aEAQYASABEgJSnfD_BwE#productDetails\">See more product details</a></p>', 27500, '2019-10-29', '2019-10-29 06:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `orderId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `amount` int(11) NOT NULL,
  `orderStatus` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Table structure for table `powersupply`
--

CREATE TABLE `powersupply` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `color` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(5000) COLLATE utf8_bin NOT NULL,
  `type` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'mod,non,full',
  `wattRating` varchar(255) COLLATE utf8_bin NOT NULL,
  `wattage` int(11) NOT NULL COMMENT 'in watts',
  `components` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `psuImage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `psuImage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `itemWidth` int(11) NOT NULL COMMENT 'in cms',
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `powersupply`
--

INSERT INTO `powersupply` (`modelNo`, `brand`, `color`, `productName`, `title`, `description`, `type`, `wattRating`, `wattage`, `components`, `categoryId`, `p_image1`, `psuImage2`, `psuImage3`, `itemWidth`, `cost`) VALUES
('NeoEco 650M ', 'ANTEC', 'black', 'ANTEC', 'Antec NeoEco 650M 80 Plus Bronze Certified 650 Watt Modular Gaming Power Supply', '650W Continuous Power - Guaranteed 650W of Continuous Power from Antec\r\n80 PLUS BRONZE certified - Up to 88% efficient, to reduce your electricity bill\r\n120mm DBB Silence - Whisper-quiet high-quality fan with long lifetime\r\nThermal Manager - An advanced low voltage fan control for optimal heat & noise management\r\nCircuitShield - Full suite of industrial grade protections\r\nHeavy-duty Caps - High-performance capacitors ensure tightest DC stability and regulation\r\nAdvanced Hybrid Cable Management - Improves airflow and reduces clutter\r\nMulti PCI-E - 2 PCI-E connectors for multiple GPU support', 'Semi-Modular', '-', 650, '-', 106, 'corsair550.jpg', '', '', 4, 5200),
('VS500', 'Corsair', 'black', 'Corsair VS550 500-Watt ', 'Corsair VS500 550-Watt Power Supply', 'A dedicated single +12V rail offers maximum compatibility with the latest components\r\nActive Power Factor Correction (PFC) with PF value of 0.99\r\nAC input from 200~240VAV ; Cable Type: Sleeved ; Continuous output rated temperature C: 30°C ; MTBF hours: 100,000 hours ; EPS12V Version: v2.92\r\nOver-voltage, under-voltage, over-current, and short circuit protection provide maximum safety for your critical system components\r\nHigh-quality capacitors provide uncompromised performance and reliability\r\nSafety Approvals: cTUVus, CE, CB, FCC Class B, TÃœV, CCC, C-tick\r\n3 Years Warranty', 'NON', '240', 500, '1x VS Series power supply Unit, 1x AC power cord, Cable ties, Mounting screws', 106, 'corsair500.jpg', '', '', 4, 3000),
('VS550', 'Corsair', 'black', 'Corsair VS550 550-Watt ', 'Corsair VS550 550-Watt Power Supply', 'A dedicated single +12V rail offers maximum compatibility with the latest components\r\nActive Power Factor Correction (PFC) with PF value of 0.99\r\nAC input from 200~240VAV ; Cable Type: Sleeved ; Continuous output rated temperature C: 30°C ; MTBF hours: 100,000 hours ; EPS12V Version: v2.92\r\nOver-voltage, under-voltage, over-current, and short circuit protection provide maximum safety for your critical system components\r\nHigh-quality capacitors provide uncompromised performance and reliability\r\nSafety Approvals: cTUVus, CE, CB, FCC Class B, TÃœV, CCC, C-tick\r\n3 Years Warranty', 'FULL', '240', 550, '1x VS Series power supply Unit, 1x AC power cord, Cable ties, Mounting screws', 106, 'corsair550.jpg', '', '', 4, 3700);

-- --------------------------------------------------------

--
-- Table structure for table `prebuilt`
--

CREATE TABLE `prebuilt` (
  `prebuiltId` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `processors`
--

CREATE TABLE `processors` (
  `modelNo` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL COMMENT 'amd or intel',
  `productName` varchar(255) NOT NULL,
  `codeName` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `generation` varchar(20) NOT NULL,
  `cores` varchar(255) NOT NULL,
  `threads` varchar(255) NOT NULL,
  `baseSpeed` varchar(20) NOT NULL,
  `turboSpeed` varchar(20) NOT NULL,
  `cache` varchar(20) NOT NULL,
  `description` varchar(50000) NOT NULL,
  `title` varchar(255) NOT NULL,
  `compatibility` varchar(255) NOT NULL,
  `p_image1` varchar(255) NOT NULL,
  `p_image2` varchar(255) NOT NULL,
  `p_image3` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categoryId` int(11) NOT NULL,
  `inStock` int(11) NOT NULL,
  `offer` int(11) DEFAULT 2 COMMENT 'in percentage'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processors`
--

INSERT INTO `processors` (`modelNo`, `brand`, `productName`, `codeName`, `cost`, `generation`, `cores`, `threads`, `baseSpeed`, `turboSpeed`, `cache`, `description`, `title`, `compatibility`, `p_image1`, `p_image2`, `p_image3`, `created_at`, `updated_at`, `categoryId`, `inStock`, `offer`) VALUES
('Ryzen 5 3400G', 'AMD', 'r5 3400G', 'Am4', 12999, '3 gen', '4cores', '8threads', '3.6GHz', '4.2Ghz', '6MB', '<p>** Max boost is the maximum frequency achievable by a single core on the processor running a bursty single-threaded workload. Max boost will vary based on several factors, including, but not limited to: thermal paste; system cooling; motherboard design and BIOS; the latest AMD chipset driver; and the latest OS updates.<br />\r\n&nbsp;</p>\r\n\r\n<p>1. Testing as of 05/14/2019 by AMD Performance Labs using an AMD Ryzen&trade; 5 3400G Processor and Intel Core i5-9400 in 3DMark Time Spy. Results may vary with configuration. PCO-001<br />\r\n&nbsp;</p>\r\n\r\n<p>2. AMD product warranty does not cover damages caused by overclocking, even when overclocking is enabled via AMD hardware.<br />\r\n&nbsp;</p>\r\n\r\n<p>3. Precision Boost Overdrive requires an AMD Ryzen Threadripper, AMD Ryzen 5 3000, AMD Ryzen 7 3000, or AMD Ryzen 9 3000 Series processor and a motherboard compatible with one or more of these processors. Because Precision Boost Overdrive enables operation of the processor outside of specifications and in excess of factory settings, use of the feature invalidates the AMD product warranty and may also void warranties offered by the system manufacturer or retailers. GD-135<br />\r\n&nbsp;</p>\r\n\r\n<p>&copy; 2019 Advanced Micro Devices, Inc. All rights reserved. AMD, the AMD Arrow logo, Ryzen, Radeon and combinations thereof are trademarks of Advanced Micro Devices, Inc.</p>', 'AMD Ryzen 5 3400G with Radeon RX Vega 11 Graphics Quad-Core 3.7 GHz Socket AM4 Desktop Processor', 'amd motherboard', 'r53600_1572347429.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', '2019-10-29', '2019-10-30 13:51:45', 101, 2, 10),
('Ryzen 5 3600', 'AMD', 'r5 3600', 'AM4', 16990, '3 gen', '6 cores', '12 threads', '3.6Ghz', '4.2Ghz', '35MB', '<p>** Max boost is the maximum frequency achievable by a single core on the processor running a bursty single-threaded workload. Max boost will vary based on several factors, including, but not limited to: thermal paste; system cooling; motherboard design and BIOS; the latest AMD chipset driver; and the latest OS updates.<br />\r\n&nbsp;</p>\r\n\r\n<p>1. AMD product warranty does not cover damages caused by overclocking, even when overclocking is enabled via AMD hardware.<br />\r\n&nbsp;</p>\r\n\r\n<p>2. Specifications of 3rd generation Ryzen processors as of January 2, 2018. As of January 7, 2019, the AMD&rsquo;s latest 2nd Generation Ryzen processors and Intel&rsquo;s latest 9th Generation Intel Core processors use the PCIe Gen3 interface. RZ3-2<br />\r\n&nbsp;</p>\r\n\r\n<p>3. Precision Boost Overdrive requires an AMD Ryzen Threadripper, AMD Ryzen 5 3000, AMD Ryzen 7 3000, or AMD Ryzen 9 3000 Series processor and a motherboard compatible with one or more of these processors. Because Precision Boost Overdrive enables operation of the processor outside of specifications and in excess of factory settings, use of the feature invalidates the AMD product warranty and may also void warranties offered by the system manufacturer or retailers. GD-135<br />\r\n&nbsp;</p>\r\n\r\n<p>&copy; 2019 Advanced Micro Devices, Inc. All rights reserved. AMD, the AMD Arrow logo, Ryzen, Radeon and combinations thereof are trademarks of Advanced Micro Devices, Inc.</p>', 'AMD Ryzen 5 3600 6-Core 3.6 GHz Socket AM4 Desktop Processor', 'amd motherboardss', 'r53600_1572347169.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', '2019-10-29', '2019-10-29 11:22:11', 101, 2, NULL),
('RYZEN™ THREADRIPPER™ 2990WX', 'AMD', 'AMD RYZEN™ THREADRIPPER™ 2990WX PROCESSOR', '2990', 160000, '2 Gen', '32cores', '64Threads', '3Ghz', '4.2Ghz', '64MB', '<p>*OS Support</p>\r\n\r\n<p>Windows 10 - 64-Bit Edition</p>\r\n\r\n<p>RHEL x86 64-Bit</p>\r\n\r\n<p>Ubuntu x86 64-Bit</p>\r\n\r\n<p>*Operating System (OS) support will vary by manufacturer.</p>', 'AMD Ryzen™ Threadripper™ 2990WX', 'amd motherboards', 'threadripper_1572348021.jpg', 'noimagetostore.jpg', 'noimagetostore.jpg', '2019-10-29', '2019-10-29 11:21:55', 101, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`categoryId`, `categoryName`) VALUES
(101, 'processors'),
(102, 'motherboards'),
(103, 'gpu'),
(104, 'ram'),
(105, 'storage'),
(106, 'powerSupply'),
(107, 'cabinets'),
(108, 'coolingSystem'),
(109, 'preBuilt'),
(110, 'monitors'),
(111, 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `memoryType` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(5000) COLLATE utf8_bin NOT NULL,
  `memorySize` varchar(255) COLLATE utf8_bin NOT NULL,
  `brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `testedVoltage` varchar(255) COLLATE utf8_bin NOT NULL,
  `testedSpeed` varchar(255) COLLATE utf8_bin NOT NULL,
  `ledLighting` varchar(255) COLLATE utf8_bin NOT NULL,
  `singleMultiZone` varchar(255) COLLATE utf8_bin NOT NULL,
  `spdLatency` varchar(255) COLLATE utf8_bin NOT NULL,
  `spdSpeed` varchar(255) COLLATE utf8_bin NOT NULL,
  `spdVoltage` varchar(255) COLLATE utf8_bin NOT NULL,
  `speedRating` varchar(255) COLLATE utf8_bin NOT NULL,
  `compatibility` varchar(255) COLLATE utf8_bin NOT NULL,
  `heatSpreader` varchar(255) COLLATE utf8_bin NOT NULL,
  `packageMemoryFormat` varchar(255) COLLATE utf8_bin NOT NULL,
  `performanceProfile` varchar(255) COLLATE utf8_bin NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `ramImage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `ramImage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`modelNo`, `memoryType`, `productName`, `title`, `description`, `memorySize`, `brand`, `testedVoltage`, `testedSpeed`, `ledLighting`, `singleMultiZone`, `spdLatency`, `spdSpeed`, `spdVoltage`, `speedRating`, `compatibility`, `heatSpreader`, `packageMemoryFormat`, `performanceProfile`, `p_image1`, `ramImage2`, `ramImage3`, `categoryId`, `cost`) VALUES
('AX4U3200316G16-SR10', 'DDR4', 'ADATA XPG GAMMIX', 'ADATA XPG GAMMIX Memory D10 8GB DDR4 3200MHz Gaming Ram', 'Brand: Adata, High Speeds up to 3200MHz, Compatibility: DDR4 3200 CL 16-18-18 ,1.35V RoHS compliant. Operating temperature: 0°C to 85°C.\r\nSuperior power efficiency: 20% less draw than DDR3 (operating voltage decreased from 1.5V to 1.35V ). 10-layer PCBs and 2oz copper for excellent cooling and stability, Intel XMP 2.0 – more accessible overclocking.\r\nFor PC enthusiasts and gamers, good system stability really matters, so GAMMIX D10 features high-quality PCBs to improve signal transfer quality and maintain great stability even if the system operates at high speeds or is taking on heavy multitasking.\r\nWith Intel XMP (Extreme Memory Profile) 2.0 support, GAMMIX D10 allows overclocking and tuning from the OS without BIOS changes, facilitating easier usage and enhanced system stability.\r\nLifetime Warranty When Purchased from An Authorized ADATA Partner', '16', 'ADATA', '', '3222', 'yes', '', '', '', '', '', '', '', '', '', 'ddr4ram.jpg', '', '', 104, 4000),
('AX4U320038G16-SR10', 'DDR4', 'ADATA XPG GAMMIX', 'ADATA XPG GAMMIX Memory D10 8GB DDR4 3200MHz Gaming Ram', 'Brand: Adata, High Speeds up to 3200MHz, Compatibility: DDR4 3200 CL 16-18-18 ,1.35V RoHS compliant. Operating temperature: 0°C to 85°C.\r\nSuperior power efficiency: 20% less draw than DDR3 (operating voltage decreased from 1.5V to 1.35V ). 10-layer PCBs and 2oz copper for excellent cooling and stability, Intel XMP 2.0 – more accessible overclocking.\r\nFor PC enthusiasts and gamers, good system stability really matters, so GAMMIX D10 features high-quality PCBs to improve signal transfer quality and maintain great stability even if the system operates at high speeds or is taking on heavy multitasking.\r\nWith Intel XMP (Extreme Memory Profile) 2.0 support, GAMMIX D10 allows overclocking and tuning from the OS without BIOS changes, facilitating easier usage and enhanced system stability.\r\nLifetime Warranty When Purchased from An Authorized ADATA Partner', '8', 'ADATA', '', '3000', 'yes', '', '', '', '', '', '', '', '', '', 'ddr4ram.jpg', '', '', 104, 4000),
('CMK16GX4M1A2400C16R', 'DDR4', 'corsair ', 'CORSAIR 8GB Vengeance LPX DDR4 PC4-19200 2400MHz Desktop Memory - Red', 'CMK8GX4M1A2400C16R - 8GB (1x8GB) Corsair DDR4\r\nPC4-19200 (2400Mhz), Non-ECC Unbuffered,\r\nCAS 16-16-16-39, XMP 2.0, 1.2V\r\nXMP 2.0 support for trouble-free automatic overclocking.\r\n6th generation Intel Core processor Ready (Intel Skylake and Z170 motherboar', '16', 'corsair', '1.3', '2666', 'no', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'ramcorsiar.jpg', '', '', 104, 5000),
('CMK8GX4M1A2400C16R', 'DDR4', 'corsair ', 'CORSAIR 8GB Vengeance LPX DDR4 PC4-19200 2400MHz Desktop Memory - Red', 'CMK8GX4M1A2400C16R - 8GB (1x8GB) Corsair DDR4\r\nPC4-19200 (2400Mhz), Non-ECC Unbuffered,\r\nCAS 16-16-16-39, XMP 2.0, 1.2V\r\nXMP 2.0 support for trouble-free automatic overclocking.\r\n6th generation Intel Core processor Ready (Intel Skylake and Z170 motherboar', '8', 'corsair', '1.3', '2666', 'no', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'ramcorsiar.jpg', '', '', 104, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL,
  `Brand` varchar(255) COLLATE utf8_bin NOT NULL,
  `productName` varchar(255) COLLATE utf8_bin NOT NULL,
  `weight` int(11) NOT NULL,
  `storageCapacity` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'hdd, ssd or optane',
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `p_image1` varchar(255) COLLATE utf8_bin NOT NULL,
  `storageImage2` varchar(255) COLLATE utf8_bin NOT NULL,
  `storageImage3` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoryId` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`modelNo`, `Brand`, `productName`, `weight`, `storageCapacity`, `title`, `description`, `type`, `p_image1`, `storageImage2`, `storageImage3`, `categoryId`, `cost`) VALUES
('	ST3500312CS', 'segate', 'segate', 48, '500', 'Seagate 500 GB INTERNAL ST3500312CS 500 GB Internal Hard Drive Internal Hard drive', '	Warranty Policy : 1 Year Seller\'s warranty. No Warranty in case of physical damage or burnt.', 'hdd', '500gb.jpg', '', '', 105, 1540),
('MZ-75E250BW', 'Samasung', 'evo', 250, '250', 'Samsung 850 Evo 250GB 2.5-Inch SATA III Internal Solid State Drive (MZ-75E250BW)', 'Powered by Samsung V-NAND technology with optimized performance for everyday computing\r\nIncredible sequential read/write performance of up to 540mbps and 520mbps respectively and random read/write IOPS performance of up to 98K and 90K respectively', 'ssd', 'ssd.jpg', '', '', 105, 3000),
('Powered by Samsung V-NAND technology with optimized performance for everyday computing\r\nIncredible sequential read/write performance of up to 540mbps and 520mbps respectively and random read/write IOPS performance of up to 98K and 90K respectively', 'Samasung', 'evo', 500, '250', 'Samsung 850 Evo 250GB 2.5-Inch SATA III Internal Solid State Drive (MZ-75E250BW)', 'Powered by Samsung V-NAND technology with optimized performance for everyday computing\r\nIncredible sequential read/write performance of up to 540mbps and 520mbps respectively and random read/write IOPS performance of up to 98K and 90K respectively', 'ssd', 'ssd.jpg', '', '', 105, 5000),
('ST31000312CS', 'segate', 'segate', 48, '1000', 'Seagate 500 GB INTERNAL ST3500312CS 500 GB Internal Hard Drive Internal Hard drive', '	Warranty Policy : 1 Year Seller\'s warranty. No Warranty in case of physical damage or burnt.', 'hdd', '500gb.jpg', '', '', 105, 1540);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Anshul Chaudhary', '2017.anshul.chaudhary@ves.ac.in', '$2y$10$Ji51PLdwMnrRa6U72UEsGeDd.yRboGGi.Xd5kPEhosJEMcSjpQncC', 'VwXJSRrjRoTWimsTMhZsQhqqE24WPcklwilLWFmLtF0E5hk0AEajQBmnKcvS', '2019-10-19 21:57:05', '2019-10-19 21:57:05'),
(5, 'user13', 'abc@123gmail.com', '$2y$10$/5YcNBbh9AK2T8ZyxualXu/fZs5oNLRZo41Mg9ggGcAs1hffQxxd6', NULL, '2019-10-25 01:39:57', '2019-10-25 01:39:57');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `createCart` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO cart (userId) VALUES (new.id)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `createWishlist` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO wishlist (userId) VALUES (new.id)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlistId` int(11) NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlistId`, `userId`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `wishlistitems`
--

CREATE TABLE `wishlistitems` (
  `wishlistId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `modelNo` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `adminId` (`adminId`);

--
-- Indexes for table `cabinets`
--
ALTER TABLE `cabinets`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD KEY `cartId` (`cartId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `coolingsystem`
--
ALTER TABLE `coolingsystem`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitors`
--
ALTER TABLE `monitors`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `motherboards`
--
ALTER TABLE `motherboards`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD KEY `orderId` (`orderId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `powersupply`
--
ALTER TABLE `powersupply`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `processors`
--
ALTER TABLE `processors`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`modelNo`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`modelNo`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlistId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `wishlistitems`
--
ALTER TABLE `wishlistitems`
  ADD KEY `wishlistId` (`wishlistId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlistId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cabinets`
--
ALTER TABLE `cabinets`
  ADD CONSTRAINT `cabinets_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD CONSTRAINT `cartitems_ibfk_1` FOREIGN KEY (`cartId`) REFERENCES `cart` (`cartId`),
  ADD CONSTRAINT `cartitems_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `coolingsystem`
--
ALTER TABLE `coolingsystem`
  ADD CONSTRAINT `coolingsystem_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `gpu`
--
ALTER TABLE `gpu`
  ADD CONSTRAINT `gpu_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `monitors`
--
ALTER TABLE `monitors`
  ADD CONSTRAINT `monitors_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `motherboards`
--
ALTER TABLE `motherboards`
  ADD CONSTRAINT `motherboards_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `powersupply`
--
ALTER TABLE `powersupply`
  ADD CONSTRAINT `powersupply_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `processors`
--
ALTER TABLE `processors`
  ADD CONSTRAINT `processors_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `storage_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlistitems`
--
ALTER TABLE `wishlistitems`
  ADD CONSTRAINT `wishlistitems_ibfk_1` FOREIGN KEY (`wishlistId`) REFERENCES `wishlist` (`wishlistId`),
  ADD CONSTRAINT `wishlistitems_ibfk_2` FOREIGN KEY (`wishlistId`) REFERENCES `wishlist` (`wishlistId`),
  ADD CONSTRAINT `wishlistitems_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `productcategory` (`categoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
