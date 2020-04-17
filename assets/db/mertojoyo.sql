-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 06:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mertojoyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `lainnya`
--

CREATE TABLE `lainnya` (
  `id` int(11) NOT NULL,
  `tanggal_masuk` int(11) NOT NULL,
  `tanggal_keluar` int(11) NOT NULL,
  `status_kas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lainnya`
--

INSERT INTO `lainnya` (`id`, `tanggal_masuk`, `tanggal_keluar`, `status_kas`) VALUES
(1, 1564592400, 1596128400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `arah` varchar(100) NOT NULL,
  `nominal` int(100) NOT NULL,
  `tanggal` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `arah`, `nominal`, `tanggal`) VALUES
(1, 'Adam', 'Income', 100000, 1564592400),
(2, 'Bayu', 'Income', 151000, 1564592400),
(3, 'Firly', 'Income', 159000, 1564592400),
(4, 'Pras', 'Income', 100000, 1564592400),
(5, 'Listrik', 'Spending', 23000, 1564592400),
(6, 'Listrik', 'Spending', 23000, 1564592400),
(7, 'Listrik', 'Spending', 53000, 1564592400),
(8, 'Listrik', 'Spending', 53000, 1564592400),
(9, 'Listrik', 'Spending', 53000, 1564592400),
(10, 'Logistik', 'Spending', 60000, 1564592400),
(11, 'Post IG', 'Spending', 100000, 1564592400),
(12, 'PDAM', 'Spending', 72000, 1564592400),
(13, 'Listrik', 'Spending', 53000, 1564592400),
(14, 'Pras', 'Income', 100000, 1564592400),
(15, 'Pras', 'Income', 15000, 1564592400),
(16, 'Logistik', 'Spending', 15000, 1564592400),
(17, 'Listrik', 'Spending', 52500, 1564592400),
(22, 'LPG', 'Spending', 10000, 1564592400),
(21, 'Adam', 'Income', 50000, 1564592400),
(20, 'Mama Lemon', 'Spending', 4000, 1564592400),
(23, 'Minyak', 'Spending', 20000, 1564592400),
(24, 'Listrik', 'Spending', 52500, 1564592400),
(25, 'Malik', 'Income', 100000, 1564592400),
(26, 'Listrik', 'Spending', 52500, 1564592400),
(27, 'Fajri', 'Income', 100000, 1564592400),
(28, 'PDAM', 'Spending', 168000, 1564592400),
(29, 'Bayu', 'Income', 52000, 1564592400),
(30, 'Listrik', 'Spending', 52000, 1564592400),
(31, 'Adam', 'Income', 150000, 1564592400),
(32, 'Listrik', 'Spending', 52500, 1564592400),
(33, 'Bayu', 'Income', 50000, 1564592400),
(34, 'Busa', 'Spending', 15500, 1564592400),
(35, 'Sunlight', 'Spending', 10500, 1564592400),
(38, 'Fajri', 'Income', 200000, 1564592400),
(39, 'Pras', 'Income', 100000, 1564592400),
(40, 'Listrik', 'Spending', 52500, 1564592400),
(41, 'Listrik', 'Spending', 52500, 1564592400),
(42, 'Wifi', 'Spending', 425000, 1564592400),
(43, 'Firly', 'Income', 241000, 1564592400),
(44, 'Malik', 'Income', 100000, 1564592400),
(45, 'PDAM', 'Spending', 209000, 1564592400),
(46, 'Bayu', 'Income', 50000, 1564592400),
(47, 'Listrik', 'Spending', 52500, 1564592400),
(48, 'LPG', 'Spending', 20000, 1564592400),
(49, 'Pras', 'Income', 20000, 1564592400),
(50, 'Listrik', 'Spending', 52500, 1564592400),
(51, 'Bayu', 'Income', 50000, 1564592400),
(52, 'Adam', 'Income', 100000, 1564592400),
(53, 'Bayu', 'Income', 50000, 1575175525),
(54, 'Minyak', 'Spending', 23500, 1575509094),
(55, 'Sunlight', 'Spending', 9500, 1575509127),
(56, 'Spons busa', 'Spending', 11000, 1575509144),
(57, 'Listrik', 'Spending', 52500, 1575597481),
(58, 'Listrik', 'Spending', 52500, 1576070366),
(59, 'Malik', 'Income', 100000, 1576490551),
(60, 'Pras', 'Income', 50000, 1576498942),
(61, 'Soklin', 'Spending', 12000, 1576748023),
(62, 'Wifi', 'Spending', 304500, 1576930814),
(63, 'Firly', 'Income', 100000, 1576930822),
(64, 'Listrik', 'Spending', 52500, 1576938105),
(65, 'Bayu', 'Income', 50000, 1576938179),
(66, 'Pras', 'Income', 115000, 1576996135),
(67, 'Adam', 'Income', 150000, 1577772644),
(68, 'PDAM', 'Spending', 209000, 1577780273),
(69, 'Bayu', 'Income', 50000, 1577847502),
(70, 'LPG', 'Spending', 19000, 1577959963),
(71, 'Bayu', 'Income', 62000, 1578049286),
(72, 'Minyak', 'Spending', 24000, 1578198344),
(73, 'Listrik', 'Spending', 52500, 1578405743),
(74, 'Sunlight', 'Spending', 11500, 1579528694),
(75, 'Zuhal', 'Income', 50000, 1579759747),
(76, 'Listrik', 'Spending', 52500, 1579777494),
(77, 'Sampah', 'Spending', 20000, 1579945945),
(78, 'Pras', 'Income', 120000, 1579951148),
(79, 'Wifi', 'Spending', 304500, 1580078510),
(80, 'Fajri', 'Income', 300000, 1580458831),
(81, 'Minyak', 'Spending', 22500, 1580471221),
(82, 'Listrik', 'Spending', 52500, 1580777281),
(83, 'Firly', 'Income', 200000, 1580878532),
(84, 'Bayu', 'Income', 100000, 1581030252),
(85, 'PDAM', 'Spending', 352000, 1581031467),
(86, 'Bayu', 'Income', 50000, 1581049581),
(87, 'Listrik', 'Spending', 52500, 1581410972),
(88, 'LPG', 'Spending', 19000, 1581716788),
(89, 'Listrik', 'Spending', 52500, 1582200827),
(90, 'Adam', 'Income', 100000, 1582291907),
(91, 'Pras', 'Income', 100000, 1582291914),
(92, 'Wifi', 'Spending', 291500, 1582293984),
(93, 'Bayu', 'Income', 85000, 1582971856),
(94, 'Pras', 'Income', 52500, 1582977146),
(95, 'Listrik', 'Spending', 52500, 1583023945),
(96, 'Zuhal', 'Income', 50000, 1583144894),
(97, 'Fajri', 'Income', 100000, 1583297694),
(98, 'Firly', 'Income', 100000, 1583394678),
(99, 'Listrik', 'Spending', 52500, 1583670424),
(100, 'Pras', 'Income', 52500, 1583670440),
(101, 'Malik', 'Income', 200000, 1583739337),
(102, 'Listrik', 'Spending', 52500, 1584427276),
(103, 'PDAM', 'Spending', 107500, 1584429917),
(104, 'Minyak', 'Spending', 23000, 1584519386),
(105, 'Fajri', 'Spending', 174500, 1585366500),
(106, 'Fajri', 'Income', 170500, 1585577340),
(107, 'Adam', 'Income', 317500, 1585788102),
(108, 'Wifi', 'Spending', 317500, 1585788123),
(109, 'PDAM', 'Spending', 112500, 1586430521);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `kas` bigint(20) DEFAULT NULL,
  `full_kas` bigint(20) NOT NULL,
  `kontrakan` bigint(20) DEFAULT NULL,
  `full_kontrakan` bigint(20) DEFAULT NULL,
  `tanggal_buat` bigint(20) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `kas`, `full_kas`, `kontrakan`, `full_kontrakan`, `tanggal_buat`, `role_id`) VALUES
(1, 'admin', 'Admin', '1234', 0, 0, 0, 0, 1587052084, 1),
(2, 'adam', 'Adam', '$2y$10$/z.CMyRsABfirvFYT10T3.Et.RIE/5oDs9MB/zgwkcUBSCcT1KCrC', 967500, 900000, 3600000, 3700000, 1587054753, 2),
(3, 'bayu', 'Bayu', '$2y$10$Bqao/.RLSZJ4qcucuWQTHeps4IvT64Pk4dWB1MPIzpc1CxKdZhRtG', 800000, 900000, 3900000, 4200000, 1587055549, 2),
(4, 'fajri', 'Fajri', '$2y$10$8NgFmqCefoEiUYdTRjB8sOQzSgp4tqEBd5HrTwY/w6vg65Bs3/5vK', 696000, 800000, 800000, 2150000, 1587055596, 2),
(5, 'firly', 'Firly', '$2y$10$Z6ulmyPf5xZAadhF25T/g.vN0TXG0ao/n1YdHMeoipXzY6QQ8/Y5u', 800000, 900000, 2900000, 3700000, 1587055666, 2),
(6, 'prasetyo', 'Prasetyo', '$2y$10$YpfVLJ2/zhFhEvj.V7Ku0uX.e2jtI2Ws/wRfZokIGIn.VV16.Xt.6', 825000, 900000, 3600000, 4200000, 1587055702, 2),
(7, 'malik', 'Malik', '$2y$10$VIRn5Ls3Xfl5T5uaJ6HIJ.5fveKkCHzDhu6iqi4fySj5M.W/jNNNC', 500000, 600000, 900000, 2150000, 1587055751, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lainnya`
--
ALTER TABLE `lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lainnya`
--
ALTER TABLE `lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
