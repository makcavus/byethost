<?
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
//include('../frm013alanlari.php');
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Duyuru ��lemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<!--
<style type="text/css">



.style1 {font-family: Arial, Helvetica, sans-serif}

.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }

.style4 {color: #000000}

.style5 {

	font-family: Arial, Helvetica, sans-serif;

	color: #000000;

	font-weight: bold;

}



</style>
-->
</head>



<body>

<?php
include("../../connect.php");

//$baglanti=mysql_connect("localhost","root","malika") or die ("Ba�lant� Hatas�");// Veritaban� ba�lant�s�n� sat�r�.

$sorgu=mysql_db_query("b12_10384566_etf","select * from gerekli order by birim_idi,icerik asc",$dbh);//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.



while($liste=mysql_fetch_array($sorgu)) //Kay�tlar�n listelenmesi

{

$Id=$liste['gerekli_id'];

$birim=$liste['birim_idi'];

$icerik=$liste['icerik'];

$dosya=$liste['dosya_adi'];

$tarih=$liste['dosya_tarihi'];

$resim=$liste['resim_adi'];

$icerik=iconv("iso-8859-9","utf-8",$icerik);

/*
$gelen_deger = array("�", "�","�","�","�","�");
$donusen_deger = array("c","u","g","G","I","i");
$dosya = str_replace($gelen_deger, $donusen_deger, $dosya);
$birim=str_replace($gelen_deger, $donusen_deger, $birim);
$icerik=str_replace($gelen_deger, $donusen_deger, $icerik);
*/
/*
echo $Id;
echo $birim;
echo $icerik;
echo $dosya;
echo $tarih;
*/
if ($Id==$_GET['gerekli_id']) // Kayd�n ID de�eri ile d�zelt linkinden ajax ile gelen id de�erini kar��la�t�r�yoruz.

//E�er �art sa�lan�rsa verilen input text ile g�r�nt�lecek

{
if($_GET){
$birim=$_GET['selectbirim'];
$icerik=$_GET['icerik'];
$dosya=$_GET['dosya'];
$tarih=$_GET['tarih'];
$resim=$_GET['resim'];
$gelen_deger = array("�", "�","�","�","�","�");
$donusen_deger = array("c","u","g","G","I","i");
$dosya = str_replace($gelen_deger, $donusen_deger, $dosya);
$resim=str_replace($gelen_deger, $donusen_deger, $resim);
//$icerik=str_replace($gelen_deger, $donusen_deger, $icerik);

}else{
echo "veri gelmedi";
}

if ($_GET['komut']=="sil") // g�ncelle komutunu geldi ise veri g�ncellenecek.

{
$dosya=$liste['dosya_adi'];

if(file_exists($dosya))
{
    unlink($dosya);
    echo $dosya ,"silindi";
}else{
    echo "bu isimde bir dosya yok:".$dosya;
}


$resim=$liste['resim_adi'];

if(file_exists($resim))
{
    unlink($resim);
    echo $resim ,"silindi";
}else{
    echo "bu isimde bir dosya yok:".$resim;
}
//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.



//$tarih=$_GET['tarih'];



//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



mysql_db_query("b12_10384566_etf","delete from gerekli where gerekli_id='$Id'",$dbh); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.

?>

<script type="text/javascript">

islem('','');

</script>

<?php

}

if ($_GET['komut']=="duzelt") // g�ncelle komutunu geldi ise veri g�ncellenecek.

{

//Burada formdan ajax ile gelen veriler de�i�kenlere atan�yor.
$birim=$_GET['birim'];
$icerik=$_GET['icerik'];
$dosya=$_GET['dosya'];
$tarih=$_GET['tarih'];
$resim=$_GET['resim'];
$gelen_deger = array("�", "�","�","�","�","�");
$donusen_deger = array("c","u","g","G","I","i");
$dosya = str_replace($gelen_deger, $donusen_deger, $dosya);
$resim=str_replace($gelen_deger, $donusen_deger, $resim);
$icerik=iconv("utf-8","iso-8859-9",$icerik);


mysql_db_query("b12_10384566_etf","Update gerekli set birim_idi='$birim',icerik='$icerik',dosya_adi='$dosya',dosya_tarihi='$tarih',resim_adi='$resim' where gerekli_id='$Id'",$dbh); //  Kayd�n id de�erine g�re formda ajax ile gelen veriler veritaban�ndakiler ile de�i�tiriliyorr.

?>

<!--G�ncelleme i�leminden sonra listenin eksi halini almas� i�in fonsiyonumuz bo� de�erlerle �al��t�rl�yor.-->

<script type="text/javascript">

islem('','');

</script>

<?

}

else //G�ncelle komut gelmedi ise veriler form halinde g�r�nt�lencek

{
//$icerik=iconv("iso-8859-9","utf-8",$icerik);
$Id=$liste['gerekli_id'];

$birim=$liste['birim_idi'];

$icerik=$liste['icerik'];

$dosya=$liste['dosya_adi'];

$tarih=$liste['dosya_tarihi'];

$resim=$liste['resim_adi'];

$icerik=iconv("iso-8859-9","utf-8",$icerik);

?>

<form class="form">
<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>
  <td width="20%" align="left"><select name="birim" class="form-control form-control-sm" tabindex="1">
  <?php
  $birimesas=$liste['birim_idi'];

$sorgubirimx=mysql_db_query("b12_10384566_etf","select * from birim where birim_id='$birimesas' order by birim_ad desc",$dbh);//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.
while($listebirimx=mysql_fetch_array($sorgubirimx)) {
$birimidx=$listebirimx['birim_id'];
$birimadx=$listebirimx['birim_ad'];
echo $birimidx;
echo $birimadx;

?>

	<option value="<?=$listebirimx['birim_id']?>"><?=iconv("iso-8859-9", "utf-8",$listebirimx['birim_ad']); }?></option>
<?
$sorgubirim=mysql_db_query("b12_10384566_etf","select * from birim order by birim_ad desc",$dbh);//veritaban�n� se�iyor ve liste genel sorgumuzu olu�tuyoruz.

 while($listebirim=mysql_fetch_array($sorgubirim)) { ?>


<option value="<?=$listebirim['birim_id']?>"><?=iconv("iso-8859-9", "utf-8",$listebirim['birim_ad'])?></option>

<? } ?>

	</select></td>
<td width="20%" align="left"><textarea class="form-control form-control-sm" name="icerik" id="icerik" rows="14"><? echo $icerik?></textarea></td>

<td width="20%" align="left"><textarea class="form-control form-control-sm" name="dosya" id="dosya" rows="14"><? echo $dosya?></textarea></td>

<td width="10%" align="left"><textarea class="form-control form-control-sm" name="tarih" id="tarih" rows="14"><? echo $tarih?></textarea></td>

<td width="20%" align="left"><textarea class="form-control form-control-sm" name="resim" id="resim" rows="14"><? echo $resim?></textarea></td>

<td class="align-middle" width="100px">

<a href="javascript:islem('','')" class="btn btn-sm btn-warning" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "İptal"; ?></a> <!--��lemi iptal etmel i�in fonksiyon bo� de�erler ile �al��t�rl�yor.-->

<br><a href="javascript:islem('<? echo $liste['gerekli_id']?>','duzelt')" class="btn btn-sm btn-primary mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "Güncelle"; ?></a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->

<br><a href="javascript:islem('<? echo $liste['gerekli_id']?>','sil')" class="btn btn-sm btn-danger mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Sil</a> <!-- G�ncelleme i�in komut de�ikeni d�zelt olarak g�nderiliyor.-->

</div></td>

</tr>
</tbody>
</table>
</form>
<?

}

}

else //ID de�eri bo� gelmi� ise liste normal olarak g�r�nt�leniyor.

{



?>

<?php

//include('connect.php');

$sorgum="select gerekli_id,birim_idi,icerik,dosya_adi,dosya_tarihi,resim_adi from gerekli order by gerekli_id desc";

$basla=mysql_query($sorgum);

$sonucum=mysql_fetch_array($basla); 

$dosyam=$sonucum['dosya_adi'];
$cumle=$sonucum['dosya_tarihi'];

$birimsorgu="select distinct * from birim  where(birim_id='$birim')";
$basla=mysql_query($birimsorgu);
while($sonucum=mysql_fetch_array($basla)){
$birim_idim=$sonucum['birim_id'];
$birim_adim=$sonucum['birim_ad'];

?>

<table class="table table-sm table-responsive-sm table-bordered table-stripped table-hover">
<tbody>
<tr>

<td width="20%" align="left" class="style5" ><? echo iconv("iso-8859-9","utf-8",$birim_adim) ?></td>

<td width="20%" align="left" class="style5" ><? echo $icerik ?></td>

<td width="20%" align="left" class="style5" ><? echo $dosya  ?></td>

<td width="10%" align="center" class="style5" ><? echo $tarih ?></td>

<td width="20%" align="left" class="style5" ><? echo $resim ?></td>

<td width="10%">

<div align="center">

<a href="javascript:islem('<? echo $Id?>','')" class="btn btn-sm btn-success" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo "Düzenle"; ?></a> <!--islem fonksiyonunu veritan�ndan e�itlenen id de�ikeni ile �a��r�yoruz.-->
</div>
</td>
</tr>
</tbody>
</table>



<?php
}
}
}
}

?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../bootstrap-4/popper.js"></script>
<script src="../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
