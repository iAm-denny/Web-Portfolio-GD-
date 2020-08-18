-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 08:15 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `addskin`
--

CREATE TABLE `addskin` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `head` varchar(255) NOT NULL,
  `rarity` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addskin`
--

INSERT INTO `addskin` (`id`, `img`, `head`, `rarity`, `type`, `availability`, `categories`, `time`) VALUES
(1, 'skin1.webp', '8 Balls Vs Scratch', 'Epic', 'Outfitt', 'Battle Pass', 'Male', '2020-02-29 05:59:21'),
(2, 'skin2.webp', 'E.X.A', 'Rare', 'Harvesting Tool', 'Shops', '', '2020-02-29 06:00:28'),
(3, 'skin3.webp', 'Absolute Zero', 'Rarity: Rare', 'Outfit', '-', 'Male', '2020-02-29 06:01:14'),
(4, 'skin4.webp', 'SKin', 'Rare', 'Harvesting Tool', 'Battle Pass', '', '2020-02-29 06:01:59'),
(5, 'skin5.webp', 'Airhead', ' Epic', ': Outfit', 'Unreleased', 'Male', '2020-02-29 06:02:20'),
(6, 'skin6.webp', 'Peely', 'Epic', ' Outfit', 'Battle Pass', 'Male, Reactive', '2020-02-29 06:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `epicname` varchar(255) DEFAULT NULL,
  `gname` varchar(255) DEFAULT NULL,
  `urname` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `boughtskin` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `epicname`, `gname`, `urname`, `amount`, `payment`, `email`, `boughtskin`, `time`) VALUES
(55, 'gfdh', 'dghdfgh', 'dghdg', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:06:01'),
(56, 'sfgsfgfsg', 'sfgsfgsfg', 'sfdgsfdg', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:09:17'),
(57, 'afdasfsda', 'fsadfsadf', 'sdafsadfsadf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:09:43'),
(58, 'dghfgh', 'fghghj', 'fghjfgh', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:10:31'),
(59, 'sfdgsfdgsfggfsdg', 'sdfgsfdgsfdg', 'sfdgsdfg', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:11:15'),
(60, 'sfgsfdg', 'sfdgsfg', 'sdfgsfg', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:11:56'),
(61, 'asdfasdf', 'sdafsadf', 'asdfasdf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:13:07'),
(62, 'asdfdsaf', 'sdafsadf', 'sdafsadf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:14:41'),
(63, 'dadfaf', 'fasdfadsf', 'asdfsdaf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:16:47'),
(64, 'afgfgh', 'fghfgdh', 'fgdhfdgh', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:17:27'),
(65, 'asdfadf', 'asdfdfsdaf', 'adsfasdf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:17:51'),
(66, 'adsf', 'dsafadf', 'sadfsdaf', '2,500V-bucks:$24.99USD', 'Master Card', '', '', '2020-02-17 05:18:35'),
(67, 'afd', 'asdfadsf', 'asdfadf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:19:57'),
(68, 'sadf', 'dsaf', 'asdf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:20:45'),
(69, 'asfd', 'sdaf', 'asdf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:22:04'),
(70, 'minla', 'min', 'min', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:22:58'),
(71, 'as', 'dsaf', 'asdfdasf', '1,000V-bucks:$9.99 USD', 'Master Card', '', '', '2020-02-17 05:23:12'),
(72, 'asdf', 'asdfadsf', 'sdaf', '1,000V-bucks:$9.99 USD', 'Master Card', 'hello@gmail.com', '', '2020-02-17 05:26:40'),
(73, 'hello', 'hello', 'hello', '1,000V-bucks:$9.99 USD', 'Master Card', 'hellO@gmail.c', '', '2020-02-17 07:24:08'),
(74, 'sdafsdaf', 'sdafasdf', 'asdfasdf', '1,000V-bucks:$9.99 USD', 'Master Card', 'asf', '', '2020-02-17 07:29:00'),
(75, 'sadf', 'sdaf', 'sdaf', '1,000V-bucks:$9.99 USD', 'Master Card', 'dsaf', '', '2020-02-17 07:32:01'),
(76, 'Denny', 'Denn', 'admin', '1,000V-bucks:$9.99 USD', 'Master Card', 'adf@gmail.com', '', '2020-02-17 07:32:37'),
(77, 'sh', 'Denn', 'Den', '1,000V-bucks:$9.99 USD', 'Master Card', 'minlapyae@gmail.com', '', '2020-02-17 07:32:58'),
(78, 'sad', 'asdf', 'sdaf', '1,000V-bucks:$9.99 USD', 'Master Card', 'sdaf', '', '2020-02-17 09:05:28'),
(79, 'denny', 'hfgh', 'denny', '1,000V-bucks:$9.99 USD', 'Master Card', 'denny', '', '2020-02-17 09:07:35'),
(80, 'Denny', 'dsaf', 'Denn', '1,000V-bucks:$9.99 USD', 'Master Card', 'dsaf', '', '2020-02-17 12:07:34'),
(81, 'dsadf', 'sdaf', 'asdf', '1,000V-bucks:$9.99 USD', 'Master Card', 'asdf', '', '2020-02-17 13:55:42'),
(82, 'Denny', 'Denn', 'admin', '1,000V-bucks:$9.99 USD', 'Master Card', 'adf@gmail.com', '', '2020-02-18 05:10:51'),
(83, 'fsgsdg', 'fdsgfsdg', 'sfdgfdsg', '1,000V-bucks:$9.99 USD', 'Master Card', 'fdsgfdg', '', '2020-02-20 08:11:29'),
(84, 'sad', 'sad', 'sad', '1,000V-bucks:$9.99 USD', 'Master Card', 'sad', '', '2020-02-22 08:21:26'),
(85, 'Test', 'test', 'Ko Ko Zin', '2,500V-bucks:$24.99USD', 'Visa Card', 'kokozin@localhost.com', '', '2020-02-23 09:57:34'),
(86, 'M', 'l', 'p', '1,000V-bucks:$9.99 USD', 'Master Card', 'j@gmail.com', '', '2020-03-05 05:09:59'),
(87, 'M', 'l', 'p', '1,000V-bucks:$9.99 USD', 'Master Card', 'j@gmail.com', '', '2020-03-05 05:10:04'),
(88, 'asdf', 'asdf', 'asdf', '1,000V-bucks:$9.99 USD', 'Master Card', 'asdf', '', '2020-03-11 11:51:50'),
(89, 'kk', 'jjj', 'yyy', '1,000V-bucks:$9.99 USD', 'Master Card', 'kk@gmail.com', '', '2020-03-12 07:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `emote`
--

CREATE TABLE `emote` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `rarity` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emote`
--

INSERT INTO `emote` (`id`, `img`, `header`, `rarity`, `type`, `availability`, `link`, `time`) VALUES
(1, 'e1.webp', 'Banner Wave', ' Rare', 'Emote', 'Shop', 'https://www.youtube.com/watch?v=13wAX_EOC04&feature=emb_title', '2020-03-03 04:27:14'),
(2, 'e2.webp', 'Behold! ', 'Uncommon', ' Emote', 'Shop', 'https://www.youtube.com/watch?v=QRcVMx2t4_Q', '2020-03-03 04:28:03'),
(3, 'e3.webp', 'Best Mates', 'Rare', 'Emote', 'Battle Pass', 'https://www.youtube.com/watch?v=hFyNHXUGhKg', '2020-03-03 04:28:45'),
(4, 'e4.webp', 'Boing!', 'Epic', 'Emote', 'Battle Pass', 'https://www.youtube.com/watch?v=PeDjXEBmb1s', '2020-03-03 04:29:31'),
(5, 'e5.webp', 'Dabstand', 'Uncommon', 'Emote ', ' Battle Pass', 'https://www.youtube.com/watch?v=I8V72LAwZfg', '2020-03-03 04:30:07'),
(6, 'e6.webp', 'Dark Side', 'Star Wars', ' Emote', 'Shop', 'https://www.youtube.com/watch?v=NcrgOdopJ6k', '2020-03-03 04:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `gli`
--

CREATE TABLE `gli` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `rarity` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gli`
--

INSERT INTO `gli` (`id`, `img`, `header`, `rarity`, `type`, `availability`, `time`) VALUES
(8, 'gli1.webp', 'Burning Beast ', ' Legendary', 'Glider', ' Shop', '2020-03-03 04:06:49'),
(9, 'gli2.jpg', 'Cuddle Cruiser ', 'Rare', ' Cost: ', ' Shop', '2020-03-03 04:07:12'),
(10, 'gli3.webp', 'Dark Forerunner', 'Epic', 'Glider', 'Promotion', '2020-03-03 04:07:36'),
(11, 'gli4.webp', 'Discovery', 'Glider', 'Epic', 'Promotion', '2020-03-03 04:07:56'),
(12, 'gli5.webp', 'Divine Dragon', ' Epic', 'Glider', 'Shop', '2020-03-03 04:08:13'),
(13, 'gli6.webp', 'Driftstream', 'Rare', 'Glider', 'Shop', '2020-03-03 04:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `ht`
--

CREATE TABLE `ht` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `header` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `rarity` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ht`
--

INSERT INTO `ht` (`id`, `img`, `header`, `type`, `rarity`, `availability`, `time`) VALUES
(2, 'pa1.webp', 'A.X.E', 'Harvesting Tool', 'Rare', 'Shops', '2020-03-02 05:56:49'),
(4, 'pa2.webp', 'Abominable Axe', 'Harvesting Tool', 'Rare', 'Battle Pass', '2020-03-02 05:57:00'),
(5, 'pa3.webp', 'AC/DC', 'Harvesting Tool', 'Epic', 'Battle Pass', '2020-03-02 05:57:32'),
(6, 'pa4.webp', 'Aero Axe', 'Harvesting Tool ', ': Uncommon', '-', '2020-03-02 05:58:00'),
(7, 'pa5.webp', 'Angler Axes', 'Harvesting Tool', 'Rare', ' Battle Pass', '2020-03-02 05:58:22'),
(8, 'pa6.webp', 'Hello', 'Glider', ' Legendary', ' Shop', '2020-03-02 05:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createdtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `username`, `email`, `password`, `createdtime`) VALUES
(16, 'denny', 'denny@gmail.com', '3425f115ee1ecf591fb06d635c37d990', '2020-02-09 08:08:53'),
(18, 'thumoe', 'thumoe@gamil.com', '7374ad24f2d7c07fd2dc06555ce11fa0', '2020-02-13 12:11:34'),
(19, 'AA', 'aa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-02-14 07:05:48'),
(20, 'kokozin', 'kokozin@localhost.com', '8d985d14e7bf2b5643184d8ff9bd48b3', '2020-02-23 09:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `usermessage`
--

CREATE TABLE `usermessage` (
  `id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `senttime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermessage`
--

INSERT INTO `usermessage` (`id`, `message`, `senttime`) VALUES
(19, 'sadf', '2020-02-09 08:19:34'),
(20, 'lllll', '2020-02-14 07:00:18'),
(21, 'hhhh\r\n', '2020-02-14 07:17:45'),
(22, 'sfg', '2020-02-14 13:27:51'),
(23, 'dgh', '2020-02-14 13:28:07'),
(24, 'ghfd', '2020-02-14 13:28:12'),
(25, 'sfg', '2020-02-14 13:28:35'),
(26, 'gfdhdgfh', '2020-02-14 13:29:12'),
(27, 'sfgsfgsfdg', '2020-02-14 13:30:04'),
(28, 'asdfasdsaf', '2020-02-14 13:32:00'),
(29, 'I am ', '2020-02-14 13:34:49'),
(30, 'fgdhfdghfgdh', '2020-02-14 13:35:24'),
(31, 'Hello', '2020-02-14 13:35:48'),
(32, 'Hi', '2020-02-14 13:36:19'),
(33, 'HIIIIIIIIIIIIIIIIIIIII', '2020-02-14 13:37:10'),
(34, 'ddddddddddddddddd', '2020-02-14 13:40:06'),
(35, 'sadfsadf', '2020-02-14 13:40:09'),
(36, 'sfgfsdg', '2020-02-14 13:40:21'),
(37, 'asdfasdfasdasdf', '2020-02-14 13:41:58'),
(38, 'adfasdfsadf', '2020-02-14 13:42:13'),
(39, 'asdfasdf', '2020-02-14 13:42:34'),
(40, 'asfdasdf', '2020-02-14 13:42:49'),
(41, 'sdafsdafsdfsadf', '2020-02-14 13:45:09'),
(42, 'Gooooooood', '2020-02-14 13:45:18'),
(43, 'You Are Gooood', '2020-02-14 13:45:32'),
(44, 'sadfsdafsdaf', '2020-02-14 13:46:04'),
(45, 'safd', '2020-02-14 13:52:20'),
(46, 'asdfasdf', '2020-02-14 13:53:04'),
(47, 'asdfasdf', '2020-02-14 13:53:18'),
(48, 'gfhfghfghfgdhfhfghfghfgh', '2020-02-14 13:56:27'),
(49, 'sfdgsfdgfdsg', '2020-02-14 13:57:23'),
(50, 'sfdgsfdgfdsg', '2020-02-14 13:57:58'),
(51, 'Hello i am asdf', '2020-02-14 13:58:24'),
(52, 'Hello I am Fort', '2020-02-14 13:58:40'),
(53, 'Hello!!!!!!!', '2020-02-14 13:58:52'),
(54, 'asdfsadd', '2020-02-14 13:59:00'),
(55, 'asf', '2020-02-14 13:59:06'),
(56, 'Hello\r\n', '2020-02-14 13:59:36'),
(57, 'asasdf', '2020-02-14 14:00:22'),
(58, 'sdafsdaf', '2020-02-14 14:01:36'),
(59, 'asfdsadfsadf', '2020-02-14 14:02:02'),
(60, 'asdfsadfsadfsdaf', '2020-02-14 14:02:10'),
(61, 'asdfasdfasdf', '2020-02-14 14:02:54'),
(62, 'asdfasdfsadf', '2020-02-14 14:03:05'),
(63, 'asdfsadf', '2020-02-14 14:03:31'),
(64, 'Hello', '2020-02-14 14:04:27'),
(65, 'asfsadf', '2020-02-14 14:04:36'),
(66, 'asdfasdf', '2020-02-14 14:05:19'),
(67, 'Hello I am Fortnite Player', '2020-02-14 14:05:46'),
(68, 'adsf', '2020-02-14 14:07:02'),
(69, 'sfg', '2020-02-14 14:09:29'),
(70, 'Hello I am Fortnite player', '2020-02-14 14:12:22'),
(71, 'fgh', '2020-02-14 14:18:33'),
(72, 'asdf', '2020-02-14 14:20:11'),
(73, 'asdfasdf', '2020-02-14 14:20:22'),
(74, 'asdf', '2020-02-14 14:21:17'),
(75, 'asdfsadfsadf', '2020-02-14 14:22:02'),
(76, 'asdf', '2020-02-14 14:22:45'),
(77, 'asdf', '2020-02-14 14:23:08'),
(78, 'asdfasdfsdaf', '2020-02-14 14:23:38'),
(79, 'asdfsadf', '2020-02-14 14:24:31'),
(80, 'asdfsadf', '2020-02-14 14:24:49'),
(81, 'asdfsaf', '2020-02-14 14:25:00'),
(82, 'asdfsadf', '2020-02-14 14:25:14'),
(83, 'asdfsdafddd', '2020-02-14 14:25:29'),
(84, 'sadfsadfsdaf', '2020-02-14 14:26:07'),
(85, 'dafsdg', '2020-02-14 14:43:46'),
(86, 'hello', '2020-02-14 15:16:42'),
(87, 'asdfsadf', '2020-02-15 10:38:28'),
(88, 'Hello', '2020-02-15 10:45:03'),
(89, 'mingalrpr', '2020-02-15 10:56:16'),
(90, 'hello', '2020-02-15 12:22:52'),
(91, 'YOU RE', '2020-02-16 03:38:06'),
(92, 'asdf', '2020-02-17 09:05:00'),
(93, 'sadsad', '2020-02-19 11:01:34'),
(94, 'afdadf', '2020-02-20 03:34:36'),
(95, 'rrsfsdfsdf', '2020-02-22 08:21:02'),
(96, 'yuyuvyv', '2020-02-23 05:52:06'),
(97, 'Hello', '2020-02-23 09:28:40'),
(98, 'dfsadf', '2020-02-23 11:08:02'),
(99, 'sadfsdafsdafsdfsadf', '2020-03-11 11:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `usernews`
--

CREATE TABLE `usernews` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `newstime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usernews`
--

INSERT INTO `usernews` (`id`, `email`, `newstime`) VALUES
(17, 'adf@gmail.com', '2020-02-14 07:18:16'),
(18, 'asdfasdfa@gmail.com', '2020-02-14 14:11:18'),
(19, 'asdfsdaf@gmail.com', '2020-02-14 14:12:30'),
(20, 'asdf', '2020-02-14 14:15:54'),
(21, 'min@gmail.com', '2020-02-15 10:33:22'),
(22, 'aungaung@gmail.com', '2020-02-15 10:34:11'),
(23, 'mina@gmail.com', '2020-02-15 10:35:59'),
(24, 'adsf@gmail.com', '2020-02-15 10:36:56'),
(25, 'hnin@gmail.com', '2020-02-15 10:37:49'),
(26, 'ssss', '2020-02-15 10:38:24'),
(27, 'asdfsadf', '2020-02-15 10:40:02'),
(28, 'dsdfadf', '2020-02-15 10:40:19'),
(29, 'sfdaasfdd', '2020-02-15 10:40:42'),
(30, 'safdasdf', '2020-02-15 10:42:09'),
(31, 'sfdsafdasfdasf', '2020-02-15 10:42:30'),
(32, 'sadfsdaf', '2020-02-15 10:42:48'),
(33, 'sadfsadfsdafsf', '2020-02-15 10:43:04'),
(34, 'dsfemail', '2020-02-15 10:43:37'),
(35, 'hello@gmail.com', '2020-02-15 12:24:17'),
(36, 'adfsdf', '2020-02-17 09:05:09'),
(37, 'sadsad', '2020-02-19 11:01:45'),
(38, 'dasf', '2020-02-24 06:06:37'),
(39, 'sadfasdf', '2020-02-24 06:06:55'),
(40, 'asdf', '2020-02-24 06:07:04'),
(41, 'min@gmail.com', '2020-02-26 07:25:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addskin`
--
ALTER TABLE `addskin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emote`
--
ALTER TABLE `emote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gli`
--
ALTER TABLE `gli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ht`
--
ALTER TABLE `ht`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermessage`
--
ALTER TABLE `usermessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usernews`
--
ALTER TABLE `usernews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addskin`
--
ALTER TABLE `addskin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `emote`
--
ALTER TABLE `emote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gli`
--
ALTER TABLE `gli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ht`
--
ALTER TABLE `ht`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usermessage`
--
ALTER TABLE `usermessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `usernews`
--
ALTER TABLE `usernews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
