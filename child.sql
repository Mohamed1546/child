-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 مايو 2023 الساعة 00:26
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child`
--

-- --------------------------------------------------------

--
-- بنية الجدول `adoption`
--

CREATE TABLE `adoption` (
  `id` int(11) NOT NULL,
  `husband` varchar(100) NOT NULL,
  `wife` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `choice` point NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `adoption`
--

INSERT INTO `adoption` (`id`, `husband`, `wife`, `place`, `image`, `choice`) VALUES
(2, 'ouiy', 'retr', '43gf', '', 0x),
(3, 'poi', 'oi', 'fzg', '', 0x),
(5, 'ouiy', 'retr', '43gf', '', 0x);

-- --------------------------------------------------------

--
-- بنية الجدول `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `information`
--

INSERT INTO `information` (`id`, `image`, `title`, `address`) VALUES
(1, 'images/c2.jpg', 'hgf', '7u56y54'),
(2, 'images/c1.jpg', '5rstae', 'ewrxfc'),
(5, 'images/honey2.PNG', 'honoy1', 'good website for free.54'),
(6, 'images/cv2.PNG', 'mo', 'honoy logo for my project1');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin'),
(2, 'محمد', 'mmmm@gmail.com', '133133'),
(3, 'محمد', 'mmmm@gmail.com', '133133'),
(4, 'employee', 'm24@gmail.com', '133133133');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
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
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
