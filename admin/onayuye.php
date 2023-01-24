<?php
//include("index.php");
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
  header("Cache-Control: no-cache,no-store");
include("../con_023.php");
include("../fonksiyonlar.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$ilseckrgelen=$_GET['uyekodum'];
//$ilceseckrgelen=$_GET['doktoradi'];
//$kurumgelen=$_GET['kuladi'];
//$asmgelen=$_GET['kulsifre'];
$resultkurum = @mysqli_query($dbh,"select * from uyeler where(uyekod='$ilseckrgelen')");
while($sonucum3=mysqli_fetch_array($resultkurum)){
$kurumnom=$sonucum3['uyeno'];
$ilnom=$sonucum3['uyead'];
$ilcenom=$sonucum3['uyekim'];
$kurumadi=$sonucum3['uyesifre'];
$asmadi=$sonucum3['uyekod'];
}
$silmek="Silmek İstediğinize Emin misiniz ?";
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.$asmadi.' '.$virgul.' <span class="badge badge-success badge-pill" style="font-size:16px">
<i class="fa fa-user" fa-lg></i> '.$ilnom.'</span> '.$kullanici.'</strong> '.$silmek.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontroluye();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="siluye();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
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