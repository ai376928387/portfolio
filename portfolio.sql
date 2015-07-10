-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2015 at 06:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'first blog', 'Hello world! \r\nThis is wicky''s blog!', '2015-07-09 22:17:17', '2015-07-09 22:17:17'),
(2, '7/9 MORNING', 'This is the last week class in Tasman. I will nearly finish my last project.\r\n\r\nHope the next stage I will go further in the web industry.', '2015-07-08 23:00:13', '2015-07-08 23:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE IF NOT EXISTS `slider_images` (
`image_id` int(11) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` time NOT NULL,
  `created_at` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`image_id`, `title`, `description`, `image_name`, `updated_at`, `created_at`) VALUES
(1, 'June 20,@ Taupo', 'Glass Factory', 'IMG_1404.JPG', '04:50:56', '04:50:56'),
(2, 'June 20, @Taupo', 'White Glass Flower', 'IMG_1408.JPG', '04:54:55', '04:54:55'),
(3, 'June 31,roadside', 'Sunset@Henderson', 'IMG_1229.JPG', '06:08:27', '06:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(200) NOT NULL,
  `username` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` time NOT NULL,
  `created_at` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(1, 'beini', '$2y$10$ztzgkDGDUF1RtnIFprirruNBL/tT8TI1aVmQUsCLDOxWE40pfnD8i', 'Ewfemt1oV2MANwcnasi5xqMwgy2rmy2K3cGESqPOpjLEs3JmznDFVs376JaU', '23:58:21', '21:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
 ADD UNIQUE KEY `image_id` (`image_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
