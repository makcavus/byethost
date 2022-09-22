<link rel="stylesheet" href="assets/css/form013style.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
include('../con_023.php');
include('frm013alanlari.php');
include('sumocak.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
if($yilgelen==""){
  $nuf = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen')") ;
}elseif($ocgelen>0 and $yilgelen>0){  
$nuf = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
}
if($ocgelen!="Aile Hekimini Seçiniz") {
    $nuf_say = mysqli_num_rows($nuf);
//echo $nuf_say;
    if ($nuf_say) {
        $ort_nuf = $verim118 / $nuf_say;
        $beb_nuf = $verim119 / $nuf_say;
//echo '<br>'.$ort_nuf;
//echo '<br>'.$beb_nuf;
        $verim118 = ceil($ort_nuf);
        $verim119 = ceil($beb_nuf);
    }
}
if($yilgelen==""){
  $resultvyil = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen')") ;
}elseif($ocgelen>0 and $yilgelen>0){  
$resultvyil = @mysqli_query($dbh,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
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
echo '<input type="hidden" name="ocaksec" id="ocaksec" value="'.$ocgelen.'">';
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
$aygelen="";
if($ocgelen>0 and $say>0){
  ?>
  <a id="basadon"></a>
  <table class="table table-sm table-responsive-sm form013ustaralarenust">
  <th class="bg-warning text-center" width="12%" align="left">
  <?php
  echo '<form action="../pdfmysqli/ilcepdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
  echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
  echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
  echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
  echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
  echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
  //echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
  //echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
  include('assets/form013_sablonlar/gizliinput.php');
  ?>
  <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
  <?php
    echo '</form>';
    ?>
    <th class="bg-primary text-center" width="52%" colspan="7"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $ilcegorbaslik; ?></strong></h6></th>
    <th class="bg-warning text-center" width="8%" align="left">
    <?php
  echo '<form action="../excelmysqli/form013ilcexls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
  echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
  echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
  echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
  echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
  echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
  //echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
  //echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
  ?>
  <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
  <?php
  echo '</form>';
  ?>	</th>
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
  <?php
echo '<form action="../pdfmysqli/ilcepdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
//echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
  //echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
include('assets/form013_sablonlar/gizliinput.php');
?>
<button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button>
<?php
  echo '</form>';
  ?>  	
  <?php
echo '<form action="../excelmysqli/form013ilcexls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
//echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
  //echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
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
    var ilcesec=$("#ilcesec").val();
    var ocaksec=$("#ocaksec").val();
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
            title: 'Önce İli İlçeyi Seçiniz !!!'
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
            title: 'Önce İlçeyi Seçiniz !!!'
        })
    }else if(ilcesec>0 && ocaksec=='Aile Hekimini Seçiniz'){
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
  title: 'Aile Hekimini Seçiniz !!!'
})
				}
</script>



<script>
        var ocaksec=$("#ocaksec").val();
				var say=$("#say").val();
				//alert(say);
				console.log(say);
       
				if(say==0){
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

