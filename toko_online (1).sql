-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 03:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `tanggal_lahir`, `gender`, `alamat`, `username`, `password`) VALUES
(1, 'farhan', '2005-06-13', 'L', 'Malang', 'farhan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'AGV Pista GPRR', 'AGV Pista GPRR Carbon Mono Glossy - Euro Fit - Made in Italy', 12400000, 'http://localhost/tokoonline1/gambar/GPRR.jpg\r\n'),
(8, 'SHOEI X14 MM 6 TC-1', 'Shoei X-Fourteen / X14 Marc Marquez 6 TC-1', 12400000, 'http://localhost/tokoonline1/gambar/X14.jpg\r\n'),
(9, 'ARAI RX7X NAKAGAMI', 'ARAI RX7X NAKAGAMI GP2 ORIGINAL', 9400000, 'http://localhost/tokoonline1/gambar/ARAI.jpg\r\n'),
(11, 'AGV Pista GPR Mugello ', 'AGV Pista GPR Mugello 2017 Rossi Limited Edition - Euro Fit', 16499000, 'http://localhost/tokoonline1/gambar/GPR_Mugello.jpg\r\n'),
(14, 'SFOEI X14 Bradley Smith', 'Shoei X14 Bradley Smith 3 TC1', 12400000, 'http://localhost/tokoonline1/gambar/X14BS.jpg'),
(15, 'SHOEI X14 Yanagawa ', 'Shoei X14 Yanagawa TC4 - Green/Black', 12400000, 'http://localhost/tokoonline1/gambar/X14YN.jpg'),
(16, 'KYT NFR Hexagon', 'KYT NFR Hexagon Red Blue', 2050000, '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemebelian_barang`
--

CREATE TABLE `detail_pemebelian_barang` (
  `id_detail_pembelian_barang` int(11) NOT NULL,
  `id_pembelian_barang` int(25) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_barang`
--

CREATE TABLE `pembelian_barang` (
  `id_pembelian_barang` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_pemebelian_barang`
--
ALTER TABLE `detail_pemebelian_barang`
  ADD PRIMARY KEY (`id_detail_pembelian_barang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pembelian_barang` (`id_pembelian_barang`);

--
-- Indexes for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  ADD PRIMARY KEY (`id_pembelian_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `detail_pemebelian_barang`
--
ALTER TABLE `detail_pemebelian_barang`
  MODIFY `id_detail_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembelian_barang`
--
ALTER TABLE `pembelian_barang`
  MODIFY `id_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemebelian_barang`
--
ALTER TABLE `detail_pemebelian_barang`
  ADD CONSTRAINT `detail_pemebelian_barang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pemebelian_barang_ibfk_2` FOREIGN KEY (`id_pembelian_barang`) REFERENCES `pembelian_barang` (`id_pembelian_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
