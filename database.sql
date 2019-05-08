-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 05:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolelection`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `post` varchar(30) NOT NULL,
  `house` varchar(30) NOT NULL DEFAULT 'na',
  `votes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `post`, `house`, `votes`) VALUES
(1, 'Nelle Elamin', 'Head Boy', 'na', 8),
(3, 'Aleshia Rhem', 'Head Boy', 'na', 19),
(4, 'Tammera ', 'Head Boy', 'na', 11),
(7, 'Tomasa Gerner', 'Head Girl', 'na', 10),
(8, 'Darlene Swayne', 'Head Girl', 'na', 19),
(9, 'Cyrus Bellinger', 'Deputy Head Boy', 'na', 9),
(18, 'Forest Alberto', 'Deputy Head Boy', 'na', 24),
(19, 'Janae Pittard', 'Deputy Head Boy', 'na', 5),
(21, 'Kristian Zwilling', 'Deputy Head Girl', 'na', 7),
(22, 'Natashia Henrich', 'Deputy Head Girl', 'na', 23),
(23, ' Beatrice Scala', 'Deputy Head Girl', 'na', 8),
(24, 'Miyoko Deluca', 'Deputy Head Girl', 'na', 0),
(25, 'Adelina Crume', 'Sports Captain', 'na', 3),
(26, 'Roslyn Sobieski', 'Sports Captain', 'na', 15),
(27, 'Ocie Hust', 'Sports Captain', 'na', 19),
(28, 'Palmira Battersby', 'Sports Captain', 'na', 1),
(29, 'Darell Beehler', 'Assistant Sports Captain', 'na', 7),
(30, 'Toi Basilio', 'Assistant Sports Captain', 'na', 22),
(31, 'Lucile Dillingham', 'Assistant Sports Captain', 'na', 7),
(32, 'Sherron Sevin', 'Assistant Sports Captain', 'na', 2),
(33, 'Denae Barris', 'Cultural Captain', 'na', 14),
(34, 'Matilda Hodder', 'Cultural Captain', 'na', 20),
(35, 'Veta Mullenix', 'Cultural Captain', 'na', 3),
(36, 'Winnie Paula', 'Cultural Captain', 'na', 1),
(39, 'Brandy Birkhead', 'House Captain', 'Apollo', 1),
(40, 'Marisela Doom', 'House Captain', 'Apollo', 15),
(41, 'Ivelisse Patao', 'House Captain', 'Apollo', 1),
(42, 'Ethelyn Zickefoose', 'House Captain', 'Apollo', 0),
(43, 'Ethelyn Zickefoose', 'House Vice Captain', 'Apollo', 8),
(44, 'Roslyn Sobieski', 'House Vice Captain', 'Apollo', 9),
(45, 'Aimee Dalrymple', 'House Vice Captain', 'Apollo', 0),
(46, 'Aimee Dalrymple', 'House Captain', 'Mercury', 1),
(47, 'Damion Cooter', 'House Captain', 'Mercury', 7),
(48, ' Noriko Gain', 'House Captain', 'Mercury', 1),
(49, 'Ethelyn Zickefoose', 'House Vice Captain', 'Mercury', 2),
(50, 'Darell Beehler', 'House Vice Captain', 'Mercury', 7),
(51, 'Miyoko Deluca', 'House Vice Captain', 'Mercury', 0),
(52, 'Almeta Such', 'House Vice Captain', 'Mercury', 0),
(53, ' Lucile Dillingham', 'House Vice Captain', 'Poseidon', 7),
(54, 'Natashia Henrich', 'House Vice Captain', 'Poseidon', 1),
(55, 'Natashia Henrich', 'House Captain', 'Poseidon', 4),
(56, 'Lucile Dillingham', 'House Captain', 'Poseidon', 4),
(57, ' Noriko Gain', 'House Captain', 'Zeus', 4),
(58, 'Almeta Such', 'House Captain', 'Zeus', 0),
(59, 'Beatrice Scala', 'House Captain', 'Zeus', 0),
(60, 'Beatrice Scala', 'House Vice Captain', 'Zeus', 2),
(61, 'Veta Mullenix', 'House Vice Captain', 'Zeus', 2),
(62, 'Kenton Munyon', 'House Vice Captain', 'Zeus', 0),
(63, 'Khushi Vora', 'Head Girl', 'na', 8);

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `house` varchar(30) NOT NULL,
  `color` varchar(10) NOT NULL DEFAULT 'white'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house`, `color`) VALUES
(1, 'Apollo', '#d4a539'),
(3, 'Mercury', '#a62d2b'),
(4, 'Poseidon', '#465575'),
(5, 'Zeus', '#438d68');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `log` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `log`) VALUES
(1, 'admin', 'password', '0');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `postname` varchar(30) NOT NULL,
  `housepost` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postname`, `housepost`) VALUES
(1, 'Head Boy', 0),
(2, 'Head Girl', 0),
(3, 'Deputy Head Boy', 0),
(4, 'Deputy Head Girl', 0),
(5, 'Sports Captain', 0),
(6, 'Assistant Sports Captain', 0),
(7, 'Cultural Captain', 0),
(8, 'House Captain', 1),
(9, 'House Vice Captain', 1);

-- --------------------------------------------------------

--
-- Table structure for table `votekeys`
--

CREATE TABLE `votekeys` (
  `id` int(11) NOT NULL,
  `keyid` varchar(6) NOT NULL,
  `house` varchar(20) NOT NULL,
  `isused` varchar(256) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votekeys`
--

INSERT INTO `votekeys` (`id`, `keyid`, `house`, `isused`) VALUES
(1, 'EW6F6Y', 'Mercury', '1'),
(2, 'J7R81I', 'Zeus', '1'),
(3, 'UMYQNR', 'Mercury', ''),
(4, 'RLFTDX', 'Apollo', 'voteids'),
(5, 'ZI9DN2', 'Mercury', 'voteids'),
(6, 'R6UT31', 'Poseidon', '[\"4\",\"63\",\"18\",\"21\",\"26\",\"30\",\"34\",\"55\",\"53\"]'),
(7, 'GXTHCX', 'Apollo', '[\"3\",\"8\",\"9\",\"23\",\"27\",\"31\",\"34\",\"40\",\"44\"]'),
(8, 'FNT8V9', 'Apollo', '[\"1\",\"8\",\"9\",\"23\",\"27\",\"30\",\"34\",\"40\",\"43\"]'),
(9, 'GMMMSI', 'Poseidon', '[\"1\",\"7\",\"9\",\"21\",\"25\",\"30\",\"34\",\"55\",\"53\"]'),
(10, 'VKNN7D', 'Apollo', '[\"3\",\"7\",\"9\",\"21\",\"26\",\"30\",\"33\",\"39\",\"43\"]'),
(11, 'ESX894', 'Apollo', '[\"1\",\"7\",\"18\",\"23\",\"27\",\"31\",\"36\",\"40\",\"44\"]'),
(12, 'DQ21XV', 'Poseidon', '[\"1\",\"8\",\"18\",\"22\",\"27\",\"30\",\"34\",\"55\",\"53\"]'),
(13, 'PGY33U', 'Apollo', '[\"3\",\"8\",\"9\",\"21\",\"26\",\"30\",\"34\",\"40\",\"43\"]'),
(14, 'WDRDJX', 'Apollo', '[\"4\",\"8\",\"18\",\"22\",\"27\",\"31\",\"34\",\"40\",\"43\"]'),
(15, 'HX633R', 'Mercury', '[\"3\",\"8\",\"18\",\"22\",\"27\",\"30\",\"33\",\"47\",\"50\"]'),
(16, 'LVIE3C', 'Poseidon', '[\"4\",\"8\",\"9\",\"22\",\"27\",\"29\",\"33\",\"56\",\"53\"]'),
(17, 'VOMZCG', 'Zeus', '[\"3\",\"8\",\"18\",\"22\",\"26\",\"30\",\"33\",\"57\",\"60\"]'),
(18, 'TFQK4A', '', '0'),
(19, 'ZM8LZM', '', '0'),
(20, 'ALYS9T', '', '0'),
(21, 'ODX9W6', '', '0'),
(22, 'LSK2LJ', '', '0'),
(23, 'IGVW73', '', '0'),
(24, 'HHRDRE', '', '0'),
(25, 'IGERM9', '', '0'),
(26, 'LENXVW', '', '0'),
(27, 'RI4MMJ', '', '0'),
(28, 'QVXVIP', '', '0'),
(29, 'VXBPUH', '', '0'),
(30, 'PFM5IU', '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `house` (`house`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votekeys`
--
ALTER TABLE `votekeys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `votekeys`
--
ALTER TABLE `votekeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
