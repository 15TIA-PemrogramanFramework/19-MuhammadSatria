-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2017 at 02:15 PM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_jual` int(255) NOT NULL,
  `stok` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_jual`, `stok`) VALUES
(22, 'Komputer', 500000, 4),
(23, 'Hardisk External 1 Tera', 1200000, 4),
(24, 'Flashdisk Toshiba', 90000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat_karyawan` varchar(255) CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `no_telp` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_lengkap`, `alamat_karyawan`, `jenis_kelamin`, `email`, `no_telp`) VALUES
(6, 'Satria', 'jl.berdikari', 'Laki-Laki', 'satria@gmail.com', '08764323456'),
(7, 'Mail', 'jl.sekolah', 'Laki-Laki', 'mail@gmail.com', '081276678090');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` int(255) NOT NULL,
  `jenis_kerusakan` varchar(255) NOT NULL,
  `harga_perbaikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `jenis_kerusakan`, `harga_perbaikan`) VALUES
(6, 'Instal Ulang PC', '55.000'),
(7, 'Instal Ulang Laptop', '50.000'),
(8, 'Service Printer', '100.000'),
(9, 'Service PC', '80.000'),
(10, 'Service Laptop', '75.000'),
(11, 'Tambah Software', '50.000');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_jual` int(255) NOT NULL,
  `tanggal` date NOT NULL,
  `id_karyawan` int(255) NOT NULL,
  `kode_barang` int(255) NOT NULL,
  `jumlah_barang` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kode_jual`, `tanggal`, `id_karyawan`, `kode_barang`, `jumlah_barang`, `total`) VALUES
(42, '2017-11-10', 6, 22, '2', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `kode_service` int(255) NOT NULL,
  `tanggal_service` date NOT NULL,
  `id_karyawan` int(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `merk_barang` varchar(255) NOT NULL,
  `id_kerusakan` int(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`kode_service`, `tanggal_service`, `id_karyawan`, `jenis_barang`, `merk_barang`, `id_kerusakan`, `nama_pemilik`, `alamat`, `no_telp`) VALUES
(4, '2017-11-10', 6, 'Laptop', 'ASUS', 7, 'Jarjit', 'Jl.sudirman', '082321232123'),
(6, '2017-11-12', 6, 'Printer', 'Canon', 8, 'Angga', 'jl.berdikari', '089762534212'),
(7, '2017-11-03', 6, 'PC', 'ASUS', 11, 'Ijat', 'jl.umbansari', '082637483723');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` int(255) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `no_telp`) VALUES
(13, 'PT.Acer Indonesia', 'Jl.sudirman', '081234345656'),
(14, 'PT.Asus Indonesia', 'Jl. Nangka', '081234321234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`),
  ADD KEY `id_kerusakan` (`id_kerusakan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_jual`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`kode_service`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_kerusakan` (`id_kerusakan`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kode_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `id_kerusakan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `kode_jual` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `kode_service` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kode_supplier` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

--
-- Constraints for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD CONSTRAINT `perbaikan_ibfk_1` FOREIGN KEY (`id_kerusakan`) REFERENCES `kerusakan` (`id_kerusakan`),
  ADD CONSTRAINT `perbaikan_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
