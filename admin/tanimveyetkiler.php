<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Untitled Document</title>

</head>



<body>

<?php

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }



include("../../con_023.php");

$upload_dir_depo="Depo/";

$upload_dir_foto="icerikfoto/";

$yuklenen="Yüklenen Dosyanýn Açýklamasý...";

$kurumtipi="Kurum Tipini Seçiniz";

$tumu="Tümü";

$ilsec="Ýli Seçiniz";

$onceilsec="Önce Ýli Seçiniz";

$birimsec="Birimi Seçiniz";

$kulmevcut="--- Bu kullanýcý Adý Mevcut. Lütfen Yeni Kullanýcý Adý Belirleyiniz.";

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







//KULLANICI YETKÝ SEVÝYELERÝ.....................................................................

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



//SÝLME ONAYI ETKETLERÝ...........................................................................

$silmeonay="Kayýt Silme Onayý";

$silemin="Bu Kaydý Silmek Ýstediðinize Emin misiniz?";

$evet="Evet";

$hayir="Hayýr";

//KONTROLLERE AÝT ETKETLER

$iptal="Ýptal";

$degistir="Deðiþtir";

$sil="Sil";

$kaydet="Kaydet";



//KAYDET/DEÐÝÞTÝR VE SÝLE AÝT UYARILAR

$kurumok='Kurumu Kaydedildi...';

$uyekayitok='Kurumuna ait Kullanýcý Kaydedildi...';

$oncekikurum="kurumu";

$kurumsonraki="olarak deðiþtirildi...";

$geridon="Geri Dön";

$oncekiuye="Kurumuna ait Kullanýcý Bilgileri";

$sonraki="Deðiþtirildi...";

$ait="ait";

$kullanici="adlý kullanýcýyý";

$kim=$uyekodu;

$silindi="Kurumuna ait Kullanýcý Kaydý Silindi...";



//ÝLETÝLEN MESAJLARA ÝLÝÞKÝN ETÝKETLER

$tarih='Tarih:';



$adi='Gönderenin Adý Soyadý:';



$telefon="Telefonu:";



$email="E-mail Adresi:";



$ileti="Ýletisi:";



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

