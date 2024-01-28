-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 28, 2024 at 10:00 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(14, '323', '$2y$10$U/FzJMeooZ2SMEy7QS7ShOSLG/OAQAxqaeJDxw4h2MKczraTrXKsG', 'admin'),
(17, 'wewewe', 'eee1', 'admin'),
(18, 'wqwq', '331', 'user'),
(19, 'zouhair', 'ewwr', 'admin'),
(20, 'zouhair', 'ddf', 'admin'),
(21, 'zouhair', 'ddf', 'admin'),
(22, 'zouhair', 'ddf', 'admin'),
(23, 'zouhair', 'ddf', 'admin'),
(24, 'asaah', '$2y$10$jusMfnHOiXtwbyicXuAXlOdqxMtHtTX2SOX46/yUBzBtaAz3Cw9EC', 'user'),
(25, 'weewew', '$2y$10$JdW/RlwWNTkOnEWtTd.Wheir6Kr7EK8QBOvQPQPcSN5J6SPh.eSae', 'user'),
(26, 'zaa', '$2y$10$xOkiMkqVMowAcfJuChWKHeWQH.acbTyDdB6fpO1OqUJQJuD0OYTUa', 'admin'),
(27, 'zaa', '12121', 'admin'),
(28, 'zaa', '12121', 'admin'),
(29, 'gagsag', '12353213245', 'admin'),
(30, 'adndn', '12353213245', 'user'),
(32, 'heelo', 'test', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
