-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 May 2015, 10:45:30
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
`id` int(2) NOT NULL,
  `katAdi` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`id`, `katAdi`) VALUES
(1, 'ASP.NET'),
(2, 'PHP');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar1`
--

CREATE TABLE IF NOT EXISTS `kullanicilar1` (
`id` int(1) NOT NULL,
  `kisiAdi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kulAdi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(20) COLLATE utf8_turkish_ci NOT NULL DEFAULT 'mail yok',
  `durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar1`
--

INSERT INTO `kullanicilar1` (`id`, `kisiAdi`, `kulAdi`, `sifre`, `mail`, `durum`) VALUES
(1, 'Kazım BAŞLAK', 'admin', 'admin', 'admin@admin.com', '1'),
(2, 'ali', 'ali', 'ali', 'ali@ali.com', '0'),
(3, 'ddd', 'ddd', 'ddd', 'ddd@ddd.com', '0'),
(4, 'asd', 'asd', 'asd', 'asd@asd.com', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE IF NOT EXISTS `makale` (
`id` int(5) NOT NULL,
  `baslik` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_turkish_ci NOT NULL,
  `onay` varchar(1) COLLATE utf8_turkish_ci NOT NULL,
  `katId` varchar(2) COLLATE utf8_turkish_ci NOT NULL,
  `okunmaSayisi` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`id`, `baslik`, `icerik`, `tarih`, `keywords`, `description`, `onay`, `katId`, `okunmaSayisi`) VALUES
(1, 'ASP.NET', '<p>\r\n	asp.net i&ccedil;eriği Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden berasp.net i&ccedil;eriği Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden berasp.net i&ccedil;eriği Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden ber</p>\r\n', '15.05.2015', 'adı ,matbaacının bir ,oluşturmak ', 'asp.net içeriği Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı ol', '5', '1', 0),
(4, 'PHP', '<p>\r\n	PHP i&ccedil;eriği Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden berasp.net i&ccedil;eriği Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden berasp.net i&ccedil;eriği Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden ber</p>\r\n', '15.05.2015', 'adı ,PHP ,oluşturmak ', 'PHP içeriği Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı ol', '5', '2', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkiler`
--

CREATE TABLE IF NOT EXISTS `yetkiler` (
`id` int(2) NOT NULL,
  `number` int(1) NOT NULL,
  `text` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkiler`
--

INSERT INTO `yetkiler` (`id`, `number`, `text`) VALUES
(1, 0, 'Editör'),
(2, 1, 'Yönetici'),
(3, 2, 'Engelli'),
(4, 4, 'Onaylanmış'),
(5, 5, 'Onaylanmamış'),
(6, 6, 'silinmiş');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar1`
--
ALTER TABLE `kullanicilar1`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `makale`
--
ALTER TABLE `makale`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yetkiler`
--
ALTER TABLE `yetkiler`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar1`
--
ALTER TABLE `kullanicilar1`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `makale`
--
ALTER TABLE `makale`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `yetkiler`
--
ALTER TABLE `yetkiler`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
