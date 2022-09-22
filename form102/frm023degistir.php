<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/form102style.css">
<script type="text/javascript" src="degistir.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<div id="sonuckay"><form class="form" name="girdiekleme" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<?php
include('../con_102.php');
include('../con_023.php');
include('frm102alanlari.php');
//include("tanimveyetkiler.php");
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen= $_GET['selectay'];
$resultvyil = @mysqli_query($dbh102,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/form102_sablonlar/form102_veri_seti.php');
}
include('assets/form102_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh, $sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysql_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
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
<table class="table table-responsive-sm table-sm form013ustaralar" style="margin-top:-8px;">
<thead>
  <tr>
  <th class="bg-warning text-center" width="30%" colspan="3">
  <a class="btn btn-sm btn-success" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a>
  </th>
<th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;">Kayıt Değiştirme Ekranı</h6></th>
<th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-primary" style="width:100px" href=# onClick="girdiyidegistir();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a>
</th>
</tr>
</thead>
</table>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>">
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>">
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>">
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>">
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>">
 

<?php
include('assets/form102_sablonlar/form102degistir_sablonu.php');
include('assets/form102_sablonlar/gizli_input_degistir.php');
?>   
</form>
<!-- Optional JavaScript -->
      