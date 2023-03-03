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
include("../con_023.php");
include("../con_abe.php");
include('abealanlari.php');
include('../form013/tanimveyetkiler.php');
$ahekkodu=$_GET['ahekkod'];
$countryId=$_GET['selectil']; 
$stateId=$_GET['selectilce']; 
$ocak=$_GET['selectoc']; 
$yil=$_GET['selectyil'];
$ay=$_GET['selectay']; 
//echo $kurumyetki;
$ilkod=substr($ahekkodu,0,2);
$ilkodx=substr($ocak,0,2);
$bakanlik=substr($ahekkodu,-3,3);
$ilhsm=substr($ahekkodu,-3,3);
$ilcekod=substr($ahekkodu,0,5);
$ilcekodx=substr($ocak,0,5);
$ilcetsm=substr($ahekkodu,-3,3);
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;
//echo '<br>';
//echo '<br>';
$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v177 like '%Hastane%' and vayadi='$ay')";
$hastverisorgula=mysqli_query($dbhabe,$kacverihast);
$hastkacverisay=mysqli_num_rows($hastverisorgula);
//echo $hastkacverisay;
//echo '<br>';
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and asmadi like '%ASM' or ilinad='$countryId' and ilce='$stateId' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v177 like '%Nolu A%' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysqli_query($dbhabe,$kacveri);
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
//echo '<br>';
/*echo $countryId ;
echo $stateId ;
echo $ocak ;
echo $yil ;
echo $ay ;*/
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vayadi='$ay')";
$socsorgu=mysqli_query($dbhabe,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
//echo $say;
if($countryId == "" and $say<1){
$uyar=$ilsecbaslik;
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}elseif($countryId !="" and $stateId == $ilcesecim and $say<1){
$uyar=$ilcesecbaslik;
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}elseif($countryId !="" and $stateId != $ilcesecim and $ocak == $ahsecim and $say<1){
$uyar=$kursecbaslik;
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}elseif($countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim and $say<1){
$uyar="";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;

  echo '<a class="btn btn-sm btn-primary mb-2" href=# onClick="ykay();" style="width: 100px"><i class="fa fa-floppy-o" aria-hidden="true"></i> '
   .$kayitekle.'</a>';   
  }else{
$uyar=$uyarbaslik;
//echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=$_GET['selectoc'];
?>
</script>
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>	
<?php 
include('../con_023.php');
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
$ocakyazi=$_GET['selectoc'];

$resultvyil = @mysqli_query($dbhabe,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/abe_sablonlar/abe_veri_seti.php');
}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbhabe,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbhabe,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
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
include('../con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
$sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysql_close($conn);
}
if($bakanlik==$bakanlikyetki or $ilhsm==$ilyetki or $ilcetsm==$ilceyetki or $ilcetsm==$kurumyetki or $ahekkodu==$ocak){
?>
<table class="table table-responsive-sm table-sm" style="margin-top:-24px;">
<thead class="bg-dark" align="center">
<tr>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $degistir;?></a></form></th>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>
<th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-2" style="color:#FFFF00;"><strong><?php echo $kayitgorbaslik;?></strong></h6></th>
<?php
  if($kachastsay==$hastkacverisay and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
echo '<th class="bg-warning text-center"><a class="btn btn-sm btn-dark mb-1" href="../c3c4/frm023kayit.php" style="width: 100%"><i class="fa fa-file-text-o" aria-hidden="true"></i> Rapor</a></th>';
}
?>
<th class="bg-warning text-center">
<?php
echo '<form class="form-control-sm" action="verikurumpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input class="form-control-sm" type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<button name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-primaryform-control form-control-sm" style="width: 100px"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
	PDF</button>
<?php
echo '</form>';
?>
	</th>
<th class="bg-warning text-center">

<?php
echo '<form class="form-control-sm" action="../excelmysqli/form013ayxls.php" method="get" name="gor">' ;
echo '<input class="form-control-sm" type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>

<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-primary" style="width: 100px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
 Excel</button>
<?php
echo '</form>';
?>
<th  class="bg-warning text-center"><a class="btn btn-sm btn-secondary mb-1" href="toplamlar.php">Toplamlar</a></th>
</tr>
</thead>
</table>
	<?php
}
include('assets/abe_sablonlar/abe_kontrol_sablonu.php');
include('assets/abe_sablonlar/silme_onay_modal.php');
?>
<?php
echo '</form>';
if($bakanlik==$bakanlikyetki or $ilhsm==$ilyetki or $ilcetsm==$ilceyetki or $ilcetsm==$kurumyetki or $ahekkodu==$ocak){
  ?>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="margin-top:-24px;">
  <thead class="bg-dark" align="center">
  <tr>
  <th width="12%" class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $degistir;?></a></form></th>
  <th width="12%" class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>
  <th width="48%" class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-2" style="color:#FFFF00;"><strong><?php echo $kayitgorbaslik;?></strong></h6></th>
  <?php
  if($kachastsay==$hastkacverisay and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
echo '<th class="bg-warning text-center"><a class="btn btn-sm btn-dark mb-1" href="../c3c4/frm023kayit.php" style="width: 100%"><i class="fa fa-file-text-o" aria-hidden="true"></i> Rapor</a></th>';
}
?>
  <th width="8%" class="bg-warning text-center">
  <?php
  echo '<form class="form-control-sm" action="verikurumpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
  echo '<input class="form-control-sm" type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
  ?>
  <button name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-primaryform-control form-control-sm" style="width: 100px"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
    PDF</button>
  <?php
  echo '</form>';
  ?>
    </th>
  <th width="8%" class="bg-warning text-center">
  
  <?php
  echo '<form class="form-control-sm" action="../excelmysqli/form013ayxls.php" method="get" name="gor">' ;
  echo '<input class="form-control-sm" type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
  echo '<input class="form-control-sm" type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
  ?>
  
  <button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-primary" style="width: 100px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
   Excel</button>
  <?php
  echo '</form>';
  ?>
  <th width="8%"  class="bg-warning text-center"><a class="btn btn-sm btn-secondary mb-1" href="toplamlar.php">Toplamlar</a></th>
  </tr>
  </thead>
  </table>
    <?php
  }
    ?>
	  </form>
</div>
	  <?php
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.PNG"></BUTTON>';
echo '</form>';
}
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and asmadi like '%Hastanesi%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo "Hastane sayısı: ".$kachastsay;
$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vyiladi='$yil' and vayadi='$ay' and v177 like '%Hastanesi%')";
$hastverisorgula=mysqli_query($dbhabe,$kacverihast);
while($hasteksiksonucum=mysqli_fetch_array($hastverisorgula)){
$eksikhast=$hasteksiksonucum['vocadi'];
//echo $eksikhast;
}
$hastkacverisay=mysqli_num_rows($hastverisorgula);
//echo " -- Hastane girilen veri sayısı: ".$hastkacverisay;
if($hastkacverisay==0 and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$boshast=$hastverigirilmedi;
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
}elseif($hastkacverisay>$kachastsay and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$girilmeyenhast=$kachastsay-$hastkacverisay;
$ahast="Hastaneden";
$bhast=$hastveriyok;
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="text-center"><?php echo $kachastsay." ".$ahast." ".$girilmeyenhast." ".$bhast;?></th>
</tr>
</thead>
</table>
<?php
}elseif($hastkacverisay>0 and $kachastsay!=$hastkacverisay and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$girilmeyenhast=$kachastsay-$hastkacverisay;
$ahast="Hastaneden";
$bhast=$hastveriyok;
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="text-center"><?php echo $kachastsay." ".$ahast." ".$girilmeyenhast." ".$bhast;?></th>
</tr>
</thead>
</table>
<?php
$xeksiktablosu="SELECT ocak.*,veri.* FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and veri.vyiladi='$yil' and veri.vayadi='$ay' and veri.v177 like '%Hastanesi%' 
WHERE veri.v177 IS NULL";
$xetablosu=mysqli_query($dbhabe,$xeksiktablosu);
while($xeahsonucum=mysqli_fetch_array($xetablosu)){
$xeksikahadi=$xeahsonucum['v176'];
$xeksikdradi=$xeahsonucum['v177'];
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="50%"><div class="text-right"><?php echo $xeksikahadi.'--'; ?></div></th>
<th width="50%"><?php echo '--'.$xeksikdradi; ?></th>
</tr>
</thead>
</table>
<?php
}
?>

<?php
}elseif($hastkacverisay==$kachastsay  and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$tamamhast=$hastveritamam;
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
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Uzm.Dr.%' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysqli_query($dbhabe,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0 and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$bos=$bosbaslik;
//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
  <thead>
<th width="100%" class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger"><?php echo "$bos";?></span></h5></th>
</tr>
</thead>
</table>
<?php
}elseif($kacaheksay!=$kacverisay and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
if($kacaheksay==$kacverisay and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$girilmeyenahek=$ahveriyok;
}else{
$girilmeyenahek=$kacaheksay-$kacverisay;
}
$a=$ahbirbaslik;
$b=$ahvgbaslik;
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
  <thead>
<tr>
<th width="100%" class="border-1 text-info" colspan="2"><div align="center"><?php echo $kacaheksay." ".$a." ".$girilmeyenahek." ".$b;?></div></th>
</tr>
<?php
$gelmeyenler=$gelmeyenbaslik;
?>
<tr>
<th width="100%" class="border-1 text-danger" colspan="2"><div align="center" colspan="2"><?php echo $gelmeyenler;?></div></th>
</tr>
<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.vyiladi='$yil' and veri.vayadi='$ay' or ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Uzm.Dr.%' and veri.v177 like '%Nolu A%' and veri.vyiladi='$yil' and veri.vayadi='$ay'
WHERE veri.vocadi IS NULL";
$etablosu=mysqli_query($dbhabe,$eksiktablosu);
while($eahsonucum=mysqli_fetch_array($etablosu)){
$eksikahadi=$eahsonucum['socad'];
$eksikdradi=$eahsonucum['dradi'];
?>
<tr>
<th width="50%"><div class="text-right"><?php echo $eksikahadi.'--'; ?></div></th>
<th width="50%"><?php echo '--'.$eksikdradi; ?></th>
</tr>
<?php
}
}elseif($kacverisay>0 and $countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim){
$tamam=$tamambaslik;
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
@mysqli_close($dbhabe) ;
?>


