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
<?php
include('con_023.php');
include('piramitalanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$ocgelenorg=trsuz($ocgelen);

//$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
include('sumay.php');

if($ilgelen!=trsuz($ilsecim) and $ilcegelen==trsuz($ilcesecim)){



//echo $ocgelen;

$ocgelen=$iltopbaslik;

$ocgelenx=trsuz($ocgelen);

//$aygelenx=trsuz($aygelen);



}elseif($ilgelen!=trsuz($ilsecim) and $ilcegelen==trsuz($ilcesecim) and $ocgelen==trsuz($ahsecim)){

$ocgelenx=trsuz($iltopbaslik);

//$aygelenx=trsuz($aygelen);

}else if($ilgelen!=trsuz($ilsecim) and $ilcegelen!=trsuz($ilcesecim) and $ocgelen==trsuz($ahsecim)){

$ocgelen=$ilcetopbaslik;

$ocgelenx=trsuz($ocgelen);

//$aygelenx=trsuz($aygelen);



}elseif($ilgelen!=trsuz($ilsecim) and $ilcegelen!=trsuz($ilcesecim) and $ocgelen!=trsuz($ahsecim)){

$ocgelenx=$ocgelen;

//$aygelenx=trsuz($aygelen);

}else{

$ocgelenx=trsuz($ilcetopbaslik);

//$aygelenx=trsuz($aygelen);

}

// YAŞ GRUBU TOPLAMLARI
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
// MEDENİ HAL TOPLAMLARI
$cocuk=$verim37+$verim42 ;
$bekar=$verim38+$verim43 ;
$evli=$verim39+$verim44 ;
$bosanmis=$verim40+$verim45 ;
$esiolmus=$verim41+$verim46 ;
$mhkt=$verim37+$verim38+$verim39+$verim40+$verim41;
$mhet=$verim42+$verim43+$verim44+$verim45+$verim46;
$mht=$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46;
// ÖĞRENİM DURUMU TOPLAMLARI
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
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="8%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="nufpiryilyg.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
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
?>
<input name="SUBMIT2" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($npbuton); ?>"/></th>
<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<? 
	echo '</form>';
	?>	

<?php
echo '<form action="nufpiryilmh.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT3" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="Medeni Hali"/>
<?
  echo '</form>';
  ?></th>
<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="nufpiryilod.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($odbuton); ?>"/>
<?
  echo '</form>';
  ?></th>	
	<th class="style6" width="52%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($aygorbaslik); ?></font></th>
	
	</th>
	<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

	<?php
echo '<form action="npbuyukyaz.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($buyuknpbuton); ?>"/>
<?
  echo '</form>';
  ?></th>
	<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
	<?php
echo '<form action="/excelmysql/npyilxls.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($excelbaslik); ?>"/>
<?
echo '</form>';
?></th>	
<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php echo '<form action="kurumpdfay.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($pdfbaslik); ?>"/>
 


<?
echo '</form>';
?></th>

</table>	
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
    <th width="27%" align="center"bordercolor="#000000" bgcolor="white" class="style5" colspan="4"></th>
</tr>
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($ygbaslik); ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yasgrubu); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($sifiryas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim1  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim19  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $sifir  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($besyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim2  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim20  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim3  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim21  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $on  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onbesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim4  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim22  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $onbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmiyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim5  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim23  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yirmi  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmibesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim6  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim24  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yirmibes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim7  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim25  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $otuz  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzbesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim8  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim26  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $otuzbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim9  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim27  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $kirk  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkbesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim10  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim28  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $kirkbes  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($elliyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim11  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim29  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $elli  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ellibesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim12  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim30  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ellibes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim13  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim31  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $atmis  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisbesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim14  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim32  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $atmisbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim15  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim33  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yetmis  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisbesyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim16  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim34  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yetmisbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenyas); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim17  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim35  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $seksen  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenbesyas); ?></th>
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
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($mhalbaslik); ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($medenihali); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhcocuk); ?></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhevli); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim39  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim44  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $evli  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhbosanmis); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim40  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim45  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bosanmis  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhesiolmus); ?></th>
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
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($odurbaslik); ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ogrenimdurumu); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odocd); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim47  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim54  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ocd  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odoyd); ?></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odilk); ?></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odlise); ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim52  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim59  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $lise  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odyo); ?></th>
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
