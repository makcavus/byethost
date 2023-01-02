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
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
include('sum.php');
echo '<form action="ilpdf.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
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
$toplamdbt1=$verim1+$verim2+$verim3+$verim4;
$toplamdbt2=$verim5+$verim6+$verim7+$verim8;
$toplamdbt3=$verim9+$verim10+$verim11+$verim12;
$toplamdbtR=$verim13+$verim14+$verim15;
$toplamdbt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15;
$toplamhib=$verim16+$verim17+$verim18;
$toplamkpa1=$verim19+$verim20+$verim21;
$toplamkpa2=$verim22+$verim23+$verim24;
$toplamkpa3=$verim25+$verim26+$verim27;
$toplamkpar=$verim28+$verim29;
$toplamkpa=$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29;
$toplamopv1=$verim30+$verim31+$verim32+$verim33+$verim34+$verim35;
$toplamopv2=$verim36+$verim37+$verim38+$verim39+$verim40+$verim41;
$toplamopv3=$verim42+$verim43+$verim44+$verim45+$verim46+$verim47;
$toplamopvr=$verim48+$verim49+$verim50+$verim51+$verim52;
$toplamopv=$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52;
$toplamkkk1=$verim53+$verim54+$verim55+$verim56+$verim57;
$toplamkkkr=$verim58+$verim59+$verim60+$verim61+$verim62;
$toplamkkk=$verim53+$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60+$verim61+$verim62;
$toplamppd=$verim63+$verim64+$verim65+$verim66+$verim67+$verim68;
$toplambcg=$verim69+$verim70+$verim71+$verim72+$verim73;
$toplamhepbid=$verim74+$verim75;
$toplamhep1=$verim76+$verim77+$verim78+$verim79+$verim80+$verim81;
$toplamhep2=$verim82+$verim83+$verim84+$verim85+$verim86+$verim87;
$toplamhep3=$verim88+$verim89+$verim90+$verim91+$verim92+$verim93;
$toplamhep=$verim76+$verim77+$verim78+$verim79+$verim80+$verim81+$verim82+$verim83+$verim84+$verim85+$verim86+$verim87+$verim88+$verim89+$verim90+$verim91+$verim92+$verim93;
$toplamkizcik=$verim94+$verim95+$verim96;
$toplamokul=$verim97+$verim98+$verim99+$verim100+$verim101;
$toplamdigertd=$verim102+$verim103+$verim104+$verim105+$verim106+$verim107;
$toplamgebe=$verim108+$verim109+$verim110+$verim111+$verim112;
$toplamgebedegil=$verim113+$verim114+$verim115+$verim116+$verim117;
$toplamgebetet1=$verim108+$verim113;
$toplamgebetet2=$verim109+$verim114;
$toplamgebetet3=$verim110+$verim115;
$toplamgebetet4=$verim111+$verim116;
$toplamgebetet5=$verim112+$verim117;
$toplamgebetettop=$verim108+$verim113+$verim109+$verim114+$verim110+$verim115+$verim111+$verim116+$verim112+$verim117;

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
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
?>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="kontrol();"><img src="images/geri.png"></a></th>
	<th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow">İl Toplamı Görüntüleme Ekranı</font></th>
	<th class="style6" width="25%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">&nbsp;</th>	
	</table>
 <table width="100%" border="0">
        <tr>
          <td width="18%"><div align="center" class="style18">T.C.</div></td>
          <td width="38%"><span class="style18"></span></td>
          <td width="31%"><div align="right" class="style18">YIL:</div></td>
          <td width="13%"><div align="left"><span class="style18"><? echo $yilgelen ;?></span></div></td>
        </tr>
        <tr>
          <td><div align="center" class="style18">SAĞLIK BAKANLIĞI </div></td>
          <td><div align="right" class="style18"><strong> AŞI SONUÇLARI ÇİZELGESİ</strong></div></td>
          <td><div align="right" class="style18">AY:</div></td>
          <td><div align="left"><span class="style18"><? echo "" ;?></span></div></td>
        </tr>
        <tr>
          <td><div align="center" class="style18">Form No:013 </div></td>
          <td><span class="style18"></span></td>
          <td><span class="style18"></span></td>
          <td><span class="style18"></span></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style18">İL:</span></div></td>
          <td><div align="left"><span class="style18"><? echo $ilinadi ;?></span></div></td>
          <td><div align="right" class="style18">TOPLAM NÜFUS:</div></td>
          <td><span class="style18"><?php echo $verim118 ; ?></span></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style18">İLÇE/TSM:</span></div></td>
          <td><div align="left"><span class="style18"><? echo "İL TOPLAMI" ;?></span></div></td>
          <td><div align="right" class="style18">0-11 AY BEBEK NÜFUSU:</div></td>
          <td><span class="style18"><?php echo $verim119 ; ?></span></td>
        </tr>
        <tr>
          <td><div align="left"><span class="style18">KURUM/AH:</span></div></td>
          <td><div align="left"><span class="style18"><? echo "" ;?></span></div></td>
          <td><div align="right" class="style18">AYLIK 0-11 AY BEBEK NÜFUSU:</div></td>
          <td><span class="style18"><?php echo $verim120 ; ?></span></td>
        </tr>
      </table>
		
 
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />
<table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
          <th width="11%" rowspan="2" bordercolor="#000000" class="style5"><div align="center"><strong>AŞI</strong></div></th>
          <th colspan="8" bordercolor="#000000" class="style5" scope="col"><div align="center"><strong>YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</strong></div></th>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center"><strong>Uygu-lama</strong></div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><strong>0 YAŞ<br />
          (0-11 ay)</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>1 YAŞ<br />
          (12-23 ay)</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>2-4 YAŞ<br />
          (24-59 ay)</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>5-9 YAŞ</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>10-14 YAŞ</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>15 YAŞ ve Üzeri</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>TOPLAM</strong></div></td>
        </tr>
        <tr>
          <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DaBT-İPA-Hib AŞISI</strong></div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim1 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim2 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim3 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt1 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim5 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim6 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim7 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt2 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim9 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim10 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim11 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt3 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim13 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim14 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbtR ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>TOPLAM DaBT-IPA-Hib</strong></div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt ; ?></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DaBT-İPA AŞISI</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim17 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim18 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhib ; ?></div></td>
        </tr>
  </table>
		 <br>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim19 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim20 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim21 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa1 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim22 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim23 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim24 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa2 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim25 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim26 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim27 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa3 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim28 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim29 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpar ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM KPA </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa ; ?></div></td>
        </tr>
  </table>
  <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center">ORAL POLİO AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim30 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim31 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim32 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim33 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim34 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim35 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamopv1 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim37 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim38 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim39 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim40 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim41 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamopv2 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamopv3 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamopvr ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM ORAL POLİO </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamopv ; ?></div></td>
        </tr>
  </table>
   <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">K.K.K AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim53 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim54 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim55 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim56 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim57 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkkk1 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim58 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim59 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim60 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim61 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim62 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkkkr ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM K.K.K. </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkkk ; ?></div></td>
        </tr>
  </table>
   <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>PPD</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim63 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim64 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim65 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim66 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim67 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim68 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamppd ; ?></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>BCG AŞISI</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim69 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim70 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim71 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim72 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplambcg ; ?></div></td>
        </tr>
  </table>
  
  <table width="100%" border="0">
     <tr>
       <th width="16%" scope="col"></th>
       <th width="6%" bordercolor="#000000" class="style5" scope="col"><div align="center"><span class="style21">BD</span></div></th>
       <th width="6%" bordercolor="#000000" class="style5" scope="col"><div align="center"><span class="style21">Bİ</span></div></th>
       <th width="6%" bordercolor="#000000" class="style5" scope="col"><div align="center"><span class="style21">TOPLAM</span></div></th>
       <th width="66%" bordercolor="#000000" scope="col">&nbsp;</th>
     </tr>
  </table>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="3" bordercolor="#000000" class="style5" scope="row"><div align="center">HEPATİT-B AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="6%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim74 ; ?></div></td>
          <td width="6%" bordercolor="#000000" class="style5"><?php echo $verim75 ; ?></td>
          <td width="6%" bordercolor="#000000" class="style5"><?php echo $toplamhepbid ; ?></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim77 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim78 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim79 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim80 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim81 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep1 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="11%" colspan="3" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim82 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim83 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim84 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim85 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim86 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim87 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep2 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="11%" colspan="3" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim88 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim89 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim90 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim91 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim92 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim93 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep3 ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM HEPATİT-B </div></th>
          <td width="11%" colspan="3" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep ; ?></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center" class="style7">KIZAMIKÇIK AŞISI </div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim96 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkizcik ; ?></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center" class="style19">OKUL Td AŞISI </div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim100 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim101 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamokul ; ?></div></td>
        </tr>
  </table>
 <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DİĞER Td </strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#999999" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#F0F0F0" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim102 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim102 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim102 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim102 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim102 ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim102 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdigertd ; ?></div></td>
        </tr>
  </table>
   <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
          <th width="11%" bordercolor="#000000" class="style5"><div align="center"></div></th>
          <th bordercolor="#000000" bgcolor="#999999" class="style5" scope="col"><div align="center"></div></th>
          <th bordercolor="#000000" bgcolor="#999999" class="style5" scope="col">GEBE</th>
          <th bordercolor="#000000" bgcolor="#999999" class="style5" scope="col">GEBE DEĞİL </th>
          <th bordercolor="#000000" bgcolor="#999999" class="style5" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th width="11%" rowspan="5" bordercolor="#000000" class="style5"><div align="center"><strong>15-49 YAŞ KADIN Td  AŞISI</strong></div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center"><strong>Td1</strong></div></td>
          <td bordercolor="#000000" class="style5"><div align="center"><?php echo $verim108 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" class="style5"><div align="center"><?php echo $verim113 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamgebetet1 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td2</div></td>
          <td bordercolor="#000000" class="style5"><div align="center"><?php echo $verim109 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim114 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamgebetet2 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td3</div></td>
          <td bordercolor="#000000" class="style5"><div align="center"><?php echo $verim110 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim115 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamgebetet3 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td4</div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim111 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim116 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamgebetet4 ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td5</div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim112 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim117 ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamgebetet5 ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>TOPLAM Td </strong></div></th>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $toplamgebe ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $toplamgebedegil ; ?></div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamgebetettop ; ?></div></td>
        </tr>
  </table>
   <br>
   <table width="100%" bgcolor="#FFFFFF" class="style5"  cellpadding="0" cellspacing="0" >
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim173 ; ?></th>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim176 ; ?></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim174 ; ?></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim177 ; ?></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7"><? echo $a; ?></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7"><? echo $a;?></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7" width="27%">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table> 
</form>
</body>
</html>
