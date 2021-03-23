-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Mar 2021, 11:41:24
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `blog_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `blog_resim` varchar(280) COLLATE utf8_turkish_ci NOT NULL,
  `blog_sira` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `blog_zaman` varchar(200) COLLATE utf8_turkish_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`, `kategori_id`, `blog_zaman`) VALUES
(38, 'php8', '<p>php8 nedir&nbsp;</p>\r\n', '155208938805246745160course-details.jpg', 1, 31, '2021-03-23 12:32:20'),
(39, 'Php Symfony', '<p>php symony nedir</p>\r\n', '160451479697605665969course-details-tab-1.png', 2, 31, '2021-03-23 12:32:35'),
(40, 'Yapay Zeka NEDİR', '<p>NEDİR,?</p>\r\n', '11471938381761644399hero-bg.jpg', 1, 32, '2021-03-23 12:40:41'),
(41, 'yapay zeka kullanım', '<p>yapay zeka alanları</p>\r\n', '838924277134772222953events-1.jpg', 2, 32, '2021-03-23 13:01:52'),
(42, 'SQL NEDİR', '<p>SQL NEDŞR???</p>\r\n', '385736222559361190649events-2.jpg', 1, 33, '2021-03-23 13:02:36'),
(43, 'MYSQL', '<p>MYSQL NEDİR??</p>\r\n', '18807725322582665566events-1.jpg', 2, 33, '2021-03-23 13:02:53'),
(44, 'YAZILIMCI', '<p>YAZILIMCILAR</p>\r\n', '949129577362876938565course-details-tab-3.png', 1, 34, '2021-03-23 13:05:23'),
(45, 'abcd', '<p>asdasas</p>\r\n', '260588919818726530357events-2.jpg', 1, 35, '2021-03-23 13:26:10'),
(46, 'MSSQL', '<p>MSSQL NEDİRR</p>\r\n', '885647339646122530051course-details.jpg', 3, 33, '2021-03-23 13:28:28'),
(47, 'php frame', '<p>asdasdasd</p>\r\n', '920949722833061027210course-details-tab-4.png', 3, 31, '2021-03-23 13:38:19');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
