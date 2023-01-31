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
<link rel="stylesheet" href="assets/css/eodfstyle.css">
<?php
include("../con_023.php");
include("../con_102.php");
include("eodfalanlari.php");
include("tanimveyetkiler.php");
$form_klasoru=basename(dirname(__FILE__));
$ahekkodu=$_GET['ahekkod'];
$countryId=$_GET['selectil']; 
$stateId=$_GET['selectilce']; 
$ocak=$_GET['selectoc']; 
$yil=$_GET['selectyil'];
$ay=$_GET['selectay']; 
$ilkod=substr($ahekkodu,0,2);
$ilkodx=substr($ocak,0,2);
$bakanlik=substr($ahekkodu,-3,3);
$ilhsm=substr($ahekkodu,-3,3);
$ilcekod=substr($ahekkodu,0,5);
$ilcekodx=substr($ocak,0,5);
$ilcetsm=substr($ahekkodu,-3,3);
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
//echo $ilinadi;
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$vtsec="select * from verib where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil' and vayadi='$ay')";
$socsorgu=mysqli_query($dbh102,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
//$uyar="İl Seçilmedi";
echo '<h5><span class="badge badge-pill badge-danger">'.$ilsecbaslik.'</span></h5>' ;
echo "<br>";
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
//$uyar="İlçe Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$ilcesecbaslik.'</span></h5>' ;
echo "<br>";
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
//$uyar="Aile Hekimliği Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$kursecbaslik.'</span></h5>' ;
echo "<br>";
}
elseif($countryId !="" and $stateId !="İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil=="" and $say<1){
//$uyar="Yılı Boş Bıraktınız.";
echo '<h5><span class="badge badge-pill badge-danger">'.$yilbosbaslik.'</span></h5>' ;
echo "<br>";
}
elseif($countryId != "" and $ilceninadi != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil!="" and $say<1){
$uyar="";
echo '<h5><span class="badge badge-pill badge-success">'.$uyar.'</span></h5>' ;
if($bakanlik==$bakanlikyetki or $ilhsm==$ilyetki or $ilcekod==$ilcekodx and $ilcetsm==$kurumyetki or $ahekkodu==$ocak){
echo '<a class="btn btn-sm btn-primary" href=# onClick="ykay();" style="width: 100px"><i class="fa fa-floppy-o" aria-hidden="true"></i> '
.$kayitekle.'</a>';
echo "<br>";
echo "<br>";
echo "<br>";
}else{
//$sizmisiniz="Bu kaydı yapmaya yetkiniz yoktur.";
echo '<h5><span class="badge badge-pill badge-danger">'.$kayyetkibaslik.'</span></h5>' ;
}
}else{
$ocgelen=$_GET['selectoc'];
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay'];
echo '</form>';
if($ilcetsm==$bakanlikyetki or $ilcetsm==$ilyetki or $ilcekod==$ilcekodx and $ilcetsm==$kurumyetki or $ahekkodu==$ocak){
?>




<table class="table table-responsive-sm table-sm form013ustaralar" style="margin-top:-24px;">
<thead class="bg-dark" align="center">
<tr>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $degistir;?></a></form></th>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>
<th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-2" style="color:#FFFF00;"><strong><?php echo $kayitgorbaslik;?></strong></h6></th>
<th class="bg-warning text-center">
<?php
echo '<form class="form-control-sm" action="/excelmysqli/form102ayxls.php" method="get" name="gor">' ;
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
</tr>
</thead>
</table>
	
<?php
include('assets/eodf_sablonlar/silme_onay_modal.php');
}else{
echo '<div class="row bg-warning ml-auto mr-auto tableust"></div>';
}
?>
<?php
include('../con_023.php');
include('../con_102.php');
include("tanimveyetkiler.php");
$ilgelen= $_GET['selectil']; 
$ilcegelen= $_GET['selectilce']; 
$ocgelen= $_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen= $_GET['selectay']; 
$ocakyazi= $_GET['selectoc'];
//include('devir.php');
$resultvyil = @mysqli_query($dbh102,"select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
  include('assets/eodf_sablonlar/eodf_veri_seti.php');
}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh102,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh102,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
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
if(substr($ocgelen,-3,3)==$bakanlikyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and right(socad,3)='$bakanlikyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];	
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$unvan=$ocgelen.' Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$unvan=$ilinadi.' İl Sağlık Müdürü';
}elseif(substr($ocgelen,-3,3)==$bakanlikyetki){
$unvan='Halk Sağlığı Genel Müdürü';
}else{
$unvan=$ocgelen.' Nolu Aile Hekimi';
}
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
}elseif(substr($ocgelen,-3,3)==$ilyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$unvan=$ocgelen.' Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
    $unvan=$ilinadi.' İl Sağlık Müdürü';
}else{
$unvan=$ocgelen.' Nolu Aile Hekimi';
}
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
}elseif(substr($ocgelen,-3,3)==$ilceyetki){
    //echo "doğru....";
    $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilceyetki')order by dradi asc";
    $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
    {
        $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aseadi,ilce_aseunvani from birim where(form='$form_klasoru')");
        while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
            $asead=$frm102yetkilisi['ilce_aseadi'];
            $aseunv=$frm102yetkilisi['ilce_aseunvani'];
        }
        $asmninadine=$satir['asmadi'];
        $drad=$satir['dradi'];
//@mysqli_close($conn);
        $ahkod=$satir['socad'];
        if(substr($ocgelen,-3,3)==$kurumyetki){
            $unvan=$ilceninadi.' İlçe Sağlık Müdürü';
        }elseif(substr($ocgelen,-3,3)==$ilyetki){
            $unvan=$ilinadi.' İl Sağlık Müdürü';
        }else{
            $unvan=$ocgelen.' Nolu Aile Hekimi';
        }
        $asmninadine=$satir['asmadi'];
        $drad=$satir['dradi'];

    }
}elseif(substr($ocgelen,-3,3)==$kurumyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$kurumyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$unvan=$ocgelen.' Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
    $unvan=$ilinadi.' İl Sağlık Müdürü';
}else{
$unvan=$ocgelen.' Nolu Aile Hekimi';
}
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
	}else{
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){

$unvan=$ocgelen.' Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ocgelen.$unvan=' Birim Sorumlusu';
}else{
$unvan=$ocgelen.' Nolu Aile Hekimi';
}
$asmninadine=$satir['asmadi'];
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}	
}
$dvks=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8;
$srdks=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23;
$dves=$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38;
$srdes=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
include('assets/eodf_sablonlar/eodftoplam_sablonu.php');
echo '</form>';
$ilcekodalt=substr($ahekkodu,0,5);	
if($ilcetsm==$bakanlikyetki or $ilcetsm==$ilyetki or $ilcekodalt==$ilcekodx and $ilcetsm==$kurumyetki or $ahekkodu==$ocak){
?>
<table class="table table-responsive-sm table-sm form013ustaralar" style="margin-top:-12px;">
<thead class="bg-dark" align="center">
<tr>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $degistir;?></a></form></th>
<th class="bg-warning text-center"><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>
<th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-2" style="color:#FFFF00;"><strong><?php echo $kayitgorbaslik;?></strong></h6></th>
<th class="bg-warning text-center">
<?php
echo '<form class="form-control-sm" action="/excelmysqli/form102ayxls.php" method="get" name="gor">' ;
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
</tr>
</thead>
</table>
<?php
include('assets/eodf_sablonlar/silme_onay_modal.php');
}else{
echo '<th><form class="form-control-sm" action="#"><a class="btn btn-sm btn-primary mb-2" href=# onClick="git();" style="width: 100px"><i class="fa fa-eye" aria-hidden="true"></i> '.$goster.'</a></form></th>';
}
if($ilcetsm==$bakanlikyetki or $ilcetsm==$ilyetki or $ilcekodalt==$ilcekodx and $ilcetsm==$kurumyetki){
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM' or ilinad='$countryId' and ilce='$stateId' and dradi like 'Uzm.Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
$kacveri="select * from verib where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vyiladi='$yil' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Uzm.Dr.%' and v177 like '%Nolu A%' and vyiladi='$yil' and vayadi='$ay')";
$verisorgula=mysqli_query($dbh102,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
//echo '<br>';	
//$bos="Henüz hiçbir Aile Hekimliğine veri girilmemiştir.";
//echo "<br>";
echo "<br>";
echo '<span class="badge badge-pill badge-danger">'.$bosbaslik.'</span>';
}elseif($kacaheksay!=$kacverisay){
//$a="Aile Hekimliği Biriminden";
//$b="Aile Hekimliğine ait veriler girilmiştir.";
$fark=$kacaheksay-$kacverisay;
//$c="Aile Hekimliğine ait veri girilmemiştir.";
echo "<br>";
?>
<table class="table table-responsive-sm table-sm table-bordered table-striped table-info table-hover  form013ustaralar" style="margin-top:-36px;">
<thead>
<tr>
<td class="text-danger" align="center" colspan="2"><h6><?php echo $kacaheksay." ".$ahbirbaslik." ".$kacverisay." ".$ahgirbaslik."".$fark." ".$ahvgbaslik;?></h6>
<?php
$simgeyuzde="%";
$yuzdeyuz=$kacaheksay;
$yuzdeyuz=100;
$yuzdekac=$kacverisay;
$yuzdekac=ceil(($yuzdeyuz*$kacverisay)/$kacaheksay);
//echo $yuzdeyuz;
//echo $yuzdekac;
	?>	
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo $yuzdekac;?>%;" aria-valuenow="<?php echo $yuzdekac;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $simgeyuzde.' '.$yuzdekac;?></div>
</div>
</td>
</tr>
<?php
//$gelmeyenler="Verileri girilmeyen Aile Hekimliği Birimleri";
?>
<tr>
<th class="text-center" align="center" colspan="2"><font size='2px' face='tahoma' color='red'><?php echo $gelmeyenbaslik;?></font></th>
</tr>
<tr>
<?php
$eksiktablosu="SELECT ocak.*,verib.*
FROM ocak ocak
LEFT OUTER JOIN verib verib ON ocak.ilinad=verib.ilidi and ocak.ilce=verib.ilceidi and ocak.socad = verib.vocadi and verib.v176 like 'Dr.%' and verib.v177 like '%Nolu A%' and verib.vyiladi='$yil' and verib.vayadi='$ay' or ocak.ilinad=verib.ilidi and ocak.ilce=verib.ilceidi and ocak.socad = verib.vocadi and verib.v176 like 'Uzm.Dr.%' and verib.v177 like '%Nolu A%' and verib.vyiladi='$yil' and verib.vayadi='$ay'
WHERE left(ocak.socad,5)='$ilcekodx' and verib.vocadi IS NULL order by ocak.socad asc";
$etablosu=mysqli_query($dbh102,$eksiktablosu);
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
//$tamam="Bütün Aile Hekimliği Birimlerine ait veri girişi yapılmıştır.";
echo "<br>";
echo '<span class="badge badge-pill badge-danger">'.$tamambaslik.'</span>';
}
}
@mysqli_close($dbh) ;
@mysqli_close($dbh102) ;
}
?>
</tr>
</thead>
</table>
