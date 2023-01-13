<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayï¿½ gï¿½rï¿½ntï¿½leme yetkiniz yoktur.";
}else{
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$kim=$_SESSION["uye"];
$resultx = @mysqli_query($dbh,"select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysqli_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);
} 
if(substr($hamkod,-3,3)==$bakanlikyetki){
$resultuser = @mysqli_query($dbh,"select * from uyeler order by uyekod asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$resultuser = @mysqli_query($dbh,"select * from uyeler where(select left(uyekod,2)='$kodiki' and right(uyekod,3)='$ilyetki' or left(uyekod,2)='$kodiki') order by uyekod asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$resultuser = @mysqli_query($dbh,"select * from uyeler where(select left(uyekod,5)='$kod') order by uyekod asc");
}
$say=0;
$iletisayisi=mysqli_num_rows($resultuser);
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';
$sno='Sıra No:';
$kod='Kurum Adı:';
$dr='Doktor Adı:';
$user='Kullanıcı Adı:';
$sifre='Şifre:';
echo '<th>'.$sno.'</th>';
echo '<th>'.$kod.'</th>';
echo '<th>'.$dr.'</th>';
echo '<th>'.$user.'</th>';
echo '</tr>';  
echo '</thead>';  
while($rowuser=mysqli_fetch_array($resultuser)) {$say++;
$no=$rowuser['uyeno'];
$kurum=$rowuser['uyekod'];
$dr=$rowuser['uyekim'];
$user=$rowuser['uyead'];
$pass=$rowuser['uyesifre'];
echo '<tbody>';
echo '<tr>';
echo '<td align="center"><h6>'.$say.'</h6></td>';
echo '<td><h6>'.$kurum.'</h6></td>';
echo '<td><h6>'.$dr.'</h6></td>';
echo '<td><h6>'.$user.'</h6></td>';
echo '</tr>';
echo '</tbody>';  
}
echo '</table>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1 mt-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
