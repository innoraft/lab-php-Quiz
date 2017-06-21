-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2017 at 12:07 PM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(100) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_passhash` varchar(100) NOT NULL,
  `roll_id` int(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_passhash`, `roll_id`) VALUES
(1, 'Saheb', 'soumyaraha10@yahoo.in', '900150983cd24fb0d6963f7d28e17f72', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ans_given`
--

CREATE TABLE IF NOT EXISTS `ans_given` (
  `e_id` int(100) NOT NULL,
  `q_id` int(100) NOT NULL,
  `ans_given` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans_given`
--

INSERT INTO `ans_given` (`e_id`, `q_id`, `ans_given`) VALUES
(0, 10, 4),
(0, 10, 4),
(0, 11, 1),
(0, 12, 1),
(0, 10, 4),
(0, 10, 4),
(0, 11, 1),
(0, 12, 1),
(0, 10, 4),
(0, 11, 1),
(0, 12, 1),
(0, 10, 4),
(0, 11, 1),
(0, 12, 1),
(0, 10, 4),
(0, 11, 1),
(0, 12, 1),
(0, 10, 4),
(0, 11, 1),
(0, 12, 1),
(0, 11, 1),
(0, 12, 1),
(0, 12, 1),
(0, 11, 1),
(0, 10, 4),
(0, 16, 1),
(0, 18, 3),
(0, 42, 3),
(0, 43, 1),
(0, 19, 2),
(0, 17, 0),
(0, 44, 2),
(0, 10, 1),
(0, 18, 1),
(0, 44, 2),
(0, 10, 1),
(0, 18, 1),
(0, 44, 2),
(0, 10, 1),
(0, 18, 1),
(0, 15, 1),
(0, 44, 2),
(0, 10, 1),
(0, 18, 1),
(0, 15, 1),
(0, 42, 2),
(0, 32, 3),
(0, 44, 2),
(0, 10, 1),
(0, 18, 1),
(0, 15, 1),
(0, 42, 2),
(0, 32, 3),
(0, 44, 0),
(0, 44, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 12, 0),
(0, 19, 1),
(0, 13, 2),
(0, 45, 3),
(0, 16, 4),
(0, 42, 3),
(0, 11, 1),
(0, 12, 1),
(0, 32, 1),
(0, 18, 2),
(0, 15, 3),
(0, 19, 4),
(0, 12, 1),
(0, 11, 1),
(0, 17, 3),
(0, 33, 4),
(0, 13, 1),
(0, 11, 1),
(0, 12, 1),
(0, 32, 2),
(0, 45, 3),
(0, 19, 4),
(0, 18, 3),
(0, 11, 1),
(0, 12, 1),
(0, 17, 1),
(0, 15, 2),
(0, 33, 2),
(0, 43, 4),
(0, 19, 2),
(0, 18, 1),
(0, 10, 4),
(0, 11, 1),
(0, 71, 2),
(0, 12, 1),
(0, 71, 2),
(0, 12, 1),
(0, 11, 1),
(0, 71, 0),
(0, 12, 1),
(0, 11, 1),
(0, 71, 2),
(0, 12, 1),
(0, 12, 1),
(0, 71, 2),
(0, 11, 1),
(0, 17, 3),
(0, 13, 2),
(0, 15, 2),
(0, 16, 3),
(0, 32, 2),
(0, 44, 1),
(0, 72, 1),
(0, 12, 1),
(0, 71, 2),
(0, 11, 1),
(0, 12, 1),
(0, 71, 2),
(0, 11, 1),
(0, 11, 1),
(0, 71, 2),
(0, 71, 2),
(0, 12, 1),
(0, 71, 1),
(0, 12, 1),
(0, 11, 1),
(0, 12, 1),
(0, 32, 3),
(0, 18, 2),
(0, 15, 1),
(0, 44, 2),
(0, 19, 3),
(0, 11, 2),
(0, 12, 1),
(0, 71, 2),
(0, 11, 1),
(0, 12, 1),
(0, 71, 2),
(0, 71, 2),
(0, 12, 1),
(0, 13, 4),
(0, 45, 1),
(0, 72, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(1, 'php'),
(2, 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE IF NOT EXISTS `example` (
  `q` varchar(100) NOT NULL,
  `opt1` int(100) NOT NULL,
  `opt2` int(100) NOT NULL,
  `opt3` int(100) NOT NULL,
  `opt4` int(11) NOT NULL,
  `ca` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`q`, `opt1`, `opt2`, `opt3`, `opt4`, `ca`, `c_id`) VALUES
('how many players are needed in a cricket team?', 2, 9, 10, 11, 4, 2),
('how many players are needed in a cricket team?', 2, 9, 10, 11, 4, 2),
('Which of the following countries won the final of the triangular cricket series held in durban in fe', 0, 0, 0, 0, 3, 2),
('Â In which year did Milkha Singh win the first National title in the 400 m race?', 1955, 1956, 1957, 1958, 3, 2),
('When was Amateur Athletics Federation of India established?', 1945, 1946, 1958, 1941, 2, 2),
('Which of the following is a Manipuri version of Hockey?', 0, 0, 0, 0, 1, 2),
('Â In which Indian state did the game of Polo originate?', 0, 0, 0, 0, 4, 2),
('How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', 1, 2, 3, 4, 4, 2),
('India reached the final of the Davis Cup for the first time in...?', 1988, 1956, 1966, 1955, 3, 2),
('Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 0, 0, 0, 0, 1, 2),
('India won its first Olympic hockey gold in...?', 1928, 1932, 1936, 1948, 1, 2),
(' Who was the first Indian to win an individual medal in Olympics?', 0, 0, 0, 0, 4, 2),
('The Indian football team made its first appearance at Olympics in...?', 1936, 1958, 1948, 1942, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `exam_taken`
--

CREATE TABLE IF NOT EXISTS `exam_taken` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `score` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `exam_taken`
--

INSERT INTO `exam_taken` (`e_id`, `u_id`, `u_name`, `c_id`, `c_name`, `score`, `date`) VALUES
(1, 1, 'Saheb', 1, 'php', 2, '2017-05-12 09:54:15'),
(2, 1, 'Saheb', 2, 'sports', 0, '2017-05-15 19:14:54'),
(3, 1, 'Saheb', 2, 'sports', 0, '2017-05-15 19:14:54'),
(11, 1, 'Saheb', 1, 'php', 2, '2017-05-12 09:54:15'),
(12, 15, 'Sabir', 1, 'php', 2, '2017-05-12 09:54:15'),
(13, 1, 'Saheb', 1, 'php', 0, '2017-05-12 09:54:15'),
(14, 1, 'Saheb', 1, 'php', 0, '2017-05-12 09:54:15'),
(15, 1, 'Saheb', 1, 'php', 0, '2017-05-12 09:54:15'),
(16, 16, 'ayan', 1, 'php', 2, '2017-05-12 09:52:54'),
(18, 15, 'Sabir', 2, 'sports', 0, '2017-05-12 09:55:02'),
(19, 1, 'Saheb', 2, 'sports', 0, '2017-05-15 19:14:54'),
(20, 17, 'Dahesh', 2, 'sports', 1, '2017-05-12 09:52:44'),
(21, 15, 'Sabir', 2, 'sports', 0, '2017-05-12 09:55:02'),
(23, 18, 'sp', 2, 'Array', 5, '2017-05-12 11:29:36'),
(24, 1, 'Saheb', 2, 'Array', 0, '2017-05-15 19:14:54'),
(25, 14, 'rudra', 2, 'Array', 4, '2017-05-15 11:47:40'),
(26, 19, 'Srijeeta Ghosh', 2, 'Array', 6, '2017-05-15 11:50:17'),
(47, 22, 'sr', 2, 'Array', 5, '2017-05-16 08:49:38'),
(48, 23, 'a', 1, 'php', 2, '2017-05-16 08:54:10'),
(49, 23, 'a', 2, 'sports', 4, '2017-05-16 09:00:45'),
(50, 24, 'b', 1, 'php', 2, '2017-05-16 09:04:38'),
(53, 25, 'j', 1, 'php', 2, '2017-05-16 09:38:15'),
(54, 24, 'b', 2, 'sports', 4, '2017-05-16 10:37:57'),
(55, 25, 'j', 2, 'sports', 0, '2017-05-19 05:02:00'),
(56, 26, 'skr', 1, 'php', 2, '2017-05-16 15:35:13'),
(68, 25, 'j', 2, 'sports', 0, '2017-05-19 05:02:00'),
(69, 31, 'g', 1, 'php', 3, '2017-05-18 09:12:41'),
(70, 31, 'g', 2, 'sports', 0, '0000-00-00 00:00:00'),
(71, 26, 'skr', 2, 'sports', 0, '0000-00-00 00:00:00'),
(72, 25, 'j', 2, 'sports', 0, '0000-00-00 00:00:00'),
(73, 32, 'deep', 1, 'php', 3, '2017-05-19 05:06:31'),
(74, 33, 'raj', 1, 'php', 0, '0000-00-00 00:00:00'),
(75, 34, 'z', 1, 'php', 0, '0000-00-00 00:00:00'),
(76, 14, 'rudra', 1, 'php', 0, '0000-00-00 00:00:00'),
(77, 29, '', 2, 'sports', 0, '0000-00-00 00:00:00'),
(78, 29, '', 1, 'php', 0, '0000-00-00 00:00:00'),
(79, 0, '', 2, 'sports', 0, '0000-00-00 00:00:00'),
(80, 0, '', 1, 'php', 2, '2017-06-11 07:47:41'),
(82, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(83, 35, '', 2, 'sports', 0, '0000-00-00 00:00:00'),
(86, 36, '', 2, 'sports', 0, '0000-00-00 00:00:00'),
(88, 37, 'soo', 1, 'php', 2, '2017-06-11 06:10:02'),
(92, 40, 'didi', 2, 'sports', 7, '2017-06-11 06:34:52'),
(96, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(98, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(112, 57, 'bulu', 1, 'php', 2, '2017-06-11 10:30:32'),
(113, 58, 'cross', 1, 'php', 0, '0000-00-00 00:00:00'),
(114, 58, 'cross', 2, 'sports', 0, '0000-00-00 00:00:00'),
(115, 59, 'diana', 1, 'php', 2, '2017-06-12 05:39:52'),
(116, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(117, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(118, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(119, 59, 'diana', 0, '', 0, '0000-00-00 00:00:00'),
(120, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(121, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(122, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(123, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(124, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(125, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(126, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(127, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(128, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(129, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(130, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(131, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(132, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(133, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(134, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(135, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(136, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(137, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(138, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(139, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(140, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(141, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(142, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(143, 59, 'diana', 0, '', 0, '0000-00-00 00:00:00'),
(144, 59, 'diana', 0, '', 0, '0000-00-00 00:00:00'),
(145, 59, 'diana', 0, '', 0, '0000-00-00 00:00:00'),
(146, 59, 'diana', 2, 'sports', 1, '2017-06-12 10:01:55'),
(147, 60, 'ayn', 1, 'php', 0, '0000-00-00 00:00:00'),
(148, 61, 'rishi', 1, 'php', 0, '0000-00-00 00:00:00'),
(149, 62, 'poko', 2, 'sports', 2, '2017-06-13 05:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `quesans`
--

CREATE TABLE IF NOT EXISTS `quesans` (
  `q_id` int(11) NOT NULL AUTO_INCREMENT,
  `q` varchar(100) NOT NULL,
  `opt1` varchar(100) DEFAULT NULL,
  `opt2` varchar(100) DEFAULT NULL,
  `opt3` varchar(100) DEFAULT NULL,
  `opt4` varchar(100) DEFAULT NULL,
  `ca` varchar(100) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`q_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `quesans`
--

INSERT INTO `quesans` (`q_id`, `q`, `opt1`, `opt2`, `opt3`, `opt4`, `ca`, `c_id`) VALUES
(10, 'HOW MANY PLAYERS ARE NEEDED IN FOOTBALL', '10', '12', '14', '11', '4', 2),
(11, 'What is the function of echo', 'to display something', 'to delete something', 'to update something', 'to store something', '1', 1),
(12, 'what is the need of $', 'to declare a variable', 'to delete something', 'to update something', 'to store something', '1', 1),
(13, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(14, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(15, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(16, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(17, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(18, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(19, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(20, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(21, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(22, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(23, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(24, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(25, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(26, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(27, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(28, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(29, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(30, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(31, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(32, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(33, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(34, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(35, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(36, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(37, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(38, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(39, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(40, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(41, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(42, 'Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 'Ramanathan Krishnan ', 'Ramesh Krishnan ', 'Laender Paes', 'Mahesh Bhupati', '1', 2),
(43, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', '1', 2),
(44, ' Who was the first Indian to win an individual medal in Olympics?', 'Milkha Singh ', 'P.T.Usha ', 'Karnam Malleshwari ', 'K.D.Yadav', '4', 2),
(45, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2),
(46, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(47, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(48, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(49, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(50, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(51, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(52, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(53, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(54, 'Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 'Ramanathan Krishnan ', 'Ramesh Krishnan ', 'Laender Paes', 'Mahesh Bhupati', '1', 2),
(55, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', '1', 2),
(56, ' Who was the first Indian to win an individual medal in Olympics?', 'Milkha Singh ', 'P.T.Usha ', 'Karnam Malleshwari ', 'K.D.Yadav', '4', 2),
(57, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2),
(58, 'HOW MANY TIMES KKR WON IPL TITLE', '5', '2', '3', '4', '2', 2),
(59, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(60, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(61, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(62, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(63, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(64, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(65, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(66, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(67, 'Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 'Ramanathan Krishnan ', 'Ramesh Krishnan ', 'Laender Paes', 'Mahesh Bhupati', '1', 2),
(68, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', '1', 2),
(69, ' Who was the first Indian to win an individual medal in Olympics?', 'Milkha Singh ', 'P.T.Usha ', 'Karnam Malleshwari ', 'K.D.Yadav', '4', 2),
(70, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2),
(71, 'what is the use of ?> in php ', 'to start a php code', 'to end a php code', 'to delete a php code', 'to exit a code', '2', 1),
(72, 'what is the full form of KKR IN IPL', 'KOLKATA KNIGHT RIDERS', 'KOLKATA KNIGHTS RIDERS', 'KARACHI KNIGHTS', 'KARNATAKA KNIGHT RIDERS', '1', 2),
(73, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(74, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(75, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(76, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(77, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(78, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(79, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(80, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(81, 'Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 'Ramanathan Krishnan ', 'Ramesh Krishnan ', 'Laender Paes', 'Mahesh Bhupati', '1', 2),
(82, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', '1', 2),
(83, ' Who was the first Indian to win an individual medal in Olympics?', 'Milkha Singh ', 'P.T.Usha ', 'Karnam Malleshwari ', 'K.D.Yadav', '4', 2),
(84, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2),
(85, 'what is the use of ?> in php ', 'to start a php code', 'to end a php code', 'to delete a php code', 'to exit a code', '2', 1),
(86, 'what is the full form of KKR IN IPL', 'KOLKATA KNIGHT RIDERS', 'KOLKATA KNIGHTS RIDERS', 'KARACHI KNIGHTS', 'KARNATAKA KNIGHT RIDERS', '1', 2),
(87, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(88, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(89, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(90, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(91, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(92, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(93, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(94, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(95, 'Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 'Ramanathan Krishnan ', 'Ramesh Krishnan ', 'Laender Paes', 'Mahesh Bhupati', '1', 2),
(96, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', '1', 2),
(97, ' Who was the first Indian to win an individual medal in Olympics?', 'Milkha Singh ', 'P.T.Usha ', 'Karnam Malleshwari ', 'K.D.Yadav', '4', 2),
(98, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2),
(99, 'what is the use of ?> in php ', 'to start a php code', 'to end a php code', 'to delete a php code', 'to exit a code', '2', 1),
(100, 'what is the full form of KKR IN IPL', 'KOLKATA KNIGHT RIDERS', 'KOLKATA KNIGHTS RIDERS', 'KARACHI KNIGHTS', 'KARNATAKA KNIGHT RIDERS', '1', 2),
(101, 'how many players are needed in a cricket team?', '2', '9', '10', '11', '4', 2),
(102, 'Which of the following countries won the final of the triangular cricket series held in durban in fe', 'India', 'New Zealand', 'South Africa', 'Zimbabwe', '3', 2),
(103, 'Â In which year did Milkha Singh win the first National title in the 400 m race?', '1955', '1956', '1957', '1958', '3', 2),
(104, 'When was Amateur Athletics Federation of India established?', '1945', '1946', '1958', '1941', '2', 2),
(105, 'Which of the following is a Manipuri version of Hockey?', 'Khong KangjeiÂ ', 'Hiyang TanabaÂ ', 'Yubi LakpiÂ ', 'Yubi-Lakpi', '1', 2),
(106, 'Â In which Indian state did the game of Polo originate?', 'Meghalaya', 'Maharashtra', 'West Bengal', 'Manipur', '4', 2),
(107, 'How many gold medals did P.T.Usha win in the 1986 Seoul Asian Games?', '1', '2', '3', '4', '4', 2),
(108, 'India reached the final of the Davis Cup for the first time in...?', '1988', '1956', '1966', '1955', '3', 2),
(109, 'Who was the first Indian to reach the semi final in Wimbledon Tennis Championship?', 'Ramanathan Krishnan ', 'Ramesh Krishnan ', 'Laender Paes', 'Mahesh Bhupati', '1', 2),
(110, 'India won its first Olympic hockey gold in...?', '1928', '1932', '1936', '1948', '1', 2),
(111, ' Who was the first Indian to win an individual medal in Olympics?', 'Milkha Singh ', 'P.T.Usha ', 'Karnam Malleshwari ', 'K.D.Yadav', '4', 2),
(112, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2),
(113, 'what is the use of ?> in php ', 'to start a php code', 'to end a php code', 'to delete a php code', 'to exit a code', '2', 1),
(114, 'what is the full form of KKR IN IPL', 'KOLKATA KNIGHT RIDERS', 'KOLKATA KNIGHTS RIDERS', 'KARACHI KNIGHTS', 'KARNATAKA KNIGHT RIDERS', '1', 2),
(115, 'WHICH TEAM WON THE CRICKET WC 2003', 'SRI LANKA', 'BANGLADESH', 'INDIA', 'AUSTRALIA', '4', 2);

-- --------------------------------------------------------

--
-- Table structure for table `urole`
--

CREATE TABLE IF NOT EXISTS `urole` (
  `u_role` varchar(20) DEFAULT NULL,
  `roll_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`roll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urole`
--

INSERT INTO `urole` (`u_role`, `roll_id`) VALUES
('admin', 1),
('user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_passhash` varchar(50) DEFAULT NULL,
  `roll_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `roll_id` (`roll_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_passhash`, `roll_id`) VALUES
(1, 'Saheb', 'soumyaraha10@yahoo.in', '900150983cd24fb0d6963f7d28e17f72', 1),
(8, 'Soumya Raha', 'soumya.raha@innoraft.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(13, 'rudra', 'rudranil.sarkar@gmail.com', '27a23d6ef9586a028369fe56f32b02d6', 2),
(14, 'rudra', 'hell@gmail.com', '4229d691b07b13341da53f17ab9f2416', 2),
(15, 'Sabir', 'sabir@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(16, 'ayan', 'ayanmajumder9@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(17, 'Dahesh', 'dahesh@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(18, 'sp', 'souvik.pal@innoraft.com', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(19, 'Srijeeta Ghosh', 'sahanisrijeeta@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(20, 'Rahul', 'rahul@gmail.com', '439ed537979d8e831561964dbbbd7413', 2),
(21, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(22, 'sr', 'sr@gmail.com', 'e22428ccf96cda9674a939c209ad1000', 2),
(23, 'a', 'a@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 2),
(24, 'b', 'b@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', 2),
(25, 'j', 'j@gmail.com', '363b122c528f54df4a0446b6bab05515', 2),
(26, 'skr', 'skr@gmail.com', '154211326b13dba32f059317703da7ed', 2),
(27, 'raha', 'raha@gmail.com', '59c27cd83eb81a92d70ec96061ebae7e', 2),
(28, 'r', '', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(29, 'r', 'r@gmail.com', '4b43b0aee35624cd95b910189b3dc231', 2),
(30, 'p', 'p@gmail.com', '83878c91171338902e0fe0fb97a8c47a', 2),
(31, 'g', 'g@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d', 2),
(32, 'deep', 'deep@gmail.com', '6627415e807ee33c7302917216e7da68', 2),
(33, 'raj', 'raj@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(34, 'Rohit', 'rohit@gmail.com', '2d235ace000a3ad85f590e321c89bb99', 2),
(35, 'Riya', 'riya@gmail.com', '3153be13ca91e847668fbf430757a0b5', 2),
(36, 'disha', 'disha@gmail.com', '741fd4e081208df4bb46052b08abb511', 2),
(37, 'soo', 'soo@gmail.om', 'f2a71978289e8b5b8488a44433cab321', 2),
(38, 'wonder', 'wonder@gmail.com', '10cf1fdf6ad958eeffa9853f6885cec9', 2),
(39, 'lipsa', 'lipsa@gmail.com', '67986c1c2daf4d017ce21c9b4d31af38', 2),
(40, 'didi', 'didi@gmail.com', 'c19c8f9b6caad92726f88434d1493ad5', 2),
(41, 'diti', 'diti@gmail.com', '4ede43546382dc5d0ae23751b0d6d485', 2),
(42, 'axe', 'axe@gmail.com', 'c89ee4a2c9dcae6581ca53bff9aa4ee5', 2),
(43, 'mun', 'mun@gmail.com', '6585f290ce92c3de5ff339920330e26f', 2),
(44, 'sword', 'sword@gmail.com', 'f3b462d93b24cb0538f5d864546bc3e0', 2),
(45, 'love', 'love@gmail.com', 'd0dbe915091d400bd8ee7f27f0791303', 2),
(46, 'roll', 'roll@gmail.com', 'b6a5d96a4e99b63723ab54ddb471baad', 2),
(47, 'zig', 'zig@gmail.com', '238b8d81fb0e0f03fead5613b5234b74', 2),
(48, 'shreya', 'shreya@gmail.com', '4a3232c59ecda21ac71bebe3b329bf36', 2),
(49, 'deepika', 'deepika@gmail.com', '3dcec89bbac898667700f0d73db88a90', 2),
(50, 'soundarya', 'soundarya@gmail.com', 'c2802deaa023e2d3f8b01a42b16e6988', 2),
(51, 'nimba', 'nimba@gmail.com', '0bc1f6df163eab8973e3b98f8e5a7020', 2),
(52, 'ninja', 'ninja@gmail.com', '3899dcbab79f92af727c2190bbd8abc5', 2),
(53, 'pap', 'pap@gmail.com', '4e951936957c783062a399c629ce9a95', 2),
(54, 'papi', 'papi@gmail.com', 'f2b0f4701bf8986e3cc347246c63c3a5', 2),
(55, 'amarnam', 'amarnam@gmail.com', '472c4bb54168460be30d57646a147996', 2),
(56, 'lisa', 'lisa@gmail.com', 'ed14f4a4d7ecddb6dae8e54900300b1e', 2),
(57, 'bulu', 'bulu@gmail.com', '6264a6f5e64259f5b5f329ff7bd209d2', 2),
(58, 'cross', 'cross@gmail.com', '22aadb26447d87b550b155a4d764fad0', 2),
(59, 'diana', 'diana@gmail.com', '3a23bb515e06d0e944ff916e79a7775c', 2),
(60, 'ayn', 'ayn@gmail.com', '9b559a398b50b2c2f3673613c3a8310a', 2),
(61, 'rishi', 'rishi@gmail.com', 'ac4b0a568e8d3a14b521eae07006bc95', 2),
(62, 'poko', 'poko@gmail.com', '40e3e4b562440feeb12fe73c16bfad77', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quesans`
--
ALTER TABLE `quesans`
  ADD CONSTRAINT `quesans_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`roll_id`) REFERENCES `urole` (`roll_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
