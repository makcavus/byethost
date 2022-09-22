<?
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
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

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Duyuru İşlemleri</title>
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

$baglanti=mysql_connect("localhost","root","malika") or die ("Bağlantı Hatası");// Veritabanı bağlantısını satırı.

$sorgu=mysql_db_query(etf,"select * from gerekli order by birim_idi,icerik asc",$baglanti);//veritabanını seçiyor ve liste genel sorgumuzu oluştuyoruz.



while($liste=mysql_fetch_array($sorgu)) //Kayıtların listelenmesi

{



$Id=$liste['gerekli_id'];

$birim=$liste['birim_idi'];

$icerik=$liste['icerik'];

$dosya=$liste['dosya_adi'];

$tarih=$liste['dosya_tarihi'];

$resim=$liste['resim_adi'];

$gelen_deger = array("ç", "ü","ğ","Ğ","İ","ı");
$donusen_deger = array("c","u","g","G","I","i");
$dosya = str_replace($gelen_deger, $donusen_deger, $dosya);
$birim=str_replace($gelen_deger, $donusen_deger, $birim);
$icerik=str_replace($gelen_deger, $donusen_deger, $icerik);

echo $Id;
echo $birim;
echo $icerik;
echo $dosya;
echo $tarih;
echo $resim;

if ($Id==$_GET['gerekli_id']) // Kaydın ID değeri ile düzelt linkinden ajax ile gelen id değerini karşılaştırıyoruz.

//Eğer şart sağlanırsa verilen input text ile görüntülecek

{

if ($_GET['komut']=="sil") // güncelle komutunu geldi ise veri güncellenecek.

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
//Burada formdan ajax ile gelen veriler değişkenlere atanıyor.



//$tarih=$_GET['tarih'];



//$konu=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['konu']));



//$icerik=htmlspecialchars(iconv("UTF-8", "ISO-8859-9",$_GET['icerik']));



mysql_db_query(etf,"delete from gerekli where gerekli_id='$Id'",$baglanti); //  Kaydın id değerine göre formda ajax ile gelen veriler veritabanındakiler ile değiştiriliyorr.

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



mysql_db_query(etf,"Update gerekli set birim_idi='$birim',icerik='$icerik',dosya_adi='$dosya',dosya_tarihi='$tarih',resim_adi='$resim' where gerekli_id='$Id'",$baglanti); //  Kaydın id değerine göre formda ajax ile gelen veriler veritabanındakiler ile değiştiriliyorr.

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

<form class="form">
<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>
  <td width="20%" align="left"><select name="birim" id="birim" class="form-control form-control-sm" tabindex="1">
  <?php
$sorgubirimx=mysql_db_query(etf,"select * from birim where birim_id='$birim' order by birim_ad desc",$baglanti);//veritabanını seçiyor ve liste genel sorgumuzu oluştuyoruz.
while($listebirimx=mysql_fetch_array($sorgubirimx)) {
$birimidx=$listebirimx['birim_id'];
$birimadx=$listebirimx['birim_ad'];
echo $birimidx;
echo $birimadx;

?>

	<option value="<?=$listebirimx['birim_id']?>"><?=iconv("UTF-8", "ISO-8859-9",$listebirimx['birim_ad']); }?></option>
<?
$sorgubirim=mysql_db_query(etf,"select * from birim order by birim_ad desc",$baglanti);//veritabanını seçiyor ve liste genel sorgumuzu oluştuyoruz.

 while($listebirim=mysql_fetch_array($sorgubirim)) { ?>


<option value="<?=$listebirim['birim_id']?>"><?=iconv("UTF-8", "ISO-8859-9",$listebirim['birim_ad'])?></option>

<? } ?>

	</select></td>
<td width="20%" align="left"><textarea class="form-control form-control-sm" name="icerik" rows="14"><? echo iconv("UTF-8", "ISO-8859-9",$liste['icerik'])?></textarea></td>

<td width="20%" align="left"><textarea class="form-control form-control-sm" name="dosya" rows="14"><? echo iconv("UTF-8", "ISO-8859-9",$liste['dosya_adi'])?></textarea></td>

<td width="10%" align="left"><textarea class="form-control form-control-sm" name="tarih" rows="14"><? echo iconv("UTF-8", "ISO-8859-9",$liste['dosya_tarihi'])?></textarea></td>

<td width="20%" align="left"><textarea class="form-control form-control-sm" name="resim" rows="14"><? echo iconv("UTF-8", "ISO-8859-9",$liste['resim_adi'])?></textarea></td>

<td class="align-middle" width="100px">

<a href="javascript:islem('','')" class="btn btn-sm btn-warning" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a> <!--İşlemi iptal etmel için fonksiyon boş değerler ile çalşıtırlıyor.-->

<br><a href="javascript:islem('<? echo $liste['gerekli_id']?>','duzelt')" class="btn btn-sm btn-primary mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Güncelle</a> <!-- Güncelleme için komut değikeni düzelt olarak gönderiliyor.-->

<br><a href="javascript:islem('<? echo $liste['gerekli_id']?>','sil')" class="btn btn-sm btn-danger mt-5" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Sil</a> <!-- Güncelleme için komut değikeni düzelt olarak gönderiliyor.-->

</div></td>

</tr>
</tbody>
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

<td width="20%" align="left" class="style5" ><? echo iconv("UTF-8", "ISO-8859-9",$birim_adim) ?></td>

<td width="20%" align="left" class="style5" ><? echo iconv("UTF-8", "ISO-8859-9",$icerik) ?></td>

<td width="20%" align="left" class="style5" ><? echo iconv("UTF-8", "ISO-8859-9",$dosya)  ?></td>

<td width="10%" align="center" class="style5" ><? echo iconv("UTF-8", "ISO-8859-9",$tarih) ?></td>

<td width="20%" align="left" class="style5" ><? echo iconv("UTF-8", "ISO-8859-9",$resim) ?></td>

<td width="10%">

<div align="center">

<a href="javascript:islem('<? echo $Id?>','')" class="btn btn-sm btn-success" style="width:100px"><i class="fa fa-reply-all" aria-hidden="true"></i> Düzenle</a> <!--islem fonksiyonunu veritanından eşitlenen id değikeni ile çağırıyoruz.-->
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
