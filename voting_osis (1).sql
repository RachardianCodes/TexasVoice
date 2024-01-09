-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 02:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tingkat` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `max_time` datetime NOT NULL,
  `role` enum('voter','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nis`, `nama`, `tingkat`, `kelas`, `username`, `password`, `status`, `max_time`, `role`) VALUES
(1, 2105954, 'RACHARDIAN BAGASKORO', 'XII', 'RPL 1', 'FlyMaker771', 'RDNnet304', 'Belum Vote', '2033-12-29 12:53:47', 'admin'),
(2, 111111, 'admin', 'admin', 'admin', 'admin', 'admin', 'Belum Vote', '2023-12-21 19:01:24', 'admin'),
(3, 222222, 'admin2', 'admin2', 'admin2', 'admin2', 'admin2', 'Sudah Vote', '2023-12-30 19:01:24', 'admin'),
(4, 33333, 'voter', 'voter', 'voter', 'voter', 'voter', 'Sudah Vote', '2023-12-29 19:02:57', 'voter'),
(5, 44444, 'voter2', 'voter2', 'voter2', 'voter2', 'voter2', 'Belum Vote', '2023-12-21 19:02:57', 'voter'),
(6, 55555, 'voter3', 'voter3', 'voter3', 'voter3', 'voter3', 'Sudah Vote', '2023-12-29 13:05:54', 'voter'),
(37, 2105684, 'Jack1', 'X', 'TKRO 1', 'Jack1', 'Jack1', 'Sudah Vote', '2023-12-29 15:00:00', 'voter'),
(38, 2105685, 'Jack2', 'X', 'TKRO 2', 'Jack2', 'Jack2', 'Sudah Vote', '2023-12-30 15:00:00', 'voter'),
(39, 2105686, 'Jack3', 'X', 'TKRO 3', 'Jack3', 'Jack3', 'Sudah Vote', '2023-12-31 15:00:00', 'voter'),
(40, 2105687, 'Jack4', 'X', 'TKRO 4', 'Jack4', 'Jack4', 'Sudah Vote', '2024-01-01 15:00:00', 'voter'),
(41, 2105688, 'Jack5', 'X', 'TKRO 5', 'Jack5', 'Jack5', 'Sudah Vote', '2024-01-02 15:00:00', 'voter'),
(42, 2105689, 'Jack6', 'X', 'TKRO 6', 'Jack6', 'Jack6', 'Sudah Vote', '2024-01-03 15:00:00', 'voter'),
(44, 66666, 'tes', 'XII', 'TM 2', 'tes', 'tes', 'Belum Vote', '2023-12-29 08:02:00', 'voter'),
(46, 2105684, 'Jack1', 'X', 'TKRO 1', 'Jack1', 'Jack1', 'Belum Vote', '2023-12-29 15:00:00', 'voter'),
(47, 2105685, 'Jack2', 'X', 'TKRO 2', 'Jack2', 'Jack2', 'Belum Vote', '2023-12-30 15:00:00', 'voter'),
(48, 2105686, 'Jack3', 'X', 'TKRO 3', 'Jack3', 'Jack3', 'Belum Vote', '2023-12-31 15:00:00', 'voter'),
(49, 2105687, 'Jack4', 'X', 'TKRO 4', 'Jack4', 'Jack4', 'Belum Vote', '2024-01-01 15:00:00', 'voter'),
(50, 2105688, 'Jack5', 'X', 'TKRO 5', 'Jack5', 'Jack5', 'Belum Vote', '2024-01-02 15:00:00', 'voter'),
(51, 2105689, 'Jack6', 'X', 'TKRO 6', 'Jack6', 'Jack6', 'Belum Vote', '2024-01-03 15:00:00', 'voter'),
(53, 23132321, 'COBA', 'XI', 'RPL 3', 'COBA', 'COBA', 'Sudah Vote', '2024-01-10 23:42:00', 'voter'),
(54, 432156, 'INI COBA', 'XII', 'RPL 1', 'INI COBA', 'INI COBA', 'Sudah Vote', '2024-01-17 08:38:18', 'voter');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE `kandidat` (
  `id_kandidat` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nis`, `nama`, `visi`, `misi`, `foto`) VALUES
(3, 2105656, 'RAFI', 'MEMBARA', 'GASKAN', '1703372591_14866126f66274f5a1c8.png'),
(4, 2105656, 'TIO', 'GADANG', 'TRABAS AJALAH', '1703372624_a62bfbdcc349bab181da.png');

-- --------------------------------------------------------

--
-- Table structure for table `log_voters`
--

CREATE TABLE `log_voters` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_kandidat` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_voters`
--

INSERT INTO `log_voters` (`id`, `id_akun`, `id_kandidat`, `value`) VALUES
(1, 37, 3, 1),
(2, 38, 4, 1),
(3, 39, 4, 1),
(4, 40, 4, 1),
(5, 41, 3, 1),
(6, 42, 4, 1),
(7, 6, 3, 1),
(8, 53, 3, 1),
(9, 54, 4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `kandidat`
--
ALTER TABLE `kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indexes for table `log_voters`
--
ALTER TABLE `log_voters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_kandidat` (`id_kandidat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `kandidat`
--
ALTER TABLE `kandidat`
  MODIFY `id_kandidat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_voters`
--
ALTER TABLE `log_voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_voters`
--
ALTER TABLE `log_voters`
  ADD CONSTRAINT `log_voters_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`),
  ADD CONSTRAINT `log_voters_ibfk_2` FOREIGN KEY (`id_kandidat`) REFERENCES `kandidat` (`id_kandidat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
