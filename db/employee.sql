-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2017 at 07:28 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) NOT NULL,
  `emp_father_name` varchar(255) NOT NULL,
  `emp_mother_name` varchar(255) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`id`, `emp_name`, `emp_father_name`, `emp_mother_name`, `emp_email`, `date_created`) VALUES
(1, 'Amit', 'T N ', 'POONAM', 'amit.pandey@thepsi.com', '2017-06-07 10:09:55'),
(2, 'Deepak', 'T N ', 'POONAM', 'deepak.pandey@gmail.com', '2017-06-07 11:00:05'),
(3, 'Arun ', 'Arun Sharma', 'Mother Name', 'arun.sharma@gmail.com', '2017-06-07 11:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_office`
--

CREATE TABLE IF NOT EXISTS `employee_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_designation` varchar(255) NOT NULL,
  `emp_department` varchar(255) NOT NULL,
  `emp_role` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee_office`
--

INSERT INTO `employee_office` (`id`, `emp_id`, `emp_designation`, `emp_department`, `emp_role`, `date_created`) VALUES
(1, 1, 'PHP', 'WEB DEV', 'Software Developer', '2017-06-07 10:09:55'),
(2, 2, 'ABC', 'DEF', 'GHI', '2017-06-07 11:00:05'),
(3, 3, 'PHP', 'PHP', 'DEV', '2017-06-07 11:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE IF NOT EXISTS `employee_salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `da` varchar(255) NOT NULL,
  `hra` varchar(255) NOT NULL,
  `gross_dalary` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`id`, `emp_id`, `basic_salary`, `da`, `hra`, `gross_dalary`, `date_created`) VALUES
(1, 1, '25000', '500', '500', 26000, '2017-06-07 10:09:55'),
(2, 2, '32500', '250', '250', 33000, '2017-06-07 11:00:05'),
(3, 3, '25000', '1000', '1000', 27000, '2017-06-07 11:00:05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
