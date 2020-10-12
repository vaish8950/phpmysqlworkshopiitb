-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 05:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `certi`
--

CREATE TABLE `certi` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `php` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `percent` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certi`
--

INSERT INTO `certi` (`id`, `email`, `php`, `mysql`, `html`, `percent`) VALUES
(7, 'nikbhosale123@gmail.com', 85, 22, 11, 39.333333333333),
(10, 'bhosalevaina18it@student.mes.ac.in', 52, 90, 95, 79),
(12, 'frkrmjntbjmkmb@jjf.com', 57, 89, 89, 78.333333333333),
(13, 'vaishbhosakw2njjd@mckmdk.com', 85, 90, 90, 88.333333333333);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `mobile`, `password`, `cpassword`) VALUES
('vaishnavi', 'bhosalevaina18it@student.mes.ac.in', '4848181184', '$2y$10$GGeTwqQY3g1yWkma7mD/d.Dy.hdOHVZgH0Q0skjv3yXbxLnIKSGwi', '$2y$10$9HlJphSgLKLjgf50v/LMb.biSH2I.9riDovRJlv7kd81ENm/pEKpe'),
('vaishnavi', 'dcdvfvfv@gmail.com', '4848181184', '$2y$10$I8RvTgGxU8AeSFOxcnFmlucsqlqKluglz8P4witnfVEEiIw/VUwrG', '$2y$10$3e6Qsmy6LRaN9bKju7HoSOufNxreyM23SQlmuc7pjD7A/YZQqYONi'),
('vaishnavi', 'nikbhosale123@gmail.com', '2845151851', '$2y$10$WUcLYJFsrRSvzcHKAAJzOuc9x6abLUmq/zBhJrH9NuI95L2vsyCXi', '$2y$10$N1TOEHl8MaOEt/uygeTqROd5a36IP6awueMtpyYPm1HcvnPDmToem'),
('billy', 'vaish@gmail.com', '2845151851', '$2y$10$vHOVdibE0lH9XWW78l76tuoyGlEAclWyROLt8JJzJUkIoHfINku22', '$2y$10$KIzcJ7A7D9iu0y29u/ydG.LQzw2cU3onSNTuq4zb7EmtwlAEkPw0q'),
('hello alex', 'vaishbhosale321@gmail.com', '978545222', '$2y$10$WbrRoYdxsISm8qyGISrHgOM5cCAzFDbFuTaOGIvF9sxfIbyqjmDQi', '$2y$10$BIGdQSSU/tkLwooSl.9Kg.gNb9KUrv2ZbJ3MV2wm3hToHOhlMWQmy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certi`
--
ALTER TABLE `certi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certi`
--
ALTER TABLE `certi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
