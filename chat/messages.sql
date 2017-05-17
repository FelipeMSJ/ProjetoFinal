-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2013 at 03:26 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `messages`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(235) NOT NULL,
  `message` varchar(255) NOT NULL,
  `textcolor` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=2 ;

--
-- Dumping data for table `messages`
--
