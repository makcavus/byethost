<?php
//session_start();
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include("../con_023.php");
$upload_dir_depo="Depo/";
$upload_dir_foto="icerikfoto/";
$yuklenen="Yüklenen Dosyanın Açıklaması...";
$kurumtipi="Kurum Tipini Seçiniz";
$tumu="Tümü";
$ilsec="İli Seçiniz";
$onceilsec="Önce İli Seçiniz";
$birimsec="Birimi Seçiniz";
//echo $_SESSION["uye"];
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
//KULLANICI YETK  SEV YELER .....................................................................
$yetkiuyar="Bu kayda müdahale etmeye yetkiniz yoktur.";
//Bakanlik Yetkili Kurum Kisaltmasi.  yeler tablosundaki  yekod alaninin son    harfi veya rakami
$bakanlikyetki="GMD";
//Il Yetkili Kurum Kisaltmasi.  yeler tablosundaki  yekod alaninin son    harfi veya rakami
$ilyetki="LSM";
$ilunvan="İl Sağlık Müdürü";
//Il e Yetkili Kurum Kisaltmasi.  yeler tablosundaki  yekod alaninin son    harfi veya rakami
$ilceyetki="ISM";
$ilceunvan="İlçe Sağlık Müdürü";
//Kurum Yetkili Kurum Kisaltmasi.  yeler tablosundaki  yekod alaninin son    harfi veya rakami
$kurumyetki="TSM";
$kurumunvan="İlçe Sağlık Müdürü";
//Kurum Yetkili Kurum Kisaltmasi.  yeler tablosundaki  yekod alaninin son    harfi veya rakami
$kulyetki=$koddokuz;
//S LME ONAYI ETKETLER ...........................................................................
$silmeonay="Kayıt Silme Onayı";
$silemin="Bu Kaydı Silmek İstediğinize Emin misiniz?";
$evet="Evet";
$hayir="Hayır";
//KONTROLLERE A T ETKETLER
$iptal="İptal";
$degistir="Değiştir";
$sil="Sil";
$kaydet="Kaydet";
//KAYDET/DE   T R VE S LE A T UYARILAR
$kurumok='Kurumu Kaydedildi...';
$uyekayitok='Kurumuna ait Kullanıcı Kaydedildi...';
$oncekikurum="kurumu";
$sonraki="olarak değiştirildi...";
$geridon="Geri Dön";
$oncekiuye="Kurumuna ait Kullanıcı Bilgileri";
$sonraki="Değiştirildi...";
$ait="ait";
$kullanici="adlı kullanıcıyı";
$kim=$hamkod;
$silindi="Kurumuna ait Kullanıcı Kaydı Silindi...";
// LET LEN MESAJLARA  L  K N ET KETLER
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

