-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2021 at 08:18 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eventmanagement`
--
CREATE DATABASE IF NOT EXISTS `eventmanagement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eventmanagement`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `clogin`
--

CREATE TABLE IF NOT EXISTS `clogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clogin`
--

INSERT INTO `clogin` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'sjcet', 'sjcet', 'institution'),
(2, 'sree', 'sree', 'student'),
(3, 'admin', 'admin', 'admin'),
(4, 'ece', 'ece', 'department');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `head` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cusername` varchar(30) NOT NULL,
  `institution` varchar(50) NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `name`, `head`, `contact`, `username`, `password`, `cusername`, `institution`) VALUES
(1, 'ECE', 'Rajan', 8676755, 'ece', 'ece', 'stcet', 'stcet');

-- --------------------------------------------------------

--
-- Table structure for table `eventphoto`
--

CREATE TABLE IF NOT EXISTS `eventphoto` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `evid` int(11) NOT NULL,
  `photo` varchar(40) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `evid` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cdate` date NOT NULL,
  `grants` int(11) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `depname` varchar(30) NOT NULL,
  `dusername` varchar(30) NOT NULL,
  `instname` varchar(30) NOT NULL,
  `instusername` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `upload` varchar(30) NOT NULL,
  PRIMARY KEY (`evid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evid`, `event`, `name`, `cdate`, `grants`, `venue`, `depname`, `dusername`, `instname`, `instusername`, `status`, `upload`) VALUES
(1, 'techfest', ' robowar', '2018-05-09', 2000, ' chengannur', ' ece', ' ece', 'stcet', 'stcet', 'accepted', 'cute.jpg.jpg'),
(6, ' techfest', ' quiz', '2018-05-08', 1000, ' chengannur', ' ece', ' ece', 'stcet', 'stcet', 'pending', 'cute.jpg.jpg'),
(7, ' techfest', ' circuit debugging', '2018-05-03', 2000, ' kochi', ' ece', ' ece', 'stcet', 'stcet', 'accepted', 'cute.jpg.jpg'),
(8, ' techfest', ' fast wiring', '2018-05-03', 3000, ' kochi', ' ece', ' ece', 'stcet', 'stcet', 'rejected', 'cute.jpg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instreg`
--

CREATE TABLE IF NOT EXISTS `instreg` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `institution` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `principal` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `university` varchar(40) NOT NULL,
  `naac` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `instreg`
--

INSERT INTO `instreg` (`iid`, `institution`, `address`, `contact`, `principal`, `district`, `state`, `university`, `naac`, `username`, `password`, `status`) VALUES
(1, 'stcet', 'kozhuvaloor', 522256, 'simon', 'aleppy', 'kerala', 'kerala', 'C', 'stcet', 'stcet', 'approve'),
(2, 'sjcet', ' tvm', 522256, 'rajan', 'tvm', 'kerala', 'kerala', 'B', 'sjcet', 'sjcet', 'disapprove');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE IF NOT EXISTS `scholarship` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `lastdate` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scid`, `name`, `lastdate`, `amount`, `description`, `status`) VALUES
(1, 'merit', '2018-05-10', 40000, 'tutionfee', 'open'),
(2, 'sports', '2018-05-16', 20000, 'edushfsygfsttg', 'close');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(30) NOT NULL,
  `scholarship` varchar(30) NOT NULL,
  `account` int(11) NOT NULL,
  `upload` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stid`, `student`, `scholarship`, `account`, `upload`, `status`) VALUES
(1, ' sree', ' merit', 252858, 'cute.jpg.jpg', 'approve'),
(2, 'divya', ' merit', 6555353, 'cute.jpg.jpg', 'disapprove');

-- --------------------------------------------------------

--
-- Table structure for table `studentreg`
--

CREATE TABLE IF NOT EXISTS `studentreg` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `college` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `studentreg`
--

INSERT INTO `studentreg` (`sid`, `student`, `age`, `contact`, `branch`, `college`, `state`, `username`, `password`) VALUES
(1, 'divya', 23, 56325668, 'ece', 'stcet', 'kerala', 'divya', 'divya'),
(2, 'sree', 23, 56325668, 'ece', 'sjcet', 'kerala', 'sree', 'sree');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
