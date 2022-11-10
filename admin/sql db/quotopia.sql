-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 02:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quotopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `profilePic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `name`, `username`, `password`, `usertype`, `profilePic`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'mali123', 'admin', ''),
(2, 'malart@gmail.com', 'Malart', 'm4likun', 'malart123', 'user', ''),
(3, 'mali123@gmail.com', 'Malart', 'malart1234', 'malart123', 'user', ''),
(6, 'blini@gmail.com', 'Blini', 'z_blini', 'blini1234', 'user', ''),
(7, 'lluni@gmail.com', 'Lluni', 'lluni_.', 'lluni123', 'user', ''),
(8, 'mali@gmail.com', 'Malart', 'arti123', '74c7257597e7cc7f317a54f89a460206', 'user', ''),
(9, 'ledri@gmail.com', 'Ledri', 'ledri123', '18e8d250f339881824dae91ae8473a39', 'user', ''),
(10, 'blini123@gmail.com', 'blini', 'z_blini123', '9e18461e8075c5c88fa4da1952c7485f', 'user', ''),
(11, 'gert@gmail.com', 'Gert', 'gertice', 'gert123', 'user', ''),
(12, 'perparim@gmail.com', 'Perparim', 'pipo', 'pipo123', 'user', ''),
(13, 'asdsa@gmail.com', 'dsaads', 'dsadasd', 'bd967d428e20f7655671a705ff471152', 'user', ''),
(14, 'asdsadsa@gmail.com', 'dsdasdsadas', '1123213213', 'de36135571afb35052277ada9414ff36', 'mod', ''),
(26, 'asd@gmail.com', 'asd', 'asdfgh', 'asd123', 'user', '4328ec40b75f56d975849525986cfb11.jpg'),
(27, 'qwe@gmail.com', 'qwerty', 'qwerty123', 'qwerty', 'user', '4328ec40b75f56d975849525986cfb11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
