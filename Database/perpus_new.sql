-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 04:52 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(200) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `no_induk` varchar(45) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id_anggota`, `nama_anggota`, `alamat`, `no_telepon`, `no_induk`, `username`, `password`, `email`, `tanggal_daftar`) VALUES
(1, NULL, NULL, NULL, NULL, 'mustafa', NULL, NULL, NULL),
(2, 'dfasdfad', 'dfasd', 'dfadf', NULL, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL),
(3, 'Mustafa', 'piayu', '123', NULL, 'mustafa.m', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL),
(4, 'Andini Prastiti', 'Piayu', 'dfdsadfadf', NULL, 'andini.prastiti', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL),
(5, 'Prastiti Andini', 'GMP', '0812682656388', NULL, 'prastiti.andini', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_buku`
--

CREATE TABLE `data_buku` (
  `id_buku` int(11) NOT NULL,
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

INSERT INTO `data_buku` (`id_buku`, `isbn`, `judul_buku`, `id_pengarang_buku`, `id_penerbit`, `tahun_terbit`, `keterangan`, `id_rak`) VALUES
(1, '9786020483', '101+ PENGETAHUAN BIKIN KAMU MAHIR IT', 1, 1, 2019, '', 2),
(5, '9786025849', 'CERAMAH KOCAK BIKIN NGAKAK', 2, 2, 2008, '', 1),
(6, '9786028740', 'Pesan Dari Bintang', 3, 3, NULL, NULL, NULL),
(8, '9786025710', 'ALL NEW TES CPNS 2019-2020', 0, 0, 2019, '', 0),
(9, '9786230004', 'Strategi Merancang Arsitektur Sistem Informasi Masa Kini', NULL, NULL, 2019, '', NULL),
(10, '9786230004', 'Strategi Merancang Arsitektur Sistem Informasi Masa Kini', 1, 5, 2019, '', 2),
(11, '9786230004', 'Strategi Merancang Arsitektur Sistem Informasi Masa Kini', 1, 5, 2019, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_penerbit`
--

CREATE TABLE `data_penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(45) DEFAULT NULL,
  `desc` varchar(10) DEFAULT 'penerbit'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penerbit`
--

INSERT INTO `data_penerbit` (`id_penerbit`, `nama_penerbit`, `desc`) VALUES
(1, 'Elex Media Komputindo', 'penerbit'),
(2, 'Buku Pintar Indonesia', 'penerbit'),
(3, 'Lentera Hati', 'penerbit'),
(4, 'Cmedia ', 'penerbit'),
(5, 'Gramedia Pustaka Utama ', 'penerbit');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengarang`
--

CREATE TABLE `data_pengarang` (
  `id_pengarang` int(11) NOT NULL,
  `nama_pengarang` varchar(200) DEFAULT NULL,
  `desc` varchar(10) DEFAULT 'pengarang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengarang`
--

INSERT INTO `data_pengarang` (`id_pengarang`, `nama_pengarang`, `desc`) VALUES
(1, 'Feri Sulianta', 'pengarang'),
(2, 'Zaenuddin H.M', 'pengarang'),
(3, 'Sitta Karina', 'pengarang'),
(4, 'TIM GARUDA EDUKA', 'pengarang'),
(5, 'Mustafa1', 'pengarang'),
(6, 'Mustafa2', 'pengarang'),
(7, 'Mustafa3', 'pengarang'),
(8, 'Mustafa4', 'pengarang');

-- --------------------------------------------------------

--
-- Table structure for table `data_rak`
--

CREATE TABLE `data_rak` (
  `id_rak` int(11) NOT NULL,
  `kode_rak` varchar(5) DEFAULT NULL,
  `desc` varchar(10) DEFAULT 'rak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_rak`
--

INSERT INTO `data_rak` (`id_rak`, `kode_rak`, `desc`) VALUES
(1, '1A', 'rak'),
(2, '1B', 'rak');

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

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `id_buku`, `quantity_inventory`, `tgl_inventory`, `keterangan`) VALUES
(1, 1, 5, '2020-02-13', 'tes'),
(2, 6, 10, '2020-02-13', 'tes'),
(3, 5, 10, '2020-02-13', 'tesss'),
(4, 5, 10, '2020-02-13', ''),
(5, 6, 10, '2020-02-13', ''),
(6, 5, 10, '2020-02-13', ''),
(7, 6, 13, '2020-02-13', ''),
(8, 5, 12, '2020-02-13', ''),
(9, 5, 12, '2020-02-13', ''),
(10, 5, 15, '2020-02-13', ''),
(11, 6, 13, '2020-02-13', ''),
(12, 6, 12, '2020-02-13', ''),
(13, 5, 2, '2020-02-13', ''),
(14, 5, 6, '2020-02-13', ''),
(15, 6, 7, '2020-02-13', ''),
(16, 1, 10, '2020-02-13', ''),
(17, 1, 10, '2020-02-13', ''),
(18, 5, 1, '2020-02-15', 'tes'),
(19, 5, 2, '2020-02-15', ''),
(20, 5, 2, '2020-02-15', ''),
(21, 5, 2, '2020-02-15', ''),
(22, 1, 2, '2020-02-15', ''),
(23, 8, 2, '2020-02-15', ''),
(24, 1, 2, '2020-02-15', ''),
(25, 1, 2, '2020-02-15', ''),
(26, 1, 2, '2020-02-15', ''),
(27, 1, 2, '2020-02-15', ''),
(28, 5, 2, '2020-02-15', ''),
(29, 1, 2, '2020-02-15', 'tes'),
(30, 5, 4, '2020-02-15', 'tes'),
(31, 1, 12, '2020-02-15', 'tes'),
(32, 1, 14, '2020-02-15', 'tessssssss'),
(33, 1, 13, '2020-02-15', 'tesss'),
(34, 1, 15, '2020-02-15', 'tesss'),
(35, 1, 20, '2020-02-15', 'tessss'),
(36, 1, 40, '2020-02-16', 'TESSSSS'),
(37, 1, 50, '2020-02-17', 'tessss'),
(38, 1, 22, '2020-02-15', 'teetetetet'),
(39, 1, 22, '2020-02-16', 'fcdsfgdsfgsdgfd');

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
  `tanggal_peminjaman` date DEFAULT NULL
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
(2, 6, NULL),
(3, 7, 6),
(4, 4, 5);

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
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`id_buku`);

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategori_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

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
  ADD PRIMARY KEY (`id_stock_buku`);

--
-- Indexes for table `table_tambah_stock`
--
ALTER TABLE `table_tambah_stock`
  ADD PRIMARY KEY (`id_tambah_stock`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_buku`
--
ALTER TABLE `data_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_penerbit`
--
ALTER TABLE `data_penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pengarang`
--
ALTER TABLE `data_pengarang`
  MODIFY `id_pengarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_rak`
--
ALTER TABLE `data_rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id_stock_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_tambah_stock`
--
ALTER TABLE `table_tambah_stock`
  MODIFY `id_tambah_stock` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
