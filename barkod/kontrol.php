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
include("../form013/tanimveyetkiler.php");
include('frm013alanlari.php');
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
$ilcetsm=substr($ahekkodu,-3,3);
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$ocakadi=@mysqli_query($dbh,"select * from ocak where(ilinad='$countryId' and ilce='$stateId')");
while($ocaksonucum=mysqli_fetch_array($ocakadi)){
$ocaginadi=$ocaksonucum['socad'];
$ilcekodx=substr($ocaginadi,0,5);
}
?>
<?php
include("../con_barkod.php");
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and asmadi='$ocak' and vyiladi='$yil' and vayadi='$ay')";
$socsorgu=mysqli_query($dbh_barkod,$vtsec);
$sorgu_sonucu=mysqli_fetch_array($socsorgu);
if($sorgu_sonucu){
$kurum_id=$sorgu_sonucu['id'];
}else{
  $kurum_id='';
}
$say=mysqli_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
echo '<h5><span class="badge badge-pill badge-danger">'.$ilsecbaslik.'</span></h5>' ;
	echo "<br>";
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
echo '<h5><span class="badge badge-pill badge-danger">'.$ilcesecbaslik.'</span></h5>' ;
	echo "<br>";
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
echo '<h5><span class="badge badge-pill badge-danger">'.$kursecbaslik.'</span></h5>' ;
	echo "<br>";
}
elseif($countryId !="" and $stateId !="İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil=="" and $say<1){
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
}else{
echo '<h5><span class="badge badge-pill badge-danger">'.$kayyetkibaslik.'</span></h5>' ;
}
}else{
$ocakyazi=$_GET['selectoc'];
$ayyazi=$_GET['selectay'];
echo '<div class="bg-success"><h6>'.$uyarbaslik.' '.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocakyazi.'</FONT>-'.$yil.'-'.$ay.'</h6></div>';
echo '</form>';
if($ilcetsm==$bakanlikyetki or $ilcetsm==$ilyetki or $ilcekod==$ilcekodx and $ilcetsm==$kurumyetki or $ahekkodu==$ocak){
?>
<table class="table table-responsive-sm table-sm tableahekbtn">
<thead class="bg-dark" align="center">
<tr>
<th><form class="form-control-sm" action="#"><a class="btn btn-sm btn-success mb-2" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $degistir;?></a></form></th>
<th><form class="form-control-sm" action="#"><a class="btn btn-sm btn-primary mb-2" href=# onClick="git();" style="width: 100px"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $goster;?></a></form></th>
<th><form class="form-control-sm" action="#"><a class="btn btn-sm btn-danger mb-2" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form></th>
<th>

<?php
echo '<form action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input class="form-control-sm" type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<button name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-primaryform-control form-control-sm mb-2" style="width: 100px"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
	PDF</button></th>
<?php
echo '</form>';
?>
	</th>
<th>

<?php
echo '<form class="form-control-sm" action="../excelmysqli/form013ayxls.php" method="get" name="gor">' ;
echo '<input class="form-control-sm" type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input class="form-control-sm" type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>

<button name="SUBMIT" type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-primary mb-2" style="width: 100px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
 Excel</button></th>
<?php
echo '</form>';
?>
</tr>
</thead>
</table>

<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="silmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $silmeonay;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5 class="text-secondary bg-warning text-center"><?php echo '<div><h6>'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocakyazi.'</FONT><br>'.$yil.'-'.$ayyazi.'</h6></div>'; ?></h5>
       <h5 class="text-danger"><?php echo $silemin;?></h5>
      </div>
      <div class="modal-footer bg-success justify-content-center">
        <button type="button" class="btn btn-primary btn-sm mr-5" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> <?php echo $hayir;?></button>
        <a href="#" tabindex="2" title="evet" onClick="sil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> Evet</a>
               
      </div>
      <div id="sonucsil" align="center"></div>
    </div>
  </div>
</div>	
<?php
}else{
echo '<th><form class="form-control-sm" action="#"><a class="btn btn-sm btn-primary mb-2" href=# onClick="git();" style="width: 100px"><i class="fa fa-eye" aria-hidden="true"></i> '.$goster.'</a></form></th>';
}
}
if($ilcetsm==$bakanlikyetki or $ilcetsm==$ilyetki or $ilcekod==$ilcekodx and $ilcetsm==$kurumyetki){
  if($ilcetsm==$ilyetki){
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId') group by asmadi";
  }else{
    $kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and left(socad,5)='$kod') group by asmadi"; 
  }
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo "ASM sayısı: ".$kacaheksay;
//echo '<br>';
if($sorgu_sonucu){
$kacveri="select * from bilgiler where(kurum_id='$kurum_id') group by cins";
$verisorgula=mysqli_query($dbh_barkod,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['kurum_id'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
}else{
  $kacverisay=0;
}
//echo $kacverisay;
if($kacverisay==0){
//echo '<br>';	
$bosbaslik="Henüz hiçbir Aile Sağlığı Merkezine veri girilmemiştir.";
//echo "<br>";
//echo "<br>";

echo '<span class="badge badge-pill badge-danger">'.$bosbaslik.'</span>';
}elseif($kacaheksay!=$kacverisay){
	
$ahbirbaslik="Kurumdan";
$ahgirbaslik="Kuruma ait veriler girilmiştir.";
$fark=$kacaheksay-$kacverisay;
$ahvgbaslik="Kuruma ait veri girilmemiştir.";
//echo "<br>";
?>
<table class="table table-responsive-sm table-sm table-bordered table-striped table-info table-hover tableahek">
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
$gelmeyenbaslik="Verileri girilmeyen Aile Sağlığı Merkezleri";
?>

<tr>
<th class="text-center" align="center" colspan="2"><font size='2px' face='tahoma' color='red'><?php echo $gelmeyenbaslik;?></font></th>
</tr>
<tr>

<?php
$xeksiktablosu="SELECT ocak.*,bilgiler.* FROM ocak ocak
LEFT OUTER JOIN bilgiler bilgiler ON ocak.ilinad=bilgiler.ilidi and ocak.ilce=bilgiler.ilceidi and ocak.asmadi=bilgiler.asmadi and bilgiler.vyiladi='$yil' and bilgiler.vayadi='$ay'
WHERE bilgiler.asmadi IS NULL GROUP BY ocak.asmadi,bilgiler.asmadi";
$xetablosu=mysqli_query($dbh_barkod,$xeksiktablosu);
//echo "Kalan:".mysqli_num_rows($xetablosu);
while($xeahsonucum=mysqli_fetch_array($xetablosu)){
$xeksikahadi=$xeahsonucum['dradi'];
$ocak_sorgu=mysqli_query($dbh,"SELECT asmadi from ocak where (ilinad='$countryId' and ilce='$stateId' and left(socad,5)='$kod' and dradi='$xeksikahadi') order by asmadi ASC");
while($ocak_liste=mysqli_fetch_array($ocak_sorgu)){
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="border-0">
  <div class="row">
  <div class="col-md-5 text-center"></div>
  <div class="col-md-6 text-left"><?php echo $ocak_liste['asmadi']; ?></div>
  <div class="col-md-2 text-center"></div>
</div>
</th>  
</tr>
</thead>
</table>
<?php
}}
}else{
//$tamam="B�t�n Aile Hekimli�i Birimlerine ait veri giri�i yap�lm��t�r.";
//echo "<br>";
echo '<span class="badge badge-pill badge-danger">'.$tamambaslik.'</span>';
}
}

?>
<?php
@mysqli_close($dbh) ;
?>
</tr>
</thead>
</table>
