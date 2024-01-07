-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 10:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursu`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `programkursus` set('Bahasa Inggris','Matematika','Komputer','Calistung') NOT NULL,
  `harikursus` set('senin dan kamis','selasa dan jum''at','rabu dan sabtu','') NOT NULL,
  `waktukursus` set('14.00 - 15.30','16.00 - 17.30','19.00 - 20.30','') NOT NULL,
  `pengajar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `programkursus`, `harikursus`, `waktukursus`, `pengajar`) VALUES
(1, 'Apel', 'Bahasa Inggris', 'senin dan kamis', '14.00 - 15.30', 'BUDI'),
(2, 'Anggur', 'Calistung', 'senin dan kamis', '14.00 - 15.30', 'BUDI'),
(6, 'Jeruk', 'Komputer', 'senin dan kamis', '14.00 - 15.30', 'hadi'),
(8, 'Ahmad Fatchul Huda', 'Komputer', 'rabu dan sabtu', '19.00 - 20.30', 'Farhan');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` char(13) NOT NULL,
  `namaortu` varchar(50) NOT NULL,
  `asalsekolah` varchar(50) NOT NULL,
  `programkursus` set('Bahasa Inggris','Matematika','Komputer','Calistung') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `tanggallahir`, `jeniskelamin`, `alamat`, `nohp`, `namaortu`, `asalsekolah`, `programkursus`, `gambar`) VALUES
(5, 'Ahmad Fatchul Huda', '2024-01-27', 'laki-laki', 'medan', '085768979940', 'huda', 'smk', 'Bahasa Inggris', '6597c7f576684.jpg'),
(11, 'ridwan', '2024-01-10', 'laki-laki', 'medan', '085768979940', 'medan', 'sma', 'Bahasa Inggris', '6597c7e1d19f8.jpg'),
(20, 'Ahmad Fatchul Huda', '2024-01-01', 'laki-laki', 'aceh', '8227896', 'huda', 'smk', 'Bahasa Inggris', '6597bfe0ba6bf.jpg'),
(21, 'Falih Gumilang', '2024-01-13', 'laki-laki', 'medan', '085768979940', 'falih', 'smk jakarta', 'Bahasa Inggris', '6597bf9516229.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '12345', 'admin'),
(2, 'siswa', 'siswa', '12345', 'siswa'),
(3, 'pemilik', 'pemilik', '12345', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
