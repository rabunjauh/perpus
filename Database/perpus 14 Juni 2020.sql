-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 04:21 PM
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
  `desc` varchar(10) DEFAULT 'anggota'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `no_induk`, `jenis_kelamin`, `id_kelas`, `id_jurusan`, `no_telepon`, `email`, `photo`, `tanggal_daftar`, `tanggal_input`, `desc`) VALUES
(3, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(4, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(5, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(6, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(7, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(8, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(9, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(10, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(11, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(12, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(13, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(14, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(15, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(17, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(18, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(19, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(20, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(22, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(23, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(24, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(25, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(26, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(27, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(28, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(29, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(30, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(31, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(32, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(33, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(34, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(35, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(36, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(37, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(38, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(39, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(40, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(41, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(42, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(43, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(44, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(45, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(46, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(47, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(48, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(49, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(50, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(51, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(52, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(53, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(54, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(55, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(56, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(57, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(58, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(59, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(60, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(61, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(62, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(63, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(64, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(65, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(66, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(67, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(68, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(69, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(70, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(71, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(72, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(73, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(74, 'Joanne', '12345677', 'Perempuan', 9, 2, '0812682656388', 'joanne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(75, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(76, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(77, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(78, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(79, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(80, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(81, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(82, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(83, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(84, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(85, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(86, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(87, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(88, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(89, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(90, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(91, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(92, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(93, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(94, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(95, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(96, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(97, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(98, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(99, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(100, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(101, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(102, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(103, 'Elfrieda', '12345677', 'Perempuan', 9, 2, '0812682656388', 'elfrieda@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(104, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(105, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(106, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(107, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(108, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(109, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(110, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(111, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(112, 'Michaela', '12345677', 'Perempuan', 9, 2, '0812682656388', 'michaela@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(113, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(114, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(115, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(116, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(117, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(118, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(119, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(120, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(121, 'Antonina', '12345677', 'Perempuan', 9, 2, '0812682656388', 'antonina@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(122, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(123, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(124, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(125, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(126, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(127, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(128, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(129, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(130, 'Frederique', '12345677', 'Laki-laki', 9, 2, '0812682656388', 'frederique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(131, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(132, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(133, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(134, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(135, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(136, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(137, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(138, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(139, 'April', '12345677', 'Perempuan', 9, 2, '0812682656388', 'april@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(140, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(141, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(142, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(143, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(144, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(145, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(146, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(147, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(148, 'Chloe', '12345677', 'Perempuan', 9, 2, '0812682656388', 'chloe@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(149, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(150, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(151, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(152, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(153, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(154, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(155, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(156, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(157, 'Evelyn', '12345', 'Perempuan', 9, 2, '0812682656388', 'evelyn@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(158, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(159, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(160, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(161, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(162, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(163, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(164, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(165, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(166, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(167, 'Jayne', '12345', 'Perempuan', 9, 2, '0812682656388', 'jayne@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(168, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(169, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(170, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(171, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(172, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(173, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(174, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(175, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(176, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(177, 'Minnie', '12345', 'Perempuan', 9, 2, '0812682656388', 'minnie@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(178, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(179, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(180, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(181, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(182, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(183, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(184, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(185, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(186, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(187, 'Kenya', '12345', 'Perempuan', 9, 2, '0812682656388', 'kenya@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(188, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(189, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(190, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(191, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(192, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(193, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(194, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(195, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(196, 'Jazlyn', '12345677', 'Perempuan', 3, 2, '08121234545', 'jazlyn@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(197, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(198, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(199, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(200, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(201, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(202, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(203, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(204, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(205, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(206, 'Andini Prastiti', '12345', 'P', 7, 2, '081268265638', 'andini.p@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(207, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(208, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(209, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(210, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(211, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(212, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(213, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(214, 'Burhan', '1234567', 'Laki-laki', 6, 5, '08121234545', 'burhan.b@gmail.com', 'photo', '2020-05-11', '2020-05-12', 'anggota'),
(215, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(216, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(217, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(218, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(219, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(220, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(221, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(222, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(223, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(224, 'Irwan', '1234567', 'Perempuan', 4, 4, '08121234545', 'IRWAN.I@GMAIL.COM', 'photo', '2020-05-03', '2020-05-12', 'anggota'),
(225, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(226, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(227, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(228, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(229, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(230, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(231, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(232, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(233, 'Irwannn', '12345677', 'Laki-laki', 1, 5, '08121234546', 'irwan.irwan@gmail.com', 'photo', '2020-05-03', '2020-05-14', 'anggota'),
(234, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(235, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(236, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(237, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(238, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(239, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(240, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(241, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(242, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(243, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(244, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(245, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(246, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(247, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(248, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(249, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(250, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(251, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(252, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(253, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(254, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(255, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(256, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(257, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(258, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(259, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(260, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(261, 'MOHAMMAD ARIF', '12345', 'Laki-laki', 4, 4, '08121234545', 'mohammad.arif@wascoenergy.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(262, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(263, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(264, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(265, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(266, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(267, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(268, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(269, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(270, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(271, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(272, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(273, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(274, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(275, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(276, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(277, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(278, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(279, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(280, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(281, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(282, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(283, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(284, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(285, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(286, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(287, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(288, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(289, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(290, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(291, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(292, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(293, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(294, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(295, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(296, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(297, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(298, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(299, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(300, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(301, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(302, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(303, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(304, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(305, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(306, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(307, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(308, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(309, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(310, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(311, 'Monique', '12345677', 'Perempuan', 9, 2, '0812682656388', 'monique@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(312, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(313, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(314, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(315, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(316, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(317, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(318, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(319, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(320, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(321, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(322, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(323, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(324, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(325, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(326, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(327, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(328, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(329, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(330, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(331, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(332, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(333, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(334, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(335, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(336, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(337, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(338, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(339, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(340, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(341, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(342, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(343, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(344, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(345, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(346, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(347, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(348, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(349, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(350, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(351, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(352, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(353, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(354, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(355, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(356, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(357, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(358, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(359, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(360, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(361, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(362, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(363, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(364, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(365, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(366, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(367, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(368, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(369, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(370, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(371, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(372, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(373, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(374, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(375, 'Mustafa', '123', 'Laki-laki', 2, 2, '0812682656388', 'mustafa.m@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(376, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(377, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(378, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(379, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota');
INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `no_induk`, `jenis_kelamin`, `id_kelas`, `id_jurusan`, `no_telepon`, `email`, `photo`, `tanggal_daftar`, `tanggal_input`, `desc`) VALUES
(380, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(381, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(382, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(383, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(384, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(385, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(386, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(387, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(388, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(389, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(390, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(391, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(392, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(393, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(394, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(395, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(396, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(397, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(398, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(399, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(400, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(401, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(402, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(403, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(404, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(405, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(406, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(407, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(408, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(409, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(410, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(411, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(412, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(413, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(414, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(415, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(416, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(417, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(418, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(419, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(420, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(421, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(422, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(423, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(424, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(425, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(426, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(427, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(428, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(429, 'Prastiti Andini', '12345', 'Perempuan', 8, 2, '0812682656388', 'prastiti@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(430, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(431, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(432, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(433, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(434, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(435, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(436, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(437, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(438, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(439, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(440, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(441, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(442, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(443, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(444, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(445, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(446, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(447, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(448, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(449, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(450, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(451, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(452, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(453, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(454, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(455, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(456, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(457, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(458, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(459, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(460, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(461, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(462, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(463, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(464, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(465, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(466, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(467, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(468, 'Rahmat', '1234567890', 'Laki-laki', 5, NULL, '0812682656388', 'rahmat.r@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(469, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(470, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(471, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(472, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(473, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(474, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(475, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(476, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(477, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(478, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(479, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(480, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(481, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(482, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(483, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(484, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(485, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(486, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(487, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(488, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(489, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(490, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(491, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(492, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(493, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(494, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(495, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(496, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(497, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(498, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(499, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(500, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(501, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(502, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(503, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(504, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(505, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(506, 'Wendy', '12345677', 'Perempuan', 9, 2, '0812682656388', 'wendy@gmail.com', 'photo', '2020-05-16', '2020-05-16', 'anggota'),
(507, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(508, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(509, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(510, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(511, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(512, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(513, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(514, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(515, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(516, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(517, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(518, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(519, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(520, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(521, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(522, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(523, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(524, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(525, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(526, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(527, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(528, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(529, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(530, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(531, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(532, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(533, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(534, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(535, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(536, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(537, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(538, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(539, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(540, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(541, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(542, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(543, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(544, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota'),
(545, 'Yody Hasan', '1234567', 'Laki-laki', 7, 4, '08121234545', 'yody.hasan@gmail.com', 'photo', '2020-05-14', '2020-05-14', 'anggota');

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
(26, '&amp;LT;HT', '123456', 'Buku 6', 8, 10, 2020, '&amp;lt;html&amp;gt;&amp;lt;body&amp;gt; &lt;b&gt; tes &lt;/b&gt;&amp;lt;/body&amp;gt;&amp;lt;/html&amp;gt;', 9);

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(11) NOT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `quantity_inventory` int(11) DEFAULT NULL,
  `tgl_inventory` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_buku` int(11) DEFAULT NULL,
  `jumlah_buku` int(11) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `keterangan` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `tanggal_pengembalian`) VALUES
(0, 0, '2020-06-06');

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
  `logo` varchar(255) DEFAULT NULL,
  `img_header` varchar(255) DEFAULT NULL,
  `settingcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 50, 1),
(3, 7, 6),
(4, 10, 5),
(6, 3, 11);

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
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
  ADD KEY `id_anggota` (`id_anggota`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`);

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
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategori_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `idsetting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settingss`
--
ALTER TABLE `settingss`
  MODIFY `idsetting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_buku`
--
ALTER TABLE `stock_buku`
  MODIFY `id_stock_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `data_anggota` (`id_anggota`);

--
-- Constraints for table `table_tambah_stock`
--
ALTER TABLE `table_tambah_stock`
  ADD CONSTRAINT `table_tambah_stock_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `data_buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
