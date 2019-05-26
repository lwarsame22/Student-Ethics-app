-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 10:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps`
--

CREATE TABLE `apps` (
  `app_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `app_title` varchar(50) NOT NULL,
  `app_unit` varchar(20) NOT NULL,
  `app_file` varchar(50) NOT NULL,
  `app_date` date NOT NULL,
  `app_status` int(11) NOT NULL,
  `app_others` int(11) NOT NULL,
  `assigned_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apps`
--

INSERT INTO `apps` (`app_id`, `student_id`, `app_title`, `app_unit`, `app_file`, `app_date`, `app_status`, `app_others`, `assigned_date`) VALUES
(14, 1, 'First Test 1', '123', 'upload/2017CLCNote200.docx', '2019-04-13', 4, 0, '2019-04-13'),
(15, 1, 'First Test 2', '1234', 'upload/BAHAWALNAGAR.docx', '2019-04-13', 3, 0, '2019-04-13'),
(16, 9999, 'Second Test 1', '123', 'upload/study leave rules.pdf', '2019-04-13', 3, 0, '2019-04-13'),
(17, 9999, 'Second Test 2', '1234', 'upload/PHDAllownce.pdf', '2019-04-13', 2, 0, '2019-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `app_status`
--

CREATE TABLE `app_status` (
  `status_id` int(11) NOT NULL,
  `status_text` varchar(15) NOT NULL,
  `status_others` varchar(20) NOT NULL,
  `status_remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_status`
--

INSERT INTO `app_status` (`status_id`, `status_text`, `status_others`, `status_remarks`) VALUES
(1, 'Applied', '', ''),
(2, 'Assigned', '', ''),
(3, '1st Review', '', ''),
(4, '2nd Review', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `app_transactions`
--

CREATE TABLE `app_transactions` (
  `t_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `eoa_review` text NOT NULL,
  `assigned_date` date NOT NULL,
  `review_date` date NOT NULL,
  `t_others` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_transactions`
--

INSERT INTO `app_transactions` (`t_id`, `user_id`, `app_id`, `eoa_review`, `assigned_date`, `review_date`, `t_others`) VALUES
(21, 999966, 14, 'ok Done', '2019-04-13', '2019-04-13', ''),
(22, 1, 14, 'ali review first test app', '2019-04-13', '2019-04-13', ''),
(23, 999966, 16, 'test Second ok...', '2019-04-13', '2019-04-13', ''),
(24, 9999, 16, 'Pending', '2019-04-13', '0000-00-00', ''),
(25, 9999, 15, 'Pending', '2019-04-13', '0000-00-00', ''),
(26, 1, 15, 'ali reviewd...', '2019-04-13', '2019-04-13', ''),
(27, 9999, 17, 'Pending', '2019-04-13', '0000-00-00', ''),
(28, 1, 17, 'Pending', '2019-04-13', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(20) NOT NULL,
  `user_fname` varchar(30) NOT NULL,
  `user_pname` varchar(30) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `user_fname`, `user_pname`, `user_email`, `user_pass`, `user_type`, `user_status`, `user_remarks`) VALUES
('9999324', 'Ahmad', 'Ahmad', 'asd@rgu.ac.uk', '123', 'student', 0, ''),
('1', 'ali', 'test', 'test@rgu.ac.uk', '123', 'student', 1, ''),
('9999', 'uyuiy', 'yuiyi', 'tyu@rgu.ac.uk', '123', 'student', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `user_fname` varchar(30) NOT NULL,
  `user_pname` varchar(30) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `user_status` int(11) NOT NULL,
  `user_remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_pname`, `user_email`, `user_pass`, `user_type`, `user_status`, `user_remarks`) VALUES
('123123', 'test', 'ali', 'admin@rgu.ac.uk', '123', 'admin', 0, ''),
('999966', 'Ahmad', 'Ahmad', 'eao1@rgu.ac.uk', '123', 'staff', 1, ''),
('1', 'ali', 'test', 'eao2@rgu.ac.uk', '123', 'staff', 1, ''),
('9999', 'uyuiy', 'yuiyi', 'eao3@rgu.ac.uk', '123', 'staff', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps`
--
ALTER TABLE `apps`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `app_status`
--
ALTER TABLE `app_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `app_transactions`
--
ALTER TABLE `app_transactions`
  ADD UNIQUE KEY `ID` (`t_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_id` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps`
--
ALTER TABLE `apps`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `app_status`
--
ALTER TABLE `app_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `app_transactions`
--
ALTER TABLE `app_transactions`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
