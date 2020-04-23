-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: perpus
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.36-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_anggota`
--

DROP TABLE IF EXISTS `data_anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(200) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_anggota`
--
-- ORDER BY:  `id_anggota`

LOCK TABLES `data_anggota` WRITE;
/*!40000 ALTER TABLE `data_anggota` DISABLE KEYS */;
INSERT INTO `data_anggota` VALUES (1,NULL,NULL,NULL,'mustafa',NULL),(2,'dfasdfad','dfasd','dfadf','admin','7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),(3,'Mustafa','piayu','123','mustafa.m','7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
/*!40000 ALTER TABLE `data_anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_buku`
--

DROP TABLE IF EXISTS `data_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(10) DEFAULT NULL,
  `judul_buku` varchar(200) DEFAULT NULL,
  `pengarang_buku` varchar(200) DEFAULT NULL,
  `penerbit` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_buku`
--
-- ORDER BY:  `id_buku`

LOCK TABLES `data_buku` WRITE;
/*!40000 ALTER TABLE `data_buku` DISABLE KEYS */;
INSERT INTO `data_buku` VALUES (1,'9786020483','101+ Pengetahuan Bikin Kamu Mahir IT',NULL,NULL),(2,'123','gsdfgsd','gfgsdf','fgsdf'),(3,NULL,NULL,NULL,NULL),(4,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_penerbit`
--

DROP TABLE IF EXISTS `data_penerbit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_penerbit` (
  `id_penerbit` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_penerbit`
--
-- ORDER BY:  `id_penerbit`

LOCK TABLES `data_penerbit` WRITE;
/*!40000 ALTER TABLE `data_penerbit` DISABLE KEYS */;
INSERT INTO `data_penerbit` VALUES (1,'Bentang Pustaka'),(2,'Bukune');
/*!40000 ALTER TABLE `data_penerbit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_pengarang`
--

DROP TABLE IF EXISTS `data_pengarang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pengarang` (
  `id_pengarang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengarang` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_pengarang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pengarang`
--
-- ORDER BY:  `id_pengarang`

LOCK TABLES `data_pengarang` WRITE;
/*!40000 ALTER TABLE `data_pengarang` DISABLE KEYS */;
INSERT INTO `data_pengarang` VALUES (1,'Feri Sulianta'),(2,'Ahmad Rifa`i Rif`an'),(3,'Kurniawan Gunadi');
/*!40000 ALTER TABLE `data_pengarang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_username`
--

DROP TABLE IF EXISTS `data_username`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_username` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_username`
--
-- ORDER BY:  `id_user`

LOCK TABLES `data_username` WRITE;
/*!40000 ALTER TABLE `data_username` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_username` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-27 13:56:21
