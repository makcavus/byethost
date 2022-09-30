-- phpMyAdmin SQL Dump
-- version 3.1.0-beta1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 22 Mart 2010 saat 22:40:40
-- Sunucu sürümü: 5.1.43
-- PHP Sürümü: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `frm023`
--

-- --------------------------------------------------------

--
-- Tablo yapısı: `ay`
--

CREATE TABLE IF NOT EXISTS `ay` (
  `ayid` int(8) NOT NULL AUTO_INCREMENT,
  `ayno` int(8) NOT NULL,
  `ayadi` varchar(20) NOT NULL,
  PRIMARY KEY (`ayid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `ay`
--

INSERT INTO `ay` (`ayid`, `ayno`, `ayadi`) VALUES
(1, 1, 'OCAK'),
(2, 2, 'ŞUBAT'),
(3, 3, 'MART'),
(4, 4, 'NİSAN'),
(5, 5, 'MAYIS'),
(6, 6, 'HAZİRAN'),
(7, 7, 'TEMMUZ'),
(8, 8, 'AĞUSTOS'),
(9, 9, 'EYLÜL'),
(10, 10, 'EKİM'),
(11, 11, 'KASIM'),
(12, 12, 'ARALIK');

-- --------------------------------------------------------

--
-- Tablo yapısı: `il`
--

CREATE TABLE IF NOT EXISTS `il` (
  `ilid` int(8) NOT NULL AUTO_INCREMENT,
  `ilad` varchar(100) NOT NULL,
  PRIMARY KEY (`ilid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `il`
--

INSERT INTO `il` (`ilid`, `ilad`) VALUES
(1, 'ANTALYA');

-- --------------------------------------------------------

--
-- Tablo yapısı: `ilce`
--

CREATE TABLE IF NOT EXISTS `ilce` (
  `ilceid` int(8) NOT NULL AUTO_INCREMENT,
  `ilinad` int(8) NOT NULL,
  `ilcead` varchar(100) NOT NULL,
  PRIMARY KEY (`ilceid`),
  KEY `ilindex` (`ilinad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `ilce`
--

INSERT INTO `ilce` (`ilceid`, `ilinad`, `ilcead`) VALUES
(1, 1, 'SERİK'),
(2, 1, 'AKSEKİ');

-- --------------------------------------------------------

--
-- Tablo yapısı: `ocak`
--

CREATE TABLE IF NOT EXISTS `ocak` (
  `ocid` int(8) NOT NULL AUTO_INCREMENT,
  `ilinad` int(8) NOT NULL,
  `ilce` int(8) NOT NULL,
  `socad` varchar(100) NOT NULL,
  PRIMARY KEY (`ocid`),
  KEY `ilin` (`ilinad`),
  KEY `ilcein` (`ilce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `ocak`
--

INSERT INTO `ocak` (`ocid`, `ilinad`, `ilce`, `socad`) VALUES
(2, 1, 1, 'Serik Mrk.1 Nolu Sağlık Ocağı'),
(3, 1, 2, 'Akseki Mrk.1');

-- --------------------------------------------------------

--
-- Tablo yapısı: `veri`
--

CREATE TABLE IF NOT EXISTS `veri` (
  `ilidi` int(8) NOT NULL,
  `ilceidi` int(8) NOT NULL,
  `vocadi` varchar(100) NOT NULL,
  `vyiladi` int(8) NOT NULL,
  `vayadi` varchar(20) NOT NULL,
  `v1` int(8) NOT NULL,
  `v2` int(8) NOT NULL,
  `v3` int(8) NOT NULL,
  `v4` int(8) NOT NULL,
  `v5` int(8) NOT NULL,
  `v6` int(8) NOT NULL,
  `v7` int(8) NOT NULL,
  `v8` int(8) NOT NULL,
  `v9` int(8) NOT NULL,
  `v10` int(8) NOT NULL,
  `v11` int(8) NOT NULL,
  `v12` int(8) NOT NULL,
  `v13` int(8) NOT NULL,
  `v14` int(8) NOT NULL,
  `v15` int(8) NOT NULL,
  `v16` int(8) NOT NULL,
  `v17` int(8) NOT NULL,
  `v18` int(8) NOT NULL,
  `v19` int(8) NOT NULL,
  `v20` int(8) NOT NULL,
  `v21` int(8) NOT NULL,
  `v22` int(8) NOT NULL,
  `v23` int(8) NOT NULL,
  `v24` int(8) NOT NULL,
  `v25` int(8) NOT NULL,
  `v26` int(8) NOT NULL,
  `v27` int(8) NOT NULL,
  `v28` int(8) NOT NULL,
  `v29` int(8) NOT NULL,
  `v30` int(8) NOT NULL,
  `v31` int(8) NOT NULL,
  `v32` int(8) NOT NULL,
  `v33` int(8) NOT NULL,
  `v34` int(8) NOT NULL,
  `v35` int(8) NOT NULL,
  `v36` int(8) NOT NULL,
  `v37` int(8) NOT NULL,
  `v38` int(8) NOT NULL,
  `v39` int(8) NOT NULL,
  `v40` int(8) NOT NULL,
  `v41` int(8) NOT NULL,
  `v42` int(8) NOT NULL,
  `v43` int(8) NOT NULL,
  `v44` int(8) NOT NULL,
  `v45` int(8) NOT NULL,
  `v46` int(8) NOT NULL,
  `v47` int(8) NOT NULL,
  `v48` int(8) NOT NULL,
  `v49` int(8) NOT NULL,
  `v50` int(8) NOT NULL,
  `v51` int(8) NOT NULL,
  `v52` int(8) NOT NULL,
  `v53` int(8) NOT NULL,
  `v54` int(8) NOT NULL,
  `v55` int(8) NOT NULL,
  `v56` int(8) NOT NULL,
  `v57` int(8) NOT NULL,
  `v58` int(8) NOT NULL,
  `v59` int(8) NOT NULL,
  `v60` int(8) NOT NULL,
  `v61` int(8) NOT NULL,
  `v62` int(8) NOT NULL,
  `v63` int(8) NOT NULL,
  `v64` int(8) NOT NULL,
  `v65` int(8) NOT NULL,
  `v66` int(8) NOT NULL,
  `v67` int(8) NOT NULL,
  `v68` int(8) NOT NULL,
  `v69` int(8) NOT NULL,
  `v70` int(8) NOT NULL,
  `v71` int(8) NOT NULL,
  `v72` int(8) NOT NULL,
  `v73` int(8) NOT NULL,
  `v74` int(8) NOT NULL,
  `v75` int(8) NOT NULL,
  `v76` int(8) NOT NULL,
  `v77` int(8) NOT NULL,
  `v78` int(8) NOT NULL,
  `v79` int(8) NOT NULL,
  `v80` int(8) NOT NULL,
  `v81` int(8) NOT NULL,
  `v82` int(8) NOT NULL,
  `v83` int(8) NOT NULL,
  `v84` int(8) NOT NULL,
  `v85` int(8) NOT NULL,
  `v86` int(8) NOT NULL,
  `v87` int(8) NOT NULL,
  `v88` int(8) NOT NULL,
  `v89` int(8) NOT NULL,
  `v90` int(8) NOT NULL,
  `v91` int(8) NOT NULL,
  `v92` int(8) NOT NULL,
  `v93` int(8) NOT NULL,
  `v94` int(8) NOT NULL,
  `v95` int(8) NOT NULL,
  `v96` int(8) NOT NULL,
  `v97` int(8) NOT NULL,
  `v98` int(8) NOT NULL,
  `v99` int(8) NOT NULL,
  `v100` int(8) NOT NULL,
  `v101` int(8) NOT NULL,
  `v102` int(8) NOT NULL,
  `v103` int(8) NOT NULL,
  `v104` int(8) NOT NULL,
  `v105` int(8) NOT NULL,
  `v106` int(8) NOT NULL,
  `v107` int(8) NOT NULL,
  `v108` int(8) NOT NULL,
  `v109` int(8) NOT NULL,
  `v110` int(8) NOT NULL,
  `v111` int(8) NOT NULL,
  `v112` int(8) NOT NULL,
  `v113` int(8) NOT NULL,
  `v114` int(8) NOT NULL,
  `v115` int(8) NOT NULL,
  `v116` int(8) NOT NULL,
  `v117` int(8) NOT NULL,
  `v118` int(8) NOT NULL,
  `v119` int(8) NOT NULL,
  `v120` int(8) NOT NULL,
  `v121` int(8) NOT NULL,
  `v122` int(8) NOT NULL,
  `v123` int(8) NOT NULL,
  `v124` int(8) NOT NULL,
  `v125` int(8) NOT NULL,
  `v126` int(8) NOT NULL,
  `v127` int(8) NOT NULL,
  `v128` int(8) NOT NULL,
  `v129` int(8) NOT NULL,
  `v130` int(8) NOT NULL,
  `v131` int(8) NOT NULL,
  `v132` int(8) NOT NULL,
  `v133` int(8) NOT NULL,
  `v134` int(8) NOT NULL,
  `v135` int(8) NOT NULL,
  `v136` int(8) NOT NULL,
  `v137` int(8) NOT NULL,
  `v138` int(8) NOT NULL,
  `v139` int(8) NOT NULL,
  `v140` int(8) NOT NULL,
  `v141` int(8) NOT NULL,
  `v142` int(8) NOT NULL,
  `v143` int(8) NOT NULL,
  `v144` int(8) NOT NULL,
  `v145` int(8) NOT NULL,
  `v146` int(8) NOT NULL,
  `v147` int(8) NOT NULL,
  `v148` int(8) NOT NULL,
  `v149` int(8) NOT NULL,
  `v150` int(8) NOT NULL,
  `v151` int(8) NOT NULL,
  `v152` int(8) NOT NULL,
  `v153` int(8) NOT NULL,
  `v154` int(8) NOT NULL,
  `v155` int(8) NOT NULL,
  `v156` int(8) NOT NULL,
  `v157` int(8) NOT NULL,
  `v158` int(8) NOT NULL,
  `v159` int(8) NOT NULL,
  `v160` int(8) NOT NULL,
  `v161` int(8) NOT NULL,
  `v162` int(8) NOT NULL,
  `v163` int(8) NOT NULL,
  `v164` int(8) NOT NULL,
  `v165` int(8) NOT NULL,
  `v166` int(8) NOT NULL,
  `v167` int(8) NOT NULL,
  `v168` int(8) NOT NULL,
  `v169` int(8) NOT NULL,
  `v170` int(8) NOT NULL,
  `v171` int(8) NOT NULL,
  `v172` int(8) NOT NULL,
  `v173` varchar(100) NOT NULL,
  `v174` varchar(100) NOT NULL,
  `v175` date NOT NULL,
  `v176` varchar(100) NOT NULL,
  `v177` varchar(100) NOT NULL,
  `v178` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `veri`
--

INSERT INTO `veri` (`ilidi`, `ilceidi`, `vocadi`, `vyiladi`, `vayadi`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `v7`, `v8`, `v9`, `v10`, `v11`, `v12`, `v13`, `v14`, `v15`, `v16`, `v17`, `v18`, `v19`, `v20`, `v21`, `v22`, `v23`, `v24`, `v25`, `v26`, `v27`, `v28`, `v29`, `v30`, `v31`, `v32`, `v33`, `v34`, `v35`, `v36`, `v37`, `v38`, `v39`, `v40`, `v41`, `v42`, `v43`, `v44`, `v45`, `v46`, `v47`, `v48`, `v49`, `v50`, `v51`, `v52`, `v53`, `v54`, `v55`, `v56`, `v57`, `v58`, `v59`, `v60`, `v61`, `v62`, `v63`, `v64`, `v65`, `v66`, `v67`, `v68`, `v69`, `v70`, `v71`, `v72`, `v73`, `v74`, `v75`, `v76`, `v77`, `v78`, `v79`, `v80`, `v81`, `v82`, `v83`, `v84`, `v85`, `v86`, `v87`, `v88`, `v89`, `v90`, `v91`, `v92`, `v93`, `v94`, `v95`, `v96`, `v97`, `v98`, `v99`, `v100`, `v101`, `v102`, `v103`, `v104`, `v105`, `v106`, `v107`, `v108`, `v109`, `v110`, `v111`, `v112`, `v113`, `v114`, `v115`, `v116`, `v117`, `v118`, `v119`, `v120`, `v121`, `v122`, `v123`, `v124`, `v125`, `v126`, `v127`, `v128`, `v129`, `v130`, `v131`, `v132`, `v133`, `v134`, `v135`, `v136`, `v137`, `v138`, `v139`, `v140`, `v141`, `v142`, `v143`, `v144`, `v145`, `v146`, `v147`, `v148`, `v149`, `v150`, `v151`, `v152`, `v153`, `v154`, `v155`, `v156`, `v157`, `v158`, `v159`, `v160`, `v161`, `v162`, `v163`, `v164`, `v165`, `v166`, `v167`, `v168`, `v169`, `v170`, `v171`, `v172`, `v173`, `v174`, `v175`, `v176`, `v177`, `v178`) VALUES
(1, 1, 'Serik Mrk.1 Nolu Sa', 2010, 'OCAK', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 'Mehmet Ali KAYA', 'xxx', '2010-02-26', 'yyy', 'Sorumlu Tabib', '2010-02-26');

-- --------------------------------------------------------

--
-- Tablo yapısı: `yil`
--

CREATE TABLE IF NOT EXISTS `yil` (
  `yilid` int(8) NOT NULL AUTO_INCREMENT,
  `yiladi` int(4) NOT NULL,
  PRIMARY KEY (`yilid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin5 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `yil`
--

INSERT INTO `yil` (`yilid`, `yiladi`) VALUES
(1, 2010);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `ilce`
--
ALTER TABLE `ilce`
  ADD CONSTRAINT `ilce_ibfk_1` FOREIGN KEY (`ilinad`) REFERENCES `il` (`ilid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `ocak`
--
ALTER TABLE `ocak`
  ADD CONSTRAINT `ocak_ibfk_1` FOREIGN KEY (`ilinad`) REFERENCES `il` (`ilid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ocak_ibfk_2` FOREIGN KEY (`ilce`) REFERENCES `ilce` (`ilceid`) ON DELETE CASCADE ON UPDATE CASCADE;
