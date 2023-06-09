<?php
include("../con_barkod.php");
include('../barkod/frm013alanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
/*$ad=$_GET["v173"];
$drad=$_GET["v176"];
$unv=$_GET["v174"];
$drunv=$_GET["v177"];*/
/*	
$duztarihgun=substr($_GET['v175'],0,2);
$duztarihay=substr($_GET['v175'],3,2);
$duztarihyil=substr($_GET['v175'],6,4);
$dtarih=$duztarihyil.'-'.$duztarihay.'-'.$duztarihgun;
$ontarihgun=substr($_GET['v178'],0,2);
$ontarihay=substr($_GET['v178'],3,2);
$ontarihyil=substr($_GET['v178'],6,4);
$otarih=$ontarihyil.'-'.$ontarihay.'-'.$ontarihgun;
*/
$vtsec="select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and asmadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbh_barkod,$vtsec);
$say=mysqli_num_rows($socsorgu);
if($say<1){
$kayit="INSERT INTO veri(ilidi,ilceidi,asmadi,vyiladi,vayadi) VALUES($ilgelen,$ilcegelen,'$ocgelen','$yilgelen','$aygelen')";

if(mysqli_query($dbh_barkod,$kayit)){
echo '<div class="alert-light"><button type="button" class="btn btn-primary btn-sm mt-3 mb-2" data-dismiss="modal" onclick="kontrol();">Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
echo '<div class="alert-light"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="kontrol();">Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
	
	echo'<meta http-equiv=refresh content="10; url=http://'.$siteadresi.'/byethost/barkod/index.php" /><a href="http://'.$siteadresi.'/byethost/barkod/index.php" _fcksavedurl="http://'.$siteadresi.'/byethost/barkod/index.php">Oturum Sonlandırıldı Tekrar Giriş Yapınız....</a>';

 }
}else{ echo '<label><font style="color:Red">Oturum Sonlandırıldı Tekrar Giriş Yapınız....</font></label><meta http-equiv=refresh content="10; url=http://'.$siteadresi.'/byethost/barkod/index.php" /><a href="http://'.$siteadresi.'/byethost/barkod/index.php" _fcksavedurl="http://'.$siteadresi.'/byethost/barkod/index.php"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
}
@mysqli_close($dbh_barkod);
 ?>
