-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: May 05, 2022 at 11:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `majokli`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `lietotajvards` varchar(45) NOT NULL,
  `parole` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `atteli`
--

CREATE TABLE `atteli` (
  `atteli_id` int(11) NOT NULL,
  `prieksskatijuma_attels` varchar(45) NOT NULL,
  `attels_2` varchar(45) DEFAULT NULL,
  `attels_3` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `atteli`
--

INSERT INTO `atteli` (`atteli_id`, `prieksskatijuma_attels`, `attels_2`, `attels_3`) VALUES
(1, 'attels', 'attels', 'attels');

-- --------------------------------------------------------

--
-- Table structure for table `lietotajs`
--

CREATE TABLE `lietotajs` (
  `lietotajs_id` int(11) NOT NULL,
  `vards` varchar(45) NOT NULL,
  `uzvards` varchar(45) NOT NULL,
  `epasts` varchar(255) NOT NULL,
  `parole` varchar(255) NOT NULL,
  `talrunis` int(8) NOT NULL,
  `dzim_dat` date NOT NULL,
  `valsts` varchar(45) NOT NULL,
  `pilseta` varchar(45) NOT NULL,
  `iela` varchar(45) NOT NULL,
  `ielas_nr` varchar(45) NOT NULL,
  `dzivokla_nr` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sludinajums`
--

CREATE TABLE `sludinajums` (
  `sludinajums_id` int(11) NOT NULL,
  `lietotajs_id` int(11) NOT NULL,
  `apraksts` varchar(255) NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `majdzivnieki` varchar(45) NOT NULL,
  `atteli_id` int(11) NOT NULL,
  `valsts` varchar(45) NOT NULL,
  `pilseta` varchar(45) NOT NULL,
  `iela` varchar(45) NOT NULL,
  `ielas_nr` varchar(45) NOT NULL,
  `dzivokla_nr` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `atteli`
--
ALTER TABLE `atteli`
  ADD PRIMARY KEY (`atteli_id`);

--
-- Indexes for table `lietotajs`
--
ALTER TABLE `lietotajs`
  ADD PRIMARY KEY (`lietotajs_id`);

--
-- Indexes for table `sludinajums`
--
ALTER TABLE `sludinajums`
  ADD PRIMARY KEY (`sludinajums_id`),
  ADD KEY `fk_sludinajums_lietotajs1_idx` (`lietotajs_id`),
  ADD KEY `fk_sludinajums_atteli1_idx` (`atteli_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atteli`
--
ALTER TABLE `atteli`
  MODIFY `atteli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lietotajs`
--
ALTER TABLE `lietotajs`
  MODIFY `lietotajs_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sludinajums`
--
ALTER TABLE `sludinajums`
  MODIFY `sludinajums_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sludinajums`
--
ALTER TABLE `sludinajums`
  ADD CONSTRAINT `fk_sludinajums_atteli1` FOREIGN KEY (`atteli_id`) REFERENCES `atteli` (`atteli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sludinajums_lietotajs1` FOREIGN KEY (`lietotajs_id`) REFERENCES `lietotajs` (`lietotajs_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
