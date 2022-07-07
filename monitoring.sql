-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 12:12 PM
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
  `vlan` varchar(50) NOT NULL,
  `up_link` varchar(50) NOT NULL,
  `port` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `mac_address` varchar(150) NOT NULL,
  `host_name` varchar(150) NOT NULL,
  `equipment` varchar(150) NOT NULL,
  `manufacture` varchar(150) NOT NULL,
  `model` varchar(150) NOT NULL,
  `serial_number` varchar(150) NOT NULL,
  `asset_number` varchar(150) NOT NULL,
  `area` varchar(150) NOT NULL,
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipstatic`
--

INSERT INTO `ipstatic` (`id`, `vlan`, `up_link`, `port`, `ip_address`, `mac_address`, `host_name`, `equipment`, `manufacture`, `model`, `serial_number`, `asset_number`, `area`, `user`, `password`) VALUES
(1, '', '', '', '8.8.8.8', '', '', '', '', '', '', '', '', '', ''),
(2, '324', '234', '235', '253', 'asdf', 'asdf', 'wga', 'awge', 'awg', 'wage', 'wag', 'awg', 'wag', 'awg'),
(4, '', '', '', '3424', 'awf', '', '', '', '', '', '', '', '', 'a2'),
(5, '', '', '80', '8.8.8.8', 'asdf', '', '', '', '', '', '', '', '', ''),
(6, '2342', '34252', '4524', 'galang.com', 'aweg', 'waefwaeg', 'aweg', 'weag', 'weaeg', 'aweg', 'weag', '', 'aweg', 'aweg'),
(7, '13', '153', '', '1.1.1.1', 'afwag', '', 'w', 'awe', 'awg', 'weaeg', 'waeg', 'aweeg', 'aeweg', 'aweg');

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
  `ruangan` varchar(100) NOT NULL,
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
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `equipment` varchar(100) NOT NULL,
  `asset_number` varchar(100) NOT NULL,
  `serial_number` varchar(100) NOT NULL,
  `ticket_show` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `return` date NOT NULL,
  `signature` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `name`, `department`, `equipment`, `asset_number`, `serial_number`, `ticket_show`, `description`, `date`, `return`, `signature`) VALUES
(1, 'Asep', 'HR', 'Laptop HP 2324', '60008628', '5CG7256BYJ', '', 'Pinjam s/d pengajuan new laptop', '2022-10-02', '2022-07-22', 'asfd'),
(2, 'asep', 'waef', 'waef', 'weaf', 'awef', 'weaf', 'gewa', '2022-07-05', '0000-00-00', ''),
(3, 'asep', 'asFQW', 'FWEQQ', 'ewFEFefw', 'wefasf', 'wegw', 'qwqwfq', '2022-07-05', '0000-00-00', ''),
(4, 'asep', 'qwfq', 'qwdq', 'qfwqd', 'qwe', 'rwqf', 'qwf', '2022-07-21', '0000-00-00', ''),
(5, 'asep', 'qegqedq', 'qwdwqf', 'qefeqf', 'gewwef', 'wefq', 'qwe', '2022-07-05', '0000-00-00', ''),
(6, 'qwdqf', 'qwdfq', 'asdqwf', 'qerq', 'qwdqf', 'qw', '', '2022-07-05', '0000-00-00', ''),
(7, 'asep', 'waef', 'weafgw', 'waeg', 'weah', 'aweg', 'gwae', '2022-07-06', '2022-07-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_network`
--

CREATE TABLE `mapping_network` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `hostname` varchar(150) NOT NULL,
  `model` varchar(150) NOT NULL,
  `serial_number` varchar(150) NOT NULL,
  `ip_address` varchar(150) NOT NULL,
  `mac_address` varchar(150) NOT NULL,
  `switch` varchar(150) NOT NULL,
  `port` varchar(150) NOT NULL,
  `rack` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapping_network`
--

INSERT INTO `mapping_network` (`id`, `description`, `hostname`, `model`, `serial_number`, `ip_address`, `mac_address`, `switch`, `port`, `rack`, `location`) VALUES
(2, 'fioerjiojgosejgosiejhosejgoi', 'awegawf', 'awf', 'awef', 'ga', 'awegawhwaawfa', 'asd', 'awge', 'awge', 'awefwage'),
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
(8, 'awegwiojfoijgoiwfawg', 'waegwahewarawgwgaw', '2022-07-06', '2022-07-05', NULL, 'ewaghwafawfawgawgwaehawrawfawf');

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
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

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
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
