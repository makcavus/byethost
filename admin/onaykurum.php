<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
include("../con_023.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
include("../form013/frm013alanlari.php");
include("../form013/tanimveyetkiler.php");
$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];
$kurumgelen=$_GET['kurumgir'];
$resultkurum = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')");
while($sonucum3=mysqli_fetch_array($resultkurum)){
$kurumnom=$sonucum3['ocid'];
$ilnom=$sonucum3['ilinad'];
$ilcenom=$sonucum3['ilce'];
$kurumadi=$sonucum3['socad'];
$asmadi=$sonucum3['asmadi'];
$tbbadi=$sonucum3['dradi'];
$aseadi=$sonucum3['aseadi'];
$aseunv=$sonucum3['aseunvan'];
}
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.$kurumadi.'---</strong> '.$silemin.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrolkurum();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="silkurum();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
echo '</th>';
echo '</tr>';
echo '<thead>';
echo '</table>';
echo '</div>';
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>