<link rel="stylesheet" href="assets/css/eodfstyle.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
//error_reporting(E_ALL);
ini_set("display_errors", 0);
include('../con_023.php');
include('../con_102.php');
include('eodfalanlari.php');
include('tanimveyetkiler.php');
session_destroy();
include('sum.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
if($yilgelen==""){
$resultvyil = @mysqli_query($dbh102,"select * from verib where(ilidi='$ilgelen')") ;
}elseif($ilgelen>0 and $yilgelen>0){
  $resultvyil = @mysqli_query($dbh102,"select * from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
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
include('assets/eodf_sablonlar/toplamsutunu.php');
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
  $yilgelen="TÜM YILLAR TOPLAMI";
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
  $ocgelen=$ilinadi.' '.$ilcetopbaslik;
  }
$atarih=mysqli_query($dbh102,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh102,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$yetkililer_sorgu=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and substr(socad,-3)='$ilyetki')");
while($yetkililer=mysqli_fetch_array($yetkililer_sorgu)){
  $asead=$yetkililer['aseadi'];
  $aseunv=$yetkililer['aseunvan'];
  $drad=$yetkililer['dradi'];
  $unvan=$ilinadi.' '.$ilunvan;
  $ocgelen=$ilinadi.' İL TOPLAMI ';
}
$aygelen="";
if($ilgelen!='' and $say>0){
  ?>
  <a id="basadon"></a>
  <table class="table table-sm table-responsive-sm form013ustaralarenust">
  <th class="bg-warning text-center" width="12%">
  <?php
  echo '<form action="../pdfmysqli/ilpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
  echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
  echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
  echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
  echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
  echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
  echo '<input type="hidden" name="ilyetki" id="ilyetki" value="'.$ilyetki.'">';
  echo '<input type="hidden" name="ilunvan" id="ilunvan" value="'.$ilunvan.'">';
  include('assets/eodf_sablonlar/gizliinput.php');
  ?>
  <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
  <?php
    echo '</form>';
    ?>



<th class="bg-warning text-center" width="13%">
<?php
echo '<form action="nufpirilyg.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
echo '<input type="hidden" name="ilinadi" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilinadi.'" />';
?>
<button type="SUBMIT" class="btn btn-sm btn-success form-control form-control-sm" style="width: 120px;"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $yasgrbaslik; ?></button></th>

<?php

  echo '</form>';

  ?>

</th>





    <th class="bg-primary text-center" width="50%"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $ilgorbaslik; ?></strong></h6></th>

    <th class="bg-warning text-center" width="13%">
<?php
echo '<form action="nufpirilod.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
echo '<input type="hidden" name="ilinadi" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilinadi.'" />';
?>
<button type="SUBMIT" class="btn btn-sm btn-danger form-control form-control-sm" style="width: 150px;"><i class="fa fa-bar-chart" aria-hidden="true"></i> <?php echo $odbaslik; ?></button></th>

<?php

  echo '</form>';

  ?>

</th>
    <th class="bg-warning text-center" width="12%">
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
   $dvks=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8;
   $srdks=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23;
   $dves=$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38;
   $srdes=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
  include("assets/eodf_sablonlar/eodftoplam_sablonu.php");
?>
  
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
