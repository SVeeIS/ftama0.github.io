-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 06:03 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `no_urut` int(11) NOT NULL,
  `nim_calon_ketua` varchar(15) NOT NULL,
  `nim_calon_wakil` varchar(15) NOT NULL,
  `foto_pasangan_calon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`no_urut`, `nim_calon_ketua`, `nim_calon_wakil`, `foto_pasangan_calon`) VALUES
(1, '1810817110017', '1810817210012', 'paslon1.jpg'),
(2, '1810817710001', '1810817310003', 'paslon2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`no_urut`),
  ADD KEY `nim_calon_ketua` (`nim_calon_ketua`),
  ADD KEY `nim_calon_wakil` (`nim_calon_wakil`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calon`
--
ALTER TABLE `calon`
  ADD CONSTRAINT `calon_ibfk_1` FOREIGN KEY (`nim_calon_ketua`) REFERENCES `biodata_calon` (`nim_calon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calon_ibfk_2` FOREIGN KEY (`nim_calon_wakil`) REFERENCES `biodata_calon` (`nim_calon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
