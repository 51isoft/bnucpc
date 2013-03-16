-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 03 月 16 日 23:20
-- 服务器版本: 5.1.66
-- PHP 版本: 5.3.3-7+squeeze14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `register`
--
CREATE DATABASE `register` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `register`;

-- --------------------------------------------------------

--
-- 表的结构 `contest`
--

CREATE TABLE IF NOT EXISTS `contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) DEFAULT NULL,
  `cpass` varchar(20) DEFAULT NULL,
  `userid_id` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `activation` int(11) NOT NULL,
  `depart` varchar(600) NOT NULL,
  `grade` varchar(600) NOT NULL,
  `mailaddress` varchar(255) NOT NULL,
  `mobilephone` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `realname` varchar(20) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `sno` varchar(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `isroot` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mailaddress` (`mailaddress`),
  UNIQUE KEY `sno` (`sno`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
