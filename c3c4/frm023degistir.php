<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script language="JavaScript" src="degistir.js" type="text/javascript"></script>
<script language="JavaScript" src="kaydet.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get">
<?php
include('../con_abe.php');
include('c3c4alanlari.php');

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
$aygelentarih=substr($xaygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$aygelen=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$xaygelentarihgun=substr($aygelen,8,2);
$xaygelentarihay=substr($aygelen,5,2);
$xaygelentarihyil=substr($aygelen,0,4);
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
$resultvyil = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
  include('assets/c3c4_sablonlar/c3c4_veri_seti_degistir.php');
}
include('../con_023.php');
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
//@mysqli_close($conn);
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
<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
  <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
      <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong><?php echo $deggorbaslik; ?></strong></h6></th>
    <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-info" style="width:100px" href="#" tabindex="1" title="Değiştir" onclick="girdiyidegistir();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Değiştir</a></th>
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen;?>" />
	  </tr>
	  </thead>
  </table>


  
  <?php
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine;
	}
$xresultveri = @mysqli_query($dbhabe,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($xsonucumveri=mysqli_fetch_array($xresultveri)){ 
$xverim1=$xsonucumveri['a09'];
$xverim2=$xsonucumveri['r11'];
$xverim3=$xsonucumveri['k52'];
$xtoplam=$xverim1+$xverim2+$xverim3;  
}	
	
	$tresultveri = @mysqli_query($dbh,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($tsonucumveri=mysqli_fetch_array($tresultveri)){ 
$tverim1=$tsonucumveri['a09'];
$tverim2=$tsonucumveri['r11'];
$tverim3=$tsonucumveri['k52'];
$toplam=$tverim1+$tverim2+$tverim3;  
}
$hastayla="Hasta ile";
	?>
  
 
 

<script type="text/javascript">
//Sinyal T�r�
function yabuyr(){
var v39=parseInt(document.getElementById("v39").value);
var v40="<?php echo $yabanciuyrukdurumu; ?>";
var bos=v39+"<?php echo $yabanciuyrukvar; ?>";
if(document.getElementById("v39").value == 0){
    document.getElementById("v40").value =v40;
	return false;
}else{
document.getElementById("v40").value =bos;
}
return true;
}
</script>
<script type="text/javascript">
//�kamet Tablosu Eki var m�?
function grafikmev(grafikyes){
if (document.getElementById("grafik").checked){
    document.getElementById("v109").value = "Akut Bağırsak Enfeksiyonları vakalarının ilçe ve hastane bazında son bir yıllık seyrine ait grafik ektedir.";
	document.getElementById("v109").readOnly = false;
	}else{
document.getElementById("v109").value = "";
document.getElementById("v109").readOnly = false;	
	}

}	

</script>
<?php
include('assets/c3c4_sablonlar/c3c4degistir_sablonu.php');
?>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

  <?php
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
$ahkod=$satir['socad'];
$ahkodum=$satir['asmadi'];
if(substr($ahkod,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
}elseif(substr($ahkod,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}elseif(substr($ahkod,-9)=='Hastanesi'){
$ahno='Kurum Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];


          
}
include('assets/c3c4_sablonlar/gizli_input_degistir.php');
?>
  <table class="table table-responsive-sm table-sm">
  <thead>  
  <tr>
    <th  width="24%" align="center" class="border border-primary" bgcolor="#CEF6EC" colspan="3"><?php echo $duzenleyen; ?></th>
    <th  width="8%" colspan="1" rowspan="11" bgcolor="#CEF6EC">&nbsp;</th>
    <th  width="8%" align="center" class="border border-primary" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<?php echo $asead ; ?>" size="30" tabindex="173"/>
      </th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v176"  type="text" value="<?php echo $drad ; ?>" size="30" tabindex="176"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="30" tabindex="174"/></th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v177"  type="text" value="<?php echo $ahkodum.' '.$ahno ;?>" size="30" tabindex="177"/></th>
  </tr>
  <tr>
    <?php
   $a=Date("d/m/Y");
  
   ?>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input id="masktest" class="form-control" style="font-weight:bold" name="v175"  type="text" value=<?php echo $a; ?> size="30" tabindex="175"/></th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input id="masktest1" class="form-control" style="font-weight:bold" name="v178"  type="text" value="<?php echo $a;?>" size="30" tabindex="178"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></th>
    <th  width="16%"align="center" class="border border-primary" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></th>
    <th  width="16%"align="center" class="border border-primary" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
	</tr>
</thead>
</table>
  </form>
</body>
</html>
