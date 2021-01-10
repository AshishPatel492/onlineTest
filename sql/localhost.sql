-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2021 at 05:16 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinetestdb`
--
CREATE DATABASE `onlinetestdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `onlinetestdb`;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `questionid` int(10) NOT NULL AUTO_INCREMENT,
  `questions` varchar(255) NOT NULL,
  `optionA` varchar(100) DEFAULT NULL,
  `optionB` varchar(100) DEFAULT NULL,
  `optionC` varchar(100) DEFAULT NULL,
  `optionD` varchar(100) DEFAULT NULL,
  `ans` enum('A','B','C','D') DEFAULT NULL,
  `subject` varchar(40) NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `questions`, `optionA`, `optionB`, `optionC`, `optionD`, `ans`, `subject`) VALUES
(1, 'what is variable symbole in php', '@@', '!!', '#', '$', 'D', 'GK for Programer'),
(2, 'how to define function in js?', 'function function_name()', 'function function_name();', 'function();', 'function;', 'A', 'GK for Programer'),
(3, 'what is variable declair in c language?', 'directly variable name', '@@', '$$', '!', 'A', 'GK for Programer'),
(4, 'how to set css property?', 'property name=value', 'value:property name', 'value=property name', 'property name:value;', 'D', 'GK for Programer'),
(5, 'what is the most powerfull language in 2017?', 'C language', 'C++', 'Javascript', 'Android', 'C', 'GK for Programer'),
(6, 'Google Declair what is new language for android?', 'java', 'xml', 'Kotlin', 'python', 'C', 'GK for Programer'),
(7, 'what is use laguage for macine lerning?', 'C Language', 'java', 'android', 'python', 'D', 'GK for Programer'),
(11, 'what is language most important for beginners?', 'c++', 'java', 'c', 'android', 'C', 'GK for Programer'),
(12, 'Es6 variable declairation?', 'var', '$', 'let', 'nothing', 'C', 'GK for Programer'),
(15, 'how to define object in javaScript?', 'let employee={}', 'let employee{}', 'let employee', 'let employee[]', 'A', 'GK for Programer');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `testid` int(10) NOT NULL AUTO_INCREMENT,
  `subject` varchar(40) NOT NULL,
  PRIMARY KEY (`testid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `subject`) VALUES
(23, 'GK for Programer');

-- --------------------------------------------------------

--
-- Table structure for table `test_question`
--

CREATE TABLE IF NOT EXISTS `test_question` (
  `testid` int(5) DEFAULT NULL,
  `questionid` int(5) DEFAULT NULL,
  KEY `testid` (`testid`),
  KEY `questionid` (`questionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_question`
--

INSERT INTO `test_question` (`testid`, `questionid`) VALUES
(23, 1),
(23, 2),
(23, 3),
(23, 4),
(23, 5),
(23, 6),
(23, 7),
(23, 11),
(23, 12),
(23, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `birthdate` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `birthdate`, `gender`, `username`, `password`, `image`) VALUES
('Pinku', 'Patel', '22-01-1993', 'female', 'patelpinku523@gmail.com', 'ashish', './userimage/IMG_20151115_133047.jpg'),
('Ashish', 'Patel', '26-06-1992', 'male', 'a.v.patel492@gmail.com', 'ashish', './userimage/HKE32.jpeg'),
('Amrita', 'Rao', '28-12-2020', 'female', 'amritarao222@gmail.com', 'amrita', './userimage/amrita.jpg'),
('ashish', 'patel', '26/06/1992', 'male', 'ashish', 'pinku', './userimage/admin.jpg'),
('patel', 'mahesh', '05-01-2021', 'male', 'pavarmahesh123@gmail.com', 'mahesh', './userimage/IMG_20160302_134507.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `test_question`
--
ALTER TABLE `test_question`
  ADD CONSTRAINT `test_question_ibfk_1` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`),
  ADD CONSTRAINT `test_question_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `question` (`questionid`);
