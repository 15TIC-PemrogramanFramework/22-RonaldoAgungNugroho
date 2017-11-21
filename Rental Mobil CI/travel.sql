-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 08:51 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `kendaraan_id` int(11) NOT NULL AUTO_INCREMENT,
  `kendaraan_platnomor` varchar(30) NOT NULL,
  `kendaraan_merk` varchar(100) NOT NULL,
  `kendaraan_tipe` varchar(47) NOT NULL,
  `kendaraan_foto` text NOT NULL,
  `harga` int(100) NOT NULL,
  `kendaraan_status` enum('bebas','jalan') NOT NULL,
  PRIMARY KEY (`kendaraan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`kendaraan_id`, `kendaraan_platnomor`, `kendaraan_merk`, `kendaraan_tipe`, `kendaraan_foto`, `harga`, `kendaraan_status`) VALUES
(1, 'B 1111 VGA', 'isuzu', 'NKR 55 CO', '', 0, 'jalan'),
(2, 'B 2222 VGA', 'Hino', 'Dutro Bus 130 MDBL', '', 0, 'jalan'),
(3, 'B 3333 VGA', 'hino', 'R 260', 'ASAS', 0, 'jalan'),
(4, 'B 4444 VGA', 'hino', 'RN 285', 'asa', 0, 'jalan'),
(8, 'B 5555 VGA', 'Mercedes Benz', 'MB 1626', 'DSDSDS', 0, 'jalan'),
(9, 'B 6666 VGA', 'Mercedes Benz', 'MB 1626', 'DSD', 0, 'jalan'),
(10, 'B 7777 VGA', 'K310IB-4x2', 'SCANIA', 'SDD', 0, 'jalan'),
(11, 'B 8888 VGA', 'Scania', 'K360IB-4x2', 'SDSD', 0, 'jalan');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pelanggan_nama` varchar(50) NOT NULL,
  `pelanggan_alamat` text NOT NULL,
  `pelanggan_telpon` varchar(12) NOT NULL,
  PRIMARY KEY (`pelanggan_id`),
  UNIQUE KEY `pelanggan_id` (`pelanggan_id`),
  UNIQUE KEY `pelanggan_id_2` (`pelanggan_id`),
  UNIQUE KEY `pelanggan_id_3` (`pelanggan_id`),
  UNIQUE KEY `pelanggan_id_4` (`pelanggan_id`),
  UNIQUE KEY `pelanggan_id_5` (`pelanggan_id`),
  KEY `pelanggan_id_6` (`pelanggan_id`),
  KEY `pelanggan_id_7` (`pelanggan_id`),
  KEY `pelanggan_id_8` (`pelanggan_id`),
  KEY `pelanggan_id_9` (`pelanggan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `username`, `password`, `pelanggan_nama`, `pelanggan_alamat`, `pelanggan_telpon`) VALUES
(1, '', '', 'NURIS AKBAR', 'BANDUNG', '082121473036'),
(2, '', '', 'andi', 'jakarta', '0812 1111'),
(3, '', '', 'tono', 'bekasi', '0812 2222'),
(4, '', '', 'citra', 'depok', '0812 3333'),
(5, '', '', 'dewi', 'bogor', '0812 4444'),
(6, '', '', 'marzuki', 'tangerang', '0812 5555'),
(7, 'agung', '', 'agung', 'agung', '1112313'),
(8, 'agung', 'agung', 'Agung', 'agung', '12311'),
(9, 'asd', 'asd', 'asd', 'asd', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE IF NOT EXISTS `sopir` (
  `sopir_id` int(11) NOT NULL AUTO_INCREMENT,
  `sopir_alamat` text NOT NULL,
  `sopir_nama` varchar(100) NOT NULL,
  `sopir_telpon` varchar(12) NOT NULL,
  `sopir_ktp` varchar(30) NOT NULL,
  `sopir_sim` varchar(30) NOT NULL,
  `sopir_status` enum('bebas','jalan') NOT NULL,
  `harga` int(100) NOT NULL,
  PRIMARY KEY (`sopir_id`),
  KEY `sopir_id` (`sopir_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`sopir_id`, `sopir_alamat`, `sopir_nama`, `sopir_telpon`, `sopir_ktp`, `sopir_sim`, `sopir_status`, `harga`) VALUES
(1, 'BEKASI', 'Andreas', '08182222', '1234 2222', '6789 2222', 'jalan', 0),
(2, 'JAKARTA', 'Alexander', '08181111', '1234 1111', '6789 1111', 'jalan', 0),
(3, 'DEPOK', 'Bimo', '08183333', '1234 3333', '6789 3333', 'jalan', 0),
(4, 'bogor', 'Bima', '08184444', '1234 4444', '6789 4444', 'jalan', 0),
(5, 'jakarta', 'Chandra', '08185555', '1234 5555', '6789 5555', 'jalan', 0),
(6, 'benasi', 'David', '08186666', '1234 6666', '6789 6666', 'jalan', 0),
(7, '', 'Dhanil', '08187777', '1234 7777', '6789 7777', 'jalan', 0),
(8, 'bogor', 'Edward', '08188888', '1234 8888', '6789 8888', 'bebas', 0),
(9, 'tangerang', 'Jacky', '08189999', '1234 9999', '6789 9999', 'jalan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE IF NOT EXISTS `tarif` (
  `tarif_id` int(11) NOT NULL AUTO_INCREMENT,
  `kendaraan_id` int(11) NOT NULL,
  `tarif_perhari` int(11) NOT NULL,
  `tarif_overtime` int(11) NOT NULL,
  PRIMARY KEY (`tarif_id`),
  KEY `kendaraan_id` (`kendaraan_id`),
  KEY `kendaraan_id_2` (`kendaraan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`tarif_id`, `kendaraan_id`, `tarif_perhari`, `tarif_overtime`) VALUES
(3, 1, 1000000, 1000000),
(4, 2, 2000000, 2000000),
(6, 4, 4000000, 4000000),
(7, 8, 5000000, 5000000),
(8, 9, 6000000, 6000000),
(9, 10, 7000000, 7000000),
(10, 11, 8000000, 8000000),
(11, 12, 9000000, 9000000),
(12, 3, 3000000, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) NOT NULL,
  `sopir_id` int(11) NOT NULL,
  `kendaraan_id` int(11) NOT NULL,
  `transaksi_tglmulai` date NOT NULL,
  `transaksi_tglselesai` date DEFAULT NULL,
  `transaksi_hari` varchar(10) NOT NULL,
  `transaksi_tglovertime` date NOT NULL,
  `transaksi_hariovertime` int(11) NOT NULL,
  `transaksi_total` int(11) NOT NULL,
  `transaksi_status` enum('mulai','selesai') NOT NULL,
  PRIMARY KEY (`transaksi_id`),
  KEY `pelanggan_id` (`pelanggan_id`),
  KEY `pelanggan_id_2` (`pelanggan_id`),
  KEY `sopir_id` (`sopir_id`),
  KEY `pelanggan_id_3` (`pelanggan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `pelanggan_id`, `sopir_id`, `kendaraan_id`, `transaksi_tglmulai`, `transaksi_tglselesai`, `transaksi_hari`, `transaksi_tglovertime`, `transaksi_hariovertime`, `transaksi_total`, `transaksi_status`) VALUES
(31, 2, 2, 11, '2017-11-18', '2017-11-19', '1', '2017-11-21', 2, 16000000, 'selesai'),
(32, 0, 3, 2, '2017-11-01', '2017-11-02', '', '0000-00-00', 0, 0, 'mulai'),
(33, 7, 4, 3, '2017-11-03', '2017-11-04', '1', '2017-11-20', 1, 3000000, 'selesai'),
(34, 7, 2, 8, '2017-11-03', '2017-11-07', '4', '2017-11-20', 1, 5000000, 'selesai'),
(35, 7, 2, 1, '0000-00-00', '0000-00-00', '0', '2017-11-21', 1, 1000000, 'selesai'),
(37, 9, 5, 4, '2017-11-19', '2017-11-20', '1', '2017-11-21', 1, 4000000, 'selesai');
