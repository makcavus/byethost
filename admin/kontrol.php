<?

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfay? g?r?nt?leme yetkiniz yoktur.";

}else{



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>KullanÄ±cÄ± DÃ¼zenleme Paneli</title>

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
  </head>
<body>
<?php header("Cache-Control: no-cache,no-store");
//echo rand();
?>

<?
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("tanimveyetkiler.php");

//include("tanimveyetkiler.php");

$ilgelenx=$_GET['ilgir'];
$ilgelen=iconv("utf-8","iso-8859-9",$ilgelenx);
//echo $ilno;
//echo $ilgelen;

$vtsec="select * from il where(ilad='$ilgelen')";
$socsorgu=mysql_query($vtsec);
$say=mysql_num_rows($socsorgu);
//echo $say;
echo '<p>';
if($koduc==$bakanlikyetki or $koduc==$ilyetki){

if($ilgelen == "" and $say<1){
$uyar="İl İsmi Girilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}elseif($ilgelen != "" and $say<1){
$uyar="Bu İli Kaydedebilirsiniz.";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>'  ;?>
<form method="GET" name="form0" action="ilekle.php">
<input type="hidden" name="ilgir" id="ilgir" value="<? echo $ilgelen; ?>">

<a href=# onclick="kayit();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</form>
<?
//echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<p>';
echo '<a href=# onClick="deg();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>';
//echo'&nbsp;&nbsp;&nbsp;&nbsp;';
//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onay();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> Sil</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}
}else{
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.trsuz($yetkiuyar).'</h6></div>' ;
echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';

}
}
/*
$ahekkodu=$_GET['ahekkod'];
$countryId=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$stateId=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocak=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yil=$_GET['selectyil'];
$ay=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
//echo $ahekkodu;
/*echo $countryId ;
echo $stateId ;
echo $ocak ;
echo $yil ;
echo $ay ;
?>
<?php
$iladi=@mysql_query("select * from il where(ilid='$countryId')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>
<?php
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil' and vayadi='$ay')";
$socsorgu=mysql_query($vtsec);
$say=mysql_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar=trsuz("İl Seçilmedi");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId == trsuz("İlçe Seçiniz") and $say<1){
$uyar=trsuz("İlçe Seçilmedi.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != trsuz("İlçe Seçiniz") and $ocak == trsuz("Aile Hekimini Seçiniz") and $say<1){
$uyar=trsuz("Aile Hekimliği Seçilmedi.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != trsuz("İlçe Seçiniz") and $ocak != trsuz("Aile Hekimini Seçiniz") and $yil=="" and $say<1){
$uyar=trsuz("Yılı Boş Bıraktınız.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId != "" and $ilceninadi != trsuz("İlçe Seçiniz") and $ocak != trsuz("Aile Hekimini Seçiniz") and $yil!="" and $say<1){
$uyar="";
echo '<font style="color:Green">'.$uyar.'</font>' ;
if($ahekkodu==$ocak or $ahekkodu=="TSM"){
echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
}else{
$sizmisiniz=trsuz("Sadece Kendinize ait Aile Hekimliği Koduna Kayıt Ekleyebilirsiniz.");
echo '<font style="color:Red">'.$sizmisiniz.'</font>' ;
}
}else{
$uyar=trsuz("BU KAYIT YAPILMIŞ...");
echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
echo '<label><font size="2px" face="tahoma">'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocakyazi.'</FONT>-'.$yil.'-'.$ay.'&nbsp;&nbsp;&nbsp;&nbsp;</font></label>';
//$degsayfa="http://localhost/form023/frm023degistir.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$baksayfa="http://localhost/form023/cerceve1.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$silsayfa="http://localhost/form023/023sil.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//echo '<form action="frm023degistir.php" method="get" name="gor">' ;
//echo $yeni_url;
/*echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="ocgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="yilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="aygelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';

echo '<p>';
echo '</form>';
if($ahekkodu==$ocak or $ahekkodu=="TSM"){
echo '<form action="form023pdf.php" method="get" name="gor">' ;
echo '<a href=# onClick="deg();"><img src="images/degistir.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onay();"><img src="images/sil.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';
}else{
//echo '<form action="form023pdf.php" method="get" name="gor">' ;
echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
//echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
//echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
//echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
//echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
//echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
//echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
//echo '</form>';
}

}
*/
@mysql_close($dbh) ;
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

</body>

</html>