-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 10 月 25 日 08:16
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `newbook`
--

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`uid`, `name`, `sex`, `password`, `age`, `info`) VALUES
(1, '7777', 0, '7777', 44, ''),
(2, 'name', 1, '33232', 44, ''),
(3, 'name', 1, '33232', 44, ''),
(4, 'name', 1, '33232', 44, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
