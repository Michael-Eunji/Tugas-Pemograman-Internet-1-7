-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 03:23 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ab`
--

CREATE TABLE `tbl_ab` (
  `nim` int(30) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `mk_id` varchar(30) NOT NULL,
  `wkt_absen` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ab`
--

INSERT INTO `tbl_ab` (`nim`, `nama`, `mk_id`, `wkt_absen`, `status`) VALUES
(2015223001, 'Andre', 'SE04012345', '9.30', 'Hadir'),
(2015223002, 'Ilham', 'SE04012346', '-', 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontrakmk`
--

CREATE TABLE `tbl_kontrakmk` (
  `mk_id` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontrakmk`
--

INSERT INTO `tbl_kontrakmk` (`mk_id`, `nama`) VALUES
('SE04012345', 'Andre'),
('SE04012346', 'Ilham');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `nim` int(30) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `semester` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`nim`, `nama`, `semester`, `alamat`, `telepon`, `email`) VALUES
(2015223001, 'Andre', '4', 'Jl.Kesambi', '081223347794', 'Andre123@gmail.com'),
(2015223002, 'Ilham', '4', 'Jl.Sisingamangaraja', '087892334532', 'Ilham456@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mk`
--

CREATE TABLE `tbl_mk` (
  `nim` int(30) DEFAULT NULL,
  `nama_mk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mk`
--

INSERT INTO `tbl_mk` (`nim`, `nama_mk`) VALUES
(2015223001, 'Pemograman Internet 2'),
(2015223002, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `tugas` int(11) DEFAULT NULL,
  `na` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`nim`, `nama`, `uts`, `uas`, `tugas`, `na`, `status`) VALUES
(2015223001, 'Andre', 65, 78, 90, 78, 'Lulus'),
(2015223002, 'Ilham', 50, 60, 50, 54, 'Tidak Lulus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ab`
--
ALTER TABLE `tbl_ab`
  ADD KEY `nim` (`nim`),
  ADD KEY `mk_id` (`mk_id`);

--
-- Indexes for table `tbl_kontrakmk`
--
ALTER TABLE `tbl_kontrakmk`
  ADD PRIMARY KEY (`mk_id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD KEY `nim` (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_ab`
--
ALTER TABLE `tbl_ab`
  ADD CONSTRAINT `tbl_ab_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_mhs` (`nim`),
  ADD CONSTRAINT `tbl_ab_ibfk_2` FOREIGN KEY (`mk_id`) REFERENCES `tbl_kontrakmk` (`mk_id`);

--
-- Constraints for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD CONSTRAINT `tbl_mhs_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_nilai` (`nim`);

--
-- Constraints for table `tbl_mk`
--
ALTER TABLE `tbl_mk`
  ADD CONSTRAINT `tbl_mk_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `tbl_mhs` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
