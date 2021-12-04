-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 01:41 AM
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
(6, 'Cheese', 'N/A', 75, 300),
(7, 'Bacon', 'N/A', 100, 300),
(8, 'Cheese', 'Cheddar', 82, 150),
(9, 'Lettuce', 'Romaine', 60, 100),
(10, 'Tomatoes', 'Plum type', 67, 100),
(11, 'Raw Onions', 'N/A', 50, 50),
(12, 'Beef', 'Angus', 100, 150),
(13, 'Butter', 'N/A', 110, 200),
(14, 'Bay Leaves', 'N/A', 50, 100),
(15, 'Balsamic Vinegar', 'N/A', 10, 25),
(16, 'Pork', 'Raw', 134, 200),
(17, 'Salmon', 'Raw', 200, 300),
(18, 'Citric Acid', 'N/A', 20, 50),
(19, 'Lemon Juice', 'N/A', 31, 75),
(20, 'Black Pepper', 'N/A', 45, 90),
(21, 'Pastrami', 'N/A', 167, 200),
(22, 'Turkey', 'N/A', 74, 125),
(23, 'Pepper Jack Chz', 'N/A', 56, 150),
(24, 'Cucumber', 'N/A', 29, 100),
(25, 'Corn', 'N/A', 62, 100);

-- --------------------------------------------------------

--
-- Table structure for table `suppinfo`
--

CREATE TABLE `suppinfo` (
  `supp_id` int(12) NOT NULL,
  `supp_name` varchar(64) NOT NULL,
  `supp_num` varchar(35) NOT NULL,
  `supp_email` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Supplier Information';

--
-- Dumping data for table `suppinfo`
--

INSERT INTO `suppinfo` (`supp_id`, `supp_name`, `supp_num`, `supp_email`) VALUES
(1, 'VAFG', '(856) 663-6919', 'info@valueaddedfoodgroup.com'),
(2, 'Sysco', '(281) 584-1390', 'info@sysco.com'),
(3, 'U.S. Foods', '(847) 720-8000', 'info@usfoods.com'),
(4, 'Gordon Food Service', '(888) 437-3663', 'info@gfs.com'),
(5, 'Golden State Foods', '(949) 247-8000', 'info@goldenstatefoods.com'),
(6, 'Mains Paper & Food Service', '(888) 327-3350', 'N/A'),
(7, 'Buffalo Rock Co.', '(205) 940-9799', 'info@buffalorock'),
(8, 'PFG Customized', '(803) 366-6399', 'info@pfgcdc.com'),
(9, 'KeHE Distributors', '(812) 333-1511', 'info@kehe.com'),
(10, 'Shamrock Foods Co.', '(602) 233-6400', 'info@shamrockfoodservice.com');

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
-- Indexes for table `suppinfo`
--
ALTER TABLE `suppinfo`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `suppinfo`
--
ALTER TABLE `suppinfo`
  MODIFY `supp_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
