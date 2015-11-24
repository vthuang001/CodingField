-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2015 �?11 �?24 �?13:42
-- 伺服器版本: 5.6.24
-- PHP 版本： 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `coding_field`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `code` varchar(100) NOT NULL,
  `yn` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `account`
--

INSERT INTO `account` (`account`, `password`, `email`, `gender`, `code`, `yn`) VALUES
('assd', 'ssss', 'vthuang001@gmail.com', 'M', '6b3594a9-4ef4-f84e-1130-563f7e3baf0d', 1),
('codingfeild', 'codingfeild', 'miku0831desu@gmail.com', 'F', 'cda78264-3935-16ed-0d69-563e06630ffa', 1),
('GAMELab', 'GAMELab', 'vthuang001@gmail.com', 'M', '', 0),
('qqqq', 'wwww', 'aaaa', 'M', '', 0),
('rrrrrr', 'gggg', 'vthuang001@gmail.com', 'M', '', 0),
('s1111111', 's1111111', 'vthuang001@gmail.com', 'M', '', 0),
('sadsdsafaf', '22222', 'vthuang001@gmail.com', 'F', '', 0),
('test001', 'test001', 'vthuang001@gmail.com', 'M', '', 0),
('vthuang001', 's7662055', 'vthuang001@gmail.com', 'M', 'bde2a72f-8762-11cb-6768-5652bf5c411a', 1),
('wk90062', 'w83121228', 'vthuang001@gmail.com', 'F', '', 0),
('wwwwwww', 'aaaaa', 'vthuang001@gmail.com', 'M', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `login_billboard`
--

CREATE TABLE IF NOT EXISTS `login_billboard` (
  `id` int(20) NOT NULL,
  `type` enum('NOTICE','EVENT','MAINTAIN') NOT NULL,
  `title` varchar(30) NOT NULL,
  `url` varchar(50) NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `login_billboard`
--

INSERT INTO `login_billboard` (`id`, `type`, `title`, `url`, `update_date`) VALUES
(1, 'MAINTAIN', '11/20 緊急メンテナンス終了のお知らせ ', 'www.google.com', '2015-11-20'),
(3, 'MAINTAIN', '11/20 緊急メンテナンス終了のお知らせ', 'www.yahoo.com.tw', '2015-11-20'),
(4, 'EVENT', '事前登録特典配布について【10/23　15：30追記】 ', 'www.google.com', '2015-10-23'),
(5, 'EVENT', '【再掲】正式サービス開始記念キャンペーン！！ ', 'www.google.com', '2015-10-20'),
(6, 'NOTICE', 'レティシアサーバーで発生している障害について ', 'www.google.com', '2015-11-21'),
(7, 'EVENT', '【再掲】各種キャンペーン特典の配布について ', 'www.google.com', '2015-11-20'),
(8, 'EVENT', 'オープンβテスト開始記念キャンペーン【10/22追記】 ', 'www.google.com', '2015-09-30'),
(9, 'NOTICE', '11/19　アップデート内容 ', 'www.yahoo.com.tw', '2015-11-19');

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `account` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `manager`
--

INSERT INTO `manager` (`account`, `password`) VALUES
('GAMELab', 'GAMELab');

-- --------------------------------------------------------

--
-- 資料表結構 `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `account` varchar(30) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user_data`
--

INSERT INTO `user_data` (`account`, `uid`, `birthday`, `name`) VALUES
('GAMELab', '', '0000-00-00', ''),
('vthuang001', '', '0000-00-00', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `account` (`account`), ADD UNIQUE KEY `password` (`password`);

--
-- 資料表索引 `login_billboard`
--
ALTER TABLE `login_billboard`
  ADD PRIMARY KEY (`id`) COMMENT '主鍵';

--
-- 資料表索引 `user_data`
--
ALTER TABLE `user_data`
  ADD UNIQUE KEY `account` (`account`) COMMENT 'account';

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `login_billboard`
--
ALTER TABLE `login_billboard`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
