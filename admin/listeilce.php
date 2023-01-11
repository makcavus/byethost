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
include("../form013/tanimveyetkiler.php");
$secilen_il=$_GET['selectilno'];
if(substr($hamkod,-3,3)==$bakanlikyetki){
  if($secilen_il==""){
$resultuser = @mysqli_query($dbh,"select * from ilce order by ilcead asc");
  }else{
    $resultuser = @mysqli_query($dbh,"select * from ilce where(ilinad='$secilen_il') order by ilcead asc");
  }
}else if(substr($hamkod,-3,3)==$ilyetki){
$resultuser = @mysqli_query($dbh,"select * from ilce where(ilinad='$ilno') order by ilcead asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$resultuser = @mysqli_query($dbh,"select * from ilce where(ilceid='$ilceno' and ilinad='$ilno') order by ilcead asc");
}
$say=0;
$iletisayisi=mysqli_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
$yetkikayityok="Listeleme Yetkiniz veya İlçe Kaydı yoktur.";
echo '<div class="alert alert-primary text-danger">'.$yetkikayityok.'</div>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';
}else{
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';
$birimno='Sıra No:';
$birimadi='İl Adı:';
$ilceminadi='İlçe Adı';
echo '<th>'.$birimno.'</th>';
echo '<th>'.$birimadi.'</th>';
echo '<th>'.$ilceminadi.'</th>';
echo '</tr>';  
echo '</thead>';
while($rowuser=mysqli_fetch_array($resultuser)) {$say++;
$no=$rowuser['ilceid'];
$kurum=$rowuser['ilinad'];
$ilceadim=$rowuser['ilcead'];
$resultiladi= @mysqli_query($dbh,"select * from il where(ilid='$kurum') order by ilad asc");
while($rowiladi=mysqli_fetch_array($resultiladi)) {
$iladim=$rowiladi['ilad'];
echo '<tbody>';
echo '<tr>';
echo '<td align="center"><h6>'.$say.'</h6></td>';
echo '<td><h6 class="ml-2">'.$iladim.'</h6></td>';
echo '<td><h6 class="ml-2">'.$ilceadim.'</h6></td>';
echo '</tr>';
echo '<tbody>'; 
}
}
echo '</table>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>