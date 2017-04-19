-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.0.29-MariaDB-0ubuntu0.16.04.1 - Ubuntu 16.04
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table demo_app_surat.login
CREATE TABLE IF NOT EXISTS `login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table demo_app_surat.login: ~1 rows (approximately)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id_user`, `username`, `password`, `nama`) VALUES
  (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table demo_app_surat.tb_jenis_surat
CREATE TABLE IF NOT EXISTS `tb_jenis_surat` (
  `jenis_id` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_surat` char(20) NOT NULL,
  PRIMARY KEY (`jenis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table demo_app_surat.tb_jenis_surat: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_jenis_surat` DISABLE KEYS */;
INSERT INTO `tb_jenis_surat` (`jenis_id`, `jenis_surat`) VALUES
  (1, 'khusus'),
  (2, 'dinas'),
  (4, 'cepat');
/*!40000 ALTER TABLE `tb_jenis_surat` ENABLE KEYS */;

-- Dumping structure for table demo_app_surat.tb_surat_keluar
CREATE TABLE IF NOT EXISTS `tb_surat_keluar` (
  `surat_id` int(5) NOT NULL AUTO_INCREMENT,
  `jenis_id` int(5) NOT NULL,
  `no_surat` char(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `untuk` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`surat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table demo_app_surat.tb_surat_keluar: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_surat_keluar` DISABLE KEYS */;
INSERT INTO `tb_surat_keluar` (`surat_id`, `jenis_id`, `no_surat`, `tgl_surat`, `untuk`, `perihal`, `ket`) VALUES
  (1, 1, '9000', '2015-07-29', 'iwan', 'hut', 'keterangan'),
  (3, 3, '03', '2015-10-28', 'gubernur jabar', 'hut bandung', 'ket bandung'),
  (4, 4, '111111', '2015-11-18', 'abi', 'hut ciamis', 'keterangan');
/*!40000 ALTER TABLE `tb_surat_keluar` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
