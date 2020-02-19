-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2019 at 05:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `freelancer`
--
CREATE DATABASE IF NOT EXISTS `freelancer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `freelancer`;

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `job_title` varchar(70) NOT NULL,
  `category` varchar(70) NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `freelancer_name` varchar(30) NOT NULL,
  `freelancer_email` varchar(30) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(70) NOT NULL,
  `employer` varchar(30) NOT NULL,
  `emp_email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`job_title`, `category`, `amount`, `description`, `freelancer_name`, `freelancer_email`, `id`, `company_name`, `employer`, `emp_email`, `status`) VALUES
('Staff Record Management System', 'Web Project', 20000, 'This is a web project proposed to be made for the automated staff record management system in our reputable company...', 'Alamal-yekeen', 'ridwan@gmail.com', 2, 'Impact ICT', 'Tunde', 'ridwan@gmail.com', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `message` text NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employer_profile`
--

CREATE TABLE IF NOT EXISTS `employer_profile` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `surname` varchar(25) NOT NULL,
  `othername` varchar(30) NOT NULL,
  `company_name` varchar(40) NOT NULL,
  `Description` varchar(70) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employer_profile`
--

INSERT INTO `employer_profile` (`id`, `surname`, `othername`, `company_name`, `Description`, `Position`, `email`, `photo`) VALUES
(2, 'Tunde', 'Tunde', 'Impact ICT', 'We are software company that deals with both system software developme', 'Chief Programmer', 'ridwangmail.com', 'empay4xix8p_1547830979385.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `freelancer_profile`
--

CREATE TABLE IF NOT EXISTS `freelancer_profile` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `photo` varchar(80) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `othername` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `AOE` varchar(100) NOT NULL,
  `YOE` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `freelancer_profile`
--

INSERT INTO `freelancer_profile` (`id`, `photo`, `surname`, `othername`, `email`, `AOE`, `YOE`, `description`) VALUES
(1, 'freeit3tsd6v_1547830979385.jpeg', 'Alamal-yekeen', 'Ridwan Olatilewa', 'ridwan@gmail.com', 'Web Design, Graphic Design', 'Ten Years', 'I am a Graduate of computer science with the vast knowledge in both software and hardware. i specialize in programming and i can code using languages such as HTML, CSS, JavaScript, PHP, MySql. etc.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL,
  `Job_title` varchar(70) NOT NULL,
  `category` varchar(40) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE IF NOT EXISTS `post_job` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(25) NOT NULL,
  `employer` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `job_title` varchar(70) NOT NULL,
  `category` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`id`, `company_name`, `employer`, `email`, `job_title`, `category`, `amount`, `description`) VALUES
(1, 'Impact ICT', 'Tunde', 'ridwan00965@gmail.com', 'Staff Record Management System', 'Web Project', 20000, 'This is a web project proposed to be made for the automated staff record management system in our reputable company...');

-- --------------------------------------------------------

--
-- Table structure for table `product_advert`
--

CREATE TABLE IF NOT EXISTS `product_advert` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Product_id` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Product_name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `High_price` int(10) NOT NULL,
  `Normal_price` int(10) NOT NULL,
  `Description` text NOT NULL,
  `time` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_advert`
--

INSERT INTO `product_advert` (`id`, `Product_id`, `Email`, `Product_name`, `product_type`, `High_price`, `Normal_price`, `Description`, `time`) VALUES
(1, '44tsrv', 'ridwan@gmail.com', 'Big Wing Sneakers (Navy)', 'men', 7500, 7000, 'This is a wonderful shoe you will love, it if for both young and old. you can''t afford to miss this...', 'Sun 24-Mar-2019 11:31:20 pm'),
(2, 'drv5csqx', 'ridwan@gmail.com', 'Party Men''s Brazers', 'men', 2500, 2000, 'This is a wonderful brazers you can''t afford to miss, am very sure you will love it.', 'Mon 25-Mar-2019 01:04:22 am');

-- --------------------------------------------------------

--
-- Table structure for table `product_picture`
--

CREATE TABLE IF NOT EXISTS `product_picture` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(80) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product_picture`
--

INSERT INTO `product_picture` (`id`, `pic_name`, `product_id`, `email`) VALUES
(1, 'pic44tsrv_d1.jpg', '44tsrv', 'ridwan@gmail.com'),
(2, 'picbcsfz2_d2.jpg', '44tsrv', 'ridwan@gmail.com'),
(3, 'picbcsfz2_d3.jpg', '44tsrv', 'ridwan@gmail.com'),
(4, 'pic1drv5csqx_m8.jpg', 'drv5csqx', 'ridwan@gmail.com'),
(5, 'pic2f5ipqib4_m8.jpg', 'drv5csqx', 'ridwan@gmail.com'),
(6, 'pic3hj6858vb_m8.jpg', 'drv5csqx', 'ridwan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `date`) VALUES
(1, 'Ridwan', 'Yekeen', 'ridwan@gmail.com', 'ridwan', 'Sat 23-Mar-2019 11:28:25 am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
