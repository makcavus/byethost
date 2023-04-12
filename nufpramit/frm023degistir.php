<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
?>
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<script language="JavaScript" src="degistir.js" type="text/javascript"></script>	
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get">
<?php
include('../con_023.php');
include('../con_etf.php');
include('piramitalanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$resultvyil = @mysqli_query($dbh_etf,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/etf_sablonlar/np_veri_seti.php');
}
include('assets/etf_sablonlar/toplamsutunu.php');
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
include('assets/etf_sablonlar/npdegistir_sablonu.php');
?>
</form>

