-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 12:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asesi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `no` int(5) NOT NULL,
  `nama` text NOT NULL,
  `noid` text NOT NULL,
  `nohp` text NOT NULL,
  `tempat` text NOT NULL,
  `tanggal` date NOT NULL,
  `dewasa` int(5) NOT NULL,
  `anak` int(5) NOT NULL,
  `harga` int(15) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`no`, `nama`, `noid`, `nohp`, `tempat`, `tanggal`, `dewasa`, `anak`, `harga`, `total`) VALUES
(1, 'Fransiscus', '3202102010233333', '089523213456', 'Pantai', '2022-09-30', 2, 1, 15000, 37500),
(2, 'Fransiscus Dharma Hadi Prayoga', '3210223239292112', '089523213456', 'Pantai', '2022-09-30', 1, 2, 15000, 30000),
(3, 'muhammad faruoq siswanto', '0998876578785856', '08128618961923', 'Pantai', '2022-09-09', 2, 2, 15000, 45000),
(4, 'Antoni', '1232421313132113', '089213214311', 'Museum', '2023-01-26', 2, 1, 10000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `tempat` text NOT NULL,
  `harga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`tempat`, `harga`) VALUES
('museum', 10000),
('Pantai', 15000),
('Taman Nasional', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
