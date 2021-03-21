-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Mar 2021, 23:30:45
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
  `kullanıcı_id` int(11) NOT NULL,
  `blog_zaman` varchar(200) COLLATE utf8_turkish_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`, `kullanıcı_id`, `blog_zaman`) VALUES
(14, 'php blog', '<p>Bir PHP betiğinin Perl ya da C gibi dillerden ne kadar farklı bir yapıda olduğuna dikkat edin. HTML kodu oluşturmak i&ccedil;in bir s&uuml;r&uuml; kod yazacağınıza, istediğiniz işi yapan bir PHP kodu yazıp onu HTML kodunun i&ccedil;ine g&ouml;m&uuml;yorsunuz (bu &ouml;rnekte, yapılan iş ekrana yazı yazmak). PHP kodu&nbsp;<a href=\"https://www.php.net/manual/tr/language.basic-syntax.phpmode.php\"><code>&lt;?php</code>&nbsp;ve&nbsp;<code>?&gt;</code>&nbsp;&ouml;zel başlangı&ccedil; ve bitiş etiketleri</a>&nbsp;arasına yazılır. Bu etiketler &quot;PHP kipine&quot; rahatlıkla girip &ccedil;ıkabilmenizi sağlarlar.</p>\r\n\r\n<p>PHP&#39;yi Javascript gibi kullanıcı tarafında &ccedil;alışan dillerden ayıran, sunucu tarafında &ccedil;alıştırılıyor olmasıdır. Yukardaki &ouml;rnekteki kodu kendi sunucunuzda &ccedil;alıştırırsanız, sitenize bağlanan kullanıcılar kodu g&ouml;remeyecekler ve m&uuml;dahale edemeyecekler, yalnızca sonucu g&ouml;rebileceklerdir. Dilerseniz HTTP sunucunuzu b&uuml;t&uuml;n HTML dosyalarınızı PHP dosyası olarak g&ouml;r&uuml;p işleyecek hale bile getirebilirsiniz. Buna rağmen kullanıcılar sizin ger&ccedil;ekte sunucu taraflı bir uygulama kullandığınızı fark edemeyebilirler.</p>\r\n\r\n<p>PHP kullanmanın en g&uuml;zel yanlarından biri, yeni kullanıcılar i&ccedil;in &ouml;ğreniminin olduk&ccedil;a kolay olması ve aynı zamanda profesyonel kullanıcılar i&ccedil;in ileri seviyede &ouml;zellikler i&ccedil;ermesidir. PHP&#39;nin uzun &ouml;zellikler listesini okumaktan korkmayın. Kısa s&uuml;rede PHP ile programlamaya başlayabilir ve birka&ccedil; saat i&ccedil;ersinde basit programlar yazmaya başlayabilirsiniz.</p>\r\n\r\n<p>PHP&#39;nin gelişimi sunucu-taraflı programlamaya odaklanmışsa da, &ccedil;ok daha fazlasını yapmanıza olanak tanıyan ara&ccedil;lara da sahiptir.&nbsp;<a href=\"https://www.php.net/manual/tr/intro-whatcando.php\">PHP neler yapabilir?</a>&nbsp;b&ouml;l&uuml;m&uuml;nde bu ara&ccedil;lar hakkında daha fazla bilgiye ulaşabilirsiniz. Eğer yalnızca site programlama ile ilgileniyorsanız,&nbsp;<a href=\"https://www.php.net/manual/tr/tutorial.php\">Basit bir eğitmen</a>&nbsp;b&ouml;l&uuml;m&uuml;nden devam edebilirsiniz.</p>\r\n', '601715745608573779course-2.jpg', 29, 0, '2021-03-18 17:07:58'),
(15, 'MÜHENDİSLİK', '<p>M&uuml;hendis; teknik, matematiksel ve sosyal veriler ışığında insanların kullanımına y&ouml;nelik yeni sistemler &uuml;retme ve geliştirme ile sorumludur. M&uuml;hendis, b&uuml;y&uuml;k &ouml;l&ccedil;ekli, karmaşık sistemleri analiz etmek, geliştirmek ve değerlendirmek i&ccedil;in &ccedil;eşitli sahalarda g&ouml;rev alır. M&uuml;hendislik, &ccedil;alışma sahalarına g&ouml;re; inşaat m&uuml;hendisi, genetik m&uuml;hendisi, maden m&uuml;hendisi, elektrik elektronik m&uuml;hendisi, makine m&uuml;hendisi, &ccedil;evre m&uuml;hendisi gibi pek &ccedil;ok dala ayrılmaktadır.</p>\r\n\r\n<h2>M&uuml;hendisin Sorumlulukları Nelerdir?</h2>\r\n\r\n<p>Uzmanlık alanına g&ouml;re g&ouml;rev ve yetkileri değişiklik g&ouml;steren m&uuml;hendisliğin temel sorumlulukları şu başlıklar altında toplanabilir;</p>\r\n\r\n<ul>\r\n	<li>Araştırma fikirlerini teknik planlara d&ouml;n&uuml;şt&uuml;rmek,</li>\r\n	<li>Planları oluşturmak i&ccedil;in bilgisayar destekli tasarım yazılımları kullanmak,</li>\r\n	<li>M&uuml;hendislik alanına bağlı olarak projeleri y&ouml;netmek ve sahadaki sistemleri ziyaret etmek,</li>\r\n	<li>Projelerin etkinliği, g&uuml;venliği ve maliyeti g&ouml;z &ouml;n&uuml;nde bulundurularak rapor yazmak ve sunmak,</li>\r\n	<li>M&uuml;şterilerle, iş memnuniyetine y&ouml;nelik iletişimde bulunmak,</li>\r\n	<li>Diğer departmanlarla koordineli bir şekilde &ccedil;alışmak,</li>\r\n	<li>Pazar ihtiya&ccedil;larını, trendleri ve hizmet portf&ouml;y&uuml;n&uuml; analiz etmek,</li>\r\n	<li>Meslek sahasındaki yenilikleri araştırmak.</li>\r\n</ul>\r\n\r\n<h2>M&uuml;hendis Olmak İ&ccedil;in Hangi Eğitimi Almak Gerekir?</h2>\r\n\r\n<p>M&uuml;hendis olmak i&ccedil;in &uuml;niversitelerin ilgili m&uuml;hendislik b&ouml;l&uuml;mlerinden lisans derecesi ile mezun olmak yeterli olmaktadır.</p>\r\n', '823951723096192329course-3.jpg', 2, 0, '2021-03-18 18:31:14'),
(16, 'Bootstrap1', '<p>B&uuml;y&uuml;k ihtimalle framework&rsquo;lerin fonksiyonelliklerine aşinasınızdır. İşleme &ouml;zel s&ouml;z dizimleri geliştiricilerin basit komutlar ve fonksiyonlar hakkında d&uuml;ş&uuml;nmeleri gerekmediğinden dolayı&nbsp;<a href=\"https://www.hostinger.web.tr/rehberler/web-sitesi-nasil-yapilir-detayli-anlatim\" target=\"_blank\">web siteleri</a>&nbsp;&ccedil;ok daha hızlı bir şekilde kurmalarına izin verir.</p>\r\n\r\n<p>Yine de k&uuml;t&uuml;phanelerin yaygın kullanımından dolayı oluşan tutarsızlık değişikliğe yol a&ccedil;tı ve işte tam olarak burada Bootstrap sahneyi aldı.</p>\r\n\r\n<p>Bu a&ccedil;ık kaynaklı front end framework, ilk olarak daha hızlı ve kolay front end web sitesi geliştirme i&ccedil;in Mark Otto ve Jacon Thornton tarafından geliştirildi.</p>\r\n\r\n<p>&Ccedil;eşitli fonksiyonlar ve navigasyon, &ouml;rt&uuml; sistemi, g&ouml;rsel karuselleri ve butonlar gibi bileşenler i&ccedil;in her t&uuml;rden HTML ve CSS bazlı tasarım şablonlarını i&ccedil;erir.</p>\r\n\r\n<p>Bootstrap, her ne kadar geliştiricilerinin tekrar tekrar şablonları y&ouml;netmelerinde zaman tasarrufu yapmalarını sağlasa da ana hedefi mobil dostu siteler oluşturmaktır. Web sitesinin kullanıcı aray&uuml;z&uuml;n&uuml;n ister k&uuml;&ccedil;&uuml;k ekranlı telefonlar, ister b&uuml;y&uuml;k ekranlı masa&uuml;st&uuml; bilgisayarlar olsun b&uuml;t&uuml;n ekran boyutlarında en ideal olarak &ccedil;alışmasına izin verir.</p>\r\n', '246203719359903147favicon.png', 3, 0, '2021-03-18 23:44:15'),
(18, 'Uygulama', '<p>uygulamalarr</p>\r\n', '791931275890440700course-details-tab-5.png', 3, 0, '2021-03-19 18:40:34'),
(19, 'Yapay Zeka', '<p><strong>Yapay zek&acirc;</strong>, bir&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Bilgisayar\">bilgisayarın</a>&nbsp;veya bilgisayar kontrol&uuml;ndeki bir&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Robot\">robotun</a>&nbsp;&ccedil;eşitli faaliyetleri&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Zek%C3%A2\">zeki</a>&nbsp;canlılara benzer şekilde yerine getirme kabiliyeti.<a href=\"https://tr.wikipedia.org/wiki/Yapay_zek%C3%A2#cite_note-1\">[1]</a>&nbsp;İngilizce&nbsp;<em>artificial intelligence</em>&nbsp;kavramının&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Akronim\">akronimi</a>&nbsp;olan&nbsp;<strong>AI</strong>&nbsp;s&ouml;zc&uuml;ğ&uuml; de bilişimde sıklıkla kullanılır.</p>\r\n\r\n<p>Yapay zek&acirc; &ccedil;alışmaları sıklıkla insanın d&uuml;ş&uuml;nme y&ouml;ntemlerini taklit eden yapay y&ouml;ntemler geliştirmeye y&ouml;neliktir,<a href=\"https://tr.wikipedia.org/wiki/Yapay_zek%C3%A2#cite_note-2\">[2]</a>&nbsp;ancak bununla sınırlı değildir. &Ouml;ğrenebilen ve gelecekte&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Zeka\">insan zek&acirc;sından</a>&nbsp;bağımsız gelişebilecek bir yapay zek&acirc; kavramına doğru yeni y&ouml;nelimler oluşmaktadır. Bu y&ouml;nelim, insanın&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Evren\">evreni</a>&nbsp;ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Do%C4%9Fa\">doğayı</a>&nbsp;anlama &ccedil;abasında kendisine yardımcı olabilecek belki de kendisinden daha zeki, insan &ouml;tesi varlıklar meydana getirme d&uuml;ş&uuml;n&uuml;n bir &uuml;r&uuml;n&uuml;d&uuml;r. Bu d&uuml;ş, 1920&#39;li yıllarda yazılan ve sonraları&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Isaac_Asimov\">Isaac Asimov</a>&#39;u etkileyen modern&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Bilimkurgu\">bilimkurgu</a>&nbsp;edebiyatının &ouml;nc&uuml; yazarlarından&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Karel_%C4%8Capek\">Karel Čapek</a>&#39;in eserlerinde dışa vurmuştur. Karel Čapek,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/R.U.R\">R.U.R</a>&nbsp;adlı tiyatro oyununda yapay zek&acirc;ya sahip&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Robot\">robotlar</a>&nbsp;ile insanlığın ortak toplumsal sorunlarını ele alarak 1920 yılında yapay zek&acirc;nın insan aklından bağımsız gelişebileceğini &ouml;ng&ouml;rm&uuml;şt&uuml;r.</p>\r\n', '505354902434447324yapay.jpg', 4, 0, '2021-03-19 18:42:38'),
(20, 'blog başlık', '<p>g&uuml;zel bir yazı</p>\r\n', '367412510145272658', 4, 0, '2021-03-21 23:13:20');

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
