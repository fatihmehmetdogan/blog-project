-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Mar 2021, 15:03:19
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
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_kategori` varchar(240) COLLATE utf8_turkish_ci NOT NULL,
  `blog_id` int(11) NOT NULL,
  `yorum_adsoyad` varchar(280) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_kategori`, `blog_id`, `yorum_adsoyad`, `yorum_detay`, `yorum_zaman`, `yorum_onay`) VALUES
(2, '2', 6, 'Mehmet', 'İYİ GÜNLER', '2021-03-19 16:02:15', 1),
(3, '1', 15, 'FM dogan', 'mühendislik ile ilgili güzel bir yazı', '2021-03-22 08:57:45', 1),
(4, '1', 15, 'mehmet', 'asdsad', '2021-03-22 08:58:37', 1),
(5, '1', 15, 'dogan', 'günaydınn', '2021-03-22 08:58:47', 1),
(6, '1', 19, 'fmd', 'yapay zeka', '2021-03-22 09:23:58', 1),
(8, '1', 139, 'mehmet', 'sadsa', '2021-03-24 15:44:21', 1),
(9, '1', 138, 'mehmet', 'asdasdasd', '2021-03-25 12:18:20', 1),
(10, '1', 168, 'fatih ', 'asdas', '2021-03-25 13:08:29', 1),
(12, '1', 165, 'FM dogan', 'selammm', '2021-03-25 13:09:33', 1),
(14, '1', 165, 'asdas', '213', '2021-03-25 13:11:03', 1),
(18, '1', 164, 'dogan', 'kljkl', '2021-03-25 13:15:20', 1),
(20, '1', 165, 'fmd', '123fmd', '2021-03-25 13:16:06', 1),
(21, '1', 163, 'mehmet dogan', '999', '2021-03-25 13:16:46', 1),
(22, '1', 169, 'wqe', 'ewq321', '2021-03-25 13:19:09', 1),
(23, '1', 168, 'mehmet', 'merhabalar', '2021-03-25 13:31:04', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
