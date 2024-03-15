-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 10:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `avaliable_dr`
--

CREATE TABLE `avaliable_dr` (
  `dr_name` varchar(50) NOT NULL,
  `dr_id` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `status` varchar(500) NOT NULL,
  `hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avaliable_dr`
--

INSERT INTO `avaliable_dr` (`dr_name`, `dr_id`, `phone`, `specialization`, `experience`, `age`, `status`, `hospital`) VALUES
('ram', '123', '6268210264', 'heart', '10 years', '45', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `h_id` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_adhar` varchar(50) NOT NULL,
  `p_problem` varchar(50) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p`
--

INSERT INTO `p` (`h_id`, `p_name`, `p_adhar`, `p_problem`, `day`) VALUES
('1230', 'gyuh', 'dscsdcxxc', 'KK,,NJ', '2024-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `resistration_h`
--

CREATE TABLE `resistration_h` (
  `h_id` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `hospital_name` varchar(20) NOT NULL,
  `h_status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resistration_h`
--

INSERT INTO `resistration_h` (`h_id`, `city`, `email`, `Password`, `hospital_name`, `h_status`) VALUES
('123', 'Vidisha ', 'nirdesh26cs081@satienggg.in', '123456', 'chiranjivi hospital', 0),
('dszcxdsxc', 'Vidisha ', 'nirdesh26cs081@satienggg.in', '456123', 'chiranjivi hospital', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'nirdesh.315', 'nirdesh26cs081@satienggg.in', '123456'),
(2, 'nirdeshtiwari432@gmail.com', 'nirdesh26cs081@satienggg.in', '123456'),
(3, 'nirdeshtiwari432@gmail.com', 'nirdesh26cs081@satienggg.in', '11111111');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
