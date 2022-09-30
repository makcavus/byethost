<link rel="stylesheet" href="assets/css/form102style.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
ini_set("display_errors", 0);
include('../con_023.php');
include('../con_102.php');
include('frm102alanlari.php');
include('tanimveyetkiler.php');
//session_destroy();
include('sumilce.php');
include('devirilce.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 

if($yilgelen==""){
$resultvyil = @mysqli_query($dbh102,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen')") ;
}elseif($ilcegelen>0 and $yilgelen>0){
  $resultvyil = @mysqli_query($dbh102,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen')") ;
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
echo '<input type="hidden" name="ilcesec" id="ilcesec" value="'.$ilcegelen.'">';
echo '<input type="hidden" name="say" id="say" value="'.$say.'">';
include('assets/form102_sablonlar/toplamsutunu.php');
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
  $ocgelen=$ilcetopbaslik;
  if($yilgelen==""){
  $yilgelenx="TÜM YILLAR TOPLAMI";
  $aygelen='';
  }elseif($ilgelen!=$ilsecim and $ilcegelen==$ilcesecim){
  $ilceninadi=$ilceninadi;  
  $ocgelen=$ilcetopbaslik;
  $ocgelenx=$ocgelen;
  $aygelen='';
  }elseif($ilgelen!=$ilsecim and $ilcegelen==$ilcesecim and $ocgelen==$ahsecim){
    $ilceninadi=$ilcegelen;
  $ocgelen=$iltopbaslik;
  }else if($ilgelen!=$ilsecim and $ilcegelen!=$ilcesecim and $ocgelen==$ahsecim){
    $ilceninadi=$ilcegelen;
  $ocgelen=$ilcetopbaslik;
  }elseif($ilgelen!=$ilsecim and $ilcegelen!=$ilcesecim and $ocgelen!=$ahsecim){
  $ilceninadi=$ilceninadi;
  $ocgelen=$ocgelen;
  $aygelen='';
  }else{
  $ocgelen=$ilcetopbaslik;
  }
  $atarih=mysqli_query($dbh102,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
  while($duztarih=mysqli_fetch_array($atarih)){
  $dtarih=$duztarih['yeni_tarih'];
  }
  $btarih=mysqli_query($dbh102,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
  while($ontarih=mysqli_fetch_array($btarih)){
  $otarih=$ontarih['yeni_tarih'];
  }
  $yetkililer_sorgu=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and substr(socad,-3)='$ilceyetki')");
while($yetkililer=mysqli_fetch_array($yetkililer_sorgu)){
  $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aseadi,ilce_aseunvani from birim where(form='Form102')");
  while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
  $asead=$frm102yetkilisi['ilce_aseadi'];
  $aseunv=$frm102yetkilisi['ilce_aseunvani'];
  }  
  $drad=$yetkililer['dradi'];
  $unvan=$ilceninadi.' '.$ilceunvan;
}
$aygelen="";
  if($ilcegelen>0 and $say>0){
    ?>
    <a id="basadon"></a>
    <table class="table table-sm table-responsive-sm form013ustaralarenust">
    <th class="bg-warning text-center" width="25%">
    <?php
    echo '<form action="../pdfmysqli/ilcepdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
    echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
    echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
    echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
    echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
    echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
    echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
    echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
    include('assets/form013_sablonlar/gizliinput.php');
    ?>
    <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
    <?php
      echo '</form>';
      ?>
      <th class="bg-primary text-center" width="50%"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $ilcegorbaslik; ?></strong></h6></th>
      <?php 
      echo '</form>';
      ?>	
      <th class="bg-warning text-center" width="25%">
      <?php
    echo '<form action="../excelmysqli/form013ilcexls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
    echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
    echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
    echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
    echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
    echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
    echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
    echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
    ?>
    <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
    <?php
    echo '</form>';
    ?>	</th>
    </table>	
    <?php
      $aysonugebemevcudu=$devredengebe+$verim17+$verim18-$verim19-$verim20-$verim21;
      $aysonubebekmevcudu=$devredenbebek+$verim22+$verim23-$verim24-$verim25-$verim26;
      $aysonulohusamevcudu=$devredenlohusa+$verim27+$verim28-$verim29-$verim30-$verim31;
      $aysonucocukmevcudu=$devredencocuk+$verim32+$verim33-$verim34-$verim35-$verim36;
      $aysonuimpmevcudu=$devredenimp+$verim37+$verim38-$verim39-$verim40-$verim41;
    include("assets/form102_sablonlar/form102toplam_sablonu.php");
   }
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
<script>
    var ilsec=$("#ilsec").val();
  var ilcesec=$("#ilcesec").val();
  if(ilsec=='' || ilsec=='İl Seçiniz' || ilsec==0){
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
          title: 'Önce İli Seçiniz !!!'
      })
  }else if(ilcesec=='İlçe Seçiniz'){
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
  title: 'İlçe Seçiniz !!!'
})
	}
</script>
<script>
        var ilcesec=$("#ilcesec").val();
				var say=$("#say").val();
				//alert(ilceidi);
				console.log(say);
       
				if(ilcesec>0 && say==0){
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

