
<?php
include('con_023.php');
include('piramitalanlari.php');
//require('pirarama.php');

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
//$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
include('sum.php');

//echo $verim1;
//echo $verim2;
// YAÞ GRUBU TOPLAMLARI
$sifir=$verim1+$verim19 ;
$bes=$verim2+$verim20 ;
$on=$verim3+$verim21 ;
$onbes=$verim4+$verim22 ;
$yirmi=$verim5+$verim23 ;
$yirmibes=$verim6+$verim24 ;
$otuz=$verim7+$verim25 ;
$otuzbes=$verim8+$verim26 ;
$kirk=$verim9+$verim27 ;
$kirkbes=$verim10+$verim28 ;
$elli=$verim11+$verim29 ;
$ellibes=$verim12+$verim30 ;
$atmis=$verim13+$verim31 ;
$atmisbes=$verim14+$verim32 ;
$yetmis=$verim15+$verim33 ;
$yetmisbes=$verim16+$verim34 ;
$seksen=$verim17+$verim35 ;
$seksenbes=$verim18+$verim36 ;
$ygkt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18;
$yget=$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29+$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36;
$ygt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29+$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36;
// MEDENÝ HAL TOPLAMLARI
$cocuk=$verim37+$verim42 ;
$bekar=$verim38+$verim43 ;
$evli=$verim39+$verim44 ;
$bosanmis=$verim40+$verim45 ;
$esiolmus=$verim41+$verim46 ;
$mhkt=$verim37+$verim38+$verim39+$verim40+$verim41;
$mhet=$verim42+$verim43+$verim44+$verim45+$verim46;
$mht=$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46;
// ÖÐRENÝM DURUMU TOPLAMLARI
$ocd=$verim47+$verim54;
$oyd=$verim48+$verim55;
$oy=$verim49+$verim56;
$ilk=$verim50+$verim57;
$orta=$verim51+$verim58;
$lise=$verim52+$verim59;
$yo=$verim53+$verim60;
$odkt=$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
$odet=$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;
$odt=$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53+$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Untitled Document</title>

<link href="Style.css" rel="stylesheet" type="text/css"/>
<link href="arkakara.css" rel="stylesheet" type="text/css"/>

<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>
<script language="JavaScript" type="text/javascript">
function hoppa() {
	if
(screen.width==1280||screen.height==1024){ // Çözünürlük 1280*1024 Ise
 window.open("","hoppa","width=790,height=636,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}else if 
(screen.width==1280||screen.height==960){ // Çözünürlük 1280*960 Ise
 window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}else{ // Çözünürlük Bunlardan Hiçbiri Degil veya Farkli Ise
window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
}
 }
</script>	

</head>



<body>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="8%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="nufpirilyg.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($npbuton) ; ?>"/></th>

<?php
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysql_query("select * from yg where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
}

?>
<?php
$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih from yg where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih from yg where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
?>
<?
  echo '</form>';
  ?>
</th>
<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="nufpirilmh.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="Medeni Hali"/>
<?
  echo '</form>';
  ?></th>
<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="nufpirilod.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($odbuton) ; ?>"/>
<?
  echo '</form>';
  ?>
</th>
	<th class="style6" width="52%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($ilgorbaslik) ; ?></font></th>
	 
</th>

 <th class="style6" width="12%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"> 
<?php
echo '<form action="/excelmysql/npilxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($excelbaslik) ; ?>"/>
 


<?
echo '</form>';
?>
</th>
 <th class="style6" width="12%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><?php
echo '<form action="ilpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($pdfbaslik) ; ?>"/>
 


<?
echo '</form>';
?></th>
</table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
    <th width="27%" align="center"bordercolor="#000000" bgcolor="white" class="style5" colspan="4"></th>
</tr>
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($ygbaslik) ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yasgrubu) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($sifiryas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim1  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim19  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $sifir  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($besyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim2  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim20  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim3  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim21  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $on  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim4  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim22  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $onbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmiyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim5  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim23  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yirmi  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmibesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim6  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim24  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yirmibes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim7  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim25  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $otuz  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim8  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim26  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $otuzbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim9  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim27  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $kirk  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim10  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim28  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $kirkbes  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($elliyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim11  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim29  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $elli  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ellibesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim12  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim30  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ellibes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim13  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim31  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $atmis  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim14  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim32  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $atmisbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim15  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim33  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yetmis  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim16  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim34  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yetmisbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim17  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim35  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $seksen  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim18  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim36  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $seksenbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $ygkt  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $yget  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ygt  ; ?></th>
  </tr>                            
  </table>
  <br />
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($mhalbaslik) ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($medenihali) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhcocuk) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim37  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim42  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $cocuk  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">BEKAR </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim38  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim43  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bekar  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhevli) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim39  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim44  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $evli  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhbosanmis) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim40  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim45  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bosanmis  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhesiolmus) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim41  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim46  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $esiolmus  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $mhkt  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $mhet  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $mht  ; ?></th>
  </tr>                            
  </table>
<BR />
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($odurbaslik) ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ogrenimdurumu) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odocd) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim47  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim54  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ocd  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odoyd) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim48  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim55  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $oyd  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">OKUR YAZAR</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim49  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim56  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $oy  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odilk) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim50  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim57  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ilk  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ORTAOKUL </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim51  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim58  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $orta  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odlise) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim52  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim59  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $lise  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odyo) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim53  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim60  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yo  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $odkt  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $odet  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $odt  ; ?></th>
  </tr>                            
  </table>  
  <br />	
<table width="100%" bgcolor="#FFFFFF" class="style5"  cellpadding="0" cellspacing="0" >
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzadbaslik); ?></th>
       <th class="style5" align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo trsuz($verim173) ; ?></th>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onadbaslik); ?></th>
       <th class="style5" width="27%" align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo trsuz($verim176) ; ?></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzunbaslik); ?></th>
       <th class="style5" align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo trsuz($verim174) ; ?></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onunbaslik); ?></th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo trsuz($verim177) ; ?></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><? echo $a; ?></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><? echo $a;?></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzimzabaslik); ?></th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onimzabaslik); ?></th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table> 
   </body>

</html>
