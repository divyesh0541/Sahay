-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 08:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahay`
--

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `user_id` int(11) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`user_id`, `skills`) VALUES
(13, 'paint,coding'),
(14, 'coding,gyming'),
(16, 'garage,sketching'),
(17, 'hair styling,coding,sketching');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `new`) VALUES
(1, 'John', 'Doe', 'john@example.com', 1),
(2, 'KARTIK RAMCHANDANI ', 'admin@gecg28.ac.in', 'pa$$word', 1),
(3, 'KARTIK RAMCHANDANI ', 'ce_hod@gecg28.ac.in', 'pa$$word', 1),
(4, 'DIvyesh', 'Dv@gmail.com', '1234', 1),
(5, 'DIvyesh', 'Div@gmail.com', '1234', 1),
(7, 'DIvyesh', 'Div123@gmail.com', '1234', 1),
(8, 'kartik', 'mppatel@gecg28.ac.in', 'pa$$word', 1),
(10, 'DIvyesh', 'dbms@gmail.com', '1234', 1),
(11, 'Divyesh Rathod', 'divyesh23@gmail.com', 'du', 1),
(13, 'bhargav', 'bhago@gmail.com', '12345678', 1),
(14, 'Harshil', 'harshil@gmail.com', '12345678', 1),
(15, 'mayur', 'Mayur@gmail.com', '123321123', 1),
(16, 'Mayur', 'MayurKikani@gmail.com', '123321123', 0),
(17, 'manthan', 'manthan@gmail.com', 'manthan123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `work_for` varchar(100) NOT NULL,
  `charge` int(10) NOT NULL,
  `brief` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`work_id`, `user_id`, `work_for`, `charge`, `brief`) VALUES
(1, 8, 'painter', 1000, 'zyada kaam nhi hai bhai'),
(3, 8, 'artist', 200, 'sketch'),
(4, 8, 'coder', 2000, 'website'),
(8, 8, 'coding', 2000, 'bug fixing'),
(9, 8, 'garage', 10000, 'fixing cars'),
(10, 8, 'cleaning', 1234, 'Cleaning the house');

-- --------------------------------------------------------

--
-- Table structure for table `work_enquirey`
--

CREATE TABLE `work_enquirey` (
  `id` int(11) NOT NULL,
  `work_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `result` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_enquirey`
--

INSERT INTO `work_enquirey` (`id`, `work_id`, `user_id`, `result`) VALUES
(1, 1, 17, 'accept'),
(2, 3, 17, 'accept');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `work_enquirey`
--
ALTER TABLE `work_enquirey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `work_enquirey`
--
ALTER TABLE `work_enquirey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
