<?php
include("index.php");
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
include("../connect.php");
//include("../frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
	
$birimgelen=$_GET['birimgir']; // get metodu ile formdan gelen ge�er al�n�yor
$resultvyil = @mysqli_query($dbh,"select * from birim where(birim_ad='$birimgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilnom=$sonucum['birim_id'];
$birimadim=$sonucum['birim_ad'];
//echo $iladim;
}
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
$resultgerekli = @mysqli_query($dbh,"select * from gerekli where(birim_idi='$ilnom')") ;
$say=@mysqli_num_rows($resultgerekli);
while($sonucum=mysqli_fetch_array($resultgerekli)){
$gereklinom=$sonucum['birim_idi'];
$icerik=$sonucum['icerik'];
$dosya=$sonucum['dosya_adi'];
$resim=$sonucum['resim_adi'];
}
echo '<tr>';
echo '<th class="bg-danger text-light">';
if($say==0){
echo 'Bu birime kayıtlı belge/form yoktur. Yalnızca birim ismi silinecektir.';
}else{
$silinecekler="Gerekli belge/form da silinecektir. !!!";
echo '!!! Yüklü '.$say.' '.$silinecekler;
}
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.$birimgelen.'---</strong> '.$silemin.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrolbirim();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="birimsil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
echo '</th>';
echo '</tr>';
echo '<thead>';
echo '</table>';
echo '</div>';
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
