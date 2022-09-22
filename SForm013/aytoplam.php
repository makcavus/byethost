<link rel="stylesheet" href="assets/css/form013style.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
include('../con_023.php');
include('frm013alanlari.php');
include('sumay.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$say="x";
if($ilgelen !="" and $ilcegelen == "İlçe Seçiniz"){
  $vtsec="select * from veris where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
  $socsorgu=mysqli_query($dbh,$vtsec);
  $say=mysqli_num_rows($socsorgu);
}elseif($ilgelen !="" and $ilcegelen != "İlçe Seçiniz" and $ocgelen=="Aile Hekimini Seçiniz"){ 
  $vtsec="select * from veris where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbh,$vtsec);
$say=mysqli_num_rows($socsorgu);
}elseif($ilgelen !="" and $ilcegelen != "İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$vtsec="select * from veris where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbh,$vtsec);
$say=mysqli_num_rows($socsorgu);
}
//echo $say;
echo '<input type="hidden" name="ilsec" id="ilsec" value="'.$ilgelen.'">';
echo '<input type="hidden" name="yilsec" id="yilsec" value="'.$yilgelen.'">';
echo '<input type="hidden" name="say" id="say" value="'.$say.'">';
include('assets/form013_sablonlar/toplamsutunu.php');
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
if($ilgelen!=$ilsecim and $ilcegelen==$ilcesecim){
  $ilceninadi='';
  $ocgelen=$iltopbaslik;
  $ocgelenx=$ocgelen;
  }elseif($ilgelen!=$ilsecim and $ilcegelen==$ilcesecim and $ocgelen==$ahsecim){
  $ocgelen=$iltopbaslik;
  }else if($ilgelen!=$ilsecim and $ilcegelen!=$ilcesecim and $ocgelen==$ahsecim){
  $ocgelen=$ilcetopbaslik;
  }elseif($ilgelen!=$ilsecim and $ilcegelen!=$ilcesecim and $ocgelen!=$ahsecim){
  $ocgelen=$ocgelen;
  }else{
  $ocgelen=$ilcetopbaslik;
  }
  if($verim1){
  ?>
  <a id="basadon"></a>
  <table class="table table-sm table-responsive-sm form013ustaralarenust">
  <th class="bg-warning text-center" width="12%" align="left">
  <?php
      echo '<form action="../pdfmysqli/suriyekurumpdfay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
      echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
      echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
      echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
      echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
      echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
      include('assets/form013_sablonlar/gizliinput.php');
      ?>
      <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
      <?php
        echo '</form>';
        ?>
        <th class="bg-warning text-center" width="12%" align="left">
        <?php
      echo '<form action="grafikay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
      echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
      echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
      echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
      echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
      echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
      ?>
        <button type="SUBMIT" class="btn btn-sm btn-success form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $aygrafbaslik; ?></button></th>
        <?php
      echo '</form>';
      ?>
        <th class="bg-primary text-center" width="52%" colspan="7"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $aygorbaslik; ?></strong></h6></th>
        <th class="bg-warning text-center" width="8%" align="left">
        <?php
      echo '<form action="../../excelmysqli/form013ayxlsbs.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
      echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
      echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
      echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
      echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
      echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
      ?>
      <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
      <?php
      echo '</form>';
      ?>	</th>
      <th class="bg-warning text-center" width="8%" align="center">
        <?php
      echo '<form action="../../excelmysqli/kumasioranxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
      echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
      echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
      echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
      echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
      echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
      ?>
      <input name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-secondary form-control form-control-sm" style="width: 120px;" value="<?php echo $asioranbaslik; ?>"/></th>
      <?php
      echo '</form>';
      ?>
      <th class="bg-warning text-center" width="8%" align="right">
        <?php
      echo '<form action="bar_top_ay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
      echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
      echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
      echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
      echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
      echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
      ?>
      <input name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-danger form-control form-control-sm" style="width: 124px;" value="<?php echo $kumgrafbaslik; ?>"/>
      <?php
      echo '</form>';
      ?></th>
      </table>
      <?php	     
  include("assets/form013_sablonlar/form013toplam_sablonu.php");
?>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
   <thead>
     <tr>
       <th  class="border border-primary" align="left" colspan="2">&nbsp;Adı Soyadı</th>
       <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $verim173 ; ?></div></th>
       <th width="27%" rowspan="4" class="border border-0 align-middle text-center">
       <div class="d-flex  justify-content-center flex-wrap">
  <?php
echo '<form action="../pdfmysqli/suriyekurumpdfay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
include('assets/form013_sablonlar/gizliinput.php');
?>
<button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button>
<?php
  echo '</form>';
  ?>
	<?php
echo '<form action="grafikay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
	<button type="SUBMIT" class="btn btn-sm btn-success form-control form-control-sm ml-1" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i><?php echo $aygrafbaslik; ?></button>
	<?php
echo '</form>';
?>
</div>
<?php

include('assets/form013_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>
<?php 
	echo '</form>';
	?>	
  <div class="d-flex  justify-content-center flex-wrap">
	<?php
echo '<form action="../../excelmysqli/form013ayxlsbs.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light mt-2" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
<?php
echo '</form>';
?>
	<?php
echo '<form action="../../excelmysqli/kumasioranxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-secondary form-control form-control-sm mt-2 ml-1" style="width: 120px;" value="<?php echo $asioranbaslik; ?>"/>
<?php
echo '</form>';
?>
</div>
<?php
echo '<form action="bar_top_ay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT" class="btn btn-sm btn-danger form-control form-control-sm mt-2" style="width: 244px;" value="<?php echo $kumgrafbaslik; ?>"/>
<?php
echo '</form>';
?></th>      
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
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
<script>
  var ilsec=$("#ilsec").val();
  var yilsec=$("#yilsec").val();
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
				}else if(yilsec==''){
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
  title: 'Yıl Giriniz !!!'
})
				}
</script>
<script>
        var ilsec=$("#ilsec").val();
        var yilsec=$("#yilsec").val();
				var say=$("#say").val();
				//alert(ocaksec);
				console.log(say);
       
				if(ilsec!="" && say==0 || yilsec!="" && say==0){
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





