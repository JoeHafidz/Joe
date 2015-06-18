-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql6.freesqldatabase.com
-- Generation Time: Jun 18, 2015 at 09:58 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `klien_id` int(50) NOT NULL,
  `nama_order` text NOT NULL,
  `crp` varchar(50) NOT NULL,
  `jenis_order` varchar(50) NOT NULL,
  `materi_siar` varchar(50) NOT NULL,
  `status_penyiaran` int(11) NOT NULL,
  `status_produksi` int(11) NOT NULL,
  `upload_so_id` int(11) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT '1',
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_so`
--

CREATE TABLE IF NOT EXISTS `tb_status_so` (
  `id_status_so` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status_so`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_status_so`
--

INSERT INTO `tb_status_so` (`id_status_so`, `deskripsi`) VALUES
(1, 'di Admin'),
(2, 'Admin Setuju | Masukkan Jadwal'),
(3, 'Admin Tidak Setuju'),
(4, 'ada di Produksi'),
(5, 'File sudah Diupload'),
(6, 'Ada di Penyiaran'),
(7, 'File Ditolak'),
(8, 'Siaran Selesai'),
(9, 'Tunggu diFollowUp'),
(10, 'Done FollowUP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tayang`
--

CREATE TABLE IF NOT EXISTS `tb_tayang` (
  `id_tayang` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_tayang` varchar(20) NOT NULL,
  `jam_tayang` varchar(20) NOT NULL,
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
  `so_id` int(11) NOT NULL,
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
  `telp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `perusahaan`, `alamat_perusahaan`, `telp`, `username`, `password`, `level_user`) VALUES
(0, 'Rhema Radio', 'Rhema Radio', 'Rhema Radio', '', 'marketing', 'marketing', 'marketing'),
(1, '', '', '', '', 'superadmin', 'superadmin', 'superadmin'),
(4, 'Rhema Radio', 'Rhema Radio', 'Rhema Radio', '', 'via', 'via', 'produksi'),
(5, 'Rhema Radio', 'Rhema Radio', 'Rhema Radio', '', 'yuli', 'yuli', 'penyiaran'),
(8, 'Rossi', 'Yamaha', 'Jl. Pemuda No.112 Semarang', '', 'rossi46', 'rossi46', 'klien'),
(9, 'joe', 'hagia corp', 'Permata Hijau', '', 'joe', 'joe', 'klien'),
(11, 'Rhema Radio', 'Rhema Radio', 'Permata Hijau', '', 'ari', 'ari', 'keuangan'),
(13, 'hagia', 'hagia corp', 'Permata Hijau', '', 'hagia', 'hagia', 'klien'),
(14, 'Rei', 'rei', 'Handoko N120 Semarang', '', 'rei', 'rei', 'klien'),
(17, 'Oza', 'Oza', 'Ozacorp', '085641122414', 'oza', 'oza', 'klien'),
(18, '0', '0', '0', '', '0', '0', '0'),
(19, '0', '0', '0', '', '0', '0', '0'),
(20, '0', '0', '0', '', '0', '0', '0'),
(21, 'Adi', 'Adi Corp', 'Adi Tsujipto', '', 'adi', 'adi', 'klien'),
(22, '0', '0', '0', '', '0', '0', '0'),
(23, '0', '0', '0', '', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_order`
--

CREATE TABLE IF NOT EXISTS `tb_user_order` (
  `id_user_order` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `tanggal_order` date NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id_user_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
