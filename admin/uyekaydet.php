<?php
//include("index.php");
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
    echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
// timeout periyodu, sn olarak
$inactive = 1300;
if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
    {
        unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
        session_destroy(); header("Location: cikis.php"); }
}
$_SESSION['timeout'] = time();
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$ilgelen=$_GET['kulkay']; // get metodu ile formdan gelen ge�er al�n�yor
$drgelen=$_GET['doktoradi']; // get metodu ile formdan gelen ge�er al�n�yor
$kadigelen=$_GET['kuladi']; // get metodu ile formdan gelen ge�er al�n�yor
$kadigelen=strtr($kadigelen,"ığüşçöİĞÜŞÇÖ","iguscoIGUSCO");
$ksifgelen=$_GET['kulsifre']; // get metodu ile formdan gelen ge�er al�n�yor
$resultuye = @mysqli_query($dbh,"select * from uyeler where(uyead='$kadigelen')") ;
$say=mysqli_num_rows($resultuye);
while($sonucum=mysqli_fetch_array($resultuye)){
$uyekodnom=$sonucum['uyekod'];
$uyeadim=$sonucum['uyead'];
}
if($say==0){
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}
$sha1=sha1cevir($ksifgelen); // fonksiyon �a��r�l�or
$sha2=sha1cevir($sha1); // fonksiyon �a��r�l�or
$sha3=sha1cevir($sha2); // fonksiyon �a��r�l�or
$ilsec="select * from uyeler where(uyekod='$ilgelen')";
$socsorgu=mysqli_query($dbh,$ilsec);
$say=mysqli_num_rows($socsorgu);
if($say==0 AND $ilgelen !=""){
$kayit="INSERT INTO uyeler(uyead,uyekim,uyesifre,uyekod) VALUES ('$kadigelen','$drgelen','$sha3','$ilgelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ilgelen.' '.$uyekayitok.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a><br><small>'."Türkçe karakter varsa dönüştürüldü.".'</small></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">Üye Kaydedilemedi... <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table></div>';
}
}
while($sonucum=mysqli_fetch_array($socsorgu)){
$ilno=$sonucum['ilid'];
$iladi=$sonucum['ilad'];				
}
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.$uyeadim.' '."--- Bu kullanıcı Adı Mevcut. Lütfen Yeni Kullanıcı Adı Belirleyiniz.".' <button name="submit3" type="button" onclick="kontroluye();" 
onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</button></th></thead></table></div>';
}
@mysqli_close($dbh);
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>