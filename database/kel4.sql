-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 09:24 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `no_telp`, `alamat`, `id_user`) VALUES
(1, 'Nur Syifaul Husna', '085731777966', 'Bojonegoro', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama`, `jenis_kelamin`, `alamat`, `no_telp`, `foto`, `id_user`) VALUES
(1, '121332434532', 'Fetty Nur Anggreini', 'Perempuan', 'Surabaya', '081334859975', 'gambar.png', 2),
(2, '21212', 'Rizky Parlika, S.Kom., M.Kom.', 'Laki-Laki', '', '', '', 21),
(3, '21212', 'Dr. I Gede Susrama, ST., M.Kom', 'Laki-Laki', '', '', '', 22),
(4, '', 'Fawwaz Ali Akbar, S.Kom., M.Kom.', '', '', '', '', 23),
(5, '', 'Retno Mumpuni, S.Kom., M.Sc.', '', '', '', '', 24),
(6, '', 'Dr. Basuki Rahmat, S.Si, MT.', '', '', '', '', 25),
(7, '', 'Faisal Muttaqin, S.Kom., M.T.', '', '', '', '', 26),
(8, '', 'Chrystia Aji Putra, S.Kom., M.T.', '', '', '', '', 27),
(10, '-', '-', '-', '-', '-', 'gambar.png', 28);

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
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `npm`, `jenis_kelamin`, `foto`, `dosen_wali`, `no_telp`, `tempat_lahir`, `tgl_lahir`, `alamat`, `id_user`) VALUES
(1, 'Nur Syifaul Husna', '18081010042', 'Perempuan', 'WhatsApp_Image_2020-04-07_at_10_53_00-removebg-preview__1_-removebg-preview-removebg-preview.png', 'Fetty Tri Anggraeny, S.Kom, M.Kom', '08818532807', 'Blora', '1999-12-31', 'Bojonegoro', 3),
(2, 'Endy Gigih Pratama', '18081010066', 'Laki-Laki', 'WhatsApp_Image_2021-10-13_at_10_43_241.jpeg', 'Pak Aji', '0888689909', 'Kediri', '1999-06-01', 'Kediri', 4),
(5, 'Sarirotul Latifah', '18081010045', 'Perempuan', 'WhatsApp_Image_2021-10-13_at_10_43_24_(1).jpeg', 'Fetty Tri Anggraeny, S.Kom, M.Kom', '085815640137', 'Pasuruan', '2000-09-27', 'Jeruk Kraton', 5),
(6, 'Hamzah Dimas', '18081010119', 'Laki-Laki', 'gambar1.png', 'Bapak', '18081010119', 'Surabaya', '2000-01-23', 'Surabaya', 6),
(7, 'Ilham Malik', '18081010144', 'Laki-Laki', 'gambar2.png', 'Ibu', '18081010144', 'Surabaya', '2000-02-23', 'Surabaya', 7),
(8, 'Syafri Firmansyah', '18081010142', 'Laki-Laki', 'gambar3.png', 'Bapak', '18081010142', 'Sidoarjo', '2000-03-23', 'Sidoarjo', 8),
(9, 'Rifky Akhmad F', '18081010126', 'Laki-Laki', 'gambar4.png', 'Ibu', '18081010126', 'Surabaya', '2000-04-02', 'Surabaya', 9),
(10, 'Merdin Risalul A', '18081010081', 'Laki-Laki', 'gambar5.png', 'Bapak', '18081010081', 'Surabaya', '2000-05-26', 'Surabaya', 10),
(11, 'Chakra satrya', '18081010102', 'Laki-Laki', 'gambar6.png', 'Ibu', '082228550797', 'Surabaya', '2000-06-23', 'Surabaya', 11),
(12, 'Davila Erdianita', '18081010120', 'Perempuan', 'gambar7.png', 'Ibu', '18081010120', 'Surabaya', '2000-07-01', 'Surabaya', 12),
(13, 'Melinda Shilatil Fauziyah', '18081010122', 'Perempuan', 'gambar8.png', 'Bapak', '18081010122', 'Surabaya', '2000-08-02', 'Surabaya', 13),
(14, 'Nafa Nabila El Indri', '18081010124', 'Perempuan', 'gambar9.png', 'Ibu', '18081010124', 'Surabaya', '2000-09-03', 'Surabaya', 14),
(15, 'Taufik nur Firmansyah', '18081010046', 'Laki-Laki', 'gambar10.png', 'Bapak', '180810110046', 'Kediri', '2000-09-01', 'Kediri', 15),
(16, 'Purwito Ridho Widianto', '18081010047', 'Laki-Laki', 'gambar11.png', 'Ibu', '18081010047', 'Kediri', '2000-10-02', 'Kediri', 16),
(17, 'Rifqi Raditya Rizqullah', '18081010074', 'Laki-Laki', 'gambar12.png', 'Bapak', '087818088018', 'Surabaya', '2000-04-04', 'Surabaya', 17),
(18, 'Avrie Akbar Prabowo', '18081010024', 'Laki-Laki', 'gambar13.png', 'Ibu', '18081010024', 'Surabaya', '2000-10-19', 'Surabaya', 18),
(19, 'Rahmat Auliya', '18081010027', 'Laki-Laki', 'gambar14.png', 'Bapak', '18081010027', 'Surabaya', '2000-06-05', 'Surabaya', 19),
(20, 'Reynaldi Satriawan W', '18081010096', 'Laki-Laki', 'gambar15.png', 'Ibu', '18081010096', 'Surabaya', '2000-10-03', 'Surabaya', 20);

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` varchar(10) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `id_dosen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `sks`, `semester`, `id_dosen`) VALUES
(1, 'Pemrograman Web A', '3', '7', 2),
(3, 'Metodologi Penelitian', '3', '7', 3),
(4, 'Data Warehouse', '3', '7', 4),
(6, 'Analisis Kebutuhan A', '3', '7', 5),
(7, 'Pemrograman API', '3', '7', 6),
(8, 'Rekayasa Perangkat lunak', '3', '7', 8),
(9, 'Tata Kelola IT', '3', '7', 7),
(10, 'Pengolahan Citra Digital', '3', '6', 1),
(11, 'MATEMATIKA KOMPUTASI A', '3', '1', 6),
(12, 'MATEMATIKA DISKRIT A', '3', '2', 1),
(13, 'PENDIDIKAN BELA NEGARA A', '3', '3', 8),
(14, 'PEMROGRRAMAN BERORIENTASI OBJEK A', '3', '4', 4),
(15, 'AUDIT TI A', '3', '6', 7),
(17, 'Skripsi', '6', '8', 10),
(18, 'Pemrograman Web B', '3', '7', 4),
(19, 'Analisis Kebutuhan B', '3', '7', 7),
(20, 'MATEMATIKA KOMPUTASI B', '3', '1', 3),
(21, 'MATEMATIKA DISKRIT B', '3', '2', 5),
(22, 'PENDIDIKAN BELA NEGARA B', '3', '3', 2),
(23, 'PEMROGRRAMAN BERORIENTASI OBJEK B', '3', '4', 8);

-- --------------------------------------------------------

--
-- Table structure for table `matkul_mhs`
--

CREATE TABLE `matkul_mhs` (
  `id_matkulmhs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul_mhs`
--

INSERT INTO `matkul_mhs` (`id_matkulmhs`, `id_matkul`, `id_user`) VALUES
(21, 6, 3),
(22, 6, 4),
(23, 6, 5),
(24, 6, 6),
(25, 6, 7),
(26, 6, 15),
(27, 6, 8),
(28, 6, 9),
(29, 6, 11),
(30, 6, 14),
(31, 6, 20),
(32, 6, 19),
(33, 6, 18),
(34, 6, 17),
(35, 6, 16),
(36, 4, 16),
(37, 4, 15),
(38, 4, 14),
(39, 4, 13),
(40, 4, 12),
(41, 4, 7),
(42, 4, 6),
(43, 4, 5),
(44, 4, 4),
(45, 4, 3),
(46, 4, 20),
(47, 4, 19),
(48, 4, 18),
(49, 4, 17),
(50, 3, 3),
(51, 3, 4),
(52, 3, 5),
(53, 3, 8),
(54, 3, 9),
(55, 3, 10),
(56, 3, 11),
(57, 3, 12),
(58, 3, 13),
(59, 3, 14),
(60, 3, 15),
(61, 3, 16),
(62, 3, 17),
(63, 3, 18),
(64, 3, 19),
(65, 3, 20),
(66, 7, 3),
(67, 7, 4),
(68, 7, 5),
(69, 7, 6),
(70, 7, 7),
(71, 7, 8),
(72, 7, 9),
(73, 7, 10),
(74, 7, 11),
(75, 7, 12),
(76, 7, 13),
(77, 7, 19),
(78, 7, 20),
(79, 1, 6),
(80, 1, 7),
(81, 1, 8),
(82, 1, 9),
(83, 1, 10),
(84, 1, 11),
(85, 1, 12),
(86, 1, 13),
(87, 1, 14),
(88, 1, 15),
(89, 1, 16),
(90, 1, 17),
(91, 1, 18),
(92, 1, 19),
(93, 1, 20),
(94, 8, 3),
(95, 8, 4),
(96, 8, 5),
(97, 8, 6),
(98, 8, 7),
(99, 8, 8),
(100, 8, 9),
(101, 8, 10),
(102, 8, 11),
(103, 8, 12),
(104, 8, 13),
(105, 8, 14),
(106, 8, 15),
(107, 8, 16),
(108, 8, 17),
(109, 8, 18),
(110, 8, 20),
(111, 9, 3),
(112, 9, 4),
(113, 9, 5),
(114, 9, 6),
(115, 9, 7),
(116, 9, 8),
(117, 9, 9),
(118, 9, 10),
(119, 9, 11),
(120, 9, 12),
(121, 9, 13),
(122, 9, 14),
(123, 9, 15),
(124, 9, 16),
(125, 9, 17),
(126, 9, 18),
(127, 11, 5);

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('Admin','Dosen','Mahasiswa') NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `level`, `status`) VALUES
(1, 'syifa', 'fac6dcc99d753552059000479582260a', 'nursiva3112@gmail.com', 'Admin', 'Aktif'),
(2, 'fafa', '8651aaed7f1d888799ee910e3c7a277b', 'faf@gmail.com', 'Dosen', 'Aktif'),
(3, 'nur', 'b55178b011bfb206965f2638d0f87047', 'haris@gmail.com', 'Mahasiswa', 'Aktif'),
(4, 'endy', '2902b70ce52aba998699c19d93323607', '', 'Mahasiswa', 'Aktif'),
(5, 'sarifah', '827ccb0eea8a706c4c34a16891f84e7b', 'a@gmail.com', 'Mahasiswa', 'Aktif'),
(6, 'hamzah', 'd7fa34a9a47ee0f5fd620de7a326ef4a', '', 'Mahasiswa', 'Tidak'),
(7, 'ilham', 'b63d204bf086017e34d8bd27ab969f28', '', 'Mahasiswa', 'Aktif'),
(8, 'syafri', '9687911c620e636cda4c6b7c27f6c263', '', 'Mahasiswa', 'Tidak'),
(9, 'rifky', 'c7606d21629a29f87ddff80ca16d5219', '', 'Mahasiswa', 'Tidak'),
(10, 'merdin', 'dc827807fd916a6b765e7967f950c73b', '', 'Mahasiswa', 'Tidak'),
(11, 'cakra', '2a7d24a81b94a7d9d998d25994128c93', '', 'Mahasiswa', 'Tidak'),
(12, 'lala', '2e3817293fc275dbee74bd71ce6eb056', '', 'Mahasiswa', 'Aktif'),
(13, 'melinda', '19b63690a34f20c95317571ff354868f', '', 'Mahasiswa', 'Tidak'),
(14, 'nafa', '56bcb694a9d4db9f5e35ac734d11c595', '', 'Mahasiswa', 'Tidak'),
(15, 'taufik', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', '', 'Mahasiswa', 'Tidak'),
(16, 'ridho', '926a161c6419512d711089538c80ac70', '', 'Mahasiswa', 'Tidak'),
(17, 'rifqi', '72561baf6079c338cc2dd68e98d52055', '', 'Mahasiswa', 'Tidak'),
(18, 'avrie', 'e07d364e0e13eb621fd3005f213fbf51', '', 'Mahasiswa', 'Tidak'),
(19, 'uli', 'dd55cec2ce59aca4e6647dcfbc90dc27', '', 'Mahasiswa', 'Tidak'),
(20, 'rey', 'd2b3ea2dfddc40efdc6941359436c847', '', 'Mahasiswa', 'Tidak'),
(21, 'parlika', 'e1a17d58f1475a94066ccd9edb53d9af', '', 'Dosen', 'Aktif'),
(22, 'gede', '13ad65cc032d4b04927943c33673a65d', '', 'Dosen', 'Aktif'),
(23, 'fawwaz', '19fb4ac655965f3aa5f5f54c712802ab', '', 'Dosen', 'Aktif'),
(24, 'retno', 'edd39370424d54db23ccec123f0ce66b', '', 'Dosen', 'Aktif'),
(25, 'basuki', 'b4e364bb5eab14eedd9ae3d54437d52f', '', 'Dosen', 'Aktif'),
(26, 'faisal', 'f4668288fdbf9773dd9779d412942905', '', 'Dosen', 'Aktif'),
(27, 'aji', '8d045450ae16dc81213a75b725ee2760', '', 'Dosen', 'Aktif'),
(28, '-', '-', '-', 'Dosen', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_admin_user` (`id_user`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `fk_dosen_user` (`id_user`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `fk_mhs_user` (`id_user`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `fk_matkul_dosen` (`id_dosen`);

--
-- Indexes for table `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  ADD PRIMARY KEY (`id_matkulmhs`),
  ADD KEY `fk_matkul_matkul` (`id_matkul`),
  ADD KEY `fk_matkul-mhs` (`id_user`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_matkul` (`id_matkul`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  MODIFY `id_matkulmhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_dosen_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mhs_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `fk_matkul_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  ADD CONSTRAINT `fk_matkul-mhs` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `fk_matkul_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `id_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
