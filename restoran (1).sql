-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 12:58 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_makanan`
--

CREATE TABLE IF NOT EXISTS `db_makanan` (
  `id_makanan` varchar(50) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `harga_makanan` int(50) NOT NULL,
  `stock_makanan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_makanan`
--

INSERT INTO `db_makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `stock_makanan`) VALUES
('1', 'Tahu Sumedang', 1000, 100),
('2', 'Nasi Goreng', 12000, 100),
('3', 'Ayam Goreng', 12000, 100),
('4', 'Ayam Bahdad', 5500, 50),
('5', 'Udang Cocol', 1500, 50),
('6', 'Burger King', 4500, 50),
('7', 'Pie', 1500, 50),
('8', 'Jamur Ea', 2500, 50),
('9', 'Sup Cumi', 6500, 50);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `nama`, `alamat`, `notelp`, `level`) VALUES
('admin@gmail.com', '$2y$10$msFQlOvGYNqD7eoixo', 'admin', 'bandung', '085321218205', 1),
('ben@gmail.com', '$2y$10$.Q2OH.qNcUrn/bo527', 'benkecil', 'sumedang', '085321218233', 0),
('ergon@gmail.com', '$2y$10$d8KBsSzjIgin1Dd8gE', 'ergon', 'bandung', '04234234', 0),
('ergonrizky@gmail.com', '$2y$10$0XejoNBTDCcU5coiw3', 'adi', 'bandung', '081256748', 0),
('jgfhghgf', '$2y$10$0JWfp9207dvhOdcJY0', 'dasd', 'dasd', '321321', 0),
('lina@gmail.com', 'fcea920f7412b5da7be0cf42b', 'lina', 'bandung ', '085312312312', 0),
('qwer', ' ,¹b¬Y[–K-#Kp', 'qwer', 'qwer', '345354', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `email` varchar(50) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`email`, `id_makanan`, `nama_makanan`, `jumlah_pemesanan`) VALUES
('lina@gmail.com', 5, 'Ayam Bahdad', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_makanan`
--
ALTER TABLE `db_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
