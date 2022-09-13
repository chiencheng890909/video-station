-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `video`
--

-- --------------------------------------------------------

--
-- 資料表結構 `collect`
--

CREATE TABLE `collect` (
  `AuthorID` int(11) NOT NULL,
  `videoname` varchar(100) COLLATE utf8_bin NOT NULL,
  `videoURL` varchar(500) COLLATE utf8_bin NOT NULL,
  `ID` text COLLATE utf8_bin NOT NULL,
  `account` text COLLATE utf8_bin NOT NULL,
  `URL` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 傾印資料表的資料 `collect`
--

INSERT INTO `collect` (`AuthorID`, `videoname`, `videoURL`, `ID`, `account`, `URL`) VALUES
(13, 'What You Wanted', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/p9LDnPyY9zA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'p9LDnPyY9zA', '2000miro0909@gmail.com', 'https://www.youtube.com/watch?v=p9LDnPyY9zA'),
(16, '桃太郎電鉄16', '<iframe width=\'312\' height=\'176\' src=\'https://ext.nicovideo.jp/thumb/sm36175837\' scrolling=\'no\' style=\'border:solid 1px #ccc;\' frameborder=\'0\'><a href=\'https://www.nicovideo.jp/watch/sm36175837\'>桃太郎電鉄16</a></iframe>', 'sm36175837', '2000miro0909@gmail.com', 'https://www.nicovideo.jp/watch/sm36175837'),
(17, 'The Chainsmokers - Closer', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/-V3xnzs5Chw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '-V3xnzs5Chw', 'miffy89927@gmail.com', 'https://www.youtube.com/watch?v=-V3xnzs5Chw'),
(18, 'Rolling in the Deep', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/C16ZxwgOCnU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'C16ZxwgOCnU', '2000miro0909@gmail.com', 'https://www.youtube.com/watch?v=C16ZxwgOCnU'),
(20, '生命的正義女神', '<iframe width=\'312\' height=\'176\' src=\'https://ext.nicovideo.jp/thumb/sm36175528\' scrolling=\'no\' style=\'border:solid 1px #ccc;\' frameborder=\'0\'><a href=\'https://www.nicovideo.jp/watch/sm36175528\'>生命的正義女神</a></iframe>', 'sm36175528', '2000miro0909@gmail.com', 'https://www.nicovideo.jp/watch/sm36175528'),
(21, '超嘔心】食用外星人', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/UslmGoRFZas\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'UslmGoRFZas', 'larrye59678991s@gmali.com', 'https://www.youtube.com/watch?v=UslmGoRFZas');

-- --------------------------------------------------------

--
-- 資料表結構 `netflix`
--

CREATE TABLE `netflix` (
  `AuthorID` int(11) NOT NULL,
  `videoname` varchar(100) COLLATE utf8_bin NOT NULL,
  `videopicture` varchar(300) COLLATE utf8_bin NOT NULL,
  `URL` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 傾印資料表的資料 `netflix`
--

INSERT INTO `netflix` (`AuthorID`, `videoname`, `videopicture`, `URL`) VALUES
(1, '吸血鬼戰爭', 'picture/吸血鬼戰爭.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/M1kuAdVKvuE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '聖誕王子：皇家寶貝', 'picture/聖誕王子：皇家寶貝.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jP4pL_KcLzk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, '魔鬼神探', 'picture/魔鬼神探.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sgqXB_DFMPw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, '極道千金', 'picture/極道千金.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/audEGhy-sQc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, '婚姻故事', 'picture/婚姻故事.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4ovnOXh4yY4\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, '鬼影特攻：以暴制暴', 'picture/鬼影特攻：以暴制暴.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1wQVgfNwmOI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, '紙房子 4', 'picture/紙房子.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/zxqTbXv8t9s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, '安眠書店 第二季', 'picture/安眠書店.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4FM1gczl-d8\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, '黑鏡 第 5 季', 'picture/黑鏡.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7MVpGU8k7nw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, '怪奇物語 第 3 季 ', 'picture/怪奇物語.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9ynAk_VeBLc\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- 資料表結構 `niconico`
--

CREATE TABLE `niconico` (
  `AuthorID` int(11) NOT NULL,
  `videoname` varchar(100) COLLATE utf8_bin NOT NULL,
  `videopicture` varchar(300) COLLATE utf8_bin NOT NULL,
  `URL` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 傾印資料表的資料 `niconico`
--

INSERT INTO `niconico` (`AuthorID`, `videoname`, `videopicture`, `URL`) VALUES
(1, '【RTA】リングフィットアドベンチャー Any％_17時間31分24秒_Part2', 'picture/niconico1.jpg', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36168918\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36168918\">【RTA】リングフィットアドベンチャー Any％_17時間31分24秒_Part2</a></iframe>'),
(2, '2019年における最高のアニメを各国首脳陣が発表したぞ\r\n', 'picture/niconico2.jpg', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36158319\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36158319\">2019年における最高のアニメを各国首脳陣が発表したぞ</a></iframe>'),
(3, '【TAS】FC・NES グーニーズ２(Goonies 2)(JPN) 10:43.42', '', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36175542\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36175542\">【TAS】FC・NES グーニーズ２(Goonies 2)(JPN) 10:43.42</a></iframe>'),
(4, '【Besiege】第３回パンジャンドラム最速王決定戦P1グランプリ②VOICEROID実況', '', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36167824\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36167824\">【Besiege】第３回パンジャンドラム最速王決定戦P1グランプリ②VOICEROID実況</a></iframe>'),
(5, '魔界村18時間放送後の鈴原るるに放った父親の言葉に一同騒然…', '', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36177775\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36177775\">魔界村18時間放送後の鈴原るるに放った父親の言葉に一同騒然…</a></iframe>'),
(6, 'アンジュにベルモンドNTRれ発狂する笹木咲', '', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36179752\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36179752\">アンジュにベルモンドNTRれ発狂する笹木咲</a></iframe>'),
(7, '【2020年】生命的正義女神＠再一次試唱了【まふまふ】', '', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36175528\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36175528\">【2020年】生命的正義女神＠再一次試唱了【まふまふ】</a></iframe>'),
(8, '【桃太郎電鉄16】全力でゆっくり進む桃太郎電鉄　3年目【カード制覇付き】', '', '<iframe width=\"312\" height=\"176\" src=\"https://ext.nicovideo.jp/thumb/sm36175837\" scrolling=\"no\" style=\"border:solid 1px #ccc;\" frameborder=\"0\"><a href=\"https://www.nicovideo.jp/watch/sm36175837\">【桃太郎電鉄16】全力でゆっくり進む桃太郎電鉄　3年目【カード制覇付き】</a></iframe>');

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `AuthorID` int(11) NOT NULL,
  `videoname` varchar(100) COLLATE utf8_bin NOT NULL,
  `videopicture` varchar(300) COLLATE utf8_bin NOT NULL,
  `URL` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 傾印資料表的資料 `video`
--

INSERT INTO `video` (`AuthorID`, `videoname`, `videopicture`, `URL`) VALUES
(1, '鄧紫棋 - 摩天動物園', 'picture/摩天動物園.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/A6gIat5xLWI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, '周杰倫 - 我是如此相信', 'picture/我是如此相信.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TbFWYT9VGRk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, '大支 - 覺醒韓粉的自白', 'picture/覺醒韓粉的自白.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/3jnPtUSIJAA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, '玖壹壹 - 馬子狗', 'picture/馬子狗.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/k9T0Y19VjGQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(5, 'Mariah Carey - All I Want for Christmas Is You', 'picture/AllIWantforChristmasIsYou.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aAkMkVFwAoo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(6, '告五人 - 帶我去找夜生活', 'picture/帶我去找夜生活.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aYWliwPRsnQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(7, '邱鋒澤,陳零九 - 那曾經', 'picture/那曾經.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MOLCGtqtd_E\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(8, '宋念宇 - 默念你', 'picture/默念你.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rxpubZXi0sE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(9, '吳卓源 - 全世界的朋友都讓我失望', 'picture/全世界的朋友都讓我失望.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1BQKXKL4L50\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(10, 'Ariana Grande - Santa Tell Me', 'picture/SantaTellMe.jpg', '<iframe style=\"border-radius: 10px\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XO9GiPOLd3I\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `collect`
--
ALTER TABLE `collect`
  ADD PRIMARY KEY (`AuthorID`);

--
-- 資料表索引 `netflix`
--
ALTER TABLE `netflix`
  ADD PRIMARY KEY (`AuthorID`);

--
-- 資料表索引 `niconico`
--
ALTER TABLE `niconico`
  ADD PRIMARY KEY (`AuthorID`);

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`AuthorID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `collect`
--
ALTER TABLE `collect`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `netflix`
--
ALTER TABLE `netflix`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `niconico`
--
ALTER TABLE `niconico`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `video`
--
ALTER TABLE `video`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
