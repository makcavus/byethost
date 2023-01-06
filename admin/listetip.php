<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('../form013/frm013alanlari.php');
include('../form013/tanimveyetkiler.php');
//mysql baglantisi
include("../con_023.php");
//echo $_SESSION["uye"];
$kim=$_SESSION["uye"];
$resultx = @mysqli_query($dbh,"select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysqli_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);
//echo $kod;
} 
include("../connect.php");
if(substr($hamkod,-3,3)==$bakanlikyetki or $ilyetki or $kurumyetki){
$resultuser = @mysqli_query($dbh,"select * from kurumtipi order by tipi asc");
//$say=mysqli_num_rows($resultuser);
//echo $say;
}
$say=0;
$iletisayisi=mysqli_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
$yetkikayityok="Kurum Tipi Kaydı yoktur.";
echo '<div class="alert alert-primary text-danger">'.$yetkikayityok.'</div>';
echo '<div class="alert alert-primary text-danger">Kurum Kaydı yoktur.</div>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';
}else{
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';  
$tipno='Sıra No:';
$tipadi='Kurum Tipi:';
echo '<th>'.$tipno.'</th>';
echo '<th>'.$tipadi.'</th>';
//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';
echo '</tr>';  
echo '</thead>';
while($rowuser=mysqli_fetch_array($resultuser)) {$say++;
$no=$rowuser['tipid'];
$kurum=$rowuser['tipi'];
echo '<tbody>';
echo '<tr>';
echo '<td align="center"><h6>'.$say.'</h6></td>';
echo '<td><h6 class="ml-2">'.$kurum.'</h6></td>';
//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';
echo '</tr>';
echo '<tbody>'; 
}
echo '</table>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
}
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
