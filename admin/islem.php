<?
//include('../frm013alanlari.php');
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Duyuru İşlemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="stylesheet" type="text/css" href="duyuru.css">-->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/sweetalert2/sweetalert2.min.css">
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
//include("../form013alanlari.php");
include("../../connect.php");
//$baglanti=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die ("Bağlantı Hatası");// Veritabanı bağlantısını satırı.

$sorgu=mysql_db_query("b12_10384566_etf","select *,date_format(tarih, '%d.%m.%Y')  AS tarih1 from duyuru order by yaziid desc",$dbh);//veritabanını seçiyor ve liste genel sorgumuzu oluştuyoruz.



while($liste=mysql_fetch_array($sorgu)) //Kayıtların listelenmesi

{

$Id=$liste['yaziid'];

$tarih=$liste['tarih'];

$konu=$liste['konu'];

$icerik=$liste['icerik'];

$dosya=$liste['dosya'];

$bilgi=$liste['bilgi'];

$resim=$liste['resim'];

$foto1=$liste['foto1'];
	
$foto2=$liste['foto2'];
	
$foto3=$liste['foto3'];
	
$foto4=$liste['foto4'];
	
$foto5=$liste['foto5'];
	
$foto6=$liste['foto6'];
	
$foto7=$liste['foto7'];
	
$foto8=$liste['foto8'];
	
$foto9=$liste['foto9'];
	
$foto10=$liste['foto10'];

	
if ($Id==$_GET['yaziid']) // Kaydın ID değeri ile düzelt linkinden ajax ile gelen id değerini karşılaştırıyoruz.

//Eğer şart sağlanırsa verilen input text ile görüntülecek

{

if ($_GET['komut']=="sil") // güncelle komutunu geldi ise veri güncellenecek.

{

$dosya=$liste['dosya'];

if(file_exists($dosya))
{
    unlink($dosya);
    //echo $dosya ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$dosya;
}


$resim=$liste['resim'];

if(file_exists($resim))
{
    unlink($resim);
   // echo $resim ,"silindi";
}else{
    //echo "bu isimde bir dosya yok:".$resim;
}
	//foto1
	$foto1=$liste['foto1'];

if(file_exists($foto1))
{
    unlink($foto1);
    //echo $foto1 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto1;
}
	//foto2
	$foto2=$liste['foto2'];

if(file_exists($foto2))
{
    unlink($foto2);
   // echo $foto2 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto2;
}
	//foto3
	$foto3=$liste['foto3'];

if(file_exists($foto3))
{
    unlink($foto3);
   // echo $foto3 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto3;
}
	//foto4
	$foto4=$liste['foto4'];

if(file_exists($foto4))
{
    unlink($foto4);
   // echo $foto4 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto4;
}
	//foto5
	$foto5=$liste['foto5'];

if(file_exists($foto5))
{
    unlink($foto5);
   // echo $foto5 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto5;
}
	//foto6
	$foto6=$liste['foto6'];

if(file_exists($foto6))
{
    unlink($foto6);
   // echo $foto6 ,"silindi";
}else{
  //  echo "bu isimde bir dosya yok:".$foto6;
}
	//foto7
	$foto7=$liste['foto7'];

if(file_exists($foto7))
{
    unlink($foto7);
   // echo $foto7 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto7;
}
	//foto8
	$foto8=$liste['foto8'];

if(file_exists($foto8))
{
    unlink($foto8);
   // echo $foto8 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto8;
}
	//foto9
	$foto9=$liste['foto9'];

if(file_exists($foto9))
{
    unlink($foto9);
   // echo $foto9 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto9;
}
	//foto10
	$foto10=$liste['foto10'];

if(file_exists($foto10))
{
    unlink($foto10);
   // echo $foto10 ,"silindi";
}else{
   // echo "bu isimde bir dosya yok:".$foto10;
}
echo '<div class="alert alert-info text-center">Kayıt Silindi.</div>';
//Burada formdan ajax ile gelen veriler değişkenlere atanıyor.



//$tarih=$_GET['tarih'];



//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



mysql_db_query("b12_10384566_etf","delete from duyuru where yaziid='$Id'",$dbh); //  Kaydın id değerine göre formda ajax ile gelen veriler veritabanındakiler ile değiştiriliyorr.

?>

<script type="text/javascript">

islem('','');

</script>

<?php

}

if ($_GET['komut']=="duzelt") // güncelle komutunu geldi ise veri güncellenecek.

{

//Burada formdan ajax ile gelen veriler değişkenlere atanıyor.



$tarih=$_GET['tarih'];

$konu=$_GET['konu'];

$icerik=$_GET['icerik'];
	
$dosya=$_GET['dosya'];

$bilgi=$_GET['bilgi'];
	
$resim=$_GET['resim'];

$foto1=$_GET['foto1'];
	
$foto2=$_GET['foto2'];
	
$foto3=$_GET['foto3'];
	
$foto4=$_GET['foto4'];
	
$foto5=$_GET['foto5'];
	
$foto6=$_GET['foto6'];
	
$foto7=$_GET['foto7'];
	
$foto8=$_GET['foto8'];
	
$foto9=$_GET['foto9'];
	
$foto10=$_GET['foto10'];
	
	$konu=iconv("utf-8","iso-8859-9",$konu);
	$icerik=iconv("utf-8","iso-8859-9",$icerik);
	$dosya=iconv("utf-8","iso-8859-9",$dosya);  
	$bilgi=iconv("utf-8","iso-8859-9",$bilgi);
	$resim=iconv("utf-8","iso-8859-9",$resim);
	
	/*echo $konu;
	echo $icerik;
	echo $bilgi;*/
echo '<div class="alert alert-info text-center">Kayıt Değiştirildi.</div>';
	
mysql_db_query("b12_10384566_etf","Update duyuru set tarih='$tarih',konu='$konu',icerik='$icerik',dosya='$dosya',bilgi='$bilgi',resim='$resim',foto1='$foto1',foto2='$foto2'
,foto3='$foto3',foto4='$foto4',foto5='$foto5',foto6='$foto6',foto7='$foto7',foto8='$foto8',foto9='$foto9',foto10='$foto10' where yaziid='$Id'",$dbh); //  Kaydın id değerine göre formda ajax ile gelen veriler veritabanındakiler ile değiştiriliyorr.

?>

<!--Güncelleme işleminden sonra listenin eksi halini alması için fonsiyonumuz boş değerlerle çalıştırlıyor.-->

<script type="text/javascript">

islem('','');

</script>

<?

}

else //Güncelle komut gelmedi ise veriler form halinde görüntülencek

{
    $konu=iconv("iso-8859-9","utf-8",$konu);
	$icerik=iconv("iso-8859-9","utf-8",$icerik);
	$dosya=iconv("iso-8859-9","utf-8",$dosya);  
	$bilgi=iconv("iso-8859-9","utf-8",$bilgi);
	$resim=iconv("iso-8859-9","utf-8",$resim);
?>
<form class="form">
<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>

<td class="align-middle"><textarea class="form-control form-control-sm" name="tarih" rows="14"><? echo $tarih;?></textarea></td>

<td class="align-middle"><textarea class="form-control form-control-sm" name="konu" rows="14"><? echo $konu;?></textarea></td>

<td class="align-middle"><textarea class="form-control form-control-sm" name="icerik" rows="14" cols="50%"><? echo $icerik;?></textarea></td>

<td class="align-middle"><textarea class="form-control form-control-sm" name="dosya" rows="14"><? echo $dosya;?></textarea></td>

<td class="align-middle"><textarea class="form-control form-control-sm" name="bilgi" rows="14"><? echo $bilgi?></textarea></td>

<td class="align-middle"><textarea class="form-control form-control-sm" name="resim" rows="14"><? echo $resim;?></textarea></td>

<td rowspan="10" class="align-middle">
<input type="text" class="form-control form-control-sm" value='<? echo $foto1;?>' name="foto1">
<input type="text" class="form-control form-control-sm" value='<? echo $foto2;?>' name="foto2">
<input type="text" class="form-control form-control-sm" value='<? echo $foto3;?>' name="foto3">
<input type="text" class="form-control form-control-sm" value='<? echo $foto4;?>' name="foto4">
<input type="text" class="form-control form-control-sm" value='<? echo $foto5;?>' name="foto5">
<input type="text" class="form-control form-control-sm" value='<? echo $foto6;?>' name="foto6">
<input type="text" class="form-control form-control-sm" value='<? echo $foto7;?>' name="foto7">
<input type="text" class="form-control form-control-sm" value='<? echo $foto8;?>' name="foto8">
<input type="text" class="form-control form-control-sm" value='<? echo $foto9;?>' name="foto9">
<input type="text" class="form-control form-control-sm" value='<? echo $foto10;?>' name="foto10">
</td>

<td class="align-middle">

<a href="javascript:islem('','')" class="btn btn-sm btn-warning" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a> <!--İşlemi iptal etmel için fonksiyon boş değerler ile çalşıtırlıyor.-->

<br><a href="javascript:islem('<? echo $liste['yaziid']?>','duzelt')" class="btn btn-sm btn-primary mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Güncelle</a> <!-- Güncelleme için komut değikeni düzelt olarak gönderiliyor.-->

<br><a href="javascript:islem('<? echo $liste['yaziid']?>','sil')" class="btn btn-sm btn-danger mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Sil</a> <!-- Güncelleme için komut değikeni düzelt olarak gönderiliyor.-->

</div></td>

</tr>


</table>

</form>



<?

}

}

else //ID değeri boş gelmiş ise liste normal olarak görüntüleniyor.

{



?>

<?php

//include('connect.php');



$cumle=$liste['tarih1'];
	/*
    echo $konu;
	echo $icerik;
	echo $bilgi;
	*/
	//echo '<br><br>';
	
    $konu=iconv("iso-8859-9","utf-8",$konu);
	$icerik=iconv("iso-8859-9","utf-8",$icerik);
	$dosya=iconv("iso-8859-9","utf-8",$dosya);
	$bilgi=iconv("iso-8859-9","utf-8",$bilgi);
	$resim=iconv("iso-8859-9","utf-8",$resim);
	/*
	echo $konu;
	echo $icerik;
	echo $bilgi;*/
?>

<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">

<tbody>
<tr>

<td width="100px" align="center"><? echo $cumle;?></td>

<td width="200px"><? echo $konu;?></td>

<td width="500px"><? echo $icerik;?></td>

<td width="200px"><? echo $dosya;?></td>

<td width="200px"><? echo $bilgi;?></td>

<td width="200px"><? echo $resim;?></td>


<td width="200px">

<div align="center">

<a href="javascript:islem('<? echo $Id?>','')" class="btn btn-sm btn-success" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> D&uuml;zenle</a> <!--islem fonksiyonunu veritanından eşitlenen id değikeni ile çağırıyoruz.-->

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
<script src="../../../bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
</body>

</html>

