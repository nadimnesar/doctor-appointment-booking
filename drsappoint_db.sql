-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 09:11 PM
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
-- Database: `drsappoint_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dr_list`
--

CREATE TABLE `dr_list` (
  `id` int(11) NOT NULL,
  `name` varchar(1001) NOT NULL,
  `img_id` varchar(1001) NOT NULL,
  `specialty` varchar(1001) NOT NULL,
  `division` varchar(1001) NOT NULL,
  `district` varchar(1001) NOT NULL,
  `day` varchar(1001) NOT NULL,
  `money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dr_list`
--

INSERT INTO `dr_list` (`id`, `name`, `img_id`, `specialty`, `division`, `district`, `day`, `money`) VALUES
(1, 'Sofia Brient', '1.jpg', 'Child Specialist', 'Dhaka', 'Dhaka', 'Friday', 500),
(2, 'Karen Ray', '2.jpg', 'Skin Specialist', 'Chittagong', 'Comilla', 'Sunday', 800),
(3, 'Bill Gray', '3.jpg', 'Radiotherapist', 'Dhaka', 'Gazipur', 'Friday', 500),
(4, 'Misty Owens', '4.jpg', 'Neuro Surgeon', 'Dhaka', 'Dhaka', 'Monday', 1500),
(5, 'Sam Barton', '5.jpg', 'Orthopedic Surgery', 'Sylhet', 'Habiganj', 'Friday', 1000),
(7, 'Holly R Drew', '6473a5ce59880_female20171026250424011.jpg', 'Cardiac Surgery', 'Chittagong', 'Coxs Bazar', 'Friday', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user_appoint`
--

CREATE TABLE `user_appoint` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_appoint`
--

INSERT INTO `user_appoint` (`id`, `user_id`, `dr_id`) VALUES
(36, 2, 2),
(37, 2, 5),
(38, 2, 4),
(39, 2, 2),
(40, 2, 3),
(41, 2, 1),
(42, 2, 3),
(43, 2, 2),
(44, 2, 1),
(45, 2, 4),
(46, 2, 3),
(47, 2, 3),
(48, 2, 3),
(49, 2, 4),
(50, 4, 3),
(51, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(11) NOT NULL,
  `name` varchar(1001) NOT NULL,
  `email` varchar(1001) NOT NULL,
  `password` varchar(1001) NOT NULL,
  `user_type` varchar(1001) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'admin', 'admin@drsappoint.com', 'c3ca4800424e539f861a51a86b8b13ed', 'admin'),
(2, 'Nesar Ahmed', 'nadimahmednesar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(3, 'Nesar Ahmed', 'nadimnesar.cse@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'Farhin Ahmed', 'farhin15-13615@diu.edu.bd', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dr_list`
--
ALTER TABLE `dr_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_appoint`
--
ALTER TABLE `user_appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dr_list`
--
ALTER TABLE `dr_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_appoint`
--
ALTER TABLE `user_appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
