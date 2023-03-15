<a id="basadon"></a>
<?php header("Cache-Control: no-cache,no-store");
session_start();
$inactive = 1300;
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
{ 
unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor
session_destroy(); header("Location: cikis.php"); }
}
$_SESSION['timeout'] = time();
?>
<style>
	table {
		margin-top: -8px !important;
    }
	.tableahek {
 		margin-top: -18px !important;
    }
    .tableahekbtn {
 		height: 0px;
    }
	</style>
<?php
include('c3c4alanlari.php');
include("../con_023.php");
$countryId=$_GET['selectil']; 
$stateId=$_GET['selectilce']; 
$ocak=$_GET['selectoc']; 
$yil=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
include("../con_abe.php");
//ABE Formu doldurldu mu?
$abesec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vayadi='$ay')";
$abesorgu=mysqli_query($dbhabe,$abesec);
$abesay=mysqli_num_rows($abesorgu);

$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;
$vtsec="select * from veriage where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vayadi='$ay')";
$socsorgu=mysqli_query($dbhabe,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar="Il Seçilmedi";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
$uyar="İlçe Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
$uyar="Aile Hekimi/Kurum Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $abesay!=$kachastsay and $say==0){
$uyar="Öncelikle ABE Veri Girişlerini Tamamlamalısınız.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
echo '<a class="btn btn-sm btn-primary mb-2" href="../abe/frm023kayit.php" style="width: 140px"><i class="fa fa-floppy-o" aria-hidden="true"></i> ABE Kayıt Ekle</a>';
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $abesay>0 and $say<1){
$uyar="";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
echo '<a class="btn btn-sm btn-primary mb-2" href=# onClick="ykay();" style="width: 140px"><i class="fa fa-file-text-o" aria-hidden="true"></i> Rapor Oluştur</a>';
}else{
$uyar="BU KAYIT YAPILMIŞ...";
//echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=$_GET['selectoc'];
?>
<?php 
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$xaygelentam=$_GET['selectay']; 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,0,2);
$xaygelentarihay=substr($xaygelentarih,3,2);
$xaygelentarihyil=substr($xaygelentarih,6,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
$ocakyazi=$_GET['selectoc'];
$resultvyil = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/c3c4_sablonlar/c3c4_veri_seti.php');
}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbhabe,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbhabe,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
 if($ilcegelen=="İlçe Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($ocgelen),0,2);
$ilcekod=substr(trim($ocgelen),3,2);
$ahkod=substr(trim($ocgelen),6,3);
}else{
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod=substr(trim($socadi),6,3);
}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)=='TSM'){
$ahno='';//Sorumlu Tabibi
}elseif(substr($ocgelen,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
?>
<?php
echo '<form action="test.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
?>
<table class="table table-responsive-sm table-sm tableahek">
<thead class="bg-dark" align="center">
<tr>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a></form></th>
<th class="bg-warning text-center"><input class="btn btn-primary btn-sm mb-1" TYPE="SUBMIT" value="<?php echo $wordbaslik ; ?>" style="width: 100px">
<th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-2" style="color:#FFFF00;"><strong><?php echo $kayitgorbaslik;?></strong></h6></th>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-light" href=# onClick="listele();" style="width: 100px"><i class="fa fa-list-alt" aria-hidden="true"></i> Listele</a></form></th>	
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>
</tr>
</thead>
</table>
	<?php
  include('assets/c3c4_sablonlar/age_rapor_sablonu.php');
include('assets/c3c4_sablonlar/gizli_input_kontrol.php');


?>

  
    
</form>
<?php
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
//echo '<p>';
echo '</form>';
echo '<form action="test.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<th class="style6" width="42%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="deg();"><img src="../images/degistir.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="git();"><img src="../images/goster.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="onay();"><img src="../images/sil.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<th class="style6" width="42%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="<?php echo $wordbaslik; ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"/><div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get"></th>
</table>
<?php
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';
}
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;

$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like '%Dr.%' and v177 like '%Hastane%' and vayadi='$ay')";
$hastverisorgula=mysqli_query($dbhabe,$kacverihast);
while($hasteksiksonucum=mysqli_fetch_array($hastverisorgula)){
$eksikhast=$hasteksiksonucum['vocadi'];
//echo $eksikhast;
}
$hastkacverisay=mysqli_num_rows($hastverisorgula);
//echo $hastkacverisay;
if($hastkacverisay==0){
$boshast="Henüz Hastanelere ait veri girilmemiştir.";

//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="text-center text-danger"><h5><span class="badge badge-pill badge-danger"><?php echo $boshast;?></span></h5></th>
</tr>
</thead>
</table>
<?php
}elseif($hastkacverisay>0 and $kachastsay!=$hastkacverisay){
$girilmeyenhast=$kachastsay-$hastkacverisay;
$ahast="Hastaneden";
$bhast="Hastaneye ait veriler girilmemiştir.";

?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kachastsay." ".$ahast." ".$girilmeyenhast." ".$bhast;?></font></th>
</table>
<?php
}else{
$tamamhast="Bütün Hastanelere ait veri girişi yapılmıştır.";
//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger mt-2"><?php echo $tamamhast;?></span></h5></th>
</tr>
</thead>
</table>
<?php
}
?>
<?php
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM' or ilinad='$countryId' and ilce='$stateId' and dradi like 'Uzm.Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veriage where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Uzm.Dr.%' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysqli_query($dbhabe,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos="Henüz Aile Hekimlerine ait veri girilmemiştir.";

//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
  <thead>
<th width="100%" class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger"><?php echo "$bos";?></span></h5></th>
</tr>
</thead>
</table>
<?php
}elseif($kacaheksay!=$kacverisay){
if($kacaheksay==$kacverisay){
$girilmeyenahek="Aile hekimlerine ait veri girişi yoktur.";
?>
<?php
}else{
$girilmeyenahek=$kacaheksay-$kacverisay;
}
$a="Aile Hekimliği Biriminden";
$b="Aile Hekimliğine ait veriler girilmemiştir.";

?>

<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kacaheksay." ".$a." ".$girilmeyenahek." ".$b;?></font></th>
</table>
<?php
$gelmeyenler="Verileri girilmeyen Aile Hekimliği Birimleri";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='blue'><?php echo $gelmeyenler;?></font></th>
</table>

<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vayadi='$ay' or ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Uzm.Dr.%' and veri.v177 like '%Nolu A%' and veri.vayadi='$ay'
WHERE veri.vocadi IS NULL";
$etablosu=mysqli_query($dbh,$eksiktablosu);
while($eahsonucum=mysqli_fetch_array($etablosu)){
$eksikahadi=$eahsonucum['socad'];
$eksikdradi=$eahsonucum['dradi'];
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="50%" align="right"><font size='2px' face='tahoma'><?php echo $eksikahadi.'--'; ?></font></th>
<th width="50%" align="left"><font size='2px' face='tahoma'><?php echo '--'.$eksikdradi; ?></font></th>
</table>
<?php
}
}else{
$tamam="Bütün Aile Hekimliği Birimlerine ait veri girişi yapılmıştır.";
//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
  <thead>
<tr>
<th width="100%"  class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger"><?php echo $tamam;?></span></h5></th>
</tr>
</thead>
</table>
<?php
}
include('assets/c3c4_sablonlar/silme_onay_modal.php');
@mysqli_close($dbhabe) ;
?>
<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap-4/popper.js"></script>
	<script src="../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>