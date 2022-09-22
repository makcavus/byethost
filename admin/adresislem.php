<?
//include('../frm013alanlari.php');
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayý görüntüleme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Adres Ýþlemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="stylesheet" type="text/css" href="duyuru.css">-->
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

//$baglanti=mysql_connect("localhost","root","malika") or die ("Baðlantý Hatasý");// Veritabaný baðlantýsýný satýrý.

$sorgu=mysql_db_query("b12_10384566_etf","select * from adres order by tipi,adi asc",$dbh);//veritabanýný seçiyor ve liste genel sorgumuzu oluþtuyoruz.



while($liste=mysql_fetch_array($sorgu)) //Kayýtlarýn listelenmesi

{

$Id=$liste['adrid'];
$tipi=$liste['tipi'];
$ilid=$liste['ilid'];
$ilceid=$liste['ilceid'];
$adi=$liste['adi'];
$adres=$liste['adres'];
$telefon=$liste['telefon'];
$fax=$liste['fax'];
$email=$liste['email'];
$web=$liste['web'];
$harita=$liste['harita'];


if ($Id==$_GET['adrid']) // Kaydýn ID deðeri ile düzelt linkinden ajax ile gelen id deðerini karþýlaþtýrýyoruz.

//Eðer þart saðlanýrsa verilen input text ile görüntülecek

{

if ($_GET['komut']=="sil") // güncelle komutunu geldi ise veri güncellenecek.

{

//Burada formdan ajax ile gelen veriler deðiþkenlere atanýyor.



//$tarih=$_GET['tarih'];



//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));

echo '<div class="alert alert-info text-center">'.iconv("iso-8859-9","utf-8","Kayýt Silindi.").'</div>';

mysql_db_query("b12_10384566_etf","delete from adres where adrid='$Id'",$dbh); //  Kaydýn id deðerine göre formda ajax ile gelen veriler veritabanýndakiler ile deðiþtiriliyorr.

?>

<script type="text/javascript">

islem('','');

</script>

<?php

}

if ($_GET['komut']=="duzelt") // güncelle komutunu geldi ise veri güncellenecek.

{

$tipi=$_GET['tipi'];
$ilid=$_GET['ilid'];
$ilceid=$_GET['ilceid'];
$adi=$_GET['adi'];
$adres=$_GET['adres'];
$telefon=$_GET['telefon'];
$fax=$_GET['fax'];
$email=$_GET['email'];
$web=$_GET['web'];
$harita=$_GET['harita'];

$adi=iconv("utf-8","iso-8859-9",$adi);
$adres=iconv("utf-8","iso-8859-9",$adres);
//Burada formdan ajax ile gelen veriler deðiþkenlere atanýyor.



//$tarih=$_GET['tarih'];



//$konu=$_GET['konu'];



//$icerik=$_GET['icerik'];

echo '<div class="alert alert-info text-center">'.iconv("iso-8859-9","utf-8","Kayýt Deðiþtirildi.").'</div>';

mysql_db_query("b12_10384566_etf","Update adres set tipi='$tipi',ilid='$ilid',ilceid='$ilceid',adi='$adi',adres='$adres',telefon='$telefon',fax='$fax',email='$email'
,web='$web',harita='harita' where adrid='$Id'",$dbh); //  Kaydýn id deðerine göre formda ajax ile gelen veriler veritabanýndakiler ile deðiþtiriliyorr.

?>

<!--Güncelleme iþleminden sonra listenin eksi halini almasý için fonsiyonumuz boþ deðerlerle çalýþtýrlýyor.-->

<script type="text/javascript">

islem('','');

</script>

<?

}

else //Güncelle komut gelmedi ise veriler form halinde görüntülencek

{
$adi=iconv("iso-8859-9","utf-8",$adi);
$adres=iconv("iso-8859-9","utf-8",$adres);
?>
<form class="form">
<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>
<td width="0px" align="left"><input type="hidden" class="style5" value='<? echo $liste['tipi']?>' name="tipi" id="tipi" size="0"></td>

<td width="0px" align="left"><input type="hidden" class="style5" value='<? echo $liste['ilid']?>' name="ilid" id="ilid" size="0"></td>

<td width="0px" align="left"><input type="hidden" class="style5" value='<? echo $liste['ilceid']?>' name="ilceid" id="ilceid" size="0"></td>

<td width="200px" class="align-middle"><textarea class="form-control form-control-sm" name="adi" rows="14"><? echo $adi?></textarea></td>

<td width="300px" class="align-middle"><textarea class="form-control form-control-sm" name="adres" rows="14"><? echo $adres?></textarea></td>

<td width="150px" class="align-middle"><textarea class="form-control form-control-sm" name="telefon" rows="14" cols="50%"><? echo $telefon?></textarea></td>

<td width="150px" width="120px" class="align-middle"><textarea class="form-control form-control-sm" name="fax" rows="14"><? echo $fax?></textarea></td>

<td width="180px" class="align-middle"><textarea class="form-control form-control-sm" name="email" rows="14"><? echo $email?></textarea></td>

<td width="180px" class="align-middle"><textarea class="form-control form-control-sm" name="web" rows="14"><? echo $web?></textarea></td>

<td width="300px" class="align-middle"><textarea class="form-control form-control-sm" name="harita" rows="14"><? echo $harita?></textarea></td>
<td class="align-middle" width="100px">

<a href="javascript:islem('','')" class="btn btn-sm btn-warning" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo iconv("iso-8859-9","utf-8","Ýptal"); ?></a> <!--Ýþlemi iptal etmel için fonksiyon boþ deðerler ile çalþýtýrlýyor.-->

<br><a href="javascript:islem('<? echo $liste['adrid']?>','duzelt')" class="btn btn-sm btn-primary mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo iconv("iso-8859-9","utf-8","Güncelle"); ?></a> <!-- Güncelleme için komut deðikeni düzelt olarak gönderiliyor.-->

<br><a href="javascript:islem('<? echo $liste['adrid']?>','sil')" class="btn btn-sm btn-danger mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Sil</a> <!-- Güncelleme için komut deðikeni düzelt olarak gönderiliyor.-->

</div></td>

</tr>


</table>

</form>



<?

}

}

else //ID deðeri boþ gelmiþ ise liste normal olarak görüntüleniyor.

{



?>

<?php

//include('connect.php');



$cumle=$liste['tarih1'];
$adi=iconv("iso-8859-9","utf-8",$adi);
$adres=iconv("iso-8859-9","utf-8",$adres);
?>
<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">

<tbody>
<tr>

<td width="150px"><? echo $adi?></td>

<td width="300px"><? echo $adres?></td>

<td width="120px"><? echo $telefon?></td>

<td width="120px"><? echo $fax?></td>

<td width="150px"><? echo $email?></td>

<td width="150px"><? echo $web?></td>

<!--<td width="200px"><? echo $harita?></td>-->

<td width="100px">

<div align="center">

<a href="javascript:islem('<? echo $Id?>','')" class="btn btn-sm btn-success" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> <?php echo iconv("iso-8859-9","utf-8","Düzenle"); ?></a> <!--islem fonksiyonunu veritanýndan eþitlenen id deðikeni ile çaðýrýyoruz.-->

</div>



</td>

</tr>
	</tbody>
</table>



<?php 
}
}
}

?>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../../bootstrap-4/popper.js"></script>
<script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

