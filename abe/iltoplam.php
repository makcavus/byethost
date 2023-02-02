<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;
border-style: none;
text-align: center; 
    font-size : 13px;
    color : #000000;
border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;	
	}
.style3 {font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;}
.style4 {color: #000000}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;
	border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;
border-top-style: solid;
border-right-style: solid;
border-bottom-style: solid;
border-left-style: solid;
border-top-color: #0066CC;
border-right-color: #0066CC;
border-left-color: #0066CC;
border-bottom-color: #0066CC;
}
.style6 {
font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;	
	border-style:none;
	
}
-->
</style>
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>

<body>
<?php
include('con_023.php');
include('abealanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 

include('sum.php');


/*echo '<form action="ilpdf.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysql_query("select * from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
}

?>
<body>
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

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and socad like '%HSM' or ilinad='$ilgelen' and socad='')");
while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){
$asead=$sorumlusonucum['aseadi'];
$aseunv=$sorumlusonucum['aseunvan'];
$drad=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$ahkodum=$onkurum.' '.$onsor;
$iltoplami="İL TOPLAMI";
$ilceninadi=$ilinadi.' '.$iltoplami ;
}

?>
<br>
<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="ilpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input TYPE="SUBMIT" value="<?php echo trsuz($pdfbaslik); ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/>
<?php
echo '</form></th><th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">';
echo '<form action="topgrafikil.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ocgelen).'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT2" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($topgrafciz); ?>"/>
<?
echo '</form>';
?></th>
<th class="style6" width="52%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($ilgorbaslik); ?></font></th>
<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="grafikil.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ocgelen).'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($icdgrafciz); ?>"/>
<?
echo '</form></th><th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">';
echo '<form action="/excelmysql/abeilxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ilgelen).'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ilcegelen).'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ocgelen).'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($aygelen).'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($excelbaslik); ?>"/>
<?
echo '</form>';
?></th>

</table>
<br>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />

<tr>
    <th width="27%" align="center"bordercolor="#000000" bgcolor="white" class="style5"><? $top=$iltopbaslik; echo '<font size="3" family="Arial"><label>'.trsuz($ilinadi).'-'.$yilgelen.' '.trsuz($top).'</label></font>' ; ?></th>
</tr>

</TABLE>
<br>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />
  <tr>
    <th  width="100%" align="center"bordercolor="white" colspan="12"><font size="3"><?php echo trsuz($frmbaslik); ?></font></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo trsuz($ililcebaslik); ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.trsuz($ilinadi).'</font>' ;?></th>
  </tr>
  <tr>
     <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo trsuz($kurumbaslik); ?></th>
	 <th  width="88%"align="left" bordercolor="white" colspan="11"><? $iltoplam="İL TOPLAMI"; echo '<font size="3" family="Arial">'.trsuz($iltoplam).'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white"colspan="1"><?php echo trsuz($donembaslik); ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><? $yil="YILI"; echo '<font size="3" family="Arial">'.$yilgelen.' '.$yil.'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="84%" align="center" class="style5" bgcolor="white" colspan="10"><font face="Arial" size="3"><?php echo trsuz($abevakabaslik); ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="3">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="36%"align="center" class="style5" bgcolor="#CEF6EC" colspan="4" rowspan="2"><font face="Arial" size="3"><?php echo trsuz($hastsinifbaslik); ?></font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">A09</font><br />
        <font face="Arial" size="2"><?php echo trsuz($addiarebaslik); ?></font><br />
      <font face="Arial" size="2"><?php echo trsuz($adenfbaslik); ?></font><br />
      <font face="Arial" size="2">tahmin edilen </font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">R11</font><br />
        <font face="Arial" size="2">&nbsp;</font><br />
      <font face="Arial" size="2"><?php echo trsuz($ronbirbaslik); ?></font><br />
      <font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">K52</font><br />
        <font face="Arial" size="2">&nbsp;</font><br />
      <font face="Arial" size="2"><?php echo trsuz($keienfbaslik); ?></font><br />
      <font face="Arial" size="2"><?php echo trsuz($keigastbaslik); ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="3">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo trsuz($sifiryasbaslik); ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo trsuz($besyasbaslik); ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo trsuz($sifiryasbaslik); ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo trsuz($besyasbaslik); ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo trsuz($sifiryasbaslik); ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo trsuz($besyasbaslik); ?></font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="36%"align="center" class="style5" bgcolor="#CEF6EC" colspan="4"><font face="Arial" size="3"><?php echo trsuz($vakasaybaslik); ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><?php echo $verim1; ?></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><?php echo $verim2; ?></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><?php echo $verim3; ?></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><?php echo $verim4; ?></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><?php echo $verim5; ?></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><?php echo $verim6; ?></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="3">&nbsp;</font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="100%" align="center" class="style5" bgcolor="white" colspan="12"><font face="Arial" size="3"><?php echo trsuz($labbaslik); ?></font></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($kulturbaslik); ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Vibrio cholerae (A00)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Salmonella sp.(A02)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Shigella sp.(A03)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Enterohemorrhagic</font><br />
        <font face="Arial" size="2">Escherichia Coli (A04.3)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Campylobacter (A04.5)</font></th>
  </tr>
  <tr>
    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php if($verim7==NULL){$verim7="&nbsp;"; }else{$verim7=$verim7; }  echo $verim7; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim8; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim9; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim10; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim11; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim12; ?></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($parazitbaslik); ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Entamoeba histolytica (A06)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Cryptosporodium (A07.2)</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim13; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim14; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim15; ?></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($viralbaslik); ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($rotabaslik); ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($norobaslik); ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($adenobaslik); ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($hepabaslik); ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim16; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim17; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim18; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim19; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $verim20; ?></th>
    <th  width="16%"align="center" bgcolor="white" colspan="2">&nbsp;</th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <?
include('con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysql_query($sql);
    while($satir=mysql_fetch_array($sonucak))
{
//@mysql_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)=='HSM'){
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
?>
<input type="hidden" name="v21" value="0" size="5"/>
<input type="hidden" name="v22" value="0" size="5"/>
<input type="hidden" name="v23" value="0" size="5"/>
<input type="hidden" name="v24" value="0" size="5"/>
<input type="hidden" name="v25" value="0" size="5"/>
<input type="hidden" name="v26" value="0" size="5"/>
<input type="hidden" name="v27" value="0" size="5"/>
<input type="hidden" name="v28" value="0" size="5"/>
<input type="hidden" name="v29" value="0" size="5"/>
<input type="hidden" name="v30" value="0" size="5"/>
<input type="hidden" name="v31" value="0" size="5"/>
<input type="hidden" name="v32" value="0" size="5"/>
<input type="hidden" name="v33" value="0" size="5"/>
<input type="hidden" name="v34" value="0" size="5"/>
<input type="hidden" name="v35" value="0" size="5"/>
<input type="hidden" name="v36" value="0" size="5"/>
<input type="hidden" name="v37" value="0" size="5"/>
<input type="hidden" name="v38" value="0" size="5"/>
<input type="hidden" name="v39" value="0" size="5"/>
<input type="hidden" name="v40" value="0" size="5"/>
<input type="hidden" name="v41" value="0" size="5"/>
<input type="hidden" name="v42" value="0" size="5"/>
  <input type="hidden" name="v43" value="0" size="5"/>
  <input type="hidden" name="v44" value="0" size="5"/>
  <input type="hidden" name="v45" value="0" size="5"/>
  <input name="v46" type="hidden" value="0" size="5"/>
  <input name="v47" type="hidden" value="0" size="5"/>
  <input name="v48" type="hidden" value="0" size="5"/>
  <input name="v49"  type="hidden" value="0" size="5"/>
  <input name="v50"  type="hidden" value="0" size="5"/>
  <input name="v51"  type="hidden" value="0" size="5"/>
  <input name="v52"  type="hidden" value="0" size="5"/>
  <input name="v53"  type="hidden" value="0" size="5"/>
  <input name="v54"  type="hidden" value="0" size="5"/>
  <input name="v55"  type="hidden" value="0" size="5"/>
  <input name="v56"  type="hidden" value="0" size="5"/>
  <input name="v57"  type="hidden" value="0" size="5"/>
  <input name="v58"  type="hidden" value="0" size="5"/>
  <input name="v59"  type="hidden" value="0" size="5"/>
  <input name="v60"  type="hidden" value="0" size="5"/>
  <input name="v61"  type="hidden" value="0" size="5"/>
  <input name="v62"  type="hidden" value="0" size="5"/>
  <input name="v63"  type="hidden" value="0" size="5"/>
  <input name="v64"  type="hidden" value="0" size="5"/>
  <input name="v65"  type="hidden" value="0" size="5"/>
  <input name="v66"  type="hidden" value="0" size="5"/>
  <input name="v67"  type="hidden" value="0" size="5"/>
  <input name="v68"  type="hidden" value="0" size="5"/>
  <input name="v69"  type="hidden" value="0" size="5"/>
  <input name="v70"  type="hidden" value="0" size="5"/>
  <input name="v71"  type="hidden" value="0" size="5"/>
  <input name="v72"  type="hidden" value="0" size="5"/>
  <input name="v73"  type="hidden" value="0" size="5"/>
  <input name="v74"  type="hidden" value="0" size="5"/>
  <input name="v75"  type="hidden" value="0" size="5"/>
  <input name="v76"  type="hidden" value="0" size="5"/>
  <input name="v77"  type="hidden" value="0" size="5"/>
  <input name="v78"  type="hidden" value="0" size="5"/>
  <input name="v79"  type="hidden" value="0" size="5"/>
  <input name="v80"  type="hidden" value="0" size="5"/>
  <input name="v81"  type="hidden" value="0" size="5"/>
  <input name="v82"  type="hidden" value="0" size="5"/>
  <input name="v83"  type="hidden" value="0" size="5"/>
  <input name="v84"  type="hidden" value="0" size="5"/>
  <input name="v85"  type="hidden" value="0" size="5"/>
  <input name="v86"  type="hidden" value="0" size="5"/>
  <input name="v87"  type="hidden" value="0" size="5"/>
  <input name="v88"  type="hidden" value="0" size="5"/>
  <input name="v89"  type="hidden" value="0" size="5"/>
  <input name="v90"  type="hidden" value="0" size="5"/>
  <input name="v91"  type="hidden" value="0" size="5"/>
  <input name="v92"  type="hidden" value="0" size="5"/>
  <input name="v93"  type="hidden" value="0" size="5"/>
  <input name="v94"  type="hidden" value="0" size="5"/>
  <input name="v95"  type="hidden" value="0" size="5"/>
  <input name="v96"  type="hidden" value="0" size="5"/>
  <input name="v97"  type="hidden" value="0" size="5"/>
  <input name="v98"  type="hidden" value="0" size="5"/>
  <input name="v99"  type="hidden" value="0" size="5"/>
  <input name="v100"  type="hidden" value="0" size="5"/>
  <input name="v101"  type="hidden" value="0" size="5"/>
  <input name="v102"  type="hidden" value="0" size="5"/>
  <input name="v103"  type="hidden" value="0" size="5"/>
  <input name="v104"  type="hidden" value="0" size="5"/>
  <input name="v105"  type="hidden" value="0" size="5"/>
  <input name="v106"  type="hidden" value="0" size="5"/>
  <input name="v107"  type="hidden" value="0" size="5"/>
  <input name="v108"  type="hidden" value="0" size="5"/>
  <input name="v109"  type="hidden" value="0" size="5"/>
  <input name="v110"  type="hidden" value="0" size="5"/>
  <input name="v111"  type="hidden" value="0" size="5"/>
  <input name="v112"  type="hidden" value="0" size="5"/>
  <input name="v113"  type="hidden" value="0" size="5"/>
  <input name="v114"  type="hidden" value="0" size="5"/>
  <input name="v115"  type="hidden" value="0" size="5"/>
  <input name="v116"  type="hidden" value="0" size="5"/>
  <input name="v117"  type="hidden" value="0" size="5"/>
  <input name="v118"  type="hidden" value="0" size="5"/>
  <input name="v119"  type="hidden" value="0" size="5"/>
  <input name="v120"  type="hidden" value="0" size="5"/>
  <input name="v121"  type="hidden" value="0" size="5"/>
  <input name="v122"  type="hidden" value="0" size="5"/>
  <input name="v123"  type="hidden" value="0" size="5"/>
  <input name="v124"  type="hidden" value="0" size="5"/>
  <input name="v125"  type="hidden" value="0" size="5"/>
  <input name="v126"  type="hidden" value="0" size="5"/>
  <input name="v127"  type="hidden" value="0" size="5"/>
  <input name="v128"  type="hidden" value="0" size="5"/>
  <input name="v129"  type="hidden" value="0" size="5"/>
  <input name="v130"  type="hidden" value="0" size="5"/>
  <input name="v131"  type="hidden" value="0" size="5"/>
  <input name="v132"  type="hidden" value="0" size="5"/>
  <input name="v133"  type="hidden" value="0" size="5"/>
  <input name="v134"  type="hidden" value="0" size="5"/>
  <input name="v135"  type="hidden" value="0" size="5"/>
  <input name="v136"  type="hidden" value="0" size="5"/>
  <input name="v137"  type="hidden" value="0" size="5"/>
  <input name="v138"  type="hidden" value="0" size="5"/>
  <input name="v139"  type="hidden" value="0" size="5"/>
  <input name="v140"  type="hidden" value="0" size="5"/>
  <input name="v141"  type="hidden" value="0" size="5"/>
  <input name="v142"  type="hidden" value="0" size="5"/>
  <input name="v143"  type="hidden" value="0" size="5"/>
  <input name="v144"  type="hidden" value="0" size="5"/>
  <input name="v145"  type="hidden" value="0" size="5"/>
  <input name="v146"  type="hidden" value="0" size="5"/>
  <input name="v147"  type="hidden" value="0" size="5"/>
  <input name="v148"  type="hidden" value="0" size="5"/>
  <input name="v149"  type="hidden" value="0" size="5"/>
  <input name="v150"  type="hidden" value="0" size="5"/>
  <input name="v151"  type="hidden" value="0" size="5"/>
  <input name="v152"  type="hidden" value="0" size="5"/>
  <input name="v153"  type="hidden" value="0" size="5"/>
  <input name="v154"  type="hidden" value="0" size="5"/>
  <input name="v155"  type="hidden" value="0" size="5"/>
  <input name="v156"  type="hidden" value="0" size="5"/>
  <input name="v157"  type="hidden" value="0" size="5"/>
  <input name="v158"  type="hidden" value="0" size="5"/>
  <input name="v159"  type="hidden" value="0" size="5"/>
  <input name="v160"  type="hidden" value="0" size="5"/>
  <input name="v161"  type="hidden" value="0" size="5"/>
  <input name="v162"  type="hidden" value="0" size="5"/>
  <input name="v163"  type="hidden" value="0" size="5"/>
  <input name="v164"  type="hidden" value="0" size="5"/>
  <input name="v165"  type="hidden" value="0" size="5"/>
  <input name="v166"  type="hidden" value="0" size="5"/>
  <input name="v167"  type="hidden" value="0" size="5"/>
  <input name="v168"  type="hidden" value="0" size="5"/>
  <input name="v169"  type="hidden" value="0" size="5"/>
  <input name="v170"  type="hidden" value="0" size="5"/>
  <input name="v171"  type="hidden" value="0" size="5"/>
  <input name="v172"  type="hidden" value="0" size="5"/>
  <tr>
    <th  width="36%" bgcolor="white" colspan="4" rowspan="6">&nbsp;</th>
  </tr>
  <tr>
    <th  width="24%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo trsuz($duzbaslik); ?></th>
    <th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
    <th  width="8%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
	<th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($duzadbaslik); ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo trsuz($asead) ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($onadbaslik); ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo trsuz($drad) ; ?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($duzunbaslik); ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo trsuz($aseunv) ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($onunbaslik); ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo trsuz($ahkodum) ;?></th>
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
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo $duztarih; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo $ontarih?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($duzimzabaslik); ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($onimzabaslik); ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
  </tr>
</table>
	</form>
</body>
</html>