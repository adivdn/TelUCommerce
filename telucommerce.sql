-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 02:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telucommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `spesification` text NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `category`, `item_name`, `spesification`, `image`, `price`, `stock`) VALUES
(4, 'HP', 'Fortran', 'HP baru', 'fortran.jpg', 100000, 4),
(5, 'Komputer', 'Laptop', 'Laptop bruuhhh', 'bruh.jpg', 10000000, 5),
(6, 'Komputer', 'Monitor', 'Monitor untuk pc', 'tes.jpg', 5000000, 5),
(8, 'Gadget', 'Tes', 'contoh item', 'MSU.png', 1000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `item_id`, `quantity`) VALUES
(1, 5, 1),
(2, 4, 1),
(2, 6, 1),
(3, 8, 1),
(3, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `nama_penerima` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `nomor_penerima` int(30) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `harga` int(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`id`, `user_id`, `tanggal_pemesanan`, `nama_penerima`, `alamat`, `nomor_penerima`, `kodepos`, `harga`, `status`) VALUES
(1, 2, '2020-08-07', 'asd', 'contoh', 123123131, 123431, 10000000, 'accept'),
(2, 4, '2020-08-08', 'asdasdsad', 'contoh123', 123412123, 123412, 5100000, 'accept'),
(3, 2, '2020-08-30', 'Contoh', 'Jalan Telekomunikasi', 2147483647, 41234, 5001000, 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` varchar(300) NOT NULL,
  `memes` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(40) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `level`, `nama`, `email`, `password`, `memes`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `image`) VALUES
(1, 'admin', 'Admin Tel U Commerce', 'admin.telucommerce@gmail.com', '0192023a7bbd73250516f069df18b500', 'Pretty Sure It Doen\'t', '0000-00-00', '', '', '0', NULL),
(2, 'user', 'Adiv Harjadinata', 'adiv.dinata@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2000-08-19', 'male', ' Jln. Jamin Ginting', '082219725365', 'Adiv2.png'),
(3, 'user', 'UserTesting', 'user@gmail.com', 'e10c85476fdfbaa51d77a535d24a9f78', 'okeboss', '0000-00-00', '', '', '0', NULL),
(4, 'user', 'Contoh', 'contoh@gmail.com', '', '', '2020-08-21', 'male', 'jalanin aja dulu', '1233211231', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD KEY `id` (`id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`id`) REFERENCES `transaction_detail` (`id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);

--
-- Constraints for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD CONSTRAINT `transaction_detail_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
