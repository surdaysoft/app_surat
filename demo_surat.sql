-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Nov 2015 pada 08.57
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_surat`
--

CREATE TABLE `tb_jenis_surat` (
  `jenis_id` int(5) NOT NULL,
  `jenis_surat` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jenis_surat`
--

INSERT INTO `tb_jenis_surat` (`jenis_id`, `jenis_surat`) VALUES
(1, 'khusus'),
(2, 'dinas'),
(4, 'cepat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `surat_id` int(5) NOT NULL,
  `jenis_id` int(5) NOT NULL,
  `no_surat` char(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `untuk` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`surat_id`, `jenis_id`, `no_surat`, `tgl_surat`, `untuk`, `perihal`, `ket`) VALUES
(1, 1, '9000', '2015-07-29', 'iwan', 'hut', 'keterangan'),
(3, 3, '03', '2015-10-28', 'gubernur jabar', 'hut bandung', 'ket bandung'),
(4, 4, '111111', '2015-11-18', 'abi', 'hut ciamis', 'keterangan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis_surat`
--
ALTER TABLE `tb_jenis_surat`
  MODIFY `jenis_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  MODIFY `surat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
