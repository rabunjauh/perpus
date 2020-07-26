-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 09:18 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_akun`
--

CREATE TABLE `data_akun` (
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(150) DEFAULT NULL,
  `no_induk` varchar(10) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_akun`
--

INSERT INTO `data_akun` (`id_akun`, `nama_lengkap`, `no_induk`, `username`, `password`, `phone`, `id_role`, `created_date`) VALUES
(4, 'Andini', '12345', 'andini', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-04-30'),
(5, 'Administrator', '12344321', 'administ', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-01'),
(6, 'Mustafa', '1324324', 'mustafa5', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '0000-00-00'),
(7, 'Mustafa', '1324324', 'mustafa6', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '081268265638', 1, '0000-00-00'),
(8, 'Mustafa Mustafa', '12344321', 'mustafa7', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 2, '2020-05-01'),
(10, 'Mustafa', '1324324', 'mustafa9', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '081268265638', 1, '2020-05-02'),
(11, 'Mustafa Husaini', '1234567', 'mustafa10', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 2, '2020-05-03'),
(12, 'Administrator', '12345', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '081268265638', 1, '2020-05-04'),
(13, 'Mustafa', '12345', 'mustafa11', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 3, '2020-05-08'),
(16, 'Mustafa', '1234567', 'mustafa14', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-08'),
(17, 'Mustafa Husaini', '1234567', 'mustafa15', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-08'),
(18, 'Mustafa', '1234567', 'mustafa12', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-15'),
(19, 'Mustafa', '12345', 'mustafa13', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-15'),
(20, 'Mustafa', '12344321', 'mustafa16', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(21, 'Mustafa', '12344321', 'mustafa17', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(22, 'Mustafa', '12344321', 'mustafa18', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(23, 'Mustafa', '12344321', 'mustafa19', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(24, 'Mustafa', '12344321', 'mustafa20', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(25, 'Mustafa', '12344321', 'mustafa21', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(26, 'Mustafa', '12344321', 'mustafa22', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(27, 'Mustafa', '12344321', 'mustafa23', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(28, 'Mustafa', '12344321', 'mustafa24', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(29, 'Mustafa', '12344321', 'mustafa25', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(30, 'Mustafa', '12344321', 'mustafa26', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(31, 'Mustafa', '12344321', 'mustafa27', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(32, 'Mustafa', '12344321', 'mustafa28', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(33, 'Mustafa', '12344321', 'mustafa29', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(34, 'Mustafa', '12344321', 'mustafa30', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(35, 'Mustafa', '12344321', 'mustafa31', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(36, 'Mustafa', '12344321', 'mustafa32', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-16'),
(37, 'Mustafa', '1324324', 'mustafa33', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-21'),
(38, 'Mustafa', '12344321', 'mustafa34', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-21'),
(39, 'Mustafa', '12344321', 'mustafa35', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 1, '2020-05-21'),
(40, 'Mustafa', '12344321', 'mustafa36', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 2, '2020-05-21'),
(41, 'Mustafa', '12344321', 'mustafa37', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '081268265638', 3, '2020-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(200) DEFAULT NULL,
  `no_induk` varchar(45) DEFAULT NULL,
  `jenis_kelamin` char(10) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo` varchar(50) DEFAULT 'photo',
  `tanggal_daftar` date DEFAULT NULL,
  `tanggal_input` date DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `no_induk`, `jenis_kelamin`, `id_kelas`, `id_jurusan`, `no_telepon`, `email`, `photo`, `tanggal_daftar`, `tanggal_input`, `status`) VALUES
(3, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 1),
(4, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 1),
(5, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(6, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(7, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(8, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(9, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(10, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(11, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(12, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(13, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(14, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(15, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(17, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(18, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(19, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(20, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(22, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(23, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(24, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(25, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(26, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(27, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(28, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(29, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(30, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(31, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(32, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(33, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(34, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(35, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(36, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(37, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(38, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(39, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(40, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(41, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(42, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(43, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(44, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(45, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(46, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(47, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(48, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(49, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(50, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(51, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(52, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(53, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(54, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(55, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(56, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(57, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(58, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(59, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(60, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(61, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(62, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(63, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(64, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(65, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(66, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(67, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(68, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(69, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(70, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(71, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(72, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(73, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(74, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(75, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(76, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(77, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(78, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(79, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(80, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(81, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(82, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(83, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(84, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(85, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(86, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(87, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(88, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(89, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(90, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(91, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(92, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(93, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(94, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(95, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(96, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(97, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(98, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(99, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(100, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(101, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(102, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(103, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(104, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(105, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(106, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(107, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(108, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(109, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(110, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(111, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(112, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(113, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(114, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(115, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(116, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(117, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(118, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(119, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(120, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(121, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(122, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(123, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(124, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(125, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(126, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(127, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(128, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(129, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(130, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(131, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(132, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(133, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(134, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(135, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(136, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(137, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(138, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(139, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(140, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(141, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(142, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(143, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(144, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(145, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(146, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(147, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(148, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(149, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(150, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(151, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(152, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(153, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(154, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(155, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(156, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(157, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(158, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(159, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(160, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(161, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(162, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(163, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(164, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(165, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(166, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(167, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(168, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(169, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(170, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(171, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(172, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(173, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(174, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(175, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(176, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(177, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(178, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(179, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(180, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(181, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(182, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(183, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(184, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(185, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(186, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(187, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(188, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(189, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(190, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(191, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(192, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(193, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(194, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(195, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(196, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(197, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(198, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(199, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(200, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(201, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(202, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(203, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(204, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(205, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(206, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(207, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(208, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(209, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(210, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(211, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(212, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(213, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(214, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 0),
(215, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(216, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(217, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(218, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(219, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(220, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(221, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(222, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(223, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(224, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 0),
(225, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(226, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(227, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(228, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(229, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(230, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(231, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(232, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(233, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 0),
(234, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(235, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(236, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(237, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(238, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(239, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(240, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(241, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(242, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(243, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(244, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(245, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(246, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(247, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(248, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(249, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(250, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(251, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(252, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(253, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(254, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(255, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(256, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(257, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(258, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(259, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(260, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(261, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 0),
(262, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(263, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(264, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(265, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(266, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(267, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(268, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(269, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(270, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(271, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(272, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(273, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(274, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(275, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(276, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(277, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(278, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(279, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(280, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(281, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(282, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(283, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(284, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(285, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(286, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(287, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(288, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(289, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(290, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(291, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(292, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(293, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(294, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(295, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(296, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(297, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(298, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(299, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(300, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(301, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(302, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(303, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(304, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(305, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(306, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(307, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(308, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(309, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(310, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(311, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(312, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(313, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(314, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(315, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(316, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(317, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(318, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(319, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(320, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(321, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(322, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(323, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(324, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(325, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(326, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(327, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(328, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(329, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(330, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(331, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(332, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(333, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(334, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(335, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(336, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(337, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(338, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(339, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(340, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(341, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(342, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(343, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(344, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(345, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(346, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(347, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(348, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(349, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(350, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(351, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(352, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(353, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(354, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(355, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(356, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(357, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(358, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(359, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(360, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(361, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(362, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(363, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(364, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(365, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(366, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(367, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(368, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(369, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(370, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(371, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(372, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(373, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(374, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(375, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(376, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(377, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(378, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(379, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(380, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(381, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(382, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(383, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(384, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(385, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(386, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(387, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(388, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(389, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(390, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(391, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(392, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(393, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(394, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(395, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(396, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(397, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(398, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(399, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(400, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(401, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(402, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0);
INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `no_induk`, `jenis_kelamin`, `id_kelas`, `id_jurusan`, `no_telepon`, `email`, `photo`, `tanggal_daftar`, `tanggal_input`, `status`) VALUES
(403, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(404, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(405, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(406, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(407, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(408, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(409, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(410, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(411, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(412, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(413, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(414, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(415, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(416, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(417, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(418, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(419, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(420, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(421, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(422, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(423, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(424, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(425, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(426, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(427, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(428, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(429, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(430, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(431, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(432, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(433, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(434, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(435, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(436, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(437, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(438, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(439, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(440, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(441, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(442, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(443, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(444, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(445, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(446, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(447, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(448, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(449, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(450, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(451, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(452, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(453, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(454, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(455, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(456, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(457, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(458, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(459, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(460, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(461, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(462, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(463, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(464, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(465, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(466, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(467, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(468, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(469, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(470, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(471, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(472, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(473, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(474, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(475, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(476, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(477, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(478, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(479, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(480, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(481, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(482, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(483, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(484, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(485, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(486, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(487, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(488, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(489, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(490, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(491, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(492, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(493, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(494, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(495, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(496, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(497, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(498, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(499, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(500, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(501, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(502, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(503, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(504, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(505, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(506, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 0),
(507, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(508, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(509, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(510, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(511, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(512, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(513, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(514, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(515, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(516, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(517, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(518, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(519, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(520, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(521, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(522, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(523, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(524, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(525, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(526, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(527, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(528, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(529, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(530, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(531, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(532, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(533, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(534, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(535, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(536, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(537, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(538, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(539, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(540, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(541, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 0),
(542, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(543, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(544, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1),
(545, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `isbn` varchar(10) DEFAULT NULL,
  `judul_buku` varchar(200) DEFAULT NULL,
  `id_pengarang_buku` int(11) DEFAULT NULL,
  `id_penerbit` int(11) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_rak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_buku`
--

INSERT INTO `data_buku` (`id_buku`, `kode_buku`, `isbn`, `judul_buku`, `id_pengarang_buku`, `id_penerbit`, `tahun_terbit`, `keterangan`, `id_rak`) VALUES
(1, 'K.123', '9786020483', '101+ PENGETAHUAN BIKIN KAMU MAHIR IT', 1, 1, 2019, '', 2),
(5, 'K.123', '9786025849', 'CERAMAH KOCAK BIKIN NGAKAK', 2, 2, 2008, '', 1),
(6, 'K.123', '9786028740', 'Pesan Dari Bintang', 3, 3, NULL, NULL, NULL),
(12, 'K.123', '9789792952', 'Komputer Forensik, Melacak Kejahatan Digital', 1, 6, 2016, '', 1),
(13, 'K.123', '9789792930', 'Jangan Cuma Punya Toko Online Doang! Kiat Jitu Online Salesman Yang Sebenarnya', 1, 6, 2019, '', 1),
(14, 'K.123', '9789792946', 'Ergonomika Dan Manajemen Teknologi Informasi', 1, 6, 2015, '', 1),
(15, 'K.123', '9789792947', 'Tip Trik Programmer Macro Excel Profesional + CD', 1, 6, 2015, '', 1),
(16, 'K.123', '9789792930', 'Smart Online Marketer', 1, 6, 2012, '', 1),
(17, 'K.123', '9789792943', 'Terobosan Berjualan Online ala Dropshipping ++', 1, 6, 2014, '', 1),
(18, 'K.123', '9786022916', 'Guru Aini (Reguler )', 9, 7, 2020, '', 2),
(19, 'K.123', '9786022916', 'BOX SET THE ORIGINAL STORIES - ANDREA HIRATA', 9, 7, 2020, '', 2),
(20, 'K.123', '9786022914', '#KARYA KE -10 ANDREA HIRATA- SIRKUS POHON', 9, 7, 2017, 'tes', 1),
(21, 'K.123', '123', 'buku 1', 5, 8, 2019, 'tes', 1),
(22, 'K.123', '1234', 'buku 2', 5, 8, 2017, '', 2),
(23, 'K.123', '12345', 'buku 3', 5, 8, 2020, '', 1),
(24, 'K.1234', '123456', 'Buku 4', 5, 8, 2017, '', 3),
(25, 'K.1234', '123456', 'Buku 5', 8, 9, 2020, '', 6),
(26, 'K.1234', '123456', 'Buku 6', 8, 10, 2020, '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `data_jurusan`
--

CREATE TABLE `data_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Ilmu Pengetahuan Alam'),
(2, 'Ilmu Pengetahuan Sosial'),
(4, 'Rekayasa Perangkat Lunak'),
(5, 'Administrasi Perkantoran'),
(6, 'Jurusan 1'),
(7, 'Jurusan 2'),
(8, 'Jurusan 3'),
(9, 'Jurusan 4'),
(10, 'Jurusan 5'),
(11, 'Jurusan 6'),
(12, 'Jurusan 7'),
(13, 'Jurusan 8'),
(14, 'Jurusan 9'),
(15, 'Jurusan 10'),
(16, 'Jurusan 11'),
(17, 'Jurusan 12'),
(18, 'Jurusan 13'),
(19, 'Jurusan 14'),
(20, 'Jurusan 15'),
(21, 'Jurusan 16'),
(22, 'Jurusan 17'),
(23, 'Jurusan 18'),
(24, 'Jurusan 19'),
(25, 'Jurusan 20');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'VI'),
(7, 'VII'),
(8, 'VII'),
(9, 'IX'),
(10, 'XI'),
(11, 'XI'),
(13, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `data_penerbit`
--

CREATE TABLE `data_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penerbit`
--

INSERT INTO `data_penerbit` (`id_penerbit`, `nama_penerbit`) VALUES
(1, 'Elex Media Komputindo'),
(2, 'Buku Pintar Indonesia'),
(3, 'Lentera Hati'),
(4, 'Cmedia '),
(5, 'Gramedia Pustaka Utama '),
(6, 'Andi Publisher'),
(7, 'Bentang Pustaka'),
(8, 'Penerbit 1'),
(9, 'Penerbit 2'),
(10, 'Penerbit 3'),
(11, 'Penerbit 4'),
(12, 'Penerbit 5'),
(13, 'Penerbit 6'),
(14, 'Penerbit 7'),
(15, 'Penerbit 8'),
(16, 'Penerbit 9'),
(17, 'Penerbit 10'),
(18, 'Penerbit 11');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengarang`
--

CREATE TABLE `data_pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengarang`
--

INSERT INTO `data_pengarang` (`id_pengarang`, `nama_pengarang`) VALUES
(1, 'Feri Sulianta'),
(2, 'Zaenuddin H.M'),
(3, 'Sitta Karina'),
(4, 'TIM GARUDA EDUKA'),
(5, 'Mustafa1'),
(6, 'Mustafa2'),
(7, 'Mustafa3'),
(8, 'Mustafa4'),
(9, 'Andrea Hirata'),
(10, 'tes1'),
(11, 'tes2'),
(12, 'Mustafa5'),
(13, 'Mustafa6'),
(14, 'Mustafa7'),
(15, 'Mustafa8'),
(16, 'Mustafa9'),
(17, 'Mustafa10'),
(18, 'Mustafa11'),
(19, 'Mustafa12'),
(20, 'Pengarang 1'),
(21, 'Pengarang 2'),
(22, 'Mustafa 13'),
(23, 'Mustafa 14'),
(24, 'Mustafa 15'),
(25, 'Pengarang 1');

-- --------------------------------------------------------

--
-- Table structure for table `data_rak`
--

CREATE TABLE `data_rak` (
  `id_rak` int(11) NOT NULL,
  `kode_rak` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_rak`
--

INSERT INTO `data_rak` (`id_rak`, `kode_rak`) VALUES
(1, '1A'),
(2, '1B'),
(3, '1C'),
(4, '1D'),
(5, '1E'),
(6, '1F'),
(7, '1G'),
(8, '1H'),
(9, '1I'),
(10, '1J'),
(11, '1K');

-- --------------------------------------------------------

--
-- Table structure for table `data_role`
--

CREATE TABLE `data_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_role`
--

INSERT INTO `data_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Supervisor'),
(3, 'Data Entry');

-- --------------------------------------------------------

--
-- Table structure for table `detail_inventory`
--

CREATE TABLE `detail_inventory` (
  `id_detail_inventory` int(11) NOT NULL,
  `id_inventory` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah_buku` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_inventory`
--

INSERT INTO `detail_inventory` (`id_detail_inventory`, `id_inventory`, `id_buku`, `jumlah_buku`) VALUES
(1, 1, 1, 3),
(2, 2, 1, 5),
(3, 3, 1, 15),
(4, 4, 19, 15),
(5, 5, 20, 15),
(6, 6, 12, 15),
(7, 7, 13, 15),
(8, 8, 14, 15),
(9, 9, 15, 15),
(10, 10, 16, 15);

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail_peminjaman` int(11) NOT NULL,
  `id_peminjaman` int(11) DEFAULT NULL,
  `jumlah_buku` int(1) DEFAULT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail_peminjaman`, `id_peminjaman`, `jumlah_buku`, `id_buku`) VALUES
(1, 1, 2, 26),
(4, 4, 1, 26),
(5, 5, 1, 26),
(19, 7, 5, 26),
(23, 12, 1, 25),
(24, 12, 1, 24),
(25, 2, 2, 26),
(26, 3, 1, 26),
(27, 27, 1, 26),
(28, 28, 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(11) NOT NULL,
  `tgl_inventory` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `tgl_inventory`, `keterangan`) VALUES
(1, '2020-06-22', ''),
(2, '2020-02-16', ''),
(3, '2020-06-22', ''),
(4, '2020-06-22', ''),
(5, '2020-06-22', ''),
(6, '2020-06-22', ''),
(7, '2020-06-22', ''),
(8, '2020-06-22', ''),
(9, '2020-06-22', ''),
(10, '2020-06-22', ''),
(11, '2020-06-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_old`
--

CREATE TABLE `inventory_old` (
  `id_inventory` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `quantity_inventory` int(11) DEFAULT NULL,
  `tgl_inventory` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory_old`
--

INSERT INTO `inventory_old` (`id_inventory`, `id_buku`, `quantity_inventory`, `tgl_inventory`, `keterangan`) VALUES
(1, 1, 3, '2020-06-22', ''),
(2, 1, 5, '2020-02-16', ''),
(3, 1, 15, '2020-06-22', ''),
(4, 19, 15, '2020-06-22', ''),
(5, 20, 15, '2020-06-22', ''),
(6, 12, 15, '2020-06-22', ''),
(7, 13, 15, '2020-06-22', ''),
(8, 14, 15, '2020-06-22', ''),
(9, 15, 15, '2020-06-22', ''),
(10, 16, 15, '2020-06-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategori_buku` int(11) NOT NULL,
  `kategori_buku` varchar(100) DEFAULT NULL,
  `kode_kategori` varchar(3) DEFAULT NULL,
  `kelompok_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategori_buku`, `kategori_buku`, `kode_kategori`, `kelompok_kategori`) VALUES
(1, ' Publikasi Umum, informasi umum dan komputer', '000', 'Umum'),
(2, 'Bibiliografi', '010', 'Umum'),
(3, 'Perpustakaan dan informasi', '020', 'Umum'),
(4, 'Ensiklopedia dan buku yang memuat fakta-fakta', '030', 'Umum'),
(5, 'Tidak ada klasifikasi (sebelumnya untuk Biografi)', '040', 'Umum'),
(6, 'Filsafat dan psikologi', '100', 'Filsafat dan Psikologi'),
(7, 'Agama', '200', 'Agama');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  `returnDate` date DEFAULT NULL,
  `lateCharge` int(6) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status_peminjaman_buku` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_anggota`, `tanggal_peminjaman`, `dueDate`, `returnDate`, `lateCharge`, `keterangan`, `status_peminjaman_buku`) VALUES
(1, 542, '2020-07-04', '0000-00-00', NULL, NULL, '', 1),
(2, 541, '2020-07-04', '2020-07-06', '2020-07-26', 40000, '', 1),
(3, 540, '2020-07-04', '2020-07-06', '2020-07-26', 40000, '', 1),
(4, 539, '2020-07-04', '0000-00-00', NULL, NULL, '', 0),
(5, 538, '2020-07-04', '0000-00-00', NULL, NULL, '', 0),
(7, 536, '2020-07-04', '0000-00-00', NULL, NULL, '', 0),
(9, 534, '2020-07-05', '0000-00-00', NULL, NULL, '', 0),
(10, 533, '2020-07-05', '0000-00-00', NULL, NULL, '', 0),
(11, 532, '2020-07-05', '0000-00-00', NULL, NULL, '', 0),
(12, 531, '2020-07-05', '2020-07-07', NULL, NULL, '', 0),
(27, 541, '2020-07-25', '2020-07-27', '2020-07-26', 2000, '', 1),
(28, 541, '2020-07-25', '2020-07-27', '2020-07-26', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `denda` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `tanggal_pengembalian`, `denda`) VALUES
(0, 0, '2020-06-06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `idsetting` int(11) NOT NULL,
  `nama_sekolah` varchar(45) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `lama_pinjam` int(1) NOT NULL,
  `jumlah_max` int(1) NOT NULL,
  `denda` int(4) NOT NULL,
  `perpanjangan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`idsetting`, `nama_sekolah`, `alamat`, `email`, `lama_pinjam`, `jumlah_max`, `denda`, `perpanjangan`) VALUES
(1, 'Sekolah B', 'Jl. Aabbcc', 'sekolah2@gmail.com', 2, 2, 2000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settingss`
--

CREATE TABLE `settingss` (
  `idsetting` int(11) NOT NULL,
  `nama_sekolah` varchar(150) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `banner` varchar(15) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_buku`
--

CREATE TABLE `stock_buku` (
  `id_stock_buku` int(11) NOT NULL,
  `stock_buku` int(11) DEFAULT '0',
  `id_buku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_buku`
--

INSERT INTO `stock_buku` (`id_stock_buku`, `stock_buku`, `id_buku`) VALUES
(1, 78, 1),
(3, 5, 6),
(4, 10, 5),
(6, 3, 11),
(7, 15, 19),
(8, 15, 20),
(9, 15, 12),
(10, 15, 13),
(11, 15, 14),
(12, 15, 15),
(13, 15, 16),
(14, 3, 26),
(15, 6, 25),
(16, 7, 24),
(17, 15, 23),
(18, 0, 18),
(19, 0, 17);

-- --------------------------------------------------------

--
-- Table structure for table `table_tambah_stock`
--

CREATE TABLE `table_tambah_stock` (
  `id_tambah_stock` int(11) NOT NULL,
  `diterima_dari` varchar(255) DEFAULT NULL,
  `tanggal_diterima` date DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_jurusan_2` (`id_jurusan`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_pengarang_buku` (`id_pengarang_buku`,`id_penerbit`),
  ADD KEY `id_rak` (`id_rak`),
  ADD KEY `id_penerbit` (`id_penerbit`);

--
-- Indexes for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `data_penerbit`
--
ALTER TABLE `data_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `data_pengarang`
--
ALTER TABLE `data_pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `data_rak`
--
ALTER TABLE `data_rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `data_role`
--
ALTER TABLE `data_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `detail_inventory`
--
ALTER TABLE `detail_inventory`
  ADD PRIMARY KEY (`id_detail_inventory`),
  ADD KEY `id_inventory` (`id_inventory`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail_peminjaman`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indexes for table `inventory_old`
--
ALTER TABLE `inventory_old`
  ADD PRIMARY KEY (`id_inventory`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`idsetting`);

--
-- Indexes for table `settingss`
--
ALTER TABLE `settingss`
  ADD PRIMARY KEY (`idsetting`);

--
-- Indexes for table `stock_buku`
--
ALTER TABLE `stock_buku`
  ADD PRIMARY KEY (`id_stock_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `table_tambah_stock`
--
ALTER TABLE `table_tambah_stock`
  ADD PRIMARY KEY (`id_tambah_stock`),
  ADD KEY `id_buku` (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akun`
--
ALTER TABLE `data_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_jurusan`
--
ALTER TABLE `data_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_penerbit`
--
ALTER TABLE `data_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_pengarang`
--
ALTER TABLE `data_pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `data_rak`
--
ALTER TABLE `data_rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_role`
--
ALTER TABLE `data_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_inventory`
--
ALTER TABLE `detail_inventory`
  MODIFY `id_detail_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inventory_old`
--
ALTER TABLE `inventory_old`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `idsetting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settingss`
--
ALTER TABLE `settingss`
  MODIFY `idsetting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_buku`
--
ALTER TABLE `stock_buku`
  MODIFY `id_stock_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `table_tambah_stock`
--
ALTER TABLE `table_tambah_stock`
  MODIFY `id_tambah_stock` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD CONSTRAINT `data_anggota_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `data_kelas` (`id_kelas`),
  ADD CONSTRAINT `data_anggota_ibfk_3` FOREIGN KEY (`id_jurusan`) REFERENCES `data_jurusan` (`id_jurusan`);

--
-- Constraints for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD CONSTRAINT `data_buku_ibfk_1` FOREIGN KEY (`id_pengarang_buku`) REFERENCES `data_pengarang` (`id_pengarang`),
  ADD CONSTRAINT `data_buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `data_penerbit` (`id_penerbit`),
  ADD CONSTRAINT `data_buku_ibfk_3` FOREIGN KEY (`id_rak`) REFERENCES `data_rak` (`id_rak`);

--
-- Constraints for table `detail_inventory`
--
ALTER TABLE `detail_inventory`
  ADD CONSTRAINT `detail_inventory_ibfk_1` FOREIGN KEY (`id_inventory`) REFERENCES `inventory` (`id_inventory`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_inventory_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`);

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `detail_peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`),
  ADD CONSTRAINT `detail_peminjaman_ibfk_2` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id_anggota`);

--
-- Constraints for table `table_tambah_stock`
--
ALTER TABLE `table_tambah_stock`
  ADD CONSTRAINT `table_tambah_stock_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
