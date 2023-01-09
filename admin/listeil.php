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
$resultocak = @mysqli_query($dbh,"select * from ocak where(select left(socad,2)='$kodiki') order by ilinad asc");
while($rowocak=mysqli_fetch_array($resultocak)) {
$ilno=$rowocak['ilinad'];
}
if(/*substr($hamkod,-3,3)==$kurumyetki or */substr($hamkod,-3,3)==$ilyetki){
$resultuser = @mysqli_query($dbh,"select * from il where(ilid='$ilno') order by ilad asc");
$say=0;
$iletisayisi=@mysqli_num_rows($resultuser);
}else if(substr($hamkod,-3,3)==$bakanlikyetki){
$resultuser = @mysqli_query($dbh,"select * from il order by ilad asc");
$say=0;
$iletisayisi=@mysqli_num_rows($resultuser);
}
if($ilyetki!=substr($hamkod,-3,3) and $bakanlikyetki!=substr($hamkod,-3,3)){
  $yetkikayityok="Listeleme Yetkiniz yoktur.";
  echo '<div class="alert alert-primary text-danger">'.$yetkikayityok.'</div>';
  echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> Tamam</a>'; 
}elseif($ilyetki==substr($hamkod,-3,3) and $bakanlikyetki==substr($hamkod,-3,3) and  $iletisayisi==0){
  $yetkikayityok="İl Kaydı yoktur.";
  echo '<div class="alert alert-primary text-danger">'.$yetkikayityok.'</div>';
  echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> Tamam</a>';
}else{
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';
//$birimno='Sıra No:';
//$birimadi='İl Adı:';
echo '<th>Sıra No:</th>';
echo '<th>İl Adı:</th>';
//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';
echo '</tr>';  
echo '</thead>';
while($rowuser=mysqli_fetch_array($resultuser)) {$say++;
$no=$rowuser['ilid'];
$kurum=$rowuser['ilad'];
echo '<tbody>';
echo '<tr>';
echo '<td align="center"><h6>'.$say.'</h6></td>';
echo '<td><h6 class="ml-2">'.$kurum.'</h6></td>';
//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';
echo '</tr>';
echo '<tbody>'; 
}
echo '</table>';
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>