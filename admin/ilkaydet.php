<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
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
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
include("../form013/tanimveyetkiler.php");
$ilgelen=$_GET['ilgir'];
$ilgelen=replace_tr($ilgelen);
$ilsec="select * from il where(ilad='$ilgelen')";
$socsorgu=mysqli_query($dbh,$ilsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
if(substr($hamkod,-3,3)==$bakanlikyetki AND $say<1 AND $ilgelen !=""){
$kayit="INSERT INTO il(ilad) VALUES ('$ilgelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ilgelen.' '.$ilok.' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 Geridön </a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">İl Kaydedilemedi... <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table></div>';
}
}else{
  $yetkikayityok="İl Kaydetme Yetkiniz yoktur.";
  echo '<div class="alert alert-primary text-danger">'.$yetkikayityok.'</div>';
  echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> Tamam</a>';
}
while($sonucum=mysqli_fetch_array($socsorgu)){
$ilno=$sonucum['ilid'];
$iladi=$sonucum['ilad'];
}
@mysqli_close($dbh);

include("../assets/sablon/form013/footer.php");
}
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>