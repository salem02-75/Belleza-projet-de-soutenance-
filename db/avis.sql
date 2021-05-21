-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2021 at 09:00 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contenue` text NOT NULL,
  `note` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `name`, `contenue`, `note`, `date_creation`) VALUES
(1, 'Sélo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta modi, dolores magni aut ipsum!', '<i class=\"fas fa-star text-danger\"></i>', '2021-05-21 10:47:48'),
(2, 'Guillaume', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis soluta modi, dolores magni aut ipsum!', '<i class=\"fas fa-star text-danger\"></i>\r\n<i class=\"fas fa-star text-danger\"></i>\r\n<i class=\"fas fa-star text-danger\"></i>\r\n<i class=\"fas fa-star text-danger\"></i>', '2021-05-21 10:52:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
