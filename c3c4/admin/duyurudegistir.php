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

<title>N�fus Pramidi Yas Gruplari Girisi</title>

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

$baglanti=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die ("Ba�lant� Hatas�");// Veritaban� ba�lant�s�n� sat�r�.

if(mysql_select_db("b12_10384566_etf",$baglanti)){

$soidara="select * from duyuru" ;

$soidsorgu=mysql_query($soidara);

while($liste=mysql_fetch_array($soidsorgu)) //Kay�tlar�n listelenmesi

{



$Id=$liste['yaziidi'];

echo $Id;

if ($Id==$_GET['yaziidi']) // Kayd�n ID de�eri ile d�zelt linkinden ajax ile gelen id de�erini kar��la�t�r�yoruz.

//E�er �art sa�lan�rsa verilen input text ile g�r�nt�lecek

{

if ($_GET['komut']=="duzelt") // g�ncelle komutunu geldi ise veri g�ncellenecek.

{

//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.



$kitap_adi=$_GET['tarih'];



$yazar=$_GET['konu'];



$yayin_evi=$_GET['icerik'];



$dosya=$_GET['dosya'];



$bilgi=$_GET['bilgi'];



mysql_db_query(kitap_vt,"Update duyuru set tarih='$kitap_adi',konu='$yazar',icerik='$yayin_evi',dosya='$dosya',bilgi='$bilgi'

where yaziidi='$Id'",$baglanti); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.



?>

<!--G�ncelleme i�leminden sonra listenin eksi halini almas� i�in fonsiyonumuz bo� de�erlerle �al��t�rl�yor.-->

<script type="text/javascript">

islem('','');

</script>

<?

}

}

else //G�ncelle komut gelmedi ise veriler form halinde g�r�nt�lencek

{

?>



<table width="651" border="0" cellpadding="1" cellspacing="1" bordercolor="#999999" style="paddin:0;margin:0;4">

<tr bgcolor="#f3f3f3">

<form style="margi:0;padding:0;">

<td width="170"><input type="text" value='<? echo $liste['tarih']?>' name="kadi"/></td>

<td width="144"><input type="text" value='<? echo $liste['konu']?>' name="yazar_ismi"/></td>

<td width="169"><input type="text" value='<? echo $liste['icerik']?>' name="yayin_evi"/></td>

<td width="169"><input type="text" value='<? echo $liste['dosya']?>' name="dosya"/></td>

<td width="169"><input type="text" value='<? echo $liste['bilgi']?>' name="bilgi"/></td>

</form>

<td width="155"><div align="center">

<a href="javascript:islem('','')">�ptal</a> <!--��lemi iptal etmel i�in fonksiyon bo� de�erler ile �al��t�rl�yor.-->

| <a href="javascript:islem('<? echo $liste['Id']?>','duzelt')">G�ncelle</a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->

</div></td>

</tr></table>

<?

}

}

else //ID de�eri bo� gelmi� ise liste normal olarak g�r�nt�leniyor.

{



?>



<table width="650" border="0" cellpadding="1" cellspacing="1" bordercolor="#999999">

<tr bgcolor="#f3f3f3"><td width="171"><? echo $liste['tarih']?></td>

<td width="140"><? echo $liste['konu']?></td>

<td width="170"><? echo $liste['icerik']?></td>

<td width="170"><? echo $liste['dosya']?></td>

<td width="170"><? echo $liste['bilgi']?></td>

<td width="156">

<div align="center">



<a href="javascript:islem('<? echo $Id?>','')">D�zelt</a> <!--islem fonksiyonunu veritan�ndan e�itlenen id de�ikeni ile �a��r�yoruz.-->



</div>



</td>

</tr></table>



<?}

}

?>





</body>
<?php
}
?>
</html>

