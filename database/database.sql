-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 07:34 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tth`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `no` int(250) NOT NULL,
  `q1` varchar(250) NOT NULL,
  `q2` varchar(250) NOT NULL,
  `q3` varchar(250) NOT NULL,
  `q4` varchar(250) NOT NULL,
  `q5` varchar(250) NOT NULL,
  `q6` varchar(250) NOT NULL,
  `q7` varchar(250) NOT NULL,
  `q8` varchar(250) NOT NULL,
  `q9` varchar(250) NOT NULL,
  `q10` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`no`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, '23914', 'mohammed rashid t', 'facebook', 'win', 'the key', 'milen', 'milen+3.0', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `no` int(250) NOT NULL,
  `name1` varchar(250) NOT NULL,
  `name2` varchar(250) NOT NULL,
  `name3` varchar(250) NOT NULL,
  `phno` varchar(250) NOT NULL,
  `bach` varchar(250) NOT NULL,
  `point` int(250) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `lasttime` datetime NOT NULL,
  `submit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`no`, `name1`, `name2`, `name3`, `phno`, `bach`, `point`, `pass`, `lasttime`, `submit`) VALUES
(2, 'abdul basith a', '', '', '09544752154', 'MEAEC', 0, '3JFOR', '2019-03-04 10:43:32', 'a:16:{i:0;s:1:\"D\";i:1;s:1:\"D\";i:2;s:1:\"D\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:0:\"\";i:13;s:0:\"\";i:14;s:0:\"\";i:15;s:1:\"C\";}'),
(3, 'abdul basith a', '', '', '8544752154', 'fcdfdsfs', 0, 'pv2ri', '2019-03-04 10:49:33', 'a:3:{i:0;s:1:\"B\";i:1;s:1:\"C\";i:2;s:1:\"D\";}'),
(4, 'badeeh', '', '', '9747950577', 'csdsd', 0, 'bJ7Cj', '2019-03-04 16:09:44', 'a:16:{i:0;s:1:\"A\";i:1;s:1:\"A\";i:2;s:1:\"A\";i:3;s:1:\"A\";i:4;s:1:\"A\";i:5;s:1:\"B\";i:6;s:1:\"C\";i:7;s:1:\"D\";i:8;s:1:\"D\";i:9;s:1:\"D\";i:10;s:1:\"D\";i:11;s:1:\"D\";i:12;s:1:\"D\";i:13;s:1:\"D\";i:14;s:1:\"D\";i:15;s:1:\"A\";}'),
(5, 'abdul basith a', '', '', '09544252154', 'sdsdds', 0, '9ICFo', '2019-03-04 16:27:51', 'a:16:{i:0;s:1:\"A\";i:1;s:1:\"B\";i:2;s:1:\"C\";i:3;s:1:\"C\";i:4;s:1:\"C\";i:5;s:1:\"C\";i:6;s:1:\"A\";i:7;s:1:\"C\";i:8;s:1:\"D\";i:9;s:1:\"B\";i:10;s:1:\"D\";i:11;s:1:\"A\";i:12;s:1:\"A\";i:13;s:1:\"A\";i:14;s:1:\"A\";i:15;s:1:\"B\";}'),
(6, 'correct value', '', '', '9502752154', 'daasas', 0, 'PPr4C', '2019-03-04 16:31:45', 'a:16:{i:0;s:1:\"A\";i:1;s:1:\"B\";i:2;s:1:\"C\";i:3;s:1:\"C\";i:4;s:1:\"C\";i:5;s:1:\"C\";i:6;s:1:\"A\";i:7;s:1:\"C\";i:8;s:1:\"D\";i:9;s:1:\"B\";i:10;s:1:\"D\";i:11;s:1:\"D\";i:12;s:1:\"A\";i:13;s:1:\"A\";i:14;s:1:\"A\";i:15;s:1:\"B\";}'),
(7, 'shabz', '', '', '8891597308', 'S4-CS1', 0, '3bEDz', '2019-03-13 10:06:57', 'a:16:{i:0;s:1:\"A\";i:1;s:1:\"C\";i:2;s:1:\"D\";i:3;s:1:\"B\";i:4;s:1:\"C\";i:5;s:1:\"A\";i:6;s:1:\"D\";i:7;s:1:\"C\";i:8;s:1:\"B\";i:9;s:1:\"A\";i:10;s:1:\"B\";i:11;s:1:\"C\";i:12;s:1:\"D\";i:13;s:1:\"C\";i:14;s:1:\"A\";i:15;s:1:\"D\";}'),
(8, 'abdul basith a', '', '', '09544752153', 'S4-CS1', 0, 'O8W7l', '2019-10-06 18:54:24', 'a:16:{i:0;s:1:\"C\";i:1;s:1:\"D\";i:2;s:1:\"A\";i:3;s:1:\"C\";i:4;s:1:\"D\";i:5;s:1:\"B\";i:6;s:1:\"C\";i:7;s:1:\"D\";i:8;s:1:\"D\";i:9;s:1:\"B\";i:10;s:1:\"C\";i:11;s:1:\"D\";i:12;s:1:\"B\";i:13;s:1:\"D\";i:14;s:1:\"C\";i:15;s:1:\"D\";}'),
(9, 'sd', '', '', '09544751154', 'sd', 0, 'FeYNF', '2020-05-15 22:43:12', 'a:4:{i:0;s:1:\"B\";i:1;s:1:\"B\";i:2;s:1:\"A\";i:3;s:1:\"C\";}');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `phno` varchar(250) NOT NULL,
  `t1` varchar(250) NOT NULL,
  `t2` varchar(250) NOT NULL,
  `t3` varchar(250) NOT NULL,
  `t4` varchar(250) NOT NULL,
  `t5` varchar(250) NOT NULL,
  `t6` varchar(250) NOT NULL,
  `t7` varchar(250) NOT NULL,
  `t8` varchar(250) NOT NULL,
  `t9` varchar(250) NOT NULL,
  `t10` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`phno`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `t7`, `t8`, `t9`, `t10`) VALUES
('9544755215', '0:0:22', '0:0:49', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `time`) VALUES
(1, '04/03/2019 3:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `no` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `no` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
