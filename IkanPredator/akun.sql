-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 02:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akun`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('Admin', 'admin123'),
('jaka', 'jaka123');

-- --------------------------------------------------------

--
-- Table structure for table `product_edit`
--

CREATE TABLE `product_edit` (
  `id_barang` varchar(50) NOT NULL,
  `warna_barang` varchar(50) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `ukuran` varchar(100) DEFAULT NULL,
  `diskon` varchar(4) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `kategori` enum('Pria','Wanita') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_edit`
--

INSERT INTO `product_edit` (`id_barang`, `warna_barang`, `harga`, `jumlah`, `ukuran`, `diskon`, `gambar`, `kategori`) VALUES
('Payara', 'Predator', '700.000', '10 ekor', '7 cm', '', 'payara.png', NULL),
('PBass', 'orinoco', '250.000', '100 ekor', '5 cm', '', 'orino.png', NULL),
('peacock bass', 'mono', '100000', '50 ekor', '10 cm', '', 'mono.png', NULL),
('Red Tail Catfish', 'Catfish', '30.000', '50 ekor', '8 cm', '', 'rtc.png', NULL),
('TSN', 'Catfish', '45.000', '50 ekor', '10 cm', '', 'tiger.png', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `product_edit`
--
ALTER TABLE `product_edit`
  ADD PRIMARY KEY (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
