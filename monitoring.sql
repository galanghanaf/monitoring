-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 11:22 PM
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
-- Table structure for table `accesspoint`
--

CREATE TABLE `accesspoint` (
  `id` int(11) NOT NULL,
  `asset_description` varchar(200) NOT NULL,
  `hostname` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `pcb` varchar(200) NOT NULL,
  `assembly` varchar(200) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  `switch` varchar(50) NOT NULL,
  `port` varchar(50) DEFAULT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `accesspoint`
--

INSERT INTO `accesspoint` (`id`, `asset_description`, `hostname`, `model`, `pcb`, `assembly`, `ip_address`, `mac_address`, `switch`, `port`, `location`) VALUES
(1, 'f', 'awe', 'Cisco', 'wag', 'wag', '8.8.8.8', 'awg', 'afwef', '', 'Area Office Lt2'),
(3, 'Cekf', 'galang', 'Cisco', '', '', '', 'aweg', 'awf', '0', 'Area Office Lt3'),
(6, 'Cekf', 'awef', 'Cisco', 'aweg', 'waeg', '8.8.8.8', 'awg', 'afa', '', 'Area Office Lt3'),
(7, 'f', 'aweg', 'TP Link', 'aweg', 'waeg', '', 'aweg', 'aweg', '0', ''),
(8, '', 'galang', '', '', '', 'waeg', 'aweg', '', '0', ''),
(9, '', '', '', '', '', 'test', 'agaw', '', '0', 'Area Office Lt3');

-- --------------------------------------------------------

--
-- Table structure for table `area_location`
--

CREATE TABLE `area_location` (
  `id` int(11) NOT NULL,
  `location` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area_location`
--

INSERT INTO `area_location` (`id`, `location`, `photo`) VALUES
(1, 'Area Office Lt2', '2.jpg'),
(2, 'Area Office Lt3', 'Picture1.jpg'),
(7, 'wagawg', ''),
(8, 'afwag', ''),
(9, 'waeg', '5.png'),
(10, 'afweafe', '2.jpg'),
(11, 'afewawg', '1.png'),
(12, 'faf', '11.png');

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
(62, 'budi@gmail.comd', 'Budis', 'budi', 1, 'budi'),
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
(16, 'a'),
(17, 'cekd');

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
(139, '', '', '', 'test', 'asdfaweg', '', '', '', '', '', '', '', '', '', '-6.434357046092543', '106.9276785850525'),
(140, '', '', '345', '3454254', 'dfsfgshserh', 'galang', '', '', '', '', '', '', '', '', NULL, NULL),
(141, '', '', '34', 'rgse', 'esrgse', '', '', '', '', '', '', '', '', '', NULL, NULL);

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
  `qty` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `acquis_val` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `accum_dep` int(20) NOT NULL DEFAULT 0,
  `book_val` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `fixed_asset1` varchar(50) NOT NULL DEFAULT '',
  `fixed_asset2` varchar(50) NOT NULL DEFAULT '',
  `fixed_asset3` varchar(50) NOT NULL DEFAULT '',
  `in_use` varchar(50) NOT NULL DEFAULT '',
  `idle` varchar(50) NOT NULL DEFAULT '',
  `damage` varchar(50) NOT NULL DEFAULT '',
  `label` varchar(50) NOT NULL DEFAULT '',
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
  `longitude` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itot_asset`
--

INSERT INTO `itot_asset` (`id`, `it`, `ot`, `plant_code`, `cbu`, `cost_ctr`, `asset_number`, `asset_description`, `serial_number`, `model`, `computer_name`, `qty`, `acquis_val`, `accum_dep`, `book_val`, `fixed_asset1`, `fixed_asset2`, `fixed_asset3`, `in_use`, `idle`, `damage`, `label`, `status`, `location`, `user`, `cap_date`, `note`, `network_ot`, `network_it`, `mac_address`, `ip_address`, `nead`, `sccm`, `sep`, `osversion`, `latitude`, `longitude`, `photo`) VALUES
(4, 'Yes', '', 'waeg', 'waef', 'waefawg', 'ewafwag', 'Cekf', '', '', '', 0, 0, -342425, 0, '', '', '', '1', '', '', '', 'Active', 'Area Office Lt3', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '-6.4344903117505154', '106.92795753479005', 'Picture1.jpg'),
(5, 'Yes', '', 'afewa', 'wag', 'aweg', 'waeg', 'Cekf', 'awegaweg', 'Cisco', 'awegaw', 0, 0, 0, 0, '1', '', '', '1', '', '', '1', 'Active', 'Area Office Lt3', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '-6.435455154071475', '106.92588686943056', 'Picture1.jpg'),
(6, '', 'Yes', 'galang', 'wag', 'awg', 'waeg', 'Cekf', 'weag', 'Cisco', 'weag', 0, 0, 0, 0, '1', '', '', '', '', '', '', '', 'Area Office Lt3', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Windows', '-6.434122498449617', '106.92632138729095', 'Picture1.jpg'),
(7, 'Yes', '', 'weag', 'weaf', '', 'wefeaw', 'Cekf', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 'Active', 'Area Office Lt2', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Linux', '-6.433834644376195', '106.9264179468155', '2.jpg');

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
  `longitude` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_network`
--

INSERT INTO `mapping_network` (`id`, `asset_description`, `hostname`, `model`, `serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `location`, `latitude`, `longitude`, `photo`) VALUES
(60, '', 'galang', '', NULL, 'galang', 'galang', '', '', '', '', '', NULL),
(61, '', '', '', NULL, 'awef', 'awegaw', '', '', '', '', '', ''),
(62, '', '', 'Cisco', NULL, 'galang', 'galang', '', '', 'Area Office Lt2', '-6.434564940503722', '106.92790389060974', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_networkap`
--

CREATE TABLE `mapping_networkap` (
  `id` int(11) NOT NULL,
  `asset_description` varchar(200) NOT NULL,
  `hostname` varchar(150) NOT NULL,
  `model` varchar(200) NOT NULL,
  `pcb_serial_number` varchar(200) NOT NULL,
  `assembly_serial_number` varchar(200) NOT NULL,
  `ip_address` varchar(150) NOT NULL,
  `mac_address` varchar(150) NOT NULL,
  `switch` varchar(150) NOT NULL,
  `port` varchar(150) NOT NULL,
  `location` varchar(300) NOT NULL,
  `latitude` varchar(300) NOT NULL,
  `longitude` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_networkap`
--

INSERT INTO `mapping_networkap` (`id`, `asset_description`, `hostname`, `model`, `pcb_serial_number`, `assembly_serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `location`, `latitude`, `longitude`) VALUES
(1, 'Cek', 'fawef', 'Cisco', 'aweg', 'aweg', 'awegafd', 'asfd', 'awefds', '', 'Area Office Lt3', '-6.433951918277643', '106.9277858734131'),
(2, 'Cek', 'saefw', 'TP Link', 'aweg', 'aweg', 'aweg', 'awge', 'afd', 'sda', 'Area Office Lt3', '-6.434655561117863', '106.92946493625641'),
(3, 'Cekf', 'asfwe', '', 'wefa', 'waef', 'wefa', 'wfae', '', '', '', '', ''),
(4, '', 'awefwag', '', 'awegwaeg', '', 'aweg', 'waeg', '', '', '', '', ''),
(5, '', '', '', '', '', 'waef', 'waeg', '', '', '', '-6.434730189846783', '106.92779660224916');

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
-- Table structure for table `ot_asset`
--

CREATE TABLE `ot_asset` (
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
  `qty` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `acquis_val` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `accum_dep` int(20) NOT NULL DEFAULT 0,
  `book_val` int(20) UNSIGNED NOT NULL DEFAULT 0,
  `fixed_asset1` varchar(50) NOT NULL DEFAULT '',
  `fixed_asset2` varchar(50) NOT NULL DEFAULT '',
  `fixed_asset3` varchar(50) NOT NULL DEFAULT '',
  `in_use` varchar(50) NOT NULL DEFAULT '',
  `idle` varchar(50) NOT NULL DEFAULT '',
  `damage` varchar(50) NOT NULL DEFAULT '',
  `label` varchar(50) NOT NULL DEFAULT '',
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
  `longitude` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ot_asset`
--

INSERT INTO `ot_asset` (`id`, `it`, `ot`, `plant_code`, `cbu`, `cost_ctr`, `asset_number`, `asset_description`, `serial_number`, `model`, `computer_name`, `qty`, `acquis_val`, `accum_dep`, `book_val`, `fixed_asset1`, `fixed_asset2`, `fixed_asset3`, `in_use`, `idle`, `damage`, `label`, `status`, `location`, `user`, `cap_date`, `note`, `network_ot`, `network_it`, `mac_address`, `ip_address`, `nead`, `sccm`, `sep`, `osversion`, `latitude`, `longitude`, `photo`) VALUES
(4, 'Yes', '', 'waeg', 'waef', 'waefawg', 'ewafwag', 'Cekf', '', '', '', 0, 0, -342425, 0, '', '', '', '1', '', '', '', 'Active', 'Area Office Lt2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '-6.4344903117505154', '106.92795753479005', '2.jpg'),
(5, 'Yes', '', 'afewa', 'wag', 'aweg', 'waeg', 'Cekf', 'awegaweg', 'Cisco', 'awegaw', 0, 0, 0, 0, '1', '', '', '1', '', '', '1', 'Active', 'Area Office Lt2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '-6.435455154071475', '106.92588686943056', '2.jpg'),
(6, '', 'Yes', 'test', 'wag', 'awg', 'waeg', 'Cekf', 'weag', 'Cisco', 'weag', 0, 0, 0, 0, '1', '', '', '', '', '', '', '', 'Area Office Lt3', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Windows', '-6.434122498449617', '106.92632138729095', 'Picture1.jpg'),
(7, 'Yes', '', 'galang', 'asfgweag', 'weag', 'waeg', 'Cekf', '', 'Cisco', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', 'Area Office Lt3', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Linux', '-6.43403187774039', '106.92819356918336', 'Picture1.jpg');

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
-- Table structure for table `switchpoint`
--

CREATE TABLE `switchpoint` (
  `id` int(11) NOT NULL,
  `asset_description` varchar(200) NOT NULL,
  `hostname` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `mac_address` varchar(100) NOT NULL,
  `switch` varchar(50) NOT NULL,
  `port` varchar(50) DEFAULT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `switchpoint`
--

INSERT INTO `switchpoint` (`id`, `asset_description`, `hostname`, `model`, `serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `location`) VALUES
(1, 'f', 'test switch', 'TP Link', 'wag', '8.8.8.8', 'awg', 'afwef', '', 'Area Office Lt2'),
(3, 'Cekf', 'galang', 'Cisco', '', '', 'aweg', 'awf', '0', 'Area Office Lt3'),
(6, 'Cekf', 'awef', 'Cisco', 'waeg', '8.8.8.8', 'awg', 'afa', '', 'Area Office Lt3'),
(7, 'f', 'aweg', 'TP Link', 'waeg', '', 'aweg', 'aweg', '0', ''),
(8, '', 'awef', '', '', 'waeg', 'aweg', '', '0', ''),
(9, 'Cekf', '', '', 'waeg', 'waeg', 'aweg', 'aweg', '0', 'Area Office Lt3'),
(10, '', '', '', '', 'waeg', 'waeg', 'awef', '0', '');

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
(11, 'galang', 'wagea', '2022-07-10', '2022-07-11', 'In Progress', 'waeg'),
(12, 'awgwagawgawegawgwaegawegwag', 'waegweagwag', '2022-07-08', '2022-07-09', 'In Progress', 'awegawg'),
(13, 'wageaw', 'fweqf', '2022-07-10', '2022-07-10', 'In Progress', 'waeg'),
(14, 'sadsv', 'sdvsav', '2022-07-15', '2022-07-30', 'Completed', 'sdv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesspoint`
--
ALTER TABLE `accesspoint`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- Indexes for table `ot_asset`
--
ALTER TABLE `ot_asset`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id_potongan`),
  ADD UNIQUE KEY `potongan` (`potongan`);

--
-- Indexes for table `switchpoint`
--
ALTER TABLE `switchpoint`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesspoint`
--
ALTER TABLE `accesspoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `area_location`
--
ALTER TABLE `area_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `itot_asset`
--
ALTER TABLE `itot_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `mapping_networkap`
--
ALTER TABLE `mapping_networkap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `ot_asset`
--
ALTER TABLE `ot_asset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `switchpoint`
--
ALTER TABLE `switchpoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
