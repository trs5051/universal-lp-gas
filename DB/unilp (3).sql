-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2020 at 09:15 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unilp`
--

-- --------------------------------------------------------

--
-- Table structure for table `concerns`
--

DROP TABLE IF EXISTS `concerns`;
CREATE TABLE IF NOT EXISTS `concerns` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bk_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `concerns`
--

INSERT INTO `concerns` (`id`, `title`, `heading`, `text1`, `text2`, `img`, `img_title`, `bk_img`, `text3`, `information_for`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Mission and Vision', 'We are working hard to ensure healthy products for a perfect healthy life of customer through innovation processes. We are devoted to investing in our people, our company and the communities where we operate to help position the company for long-term, sustainable growth.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', 'missionVision.jpg', NULL, NULL, NULL, 'mission-vision', 1, NULL, '2020-08-29 04:33:28'),
(3, NULL, 'Universal Group', 'Universal Group is one of the reputed business houses in Bangladesh. The Group is currently engaged in the business of Petroleum & Petroleum products (i.e. LPG, Bitumen, Lube Oil etc.), Power & Energy (Refueling Station.Construction Material (Stone Chips) etc. The business of the group within these sectors is performed through both trading, distribution and industrial supports. Mr. Md. Shahjahan Shaju, is the promoter and founding Managing Director of Universal Group.', 'Universal group presently has following entity under its name:Universal Agency M.S Enterprise, Universal Gas & Gas Cylinder Ltd. AMB Traders Pvt. Ltd. US Energy & Power Pvt. Ltd. Global Survey & Inspection Company, Universal Refueling Station. Together with these concerns the annual turnover of the company was very much favorable in last year which is expected to rise in manifold in upcoming year with the commercial operation of the LPG import & storage terminal which is all set and started its commercial operation since June 2019.', '1598697414-tiger.jpg', NULL, NULL, NULL, 'universal_lp_gas', 1, NULL, '2020-08-29 04:36:54'),
(4, NULL, 'Universal Agency', 'Established in 2000 is another trading concern of Universal Group. Like MS Enterprise the firm is mainly dealing with the import and supply business of the group. Main imported items are LPG Cylinders, Bitumen, Lube etc. Though the firm was involved with import of various items initially but recently it concentrated on the import of Bitumen and LPG Cylinders.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1597906536-download.png', NULL, NULL, NULL, 'universal_agency', 1, NULL, '2020-08-20 00:55:36'),
(5, NULL, 'MS Enterprise', 'Established in 1990 is the first concern of Universal Group. The firm is mainly dealing with the import and supply business of the group. Main imported items are LPG Cylinders, Bitumen, Lube etc. Though the firm was involved with import of various items initially but recently it concentrated on the import of Bitumen and LPG Cylinders.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1597906094-download1.jpg', NULL, NULL, NULL, 'msEnterprise', 1, NULL, '2020-08-20 00:48:14'),
(6, NULL, 'Universal Gas & Gas Cylinder Ltd', 'Industrial concern of the group. The group right now has three plants at different location of the country. First one is LPG bottling plant located at Kaichutty, Chowddogram, Comilla with a capacity to fill 4000 Cylinders per day.', 'At the same location the company has a LPG Cylinder Manufacturing Plant with production capacity of 1000/cylinders per day. In Barabkunda, Chittagong under the same name a LPG Import, Storage, Bottling and Distribution plant is commercially running. The daily bottling capacity of the plant is 18,000/day.', '1597906177-download2.jpg', NULL, NULL, NULL, 'universalGasCylinderLtd', 1, NULL, '2020-08-20 00:49:37'),
(7, NULL, 'AMB Traders Pvt Ltd', 'Clearing and Forwarding agent, established solely to act as the C&F agent of the group for releasing imported items from the port. The firm was established in the year 2002.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1597906303-download 4.png', NULL, NULL, NULL, 'ambTraders', 1, NULL, '2020-08-20 00:51:43'),
(8, NULL, 'US Energy & Power Pvt Ltd', 'To strengthen the exposure of the group in the construction business Mr. Shaju decided to form US Energy & Power Pvt. in 2016. Ltd.', 'The aim of the company is to decant imported bitumen and supply in liquid form to various companies around the country. At the later stage the company will set up bitumen mixing plant to supply bitumen mixed aggregate to the various construction site.', '1597906391-images.jpg', NULL, NULL, NULL, 'usEnergyPower', 1, NULL, '2020-08-20 00:53:11'),
(9, NULL, 'Universal CNG & Petrol Pump', 'The first refuelling station of the group. The station provides refuelling facility for CNG and Diesel run vehicles. The station is located at Kaichutty, Chowddogram, Comilla adjacent to the Dhaka-Chittagong highway.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1597906454-download.jpg', NULL, NULL, NULL, 'universalCngPetrolPump', 1, NULL, '2020-08-20 00:54:14'),
(10, NULL, 'Universal Engineering Ltd', 'We are working hard to ensure healthy products for a perfect healthy life of customer through innovation processes. We are devoted to investing in our people, our company and the communities where we operate to help position the company for long-term, sustainable growth.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1597906507-download (1).jpg', NULL, NULL, NULL, 'universalEngineeringLtd', 1, NULL, '2020-08-29 22:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land_line` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `office_name`, `address`, `land_line`, `email`, `contact_for`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Head Office', 'Universal House House # 24, Road # 4\r\nRose Valley R/A, Zakir Hossain Road\r\nChittagong, Bangladesh.', '+880312566601-02,+880312566456, +880312566727', 'shahjahanshaju037@gmail.com, universal.lpgas@yahoo.com', 'head_office', 1, NULL, '2020-08-30 02:47:49'),
(2, NULL, 'Dhaka Office', 'House : #493/3 (1st Floor)\r\nRoad # 9, DOHS,m Baridhara\r\nDhaka, Bangladesh.', '+88028419450', 'info@universallpgas.com', 'dhaka_office', 1, NULL, '2020-08-25 00:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `cylinder_safeties`
--

DROP TABLE IF EXISTS `cylinder_safeties`;
CREATE TABLE IF NOT EXISTS `cylinder_safeties` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `top_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_text` text COLLATE utf8mb4_unicode_ci,
  `top_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safety_tips_img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safety_tips_img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safety_tips_heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safety_tips_text` text COLLATE utf8mb4_unicode_ci,
  `stove_img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stove_img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stove_text1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stove_text2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_img3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_img4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_text1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_text2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_text3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leakage_text4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safely_img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `safely_img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cylinder_safeties`
--

INSERT INTO `cylinder_safeties` (`id`, `top_heading`, `top_text`, `top_img`, `safety_tips_img1`, `safety_tips_img2`, `safety_tips_heading`, `safety_tips_text`, `stove_img1`, `stove_img2`, `stove_text1`, `stove_text2`, `leakage_img1`, `leakage_img2`, `leakage_img3`, `leakage_img4`, `leakage_text1`, `leakage_text2`, `leakage_text3`, `leakage_text4`, `safely_img1`, `safely_img2`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'User Safety1', 'Universal LP Gas is the First WLPGA Member and so, safety is of paramount concern to all involved in the LPG business, from producers through the supply, storage, handling and distribution chain, through to the consumers.1', '1598435951-tiger.jpg', '1598437514-3cylinder.jpg', '1598437514-user-tips-1.jpg', 'Factors to consider before purchasing an LPG Cylinder.', 'Thermo-seal is in the appropriat e place. Safety Cap is in the appropriate place. LPG will cause natural rubber and some plastics to deteriorate. Only use hoses and other equipment specifically designed for LPG', '1598437558-guide-to-attach-1.jpg', '1598437558-guide-to-attach-2.jpg', 'LP Gas must be stored beneath the stove on an adjacent level.', 'LP Gas cylinders must be checked for leakage with soap water, keeping the regulator attached.', '1598437618-action-to-avoid-1.jpg', '1598437618-action-to-avoid-2.jpg', '1598437618-action-to-avoid-3.jpg', '1598437618-action-to-avoid-4.jpg', 'Never test a leakage with lighting fire.', 'Avoid smoking anywhere around the suspected leakage area.', 'Avoid candle anywhere around the suspected leakage area.', 'Avoid switching mobile phones or electric switches on and off. 111111111111', '1598437642-tips-to-safety-1.jpg', '1598437642-tips-to-safety-2.jpg', '1', NULL, '2020-08-30 02:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_sliders`
--

DROP TABLE IF EXISTS `front_sliders`;
CREATE TABLE IF NOT EXISTS `front_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `text3` text COLLATE utf8mb4_unicode_ci,
  `text4` text COLLATE utf8mb4_unicode_ci,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `information_for` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `heading1`, `heading2`, `heading3`, `heading4`, `description1`, `description2`, `text1`, `text2`, `text3`, `text4`, `number`, `img1`, `img2`, `img3`, `img_title`, `information_for`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'OUR BUSINESS CONCERN', NULL, NULL, NULL, NULL, NULL, 'Universal Group is the creation of MD. SHAHJAHAN SHAJU. MR. SHAJU is the key person and promoter of the group. The dynamic person started the business through establishment of MS ENTERPRISE in the year 1990 and began import & supply of various products in the Bangladesh Market.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'our_business_concern', 1, NULL, '2020-08-29 04:31:47'),
(2, NULL, 'We are leading International company in the world', 'Building Staffs', 'Building Staffs', 'Building Staffs', 'Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10.', 'We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond too the complex global forces shaping our future.', 'We have a long and proud histiry givin emphasis to envi ronment social and economic outcomes.', 'We have a long and proud histiry givin emphasis to envi ronment social and economic outcomes.', 'We have a long and proud histiry givin emphasis to envi ronment social and economic outcomes.', NULL, NULL, 'leading-feature-1.png', 'leading-feature-2.png', 'leading-feature-3.png', NULL, 'about_us', 1, NULL, '2020-08-29 04:32:50'),
(3, NULL, 'Chairman', 'Managing Director', NULL, NULL, NULL, NULL, 'Mrs. Rezvin Akther, wife of Mr. Md. Shahjahan Shaju is the Chairman of the Group. Born in 1973 at Noakhali Mrs. Akther completed her Graduation from National University, Bangladesh. As Chairman of the company she looks after the Branding, Administration and Marketing of the company. Mrs. Akther is a social person and she is the member of Feni Samity, Chittagong. Mrs. Akther also visited Singapore, Malaysia, Thailand, India, Dubai etc.', NULL, 'Mr. Md. Shahjahan Shaju is the founder Managing Director of the Group. Mr. Shaju born in 1967 in a prominent family of Feni. He completed his graduation in Management from National University, Bangladesh. Mr. Shaju is the key person of the group and the leading man. He actively participate in the overall activities of the company. With his active participation and leadership the company is growing to become a conglomerate.', 'Mr. Shaju is an well travelled businessperson, he visited Canada, Singapore, Thailand, Malaysia, Abu-Dhabi, India, China for various business purposes. Apart from business Mr. Shaju actively participate in various social activities.\r\nHe is serving as Director to Dutch Bangla Chamber of Commerce & Industry & also a life member of the Shadharan Shangshad Foundation [Founder: Dr. MA Wazed Meah, Husband of PM – Sheikh Hasina]. Besides these he is an active member of Dhaka Club, Dhaka; Gulshan Club, Dhaka; Chittagong Club, Chittagong; Golf Club, Bhatiary, Chittagong; Boat Club, Chittagong; Chittagong Chamber of Commerce & Industry; General Secretary of Rose Velly Residential Area, Kulshi, Ctg & Sports Secretary, Feni Samity, Chittagong.', NULL, '1597896609-chairman.jpg', '1597896609-md.jpg', NULL, NULL, 'directors', 1, NULL, '2020-08-29 04:37:30'),
(4, NULL, 'WLPGA', 'ISO-9001', NULL, NULL, 'Universal Lp Gas has been an honored member of WLPGA since 20016.', 'Universal Lp Gas has been certified with ISO-9001 certification for its extraordinart plant and product procesing.', 'Universal Lp Gas has been an honored member of WLPGA since 20016.', 'Universal Lp Gas has been certified with ISO-9001 certification for its extraordinart plant and product procesing.', NULL, NULL, NULL, '1598241397-wlpa.jpg', '1598241397-ISO.jpg', NULL, NULL, 'compliance', 1, NULL, '2020-08-30 02:16:30'),
(5, NULL, 'Why Universal  LP GAS?', NULL, NULL, NULL, NULL, NULL, 'The benefits of LPG begin from your kitchen and keep going on.Here is a fuel with limitless possibilities \r\nLPG is a highly efficient cooking fuel. It is economical and its excellent heating capacity helps you cook your food in less time, saving you a lot on fuel cost. It undergoes complete combustion, produces no residue and particulate matter, which means minimum maintenance cost and lesser carbon footprint. And that’s just some of its benefits that you can count on your fingers', 'LPG has a plethora of benefits which can be a life-changing experience for its users. It’s good for your health, your kitchen and our environment. Paying a little attention while working with LPG can make it even more beneficial, so you can save enough to plan your long-awaited road trip to your favorite destination.', NULL, NULL, NULL, '1598775609-whylpg.jpg', NULL, NULL, NULL, 'whyLPG', 1, NULL, '2020-08-30 02:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

DROP TABLE IF EXISTS `management`;
CREATE TABLE IF NOT EXISTS `management` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `management_category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `management_category_id`, `name`, `img`, `designation`, `text`, `delete_status`, `created_at`, `updated_at`) VALUES
(5, 15, 'fgnhg', '1598683303-missionVision.jpg', 'nfn', 'fghmnjg', 0, '2020-08-29 00:41:44', '2020-08-29 05:31:08'),
(4, 12, 'mr Why', '1598683218-whylpg.jpg', 'jjbnjb', 'iojubnjbn', 0, '2020-08-29 00:40:18', '2020-08-29 05:31:12'),
(3, 11, 'Tiger', '1598682981-tiger.jpg', 'bd', 'this is new', 0, '2020-08-29 00:36:21', '2020-08-29 05:31:15'),
(6, 15, 'voot', '1598690765-mission-vission.jpg', 'vorooooccccc', 'hoooocccccc', 0, '2020-08-29 00:57:52', '2020-08-29 02:48:47'),
(7, 11, 'Md.Sirajul Haque FCA', '1598700713-GM.jpg', 'GM & CFO', 'Mr. Sirajul Haque FCA is working here as GM & CFO. Under their supervision a well professional experienced team are working.', 1, '2020-08-29 05:31:53', '2020-08-29 05:31:53'),
(8, 11, 'Sirajuddin Ahmmad', '1598700741-advisor.jpg', 'Advisor', 'Mr. Sirajuddin Ahmed has been advising us since the beginning of the journey of Universal as an advisor', 1, '2020-08-29 05:32:21', '2020-08-29 05:32:21'),
(9, 11, 'Md.Tariq Wazed', '1598700768-tareq.jpg', 'Project Manager(Technical Operations)', 'Some text that describes me lorem ipsum ipsum lorem.', 1, '2020-08-29 05:32:48', '2020-08-29 05:32:48'),
(10, 11, 'Mohiuddin Sagar', '1598700969-sagar.jpg', 'Manager-Accounts & Banking', 'Some text that describes me lorem ipsum ipsum lorem.', 1, '2020-08-29 05:36:09', '2020-08-29 05:36:09'),
(11, 11, 'Khandaker Fahim Ahmmed', '1598701021-fahim.jpg', 'Deputy Manager (In Charge-HR & Admin Division)', 'Some text that describes me lorem ipsum ipsum lorem.', 1, '2020-08-29 05:37:01', '2020-08-29 05:37:01'),
(12, 11, 'Mohammad Mukit Ibn Siddique', '1598701045-Manager-supplychain.jpg', 'Manager-Supply Chain', 'Some text that describes me lorem ipsum ipsum lorem.', 1, '2020-08-29 05:37:25', '2020-08-29 05:37:25'),
(13, 12, 'Samir Deb Nath', '1598701082-samir.jpg', 'Plant Manager', 'Some text that describes me lorem ipsum ipsum lorem.', 1, '2020-08-29 05:38:02', '2020-08-29 05:52:04'),
(14, 13, 'Moriom Begum', '1598701225-dm.jpg', 'Deputy Manager-Commercial', 'Some text that describes me lorem ipsum ipsum lorem.', 1, '2020-08-29 05:40:25', '2020-08-29 05:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `management_categories`
--

DROP TABLE IF EXISTS `management_categories`;
CREATE TABLE IF NOT EXISTS `management_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_categories`
--

INSERT INTO `management_categories` (`id`, `title`, `delete_status`, `created_at`, `updated_at`) VALUES
(14, 'Mother Terminal', 1, '2020-08-27 04:00:24', '2020-08-27 04:00:24'),
(13, 'Chattogram Office', 1, '2020-08-27 04:00:12', '2020-08-27 04:00:12'),
(12, 'Cylinder Manufacturing Plant', 1, '2020-08-27 03:59:59', '2020-08-27 03:59:59'),
(11, 'Head Office', 1, '2020-08-27 03:59:46', '2020-08-27 03:59:46'),
(15, 'Cylinder Refilling Plant', 1, '2020-08-27 04:00:34', '2020-08-27 04:00:34'),
(16, 'CNG Station', 1, '2020-08-27 04:00:46', '2020-08-27 04:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_21_092313_create_tests_table', 1),
(5, '2020_07_26_080413_create_settings_table', 1),
(6, '2020_08_10_042003_create_front_sliders_table', 1),
(7, '2020_08_10_042518_create_sliders_table', 1),
(8, '2020_08_13_083450_create_information_table', 1),
(9, '2020_08_17_075320_create_our_prouds_table', 1),
(10, '2020_08_19_045457_create_concerns_table', 2),
(11, '2020_08_20_101842_create_plants_table', 3),
(13, '2020_08_24_070137_create_contacts_table', 4),
(14, '2020_08_26_041818_create_cylinder_safeties_table', 5),
(15, '2020_08_27_032832_create_product_categories_table', 6),
(16, '2020_08_27_033406_create_products_table', 7),
(17, '2020_08_27_091608_create_management_categories_table', 8),
(18, '2020_08_27_101027_create_management_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `our_prouds`
--

DROP TABLE IF EXISTS `our_prouds`;
CREATE TABLE IF NOT EXISTS `our_prouds` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `number1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `use_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_prouds`
--

INSERT INTO `our_prouds` (`id`, `title`, `heading`, `heading2`, `description`, `description2`, `number1`, `number2`, `number3`, `number4`, `img1`, `img2`, `img3`, `img4`, `text1`, `text2`, `text3`, `text4`, `use_for`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, NULL, '25 years of undefeated success', NULL, 'We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.', NULL, '06', '25', '1', '75+', 'proud-feature-1.png', 'proud-feature-2.png', 'proud-feature-3.png', 'proud-feature-4.png', 'Successfully project continue', 'Year of experience With Proud', 'Bangladesh overall Service', 'Collaegues & Counting', 'our_proud', '1', NULL, '2020-08-29 04:29:52'),
(2, NULL, 'Committed to keep people healthy & safe', 'We are best in the field', 'Benefit of the society where we operate.', 'Benefit of the socie where we operate. A success website obusly needs great design to be one of the top 10 IT', NULL, NULL, NULL, NULL, 'best-field-1.png', 'best-field-3.png', 'best-field-2.png', 'best-field-4.png', 'Sustainability', 'Project on time', 'Modern Tech', 'Latest Design', 'sustainability', '1', NULL, '2020-08-29 04:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

DROP TABLE IF EXISTS `plants`;
CREATE TABLE IF NOT EXISTS `plants` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `delete_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `img`, `heading`, `text1`, `text2`, `delete_status`, `created_at`, `updated_at`) VALUES
(44, '1598774942-mission-vission.jpg', 'Comilla Plant', 'We are working hard to ensure healthy products for a perfect healthy life of customer through innovation processes. We are devoted to investing in our people, our company and the communities where we operate to help position the company for long-term, sustainable growth.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1', '2020-08-30 02:09:02', '2020-08-30 02:09:02'),
(43, '1598239368-logo.png', 'dfbgvf', 'bdtfgb dtgf', 'b vnvgn', '0', '2020-08-23 21:22:48', '2020-08-23 21:22:53'),
(41, '1598179624-ele(1).jpg', 'Dhaka', 'ne wmnew', 'gooo', '0', '2020-08-23 04:16:35', '2020-08-23 21:22:23'),
(42, '1598238185-mission-vission.jpg', 'Dhaka Plant', 'We are working hard to ensure healthy products for a perfect healthy life of customer through innovation processes. We are devoted to investing in our people, our company and the communities where we operate to help position the company for long-term, sustainable growth.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1', '2020-08-23 21:03:05', '2020-08-30 02:07:40'),
(40, '1598238922-missionVision.jpg', 'look2', 'see', NULL, '0', '2020-08-23 04:16:20', '2020-08-23 21:22:32'),
(45, '1598774988-mission-vission.jpg', 'Chattogram  Plant', 'We are working hard to ensure healthy products for a perfect healthy life of customer through innovation processes. We are devoted to investing in our people, our company and the communities where we operate to help position the company for long-term, sustainable growth.', 'Our vision is to become a global leader in every business of ourselves through product diversification, innovation and customer’s satisfaction. We also endeavor to attain a high level of productivity in all our operations through effective and efficient use of resources, adaptation of appropriate technology and alignment with core competencies.', '1', '2020-08-30 02:09:48', '2020-08-30 02:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_categories_id` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_categories_id`, `img`, `delete_status`, `created_at`, `updated_at`) VALUES
(10, 1, '1598505216-missionVision.jpg', 0, '2020-08-26 23:13:36', '2020-08-26 23:37:56'),
(9, 4, '1598504780-footer-logo.png', 0, '2020-08-26 23:06:20', '2020-08-26 23:38:05'),
(8, 2, '1598504457-whylpg.jpg', 0, '2020-08-26 23:00:57', '2020-08-26 23:38:08'),
(7, 1, '1598504425-missionVision.jpg', 0, '2020-08-26 23:00:25', '2020-08-26 23:38:11'),
(11, 1, '1598505320-tiger.jpg', 0, '2020-08-26 23:15:20', '2020-08-30 00:02:07'),
(12, 1, '1598505371-favicon1.png', 0, '2020-08-26 23:16:11', '2020-08-30 00:02:17'),
(13, 3, '1598508095-ele(1).jpg', 0, '2020-08-27 00:01:35', '2020-08-30 00:02:14'),
(14, 4, '1598508556-whylpg.jpg', 0, '2020-08-27 00:09:16', '2020-08-30 00:02:10'),
(15, 5, '1598508794-download.jpg', 0, '2020-08-27 00:13:14', '2020-08-30 00:02:24'),
(16, 6, '1598509022-tiger.jpg', 0, '2020-08-27 00:17:02', '2020-08-27 00:21:08'),
(17, 6, '1598509278-small-cylender.png', 0, '2020-08-27 00:21:18', '2020-08-27 00:21:22'),
(18, 1, '1598768196-project-2.jpg', 1, '2020-08-30 00:16:37', '2020-08-30 00:16:37'),
(19, 1, '1598768210-project-8.jpg', 1, '2020-08-30 00:16:50', '2020-08-30 00:16:50'),
(20, 3, '1598768270-project-3.jpg', 1, '2020-08-30 00:17:50', '2020-08-30 00:17:50'),
(21, 3, '1598769341-images.jpg', 1, '2020-08-30 00:35:41', '2020-08-30 00:35:41'),
(22, 4, '1598769430-download (1).jpg', 1, '2020-08-30 00:37:10', '2020-08-30 00:37:10'),
(23, 3, '1598769448-download (2).jpg', 1, '2020-08-30 00:37:28', '2020-08-30 00:37:28'),
(24, 2, '1598769481-download (3).jpg', 0, '2020-08-30 00:38:01', '2020-08-30 00:41:40'),
(25, 2, '1598769514-download (4).jpg', 1, '2020-08-30 00:38:34', '2020-08-30 00:38:34'),
(26, 2, '1598769531-download (5).jpg', 1, '2020-08-30 00:38:51', '2020-08-30 00:38:51'),
(27, 4, '1598769553-download.jpg', 1, '2020-08-30 00:39:13', '2020-08-30 00:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Gas Cylinder', 1, NULL, NULL),
(2, 'Autogas', 1, NULL, NULL),
(3, 'Households Gas', 1, NULL, NULL),
(4, 'Industrial Gas', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_first_part` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_second_part` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `favicon`, `logo`, `contact`, `address_first_part`, `address_second_part`, `email`, `facebook`, `linkedin`, `twitter`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'favicon.png', 'logo.png', '+88028419450', 'House: #514 (3rd Floor), Road: #9', 'DOHS, Baridhara, Dhaka, Bangladesh', 'info@universallpgas.com', NULL, NULL, NULL, '1', '2020-08-17 21:24:52', '2020-08-18 05:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `serial` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `serial`, `title`, `img`, `slider_for`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Slider-1.jpg', 'front_slider', 1, '2020-08-17 21:26:01', '2020-08-17 21:26:01'),
(2, NULL, NULL, '1598691528-Slider-2.jpg', 'front_slider', 1, '2020-08-29 02:58:48', '2020-08-29 02:58:48'),
(3, NULL, NULL, '1598692239-Slider-3.jpg', 'front_slider', 1, '2020-08-29 03:10:39', '2020-08-29 03:10:39'),
(4, NULL, NULL, '1598694338-Slider-5.jpg', 'front_slider', 1, '2020-08-29 03:45:38', '2020-08-29 03:45:38'),
(5, NULL, NULL, '1598694511-Slider-4.jpg', 'front_slider', 1, '2020-08-29 03:48:31', '2020-08-29 03:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$uXn8Bp8diSh47ePNgsE8eurqlepwwzodI7bfYQCeVOQMqCbwO1SrC', NULL, '2020-08-17 21:22:48', '2020-08-17 21:22:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
