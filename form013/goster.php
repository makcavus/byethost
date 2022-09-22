<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
?>
<link rel="stylesheet" href="assets/css/form013style.css">
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>	
<?php 
include('../con_023.php');
include("tanimveyetkiler.php");
include('frm013alanlari.php');
$ahekgelen=$_GET['ahekkod'];
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay'];
?>
<?php
$resultvyil = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
    include('assets/form013_sablonlar/form013_veri_seti.php');
}
include('assets/form013_sablonlar/toplamsutunu.php');
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
?>
<table class="table table-responsive-sm table-sm">
<thead>
<tr>
<th class="bg-warning text-center" width="8%"align="left"><a class="btn btn-sm btn-success mb-3" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
<th class="bg-warning text-center" width="8%" align="center">
<?php
echo '<form class="form-control-sm" action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 100px;margin-bottom: 12px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
	PDF</button></th>
<?php
echo '</form>';
?>
<th class="bg-warning text-center" width="8%" align="right">
<?php
echo '<form class="form-control-sm" action="../excelmysqli/form013ayxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 100px;margin-bottom: 12px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
 Excel</button></th>
<?php
echo '</form>';
?>
	<th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-4" style="color:#FFFF00;"><strong>Kayıt Görüntüleme Ekranı</strong></h6></th>
<?php
$kim=$_SESSION["uye"];
$resultx = @mysqli_query($dbh,"select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysqli_fetch_array($resultx)) {
$kod=substr($xkod['uyekod'],0,5);
$kodhsm=substr($xkod['uyekod'],0,2);
}
$resultkod = @mysqli_query($dbh,"select socad from ocak where(select left(socad,5)='$kod') order by socad asc");
while($rowkod=mysqli_fetch_array($resultkod)) {
$kodbu=substr($rowkod['socad'],0,5);
//echo $kodbu;
} 	
	if($kod==substr($ocgelen,0,5) and $ahekgelen==$ocgelen or $kod==substr($ocgelen,0,5) and substr($ahekgelen,-3,3)==$kurumyetki or $kodhsm==substr($ocgelen,0,2) and substr($ahekgelen,-3,3)==$ilyetki or substr($ahekgelen,-3,3)==$bakanlikyetki){
	echo '<th class="bg-warning text-center" width="12%" align="right"><a class="btn btn-sm btn-success mb-3" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a></th>';	
	echo '<th class="bg-warning text-center" width="13%" align="right"><a class="btn btn-sm btn-danger mb-3" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></th>';
	}else{
  echo '<th class="bg-warning text-center" width="12%" align="right"></th>';	
	echo '<th class="bg-warning text-center" width="13%" align="right"></th>';
	}
	?>	
</tr>
</thead>  
</table>
<?php
include('assets/form013_sablonlar/silme_onay_modal.php');
include('assets/form013_sablonlar/form013toplam_sablonu.php');
?>
 <table class="table table-responsive-sm table-sm form013veriustaralar" style="background-color:#CCFFFF">
   <thead>
     <tr>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Adı Soyadı</th>
       <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $verim173 ; ?></div></th>
       <th width="27%" rowspan="4" class="border border-0 align-middle text-center">
       <a class="btn btn-sm btn-warning" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a>
     <?php
echo '<form class="form-control-sm" action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 100px"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
	PDF</button>
<?php
echo '</form>';
?>
<?php
echo '<form class="form-control-sm" action="../excelmysqli/form013ayxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-outline-success" style="width: 100px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
 Excel</button>
<?php
echo '</form>';
if($kod==substr($ocgelen,0,5) and $ahekgelen==$ocgelen or $kod==substr($ocgelen,0,5) and substr($ahekgelen,-3,3)==$kurumyetki or $kodhsm==substr($ocgelen,0,2) and substr($ahekgelen,-3,3)==$ilyetki or substr($ahekgelen,-3,3)==$bakanlikyetki){
?>
  <a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a>
	<a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a>
     <?php } ?>
      </th>
	   <th  class="border border-primary" align="left" colspan="2">&nbsp;Adı Soyadı</th>
       <th  class="border border-primary" width="27%"align="left"  colspan="7"><div align="center"><?php echo $verim176 ; ?></div></th>
     </tr>
     <tr>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Ünvanı</th>
       <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $verim174 ; ?></div></th>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Ünvanı</th>
       <th  class="border border-primary" width="27%"align="left"  colspan="7"><div align="center"><?php echo $verim177 ; ?></div></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Tarih</th>
       <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $a; ?></div></th>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Tarih</th>
       <th  class="border border-primary" width="27%"align="left"  colspan="7"><div align="center"><?php echo $a;?></div></th>
     </tr>
     <tr>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;İmza</th>
       <th  class="border border-primary"align="center"  colspan="7">&nbsp;</th>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;İmza</th>
       <th  class="border border-primary" width="27%"align="center"  colspan="7">&nbsp;</th>
     </tr>
	   </thead>
   </table> 
</form>
<?php
}
?>
<!-- Optional JavaScript -->
     