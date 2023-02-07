<script language="JavaScript" src="kaydet.js" type="text/javascript">
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>	
<script type="text/javascript" src="jquery-latest.min.js"></script> 
    <script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript" src="assets/js/mask_hightlight.js"></script> 
<div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get">
<?php
include('../con_023.php');
include('../con_abe.php');
include('abealanlari.php');
include('../form013/tanimveyetkiler.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$xaygelentam=$_GET['selectay']; 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,0,2);
$xaygelentarihay=substr($xaygelentarih,3,2);
$xaygelentarihyil=substr($xaygelentarih,6,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;  
$ocakyazi=$_GET['selectoc'];
$resultvyil = @mysqli_query($dbhabe,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
  include('assets/abe_sablonlar/abe_veri_seti.php');
}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysql_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)==$ilceyetki){
  $ahno='İlçe Sağlık Müdürü';
}elseif(substr($ocgelen,-3)==$ilyetki){
$ahno='Birim Sorumlusu';
}elseif(substr($ocgelen,-9)=='Hastanesi'){
  $ahno='Kurum Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine.' - '.$ocgelen;
	}
?>
<table class="table table-responsive-sm table-sm">
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
<?php
include('assets/abe_sablonlar/abedegistir_sablonu.php');	
include('assets/abe_sablonlar/gizli_input_degistir.php');
$duzgelentarih=$verim175; 
$duzgelentarihgun=substr($duzgelentarih,8,2);
$duzgelentarihay=substr($duzgelentarih,5,2);
$duzgelentarihyil=substr($duzgelentarih,0,4);
$duztarih=$duzgelentarihgun.'.'.$duzgelentarihay.'.'.$duzgelentarihyil; 
$ongelentarih=$verim178; 
$ongelentarihgun=substr($ongelentarih,8,2);
$ongelentarihay=substr($ongelentarih,5,2);
$ongelentarihyil=substr($ongelentarih,0,4);
$ontarih=$ongelentarihgun.'.'.$ongelentarihay.'.'.$ongelentarihyil; 
   ?>

  </form>

</body>

</html>

