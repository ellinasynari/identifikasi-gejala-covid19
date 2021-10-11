-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 12:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbr_cov`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `jns_kelamin` enum('L','P','','') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nm_lengkap`, `jns_kelamin`, `alamat`, `no_telp`, `pekerjaan`) VALUES
(1, 'admin', 'admin', 'Ellin Asynari', 'P', 'Subang', '-', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `basis_kasus`
--

CREATE TABLE `basis_kasus` (
  `id_basis_kasus` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_klaster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basis_kasus`
--

INSERT INTO `basis_kasus` (`id_basis_kasus`, `id_gejala`, `id_klaster`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 8, 1),
(4, 1, 1),
(5, 2, 1),
(6, 8, 1),
(7, 3, 1),
(8, 1, 1),
(9, 2, 1),
(10, 8, 1),
(11, 3, 1),
(12, 4, 1),
(13, 1, 1),
(14, 2, 1),
(15, 8, 1),
(16, 3, 1),
(17, 4, 1),
(18, 5, 1),
(19, 1, 1),
(20, 2, 1),
(21, 8, 1),
(22, 3, 1),
(23, 4, 1),
(24, 5, 1),
(25, 6, 1),
(26, 1, 1),
(27, 2, 1),
(28, 8, 1),
(29, 3, 1),
(30, 4, 1),
(31, 5, 1),
(32, 6, 1),
(33, 7, 1),
(34, 1, 2),
(35, 2, 2),
(36, 9, 2),
(37, 1, 2),
(38, 2, 2),
(39, 9, 2),
(40, 4, 2),
(41, 1, 2),
(42, 2, 2),
(43, 9, 2),
(44, 4, 2),
(45, 5, 2),
(46, 1, 2),
(47, 2, 2),
(48, 9, 2),
(49, 4, 2),
(50, 5, 2),
(51, 7, 2),
(52, 1, 2),
(53, 2, 2),
(54, 9, 2),
(55, 4, 2),
(56, 5, 2),
(57, 7, 2),
(58, 11, 2),
(59, 1, 3),
(60, 2, 3),
(61, 12, 3),
(62, 13, 3),
(63, 1, 3),
(64, 2, 3),
(65, 12, 3),
(66, 13, 3),
(67, 5, 3),
(68, 1, 3),
(69, 2, 3),
(70, 12, 3),
(71, 13, 3),
(72, 5, 3),
(73, 11, 3),
(74, 1, 3),
(75, 2, 3),
(76, 12, 3),
(77, 13, 3),
(78, 5, 3),
(79, 11, 3),
(80, 9, 3),
(81, 1, 4),
(82, 2, 4),
(83, 14, 4),
(84, 1, 4),
(85, 2, 4),
(86, 14, 4),
(87, 3, 4),
(88, 1, 4),
(89, 2, 4),
(90, 14, 4),
(91, 3, 4),
(92, 5, 4),
(93, 1, 4),
(94, 2, 4),
(95, 14, 4),
(96, 3, 4),
(97, 5, 4),
(98, 6, 4),
(99, 1, 4),
(100, 2, 4),
(101, 14, 4),
(102, 3, 4),
(103, 5, 4),
(104, 6, 4),
(105, 7, 4),
(106, 1, 4),
(107, 2, 4),
(108, 14, 4),
(109, 3, 4),
(110, 5, 4),
(111, 6, 4),
(112, 7, 4),
(113, 9, 4),
(114, 1, 4),
(115, 2, 4),
(116, 14, 4),
(117, 3, 4),
(118, 5, 4),
(119, 6, 4),
(120, 7, 4),
(121, 9, 4),
(122, 10, 4),
(123, 1, 4),
(124, 2, 4),
(125, 14, 4),
(126, 3, 4),
(127, 5, 4),
(128, 6, 4),
(129, 7, 4),
(130, 9, 4),
(131, 10, 4),
(132, 11, 4),
(133, 1, 4),
(134, 2, 4),
(135, 14, 4),
(136, 3, 4),
(137, 5, 4),
(138, 6, 4),
(139, 7, 4),
(140, 9, 4),
(141, 10, 4),
(142, 11, 4),
(143, 18, 4),
(144, 1, 5),
(145, 2, 5),
(146, 14, 5),
(147, 15, 5),
(148, 1, 5),
(149, 2, 5),
(150, 14, 5),
(151, 15, 5),
(152, 3, 5),
(153, 1, 5),
(154, 2, 5),
(155, 14, 5),
(156, 15, 5),
(157, 3, 5),
(158, 5, 5),
(159, 1, 5),
(160, 2, 5),
(161, 14, 5),
(162, 15, 5),
(163, 3, 5),
(164, 5, 5),
(165, 6, 5),
(166, 1, 5),
(167, 2, 5),
(168, 14, 5),
(169, 15, 5),
(170, 3, 5),
(171, 5, 5),
(172, 6, 5),
(173, 1, 5),
(174, 2, 5),
(175, 14, 5),
(176, 15, 5),
(177, 3, 5),
(178, 5, 5),
(179, 6, 5),
(180, 9, 5),
(181, 1, 5),
(182, 2, 5),
(183, 14, 5),
(184, 15, 5),
(185, 3, 5),
(186, 5, 5),
(187, 6, 5),
(188, 9, 5),
(189, 11, 5),
(190, 1, 5),
(191, 2, 5),
(192, 14, 5),
(193, 15, 5),
(194, 3, 5),
(195, 5, 5),
(196, 6, 5),
(197, 9, 5),
(198, 11, 5),
(199, 18, 5),
(200, 1, 6),
(201, 2, 6),
(202, 14, 6),
(203, 15, 6),
(204, 16, 6),
(205, 17, 6),
(206, 1, 6),
(207, 2, 6),
(208, 14, 6),
(209, 15, 6),
(210, 16, 6),
(211, 17, 6),
(212, 3, 6),
(213, 1, 6),
(214, 2, 6),
(215, 14, 6),
(216, 15, 6),
(217, 16, 6),
(218, 17, 6),
(219, 3, 6),
(220, 5, 6),
(221, 1, 6),
(222, 2, 6),
(223, 14, 6),
(224, 15, 6),
(225, 16, 6),
(226, 17, 6),
(227, 3, 6),
(228, 5, 6),
(229, 6, 6),
(230, 1, 6),
(231, 2, 6),
(232, 14, 6),
(233, 15, 6),
(234, 16, 6),
(235, 17, 6),
(236, 3, 6),
(237, 5, 6),
(238, 6, 6),
(239, 7, 6),
(240, 1, 6),
(241, 2, 6),
(242, 14, 6),
(243, 15, 6),
(244, 16, 6),
(245, 17, 6),
(246, 3, 6),
(247, 5, 6),
(248, 6, 6),
(249, 7, 6),
(250, 9, 6),
(251, 1, 6),
(252, 2, 6),
(253, 14, 6),
(254, 15, 6),
(255, 16, 6),
(256, 17, 6),
(257, 3, 6),
(258, 5, 6),
(259, 6, 6),
(260, 7, 6),
(261, 9, 6),
(262, 11, 6),
(263, 1, 6),
(264, 2, 6),
(265, 14, 6),
(266, 15, 6),
(267, 16, 6),
(268, 17, 6),
(269, 3, 6),
(270, 5, 6),
(271, 6, 6),
(272, 7, 6),
(273, 9, 6),
(274, 11, 6),
(275, 12, 6),
(276, 1, 6),
(277, 2, 6),
(278, 14, 6),
(279, 15, 6),
(280, 16, 6),
(281, 17, 6),
(282, 3, 6),
(283, 5, 6),
(284, 6, 6),
(285, 7, 6),
(286, 9, 6),
(287, 11, 6),
(288, 12, 6),
(289, 13, 6),
(290, 1, 6),
(291, 2, 6),
(292, 14, 6),
(293, 15, 6),
(294, 16, 6),
(295, 17, 6),
(296, 3, 6),
(297, 5, 6),
(298, 6, 6),
(299, 7, 6),
(300, 9, 6),
(301, 11, 6),
(302, 12, 6),
(303, 13, 6),
(304, 14, 6),
(305, 1, 6),
(306, 2, 6),
(307, 14, 6),
(308, 15, 6),
(309, 16, 6),
(310, 17, 6),
(311, 3, 6),
(312, 5, 6),
(313, 6, 6),
(314, 7, 6),
(315, 9, 6),
(316, 11, 6),
(317, 12, 6),
(318, 13, 6),
(319, 14, 6),
(320, 15, 6),
(321, 1, 6),
(322, 2, 6),
(323, 14, 6),
(324, 15, 6),
(325, 16, 6),
(326, 17, 6),
(327, 3, 6),
(328, 5, 6),
(329, 6, 6),
(330, 7, 6),
(331, 9, 6),
(332, 11, 6),
(333, 12, 6),
(334, 13, 6),
(335, 14, 6),
(336, 15, 6),
(337, 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kd_gejala` varchar(5) NOT NULL,
  `nm_gejala` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `b6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kd_gejala`, `nm_gejala`, `question`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`) VALUES
(1, 'G01', 'Sakit Kepala', 'Sakit Kepala', 1, 1, 1, 1, 1, 1),
(2, 'G02', 'Anosmia (Hilangnya indra perasa dan penciuman)', 'Anosmia (Hilangnya indra perasa dan penciuman)', 1, 1, 1, 1, 1, 1),
(3, 'G03', 'Nyeri Otot yang tidak biasa', 'Nyeri Otot yang tidak biasa', 0, 0, 0, 3, 3, 1),
(4, 'G04', 'Hidung Berair/Berlendir (Beringus)', 'Hidung Berair/Berlendir (Beringus)', 3, 3, 0, 0, 0, 0),
(5, 'G05', 'Batuk Kering', 'Batuk Kering', 3, 3, 3, 3, 3, 1),
(6, 'G06', 'Nyeri Dada', 'Nyeri Dada', 0, 0, 0, 0, 3, 1),
(7, 'G07', 'Radang Tenggorokan', 'Radang Tenggorokan', 3, 3, 0, 3, 0, 0),
(8, 'G08', 'Suhu Tubuh Normal (tidak adanya demam)', 'Suhu Tubuh Normal (tidak adanya demam)', 5, 0, 0, 0, 0, 0),
(9, 'G09', 'Demam', 'Demam', 0, 5, 0, 3, 3, 3),
(10, 'G10', 'Suara Serak', 'Suara Serak', 0, 0, 0, 3, 0, 0),
(11, 'G11', 'Kehilangan Nafsu Makan', 'Kehilangan Nafsu Makan', 0, 5, 5, 3, 3, 1),
(12, 'G12', 'Diare', 'Diare', 0, 0, 5, 0, 0, 3),
(13, 'G13', 'Muntah-Muntah', 'Muntah-Muntah', 0, 0, 5, 0, 0, 3),
(14, 'G14', 'Kelelahan', 'Kelelahan', 0, 0, 0, 5, 5, 3),
(15, 'G15', 'Kebingungan', 'Kebingungan', 0, 0, 0, 0, 5, 3),
(16, 'G16', 'Sesak Napas', 'Sesak Napas', 0, 0, 0, 0, 0, 5),
(17, 'G17', 'Sakit Perut Parah', 'Sakit Perut Parah', 0, 0, 0, 0, 0, 5),
(18, 'G18', 'Komorbid (Memiliki penyakit bawaan)', 'Apakah Anda Komorbid (Memiliki penyakit bawaan)?', 0, 0, 0, 3, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_identifikasi`
--

CREATE TABLE `hasil_identifikasi` (
  `id_identifikasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `identifikasi` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `id_identifikasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `id_klaster` int(11) NOT NULL,
  `tgl_identifikasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `klaster`
--

CREATE TABLE `klaster` (
  `id_klaster` int(11) NOT NULL,
  `kd_klaster` varchar(5) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nm_klaster` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `solusi` text NOT NULL,
  `tingkat_butuh_oksigen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klaster`
--

INSERT INTO `klaster` (`id_klaster`, `kd_klaster`, `id_admin`, `nm_klaster`, `ket`, `solusi`, `tingkat_butuh_oksigen`) VALUES
(1, 'K01', 1, 'Flu Tanpa Demam', 'Flu atau influenza adalah infeksi virus yang menyerang hidung, tenggorokan, dan paru-paru. Namun dalam hal ini, tidak disertai dengan gejala demam. Penderita gejala ini biasanya masih muda dan memiliki BMI rendah.', '1. Isolasi Mandiri. <br>\r\n2. Rutin mencuci tangan. <br>\r\n3. Istirahat dan yang cukup. <br>\r\n4. Konsumsi teh ramuan jahe. <br>\r\n5. Melakukan pembersihan irigasi pernapasan (menggunakan cairan saline). <br>\r\n6. Konsumsi ibuprofen atau acetaminophen. <br>\r\n7. Makan makanan bergizi seperti yogurt, buah-buahan seperti blueberry atau sayuran seperti brokoli dan sup ayam. <br>\r\n8. Perbanyak minum air putih dan hindari kafein.  <br>', '1,5% (Ringan)'),
(2, 'K02', 1, 'Flu Dengan Demam', 'Flu atau influenza adalah infeksi virus yang menyerang hidung, tenggorokan, dan paru-paru. Namun dalam hal ini, flu disertai dengan demam.', '1. Isolasi mandiri. <br>\r\n2. Rutin mencuci tangan. <br>\r\n3. Istirahat dan yang cukup. <br>\r\n4. Konsumsi teh ramuan jahe. <br>\r\n5. Melakukan pembersihan irigasi pernapasan (menggunakan cairan saline). <br>\r\n6. Konsumsi Paracetamol, Ibuprofen atau Acetaminophen. <br>\r\n7. Makan makanan bergizi seperti yogurt, buah-buahan seperti blueberry atau sayuran seperti brokoli dan sup ayam. <br>\r\n8. Perbanyak minum air putih dan hindari kafein.  <br>', '4,4% (Ringan)'),
(3, 'K03', 1, 'Gastrointestinal', 'Gastroenteritis merupakan penyakit lambung akibat infeksi virus yang ditandai dengan adanya diare dan muntah. Memiliki tingkat kebutuhan bantuan pernapasan yang relatif rendah dibandingkan dengan gejala flu yang disertai demam.', '1. Isolasi mandiri. <br>\r\n2. Rutin mencuci tangan. <br>\r\n3. Istirahat dan yang cukup. <br>\r\n4. Konsumsi teh ramuan jahe. <br>\r\n5. Melakukan pembersihan irigasi pernapasan (menggunakan cairan saline). <br>\r\n6. Banyak konsumsi air putih dan makanan bernutrisi. Penderita dianjurkan untuk makan dalam porsi yang lebih sedikit, namun sering.<br>\r\n7. Hindari mengonsumsi susu, yogurt, kopi, alkohol, keju, serta makanan pedas, berserat tinggi, atau tinggi lemak.<br>\r\n8. Untuk membantu mengganti cairan tubuh yang hilang, penderita dapat mengonsumsi oralit.<br> ', '3,7% (Ringan)'),
(4, 'K04', 1, 'Resiko Posirif Rendah', 'Tingkat I dari covid-19 akan disertai kelelahan yang luar biasa.', '1. Isolasi rumah sakit. <br>\r\n2. Rutin mencuci tangan. <br>\r\n3. Istirahat dan yang cukup. <br>\r\n4. Konsumsi teh ramuan jahe. <br> \r\n5. Melakukan pembersihan irigasi pernapasan (menggunakan cairan saline). <br>\r\n6. Konsumsi Paracetamol, Ibuprofen atau Acetaminophen. <br>\r\n7. Makan makanan bergizi seperti yogurt, buah-buahan seperti blueberry atau sayuran seperti brokoli dan sup ayam. <br>\r\n8. Perbanyak minum air putih dan hindari kafein.  <br>\r\n9. Mengonsumsi vitamin B12 yang dikombinasikan dengan asam folat. <br>\r\n10. Kelelahan kronis bisa mengonsumsi suplemen mengandung asam lemak omega-3, omega-6 dan Magnesium.<br>\r\n', '8,6% (Darurat)'),
(5, 'K05', 1, 'Resiko Positif Sedang', 'Tingkat II dari covid-19 akan disertai kelelahan dan kebingungan terhadap penderitanya.', '1. Isolasi rumah sakit. <br>\r\n2. Rutin mencuci tangan. <br>\r\n3. Istirahat dan yang cukup. <br>\r\n4. Konsumsi teh ramuan jahe. <br> \r\n5. Melakukan pembersihan irigasi pernapasan (menggunakan cairan saline). <br>\r\n6. Konsumsi Paracetamol, Ibuprofen atau Acetaminophen. <br>\r\n7. Makan makanan bergizi seperti yogurt, buah-buahan seperti blueberry atau sayuran seperti brokoli dan sup ayam. <br>\r\n8. Perbanyak minum air putih dan hindari kafein.  <br>\r\n9. mengonsumsi vitamin B12 yang dikombinasikan dengan asam folat. <br>\r\n10. Kelelahan kronis bisa mengonsumsi suplemen mengandung asam lemak omega-3, omega-6 dan Magnesium.<br>\r\n', '9,9% (Darurat)'),
(6, 'K06', 1, 'Resiko Positif Tinggi', 'Tingkat III dari covid-19 akan disertai kelelahan, kebingungan, sakit perut dan sesak nafas luar biasa yang ditandai dengan saturasi oksigen dibawah 90 persen.', '1. Isolasi rumah sakit. <br>\r\n2. Rutin mencuci tangan. <br>\r\n3. Istirahat dan yang cukup. <br>\r\n4. Konsumsi teh ramuan jahe. <br> \r\n5. Melakukan pembersihan irigasi pernapasan (menggunakan cairan saline). <br>\r\n6. Konsumsi Paracetamol, Ibuprofen atau Acetaminophen. <br>\r\n7. Makan makanan bergizi seperti yogurt, buah-buahan seperti blueberry atau sayuran seperti brokoli dan sup ayam. <br>\r\n8. Perbanyak minum air putih dan hindari kafein.  <br>\r\n9. mengonsumsi vitamin B12 yang dikombinasikan dengan asam folat. <br>\r\n10. Kelelahan kronis bisa mengonsumsi suplemen mengandung asam lemak omega-3, omega-6 dan Magnesium.<br>\r\n11. Lakukan proning. Proning adalah teknik yang terbukti secara medis dapat menolong menambah jumlah oksigen. Saat melakukan teknik dan posisi proning, pastikan ruangan memiliki sirkulasi udara yang baik dan hirup udara segar sebanyak mungkin.<br>\r\n', '19,8% (Sangat Darurat)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `jns_kelamin` enum('L','P','','') NOT NULL,
  `usia` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  ADD PRIMARY KEY (`id_basis_kasus`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_klaster` (`id_klaster`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil_identifikasi`
--
ALTER TABLE `hasil_identifikasi`
  ADD PRIMARY KEY (`id_identifikasi`),
  ADD KEY `id_gejala` (`id_gejala`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`),
  ADD KEY `id_identifikasi` (`id_identifikasi`),
  ADD KEY `id_klaster` (`id_klaster`);

--
-- Indexes for table `klaster`
--
ALTER TABLE `klaster`
  ADD PRIMARY KEY (`id_klaster`),
  ADD KEY `id_admin` (`id_admin`);

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
-- AUTO_INCREMENT for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  MODIFY `id_basis_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hasil_identifikasi`
--
ALTER TABLE `hasil_identifikasi`
  MODIFY `id_identifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=620;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `klaster`
--
ALTER TABLE `klaster`
  MODIFY `id_klaster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
