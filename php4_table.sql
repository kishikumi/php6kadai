-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql3104.db.sakura.ne.jp
-- 生成日時: 2025 年 1 月 24 日 11:05
-- サーバのバージョン： 8.0.40
-- PHP のバージョン: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `compassion8008_php3`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `php4_table`
--

CREATE TABLE `php4_table` (
  `id` int NOT NULL,
  `sleep` tinyint UNSIGNED NOT NULL,
  `mood` tinyint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `php4_table`
--

INSERT INTO `php4_table` (`id`, `sleep`, `mood`, `text`, `date`, `user_id`) VALUES
(1, 8, 3, 'どうかな？', '2025-01-04 23:07:03', 0),
(2, 8, 3, 'どうかな？', '2025-01-04 23:07:15', 0),
(3, 6, 4, 'データベース難しいkousin', '2025-01-04 23:07:56', 0),
(4, 5, 5, '更新：課題のせいで時間が溶ける', '2025-01-04 23:09:25', 0),
(5, 10, 7, 'よく眠れた', '2025-01-04 23:51:32', 0),
(6, 8, 7, 'なんとかたどり着いた', '2025-01-05 00:03:25', 0),
(7, 5, 3, '不眠で体がだるい', '2025-01-05 00:41:51', 0),
(8, 5, 9, 'うまいこといけた', '2025-01-05 01:13:45', 0),
(9, 6, 3, '疲れたー', '2025-01-22 21:56:07', 0),
(10, 5, 3, 'できるかな？', '2025-01-22 21:58:02', 0),
(11, 8, 8, 'できるかな', '2025-01-22 22:07:25', 0),
(12, 5, 7, 'ラーメン', '2025-01-22 22:50:55', 0),
(13, 8, 3, 'サバ', '2025-01-22 23:12:42', 0),
(14, 5, 5, 'さば', '2025-01-22 23:13:06', 0),
(15, 8, 4, '疲れた', '2025-01-22 23:29:18', 0),
(17, 0, 0, 'gggg', '2025-01-23 23:40:12', 0),
(18, 5, 5, '早く寝たい', '2025-01-23 23:54:52', 1),
(19, 7, 7, 'できたかな？', '2025-01-23 23:55:54', 4),
(20, 2, 2, 'どうでしょう？', '2025-01-24 00:15:12', 9),
(21, 2, 2, 'どうでしょう？', '2025-01-24 00:16:30', 9),
(22, 8, 5, 'どうでしょう', '2025-01-24 00:16:55', 1),
(23, 1, 1, '眠い', '2025-01-24 00:21:40', 1),
(24, 8, 0, 'そろそろやめよう', '2025-01-24 00:24:00', 1),
(25, 8, 0, 'そろそろやめよう', '2025-01-24 00:28:23', 1),
(26, 10, 3, 'っっっっp', '2025-01-24 09:15:22', 1),
(27, 7, 5, '締切間近', '2025-01-24 09:35:32', 4),
(28, 7, 5, '締切間近', '2025-01-24 09:38:03', 4),
(29, 7, 5, '締切間近', '2025-01-24 09:38:39', 1),
(30, 7, 5, '締切間近', '2025-01-24 09:47:37', 4),
(31, 7, 5, '締切間近', '2025-01-24 10:17:28', 4),
(32, 5, 5, 'DB難しい', '2025-01-24 10:39:15', 1),
(33, 10, 8, 'そろそろ締切', '2025-01-24 11:04:33', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php4_table`
--
ALTER TABLE `php4_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `php4_table`
--
ALTER TABLE `php4_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
