-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Mar 2021, 15:06:03
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
-- Tablo için tablo yapısı `blog_to_kategori`
--

CREATE TABLE `blog_to_kategori` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog_to_kategori`
--

INSERT INTO `blog_to_kategori` (`id`, `blog_id`, `kategori_id`) VALUES
(2, 138, 46),
(11, 137, 45),
(12, 139, 48),
(13, 140, 45),
(14, 143, 45),
(15, 160, 45),
(17, 161, 45),
(18, 161, 46),
(19, 162, 48),
(20, 161, 48),
(21, 137, 46),
(22, 163, 45),
(23, 164, 46),
(24, 165, 45),
(25, 165, 46),
(26, 165, 48),
(27, 138, 45),
(28, 167, 45),
(29, 167, 46),
(30, 164, 48),
(31, 168, 45),
(32, 165, 49),
(33, 169, 49);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog_to_kategori`
--
ALTER TABLE `blog_to_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog_to_kategori`
--
ALTER TABLE `blog_to_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
