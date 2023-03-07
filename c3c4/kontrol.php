<a id="basadon"></a>
<?php header("Cache-Control: no-cache,no-store");
session_start();
$inactive = 1300;
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
{ 
unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor
session_destroy(); header("Location: cikis.php"); }
}
$_SESSION['timeout'] = time();
?>
<style>
	table {
		margin-top: -8px !important;
    }
	.tableahek {
 		margin-top: -18px !important;
    }
    .tableahekbtn {
 		height: 0px;
    }
	</style>
<?php
include('c3c4alanlari.php');
include("../con_023.php");
$countryId=$_GET['selectil']; 
$stateId=$_GET['selectilce']; 
$ocak=$_GET['selectoc']; 
$yil=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
include("../con_abe.php");
//ABE Formu doldurldu mu?
$abesec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vayadi='$ay')";
$abesorgu=mysqli_query($dbhabe,$abesec);
$abesay=mysqli_num_rows($abesorgu);

$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;
$vtsec="select * from veriage where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vayadi='$ay')";
$socsorgu=mysqli_query($dbhabe,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar="Il Seçilmedi";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
$uyar="İlçe Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
$uyar="Aile Hekimi/Kurum Seçilmedi.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $abesay!=$kachastsay and $say==0){
$uyar="Öncelikle ABE Veri Girişlerini Tamamlamalısınız.";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
echo '<a class="btn btn-sm btn-primary mb-2" href="../abe/frm023kayit.php" style="width: 140px"><i class="fa fa-floppy-o" aria-hidden="true"></i> ABE Kayıt Ekle</a>';
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $abesay>0 and $say<1){
$uyar="";
echo '<h5><span class="badge badge-pill badge-danger">'.$uyar.'</span></h5>' ;
echo '<a class="btn btn-sm btn-primary mb-2" href=# onClick="ykay();" style="width: 140px"><i class="fa fa-file-text-o" aria-hidden="true"></i> Rapor Oluştur</a>';
}else{
$uyar="BU KAYIT YAPILMIŞ...";
//echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=$_GET['selectoc'];
?>
<?php 
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
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
$ocakyazi=$_GET['selectoc'];
$resultvyil = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/c3c4_sablonlar/c3c4_veri_seti.php');
}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbhabe,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbhabe,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
 if($ilcegelen=="İlçe Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($ocgelen),0,2);
$ilcekod=substr(trim($ocgelen),3,2);
$ahkod=substr(trim($ocgelen),6,3);
}else{
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod=substr(trim($socadi),6,3);
}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)=='TSM'){
$ahno='';//Sorumlu Tabibi
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
<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onclick="deg();"><img src="../images/degistir.PNG" /></a></th>
<th class="style6" width="12%" align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="<?php echo $wordbaslik ; ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"/>

  <th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="#FFFFCC"><?php echo $kayitgorbaslik;?></font></th>
	<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="listele();"><img src="images/listele.PNG"></a></th>	
	<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.PNG"></a></th>
<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
		<div id="sifre" class="giris_zemin">
		  
		  <form action="onay.php" method="post" name="giris" id="giris">
		    <table width="100" border="0">
              
<?php 
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></th>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">'.$silmeonay.'</font></strong></th>';	
echo '</tr>';
echo '</table>';	
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th class="style6" rowspan="2" align="center"><img src="images/siluyar.jpg"></th>';
echo '<th class="style6" align="center" height="30" colspan="2"><font size="2px" style="color:red" face="tahoma">'.$silemin.'</font></th>';
echo '</tr>';
echo '<tr>';
echo '<th class="style6" align="center"><a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.PNG"></a></th>';
echo '<th class="style6" align="center"><a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.PNG"></a></th>';
echo '</tr>';

?>
              
           </table>
	
		  </form>
		</div>
	<div id="fon" class="arka_fon"></div>

</table>
	
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
  <tr>
    <th  width="100%" align="center"bordercolor="white" colspan="20"  class="style6"><font size="3"><?php echo $c3c4baslik; ?></font></th>
  </tr>
  <tr>
    <th  width="100%" align="center" bordercolor="white" colspan="20"  class="style6">&nbsp;</th>
  </tr>
  <?php
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine.' - '.$ocgelen;
	}
	?>
  <tr>
    <th  width="100%" align="left" colspan="20"  class="style6"><font size="2" family="times new roman" weight="bold">1-Hastaneden</font> A09-R11-K52 <font size="2" family="times new roman" weight="bold"><?php echo $icd; ?></font></th>
</tr>
    <th  width="100%" align="left" colspan="20"  class="style6"><?php $hastaliste="tarihli hasta listesi ektedir."; echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.' '.$kurum.' '.$noktatarih.' '.$hastaliste.'</font>' ;?></th>
  </tr>
  <tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $veri; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim1.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $mukerrer; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim2.'</font>'; ?></th>
  </tr>  
   <tr>
   <tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $kumelenme; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim3.'</font>'; ?></th>
  </tr>
  <tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
   <tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $dagilim; ?></font></th>
</tr>
  
  <tr>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">0-11 ay</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">1-4 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">5-9 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">10-14 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">15-19 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">20-29 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">30-44 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">45-64 y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">65+y</th>
  <th  width="10%" align="center" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan">E</th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink">K</th>
  </tr>
  <tr>
    <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim4.'</font>'; ?></th>
    <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim5.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim6.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim7.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim8.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim9.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim10.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim11.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim12.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim13.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim14.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim15.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim16.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim17.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim18.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim19.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim20.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim21.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><?php
  $etoplam=$verim4+$verim6+$verim8+$verim10+$verim12+$verim14+$verim16+$verim18+$verim20; echo '<font size="3" family="Arial">'.$etoplam.'</font>'; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><?php $ktoplam=$verim5+$verim7+$verim9+$verim11+$verim13+$verim15+$verim17+$verim19+$verim21; echo '<font size="3" family="Arial">'.$ktoplam.'</font>'; ?></th>
  </tr>
  <?php
  
  if($verim26==0 and $verim27==0 and $verim28==0){
  $hepsifir="Gaita tahlili yapılmamıştır."; 
  }else if($verim26==0 and $verim29==0){
  $kultur="";
  }else if($verim26>=1 and $verim32==0){
$gkdurum="gaita kültürü yapılmıştır.Sonucu henüz belli değildir.";
  $kultur=$verim26.' '.$gkdurum ;
  }else if($verim26>=1 and $verim32>=1){
  $gkpozcik="kültür sonucu pozitif çıkmıştır.";
$gkdurum="gaita kültürü yapılmıştır.";
  $kultur=$verim26.' '.$gkdurum.''.$verim32.' '.$gkpozcik ;
  }
  if($verim27==0 and $verim30==0){
  $parazit="";
  }else if($verim27>=1 and $verim33==0){
$gpdurum="parazit incelemesi yapılmıştır.Parazit inceleme sonucu negatiftir.";
  $parazit=$verim27.' '.$gpdurum ;
  }else if($verim27>=1 and $verim33>=1){
  $gppozcik="parazit inceleme sonucu pozitif çıkmıştır.";
$gpdurum="parazit incelemesi yapılmıştır.";
  $parazit=$verim27.' '.$gpdurum.''.$verim33.' '.$gppozcik ;
  }
  if($verim28==0 and $verim31==0){
  $viral="";
  }else if($verim28>=1 and $verim34==0){
$gvdurum="viral etken incelemesi yapılmıştır.Viral etken inceleme sonucu negatiftir.";
  $viral=$verim28.' '.$gvdurum ;
  }else if($verim28>=1 and $verim34>=1){
  $gvpozcik="viral etken inceleme sonucu pozitif çıkmıştır.";
$gvdurum="viral etken incelemesi yapılmıştır.";
  $viral=$verim28.' '.$gvdurum.''.$verim34.' '.$gvpozcik ;
  }
  ?>
</table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $toplu; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim22.'</font>'; ?></th>
  </tr>  
<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $ayniaile; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim23.'</font>'; ?></th>
  </tr>
	<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
	</tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $meslekgr; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim25.'</font>'; ?></th>
  </tr>
  <tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $gaita; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$hepsifir.''.$kultur.''.$parazit.''.$viral.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $ayaktayatan; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim35.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $gorus; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim36.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20"  class="style6">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20"  class="style6" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $sunumunesi; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim37.'</font>'; ?></th>
  </tr>		 		 
</table>	 
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="YELLOW"><?php echo $degraporbaslik; ?></th>  
</tr>
<tr>
  <th  width="100%" align="left" colspan="20"  class="style6" class="style5"><?php echo '<font size="3" family="Arial">'.$verim38.'</font>'; ?></th>
  </tr>		
<tr>
  <th  width="100%" align="left" colspan="20"  class="style6"><?php echo '<font size="3" family="Arial">'.$verim40.'</font>'; ?></th>
  </tr>		  
</table> 
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr>
	<th width="100%" align="center" colspan="20"  class="style6" class="style5"><?php echo $ikametbaslik; ?></th>
  </tr>
       <tr>
 <th width="25%" align="left" colspan="5" class="style5"><?php echo $yerlesim; ?></th>
 <th width="25%" align="center" colspan="5" class="style5"><?php echo $ikamet; ?></th>
 <th width="25%" align="left" colspan="5" class="style5"><?php echo $yerlesim; ?></th>
 <th width="25%" align="center" colspan="5" class="style5"><?php echo $ikamet; ?></th> 
       </tr>
	   
<tr>  
 <th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim41.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim42.'</font>'; ?></th>
 <th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim43.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim44.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim45.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim46.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim47.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim48.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim49.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim50.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim51.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim52.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim53.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim54.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim55.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim56.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim57.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim58.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim59.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim60.'</font>'; ?></th>
  </tr>	 
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim61.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim62.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim63.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim64.'</font>'; ?></th>
  </tr>	  
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim65.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim66.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim67.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim68.'</font>'; ?></th>
  </tr>   
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim69.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim70.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim71.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim72.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim73.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim74.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim75.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim76.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim77.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim78.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim79.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim80.'</font>'; ?></th>
  </tr>
<tr>
 <th width="50%" align="left" colspan="10" class="style5">TOPLAM</th>
 <th width="50%" align="center" colspan="10" class="style5"><?php echo '<font size="3" family="Arial">'.$verim81.'</font>'; ?></th>
  </tr>  
<tr>
    <th width="100%" align="center" bordercolor="white" colspan="20"  class="style6">&nbsp;</th>
  </tr>
</table>

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr>
	<th width="100%" align="center" colspan="20" class="style5"><?php echo $polibaslik; ?></th>
  </tr>
       <tr>
 <th width="25%" align="left" colspan="5" class="style5"><?php echo $padi; ?></th>
 <th width="25%" align="center" colspan="5" class="style5"><?php echo $bassay; ?></th>
 <th width="25%" align="left" colspan="5" class="style5"><?php echo $musyatan; ?></th>
 <th width="25%" align="center" colspan="5" class="style5"><?php echo $seryatan; ?></th> 
       </tr>
	   
<tr>  
 <th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim82.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim83.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim84.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim85.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim86.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim87.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim88.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim89.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim90.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim91.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim92.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim93.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim94.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim95.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim96.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim97.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim98.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim99.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim100.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim101.'</font>'; ?></th>
  </tr>	   
<tr>  
<th  width="25%" align="left" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim102.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim103.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim104.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim105.'</font>'; ?></th>
  </tr>	 
<tr>
 <th width="25%" align="left" colspan="5" class="style5">TOPLAM</th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim106.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim107.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="style5"><?php echo '<font size="3" family="Arial">'.$verim108.'</font>'; ?></th>
  </tr>      
<tr>
    <th  width="100%"align="center" bordercolor="white" colspan="20">&nbsp;</th>
  </tr>
</table>	    
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<?php
$verideg="Hastane AGE Vaka Artışı Sorgulama Formu ve yukarıdaki veriler değerlendirildiğinde";
$digerhast="Diğer hastanelere ait verilerin normal olduğu görülmektedir.";
$episonuc="Sonuç olarak bu hastanedeki vakalar incelendiğinde epidemiyolojik bakımdan salgın niteliği taşıyacak bir durum tesbit edilmemiştir.";
if(substr($verim1,0,35)=="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)=="Mükerrer kayıt girişi mevcut değildir.") {
$artýs="nde";
$sonuchata="hatalı veri girişi ve mükerrer kayıt girişi olmadığı görülmüştür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)=="Mükerrer kayıt girişi mevcut değildir."){
$artýs="nde artış olmadığı,";
$sonuchata="hatalı veri girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;
}else if(substr($verim1,0,35)=="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)!="Mükerrer kayıt girişi mevcut değildir.") {
$artýs="nde artýþ olmadýðý,";
$sonuchata="mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)!="Mükerrer kayıt girişi mevcut değildir.") {
$artýs="nde artış olmadığı,";
$sonuchata="hatalı veri girişi ve mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;

}
 
 ?>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="YELLOW"><?php echo $sonucbolum; ?></th>  
</tr>
<tr>
  <th  width="100%" align="left" colspan="20" class="style5"><?php echo '<font size="3" family="Arial">'.$verideg.' '.$sonuctop.' '.$digerhast.' '.$verim22.' '.$verim3.' '.$verim35.' '.$hepsifir.''.$kultur.''.$parazit.''.$viral.' '.$episonuc.' '.$verim109.'</font>'; ?></th>
</tr>		
</table> 
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  
  <?php
//include('con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
$ahkod=$satir['socad'];
$ahkodum=$satir['asmadi'];
if(substr($ahkod,-3)=='TSM'){
$ahno='';//Sorumlu Tabibi
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
include('assets/c3c4_sablonlar/gizli_input_kontrol.php');
?>
  
  <tr>
    <th  width="36%" bgcolor="white" colspan="4" rowspan="6">&nbsp;</th>
  </tr>
  <tr>
    <th  width="24%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $duzenleyen; ?></th>
    <th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
    <th  width="8%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
	<th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $asead ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $drad ; ?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $aseunv ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $ahkodum ;?></th>
  </tr>
  <tr>
    <?php
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
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $duztarih; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $ontarih?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
  </tr>
</table>
</form>
<?php
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
//echo '<p>';
echo '</form>';
echo '<form action="phpword/samples/AGE_RAPORU.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<th class="style6" width="42%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="deg();"><img src="../images/degistir.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="git();"><img src="../images/goster.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="onay();"><img src="../images/sil.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<th class="style6" width="42%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="<?php echo $wordbaslik; ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"/><div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get"></th>
</table>
<?php
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';
}
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;

$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like '%Dr.%' and v177 like '%Hastane%' and vayadi='$ay')";
$hastverisorgula=mysqli_query($dbhabe,$kacverihast);
while($hasteksiksonucum=mysqli_fetch_array($hastverisorgula)){
$eksikhast=$hasteksiksonucum['vocadi'];
//echo $eksikhast;
}
$hastkacverisay=mysqli_num_rows($hastverisorgula);
//echo $hastkacverisay;
if($hastkacverisay==0){
$boshast="Henüz Hastanelere ait veri girilmemiştir.";

//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="text-center text-danger"><h5><span class="badge badge-pill badge-danger"><?php echo $boshast;?></span></h5></th>
</tr>
</thead>
</table>
<?php
}elseif($hastkacverisay>0 and $kachastsay!=$hastkacverisay){
$girilmeyenhast=$kachastsay-$hastkacverisay;
$ahast="Hastaneden";
$bhast="Hastaneye ait veriler girilmemiştir.";

?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kachastsay." ".$ahast." ".$girilmeyenhast." ".$bhast;?></font></th>
</table>
<?php
}else{
$tamamhast="Bütün Hastanelere ait veri girişi yapılmıştır.";
//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
<thead>
<tr>
<th width="100%" class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger mt-2"><?php echo $tamamhast;?></span></h5></th>
</tr>
</thead>
</table>
<?php
}
?>
<?php
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM' or ilinad='$countryId' and ilce='$stateId' and dradi like 'Uzm.Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veriage where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Uzm.Dr.%' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysqli_query($dbhabe,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos="Henüz Aile Hekimlerine ait veri girilmemiştir.";

//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
  <thead>
<th width="100%" class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger"><?php echo "$bos";?></span></h5></th>
</tr>
</thead>
</table>
<?php
}elseif($kacaheksay!=$kacverisay){
if($kacaheksay==$kacverisay){
$girilmeyenahek="Aile hekimlerine ait veri girişi yoktur.";
?>
<?php
}else{
$girilmeyenahek=$kacaheksay-$kacverisay;
}
$a="Aile Hekimliği Biriminden";
$b="Aile Hekimliğine ait veriler girilmemiştir.";

?>

<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kacaheksay." ".$a." ".$girilmeyenahek." ".$b;?></font></th>
</table>
<?php
$gelmeyenler="Verileri girilmeyen Aile Hekimliği Birimleri";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='blue'><?php echo $gelmeyenler;?></font></th>
</table>

<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vayadi='$ay' or ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Uzm.Dr.%' and veri.v177 like '%Nolu A%' and veri.vayadi='$ay'
WHERE veri.vocadi IS NULL";
$etablosu=mysqli_query($dbh,$eksiktablosu);
while($eahsonucum=mysqli_fetch_array($etablosu)){
$eksikahadi=$eahsonucum['socad'];
$eksikdradi=$eahsonucum['dradi'];
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="50%" align="right"><font size='2px' face='tahoma'><?php echo $eksikahadi.'--'; ?></font></th>
<th width="50%" align="left"><font size='2px' face='tahoma'><?php echo '--'.$eksikdradi; ?></font></th>
</table>
<?php
}
}else{
$tamam="Bütün Aile Hekimliği Birimlerine ait veri girişi yapılmıştır.";
//echo "<br>";
?>
<table width="100%" class="table table-responsive-sm table-sm table-bordered mt-2" style="background-color:#CCFFFF">
  <thead>
<tr>
<th width="100%"  class="text-center text-danger" colspan="2"><h5><span class="badge badge-pill badge-danger"><?php echo $tamam;?></span></h5></th>
</tr>
</thead>
</table>
<?php
}

@mysqli_close($dbhabe) ;
?>
<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
    <script src="../bootstrap-4/popper.js"></script>
	<script src="../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>