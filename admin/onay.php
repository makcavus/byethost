<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
include("../con_023.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
//include("../frm013alanlari.php");
$ilgelen=$_GET['ilgir']; // get metodu ile formdan gelen ge�er al�n�yor
$ilgelen=replace_tr($ilgelen);
$resultvyil = @mysqli_query($dbh,"select * from il where(ilad='$ilgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilnom=$sonucum['ilid'];
$iladim=$sonucum['ilad'];
}
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
$resultil = @mysqli_query($dbh,"select * from ilce where(ilinad='$ilnom') order by ilcead asc") ;
$say=@mysqli_num_rows($resultil);
while($sonucum=mysqli_fetch_array($resultil)){
$sililcead=$sonucum['ilcead'];
}
echo '<tr>';
echo '<th class="bg-danger text-light">';
if($say==0){
      echo 'Bu ile ait İlçe kaydı yoktur. Yalnızca il adı silinecektir.';
      }else{
$silinecekler="İlçe de silinecektir.";
echo "Bu ile bağlı ".$say.' '.$silinecekler;
      }
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.replace_tr($ilgelen).'---</strong> '.$silemin.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrolil();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="sil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
echo '</th>';
echo '</tr>';
echo '<thead>';
echo '</table>';
echo '</div>';
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>