-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 01:30 PM
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
-- Table structure for table `coiffures`
--

CREATE TABLE `coiffures` (
  `id` int(11) NOT NULL,
  `nom_societe` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `localisation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coiffures`
--

INSERT INTO `coiffures` (`id`, `nom_societe`, `photo`, `description`, `localisation`) VALUES
(1, 'TEST', 'https://picsum.photos/330/360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices blandit felis eget auctor. Sed ac varius ex. Proin ultrices porta bibendum. Etiam dictum lorem pulvinar ante fringilla, ac elementum nisl elementum. Nulla vitae tempus sapien. Vestibulum nec ante erat. Curabitur vel odio quam. Cras maximus, quam non tristique tristique, velit neque semper velit, vitae vulputate metus felis eget dui. Fusce et sollicitudin nisl.\r\n\r\nCras quis porta dolor, et condimentum lacus. Curabitur ullamcorper metus eget euismod finibus. Aenean gravida nulla at sapien tristique, a tristique tellus dictum. Nulla id bibendum est. Fusce eget quam sed libero vestibulum vulputate. Maecenas non nunc lacus. Suspendisse augue purus, maximus a lobortis sed, lacinia ut est. Donec sed leo metus. Pellentesque id porta enim, at aliquam augue. Quisque aliquam ultrices porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu viverra augue. Nulla facilisi. Phasellus et elit nec lectus suscipit placerat in vel ex. ', 'PARIS FRANCE'),
(2, 'TEST2', 'https://picsum.photos/330/359', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices blandit felis eget auctor. Sed ac varius ex. Proin ultrices porta bibendum. Etiam dictum lorem pulvinar ante fringilla, ac elementum nisl elementum. Nulla vitae tempus sapien. Vestibulum nec ante erat. Curabitur vel odio quam. Cras maximus, quam non tristique tristique, velit neque semper velit, vitae vulputate metus felis eget dui. Fusce et sollicitudin nisl.\r\n\r\nCras quis porta dolor, et condimentum lacus. Curabitur ullamcorper metus eget euismod finibus. Aenean gravida nulla at sapien tristique, a tristique tellus dictum. Nulla id bibendum est. Fusce eget quam sed libero vestibulum vulputate. Maecenas non nunc lacus. Suspendisse augue purus, maximus a lobortis sed, lacinia ut est. Donec sed leo metus. Pellentesque id porta enim, at aliquam augue. Quisque aliquam ultrices porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu viverra augue. Nulla facilisi. Phasellus et elit nec lectus suscipit placerat in vel ex. ', 'MARSEILLE FRANCE'),
(3, 'Yonathan’s', 'https://www.yonathans-coiffure-paris-12.fr/templates/images/images/salon-de-coiffure.jpg', 'oiffeur à Paris 12, Yonathan’s met à votre disposition son expertise en matière de coiffure. Dans un espace moderne et confortable, Jonathan et son équipe vous proposent de profiter des prestations d’un coiffeur-visagiste formé auprès de professionnels réputés. Ici, hommes, femmes et enfants bénéficieront d’une coupe de cheveux tendance, adaptée à la morphologie de leur visage. Un espace barber vous permet également l’entretien et la taille de la barbe ou moustache.\r\nLe salon de coiffure mixte Yonathan’s s’est installé au 22 rue Taine à Paris, quartier Daumesnil. Il est accessible par le métro (lignes 6 et 8) et par le bus (ligne 64), arrêt Daumesnil. Le salon vous reçoit du lundi au mercredi (de 10h à 19h), le jeudi (de 10h à 20h30), le vendredi et le dimanche (de 10h à 16h).', 'Paris 12 FRANCE');

-- --------------------------------------------------------

--
-- Table structure for table `esthetiques`
--

CREATE TABLE `esthetiques` (
  `id` int(11) NOT NULL,
  `nom_societe` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `localisation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esthetiques`
--

INSERT INTO `esthetiques` (`id`, `nom_societe`, `photo`, `description`, `localisation`) VALUES
(1, 'TEST', 'https://picsum.photos/330/360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices blandit felis eget auctor. Sed ac varius ex. Proin ultrices porta bibendum. Etiam dictum lorem pulvinar ante fringilla, ac elementum nisl elementum. Nulla vitae tempus sapien. Vestibulum nec ante erat. Curabitur vel odio quam. Cras maximus, quam non tristique tristique, velit neque semper velit, vitae vulputate metus felis eget dui. Fusce et sollicitudin nisl.\r\n\r\nCras quis porta dolor, et condimentum lacus. Curabitur ullamcorper metus eget euismod finibus. Aenean gravida nulla at sapien tristique, a tristique tellus dictum. Nulla id bibendum est. Fusce eget quam sed libero vestibulum vulputate. Maecenas non nunc lacus. Suspendisse augue purus, maximus a lobortis sed, lacinia ut est. Donec sed leo metus. Pellentesque id porta enim, at aliquam augue. Quisque aliquam ultrices porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu viverra augue. Nulla facilisi. Phasellus et elit nec lectus suscipit placerat in vel ex. ', 'PARIS FRANCE'),
(2, 'TEST2', 'https://picsum.photos/330/359', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices blandit felis eget auctor. Sed ac varius ex. Proin ultrices porta bibendum. Etiam dictum lorem pulvinar ante fringilla, ac elementum nisl elementum. Nulla vitae tempus sapien. Vestibulum nec ante erat. Curabitur vel odio quam. Cras maximus, quam non tristique tristique, velit neque semper velit, vitae vulputate metus felis eget dui. Fusce et sollicitudin nisl.\r\n\r\nCras quis porta dolor, et condimentum lacus. Curabitur ullamcorper metus eget euismod finibus. Aenean gravida nulla at sapien tristique, a tristique tellus dictum. Nulla id bibendum est. Fusce eget quam sed libero vestibulum vulputate. Maecenas non nunc lacus. Suspendisse augue purus, maximus a lobortis sed, lacinia ut est. Donec sed leo metus. Pellentesque id porta enim, at aliquam augue. Quisque aliquam ultrices porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu viverra augue. Nulla facilisi. Phasellus et elit nec lectus suscipit placerat in vel ex. ', 'MARSEILLE FRANCE'),
(3, 'stella Beaute Indienne', 'https://stellabeauteindienne.com/img/Stella-Centre-de-Beaute-Indien-logo.png', 'Une méthode épilatoire ancestrale\r\n\r\nRetire rapidement et efficacement les poils du visage, l’épilation au fil vous permettra de dessiner parfaitement vos sourcils. Pour une forme naturelle et une repousse du poils plus lente.', '75010 Paris, France');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `nom_societe` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `description` text NOT NULL,
  `localisation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `nom_societe`, `photo`, `description`, `localisation`) VALUES
(1, 'TEST', 'https://picsum.photos/330/360', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices blandit felis eget auctor. Sed ac varius ex. Proin ultrices porta bibendum. Etiam dictum lorem pulvinar ante fringilla, ac elementum nisl elementum. Nulla vitae tempus sapien. Vestibulum nec ante erat. Curabitur vel odio quam. Cras maximus, quam non tristique tristique, velit neque semper velit, vitae vulputate metus felis eget dui. Fusce et sollicitudin nisl.\r\n\r\nCras quis porta dolor, et condimentum lacus. Curabitur ullamcorper metus eget euismod finibus. Aenean gravida nulla at sapien tristique, a tristique tellus dictum. Nulla id bibendum est. Fusce eget quam sed libero vestibulum vulputate. Maecenas non nunc lacus. Suspendisse augue purus, maximus a lobortis sed, lacinia ut est. Donec sed leo metus. Pellentesque id porta enim, at aliquam augue. Quisque aliquam ultrices porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu viverra augue. Nulla facilisi. Phasellus et elit nec lectus suscipit placerat in vel ex. ', 'PARIS FRANCE'),
(2, 'TEST2', 'https://picsum.photos/330/359', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices blandit felis eget auctor. Sed ac varius ex. Proin ultrices porta bibendum. Etiam dictum lorem pulvinar ante fringilla, ac elementum nisl elementum. Nulla vitae tempus sapien. Vestibulum nec ante erat. Curabitur vel odio quam. Cras maximus, quam non tristique tristique, velit neque semper velit, vitae vulputate metus felis eget dui. Fusce et sollicitudin nisl.\r\n\r\nCras quis porta dolor, et condimentum lacus. Curabitur ullamcorper metus eget euismod finibus. Aenean gravida nulla at sapien tristique, a tristique tellus dictum. Nulla id bibendum est. Fusce eget quam sed libero vestibulum vulputate. Maecenas non nunc lacus. Suspendisse augue purus, maximus a lobortis sed, lacinia ut est. Donec sed leo metus. Pellentesque id porta enim, at aliquam augue. Quisque aliquam ultrices porttitor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed eu viverra augue. Nulla facilisi. Phasellus et elit nec lectus suscipit placerat in vel ex. ', 'MARSEILLE FRANCE'),
(3, 'Yin Xin Relaxation', 'https://i0.wp.com/yinxinrelaxation.fr/wp-content/uploads/2018/04/yin_xin_07505600_193049958.jpg', '\r\nYin Xin Relaxation\r\n\r\nDécouvrez votre nouveau salon de massage mixte Yin Xin qui vous accueile tous les jours de 11h à 21H00 avec ou sans rendez-vous. Notre institut de massage est situé au 4 rue du Dr Goujon dans le 12e arr. de Paris. Accessible via le métro ligne 6 ou 8 à la station Daumesnil.\r\n\r\nMassage chinois à partir de 30€ seulement\r\n\r\nDans une ambiance zen, vous serez conseillé sur les différents types de massage traditionnels qui correspondent le mieux à vos attentes. Vous pourrez déguster gratuitement un café ou un thé chinois qui vous apportera un premier moment de détente.\r\nEXPÉRIENCE GARANTIE\r\n\r\nL’une de nos masseuses vous accompagnera ensuite vers une cabine pour vous détendre avec le massage de votre choix. Oubliez pendant un instant votre quotidien en évacuant tout votre stress avec des séances de massage allant de 30 minutes à 1 heure.\r\n\r\nPour prolonger l’expérience, une douche avec des huiles essentielles qui ont été sélectionnées par nos propres soins vous seront mises à disposition en fin de séance.\r\n\r\nMASSEUSES DIPLÔMÉES & EXPERIMENTÉES\r\n\r\nNos masseuses sont toutes expérimentées et diplômées de l’institut Hypotenuse, école française spécialisée dans le massage ainsi que de l’école Azenday à Paris afin de faire vivre un moment exceptionnel à chaque séance.\r\n', '75012 PARIS, france');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coiffures`
--
ALTER TABLE `coiffures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esthetiques`
--
ALTER TABLE `esthetiques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coiffures`
--
ALTER TABLE `coiffures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `esthetiques`
--
ALTER TABLE `esthetiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
