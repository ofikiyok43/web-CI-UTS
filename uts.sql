-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_tabel`
--

CREATE TABLE `c_tabel` (
  `id_08` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_tabel`
--

INSERT INTO `c_tabel` (`id_08`, `jurusan`, `kelas`, `isi`) VALUES
(8, 'RPL', 'A', 'MATARAM'),
(9, 'RPL', 'B', 'LOMBOK'),
(10, 'RPL', 'C', 'LOTIM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_tabel`
--
ALTER TABLE `c_tabel`
  ADD PRIMARY KEY (`id_08`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_tabel`
--
ALTER TABLE `c_tabel`
  MODIFY `id_08` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
