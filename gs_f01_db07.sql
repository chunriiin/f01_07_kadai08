-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 9 月 26 日 23:51
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_f01_db07`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `bookname` varchar(46) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `bookname`, `url`, `comments`, `date`) VALUES
(7, 'aaakkkkkkkkkkkk', '<br /><b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/07_07kishidamai/detail.php</b> on line <b>60</b><br />', 'aaa', '2018-09-20 22:06:28'),
(8, '1分で話せ 世界のトップが絶賛した大事なことだけシンプルに伝える技術', '<br /><b>Notice</b>:  Undefined index: email in <b>/Applications/XAMPP/xamppfiles/htdocs/07_07kishidamai/detail.php</b> on line <b>60</b><br />', '読んだ本！ヤフーアカデミア学長にしてグロービス講師 孫社長にも一目置かれた伝説の「伝え方」! \r\naaaaaa', '2018-09-20 22:08:21'),
(9, '1日1ページ、読むだけで身につく世界の教養365', 'https://www.amazon.co.jp/1%E6%97%A51%E3%83%9A%E3%83%BC%E3%82%B8%E3%80%81%E8%AA%AD%E3%82%80%E3%81%A0%E3%81%91%E3%81%A7%E8%BA%AB%E3%81%AB%E3%81%A4%E3%81%8F%E4%B8%96%E7%95%8C%E3%81%AE%E6%95%99%E9%A4%8A365-%E3%83%87%E3%82%A4%E3%83%B4%E3%82%A3%E3%83%83%E3%83%89%E3%83%BBS%E3%83%BB%E3%82%AD%E3%83%80%E3%83%BC/dp/4866510552/ref=pd_sbs_14_3?_encoding=UTF8&pd_rd_i=4866510552&pd_rd_r=190a2a96-bcd6-11e8-be94-a5868f1c7196&pd_rd_w=aHK07&pd_rd_wg=5W4N0&pf_rd_i=desktop-dp-sims&pf_rd_m=AN1VRQENFRJN5&pf_rd_p=cda7018a-662b-401f-9c16-bd4ec317039e&pf_rd_r=X4TBVER5NCKPKX8353GH&pf_rd_s=desktop-dp-sims&pf_rd_t=40701&psc=1&refRID=X4TBVER5NCKPKX8353GH', '(月)歴史・(火)文学・(水)芸術・(木)科学・(金)音楽・(土)哲学・(日)宗教の7分野から、\r\n頭脳を刺激し、教養を高める知識を365日分収録! ', '2018-09-20 22:09:17'),
(10, '「読む力」と「地頭力」がいっきに身につく 東大読書 ', 'https://www.amazon.co.jp/%E3%80%8C%E8%AA%AD%E3%82%80%E5%8A%9B%E3%80%8D%E3%81%A8%E3%80%8C%E5%9C%B0%E9%A0%AD%E5%8A%9B%E3%80%8D%E3%81%8C%E3%81%84%E3%81%A3%E3%81%8D%E3%81%AB%E8%BA%AB%E3%81%AB%E3%81%A4%E3%81%8F-%E6%9D%B1%E5%A4%A7%E8%AA%AD%E6%9B%B8-%E8%A5%BF%E5%B2%A1-%E5%A3%B1%E8%AA%A0/dp/4492046259/ref=pd_sbs_14_3?_encoding=UTF8&pd_rd_i=4492046259&pd_rd_r=46430272-bcd6-11e8-934e-db5b94df68a1&pd_rd_w=JcRIi&pd_rd_wg=MXsKr&pf_rd_i=desktop-dp-sims&pf_rd_m=AN1VRQENFRJN5&pf_rd_p=cda7018a-662b-401f-9c16-bd4ec317039e&pf_rd_r=JPZFFQTGR6WTHEYZFJ09&pf_rd_s=desktop-dp-sims&pf_rd_t=40701&psc=1&refRID=JPZFFQTGR6WTHEYZFJ09', '「仕事」にも「勉強」にも「読書嫌い」にも効くと大好評! ! \r\n「こんな読み方、あったんだ」', '2018-09-20 22:10:10'),
(12, '日本再興戦略', 'https://www.amazon.co.jp/%E6%97%A5%E6%9C%AC%E5%86%8D%E8%88%88%E6%88%A6%E7%95%A5-NewsPicks-Book-%E8%90%BD%E5%90%88%E9%99%BD%E4%B8%80-ebook/dp/B0797K44CH/ref=pd_sim_351_2?_encoding=UTF8&pd_rd_i=B0797K44CH&pd_rd_r=68ca0dce-bcd8-11e8-be94-a5868f1c7196&pd_rd_w=QMSjz&pd_rd_wg=kwLV1&pf_rd_i=desktop-dp-sims&pf_rd_m=AN1VRQENFRJN5&pf_rd_p=053a78c4-e34f-47d4-9426-4d23f47a211d&pf_rd_r=26V0X2E0WHMYVGBF87KC&pf_rd_s=desktop-dp-sims&pf_rd_t=40701&psc=1&refRID=26V0X2E0WHMYVGBF87KC', '読んだ本！「情熱大陸」出演で大反響! 落合陽一の最新作! ', '2018-09-20 22:24:31'),
(13, '10年後の仕事図鑑', 'https://www.amazon.co.jp/10%E5%B9%B4%E5%BE%8C%E3%81%AE%E4%BB%95%E4%BA%8B%E5%9B%B3%E9%91%91-%E5%A0%80%E6%B1%9F-%E8%B2%B4%E6%96%87-ebook/dp/B07BGVZLDZ/ref=pd_sim_351_4?_encoding=UTF8&pd_rd_i=B07BGVZLDZ&pd_rd_r=68ca0dce-bcd8-11e8-be94-a5868f1c7196&pd_rd_w=QMSjz&pd_rd_wg=kwLV1&pf_rd_i=desktop-dp-sims&pf_rd_m=AN1VRQENFRJN5&pf_rd_p=053a78c4-e34f-47d4-9426-4d23f47a211d&pf_rd_r=26V0X2E0WHMYVGBF87KC&pf_rd_s=desktop-dp-sims&pf_rd_t=40701&psc=1&refRID=26V0X2E0WHMYVGBF87KC', '読んだ本\r\nなぜ今、人生のグランドデザインを考え直さなければいけないのか？', '2018-09-20 22:25:41');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php02_table`
--

CREATE TABLE IF NOT EXISTS `gs_php02_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL,
  `age` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php02_table`
--

INSERT INTO `gs_php02_table` (`id`, `name`, `email`, `detail`, `indate`, `age`) VALUES
(1, 'ジーズ福岡', 'asdfghjk@gmail.com', 'test', '2018-09-15 15:19:44', 10),
(2, '福岡', 'gs_f@test.com', 'あああ', '2018-09-15 15:24:49', 20),
(3, '東京', 'gs_f@test.com', 'test', '2018-09-15 15:25:59', 30),
(4, '東京', 'gs_f@test.com', 'test', '2018-09-15 15:26:40', 40),
(5, 'ジーズ熊本', 'aaaaaaaf@test.com', 'test', '2018-09-15 15:27:38', NULL),
(6, 'ジーズ鹿児島', 'cccccc@test.com', 'test', '2018-09-15 15:28:14', NULL),
(7, 'ジーズ沖縄', 'bbbbbbb@test.com', 'test', '2018-09-15 15:29:01', NULL),
(8, 'キシダマイ', 'chunchunrin@gmail.com', 'aaaaaaaaaaaa', '2018-09-15 16:18:59', NULL),
(9, 'キシダマイ', 'chunchnrin@gmail.com', 'aaaaaaaaaa', '2018-09-15 16:19:16', NULL),
(10, 'キシダマイ', 'support-teacha', 'aaaaaaaaaaa', '2018-09-15 16:43:18', NULL),
(11, 'キシダマイ', 'chunchnrin@gmail.com', 'あああああああ', '2018-09-15 16:48:32', NULL),
(12, 'キシダマイ', 'chunchnrin@gmail.com', 'aaaaaaa', '2018-09-17 08:22:37', NULL),
(13, 'キシダマイ', 'chunchnrin@gmail.com', '2018/09/17', '2018-09-17 08:23:10', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_php03_table`
--

CREATE TABLE IF NOT EXISTS `gs_php03_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_php03_table`
--

INSERT INTO `gs_php03_table` (`id`, `name`, `email`, `detail`, `indate`) VALUES
(2, 'yamaaaaaaaaasaki', 'yamasaki@gs.gs', 'test02aaaaaaaaaa', '2018-09-15 15:22:57'),
(3, 'osgsssssssss', 'osg@gs.gs', 'test03', '2018-09-15 15:23:20'),
(4, 'morita', 'morita@gs.gs', 'test04', '2018-09-15 15:23:48'),
(5, 'kimuraaaaaaaaaa', 'kimura@gs.gs', 'test05', '2018-09-15 15:24:48'),
(6, 'kamiyama', 'kamiyama@gs.gs', 'test06', '2018-09-15 16:12:26'),
(7, 'kanou', 'kanou@gs.gs', 'test07', '2018-09-15 16:13:06'),
(8, 'kosuge', 'kosuge@gs.gs', 'test08', '2018-09-15 16:17:04'),
(9, 'iseki', 'iseki@gs.gs', 'test09', '2018-09-15 16:47:30');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(3, '岸田舞', 'aaaaaaaa', 'sssssssss', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php02_table`
--
ALTER TABLE `gs_php02_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_php03_table`
--
ALTER TABLE `gs_php03_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `gs_php02_table`
--
ALTER TABLE `gs_php02_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gs_php03_table`
--
ALTER TABLE `gs_php03_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
