-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 03:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `arun`
--

CREATE TABLE `arun` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arun`
--

INSERT INTO `arun` (`contact_id`, `contact_name`, `contact_number`, `contact_email`) VALUES
(4, 'Vinoth T', 2147483647, 'vinoththangavel45@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `secret_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user_email`, `password`, `secret_key`) VALUES
(117, 'vinoththangavel45@gmail.com', 'vinorohit', '1999'),
(122, 'vinorohit@gmail.com', 'vinorohit', '7654'),
(123, 'arun@gmail.com', 'vinorohit', '76524');

-- --------------------------------------------------------

--
-- Table structure for table `vinorohit`
--

CREATE TABLE `vinorohit` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vinoththangavel45`
--

CREATE TABLE `vinoththangavel45` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_number` int(11) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vinoththangavel45`
--

INSERT INTO `vinoththangavel45` (`contact_id`, `contact_name`, `contact_number`, `contact_email`) VALUES
(1, 'vinoth', 738, 'vinoth@gmail.com'),
(4, 'Vinoth T', 2147483647, 'vinoththangavel45@gmail.com'),
(5, '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arun`
--
ALTER TABLE `arun`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vinorohit`
--
ALTER TABLE `vinorohit`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `vinoththangavel45`
--
ALTER TABLE `vinoththangavel45`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arun`
--
ALTER TABLE `arun`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `vinorohit`
--
ALTER TABLE `vinorohit`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vinoththangavel45`
--
ALTER TABLE `vinoththangavel45`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
