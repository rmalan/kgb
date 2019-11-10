-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:49679
-- Generation Time: Jun 09, 2018 at 07:06 AM
-- Server version: 5.7.9-log
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lenibkd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ref_asn`
--

CREATE TABLE `ref_asn` (
  `asn_id` int(11) NOT NULL,
  `asn_nip` varchar(18) NOT NULL,
  `asn_nama` varchar(50) NOT NULL,
  `asn_gol_akhir` varchar(5) NOT NULL,
  `asn_skpd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_asn`
--

INSERT INTO `ref_asn` (`asn_id`, `asn_nip`, `asn_nama`, `asn_gol_akhir`, `asn_skpd`) VALUES
(121, '198206152014091004', 'Albert Kongoasa', 'III/b', 100),
(122, '198206152014091005', 'Albert Sugianto', 'III/c', 100),
(123, '198206152014091006', 'Albert Suherman', 'IV/a', 100),
(124, '198206152014091001', 'Aldo Putra Brasali', 'IV/c', 100),
(125, '198206152014091002', 'Alex Ivan Tanoyo', 'III/d', 100),
(126, '198206152014091003', 'Alexander Hermas Wolfe', 'IV/b', 100),
(127, '198206152014091007', 'Alexander Johan Widjaja', 'III/c', 100),
(128, '198206152014091008', 'Alexander Thaslim', 'IV/a', 100),
(129, '196705132014092003', 'Alexandra Miksar', 'III/d', 100),
(130, '196705132014092004', 'Alexandra Miksar and Djoni Aristianto Prasetio', 'III/d', 100),
(131, '196705132014092005', 'Alexandra Miksar and others', 'III/d', 100),
(132, '196705132014092002', 'Alfari Narindra', 'III/d', 100),
(133, '196705132014092006', 'Ali Alimsyah', 'III/c', 100),
(134, '196705132014092007', 'Ali Chendra', 'IV/a', 100),
(135, '196705132014092009', 'Alice Haryono', 'III/a', 100),
(136, '196705132014092008', 'Alien Wibowo', 'IV/a', 100),
(137, '196705132014092001', 'Aling Hermawan Oey', 'IV/a', 100),
(138, '196504052014091006', 'Alisyahrazad Hanafiah', 'IV/b', 110),
(139, '196504052014091003', 'Allan Dijaya Keller', 'III/c', 100),
(140, '196504052014091001', 'Allan Tjahja Tjao', 'III/d', 100),
(141, '196504052014091002', 'Aluinanto Sandjojo', 'III/a', 100),
(142, '196504052014091004', 'Alvin Gozali', 'IV/a', 100),
(143, '196504052014091005', 'Alwi Alatas', 'IV/a', 100),
(144, '198112022014091002', 'Alwijaya Aw', 'III/c', 100),
(145, '198112022014091001', 'Amalia', 'III/b', 100),
(146, '198112022014091003', 'Amalia Aristiningsih', 'III/d', 100),
(147, '198112022014091004', 'Amaluddin Djambak', 'IV/a', 100),
(148, '198112022014091005', 'Aman', 'III/a', 100),
(149, '198112022014091006', 'Ameesh Anand', 'III/b', 100),
(150, '198112022014091007', 'Amelia Kurniawan', 'III/b', 100),
(151, '198112022014091008', 'Amelia Mulyono', 'III/c', 100),
(152, '198112022014091009', 'American Express Bank Ltd (Indonesia)', 'III/a', 100),
(153, '198810152014042001', 'Amin Halim', 'III/c', 100),
(154, '198810152014042002', 'Amin Supriyadi Liu', 'III/b', 100),
(155, '198810152014042003', 'Aminoto Sutandi', 'III/d', 100),
(156, '198810152014042004', 'Aminoto Sutandy', 'III/b', 100),
(157, '198810152014042005', 'Amrullah Hasyim', 'III/b', 100),
(158, '198810152014042006', 'Amy Delia', 'III/a', 100),
(159, '198810152014042007', 'Anak Agung Alit Wiradarma', 'III/a', 100),
(160, '198709302012122002', 'Anak Agung Gde Agung', 'III/b', 100),
(161, '198709302012122001', 'Ananda Soewono', 'III/c', 100),
(162, '198709302012122003', 'Ance Anggraeny', 'III/c', 100),
(163, '198709302012122004', 'Budi Sintoro Then', 'III/d', 100),
(164, '198709302012122005', 'Budi Surjana', 'III/d', 100),
(165, '198709302012122006', 'Budi Widyadi', 'III/c', 100),
(166, '198709302012122007', 'Budi Yanto Lusli', 'III/b', 100),
(167, '198709302012122008', 'Budiarto Karim', 'III/d', 100),
(168, '198708142015042003', 'Budiawan Jusmin', 'III/d', 100),
(169, '198708142015042001', 'BUDIJUWONO HANDJAJA', 'III/a', 100),
(170, '198708142015042002', 'Budiman Effendi', 'III/d', 100),
(171, '198708142015042004', 'Budiono', 'III/b', 100),
(172, '198708142015042003', 'Budiono Darsono', 'III/b', 100),
(173, '198708142015042005', 'Budiono Tanbun Boen', 'III/c', 100),
(174, '198708142015042006', 'Budy Hartono Santosa', 'III/c', 100),
(175, '198708142015042007', 'Budyanto Totong', 'III/c', 100),
(176, '198901162015042002', 'Burhansjah', 'III/d', 100),
(177, '198901162015042001', 'Bustami', 'III/a', 100),
(178, '198901162015042003', 'Elvina Jonas Jahja', 'III/a', 100),
(179, '198901162015042004', 'Elvira Pudjiwati', 'III/c', 110),
(180, '198901162015042005', 'Emi Sukiati Lasimon', 'III/b', 110),
(181, '198901162015042006', 'Emil Abeng', 'III/a', 110),
(182, '198901162015042007', 'Emily Stephana Djauhari', 'III/a', 110),
(183, '198901162015042008', 'Emily Waty Setiawan', 'III/a', 110),
(184, '198901162015042009', 'Fabian Gelael', 'III/b', 110),
(185, '198712232014042001', 'Fadjar Endranto', 'III/a', 110),
(186, '198712232014042002', 'Fahmi Babra', 'III/a', 110),
(187, '198712232014042003', 'Fahmi Idris', 'III/b', 110),
(188, '198712232014042004', 'Fahyudi Djaniatmadja', 'III/a', 110),
(189, '198712232014042005', 'Faisal Panggabean Law Firm', 'III/c', 110),
(190, '198712232014042006', 'Faisol Soleh Masjkoer', 'III/a', 110),
(191, '198712232014042007', 'Faiz Shahab', 'III/b', 110),
(192, '198712232014042008', 'Faizan Abdul Rahan', 'III/b', 110),
(193, '198508062010121006', 'Gatot Kariyoso Wiroyudo', 'III/b', 110),
(194, '198508062010121001', 'Geeta M. Mirpuri', 'III/b', 110),
(195, '198508062010121002', 'Gemilang Investama', 'III/b', 110),
(196, '198508062010121003', 'Handy Sunardio', 'III/a', 110),
(197, '198508062010121004', 'Hanny Suprayogi', 'III/c', 110),
(198, '198508062010121005', 'Hanny Sutanto', 'III/b', 110),
(199, '198508062010121006', 'Hans Jurgen Kaschull', 'III/a', 110),
(200, '198508062010121007', 'Hans Maramis', 'III/a', 110),
(201, '198508062010121008', 'Hans Moelyadi', 'III/d', 110),
(202, '198808162015042003', 'Hansen Suryadi', 'III/a', 110),
(203, '198808162015042004', 'Hanson Ramli', 'III/b', 110),
(204, '198808162015042005', 'Inayat Ali Badruddin', 'III/b', 110),
(205, '198808162015042001', 'Inda Aryanti Imanto', 'III/b', 110),
(206, '198808162015042002', 'Indah Djuita Tjatursari', 'III/b', 110),
(207, '198808162015042006', 'Indahwaty Hartono', 'III/a', 110),
(208, '198808162015042007', 'Indawan Saputra Hatta', 'III/b', 110),
(209, '198804192014042002', 'Indawati', 'III/a', 110),
(210, '198804192014042001', 'Inder Singh', 'III/a', 110),
(211, '198804192014042003', 'Indra Gunawan', 'III/a', 110),
(212, '198804192014042004', 'Marcella Magdalena', 'III/a', 110),
(213, '198804192014042005', 'Marcellus Charles Colondam', 'III/b', 110),
(214, '198804192014042006', 'Marcellyna Junita Widjaja', 'III/b', 110),
(215, '198804192014042007', 'Marco Baldini', 'III/a', 110),
(216, '198812272014042001', 'Margareth Maria Regina Budhiparama', 'III/b', 110),
(217, '198812272014042002', 'Margaretha Natalia Widjaja', 'III/b', 110),
(218, '198812272014042003', 'Maria Karmila', 'III/a', 110),
(219, '198812272014042004', 'Nugraha Tirtanata', 'III/a', 110),
(220, '198812272014042005', 'Nugroho Halim Wijaya', 'III/b', 110),
(221, '198812272014042006', 'Nur Zain', 'III/a', 110),
(222, '198812272014042007', 'Nurbaiti', 'III/c', 110),
(223, '198812272014042008', 'Nurdin Hasjim Johanes', 'III/a', 110),
(224, '198812272014042009', 'Nurmalasari Suginawan', 'III/a', 110),
(225, '198807162015111008', 'Nurochim', 'III/b', 110),
(226, '198807162015111007', 'Nursalim Podiono', 'III/a', 110),
(227, '198807162015111006', 'Nyoman Sarimin', 'III/a', 110),
(228, '198807162015111005', 'Prasodjo Winarko', 'III/a', 110),
(229, '198807162015111004', 'Prayitno Cipto Anggoro Himawan', 'III/a', 110),
(230, '198807162015111003', 'Prayugi Sukardjo', 'III/a', 110),
(231, '198807162015111002', 'Prem Ramchand Harjani', 'III/a', 110),
(232, '198807162015111001', 'Pri Wono', 'III/a', 110),
(233, '199011122018031006', 'Prijono Winarko', 'III/a', 110),
(234, '199011122018031005', 'Primanaga Hartanto Kalim', 'III/a', 110),
(235, '199011122018031004', 'Priyatno Sulisto', 'III/a', 110),
(236, '199011122018031003', 'Proboraras Mudoyo', 'III/a', 110),
(237, '199011122018031002', 'Ravi Tulsidas Vasandani', 'III/b', 110),
(238, '199011122018031001', 'Rayanusin Widjaja', 'III/a', 110);

-- --------------------------------------------------------

--
-- Table structure for table `ref_config`
--

CREATE TABLE `ref_config` (
  `config_id` int(11) NOT NULL,
  `config_logo` varchar(100) DEFAULT 'bengkulu_coa.png',
  `config_kop_atas` varchar(100) NOT NULL,
  `config_kop_bawah` varchar(200) NOT NULL,
  `config_alamat` text NOT NULL,
  `config_telp` varchar(12) DEFAULT NULL,
  `config_web` varchar(50) DEFAULT NULL,
  `config_email` varchar(50) DEFAULT NULL,
  `config_ttd_satu` varchar(25) NOT NULL,
  `config_ttd_dua` varchar(300) NOT NULL,
  `config_nip_pejabat` varchar(18) NOT NULL,
  `config_skpd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_config`
--

INSERT INTO `ref_config` (`config_id`, `config_logo`, `config_kop_atas`, `config_kop_bawah`, `config_alamat`, `config_telp`, `config_web`, `config_email`, `config_ttd_satu`, `config_ttd_dua`, `config_nip_pejabat`, `config_skpd`) VALUES
(1, 'bengkulu_coa.png', 'PEMERINTAH PROVINSI BENGKULU', 'BADAN KEPEGAWAIAN DAERAH', 'Jl. Pembangunan No. 01', '-', 'http://www.bkd.bengkuluprov.go.id', '-', 'GUBERNUR BENGKULU', 'KEPALA BADAN KEPEGAWAIAN DAERAH', '198206152014091001', 100),
(2, 'bengkulu_coa.png', 'PEMERINTAH PROVINSI BENGKULU', 'SEKRETARIAT DAERAH', 'Jl. Pembangunan No. 01', '-', 'http://www.bengkuluprov.go.id', '-', 'GUBERNUR BENGKULU', 'KEPALA SEKRETARIAT DAERAH', '196504052014091006', 110);

-- --------------------------------------------------------

--
-- Table structure for table `ref_gaji`
--

CREATE TABLE `ref_gaji` (
  `gaji_id` int(11) NOT NULL,
  `gaji_gol` varchar(5) NOT NULL,
  `gaji_masker` int(11) NOT NULL,
  `gaji_pokok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_gaji`
--

INSERT INTO `ref_gaji` (`gaji_id`, `gaji_gol`, `gaji_masker`, `gaji_pokok`) VALUES
(2, 'I/a', 0, 1486500),
(3, 'I/a', 2, 1533400),
(4, 'I/a', 4, 1581700),
(5, 'I/a', 6, 1631500),
(6, 'I/a', 8, 1682900),
(7, 'I/a', 10, 1735900),
(8, 'I/a', 12, 1790500),
(9, 'I/a', 14, 1846900),
(10, 'I/a', 16, 1905100),
(11, 'I/a', 18, 1965100),
(12, 'I/a', 20, 2027000),
(13, 'I/a', 22, 2090800),
(14, 'I/a', 24, 2156700),
(15, 'I/a', 26, 2224600),
(16, 'I/b', 3, 1623400),
(17, 'I/b', 5, 1674500),
(18, 'I/b', 7, 1727300),
(19, 'I/b', 9, 1781700),
(20, 'I/b', 11, 1837800),
(21, 'I/b', 13, 1895700),
(22, 'I/b', 15, 1955400),
(23, 'I/b', 17, 2016900),
(24, 'I/b', 19, 2080500),
(25, 'I/b', 21, 2146000),
(26, 'I/b', 23, 2213600),
(27, 'I/b', 25, 2283300),
(28, 'I/b', 27, 2355200),
(29, 'I/c', 3, 1692100),
(30, 'I/c', 5, 1745400),
(31, 'I/c', 7, 1800300),
(32, 'I/c', 9, 1857000),
(33, 'I/c', 11, 1915500),
(34, 'I/c', 13, 1975800),
(35, 'I/c', 15, 2038100),
(36, 'I/c', 17, 2102300),
(37, 'I/c', 19, 2168500),
(38, 'I/c', 21, 2236800),
(39, 'I/c', 23, 2307200),
(40, 'I/c', 25, 2379900),
(41, 'I/c', 27, 2454800),
(42, 'I/d', 3, 1763600),
(43, 'I/d', 5, 1819200),
(44, 'I/d', 7, 1876500),
(45, 'I/d', 9, 1935600),
(46, 'I/d', 11, 1996500),
(47, 'I/d', 13, 2059400),
(48, 'I/d', 15, 2124300),
(49, 'I/d', 17, 2191200),
(50, 'I/d', 19, 2260200),
(51, 'I/d', 21, 2331400),
(52, 'I/d', 23, 2404800),
(53, 'I/d', 25, 2480500),
(54, 'I/d', 27, 2558700),
(55, 'II/a', 0, 1926000),
(56, 'II/a', 1, 1956300),
(57, 'II/a', 3, 2017900),
(58, 'II/a', 5, 2081500),
(59, 'II/a', 7, 2147000),
(60, 'II/a', 9, 2214700),
(61, 'II/a', 11, 2284400),
(62, 'II/a', 13, 2356400),
(63, 'II/a', 15, 2430600),
(64, 'II/a', 17, 2507100),
(65, 'II/a', 19, 2586100),
(66, 'II/a', 21, 2667500),
(67, 'II/a', 23, 2751600),
(68, 'II/a', 25, 2838200),
(69, 'II/a', 27, 2927600),
(70, 'II/a', 29, 3019800),
(71, 'II/a', 31, 3114900),
(72, 'II/a', 33, 3213000),
(73, 'II/b', 3, 2103300),
(74, 'II/b', 5, 2169500),
(75, 'II/b', 7, 2237900),
(76, 'II/b', 9, 2308300),
(77, 'II/b', 11, 2381100),
(78, 'II/b', 13, 2456000),
(79, 'II/b', 15, 2533400),
(80, 'II/b', 17, 2613200),
(81, 'II/b', 19, 2695500),
(82, 'II/b', 21, 2780400),
(83, 'II/b', 23, 2867900),
(84, 'II/b', 25, 2958300),
(85, 'II/b', 27, 3051400),
(86, 'II/b', 29, 3147600),
(87, 'II/b', 31, 3246700),
(88, 'II/b', 33, 3348900),
(89, 'II/c', 3, 2192300),
(90, 'II/c', 5, 2261300),
(91, 'II/c', 7, 2332500),
(92, 'II/c', 9, 2406000),
(93, 'II/c', 11, 2481800),
(94, 'II/c', 13, 2559900),
(95, 'II/c', 15, 2640600),
(96, 'II/c', 17, 2723700),
(97, 'II/c', 19, 2809500),
(98, 'II/c', 21, 2898000),
(99, 'II/c', 23, 2989300),
(100, 'II/c', 25, 3083400),
(101, 'II/c', 27, 3180500),
(102, 'II/c', 29, 3280700),
(103, 'II/c', 31, 3384000),
(104, 'II/c', 33, 3490600),
(105, 'II/d', 3, 2285000),
(106, 'II/d', 5, 2357000),
(107, 'II/d', 7, 2431200),
(108, 'II/d', 9, 2507800),
(109, 'II/d', 11, 2586700),
(110, 'II/d', 13, 2668200),
(111, 'II/d', 15, 2752300),
(112, 'II/d', 17, 2838900),
(113, 'II/d', 19, 2928300),
(114, 'II/d', 21, 3020600),
(115, 'II/d', 23, 3115700),
(116, 'II/d', 25, 3213800),
(117, 'II/d', 27, 3315100),
(118, 'II/d', 29, 3419500),
(119, 'II/d', 31, 3527200),
(120, 'II/d', 33, 3638200),
(121, 'III/a', 0, 2456700),
(122, 'III/a', 2, 2534000),
(123, 'III/a', 4, 2613800),
(124, 'III/a', 6, 2696200),
(125, 'III/a', 8, 2781100),
(126, 'III/a', 10, 2868700),
(127, 'III/a', 12, 2959000),
(128, 'III/a', 14, 3052200),
(129, 'III/a', 16, 3148300),
(130, 'III/a', 18, 3247500),
(131, 'III/a', 20, 3349800),
(132, 'III/a', 22, 3455300),
(133, 'III/a', 24, 3564100),
(134, 'III/a', 26, 3676400),
(135, 'III/a', 28, 3792100),
(136, 'III/a', 30, 3911600),
(137, 'III/a', 32, 4034800),
(138, 'III/b', 0, 2560600),
(139, 'III/b', 2, 2641200),
(140, 'III/b', 4, 2724400),
(141, 'III/b', 6, 2810200),
(142, 'III/b', 8, 2898700),
(143, 'III/b', 10, 2990000),
(144, 'III/b', 12, 3084200),
(145, 'III/b', 14, 3181300),
(146, 'III/b', 16, 3281500),
(147, 'III/b', 18, 3384900),
(148, 'III/b', 20, 3491500),
(149, 'III/b', 22, 3601400),
(150, 'III/b', 24, 3714900),
(151, 'III/b', 26, 3831900),
(152, 'III/b', 28, 3952600),
(153, 'III/b', 30, 4077000),
(154, 'III/b', 32, 4205400),
(155, 'III/c', 0, 2668900),
(156, 'III/c', 2, 2752900),
(157, 'III/c', 4, 2839700),
(158, 'III/c', 6, 2929100),
(159, 'III/c', 8, 3021300),
(160, 'III/c', 10, 3116500),
(161, 'III/c', 12, 3214700),
(162, 'III/c', 14, 3315900),
(163, 'III/c', 16, 3420300),
(164, 'III/c', 18, 3528100),
(165, 'III/c', 20, 3639200),
(166, 'III/c', 22, 3753800),
(167, 'III/c', 24, 3872000),
(168, 'III/c', 26, 3994000),
(169, 'III/c', 28, 4119700),
(170, 'III/c', 30, 4249500),
(171, 'III/c', 32, 4383300),
(172, 'III/d', 0, 2781800),
(173, 'III/d', 2, 2869400),
(174, 'III/d', 4, 2959800),
(175, 'III/d', 6, 3053000),
(176, 'III/d', 8, 3149100),
(177, 'III/d', 10, 3248300),
(178, 'III/d', 12, 3350600),
(179, 'III/d', 14, 3456200),
(180, 'III/d', 16, 3565000),
(181, 'III/d', 18, 3677300),
(182, 'III/d', 20, 3793100),
(183, 'III/d', 22, 3912600),
(184, 'III/d', 24, 4035800),
(185, 'III/d', 26, 4162900),
(186, 'III/d', 28, 4294000),
(187, 'III/d', 30, 4429300),
(188, 'III/d', 32, 4568800),
(189, 'IV/a', 0, 2899500),
(190, 'IV/a', 2, 2990800),
(191, 'IV/a', 4, 3085000),
(192, 'IV/a', 6, 3182100),
(193, 'IV/a', 8, 3282400),
(194, 'IV/a', 10, 3385700),
(195, 'IV/a', 12, 3492400),
(196, 'IV/a', 14, 3602400),
(197, 'IV/a', 16, 3715800),
(198, 'IV/a', 18, 3832800),
(199, 'IV/a', 20, 3953600),
(200, 'IV/a', 22, 4078100),
(201, 'IV/a', 24, 4206500),
(202, 'IV/a', 26, 4339000),
(203, 'IV/a', 28, 4475700),
(204, 'IV/a', 30, 4616600),
(205, 'IV/a', 32, 4762000),
(206, 'IV/b', 0, 3022100),
(207, 'IV/b', 2, 3117300),
(208, 'IV/b', 4, 3215500),
(209, 'IV/b', 6, 3316700),
(210, 'IV/b', 8, 3421200),
(211, 'IV/b', 10, 3528900),
(212, 'IV/b', 12, 3640100),
(213, 'IV/b', 14, 3754700),
(214, 'IV/b', 16, 3873000),
(215, 'IV/b', 18, 3995000),
(216, 'IV/b', 20, 4120800),
(217, 'IV/b', 22, 4250600),
(218, 'IV/b', 24, 4384400),
(219, 'IV/b', 26, 4522500),
(220, 'IV/b', 28, 4665000),
(221, 'IV/b', 30, 4811900),
(222, 'IV/b', 32, 4963400),
(223, 'IV/c', 0, 3149900),
(224, 'IV/c', 2, 3249100),
(225, 'IV/c', 4, 3351500),
(226, 'IV/c', 6, 3457000),
(227, 'IV/c', 8, 3565900),
(228, 'IV/c', 10, 3678200),
(229, 'IV/c', 12, 3794100),
(230, 'IV/c', 14, 3913600),
(231, 'IV/c', 16, 4036800),
(232, 'IV/c', 18, 4164000),
(233, 'IV/c', 20, 4295100),
(234, 'IV/c', 22, 4430400),
(235, 'IV/c', 24, 4569900),
(236, 'IV/c', 26, 4713800),
(237, 'IV/c', 28, 4862300),
(238, 'IV/c', 30, 5015400),
(239, 'IV/c', 32, 5173400),
(240, 'IV/d', 0, 3283200),
(241, 'IV/d', 2, 3386600),
(242, 'IV/d', 4, 3493200),
(243, 'IV/d', 6, 3603300),
(244, 'IV/d', 8, 3716700),
(245, 'IV/d', 10, 3833800),
(246, 'IV/d', 12, 3954600),
(247, 'IV/d', 14, 4079100),
(248, 'IV/d', 16, 4207600),
(249, 'IV/d', 18, 4340100),
(250, 'IV/d', 20, 4476800),
(251, 'IV/d', 22, 4617800),
(252, 'IV/d', 24, 4763200),
(253, 'IV/d', 26, 4913200),
(254, 'IV/d', 28, 5068000),
(255, 'IV/d', 30, 5227600),
(256, 'IV/d', 32, 5392200),
(257, 'IV/e', 0, 3422100),
(258, 'IV/e', 2, 3529800),
(259, 'IV/e', 4, 3641000),
(260, 'IV/e', 6, 3755700),
(261, 'IV/e', 8, 3874000),
(262, 'IV/e', 10, 3996000),
(263, 'IV/e', 12, 4121800),
(264, 'IV/e', 14, 4251600),
(265, 'IV/e', 16, 4385600),
(266, 'IV/e', 18, 4523700),
(267, 'IV/e', 20, 4666100),
(268, 'IV/e', 22, 4813100),
(269, 'IV/e', 24, 4964700),
(270, 'IV/e', 26, 5121100),
(271, 'IV/e', 28, 5282300),
(272, 'IV/e', 30, 5448700),
(273, 'IV/e', 32, 5620300);

-- --------------------------------------------------------

--
-- Table structure for table `ref_pangkat`
--

CREATE TABLE `ref_pangkat` (
  `pangkat_id` int(2) NOT NULL,
  `pangkat_nama` varchar(30) DEFAULT NULL,
  `pangkat_ruang` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_pangkat`
--

INSERT INTO `ref_pangkat` (`pangkat_id`, `pangkat_nama`, `pangkat_ruang`) VALUES
(1, 'Pembina Utama', 'IV/e'),
(2, 'Pembina Utama Madya', 'IV/d'),
(3, 'Pembina Utama Muda', 'IV/c'),
(4, 'Pembina Tk.I', 'IV/b'),
(5, 'Pembina', 'IV/a'),
(6, 'Penata Tk.I', 'III/d'),
(7, 'Penata', 'III/c'),
(8, 'Penata Muda Tk.I', 'III/b'),
(9, 'Penata Muda', 'III/a'),
(10, 'Pengatur Tk.I', 'II/d'),
(11, 'Pengatur', 'II/c'),
(12, 'Pengatur Muda Tk.I', 'II/b'),
(13, 'Pengatur Muda', 'II/a'),
(14, 'Juru Tk.I', 'I/d'),
(15, 'Juru', 'I/c'),
(16, 'Juru Muda Tk.I', 'I/b'),
(17, 'Juru Muda', 'I/a');

-- --------------------------------------------------------

--
-- Table structure for table `ref_riwayatkgb_proses`
--

CREATE TABLE `ref_riwayatkgb_proses` (
  `kgbproses_id` int(11) NOT NULL,
  `kgbproses_nip` varchar(18) NOT NULL,
  `kgbproses_tgl` date NOT NULL,
  `kgbproses_nama` int(11) NOT NULL,
  `kgbproses_operator` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ref_riwayat_kgb`
--

CREATE TABLE `ref_riwayat_kgb` (
  `riwayatkgb_id` int(11) NOT NULL,
  `riwayatkgb_id_sblm` int(11) DEFAULT NULL,
  `riwayatkgb_nip` varchar(18) NOT NULL,
  `riwayatkgb_gaji_lama` double NOT NULL,
  `riwayatkgb_gaji_baru` double NOT NULL,
  `riwayatkgb_masa_kerja` int(11) DEFAULT NULL,
  `riwayatkgb_tmt` date NOT NULL,
  `riwayatkgb_surat` varchar(30) DEFAULT NULL,
  `riwayatkgb_no_surat` varchar(25) NOT NULL,
  `riwayatkgb_tgl_surat` date NOT NULL,
  `riwayatkgb_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_riwayat_kgb`
--

INSERT INTO `ref_riwayat_kgb` (`riwayatkgb_id`, `riwayatkgb_id_sblm`, `riwayatkgb_nip`, `riwayatkgb_gaji_lama`, `riwayatkgb_gaji_baru`, `riwayatkgb_masa_kerja`, `riwayatkgb_tmt`, `riwayatkgb_surat`, `riwayatkgb_no_surat`, `riwayatkgb_tgl_surat`, `riwayatkgb_status`) VALUES
(124, 0, '198206152014091004', 2153400, 2466400, 16, '2012-02-01', 'SKP', 'SK. 123.3 - A.25', '2011-03-23', ''),
(125, 0, '198206152014091005', 3433100, 3753800, 22, '2017-02-01', 'SPKGB', '345.3/H.314/BKD', '2015-05-16', ''),
(126, 0, '198206152014091006', 2372700, 2870000, 18, '2012-03-01', 'SKP', 'SK. 112.7-T.19', '2010-03-04', ''),
(127, 0, '198206152014091001', 3204200, 3292800, 22, '2012-03-01', 'SKP', '74/K TAHUN 2011', '2011-12-06', ''),
(128, 0, '198206152014091002', 2332300, 2829700, 20, '2012-03-01', 'SPKGB', '345.3/0585/BKD', '2010-01-20', ''),
(129, 0, '198206152014091003', 4384400, 4522500, 26, '2016-11-01', 'SKP', 'SK.567-B.219 TAHUN 2016', '2016-03-28', ''),
(130, 0, '198206152014091007', 2922200, 3238800, 20, '2014-03-01', 'SKP', 'SK. 567-N.25', '2013-03-28', ''),
(131, 0, '198206152014091008', 2717600, 3307000, 16, '2014-03-01', 'SPKGB', '162.7/0781/B.7', '2012-01-30', ''),
(132, 0, '196705132014092003', 2753500, 3375800, 20, '2014-03-01', 'SPKGB', '345.3/8847/BKD', '2011-12-19', ''),
(133, 0, '196705132014092004', 3045800, 3375800, 20, '2014-02-01', 'SKP', 'SK. 567-N.25', '2013-03-28', ''),
(134, 0, '196705132014092005', 2332300, 2829700, 20, '2012-03-01', 'SPKGB', '345.3/0228/BKD', '2010-01-11', ''),
(135, 0, '196705132014092002', 2339400, 2679400, 16, '2012-03-01', 'SKP', 'SK. 123.3 - A.25', '2011-03-23', ''),
(136, 0, '196705132014092006', 1428400, 2190700, 12, '2011-03-01', 'SKP', 'SK. 123.3 - 3.105', '2007-02-26', ''),
(137, 0, '196705132014092007', 2870000, 3269400, 20, '2013-03-01', 'SKP', 'SK. 567. 4 - S. 113', '2011-10-20', ''),
(138, 0, '196705132014092009', 1915200, 2066000, 14, '2011-02-01', 'SPKGB', '123.1/3355/BKD', '2009-05-13', ''),
(139, 0, '196705132014092008', 2315900, 2792800, 16, '2012-03-01', 'SKP', 'SK. 112.7-T.19', '2010-03-04', ''),
(140, 0, '196705132014092001', 2792800, 3411200, 18, '2013-10-01', 'SPKGB', '162.7/3997/BKD', '2011-07-11', ''),
(141, 0, '196504052014091006', 2533800, 2733400, 20, '2011-03-01', 'SKP', 'SK. 112.7 - C-105', '2009-09-28', ''),
(142, 0, '196504052014091003', 2244500, 2837500, 16, '2013-03-01', 'SPKGB', '345.3/1282/BKD', '2011-02-02', ''),
(143, 0, '196504052014091001', 2753500, 3375800, 20, '2014-02-01', 'SPKGB', '345.3/0091/BKD', '2012-01-09', ''),
(144, 0, '196504052014091002', 2045200, 2016500, 12, '2011-03-01', 'SKP', 'SK.123.3 -I-57', '2009-03-16', ''),
(145, 0, '196504052014091004', 2870000, 3518600, 20, '2014-03-01', 'SPKGB', '162.7/ 8846 /BKD', '2011-12-19', ''),
(146, 0, '196504052014091005', 2870000, 3269400, 20, '2013-03-01', 'SKP', 'SK. 112.7-S.113', '2011-10-20', ''),
(147, 0, '198112022014091002', 3128200, 3420300, 16, '2016-09-01', 'SPKGB', '345.3/3664/BKD', '2014-07-03', ''),
(148, 0, '198112022014091001', 1996200, 2400000, 14, '2012-03-01', 'SPKGB', '345.3/0238/BKD', '2010-01-11', ''),
(149, 0, '198112022014091003', 2607300, 3172800, 16, '2014-02-01', 'SPKGB', '345.3/8856/BKD', '2011-12-19', ''),
(150, 0, '198112022014091004', 2372700, 2870000, 18, '2012-03-01', 'SPKGB', '345.3/0262/BKD', '2010-01-11', ''),
(151, 0, '198112022014091005', 1869300, 2016500, 12, '2011-03-01', 'SKP', 'SK. 123.3 - T.20', '2010-03-04', ''),
(152, 0, '198112022014091006', 2206300, 2803600, 18, '2013-02-01', 'SPKGB', '345.3/6029/BKD', '2010-12-27', ''),
(153, 0, '198112022014091007', 3193200, 3491500, 20, '2016-10-01', 'SPKGB', '345.3/8271/BKD', '2014-08-28', ''),
(154, 0, '198112022014091008', 2080600, 2501500, 14, '2012-03-01', 'SPKGB', '345.3/0584/BKD', '2010-01-20', ''),
(155, 0, '198112022014091009', 1962200, 2611900, 16, '2012-06-01', 'SPKGB', '345.3 / 2733 / BKD', '2010-04-26', ''),
(156, 0, '198810152014042001', 2837500, 3139900, 18, '2013-10-01', 'SKP', 'SK. 567. T - 07', '2002-03-30', ''),
(157, 0, '198810152014042002', 1948400, 2101800, 12, '2011-03-01', 'SKP', 'Sk. 123.3 - T.20', '2010-03-04', ''),
(158, 0, '198810152014042003', 2168700, 2607300, 14, '2012-03-01', 'SKP', 'SK. 123.3 - T.20', '2010-03-04', ''),
(159, 0, '198810152014042004', 2566800, 2643400, 14, '2013-03-01', 'SKP', 'SK. 567 - F. 39', '2012-09-28', ''),
(160, 0, '198810152014042005', 2724400, 2810200, 6, '2016-12-01', 'SKP', 'SK.567-G.785 TAHUN 2015', '2015-09-28', ''),
(161, 0, '198810152014042006', 1618000, 2016500, 12, '2011-03-01', 'SKP', 'SK. 123.3 - I-57', '2009-03-16', ''),
(162, 0, '198810152014042007', 1915200, 2302600, 14, '2012-03-01', 'SPKGB', '345.3/0240/BKD', '2010-01-11', ''),
(163, 0, '198709302012122002', 1686500, 2101800, 12, '2010-09-01', 'SPKGB', '345.3/3374/B.6', '2008-06-02', ''),
(164, 0, '198709302012122001', 2030800, 2190700, 12, '2011-03-01', 'SKP', 'SK. 123.3 - T.20', '2010-03-04', ''),
(165, 0, '198709302012122003', 1856100, 2211400, 8, '2011-12-01', 'SPKGB', '345.3/6647/BKD', '2009-12-21', ''),
(166, 0, '198709302012122004', 2607300, 3172800, 16, '2014-02-01', 'SPKGB', '345.3/8840/BKD', '2011-12-19', ''),
(167, 0, '198709302012122005', 2607300, 3172800, 16, '2014-03-01', 'SPKGB', '345.3/8852/BKD', '2011-12-19', ''),
(168, 0, '198709302012122006', 2190700, 2501500, 14, '2012-03-01', 'SKP', 'SK. 123.3 - A.25', '2011-03-23', ''),
(169, 0, '198709302012122007', 2604700, 3205200, 22, '2014-04-01', 'SPKGB', '345.3/1612/BKD', '2012-02-22', ''),
(170, 0, '198709302012122008', 2607300, 3172800, 16, '2014-03-01', 'SPKGB', '345.3/8851/BKD', '2011-12-19', ''),
(171, 0, '198708142015042003', 3469100, 3793100, 20, '2016-12-01', 'SKP', 'SK.567-P.392 TAHUN 2015', '2016-11-30', ''),
(172, 0, '198708142015042001', 1915200, 2302600, 14, '2012-03-01', 'SPKGB', '345.3/0225/BKD', '2010-01-11', ''),
(173, 0, '198708142015042002', 2607300, 3172800, 16, '2014-03-01', 'SPKGB', '345.3/8850/BKD', '2011-12-19', ''),
(174, 0, '198708142015042004', 3281500, 3384900, 18, '2016-07-01', 'SKP', 'SK.567-B.219 TAHUN 2016', '2016-03-28', ''),
(175, 0, '198708142015042003', 3181300, 3281500, 16, '2016-05-01', 'SKP', 'SK.567-B.219 TAHUN 2016', '2016-03-28', ''),
(176, 0, '198708142015042005', 2597800, 2773600, 10, '2013-12-01', 'SKP', 'SK. 567. T- 10', '2012-03-30', ''),
(177, 0, '198708142015042006', 3128700, 3420300, 16, '2016-10-01', 'SPKGB', '345.3/4845/BKD', '2014-10-09', ''),
(178, 0, '198708142015042007', 2597800, 2861000, 12, '2013-03-01', 'SKP', 'SK. 567-F.39', '2012-09-28', ''),
(179, 0, '198901162015042002', 3160900, 3456200, 14, '2016-12-01', 'SKP', 'SK.567-P.392 TAHUN 2015', '2015-05-19', ''),
(180, 0, '198901162015042001', 1696500, 2009000, 4, '2012-04-01', 'SPKGB', '345.3/1246/BKD', '2010-02-09', ''),
(181, 0, '198901162015042003', 1954900, 2189200, 4, '2012-04-01', 'SKP', 'SK. 123.3-S.112', '2011-10-20', ''),
(182, 0, '198901162015042004', 2522500, 2773600, 10, '2013-12-01', 'SKP', '567-632', '2012-04-18', ''),
(183, 0, '198901162015042005', 2151900, 2579800, 8, '2014-04-01', 'SPKGB', '345.3/1613/BKD', '2012-02-22', ''),
(184, 0, '198901162015042006', 1743400, 1786200, 2, '2011-03-01', 'SK-PNS', 'SK. 813-P.47', '2010-05-24', ''),
(185, 0, '198901162015042007', 1902300, 1954900, 2, '2012-01-01', 'SK-PNS', 'SK. 813 - E.50', '2011-05-31', ''),
(186, 0, '198901162015042008', 1875000, 2321900, 8, '2013-04-01', 'SPKGB', '345.3/2116/BKD', '2011-03-14', ''),
(187, 0, '198901162015042009', 1861800, 2094000, 4, '2012-04-01', 'SKP', 'SK. 123.3 - J.58', '2010-08-24', ''),
(188, 0, '198712232014042001', 3052200, 3148300, 16, '2016-05-01', 'SKP', 'SK.567-B.219 TAHUN 2016', '2016-03-28', ''),
(189, 0, '198712232014042002', 2064500, 2475100, 8, '2014-01-01', 'SPKGB', '345.3/6629/BKD', '2011-10-20', ''),
(190, 0, '198712232014042003', 2151900, 2579800, 8, '2014-04-01', 'SPKGB', '345.3/1084/BKD', '2012-02-02', ''),
(191, 0, '198712232014042004', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6885/BKD', '2011-11-03', ''),
(192, 0, '198712232014042005', 2522500, 2773600, 10, '2013-12-01', 'SKP', 'SK. 567. T - 10', '2012-03-30', ''),
(193, 0, '198712232014042006', 2064100, 2125700, 2, '2013-01-01', 'SK-PNS', 'SK. 813-F. 38', '2012-09-28', ''),
(194, 0, '198712232014042007', 1811600, 2151900, 6, '2012-04-01', 'SKP', 'SK. 123.3 - T.20', '2010-03-04', ''),
(195, 0, '198712232014042008', 2534500, 3181300, 14, '2016-07-01', 'SKP', 'SK.567-B.65 TAHUN 2013', '2013-09-30', ''),
(196, 0, '198508062010121006', 2820700, 3084200, 12, '2016-12-01', 'SKP', 'SK.567-P.392 TAHUN 2015', '2015-05-19', ''),
(197, 0, '198508062010121001', 2651100, 2898700, 8, '2016-04-01', 'SPKGB', '345.3/4294/BKD', '2014-09-01', ''),
(198, 0, '198508062010121002', 2350600, 2424700, 4, '2014-01-01', 'SKP', 'SK. 567-B.65 TAHUN 2013', '2013-09-30', ''),
(199, 0, '198508062010121003', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6624/BKD', '2011-10-20', ''),
(200, 0, '198508062010121004', 2940000, 3214700, 12, '2017-02-01', 'SPKGB', '345.3/0262/BKD', '2015-01-12', ''),
(201, 0, '198508062010121005', 2570200, 2810200, 6, '2017-01-01', 'SKP', 'SK.567-P.392 TAHUN 2015', '2015-05-19', ''),
(202, 0, '198508062010121006', 1743400, 1786200, 2, '2011-03-01', 'SK-PNS', 'SK. 813-P.47', '2010-05-24', ''),
(203, 0, '198508062010121007', 1786200, 2189200, 4, '2013-03-01', 'SPKGB', '345.3/1274/BKD', '2011-02-02', ''),
(204, 0, '198508062010121008', 3160900, 3456200, 14, '2016-12-01', 'SPKGB', '345.3/4819/B.7', '2014-10-08', ''),
(205, 0, '198808162015042003', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6886/BKD', '2011-11-03', ''),
(206, 0, '198808162015042004', 2094000, 2501000, 6, '2014-04-01', 'SPKGB', '345.3/1611/BKD', '2012-02-22', ''),
(207, 0, '198808162015042005', 2281800, 2501000, 6, '2014-04-01', 'SKP', 'SK. 567.T-10', '2012-03-30', ''),
(208, 0, '198808162015042001', 2570200, 2810200, 6, '2017-01-01', 'SKP', 'SK.567-P.392 TAHUN 2015', '2015-05-19', ''),
(209, 0, '198808162015042002', 1811600, 2151900, 6, '2012-04-01', 'SKP', 'SK. 123.3 - T.20', '2010-03-04', ''),
(210, 0, '198808162015042006', 2009000, 2254600, 6, '2012-06-01', 'SKP', 'SK. 567. 3-S.112', '2011-10-20', ''),
(211, 0, '198808162015042007', 2215700, 2424700, 4, '2014-01-01', 'SKP', 'SK. 567 - N.25', '2013-03-28', ''),
(212, 0, '198804192014042002', 1743400, 1786200, 2, '2011-03-01', 'SK-PNS', 'SK. 813-P.47', '2010-05-24', ''),
(213, 0, '198804192014042001', 1743400, 1786200, 2, '2011-03-01', 'SK-PNS', 'SK.813-P.47', '2010-05-24', ''),
(214, 0, '198804192014042003', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6888/BKD', '2011-11-03', ''),
(215, 0, '198804192014042004', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6631/BKD', '2013-11-30', ''),
(216, 0, '198804192014042005', 2281800, 2501000, 6, '2014-04-01', 'SKP', 'SK. 567. T-10', '2012-03-30', ''),
(217, 0, '198804192014042006', 2215700, 2281800, 4, '2013-03-01', 'SKP', 'SK. 567 F. 39', '2012-09-28', ''),
(218, 0, '198804192014042007', 1743400, 1786200, 2, '2011-03-01', 'SK-PNS', 'Sk. 813-P.47', '2010-05-24', ''),
(219, 0, '198812272014042001', 2570200, 2810200, 6, '2017-01-01', 'SKP', 'SK.567-P.392 TAHUN 2015', '2015-05-19', ''),
(220, 0, '198812272014042002', 2281800, 2501000, 6, '2014-04-01', 'SKP', 'SK. 567. T-10', '2012-03-30', ''),
(221, 0, '198812272014042003', 2064100, 2125700, 2, '2013-01-01', 'SK-PNS', 'SK. 813-F. 38', '2012-09-28', ''),
(222, 0, '198812272014042004', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6627/BKD', '2011-10-20', ''),
(223, 0, '198812272014042005', 2281800, 2501000, 6, '2014-04-01', 'SKP', 'SK. 567. T-10', '2012-03-30', ''),
(224, 0, '198812272014042006', 1902300, 1954900, 2, '2012-01-01', 'SK-PNS', 'SK. 813- E. 50', '2011-05-31', ''),
(225, 0, '198812272014042007', 2940000, 3214700, 12, '2017-02-01', 'SPKGB', '345.3/0728/BKD', '2015-01-21', ''),
(226, 0, '198812272014042008', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6890/BKD', '2011-11-03', ''),
(227, 0, '198812272014042009', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6628/BKD', '2011-10-20', ''),
(228, 0, '198807162015111008', 1861800, 2094000, 4, '2012-04-01', 'SKP', 'SK. 123.3 - J.58', '2010-08-24', ''),
(229, 0, '198807162015111007', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6891/BKD', '2011-11-03', ''),
(230, 0, '198807162015111006', 1743400, 1786200, 2, '2011-03-01', 'SK-PNS', 'SK. 813-P.47', '2010-05-24', ''),
(231, 0, '198807162015111005', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3./6892/BKD', '2011-11-03', ''),
(232, 0, '198807162015111004', 1902300, 1954900, 2, '2012-01-01', 'SK-PNS', 'SK. 813 - E.50', '2011-05-31', ''),
(233, 0, '198807162015111003', 1696500, 2009000, 4, '2012-04-01', 'SPKGB', '345.3/1254/BKD', '2010-02-09', ''),
(234, 0, '198807162015111002', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6625/BKD', '2011-10-20', ''),
(235, 0, '198807162015111001', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6626/BKD', '2011-10-20', ''),
(236, 0, '199011122018031006', 1786200, 2189200, 4, '2013-03-01', 'SPKGB', '345.3/1766/B.7', '2011-02-23', ''),
(237, 0, '199011122018031005', 1902300, 1954900, 2, '2012-01-01', 'SK-PNS', 'SK. 813 - E.50', '2011-05-31', ''),
(238, 0, '199011122018031004', 1954900, 2326300, 4, '2014-01-01', 'SPKGB', '345.3/6896/BKD', '2011-11-03', ''),
(239, 0, '199011122018031003', 2064100, 2125700, 2, '2013-01-01', 'SK-PNS', 'SK. 813-F. 38', '2012-09-28', ''),
(240, 0, '199011122018031002', 2350600, 2424700, 4, '2014-01-01', 'SKP', 'SK. 567-B.65 TAHUN 2013', '2013-09-30', ''),
(241, 0, '199011122018031001', 2064100, 2125700, 2, '2013-01-01', 'SK-PNS', 'SK. 813 - F.38', '2012-09-28', '');

-- --------------------------------------------------------

--
-- Table structure for table `ref_riwayat_proses`
--

CREATE TABLE `ref_riwayat_proses` (
  `riwayatproses_id` int(11) NOT NULL,
  `riwayatproses_nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_riwayat_proses`
--

INSERT INTO `ref_riwayat_proses` (`riwayatproses_id`, `riwayatproses_nama`) VALUES
(1, 'Nominatif KGB'),
(2, 'Berkas KGB tidak lengkap'),
(3, 'Berkas KGB lengkap'),
(4, 'Form KGB'),
(5, 'Cetak KGB');

-- --------------------------------------------------------

--
-- Table structure for table `ref_skpd`
--

CREATE TABLE `ref_skpd` (
  `skpd_id` int(11) NOT NULL,
  `skpd_kd_skpd` int(11) NOT NULL,
  `skpd_nama` varchar(300) NOT NULL,
  `skpd_nip_kepala` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref_skpd`
--

INSERT INTO `ref_skpd` (`skpd_id`, `skpd_kd_skpd`, `skpd_nama`, `skpd_nip_kepala`) VALUES
(1, 100, 'Badan Kepegawaian Daerah', '198206152014091001'),
(2, 110, 'Sekretariat Daerah', '196504052014091006');

-- --------------------------------------------------------

--
-- Table structure for table `sys_group_users`
--

CREATE TABLE `sys_group_users` (
  `id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_group_users`
--

INSERT INTO `sys_group_users` (`id`, `level`, `deskripsi`) VALUES
(1, 'Admin', 'Administrator'),
(7, 'Operator', 'Operator Finger Print'),
(8, 'Super User', 'Super User'),
(9, 'Pegawai', 'Pegawai'),
(11, 'Operator BKD', 'Operator BKD');

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '0',
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(32) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `skpd_kd_skpd` int(11) DEFAULT NULL,
  `asn_nip` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `first_name`, `last_name`, `username`, `pwd`, `id_group`, `aktif`, `skpd_kd_skpd`, `asn_nip`) VALUES
(1, 'Operator', 'KGB', 'kgboperator', 'b973fd0a932188e9fe400c69b6c9e251', 11, 'Y', NULL, NULL),
(2, 'OPD', 'KGB', 'kgbopd', 'b973fd0a932188e9fe400c69b6c9e251', 7, 'Y', 100, NULL),
(3, 'Pegawai', 'KGB', 'kgbpegawai', 'b973fd0a932188e9fe400c69b6c9e251', 9, 'Y', 110, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ref_asn`
--
ALTER TABLE `ref_asn`
  ADD PRIMARY KEY (`asn_id`);

--
-- Indexes for table `ref_config`
--
ALTER TABLE `ref_config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `ref_gaji`
--
ALTER TABLE `ref_gaji`
  ADD PRIMARY KEY (`gaji_id`);

--
-- Indexes for table `ref_pangkat`
--
ALTER TABLE `ref_pangkat`
  ADD PRIMARY KEY (`pangkat_id`);

--
-- Indexes for table `ref_riwayatkgb_proses`
--
ALTER TABLE `ref_riwayatkgb_proses`
  ADD PRIMARY KEY (`kgbproses_id`);

--
-- Indexes for table `ref_riwayat_kgb`
--
ALTER TABLE `ref_riwayat_kgb`
  ADD PRIMARY KEY (`riwayatkgb_id`);

--
-- Indexes for table `ref_riwayat_proses`
--
ALTER TABLE `ref_riwayat_proses`
  ADD PRIMARY KEY (`riwayatproses_id`);

--
-- Indexes for table `ref_skpd`
--
ALTER TABLE `ref_skpd`
  ADD PRIMARY KEY (`skpd_id`);

--
-- Indexes for table `sys_group_users`
--
ALTER TABLE `sys_group_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_sys_users_sys_group_users` (`id_group`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ref_asn`
--
ALTER TABLE `ref_asn`
  MODIFY `asn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;
--
-- AUTO_INCREMENT for table `ref_config`
--
ALTER TABLE `ref_config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ref_gaji`
--
ALTER TABLE `ref_gaji`
  MODIFY `gaji_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;
--
-- AUTO_INCREMENT for table `ref_pangkat`
--
ALTER TABLE `ref_pangkat`
  MODIFY `pangkat_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ref_riwayatkgb_proses`
--
ALTER TABLE `ref_riwayatkgb_proses`
  MODIFY `kgbproses_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ref_riwayat_kgb`
--
ALTER TABLE `ref_riwayat_kgb`
  MODIFY `riwayatkgb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
--
-- AUTO_INCREMENT for table `ref_skpd`
--
ALTER TABLE `ref_skpd`
  MODIFY `skpd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sys_group_users`
--
ALTER TABLE `sys_group_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `sys_users`
--
ALTER TABLE `sys_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
