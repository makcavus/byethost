<link rel="stylesheet" href="assets/css/form013style.css">
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="/assets/js/mask_hightlight.js"></script> 
<script language="JavaScript" src="kaydet.js" type="text/javascript"></script>	
<?php
include('../con_023.php');
include('abealanlari.php');
include('tanimveyetkiler.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$iladine=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysqli_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
$ilceadine=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysqli_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
$sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
$ahkod=$satir['socad'];
$asmadi=$satir['asmadi'];
if(substr($ocgelen,-3)==$kurumyetki){
  $ahkod=$satir['asmadi'];
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)==$ilceyetki){
  $ahkod=$satir['asmadi'];
  $ahno='İlçe Sorumlusu';
}elseif(substr($ocgelen,-3)==$ilyetki){
$ahno='Birim Sorumlusu';
}elseif(substr($asmadi,-9)=='Hastanesi'){
  $ahkod=$satir['asmadi'];
$ahno='Baştabibi';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
?>
<div id="sonuckay"> <form name="girdiekle" action="javascript:void(0)" method="get">
<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
  <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
      <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong>Yeni Kayıt Ekleme Ekranı</strong></h6></th>
    <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-info" style="width:100px" href="#" tabindex="1" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen;?>" />
	  </tr>
	  </thead>
  </table>
  <?php
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
  $ahkod=$satir['socad'];
  $asmadi=$satir['asmadi'];
  if(substr($ocgelen,-3)==$kurumyetki){
    $ahkod=$satir['asmadi'];
  $ahno='Sorumlu Tabibi';
  }elseif(substr($ocgelen,-3)==$ilceyetki){
    $ahkod=$satir['asmadi'];
    $ahno='İlçe Sorumlusu';
  }elseif(substr($ocgelen,-3)==$ilyetki){
  $ahno='Birim Sorumlusu';
  }elseif(substr($asmadi,-9)=='Hastanesi'){
    $ahkod=$satir['asmadi'];
  $ahno='Baştabibi';
  }else{
  $ahno='Nolu Aile Hekimi';
  }
  
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
include('assets/abe_sablonlar/abekayit_sablonu.php');
include('assets/abe_sablonlar/gizli_input_kayit.php');
?>

</form>


