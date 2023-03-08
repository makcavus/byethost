<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayý görüntüleme yetkiniz yoktur.";
}
include('c3c4alanlari.php');
?>
<script language="JavaScript" src="kaydet.js" type="text/javascript"></script>	
<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript" src="assets/js/mask_hightlight.js"></script> 
<script type="text/javascript">
function goster()
{
$("div#panel").show(100); 
}
function gizle()
{
$("div#panel").hide(100); 
}
function gostergizle()
{
$("div#panel").toggle(100); 
}
</script>	
<script type="text/javascript">
//Veri Giriþ Hatasý
function verinamev(vno){
  document.getElementById("v1").value = "<?php echo $veridurumyok; ?>";
	document.getElementById("v1").readOnly = false;
}
function verimev(vyes){
    document.getElementById("v1").value = "<?php echo $veridurumvar; ?>";
	document.getElementById("v1").readOnly = false;
}
//Mükerrer Kayýt Hatasý
function muknamev(mno){
    document.getElementById("v2").value = "<?php echo $mukerrerkayitdurumuyok; ?>";
	document.getElementById("v2").readOnly = true;
}
function mukmev(myes){
    document.getElementById("v2").value = "<?php echo $mukerrerkayitdurumuvar; ?>";
	document.getElementById("v2").readOnly = false;
}
//Ýkamete göre Kümelenme
function kumnamev(kumno){
    document.getElementById("v3").value = "<?php echo $ikametdurumuyok; ?>";
	document.getElementById("v3").readOnly = true;
}
function kummev(kumyes){
    document.getElementById("v3").value = "<?php echo $ikametdurumuvar; ?>";
	document.getElementById("v3").readOnly = false;
}
//Ýkamet Tablosu Eki var mý?
function ekmev(ekyes){
if ((document.getElementById("kumsecyes").checked) && (document.getElementById("ek").checked)){
    document.getElementById("v3").value = "<?php echo $ikametdurumuvarek; ?>";
	document.getElementById("v3").readOnly = false;
}else if ((document.getElementById("kumsecno").checked) && (document.getElementById("ek").checked)){
    document.getElementById("v3").value = "<?php echo $ikametdurumuyokek; ?>";
	document.getElementById("v3").readOnly = false;
	}else{
document.getElementById("v3").value = "";
document.getElementById("v3").readOnly = false;	
	}
}
//Toplu Yemek Organizasyonu
function tyynamev(tno){
    document.getElementById("v22").value = "<?php echo $topluyemekyok; ?>";
	document.getElementById("v22").readOnly = true;
}
function tyymev(tyes){
    document.getElementById("v22").value = "<?php echo $topluyemekvar; ?>";
	document.getElementById("v22").readOnly = false;
}
//Ayný Aileye Mensup Kiþi
function aamnamev(aamno){
    document.getElementById("v23").value = "<?php echo $ayniaileyok; ?>";
	document.getElementById("v23").readOnly = true;
}
function aammev(aamyes){
    document.getElementById("v23").value = "<?php echo $ayniailevar; ?>";
	document.getElementById("v23").readOnly = false;
}
//Meslek Grubuna ait Bilgi
function mgdnamev(mgdno){
    document.getElementById("v25").value = "<?php echo $meslekyok; ?>";
	document.getElementById("v25").readOnly = true;
}
function mgdmev(mgdyes){
    document.getElementById("v25").value = "<?php echo $meslekvar; ?>";
	document.getElementById("v25").readOnly = false;
}
//Ayaktan tedavi mi?
function atnamev(atno){
    document.getElementById("v35").value = "<?php echo $ayaktandurumukotuyok; ?>";
	document.getElementById("v35").readOnly = true;
}
function atmev(atyes){
    document.getElementById("v35").value = "<?php echo $yatandurumukotuyok; ?>";
	document.getElementById("v35").readOnly = false;
}
//Durumu kötü hasta var mý?
function dahmev(dahyes){
if ((document.getElementById("atsecyes").checked) && (document.getElementById("dah").checked)){
    document.getElementById("v35").value = "<?php echo $durumukotuyatan; ?>";
	document.getElementById("v35").readOnly = false;
}else if ((document.getElementById("atsecno").checked) && (document.getElementById("dah").checked)){
    document.getElementById("v35").value = "<?php echo $ayaktandurumukotuyok; ?>";
	document.getElementById("v35").readOnly = false;
	}else{
document.getElementById("v35").value = "";
document.getElementById("v35").readOnly = false;	
	}
}
</script>
<?php
include('../con_023.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$aygelen=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$xaygelentarihgun=substr($aygelen,8,2);
$xaygelentarihay=substr($aygelen,5,2);
$xaygelentarihyil=substr($aygelen,0,4);
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
//include('devir.php');
//echo $aygelen;
?>
<?php
$iladine=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysqli_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
?>
<?php
$ilceadine=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysqli_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
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
include('../con_abe.php');
$resultvyil = @mysqli_query($dbhabe,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/c3c4_sablonlar/c3c4_veri_seti.php');
 }
$toplamvaka=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6;
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
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine/*.' - '.$ocgelen*/;
	}
$xresultveri = @mysqli_query($dbhabe,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($xsonucumveri=mysqli_fetch_array($xresultveri)){ 
$xverim1=$xsonucumveri['a09'];
$xverim2=$xsonucumveri['r11'];
$xverim3=$xsonucumveri['k52'];
$xtoplam=$xverim1+$xverim2+$xverim3/*+$xverim4+$xverim5+$xverim6*/;  
}	
$tresultveri = @mysqli_query($dbhabe,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($tsonucumveri=mysqli_fetch_array($tresultveri)){ 
$tverim1=$tsonucumveri['a09'];
$tverim2=$tsonucumveri['r11'];
$tverim3=$tsonucumveri['k52'];
$toplam=$tverim1+$tverim2+$tverim3/*+$tverim4+$tverim5+$tverim6*/;  
}
$hastayla="Hasta ile";
include('assets/c3c4_sablonlar/c3c4kayit_sablonu.php');
	?>
<table class="table table-responsive-sm table-sm">
<thead>
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
include('assets/c3c4_sablonlar/gizli_input_kayit.php')
?>
  <tr>
    <th  width="24%" align="center" class="border border-primary text-center" bgcolor="#CEF6EC" colspan="3"><?php echo $duzenleyen ; ?></th>
    <th  width="8%" bgcolor="white" colspan="1" rowspan="11">&nbsp;</th>
    <th  width="8%" align="center" class="border border-primary text-center" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<?php echo $asead ; ?>" size="30" tabindex="173"/>
      </th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v176"  type="text" value="<?php echo $drad ; ?>" size="30" tabindex="176"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="30" tabindex="174"/></th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik ; ?></th>
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
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik ; ?></th>
    <th  width="16%"align="center" class="border border-primary" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik ; ?></th>
    <th  width="16%"align="center" class="border border-primary" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
	</tr>
</thead>
</table>
</form>

