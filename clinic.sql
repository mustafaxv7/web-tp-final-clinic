-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2024 at 10:28 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `admin_password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `admin_password`) VALUES
(1, 'root', 'root@email.com', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `appoinetements`
--

DROP TABLE IF EXISTS `appoinetements`;
CREATE TABLE IF NOT EXISTS `appoinetements` (
  `appoinetement_id` int NOT NULL AUTO_INCREMENT,
  `service_name` varchar(255) DEFAULT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `appointement_time` date DEFAULT NULL,
  `admin_id` int NOT NULL,
  `patient_id` int NOT NULL,
  PRIMARY KEY (`appoinetement_id`),
  KEY `admin_id` (`admin_id`),
  KEY `patient_id` (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appoinetements`
--

INSERT INTO `appoinetements` (`appoinetement_id`, `service_name`, `doctor_name`, `appointement_time`, `admin_id`, `patient_id`) VALUES
(1, 'General Checkup', 'Dr. john sam', '2024-04-30', 0, 0),
(2, 'Cardiology', 'Dr. Rajesh Patel', '2024-04-27', 0, 0),
(3, 'Dental', 'Dr. Daniel Rodriguez', '2024-04-30', 0, 0),
(4, 'Neurology', 'Dr. john sam', '2024-04-30', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `user_password` varchar(25) DEFAULT NULL,
  `registration_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin_id` int DEFAULT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `matricule`, `fullname`, `email`, `phone`, `user_password`, `registration_date`, `admin_id`) VALUES
(13, '8572892475892', 'mehdi kcr', 'mehdiKcr@gmail.com', '4958294528', '$2y$10$GZhAzfqh04GXetBVyR', '2024-04-26 10:12:06', NULL),
(20, '53485289991', 'sadoki ali', 'aliSadoki@gmail.com', '948528784', '$2y$10$MHN/oMpOTF691u1dkt', '2024-04-26 13:42:27', NULL),
(3, '47584792', 'Meriem Soubih', 'meriem@gmail.com', '24589278', '$2y$10$PUd2GngwPB36vQQBh4', '2024-04-21 22:33:49', NULL),
(4, '8478529', 'loula kawther', 'kawther@gmail.com', '9809569392', '$2y$10$3yGHPcmo4WvFz7Ysvx', '2024-04-22 09:53:05', NULL),
(18, '717637138', 'samir sbihi', 'samir@gmail.com', '0873267', '$2y$10$Fnf4FNu/XUzLsKVZqf', '2024-04-26 11:00:40', NULL),
(21, '842678171', 'Hamoni Bilal', 'bilalHamoni02@gmail.com', '0777889092', '$2y$10$1V.n6X9lzy16MBqbEF', '2024-04-26 14:52:37', NULL),
(9, '4598729485', 'Mansour Karima', 'karim40@gamil.com', '485798381', '$2y$10$3EAQ.f0fOm2yAnuj.N', '2024-04-26 14:11:33', NULL),
(19, '32006640', 'Nadour Moustafa', 'moustafanadour@gmail.com', '4958488894', '$2y$10$9hU7WShSjDtfvnWeGN', '2024-04-26 11:15:23', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
