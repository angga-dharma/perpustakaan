-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for perpustakaan
CREATE DATABASE IF NOT EXISTS `perpustakaan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `perpustakaan`;

-- Dumping structure for table perpustakaan.anggota
CREATE TABLE IF NOT EXISTS `anggota` (
  `id_anggota` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `alamat_anggota` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='berisi data - data anggota';

-- Dumping data for table perpustakaan.anggota: ~2 rows (approximately)
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat_anggota`, `jenis_kelamin`, `agama`, `no_telp`) VALUES
	(1, 'I Gusti Agung Putu Arisandi Yudiarta', 'Jalan Kesambi Gang X No X', 'Laki - Laki', 'Hindu', '081999666858'),
	(2, 'Kadek Anggi Maharani', 'Jalan Gunung Lebah Gang X No X', 'Perempuan', 'Hindu', '085777232954');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;

-- Dumping structure for table perpustakaan.buku
CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `nama_buku` varchar(50) DEFAULT NULL,
  `jenis_buku` varchar(50) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='berisi data - data buku';

-- Dumping data for table perpustakaan.buku: ~3 rows (approximately)
/*!40000 ALTER TABLE `buku` DISABLE KEYS */;
INSERT INTO `buku` (`id_buku`, `nama_buku`, `jenis_buku`, `tahun_terbit`, `pengarang`, `penerbit`, `status`) VALUES
	(1, 'Cara Gaul Kuasai Daily English Conversation', 'Panduan', 2015, 'Yusup Priyasudiarja', 'PT Grasindo', 'Tersedia'),
	(2, 'Kamus Inggris - Indonesia', 'Kamus', 1976, 'John M. Echols', 'PT Gramedia Jakarta', 'Tersedia');
/*!40000 ALTER TABLE `buku` ENABLE KEYS */;

-- Dumping structure for table perpustakaan.peminjaman
CREATE TABLE IF NOT EXISTS `peminjaman` (
  `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `petugas` varchar(50) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `batas_pengembalian` date DEFAULT NULL,
  `status_peminjaman` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_peminjaman`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='berisi data - data peminjama buku';

-- Dumping data for table perpustakaan.peminjaman: ~2 rows (approximately)
/*!40000 ALTER TABLE `peminjaman` DISABLE KEYS */;
INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_anggota`, `petugas`, `tanggal_pinjam`, `batas_pengembalian`, `status_peminjaman`) VALUES
	(1, 1, 1, 'Putu Angga Dharma Putra', '2022-07-14', '2022-07-21', 'Telah Dikembalikan'),
	(2, 2, 2, 'I Made Darma Yuda', '2022-07-15', '2022-07-22', 'Telah Dikembalikan');
/*!40000 ALTER TABLE `peminjaman` ENABLE KEYS */;

-- Dumping structure for table perpustakaan.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_petugas` char(50) DEFAULT NULL,
  `alamat_petugas` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `agama` char(50) DEFAULT NULL,
  `jabatan` char(50) DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='berisi data - data petugas perpus online dan username bisa digunakan untuk login';

-- Dumping data for table perpustakaan.petugas: ~2 rows (approximately)
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `alamat_petugas`, `jenis_kelamin`, `agama`, `jabatan`) VALUES
	(1, 'angga_dharma', '285741angga', 'Putu Angga Dharma Putra', 'Jalan Gunung Lebah Gang X No X', 'Laki - Laki', 'Hindu', 'Admin'),
	(2, 'darma_yuda', '123456', 'I Made Darma Yuda', 'Jalan Kusuma Bangsa Gang X No X', 'Laki - Laki', 'Hindu', 'Petugas');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
