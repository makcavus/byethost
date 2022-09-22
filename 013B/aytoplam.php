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
//$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
include('sumay.php');
?>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="kurumpdfay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
echo '<input type="hidden" name="v1" value="'.$verim1.'" />';
echo '<input type="hidden" name="v2" value="'.$verim2.'" />';
echo '<input type="hidden" name="v3" value="'.$verim3.'" />';
echo '<input type="hidden" name="v4" value="'.$verim4.'" />';
echo '<input type="hidden" name="v5" value="'.$verim5.'" />';
echo '<input type="hidden" name="v6" value="'.$verim6.'" />';
echo '<input type="hidden" name="v7" value="'.$verim7.'" />';
echo '<input type="hidden" name="v8" value="'.$verim8.'" />';
echo '<input type="hidden" name="v9" value="'.$verim9.'" />';
echo '<input type="hidden" name="v10" value="'.$verim10.'" />';
echo '<input type="hidden" name="v11" value="'.$verim11.'" />';
echo '<input type="hidden" name="v12" value="'.$verim12.'" />';
echo '<input type="hidden" name="v13" value="'.$verim13.'" />';
echo '<input type="hidden" name="v14" value="'.$verim14.'" />';
echo '<input type="hidden" name="v15" value="'.$verim15.'" />';
echo '<input type="hidden" name="v16" value="'.$verim16.'" />';
echo '<input type="hidden" name="v17" value="'.$verim17.'" />';
echo '<input type="hidden" name="v18" value="'.$verim18.'" />';
echo '<input type="hidden" name="v19" value="'.$verim19.'" />';
echo '<input type="hidden" name="v20" value="'.$verim20.'" />';
echo '<input type="hidden" name="v21" value="'.$verim21.'" />';
echo '<input type="hidden" name="v22" value="'.$verim22.'" />';
echo '<input type="hidden" name="v23" value="'.$verim23.'" />';
echo '<input type="hidden" name="v24" value="'.$verim24.'" />';
echo '<input type="hidden" name="v25" value="'.$verim25.'" />';
echo '<input type="hidden" name="v26" value="'.$verim26.'" />';
echo '<input type="hidden" name="v27" value="'.$verim27.'" />';
echo '<input type="hidden" name="v28" value="'.$verim28.'" />';
echo '<input type="hidden" name="v29" value="'.$verim29.'" />';
echo '<input type="hidden" name="v30" value="'.$verim30.'" />';
echo '<input type="hidden" name="v31" value="'.$verim31.'" />';
echo '<input type="hidden" name="v32" value="'.$verim32.'" />';
echo '<input type="hidden" name="v33" value="'.$verim33.'" />';
echo '<input type="hidden" name="v34" value="'.$verim34.'" />';
echo '<input type="hidden" name="v35" value="'.$verim35.'" />';
echo '<input type="hidden" name="v36" value="'.$verim36.'" />';
echo '<input type="hidden" name="v37" value="'.$verim37.'" />';
echo '<input type="hidden" name="v38" value="'.$verim38.'" />';
echo '<input type="hidden" name="v39" value="'.$verim39.'" />';
echo '<input type="hidden" name="v40" value="'.$verim40.'" />';
echo '<input type="hidden" name="v41" value="'.$verim41.'" />';
echo '<input type="hidden" name="v42" value="'.$verim42.'" />';
echo '<input type="hidden" name="v43" value="'.$verim43.'" />';
echo '<input type="hidden" name="v44" value="'.$verim44.'" />';
echo '<input type="hidden" name="v45" value="'.$verim45.'" />';
echo '<input type="hidden" name="v46" value="'.$verim46.'" />';
echo '<input type="hidden" name="v47" value="'.$verim47.'" />';
echo '<input type="hidden" name="v48" value="'.$verim48.'" />';
echo '<input type="hidden" name="v49" value="'.$verim49.'" />';
echo '<input type="hidden" name="v50" value="'.$verim50.'" />';
echo '<input type="hidden" name="v51" value="'.$verim51.'" />';
echo '<input type="hidden" name="v52" value="'.$verim52.'" />';
echo '<input type="hidden" name="v53" value="'.$verim53.'" />';
echo '<input type="hidden" name="v54" value="'.$verim54.'" />';
echo '<input type="hidden" name="v55" value="'.$verim55.'" />';
echo '<input type="hidden" name="v56" value="'.$verim56.'" />';
echo '<input type="hidden" name="v57" value="'.$verim57.'" />';
echo '<input type="hidden" name="v58" value="'.$verim58.'" />';
echo '<input type="hidden" name="v59" value="'.$verim59.'" />';
echo '<input type="hidden" name="v60" value="'.$verim60.'" />';
echo '<input type="hidden" name="v61" value="'.$verim61.'" />';
echo '<input type="hidden" name="v62" value="'.$verim62.'" />';
echo '<input type="hidden" name="v63" value="'.$verim63.'" />';
echo '<input type="hidden" name="v64" value="'.$verim64.'" />';
echo '<input type="hidden" name="v65" value="'.$verim65.'" />';
echo '<input type="hidden" name="v66" value="'.$verim66.'" />';
echo '<input type="hidden" name="v67" value="'.$verim67.'" />';
echo '<input type="hidden" name="v68" value="'.$verim68.'" />';
echo '<input type="hidden" name="v69" value="'.$verim69.'" />';
echo '<input type="hidden" name="v70" value="'.$verim70.'" />';
echo '<input type="hidden" name="v71" value="'.$verim71.'" />';
echo '<input type="hidden" name="v72" value="'.$verim72.'" />';
echo '<input type="hidden" name="v73" value="'.$verim73.'" />';
echo '<input type="hidden" name="v74" value="'.$verim74.'" />';
echo '<input type="hidden" name="v75" value="'.$verim75.'" />';
echo '<input type="hidden" name="v76" value="'.$verim76.'" />';
echo '<input type="hidden" name="v77" value="'.$verim77.'" />';
echo '<input type="hidden" name="v78" value="'.$verim78.'" />';
echo '<input type="hidden" name="v79" value="'.$verim79.'" />';
echo '<input type="hidden" name="v80" value="'.$verim80.'" />';
echo '<input type="hidden" name="v81" value="'.$verim81.'" />';
echo '<input type="hidden" name="v82" value="'.$verim82.'" />';
echo '<input type="hidden" name="v83" value="'.$verim83.'" />';
echo '<input type="hidden" name="v84" value="'.$verim84.'" />';
echo '<input type="hidden" name="v85" value="'.$verim85.'" />';
echo '<input type="hidden" name="v86" value="'.$verim86.'" />';
echo '<input type="hidden" name="v87" value="'.$verim87.'" />';
echo '<input type="hidden" name="v88" value="'.$verim88.'" />';
echo '<input type="hidden" name="v89" value="'.$verim89.'" />';
echo '<input type="hidden" name="v90" value="'.$verim90.'" />';
echo '<input type="hidden" name="v91" value="'.$verim91.'" />';
echo '<input type="hidden" name="v92" value="'.$verim92.'" />';
echo '<input type="hidden" name="v93" value="'.$verim93.'" />';
echo '<input type="hidden" name="v94" value="'.$verim94.'" />';
echo '<input type="hidden" name="v95" value="'.$verim95.'" />';
echo '<input type="hidden" name="v96" value="'.$verim96.'" />';
echo '<input type="hidden" name="v97" value="'.$verim97.'" />';
echo '<input type="hidden" name="v98" value="'.$verim98.'" />';
echo '<input type="hidden" name="v99" value="'.$verim99.'" />';
echo '<input type="hidden" name="v100" value="'.$verim100.'" />';
echo '<input type="hidden" name="v101" value="'.$verim101.'" />';
echo '<input type="hidden" name="v102" value="'.$verim102.'" />';
echo '<input type="hidden" name="v103" value="'.$verim103.'" />';
echo '<input type="hidden" name="v104" value="'.$verim104.'" />';
echo '<input type="hidden" name="v105" value="'.$verim105.'" />';
echo '<input type="hidden" name="v106" value="'.$verim106.'" />';
echo '<input type="hidden" name="v107" value="'.$verim107.'" />';
echo '<input type="hidden" name="v108" value="'.$verim108.'" />';
echo '<input type="hidden" name="v109" value="'.$verim109.'" />';
echo '<input type="hidden" name="v110" value="'.$verim110.'" />';
echo '<input type="hidden" name="v111" value="'.$verim111.'" />';
echo '<input type="hidden" name="v112" value="'.$verim112.'" />';
echo '<input type="hidden" name="v113" value="'.$verim113.'" />';
echo '<input type="hidden" name="v114" value="'.$verim114.'" />';
echo '<input type="hidden" name="v115" value="'.$verim115.'" />';
echo '<input type="hidden" name="v116" value="'.$verim116.'" />';
echo '<input type="hidden" name="v117" value="'.$verim117.'" />';
//echo '<input type="hidden" name="v118" value="'.$devirgebe.'" />';
echo '<input type="hidden" name="v119" value="'.$verim119.'" />';
echo '<input type="hidden" name="v120" value="'.$verim120.'" />';
echo '<input type="hidden" name="v121" value="'.$verim121.'" />';
echo '<input type="hidden" name="v122" value="'.$verim122.'" />';
echo '<input type="hidden" name="v123" value="'.$verim123.'" />';
echo '<input type="hidden" name="v124" value="'.$verim124.'" />';
echo '<input type="hidden" name="v125" value="'.$verim125.'" />';
echo '<input type="hidden" name="v126" value="'.$verim126.'" />';
//echo '<input type="hidden" name="v127" value="'.$devirbebek.'" />';
echo '<input type="hidden" name="v128" value="'.$verim128.'" />';
echo '<input type="hidden" name="v129" value="'.$verim129.'" />';
echo '<input type="hidden" name="v130" value="'.$verim130.'" />';
echo '<input type="hidden" name="v131" value="'.$verim131.'" />';
echo '<input type="hidden" name="v132" value="'.$verim132.'" />';
echo '<input type="hidden" name="v133" value="'.$verim133.'" />';
echo '<input type="hidden" name="v134" value="'.$verim134.'" />';
echo '<input type="hidden" name="v135" value="'.$verim135.'" />';
//echo '<input type="hidden" name="v136" value="'.$devirlohusa.'" />';
echo '<input type="hidden" name="v137" value="'.$verim137.'" />';
echo '<input type="hidden" name="v138" value="'.$verim138.'" />';
echo '<input type="hidden" name="v139" value="'.$verim139.'" />';
echo '<input type="hidden" name="v140" value="'.$verim140.'" />';
echo '<input type="hidden" name="v141" value="'.$verim141.'" />';
echo '<input type="hidden" name="v142" value="'.$verim142.'" />';
echo '<input type="hidden" name="v143" value="'.$verim143.'" />';
//echo '<input type="hidden" name="v144" value="'.$devircocuk.'" />';
echo '<input type="hidden" name="v145" value="'.$verim145.'" />';
echo '<input type="hidden" name="v146" value="'.$verim146.'" />';
echo '<input type="hidden" name="v147" value="'.$verim147.'" />';
echo '<input type="hidden" name="v148" value="'.$verim148.'" />';
echo '<input type="hidden" name="v149" value="'.$verim149.'" />';
echo '<input type="hidden" name="v150" value="'.$verim150.'" />';
echo '<input type="hidden" name="v151" value="'.$verim151.'" />';
echo '<input type="hidden" name="v152" value="'.$verim152.'" />';
echo '<input type="hidden" name="v153" value="'.$verim153.'" />';
echo '<input type="hidden" name="v154" value="'.$verim154.'" />';
echo '<input type="hidden" name="v155" value="'.$verim155.'" />';
echo '<input type="hidden" name="v156" value="'.$verim156.'" />';
echo '<input type="hidden" name="v157" value="'.$verim157.'" />';
echo '<input type="hidden" name="v158" value="'.$verim158.'" />';
echo '<input type="hidden" name="v159" value="'.$verim159.'" />';
echo '<input type="hidden" name="v160" value="'.$verim160.'" />';
echo '<input type="hidden" name="v161" value="'.$verim161.'" />';
echo '<input type="hidden" name="v162" value="'.$verim162.'" />';
echo '<input type="hidden" name="v163" value="'.$verim163.'" />';
echo '<input type="hidden" name="v164" value="'.$verim164.'" />';
echo '<input type="hidden" name="v165" value="'.$verim165.'" />';
echo '<input type="hidden" name="v166" value="'.$verim166.'" />';
echo '<input type="hidden" name="v167" value="'.$verim167.'" />';
echo '<input type="hidden" name="v168" value="'.$verim168.'" />';
echo '<input type="hidden" name="v169" value="'.$verim169.'" />';
echo '<input type="hidden" name="v170" value="'.$verim170.'" />';
echo '<input type="hidden" name="v171" value="'.$verim171.'" />';
echo '<input type="hidden" name="v172" value="'.$verim172.'" />';
/*echo '<input type="hidden" name="v173" value="'.$verim173.'" />';
echo '<input type="hidden" name="v174" value="'.$verim174.'" />';
echo '<input type="hidden" name="v175" value="'.$verim175.'" />';
echo '<input type="hidden" name="v176" value="'.$verim176.'" />';
echo '<input type="hidden" name="v177" value="'.$verim177.'" />';
echo '<input type="hidden" name="v178" value="'.$verim178.'" />';*/

//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
//echo '</form>';
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysql_query("select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
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
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

?>
<a href=# onClick="kontrol();"><img src="images/geri.png"></a></th>
	<th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow">Aylık Toplam Görüntüleme Ekranı</font></th>
	<th class="style6" width="25%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value=" PDF Yazdır "/>
	<? 
	echo '</form>';
	?>	</th>
	<th class="style6" width="25%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">
	<?php
echo '<form action="/excelmysql/013Bayxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="Excel Yazdır"/>

<?
echo '</form>';
?></th>	
<th class="style6" width="25%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">
	<?php
echo '<form action="/excelmysql/kumasioranxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
	<input name="SUBMIT2" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="Ay"/>
	<?
echo '</form>';
?></th>	
</table>	
  <table width="100%" border="0" class="cizgi">
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
