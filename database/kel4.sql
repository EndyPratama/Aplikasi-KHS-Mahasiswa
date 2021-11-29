-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 07:18 AM
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
(1, 'Nur Syifaul Husna', '08818532807', 'Bojonegoro', 1);

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
(1, '1982021120212120005', 'Fetty Nur Anggreini', 'Perempuan', 'Surabaya', '081334859975', 'Fetty Tri Anggraeny, S.Kom, M.Kom.jpg', 2),
(2, '1984051820212110003', 'Rizky Parlika, S.Kom., M.Kom.', 'Laki-Laki', 'Surabaya', '0888689909', 'lk.jpg', 21),
(3, '1970061920212110009', 'Dr. I Gede Susrama, ST., M.Kom', 'Laki-Laki', 'Surabaya', '081234565432', 'lk1.jpg', 22),
(4, '000009', 'Fawwaz Ali Akbar, S.Kom., M.Kom.', 'Laki-Laki', 'Surabaya', '087818088018', 'lk2.jpg', 23),
(5, '00006781', 'Retno Mumpuni, S.Kom., M.Sc.', 'Perempuan', 'Surabaya', '085123456789', 'pr.jpg', 24),
(6, '000009', 'Dr. Basuki Rahmat, S.Si, MT.', 'Laki-Laki', 'Surabaya', '087818088018', 'lk3.jpg', 25),
(7, '0000092', 'Faisal Muttaqin, S.Kom., M.T.', 'Laki-Laki', 'Surabaya', '088111234561', 'lk4.jpg', 26),
(8, '00000113', 'Chrystia Aji Putra, S.Kom., M.T.', 'Laki-Laki', 'Surabaya', '088111234561', 'lk5.jpg', 27),
(10, '0000056', 'Budi Nugroho, S.Kom, M.Kom', 'Laki-Laki', 'Surabaya', '088888777777', 'lk6.jpg', 28),
(12, '380060401981', 'Intan Yuniar Purbasari, S.Kom. MSc.', 'Perempuan', 'Surabaya', '082165789345', 'pr1.jpg', 32);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jmlh_mhs` int(11) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `id_matkul`, `dosen`, `kelas`, `jmlh_mhs`, `hari`, `mulai`, `selesai`, `tahun`) VALUES
(1, 48, 'Rizky Parlika, S.Kom., M.Kom.', 'B', 42, 'Kamis', '07:00:00', '09:30:00', 3),
(2, 47, 'Rizky Parlika, S.Kom., M.Kom.', 'A', 18, 'Senin', '13:00:00', '15:30:00', 3),
(4, 32, 'Chrystia Aji Putra, S.Kom., M.T.', 'A', 45, 'Selasa', '07:00:00', '09:30:00', 3),
(5, 15, 'Fawwaz Ali Akbar, S.Kom., M.Kom.', 'B', 50, 'Rabu', '09:00:00', '12:00:00', 3),
(6, 13, 'Intan Yuniar Purbasari, S.Kom. MSc.', 'A', 45, 'Kamis', '13:00:00', '15:30:00', 3);

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
  `no_telp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `dosen_wali` int(11) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `npm`, `jenis_kelamin`, `foto`, `no_telp`, `tempat_lahir`, `tgl_lahir`, `alamat`, `id_user`, `dosen_wali`, `status`) VALUES
(1, 'Nur Syifaul Husna', '18081010042', 'Perempuan', 'WhatsApp_Image_2020-04-07_at_10_53_00-removebg-preview__1_-removebg-preview-removebg-preview.png', '08818532807', 'Blora', '1999-12-31', 'Bojonegoro', 3, 12, 'Aktif'),
(2, 'Endy Gigih Pratama', '18081010066', 'Laki-Laki', 'WhatsApp_Image_2021-10-13_at_10_43_241.jpeg', '0888689909', 'Kediri', '1999-06-01', 'Kediri', 4, 12, 'Aktif'),
(5, 'Sarirotul Latifah', '18081010045', 'Perempuan', 'WhatsApp_Image_2021-10-13_at_10_43_24_(1).jpeg', '085815640137', 'Pasuruan', '2000-09-27', 'Jeruk Kraton', 5, 1, 'Aktif'),
(6, 'Hamzah Dimas', '18081010119', 'Laki-Laki', 'photo6134382956177894247.jpg', '18081010119', 'Surabaya', '2000-01-23', 'Surabaya', 6, 12, 'Aktif'),
(7, 'Ilham Malik', '18081010144', 'Laki-Laki', 'photo4607239361932666793.jpg', '18081010144', 'Surabaya', '2000-02-23', 'Surabaya', 7, 2, 'Aktif'),
(8, 'Syafri Firmansyah', '18081010142', 'Laki-Laki', 'photo4260043594522535852.jpg', '18081010142', 'Sidoarjo', '2000-03-23', 'Sidoarjo', 8, 1, 'Aktif'),
(9, 'Rifky Akhmad F', '18081010126', 'Laki-Laki', 'photo3963574994355726255.jpg', '18081010126', 'Surabaya', '2000-04-02', 'Surabaya', 9, 12, 'Aktif'),
(10, 'Merdin Risalul A', '18081010081', 'Laki-Laki', 'photo3949057047117539242.jpg', '18081010081', 'Surabaya', '2000-05-26', 'Surabaya', 10, 4, 'Aktif'),
(11, 'Chakra satrya', '18081010102', 'Laki-Laki', 'photo4460519662738843564.jpg', '082228550797', 'Surabaya', '2000-06-23', 'Surabaya', 11, 12, 'Aktif'),
(12, 'Davila Erdianita', '18081010120', 'Perempuan', 'photo4313456984636630953.jpg', '18081010120', 'Surabaya', '2000-07-01', 'Surabaya', 12, 6, 'Aktif'),
(13, 'Melinda Shilatil Fauziyah', '18081010122', 'Perempuan', 'photo4260248348498438062.jpg', '18081010122', 'Surabaya', '2000-08-02', 'Surabaya', 13, 6, 'Aktif'),
(14, 'Nafa Nabila El Indri', '18081010124', 'Perempuan', 'photo4415814177083467694.jpg', '18081010124', 'Surabaya', '2000-09-03', 'Surabaya', 14, 12, 'Aktif'),
(15, 'Taufik nur Firmansyah', '18081010046', 'Laki-Laki', 'gambar10.png', '180810110046', 'Kediri', '2000-09-01', 'Kediri', 15, 12, 'Aktif'),
(16, 'Purwito Ridho Widianto', '18081010047', 'Laki-Laki', 'gambar11.png', '18081010047', 'Kediri', '2000-10-02', 'Kediri', 16, 1, 'Aktif'),
(17, 'Rifqi Raditya Rizqullah', '18081010074', 'Laki-Laki', 'gambar12.png', '087818088018', 'Surabaya', '2000-04-04', 'Surabaya', 17, 2, 'Aktif'),
(18, 'Avrie Akbar Prabowo', '18081010024', 'Laki-Laki', 'gambar13.png', '18081010024', 'Surabaya', '2000-10-19', 'Surabaya', 18, 4, 'Aktif'),
(19, 'Rahmat Auliya', '18081010027', 'Laki-Laki', 'photo6079923934800751295.jpg', '18081010027', 'Surabaya', '2000-06-05', 'Surabaya', 19, 4, 'Aktif'),
(20, 'Reynaldi Satriawan W', '18081010096', 'Laki-Laki', 'gambar15.png', '18081010096', 'Surabaya', '2000-10-03', 'Surabaya', 20, 12, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` varchar(10) NOT NULL,
  `semester` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `nama_matkul`, `sks`, `semester`) VALUES
(1, 'KULIAH KERJA NYATA', '2', '6'),
(2, 'PRAKTEK KERJA LAPANGAN', '3', '5'),
(3, 'PENGENALAN POLA', '3', '6'),
(4, 'PENGEOLAHAN CITRA DIGITAL', '3', '1'),
(5, 'MIKROKONTROLER', '3', '6'),
(6, 'MANAJEMEN PROYEK', '3', '1'),
(7, 'KEPEMIMPINAN', '3', '1'),
(8, 'MACHINE LEARNING', '3', '6'),
(9, 'PEMROGRAMAN FRAMEWORK', '3', '6'),
(10, 'MANAJEMEN KEAMANAN IT', '3', '5'),
(11, 'PEMROGRAMAN JARINGAN', '3', '5'),
(12, 'METODOLOGI PENELITIAN', '3', '5'),
(13, 'KECERDASAN BUATAN', '3', '5'),
(14, 'AUDIT IT', '3', '5'),
(15, 'PEMROGRAMAN WEB', '3', '5'),
(16, 'DESAIN ANTARMUKA', '3', '5'),
(17, 'IMPLEMENTASI BASIS DATA', '3', '4'),
(18, 'PENDIDIKAN KEWARGANEGARAAN', '3', '4'),
(19, 'STRUKTUR DATA', '3', '4'),
(20, 'ORGANISASI ARSITEKTUR KOMPUTER', '3', '2'),
(21, 'JARINGAN KOMPUTER', '3', '4'),
(22, 'DESAIN ANALISIS ALGORITMA', '3', '4'),
(23, 'REKAYASA PERANGKAT LUNAK', '3', '4'),
(24, 'ANALISIS DESAIN SISTEM', '3', '1'),
(25, 'METODE NUMERIK', '3', '3'),
(26, 'PEMROGRAMAN LANJUT', '3', '3'),
(27, 'KEWIRAUSAHAAN', '3', '3'),
(28, 'BELA NEGARA', '3', '3'),
(29, 'STATISTIK KOMPUTASI', '3', '3'),
(30, 'SISTEM OPERASI', '3', '3'),
(31, 'PENDIDIKAN INGGRIS DASAR', '2', '1'),
(32, 'ETIKA PROFESI', '2', '1'),
(33, 'PEMROGRAMAN BERORIENTASI OBJEK', '4', '2'),
(34, 'SISTEM INFORMASI', '3', '2'),
(35, 'AGAMA ISLAM', '3', '2'),
(36, 'ALJABAR LINIER MATRIKS', '3', '2'),
(37, 'BAHASA INGGRIS LANJUTAN', '2', '2'),
(38, 'BASIS DATA', '4', '2'),
(39, 'PENGANTAR SISTEM INFORMASI', '3', '1'),
(40, 'PEMROGRAMAN DASAR', '4', '1'),
(41, 'MATEMATIKA DISKRIT', '3', '1'),
(42, 'SISTEM DIGITAL', '3', '1'),
(43, 'BAHASA INDONESIA', '3', '1'),
(44, 'ALGORITMA DASAR', '3', '1'),
(45, 'PENDIDIKAN PANCASILA', '3', '3'),
(46, 'SKRIPSI', '6', '8'),
(47, 'DATA WAREHOUSE', '3', '7'),
(48, 'PEMROGRAMAN API', '3', '7');

-- --------------------------------------------------------

--
-- Table structure for table `matkul_mhs`
--

CREATE TABLE `matkul_mhs` (
  `id_matkulmhs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(140, '83', '18081010096', 8),
(143, '90', '18081010027', 8),
(144, '95', '18081010042', 1),
(145, '90', '18081010042', 2),
(146, '95', '18081010042', 5),
(147, '90', '18081010042', 10),
(148, '95', '18081010042', 11),
(149, '95', '18081010042', 12),
(150, '90', '18081010042', 13),
(151, '90', '18081010042', 14),
(152, '95', '18081010042', 15),
(153, '90', '18081010042', 16),
(154, '90', '18081010042', 17),
(155, '95', '18081010042', 18),
(156, '90', '18081010042', 19),
(157, '90', '18081010042', 20),
(158, '90', '18081010042', 21),
(159, '90', '18081010042', 22),
(160, '90', '18081010042', 23),
(161, '95', '18081010042', 24),
(162, '90', '18081010042', 25),
(163, '90', '18081010042', 27),
(164, '95', '18081010042', 28),
(165, '90', '18081010042', 29),
(166, '95', '18081010042', 26),
(167, '90', '18081010042', 30),
(168, '95', '18081010042', 31),
(169, '95', '18081010042', 32),
(170, '95', '18081010042', 33),
(171, '95', '18081010042', 34),
(172, '95', '18081010042', 35),
(173, '90', '18081010042', 36),
(174, '90', '18081010042', 37),
(175, '90', '18081010042', 38),
(176, '95', '18081010042', 39),
(177, '95', '18081010042', 40),
(178, '90', '18081010042', 41),
(179, '90', '18081010042', 42),
(180, '95', '18081010042', 43),
(181, '90', '18081010042', 44),
(182, '95', '18081010042', 45),
(183, '90', '18081010066', 1),
(184, '95', '18081010066', 2),
(185, '90', '18081010066', 5),
(186, '95', '18081010066', 10),
(187, '90', '18081010066', 11),
(188, '90', '18081010066', 12),
(189, '90', '18081010066', 13),
(190, '95', '18081010066', 14),
(191, '95', '18081010066', 15),
(192, '90', '18081010066', 16),
(193, '90', '18081010066', 17),
(194, '95', '18081010066', 18),
(195, '90', '18081010066', 19),
(196, '95', '18081010066', 20),
(197, '95', '18081010066', 21),
(198, '95', '18081010066', 22),
(199, '95', '18081010066', 23),
(200, '90', '18081010066', 24),
(201, '90', '18081010066', 25),
(202, '95', '18081010066', 26),
(203, '90', '18081010066', 27),
(204, '95', '18081010066', 28),
(205, '90', '18081010066', 29),
(206, '95', '18081010066', 30),
(207, '95', '18081010066', 31),
(208, '95', '18081010066', 32),
(209, '90', '18081010066', 33),
(210, '95', '18081010066', 34),
(211, '95', '18081010066', 35),
(212, '90', '18081010066', 36),
(213, '90', '18081010066', 37),
(214, '90', '18081010066', 38),
(215, '95', '18081010066', 39),
(216, '95', '18081010066', 40),
(217, '90', '18081010066', 41),
(218, '90', '18081010066', 42),
(219, '95', '18081010066', 43),
(220, '85', '18081010066', 44),
(221, '95', '18081010066', 45),
(222, '90', '18081010045', 1),
(223, '95', '18081010045', 2),
(224, '90', '18081010045', 5),
(225, '95', '18081010045', 10),
(226, '90', '18081010045', 11),
(227, '95', '18081010045', 12),
(228, '90', '18081010045', 13),
(229, '90', '18081010045', 14),
(230, '95', '18081010045', 15),
(231, '90', '18081010045', 16),
(232, '95', '18081010045', 17),
(233, '90', '18081010045', 18),
(234, '95', '18081010045', 19),
(235, '90', '18081010045', 20),
(236, '85', '18081010045', 21),
(239, '95', '18081010045', 22),
(240, '90', '18081010045', 23),
(241, '95', '18081010045', 24),
(242, '90', '18081010045', 25),
(243, '95', '18081010045', 26),
(244, '95', '18081010045', 27),
(245, '90', '18081010045', 28),
(246, '90', '18081010045', 29),
(247, '90', '18081010045', 30),
(248, '95', '18081010045', 31),
(249, '95', '18081010045', 32),
(250, '90', '18081010045', 33),
(251, '95', '18081010045', 34),
(252, '95', '18081010045', 35),
(253, '90', '18081010045', 36),
(254, '95', '18081010045', 37),
(255, '95', '18081010045', 38),
(256, '85', '18081010045', 39),
(257, '95', '18081010045', 40),
(258, '90', '18081010045', 41),
(259, '90', '18081010045', 42),
(260, '95', '18081010045', 43),
(261, '95', '18081010045', 44),
(262, '95', '18081010045', 45),
(263, '95', '18081010119', 2),
(264, '90', '18081010119', 3),
(265, '95', '18081010119', 5),
(266, '90', '18081010119', 10),
(267, '85', '18081010119', 11),
(268, '95', '18081010119', 12),
(269, '90', '18081010119', 13),
(270, '95', '18081010119', 14),
(271, '90', '18081010119', 15),
(272, '90', '18081010119', 16),
(273, '95', '18081010119', 17),
(274, '90', '18081010119', 18),
(275, '85', '18081010119', 19),
(276, '95', '18081010119', 20),
(277, '95', '18081010119', 21),
(278, '90', '18081010119', 22),
(279, '95', '18081010119', 23),
(280, '90', '18081010119', 24),
(281, '90', '18081010119', 25),
(282, '95', '18081010119', 26),
(283, '90', '18081010119', 27),
(284, '90', '18081010119', 28),
(285, '90', '18081010119', 29),
(286, '90', '18081010119', 30),
(287, '90', '18081010119', 31),
(288, '90', '18081010119', 32),
(289, '95', '18081010119', 33),
(290, '90', '18081010119', 34),
(291, '95', '18081010119', 35),
(292, '90', '18081010119', 36),
(293, '95', '18081010119', 37),
(294, '90', '18081010119', 38),
(295, '90', '18081010119', 39),
(296, '95', '18081010119', 40),
(297, '95', '18081010119', 41),
(298, '90', '18081010119', 42),
(299, '95', '18081010119', 43),
(301, '95', '18081010119', 44),
(302, '90', '18081010119', 45),
(303, '95', '18081010144', 2),
(304, '90', '18081010144', 3),
(305, '95', '18081010144', 5),
(306, '95', '18081010144', 10),
(307, '90', '18081010144', 11),
(308, '95', '18081010144', 12),
(309, '95', '18081010144', 13),
(310, '90', '18081010144', 14),
(311, '95', '18081010144', 15),
(312, '95', '18081010144', 16),
(313, '90', '18081010144', 17),
(314, '95', '18081010144', 18),
(315, '90', '18081010144', 19),
(316, '90', '18081010144', 20),
(317, '85', '18081010144', 21),
(318, '95', '18081010144', 22),
(319, '95', '18081010144', 23),
(320, '90', '18081010144', 24),
(321, '90', '18081010144', 25),
(322, '95', '18081010144', 26),
(323, '85', '18081010144', 27),
(324, '90', '18081010144', 28),
(325, '90', '18081010144', 29),
(326, '90', '18081010144', 30),
(327, '90', '18081010144', 31),
(328, '90', '18081010144', 32),
(329, '95', '18081010144', 33),
(330, '95', '18081010144', 34),
(331, '95', '18081010144', 35),
(332, '90', '18081010144', 36),
(333, '90', '18081010144', 37),
(334, '85', '18081010144', 38),
(335, '95', '18081010144', 39),
(336, '90', '18081010144', 40),
(337, '95', '18081010144', 41),
(338, '95', '18081010144', 42),
(339, '95', '18081010144', 43),
(340, '95', '18081010144', 44),
(341, '95', '18081010144', 45);

-- --------------------------------------------------------

--
-- Table structure for table `thn_akademik`
--

CREATE TABLE `thn_akademik` (
  `id_akademik` int(11) NOT NULL,
  `thn_akademik` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thn_akademik`
--

INSERT INTO `thn_akademik` (`id_akademik`, `thn_akademik`, `semester`, `status`) VALUES
(3, '2021/2022', 'Ganjil', 'Aktif'),
(4, '2020/2021', 'Genap', 'Selesai'),
(6, '2021/2022', 'Genap', 'Akan Datang');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, 'b68654437441e5f55cb241f8fd6e57', 1, '2021-11-22'),
(2, 'a6a16bd9d63dc503474620dd7b511a', 1, '2021-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `transkrip`
--

CREATE TABLE `transkrip` (
  `id` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL,
  `nilai` float NOT NULL,
  `Semester` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transkrip`
--

INSERT INTO `transkrip` (`id`, `id_mhs`, `id_matkul`, `kelas`, `nilai_uts`, `nilai_uas`, `nilai`, `Semester`, `tahun`, `status`) VALUES
(1, 2, 1, 'A', 0, 0, 4, 6, 2021, 'Selesai'),
(2, 2, 7, 'C', 82, 83, 4, 6, 2021, 'Selesai'),
(3, 2, 3, 'A', 78, 78, 3.75, 6, 2021, 'Selesai'),
(4, 2, 9, 'C', 85, 80, 4, 6, 2021, 'Selesai'),
(5, 2, 5, 'A', 80, 80, 4, 6, 2021, 'Selesai'),
(6, 2, 6, 'C', 85, 85, 4, 6, 2021, 'Selesai'),
(7, 2, 4, 'A', 90, 90, 4, 6, 2021, 'Selesai'),
(8, 2, 8, 'A', 90, 90, 4, 6, 2021, 'Selesai'),
(9, 2, 45, 'G', 80, 80, 4, 1, 2018, 'Selesai'),
(10, 2, 27, 'A', 82, 80, 4, 5, 2020, 'Selesai'),
(11, 2, 28, 'D', 74, 74, 3.5, 3, 2019, 'Selesai'),
(12, 2, 29, 'C', 80, 80, 4, 3, 2019, 'Selesai'),
(13, 2, 25, 'C', 82, 80, 4, 3, 2019, 'Selesai'),
(14, 2, 30, 'D', 80, 80, 4, 3, 2019, 'Selesai'),
(15, 2, 26, 'B', 74, 80, 3.75, 3, 2019, 'Selesai'),
(16, 2, 46, 'A', 0, 0, 0, 7, 2021, 'Berlangsung'),
(17, 2, 47, 'A', 0, 0, 0, 7, 2021, 'Berlangsung'),
(18, 2, 48, 'A', 0, 0, 0, 7, 2021, 'Berlangsung');

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
(6, 'hamzah', 'd7fa34a9a47ee0f5fd620de7a326ef4a', '', 'Mahasiswa', 'Aktif'),
(7, 'ilham', 'b63d204bf086017e34d8bd27ab969f28', '', 'Mahasiswa', 'Aktif'),
(8, 'syafri', '9687911c620e636cda4c6b7c27f6c263', '', 'Mahasiswa', 'Aktif'),
(9, 'rifky', 'c7606d21629a29f87ddff80ca16d5219', '', 'Mahasiswa', 'Aktif'),
(10, 'merdin', 'dc827807fd916a6b765e7967f950c73b', '', 'Mahasiswa', 'Aktif'),
(11, 'cakra', '2a7d24a81b94a7d9d998d25994128c93', '', 'Mahasiswa', 'Aktif'),
(12, 'lala', '2e3817293fc275dbee74bd71ce6eb056', '', 'Mahasiswa', 'Aktif'),
(13, 'melinda', '19b63690a34f20c95317571ff354868f', '', 'Mahasiswa', 'Aktif'),
(14, 'nafa', '56bcb694a9d4db9f5e35ac734d11c595', '', 'Mahasiswa', 'Aktif'),
(15, 'taufik', 'd4305d7ed2ec97107cd6eb8dd4b6f6b7', '', 'Mahasiswa', 'Aktif'),
(16, 'ridho', '926a161c6419512d711089538c80ac70', '', 'Mahasiswa', 'Aktif'),
(17, 'rifqi', '72561baf6079c338cc2dd68e98d52055', '', 'Mahasiswa', 'Aktif'),
(18, 'avrie', 'e07d364e0e13eb621fd3005f213fbf51', '', 'Mahasiswa', 'Aktif'),
(19, 'uli', 'dd55cec2ce59aca4e6647dcfbc90dc27', '', 'Mahasiswa', 'Aktif'),
(20, 'rey', 'd2b3ea2dfddc40efdc6941359436c847', '', 'Mahasiswa', 'Aktif'),
(21, 'Parlika', 'e1a17d58f1475a94066ccd9edb53d9af', 'rizkyparlika.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(22, 'Gede', '13ad65cc032d4b04927943c33673a65d', 'igsusrama.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(23, 'Fawwaz', '19fb4ac655965f3aa5f5f54c712802ab', 'fawwaz_ali.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(24, 'Retno', 'edd39370424d54db23ccec123f0ce66b', 'retnomumpuni.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(25, 'Basuki', 'b4e364bb5eab14eedd9ae3d54437d52f', 'basukirahmat.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(26, 'Faisal', 'f4668288fdbf9773dd9779d412942905', 'faisalmuttaqin.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(27, 'Aji', '8d045450ae16dc81213a75b725ee2760', 'ajiputra@unjatim.ac.id', 'Dosen', 'Aktif'),
(28, 'Budi', '5894c82cc2aeb6560140a81694f99051', 'budinugroho.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(29, 'admin123', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', 'Admin', 'Aktif'),
(30, 'Kartini', '508994ba1d02531e88feae95246b9d30', 'kartini.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(31, 'Fetty', '49f0a0559f822558f876015724c39e57', 'fettyanggraeny.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(32, 'Intan', 'ffae75b9f641b58edc3f226581eb3dfe', 'intanyuniar.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(33, 'EvaYulia', '7ac1017436d51c40cea064d1741c1923', 'evapuspaningrum.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(34, 'Firza', '5e59da2fc2386b3ee3e21a365e1000a4', 'firzaprima.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(35, 'Henni', 'a0152e4e0134405bc878d313bd2f3f58', 'henniendah.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(36, 'Wahyu', '6ce0e9c7dff424bb377cb6dd043fcad7', 'wahyu.s.j.saputra.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(37, 'Yisti', 'aca8b2677f3fbb85122f9ef9cd3ad862', 'yistivia.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(38, 'Pratama', '1a590b0ff307ead88099fd01b129f20b', 'pratama_wirya.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(39, 'MadeHanindia', '6d7c5472aef2f3ebd78512654e7aa95b', 'madehanindia.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(40, 'Sugiarto', '9861835eae0e48c2f3c1d769833be3ab', 'sugiarto.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(41, 'Hendra', 'd536468fd4600c5244d0ee734299c743', 'hendra.maulana.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(42, 'Afina', 'eb3a082861c1fbc0b1a483ff0a7b26e5', 'afina.lina.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(43, 'Agung', '611463cbdcad7a1b26588ce548a5522a', 'agung.mustika.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(44, 'Taufikurrahman', '576b3a4931ba5352e672e433008e3ae6', 'taufikurrahman.if@upnjatim.ac.id', 'Dosen', 'Aktif'),
(45, 'Andreas', 'cac58b5234e1f98b4c956998b8ac2e26', 'andreas.nugroho.jarkom@upnjatim.ac.id', 'Dosen', 'Aktif'),
(46, 'khotim', 'e807f1fcf82d132f9bb018ca6738a19f', 'igsindonesiagroups@gmail.com', 'Mahasiswa', 'Aktif'),
(48, 'syifa', 'b59c67bf196a4758191e42f76670ceba', 'nursiva3112@gmail.com', 'Dosen', 'Aktif');

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
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `fk_dosen_user` (`id_user`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kls_matkul` (`id_matkul`),
  ADD KEY `fk_kls_dosen` (`dosen`),
  ADD KEY `fk_kelas_akademik` (`tahun`);

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
  ADD PRIMARY KEY (`id_matkul`);

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
-- Indexes for table `thn_akademik`
--
ALTER TABLE `thn_akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transkrip`
--
ALTER TABLE `transkrip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_mhs_trns` (`id_mhs`),
  ADD KEY `fk_matkul_trns` (`id_matkul`);

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
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `matkul_mhs`
--
ALTER TABLE `matkul_mhs`
  MODIFY `id_matkulmhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `thn_akademik`
--
ALTER TABLE `thn_akademik`
  MODIFY `id_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transkrip`
--
ALTER TABLE `transkrip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk_kelas_akademik` FOREIGN KEY (`tahun`) REFERENCES `thn_akademik` (`id_akademik`),
  ADD CONSTRAINT `fk_kls_dosen` FOREIGN KEY (`dosen`) REFERENCES `dosen` (`nama`),
  ADD CONSTRAINT `fk_kls_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mhs_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

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

--
-- Constraints for table `transkrip`
--
ALTER TABLE `transkrip`
  ADD CONSTRAINT `fk_matkul_trns` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `fk_mhs_trns` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
