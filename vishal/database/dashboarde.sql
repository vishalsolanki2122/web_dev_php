-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboarde`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_details`
--

CREATE TABLE `my_details` (
  `about_me` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my_details`
--

INSERT INTO `my_details` (`about_me`) VALUES
('NAME : VISHAL SOLANKI\r\n\r\nMachine learning (ML) is a field of study in artificial intelligence concerned with the development and study of statistical algorithms that can effectively generalize and thus perform tasks without explicit instructions.[1] Recently, generative artificial neural networks have been able to surpass many previous approaches in performance.[2][3] Machine learning approaches have been applied to large language models, computer vision, speech recognition, email filtering, agriculture and medicine, where it is too costly to develop algorithms to perform the needed tasks.[4][5]\r\n\r\nCryptography, or cryptology (from Ancient Greek: κρυπτός, romanized: kryptós \"hidden, secret\"; and γράφειν graphein, \"to write\", or -λογία -logia, \"study\", respectively[1]), is the practice and study of techniques for secure communication in the presence of adversarial behavior.[2] More generally, cryptography is about constructing and analyzing protocols that prevent third parties or the public from reading private messages.[3] Modern cryptography exists at the intersection of the disciplines of mathematics, computer science, information security, electrical engineering, digital signal processing, physics, and others.[4] Core concepts related to information security (data confidentiality, data integrity, authentication, and non-repudiation) are also central to cryptography.[5] Practical applications of cryptography include electronic commerce, chip-based payment cards, digital currencies, computer passwords, and military communications.'),
('NAME : VISHAL SOLANKI\r\n\r\nMachine learning (ML) is a field of study in artificial intelligence concerned with the development and study of statistical algorithms that can effectively generalize and thus perform tasks without explicit instructions.[1] Recently, generative artificial neural networks have been able to surpass many previous approaches in performance.[2][3] Machine learning approaches have been applied to large language models, computer vision, speech recognition, email filtering, agriculture and medicine, where it is too costly to develop algorithms to perform the needed tasks.[4][5]\r\n\r\nCryptography, or cryptology (from Ancient Greek: κρυπτός, romanized: kryptós \"hidden, secret\"; and γράφειν graphein, \"to write\", or -λογία -logia, \"study\", respectively[1]), is the practice and study of techniques for secure communication in the presence of adversarial behavior.[2] More generally, cryptography is about constructing and analyzing protocols that prevent third parties or the public from reading private messages.[3] Modern cryptography exists at the intersection of the disciplines of mathematics, computer science, information security, electrical engineering, digital signal processing, physics, and others.[4] Core concepts related to information security (data confidentiality, data integrity, authentication, and non-repudiation) are also central to cryptography.[5] Practical applications of cryptography include electronic commerce, chip-based payment cards, digital currencies, computer passwords, and military communications.');

-- --------------------------------------------------------

--
-- Table structure for table `skill_set`
--

CREATE TABLE `skill_set` (
  `skill_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill_set`
--

INSERT INTO `skill_set` (`skill_name`) VALUES
('HTML'),
('CSS'),
('JAVASCRIPT'),
('BOOTSTREP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
