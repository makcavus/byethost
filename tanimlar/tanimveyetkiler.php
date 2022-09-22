<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>



<body>

<?php

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }



include("../con_023.php");

$upload_dir_depo="Depo/";

$upload_dir_foto="icerikfoto/";

$yuklenen="Y�klenen Dosyan�n A��klamas�...";

$kurumtipi="Kurum Tipini Se�iniz";

$tumu="T�m�";

$ilsec="�li Se�iniz";

$onceilsec="�nce �li Se�iniz";

$birimsec="Birimi Se�iniz";

echo $_SESSION["uye"];

$kim=$_SESSION["uye"];

$resultx = @mysqli_query($dbh,"select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");

while($xkod=mysqli_fetch_array($resultx)) {

$hamkod=$xkod['uyekod'];

$kod=substr($xkod['uyekod'],0,5);

$kodiki=substr($xkod['uyekod'],0,2);

$koduc=substr($xkod['uyekod'],-3,3);

$koddokuz=$xkod['uyekod'];

} 

$resultocak = @mysqli_query($dbh,"select * from ocak where(select left(socad,2)='$kodiki' and left(socad,5)='$kod') order by ilinad asc");

while($rowocak=mysqli_fetch_array($resultocak)) {



$ilno=$rowocak['ilinad'];

$ilceno=$rowocak['ilce'];

$kurumililcekod=substr($rowocak['socad'],0,5);

$kurumilkod=substr($rowocak['socad'],0,2);



//echo $ilno;

}







//KULLANICI YETK� SEV�YELER�.....................................................................

$yetkiuyar="Bu kayda m�dahale etmeye yetkiniz yoktur.";

//Bakanlik Yetkili Kurum Kisaltmasi. �yeler tablosundaki �yekod alaninin son �� harfi veya rakami

$bakanlikyetki="GMD";

//Il Yetkili Kurum Kisaltmasi. �yeler tablosundaki �yekod alaninin son �� harfi veya rakami

$ilyetki="LSM";

//Il�e Yetkili Kurum Kisaltmasi. �yeler tablosundaki �yekod alaninin son �� harfi veya rakami

$ilceyetki="ISM";

//Kurum Yetkili Kurum Kisaltmasi. �yeler tablosundaki �yekod alaninin son �� harfi veya rakami

$kurumyetki="TSM";

//Kurum Yetkili Kurum Kisaltmasi. �yeler tablosundaki �yekod alaninin son �� harfi veya rakami

$kulyetki=$koddokuz;



//S�LME ONAYI ETKETLER�...........................................................................

$silmeonay="Kay�t Silme Onay�";

$silemin="Bu Kayd� Silmek �stedi�inize Emin misiniz?";

$evet="Evet";

$hayir="Hay�r";

//KONTROLLERE A�T ETKETLER

$iptal="�ptal";

$degistir="De�i�tir";

$sil="Sil";

$kaydet="Kaydet";



//KAYDET/DE���T�R VE S�LE A�T UYARILAR

$kurumok='Kurumu Kaydedildi...';

$uyekayitok='Kurumuna ait Kullan�c� Kaydedildi...';

$oncekikurum="kurumu";

$sonraki="olarak de�i�tirildi...";

$geridon="Geri D�n";

$oncekiuye="Kurumuna ait Kullan�c� Bilgileri";

$sonraki="De�i�tirildi...";

$ait="ait";

$kullanici="adl� kullan�c�y�";

$kim=$uyekodu;

$silindi="Kurumuna ait Kullan�c� Kayd� Silindi...";



//�LET�LEN MESAJLARA �L��K�N ET�KETLER

$tarih='Tarih:';



$adi='G�nderenin Ad� Soyad�:';



$telefon="Telefonu:";



$email="E-mail Adresi:";



$ileti="�letisi:";



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

