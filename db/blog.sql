-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Mar 2021, 15:04:58
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
  `blog_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`) VALUES
(163, 'PHP NEDİR?', '<p>PHP (PHP i&ccedil;in s&uuml;rekli tekrarlanan kısaltma:&nbsp;<em>Hypertext Preprocessor&nbsp;</em>&ndash; &Uuml;st&uuml;nyazı &Ouml;nişlemcisi) JavaScript ve&nbsp;<a href=\"https://www.python.org/doc/essays/blurb/\" target=\"_blank\">Python</a>&nbsp;gibi programlama dillerinin alt k&uuml;mesidir. Aralarındaki fark ise PHP genellikle sunucu taraflı iletişim i&ccedil;in kullanılırken JavaScript ise hem&nbsp;<em>frontend&nbsp;</em>ve&nbsp;<em>backend&nbsp;</em>i&ccedil;in kullanılır. Python ise sadece istemci tarafı i&ccedil;in kullanılmaktadır (<em>backend</em>).</p>\r\n\r\n<p>Kafanız mı karıştı? İşte bu y&uuml;zden PHP&rsquo;de daha derinlere inmeden ilk &ouml;nce programlama dillerini &ouml;ğrenmemiz gerekiyor.</p>\r\n\r\n<p>Bir programlama dili g&ouml;revlerin &ouml;zel bir y&uuml;r&uuml;tme ortamında &ccedil;alıştırılmasını otomatikleştiren bir dildir. Buna statik bir sayfaya (HTML ve CSS ile yapılmış) &ouml;nceden tanımladığınız belirli eylemleri yapmasını s&ouml;ylemek de dahildir.</p>\r\n\r\n<p>&Ouml;rneğin bir form sunucuya gitmeden &ouml;nce b&uuml;t&uuml;n alanların doldurulduğundan emin olmanızı sağlamak i&ccedil;in bir script kullanarak formu doğrulayabilirsiniz. Script, bir kullanıcı formu yolladığında &ccedil;alışır ve b&uuml;t&uuml;n alanları kontrol eder.</p>\r\n', '78673779243236214458about.jpg', 2),
(164, 'SQL NEDİR', '<p>SQL, verileri y&ouml;netmek ve tasarlamak i&ccedil;in kullanılan bir dildir. SQL, kendisi bir programlama dili olmamasına rağmen bir&ccedil;ok kişi tarafından programlama dili olarak bilinir. SQL herhangi bir veri tabanı ortamında kullanılan bir alt dildir.</p>\r\n', '553080367932513254232course-2.jpg', 3),
(165, 'Yapay Zeka NEDİR', '<p>yapay zeka</p>\r\n', '560488824102429564875events-1.jpg', 4),
(166, 'SELAM', '<p>selamlar</p>\r\n', '165900618295502761466events-2.jpg', 5),
(168, 'PHP SYMFONY', '<p>PHP&nbsp;</p>\r\n', '87731645244942251077course-details-tab-3.png', 1),
(169, 'merhabalar', '<p>OOoOoOoooo</p>\r\n', '868026818371661817048trainer-1.jpg', 7);

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
