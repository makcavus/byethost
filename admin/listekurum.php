<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');	
if(substr($hamkod,-3,3)==$bakanlikyetki){
$resultuser = @mysqli_query($dbh,"select * from ocak order by ilinad desc,ilce desc,socad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$resultuser = @mysqli_query($dbh,"select * from ocak where(left(socad,2)='$kodiki') order by  ilce desc,socad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$resultuser = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilno' and left(socad,5)='$kod') order by socad asc");
}
$say=0;
$iletisayisi=mysqli_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
$yetkikayityok="Listeleme Yetkiniz veya Kurum Kaydı yoktur.";
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
$kurumadi="Birim Adı:";
$asmadim="Kurum Adı:";
$dradim="Yetkili Adı:";
$aseunvanim="Görevli Ünvan:";
$aseadim="Görevli Adı:";
echo '<th>'.$birimno.'</th>';
echo '<th>'.$birimadi.'</th>';
echo '<th>'.$ilceminadi.'</th>';
echo '<th>'.$kurumadi.'</th>';
echo '<th>'.$asmadim.'</th>';
echo '<th>'.$dradim.'</th>';
echo '<th>'.$aseadim.'</th>';
echo '</tr>';  
echo '</thead>';  
while($rowuser=mysqli_fetch_array($resultuser)) {
$no=$rowuser['ocid'];
$kurum=$rowuser['ilinad'];
$ilceadim=$rowuser['ilce'];
$ocakadim=$rowuser['socad'];
$asmem=$rowuser['asmadi'];
$yetkiliadi=$rowuser['dradi'];
$gorevliunv=$rowuser['aseunvan'];
$gorevliadi=$rowuser['aseadi'];
$resultiladi= @mysqli_query($dbh,"select * from il where(ilid='$kurum') order by ilad asc");
while($rowiladi=mysqli_fetch_array($resultiladi)) {
$iladim=$rowiladi['ilad'];
$resultilceadi= @mysqli_query($dbh,"select * from ilce where(ilceid='$ilceadim' and ilinad='$kurum') order by ilcead asc");
while($rowilceadi=mysqli_fetch_array($resultilceadi)) {$say++;
$ilceminadi=$rowilceadi['ilcead'];
echo '<tbody>';
echo '<tr>';
echo '<td align="center"><h6>'.$say.'</h6></td>';
echo '<td><h6>'.$iladim.'</h6></td>';
echo '<td><h6>'.$ilceminadi.'</h6></td>';
echo '<td><h6>'.$ocakadim.'</h6></td>';
echo '<td><h6>'.$asmem.'</h6></td>';
echo '<td><h6>'.$yetkiliadi.'</h6></td>';
echo '<td><h6>'.$gorevliadi.'</h6></td>';
echo '</tr>';
echo '</tbody>';
}
}
}
echo '</table>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';}
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
