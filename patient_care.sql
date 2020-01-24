-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 06:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip_patient_information`
--

CREATE TABLE `ip_patient_information` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_patient_information`
--

INSERT INTO `ip_patient_information` (`id`, `firstname`, `lastname`) VALUES
(1, 'Mary Jane', 'Cainto'),
(2, 'Ronel', 'Ocampo');

-- --------------------------------------------------------

--
-- Table structure for table `pc_order`
--

CREATE TABLE `pc_order` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc_order`
--

INSERT INTO `pc_order` (`id`, `patient_id`, `created_at`) VALUES
(17, 1, '2020-01-24 05:23:40'),
(18, 2, '2020-01-24 05:23:46'),
(19, 1, '2020-01-24 05:25:44'),
(20, 1, '2020-01-24 05:27:22'),
(21, 2, '2020-01-24 08:39:34'),
(22, 1, '2020-01-24 08:40:37'),
(23, 1, '2020-01-24 09:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `pc_order_list`
--

CREATE TABLE `pc_order_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pc_order_list`
--

INSERT INTO `pc_order_list` (`id`, `name`, `quantity`, `order_id`) VALUES
(6, 'test1', 1, 17),
(7, 'test2', 2, 17),
(8, 'test1', 1, 18),
(9, 'test2', 2, 18),
(10, 'tset1', 1, 19),
(11, 'test1', 123, 20),
(12, 'sfsdf', 33, 21),
(13, 'Hammer Head', 34, 22),
(14, 'werrw', 23, 22),
(15, 'CRM_STAFF', 100, 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip_patient_information`
--
ALTER TABLE `ip_patient_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pc_order`
--
ALTER TABLE `pc_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `pc_order_list`
--
ALTER TABLE `pc_order_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ip_patient_information`
--
ALTER TABLE `ip_patient_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pc_order`
--
ALTER TABLE `pc_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pc_order_list`
--
ALTER TABLE `pc_order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pc_order`
--
ALTER TABLE `pc_order`
  ADD CONSTRAINT `pc_order_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `ip_patient_information` (`id`);

--
-- Constraints for table `pc_order_list`
--
ALTER TABLE `pc_order_list`
  ADD CONSTRAINT `pc_order_list_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `pc_order` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
