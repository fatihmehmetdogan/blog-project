-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Mar 2021, 23:32:06
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
-- Tablo için tablo yapısı `icerik`
--

CREATE TABLE `icerik` (
  `icerik_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `icerik_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `icerik_sira` int(11) NOT NULL,
  `icerik_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `icerik_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik`
--

INSERT INTO `icerik` (`icerik_id`, `kategori_id`, `icerik_baslik`, `icerik_resim`, `icerik_sira`, `icerik_aciklama`, `icerik_zaman`) VALUES
(2, 6, 'SQL NEDİR', '775386147212223172207sqll.png', 2, '<p>Veritabanı yaklaşımı ile birlikte bir veri sorgulama diline veya aracına ihtiya&ccedil; duyulmuştur. İlk başta matematiksel bir s&ouml;zdizimine sahip olan SQUARE adlı bir dil geliştirilmiştir. Geniş kullanıcı kitleleri tarafında kolay kullanılabilmesi i&ccedil;in matematiksel s&ouml;z dizimli SQUARE dilinden vazge&ccedil;ilerek, İngilizce&#39;ye benzer s&ouml;zdizimine sahip bir dil oluşturulmuş ve SEQUEL olarak adlandırılmıştır. Daha sonra da bu SEQUEL dili, İngilizce s&ouml;ylenişine paralel olarak SQL olarak adlandırılmıştır.</p>\r\n\r\n<p>SQL dili ilişkisel alanda b&uuml;y&uuml;k ilgi g&ouml;rm&uuml;ş ve İlişkisel Veri Tabanı Y&ouml;netim Sistemlerinin (İVTYS) t&uuml;m&uuml;nde yer alan standart dil g&ouml;r&uuml;n&uuml;m&uuml; kazanmıştır. Bu nedenle Veri Tabanı konusunda &ccedil;alışan t&uuml;m bilişim teknik personeli tarafından bilinmesi gereken bir dil konumundadır.</p>\r\n', '2021-03-19 11:41:42'),
(3, 6, 'MYSQL', '159719213282139999852mysq.jpg', 23, '<p>MySQL AB adında bir İsve&ccedil;li şirket MySQL&rsquo;i geliştirdi. Sun Microsystems adlı Amerikan teknoloji şirketi MySQL AB&rsquo;yi 2008 yılında satın aldıklarında tam m&uuml;lkiyete sahip oldular. Daha sonra ise Amerikan teknoloji devi, 2010&rsquo;da Oracle Sun Microsystems&rsquo;in kendisini satın aldı ve o zamandan beri MySQL pratikte Oracle&rsquo;ın m&uuml;lkiyetinde.</p>\r\n\r\n<p>Genel tanım olarak, istemci-sunucu modelli MySQL a&ccedil;ık kaynaklı bir ilişkisel veritabanı y&ouml;netim sistemidir (RDBMS).&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C4%B0li%C5%9Fkisel_veri_taban%C4%B1_y%C3%B6netim_sistemi\" target=\"_blank\">RDBMS</a>&nbsp;ilişkisel bir modele dayalı veritabanı yaratmak ve y&ouml;netmek i&ccedil;in kullanılan bir yazılım veya hizmettir. Şimdi, hadi her terimi ayrı ayrı detaylı bir bi&ccedil;imde inceleyelim:</p>\r\n', '2021-03-19 11:44:08'),
(4, 14, 'İSTATİSTİK', '6602769906547728068istat.jpg', 3, '<p><strong>İstatistik</strong>&nbsp;veya&nbsp;<strong>sayıtım</strong>, belirli bir ama&ccedil; i&ccedil;in veri toplama, tablo ve grafiklerle &ouml;zetleme, sonu&ccedil;ları yorumlama, sonu&ccedil;ların g&uuml;ven derecelerini a&ccedil;ıklama, &ouml;rneklerden elde edilen sonu&ccedil;ları kitle i&ccedil;in genelleme, &ouml;zellikler arasındaki ilişkiyi araştırma, &ccedil;eşitli konularda geleceğe ilişkin tahmin yapma,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Deney\">deney</a>&nbsp;d&uuml;zenleme ve g&ouml;zlem ilkelerini kapsayan bir&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Bilim\">bilimdir</a>. Belirli bir ama&ccedil; i&ccedil;in verilerin toplanması, sınıflandırılması, &ccedil;&ouml;z&uuml;mlenmesi ve sonu&ccedil;larının yorumlanması esasına dayanır.</p>\r\n\r\n<p><a href=\"https://tr.wikipedia.org/wiki/Fizik\">Fizik</a>&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Do%C4%9Fa_bilimleri\">doğa bilimler</a>&nbsp;ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Sosyal_bilimler\">sosyal bilimlere</a>&nbsp;kadar geniş bir alanda uygulanabilmektedir. Aynı zamanda iş d&uuml;nyası ve h&uuml;k&ucirc;metle ilişkili t&uuml;m alanlarda karar almak amacıyla kullanılır.&nbsp;<em>İstatistik</em>&nbsp;yukarıdaki anlamıyla tekildir. S&ouml;zc&uuml;ğ&uuml;n &ccedil;oğul anlamı, &quot;sistemli bir şekilde toplanan sayısal bilgiler&quot;dir. &Ouml;rnek olarak n&uuml;fus istatistikleri, &ccedil;evre istatistikleri, spor istatistikleri, mill&icirc; eğitim istatistikleri verilebilir.</p>\r\n\r\n<p>İstatistiği &ouml;ğrenmedeki ama&ccedil;, bir araştırmada elde edilen verilerin uygun istatistiksel y&ouml;ntemler kullanılarak yorumlanacağını bilmektir.</p>\r\n\r\n<p>İstatistiksel y&ouml;ntemler, toplanmış verilerin &ouml;zetlenmesi veya a&ccedil;ıklanması amacıyla kullanılır. Bu t&uuml;r bir yaklaşım&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Betimsel_istatistik\">betimsel istatistik</a>&nbsp;adını alır. Buna ek olarak verilerdeki &ouml;rt&uuml;şmelerin (kalıplar veya &ouml;r&uuml;nt&uuml;ler), g&ouml;zlemlerdeki rassallığı ve belirsizliği g&ouml;ze alacak şekilde, &uuml;zerinde &ccedil;alışılan anak&uuml;tle veya s&uuml;re&ccedil; hakkında sonu&ccedil; &ccedil;ıkarma amacıyla modellenmesi,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%87%C4%B1kar%C4%B1msal_istatistik\">&ccedil;ıkarımsal istatistik</a>&nbsp;adını alır. Hem betimsel istatistik hem de tahminsel istatistik,&nbsp;<strong>uygulamalı istatistiğin</strong>&nbsp;par&ccedil;aları olarak sayılabilir. Matematiksel istatistik adı verilen disiplin ise konunun teorik matematiksel altyapısını inceleyen disiplindir.</p>\r\n\r\n<p>İstatistiğin diğer b&ouml;l&uuml;mlerle olan ilişkilerinden doğan kavramlar şu şekilde g&ouml;sterilebilir: Ekono</p>\r\n', '2021-03-19 11:57:18'),
(5, 2, 'PHP', '33063128455172866713php-developer.jpg', 1, '<p>Web uygulama geliştirme alanından en &ccedil;ok kullanılan dillerden bir tanesi PHP programlama dilidir.</p>\r\n\r\n<p>Bu yazımızda&nbsp;<a href=\"https://www.argenova.com.tr/php\" target=\"_blank\">PHP</a>&nbsp;ile ilgili bilmeniz gereken t&uuml;m detayları sizlerle paylaşacağız.&nbsp;</p>\r\n\r\n<h2><strong>PHP Nedir?&nbsp;</strong></h2>\r\n\r\n<p><strong>PHP</strong>, 1994 yılında Rasmus Lerdorf&#39;un kişisel ana sayfasını korumak i&ccedil;in kullandığı C dilinde birka&ccedil; Common Gateway Interface (CGI) programı yazmasıyla başlamıştı.</p>\r\n\r\n<p>PHP kodları sunucu tarafında &ccedil;alıştırılır ve istemci bilgisayara HTML i&ccedil;erik olarak geri d&ouml;ner.&nbsp;</p>\r\n\r\n<h2><strong>PHP Nasıl Kullanılır ?</strong></h2>\r\n\r\n<p>PHP yazabilmek i&ccedil;in ilk &ouml;nce bilgisayarınıza yerel sunucu mod&uuml;llerini y&uuml;klemeniz şarttır. Bu t&uuml;r mod&uuml;lleri tek bir pakette barındıran (Apache, MySQL, PhpMyAdmin gibi...) bazı hazır programlar vardır.&nbsp;</p>\r\n\r\n<p>&Ouml;rneğin XAMPP ve WAMP Server adlı programlar bu ama&ccedil;la hazırlanmıştır ve pek &ccedil;ok geliştirici tarafından tercih edilir.</p>\r\n\r\n<p>Eğer PHP ile yazılım geliştiriyorsanız&nbsp;<a href=\"https://www.argenova.com.tr/en-iyi-8-php-framework\" target=\"_blank\">En İyi 8 PHP Framework</a>&nbsp;başlıklı yazımızı okumanızı &ouml;neriyoruz.</p>\r\n\r\n<h2><strong>PHP Hangi Veritabanlarını Destekler?</strong></h2>\r\n\r\n<p>PHP MySQL ,SQLite, PostGreSQL, SyBase, IBM-DB2, Oracle, Mongo, dBase v.b. Bir &ccedil;ok pop&uuml;ler veritabanını projelerinizde kullabilmenize izin verir.</p>\r\n\r\n<h2><strong>PHP Kullanımı Neden Bu Kadar Yaygın?</strong></h2>\r\n\r\n<p>İnsanlar, programlama dillerini yalnızca yaygın kullanımlarına g&ouml;re değil, performans, web sitesi g&uuml;venliği, dil bağımsızlığı, maliyet etkinliği ve daha pek &ccedil;ok fakt&ouml;r gibi belirli diğer fakt&ouml;rlere g&ouml;re tercih ederler.</p>\r\n\r\n<p>PHP&#39;nin &ccedil;ok tercih edilen bir programlama dili olmasının bir &ccedil;ok nedeni var,</p>\r\n\r\n<ul>\r\n	<li>Performans</li>\r\n	<li>&Uuml;retim Kolaylığı</li>\r\n	<li>Destek ve Topluluk</li>\r\n	<li>Kolay Geliştirme ve Bakım</li>\r\n	<li>Hata Yakalama ve Y&ouml;netme&nbsp;</li>\r\n	<li>Geniş K&uuml;t&uuml;phane Desteği</li>\r\n	<li>Y&uuml;ksek G&uuml;venlik</li>\r\n	<li>&Ccedil;apraz Platform Desteği</li>\r\n</ul>\r\n', '2021-03-19 15:44:40'),
(6, 2, 'Php Symfony', '93815579420207814591symfony.jpg', 2, '<p>Symfony&nbsp;</p>\r\n\r\n<p>Symfony 2 framework&nbsp;bileşenleri, Drupal i&ccedil;erik y&ouml;netim sistemi ya da phpBB forum yazılımı gibi etkileyici bir&ccedil;ok proje tarafından kullanılmaktadır.&nbsp;Symfony geniş bir geliştirici topluluğuna ve &ccedil;oşkun bir&nbsp;hayranlara kitlesine sahiptir.</p>\r\n\r\n<p>Symfony Bileşenleri, form oluşturma, nesne yapılandırma, y&ouml;nlendirme, kimlik doğrulama, şablon oluşturma ve daha bir&ccedil;ok diğerleri&nbsp;gibi farklı g&ouml;revleri tamamlayabileceğiniz yeniden kullanılabilir Php k&uuml;t&uuml;phaneleridir.&nbsp;Bileşenlerden herhangi birini &nbsp;<a href=\"https://getcomposer.org/\" target=\"_blank\">Composer</a>&nbsp;PHP dependency manager ile y&uuml;kleyebilirsiniz.</p>\r\n', '2021-03-19 15:46:32');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `icerik`
--
ALTER TABLE `icerik`
  ADD PRIMARY KEY (`icerik_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `icerik`
--
ALTER TABLE `icerik`
  MODIFY `icerik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
