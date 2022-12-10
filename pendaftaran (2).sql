-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 12:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` varchar(1200) NOT NULL,
  `gambar` varchar(1249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `judul`, `isi`, `gambar`) VALUES
(1, 'Beasiswa', 'Ditawarkan pada 100 siswa peringkat teratas yang memenuhi persyaratan', '20221210112924.jpeg'),
(2, 'Pembelajaran Online', 'Kemudahan belajar dimana saja dan kapan saja', '20221210113018.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `email`, `subject`, `isi`) VALUES
(3, 'Reza Octawiadi', 'reza17@gmail.com', 'keren', 'keren banget'),
(4, 'Reza Octawiadi', 'rezao122@gmail.com', 'awjnf', 'klasnklfajs');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `paket` varchar(1000) NOT NULL,
  `keterangan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`, `keterangan`) VALUES
(1, 'Kelas 7', 'Matematika,IPA,Fisika,IPS,Bahasa Indonesia,Bahasa Inggris'),
(2, 'Kelas 8', 'Matematika,IPA,Fisika,IPS,Bahasa Indonesia,Bahasa Inggris'),
(3, 'Kelas 9', 'Matematika,IPA,Fisika,IPS,Bahasa Indonesia,Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(10) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `asal_sekolah` varchar(1000) NOT NULL,
  `id_paket` int(10) NOT NULL,
  `tempat_lahir` varchar(1000) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama`, `alamat`, `no_telp`, `asal_sekolah`, `id_paket`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`) VALUES
(22115, 'widi intan nur', 'bogor', '0898787122', 'bogor', 1, 'Bogor dramaga', '2022-11-28', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`id`, `nama`, `email`, `username`, `password`, `level`) VALUES
(5, 'widi intan', 'widi@gmail.com', 'widi', 'd49b9709c6ca14577f08b2ab21ab7964', 1),
(9, 'widi intan', 'widi@gmail.com', 'widi123', 'ef2105f8b8e1112c4148421b0f65febe', 1),
(10, 'Reza Octawiadi', 'rezao122@gmail.com', 'reza33', '67c24e9bfbcb7d2247fa7e5d5d0a12c1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22117;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
