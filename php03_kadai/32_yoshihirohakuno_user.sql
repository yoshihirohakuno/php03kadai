-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 10 月 29 日 13:39
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_book_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(128) NOT NULL,
  `u_pw` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) DEFAULT NULL,
  `life_flg` int(1) DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `u_name`, `u_id`, `u_pw`, `kanri_flg`, `life_flg`, `indate`) VALUES
(2, 'yoshihiro更新', 'yoshihiro更新', 'test', NULL, 0, '2020-10-29 22:53:43'),
(3, 'hakuno', 'hakuno', 'test', 0, NULL, '2020-10-29 22:53:43'),
(4, 'guest', 'guest', 'guest', 1, NULL, '2020-10-29 22:53:43');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
