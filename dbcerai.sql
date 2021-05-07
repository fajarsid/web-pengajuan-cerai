-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 04:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcerai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `password`) VALUES
(1, 'admin@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `idform` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(25) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `tlahir` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `snikah` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `akte` varchar(100) NOT NULL,
  `sdesa` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`idform`, `nama`, `nik`, `jk`, `tlahir`, `ttl`, `agama`, `pekerjaan`, `ktp`, `snikah`, `kk`, `akte`, `sdesa`, `alamat`) VALUES
(1, 'pisau', 43435345, 'L', 'dfsfsffd', '2021-05-12', 'islam', 'dsfsd', '', '', '', '', '', 'dffds'),
(2, 'Pisau', 343423, 'L', 'dsf', '2021-05-19', 'Kristen', 'dfddf', '1575257176_ogel.jpeg', '', '', '', '', ' fghhgfh'),
(3, 'coba', 432443, 'L', 'fsdfs', '2021-05-11', 'Buddha', 'sfsfsdfs', '506259162_ogel-removebg-preview.png', 'ogel-removebg-preview.png', 'ogel-removebg-preview.png', 'ogel-removebg-preview.png', 'ogel-removebg-preview.png', ' fgdgdfgdfg'),
(4, 'coba lagi', 3224234, 'P', 'sadadasd', '2021-05-04', 'Protestan', 'sdsadasd', '1606806438_team1-removebg-preview.png', 'phone.png', 'home.PNG', 'ui.png', 'isal-removebg-preview.png', ' cfdsvsvs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `email`, `password`) VALUES
(1, 'pisau', 'user@user.com', '12345'),
(2, 'user', 'coba@coba.com', '12345'),
(3, 'user', 'coba@coba.com', '12345'),
(4, 'user', 'coba@coba.com', '12345'),
(5, 'user', 'coba@coba.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`idform`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `idform` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
