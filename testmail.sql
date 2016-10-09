-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 10 月 09 日 14:58
-- 服务器版本: 5.5.40
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `testmail`
--

-- --------------------------------------------------------

--
-- 表的结构 `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mailtitle` varchar(20) NOT NULL,
  `maildt` int(10) unsigned NOT NULL DEFAULT '0',
  `mailcontent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `mail`
--

INSERT INTO `mail` (`id`, `uid`, `mailtitle`, `maildt`, `mailcontent`) VALUES
(1, 1, '邮件表题1', 12224444, ''),
(2, 1, '你好吗', 1475985895, ''),
(3, 2, '你好吗', 1475985935, ''),
(4, 2, '你好吗', 1475991599, '2222222222'),
(5, 2, '你好吗', 1475992649, '吾问无为谓吾问无为谓呜呜呜呜呜呜'),
(6, 2, '你好吗', 1475992665, 'echo ''<td>''.date("Y-m-d:",$maildt).''</td>'';'),
(7, 1, '你好吗', 1475993050, '呜呜呜呜呜呜呜呜呜呜呜'),
(12, 1, '你好吗', 1475993243, '   我'),
(15, 1, '你好吗', 1475993317, '   我'),
(17, 2, '你好吗', 1475993798, '认为呃呃呃鹅鹅鹅鹅鹅鹅饿');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `userpwd` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `userpwd`) VALUES
(1, 'wanglijun', '606060wlj'),
(2, 'admin', '606060wlj'),
(3, 'wanglijun', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
