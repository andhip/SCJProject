-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 05:47 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scj`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `judul`, `cover`) VALUES
('ujian1', 'Ujian Kelas', 'ujian.jpg'),
('ujian2', 'Ujian Kelas', 'ujian2.jpg'),
('belajarkelas1', 'Pembelajran Di kelas', 'kegiatan-kelas.jpg'),
('belajarkelas2', 'Pembelajran Di kelas', 'kegiatan-kelas2.jpg'),
('belajarkelas3', 'Pembelajaran Di Kelas', 'kegiatan-kelas3.jpg'),
('diskusi1', 'Diskusi', 'kegiatan-discuss2.jpg'),
('diskusi2', 'Diskusi', 'kegiatan-discuss3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `password`, `status`) VALUES
('scjadmin1', 'SCJ144', 'admin'),
('scjadmin2', 'SCJ411', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
