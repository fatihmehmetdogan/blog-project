-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Mar 2021, 23:30:00
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
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logo` varchar(120) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(160) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_telefon` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_email` varchar(80) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_logo`, `ayar_adres`, `ayar_telefon`, `ayar_email`) VALUES
(1, 'BLOG SİTESİ 12', 'merhaba blog sitemize hoşgeldiniz 12', '', 'youtube12', '055555555529', 'bloggg12@info.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
