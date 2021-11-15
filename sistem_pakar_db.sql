-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 26, 2021 at 04:21 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `keahlian_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `keahlian` varchar(225) NOT NULL,
  `modified_on` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`keahlian_id`, `user_id`, `keahlian`, `modified_on`) VALUES
(37, 1, 'Keahlian 1', '2021-10-17 22:05:04'),
(38, 1, 'asdas', '2021-10-17 22:35:06'),
(39, 1, 'asdasd', '2021-10-17 22:43:37'),
(40, 1, 'asdasd', '2021-10-17 22:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `minat_bakat`
--

CREATE TABLE `minat_bakat` (
  `minat_bakat_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `minat_bakat` varchar(225) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `modified_on` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minat_bakat`
--

INSERT INTO `minat_bakat` (`minat_bakat_id`, `user_id`, `minat_bakat`, `deskripsi`, `modified_on`) VALUES
(62, 1, 'asd', 'asdasd', '2021-10-17 22:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `rule_id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `minat_bakat_id` int(25) NOT NULL,
  `keahlian_id` int(25) NOT NULL,
  `kode_rule` varchar(25) NOT NULL,
  `nilai` varchar(25) NOT NULL,
  `modified_on` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`rule_id`, `user_id`, `minat_bakat_id`, `keahlian_id`, `kode_rule`, `nilai`, `modified_on`) VALUES
(154, 1, 62, 37, 'RL38803', '0.6', '2021-10-17 22:44:09'),
(155, 1, 62, 38, 'RL38803', '1', '2021-10-17 22:44:09'),
(156, 1, 62, 39, 'RL38803', '0.8', '2021-10-17 22:44:09'),
(157, 1, 62, 40, 'RL38803', '0.6', '2021-10-17 22:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL COMMENT '0 = tidak aktif, 1 = aktif',
  `level` varchar(25) NOT NULL COMMENT '1 = admin, 2 = siswa',
  `password` text NOT NULL,
  `created_on` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `status`, `level`, `password`, `created_on`) VALUES
(1, 'sistem_pakar', '1', '1', '791da83d972fb0ffbb3f319f00309418', '2021-07-20 17:38:5'),
(2, 'andri', '1', '2', '6bd3108684ccc9dfd40b126877f850b0', '2021-09-28 21:32:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`keahlian_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD PRIMARY KEY (`minat_bakat_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`rule_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `minat_bakat_id` (`minat_bakat_id`),
  ADD KEY `keahlian_id` (`keahlian_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `keahlian_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  MODIFY `minat_bakat_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `rule_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD CONSTRAINT `keahlian_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `minat_bakat`
--
ALTER TABLE `minat_bakat`
  ADD CONSTRAINT `minat_bakat_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`keahlian_id`) REFERENCES `keahlian` (`keahlian_id`),
  ADD CONSTRAINT `rule_ibfk_3` FOREIGN KEY (`minat_bakat_id`) REFERENCES `minat_bakat` (`minat_bakat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
