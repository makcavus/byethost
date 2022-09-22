<?
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Duyuru İşlemleri</title>

<style type="text/css">

<!--

.style1 {font-family: Arial, Helvetica, sans-serif}

.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }

.style4 {color: #000000}

.style5 {

	font-family: Arial, Helvetica, sans-serif;

	color: #000000;

	font-weight: bold;

}

-->

</style>

</head>



<body>

<?php

$baglanti=mysql_connect("localhost","root","malika") or die ("Bağlantı Hatası");// Veritabanı bağlantısını satırı.

$sorgu=mysql_db_query(etf,"select * from duyuru order by yaziid desc",$baglanti);//veritabanını seçiyor ve liste genel sorgumuzu oluştuyoruz.



while($liste=mysql_fetch_array($sorgu)) //Kayıtların listelenmesi

{



$Id=$liste['yaziid'];



$tarih=$_GET['tarih'];



$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



$dosya=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['dosya']));



$bilgi=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['bilgi']));

$resim=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['resim']));


if ($Id==$_GET['yaziid']) // Kaydın ID değeri ile düzelt linkinden ajax ile gelen id değerini karşılaştırıyoruz.

//Eğer şart sağlanırsa verilen input text ile görüntülecek

{

if ($_GET['komut']=="sil") // güncelle komutunu geldi ise veri güncellenecek.

{

//Burada formdan ajax ile gelen veriler değişkenlere atanıyor.



//$tarih=$_GET['tarih'];



//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



mysql_db_query(etf,"delete from duyuru where yaziid='$Id'",$baglanti); //  Kaydın id değerine göre formda ajax ile gelen veriler veritabanındakiler ile değiştiriliyorr.

?>

<script type="text/javascript">

islem('','');

</script>

<?php

}

if ($_GET['komut']=="duzelt") // güncelle komutunu geldi ise veri güncellenecek.

{

//Burada formdan ajax ile gelen veriler değişkenlere atanıyor.



//$tarih=$_GET['tarih'];



//$konu=$_GET['konu'];



//$icerik=$_GET['icerik'];



mysql_db_query(etf,"Update duyuru set tarih='$tarih',konu='$konu',icerik='$icerik',dosya='$dosya',bilgi='$bilgi',resim='$resim' where yaziid='$Id'",$baglanti); //  Kaydın id değerine göre formda ajax ile gelen veriler veritabanındakiler ile değiştiriliyorr.

?>

<!--Güncelleme işleminden sonra listenin eksi halini alması için fonsiyonumuz boş değerlerle çalıştırlıyor.-->

<script type="text/javascript">

islem('','');

</script>

<?

}

else //Güncelle komut gelmedi ise veriler form halinde görüntülencek

{

?>

<table width="97%" border="1" bordercolor="#FF0000" cellpadding="1" cellspacing="1" bordercolor="#999999" style="paddin:0;margin:0;4">

<tr bgcolor="#f3f3f3">

<form style="margin:0;padding:0;">

<td width="10" align="left"><input type="text" class="style5" value='<? echo $liste['tarih']?>' name="tarih" size="22"/></td>

<td width="160" align="left"><input type="text" class="style5" value='<? echo $liste['konu']?>' name="konu" size="25"/></td>

<td width="180" align="left"><input type="text" class="style5" value='<? echo $liste['icerik']?>' name="icerik" size="28"/></td>

<td width="180" align="left"><input type="text" class="style5" value='<? echo $liste['dosya']?>' name="dosya" size="28"/></td>

<td width="180" align="left"><input type="text" class="style5" value='<? echo $liste['bilgi']?>' name="bilgi" size="28"/></td>

<td width="180" align="left"><input type="text" class="style5" value='<? echo $liste['resim']?>' name="resim" size="28"/></td>


</form>

<td width="155"><div align="center">

<a href="javascript:islem('','')">İptal</a> <!--İşlemi iptal etmel için fonksiyon boş değerler ile çalşıtırlıyor.-->

| <a href="javascript:islem('<? echo $liste['yaziid']?>','duzelt')">Güncelle</a> <!-- Güncelleme için komut değikeni düzelt olarak gönderiliyor.-->

| <a href="javascript:islem('<? echo $liste['yaziid']?>','sil')">Sil</a> <!-- Güncelleme için komut değikeni düzelt olarak gönderiliyor.-->

</div></td>

</tr></table>

<?

}

}

else //ID değeri boş gelmiş ise liste normal olarak görüntüleniyor.

{



?>

<?php
$tarihham=$liste['tarih'];
$cumle= new DateTime($tarihham);

?>

<table width="97%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FF0000">

<tr bgcolor="#f3f3f3">

<td width="180" align="center" class="style5" ><? echo $cumle->format('d.m.Y')?></td>

<td width="200" align="left" class="style5" ><? echo $liste['konu']?></td>

<td width="200" align="left" class="style5" ><? echo $liste['icerik']?></td>

<td width="200" align="left" class="style5" ><? echo $liste['dosya']?></td>

<td width="200" align="left" class="style5" ><? echo $liste['bilgi']?></td>

<td width="200" align="left" class="style5" ><? echo $liste['resim']?></td>


<td width="200">

<div align="center">

<a href="javascript:islem('<? echo $Id?>','')">Düzenle</a> <!--islem fonksiyonunu veritanından eşitlenen id değikeni ile çağırıyoruz.-->

</div>



</td>

</tr></table>



<?php
}
}
}
?>

</body>

</html>

