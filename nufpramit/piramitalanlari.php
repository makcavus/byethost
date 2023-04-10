<?php
$ilsecim="İli Seçiniz";
$onceilsecim="Önce İli Seçiniz";
$ilcesecim="İlçe Seçiniz";
$onceilcesecim="Önce İlçeyi Seçiniz";
$ahsecim="Aile Hekimini Seçiniz";
$eklegorbaslik="Yeni Kayıt Ekleme Ekranı";
$deggorbaslik="Kayıt Değiştirme Ekranı";
$ilgorbaslik="İl Toplamı Görüntüleme Ekranı";
$ilcegorbaslik="İlçe Toplamı Görüntüleme Ekranı";
$ocakgorbaslik="Kurum/Aile Hek.Toplamı Görüntüleme Ekranı";
$aygorbaslik="Yıllık Toplam Görüntüleme Ekranı";
$kayitgorbaslik="Kayıt Görüntüleme Ekranı";
$asioranbaslik="Aşı Oranları";
$pdfbaslik="PDF Yazdır";
$excelbaslik="Excele Yazdır";
$iltopbaslik="İL TOPLAMI";
$ilcetopbaslik="İLÇE TOPLAMI";
$sbbaslik="SAĞLIK BAKANLIĞI";
$ygbaslik="NÜFUSUN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI";
$mhalbaslik="NÜFUSUN MEDENİ HALİNE GÖRE DAĞILIMI";
$odurbaslik="NÜFUSUN ÖĞRENİM DURUMUNA GÖRE DAĞILIMI";
$ilbaslik="İL:";
$ilcebaslik="İLÇE/TSM:";
$npbuton="Nüfus Piramidi";
$mhbuton="Medeni Hali";
$odbuton="Öğrenim Durumu";
$buyuknpbuton="Piramidi Yazdır";
$yasgrubu="YAŞ GRUBU";
$medenihali="MEDENİ HALİ";
$ogrenimdurumu="ÖĞRENİM DURUMU";
$sifiryas="0-4 YAŞ";
$besyas="5-9 YAŞ";
$onyas="10-14 YAŞ";
$onbesyas="15-19 YAŞ";
$yirmiyas="20-24 YAŞ";
$yirmibesyas="25-29 YAŞ";
$otuzyas="30-34 YAŞ";
$otuzbesyas="35-39 YAŞ";
$kirkyas="40-44 YAŞ";
$kirkbesyas="45-49 YAŞ";
$elliyas="50-54 YAŞ";
$ellibesyas="55-59 YAŞ";
$atmisyas="60-64 YAŞ";
$atmisbesyas="65-69 YAŞ";
$yetmisyas="70-74 YAŞ";
$yetmisbesyas="75-79 YAŞ";
$seksenyas="80-84 YAŞ";
$seksenbesyas="85- + YAŞ";
$mhcocuk="ÇOCUK";
$mhevli="EVLİ";
$mhbosanmis="BOŞANMIŞ";
$mhesiolmus="EŞİ ÖLMÜŞ";
$odocd="OKUL ÇAĞINDA DEĞİL";
$odoyd="OKUR YAZAR DEĞİL";
$odilk="İLKOKUL";
$odlise="LİSE";
$odyo="YÜKSEKOKUL";
$duzadbaslik="Adı Soyadı:";
$duzunbaslik="Ünvanı:";
$duzimzabaslik="İmza:";
$onadbaslik="Adı Soyadı:";
$onunbaslik="Ünvanı:";
$onimzabaslik="İmza:";
$aygrafbaslik="Aylık Grafik";
$kumgrafbaslik="Kümulatif Grafik";
//echo $frmbaslik;
//************************************************ K O N T R O L  M E N � *******************************************************
$ilsecbaslik="İl Seçilmedi.";
$ilcesecbaslik="İlçe Seçilmedi.";
$kursecbaslik="Kurum / AHB Seçilmedi.";
$yilbosbaslik="Yılı Boş Bıraktınız.";
$kayyetkibaslik="Bu Kaydı Yapmaya Yetkiniz Yoktur.";
$uyarbaslik="BU KAYIT YAPILMIŞ...";
$bosbaslik="Henüz hiçbir Aile Hekimliğine veri girilmemiştir.";
$ahbirbaslik="Aile Hekimliği Biriminden";
$ahgirbaslik="Aile Hekimliğine ait veriler girilmiştir.";
$ahvgbaslik="Aile Hekimliğine ait veri girilmemiştir.";
$gelmeyenbaslik="Verileri girilmeyen Aile Hekimliği Birimleri";
$tamambaslik="Bütün Aile Hekimliği Birimlerine ait veri girişi yapılmıştır.";
$kayitekle="Kayıt Ekle";
//********************************************EKLEME/DE���T�RME/S�LME UYARILARI********************************************************
$yilkayedilemedi="Yıl Kaydedilemedi...";
$yiloncekaydedilmis="Bu Yıl Daha Önce Kaydedilmiş...";
$oncesilinmis="Bu Kayıt Yapılmamış veya Daha Önce Silinmiş...";
$kayiteklendi="Kayıt Eklendi...";
$kaydedilmedi="Verileriniz Kaydedilemedi...";
$kayitdegistirildi="Kayıt Değiştirildi...";
$degistirilmedi="Verileriniz Değiştirilemedi...";
$silmeonay="Kayıt Silme Onayı";
$silemin="Bu Kaydı Silmek İstediğinize Emin misiniz?";
$silindi="Kayıt Silindi...";
$geridon="Geri dön";
$silinmedi="Kayıt silinemedi.";
$yilekle="Yıl Ekle";
$yilsil="Yıl Sil";
/* *****************************************************  Excele D�k�me ait Uyar�lar   *********************************************** */
$ayitoplam="AYI TOPLAMI";
$geneltoplam="TOPLAMI";

//PHP �LE TARAYICI TANIMA
/*$env = getenv( "HTTP_USER_AGENT" );

if (strpos($env, 'Edge') !== FALSE){

   //$browser="Edge";

   //echo $browser.'<br>'.$env;

    function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }

   }

 else if (strpos($env, 'Internet Explorer (MSIE/Compatible)') !== FALSE){

   echo 'Internet explorer';

   function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }

 }else if (strpos($env, 'Firefox') !== FALSE){

   //echo 'Mozilla Firefox';

   function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }

 }else if (strpos($env, 'Chrome') !== FALSE){

   //echo 'Google Chrome';

   function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }

 }else if (strpos($env, 'Opera') !== FALSE){

   //echo "Opera";

   function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }

 }else if (strpos($env, 'Safari') !== FALSE){

   //echo "Safari";

 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }  

 }else if (strpos($env, 'Mozilla (Gecko/Mozilla)') !== FALSE){

   //echo "Mozilla (Gecko/Mozilla";

 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }  

 }else if (strpos($env, 'Netscape (Gecko/Netscape)') !== FALSE){

   //echo "Mozilla (Netscape (Gecko/Netscape)";

 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }

 }else if (strpos($env, 'Mozilla (Gecko/Mozilla)') !== FALSE){

   //echo "Mozilla (Mozilla (Gecko/Mozilla)";

 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }

 }else{

//echo 'Bilinmeyen Tarayici';

//echo "<br />" . $env;

function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }

}
*/




?>
