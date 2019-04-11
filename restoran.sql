-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Mei 2018 pada 11.01
-- Versi Server: 5.6.26
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
-- Struktur dari tabel `db_makanan`
--

CREATE TABLE IF NOT EXISTS `db_makanan` (
  `id_makanan` varchar(50) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `harga_makanan` int(50) NOT NULL,
  `stock_makanan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_makanan`
--

INSERT INTO `db_makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `stock_makanan`) VALUES
('1', 'Tahu Sumedang', 1000, 100),
('2', 'Nasi Goreng', 12000, 100),
('3', 'Ayam Goreng', 12000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
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
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`email`, `password`, `nama`, `alamat`, `notelp`, `level`) VALUES
('admin@gmail.com', '$2y$10$msFQlOvGYNqD7eoixo', 'admin', 'bandung', '085321218205', 1),
('ben@gmail.com', '$2y$10$IF0Nqi9W1GSr6i0VPU', 'ben', 'bandung', '085321218233', 0),
('ergon@gmail.com', '$2y$10$d8KBsSzjIgin1Dd8gE', 'ergon', 'bandung', '04234234', 0),
('ergonrizky@gmail.com', '$2y$10$0XejoNBTDCcU5coiw3', 'adi', 'bandung', '081256748', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
  `id_pemesanan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
