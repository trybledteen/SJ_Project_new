-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 10:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SJ_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `acceptance` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `acceptance`) VALUES
(56, 'Test', 'test@test.sk', 'Toto je testovacia správa', 1),
(57, 'Test 2 ', 'test2@test.sk', 'Toto je testovacia správa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `name`, `text`) VALUES
(1, '/SJ_Project/assets/img/gallery/gal1.jpg', 'Gallery 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in facilisis sapien. Ut dapibus eros eros, non tempor massa facilisis eu. Donec sit amet rhoncus metus. Proin eu urna a ipsum congue posuere. Vivamus vitae placerat ex. In gravida mollis efficitur. Donec tempus magna viverra tortor vulputate aliquam. Sed volutpat urna vel risus malesuada, id placerat erat efficitur. Quisque elementum eros ac leo eleifend, eget viverra est efficitur.'),
(2, '/SJ_Project/assets/img/gallery/gal2.jpg', 'Gallery 2 ', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(3, '/SJ_Project/assets/img/gallery/gal3.jpg', 'Gallery 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in facilisis sapien. Ut dapibus eros eros, non tempor massa facilisis eu. Donec sit amet rhoncus metus. Proin eu urna a ipsum congue posuere. Vivamus vitae placerat ex. In gravida mollis efficitur. Donec tempus magna viverra tortor vulputate aliquam. Sed volutpat urna vel risus malesuada, id placerat erat efficitur. Quisque elementum eros ac leo eleifend, eget viverra est efficitur.'),
(4, '/SJ_Project/assets/img/gallery/gal4.jpg', 'Gallery 4', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(5, '/SJ_Project/assets/img/gallery/gal5.jpg', 'Gallery 5', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.'),
(6, '/SJ_Project/assets/img/gallery/gal6.jpg', 'Gallery 5', 'Quisque id gravida metus. Etiam at orci leo. Fusce fermentum a tellus sed eleifend. Praesent et massa non mi interdum auctor ut id augue. Fusce hendrerit euismod tincidunt. Maecenas consectetur placerat imperdiet. Maecenas semper commodo viverra. Pellentesque non mollis nulla, et volutpat sapien. In ac convallis mauris. Praesent bibendum augue ut hendrerit ultrices. Maecenas sagittis neque id justo viverra, eget interdum odio finibus. Aliquam ac feugiat ipsum. Vestibulum luctus vulputate magna eget cursus. Suspendisse consequat diam libero, in ultricies odio porttitor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec volutpat feugiat orci eu dignissim.');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(1, 'What are the main destinations offered by your company?', 'Our company provides tours to various mountain regions, including the Alps, the Himalayas, the Andes, and the Carpathians. We also specialize in tours to national parks and remote mountain trails'),
(2, 'Are there special programs for beginners in mountain tourism?', 'Yes, we have programs tailored for beginners, including training in basic mountain skills, mountain navigation, and safety in extreme conditions.'),
(3, 'What is the duration and cost of an average tour?', 'The duration and cost of tours vary depending on the chosen destination and comfort level. Typically, our tours range from one to two weeks, with budgets to suit different requirements.'),
(4, 'What methods do you use to ensure safety during travels?', 'We adhere to strict safety standards, providing experienced guides trained in first aid, communication devices for emergencies, and regular safety briefings.'),
(5, 'Are your tours adapted for different levels of physical fitness?', 'Yes, our tours are diverse and suitable for both experienced mountaineers and those who are just starting their mountain journey. We offer routes of varying difficulty.'),
(6, 'What additional services are included in the tour cost?', 'The tour cost includes transfers, accommodation, basic meals, group activities, and the services of a guide. Additional services can be provided upon request.');
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(1, 'admin@admin.sk', 'admin', 1),
(2, 'user@user.sk', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
