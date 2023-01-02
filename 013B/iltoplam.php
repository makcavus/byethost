<link rel="stylesheet" href="assets/css/013Bstyle.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
//error_reporting(E_ALL);
ini_set("display_errors", 0);
include('../con_023.php');
include('frm013alanlari.php');
include('tanimveyetkiler.php');
session_destroy();
include('sum.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
if($yilgelen==""){
  $nuf=@mysqli_query($dbh,"select distinct vyiladi,vayadi from verib where ilidi='$ilgelen'");
}elseif($ilgelen>0 and $yilgelen>0){
  $nuf=@mysqli_query($dbh,"select distinct vyiladi,vayadi from verib where ilidi='$ilgelen' and vyiladi='$yilgelen'");
}
$nuf_say=mysqli_num_rows($nuf);
//echo $nuf_say;
$ort_nuf=$verim118/$nuf_say;
$beb_nuf=$verim119/$nuf_say;
//echo '<br>'.$ort_nuf;
//echo '<br>'.$beb_nuf;
$verim118=ceil($ort_nuf);
$verim119=ceil($beb_nuf);
if($yilgelen==""){
$resultvyil = @mysqli_query($dbh,"select * from verib where(ilidi='$ilgelen')") ;
}elseif($ilgelen>0 and $yilgelen>0){
  $resultvyil = @mysqli_query($dbh,"select * from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
}
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
}
$say=mysqli_num_rows($resultvyil);
echo '<input type="hidden" name="ilsec" id="ilsec" value="'.$ilgelen.'">';
echo '<input type="hidden" name="say" id="say" value="'.$say.'">';
include('assets/013B_sablonlar/toplamsutunu.php');
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
  $ilceninadi='';  
  $ocgelen=$iltopbaslik;
  if($yilgelen==""){
  $yilgelenx="TÜM YILLAR TOPLAMI";
  $aygelen='';
  }elseif($ilgelen!=$ilsecim and $ilcegelen==$ilcesecim){
  $ilceninadi='';  
  $ocgelen=$iltopbaslik;
  $ocgelenx=$ocgelen;
  $aygelen='';
  }elseif($ilgelen!=$ilsecim and $ilcegelen==$ilcesecim and $ocgelen==$ahsecim){
  $ocgelen=$iltopbaslik;
  }else if($ilgelen!=$ilsecim and $ilcegelen!=$ilcesecim and $ocgelen==$ahsecim){
  $ocgelen=$ilcetopbaslik;
  }elseif($ilgelen!=$ilsecim and $ilcegelen!=$ilcesecim and $ocgelen!=$ahsecim){
  $ocgelen=$ocgelen;
  }else{
  $ocgelen=$ilcetopbaslik;
  }
$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$yetkililer_sorgu=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and substr(socad,-3)='$ilyetki')");
while($yetkililer=mysqli_fetch_array($yetkililer_sorgu)){
  $verim173=$yetkililer['aseadi'];
  $verim174=$yetkililer['aseunvan'];
  $verim176=$yetkililer['dradi'];
  $verim177=$ilinadi.' '.$ilunvan;
}
$aygelen="";
if($ilgelen!='' and $say>0){
  ?>
  <a id="basadon"></a>
  <table class="table table-sm table-responsive-sm form013ustaralarenust">
  <th class="bg-warning text-center" width="12%" align="left">
  <?php
  echo '<form action="../pdfmysqli/ilpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
  echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
  echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
  echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
  echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
  echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
  echo '<input type="hidden" name="ilyetki" id="ilyetki" value="'.$ilyetki.'">';
  echo '<input type="hidden" name="ilunvan" id="ilunvan" value="'.$ilunvan.'">';
  include('assets/013B_sablonlar/gizliinput.php');
  ?>
  <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
  <?php
    echo '</form>';
    ?>
    <th class="bg-primary text-center" width="52%" colspan="7"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $ilgorbaslik; ?></strong></h6></th>
    <th class="bg-warning text-center" width="8%" align="left">
    <?php
  echo '<form action="../excelmysqli/form013ilxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
  echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
  echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
  echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
  echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
  echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
  echo '<input type="hidden" name="ilyetki" id="ilyetki" value="'.$ilyetki.'">';
  echo '<input type="hidden" name="ilunvan" id="ilunvan" value="'.$ilunvan.'">';
  ?>
  <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
  <?php
  echo '</form>';
  ?>	</th>
  </table>	
  <?php
  include("assets/013B_sablonlar/013Btoplam_sablonu.php");
?>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
   <thead>
     <tr>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Adı Soyadı</th>
       <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $verim173 ; ?></div></th>
       <th width="27%" rowspan="4" class="border border-0 align-middle text-center">
  <?php
echo '<form action="../pdfmysqli/ilpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
echo '<input type="hidden" name="ilyetki" id="ilyetki" value="'.$ilyetki.'">';
  echo '<input type="hidden" name="ilunvan" id="ilunvan" value="'.$ilunvan.'">';
include('assets/013B_sablonlar/gizliinput.php');
?>
<button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button>
<?php
  echo '</form>';
  ?>
	<?php
echo '<form action="../excelmysqli/form013ilxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
echo '<input type="hidden" name="ilyetki" id="ilyetki" value="'.$ilyetki.'">';
  echo '<input type="hidden" name="ilunvan" id="ilunvan" value="'.$ilunvan.'">';
?>
<button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light mt-3" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
<?php
echo '</form>';
?>
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
   <?php
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>

<script>
  var ilsec=$("#ilsec").val();
  if(ilsec==''){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'İl Seçiniz !!!'
})
				}
</script>
<script>
        var ilsec=$("#ilsec").val();
				var say=$("#say").val();
				//alert(ilceidi);
				console.log(say);
       
				if(ilsec>0 && say==0){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
Toast.fire({
  icon: 'warning',
  title: 'Kayıt bulunamadı !!!'
})
				}
			</script>
