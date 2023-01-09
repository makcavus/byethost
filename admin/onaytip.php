<?php
//include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
  $inactive = 1300;
  if(isset($_SESSION['timeout']) ) {
  $session_life = time() - $_SESSION['timeout'];
  if($session_life > $inactive)
  {
  unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
  session_destroy(); header("Location: cikis.php"); }
  }
  $_SESSION['timeout'] = time();
include("../connect.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
//include("../frm013alanlari.php");
$tipgelen=$_GET['tipgir']; // get metodu ile formdan gelen geğer alınıyor
$tipgelen=replace_tr($tipgelen);
$resultvyil = @mysqli_query($dbh,"select * from kurumtipi where(tipi='$tipgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$tipnom=$sonucum['tipid'];
$tipadim=$sonucum['tipi'];
}
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
$resulttip = @mysqli_query($dbh,"select * from adres where(tipi='$tipnom') order by adi asc") ;
$say=@mysqli_num_rows($resulttip);
//echo $say;
while($sonucum=mysqli_fetch_array($resulttip)){
$adresadi=$sonucum['adi'];
}
echo '<tr>';
echo '<th class="bg-danger text-light">';
//echo $gereklinom;
if($say==0){
  echo 'Bu kurum tipine ait adres kaydı yoktur. Yalnızca kurum tipi ismi silinecektir.';
  }else{
$silinecekler=" Kuruma ait adres bilgileri de silinecektir. !!!";
echo "!!! ".$say.' '.$silinecekler;
  }
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.replace_tr($tipgelen).'---</strong> '.$silemin.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontroltip();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="tipsil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
echo '</th>';
echo '</tr>';
echo '<thead>';
echo '</table>';
echo '</div>';
include("../assets/sablon/form013/footer.php");
}
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
