-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.infinityfree.com
-- Generation Time: Jan 24, 2025 at 07:15 PM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_38157452_takke`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseImage` text NOT NULL,
  `coursePrice` varchar(10) NOT NULL,
  `userName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartId`, `courseId`, `courseName`, `courseImage`, `coursePrice`, `userName`) VALUES
(195, 3, 'Cubase', 'https://m.media-amazon.com/images/I/91r3N2FoF5L.png', '150', 'moe12'),
(196, 15, 'Virtual DJ', 'https://wallpapersok.com/images/high/cool-computer-interface-of-virtual-dj-gf25uh0v7byoov4o.jpg', '30', 'moe12'),
(224, 6, 'Audio Recording Techniques', 'https://static.vecteezy.com/system/resources/thumbnails/034/430/800/small_2x/audio-recording-studio-with-professional-audio-equipment-close-up-view-shot-of-a-modern-music-record-studio-control-desk-with-computer-screen-show-user-interface-of-daw-software-ai-generated-free-photo.jpg', '30', 'rashed'),
(225, 2, 'FL Studio', 'https://www.image-line.com/wp-content/uploads/2024/01/ai-mastering-news.jpg', '70', 'rashed'),
(228, 1, 'Studio One', 'https://splice.com/blog/wp-content/uploads/2018/11/studioOne-blog_feature_2x.png', '20', 'Osamah'),
(229, 6, 'Audio Recording Techniques', 'https://static.vecteezy.com/system/resources/thumbnails/034/430/800/small_2x/audio-recording-studio-with-professional-audio-equipment-close-up-view-shot-of-a-modern-music-record-studio-control-desk-with-computer-screen-show-user-interface-of-daw-software-ai-generated-free-photo.jpg', '30', 'moe911'),
(230, 15, 'Virtual DJ', 'https://wallpapersok.com/images/high/cool-computer-interface-of-virtual-dj-gf25uh0v7byoov4o.jpg', '30', 'moe911'),
(231, 15, 'Virtual DJ', 'https://wallpapersok.com/images/high/cool-computer-interface-of-virtual-dj-gf25uh0v7byoov4o.jpg', '30', 'rashed');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `coursePrice` varchar(10) NOT NULL,
  `courseImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `courseName`, `coursePrice`, `courseImage`) VALUES
(1, 'Studio One', '20', 'https://splice.com/blog/wp-content/uploads/2018/11/studioOne-blog_feature_2x.png'),
(2, 'FL Studio', '70', 'https://www.image-line.com/wp-content/uploads/2024/01/ai-mastering-news.jpg'),
(3, 'Cubase', '150', 'https://m.media-amazon.com/images/I/91r3N2FoF5L.png'),
(4, 'Intro To Sound Engineering', '10', 'https://mixingmonster.com/wp-content/uploads/2023/06/blog-music-audio-engineering-1.webp'),
(5, 'Music Production', '60', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7nRzhinsA8YNKpfTtUIeHSOpAfT4AnvWdPA&s'),
(6, 'Audio Recording Techniques', '30', 'https://static.vecteezy.com/system/resources/thumbnails/034/430/800/small_2x/audio-recording-studio-with-professional-audio-equipment-close-up-view-shot-of-a-modern-music-record-studio-control-desk-with-computer-screen-show-user-interface-of-daw-software-ai-generated-free-photo.jpg'),
(8, 'Digital Audio Workstations', '90', 'https://img.freepik.com/premium-vector/workplace-sound-video-editor-interface-software-application-computer-monitor_72460-19.jpg?w=1480'),
(10, 'Audio Signal Processing ', '300', 'https://img.freepik.com/free-photo/sound-waves-coming-out-from-human-ear_23-2149831010.jpg?t=st=1737341340~exp=1737344940~hmac=0c0f3c3bf62d6388753c80b97063127dad2ca14ec4810e9bc97bc23a38dc8e3b&w=1380'),
(12, 'Advanced Microphone Techniques', '32', 'https://img.freepik.com/free-photo/african-american-audio-engineer-using-sound-mixing-console-managing-tracks_482257-105034.jpg?t=st=1737341479~exp=1737345079~hmac=6859c369931613e86c08ade6e7069bd2536b635bbdb0ceaeb4b849a2dd95a8e7&w=1480'),
(13, 'Adobe Audition', '55', 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ded86755-974a-4189-9f10-5b748fe3661e/ddv7h4w-e843eb4e-dd44-4dec-8567-2a7bc4482f69.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RlZDg2NzU1LTk3NGEtNDE4OS05ZjEwLTViNzQ4ZmUzNjYxZVwvZGR2N2g0dy1lODQzZWI0ZS1kZDQ0LTRkZWMtODU2Ny0yYTdiYzQ0ODJmNjkucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.TofiWcSHBPrmw64e_XOfRhyH5tO9QURfcoohWBIsoc4'),
(14, 'WaveLab', '10', 'https://ocl-steinberg-live.steinberg.net/_storage/asset/121168/storage/master/wavelab-cast-fb-open-graph-1200-630.jpg'),
(15, 'Virtual DJ', '30', 'https://wallpapersok.com/images/high/cool-computer-interface-of-virtual-dj-gf25uh0v7byoov4o.jpg'),
(16, 'Ableton Live', '16', 'https://c4.wallpaperflare.com/wallpaper/816/52/887/music-daw-ableton-black-wallpaper-preview.jpg'),
(17, 'Logic Pro X', '99', 'https://images.sonicacademy.com/blog_items/image_1s/000/000/052/large/image1.jpg?1715335236'),
(18, 'Pro Tools', '60', 'https://c4.wallpaperflare.com/wallpaper/76/321/85/pro-tools-audio-sound-avid-technology-wallpaper-preview.jpg'),
(19, 'Native Instruments Komplete', '14', 'https://synthanatomy.com/wp-content/uploads/2024/09/%E2%80%8ENative-Instruments-Komplete-15-cover.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` text NOT NULL,
  `userPassword` varchar(11) NOT NULL,
  `userEmail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPassword`, `userEmail`) VALUES
(6, 'moe911', '12345678', 'moe9111@gmail.com'),
(7, 'moe12', '12345678', 'moe12@gmail.com'),
(8, 'rashed', '12345678', 'rashed@gmail.com'),
(9, 'aymanredaa', 'aymanreda20', 'aymnalkhlyaft1111@gmail.com'),
(11, 'moe111', '12345678', 'moe111@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName` (`userName`) USING HASH,
  ADD UNIQUE KEY `userEmail` (`userEmail`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
