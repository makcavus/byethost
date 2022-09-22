<?php
//require_once('../form013/tanimveyetkiler.php');
//echo $ilyetki;
require('fpdf.php');
include('../con_023.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$ocakyazi=$_GET['selectoc'];
$ilyetki=$_GET['ilyetki'];
$ilunvan=$_GET['ilunvan'];

include('../form013/sum.php');
if($yilgelen==""){
    $nuf=@mysqli_query($dbh,"select distinct vyiladi,vayadi from veri where ilidi='$ilgelen'");
  }elseif($ilgelen>0 and $yilgelen>0){
    $nuf=@mysqli_query($dbh,"select distinct vyiladi,vayadi from veri where ilidi='$ilgelen' and vyiladi='$yilgelen'");
  }
  error_reporting(E_ALL);
  ini_set("display_errors", 0);
  $nuf_say=mysqli_num_rows($nuf);
  $ort_nuf=$verim118/$nuf_say;
  $beb_nuf=$verim119/$nuf_say;
  $verim118=ceil($ort_nuf);
  $verim119=ceil($beb_nuf);
if($yilgelen==""){
$resultvyil = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen')") ;
}else{
$resultvyil = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;    
}
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];

}
if($yilgelen==""){
    $yilim="TÜM YILLAR";
}else{
  $ilceninadi="";
    $yilim=$yilim;
}
$ilceninadi="";
$socadi="İL TOPLAMI";
$ayim="";
include('../form013/assets/form013_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}

$yetkililer_sorgu=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and substr(socad,-3)='$ilyetki')");
while($yetkililer=mysqli_fetch_array($yetkililer_sorgu)){
  $verim173=$yetkililer['aseadi'];
  $verim174=$yetkililer['aseunvan'];
  $verim176=$yetkililer['dradi'];
  $verim177=$ilinadi.' '.$ilunvan;
}
mysqli_close($dbh);
include('../form013/assets/form013_sablonlar/form013_pdf_sablonu.php');
?>
