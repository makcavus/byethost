<?
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Duyuru ��lemleri</title>

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

$baglanti=mysql_connect("localhost","root","malika") or die ("Ba�lant� Hatas�");// Veritaban� ba�lant�s�n� sat�r�.

$sorgu=mysql_db_query(etf,"select * from duyuru order by yaziid desc",$baglanti);//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.



while($liste=mysql_fetch_array($sorgu)) //Kay�tlar�n listelenmesi

{



$Id=$liste['yaziid'];



$tarih=$_GET['tarih'];



$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



$dosya=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['dosya']));



$bilgi=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['bilgi']));

$resim=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['resim']));


if ($Id==$_GET['yaziid']) // Kayd�n ID de�eri ile d�zelt linkinden ajax ile gelen id de�erini kar��la�t�r�yoruz.

//E�er �art sa�lan�rsa verilen input text ile g�r�nt�lecek

{

if ($_GET['komut']=="sil") // g�ncelle komutunu geldi ise veri g�ncellenecek.

{

//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.



//$tarih=$_GET['tarih'];



//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



mysql_db_query(etf,"delete from duyuru where yaziid='$Id'",$baglanti); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.

?>

<script type="text/javascript">

islem('','');

</script>

<?php

}

if ($_GET['komut']=="duzelt") // g�ncelle komutunu geldi ise veri g�ncellenecek.

{

//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.



//$tarih=$_GET['tarih'];



//$konu=$_GET['konu'];



//$icerik=$_GET['icerik'];



mysql_db_query(etf,"Update duyuru set tarih='$tarih',konu='$konu',icerik='$icerik',dosya='$dosya',bilgi='$bilgi',resim='$resim' where yaziid='$Id'",$baglanti); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.

?>

<!--G�ncelleme i�leminden sonra listenin eksi halini almas� i�in fonsiyonumuz bo� de�erlerle �al��t�rl�yor.-->

<script type="text/javascript">

islem('','');

</script>

<?

}

else //G�ncelle komut gelmedi ise veriler form halinde g�r�nt�lencek

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

<a href="javascript:islem('','')">�ptal</a> <!--��lemi iptal etmel i�in fonksiyon bo� de�erler ile �al��t�rl�yor.-->

| <a href="javascript:islem('<? echo $liste['yaziid']?>','duzelt')">G�ncelle</a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->

| <a href="javascript:islem('<? echo $liste['yaziid']?>','sil')">Sil</a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->

</div></td>

</tr></table>

<?

}

}

else //ID de�eri bo� gelmi� ise liste normal olarak g�r�nt�leniyor.

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

<a href="javascript:islem('<? echo $Id?>','')">D�zenle</a> <!--islem fonksiyonunu veritan�ndan e�itlenen id de�ikeni ile �a��r�yoruz.-->

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

