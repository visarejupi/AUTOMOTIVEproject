-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 07:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automotive`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(8) NOT NULL,
  `car_type` int(20) NOT NULL,
  `picture_location` varchar(100) NOT NULL,
  `date_posted` date NOT NULL DEFAULT current_timestamp(),
  `posted_by` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`, `car_type`, `picture_location`, `date_posted`, `posted_by`) VALUES
(1, 'Alfa Romeo Giulia', 31000, 7, 'images/cars/carpictures/alfaromeo.jpg', '2022-02-23', 0),
(2, 'Audi A1', 23000, 1, 'images/cars/carpictures/audia1.jpg', '2022-02-23', 7),
(3, 'Audi A4', 39000, 7, 'images/cars/carpictures/audia4.jpg', '2022-02-23', 7),
(4, 'Audi A4 Allroad', 42000, 4, 'images/cars/carpictures/audia4allroad.jpg', '2022-02-23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`id`, `name`) VALUES
(1, 'Small'),
(2, 'Hatchback'),
(3, 'Minivan'),
(4, 'Estate'),
(5, 'Sport'),
(6, 'SUV'),
(7, 'Sedan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `salted_hash` varchar(200) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `privileges` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `salted_hash`, `salt`, `privileges`) VALUES
(0, 'admin', 'admin@automotive.com', '8h6wet87m98dse567s85', 'muyi0kzs11256y459', 0),
(7, 'Nderim', 'nx35602@ubt-uni.net', '6502698739deae8b4352fbb6bb3632c43dc6b23027a72930c8d1cb6a74f43036', 'CBvfn0i6j7MaiA==', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
