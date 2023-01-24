<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
?>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<script language="JavaScript" src="arkakara.js" type="text/javascript"></script>
<script type="text/JavaScript">
function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 
</script>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
<?php
$gonileti="Gönderilmiş ileti yoktur.";
//mysql baglantisi
include("../con_023.php");

include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$kim=$_SESSION["uye"];
$resultx = @mysqli_query($dbh,"select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysqli_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);
$iptal="İptal";
} 
include("../connect.php");
if(substr($hamkod,-3,3)==$bakanlikyetki or $ilyetki or $kurumyetki){
$resultuser = @mysqli_query($dbh,"select * from bizeulasin order by tarih desc");
}
$say=0;
$iletisayisi=mysqli_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
echo '<div class="alert alert-primary text-danger">'.$gonileti.'</div>';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';
}else{
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';
$tarih='Tarih:';
$adi='Gönderenin Adı Soyadı:';
$telefon="Telefonu:";
$email="E-mail Adresi:";
$ileti="İletisi:";
$vercevap="Verilen Cevap:";
$mailto="mailto:";
$ctarihi="Cevap Tarihi:";
echo '<th class="align-middle">'.$tarih.'</th>';
echo '<th class="align-middle">'.$adi.'</th>';
echo '<th class="align-middle">'.$telefon.'</th>';
echo '<th class="align-middle">'.$email.'</th>';
echo '<th class="align-middle">'.$ileti.'</th>';
echo '<th class="align-middle">'.$ctarihi.'</th>';
echo '<th class="align-middle">'.$vercevap.'</th>';
echo '<th colspan="3" class="align-middle">'."İşlem:".'</th>';
echo '</tr>';  
echo '</thead>';  
while($rowuser=mysqli_fetch_array($resultuser)) {$say++;
$viletiid=$rowuser['iltiid'];
$vtarih=$rowuser['tarih'];
$itarihorg=substr($vtarih,0,10);
$iyil=substr($itarihorg,0,4);
$iay=substr($itarihorg,5,2);
$igun=substr($itarihorg,8,2);
$vtarihn=$igun.'.'.$iay.'.'.$iyil;
$vadi=$rowuser['adsoyad'];
$vtelefon=$rowuser['telefon'];
$vemail=$rowuser['emailadresi'];
$vileti=$rowuser['dusunceniz'];
$vctarih=$rowuser['cevaptarihi'];
$tarihorg=substr($vctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$vctarihn=$gun.'.'.$ay.'.'.$yil;
$vcevap=$rowuser['cevap'];
$vyayinda=$rowuser['yayinda'];	
echo '<tbody>';
echo '<tr>';
echo '<td class="align-middle"><h6>'.$vtarihn.'</h6></td>';
echo '<td class="align-middle"><h6>'.$vadi.'</h6></td>';
echo '<td class="align-middle"><h6>'.$vtelefon.'</h6></td>';
echo '<td class="align-middle"><h6>'.$vemail.'</h6></td>';
echo '<td class="align-middle"><h6>'.$vileti.'</h6></td>';
echo '<td class="align-middle"><h6>'.$vctarihn.'</h6></td>';
echo '<td class="align-middle"><h6>'.$vcevap.'</h6></td>';
if($vyayinda==0){
echo '<td class="align-middle text-center"><i class="fa fa-ban fa-2x text-danger" aria-hidden="true"></i></td>';
}else{
echo '<td class="align-middle text-center"><i class="fa fa-rss fa-2x text-success" aria-hidden="true"></i></td>';
}
echo '<td class="align-middle text-center"><h6><a href="onayileti.php?iltiid='.$viletiid.'" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> '."Sil".'</a></h6></td>';
//Eğer önceden cevap verilmişse DEĞİŞTİR, yeni cevap verilecekse CEVAPLA butonu gözüksün........
if(isset($vcevap)){
	?>
<td class="align-middle text-center"><h6><a href="cevapla.php?iltiid=<?php echo $viletiid ; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit fa-lg"></i> Değiştir</a></h6></td>
<?php }else{ ?>
<td class="align-middle text-center"><h6><a href="cevapla.php?iltiid=<?php echo $viletiid ; ?>" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Cevapla</a></h6></td>
<?php 
} 
echo '</tr>';
echo '</tbody>';
}
echo '</table>';
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>