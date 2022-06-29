-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 12:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masakin`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipeId` int(255) NOT NULL,
  `authorId` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `viewsCount` int(11) NOT NULL DEFAULT 0,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipeId`, `authorId`, `title`, `photo`, `ingredients`, `isActive`, `viewsCount`, `updateAt`, `createdAt`) VALUES
(11, 5, 'Masakan Enak 1', '1655569170-food-image.png', '- 2 eggs\r\n- 2 tbsp mayonnaise\r\n- 3 slices bread\r\n- a little butter\r\n- ⅓ carton of cress\r\n- 2-3 slices of tomato or a lettuce leaf and a slice of ham or cheese\r\n- crisps , to serve', 1, 0, '2022-06-18 16:19:30', '2022-06-18 16:19:30'),
(12, 5, 'Masakan Enak 2', '1655569255-food-image.png', '- 2 eggs\r\n- 2 tbsp mayonnaise\r\n- 3 slices bread\r\n- a little butter\r\n- ⅓ carton of cress\r\n- 2-3 slices of tomato or a lettuce leaf and a slice of ham or cheese\r\n- crisps , to serve', 1, 0, '2022-06-18 16:20:55', '2022-06-18 16:20:55'),
(13, 5, 'Masakan Enak 3', '1655569267-food-image2.png', '- 2 eggs\r\n- 2 tbsp mayonnaise\r\n- 3 slices bread\r\n- a little butter\r\n- ⅓ carton of cress\r\n- 2-3 slices of tomato or a lettuce leaf and a slice of ham or cheese\r\n- crisps , to serve', 1, 0, '2022-06-18 16:21:07', '2022-06-18 16:21:07'),
(14, 5, 'Masakan Enak 4', '1655569287-landing-hero.webp', '- 2 eggs\r\n- 2 tbsp mayonnaise\r\n- 3 slices bread\r\n- a little butter\r\n- ⅓ carton of cress\r\n- 2-3 slices of tomato or a lettuce leaf and a slice of ham or cheese\r\n- crisps , to serve', 1, 0, '2022-06-18 16:21:27', '2022-06-18 16:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `recipeId` int(10) NOT NULL,
  `userId` int(10) NOT NULL,
  `review` text NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`recipeId`, `userId`, `review`, `updateAt`, `createdAt`) VALUES
(0, 5, 'testing', '2022-06-23 09:33:01', '2022-06-23 09:33:01'),
(0, 6, 'dsadsasdasda', '2022-06-23 09:55:05', '2022-06-23 09:55:05'),
(12, 6, 'dsadadsadsadsad', '2022-06-23 10:02:02', '2022-06-23 10:02:02'),
(12, 6, 'dsadadsadsadsad', '2022-06-23 10:02:10', '2022-06-23 10:02:10'),
(12, 6, 'this is comment', '2022-06-23 10:02:18', '2022-06-23 10:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `updateAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `password`, `name`, `photo`, `token`, `updateAt`, `createdAt`) VALUES
(5, 'radit@student.uns.ac.id', '$2y$10$PFijcoL6eb8gmAUK222PEuGCf.4LSUAL6E/RcEpjrp4Ep2q8.sZCa', 'Raditya Firman Syaputra', '1655569081-comment-image.png', '62adfab9ebb87', '2022-06-18 16:18:01', '2022-06-18 16:18:01'),
(6, 'radityafiqa4@gmail.com', '$2y$10$gT/aMv0P.XKn.YZ/iGMojeCRyUiLfnzVAunlGfpGEmk3GPgxlRnzC', 'Raditya Firman Syaputra', '1655976324-comment-image.png', '62b43184540c4', '2022-06-23 09:25:24', '2022-06-23 09:25:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipeId`),
  ADD KEY `authorId` (`authorId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`,`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipeId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `authorId` FOREIGN KEY (`authorId`) REFERENCES `users` (`userId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
