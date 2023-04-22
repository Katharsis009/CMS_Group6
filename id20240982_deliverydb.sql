-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2023 at 05:42 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20240982_deliverydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(999) NOT NULL,
  `details` varchar(999) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `street_add` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `user_id`, `subject`, `details`, `first_name`, `middle_name`, `last_name`, `street_add`, `status`) VALUES
(4, 6, 'Robbie Sulit', 'Their house is unclean.', 'Adam', 'Ulric', 'Garcia', 'Poblacion, Makati', 'Resolved'),
(22, 3, 'Noisy neighbor', '14 basilan is too loud', 'Roby', 'Robert', 'Sulit', '12 Basilan', 'Resolved'),
(23, 3, 'Lost Dog', 'I would like to request assistance with finding my lost dog. It is a white pomeranian with a red collar.', 'Roby', 'Robert', 'Sulit', 'Basilan Road, Barangay Philam', 'Resolved'),
(24, 3, 'Noisy Neighbors', 'We would like to report the same noisy neighbors as our last complaint. Thank you.', 'Roby', 'Robert', 'Sulit', 'Basilan Road, Barangay Philam', 'Unresolved');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'seph', '123'),
(3, 'trebor', '24'),
(4, 'jello', '123'),
(5, 'biancs', '12345'),
(6, 'adam', '123'),
(7, 'thea', '11');

-- --------------------------------------------------------

--
-- Table structure for table `resolve`
--

CREATE TABLE `resolve` (
  `resolve_id` int(11) NOT NULL,
  `subject` varchar(999) NOT NULL,
  `resolution` varchar(999) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resolve`
--

INSERT INTO `resolve` (`resolve_id`, `subject`, `resolution`, `user_id`, `admin_id`, `complaint_id`) VALUES
(4, 'RE: Robbie Sulit', 'This is noted.', 6, 0, 4),
(6, 'Noisy Neughbor', 'We will address this ASAP', 3, 5, 22),
(7, 'RE: Lost Dog', 'We would send assistance later today in order to find your lost dog. Thank you.', 3, 5, 23);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `street_add` varchar(50) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `login_id` int(11) NOT NULL,
  `account_verification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `middle_name`, `last_name`, `gender`, `birthday`, `place_of_birth`, `status`, `nationality`, `occupation`, `phone_num`, `email_add`, `street_add`, `account_type`, `login_id`, `account_verification`) VALUES
(1, 'Joseph', 'Tria', 'Arpilleda', 'Male', '2001-07-16', 'Makati', 'Single', 'Filipino', 'Student', '0976', 'jatarpilleda@gmail.com', 'Baguio Road, Barangay Philam', 'Admin', 1, 'Approved'),
(3, 'Roby', 'Robert', 'Sulit', 'Male', '2002-08-12', 'Quezon City', 'Single', 'Filipino', 'IT', '454545', 'trebor24@gmail.com', 'Basilan Road, Barangay Philam', 'Citizen', 3, 'Approved'),
(4, 'Justin', 'Angelo', 'Monasterial', 'female', '2002-05-12', 'Quezon City', 'Married', 'American', 'Professor', '32131212', 'jangelo@gmail.com', 'Vigan Road, Barangay Philam', 'Citizen', 4, 'Approved'),
(5, 'Bianca', 'Ysabel', 'Saunar', 'Female', '2001-02-08', 'Mandaluyong', 'Single', 'Filipino', 'Student', '987', 'saunar@google.com', 'Shaw', 'Admin', 5, 'Approved'),
(6, 'Ulric', 'Adam', 'Garcia', 'Male', '2000-11-03', 'Manila City', 'Divorced', 'French', 'Architect', '546787998', 'adamgarcia@gmail.com', 'W. Lawin, Barangay Philam', 'Citizen', 6, 'Approved'),
(7, 'Thea', 'Suzanne', 'Cunanan', 'Female', '2001-06-02', 'Mandaluyong', 'Single', 'Filipino', 'Student', '1234679', 'thea@gmail.com', 'Pasig City', 'Citizen', 7, 'Rejected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `resolve`
--
ALTER TABLE `resolve`
  ADD PRIMARY KEY (`resolve_id`),
  ADD KEY `complaint_id` (`complaint_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `login_id` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resolve`
--
ALTER TABLE `resolve`
  MODIFY `resolve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `resolve`
--
ALTER TABLE `resolve`
  ADD CONSTRAINT `resolve_ibfk_1` FOREIGN KEY (`complaint_id`) REFERENCES `complaint` (`complaint_id`),
  ADD CONSTRAINT `resolve_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
