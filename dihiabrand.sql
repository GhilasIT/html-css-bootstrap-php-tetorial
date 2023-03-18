-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 10:03 PM
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
-- Database: `dihiabrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `commads`
--

CREATE TABLE `commads` (
  `Id` int(50) NOT NULL,
  `Pid` int(50) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commads`
--

INSERT INTO `commads` (`Id`, `Pid`, `Nom`, `Prenom`, `Mail`, `Phone`, `message`) VALUES
(1, 1, 'sffghdfs', 'fg@fgs', 'g@f', 'qgqfs', 'vw'),
(2, 7, 'Ighil', 'Ghilas', 'Ghilasigh@gmail.com', '0775510678', 'Bnjr je suis ghilas je veux 3 pieces if can call me soon please'),
(3, 8, 'Igh', 'Ghilas', 'Fg@fgs', '0775510675', 'I LOVE YOU BEBE Wlh hamlaghkem grv grv '),
(4, 8, 'Igh', 'Ghilas', 'Fg@fgs', '0775510675', 'I LOVE YOU BEBE Wlh hamlaghkem grv grv '),
(5, 8, 'Sffghdfs', 'G@f', 'G@f', 'Qgqfs', 'Fgs'),
(6, 8, 'Sffghdfs', 'G@f', 'G@f', 'Qgqfs', 'Fgs'),
(7, 1, 'Igh', 'Ghilas', 'Ghilasigh@gmail.com', '0775510675', 'Habibi I love You So mutch wlh grv yooak emoua7'),
(8, 1, 'Igh', 'Ghilas', 'Ghilasigh@gmail.com', '0775510675', 'Ighigh'),
(9, 1, 'Igh', 'Ghilas', 'Fg@fgs', '0775510675', 'This is my project'),
(10, 1, 'Igh', 'Ghilas', 'Ghilasigh@gmail.com', '0775510675', 'Jdvhjd');

-- --------------------------------------------------------

--
-- Table structure for table `prods`
--

CREATE TABLE `prods` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prods`
--

INSERT INTO `prods` (`Id`, `Name`, `Price`, `Images`) VALUES
(1, 'Roube Rouge', '200', 'images/prods/robe.jpg'),
(2, 'pajama', '250', 'images/prods/Pajama.jpg'),
(3, 'veste', '2500', 'images/prods/veste.jpg'),
(4, 'jeans', '1200', 'images/prods/jeans.jpg'),
(5, 'Robe Pink', '1300', 'images/prods/RobePink.jpg'),
(6, 'robe gris', '5000', 'images/prods/robegris.jpg'),
(7, 'robex', '2500', 'images/prods/robex.jpg'),
(8, 'girls dress', '2100', 'images/prods/girls.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commads`
--
ALTER TABLE `commads`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `prods`
--
ALTER TABLE `prods`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commads`
--
ALTER TABLE `commads`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prods`
--
ALTER TABLE `prods`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
