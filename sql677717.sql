-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Inang: sql6.freesqldatabase.com
-- Waktu pembuatan: 18 Mei 2015 pada 17.32
-- Versi Server: 5.5.43-0ubuntu0.14.04.1
-- Versi PHP: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `sql677717`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_approve`
--

CREATE TABLE IF NOT EXISTS `tb_approve` (
  `id_approve` int(11) NOT NULL AUTO_INCREMENT,
  `status_approve` varchar(50) NOT NULL,
  `komen` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_approve`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_tayang`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_tayang` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_jadwal` date NOT NULL,
  `waktu_jadwal` time NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_salesorder`
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
  `status_id` int(11) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`idso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status_so`
--

CREATE TABLE IF NOT EXISTS `tb_status_so` (
  `id_status_so` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_status_so`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tayang`
--

CREATE TABLE IF NOT EXISTS `tb_tayang` (
  `id_tayang` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_tayang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload_so`
--

CREATE TABLE IF NOT EXISTS `tb_upload_so` (
  `id_upload_so` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_upload_so`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_userid`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
