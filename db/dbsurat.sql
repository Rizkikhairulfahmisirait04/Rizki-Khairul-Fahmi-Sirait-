-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 03:33 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsip_suratkeluar`
--

CREATE TABLE `arsip_suratkeluar` (
  `no_surat` varchar(50) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `tgl_keluar` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `arsip_suratmasuk`
--

CREATE TABLE `arsip_suratmasuk` (
  `no_surat` varchar(20) NOT NULL DEFAULT '',
  `nama_penerima` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_perkara` varchar(50) NOT NULL,
  `peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` varchar(25) NOT NULL,
  `tgl_kembali` varchar(25) NOT NULL,
  `lama_pinjam` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no_perkara`, `peminjam`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keterangan`, `id`) VALUES
('01/PID.B/2018/PN.KIS', 'A. Nasution', '2018-12-14', '2018-12-16', 2, '-', 4),
('01/PDT.G/2018/PN.KIS', 'J. Siahaan', '2018-12-10', 'Belum Kembali', 0, '-', 5),
('02/PID.B/2018/PN.KIS', 'Bejo', '2018-12-11', 'Belum Kembali', 0, 'Input ke CTS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_surat` varchar(20) NOT NULL,
  `nama_pengirim` text NOT NULL,
  `tgl_keluar` date NOT NULL,
  `instansi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_surat`, `nama_pengirim`, `tgl_keluar`, `instansi`) VALUES
('12345', 'Kumala', '2019-01-30', 'Kantor Polres'),
('15220413', 'Rizki You Arda', '2019-01-31', 'Kantor Samsat'),
('15220452', 'Eci Syafitri Sirait', '2019-02-06', 'Kantor Pengadilan Negri Kisara'),
('15229496', 'Novi Kumala', '2019-01-23', 'Kantor DPRD');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_surat` varchar(50) NOT NULL DEFAULT '',
  `nama_penerima` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_surat`, `nama_penerima`, `tgl_masuk`, `nama_pengirim`, `instansi`, `status`) VALUES
('133snsn', 'snsnns', '2019-01-10', 'gshhs', 'jjjjjjjj', 'Ada'),
('15220406', 'Novi Kumala', '2019-01-30', 'Rizki You Arda', 'Kantor Samsat', 'Ada'),
('15220413', 'Eci Syafitri Sirait', '2019-01-30', 'Novi Kumala', 'Kantor Pengadilan Negri Kisaran', 'Ada'),
('15220865', 'Rizki You Arda', '2019-01-28', 'Eci Syafitri Sirait', 'Kantor DPRD', 'Tidak ada ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip_suratkeluar`
--
ALTER TABLE `arsip_suratkeluar`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `arsip_suratmasuk`
--
ALTER TABLE `arsip_suratmasuk`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
