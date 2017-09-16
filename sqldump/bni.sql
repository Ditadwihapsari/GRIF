-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 10:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bni`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `Nomor` int(255) NOT NULL,
  `nama` text NOT NULL,
  `tempat` text NOT NULL,
  `harga` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`Nomor`, `nama`, `tempat`, `harga`, `foto`) VALUES
(1, 'Niko Marpaung', 'Medan', 'Rp. 195.000,-', 'images/guide/1.jpg'),
(2, 'Mulan Angela', 'Makassar', 'Rp. 160.000,-', 'images/guide/2.jpg'),
(3, 'Joko Sulaksono', 'Surabaya', 'Rp. 180.000,-', 'images/guide/3.jpg'),
(4, 'Mega Aria', 'Bali', 'Rp. 200.000,-', 'images/guide/4.jpg'),
(5, 'Lanang Sulanang', 'Yogyakarta', 'Rp. 65.000,-', 'images/guide/5.jpg'),
(6, 'Wedok Nirwadon', 'Yogyakarta', 'Rp. 145.000,-', 'images/guide/6.jpg'),
(7, 'Subekti Paryijo', 'Yogyakarta', 'Rp. 137.000,-', 'images/guide/7.jpg'),
(8, 'Suratno ', 'Yogyakarta', 'Rp. 180.000,-', 'images/guide/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guideprof`
--

CREATE TABLE `guideprof` (
  `Nomor` int(255) NOT NULL,
  `Jenis Kelamin` text NOT NULL,
  `umur` text NOT NULL,
  `email` text NOT NULL,
  `insta` text NOT NULL,
  `nope` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guideprof`
--

INSERT INTO `guideprof` (`Nomor`, `Jenis Kelamin`, `umur`, `email`, `insta`, `nope`) VALUES
(1, 'Laki-laki', '35', 'niko@gmail.com', '@nikomarpaung', '+6281229876739'),
(2, 'Perempuan', '21', 'mulan@gmail.com', '@mulanangela69', '+86293327293'),
(3, 'Laki-laki', '34', 'jokotamvan@yahoo.co.id', '@joksuls', '+6273837383'),
(4, 'Perempuan', '25', 'megaria@live.com', '@megariaaaa', '+868243232342'),
(5, 'Laki-laki', '23', 'lanangasli@gmail.com', '@lanangasli', '+62838384723'),
(6, 'Perempuan', '32', 'Wedoktulen@yahoo.com', '@wedoktulen', '+62830292323'),
(7, 'Laki-laki', '28', 'subektiunyu@live.com', '@subektiiii', '+628373920234'),
(8, 'Laki-laki', '36', 'suratno@mail.com', '@suratnoklasik', '+863824202334');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guideprof`
--
ALTER TABLE `guideprof`
  ADD PRIMARY KEY (`Nomor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
