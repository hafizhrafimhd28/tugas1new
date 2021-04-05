-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 06:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ttl` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `ttl`, `alamat`) VALUES
(1, 'hafizh', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
(2, 'arya', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
(3, 'ridian', '827ccb0eea8a706c4c34a16891f84e7b', '', ''),
(7, 'lele', '69bfc4ef467b367e3515cdcf693e65db', '', ''),
(8, 'fer', '90eb8760c187a2097884ed4c9ffbb6a4', '', ''),
(9, 'asd', '7815696ecbf1c96e6894b779456d330e', '', ''),
(10, 'qwe', '76d80224611fc919a5d54f0ff9fba446', '', ''),
(11, 'wer', '22c276a05aa7c90566ae2175bcc2a9b0', '', ''),
(12, 'sss', '9f6e6800cfae7749eb6c486619254b9c', '', ''),
(13, 'dimas', '7815696ecbf1c96e6894b779456d330e', '', ''),
(14, 'rafi', '7815696ecbf1c96e6894b779456d330e', '2021-04-27', 'Martubung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
