-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 02:03 AM
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
(4, 'awgt');

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama_admin`, `hak_akses`, `username`, `password`) VALUES
(14, 'Admin', 1, 'admin', 'admin'),
(17, 'Galang', 1, 'galang', 'galang');

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
(2, 'ASFD');

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
(1, 'admin', 1),
(2, 'pegawai', 2);

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
(1, 'PILLBOX HILL', 'MEDICAL CENTER.', 'Welcome To Our Hospital!', 'NICE TO MEET YOU', 'HAVE A NICE DAY', 'TELL ME MORE', 'SERVICE', 'TEAM', 'LOGIN');

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
  `port` int(11) DEFAULT NULL,
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
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipstatic`
--

INSERT INTO `ipstatic` (`id`, `vlan`, `up_link`, `port`, `ip_address`, `mac_address`, `host_name`, `equipment`, `manufacture`, `model`, `serial_number`, `asset_number`, `location`, `user`, `password`) VALUES
(9, '', '', 0, '8.8.8.8', 'Google', '', '', '', '', '', '', 'Area Office Lt2', '', ''),
(11, '80', '', 0, '010.203.80.001', '00:87:31:E2:23:CA', '', 'CoreSwitch', '', '', '', '', 'Server Room', '', ''),
(12, '80', NULL, NULL, '010.203.80.001', '00:87:31:E2:23:CA', NULL, 'CoreSwitch', 'CISCO', 'Cisco WS-C3750X-24S', NULL, NULL, 'Server Room', NULL, NULL),
(13, '80', NULL, NULL, '010.203.80.001', '00:87:31:E2:23:CA', NULL, 'CoreSwitch', 'CISCO', 'Cisco WS-C3750X-24S', NULL, NULL, 'Server Room', NULL, NULL),
(18, NULL, NULL, NULL, '10.203.105.001', '18-9C-5D-08-DA-C0', 'XIDTIVPLCTRP-CSW01', NULL, NULL, 'Cisco WS-C3850 12S', 'FCW2032F0CB', '60007884-0', 'Server Room', NULL, NULL),
(19, NULL, NULL, NULL, '10.203.105.002', '00-22-57-FE-06-85', 'XIDTIVPLCTRP-ACSW05', NULL, NULL, 'Cisco WS-C2960x-48TS-L', 'FCW1917A3CF', '60008298', 'Server Room', NULL, NULL),
(20, NULL, NULL, NULL, '10.203.105.003', '18-9C-5D-08-DA-C0', 'XIDTIVPLCTRP-ACSW01', NULL, NULL, 'Cisco WS-C2960S-24TS-L', 'FOC1740Z2SU', '60007719', 'SWITCH ROOM TIV', NULL, NULL),
(21, NULL, NULL, NULL, '10.203.105.004', '04:76:b0:15:51:80', 'XIDTIVPLCTRP-Replace01', NULL, NULL, 'C9200L-24P-4G', 'JAE24370N6W', '60012155', 'Rak Switch evian', NULL, NULL),
(22, NULL, NULL, NULL, '10.203.105.005', '74:86:0B:F2:02:41', 'XIDTIVPLCTRP-ACSW10', NULL, NULL, 'Cisco WS-C2960X-48FPS-L', 'FCW2131B34U', '60012191', 'Rak Switch TIV', NULL, NULL),
(23, NULL, NULL, NULL, '10.203.105.006', NULL, NULL, NULL, NULL, '3Com 48Port', NULL, NULL, 'Office', NULL, NULL),
(24, NULL, NULL, NULL, '10.203.105.007', NULL, 'XIDTIVPLCTRP-ACSW13', NULL, NULL, 'C9200L-24P-4G', 'JAE243707DU', '60012157', 'Switch Lab', NULL, NULL),
(25, NULL, NULL, NULL, '10.203.105.008', '008067FA87F2', NULL, NULL, NULL, 'EBX510', NULL, NULL, 'R.Panel Mizone', NULL, NULL),
(26, NULL, NULL, NULL, '10.203.105.009', '44-31-92-0F-B5-CD', 'XIDTIVPLCTRP-ASW02', NULL, NULL, 'HP V1910 24G', 'CN42BX20F7', NULL, 'Server Room', 'Already replacemcent 28012021', NULL),
(27, NULL, NULL, NULL, '010.203.105.010', '00-0B-3D-07-3F-FB', NULL, NULL, NULL, 'CCTV ANALOG', '000b3d073ffb', NULL, 'Office Mizone', 'admin', '123456'),
(28, NULL, NULL, NULL, '010.203.105.011', NULL, 'XIDTIVPLCTRP-ASW03', NULL, NULL, 'Cisco', '926FBTNFE1168', NULL, 'Rak switch kantin', NULL, NULL),
(29, NULL, NULL, NULL, '010.203.105.012', '00-80-67-86-F8-20', NULL, NULL, NULL, 'Schneider', NULL, NULL, '-', NULL, NULL),
(30, NULL, NULL, NULL, '010.203.105.013', '00-B0-E1-CF-21-40', 'XIDTIVPLCTRP-ACSW03', NULL, NULL, 'Cisco Catalyst 2960-X 48 GIGE POE 740W, 4 X 1G SFP LAN BASE', 'FCW2032B3DZ', '60007881-0', 'Rak Switch TIV', NULL, NULL),
(31, NULL, NULL, NULL, '010.203.105.014', '00:56:2B:D5:64:C1', 'XIDTIVPLCTRP-ACSW02', NULL, NULL, 'WS-C2960X-48TS-L', 'FCW2024A7GF', '60008298', 'Rak Switch TIV', NULL, NULL),
(32, NULL, NULL, NULL, '010.203.105.015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, '010.203.105.016', 'F0:78:16:C3:D4:41', 'XIDTIVPLCTRP-ACSW08', NULL, NULL, 'Cisco Catalyst 2960-X Series 24Port', 'FCW1917A4RA', '60007721', 'R. TGP02', NULL, NULL),
(34, NULL, NULL, NULL, '010.203.105.017', '00:B0:E1:62:EF:41', 'XIDTIVPLCTRP-ACSW04', NULL, NULL, 'Cisco Catalyst 2960-X 48 GIGE POE 740W, 4 X 1G SFP LAN BASE', 'FCW2032B3CF', '60007880-0', 'Rak Switch TIV', NULL, NULL),
(35, NULL, NULL, NULL, '010.203.105.018', '00-30-D6-09-20-F6', NULL, NULL, NULL, 'Timbangan formulation', NULL, NULL, 'R. Formulasi Mizone', NULL, NULL),
(36, NULL, NULL, NULL, '010.203.105.019', '8C-DC-D4-4C-C5-B3', 'DIDAQCTR0800D0', NULL, NULL, 'Desktop HP 600G3 SFFG4400 500G 8.0G 28 PC + Monitor', NULL, NULL, 'R. Formulasi Mizone', NULL, NULL),
(37, NULL, NULL, NULL, '010.203.105.020', '7C:D3:0A:5B:DB:A1', 'WIDCTRFS01', NULL, NULL, 'Server', NULL, NULL, 'Server Room', NULL, NULL),
(38, NULL, NULL, NULL, '010.203.105.021', '00:02:D1:9B:4E:2C', '10.203.105.21', NULL, NULL, 'NVR VIVOTEX ND9541P', '0002D19B4E2C', NULL, 'SWITCH ROOM AREA 1', 'admin', 'root54321'),
(39, NULL, NULL, NULL, '010.203.105.022', 'C4:12:F5:31:01:92', 'DIDAQCTRSVRCCTV', NULL, NULL, 'VIVOTEX', NULL, NULL, 'Server Room area 3', 'Admin', '12345678'),
(40, NULL, NULL, NULL, '010.203.105.023', '18-60-24-F9-8B-5F', 'DIDAQCTR16R6V2', NULL, NULL, 'Desktop HP 600G4 SFFG4400 500G 8.0G 28 PC + Monitor', NULL, NULL, 'Office', NULL, NULL),
(41, NULL, NULL, NULL, '010.203.105.024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, '010.203.105.025', '00:00:C0:39:96:F2', 'MyCloudEX2Ultra', NULL, NULL, 'MyCloudEX2Ultra 2-Bay NAS', 'WUBM31431124', NULL, 'Office', 'admin', '4dministrator'),
(43, NULL, NULL, NULL, '010.203.105.026', '00:B0:E1:C0:C7:41', 'XIDTIVPLCTRP-ACSW07', NULL, NULL, 'WS-C2960X-48FPS-L', 'FOC2032V1Z0', '60007883', 'Rak switch LAB', NULL, NULL),
(44, NULL, NULL, NULL, '010.203.105.027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, '010.203.105.028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, '010.203.105.029', '7C:D3:0A:5B:DB:A5', NULL, NULL, NULL, 'IMM SERVER', NULL, NULL, 'R. Server', 'USERID', 'PASSWORD'),
(47, NULL, NULL, NULL, '010.203.105.030', 'CC:B2:55:01:CC:8D', 'ID_AQU_PL06_LB01_P', NULL, NULL, 'D-Link', NULL, NULL, 'R. Gudang Material', NULL, NULL),
(48, NULL, NULL, NULL, '010.203.105.031', '00:02:D1:9B:4E:2A', '10.203.105.31', NULL, NULL, 'NVR VIVOTEX ND9541P', '0002D19B4E2A', NULL, 'SWITCH ROOM AREA 1', 'admin', 'root54321'),
(49, NULL, NULL, NULL, '010.203.105.032', '00:0E:53:1B:E2:81', NULL, NULL, NULL, 'AV TECH CORPORATION', NULL, NULL, 'R. Meeting Laboratorium', NULL, NULL),
(50, NULL, NULL, NULL, '010.203.105.033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, '010.203.105.034', 'CC:B2:55:56:CC:82', 'ID_AQU_PL06_DO03_P', NULL, NULL, 'D-Link', NULL, NULL, 'R. Gudang Produk', NULL, NULL),
(52, NULL, NULL, NULL, '010.203.105.035', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, '010.203.105.036', 'CC:B2:55:56:CC:1F', 'ID_AQU_PL06_DO04_P', NULL, NULL, 'D-Link', NULL, NULL, 'R. Gudang Produk', NULL, NULL),
(54, NULL, NULL, NULL, '010.203.105.037', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, '010.203.105.038', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, '010.203.105.039', 'F4:39:09:0F:E5:CF', 'DIDAQCTR080065', NULL, NULL, 'Desktop HP 600G3 SFFG4400 500G 8.0G 28 PC + Monitor', '1CZ9080065', '60010552', 'Engineering', 'Power', 'Cicadas.01'),
(57, NULL, NULL, NULL, '010.203.105.040', '9C-7B-EF-B0-9F-D7', NULL, NULL, NULL, 'Server PME Online', NULL, NULL, 'R. Gardu Area I', NULL, NULL),
(58, NULL, NULL, NULL, '010.203.105.041', '00-30-D6-10-C7-0F', NULL, NULL, NULL, 'Timbangan Formlation', NULL, NULL, 'R. Formulasi Mizone', NULL, NULL),
(59, NULL, NULL, NULL, '010.203.105.042', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, '010.203.105.043', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, '010.203.105.044', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, '010.203.105.045', '00:80:67:F9:65:BA', 'ComX510_F965BA', NULL, NULL, 'ComX510_F965BA', NULL, NULL, 'Genset', 'admin', 'P@ssw0rd'),
(63, NULL, NULL, NULL, '010.203.105.046', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, '010.203.105.047', '00-12-12-00-F2-A2', NULL, NULL, NULL, 'CMS', NULL, NULL, 'R. Server', 'admin', '123456'),
(65, NULL, NULL, NULL, '010.203.105.048', '00-0B-3D-04-02-83', NULL, NULL, NULL, 'CMS', NULL, NULL, 'R. Rack VIT', 'admin', '123456'),
(66, NULL, NULL, NULL, '010.203.105.049', 'E8-39-35-5C-47-10', NULL, NULL, NULL, 'Server Vendor Scheduling', NULL, NULL, 'Teknik', 'engineering', 'Cicadas.01'),
(67, NULL, NULL, NULL, '010.203.105.050', 'CC:B2:55:56:CD:CA', 'DLINK-56CDCA', NULL, NULL, 'D-LINK', NULL, NULL, 'R.Gudang Material', NULL, NULL),
(68, NULL, NULL, NULL, '010.203.105.051', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, NULL, NULL, NULL, '010.203.105.052', '00-02-D1-36-F8-D1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, '010.203.105.053', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, NULL, NULL, NULL, '010.203.105.054', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, NULL, NULL, NULL, '010.203.105.055', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, NULL, NULL, NULL, '010.203.105.056', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, NULL, NULL, '010.203.105.057', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, '010.203.105.058', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, '010.203.105.059', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, '010.203.105.060', '00-02-D1-35-3A-F7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, '010.203.105.061', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, '010.203.105.062', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, '010.203.105.063', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, '010.203.105.064', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, '10203105104', '44:AE:25:54:47:00', 'XIDTIVPLCTRP-ACSW14', NULL, NULL, 'WS-C2960L-8TS-LL', 'FOC2503LF1H', NULL, 'Switch area 2', NULL, NULL),
(83, NULL, NULL, NULL, '010.203.105.065', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, NULL, NULL, NULL, '010.203.105.205', '00607808ab07', 'PM8000_08ab07', NULL, NULL, 'Power Logic PM8000', NULL, NULL, 'Genset', '8000', '0'),
(85, NULL, NULL, NULL, '010.203.105.206', '0060780b48f0', 'PM8000_0b48f0', NULL, NULL, 'Power Logic PM8000', NULL, NULL, 'Gardu 1', '8000', '0'),
(86, NULL, NULL, NULL, '010.203.105.207', '00607808a9be', 'PM8000_0b496f', NULL, NULL, 'Power Logic PM8000', NULL, NULL, 'LVMDV', '8000', '0'),
(87, NULL, NULL, NULL, '010.203.105.208', '0060780b496f', 'PM8000_0b496f', NULL, NULL, 'Power Logic PM8000', NULL, NULL, 'LVMDV 2', '8000', '0'),
(88, NULL, NULL, NULL, '010.203.105.209', '0060780b4858', 'PM8000_0b4858', NULL, NULL, 'Power Logic PM8000', NULL, NULL, 'LVMDV 3', '8000', '0'),
(89, NULL, NULL, NULL, '010.203.105.210', '0060780b49b2', 'PM8000_0b49b2', NULL, NULL, 'Power Logic PM8000', NULL, NULL, 'LVMDV 5', '8000', '0'),
(90, NULL, NULL, NULL, '010.203.105.211', '68:6d:bc:63:e6:7a', '10.203.105.211', NULL, NULL, 'HIKVISION DS-2CD2055FWD-I', 'DS-2CD2055FWD-I20190606AAWRD27850549', NULL, NULL, 'admin', 'Admin1234'),
(91, NULL, NULL, NULL, '010.203.105.212', '68:6d:bc:63:e6:86', '10.203.105.212', NULL, NULL, 'HIKVISION DS-2CD2055FWD-I', 'DS-2CD2055FWD-I20190606AAWRD27850561', NULL, 'Filler Bellanitec', 'admin', 'Admin1234'),
(92, NULL, NULL, NULL, '010.203.105.213', '9C7BEFB09FD7', 'https://10.203.105.213', NULL, NULL, 'Desktop HP 600G3 SFFG4400 500G 8.0G 28 PC + Monitor', NULL, NULL, 'R. Gardu Area I', NULL, 'P@assw0rd'),
(93, NULL, NULL, NULL, '010.203.105.214', '68:6d:bc:63:e6:db', '10.203.105.214', NULL, NULL, 'HIKVISION DS-2CD2055FWD-I', 'DS-2CD2055FWD-I20190606AAWRD27850646', NULL, 'filler SIDEL', 'admin', 'Admin1234'),
(94, NULL, NULL, NULL, '010.203.105.215', '68:6d:bc:63:e6:c3', '10.203.105.215', NULL, NULL, 'HIKVISION DS-2CD2055FWD-I', 'DS-2CD2055FWD-I20190606AAWRD27850622', NULL, 'washer HOD2', 'admin', 'Admin1234'),
(95, NULL, NULL, NULL, '010.203.105.220', NULL, '10.203.105.216', NULL, NULL, 'WiPG 1000', NULL, NULL, 'R. Meeting Levite', NULL, NULL),
(96, NULL, NULL, NULL, '010.203.105.221', '00-12-5F-0E-BB-5D', NULL, NULL, NULL, 'WiPG 1000', NULL, NULL, 'R. Plant Manager', NULL, NULL),
(97, NULL, NULL, NULL, '010.203.105.224', '68:6d:bc:f0:f1:36', '010.203.105.224', NULL, NULL, 'HIKVISION DS-7616NI-K2', 'DS-7616NI-K21620190826CCRRD54552828WCVU', NULL, 'R.SERVER AREA3', 'admin', 'Admin1234'),
(98, NULL, NULL, NULL, '010.203.105.226', '80-E8-2C-A5-14-53', 'HPA51453', NULL, NULL, 'HP PageWide Pro 477dw MFP', 'CN07NMX0KD', NULL, 'Office HR', NULL, NULL),
(99, NULL, NULL, NULL, '010.203.105.227', 'A0-8C-FD-12-9B-A4', 'NP1129BA4', NULL, NULL, 'HP LaserJet M402n', NULL, NULL, 'Poliklinik', NULL, NULL),
(100, NULL, NULL, NULL, '010.203.105.228', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, NULL, NULL, NULL, '010.203.105.229', 'EC:8E:B5:05:B2:2B', 'HP05B22B', NULL, NULL, 'HP PageWide Pro 477dw MFP', NULL, NULL, 'Sparepart', NULL, NULL),
(102, NULL, NULL, NULL, '010.203.105.230', '2C-41-38-84-23-0C', 'HP7841BD', NULL, NULL, NULL, NULL, NULL, 'Admin Area 3', NULL, NULL),
(103, NULL, NULL, NULL, '010.203.105.231', '80E82CA42CB8', 'HPA42CB8', NULL, NULL, 'HP PageWide Pro 477dw MFP', NULL, NULL, '600 ml', NULL, NULL),
(104, NULL, NULL, NULL, '010.203.105.232', '40B034784182', 'HP784182', NULL, NULL, 'HP PageWide Pro 477dw MFP', NULL, NULL, 'Logistik', NULL, NULL),
(105, NULL, NULL, NULL, '010.203.105.233', 'EC8EB5CFC853', 'HPCFC853', NULL, NULL, 'HP PageWide Pro 477dw MFP', NULL, NULL, 'Teknik', NULL, NULL),
(106, NULL, NULL, NULL, '010.203.105.234', '3C-4A-92-B8-F9-CF', NULL, NULL, NULL, 'HP LaserJet Pro M420n', NULL, NULL, 'Finance', NULL, NULL),
(107, NULL, NULL, NULL, '010.203.105.235', 'EC-8E-B5-05-B2-15', 'HP05B215', NULL, NULL, 'HP PageWide Pro 477dw MFP', NULL, NULL, 'Office Staff', NULL, NULL),
(108, NULL, NULL, NULL, '010.203.105.236', 'EC8EB5CFC8F5', 'HPCFC8F5', NULL, NULL, 'HP PageWide Pro 477dw MFP', NULL, NULL, 'Office Quality', NULL, NULL),
(109, NULL, NULL, NULL, '010.203.105.237', '40B03477FE83', 'HP77FE83', NULL, NULL, 'HP PageWide Pro 477dw MFP', 'CN07NMX0HC', NULL, 'Office HOD1', NULL, NULL),
(110, NULL, NULL, NULL, '010.203.105.238', 'F8 b4 6a 86 34 c3', NULL, NULL, NULL, 'HP LaserJet Pro M404dn', '/ PHCW505661', NULL, 'HOD AREA3', NULL, NULL),
(111, NULL, NULL, NULL, '010.203.105.239', NULL, NULL, NULL, NULL, 'SIGMA Air Manager', NULL, NULL, 'Kompressor AGM', 'SAM Area 3', '12345'),
(112, NULL, NULL, NULL, '010.203.105.240', '8C-DC-D4-4A-D1-35', NULL, NULL, NULL, 'Project Formulation Gate', NULL, NULL, 'R. Formulasi Mizone', NULL, NULL),
(113, NULL, NULL, NULL, '010.203.105.241', '8C-DC-D4-42-F9-5A', NULL, NULL, NULL, 'Project Formulation Timbangan', NULL, NULL, 'R. Formulasi Mizone', NULL, NULL),
(114, NULL, NULL, NULL, '010.203.105.242', '24-E9-B3-7C-95-CA', 'GIDTIVPLCTRP05', NULL, NULL, 'Cisco AIR-SAP2602E-C-K9', 'FGL1749X0GG', NULL, 'R. Office Lt.2', NULL, NULL),
(115, NULL, NULL, NULL, '010.203.105.243', '08-00-37-DE-76-27', NULL, NULL, NULL, 'Xerox DocuCenter-IV 3060', NULL, NULL, 'R. Office Mizone', NULL, NULL),
(116, NULL, NULL, NULL, '010.203.105.244', '4C:E6:76:E7:61:4B', 'LS-QVL14B', NULL, NULL, 'Buffalo Linkstation', '8.59E+13', NULL, 'Switch Room', 'admin', 'password'),
(117, NULL, NULL, NULL, '010.203.105.245', '00-17-61-10-9D-C6', NULL, NULL, NULL, 'Mesin Absensi Makan', NULL, NULL, 'Kantin', NULL, NULL),
(118, NULL, NULL, NULL, '010.203.105.246', '00-17-61-12-0B-59', NULL, NULL, NULL, 'Mesin Absensi', NULL, NULL, 'Area Lobby', NULL, NULL),
(119, NULL, NULL, NULL, '010.203.105.247', '08-00-37-DE-5C-67', 'HPE72535-CITEREUP-OFFICE', NULL, NULL, 'HP LaserJet MFP E72535', 'CNC1M8Q06Q', NULL, 'R. Office', NULL, NULL),
(120, NULL, NULL, NULL, '010.203.105.248', '08-00-37-DE-73-BF', NULL, NULL, NULL, 'DocuCentrre-IV 3060', NULL, 'No EQ : 519583', 'Quality Lab', NULL, NULL),
(121, NULL, NULL, NULL, '010.203.105.249', '24-E9-B3-5B-08-11', 'GIDTIVPLCTRP01', NULL, NULL, 'Cisco AIR-SAP2602E-C-K9', 'FGL1749X0GS', NULL, 'R. Office', NULL, NULL),
(122, NULL, NULL, NULL, '010.203.105.250', '24-E9-B3-6D-8F-C4', 'GIDTIVPLCTRP02', NULL, NULL, 'Cisco AIR-SAP2602E-C-K9', 'FGL1749X0G7', NULL, 'R. Meeting Evian Hall', NULL, NULL),
(123, NULL, NULL, NULL, '010.203.105.251', '24-E9-B3-68-8A-D6', 'GIDTIVPLCTRP03', NULL, NULL, 'Cisco AIR-SAP2602E-C-K9', 'FGL1749X0GM', NULL, 'R. Meeting Laboratorium', NULL, NULL),
(124, NULL, NULL, NULL, '010.203.105.252', '00-17-61-10-88-56', NULL, NULL, NULL, 'Mesin Absensi', NULL, NULL, 'Area Tunngu Supir', NULL, NULL),
(125, NULL, NULL, NULL, '010.203.105.253', '00-17-61-10-88-0A', NULL, NULL, NULL, 'Mesin Absensi', NULL, NULL, 'Area Tunngu Supir', NULL, NULL),
(126, NULL, NULL, NULL, '010.203.105.254', '00-17-61-10-88-14', NULL, NULL, NULL, 'Mesin Absensi', NULL, NULL, 'Area Tunngu Supir', NULL, NULL),
(127, NULL, NULL, NULL, '010.203.105.255', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, '1325', '135', 235, '216', '221', 'afs', 'wga', '', '', 'aweg', 'wage', '', 'aweg', 'aweg');

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
  `type` varchar(100) NOT NULL,
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
  `os_version` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `return` date DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `name`, `department`, `equipment`, `asset_number`, `serial_number`, `ticket_show`, `description`, `date`, `return`, `signature`) VALUES
(21, 'Riyanti', 'HR', 'Laptop HP 840 G3', '60008628', '5CG7256BYJ', 'Pinjam s/d pengajuan new laptop', '', '2022-01-05', '0000-00-00', ''),
(22, 'Sitinu', 'HR', 'Laptop HP 840 G3', '60009001', '5CG8152HTL', '', 'Pinjam s/d pengajuan new laptop', '2022-01-05', '0000-00-00', ''),
(23, 'Selamet widodo', 'Logistik', 'Laptop HP 840 G1', '60007338', '5CG4422FSH', '', '', '2022-01-04', '0000-00-00', ''),
(24, 'Andre', 'Performance', 'Laptop HP 840 G3', '60007955', '5CG62651NK', '', 'support performance', '2022-01-05', '0000-00-00', ''),
(25, 'Dwi Hartati', 'Performance', 'Laptop HP 840 G3', '60008589', '5CG7256BHQ', '', 'support performance', '2022-01-04', '0000-00-00', ''),
(26, 'Nurul Insan', 'HR', 'Laptop HP 840 G3', '60007748', '5CG6153YT2', '', 'Support HR *cuti', '2022-06-28', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_network`
--

CREATE TABLE `mapping_network` (
  `id` int(11) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `hostname` varchar(150) DEFAULT NULL,
  `model` varchar(150) DEFAULT NULL,
  `serial_number` varchar(150) DEFAULT NULL,
  `ip_address` varchar(150) DEFAULT NULL,
  `mac_address` varchar(150) DEFAULT NULL,
  `switch` varchar(150) DEFAULT NULL,
  `port` varchar(150) DEFAULT NULL,
  `rack` varchar(150) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_network`
--

INSERT INTO `mapping_network` (`id`, `description`, `hostname`, `model`, `serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `rack`, `location`) VALUES
(2, 'fioerjf', 'awegawf', 'awf', 'awef', 'ga', 'awegawhwaawfa', 'asd', 'awge', 'awge', 'Area Office Lt3'),
(3, 'f', '', '', '', '', '', '', '', '', ''),
(4, 'g', '', '', '', '', '', '', '', '', ''),
(5, 'wef', '', '', '', '', '', '', '', '', ''),
(6, 'wefw', '', '', '', '', '', '', '', '', ''),
(7, 'wahg', '', '', '', '', '', '', '', '', ''),
(8, 'waf', '', '', '', '', '', '', '', '', ''),
(9, 'awhb', '', '', '', '', '', '', '', '', ''),
(10, 'aweg', '', '', '', '', '', '', '', '', ''),
(11, 'vv', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `nama_portfolio`, `deskripsi`) VALUES
(1, 'Fasilitas Pelayanan', 'Lebih dari 5 fasilitas. Didukung oleh para ahli dibidangnya demi memberikan anda layanan kesehatan yang baik dan profesional.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio1`
--

CREATE TABLE `portfolio1` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio1`
--

INSERT INTO `portfolio1` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Medical Check Up', 'Memonitor Kondisi Kesehatan Anda.', 'Medical Check Up Rumah Sakit Jakarta siap membantu untuk memonitor kondisi kesehatan anda dari waktu ke waktu, mendeteksi dini berbagai penyakit seperti diabetes mellitus, penyakit jantung koroner, stroke, kanker, dll. Serta memberi anjuran untuk pencegahan dan tindak lanjut penanganan berbagai penyakit.', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio2`
--

CREATE TABLE `portfolio2` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio2`
--

INSERT INTO `portfolio2` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Laboratorium', 'Cepat dan Akurat.', 'Laboratorium RS Jakarta merupakan unit pelayanan diagnostik dengan pelayanan selama 24 jam dan didukung oleh tenaga profesional berupa dokter dan paramedis yang berpengalaman di bidangnya. Hasil laporan laboratorium dapat diperoleh dengan cepat dan akurat, sehingga memudahkan pasien dalam menjalankan pemeriksaan.', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio3`
--

CREATE TABLE `portfolio3` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio3`
--

INSERT INTO `portfolio3` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Farmasi', 'Obat-obatan dan Alat Kesehatan', 'Dalam memberikan pelayanan terbaik, Rumah Sakit Jakarta dilengkapi instalasi farmasi yang beroperasi selama 24 jam, sehingga dapat memudahkan pasien mendapatkan obat-obatan dan alat kesehatan yang dibutuhkan.', '9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio4`
--

CREATE TABLE `portfolio4` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio4`
--

INSERT INTO `portfolio4` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Hemodialisasi', 'Pelayanan Cuci Darah', 'Unit Hemodialisa merupakan salah satu unit pelayanan Rumah Sakit yang diperuntukkan bagi penderita gagal ginjal dalam melakukan cuci darah yang didukung kerjasama tim yang beranggotakan dokter umum yang bersertifikat HD, dokter penyakit dalam, dokter nefrologi, serta perawat yang terampil, mahir dan bersertifikat.', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio5`
--

CREATE TABLE `portfolio5` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` varchar(300) NOT NULL DEFAULT '0',
  `content` varchar(1000) NOT NULL DEFAULT '0',
  `photo` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio5`
--

INSERT INTO `portfolio5` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Rawat Inap', 'Pelayanan untuk Observasi, dan Lain-lain.', 'Pelayanan terhadap pasien yang masuk ke rumah sakit dengan menggunakan tempat tidur untuk keperluan observasi, diagnosis, terapi, rehabilitasi medik dan penunjang medik lainnya.', '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio6`
--

CREATE TABLE `portfolio6` (
  `id_portfolio` int(11) NOT NULL,
  `nama_portfolio` varchar(100) NOT NULL DEFAULT '0',
  `deskripsi` varchar(300) NOT NULL DEFAULT '0',
  `content` varchar(1000) NOT NULL DEFAULT '0',
  `photo` varchar(300) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio6`
--

INSERT INTO `portfolio6` (`id_portfolio`, `nama_portfolio`, `deskripsi`, `content`, `photo`) VALUES
(1, 'Radiologi', 'Menggunakan Teknologi Canggih', 'Keunggulan berupa kapasitas yang cukup tinggi yaitu 500 mA drngan 150 Kv dan ditopang dengan adanya alat khusus organ-organ yang panjang (long view) hingga kami dapat memperlihatkan gambaran tulang belakang dari vertebra cervical hingga vertebra coccygis atau memperlihatkan gambaran dari alat gerak bawah dari hip join hingga sendi.', '12.png');

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id_potongan` int(11) NOT NULL,
  `potongan` varchar(225) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id_potongan`, `potongan`, `jml_potongan`) VALUES
(7, 'Tanpa Keterangan', 100000);

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
(3, 'rweq', 'fwef', '2022-07-05', '2022-07-05', 'In Progress', 'fsad'),
(4, 'awfe', 'awef', '2022-07-05', '2022-07-05', 'In Progress', 'awfe'),
(5, 'awef', 'gwaeg', '2022-07-20', '2022-07-13', 'In Progress', 'fawefg'),
(6, 'fegwa', 'ewafaf', '2022-07-06', '2022-07-20', 'In Progress', 'waefgweag'),
(7, 'zzzzz', 'waeg', '2022-07-13', '2022-07-20', 'In Progress', 'awef'),
(8, 'awegwiojfoijgoiwfawg', 'f', '2022-07-06', '2022-07-05', '', 'ewaghwafawfawgawgwaehawrawfawf');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `judul_team` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `judul_team`, `deskripsi`) VALUES
(1, 'OUR AMAZING TEAM', 'This is our team, happy to give the best for you.');

-- --------------------------------------------------------

--
-- Table structure for table `team1`
--

CREATE TABLE `team1` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team1`
--

INSERT INTO `team1` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Galang Hanafi', '065119164', 'g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team2`
--

CREATE TABLE `team2` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team2`
--

INSERT INTO `team2` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Daffa Ksatria Firdaus', '065119168', 'w1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team3`
--

CREATE TABLE `team3` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team3`
--

INSERT INTO `team3` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Muchammad Amru Al-Chakim', '065119167', 'd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team4`
--

CREATE TABLE `team4` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team4`
--

INSERT INTO `team4` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Willyman Sopian', '065119175', 'fsa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team5`
--

CREATE TABLE `team5` (
  `id_team` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team5`
--

INSERT INTO `team5` (`id_team`, `nama`, `npm`, `photo`) VALUES
(1, 'Okter Pra Yudha', '065119178', 'y.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_location`
--
ALTER TABLE `area_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

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
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asset_number` (`asset_number`),
  ADD UNIQUE KEY `serial_number` (`serial_number`);

--
-- Indexes for table `mapping_network`
--
ALTER TABLE `mapping_network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio1`
--
ALTER TABLE `portfolio1`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio2`
--
ALTER TABLE `portfolio2`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio3`
--
ALTER TABLE `portfolio3`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio4`
--
ALTER TABLE `portfolio4`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio5`
--
ALTER TABLE `portfolio5`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `portfolio6`
--
ALTER TABLE `portfolio6`
  ADD PRIMARY KEY (`id_portfolio`);

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
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team1`
--
ALTER TABLE `team1`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team2`
--
ALTER TABLE `team2`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team3`
--
ALTER TABLE `team3`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team4`
--
ALTER TABLE `team4`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `team5`
--
ALTER TABLE `team5`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_location`
--
ALTER TABLE `area_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mapping_network`
--
ALTER TABLE `mapping_network`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio1`
--
ALTER TABLE `portfolio1`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio2`
--
ALTER TABLE `portfolio2`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio3`
--
ALTER TABLE `portfolio3`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio4`
--
ALTER TABLE `portfolio4`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio5`
--
ALTER TABLE `portfolio5`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio6`
--
ALTER TABLE `portfolio6`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id_potongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team1`
--
ALTER TABLE `team1`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team2`
--
ALTER TABLE `team2`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team3`
--
ALTER TABLE `team3`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team4`
--
ALTER TABLE `team4`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team5`
--
ALTER TABLE `team5`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
