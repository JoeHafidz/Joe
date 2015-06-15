-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql6.freesqldatabase.com
-- Generation Time: Jun 14, 2015 at 07:58 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sql677717`
--
CREATE DATABASE `sql677717` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql677717`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_approve`
--

CREATE TABLE IF NOT EXISTS `tb_approve` (
  `id_approve` int(11) NOT NULL AUTO_INCREMENT,
  `so_id` int(50) NOT NULL,
  `status` int(11) NOT NULL,
  `komen` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_approve`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_approve`
--

INSERT INTO `tb_approve` (`id_approve`, `so_id`, `status`, `komen`, `user_id`) VALUES
(4, 7, 3, 'Tidak Setuju', 1),
(5, 9, 3, 'Ga Setuju', 1),
(6, 10, 2, 'Admin Setuju', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_tayang`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_tayang` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `so_id` int(11) NOT NULL,
  `tanggal_jadwal` date NOT NULL,
  `waktu_jadwal` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_salesorder`
--

CREATE TABLE IF NOT EXISTS `tb_salesorder` (
  `idso` int(11) NOT NULL AUTO_INCREMENT,
  `noso` varchar(50) NOT NULL,
  `tanggal_order` date NOT NULL,
  `pemberi_order` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `crp` varchar(50) NOT NULL,
  `jenis_order` varchar(50) NOT NULL,
  `materi_siar` varchar(50) NOT NULL,
  `tanggal_siar_id` int(11) NOT NULL,
  `jumlah_siar` int(11) NOT NULL,
  `upload_so_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT '1',
  `status_id` int(11) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_so`
--

CREATE TABLE IF NOT EXISTS `tb_status_so` (
  `id_status_so` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status_so`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_status_so`
--

INSERT INTO `tb_status_so` (`id_status_so`, `deskripsi`) VALUES
(1, 'ada di Admin'),
(2, 'Admin Setuju'),
(3, 'Admin Tidak Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tayang`
--

CREATE TABLE IF NOT EXISTS `tb_tayang` (
  `id_tayang` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `so_id` int(11) NOT NULL,
  PRIMARY KEY (`id_tayang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload_so`
--

CREATE TABLE IF NOT EXISTS `tb_upload_so` (
  `id_upload_so` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_upload_so`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `perusahaan` varchar(250) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `perusahaan`, `alamat_perusahaan`, `username`, `password`, `level_user`) VALUES
(1, '', '', '', 'superadmin', 'superadmin', 'superadmin'),
(2, '', '', '', 'hendi', 'hendi', 'marketing'),
(3, '', '', '', 'ari', 'ari', 'keuangan'),
(4, '', '', '', 'via', 'via', 'produksi'),
(5, '', '', '', 'yuli', 'yuli', 'penyiaran'),
(6, '', '', '', 'rossi', 'rossi', 'klien'),
(7, '0', 'OzaCorp', 'AlamatOza', 'oza', 'oza', 'klien');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
