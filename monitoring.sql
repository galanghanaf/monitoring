-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 02:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_location`
--

CREATE TABLE `area_location` (
  `id` int(11) NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_location`
--

INSERT INTO `area_location` (`id`, `location`) VALUES
(1, 'Area Office Lt2'),
(2, 'Area Office Lt3'),
(7, 'wagawg'),
(8, 'afwag'),
(9, 'waeg');

-- --------------------------------------------------------

--
-- Table structure for table `assetdescription`
--

CREATE TABLE `assetdescription` (
  `id` int(11) NOT NULL,
  `asset_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetdescription`
--

INSERT INTO `assetdescription` (`id`, `asset_description`) VALUES
(1, 'Cekf'),
(3, 'f');

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama_admin` varchar(200) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `email`, `nama_admin`, `username`, `hak_akses`, `password`) VALUES
(60, 'galanghanafi8@gmail.com', 'Galang Hanafi', 'galang', 2, 'galang'),
(62, 'budi@gmail.com', 'Budis', 'budi', 1, 'budi'),
(63, 'ctr@gmail.com', 'ctr', 'ctr', 2, 'ctr');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`) VALUES
(1, 'HR'),
(14, 'Logistik'),
(15, 'awff'),
(16, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `equipment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `equipment`) VALUES
(2, 'Laptop HP 840 G1s'),
(3, 'Laptop HP 840 G3');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'superadmin', 1),
(2, 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `judul_header1` varchar(300) NOT NULL,
  `judul_header2` varchar(300) NOT NULL,
  `opening_header1` varchar(300) NOT NULL,
  `opening_header2` varchar(300) NOT NULL,
  `opening_header3` varchar(300) NOT NULL,
  `opening_header4` varchar(300) NOT NULL,
  `navbar1` varchar(50) NOT NULL,
  `navbar2` varchar(50) NOT NULL,
  `navbar3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `judul_header1`, `judul_header2`, `opening_header1`, `opening_header2`, `opening_header3`, `opening_header4`, `navbar1`, `navbar2`, `navbar3`) VALUES
(1, 'Monitoring', 'Server.', 'Welcome To Our Monitoring Server!', 'NICE TO MEET YOU', 'HAVE A NICE DAY', 'TELL ME MORE', 'MONITORING', 'TEAM', 'LOGIN');

-- --------------------------------------------------------

--
-- Table structure for table `header_background`
--

CREATE TABLE `header_background` (
  `id` int(11) NOT NULL,
  `background1` varchar(300) NOT NULL,
  `background2` varchar(300) NOT NULL,
  `background3` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header_background`
--

INSERT INTO `header_background` (`id`, `background1`, `background2`, `background3`) VALUES
(1, 'bg1.jpg', 'bg2.jpg', 'bg3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ipstatic`
--

CREATE TABLE `ipstatic` (
  `id` int(11) NOT NULL,
  `vlan` varchar(50) DEFAULT NULL,
  `up_link` varchar(50) DEFAULT NULL,
  `port` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `mac_address` varchar(150) DEFAULT NULL,
  `host_name` varchar(150) DEFAULT NULL,
  `equipment` varchar(150) DEFAULT NULL,
  `manufacture` varchar(150) DEFAULT NULL,
  `model` varchar(150) DEFAULT NULL,
  `serial_number` varchar(150) DEFAULT NULL,
  `asset_number` varchar(150) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `user` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `latitude` varchar(200) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipstatic`
--

INSERT INTO `ipstatic` (`id`, `vlan`, `up_link`, `port`, `ip_address`, `mac_address`, `host_name`, `equipment`, `manufacture`, `model`, `serial_number`, `asset_number`, `location`, `user`, `password`, `latitude`, `longitude`) VALUES
(131, '', '', '', 'wfe2f2', 'wafewf', '', 'Laptop HP 840 G1', 'Cisco', 'TP Link', '', '', '', '', '', NULL, NULL),
(132, '', '', '', 'afeawf', 'waefawf', '', 'Laptop HP 840 G1', '', 'asffqf', '', '', 'Area Office Lt3', '', '', '-6.434841591528314', '106.92835986614229'),
(133, '', '', '', '8.8.8.8', 'asdfwag', '', '', '', '', '', '', '', '', '', NULL, NULL),
(134, '', '', '8000', '127.0.0.1', 'sadfawg', '', '', '', '', '', '', '', '', '', NULL, NULL),
(135, '', '', '', '127.0.0.1', 'asfweg', '', '', '', '', '', '', '', '', '', NULL, NULL),
(136, '', '', '80', '127.0.0.1', 'asfwef', '', '', '', '', '', '', '', '', '', '-6.434831471675636', '106.92852079868318'),
(137, '', '', '', 'awgaweg', 'awgeaweg', '', 'Laptop HP 840 G3', 'Cisco', 'Cisco', 'awegawg', 'awegwaeg', 'Area Office Lt2', '', '', '-6.434175804741606', '106.9263106584549'),
(138, '', '', '', 'waef', 'wafe', 'awf', 'Laptop HP 840 G1', 'Cisco', 'Cisco', 'waeg', 'aweg', 'wagawg', 'waef', 'awfe', '-6.433610757761918', '106.92772150039674'),
(139, '', '', '', 'https://www.google.com/', 'asdfaweg', '', '', '', '', '', '', '', '', '', '-6.434357046092543', '106.9276785850525');

-- --------------------------------------------------------

--
-- Table structure for table `itot_asset`
--

CREATE TABLE `itot_asset` (
  `id` int(11) NOT NULL,
  `it` varchar(50) NOT NULL,
  `ot` varchar(50) NOT NULL,
  `plant_code` varchar(100) NOT NULL,
  `cbu` varchar(100) NOT NULL,
  `cost_ctr` varchar(100) NOT NULL,
  `asset_number` varchar(100) NOT NULL,
  `asset_description` varchar(200) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `computer_name` varchar(200) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `acquis_val` int(10) UNSIGNED NOT NULL,
  `accum_dep` int(10) NOT NULL,
  `book_val` int(10) UNSIGNED NOT NULL,
  `fixed_asset1` int(11) UNSIGNED NOT NULL,
  `fixed_asset2` int(11) UNSIGNED NOT NULL,
  `fixed_asset3` int(11) UNSIGNED NOT NULL,
  `in_use` int(10) UNSIGNED NOT NULL,
  `idle` int(10) UNSIGNED NOT NULL,
  `damage` int(11) UNSIGNED NOT NULL,
  `label` int(11) UNSIGNED NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `cap_date` date NOT NULL,
  `note` varchar(200) NOT NULL,
  `network_ot` varchar(50) NOT NULL,
  `network_it` varchar(50) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `nead` varchar(50) NOT NULL,
  `sccm` varchar(50) NOT NULL,
  `sep` varchar(50) NOT NULL,
  `osversion` varchar(100) NOT NULL,
  `latitude` varchar(200) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itot_asset`
--

INSERT INTO `itot_asset` (`id`, `it`, `ot`, `plant_code`, `cbu`, `cost_ctr`, `asset_number`, `asset_description`, `serial_number`, `model`, `computer_name`, `qty`, `acquis_val`, `accum_dep`, `book_val`, `fixed_asset1`, `fixed_asset2`, `fixed_asset3`, `in_use`, `idle`, `damage`, `label`, `status`, `location`, `user`, `cap_date`, `note`, `network_ot`, `network_it`, `mac_address`, `ip_address`, `nead`, `sccm`, `sep`, `osversion`, `latitude`, `longitude`) VALUES
(1, '', '', 'cek', 'wefawf', '', 'waeg', 'aweg', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Windows', '-6.434458327995797', '106.92754983901978'),
(2, 'Yes', 'No', 'fqwefq', 'qwewqfqw', 'weg', 'qwfqd', 'qwdqf', 'wqf', 'Cisco', 'qfw', 'qwf', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'asgw', 'Area Office Lt2', 'waeg', '0000-00-00', 'wage', 'waeg', 'aweg', 'awegafe', 'awefgaew', 'waeg', 'agwe', 'asfs', 'Windows', '-6.434378368600171', '106.92815601825716'),
(3, 'No', 'Yes', 'awef', 'weag', 'aweg', 'aweg', 'Cek', 'aweg', 'Cisco', 'aweg', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Area Office Lt3', 'waeaweg', '0000-00-00', 'waeg', 'wage', 'awef', 'aweg', 'aweg', 'aweg', 'aefe', 'aweg', 'Linux', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `equipment` varchar(100) DEFAULT NULL,
  `asset_number` varchar(100) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `ticket_show` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `return` varchar(50) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `name`, `department`, `equipment`, `asset_number`, `serial_number`, `ticket_show`, `description`, `date`, `return`, `signature`) VALUES
(21, 'Riyanti', 'HR', 'Laptop HP 840 G3', '60008628', '5CG7256BYJ', 'Pinjam s/d pengajuan new laptop', '', '2022-01-05', '2022-07-13', ''),
(22, 'Sitinu', 'HR', 'Laptop HP 840 G3', '60009001', '5CG8152HTL', '', 'Pinjam s/d pengajuan new laptop', '2022-01-05', '2022-07-11', ''),
(23, 'Selamet widodo', 'Logistik', 'Laptop HP 840 G1', '60007338', '5CG4422FSH', '', '', '2022-01-04', '2022-07-12', ''),
(24, 'Andre', 'Performance', 'Laptop HP 840 G3', '60007955', '5CG62651NK', '', 'support performance', '2022-01-05', '', ''),
(25, 'Dwi Hartati', 'Performance', 'Laptop HP 840 G3', '60008589', '5CG7256BHQ', '', 'support performance', '2022-01-04', '', ''),
(26, 'Nurul Insan', 'HR', 'Laptop HP 840 G3', '60007748', '5CG6153YT2', '', 'Support HR *cuti', '2022-06-28', '', ''),
(27, 'waeg', 'HR', 'Laptop HP 840 G1', 'wage', 'waeg', 'awg', 'wag', '2022-07-06', '', 'awgwa'),
(28, 'awgeawgawg', 'HR', 'Laptop HP 840 G1', 'awgawg', 'wagawge', 'wage', 'waeg', '2022-07-10', '', 'awegawqw3');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `manufacture`) VALUES
(1, 'Cisco');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_network`
--

CREATE TABLE `mapping_network` (
  `id` int(11) NOT NULL,
  `asset_description` varchar(150) DEFAULT NULL,
  `hostname` varchar(150) DEFAULT NULL,
  `model` varchar(150) DEFAULT NULL,
  `serial_number` varchar(150) DEFAULT NULL,
  `ip_address` varchar(150) DEFAULT NULL,
  `mac_address` varchar(150) DEFAULT NULL,
  `switch` varchar(150) DEFAULT NULL,
  `port` varchar(150) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `latitude` varchar(200) DEFAULT NULL,
  `longitude` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_network`
--

INSERT INTO `mapping_network` (`id`, `asset_description`, `hostname`, `model`, `serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `location`, `latitude`, `longitude`) VALUES
(2, 'galang', 'awegawf', 'awf', 'awef', 'ga', 'awegawhwaawfa', 'asd', 'awge', 'Area Office Lt3', '-6.4344316748653165', '106.92796289920808'),
(3, 'f', '', '', '', 'feaw', 'waeg', '', '', '', '-6.434325062329429', '106.9276410341263'),
(4, 'g', '', '', '', 'weag', 'ewag', '', '', '', '-6.434047869631426', '106.92941129207613'),
(17, 'awg', 'awg', 'awgh', NULL, 'awh', 'awg', 'awh', 'afsfsa', 'Area Office Lt3', '-6.434133159708463', '106.9262194633484'),
(18, 'wag', 'wag', 'wage', NULL, 'wag', 'wag', 'wag', 'wagewah', 'Area Office Lt3', '-6.434506303627137', '106.92674517631532'),
(19, 'awh', 'awh', 'awh', NULL, 'aweh', 'waeh', 'aweh', 'aweh', '', '-6.434341054211241', '106.92832231521608'),
(20, 'aweh', 'aweg', 'awh', NULL, 'waeh', 'awh', 'wah', 'wah', '', '-6.433402862960308', '106.92974388599397'),
(21, 'awfsa', 'awegh', 'asgh', NULL, 'awge', 'wah', 'awfs', 'waegh', 'Area Office Lt3', '-6.435193953845048', '106.9276249408722'),
(22, 'waef', 'wahwea', 'aweh', NULL, 'awhe', 'aweh', 'waeh', 'awh', 'afwag', '-6.433131000399118', '106.92592442035676'),
(23, 'awe', 'he', 'awh', NULL, 'awh', 'awf', 'asdf', 'waegh', 'Area Office Lt3', '-6.433525467597186', '106.92929327487947'),
(24, 'asdf', 'awefg', 'awhfsd', '', 'asdfasg', 'asg', 'hwaef', 'awheawe', 'Area Office Lt3', '-6.435391186681513', '106.92812383174898'),
(25, 'Cek', 'afwef', 'Cisco', NULL, 'ewaf', 'waef', 'wefa', 'wega', 'Area Office Lt2', '-6.434687544860177', '106.92821502685547'),
(26, 'Cek', 'awef', 'Cisco', NULL, 'aweg', 'waeg', 'awge', 'aweg', 'Area Office Lt2', '-6.434506303627137', '106.92757666110994');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_networkap`
--

CREATE TABLE `mapping_networkap` (
  `id` int(11) NOT NULL,
  `asset_description` varchar(200) DEFAULT NULL,
  `hostname` varchar(150) DEFAULT NULL,
  `model` varchar(200) DEFAULT NULL,
  `pcb_serial_number` varchar(200) DEFAULT NULL,
  `assembly_serial_number` varchar(200) DEFAULT NULL,
  `ip_address` varchar(150) DEFAULT NULL,
  `mac_address` varchar(150) DEFAULT NULL,
  `switch` varchar(150) DEFAULT NULL,
  `port` varchar(150) DEFAULT NULL,
  `location` varchar(300) DEFAULT NULL,
  `latitude` varchar(300) DEFAULT NULL,
  `longitude` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_networkap`
--

INSERT INTO `mapping_networkap` (`id`, `asset_description`, `hostname`, `model`, `pcb_serial_number`, `assembly_serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `location`, `latitude`, `longitude`) VALUES
(1, 'Cek', 'fawef', 'Cisco', 'aweg', 'aweg', 'awegafd', 'asfd', 'awefds', '', 'Area Office Lt3', '-6.433951918277643', '106.9277858734131'),
(2, 'Cek', 'saefw', 'TP Link', 'aweg', 'aweg', 'aweg', 'awge', 'afd', 'sda', 'Area Office Lt3', '-6.434655561117863', '106.92946493625641');

-- --------------------------------------------------------

--
-- Table structure for table `model_asset`
--

CREATE TABLE `model_asset` (
  `id` int(11) NOT NULL,
  `model` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model_asset`
--

INSERT INTO `model_asset` (`id`, `model`) VALUES
(2, 'Cisco'),
(3, 'TP Link');

-- --------------------------------------------------------

--
-- Table structure for table `osversion`
--

CREATE TABLE `osversion` (
  `id` int(11) NOT NULL,
  `osversion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `osversion`
--

INSERT INTO `osversion` (`id`, `osversion`) VALUES
(1, 'Linux'),
(2, 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id_potongan` int(11) NOT NULL,
  `potongan` varchar(225) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `requester` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`id`, `description`, `requester`, `start_date`, `due_date`, `status`, `notes`) VALUES
(1, 'Moving Server Roomagewafeawgewafawe', 'Networkawgeeawgawgaweg', '2022-07-05', '2022-07-25', 'In Progress', 'Improvement Serverewagawgwagweahwa3r2g'),
(3, 'rweq', 'fwef', '2022-07-05', '2022-07-05', 'Completed', 'fsad'),
(4, 'awfe', 'awef', '2022-07-03', '2022-07-04', 'Completed', 'awfe'),
(5, 'awef', 'gwaeg', '2022-07-08', '2022-07-11', 'In Progress', 'fawefg'),
(6, 'fegwa', 'ewafaf', '2022-07-06', '2022-07-20', 'In Progress', 'waefgweag'),
(7, 'zzzzz', 'waeg', '2022-07-13', '2022-07-20', 'In Progress', 'awef'),
(8, 'awegwiojfoijgoiwfawg', 'f', '2022-07-04', '2022-07-05', 'In Progress', 'ewaghwafawfawgawgwaehawrawfawf'),
(9, 'awef', 'awef', '2022-07-11', '2022-07-15', NULL, 'awf'),
(10, 'awg', 'awgeaw', '2022-07-02', '2022-07-12', NULL, 'asfwg'),
(11, 'aega', 'wagea', '2022-07-10', '2022-07-11', 'In Progress', 'waeg'),
(12, 'awgwagawgawegawgwaegawegwag', 'waegweagwag', '2022-07-08', '2022-07-09', 'In Progress', 'awegawg'),
(13, 'wageaw', 'fweqf', '2022-07-10', '2022-07-10', 'In Progress', 'waeg'),
(14, 'sadsv', 'sdvsav', '2022-07-15', '2022-07-30', 'Completed', 'sdv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_location`
--
ALTER TABLE `area_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assetdescription`
--
ALTER TABLE `assetdescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `header_background`
--
ALTER TABLE `header_background`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `ipstatic`
--
ALTER TABLE `ipstatic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itot_asset`
--
ALTER TABLE `itot_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_number` (`asset_number`),
  ADD UNIQUE KEY `serial_number` (`serial_number`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapping_network`
--
ALTER TABLE `mapping_network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapping_networkap`
--
ALTER TABLE `mapping_networkap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_asset`
--
ALTER TABLE `model_asset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osversion`
--
ALTER TABLE `osversion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id_potongan`),
  ADD UNIQUE KEY `potongan` (`potongan`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_location`
--
ALTER TABLE `area_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assetdescription`
--
ALTER TABLE `assetdescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header_background`
--
ALTER TABLE `header_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipstatic`
--
ALTER TABLE `ipstatic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `itot_asset`
--
ALTER TABLE `itot_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mapping_network`
--
ALTER TABLE `mapping_network`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mapping_networkap`
--
ALTER TABLE `mapping_networkap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `model_asset`
--
ALTER TABLE `model_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `osversion`
--
ALTER TABLE `osversion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
