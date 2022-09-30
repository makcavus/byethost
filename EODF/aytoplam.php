<link rel="stylesheet" href="assets/css/eodfstyle.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
include('../con_023.php');
include('../con_102.php');
include('eodfalanlari.php');
include('tanimveyetkiler.php');
include('sumay.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay'];
$say="x";
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
    $ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
    $ilceninadi=$ilcesonucum['ilcead'];
}
if($ilgelen !="" and $ilcegelen == "İlçe Seçiniz"){
  $vtsec="select * from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
  $socsorgu=mysqli_query($dbh102,$vtsec);
  $say=mysqli_num_rows($socsorgu);
    $yetkililer_sorgu=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and substr(socad,-3)='$ilyetki')");
    while($yetkililer=mysqli_fetch_array($yetkililer_sorgu)){
        $asmninadine=$yetkililer['asmadi'];
        $asead=$yetkililer['aseadi'];
        $aseunv=$yetkililer['aseunvan'];
        $drad=$yetkililer['dradi'];
        $unvan=$ilinadi.' '.$ilunvan;
        $ocgelen=$ilinadi.' İL TOPLAMI ';
    }
}elseif($ilgelen !="" and $ilcegelen != "İlçe Seçiniz" and $ocgelen=="Aile Hekimini Seçiniz"){
  $vtsec="select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbh102,$vtsec);
$say=mysqli_num_rows($socsorgu);
    $yetkililer_sorgu=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and substr(socad,-3)='$ilceyetki')");
    while($yetkililer=mysqli_fetch_array($yetkililer_sorgu)){
        $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aseadi,ilce_aseunvani from birim where(form='Form102')");
        while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
            $asead=$frm102yetkilisi['ilce_aseadi'];
            $aseunv=$frm102yetkilisi['ilce_aseunvani'];
        }
        $asmninadine=$yetkililer['asmadi'];
        $drad=$yetkililer['dradi'];
        $unvan=$ilceninadi.' '.$ilceunvan;
    }
}elseif($ilgelen !="" and $ilcegelen != "İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$vtsec="select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbh102,$vtsec);
$say=mysqli_num_rows($socsorgu);
    $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
    $sonucak=@mysqli_query($dbh, $sql);
    while($satir=mysqli_fetch_array($sonucak))
    {
        $asmninadine=$satir['asmadi'];
        $ahkod=$satir['socad'];
        if(substr($ocgelen,-3)==$ilceyetki){
            $unvan=$ilceninadi.' İlçe Sağlık Müdürü';
        }elseif(substr($ocgelen,-3)==$ilyetki){
            $unvan=$ilinadi.' İl Sağlık Müdürü';
        }elseif(substr($ocgelen,-3)==$bakanlikyetki){
            $unvan='Halk Sağlığı Genel Müdürü';
        }else{
            $unvan='Nolu Aile Hekimi';
        }
        $drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];
        $unvan=$ahkod.' '.$unvan ;
    }
}
//echo $say;
echo '<input type="hidden" name="ilsec" id="ilsec" value="'.$ilgelen.'">';
echo '<input type="hidden" name="yilsec" id="yilsec" value="'.$yilgelen.'">';
echo '<input type="hidden" name="say" id="say" value="'.$say.'">';

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
  if($say>0){
  ?>
      <a id="basadon"></a>
      <table class="table table-sm table-responsive-sm form013ustaralarenust">
          <th class="bg-warning text-center" width="25%">
              <?php
              echo '<form action="engel.htm" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
              echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
              echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
              echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
              echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
              echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
              echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
              echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
              include('assets/eodf_sablonlar/gizliinput.php');
              ?>
              <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
          <?php
          echo '</form>';
          ?>
          <th class="bg-primary text-center" width="50%"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $aygorbaslik; ?></strong></h6></th>
          <?php
          echo '</form>';
          ?>
          <th class="bg-warning text-center" width="25%">
              <?php
              echo '<form action="../excelmysqli/eodfayxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
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





