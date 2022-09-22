<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>



<body>

<?php

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }



//include("../con_023.php");

$upload_dir_depo="Depo/";

$upload_dir_foto="icerikfoto/";

$yuklenen="Yüklenen Dosyanın Açıklaması...";

$kurumtipi="Kurum Tipini Seçiniz";

$tumu="Tümü";

$ilsec="İli Seçiniz";

$onceilsec="Önce İli Seçiniz";

$birimsec="Birimi Seçiniz";

$kulmevcut="--- Bu kullanıcı Adı Mevcut. Lütfen Yeni Kullanıcı Adı Belirleyiniz.";

$virgul=",";

$siteadresi=$_SERVER['SERVER_NAME'];

//echo $_SESSION["uye"];

$kim=$_SESSION["uye"];

$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");

while($xkod=mysql_fetch_array($resultx)) {

$hamkod=$xkod['uyekod'];

$kod=substr($xkod['uyekod'],0,5);

$kodiki=substr($xkod['uyekod'],0,2);

$koduc=substr($xkod['uyekod'],-3,3);

$koddokuz=$xkod['uyekod'];

} 

$resultocak = @mysql_query("select * from ocak where(select left(socad,2)='$kodiki' and left(socad,5)='$kod') order by ilinad asc");

while($rowocak=mysql_fetch_array($resultocak)) {



$ilno=$rowocak['ilinad'];

$ilceno=$rowocak['ilce'];

$kurumililcekod=substr($rowocak['socad'],0,5);

$kurumilkod=substr($rowocak['socad'],0,2);



//echo $ilno;

}







//KULLANICI YETKİ SEVİYELERİ.....................................................................

$yetkiuyar="Bu kayda müdahale etmeye yetkiniz yoktur.";

//Bakanlik Yetkili Kurum Kisaltmasi. Üyeler tablosundaki üyekod alaninin son üç harfi veya rakami

$bakanlikyetki="GMD";

//Il Yetkili Kurum Kisaltmasi. Üyeler tablosundaki üyekod alaninin son üç harfi veya rakami

$ilyetki="LSM";

//Ilçe Yetkili Kurum Kisaltmasi. Üyeler tablosundaki üyekod alaninin son üç harfi veya rakami

$ilceyetki="ISM";

//Kurum Yetkili Kurum Kisaltmasi. Üyeler tablosundaki üyekod alaninin son üç harfi veya rakami

$kurumyetki="TSM";

//Kurum Yetkili Kurum Kisaltmasi. Üyeler tablosundaki üyekod alaninin son üç harfi veya rakami

$kulyetki=$koddokuz;



//SİLME ONAYI ETKETLERİ...........................................................................

$silmeonay="Kayıt Silme Onayı";

$silemin="Bu Kaydı Silmek İstediğinize Emin misiniz?";

$evet="Evet";

$hayir="Hayır";

//KONTROLLERE AİT ETKETLER

$iptal="İptal";

$degistir="Değiştir";

$sil="Sil";

$kaydet="Kaydet";



//KAYDET/DEĞİŞTİR VE SİLE AİT UYARILAR

$kurumok='Kurumu Kaydedildi...';

$uyekayitok='Kurumuna ait Kullanıcı Kaydedildi...';

$oncekikurum="kurumu";

$kurumsonraki="olarak değiştirildi...";

$geridon="Geri Dön";

$oncekiuye="Kurumuna ait Kullanıcı Bilgileri";

$sonraki="Değiştirildi...";

$ait="ait";

$kullanici="adlı kullanıcıyı";

$kim=$uyekodu;

$silindi="Kurumuna ait Kullanıcı Kaydı Silindi...";



//İLETİLEN MESAJLARA İLİŞKİN ETİKETLER

$tarih='Tarih:';



$adi='Gönderenin Adı Soyadı:';



$telefon="Telefonu:";



$email="E-mail Adresi:";



$ileti="İletisi:";



$vercevap="Verilen Cevap:";



$mailto="mailto:";



$ctarihi="Cevap Tarihi:";



/*

echo $kod;

echo $kodiki;

echo $koduc;

 echo '<br>';

echo $kurumililcekod;

echo $kurumyetki;

echo $ilyetki;

echo $bakanlikyetki;

 echo '<br>';

echo $kurumilkod;*/

?>

</body>

</html>

