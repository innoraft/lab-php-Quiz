-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 03:47 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
(0, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `exam_taken`
--

INSERT INTO `exam_taken` (`e_id`, `u_id`, `u_name`, `c_id`, `c_name`, `score`, `date`) VALUES
(1, 1, 'Saheb', 1, 'php', 2, '2017-05-12 09:54:15'),
(2, 1, 'Saheb', 2, 'sports', 0, '2017-05-15 19:14:54'),
(3, 1, 'Saheb', 2, 'sports', 0, '2017-05-15 19:14:54'),
(4, 14, '', 1, 'php', 2, '2017-05-12 09:54:15'),
(6, 1, '', 2, 'sports', 0, '2017-05-15 19:14:54'),
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
(22, 0, '', 3, 'Array', 0, '0000-00-00 00:00:00'),
(23, 18, 'sp', 2, 'Array', 5, '2017-05-12 11:29:36'),
(24, 1, 'Saheb', 2, 'Array', 0, '2017-05-15 19:14:54'),
(25, 14, 'rudra', 2, 'Array', 4, '2017-05-15 11:47:40'),
(26, 19, 'Srijeeta Ghosh', 2, 'Array', 6, '2017-05-15 11:50:17'),
(27, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(28, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(29, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(30, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(31, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(32, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(33, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(34, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(35, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(36, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(37, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(38, 1, 'Saheb', 3, 'Array', 0, '0000-00-00 00:00:00'),
(39, 1, 'Saheb', 3, 'Array', 0, '0000-00-00 00:00:00'),
(40, 1, 'Saheb', 3, 'Array', 0, '0000-00-00 00:00:00'),
(41, 1, 'Saheb', 2, 'Array', 0, '0000-00-00 00:00:00'),
(42, 20, 'Rahul', 1, 'Array', 0, '0000-00-00 00:00:00'),
(43, 21, 'abc', 1, 'Array', 0, '0000-00-00 00:00:00'),
(44, 21, 'abc', 2, 'Array', 0, '0000-00-00 00:00:00'),
(45, 22, 'sr', 1, 'Array', 0, '0000-00-00 00:00:00'),
(46, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(47, 22, 'sr', 2, 'Array', 5, '2017-05-16 08:49:38'),
(48, 23, 'a', 1, 'php', 2, '2017-05-16 08:54:10'),
(49, 23, 'a', 2, 'sports', 4, '2017-05-16 09:00:45'),
(50, 24, 'b', 1, 'php', 2, '2017-05-16 09:04:38'),
(51, 0, '', 0, '', 0, '0000-00-00 00:00:00'),
(52, 24, 'b', 2, 'sports', 3, '2017-05-16 09:08:26'),
(53, 25, 'j', 1, 'php', 2, '2017-05-16 09:38:15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

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
(57, 'The Indian football team made its first appearance at Olympics in...?', '1936', '1958', '1948', '1942', '3', 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_passhash`, `roll_id`) VALUES
(1, 'Saheb', 'soumyaraha10@yahoo.in', '900150983cd24fb0d6963f7d28e17f72', 1),
(2, '', 'sdsdsdsdsd', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(3, 'raha', 'ssss@', '74b87337454200d4d33f80c4663dc5e5', 2),
(4, 'raha', 'ssss@', '74b87337454200d4d33f80c4663dc5e5', 2),
(5, 'raha', 'ssss@', '74b87337454200d4d33f80c4663dc5e5', 2),
(6, 'raha', 'ss', '74b87337454200d4d33f80c4663dc5e5', 2),
(7, 'raha', 'dddd@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 2),
(8, 'Soumya Raha', 'soumya.raha@innoraft.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(9, 'Soumya Raha', 'soumya.raha@innoraft.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(10, 'Soumya Raha', 'soumya.raha@innoraft.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(11, 'Soumya Raha', 'ssssss@gmail.com', '900150983cd24fb0d6963f7d28e17f72', 2),
(12, 'raha', 'sssssssss@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2),
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
(25, 'j', 'j@gmail.com', '363b122c528f54df4a0446b6bab05515', 2);

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
