-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 05:08 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_requests`
--

-- --------------------------------------------------------

--
-- Table structure for table `general_information`
--

CREATE TABLE `general_information` (
  `id` int(255) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last-name` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL,
  `date-of-birth` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address-line1` varchar(255) NOT NULL,
  `address-line2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip-code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_information`
--

INSERT INTO `general_information` (`id`, `first-name`, `last-name`, `cnic`, `date-of-birth`, `gender`, `phone`, `email`, `address-line1`, `address-line2`, `city`, `province`, `zip-code`) VALUES
(68, 'Hassaan Siddiqui', 'Siddiqui', '42101-3417825-9', '2000-05-26', 'male', '+923123834705', 'hassaansidd2000@gmail.com', '1-B, 6/9', '', 'Karachi', 'Sindh', '74600');

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `id` int(255) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `other-symptom` varchar(255) NOT NULL,
  `covid` varchar(255) NOT NULL,
  `covid-details` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `other-medical` varchar(255) NOT NULL,
  `tobacco` varchar(255) NOT NULL,
  `allergy` varchar(255) NOT NULL,
  `allergy-details` varchar(255) NOT NULL,
  `allergy-greater-details` varchar(255) NOT NULL,
  `doc-first-name` varchar(255) NOT NULL,
  `doc-last-name` varchar(255) NOT NULL,
  `doc-phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`id`, `symptom`, `other-symptom`, `covid`, `covid-details`, `medical`, `other-medical`, `tobacco`, `allergy`, `allergy-details`, `allergy-greater-details`, `doc-first-name`, `doc-last-name`, `doc-phone`) VALUES
(61, 'Loss of taste or smell, Cough, Sore throat', 'Head ache', 'yes', 'I got myself tested after the symptoms were noticeable', 'allergies, anxiety, depression', 'Low blood pressure.', 'less', 'yes', 'Pet and Insect.', 'I start coughing around pets(cats and dogs to be specific).', 'Anwar', 'Rasheed', '+923546125641');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_information`
--
ALTER TABLE `general_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_information`
--
ALTER TABLE `general_information`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
