<?php header("Cache-Control: no-cache,no-store"); ?>
<script language="JavaScript" type="text/javascript">
function hoppa() {
	if(screen.width==1280||screen.height==1024){ // ��z�n�rl�k 1280*1024 Ise
 window.open("","hoppa","width=790,height=636,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}else if(screen.width==1280||screen.height==960){ // ��z�n�rl�k 1280*960 Ise
 window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}else{ // ��z�n�rl�k Bunlardan Hi�biri Degil veya Farkli Ise
window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}
 }
</script>	
<?php
include("../con_023.php");
include("../con_etf.php");
include("../form013/tanimveyetkiler.php");
include('piramitalanlari.php');
$ahekkodu=$_GET['ahekkod'];
$countryId= $_GET['selectil']; 
$stateId= $_GET['selectilce']; 
$ocak= $_GET['selectoc']; 
$yil=$_GET['selectyil'];
$ilkod=substr($ahekkodu,0,2);
$ilkodx=substr($ocak,0,2);
$yetki=substr($ahekkodu,-3,3);
$ilcekod=substr($ahekkodu,0,5);
$ilcekodx=substr($ocak,0,5);
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil')";
$socsorgu=mysqli_query($dbh_etf,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar="İl Seçilmedi";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
$uyar="İlçe Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
$uyar="Aile Hekimliği Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId !="İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil=="" and $say<1){
$uyar="Yılı Boş Bıraktınız.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId != "" and $ilceninadi != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil!="" and $say<1){
$uyar="";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
if($yetki==$bakanlikyetki or $yetki=$ilyetki and $ilkod==$ilkodx or $yetki==$ilceyetki and $ilcekod==$ilcekodx or $yetki==$kurumyetki and $ilcekod==$ilcekodx or $ahekkodu==$ocak){
  echo '<a class="btn btn-sm btn-primary" href=# onClick="ykay();" style="width: 100px"><i class="fa fa-floppy-o" aria-hidden="true"></i> '
  .$kayitekle.'</a>';
}else{
$sizmisiniz="Bu kaydı yapmaya yetkiniz yoktur.";
echo '<font style="color:Red">'.$sizmisiniz.'</span></h5>' ;
}
}else{
/*$uyar="BU KAYIT YAPILMIŞ...";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
echo '<label><font size="2px" face="tahoma">'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocak.'</FONT>-'.$yil.'&nbsp;&nbsp;&nbsp;&nbsp;</font></label>';
echo '</form>';*/
if($yetki==$bakanlikyetki or $yetki=$ilyetki and $ilkod==$ilkodx or $yetki==$ilceyetki and $ilcekod==$ilcekodx or $yetki==$kurumyetki and $ilcekod==$ilcekodx or $ahekkodu==$ocak){
?>
<table class="table table-responsive-sm table-sm form013ustaralar" style="margin-top:-24px;">
<thead class="bg-dark" align="center">
<tr>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $degistir;?></a></form></th>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>

<th class="bg-warning text-center">
<?php
echo '<form class="form-control-sm" action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>
<button name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 100px"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
	PDF</button>
<?php
echo '</form>';
?>
<th class="bg-warning text-center">

<?php
echo '<form class="form-control-sm" action="/excelmysqli/npyilxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 100px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
 Excel</button>
<?php
echo '</form>';
?>
<th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-2" style="color:#FFFF00;"><strong><?php echo $kayitgorbaslik;?></strong></h6></th>
<th class="bg-warning text-center">

<?php
echo '<form action="nufpirkurumyg.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>
<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light mb-1" style="width: 136px"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $npbuton ;?></button>

<?php
echo '</form>';
?>
<th class="bg-warning text-center">

	<?php
echo '<form action="npbuyukyaz.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>
<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-primary mb-1" style="width: 138px"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $buyuknpbuton ;?></button>
<?php  
echo '</form>';
  ?>
<th class="bg-warning text-center">

<?php
echo '<form action="nufpirkurummh.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-danger mb-1" style="width: 130px"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $mhbuton ;?></button>
<?php
echo '</form>';
?>

<th class="bg-warning text-center">

<?php
echo '<form action="nufpirkurumod.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-success mb-1" style="width: 160px"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $odbuton ;?></button>
<?php
echo '</form>';
?>
</thead>
</table>
<?php
$resultvyil = @mysqli_query($dbh_etf,"select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/etf_sablonlar/np_veri_seti.php');
}
include('assets/etf_sablonlar/toplamsutunu.php');
include('assets/etf_sablonlar/npkontrol_sablonu.php');
}else{
echo '<br>';
echo '<a href=# onClick="git();"><img src="images/goster.PNG"></a>';
}
}
if($yetki==$bakanlikyetki or $yetki=$ilyetki and $ilkod==$ilkodx or $yetki==$ilceyetki and $ilcekod==$ilcekodx or $yetki==$kurumyetki and $ilcekod==$ilcekodx or $ahekkodu==$ocak){
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vyiladi='$yil')";
$verisorgula=mysqli_query($dbh_etf,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos="Henüz hiçbir Aile Hekimliğine veri girilmemiştir.";
echo "<br>";
echo "<br>";

echo '<h5><span class="badge badge-pill badge-danger">'.$bos.'</span></h5>';
}elseif($kacaheksay!=$kacverisay){
$a="Aile Hekimli�i Biriminden";
$b="Aile Hekimli�ine ait veriler girilmi�tir.";
$fark=$kacaheksay-$kacverisay;
$c="Aile Hekimli�ine ait veri girilmemi�tir.";
echo "<br>";
?>
<table class="table table-responsive-sm table-sm table-bordered table-striped table-info table-hover  form013ustaralar" style="margin-top:-36px;">
<thead>
  <tr>
  <tr>
<td class="text-danger" align="center" colspan="2"><h6><?php echo $kacaheksay." ".$ahbirbaslik." ".$kacverisay." ".$ahgirbaslik."".$fark." ".$ahvgbaslik;?></h6></td>
</tr>
<?php
$gelmeyenler="Verileri girilmeyen Aile Hekimli�i Birimleri";
?>
<tr>
<th class="text-center" align="center" colspan="2"><font size='2px' face='tahoma' color='red'><?php echo $gelmeyenbaslik;?></font></th>
</tr>
<tr>
<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vyiladi='$yil'
WHERE veri.vocadi IS NULL";
$etablosu=mysqli_query($dbh,$eksiktablosu);
while($eahsonucum=mysqli_fetch_array($etablosu)){
$eksikahadi=$eahsonucum['socad'];
$eksikdradi=$eahsonucum['dradi'];
?>
<th class="text-right" width="50%" align="right" colspan="1"><font size='2px' face='tahoma'><?php echo $eksikahadi.'--'; ?></font></th>
<th class="text-left" width="50%" align="left" colspan="1"><font size='2px' face='tahoma'><?php echo '--'.$eksikdradi; ?></font></th>
</tr>
<?php
}
}else{
  echo "<br>";
  echo '<span class="badge badge-pill badge-danger">'.$tamambaslik.'</span>';
}
}
?>
<?php
@mysqli_close($dbh) ;
?>
</tr>
<thead>
</table>