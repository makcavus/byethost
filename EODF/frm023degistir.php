<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/eodfstyle.css">
<script type="text/javascript" src="degistir.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<div id="sonuckay"><form class="form" name="girdiekleme" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<?php
include('../con_102.php');
include('../con_023.php');
include('eodfalanlari.php');
include("tanimveyetkiler.php");
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen= $_GET['selectay'];
$resultvyil = @mysqli_query($dbh102,"select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/eodf_sablonlar/eodf_veri_seti.php');
}
$dvks=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8;
$srdks=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23;
$dves=$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38;
$srdes=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
include('assets/eodf_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh, $sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysql_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)==$ilceyetki){
    $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aseadi,ilce_aseunvani from birim where(form='Form102')");
    while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
        $asead=$frm102yetkilisi['ilce_aseadi'];
        $aseunv=$frm102yetkilisi['ilce_aseunvani'];
    }
    $drad=$satir['dradi'];
$unvan=$ilceninadi.' İlçe Sağlık Müdürü';
}elseif(substr($ocgelen,-3)==$ilyetki){
    $drad=$satir['dradi'];
    $asead=$satir['aseadi'];
    $aseunv=$satir['aseunvan'];
    $unvan=$ilinadi. ' İl Sağlık Müdürü';
}elseif(substr($ocgelen,-3)==$bakanlikyetki){
    $unvan='Halk Sağlığı Genel Müdürü';
    $drad=$satir['dradi'];
    $asead=$satir['aseadi'];
    $aseunv=$satir['aseunvan'];
}else{
$unvan=$ocgelen.' Nolu Aile Hekimi';
    $drad=$satir['dradi'];
    $asead=$satir['aseadi'];
    $aseunv=$satir['aseunvan'];
}
}
include('assets/eodf_sablonlar/eodfdegistir_sablonu.php');
include('assets/eodf_sablonlar/gizli_input_degistir.php');
?>   
</form>
<!-- Optional JavaScript -->
      