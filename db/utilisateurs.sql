-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2021 at 09:03 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

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
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `genre` varchar(10) NOT NULL,
  `proffession` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `password`, `ip`, `date_inscription`, `genre`, `proffession`, `nom`, `prenom`) VALUES
(1, 'aida', 'salemaida@live.fr', '$2y$12$r8Nv3R7b4kCbaQBgk/1NJeR23KE9LhrnZyiX6myiLAB2polfE5u7i', '127.0.0.1', '2021-05-24 01:54:35', '', '', '', ''),
(2, 'salima', 'salimasalem@live.fr', '$2y$12$1ymA9Hu9rz8A.idBKQso1.4Es2qGmHVJsNqHdTqsJu89O.9MsnjH.', '127.0.0.1', '2021-05-24 17:13:48', '', '', '', ''),
(3, 'guillaume', 'guillaume@hotmail.com', '$2y$12$8LtXFcxOp8bUuGp/Ji21EedRVAwnDD.jX7McQasfXJZruNWv9xyRe', '127.0.0.1', '2021-05-24 17:22:44', '', '', '', ''),
(4, 'aida', 'aidasalem@live.fr', '$2y$12$ADnYGu1bPDsx47WamLO50.8LhnwODPHaxyZtlSo1CGF0Pi0eG0AQW', '127.0.0.1', '2021-05-24 18:05:28', '', '', '', ''),
(5, 'aida', 'aida@live.fr', '$2y$12$zjTmpQLEEia9scoezdl1JuPGBk7YoKNhocJFAqDQvvpGHMFv..Zya', '127.0.0.1', '2021-05-24 18:19:02', '', '', '', ''),
(6, 'mathis', 'mathis@live.fr', '$2y$12$sZwMf38hs7sbUxMJRXwBX.SC1gR0fyecfDOZ19Uqh4MdTm.TcW8ve', '127.0.0.1', '2021-05-24 18:23:33', '', '', '', ''),
(7, 'aze', 'aze@aze.aze', '$2y$12$L0fRAWEpXBQzduMyiDQtbOyiWy..V2XH1MCEXPZYsXf4HP0BMIHP2', '127.0.0.1', '2021-05-25 15:33:00', 'aze', 'aze', 'aze', 'aze'),
(8, 'A', 'aaa@live.fr', '$2y$12$2C85kAXKICzi3MAX/AWAYOs2pDoXq0BYbqC.2IckZqgwEiNTfeTf.', '127.0.0.1', '2021-05-25 15:44:33', 'A', 'A', 'AIDA', 'SALEM'),
(9, 'azi', 'salemaidaaida@live.fr', '$2y$12$d2nac.UTVTxVU47W7Ksz7edBKhh8sXzGspkjimTf0YbwAWL5Q3lYm', '127.0.0.1', '2021-05-25 16:11:03', 'femme', 'aucune', 'aida', 'salem'),
(10, 'b', 'b@live.fr', '$2y$12$YK/G8jU1gZY3L4jigMQDj.GMakSWm/woE/5PvQ3kCE6M26AUgWDEm', '127.0.0.1', '2021-05-25 16:12:13', 'b', 'b', 'b', 'b'),
(11, 'math', 'mathieu@live.fr', '$2y$12$koeHAqWgPjAKNJQIV/I6xOkO293rkC55OMrMAjiCIYVDzab9jln.u', '127.0.0.1', '2021-05-25 16:56:46', 'homme', 'autres', 'mathieu', 'mathieu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
