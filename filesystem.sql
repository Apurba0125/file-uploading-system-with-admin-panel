-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 05:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_page`
--

CREATE TABLE `admin_page` (
  `id` varchar(100) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_page`
--

INSERT INTO `admin_page` (`id`, `Admin_name`, `Admin_password`) VALUES
('01APURBA', 'APURBA', '143');

-- --------------------------------------------------------

--
-- Table structure for table `data_table`
--

CREATE TABLE `data_table` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `rno` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `amo` int(10) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_table`
--

INSERT INTO `data_table` (`id`, `fname`, `lname`, `rno`, `regno`, `email`, `stream`, `semester`, `amo`, `file`) VALUES
(1, 'Apurba', 'Sarkar', '002-BCS-2020-017', '002-103-2020-017', 'apurbasarkar17072002@gmail.com', 'cse', '8', 28000, '1 (1).jpg'),
(2, 'Kanika', 'Debnath Roy', '789652', '78422', 'snehadebnath1998@gmail.com', 'eletrical', '7', 25000, '1 (1).jpg'),
(3, 'Goutam ', 'Mondal', '002-BCS-2020-062', '002-1030-2020-062', 'gou@gmail.com', 'cse', '7', 25000, 'gou (1).jpg'),
(4, 'Goutam Mondal', 'Mondal', '789652', '78422', 'goum@gmail.com', 'mechanical', '6', 25830, 'SIG.jpeg'),
(5, 'Apurba', 'Sarkar', '002-BCS-2020-017', '002-103-2020-017', 'apurbasarkar17072002@gmail.com', 'cse', '1', 280000, 'mypic.jpg'),
(6, 'Apurba', 'Sarkar', '002-BCS-2020-017', '002-103-2020-017', 'apurbasarkar17072002@gmail.com', 'mechanical', '8', 2580, 'WhatsApp Image 2023-07-10 at 11.18.46 PM.jpeg'),
(7, 'Apurba', 'Sarkar', '789652', '454121', 'apurbasarkar17072002@gmail.com', 'cse', '7', 2147483647, 'image.jpg'),
(8, 'ruphsha', 'pramanik', '002-BCS-2020-100', '002-103-2020-100', 'anushka@gmail.com', 'cse', '3', 28000, 'WhatsApp Image 2023-07-10 at 11.18.46 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `regfile`
--

CREATE TABLE `regfile` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` int(12) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regfile`
--

INSERT INTO `regfile` (`id`, `fname`, `uname`, `email`, `pno`, `pass`, `cpass`, `gender`) VALUES
(1, 'Apurba Sarkar', 'apurba01', 'apurbasarkar17072002@gmail.com', 2147483647, '12345', '12345', 'Male'),
(2, 'Kanika Debnath Roy', 'kan01', 'snehadebnath1998@gmail.com', 2147483647, '1254', '1254', 'Female'),
(3, 'Goutam Mondal', 'goutam01', 'gou@gmail.com', 2147483647, '123654', '123654', 'Male'),
(4, 'Goutam Mondal', 'goutam+01', 'goum@gmail.com', 2147483647, '1452', '1452', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_page`
--
ALTER TABLE `admin_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_table`
--
ALTER TABLE `data_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regfile`
--
ALTER TABLE `regfile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_table`
--
ALTER TABLE `data_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regfile`
--
ALTER TABLE `regfile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
