-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 03:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `bigdescritpion` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `name`, `price`, `description`, `bigdescritpion`, `image`, `date`) VALUES
(23, 'randm9000puffs', 10, 'RandM Tornado 9000 is a disposable vape device with cool design and it is rechargable. It contains 18ml 0/2/3/5% nicotine salt e-juice and vape up to 9000 puffs. There are 38 flavors for you to choose. The rechargeable port at the buttom of the device gur', '', './images/Original-Randmtornado9000puffs.jpg', '2023-06-23 19:12:32'),
(24, 'randm 4600 puffs', 6, 'RandM Crystal is a disposable vape device with cool design and it is rechargable. It contains 10ml 0/2/3/5% nicotine salt e-juice and vape up to 4600 puffs. There are 12 flavors for you to choose. The rechargeable port at the buttom of the device gurantti', '', './images/randmtornado4600.jpeg', '2023-06-23 19:14:25'),
(25, 'randm 7000 puffs', 8, 'RandM Tornado 7000 is a disposable vape device with airflow control and it is rechargable. It contains 14ml 0/2/3/5% nicotine salt e-juice and vape up to 7000 puffs. There are 52 flavors for you to choose. The airflow control let you choose the best spot ', '', './images/randmtornado7000.jpg', '2023-06-23 19:16:04'),
(26, 'randm 10000puffs', 11, 'RANDM TORNADO 10000 PLUS is a disposable vape device with airflow control and it is rechargable. It contains 20ml 0/2/3/5% nicotine salt e-juice and vape up to 10000 puffs. There are 14 flavors for you to choose. The airflow control let you choose the bes', '', './images/randmtornado10000.jpg', '2023-06-23 19:17:04'),
(27, 'randm sunax 21000puffs', 18, 'RandM Sunax 21000 is a disposable vape device with changeable pods. It also comes with airflow control and it is rechargable. It contains 14ml 0/2/3/5% nicotine salt e-juice and vape up to 7000 puffs each pod. There are 12 flavors for you to choose. The a', '', './images/randmtornado21000.jpeg', '2023-06-23 19:17:57'),
(28, 'randm 3000 puffs', 4, 'RandM Dazzle King is a disposable vape device with popular clear tank and colorful RGB light. It contains 8ml 0/2/3/5% nicotine salt e-juice and vape up to 3000 puffs. There are 12 flavors for you to choose. The RGB light makes it the coolest disposable d', '', './images/randmtornadp3000.jpeg', '2023-06-23 19:19:35'),
(29, 'vape600puffs', 2, 'RandM Vase 600 is a disposable vape device. It contains 2ml 2% nicotine salt e-juice and vape 600 puffs. There are 12 flavors for you to choose. ', '', './images/vape600.jpg', '2023-06-23 19:21:01'),
(30, 'vome 1000puffs', 10, 'Vome Monster 10000 is a disposable vape device with airflow control and it is rechargable. It contains 20ml 0/2/3/5% nicotine salt e-juice and vape up to 10000 puffs. There are 12 flavors for you to choose. The airflow control let you choose the best spot', '', './images/vome.jpg', '2023-06-23 19:22:09'),
(31, 'bingo', 9, 'SUPBLISS BINGO 8000  is a disposable vape device with cool design and it is rechargeable. It contains 16ml 5% salt e-juice and vape up to 8000 puffs. There are 12 flavors for you to choose. The rechargeable port at the bottom of the device guaranteeing yo', '', './images/bingo.jpg', '2023-06-23 19:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usertype` enum('admin','user') DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `usertype`, `email`, `password`, `image`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$10$xfV29QfeTFOoE4xXYGcGruFST6aQPGw9SmiWh7X2XfB4phO6Af9o.', '6481c7be71ba6.jpeg'),
(8, 'bilal', 'user', 'bilal@gmail.com', '$2y$10$Yjsvy699QU/8OS9oE/GUluDYP/6QC2.pLJPTT8qDToAMULuQWfYN2', '648ceb682fde8.jpg'),
(9, 'salah', 'user', 'salah@gmail.com', '$2y$10$eisBeBzmcl1AWkprH6bSUe.1EMYY4VNmSFogC.sZF9D8aYFJBg0BS', '648ed680df10f.jpeg'),
(17, 'ahmad hanaa', 'user', 'ahmad@gmail.com', '$2y$10$veGUM5IPG3U5tXBtaY8ahu8cQ3JMKiOaVAWjzi5PaJPFCQEhwOwAK', '6496cbd524cd9.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sss` (`user_id`),
  ADD KEY `ssss` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ssss` FOREIGN KEY (`product_id`) REFERENCES `products` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
