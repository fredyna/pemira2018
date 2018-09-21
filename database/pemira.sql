-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 03:26 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemira`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_kahim`
--

CREATE TABLE `calon_kahim` (
  `id` tinyint(4) NOT NULL,
  `no_calon` tinyint(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(1000) NOT NULL,
  `id_prodi` varchar(4) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `calon_presma`
--

CREATE TABLE `calon_presma` (
  `id` tinyint(4) NOT NULL,
  `no_calon` tinyint(4) NOT NULL,
  `nama_pres` varchar(100) NOT NULL,
  `nama_wapres` varchar(100) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(1000) NOT NULL,
  `id_prodi_pres` varchar(5) NOT NULL,
  `id_prodi_wapres` varchar(5) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'petugas', 'Petugas TPS'),
(3, 'pemilih', 'Pemilih');

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_kelas`
--

CREATE TABLE `jumlah_kelas` (
  `id_prodi` varchar(5) NOT NULL,
  `smt` tinyint(4) NOT NULL,
  `jumlah` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
('ak', 'D3 Akuntansi'),
('dkv', 'Desain Komunikasi Visual'),
('fm', 'D3 Farmasi'),
('ind', 'Industri'),
('kb', 'D3 Kebidanan'),
('kom', 'D3 Teknik Komputer'),
('te', 'D3 Teknik Elektro'),
('ti', 'D4 Teknik Informatika'),
('tkj', 'Teknik Komputer Jaringan'),
('tm', 'D3 Teknik Mesin');

-- --------------------------------------------------------

--
-- Table structure for table `suara_kahim`
--

CREATE TABLE `suara_kahim` (
  `id_user` varchar(8) NOT NULL,
  `id_calon` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suara_presma`
--

CREATE TABLE `suara_presma` (
  `id_user` varchar(8) NOT NULL,
  `id_calon` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `smt` tinyint(4) DEFAULT NULL,
  `prodi` varchar(5) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `lock_by` varchar(50) NOT NULL,
  `unlock_by` varchar(50) NOT NULL,
  `status_kahim` tinyint(1) DEFAULT '0',
  `status_presma` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `smt`, `prodi`, `kelas`, `lock_by`, `unlock_by`, `status_kahim`, `status_presma`) VALUES
(1, '127.0.0.1', 'fredd', '$2y$08$WXHG.s8Mb7o06eqsJ/q7GORvOlR7MSt.1/P2uKqW/oAUzAGvEfnNm', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1511314984, 1, 'Admin', 'Pemira', 'ADMIN', '0', NULL, '', '', '', '', 0, 0),
(16010001, '::1', '16010001', '$2y$08$6aeaVf7VcbMU5J2537c3qeEQv7NaQHHkjnmJynhfizxsLB1JUMQj.', NULL, NULL, NULL, NULL, NULL, NULL, 1510127435, NULL, 0, 'hanya', 'contoh', NULL, NULL, 1, 'ind', 'A', 'fredd', 'fredd', 0, 0),
(16010003, '::1', '16010003', '$2y$08$bbwRh08RPW4Hamy3X7rUH.ylhWmYE5M.yJ/dVc4eo64gWy4F5N8iq', NULL, NULL, NULL, NULL, NULL, NULL, 1510155762, NULL, 0, 'Dzul', 'karnain', NULL, NULL, 1, 'dkv', 'A', 'fredd', 'fredd', 0, 0),
(16010005, '::1', '16010005', '$2y$08$j9x884K89PZOcqFIa4I39OhxTrsTCtfKivCqViGauRANArsmCs.IO', NULL, NULL, NULL, NULL, NULL, NULL, 1510498140, NULL, 0, 'hanya', 'contoh', NULL, NULL, 1, 'tkj', 'A', 'fredd', 'fredd', 0, 0),
(16010007, '::1', '16010007', '$2y$08$vSZBmkDV0HNIYnZBReRCiumdjwAqo6tb1i4iS6O92mfbdHWtaYj16', NULL, NULL, NULL, NULL, NULL, NULL, 1511132013, NULL, 0, 'ini', 'murid contoh', NULL, NULL, 5, 'tkj', 'A', 'fredd', 'fredd', 0, 0),
(16090075, '::1', '16090075', '$2y$08$sf.kYhPoU8ZtVlWU8.Dj1eSGZ1II.2TOYQx2LYbnMyfg3ForxdLUq', NULL, NULL, NULL, NULL, NULL, NULL, 1508592962, 1511223701, 0, 'Fredy', 'Nur Apriyanto', NULL, NULL, 3, 'ti', 'C', 'fredd', 'fredd', 0, 0),
(16090077, '::1', 'petugas1', '$2y$08$LYf2YNJAhzmbASGcueasSexNMh7RMqe9hfEFp3q3ZFm8Fw1.Vc8v2', NULL, NULL, NULL, NULL, NULL, NULL, 1508593671, 1511315450, 1, 'Petugas', 'TPS 1', NULL, NULL, NULL, '', '', '', '', 0, 0),
(16090078, '::1', '16090078', '$2y$08$EbmXvSIdGO8cZrZIlR5ZEeUoLXIL1yZf/rJng1KA8C5VdwZjIeNWK', NULL, NULL, NULL, NULL, NULL, NULL, 1511135613, NULL, 0, 'Firman', 'Pamungkas', NULL, NULL, 3, 'ti', 'C', '', '', 0, 0),
(16090079, '::1', '16090079', '$2y$08$wN2EBGThbgu.M.7KGgk.Y.dwBjI4x.Nv8XtHQFR/uNA.7.H3Y/vZC', NULL, NULL, NULL, NULL, NULL, NULL, 1511135637, NULL, 0, 'Dwi', 'Aji Apriyadi', NULL, NULL, 3, 'ti', 'C', '', '', 0, 0),
(16090080, '::1', '16090080', '$2y$08$LLplxm6VLKh5i8DyF89fjes/d5w0aOIP9GV9Tb/.E6yjfI.NrmwoK', NULL, NULL, NULL, NULL, NULL, NULL, 1511135654, NULL, 0, 'Afi', 'Makarim', NULL, NULL, 3, 'ti', 'C', '', '', 0, 0),
(16090081, '::1', '16090081', '$2y$08$K7Dpk/EcEZIQwY98K7GEweiAwSR.ZPudAuXN8743WZqLTo3Ju7LDi', NULL, NULL, NULL, NULL, NULL, NULL, 1511135679, NULL, 0, 'Septian', 'Rizaldi', NULL, NULL, 3, 'ti', 'C', '', '', 0, 0),
(16090112, '::1', '16090112', '$2y$08$8U4RLRv6EoTrhdeS3xsN8e7wsjEkguvyrmPIrZxS9JhlkzoUD4JtO', NULL, NULL, NULL, NULL, NULL, NULL, 1511135591, NULL, 0, 'Maulana', 'Abdul Siddiq', NULL, NULL, 3, 'ti', 'C', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(8, 16010001, 3),
(10, 16010003, 3),
(11, 16010005, 3),
(12, 16010007, 3),
(6, 16090075, 3),
(7, 16090077, 2),
(14, 16090078, 3),
(15, 16090079, 3),
(16, 16090080, 3),
(17, 16090081, 3),
(13, 16090112, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_kahim`
--
ALTER TABLE `calon_kahim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_presma`
--
ALTER TABLE `calon_presma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_kahim`
--
ALTER TABLE `calon_kahim`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `calon_presma`
--
ALTER TABLE `calon_presma`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16090113;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
