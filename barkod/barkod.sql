-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barkod`
--

-- --------------------------------------------------------

--
-- Table structure for table `asi_kodlari`
--

CREATE TABLE `asi_kodlari` (
  `id` int(11) NOT NULL,
  `asi_kodu` int(4) NOT NULL,
  `asi_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `asi_kodlari`
--

INSERT INTO `asi_kodlari` (`id`, `asi_kodu`, `asi_adi`) VALUES
(1, 18, 'Kuduz Aşısı'),
(2, 133, 'KPA'),
(3, 3, 'KKK (KIZAMIK KIZAMIKÇIK KABAKULAK)'),
(4, 130, 'DaBT+IPA AŞISI (4\'LÜ KARMA)'),
(5, 9, 'Td ADULT (ERİŞKİN TİP TETANOZ DİFTERİ AŞISI)'),
(6, 16, 'BCG'),
(7, 204, 'Menenjit Aşısı (ACWY)'),
(8, 8, 'Hepatit-B Aşısı (Pediatrik)'),
(12, 21, 'Su Çiçeği'),
(24, 141, 'MEVSİMSEL İNFLUENZA AŞISI (GRİP AŞISI)');

-- --------------------------------------------------------

--
-- Table structure for table `asi_takdim`
--

CREATE TABLE `asi_takdim` (
  `id` int(2) NOT NULL,
  `takdim_no` int(2) NOT NULL,
  `takdim_tur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asi_takdim`
--

INSERT INTO `asi_takdim` (`id`, `takdim_no`, `takdim_tur`) VALUES
(1, 1, 'Paket'),
(2, 2, 'Kutu'),
(3, 3, 'Koli'),
(4, 4, 'Palet');

-- --------------------------------------------------------

--
-- Table structure for table `asi_tanim`
--

CREATE TABLE `asi_tanim` (
  `id` int(11) NOT NULL,
  `asi_kod` int(11) NOT NULL,
  `gtin` bigint(14) NOT NULL,
  `asi_marka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asi_tanim`
--

INSERT INTO `asi_tanim` (`id`, `asi_kod`, `gtin`, `asi_marka`) VALUES
(14, 141, 869952296441, 'Fluarix Tetra'),
(15, 204, 868130896414, 'Nimenrix'),
(16, 133, 868130896631, 'Prevenar 13');

-- --------------------------------------------------------

--
-- Table structure for table `bilgiler`
--

CREATE TABLE `bilgiler` (
  `id` int(11) NOT NULL,
  `ilidi` int(8) NOT NULL,
  `ilceidi` int(8) NOT NULL,
  `asmadi` varchar(255) NOT NULL,
  `vyiladi` int(8) NOT NULL,
  `vayadi` varchar(20) NOT NULL,
  `gtin` varchar(14) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `expdate` varchar(10) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `cins` varchar(10) NOT NULL,
  `mesaj` varchar(10) NOT NULL DEFAULT '',
  `miktar_kod` bigint(20) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bilgiler`
--

INSERT INTO `bilgiler` (`id`, `ilidi`, `ilceidi`, `asmadi`, `vyiladi`, `vayadi`, `gtin`, `serial`, `expdate`, `batch`, `cins`, `mesaj`, `miktar_kod`, `token`) VALUES
(190, 1, 1, '1 Nolu ASM', 2023, 'OCAK', '08681308964144', 'N0000000657049P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657049P11725073110FX65099920497001'),
(191, 1, 1, '1 Nolu ASM', 2023, 'ŞUBAT', '08681308964144', 'N0000000657042P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657042P11725073110FX65099920497001'),
(192, 1, 1, '1 Nolu ASM', 2023, 'MART', '08681308964144', 'N0000000657044P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657044P11725073110FX65099920497001'),
(193, 1, 1, '1 Nolu ASM', 2023, 'NİSAN', '08681308964144', 'N0000000657042P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657042P11725073110FX65099920497001'),
(194, 1, 1, '1 Nolu ASM', 2023, 'MAYIS', '08681308964144', 'N0000000657042P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657042P11725073110FX65099920497001'),
(195, 1, 1, '1 Nolu ASM', 2023, 'HAZİRAN', '08681308964144', 'N0000000657042P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657042P11725073110FX65099920497001'),
(196, 1, 1, '1 Nolu ASM', 2023, 'TEMMUZ', '08681308964144', 'N0000000657042P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657042P11725073110FX65099920497001'),
(197, 1, 1, '1 Nolu ASM', 2023, 'AĞUSTOS', '08681308964144', 'N0000000657042P1', '250731', 'FX6509', '204', '1', 0, '010868130896414421N0000000657042P11725073110FX65099920497001');

-- --------------------------------------------------------

--
-- Table structure for table `ocak`
--

CREATE TABLE `ocak` (
  `ocid` int(8) NOT NULL,
  `ilinad` int(8) NOT NULL,
  `ilce` int(8) NOT NULL,
  `socad` varchar(100) NOT NULL,
  `asmadi` varchar(100) NOT NULL,
  `dradi` varchar(50) NOT NULL,
  `aseadi` varchar(50) NOT NULL,
  `aseunvan` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Dumping data for table `ocak`
--

INSERT INTO `ocak` (`ocid`, `ilinad`, `ilce`, `socad`, `asmadi`, `dradi`, `aseadi`, `aseunvan`) VALUES
(12, 1, 1, '07.19.001', '1 Nolu ASM', 'Dr.A.Cemalettin ÇAKIR', 'Mediha ATEŞ', 'Ebe'),
(13, 1, 1, '07.19.002', '1 Nolu ASM', 'Dr.Mesut ÖZSOY', 'Yeliz TOPAKTAŞ', 'Hemşire'),
(14, 1, 1, '07.19.003', '1 Nolu ASM', 'Dr.Serdar ERDEM', 'Fatma AÇIKGÖZ', 'Ebe'),
(15, 1, 1, '07.19.004', '1 Nolu ASM', 'Dr.Aydın ÜNAL', 'Osman BALDIRLI', 'Sağlık Memuru'),
(16, 1, 1, '07.19.005', 'Orta Mahalle ASM', 'Dr.Yılmaz KARACAN', 'Esra GELMEZ', 'Hemşire'),
(17, 1, 1, '07.19.006', 'Orta Mahalle ASM', 'Dr.Nalan KİRİŞ', 'Serpil UYANIK', 'Hemşire'),
(18, 1, 1, '07.19.007', 'Orta Mahalle ASM', 'Dr.Ali AYDIN', 'Mediha ÖZÇELİK', 'Hemşire'),
(19, 1, 1, '07.19.008', '2 Nolu ASM', 'Dr.H.Edip EŞŞİZ', 'Sibel YILDIZ', 'Ebe'),
(20, 1, 1, '07.19.009', '2 Nolu ASM', 'Dr.Hüseyin BANKOĞLU', 'Gülşen ÇALIŞKAN', 'Hemşire'),
(21, 1, 1, '07.19.010', '2 Nolu ASM', 'Dr.Fatma DİLEK', 'Şafak YILDIRIM', 'Ebe'),
(22, 1, 1, '07.19.011', '3 Nolu ASM', 'Dr.Yıldıray YALÇIN', 'Selma ŞAHİN', 'Hemşire'),
(23, 1, 1, '07.19.012', '3 Nolu ASM', 'Dr.Zekeriya CENGİZ', 'Habibe KAYIŞ', 'Ebe'),
(24, 1, 1, '07.19.013', '3 Nolu ASM', 'Dr.Hüseyin TOPKAR', 'Huriye ÇALIŞIR', 'Ebe'),
(25, 1, 1, '07.19.014', '4 Nolu ASM', 'Dr.İlyas TEKKANAT', 'Havva ARICI', 'Ebe'),
(26, 1, 1, '07.19.015', '4 Nolu ASM', 'Dr.Günnur ÇİFCİ GÜVEN', 'Ayşe KÖK', 'Ebe'),
(27, 1, 1, '07.19.016', 'Abdurrahmanlar ASM', 'Dr.Gülçin YÖRÜKOĞLU', 'Kamile TOMAN', 'Ebe'),
(28, 1, 1, '07.19.017', 'Abdurrahmanlar ASM', 'Dr.Faika GÜNDÜZ', 'Vedat HALHALLI', 'Sağlık Memuru'),
(29, 1, 1, '07.19.018', 'Akınlar ASM', 'Dr.H.Oya BEDER ÖZER', 'Ümmügül ATEŞGÖZ', 'Ebe-Hem.'),
(30, 1, 1, '07.19.019', 'Akınlar ASM', 'Dr.Zülfikar KARA', 'Şerife YÜCEL', 'Ebe'),
(31, 1, 1, '07.19.020', 'Belek Gazel ASM', 'Dr.Engin Levent YILMAZ', 'Ayşe OK', 'Ebe'),
(32, 1, 1, '07.19.021', 'Dr.Yusuf Aydın ASM', 'Dr.Hilmi AKIDAN', 'Cennet AKKOÇ', 'Ebe'),
(33, 1, 1, '07.19.022', 'Boğazkent ASM', 'Dr.Ayten Funda KANDEMİR', 'Fatma İnci KUMBUL', 'Ebe'),
(34, 1, 1, '07.19.023', 'Çandır ASM', 'Dr.H.Kemal KARABACAK', 'Özlem ÖZ', 'Ebe'),
(35, 1, 1, '07.19.024', 'Çandır ASM', 'Dr.Hatice KILIÇ TÜRK', 'Özlem DANACI', 'Ebe'),
(36, 1, 1, '07.19.025', 'Gebiz ASM', 'Dr.Mustafa Orkun ÖZKAYA', 'ASE Yok', ''),
(37, 1, 1, '07.19.026', 'Gebiz ASM', 'Dr.Pelin DEMİR', 'Tezcan AKSU', 'Ebe'),
(38, 1, 1, '07.19.027', 'Karadayı ASM', 'Dr.Süleyman CAN', 'Şeyma ATASAYAR', 'Hemşire'),
(39, 1, 1, '07.19.028', 'Töngüşlü ASM', 'Dr.İlhan YÖRÜKOĞLU', 'Durkadın ŞİMŞEK', 'Ebe'),
(40, 1, 1, '07.19.029', 'Y.Kocayatak ASM', 'Dr.Hakan IŞILDAR', 'Türkan AKÇAM', 'Ebe'),
(41, 1, 1, '07.19.030', 'Y.Kocayatak ASM', 'Dr.Yasemin ERDEN', 'Gamze AKSU', 'Ebe'),
(42, 1, 1, '07.19.031', 'Belek Gazel ASM', 'Dr.Duygu DEVRAN', 'Gamze FİTİK', 'Ebe'),
(57, 1, 1, '07.19 SERİK TSM', 'Serik İlçe Sağlık Müdürlüğü', 'Dr.Nurgül TÜRK KILINÇ', 'Mehmet Ali KAYA', 'Sağlık Memuru'),
(58, 1, 1, '07 ANTALYA ILSM', 'Antalya İl Sağlık Müdürlüğü', 'Dr.Ünal HÜLÜR', 'Hacer YÜCE', ''),
(60, 1, 1, '07.19.032', '4 Nolu ASM', 'Dr.Öner ŞAHİN', 'Gülsüm AKMAN', 'Ebe'),
(61, 1, 1, '07.19.033', 'Orta Mahalle ASM', 'Dr.Dudu GÜLER', 'Ayşe GÖZTOK', 'Hemşire'),
(62, 1, 1, '07.19.034', '2 Nolu ASM', 'Dr.Verda ALKAN KARA', 'Elif DİNÇ', 'Ebe'),
(63, 1, 1, '07.19.035', '3 Nolu ASM', 'Dr.Berna AKIDAN', 'Sümeyye ÖZEN', 'Hemşire'),
(64, 1, 1, '07.19.036', 'Dr.Yusuf Aydın ASM', 'Dr.Hüseyin ARICAN', 'Seda YAMAN MERT', 'Ebe'),
(66, 1, 1, '07.19.038', '4 Nolu ASM', 'Dr.Nurullah GÖÇER', 'Kiraz DEMİR', 'Ebe'),
(68, 1, 1, '07.19.037', 'Belek Gazel ASM', 'Dr.Mehmet Hasan Hakan ÖZARSLAN', 'Leyla GÜZEL', 'Ebe'),
(69, 1, 1, '07.19.039', 'Dr.Yusuf AYDIN ASM', 'Dr.Ebru KÜÇÜKATİK', 'Feyza ALTINAY', 'Ebe'),
(70, 1, 1, '07.19.040', 'Orta Mahalle ASM', 'Dr.Ali YILMAZ', 'Ayşegül YILMAZ', 'Ebe'),
(72, 1, 1, '06.00 GMD', 'Halk Sağlığı Genel Müdürlüğü', '', '', ''),
(73, 1, 1, '07.19.041', '1 Nolu ASM', 'Dr.Hayri ATEŞ', '', ''),
(74, 1, 1, '07.19.SDH', 'Serik Devlet Hastanesi', 'Uzm.Dr.H.Yusuf KARA', 'Halime OKUDAN', 'Tıbbi Sekreter'),
(75, 1, 1, '07.19.AAH', 'Serik Özel Anadolu Aspendos Hastanesi', 'Uzm.Dr.Nasır KUMLU', 'Hatice GÜÇ', 'Tıbbi Sekreter'),
(77, 1, 1, '07.19.042', '2 Nolu ASM', 'Dr.Ramazan IRMAK', 'Nesrin YILMAZ', 'Hemşire'),
(78, 1, 1, '07.19.043', 'Belek Gazel ASM', 'Dr.Yasin Emrah HATİPOĞLU', 'Fedan YILDIRIM', 'Ebe'),
(82, 1, 1, '07.19.045', '4 Nolu ASM', 'Dr.Halil Deniz EKİZ', '', ''),
(79, 1, 1, '07.19.044', '2 Nolu ASM', 'Dr.Mehmet YILDIZ', '', ''),
(80, 1, 1, '07.19.046', 'Dr.Yusuf Aydın ASM', 'Dr.Ayşe TAŞ', '', ''),
(81, 1, 1, '07.19.048', 'Y.Kocayatak ASM', 'Dr.Ahmet Seyid BÜBEK', '', ''),
(83, 1, 1, '07.19.047', 'Akınlar ASM', 'Dr.Tahsin DOĞAN', '', ''),
(88, 10, 6, 'Bayındır ASM', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sb_asi_kodlari`
--

CREATE TABLE `sb_asi_kodlari` (
  `id` int(11) NOT NULL,
  `yapilacak_islem` enum('Pasife alınacak aşı','Değişiklik yapılmayacak aşı','Yeni eklenen aşı','Kodu aynı olup ismi değişecek aşı') NOT NULL DEFAULT 'Yeni eklenen aşı',
  `asi_adi` varchar(50) NOT NULL,
  `yeni_kod` int(4) NOT NULL,
  `yeni_aktif` enum('0','1') NOT NULL DEFAULT '1',
  `eski_kod` int(4) NOT NULL,
  `eski_aktif` enum('0','1') NOT NULL DEFAULT '1',
  `takvim_durumu` enum('Hayır','Evet') NOT NULL DEFAULT 'Evet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sb_asi_kodlari`
--

INSERT INTO `sb_asi_kodlari` (`id`, `yapilacak_islem`, `asi_adi`, `yeni_kod`, `yeni_aktif`, `eski_kod`, `eski_aktif`, `takvim_durumu`) VALUES
(1, 'Yeni eklenen aşı', 'BİVALAN OPA (ORAL POLİO AŞISI)', 1, '1', 1, '0', 'Hayır'),
(2, 'Kodu aynı olup ismi değişecek aşı', 'TRİVALAN OPA (ORAL POLİO AŞISI)', 2, '1', 2, '1', 'Evet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asi_kodlari`
--
ALTER TABLE `asi_kodlari`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asi_kodu` (`asi_kodu`),
  ADD UNIQUE KEY `asi_adi` (`asi_adi`);

--
-- Indexes for table `asi_takdim`
--
ALTER TABLE `asi_takdim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asi_tanim`
--
ALTER TABLE `asi_tanim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asi_tanim` (`asi_kod`);

--
-- Indexes for table `bilgiler`
--
ALTER TABLE `bilgiler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `token` (`token`) USING BTREE;

--
-- Indexes for table `ocak`
--
ALTER TABLE `ocak`
  ADD PRIMARY KEY (`ocid`),
  ADD KEY `ilin` (`ilinad`),
  ADD KEY `ilcein` (`ilce`),
  ADD KEY `socad` (`socad`);

--
-- Indexes for table `sb_asi_kodlari`
--
ALTER TABLE `sb_asi_kodlari`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asi_kodlari`
--
ALTER TABLE `asi_kodlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `asi_takdim`
--
ALTER TABLE `asi_takdim`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asi_tanim`
--
ALTER TABLE `asi_tanim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bilgiler`
--
ALTER TABLE `bilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `ocak`
--
ALTER TABLE `ocak`
  MODIFY `ocid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `sb_asi_kodlari`
--
ALTER TABLE `sb_asi_kodlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asi_tanim`
--
ALTER TABLE `asi_tanim`
  ADD CONSTRAINT `asi_tanim` FOREIGN KEY (`asi_kod`) REFERENCES `asi_kodlari` (`asi_kodu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
