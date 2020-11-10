-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2020-11-09 08:16:35
-- 伺服器版本： 8.0.18
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mini_shop`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bill`
--

CREATE TABLE `bill` (
  `bill_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '帳單編號',
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '購買人',
  `bill_total` mediumint(8) UNSIGNED NOT NULL COMMENT '總金額',
  `bill_date` datetime NOT NULL COMMENT '購買日期',
  `bill_status` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '處理狀態'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `bill`
--

INSERT INTO `bill` (`bill_sn`, `user_sn`, `bill_total`, `bill_date`, `bill_status`) VALUES
(1, 1, 210, '2020-10-27 16:10:55', NULL),
(2, 1, 115, '2020-11-01 11:08:09', '已出貨'),
(3, 2, 870, '2020-11-05 16:53:28', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '帳單編號',
  `goods_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `goods_amount` tinyint(3) UNSIGNED NOT NULL COMMENT '購買數量',
  `goods_total` mediumint(8) UNSIGNED NOT NULL COMMENT '小計'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `bill_detail`
--

INSERT INTO `bill_detail` (`bill_sn`, `goods_sn`, `goods_amount`, `goods_total`) VALUES
(1, 4, 1, 130),
(1, 3, 1, 80),
(2, 5, 1, 55),
(2, 1, 1, 60),
(3, 3, 0, 0),
(3, 2, 1, 120),
(3, 7, 1, 750);

-- --------------------------------------------------------

--
-- 資料表結構 `goods`
--

CREATE TABLE `goods` (
  `goods_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `goods_title` varchar(255) NOT NULL COMMENT '商品名稱',
  `goods_content` text NOT NULL COMMENT '商品說明',
  `goods_price` mediumint(8) UNSIGNED NOT NULL COMMENT '商品價錢',
  `goods_counter` smallint(5) UNSIGNED NOT NULL COMMENT '人氣',
  `goods_date` datetime NOT NULL COMMENT '上架日期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `goods`
--

INSERT INTO `goods` (`goods_sn`, `goods_title`, `goods_content`, `goods_price`, `goods_counter`, `goods_date`) VALUES
(1, '焦糖布丁', '<p>使用小火隔水加熱慢慢蒸熟的烤布丁</p>\r\n\r\n<p>產品成份單純，不添加任何凝固劑，口感綿密細緻。</p>\r\n', 60, 22, '2020-11-05 16:06:04'),
(2, '千層蛋糕', '<p>煎出的餅皮一層一層的堆疊</p>\r\n\r\n<p>中間夾著卡士達和切片的草莓、芒果，濃郁香醇的內餡入口即化</p>\r\n\r\n<p>酸甜的鮮果更增添蛋糕細膩滋味。</p>\r\n', 120, 12, '2020-11-05 15:58:42'),
(3, '檸檬塔', '<p>純手工塔皮酥脆的塔皮搭配檸檬內餡</p>\r\n\r\n<p>酸酸甜甜使檸檬塔清爽而不膩</p>\r\n', 80, 56, '2020-11-05 15:55:41'),
(4, '乳酪蛋糕', '<p>精選紐西蘭進口乳酪以及酸奶製成</p>\r\n\r\n<p>紮實的乳酪層每一口都能吃到滿滿的濃郁乳酪調和恰到好處的酸奶口感綿密滑順</p>\r\n\r\n<p>搭配發酵奶油混拌的脆餅底，口感絕妙無比</p>\r\n', 130, 11, '2020-11-05 16:02:39'),
(5, '布朗尼', '<p>獨家配方和精準火侯 使布朗尼口感綿密濕潤，風味更是濃郁</p>\r\n\r\n<p>搭配一杯香醇咖啡，盡顯巧克力的經典原味</p>\r\n', 55, 5, '2020-11-05 16:01:03'),
(6, '巴斯克乳酪蛋糕 / 6吋', '<p>成份天然無添加乳化劑，在乳酸菌的發酵下，層次豐富又略帶微酸感，極上的細緻綿柔體驗，入口即化。<br />\r\n&nbsp;</p>\r\n', 630, 7, '2020-11-05 16:41:44'),
(7, '北海道生淇淋卷', '<p>蛋糕體以乳香、蛋香的最佳黃金比例結合而成，口感Q彈又充滿蛋香</p>\r\n\r\n<p>每一口都充滿著一股神奇魔力讓您一口接一口。以簡單的外形，極緻的內餡充滿著高雅韻味！</p>\r\n', 750, 3, '2020-11-05 16:50:16');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `news_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `news_title` varchar(255) NOT NULL COMMENT '商品名稱',
  `news_content` text NOT NULL COMMENT '商品說明',
  `news_date` datetime NOT NULL COMMENT '上架日期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`news_sn`, `news_title`, `news_content`, `news_date`) VALUES
(18, '生日優惠！！', '<p>當月壽星持生分證件</p>\r\n\r\n<p>即可享9折且免費曾送一份甜點</p>\r\n', '2020-11-07 14:09:36'),
(16, '宅配服務異動', '<p>十二月份起，配合物流業者，不提供週日到貨服務，不便之處敬請見諒，謝謝！</p>\r\n\r\n<p>歡迎您選擇來店取貨，感謝您的包容與肯定&nbsp;❤❤</p>\r\n', '2020-11-09 08:16:12'),
(17, '~聖誕節活動~', '<p>聖誕節快到了！！</p>\r\n\r\n<p>全館商品9折</p>\r\n\r\n<p>滿2000折50</p>\r\n', '2020-11-07 07:27:32');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_passwd` varchar(255) NOT NULL COMMENT '使用者密碼',
  `user_email` varchar(255) NOT NULL COMMENT '使用者信箱',
  `user_sex` enum('先生','女士') NOT NULL COMMENT '使用者性別',
  `user_tel` varchar(255) NOT NULL COMMENT '使用者電話',
  `user_zip` varchar(255) NOT NULL COMMENT '使用者郵遞區號',
  `user_county` varchar(255) NOT NULL COMMENT '使用者縣市',
  `user_district` varchar(255) NOT NULL COMMENT '使用者鄉鎮市區',
  `user_address` varchar(255) NOT NULL COMMENT '使用者地址'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`user_sn`, `user_name`, `user_id`, `user_passwd`, `user_email`, `user_sex`, `user_tel`, `user_zip`, `user_county`, `user_district`, `user_address`) VALUES
(1, 'S', '1602', '$2y$10$/76.TN70G6xNqMmuSLtnv.BHTGDS4f5/Q.2zobF2We3jX3AfCB0Xy', '107b11602@mailst.cjcu.edu.tw', '先生', '0911111111', '700', '台南市', '中西區', '2'),
(2, 'Y', '602', '$2y$10$0899WW9ezLt2rBVmu81zY.95v8dM/M6B57.1e5vAbjLxeDM1.9xdi', '107b11602@mailst.cjcu.edu.tw', '女士', '09222222222', '700', '台南市', '中西區', '3');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_sn`);

--
-- 資料表索引 `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`bill_sn`,`goods_sn`);

--
-- 資料表索引 `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_sn`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_sn`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_sn`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '帳單編號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號', AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `news_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號', AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `user_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '使用者編號', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
