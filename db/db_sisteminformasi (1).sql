-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2018 pada 20.37
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_sisteminformasi`
--
CREATE DATABASE IF NOT EXISTS `db_sisteminformasi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_sisteminformasi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_admin`
--

CREATE TABLE IF NOT EXISTS `db_admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `db_admin`
--

INSERT INTO `db_admin` (`id`, `username`, `password`, `nama`, `level`) VALUES
(2, 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'agus', 'member'),
(4, 'admin', '0192023a7bbd73250516f069df18b500', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_data_testing`
--

CREATE TABLE IF NOT EXISTS `db_data_testing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `data1` double NOT NULL,
  `data2` double NOT NULL,
  `data3` double NOT NULL,
  `data4` double NOT NULL,
  `data5` double NOT NULL,
  `data6` double NOT NULL,
  `data7` double NOT NULL,
  `data8` double NOT NULL,
  `data9` double NOT NULL,
  `data10` double NOT NULL,
  `data11` tinyint(1) NOT NULL,
  `target` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `db_data_testing`
--

INSERT INTO `db_data_testing` (`ID`, `nama`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `target`) VALUES
(1, 'Yusuf Kamal M', 79, 80, 80, 91, 92, 90, 79, 81, 83, 79, 1, 1),
(2, 'Ahmad Helmi F', 81, 93, 90, 83, 81, 92, 80, 79, 90, 93, 1, 1),
(3, 'Nova Aji Saputra', 81, 93, 92, 84, 80, 94, 80, 78, 92, 92, 1, 1),
(4, 'Ahmad Rozak', 80, 92, 80, 80, 80, 80, 82, 80, 80, 80, 1, 1),
(5, 'Fajar Rizki ', 81, 91, 79, 79, 80, 94, 83, 63, 91, 82, 0, 1),
(6, 'Fery Febriyanto', 81, 89, 79, 79, 79, 93, 79, 82, 77, 79, 1, 1),
(7, 'Ratedjo Putro', 81, 88, 90, 77, 80, 80, 60, 88, 63, 76, 1, 1),
(8, 'Alif Izal Haqi', 79, 80, 80, 69, 80, 88, 80, 77, 90, 77, 0, 1),
(9, 'Syafiq ibrahim', 77, 90, 88, 66, 90, 79, 69, 90, 78, 81, 1, 1),
(10, 'Sarig greisma', 72, 88, 82, 79, 70, 66, 62, 60, 59, 74, 0, 0),
(11, 'Shayul', 56, 70, 58, 70, 65, 61, 60, 58, 70, 71, 0, 0),
(12, 'Erika putri A', 60, 71, 74, 68, 79, 73, 77, 71, 70, 69, 1, 1),
(13, 'Ria reviana', 70, 74, 73, 78, 82, 77, 75, 70, 78, 75, 0, 1),
(14, 'T margianti', 80, 78, 82, 89, 85, 85, 79, 80, 83, 75, 1, 1),
(15, 'Sanie', 90, 93, 95, 84, 89, 83, 79, 84, 84, 81, 1, 1),
(16, 'Adi heri', 83, 85, 84, 80, 84, 80, 75, 75, 80, 82, 1, 1),
(17, 'Tomas', 78, 80, 89, 79, 77, 75, 83, 86, 88, 72, 1, 1),
(18, 'Bagas b', 70, 83, 84, 80, 75, 76, 85, 87, 80, 88, 1, 1),
(19, 'Adi heri s', 75, 69, 70, 70, 75, 76, 87, 81, 76, 84, 1, 1),
(20, 'Dimas rendi s', 70, 60, 62, 58, 56, 60, 71, 63, 60, 55, 0, 0),
(21, 'Husein kamal', 60, 60, 65, 50, 65, 70, 50, 55, 60, 65, 1, 0),
(22, 'M ilham ainal', 70, 75, 75, 75, 65, 70, 75, 60, 70, 60, 1, 1),
(23, 'Melia diana', 70, 65, 70, 60, 75, 65, 70, 70, 65, 65, 0, 1),
(24, 'Rizki maulana', 90, 80, 85, 75, 80, 85, 75, 70, 85, 75, 1, 1),
(25, 'Diah novianti', 75, 80, 85, 70, 75, 70, 75, 70, 75, 70, 1, 1),
(26, 'Endah maulidah', 80, 85, 65, 75, 70, 65, 80, 80, 90, 85, 1, 1),
(27, 'Vinda nur f', 75, 65, 85, 65, 65, 70, 75, 70, 75, 60, 1, 1),
(28, 'Evi kurniasih', 70, 80, 80, 75, 75, 85, 65, 60, 70, 75, 1, 1),
(29, 'Rizqi nur afiyah', 70, 65, 60, 50, 55, 75, 60, 55, 80, 50, 0, 0),
(30, 'Puspita warih ayuningsih', 80, 80, 90, 80, 65, 85, 70, 70, 85, 80, 1, 1),
(31, 'Asyah wiwit mulyani', 60, 60, 55, 55, 55, 55, 55, 55, 50, 50, 0, 0),
(32, 'Mandani Ayu', 60, 55, 55, 60, 55, 55, 55, 55, 50, 50, 0, 0),
(33, 'Desi maya', 60, 60, 55, 50, 55, 50, 55, 50, 50, 50, 0, 0),
(34, 'Sri murni', 55, 60, 50, 55, 55, 50, 55, 55, 50, 50, 0, 0),
(35, 'Tomy haryanto', 70, 70, 85, 70, 65, 70, 80, 70, 60, 60, 1, 1),
(36, 'Abdul malik ', 80, 74, 79, 84, 74, 79, 83, 83, 78, 81, 1, 1),
(37, 'Tavit slamet ', 80, 70, 78, 80, 77, 79, 71, 74, 83, 79, 0, 1),
(38, 'Haris dermawan ', 93, 94, 89, 81, 84, 88, 81, 83, 88, 87, 1, 1),
(39, 'Aliv izzul haqi', 83, 79, 73, 88, 81, 85, 78, 77, 84, 80, 1, 1),
(40, 'Hidayat nur wahid', 83, 88, 87, 80, 83, 82, 77, 73, 87, 79, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_gaji`
--

CREATE TABLE IF NOT EXISTS `db_gaji` (
  `id_gaji` int(50) NOT NULL AUTO_INCREMENT,
  `NIP` varchar(50) DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `tmt_pangkat` date DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tmt_kgb` date DEFAULT NULL,
  `grade` int(50) DEFAULT NULL,
  `gaji` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `db_gaji`
--

INSERT INTO `db_gaji` (`id_gaji`, `NIP`, `tmt_cpns`, `golongan`, `tmt_pangkat`, `jabatan`, `tmt_kgb`, `grade`, `gaji`) VALUES
(1, '198008152003122003', '2013-12-01', 'III/C', '2012-06-01', 'Kepala Urusan Perencanaan dan Keuangan\r\n', '2013-12-01', 8, 2940000),
(4, '198008152003122003', '2014-12-01', 'III/C', '2012-06-01', 'Kepala Urusan Perencanaan dan Keuangan', '2013-12-01', 8, 2940000),
(5, '196005101981032001', '1981-01-03', 'IIIA', '2009-01-04', 'BENDAHARA PENERIMAAN', '2017-05-23', 8, 3000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_golongan`
--

CREATE TABLE IF NOT EXISTS `db_golongan` (
  `id_golongan` int(50) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(100) DEFAULT NULL,
  `urain` text,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hasil`
--

CREATE TABLE IF NOT EXISTS `db_hasil` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `data1` double NOT NULL,
  `data2` double NOT NULL,
  `data3` double NOT NULL,
  `data4` double NOT NULL,
  `data5` double NOT NULL,
  `data6` double NOT NULL,
  `data7` double NOT NULL,
  `data8` double NOT NULL,
  `data9` double NOT NULL,
  `data10` double NOT NULL,
  `data11` double NOT NULL,
  `target` tinyint(1) NOT NULL,
  `output` double NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data untuk tabel `db_hasil`
--

INSERT INTO `db_hasil` (`ID`, `nama`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `target`, `output`, `status`) VALUES
(1, 'Tavit S.S', 0.91, 0.9, 0.9, 0.8, 0.8, 0.9, 0.8, 0.8, 0.92, 0.9, 1, 1, 1, 'Benar'),
(2, 'Vino W.I', 0.9, 0.87, 0.79, 0.8, 0.79, 0.91, 0.9, 0.89, 0.79, 0.81, 0, 1, 1, 'Benar'),
(3, 'Putri I.Z', 0.79, 0.83, 0.7, 0.79, 0.8, 0.83, 0.79, 0.78, 0.8, 0.79, 1, 1, 1, 'Benar'),
(4, 'Munhamir N', 0.8, 0.82, 0.8, 0.79, 0.78, 0.82, 0.8, 0.72, 0.76, 0.81, 1, 1, 1, 'Benar'),
(5, 'Abdul M.A', 0.79, 0.78, 0.78, 0.69, 0.81, 0.72, 0.61, 0.6, 0.91, 0.59, 1, 1, 1, 'Benar'),
(6, 'Ahmad R.F', 0.79, 0.82, 0.79, 0.81, 0.82, 0.9, 0.79, 0.8, 0.79, 0.83, 1, 1, 1, 'Benar'),
(7, 'Intan N', 0.82, 0.79, 0.6, 0.69, 0.8, 0.79, 0.79, 0.8, 0.61, 0.91, 0, 1, 1, 'Benar'),
(8, 'Nada M.N', 0.83, 0.79, 0.69, 0.81, 0.8, 0.9, 0.83, 0.79, 0.79, 0.8, 1, 1, 1, 'Benar'),
(9, 'Afiani S.B', 0.74, 0.78, 0.81, 0.83, 0.9, 0.79, 0.83, 0.8, 0.79, 0.76, 1, 1, 1, 'Benar'),
(10, 'Kyesha Zhika H', 0.7, 0.72, 0.69, 0.8, 0.69, 0.7, 0.7, 0.69, 0.6, 0.6, 0, 0, 1, 'salah'),
(11, 'Arif Fatah Fauzan', 0.8, 0.69, 0.79, 0.81, 0.93, 0.92, 0.9, 0.9, 0.82, 0.79, 1, 1, 1, 'Benar'),
(12, 'Nabil Ahksan Nu A', 0.83, 0.67, 0.9, 0.82, 0.9, 0.69, 0.67, 0.66, 0.83, 0.9, 1, 1, 1, 'Benar'),
(13, 'Ilham risky N', 0.8, 0.79, 0.78, 0.7, 0.6, 0.6, 0.61, 0.63, 0.59, 0.74, 0, 0, 1, 'salah'),
(14, 'Thomas Setia Budi', 0.79, 0.69, 0.8, 0.9, 0.93, 0.79, 0.92, 0.91, 0.81, 0.79, 1, 1, 1, 'Benar'),
(15, 'Gilang Fitriansah', 0.81, 0.79, 0.83, 0.84, 0.91, 0.82, 0.8, 0.92, 0.79, 0.78, 1, 1, 1, 'Benar'),
(16, 'Farchan Anugrah', 0.91, 0.82, 0.83, 0.82, 0.92, 0.91, 0.91, 0.82, 0.9, 0.9, 0, 1, 1, 'Benar'),
(17, 'Sandi Saputra', 0.91, 0.82, 0.82, 0.83, 0.92, 0.91, 0.92, 0.81, 0.91, 0.9, 1, 1, 1, 'Benar'),
(18, 'Zidan H.R', 0.9, 0.89, 0.83, 0.79, 0.9, 0.93, 0.92, 0.83, 0.8, 0.9, 0, 1, 1, 'Benar'),
(19, 'Muh Aska Aditya', 0.81, 0.83, 0.9, 0.93, 0.79, 0.8, 0.93, 0.8, 0.9, 0.7, 1, 1, 1, 'Benar'),
(20, 'Muh Hafish Ulin Nuha', 0.79, 0.82, 0.71, 0.69, 0.66, 0.65, 0.51, 0.7, 0.59, 0.69, 0, 0, 1, 'salah'),
(21, 'Gunawan bimo N', 0.81, 0.8, 0.72, 0.8, 0.81, 0.82, 0.83, 0.92, 0.9, 0.69, 1, 1, 1, 'Benar'),
(22, 'Sifa ibrahim', 0.79, 0.8, 0.72, 0.8, 0.82, 0.92, 0.89, 0.92, 0.82, 0.82, 1, 1, 1, 'Benar'),
(23, 'Bagas Baskoro', 0.6, 0.62, 0.58, 0.61, 0.55, 0.59, 0.66, 0.62, 0.6, 0.71, 0, 0, 0, 'Benar'),
(24, 'Saipul khakim', 0.89, 0.83, 0.88, 0.91, 0.79, 0.86, 0.72, 0.74, 0.87, 0.83, 1, 1, 1, 'Benar'),
(25, 'Supriyatno', 0.7, 0.78, 0.77, 0.76, 0.71, 0.76, 0.81, 0.73, 0.76, 0.71, 1, 1, 1, 'Benar'),
(26, 'Adi heri susanto', 0.9, 0.79, 0.8, 0.81, 0.77, 0.82, 0.79, 0.8, 0.82, 0.78, 1, 1, 1, 'Benar'),
(27, 'M mapsha Aiman', 0.8, 0.85, 0.81, 0.86, 0.88, 0.82, 0.84, 0.82, 0.88, 0.81, 1, 1, 1, 'Benar'),
(28, 'Amelia Restu cahya ', 0.82, 0.9, 0.93, 0.88, 0.89, 0.83, 0.82, 0.79, 0.82, 0.76, 1, 1, 1, 'Benar'),
(29, 'Retno wulan A. L ', 0.73, 0.75, 0.8, 0.82, 0.74, 0.77, 0.8, 0.81, 0.8, 0.74, 0, 1, 1, 'Benar'),
(30, 'Tanti winata putri', 0.77, 0.78, 0.74, 0.72, 0.7, 0.75, 0.77, 0.76, 0.73, 0.6, 1, 1, 1, 'Benar'),
(31, 'Silviana solikhah', 0.75, 0.7, 0.7, 0.7, 0.74, 0.72, 0.7, 0.72, 0.73, 0.77, 1, 1, 1, 'Benar'),
(32, 'Rizka amelia', 0.72, 0.65, 0.66, 0.71, 0.8, 0.7, 0.72, 0.68, 0.58, 0.66, 0, 0, 1, 'salah'),
(33, 'Winda sahara', 0.8, 0.78, 0.79, 0.82, 0.84, 0.8, 0.78, 0.79, 0.75, 0.76, 1, 1, 1, 'Benar'),
(34, 'Krisna', 0.78, 0.79, 0.75, 0.7, 0.72, 0.77, 0.8, 0.8, 0.75, 0.77, 1, 1, 1, 'Benar'),
(35, 'Joko tarunao', 0.8, 0.69, 0.88, 0.84, 0.79, 0.8, 0.78, 0.7, 0.83, 0.76, 1, 1, 1, 'Benar'),
(36, 'Thomas', 0.9, 0.89, 0.93, 0.86, 0.89, 0.88, 0.96, 0.92, 0.78, 0.79, 1, 1, 1, 'Benar'),
(37, 'Wardoyo', 0.85, 0.82, 0.68, 0.65, 0.71, 0.79, 0.8, 0.75, 0.82, 0.79, 1, 1, 1, 'Benar'),
(38, 'Zainal', 0.82, 0.9, 0.79, 0.85, 0.79, 0.88, 0.79, 0.8, 0.76, 0.8, 0, 1, 1, 'Benar'),
(39, 'Sonik', 0.73, 0.74, 0.7, 0.68, 0.74, 0.79, 0.71, 0.7, 0.75, 0.8, 1, 1, 1, 'Benar'),
(40, 'Ageng prasojo', 0.79, 0.7, 0.74, 0.76, 0.77, 0.75, 0.8, 0.74, 0.79, 0.82, 1, 1, 1, 'Benar'),
(41, 'Shinta diyah permatasari', 0.72, 0.83, 0.76, 0.7, 0.7, 0.64, 0.73, 0.66, 0.74, 0.71, 1, 1, 1, 'Benar'),
(42, 'Dwi larasati', 0.93, 0.82, 0.79, 0.86, 0.77, 0.75, 0.81, 0.89, 0.83, 0.75, 1, 1, 1, 'Benar'),
(43, 'Nur’aini', 0.89, 0.92, 0.78, 0.93, 0.92, 0.82, 0.85, 0.87, 0.79, 0.89, 1, 1, 1, 'Benar'),
(44, 'Rangga dwi p', 0.67, 0.56, 0.78, 0.66, 0.6, 0.62, 0.68, 0.57, 0.7, 0.62, 0, 0, 1, 'salah'),
(45, 'Yanuar wildan', 0.57, 0.62, 0.66, 0.72, 0.71, 0.58, 0.64, 0.6, 0.61, 0.7, 1, 0, 1, 'salah'),
(46, 'Rizki indah wati', 0.8, 0.8, 0.65, 0.6, 0.7, 0.6, 0.8, 0.7, 0.8, 0.9, 1, 1, 1, 'Benar'),
(47, 'Melinda fadyah zahra', 0.6, 0.65, 0.7, 0.6, 0.5, 0.55, 0.65, 0.65, 0.7, 0.65, 0, 0, 0, 'Benar'),
(48, 'Selvia dewi sagita', 0.75, 0.65, 0.6, 0.7, 0.75, 0.6, 0.6, 0.6, 0.8, 0.75, 0, 1, 1, 'Benar'),
(49, 'Deta kurniawati', 0.65, 0.7, 0.65, 0.6, 0.7, 0.7, 0.75, 0.75, 0.7, 0.6, 0, 1, 1, 'Benar'),
(50, 'Dimas ilham satria', 0.8, 0.75, 0.7, 0.75, 0.65, 0.8, 0.65, 0.65, 0.75, 0.7, 1, 1, 1, 'Benar'),
(51, 'Intan asyifa m', 0.8, 0.8, 0.9, 0.7, 0.7, 0.8, 0.7, 0.6, 0.8, 0.8, 1, 1, 1, 'Benar'),
(52, 'Ullumi darmawan', 0.7, 0.65, 0.75, 0.6, 0.5, 0.65, 0.7, 0.7, 0.65, 0.6, 0, 0, 1, 'salah'),
(53, 'M irfan edowardo', 0.85, 0.7, 0.8, 0.85, 0.65, 0.8, 0.7, 0.65, 0.85, 0.8, 1, 1, 1, 'Benar'),
(54, 'Candra pradana', 0.7, 0.65, 0.75, 0.8, 0.85, 0.8, 0.65, 0.7, 0.7, 0.7, 0, 1, 1, 'Benar'),
(55, 'Haris dermawan', 0.65, 0.65, 0.7, 0.5, 0.6, 0.6, 0.7, 0.5, 0.7, 0.65, 1, 0, 1, 'salah'),
(56, 'Arum dwi nanda', 0.8, 0.7, 0.75, 0.6, 0.65, 0.6, 0.75, 0.7, 0.65, 0.6, 0, 1, 1, 'Benar'),
(57, 'Hafid mustakim', 0.7, 0.7, 0.75, 0.6, 0.75, 0.7, 0.6, 0.65, 0.7, 0.75, 1, 1, 1, 'Benar'),
(58, 'Rifki ardiansyah', 0.6, 0.5, 0.8, 0.7, 0.65, 0.7, 0.65, 0.7, 0.7, 0.6, 1, 1, 1, 'Benar'),
(59, 'Mugi handayani', 0.7, 0.6, 0.7, 0.75, 0.65, 0.6, 0.7, 0.7, 0.65, 0.8, 1, 1, 1, 'Benar'),
(60, 'Fadhilah alawiyah', 0.8, 0.75, 0.8, 0.8, 0.7, 0.8, 0.7, 0.75, 0.7, 0.75, 1, 1, 1, 'Benar'),
(61, 'Alitan kasytila', 0.8, 0.7, 0.7, 0.8, 0.8, 0.6, 0.7, 0.8, 0.8, 0.7, 1, 1, 1, 'Benar'),
(62, 'Rifki ilham A.S', 0.7, 0.75, 0.6, 0.75, 0.7, 0.7, 0.75, 0.7, 0.8, 0.75, 1, 1, 1, 'Benar'),
(63, 'Setyo adi wicaksono', 0.8, 0.75, 0.8, 0.8, 0.8, 0.75, 0.8, 0.8, 1, 0.9, 1, 1, 1, 'Benar'),
(64, 'Rozyid nur afianto', 0.8, 0.8, 0.75, 0.75, 0.75, 0.8, 0.6, 0.6, 0.8, 0.7, 1, 1, 1, 'Benar'),
(65, 'Ardi pranoto', 0.9, 0.9, 0.9, 0.9, 0.9, 1, 0.9, 0.9, 0.95, 0.8, 1, 1, 1, 'Benar'),
(66, 'Khairul umam', 0.8, 0.7, 0.7, 0.7, 0.6, 0.5, 0.85, 0.65, 0.7, 0.7, 1, 1, 1, 'Benar'),
(67, 'Lukman', 0.6, 0.55, 0.5, 0.65, 0.6, 0.6, 0.6, 0.6, 0.5, 0.6, 1, 0, 1, 'salah'),
(68, 'Jamal', 0.6, 0.7, 0.6, 0.65, 0.6, 0.5, 0.55, 0.55, 0.6, 0.55, 1, 0, 1, 'salah'),
(69, 'Danu ilham', 0.7, 0.7, 0.75, 0.8, 0.75, 0.75, 0.85, 0.65, 0.6, 0.65, 1, 1, 1, 'Benar'),
(70, 'Dana ilham', 0.7, 0.7, 0.75, 0.75, 0.7, 0.8, 0.85, 0.7, 0.6, 0.6, 1, 1, 1, 'Benar'),
(71, 'Arrum atnindiya', 0.7, 0.6, 0.85, 0.8, 0.65, 0.7, 0.8, 0.8, 0.65, 0.6, 1, 1, 1, 'Benar'),
(72, 'Lili Niara wati', 0.7, 0.7, 0.7, 0.75, 0.7, 0.7, 0.6, 0.55, 0.7, 0.6, 1, 1, 1, 'Benar'),
(73, 'Restu', 0.6, 0.6, 0.6, 0.55, 0.5, 0.55, 0.55, 0.6, 0.6, 0.5, 0, 0, 0, 'Benar'),
(74, 'Widya nur f', 0.55, 0.5, 0.55, 0.5, 0.6, 0.5, 0.55, 0.55, 0.6, 0.5, 0, 0, 0, 'Benar'),
(75, 'Ratna', 0.6, 0.56, 0.55, 0.5, 0.55, 0.5, 0.55, 0.5, 0.5, 0.5, 0, 0, 0, 'Benar'),
(76, 'Sofi farado', 0.8, 0.6, 0.95, 0.6, 0.85, 0.6, 0.7, 0.8, 0.85, 0.6, 1, 1, 1, 'Benar'),
(77, 'Andri pradipta', 0.7, 0.6, 0.75, 0.6, 0.6, 0.8, 0.75, 0.6, 0.8, 0.65, 1, 1, 1, 'Benar'),
(78, 'Ardy pranoto', 0.9, 1, 0.9, 0.9, 1, 0.9, 0.9, 1, 0.9, 0.9, 1, 1, 1, 'Benar'),
(79, 'Tri prasetyo', 0.6, 0.8, 0.65, 0.6, 0.6, 0.65, 0.6, 0.75, 0.65, 0.6, 1, 1, 1, 'Benar'),
(80, 'Dedi cipto prasetyo', 0.7, 0.75, 0.6, 0.8, 0.65, 0.8, 0.65, 0.7, 0.6, 0.6, 0, 1, 1, 'Benar'),
(81, 'Fahmi riza', 0.7, 0.75, 0.7, 0.7, 0.75, 0.75, 0.7, 0.7, 0.7, 0.7, 1, 1, 1, 'Benar'),
(82, 'Fahri azizi', 0.7, 0.75, 0.7, 0.6, 0.65, 0.8, 0.6, 0.85, 0.6, 0.6, 0, 1, 1, 'Benar'),
(83, 'Danil ilhan', 0.7, 0.85, 0.7, 0.7, 0.65, 0.7, 0.65, 0.7, 0.65, 0.7, 0, 1, 1, 'Benar'),
(84, 'Nuzia ufuk pangestika', 0.6, 0.7, 0.75, 0.6, 0.8, 0.75, 0.8, 0.6, 0.65, 0.7, 1, 1, 1, 'Benar'),
(85, 'Septi arirusa', 0.6, 0.65, 0.85, 0.6, 0.6, 0.75, 0.8, 0.6, 0.8, 0.65, 1, 1, 1, 'Benar'),
(86, 'Tri setio', 0.65, 0.85, 0.7, 0.6, 0.75, 0.65, 0.6, 0.6, 0.8, 0.65, 1, 1, 1, 'Benar'),
(87, 'Laila khan', 0.6, 0.8, 0.75, 0.6, 0.6, 0.7, 0.6, 0.6, 0.6, 0.7, 0, 1, 1, 'Benar'),
(88, 'Dedi kurniawan', 0.7, 0.65, 0.65, 0.85, 0.6, 0.6, 0.65, 0.8, 0.6, 0.6, 1, 1, 1, 'Benar'),
(89, 'Fahri kurniawan', 0.65, 0.65, 0.7, 0.8, 0.8, 0.6, 0.6, 0.7, 0.7, 0.65, 1, 1, 1, 'Benar'),
(90, 'Zulmi fathan', 0.7, 0.7, 0.85, 0.75, 0.7, 0.7, 0.7, 0.75, 0.7, 0.75, 1, 1, 1, 'Benar'),
(91, 'Wahyu nurbakti', 0.7, 0.7, 0.75, 0.75, 0.65, 0.7, 0.7, 0.7, 0.7, 0.7, 0, 1, 1, 'Benar'),
(92, 'Ulya w solihati', 0.6, 0.55, 0.5, 0.6, 0.55, 0.5, 0.6, 0.55, 0.55, 0.5, 0, 0, 0, 'Benar'),
(93, 'Pungkas setiyo utomo', 0.6, 0.55, 0.55, 0.55, 0.6, 0.55, 0.55, 0.55, 0.55, 0.5, 1, 0, 0, 'Benar'),
(94, 'Arif B setiawan', 0.75, 0.7, 0.7, 0.75, 0.7, 0.7, 0.7, 0.75, 0.75, 0.7, 1, 1, 1, 'Benar'),
(95, 'Akhsan khilal n', 0.65, 0.7, 0.7, 0.85, 0.6, 0.7, 0.6, 0.6, 0.7, 0.6, 1, 1, 1, 'Benar'),
(96, 'Afiatu rahma', 0.6, 0.55, 0.55, 0.6, 0.55, 0.5, 0.5, 0.5, 0.5, 0.5, 0, 0, 0, 'Benar'),
(97, 'David fanyaldi', 0.7, 0.65, 0.65, 0.7, 0.65, 0.75, 0.65, 0.7, 0.7, 0.7, 1, 1, 1, 'Benar'),
(98, 'Luluk prasetyo', 0.6, 0.75, 0.7, 0.7, 0.65, 0.7, 0.65, 0.6, 0.65, 0.65, 1, 1, 1, 'Benar'),
(99, 'Dihlis intan putri', 0.65, 0.6, 0.65, 0.8, 0.6, 0.65, 0.6, 0.6, 0.65, 0.65, 0, 1, 1, 'Benar'),
(100, 'Yogi', 0.7, 0.7, 0.65, 0.7, 0.85, 0.7, 0.6, 0.75, 0.7, 0.65, 1, 1, 1, 'Benar'),
(101, 'Awang', 0.7, 0.65, 0.65, 0.7, 0.85, 0.65, 0.65, 0.75, 0.7, 0.7, 1, 1, 1, 'Benar'),
(102, 'Arif muhanudin', 0.8, 0.8, 0.75, 0.8, 0.75, 0.8, 0.8, 0.8, 0.8, 0.8, 1, 1, 1, 'Benar'),
(103, 'Indah', 0.6, 0.6, 0.55, 0.6, 0.55, 0.5, 0.55, 0.5, 0.55, 0.55, 0, 0, 0, 'Benar'),
(104, 'Riskiono', 0.75, 0.7, 0.7, 0.75, 0.75, 0.7, 0.7, 0.75, 0.75, 0.75, 1, 1, 1, 'Benar'),
(105, 'Lukman Haqim', 0.75, 0.65, 0.74, 0.8, 0.77, 0.75, 0.8, 0.74, 0.8, 0.75, 1, 1, 1, 'Benar'),
(106, 'Nizar romadhoni s', 0.64, 0.7, 0.7, 0.67, 0.6, 0.7, 0.68, 0.6, 0.7, 0.57, 1, 0, 1, 'salah'),
(107, 'Bintang permana', 0.7, 0.76, 0.8, 0.77, 0.87, 0.8, 0.75, 0.7, 0.85, 0.76, 1, 1, 1, 'Benar'),
(108, 'Kurnia ardiansyah', 0.77, 0.65, 0.73, 0.68, 0.7, 0.79, 0.77, 0.73, 0.84, 0.73, 1, 1, 1, 'Benar'),
(109, 'Munawir', 0.8, 0.73, 0.72, 0.56, 0.6, 0.8, 0.83, 0.76, 0.7, 0.65, 0, 1, 1, 'Benar'),
(110, 'Puput sri wulandari', 0.93, 0.83, 0.88, 0.87, 0.7, 0.86, 0.88, 0.83, 0.8, 0.76, 1, 1, 1, 'Benar'),
(111, 'Wahyudin', 0.8, 0.83, 0.75, 0.7, 0.77, 0.74, 0.72, 0.7, 0.8, 0.72, 1, 1, 1, 'Benar'),
(112, 'Wildan', 0.9, 0.7, 0.8, 0.83, 0.77, 0.83, 0.74, 0.7, 0.8, 0.82, 1, 1, 1, 'Benar'),
(113, 'Wahyu', 0.82, 0.73, 0.76, 0.82, 0.73, 0.83, 0.77, 0.7, 0.84, 0.77, 0, 1, 1, 'Benar'),
(114, 'Safri dedi k', 0.84, 0.89, 0.75, 0.7, 0.73, 0.84, 0.88, 0.8, 0.96, 0.7, 1, 1, 1, 'Benar'),
(115, 'Jusa ', 0.7, 0.64, 0.69, 0.63, 0.77, 0.64, 0.73, 0.72, 0.65, 0.73, 0, 0, 1, 'salah'),
(116, 'Afit', 0.85, 0.73, 0.77, 0.84, 0.86, 0.79, 0.82, 0.75, 0.8, 0.73, 1, 1, 1, 'Benar'),
(117, 'Irvan', 0.84, 0.89, 0.88, 0.78, 0.79, 0.88, 0.83, 0.8, 0.89, 0.9, 1, 1, 1, 'Benar'),
(118, 'Amir ', 0.9, 0.89, 0.78, 0.87, 0.77, 0.89, 0.88, 0.82, 0.94, 0.78, 1, 1, 1, 'Benar'),
(119, 'Bagas', 0.83, 0.78, 0.77, 0.73, 0.78, 0.8, 0.75, 0.78, 0.8, 0.78, 1, 1, 1, 'Benar'),
(120, 'Fikri ', 0.95, 0.89, 0.87, 0.93, 0.88, 0.94, 0.78, 0.8, 0.93, 0.87, 1, 1, 1, 'Benar'),
(121, 'Iqbal', 0.83, 0.74, 0.78, 0.84, 0.88, 0.83, 0.74, 0.78, 0.8, 0.72, 0, 1, 1, 'Benar'),
(122, 'Sahrul', 0.89, 0.88, 0.78, 0.82, 0.79, 0.84, 0.71, 0.75, 0.89, 0.88, 1, 1, 1, 'Benar'),
(123, 'Sri rahayu', 0.7, 0.69, 0.69, 0.58, 0.77, 0.69, 0.82, 0.73, 0.67, 0.66, 0, 1, 1, 'Benar'),
(124, 'Dimas rendy', 0.8, 0.83, 0.79, 0.83, 0.8, 0.82, 0.74, 0.7, 0.83, 0.82, 1, 1, 1, 'Benar'),
(125, 'Ahmad rifqi', 0.82, 0.88, 0.89, 0.83, 0.87, 0.85, 0.84, 0.8, 0.88, 0.73, 1, 1, 1, 'Benar'),
(126, 'Ahmad helmi', 0.7, 0.74, 0.77, 0.73, 0.8, 0.76, 0.71, 0.6, 0.74, 0.77, 0, 1, 1, 'Benar'),
(127, 'Santo', 0.89, 0.85, 0.88, 0.7, 0.78, 0.84, 0.78, 0.77, 0.84, 0.81, 1, 1, 1, 'Benar'),
(128, 'Joko', 0.78, 0.7, 0.78, 0.75, 0.7, 0.71, 0.67, 0.65, 0.78, 0.77, 1, 1, 1, 'Benar'),
(129, 'Krisna ', 0.82, 0.81, 0.85, 0.72, 0.74, 0.8, 0.8, 0.76, 0.84, 0.82, 1, 1, 1, 'Benar'),
(130, 'Fajar riski Ashari', 0.79, 0.83, 0.8, 0.83, 0.6, 0.8, 0.78, 0.79, 0.83, 0.84, 1, 1, 1, 'Benar'),
(131, 'Ahmad rozali', 0.75, 0.77, 0.72, 0.74, 0.71, 0.71, 0.63, 0.65, 0.77, 0.72, 0, 1, 1, 'Benar'),
(132, 'Fery febrianto', 0.89, 0.88, 0.83, 0.81, 0.83, 0.88, 0.72, 0.79, 0.9, 0.81, 1, 1, 1, 'Benar'),
(133, 'Nova aji', 0.81, 0.82, 0.8, 0.77, 0.75, 0.85, 0.81, 0.85, 0.83, 0.79, 0, 1, 1, 'Benar'),
(134, 'Ratejo putera', 0.91, 0.92, 0.88, 0.81, 0.85, 0.88, 0.91, 0.88, 0.94, 0.89, 1, 1, 1, 'Benar'),
(135, 'Annisa kusuma', 0.6, 0.64, 0.7, 0.61, 0.62, 0.58, 0.66, 0.61, 0.59, 0.6, 1, 0, 1, 'salah'),
(136, 'Sari wulandari', 0.6, 0.67, 0.72, 0.66, 0.62, 0.67, 0.6, 0.58, 0.55, 0.7, 0, 0, 0, 'Benar'),
(137, 'Khariyah ', 0.77, 0.71, 0.8, 0.82, 0.84, 0.78, 0.83, 0.82, 0.79, 0.71, 1, 1, 1, 'Benar'),
(138, 'M sabidin', 0.96, 0.8, 0.85, 0.87, 0.87, 0.81, 0.87, 0.88, 0.81, 0.8, 1, 1, 1, 'Benar'),
(139, 'Kurnia ardi', 0.83, 0.89, 0.7, 0.79, 0.8, 0.88, 0.81, 0.82, 0.88, 0.83, 1, 1, 1, 'Benar'),
(140, 'Adiba mahmoediyah ', 0.83, 0.88, 0.82, 0.81, 0.89, 0.83, 0.79, 0.78, 0.88, 0.73, 1, 1, 1, 'Benar'),
(141, 'Walyu hidayatullah ', 0.8, 0.83, 0.83, 0.8, 0.78, 0.82, 0.74, 0.72, 0.8, 0.8, 1, 1, 1, 'Benar'),
(142, 'Enggal titah ', 0.8, 0.74, 0.75, 0.77, 0.7, 0.74, 0.79, 0.73, 0.82, 0.75, 1, 1, 1, 'Benar'),
(143, 'Andi wijaya ', 0.88, 0.92, 0.91, 0.7, 0.83, 0.82, 0.84, 0.86, 0.85, 0.74, 1, 1, 1, 'Benar'),
(144, 'Ahmad mahgandi', 0.9, 0.92, 0.93, 0.88, 0.82, 0.9, 0.84, 0.82, 0.88, 0.81, 1, 1, 1, 'Benar'),
(145, 'Ferdiansyah', 0.7, 0.81, 0.82, 0.76, 0.73, 0.77, 0.71, 0.69, 0.75, 0.8, 1, 1, 1, 'Benar'),
(146, 'Suka bima kencana', 0.81, 0.8, 0.75, 0.72, 0.77, 0.8, 0.71, 0.75, 0.78, 0.77, 1, 1, 1, 'Benar'),
(147, 'Bimas nugroho', 0.76, 0.7, 0.75, 0.73, 0.68, 0.75, 0.73, 0.72, 0.76, 0.71, 1, 1, 1, 'Benar'),
(148, 'Vino wahyu', 0.73, 0.77, 0.72, 0.68, 0.7, 0.68, 0.71, 0.7, 0.73, 0.69, 1, 1, 1, 'Benar'),
(149, 'Munhamir hadzir', 0.64, 0.6, 0.7, 0.63, 0.6, 0.62, 0.61, 0.59, 0.66, 0.68, 0, 0, 0, 'Benar'),
(150, 'Bagas dani nugroho', 0.84, 0.7, 0.78, 0.83, 0.83, 0.8, 0.81, 0.78, 0.84, 0.74, 1, 1, 1, 'Benar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hasil_data`
--

CREATE TABLE IF NOT EXISTS `db_hasil_data` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `w1` double NOT NULL,
  `w2` double NOT NULL,
  `w3` double NOT NULL,
  `w4` double NOT NULL,
  `w5` double NOT NULL,
  `w6` double NOT NULL,
  `w7` double NOT NULL,
  `w8` double NOT NULL,
  `w9` double NOT NULL,
  `w10` double NOT NULL,
  `w11` double NOT NULL,
  `b` double NOT NULL,
  `epoh` int(200) NOT NULL,
  `hasil` double NOT NULL,
  `TP` int(100) NOT NULL,
  `TN` int(100) NOT NULL,
  `FP` int(100) NOT NULL,
  `FN` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `db_hasil_data`
--

INSERT INTO `db_hasil_data` (`ID`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `w11`, `b`, `epoh`, `hasil`, `TP`, `TN`, `FP`, `FN`) VALUES
(1, 0.0885, 0.0878, 0.0826, 0.0853, 0.0879, 0.0893, 0.0854, 0.0839, 0.0876, 0.0869, 0.07, 0.11, 100, 91.333333333333, 126, 11, 0, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hasil_data_testing`
--

CREATE TABLE IF NOT EXISTS `db_hasil_data_testing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `w1` double NOT NULL,
  `w2` double NOT NULL,
  `w3` double NOT NULL,
  `w4` double NOT NULL,
  `w5` double NOT NULL,
  `w6` double NOT NULL,
  `w7` double NOT NULL,
  `w8` double NOT NULL,
  `w9` double NOT NULL,
  `w10` double NOT NULL,
  `w11` double NOT NULL,
  `hasil` double NOT NULL,
  `TP` int(11) NOT NULL,
  `TN` int(11) NOT NULL,
  `FP` int(11) NOT NULL,
  `FN` int(11) NOT NULL,
  `epoh` int(11) NOT NULL,
  `b` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `db_hasil_data_testing`
--

INSERT INTO `db_hasil_data_testing` (`ID`, `w1`, `w2`, `w3`, `w4`, `w5`, `w6`, `w7`, `w8`, `w9`, `w10`, `w11`, `hasil`, `TP`, `TN`, `FP`, `FN`, `epoh`, `b`) VALUES
(1, 0.0885, 0.0878, 0.0826, 0.0853, 0.0879, 0.0893, 0.0854, 0.0839, 0.0876, 0.0869, 0.07, 95, 31, 7, 0, 2, 1, 0.11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_hasil_testing`
--

CREATE TABLE IF NOT EXISTS `db_hasil_testing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `data1` double NOT NULL,
  `data2` double NOT NULL,
  `data3` double NOT NULL,
  `data4` double NOT NULL,
  `data5` double NOT NULL,
  `data6` double NOT NULL,
  `data7` double NOT NULL,
  `data8` double NOT NULL,
  `data9` double NOT NULL,
  `data10` double NOT NULL,
  `data11` tinyint(4) NOT NULL,
  `target` tinyint(4) NOT NULL,
  `output` double NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `db_hasil_testing`
--

INSERT INTO `db_hasil_testing` (`ID`, `nama`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `target`, `output`, `status`) VALUES
(1, 'Yusuf Kamal M', 0.79, 0.8, 0.8, 0.91, 0.92, 0.9, 0.79, 0.81, 0.83, 0.79, 1, 1, 1, 'Benar'),
(2, 'Ahmad Helmi F', 0.81, 0.93, 0.9, 0.83, 0.81, 0.92, 0.8, 0.79, 0.9, 0.93, 1, 1, 1, 'Benar'),
(3, 'Nova Aji Saputra', 0.81, 0.93, 0.92, 0.84, 0.8, 0.94, 0.8, 0.78, 0.92, 0.92, 1, 1, 1, 'Benar'),
(4, 'Ahmad Rozak', 0.8, 0.92, 0.8, 0.8, 0.8, 0.8, 0.82, 0.8, 0.8, 0.8, 1, 1, 1, 'Benar'),
(5, 'Fajar Rizki ', 0.81, 0.91, 0.79, 0.79, 0.8, 0.94, 0.83, 0.63, 0.91, 0.82, 0, 1, 1, 'Benar'),
(6, 'Fery Febriyanto', 0.81, 0.89, 0.79, 0.79, 0.79, 0.93, 0.79, 0.82, 0.77, 0.79, 1, 1, 1, 'Benar'),
(7, 'Ratedjo Putro', 0.81, 0.88, 0.9, 0.77, 0.8, 0.8, 0.6, 0.88, 0.63, 0.76, 1, 1, 1, 'Benar'),
(8, 'Alif Izal Haqi', 0.79, 0.8, 0.8, 0.69, 0.8, 0.88, 0.8, 0.77, 0.9, 0.77, 0, 1, 1, 'Benar'),
(9, 'Syafiq ibrahim', 0.77, 0.9, 0.88, 0.66, 0.9, 0.79, 0.69, 0.9, 0.78, 0.81, 1, 1, 1, 'Benar'),
(10, 'Sarig greisma', 0.72, 0.88, 0.82, 0.79, 0.7, 0.66, 0.62, 0.6, 0.59, 0.74, 0, 0, 1, 'salah'),
(11, 'Shayul', 0.56, 0.7, 0.58, 0.7, 0.65, 0.61, 0.6, 0.58, 0.7, 0.71, 0, 0, 0, 'Benar'),
(12, 'Erika putri A', 0.6, 0.71, 0.74, 0.68, 0.79, 0.73, 0.77, 0.71, 0.7, 0.69, 1, 1, 1, 'Benar'),
(13, 'Ria reviana', 0.7, 0.74, 0.73, 0.78, 0.82, 0.77, 0.75, 0.7, 0.78, 0.75, 0, 1, 1, 'Benar'),
(14, 'T margianti', 0.8, 0.78, 0.82, 0.89, 0.85, 0.85, 0.79, 0.8, 0.83, 0.75, 1, 1, 1, 'Benar'),
(15, 'Sanie', 0.9, 0.93, 0.95, 0.84, 0.89, 0.83, 0.79, 0.84, 0.84, 0.81, 1, 1, 1, 'Benar'),
(16, 'Adi heri', 0.83, 0.85, 0.84, 0.8, 0.84, 0.8, 0.75, 0.75, 0.8, 0.82, 1, 1, 1, 'Benar'),
(17, 'Tomas', 0.78, 0.8, 0.89, 0.79, 0.77, 0.75, 0.83, 0.86, 0.88, 0.72, 1, 1, 1, 'Benar'),
(18, 'Bagas b', 0.7, 0.83, 0.84, 0.8, 0.75, 0.76, 0.85, 0.87, 0.8, 0.88, 1, 1, 1, 'Benar'),
(19, 'Adi heri s', 0.75, 0.69, 0.7, 0.7, 0.75, 0.76, 0.87, 0.81, 0.76, 0.84, 1, 1, 1, 'Benar'),
(20, 'Dimas rendi s', 0.7, 0.6, 0.62, 0.58, 0.56, 0.6, 0.71, 0.63, 0.6, 0.55, 0, 0, 0, 'Benar'),
(21, 'Husein kamal', 0.6, 0.6, 0.65, 0.5, 0.65, 0.7, 0.5, 0.55, 0.6, 0.65, 1, 0, 1, 'salah'),
(22, 'M ilham ainal', 0.7, 0.75, 0.75, 0.75, 0.65, 0.7, 0.75, 0.6, 0.7, 0.6, 1, 1, 1, 'Benar'),
(23, 'Melia diana', 0.7, 0.65, 0.7, 0.6, 0.75, 0.65, 0.7, 0.7, 0.65, 0.65, 0, 1, 1, 'Benar'),
(24, 'Rizki maulana', 0.9, 0.8, 0.85, 0.75, 0.8, 0.85, 0.75, 0.7, 0.85, 0.75, 1, 1, 1, 'Benar'),
(25, 'Diah novianti', 0.75, 0.8, 0.85, 0.7, 0.75, 0.7, 0.75, 0.7, 0.75, 0.7, 1, 1, 1, 'Benar'),
(26, 'Endah maulidah', 0.8, 0.85, 0.65, 0.75, 0.7, 0.65, 0.8, 0.8, 0.9, 0.85, 1, 1, 1, 'Benar'),
(27, 'Vinda nur f', 0.75, 0.65, 0.85, 0.65, 0.65, 0.7, 0.75, 0.7, 0.75, 0.6, 1, 1, 1, 'Benar'),
(28, 'Evi kurniasih', 0.7, 0.8, 0.8, 0.75, 0.75, 0.85, 0.65, 0.6, 0.7, 0.75, 1, 1, 1, 'Benar'),
(29, 'Rizqi nur afiyah', 0.7, 0.65, 0.6, 0.5, 0.55, 0.75, 0.6, 0.55, 0.8, 0.5, 0, 0, 0, 'Benar'),
(30, 'Puspita warih ayuningsih', 0.8, 0.8, 0.9, 0.8, 0.65, 0.85, 0.7, 0.7, 0.85, 0.8, 1, 1, 1, 'Benar'),
(31, 'Asyah wiwit mulyani', 0.6, 0.6, 0.55, 0.55, 0.55, 0.55, 0.55, 0.55, 0.5, 0.5, 0, 0, 0, 'Benar'),
(32, 'Mandani Ayu', 0.6, 0.55, 0.55, 0.6, 0.55, 0.55, 0.55, 0.55, 0.5, 0.5, 0, 0, 0, 'Benar'),
(33, 'Desi maya', 0.6, 0.6, 0.55, 0.5, 0.55, 0.5, 0.55, 0.5, 0.5, 0.5, 0, 0, 0, 'Benar'),
(34, 'Sri murni', 0.55, 0.6, 0.5, 0.55, 0.55, 0.5, 0.55, 0.55, 0.5, 0.5, 0, 0, 0, 'Benar'),
(35, 'Tomy haryanto', 0.7, 0.7, 0.85, 0.7, 0.65, 0.7, 0.8, 0.7, 0.6, 0.6, 1, 1, 1, 'Benar'),
(36, 'Abdul malik ', 0.8, 0.74, 0.79, 0.84, 0.74, 0.79, 0.83, 0.83, 0.78, 0.81, 1, 1, 1, 'Benar'),
(37, 'Tavit slamet ', 0.8, 0.7, 0.78, 0.8, 0.77, 0.79, 0.71, 0.74, 0.83, 0.79, 0, 1, 1, 'Benar'),
(38, 'Haris dermawan ', 0.93, 0.94, 0.89, 0.81, 0.84, 0.88, 0.81, 0.83, 0.88, 0.87, 1, 1, 1, 'Benar'),
(39, 'Aliv izzul haqi', 0.83, 0.79, 0.73, 0.88, 0.81, 0.85, 0.78, 0.77, 0.84, 0.8, 1, 1, 1, 'Benar'),
(40, 'Hidayat nur wahid', 0.83, 0.88, 0.87, 0.8, 0.83, 0.82, 0.77, 0.73, 0.87, 0.79, 1, 1, 1, 'Benar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_jabatan`
--

CREATE TABLE IF NOT EXISTS `db_jabatan` (
  `id_jabatan` int(50) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `db_jabatan`
--

INSERT INTO `db_jabatan` (`id_jabatan`, `jabatan`, `level`) VALUES
(1, 'Kepala Urusan Perencanaan dan Keuangan', 'Kepala Keuangan'),
(2, 'Bendahara Penerimaan', 'Bendahara'),
(3, 'Pengadministrasian Keuangan', 'administrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pegawai`
--

CREATE TABLE IF NOT EXISTS `db_pegawai` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `data1` int(100) NOT NULL,
  `data2` int(100) NOT NULL,
  `data3` int(100) NOT NULL,
  `data4` int(100) NOT NULL,
  `data5` int(100) NOT NULL,
  `data6` int(100) NOT NULL,
  `data7` int(100) NOT NULL,
  `data8` int(100) NOT NULL,
  `data9` int(100) NOT NULL,
  `data10` int(100) NOT NULL,
  `data11` int(1) DEFAULT NULL,
  `target` tinyint(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data untuk tabel `db_pegawai`
--

INSERT INTO `db_pegawai` (`ID`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `target`, `nama`) VALUES
(1, 91, 90, 90, 80, 80, 90, 80, 80, 92, 90, 1, 1, 'Tavit S.S'),
(2, 90, 87, 79, 80, 79, 91, 90, 89, 79, 81, 0, 1, 'Vino W.I'),
(3, 79, 83, 70, 79, 80, 83, 79, 78, 80, 79, 1, 1, 'Putri I.Z'),
(4, 80, 82, 80, 79, 78, 82, 80, 72, 76, 81, 1, 1, 'Munhamir N'),
(5, 79, 78, 78, 69, 81, 72, 61, 60, 91, 59, 1, 1, 'Abdul M.A'),
(6, 79, 82, 79, 81, 82, 90, 79, 80, 79, 83, 1, 1, 'Ahmad R.F'),
(7, 82, 79, 60, 69, 80, 79, 79, 80, 61, 91, 0, 1, 'Intan N'),
(8, 83, 79, 69, 81, 80, 90, 83, 79, 79, 80, 1, 1, 'Nada M.N'),
(9, 74, 78, 81, 83, 90, 79, 83, 80, 79, 76, 1, 1, 'Afiani S.B'),
(10, 70, 72, 69, 80, 69, 70, 70, 69, 60, 60, 0, 0, 'Kyesha Zhika H'),
(11, 80, 69, 79, 81, 93, 92, 90, 90, 82, 79, 1, 1, 'Arif Fatah Fauzan'),
(12, 83, 67, 90, 82, 90, 69, 67, 66, 83, 90, 1, 1, 'Nabil Ahksan Nu A'),
(13, 80, 79, 78, 70, 60, 60, 61, 63, 59, 74, 0, 0, 'Ilham risky N'),
(14, 79, 69, 80, 90, 93, 79, 92, 91, 81, 79, 1, 1, 'Thomas Setia Budi'),
(15, 81, 79, 83, 84, 91, 82, 80, 92, 79, 78, 1, 1, 'Gilang Fitriansah'),
(16, 91, 82, 83, 82, 92, 91, 91, 82, 90, 90, 0, 1, 'Farchan Anugrah'),
(17, 91, 82, 82, 83, 92, 91, 92, 81, 91, 90, 1, 1, 'Sandi Saputra'),
(18, 90, 89, 83, 79, 90, 93, 92, 83, 80, 90, 0, 1, 'Zidan H.R'),
(19, 81, 83, 90, 93, 79, 80, 93, 80, 90, 70, 1, 1, 'Muh Aska Aditya'),
(20, 79, 82, 71, 69, 66, 65, 51, 70, 59, 69, 0, 0, 'Muh Hafish Ulin Nuha'),
(21, 81, 80, 72, 80, 81, 82, 83, 92, 90, 69, 1, 1, 'Gunawan bimo N'),
(22, 79, 80, 72, 80, 82, 92, 89, 92, 82, 82, 1, 1, 'Sifa ibrahim'),
(23, 60, 62, 58, 61, 55, 59, 66, 62, 60, 71, 0, 0, 'Bagas Baskoro'),
(24, 89, 83, 88, 91, 79, 86, 72, 74, 87, 83, 1, 1, 'Saipul khakim'),
(25, 70, 78, 77, 76, 71, 76, 81, 73, 76, 71, 1, 1, 'Supriyatno'),
(26, 90, 79, 80, 81, 77, 82, 79, 80, 82, 78, 1, 1, 'Adi heri susanto'),
(27, 80, 85, 81, 86, 88, 82, 84, 82, 88, 81, 1, 1, 'M mapsha Aiman'),
(28, 82, 90, 93, 88, 89, 83, 82, 79, 82, 76, 1, 1, 'Amelia Restu cahya '),
(29, 73, 75, 80, 82, 74, 77, 80, 81, 80, 74, 0, 1, 'Retno wulan A. L '),
(30, 77, 78, 74, 72, 70, 75, 77, 76, 73, 60, 1, 1, 'Tanti winata putri'),
(31, 75, 70, 70, 70, 74, 72, 70, 72, 73, 77, 1, 1, 'Silviana solikhah'),
(32, 72, 65, 66, 71, 80, 70, 72, 68, 58, 66, 0, 0, 'Rizka amelia'),
(33, 80, 78, 79, 82, 84, 80, 78, 79, 75, 76, 1, 1, 'Winda sahara'),
(34, 78, 79, 75, 70, 72, 77, 80, 80, 75, 77, 1, 1, 'Krisna'),
(35, 80, 69, 88, 84, 79, 80, 78, 70, 83, 76, 1, 1, 'Joko tarunao'),
(36, 90, 89, 93, 86, 89, 88, 96, 92, 78, 79, 1, 1, 'Thomas'),
(37, 85, 82, 68, 65, 71, 79, 80, 75, 82, 79, 1, 1, 'Wardoyo'),
(38, 82, 90, 79, 85, 79, 88, 79, 80, 76, 80, 0, 1, 'Zainal'),
(39, 73, 74, 70, 68, 74, 79, 71, 70, 75, 80, 1, 1, 'Sonik'),
(40, 79, 70, 74, 76, 77, 75, 80, 74, 79, 82, 1, 1, 'Ageng prasojo'),
(41, 72, 83, 76, 70, 70, 64, 73, 66, 74, 71, 1, 1, 'Shinta diyah permatasari'),
(42, 93, 82, 79, 86, 77, 75, 81, 89, 83, 75, 1, 1, 'Dwi larasati'),
(43, 89, 92, 78, 93, 92, 82, 85, 87, 79, 89, 1, 1, 'Nur’aini'),
(44, 67, 56, 78, 66, 60, 62, 68, 57, 70, 62, 0, 0, 'Rangga dwi p'),
(45, 57, 62, 66, 72, 71, 58, 64, 60, 61, 70, 1, 0, 'Yanuar wildan'),
(46, 80, 80, 65, 60, 70, 60, 80, 70, 80, 90, 1, 1, 'Rizki indah wati'),
(47, 60, 65, 70, 60, 50, 55, 65, 65, 70, 65, 0, 0, 'Melinda fadyah zahra'),
(48, 75, 65, 60, 70, 75, 60, 60, 60, 80, 75, 0, 1, 'Selvia dewi sagita'),
(49, 65, 70, 65, 60, 70, 70, 75, 75, 70, 60, 0, 1, 'Deta kurniawati'),
(50, 80, 75, 70, 75, 65, 80, 65, 65, 75, 70, 1, 1, 'Dimas ilham satria'),
(51, 80, 80, 90, 70, 70, 80, 70, 60, 80, 80, 1, 1, 'Intan asyifa m'),
(52, 70, 65, 75, 60, 50, 65, 70, 70, 65, 60, 0, 0, 'Ullumi darmawan'),
(53, 85, 70, 80, 85, 65, 80, 70, 65, 85, 80, 1, 1, 'M irfan edowardo'),
(54, 70, 65, 75, 80, 85, 80, 65, 70, 70, 70, 0, 1, 'Candra pradana'),
(55, 65, 65, 70, 50, 60, 60, 70, 50, 70, 65, 1, 0, 'Haris dermawan'),
(56, 80, 70, 75, 60, 65, 60, 75, 70, 65, 60, 0, 1, 'Arum dwi nanda'),
(57, 70, 70, 75, 60, 75, 70, 60, 65, 70, 75, 1, 1, 'Hafid mustakim'),
(58, 60, 50, 80, 70, 65, 70, 65, 70, 70, 60, 1, 1, 'Rifki ardiansyah'),
(59, 70, 60, 70, 75, 65, 60, 70, 70, 65, 80, 1, 1, 'Mugi handayani'),
(60, 80, 75, 80, 80, 70, 80, 70, 75, 70, 75, 1, 1, 'Fadhilah alawiyah'),
(61, 80, 70, 70, 80, 80, 60, 70, 80, 80, 70, 1, 1, 'Alitan kasytila'),
(62, 70, 75, 60, 75, 70, 70, 75, 70, 80, 75, 1, 1, 'Rifki ilham A.S'),
(63, 80, 75, 80, 80, 80, 75, 80, 80, 100, 90, 1, 1, 'Setyo adi wicaksono'),
(64, 80, 80, 75, 75, 75, 80, 60, 60, 80, 70, 1, 1, 'Rozyid nur afianto'),
(65, 90, 90, 90, 90, 90, 100, 90, 90, 95, 80, 1, 1, 'Ardi pranoto'),
(66, 80, 70, 70, 70, 60, 50, 85, 65, 70, 70, 1, 1, 'Khairul umam'),
(67, 60, 55, 50, 65, 60, 60, 60, 60, 50, 60, 1, 0, 'Lukman'),
(68, 60, 70, 60, 65, 60, 50, 55, 55, 60, 55, 1, 0, 'Jamal'),
(69, 70, 70, 75, 80, 75, 75, 85, 65, 60, 65, 1, 1, 'Danu ilham'),
(70, 70, 70, 75, 75, 70, 80, 85, 70, 60, 60, 1, 1, 'Dana ilham'),
(71, 70, 60, 85, 80, 65, 70, 80, 80, 65, 60, 1, 1, 'Arrum atnindiya'),
(72, 70, 70, 70, 75, 70, 70, 60, 55, 70, 60, 1, 1, 'Lili Niara wati'),
(73, 60, 60, 60, 55, 50, 55, 55, 60, 60, 50, 0, 0, 'Restu'),
(74, 55, 50, 55, 50, 60, 50, 55, 55, 60, 50, 0, 0, 'Widya nur f'),
(75, 60, 56, 55, 50, 55, 50, 55, 50, 50, 50, 0, 0, 'Ratna'),
(76, 80, 60, 95, 60, 85, 60, 70, 80, 85, 60, 1, 1, 'Sofi farado'),
(77, 70, 60, 75, 60, 60, 80, 75, 60, 80, 65, 1, 1, 'Andri pradipta'),
(78, 90, 100, 90, 90, 100, 90, 90, 100, 90, 90, 1, 1, 'Ardy pranoto'),
(79, 60, 80, 65, 60, 60, 65, 60, 75, 65, 60, 1, 1, 'Tri prasetyo'),
(80, 70, 75, 60, 80, 65, 80, 65, 70, 60, 60, 0, 1, 'Dedi cipto prasetyo'),
(81, 70, 75, 70, 70, 75, 75, 70, 70, 70, 70, 1, 1, 'Fahmi riza'),
(82, 70, 75, 70, 60, 65, 80, 60, 85, 60, 60, 0, 1, 'Fahri azizi'),
(83, 70, 85, 70, 70, 65, 70, 65, 70, 65, 70, 0, 1, 'Danil ilhan'),
(84, 60, 70, 75, 60, 80, 75, 80, 60, 65, 70, 1, 1, 'Nuzia ufuk pangestika'),
(85, 60, 65, 85, 60, 60, 75, 80, 60, 80, 65, 1, 1, 'Septi arirusa'),
(86, 65, 85, 70, 60, 75, 65, 60, 60, 80, 65, 1, 1, 'Tri setio'),
(87, 60, 80, 75, 60, 60, 70, 60, 60, 60, 70, 0, 1, 'Laila khan'),
(88, 70, 65, 65, 85, 60, 60, 65, 80, 60, 60, 1, 1, 'Dedi kurniawan'),
(89, 65, 65, 70, 80, 80, 60, 60, 70, 70, 65, 1, 1, 'Fahri kurniawan'),
(90, 70, 70, 85, 75, 70, 70, 70, 75, 70, 75, 1, 1, 'Zulmi fathan'),
(91, 70, 70, 75, 75, 65, 70, 70, 70, 70, 70, 0, 1, 'Wahyu nurbakti'),
(92, 60, 55, 50, 60, 55, 50, 60, 55, 55, 50, 0, 0, 'Ulya w solihati'),
(93, 60, 55, 55, 55, 60, 55, 55, 55, 55, 50, 1, 0, 'Pungkas setiyo utomo'),
(94, 75, 70, 70, 75, 70, 70, 70, 75, 75, 70, 1, 1, 'Arif B setiawan'),
(95, 65, 70, 70, 85, 60, 70, 60, 60, 70, 60, 1, 1, 'Akhsan khilal n'),
(96, 60, 55, 55, 60, 55, 50, 50, 50, 50, 50, 0, 0, 'Afiatu rahma'),
(97, 70, 65, 65, 70, 65, 75, 65, 70, 70, 70, 1, 1, 'David fanyaldi'),
(98, 60, 75, 70, 70, 65, 70, 65, 60, 65, 65, 1, 1, 'Luluk prasetyo'),
(99, 65, 60, 65, 80, 60, 65, 60, 60, 65, 65, 0, 1, 'Dihlis intan putri'),
(100, 70, 70, 65, 70, 85, 70, 60, 75, 70, 65, 1, 1, 'Yogi'),
(101, 70, 65, 65, 70, 85, 65, 65, 75, 70, 70, 1, 1, 'Awang'),
(102, 80, 80, 75, 80, 75, 80, 80, 80, 80, 80, 1, 1, 'Arif muhanudin'),
(103, 60, 60, 55, 60, 55, 50, 55, 50, 55, 55, 0, 0, 'Indah'),
(104, 75, 70, 70, 75, 75, 70, 70, 75, 75, 75, 1, 1, 'Riskiono'),
(105, 75, 65, 74, 80, 77, 75, 80, 74, 80, 75, 1, 1, 'Lukman Haqim'),
(106, 64, 70, 70, 67, 60, 70, 68, 60, 70, 57, 1, 0, 'Nizar romadhoni s'),
(107, 70, 76, 80, 77, 87, 80, 75, 70, 85, 76, 1, 1, 'Bintang permana'),
(108, 77, 65, 73, 68, 70, 79, 77, 73, 84, 73, 1, 1, 'Kurnia ardiansyah'),
(109, 80, 73, 72, 56, 60, 80, 83, 76, 70, 65, 0, 1, 'Munawir'),
(110, 93, 83, 88, 87, 70, 86, 88, 83, 80, 76, 1, 1, 'Puput sri wulandari'),
(111, 80, 83, 75, 70, 77, 74, 72, 70, 80, 72, 1, 1, 'Wahyudin'),
(112, 90, 70, 80, 83, 77, 83, 74, 70, 80, 82, 1, 1, 'Wildan'),
(113, 82, 73, 76, 82, 73, 83, 77, 70, 84, 77, 0, 1, 'Wahyu'),
(114, 84, 89, 75, 70, 73, 84, 88, 80, 96, 70, 1, 1, 'Safri dedi k'),
(115, 70, 64, 69, 63, 77, 64, 73, 72, 65, 73, 0, 0, 'Jusa '),
(116, 85, 73, 77, 84, 86, 79, 82, 75, 80, 73, 1, 1, 'Afit'),
(117, 84, 89, 88, 78, 79, 88, 83, 80, 89, 90, 1, 1, 'Irvan'),
(118, 90, 89, 78, 87, 77, 89, 88, 82, 94, 78, 1, 1, 'Amir '),
(119, 83, 78, 77, 73, 78, 80, 75, 78, 80, 78, 1, 1, 'Bagas'),
(120, 95, 89, 87, 93, 88, 94, 78, 80, 93, 87, 1, 1, 'Fikri '),
(121, 83, 74, 78, 84, 88, 83, 74, 78, 80, 72, 0, 1, 'Iqbal'),
(122, 89, 88, 78, 82, 79, 84, 71, 75, 89, 88, 1, 1, 'Sahrul'),
(123, 70, 69, 69, 58, 77, 69, 82, 73, 67, 66, 0, 1, 'Sri rahayu'),
(124, 80, 83, 79, 83, 80, 82, 74, 70, 83, 82, 1, 1, 'Dimas rendy'),
(125, 82, 88, 89, 83, 87, 85, 84, 80, 88, 73, 1, 1, 'Ahmad rifqi'),
(126, 70, 74, 77, 73, 80, 76, 71, 60, 74, 77, 0, 1, 'Ahmad helmi'),
(127, 89, 85, 88, 70, 78, 84, 78, 77, 84, 81, 1, 1, 'Santo'),
(128, 78, 70, 78, 75, 70, 71, 67, 65, 78, 77, 1, 1, 'Joko'),
(129, 82, 81, 85, 72, 74, 80, 80, 76, 84, 82, 1, 1, 'Krisna '),
(130, 79, 83, 80, 83, 60, 80, 78, 79, 83, 84, 1, 1, 'Fajar riski Ashari'),
(131, 75, 77, 72, 74, 71, 71, 63, 65, 77, 72, 0, 1, 'Ahmad rozali'),
(132, 89, 88, 83, 81, 83, 88, 72, 79, 90, 81, 1, 1, 'Fery febrianto'),
(133, 81, 82, 80, 77, 75, 85, 81, 85, 83, 79, 0, 1, 'Nova aji'),
(134, 91, 92, 88, 81, 85, 88, 91, 88, 94, 89, 1, 1, 'Ratejo putera'),
(135, 60, 64, 70, 61, 62, 58, 66, 61, 59, 60, 1, 0, 'Annisa kusuma'),
(136, 60, 67, 72, 66, 62, 67, 60, 58, 55, 70, 0, 0, 'Sari wulandari'),
(137, 77, 71, 80, 82, 84, 78, 83, 82, 79, 71, 1, 1, 'Khariyah '),
(138, 96, 80, 85, 87, 87, 81, 87, 88, 81, 80, 1, 1, 'M sabidin'),
(139, 83, 89, 70, 79, 80, 88, 81, 82, 88, 83, 1, 1, 'Kurnia ardi'),
(140, 83, 88, 82, 81, 89, 83, 79, 78, 88, 73, 1, 1, 'Adiba mahmoediyah '),
(141, 80, 83, 83, 80, 78, 82, 74, 72, 80, 80, 1, 1, 'Walyu hidayatullah '),
(142, 80, 74, 75, 77, 70, 74, 79, 73, 82, 75, 1, 1, 'Enggal titah '),
(143, 88, 92, 91, 70, 83, 82, 84, 86, 85, 74, 1, 1, 'Andi wijaya '),
(144, 90, 92, 93, 88, 82, 90, 84, 82, 88, 81, 1, 1, 'Ahmad mahgandi'),
(145, 70, 81, 82, 76, 73, 77, 71, 69, 75, 80, 1, 1, 'Ferdiansyah'),
(146, 81, 80, 75, 72, 77, 80, 71, 75, 78, 77, 1, 1, 'Suka bima kencana'),
(147, 76, 70, 75, 73, 68, 75, 73, 72, 76, 71, 1, 1, 'Bimas nugroho'),
(148, 73, 77, 72, 68, 70, 68, 71, 70, 73, 69, 1, 1, 'Vino wahyu'),
(149, 64, 60, 70, 63, 60, 62, 61, 59, 66, 68, 0, 0, 'Munhamir hadzir'),
(150, 84, 70, 78, 83, 83, 80, 81, 78, 84, 74, 1, 1, 'Bagas dani nugroho');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_prepocessing`
--

CREATE TABLE IF NOT EXISTS `db_prepocessing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `data1` double NOT NULL,
  `data2` double NOT NULL,
  `data3` double NOT NULL,
  `data4` double NOT NULL,
  `data5` double NOT NULL,
  `data6` double NOT NULL,
  `data7` double NOT NULL,
  `data8` double NOT NULL,
  `data9` double NOT NULL,
  `data10` double NOT NULL,
  `data11` double NOT NULL,
  `target` double NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data untuk tabel `db_prepocessing`
--

INSERT INTO `db_prepocessing` (`ID`, `nama`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `target`) VALUES
(1, 'Tavit S.S', 0.91, 0.9, 0.9, 0.8, 0.8, 0.9, 0.8, 0.8, 0.92, 0.9, 1, 1),
(2, 'Vino W.I', 0.9, 0.87, 0.79, 0.8, 0.79, 0.91, 0.9, 0.89, 0.79, 0.81, 0, 1),
(3, 'Putri I.Z', 0.79, 0.83, 0.7, 0.79, 0.8, 0.83, 0.79, 0.78, 0.8, 0.79, 1, 1),
(4, 'Munhamir N', 0.8, 0.82, 0.8, 0.79, 0.78, 0.82, 0.8, 0.72, 0.76, 0.81, 1, 1),
(5, 'Abdul M.A', 0.79, 0.78, 0.78, 0.69, 0.81, 0.72, 0.61, 0.6, 0.91, 0.59, 1, 1),
(6, 'Ahmad R.F', 0.79, 0.82, 0.79, 0.81, 0.82, 0.9, 0.79, 0.8, 0.79, 0.83, 1, 1),
(7, 'Intan N', 0.82, 0.79, 0.6, 0.69, 0.8, 0.79, 0.79, 0.8, 0.61, 0.91, 0, 1),
(8, 'Nada M.N', 0.83, 0.79, 0.69, 0.81, 0.8, 0.9, 0.83, 0.79, 0.79, 0.8, 1, 1),
(9, 'Afiani S.B', 0.74, 0.78, 0.81, 0.83, 0.9, 0.79, 0.83, 0.8, 0.79, 0.76, 1, 1),
(10, 'Kyesha Zhika H', 0.7, 0.72, 0.69, 0.8, 0.69, 0.7, 0.7, 0.69, 0.6, 0.6, 0, 0),
(11, 'Arif Fatah Fauzan', 0.8, 0.69, 0.79, 0.81, 0.93, 0.92, 0.9, 0.9, 0.82, 0.79, 1, 1),
(12, 'Nabil Ahksan Nu A', 0.83, 0.67, 0.9, 0.82, 0.9, 0.69, 0.67, 0.66, 0.83, 0.9, 1, 1),
(13, 'Ilham risky N', 0.8, 0.79, 0.78, 0.7, 0.6, 0.6, 0.61, 0.63, 0.59, 0.74, 0, 0),
(14, 'Thomas Setia Budi', 0.79, 0.69, 0.8, 0.9, 0.93, 0.79, 0.92, 0.91, 0.81, 0.79, 1, 1),
(15, 'Gilang Fitriansah', 0.81, 0.79, 0.83, 0.84, 0.91, 0.82, 0.8, 0.92, 0.79, 0.78, 1, 1),
(16, 'Farchan Anugrah', 0.91, 0.82, 0.83, 0.82, 0.92, 0.91, 0.91, 0.82, 0.9, 0.9, 0, 1),
(17, 'Sandi Saputra', 0.91, 0.82, 0.82, 0.83, 0.92, 0.91, 0.92, 0.81, 0.91, 0.9, 1, 1),
(18, 'Zidan H.R', 0.9, 0.89, 0.83, 0.79, 0.9, 0.93, 0.92, 0.83, 0.8, 0.9, 0, 1),
(19, 'Muh Aska Aditya', 0.81, 0.83, 0.9, 0.93, 0.79, 0.8, 0.93, 0.8, 0.9, 0.7, 1, 1),
(20, 'Muh Hafish Ulin Nuha', 0.79, 0.82, 0.71, 0.69, 0.66, 0.65, 0.51, 0.7, 0.59, 0.69, 0, 0),
(21, 'Gunawan bimo N', 0.81, 0.8, 0.72, 0.8, 0.81, 0.82, 0.83, 0.92, 0.9, 0.69, 1, 1),
(22, 'Sifa ibrahim', 0.79, 0.8, 0.72, 0.8, 0.82, 0.92, 0.89, 0.92, 0.82, 0.82, 1, 1),
(23, 'Bagas Baskoro', 0.6, 0.62, 0.58, 0.61, 0.55, 0.59, 0.66, 0.62, 0.6, 0.71, 0, 0),
(24, 'Saipul khakim', 0.89, 0.83, 0.88, 0.91, 0.79, 0.86, 0.72, 0.74, 0.87, 0.83, 1, 1),
(25, 'Supriyatno', 0.7, 0.78, 0.77, 0.76, 0.71, 0.76, 0.81, 0.73, 0.76, 0.71, 1, 1),
(26, 'Adi heri susanto', 0.9, 0.79, 0.8, 0.81, 0.77, 0.82, 0.79, 0.8, 0.82, 0.78, 1, 1),
(27, 'M mapsha Aiman', 0.8, 0.85, 0.81, 0.86, 0.88, 0.82, 0.84, 0.82, 0.88, 0.81, 1, 1),
(28, 'Amelia Restu cahya ', 0.82, 0.9, 0.93, 0.88, 0.89, 0.83, 0.82, 0.79, 0.82, 0.76, 1, 1),
(29, 'Retno wulan A. L ', 0.73, 0.75, 0.8, 0.82, 0.74, 0.77, 0.8, 0.81, 0.8, 0.74, 0, 1),
(30, 'Tanti winata putri', 0.77, 0.78, 0.74, 0.72, 0.7, 0.75, 0.77, 0.76, 0.73, 0.6, 1, 1),
(31, 'Silviana solikhah', 0.75, 0.7, 0.7, 0.7, 0.74, 0.72, 0.7, 0.72, 0.73, 0.77, 1, 1),
(32, 'Rizka amelia', 0.72, 0.65, 0.66, 0.71, 0.8, 0.7, 0.72, 0.68, 0.58, 0.66, 0, 0),
(33, 'Winda sahara', 0.8, 0.78, 0.79, 0.82, 0.84, 0.8, 0.78, 0.79, 0.75, 0.76, 1, 1),
(34, 'Krisna', 0.78, 0.79, 0.75, 0.7, 0.72, 0.77, 0.8, 0.8, 0.75, 0.77, 1, 1),
(35, 'Joko tarunao', 0.8, 0.69, 0.88, 0.84, 0.79, 0.8, 0.78, 0.7, 0.83, 0.76, 1, 1),
(36, 'Thomas', 0.9, 0.89, 0.93, 0.86, 0.89, 0.88, 0.96, 0.92, 0.78, 0.79, 1, 1),
(37, 'Wardoyo', 0.85, 0.82, 0.68, 0.65, 0.71, 0.79, 0.8, 0.75, 0.82, 0.79, 1, 1),
(38, 'Zainal', 0.82, 0.9, 0.79, 0.85, 0.79, 0.88, 0.79, 0.8, 0.76, 0.8, 0, 1),
(39, 'Sonik', 0.73, 0.74, 0.7, 0.68, 0.74, 0.79, 0.71, 0.7, 0.75, 0.8, 1, 1),
(40, 'Ageng prasojo', 0.79, 0.7, 0.74, 0.76, 0.77, 0.75, 0.8, 0.74, 0.79, 0.82, 1, 1),
(41, 'Shinta diyah permatasari', 0.72, 0.83, 0.76, 0.7, 0.7, 0.64, 0.73, 0.66, 0.74, 0.71, 1, 1),
(42, 'Dwi larasati', 0.93, 0.82, 0.79, 0.86, 0.77, 0.75, 0.81, 0.89, 0.83, 0.75, 1, 1),
(43, 'Nur’aini', 0.89, 0.92, 0.78, 0.93, 0.92, 0.82, 0.85, 0.87, 0.79, 0.89, 1, 1),
(44, 'Rangga dwi p', 0.67, 0.56, 0.78, 0.66, 0.6, 0.62, 0.68, 0.57, 0.7, 0.62, 0, 0),
(45, 'Yanuar wildan', 0.57, 0.62, 0.66, 0.72, 0.71, 0.58, 0.64, 0.6, 0.61, 0.7, 1, 0),
(46, 'Rizki indah wati', 0.8, 0.8, 0.65, 0.6, 0.7, 0.6, 0.8, 0.7, 0.8, 0.9, 1, 1),
(47, 'Melinda fadyah zahra', 0.6, 0.65, 0.7, 0.6, 0.5, 0.55, 0.65, 0.65, 0.7, 0.65, 0, 0),
(48, 'Selvia dewi sagita', 0.75, 0.65, 0.6, 0.7, 0.75, 0.6, 0.6, 0.6, 0.8, 0.75, 0, 1),
(49, 'Deta kurniawati', 0.65, 0.7, 0.65, 0.6, 0.7, 0.7, 0.75, 0.75, 0.7, 0.6, 0, 1),
(50, 'Dimas ilham satria', 0.8, 0.75, 0.7, 0.75, 0.65, 0.8, 0.65, 0.65, 0.75, 0.7, 1, 1),
(51, 'Intan asyifa m', 0.8, 0.8, 0.9, 0.7, 0.7, 0.8, 0.7, 0.6, 0.8, 0.8, 1, 1),
(52, 'Ullumi darmawan', 0.7, 0.65, 0.75, 0.6, 0.5, 0.65, 0.7, 0.7, 0.65, 0.6, 0, 0),
(53, 'M irfan edowardo', 0.85, 0.7, 0.8, 0.85, 0.65, 0.8, 0.7, 0.65, 0.85, 0.8, 1, 1),
(54, 'Candra pradana', 0.7, 0.65, 0.75, 0.8, 0.85, 0.8, 0.65, 0.7, 0.7, 0.7, 0, 1),
(55, 'Haris dermawan', 0.65, 0.65, 0.7, 0.5, 0.6, 0.6, 0.7, 0.5, 0.7, 0.65, 1, 0),
(56, 'Arum dwi nanda', 0.8, 0.7, 0.75, 0.6, 0.65, 0.6, 0.75, 0.7, 0.65, 0.6, 0, 1),
(57, 'Hafid mustakim', 0.7, 0.7, 0.75, 0.6, 0.75, 0.7, 0.6, 0.65, 0.7, 0.75, 1, 1),
(58, 'Rifki ardiansyah', 0.6, 0.5, 0.8, 0.7, 0.65, 0.7, 0.65, 0.7, 0.7, 0.6, 1, 1),
(59, 'Mugi handayani', 0.7, 0.6, 0.7, 0.75, 0.65, 0.6, 0.7, 0.7, 0.65, 0.8, 1, 1),
(60, 'Fadhilah alawiyah', 0.8, 0.75, 0.8, 0.8, 0.7, 0.8, 0.7, 0.75, 0.7, 0.75, 1, 1),
(61, 'Alitan kasytila', 0.8, 0.7, 0.7, 0.8, 0.8, 0.6, 0.7, 0.8, 0.8, 0.7, 1, 1),
(62, 'Rifki ilham A.S', 0.7, 0.75, 0.6, 0.75, 0.7, 0.7, 0.75, 0.7, 0.8, 0.75, 1, 1),
(63, 'Setyo adi wicaksono', 0.8, 0.75, 0.8, 0.8, 0.8, 0.75, 0.8, 0.8, 1, 0.9, 1, 1),
(64, 'Rozyid nur afianto', 0.8, 0.8, 0.75, 0.75, 0.75, 0.8, 0.6, 0.6, 0.8, 0.7, 1, 1),
(65, 'Ardi pranoto', 0.9, 0.9, 0.9, 0.9, 0.9, 1, 0.9, 0.9, 0.95, 0.8, 1, 1),
(66, 'Khairul umam', 0.8, 0.7, 0.7, 0.7, 0.6, 0.5, 0.85, 0.65, 0.7, 0.7, 1, 1),
(67, 'Lukman', 0.6, 0.55, 0.5, 0.65, 0.6, 0.6, 0.6, 0.6, 0.5, 0.6, 1, 0),
(68, 'Jamal', 0.6, 0.7, 0.6, 0.65, 0.6, 0.5, 0.55, 0.55, 0.6, 0.55, 1, 0),
(69, 'Danu ilham', 0.7, 0.7, 0.75, 0.8, 0.75, 0.75, 0.85, 0.65, 0.6, 0.65, 1, 1),
(70, 'Dana ilham', 0.7, 0.7, 0.75, 0.75, 0.7, 0.8, 0.85, 0.7, 0.6, 0.6, 1, 1),
(71, 'Arrum atnindiya', 0.7, 0.6, 0.85, 0.8, 0.65, 0.7, 0.8, 0.8, 0.65, 0.6, 1, 1),
(72, 'Lili Niara wati', 0.7, 0.7, 0.7, 0.75, 0.7, 0.7, 0.6, 0.55, 0.7, 0.6, 1, 1),
(73, 'Restu', 0.6, 0.6, 0.6, 0.55, 0.5, 0.55, 0.55, 0.6, 0.6, 0.5, 0, 0),
(74, 'Widya nur f', 0.55, 0.5, 0.55, 0.5, 0.6, 0.5, 0.55, 0.55, 0.6, 0.5, 0, 0),
(75, 'Ratna', 0.6, 0.56, 0.55, 0.5, 0.55, 0.5, 0.55, 0.5, 0.5, 0.5, 0, 0),
(76, 'Sofi farado', 0.8, 0.6, 0.95, 0.6, 0.85, 0.6, 0.7, 0.8, 0.85, 0.6, 1, 1),
(77, 'Andri pradipta', 0.7, 0.6, 0.75, 0.6, 0.6, 0.8, 0.75, 0.6, 0.8, 0.65, 1, 1),
(78, 'Ardy pranoto', 0.9, 1, 0.9, 0.9, 1, 0.9, 0.9, 1, 0.9, 0.9, 1, 1),
(79, 'Tri prasetyo', 0.6, 0.8, 0.65, 0.6, 0.6, 0.65, 0.6, 0.75, 0.65, 0.6, 1, 1),
(80, 'Dedi cipto prasetyo', 0.7, 0.75, 0.6, 0.8, 0.65, 0.8, 0.65, 0.7, 0.6, 0.6, 0, 1),
(81, 'Fahmi riza', 0.7, 0.75, 0.7, 0.7, 0.75, 0.75, 0.7, 0.7, 0.7, 0.7, 1, 1),
(82, 'Fahri azizi', 0.7, 0.75, 0.7, 0.6, 0.65, 0.8, 0.6, 0.85, 0.6, 0.6, 0, 1),
(83, 'Danil ilhan', 0.7, 0.85, 0.7, 0.7, 0.65, 0.7, 0.65, 0.7, 0.65, 0.7, 0, 1),
(84, 'Nuzia ufuk pangestika', 0.6, 0.7, 0.75, 0.6, 0.8, 0.75, 0.8, 0.6, 0.65, 0.7, 1, 1),
(85, 'Septi arirusa', 0.6, 0.65, 0.85, 0.6, 0.6, 0.75, 0.8, 0.6, 0.8, 0.65, 1, 1),
(86, 'Tri setio', 0.65, 0.85, 0.7, 0.6, 0.75, 0.65, 0.6, 0.6, 0.8, 0.65, 1, 1),
(87, 'Laila khan', 0.6, 0.8, 0.75, 0.6, 0.6, 0.7, 0.6, 0.6, 0.6, 0.7, 0, 1),
(88, 'Dedi kurniawan', 0.7, 0.65, 0.65, 0.85, 0.6, 0.6, 0.65, 0.8, 0.6, 0.6, 1, 1),
(89, 'Fahri kurniawan', 0.65, 0.65, 0.7, 0.8, 0.8, 0.6, 0.6, 0.7, 0.7, 0.65, 1, 1),
(90, 'Zulmi fathan', 0.7, 0.7, 0.85, 0.75, 0.7, 0.7, 0.7, 0.75, 0.7, 0.75, 1, 1),
(91, 'Wahyu nurbakti', 0.7, 0.7, 0.75, 0.75, 0.65, 0.7, 0.7, 0.7, 0.7, 0.7, 0, 1),
(92, 'Ulya w solihati', 0.6, 0.55, 0.5, 0.6, 0.55, 0.5, 0.6, 0.55, 0.55, 0.5, 0, 0),
(93, 'Pungkas setiyo utomo', 0.6, 0.55, 0.55, 0.55, 0.6, 0.55, 0.55, 0.55, 0.55, 0.5, 1, 0),
(94, 'Arif B setiawan', 0.75, 0.7, 0.7, 0.75, 0.7, 0.7, 0.7, 0.75, 0.75, 0.7, 1, 1),
(95, 'Akhsan khilal n', 0.65, 0.7, 0.7, 0.85, 0.6, 0.7, 0.6, 0.6, 0.7, 0.6, 1, 1),
(96, 'Afiatu rahma', 0.6, 0.55, 0.55, 0.6, 0.55, 0.5, 0.5, 0.5, 0.5, 0.5, 0, 0),
(97, 'David fanyaldi', 0.7, 0.65, 0.65, 0.7, 0.65, 0.75, 0.65, 0.7, 0.7, 0.7, 1, 1),
(98, 'Luluk prasetyo', 0.6, 0.75, 0.7, 0.7, 0.65, 0.7, 0.65, 0.6, 0.65, 0.65, 1, 1),
(99, 'Dihlis intan putri', 0.65, 0.6, 0.65, 0.8, 0.6, 0.65, 0.6, 0.6, 0.65, 0.65, 0, 1),
(100, 'Yogi', 0.7, 0.7, 0.65, 0.7, 0.85, 0.7, 0.6, 0.75, 0.7, 0.65, 1, 1),
(101, 'Awang', 0.7, 0.65, 0.65, 0.7, 0.85, 0.65, 0.65, 0.75, 0.7, 0.7, 1, 1),
(102, 'Arif muhanudin', 0.8, 0.8, 0.75, 0.8, 0.75, 0.8, 0.8, 0.8, 0.8, 0.8, 1, 1),
(103, 'Indah', 0.6, 0.6, 0.55, 0.6, 0.55, 0.5, 0.55, 0.5, 0.55, 0.55, 0, 0),
(104, 'Riskiono', 0.75, 0.7, 0.7, 0.75, 0.75, 0.7, 0.7, 0.75, 0.75, 0.75, 1, 1),
(105, 'Lukman Haqim', 0.75, 0.65, 0.74, 0.8, 0.77, 0.75, 0.8, 0.74, 0.8, 0.75, 1, 1),
(106, 'Nizar romadhoni s', 0.64, 0.7, 0.7, 0.67, 0.6, 0.7, 0.68, 0.6, 0.7, 0.57, 1, 0),
(107, 'Bintang permana', 0.7, 0.76, 0.8, 0.77, 0.87, 0.8, 0.75, 0.7, 0.85, 0.76, 1, 1),
(108, 'Kurnia ardiansyah', 0.77, 0.65, 0.73, 0.68, 0.7, 0.79, 0.77, 0.73, 0.84, 0.73, 1, 1),
(109, 'Munawir', 0.8, 0.73, 0.72, 0.56, 0.6, 0.8, 0.83, 0.76, 0.7, 0.65, 0, 1),
(110, 'Puput sri wulandari', 0.93, 0.83, 0.88, 0.87, 0.7, 0.86, 0.88, 0.83, 0.8, 0.76, 1, 1),
(111, 'Wahyudin', 0.8, 0.83, 0.75, 0.7, 0.77, 0.74, 0.72, 0.7, 0.8, 0.72, 1, 1),
(112, 'Wildan', 0.9, 0.7, 0.8, 0.83, 0.77, 0.83, 0.74, 0.7, 0.8, 0.82, 1, 1),
(113, 'Wahyu', 0.82, 0.73, 0.76, 0.82, 0.73, 0.83, 0.77, 0.7, 0.84, 0.77, 0, 1),
(114, 'Safri dedi k', 0.84, 0.89, 0.75, 0.7, 0.73, 0.84, 0.88, 0.8, 0.96, 0.7, 1, 1),
(115, 'Jusa ', 0.7, 0.64, 0.69, 0.63, 0.77, 0.64, 0.73, 0.72, 0.65, 0.73, 0, 0),
(116, 'Afit', 0.85, 0.73, 0.77, 0.84, 0.86, 0.79, 0.82, 0.75, 0.8, 0.73, 1, 1),
(117, 'Irvan', 0.84, 0.89, 0.88, 0.78, 0.79, 0.88, 0.83, 0.8, 0.89, 0.9, 1, 1),
(118, 'Amir ', 0.9, 0.89, 0.78, 0.87, 0.77, 0.89, 0.88, 0.82, 0.94, 0.78, 1, 1),
(119, 'Bagas', 0.83, 0.78, 0.77, 0.73, 0.78, 0.8, 0.75, 0.78, 0.8, 0.78, 1, 1),
(120, 'Fikri ', 0.95, 0.89, 0.87, 0.93, 0.88, 0.94, 0.78, 0.8, 0.93, 0.87, 1, 1),
(121, 'Iqbal', 0.83, 0.74, 0.78, 0.84, 0.88, 0.83, 0.74, 0.78, 0.8, 0.72, 0, 1),
(122, 'Sahrul', 0.89, 0.88, 0.78, 0.82, 0.79, 0.84, 0.71, 0.75, 0.89, 0.88, 1, 1),
(123, 'Sri rahayu', 0.7, 0.69, 0.69, 0.58, 0.77, 0.69, 0.82, 0.73, 0.67, 0.66, 0, 1),
(124, 'Dimas rendy', 0.8, 0.83, 0.79, 0.83, 0.8, 0.82, 0.74, 0.7, 0.83, 0.82, 1, 1),
(125, 'Ahmad rifqi', 0.82, 0.88, 0.89, 0.83, 0.87, 0.85, 0.84, 0.8, 0.88, 0.73, 1, 1),
(126, 'Ahmad helmi', 0.7, 0.74, 0.77, 0.73, 0.8, 0.76, 0.71, 0.6, 0.74, 0.77, 0, 1),
(127, 'Santo', 0.89, 0.85, 0.88, 0.7, 0.78, 0.84, 0.78, 0.77, 0.84, 0.81, 1, 1),
(128, 'Joko', 0.78, 0.7, 0.78, 0.75, 0.7, 0.71, 0.67, 0.65, 0.78, 0.77, 1, 1),
(129, 'Krisna ', 0.82, 0.81, 0.85, 0.72, 0.74, 0.8, 0.8, 0.76, 0.84, 0.82, 1, 1),
(130, 'Fajar riski Ashari', 0.79, 0.83, 0.8, 0.83, 0.6, 0.8, 0.78, 0.79, 0.83, 0.84, 1, 1),
(131, 'Ahmad rozali', 0.75, 0.77, 0.72, 0.74, 0.71, 0.71, 0.63, 0.65, 0.77, 0.72, 0, 1),
(132, 'Fery febrianto', 0.89, 0.88, 0.83, 0.81, 0.83, 0.88, 0.72, 0.79, 0.9, 0.81, 1, 1),
(133, 'Nova aji', 0.81, 0.82, 0.8, 0.77, 0.75, 0.85, 0.81, 0.85, 0.83, 0.79, 0, 1),
(134, 'Ratejo putera', 0.91, 0.92, 0.88, 0.81, 0.85, 0.88, 0.91, 0.88, 0.94, 0.89, 1, 1),
(135, 'Annisa kusuma', 0.6, 0.64, 0.7, 0.61, 0.62, 0.58, 0.66, 0.61, 0.59, 0.6, 1, 0),
(136, 'Sari wulandari', 0.6, 0.67, 0.72, 0.66, 0.62, 0.67, 0.6, 0.58, 0.55, 0.7, 0, 0),
(137, 'Khariyah ', 0.77, 0.71, 0.8, 0.82, 0.84, 0.78, 0.83, 0.82, 0.79, 0.71, 1, 1),
(138, 'M sabidin', 0.96, 0.8, 0.85, 0.87, 0.87, 0.81, 0.87, 0.88, 0.81, 0.8, 1, 1),
(139, 'Kurnia ardi', 0.83, 0.89, 0.7, 0.79, 0.8, 0.88, 0.81, 0.82, 0.88, 0.83, 1, 1),
(140, 'Adiba mahmoediyah ', 0.83, 0.88, 0.82, 0.81, 0.89, 0.83, 0.79, 0.78, 0.88, 0.73, 1, 1),
(141, 'Walyu hidayatullah ', 0.8, 0.83, 0.83, 0.8, 0.78, 0.82, 0.74, 0.72, 0.8, 0.8, 1, 1),
(142, 'Enggal titah ', 0.8, 0.74, 0.75, 0.77, 0.7, 0.74, 0.79, 0.73, 0.82, 0.75, 1, 1),
(143, 'Andi wijaya ', 0.88, 0.92, 0.91, 0.7, 0.83, 0.82, 0.84, 0.86, 0.85, 0.74, 1, 1),
(144, 'Ahmad mahgandi', 0.9, 0.92, 0.93, 0.88, 0.82, 0.9, 0.84, 0.82, 0.88, 0.81, 1, 1),
(145, 'Ferdiansyah', 0.7, 0.81, 0.82, 0.76, 0.73, 0.77, 0.71, 0.69, 0.75, 0.8, 1, 1),
(146, 'Suka bima kencana', 0.81, 0.8, 0.75, 0.72, 0.77, 0.8, 0.71, 0.75, 0.78, 0.77, 1, 1),
(147, 'Bimas nugroho', 0.76, 0.7, 0.75, 0.73, 0.68, 0.75, 0.73, 0.72, 0.76, 0.71, 1, 1),
(148, 'Vino wahyu', 0.73, 0.77, 0.72, 0.68, 0.7, 0.68, 0.71, 0.7, 0.73, 0.69, 1, 1),
(149, 'Munhamir hadzir', 0.64, 0.6, 0.7, 0.63, 0.6, 0.62, 0.61, 0.59, 0.66, 0.68, 0, 0),
(150, 'Bagas dani nugroho', 0.84, 0.7, 0.78, 0.83, 0.83, 0.8, 0.81, 0.78, 0.84, 0.74, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_prepocessing_testing`
--

CREATE TABLE IF NOT EXISTS `db_prepocessing_testing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `data1` double NOT NULL,
  `data2` double NOT NULL,
  `data3` double NOT NULL,
  `data4` double NOT NULL,
  `data5` double NOT NULL,
  `data6` double NOT NULL,
  `data7` double NOT NULL,
  `data8` double NOT NULL,
  `data9` double NOT NULL,
  `data10` double NOT NULL,
  `data11` tinyint(4) NOT NULL,
  `target` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data untuk tabel `db_prepocessing_testing`
--

INSERT INTO `db_prepocessing_testing` (`ID`, `nama`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `target`) VALUES
(1, 'Yusuf Kamal M', 0.79, 0.8, 0.8, 0.91, 0.92, 0.9, 0.79, 0.81, 0.83, 0.79, 1, 1),
(2, 'Ahmad Helmi F', 0.81, 0.93, 0.9, 0.83, 0.81, 0.92, 0.8, 0.79, 0.9, 0.93, 1, 1),
(3, 'Nova Aji Saputra', 0.81, 0.93, 0.92, 0.84, 0.8, 0.94, 0.8, 0.78, 0.92, 0.92, 1, 1),
(4, 'Ahmad Rozak', 0.8, 0.92, 0.8, 0.8, 0.8, 0.8, 0.82, 0.8, 0.8, 0.8, 1, 1),
(5, 'Fajar Rizki ', 0.81, 0.91, 0.79, 0.79, 0.8, 0.94, 0.83, 0.63, 0.91, 0.82, 0, 1),
(6, 'Fery Febriyanto', 0.81, 0.89, 0.79, 0.79, 0.79, 0.93, 0.79, 0.82, 0.77, 0.79, 1, 1),
(7, 'Ratedjo Putro', 0.81, 0.88, 0.9, 0.77, 0.8, 0.8, 0.6, 0.88, 0.63, 0.76, 1, 1),
(8, 'Alif Izal Haqi', 0.79, 0.8, 0.8, 0.69, 0.8, 0.88, 0.8, 0.77, 0.9, 0.77, 0, 1),
(9, 'Syafiq ibrahim', 0.77, 0.9, 0.88, 0.66, 0.9, 0.79, 0.69, 0.9, 0.78, 0.81, 1, 1),
(10, 'Sarig greisma', 0.72, 0.88, 0.82, 0.79, 0.7, 0.66, 0.62, 0.6, 0.59, 0.74, 0, 0),
(11, 'Shayul', 0.56, 0.7, 0.58, 0.7, 0.65, 0.61, 0.6, 0.58, 0.7, 0.71, 0, 0),
(12, 'Erika putri A', 0.6, 0.71, 0.74, 0.68, 0.79, 0.73, 0.77, 0.71, 0.7, 0.69, 1, 1),
(13, 'Ria reviana', 0.7, 0.74, 0.73, 0.78, 0.82, 0.77, 0.75, 0.7, 0.78, 0.75, 0, 1),
(14, 'T margianti', 0.8, 0.78, 0.82, 0.89, 0.85, 0.85, 0.79, 0.8, 0.83, 0.75, 1, 1),
(15, 'Sanie', 0.9, 0.93, 0.95, 0.84, 0.89, 0.83, 0.79, 0.84, 0.84, 0.81, 1, 1),
(16, 'Adi heri', 0.83, 0.85, 0.84, 0.8, 0.84, 0.8, 0.75, 0.75, 0.8, 0.82, 1, 1),
(17, 'Tomas', 0.78, 0.8, 0.89, 0.79, 0.77, 0.75, 0.83, 0.86, 0.88, 0.72, 1, 1),
(18, 'Bagas b', 0.7, 0.83, 0.84, 0.8, 0.75, 0.76, 0.85, 0.87, 0.8, 0.88, 1, 1),
(19, 'Adi heri s', 0.75, 0.69, 0.7, 0.7, 0.75, 0.76, 0.87, 0.81, 0.76, 0.84, 1, 1),
(20, 'Dimas rendi s', 0.7, 0.6, 0.62, 0.58, 0.56, 0.6, 0.71, 0.63, 0.6, 0.55, 0, 0),
(21, 'Husein kamal', 0.6, 0.6, 0.65, 0.5, 0.65, 0.7, 0.5, 0.55, 0.6, 0.65, 1, 0),
(22, 'M ilham ainal', 0.7, 0.75, 0.75, 0.75, 0.65, 0.7, 0.75, 0.6, 0.7, 0.6, 1, 1),
(23, 'Melia diana', 0.7, 0.65, 0.7, 0.6, 0.75, 0.65, 0.7, 0.7, 0.65, 0.65, 0, 1),
(24, 'Rizki maulana', 0.9, 0.8, 0.85, 0.75, 0.8, 0.85, 0.75, 0.7, 0.85, 0.75, 1, 1),
(25, 'Diah novianti', 0.75, 0.8, 0.85, 0.7, 0.75, 0.7, 0.75, 0.7, 0.75, 0.7, 1, 1),
(26, 'Endah maulidah', 0.8, 0.85, 0.65, 0.75, 0.7, 0.65, 0.8, 0.8, 0.9, 0.85, 1, 1),
(27, 'Vinda nur f', 0.75, 0.65, 0.85, 0.65, 0.65, 0.7, 0.75, 0.7, 0.75, 0.6, 1, 1),
(28, 'Evi kurniasih', 0.7, 0.8, 0.8, 0.75, 0.75, 0.85, 0.65, 0.6, 0.7, 0.75, 1, 1),
(29, 'Rizqi nur afiyah', 0.7, 0.65, 0.6, 0.5, 0.55, 0.75, 0.6, 0.55, 0.8, 0.5, 0, 0),
(30, 'Puspita warih ayuningsih', 0.8, 0.8, 0.9, 0.8, 0.65, 0.85, 0.7, 0.7, 0.85, 0.8, 1, 1),
(31, 'Asyah wiwit mulyani', 0.6, 0.6, 0.55, 0.55, 0.55, 0.55, 0.55, 0.55, 0.5, 0.5, 0, 0),
(32, 'Mandani Ayu', 0.6, 0.55, 0.55, 0.6, 0.55, 0.55, 0.55, 0.55, 0.5, 0.5, 0, 0),
(33, 'Desi maya', 0.6, 0.6, 0.55, 0.5, 0.55, 0.5, 0.55, 0.5, 0.5, 0.5, 0, 0),
(34, 'Sri murni', 0.55, 0.6, 0.5, 0.55, 0.55, 0.5, 0.55, 0.55, 0.5, 0.5, 0, 0),
(35, 'Tomy haryanto', 0.7, 0.7, 0.85, 0.7, 0.65, 0.7, 0.8, 0.7, 0.6, 0.6, 1, 1),
(36, 'Abdul malik ', 0.8, 0.74, 0.79, 0.84, 0.74, 0.79, 0.83, 0.83, 0.78, 0.81, 1, 1),
(37, 'Tavit slamet ', 0.8, 0.7, 0.78, 0.8, 0.77, 0.79, 0.71, 0.74, 0.83, 0.79, 0, 1),
(38, 'Haris dermawan ', 0.93, 0.94, 0.89, 0.81, 0.84, 0.88, 0.81, 0.83, 0.88, 0.87, 1, 1),
(39, 'Aliv izzul haqi', 0.83, 0.79, 0.73, 0.88, 0.81, 0.85, 0.78, 0.77, 0.84, 0.8, 1, 1),
(40, 'Hidayat nur wahid', 0.83, 0.88, 0.87, 0.8, 0.83, 0.82, 0.77, 0.73, 0.87, 0.79, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_unit_kerja`
--

CREATE TABLE IF NOT EXISTS `db_unit_kerja` (
  `id_unit_kerja` int(50) NOT NULL AUTO_INCREMENT,
  `nama_unit_kerja` varchar(150) DEFAULT NULL,
  `eselon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_unit_kerja`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `db_unit_kerja`
--

INSERT INTO `db_unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `eselon`) VALUES
(1, 'Ur. Perencanaan &Keu', 'I.a'),
(2, 'Ur. Umum &Kepegawaian', 'II.a'),
(3, 'SubSeksi. Pengukuran &Pemetaan', 'II.a'),
(4, 'SubSeksi Tematik &Potensi Tanah', 'IV.a'),
(5, 'SubSeksi Penetapan Hak Tanah', 'V.a'),
(6, 'SubSeksi Pendaftaran Hak', 'VI.a'),
(7, 'SubSeksi Peralihan, Pembebanan Hak & PPAT', 'VII.a'),
(8, 'SubSeksi Penatagunaan Tanah & Kawasan Tertentu', 'VIII.a'),
(9, 'SubSeksi Pemberdayaan Masyarakat', 'IX.a'),
(10, 'SubSeksi Pengendalian Pertanahan', 'X.a'),
(11, 'Kepala Kantor', 'XI.a'),
(12, 'Sub Bag. Tata Usaha', 'XII.a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_user`
--

CREATE TABLE IF NOT EXISTS `db_user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`) VALUES
(1, '198008152003122003', '216e6101fa453e965a0241d3d7edf795'),
(2, '196005101981032001', 'db04eb4b07e0aaf8d1d477ae342bdff9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
