<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
include("../con_023.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
include("../form013/frm013alanlari.php");
$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=replace_tr($ilcegelen);
$resultilce = @mysqli_query($dbh,"select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')");
while($sonucum2=mysqli_fetch_array($resultilce)){
$ilcenom=$sonucum2['ilceid'];
$ilnom=$sonucum2['ilinad'];
$ilceadi=$sonucum2['ilcead'];
}
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
$resultilce = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilnom' and ilce='$ilcenom') order by ilce asc") ;
$say=@mysqli_num_rows($resultilce);
while($sonucum=mysqli_fetch_array($resultilce)){
$silocakad=$sonucum['ilce'];
}
echo '<tr>';
echo '<th class="bg-danger text-light">';
if($say==0){
      echo 'Bu ilçeye ait Kurum kaydı yoktur. Yalnızca ilçe adı silinecektir.';
      }else{
$silinecekler="Kurum bilgisi de silinecektir.!!!";
echo "!!! Bu İlçeye ait ".$say.' '.$silinecekler;
      }
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.$ilceadi.'---</strong> '.$silemin.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrolilce();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="sililce();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
echo '</th>';
echo '</tr>';
echo '<thead>';
echo '</table>';
echo '</div>';
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>