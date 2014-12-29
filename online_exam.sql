-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2013 at 08:40 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE IF NOT EXISTS `question_answers` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `correct` enum('option_a','option_b','option_c','option_d') NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct`) VALUES
(1, 'Humaoid robot was first developed in which year?', '1982', '1961', '1975', '1989', 'option_c'),
(2, 'The perceptual interface between a robot and the environment is called what?', 'Interface', 'Sensor', 'Linker', 'Detector', 'option_b'),
(3, 'What are the two types of sensors used in robotics?', 'Active and Proactive sensors', 'Active and Passive sensors', 'Active and Inactive sensors', 'Preactive and Postactive sensors', 'option_b'),
(4, 'The study of communication between human and machine is called what?', 'Interaction', 'Information', 'Manipulation', 'Cybernetics', 'option_d'),
(5, 'The term, ''Artifitial Intelligent'' was coined in 1956 by who?', 'John McCarthy', 'Nobert Wienner', 'Alan Turing', 'Kurt Godel', 'option_a'),
(6, 'A set of programs that manipulate encoded knowledge to solve problems in a specialized domain is called what', 'Engineering', 'Expert System', 'Database System', 'Natural System', 'option_b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
