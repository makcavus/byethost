<?php header("Cache-Control: no-cache,no-store"); ?>
<script language="JavaScript" type="text/javascript">
function hoppa() {
	if(screen.width==1280||screen.height==1024){ // ��z�n�rl�k 1280*1024 Ise
 window.open("","hoppa","width=790,height=636,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}else if(screen.width==1280||screen.height==960){ // ��z�n�rl�k 1280*960 Ise
 window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}else{ // ��z�n�rl�k Bunlardan Hi�biri Degil veya Farkli Ise
window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}
 }
</script>	
<?php
include("../con_023.php");
include("../con_etf.php");
include("../form013/tanimveyetkiler.php");
include('piramitalanlari.php');
$ahekkodu=$_GET['ahekkod'];
$countryId= $_GET['selectil']; 
$stateId= $_GET['selectilce']; 
$ocak= $_GET['selectoc']; 
$yil=$_GET['selectyil'];
$ilkod=substr($ahekkodu,0,2);
$ilkodx=substr($ocak,0,2);
$yetki=substr($ahekkodu,-3,3);
$ilcekod=substr($ahekkodu,0,5);
$ilcekodx=substr($ocak,0,5);
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil')";
$socsorgu=mysqli_query($dbh_etf,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar="İl Seçilmedi";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
$uyar="İlçe Seçilmedi.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
$uyar="Aile Hekimliği Seçilmedi.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId !="İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil=="" and $say<1){
$uyar="Yılı Boş Bıraktınız.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId != "" and $ilceninadi != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil!="" and $say<1){
$uyar="";
echo '<font style="color:Green">'.$uyar.'</font>' ;
if($yetki==$bakanlikyetki or $yetki=$ilyetki and $ilkod==$ilkodx or $yetki==$ilceyetki and $ilcekod==$ilcekodx or $yetki==$kurumyetki and $ilcekod==$ilcekodx or $ahekkodu==$ocak){
echo '<a href=# onClick="ykay();"><img src="images/kekle.PNG"></a>';
}else{
$sizmisiniz="Bu kaydı yapmaya yetkiniz yoktur.";
echo '<font style="color:Red">'.$sizmisiniz.'</font>' ;
}
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
echo '<label><font size="2px" face="tahoma">'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocak.'</FONT>-'.$yil.'&nbsp;&nbsp;&nbsp;&nbsp;</font></label>';
echo '</form>';
if($yetki==$bakanlikyetki or $yetki=$ilyetki and $ilkod==$ilkodx or $yetki==$ilceyetki and $ilcekod==$ilcekodx or $yetki==$kurumyetki and $ilcekod==$ilcekodx or $ahekkodu==$ocak){
?>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onclick="deg();"><img src="images/degistir.PNG" /></a></th>
<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="git();"><img src="images/goster.PNG"></a></th>
<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.PNG"></a></th>
<th class="style6" width="12%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value=" <?php echo $pdfbaslik ;?> "/></th>
<?php
echo '</form>';
?>
<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php
echo '<form action="/excelmysqli/npyilxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $excelbaslik ;?>"/></th>
<?php
echo '</form>';
?>
<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php
echo '<form action="nufpirkurumyg.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $npbuton ;?>"/></th>
<?php
echo '</form>';
?>
<th class="style6" width="11%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

	<?php
echo '<form action="npbuyukyaz.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $buyuknpbuton; ?>"/></th>
<?php
  echo '</form>';
  ?>
<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php
echo '<form action="nufpirkurummh.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $mhbuton ;?>"/></th>
<?php
echo '</form>';
?>

<th class="style6" width="11%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php
echo '<form action="nufpirkurumod.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
?>

<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $odbuton ;?>"/></th>
<?php
echo '</form>';
?>
</table>
<?php
$resultvyil = @mysqli_query($dbh_etf,"select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/etf_sablonlar/np_veri_seti.php');
}
include('assets/etf_sablonlar/toplamsutunu.php');
include('assets/etf_sablonlar/npkontrol_sablonu.php');
}else{
echo '<br>';
echo '<a href=# onClick="git();"><img src="images/goster.PNG"></a>';
}
}
if($yetki==$bakanlikyetki or $yetki=$ilyetki and $ilkod==$ilkodx or $yetki==$ilceyetki and $ilcekod==$ilcekodx or $yetki==$kurumyetki and $ilcekod==$ilcekodx or $ahekkodu==$ocak){
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vyiladi='$yil')";
$verisorgula=mysqli_query($dbh_etf,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos="Hen�z hi�bir Aile Hekimli�ine veri girilmemi�tir.";
echo "<br>";
echo "<br>";

echo "<font size='2px' face='tahoma'>".$bos."</font>";
}elseif($kacaheksay!=$kacverisay){
$a="Aile Hekimli�i Biriminden";
$b="Aile Hekimli�ine ait veriler girilmi�tir.";
$fark=$kacaheksay-$kacverisay;
$c="Aile Hekimli�ine ait veri girilmemi�tir.";
echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma'><?php echo $kacaheksay." ".$a." ".$kacverisay." ".$b."".$fark." ".$c;?></font></th>
</table>
<?php
$gelmeyenler="Verileri girilmeyen Aile Hekimli�i Birimleri";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $gelmeyenler;?></font></th>
</table>

<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vyiladi='$yil'
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
$tamam="B�t�n Aile Hekimli�i Birimlerine ait veri giri�i yap�lm��t�r.";
echo "<br>";
echo "<font size='2px' face='tahoma'>".$tamam."</font>";
}
}
?>
<?php
@mysqli_close($dbh) ;
?>
