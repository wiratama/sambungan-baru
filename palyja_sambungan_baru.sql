-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2016 at 05:19 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_palyja`
--

-- --------------------------------------------------------

--
-- Table structure for table `palyja_sambungan_baru`
--

CREATE TABLE IF NOT EXISTS `palyja_sambungan_baru` (
`ID` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `rt_rw` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `area_kota` varchar(255) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `jumlah_penghuni` int(11) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `telepon_genggam` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fungsi_bangunan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `palyja_sambungan_baru`
--
ALTER TABLE `palyja_sambungan_baru`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `palyja_sambungan_baru`
--
ALTER TABLE `palyja_sambungan_baru`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
