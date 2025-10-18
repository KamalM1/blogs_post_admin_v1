-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2025 at 06:50 PM
-- Server version: 10.11.11-MariaDB-cll-lve
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nrisite_blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_master`
--

CREATE TABLE `blogs_master` (
  `blog_id` bigint(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `blog_description` varchar(250) NOT NULL,
  `blog_keywords` varchar(250) NOT NULL,
  `blog_content` varchar(10000) NOT NULL,
  `blog_priority` bigint(10) NOT NULL,
  `blog_homepage_flag` varchar(10) NOT NULL,
  `blog_created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_updated_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `blogs_related` varchar(1000) NOT NULL,
  `general_comments` varchar(1000) NOT NULL,
  `col12` varchar(1) NOT NULL,
  `col13` varchar(1) NOT NULL,
  `col14` varchar(1) NOT NULL,
  `col15` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs_master`
--

INSERT INTO `blogs_master` (`blog_id`, `user_name`, `blog_title`, `blog_description`, `blog_keywords`, `blog_content`, `blog_priority`, `blog_homepage_flag`, `blog_created_time`, `blog_updated_time`, `blogs_related`, `general_comments`, `col12`, `col13`, `col14`, `col15`) VALUES
(15, 'Kamal\'s blog', 'NRIsite General Blog', 'This is the description of the blog page.', 'These are the keywords of the blog page.', '<p>\r\nThere are so many quality options when it comes to selecting the best Bluetooth speakers these days. The choice really comes down to: What kind of speaker do you want? \r\nYou can opt for a lightweight gadget to play tunes in the garden, or something to raise the roof at your next big party. Decide between a portable and battery-powered speaker \r\nor a decent hi-fi replacement that will suit the biggest room. There are speakers that are small enough to be pocketable —or at least small enough to be tossed in a bag so \r\nyou can take it to the park, the beach, and beyond.\r\n</p>\r\n<p>\r\nThough each speaker works on its own, many can be connected to a second one and set up as a stereo pair. This costs twice as much, of course, but is always worth it as the \r\nimprovement in audio quality is noticeable. The Sonos Move can be connected to other Sonos speakers in your possession, though only through wi-fi. Some, like the JBL Charge 4 and \r\nUltimate Ears Megaboom 3, can be linked together in much higher numbers, by which I mean 100 or even more! (If you’re doing this, maybe invite the neighbors to the party.)\r\n</p>\r\n<p>\r\nThere are so many quality options when it comes to selecting the best Bluetooth speakers these days. The choice really comes down to: What kind of speaker do you want? \r\nYou can opt for a lightweight gadget to play tunes in the garden, or something to raise the roof at your next big party. Decide between a portable and battery-powered speaker \r\nor a decent hi-fi replacement that will suit the biggest room. There are speakers that are small enough to be pocketable —or at least small enough to be tossed in a bag so \r\nyou can take it to the park, the beach, and beyond.\r\n</p>\r\n<p>\r\nThough each speaker works on its own, many can be connected to a second one and set up as a stereo pair. This costs twice as much, of course, but is always worth it as the \r\nimprovement in audio quality is noticeable. The Sonos Move can be connected to other Sonos speakers in your possession, though only through wi-fi. Some, like the JBL Charge 4 and \r\nUltimate Ears Megaboom 3, can be linked together in much higher numbers, by which I mean 100 or even more! (If you’re doing this, maybe invite the neighbors to the party.)\r\n</p>', 0, '', '2020-05-23 07:48:47', '2020-05-23 07:48:47', '', '', '', '', '', ''),
(16, 'Kamal', 'test blog second one', 'Changing blog description', 'nknksnk nskjdnkjsnd nkjnjknjk', ' \"nkjdsnkjasnkj nkjdkjsnakd sdnkjsankjbkj\" ', 1, '', '2020-07-26 17:26:05', '2020-07-26 17:26:05', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tags`
--

CREATE TABLE `blogs_tags` (
  `blogs_tags_id` varchar(250) NOT NULL,
  `blog_prefix_head_one` varchar(500) NOT NULL,
  `add_col1` varchar(500) NOT NULL,
  `blog_prefix_head_two` varchar(500) NOT NULL,
  `add_col2` varchar(500) NOT NULL,
  `add_col3` varchar(500) NOT NULL,
  `log_prefix_body_one` varchar(500) NOT NULL,
  `add_col4` varchar(500) NOT NULL,
  `add_col5` varchar(500) NOT NULL,
  `log_prefix_body_two` varchar(500) NOT NULL,
  `add_col6` varchar(500) NOT NULL,
  `add_col7` varchar(500) NOT NULL,
  `add_col8` varchar(500) NOT NULL,
  `add_col9` varchar(500) NOT NULL,
  `add_col10` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `blogs_tags`
--

INSERT INTO `blogs_tags` (`blogs_tags_id`, `blog_prefix_head_one`, `add_col1`, `blog_prefix_head_two`, `add_col2`, `add_col3`, `log_prefix_body_one`, `add_col4`, `add_col5`, `log_prefix_body_two`, `add_col6`, `add_col7`, `add_col8`, `add_col9`, `add_col10`) VALUES
('GENERIC', '<?php include(\"/home/nrisite/public_html/beta/blog_prefix_head_one.php\") ?> ', '', '<?php include(\"/home/nrisite/public_html/beta/blog_prefix_head_two.php\") ?> ', '', '', '<?php include(\"/home/nrisite/public_html/beta/blog_prefix_body_one.php\") ?> ', '', '', '<?php include(\"/home/nrisite/public_html/beta/blog_prefix_body_two.php\") ?> ', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs_master`
--
ALTER TABLE `blogs_master`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blogs_tags`
--
ALTER TABLE `blogs_tags`
  ADD PRIMARY KEY (`blogs_tags_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs_master`
--
ALTER TABLE `blogs_master`
  MODIFY `blog_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
