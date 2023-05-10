-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 05:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionnaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'Shivam Vishwakarma', 'Shivam', 'a', 'shivam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `a_option`
--

CREATE TABLE `a_option` (
  `id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `q_option` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `a_option`
--

INSERT INTO `a_option` (`id`, `q_id`, `is_correct`, `q_option`) VALUES
(1, 1, 0, 'PHP is an open-source programming language'),
(2, 1, 0, 'PHP is used to develop dynamic and interactive websites'),
(3, 1, 0, 'PHP is a server-side scripting language'),
(4, 1, 1, 'All of the mentioned'),
(5, 2, 0, '$_BOTH'),
(6, 2, 0, '$REQUEST'),
(7, 2, 1, '$_REQUEST'),
(8, 2, 0, '$_BOTH'),
(9, 3, 0, 'functionName(parameters) {function body}'),
(10, 3, 0, 'function {function body}'),
(11, 3, 1, 'function functionName(parameters) {function body}'),
(12, 3, 0, 'data type functionName(parameters) {function body}'),
(13, 4, 0, '$3hello'),
(14, 4, 1, '$_hello'),
(15, 4, 0, '$this'),
(16, 4, 0, '$5_Hello'),
(17, 5, 0, 'PHP Database Orientation'),
(18, 5, 0, 'PHP Data Orientation'),
(19, 5, 1, 'PHP Data Object'),
(20, 5, 0, 'PHP Database Object');

-- --------------------------------------------------------

--
-- Table structure for table `a_question`
--

CREATE TABLE `a_question` (
  `q_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `a_question`
--

INSERT INTO `a_question` (`q_id`, `question`, `added_on`) VALUES
(1, 'What is PHP?', '2023-03-13 05:09:44'),
(2, 'Which variable is used to collect form data sent with both the GET and POST methods?', '2023-03-13 05:11:09'),
(3, 'How to define a function in PHP?', '2023-03-13 05:12:02'),
(4, 'Which is the right way of declaring a variable in PHP?', '2023-03-13 05:12:55'),
(5, 'What does PDO stand for?', '2023-03-13 05:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `a_user`
--

CREATE TABLE `a_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` int(50) NOT NULL,
  `status` int(11) NOT NULL,
  `score_card` int(50) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `a_user`
--

INSERT INTO `a_user` (`id`, `name`, `email`, `password`, `mobile`, `status`, `score_card`, `added_on`) VALUES
(1, 'Satyendra', 'satyendra@gmail.com', '$2y$10$7K8r9oPN4zOqABTXFChiAu5.I/n1AabQfX7mcW0E1XhYc76bxRnHi', 1234567890, 1, 0, '2023-03-13 05:06:56'),
(2, 'Alok', 'alok@alok', '$2y$10$v3ZOCXQTDAkuXfilMSeZ8.z8SIWRAu68pjCugo7j.XJrN7Fd7Ouni', 2134560987, 1, 5, '2023-03-13 05:07:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_option`
--
ALTER TABLE `a_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_question`
--
ALTER TABLE `a_question`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `a_user`
--
ALTER TABLE `a_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_option`
--
ALTER TABLE `a_option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `a_question`
--
ALTER TABLE `a_question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `a_user`
--
ALTER TABLE `a_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
