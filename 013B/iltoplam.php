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
?>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="ilpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';

/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysql_query("select * from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
}
//KARMA
$toplamdbt1=$verim1+$verim2+$verim3+$verim4;
$toplamdbt2=$verim5+$verim6+$verim7+$verim8;
$toplamdbt3=$verim9+$verim10+$verim11+$verim12;
$toplamdbtR=$verim13+$verim14+$verim15;
$toplamdbt=$toplamdbt1+$toplamdbt2+$toplamdbt3+$toplamdbtR;
//KPA
$toplamkpa1=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21;
$toplamkpa2=$verim22+$verim23+$verim24+$verim25+$verim26+$verim27;
$toplamkpa3=$verim28+$verim29+$verim30+$verim31+$verim32+$verim33;
$toplamkpar=$verim34+$verim35+$verim36+$verim37+$verim38;
$toplamkpa=$toplamkpa1+$toplamkpa2+$toplamkpa3+$toplamkpar;
//KKK
$toplamkkk1=$verim39+$verim40+$verim41+$verim42+$verim43;
$toplamkkkr=$verim44+$verim45+$verim46+$verim47+$verim48;
$toplamkkk=$toplamkkk1+$toplamkkkr;
//HEPATİT-B
$toplamhep1=$verim49+$verim50+$verim51+$verim52+$verim53+$verim54;
$toplamhep2=$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;
$toplamhep3=$verim61+$verim62+$verim63+$verim64+$verim65+$verim66;
$toplamhep=$toplamhep1+$toplamhep2+$toplamhep3;
//HEPATİT-A
$hepa1top=$verim67+$verim68+$verim69+$verim70+$verim71;
$heparaptop=$verim72+$verim73+$verim74+$verim75+$verim76;
$toplamhepa=$hepa1top+$heparaptop;
//SU ÇİÇEĞİ
$suctop=$verim77+$verim78+$verim79+$verim80+$verim81;

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
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
?>
<a href=# onClick="kontrol();"><img src="images/geri.png"></a></th>
	<th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow">İl Toplamı Görüntüleme Ekranı</font></th>
	<th class="style6" width="25%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><input name="SUBMIT2" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value=" PDF Yazdır "/>	
  <?
  echo '</form>';
  ?>
</th>
 <th class="style6" width="25%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"> 
<?php
echo '<form action="/excelmysql/013Bilxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="Excel Yazdır"/>
 


<?
echo '</form>';
?>
</th>
</table>
 <table width="100%" border="0">
        <tr>
          <th width="18%"><div align="center" class="style18">T.C.</div></th>
          <th width="38%"><span class="style18"></span></th>
          <th width="31%"><div align="right" class="style18"></div></th>
          <th width="13%"><div align="left"><span class="style18"><strong></strong></span></div></th>
        </tr>
        <tr>
          <th><div align="center" class="style18">SAĞLIK BAKANLIĞI </div></th>
          <th><div align="right" class="style18"><span class="style25"><font size="4">ÖZEL HEKİM AŞI UYGULAMALARI     (FORM 013B)</font> </span></div></th>
          <th><div align="right" class="style18"></div></th>
          <th><div align="left"><span class="style18"><strong></strong></span></div></th>
        </tr>
        <tr>
          <th><div align="center" class="style18">Form No:013-B </div></th>
          <th><span class="style18"></span></th>
          <th><span class="style18"></span></th>
          <th><span class="style18"></span></th>
        </tr>
        <tr>
          <th><div align="left"><span class="style18">İL:</span></div></th>
          <td><div align="left"><span class="style18"><strong><? echo $ilinadi ;?></strong></span></div></td>
          <th><div align="right" class="style18"></div></th>
          <th><span class="style18"></strong></span></th>
        </tr>
        <tr>
          <th><div align="left"><span class="style18">İLÇE/TSM:</span></div></th>
          <td><div align="left"><span class="style18"><strong><? echo $ilceninadi ;?></strong></span></div></td>
          <th><div align="right" class="style18">YIL:</div></th>
          <td><span class="style18"><strong><? echo $yilgelen ;?></strong></span></td>
        </tr>
        <tr>
          <th><div align="left"><span class="style18">KURUM/AH:</span></div></th>
          <td><div align="left"><span class="style18"><strong><? echo $ocgelen ;?></strong></span></div></td>
          <th><div align="right" class="style18">AY:</div></th>
          <td><span class="style18"><strong><? echo $aygelen ;?></strong></span></td>
        </tr>
</table>
		
 
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />
<table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
          <th width="18%" rowspan="2" bordercolor="#000000" class="style5"><div align="center"><strong>AŞI</strong></div></th>
          <th colspan="9" bordercolor="#000000" class="style5" scope="col"><div align="center"><strong>YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</strong></div></th>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center"><strong>Uygu-lama</strong></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>0 YAŞ<br />
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
          <th width="18%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DaBT-İPA-Hib AŞISI</strong></div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim1 ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim2  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim3  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><?php $verim4  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt1  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim5  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim6  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim7  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><?php $verim8  ; ?></div></td>
          <td width="11%"  bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt2  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim9  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim10  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim11  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><?php $verim12  ; ?></div></td>
          <td width="11%"  bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt3  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim13  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim14  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><?php $verim15  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbtR  ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>TOPLAM</strong></div></th>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamdbt  ; ?></div></td>
        </tr>
  </table>
  
		 <br>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="18%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim16  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim17  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim18  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim19  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim20  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim21  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa1  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim22  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim23  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim24  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim25  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim26  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim27  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa2  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim28  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim29  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim30  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim31  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim32  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim33  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa3  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim34  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim35  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim36  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim37  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim38  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpar  ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM </div></th>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkpa  ; ?></div></td>
        </tr>
  </table>
  
   <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="18%" rowspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">K.K.K AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim39  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim40  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim41  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim42  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim43  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkkk1  ; ?></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim44  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim45  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim46  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim47  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim48  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkkkr  ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM </div></th>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamkkk  ; ?></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >   
     <tr>
       <th width="18%" rowspan="3" bordercolor="#000000" class="style5" scope="row"><div align="center">HEPATİT-B AŞISI </div></th>
       <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim49  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim50  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim51  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim52  ; ?></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim53  ; ?></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim54  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep1  ; ?></div></td>
     </tr>
     <tr>
       <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
       <td width="11%"  bordercolor="#000000" class="style5"><div align="center"><?php echo $verim55  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim56  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim57  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim58  ; ?></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim59  ; ?></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim60  ; ?></div></td>
              <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep2  ; ?></div></td>
     </tr>
     <tr>
       <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
       <td cwidth="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim61  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim62  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim63  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim64  ; ?></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim65  ; ?></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim66  ; ?></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep3  ; ?></div></td>
     </tr>
     <tr>
       <th width="16%" colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM </div></th>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhep  ; ?></div></td>
     </tr>
  </table>
  <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="18%" rowspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">HEPATİT-A AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim67  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim68  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim69  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim70  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim71  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $hepa1top  ; ?></div></td>
        </tr>

        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim72  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim73  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim74  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim75  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim76  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $heparaptop  ; ?></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM </div></th>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $toplamhepa  ; ?></div></td>
        </tr>
  </table> 
   <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="18%" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>SU ÇİÇEĞİ AŞISI</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center" class="style8"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim77  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim78  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $verim79  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim80  ; ?></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><?php echo $verim81  ; ?></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><?php echo $suctop  ; ?></div></td>
        </tr>
  </table>
    
  <br>
 
   <table width="100%" bgcolor="#FFFFFF" class="style5"  cellpadding="0" cellspacing="0" >
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v173"  type="text" value="<? echo $verim173 ; ?>" size="40" tabindex="173"/>
       </div></th>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v176"  type="text" value="<? echo $verim176 ; ?>" size="40" tabindex="176"/>
       </div></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v174"  type="text" value="<? echo $verim174 ; ?>" size="40" tabindex="174"/>
       </div></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
	   <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v177"  type="text" value="<? echo $verim177 ;?>" size="40" tabindex="177"/></div></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input id="masktest" class="style1" name="v175"  type="text" value=<? echo $a; ?> size="40" tabindex="175"/>
       </div></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input id="masktest1" class="style1" name="v178"  type="text" value="<? echo $a;?>" size="40" tabindex="178"/>
       </div></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table>
</form>
</body>
</html>
