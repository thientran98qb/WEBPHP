-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 02:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE `adv` (
  `id_adv` int(11) NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `urlHinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `count_click` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `unsigned_category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category_name`, `unsigned_category_name`, `image`) VALUES
(1, 'Đồ ăn theo mùa', 'do-an-theo-mua', 'mua.jpg'),
(2, 'Đồ ăn theo miền', 'do-an-theo-mien', 'mien.jpg'),
(3, 'Đồ ăn kiêng', 'do-an-kieng', 'ankieng.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_categories`
--

CREATE TABLE `detail_categories` (
  `id_detail_category` int(11) NOT NULL,
  `name_detail_category` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name_unsigned` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dishs`
--

CREATE TABLE `dishs` (
  `id_dish` int(11) NOT NULL,
  `name_dish` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `preprocessing` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_video` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_detail_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meats`
--

CREATE TABLE `meats` (
  `id_meat` int(6) NOT NULL,
  `name_meat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `unsigned_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `brief` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `urlImage` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ressources`
--

CREATE TABLE `ressources` (
  `id_ressource` int(11) NOT NULL,
  `id_dish` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `id_vegetalbe` int(11) NOT NULL,
  `id_seafood` int(11) NOT NULL,
  `id_meat` int(11) NOT NULL,
  `id_spice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role_name`) VALUES
(1, 'Customer'),
(2, 'Admin'),
(136, 'thientran'),
(137, 'hihi');

-- --------------------------------------------------------

--
-- Table structure for table `seafoods`
--

CREATE TABLE `seafoods` (
  `id_seafood` int(6) NOT NULL,
  `name_seafood` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spices`
--

CREATE TABLE `spices` (
  `id_spice` int(6) NOT NULL,
  `name_spice` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `full_name`, `id_role`, `active`) VALUES
(1, 'thientran98qb@gmail.com', 'thientran98qb@gmail.com', '123456', 'Trần Đình Thiện', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id_vegetable` int(6) NOT NULL,
  `name_vegetable` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adv`
--
ALTER TABLE `adv`
  ADD PRIMARY KEY (`id_adv`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_danhgia` (`id_user`),
  ADD KEY `fk_dish_comment` (`id_dish`);

--
-- Indexes for table `detail_categories`
--
ALTER TABLE `detail_categories`
  ADD PRIMARY KEY (`id_detail_category`),
  ADD KEY `fk_category` (`id_category`);

--
-- Indexes for table `dishs`
--
ALTER TABLE `dishs`
  ADD PRIMARY KEY (`id_dish`),
  ADD KEY `fk_detail_dish` (`id_detail_category`);

--
-- Indexes for table `meats`
--
ALTER TABLE `meats`
  ADD PRIMARY KEY (`id_meat`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id_ressource`),
  ADD KEY `fk_seafood` (`id_seafood`),
  ADD KEY `fk_meat` (`id_meat`),
  ADD KEY `fk_vegetable` (`id_vegetalbe`),
  ADD KEY `fk_spice` (`id_spice`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `seafoods`
--
ALTER TABLE `seafoods`
  ADD PRIMARY KEY (`id_seafood`);

--
-- Indexes for table `spices`
--
ALTER TABLE `spices`
  ADD PRIMARY KEY (`id_spice`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_quyen` (`id_role`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id_vegetable`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adv`
--
ALTER TABLE `adv`
  MODIFY `id_adv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_categories`
--
ALTER TABLE `detail_categories`
  MODIFY `id_detail_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dishs`
--
ALTER TABLE `dishs`
  MODIFY `id_dish` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meats`
--
ALTER TABLE `meats`
  MODIFY `id_meat` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id_ressource` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `seafoods`
--
ALTER TABLE `seafoods`
  MODIFY `id_seafood` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spices`
--
ALTER TABLE `spices`
  MODIFY `id_spice` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id_vegetable` int(6) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_danhgia` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_dish_comment` FOREIGN KEY (`id_dish`) REFERENCES `dishs` (`id_dish`);

--
-- Constraints for table `detail_categories`
--
ALTER TABLE `detail_categories`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id_category`);

--
-- Constraints for table `dishs`
--
ALTER TABLE `dishs`
  ADD CONSTRAINT `fk_detail_dish` FOREIGN KEY (`id_detail_category`) REFERENCES `detail_categories` (`id_detail_category`);

--
-- Constraints for table `ressources`
--
ALTER TABLE `ressources`
  ADD CONSTRAINT `fk_meat` FOREIGN KEY (`id_meat`) REFERENCES `meats` (`id_meat`),
  ADD CONSTRAINT `fk_seafood` FOREIGN KEY (`id_seafood`) REFERENCES `seafoods` (`id_seafood`),
  ADD CONSTRAINT `fk_spice` FOREIGN KEY (`id_spice`) REFERENCES `spices` (`id_spice`),
  ADD CONSTRAINT `fk_vegetable` FOREIGN KEY (`id_vegetalbe`) REFERENCES `vegetables` (`id_vegetable`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_quyen` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
