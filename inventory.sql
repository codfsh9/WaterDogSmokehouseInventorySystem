-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 11:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ing_id` int(11) NOT NULL,
  `ing_name` varchar(50) NOT NULL,
  `ing_desc` varchar(100) NOT NULL,
  `ing_q` int(25) NOT NULL,
  `ing_q_max` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores the Ingredients for restaurant dishes';

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ing_id`, `ing_name`, `ing_desc`, `ing_q`, `ing_q_max`) VALUES
(1, 'Plain Bagel', 'N/A', 50, 50),
(2, '\r\nSesame Bagel', 'N/A', 50, 50),
(3, 'Poppy Bagel', 'Bagel w/ poppy seeds', 50, 50),
(4, 'Salt Bagel', 'N/A', 40, 50),
(5, 'Honey Oat Bagel', 'N/A', 50, 50),
(6, 'Eggs', 'N/A', 216, 300),
(7, 'Bacon', 'N/A', 100, 300),
(8, 'Cheese', 'Cheddar', 100, 150),
(9, 'Lettuce', 'Romaine', 60, 100),
(10, 'Tomatoes', 'Plum type', 67, 100),
(11, 'Raw Onions', 'N/A', 50, 50),
(12, 'Beef', 'Angus', 100, 150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Stores the Username and Password';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD UNIQUE KEY `ing_id` (`ing_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
