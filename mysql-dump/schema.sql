-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Haz 2020, 13:05:00
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cafe`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `admin_yetki` enum('0','1') CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_kadi`, `admin_sifre`, `admin_yetki`) VALUES
(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anayemek`
--

CREATE TABLE `anayemek` (
  `anayemek_id` int(11) NOT NULL,
  `anayemek_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `anayemek_fiyat` int(11) NOT NULL,
  `anayemek_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `anayemek_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anayemek`
--

INSERT INTO `anayemek` (`anayemek_id`, `anayemek_ad`, `anayemek_fiyat`, `anayemek_detay`, `anayemek_resimyol`) VALUES
(4, 'KİREMİT KEBABI', 35, '', 'uploads/unnamed sdasc(1).jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gmenu_anayemek`
--

CREATE TABLE `gmenu_anayemek` (
  `anayemek_id` int(11) NOT NULL,
  `anayemek_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `anayemek_fiyat` int(11) NOT NULL,
  `anayemek_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `anayemek_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gmenu_anayemek`
--

INSERT INTO `gmenu_anayemek` (`anayemek_id`, `anayemek_ad`, `anayemek_fiyat`, `anayemek_detay`, `anayemek_resimyol`) VALUES
(33, 'Kıymalı Pide', 25, '', 'uploads/inqwdefrgtfhghdir.jpg'),
(34, 'Kuşbaşı Pide', 25, '', 'uploads/inqwdefrgtfhghdir.jpg'),
(35, 'Karışık Pide', 25, '', 'uploads/inqwdefrgtfhghdir.jpg'),
(36, 'ADANA KEBAP', 30, 'Zırhlanmış dana ve kuzu eti, közde domates ve biber, sumaklı soğan, maydonoz ile servis edilir', 'uploads/iqewefrgthgcjndir.jpg'),
(37, 'BONFILE ŞIŞ', 30, 'Soslanmış dana bonfile, közde domates ve biber, sumaklı soğan eşliğinde servis edilir.', 'uploads/iqewefgrfndir.jpg'),
(38, 'SAC KAVURMA', 30, 'Dana ve kuzu antrikotları, biber çeşitleri, özel baharat ile kavrulup servis edilir.', 'uploads/5df7427d7152d81e2451d30e.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gmenu_icecek`
--

CREATE TABLE `gmenu_icecek` (
  `icecek_id` int(11) NOT NULL,
  `icecek_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `icecek_fiyat` int(11) NOT NULL,
  `icecek_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icecek_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gmenu_icecek`
--

INSERT INTO `gmenu_icecek` (`icecek_id`, `icecek_ad`, `icecek_fiyat`, `icecek_detay`, `icecek_resimyol`) VALUES
(5, 'Taze Sıkılmış Portakal Suyu', 10, '', 'uploads/unnamsed (1).jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gmenu_tatli`
--

CREATE TABLE `gmenu_tatli` (
  `tatli_id` int(11) NOT NULL,
  `tatli_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tatli_fiyat` int(11) NOT NULL,
  `tatli_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tatli_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gmenu_tatli`
--

INSERT INTO `gmenu_tatli` (`tatli_id`, `tatli_ad`, `tatli_fiyat`, `tatli_detay`, `tatli_resimyol`) VALUES
(3, 'Fırında Sütlaç', 20, 'SÜTLAÇ', 'uploads/ytk-firin-sutlac-site.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icecekler`
--

CREATE TABLE `icecekler` (
  `icecek_id` int(11) NOT NULL,
  `icecek_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icecek_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `icecek_fiyat` int(11) NOT NULL,
  `icecek_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icecekler`
--

INSERT INTO `icecekler` (`icecek_id`, `icecek_ad`, `icecek_detay`, `icecek_fiyat`, `icecek_resimyol`) VALUES
(11, 'ÇAY', '', 5, 'uploads/indsdwesfgir.jpg'),
(12, 'TÜRK KAHVESI', '', 8, 'uploads/sdwefrggindir.jpg'),
(13, 'Sıcak Çikolata', '', 10, 'uploads/inqwefrgtgdir.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kahvalti`
--

CREATE TABLE `kahvalti` (
  `kahvalti_id` int(11) NOT NULL,
  `kahvalti_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kahvalti_fiyat` int(11) NOT NULL,
  `kahvalti_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kahvalti_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kahvalti`
--

INSERT INTO `kahvalti` (`kahvalti_id`, `kahvalti_ad`, `kahvalti_fiyat`, `kahvalti_detay`, `kahvalti_resimyol`) VALUES
(2, 'Omlet', 15, '', 'uploads/maxresdefault.jpg'),
(3, 'Menemen', 20, '', 'uploads/2576012_810x458.jpg'),
(4, 'PATATES KIZARTMASI', 5, '', 'uploads/fast-food-patates-kizartmasi-puf-noktalari.jpg'),
(5, 'SİGARA BÖREĞİ', 7, '', 'uploads/QEWRERTHindir.jpg'),
(6, 'KAHVALTI TABAĞI(TEK KIŞILIK)', 25, 'Tek Kişilik Kahvaltı Tabağı', 'uploads/imaqwdefrdfgges.jpg'),
(7, 'SERPME KAHVALTI (EN AZ 2 KIŞILIK)', 40, '', 'uploads/iwqerfgthyjndir.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE `rezervasyon` (
  `rezervasyon_id` int(11) NOT NULL,
  `kisi_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kisi_sayisi` int(11) NOT NULL,
  `rezervasyon_tarih` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kisi_tel` varchar(11) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`rezervasyon_id`, `kisi_ad`, `kisi_sayisi`, `rezervasyon_tarih`, `kisi_tel`) VALUES
(1, 'Esma', 0, '0000-00-00 00:00:00', '0'),
(2, 'Esma', 0, '12:10:2020 18:30', '0'),
(3, 'Esma', 3, '12:10:2020 18:30', '0'),
(4, 'Esma', 2, '12:10:2020 18:30', '0'),
(5, 'Esma', 3, '12-10-2020 20:30', '05317387187'),
(6, 'Esma', 3, '12:10:2020 18:30', '05317387187'),
(7, 'Esma', 3, '12-10-2020 20:30', '0123456789');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tatlılar`
--

CREATE TABLE `tatlılar` (
  `tatli_id` int(11) NOT NULL,
  `tatli_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tatli_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `tatli_fiyat` int(11) NOT NULL,
  `tatli_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tatlılar`
--

INSERT INTO `tatlılar` (`tatli_id`, `tatli_ad`, `tatli_detay`, `tatli_fiyat`, `tatli_resimyol`) VALUES
(7, 'FISTIK RÜYASI', 'asd', 20, 'uploads/indwqedfrgir.jpg'),
(8, 'Fırında Sütlaç', '', 20, 'uploads/ytk-firin-sutlac-site.jpg'),
(9, 'KÜNEFE', '', 30, 'uploads/indiqewrrgfhr.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `anayemek`
--
ALTER TABLE `anayemek`
  ADD PRIMARY KEY (`anayemek_id`);

--
-- Tablo için indeksler `gmenu_anayemek`
--
ALTER TABLE `gmenu_anayemek`
  ADD PRIMARY KEY (`anayemek_id`);

--
-- Tablo için indeksler `gmenu_icecek`
--
ALTER TABLE `gmenu_icecek`
  ADD PRIMARY KEY (`icecek_id`);

--
-- Tablo için indeksler `gmenu_tatli`
--
ALTER TABLE `gmenu_tatli`
  ADD PRIMARY KEY (`tatli_id`);

--
-- Tablo için indeksler `icecekler`
--
ALTER TABLE `icecekler`
  ADD PRIMARY KEY (`icecek_id`);

--
-- Tablo için indeksler `kahvalti`
--
ALTER TABLE `kahvalti`
  ADD PRIMARY KEY (`kahvalti_id`);

--
-- Tablo için indeksler `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD PRIMARY KEY (`rezervasyon_id`);

--
-- Tablo için indeksler `tatlılar`
--
ALTER TABLE `tatlılar`
  ADD PRIMARY KEY (`tatli_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `anayemek`
--
ALTER TABLE `anayemek`
  MODIFY `anayemek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `gmenu_anayemek`
--
ALTER TABLE `gmenu_anayemek`
  MODIFY `anayemek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Tablo için AUTO_INCREMENT değeri `gmenu_icecek`
--
ALTER TABLE `gmenu_icecek`
  MODIFY `icecek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `gmenu_tatli`
--
ALTER TABLE `gmenu_tatli`
  MODIFY `tatli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `icecekler`
--
ALTER TABLE `icecekler`
  MODIFY `icecek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `kahvalti`
--
ALTER TABLE `kahvalti`
  MODIFY `kahvalti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyon`
--
ALTER TABLE `rezervasyon`
  MODIFY `rezervasyon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `tatlılar`
--
ALTER TABLE `tatlılar`
  MODIFY `tatli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
