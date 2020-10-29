-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 10 月 29 日 13:41
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `gs_book_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `url`, `comment`, `indate`) VALUES
(2, 'BEASTARS　１dee', 'https://www.amazon.co.jp/BEASTARS-%EF%BC%91-%E5%B0%91%E5%B9%B4%E3%83%81%E3%83%A3%E3%83%B3%E3%83%94%E3%82%AA%E3%83%B3%E3%83%BB%E3%82%B3%E3%83%9F%E3%83%83%E3%82%AF%E3%82%B9-%E6%9D%BF%E5%9E%A3%E5%B7%B4%E7%95%99-ebook/dp/B01N6EJJTC?ref_=Oct_s9_apbd_orec_hd_bw_b1x4K&pf_rd_r=TZFHGJ3NTFHJ5D35SGV6&pf_rd_p=992f62e6-e3b5-59ff-b921-18081b907823&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=465392', 'おもしろい！cででdede', '2020-10-19 21:11:08'),
(3, 'HARD THINGS (日本語)', 'https://www.amazon.co.jp/HARD-THINGS-%E3%83%99%E3%83%B3%E3%83%BB%E3%83%9B%E3%83%AD%E3%82%A6%E3%82%A3%E3%83%83%E3%83%84/dp/4822250857?ref_=Oct_s9_apbd_wsim_hd_bw_b1x4K&pf_rd_r=TZFHGJ3NTFHJ5D35SGV6&pf_rd_p=1aad5d90-3ef8-542d-929e-1a590240d201&pf_rd_s=merchandised-search-10&pf_rd_t=BROWSE&pf_rd_i=465392', 'メモメモ', '2020-10-19 21:12:01'),
(22, 'ART SINCE 1900:図鑑 1900年以後の芸術', 'https://www.amazon.co.jp/ART-SINCE-1900-%E5%9B%B3%E9%91%91-1900%E5%B9%B4%E4%BB%A5%E5%BE%8C%E3%81%AE%E8%8A%B8%E8%A1%93/dp/4487810353?pd_rd_w=Y6RnB&pf_rd_p=14c8160f-ffdc-4692-8875-d1b271eb736f&pf_rd_r=NFFT8SHHFVS0F4SZMG0D&pd_rd_r=20c8f3b1-d053-4723-9bce-8675a95971ce&pd_rd_wg=u7ZOf', '読みたいけどちょっと高いなー', '2020-10-22 21:47:42'),
(23, 'swsw', 'swsw', 'swsw', '2020-10-26 10:30:51'),
(34, 'dede', 'dede', 'frfr', '2020-10-29 21:23:03'),
(36, '非会員', '非会員', '非会員', '2020-10-29 21:54:51'),
(37, 'dede', 'dedede', '', '2020-10-29 22:01:49'),
(38, 'でで', 'でで', 'ででdede', '2020-10-29 22:26:31'),
(41, 'dede', 'swsw', 'swsw', '2020-10-29 22:31:49'),
(42, '2222', '222', '222', '2020-10-29 22:33:32'),
(43, '333', '333', '333', '2020-10-29 22:34:15'),
(44, '4444', '4444', '4444', '2020-10-29 22:34:55'),
(45, 'dedeed', 'dedede', 'dedede', '2020-10-29 22:35:55');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
