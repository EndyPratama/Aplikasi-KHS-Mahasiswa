-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 05:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kel4`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `dosen_wali` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `npm`, `jenis_kelamin`, `foto`, `dosen_wali`, `no_telp`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
(1, 'Nur Syifaul Husna', '18081010042', 'Perempuan', 'WhatsApp_Image_2020-04-07_at_10_53_00-removebg-preview__1_-removebg-preview-removebg-preview.png', 'Fetty Tri Anggraeny, S.Kom, M.Kom', '08818532807', 'Blora', '1999-12-31', 'Bojonegoro'),
(2, 'Endy Gigih Pratama', '18081010066', 'Laki-Laki', 'WhatsApp_Image_2021-10-13_at_10_43_241.jpeg', 'Pak Aji', '0888689909', 'Kediri', '1999-06-01', 'Kediri'),
(5, 'Sarirotul Latifah', '18081010045', 'Perempuan', 'WhatsApp_Image_2021-10-13_at_10_43_24_(1).jpeg', 'Fetty Tri Anggraeny, S.Kom, M.Kom', '085815640137', 'Pasuruan', '2000-09-27', 'Jeruk Kraton'),
(6, 'Hamzah Dimas', '18081010119', 'Laki-Laki', 'gambar1.png', 'Bapak', '18081010119', 'Surabaya', '2000-01-23', 'Surabaya'),
(7, 'Ilham Malik', '18081010144', 'Laki-Laki', 'gambar2.png', 'Ibu', '18081010144', 'Surabaya', '2000-02-23', 'Surabaya'),
(8, 'Syafri Firmansyah', '18081010142', 'Laki-Laki', 'gambar3.png', 'Bapak', '18081010142', 'Sidoarjo', '2000-03-23', 'Sidoarjo'),
(9, 'Rifky Akhmad F', '18081010126', 'Laki-Laki', 'gambar4.png', 'Ibu', '18081010126', 'Surabaya', '2000-04-02', 'Surabaya'),
(10, 'Merdin Risalul A', '18081010081', 'Laki-Laki', 'gambar5.png', 'Bapak', '18081010081', 'Surabaya', '2000-05-26', 'Surabaya'),
(11, 'Chakra satrya', '18081010102', 'Laki-Laki', 'gambar6.png', 'Ibu', '082228550797', 'Surabaya', '2000-06-23', 'Surabaya'),
(12, 'Davila Erdianita', '18081010120', 'Perempuan', 'gambar7.png', 'Ibu', '18081010120', 'Surabaya', '2000-07-01', 'Surabaya'),
(13, 'Melinda Shilatil Fauziyah', '18081010122', 'Perempuan', 'gambar8.png', 'Bapak', '18081010122', 'Surabaya', '2000-08-02', 'Surabaya'),
(14, 'Nafa Nabila El Indri', '18081010124', 'Perempuan', 'gambar9.png', 'Ibu', '18081010124', 'Surabaya', '2000-09-03', 'Surabaya'),
(15, 'Taufik nur Firmansyah', '18081010046', 'Laki-Laki', 'gambar10.png', 'Bapak', '180810110046', 'Kediri', '2000-09-01', 'Kediri'),
(16, 'Purwito Ridho Widianto', '18081010047', 'Laki-Laki', 'gambar11.png', 'Ibu', '18081010047', 'Kediri', '2000-10-02', 'Kediri'),
(17, 'Rifqi Raditya Rizqullah', '18081010074', 'Laki-Laki', 'gambar12.png', 'Bapak', '087818088018', 'Surabaya', '2000-04-04', 'Surabaya'),
(18, 'Avrie Akbar Prabowo', '18081010024', 'Laki-Laki', 'gambar13.png', 'Ibu', '18081010024', 'Surabaya', '2000-10-19', 'Surabaya'),
(19, 'Rahmat Auliya', '18081010027', 'Laki-Laki', 'gambar14.png', 'Bapak', '18081010027', 'Surabaya', '2000-06-05', 'Surabaya'),
(20, 'Reynaldi Satriawan W', '18081010096', 'Laki-Laki', 'gambar15.png', 'Ibu', '18081010096', 'Surabaya', '2000-10-03', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `sks`) VALUES
(1, 'Pemrograman Web', '3'),
(3, 'Metodologi Penelitian', '3'),
(4, 'Data Warehouse', '3'),
(6, 'Analisis Kebutuhan', '3'),
(7, 'Pemrograman API', '3'),
(8, 'Rekayasa Perangkat lunak', '3'),
(9, 'Tata Kelola IT', '3');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `id_matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai`, `npm`, `id_matkul`) VALUES
(5, '85', '18081010042', 3),
(6, '98', '18081010042', 4),
(8, '90', '18081010042', 7),
(9, '90', '18081010042', 8),
(10, '90', '18081010042', 6),
(11, '80', '18081010042', 9),
(13, '95', '18081010066', 3),
(14, '90', '18081010066', 4),
(15, '80', '18081010066', 6),
(16, '95', '18081010066', 7),
(17, '82', '18081010066', 8),
(18, '88', '18081010066', 9),
(20, '80', '18081010045', 3),
(21, '81', '18081010045', 4),
(22, '95', '18081010045', 6),
(23, '85', '18081010045', 7),
(24, '80', '18081010045', 8),
(25, '90', '18081010045', 9),
(26, '90', '18081010119', 1),
(28, '88', '18081010119', 4),
(29, '80', '18081010119', 6),
(31, '95', '18081010119', 7),
(32, '85', '18081010119', 8),
(33, '87', '18081010119', 9),
(34, '96', '18081010144', 1),
(36, '90', '18081010144', 4),
(37, '95', '18081010144', 6),
(38, '80', '18081010144', 7),
(39, '95', '18081010144', 8),
(40, '90', '18081010144', 9),
(41, '88', '18081010142', 1),
(42, '90', '18081010142', 3),
(44, '90', '18081010142', 6),
(45, '95', '18081010142', 7),
(46, '90', '18081010142', 8),
(47, '93', '18081010142', 9),
(48, '84', '18081010126', 1),
(49, '95', '18081010126', 3),
(51, '95', '18081010126', 6),
(52, '87', '18081010126', 7),
(53, '95', '18081010126', 8),
(54, '86', '18081010126', 9),
(55, '95', '18081010081', 1),
(56, '88', '18081010081', 3),
(58, '90', '18081010126', 6),
(59, '95', '18081010081', 7),
(60, '90', '18081010081', 8),
(61, '82', '18081010081', 9),
(62, '89', '18081010102', 1),
(63, '80', '18081010102', 3),
(65, '95', '18081010102', 6),
(66, '88', '18081010102', 7),
(70, '86', '18081010102', 8),
(71, '88', '18081010102', 9),
(72, '82', '18081010120', 1),
(73, '84', '18081010120', 3),
(74, '84', '18081010120', 4),
(76, '93', '18081010120', 7),
(77, '95', '18081010120', 8),
(78, '97', '18081010120', 9),
(79, '95', '18081010122', 1),
(80, '94', '18081010122', 3),
(81, '95', '18081010122', 4),
(84, '83', '18081010122', 7),
(85, '90', '18081010122', 8),
(86, '88', '18081010122', 9),
(87, '90', '18081010124', 1),
(88, '87', '18081010124', 3),
(89, '80', '18081010124', 4),
(90, '90', '18081010124', 6),
(93, '84', '18081010124', 8),
(94, '80', '18081010124', 9),
(96, '95', '18081010046', 3),
(97, '90', '18081010046', 4),
(98, '88', '18081010046', 6),
(100, '90', '18081010046', 8),
(101, '93', '18081010046', 9),
(102, '87', '18081010046', 1),
(103, '95', '18081010047', 1),
(104, '87', '18081010047', 3),
(105, '95', '18081010047', 4),
(107, '95', '18081010047', 6),
(109, '88', '18081010047', 8),
(111, '95', '18081010047', 9),
(112, '85', '18081010074', 1),
(113, '95', '18081010074', 3),
(114, '84', '18081010074', 4),
(115, '80', '18081010074', 6),
(117, '80', '18081010074', 8),
(118, '90', '18081010074', 9),
(119, '95', '18081010024', 1),
(120, '83', '18081010024', 3),
(121, '95', '18081010024', 4),
(122, '86', '18081010024', 6),
(124, '90', '18081010024', 8),
(126, '83', '18081010024', 9),
(127, '92', '18081010027', 1),
(128, '90', '18081010027', 3),
(129, '80', '18081010027', 4),
(130, '90', '18081010027', 6),
(132, '89', '18081010027', 7),
(135, '82', '18081010096', 1),
(136, '80', '18081010096', 3),
(137, '90', '18081010096', 4),
(138, '94', '18081010096', 6),
(139, '95', '18081010096', 7),
(140, '83', '18081010096', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `id_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
