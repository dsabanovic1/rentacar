-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 10:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `Ime` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Nickname` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`Ime`, `Email`, `Nickname`, `Password`) VALUES
('a', 'a', 'a', 'a'),
('asdasd', 'gadfg', 'sadfasdf', 'sdfasdf'),
('Dzenan', 'DASD', 'saban', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `Ime` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Prezime` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Datum` date NOT NULL,
  `Vozilo` varchar(30) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`Ime`, `Prezime`, `Datum`, `Vozilo`) VALUES
('a', 'fsddf', '2017-01-23', 'Golf'),
('asdasd', 'blabla', '2017-01-04', 'Yugo'),
('Dzenan', 'Sabanovic', '2017-01-04', 'Seat');

-- --------------------------------------------------------

--
-- Table structure for table `vozilo`
--

CREATE TABLE `vozilo` (
  `Marka` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Tip` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `Godiste` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `vozilo`
--

INSERT INTO `vozilo` (`Marka`, `Tip`, `Godiste`) VALUES
('Golf', '5', 2005),
('Seat', 'Ibiza', 1922),
('Yugo', '45', 1980);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`Ime`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`Ime`),
  ADD KEY `Ime` (`Ime`),
  ADD KEY `Vozilo` (`Vozilo`);

--
-- Indexes for table `vozilo`
--
ALTER TABLE `vozilo`
  ADD PRIMARY KEY (`Marka`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD CONSTRAINT `rezervacija_ibfk_1` FOREIGN KEY (`Ime`) REFERENCES `korisnik` (`Ime`),
  ADD CONSTRAINT `rezervacija_ibfk_2` FOREIGN KEY (`Vozilo`) REFERENCES `vozilo` (`Marka`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
