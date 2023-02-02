<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Untitled Document</title>

<link href="Style.css" rel="stylesheet" type="text/css"/>

<script language="JavaScript" src="toplama.js" type="text/javascript">

</script>	

<script language="JavaScript" src="degistir.js" type="text/javascript">

</script>	

</head>



<body>

<?php

include('con_023.php');
include('abealanlari.php');

$ilgelen=$_GET['selectil']; 

$ilcegelen=iconv("UTF-8", "ISO-8859-9",$_GET['selectilce']); 

$ocgelen=iconv("UTF-8", "ISO-8859-9",$_GET['selectoc']); 

$ilcegelenorg=trsuz($ilcegelen);

$ocgelenorg=trsuz($ocgelen);

$yilgelen=$_GET['selectyil'];

$aygelen=$_GET['selectay']; 

$ilkgelen=$_GET['selecttarilk']; 

$songelen=$_GET['selecttarson']; 

$tarihilkal=substr($ilkgelen,0,10);

$tarihsonal=substr($songelen,0,10);

//$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

include('sumaralik.php');

//include('deviray.php');

/*echo $ilgelen ;

echo $ilcegelen ;

echo $ocgelen ;

echo $yilgelen ;

echo $aygelen ;*/

$resultvyil = @mysql_query("select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen')") ;

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

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceninadi=$ilcesonucum['ilcead'];

}

?>

<br>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">

<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php

echo '<form action="aralikpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelenorg.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelenorg.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($aygelen).'" />';

echo '<input type="hidden" name="selecttarilk" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilkgelen.'" />';

echo '<input type="hidden" name="selecttarson" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$songelen.'" />';



//echo '<input type="hidden" name="v1" value="'.$adnks.'" />';

//echo '<input type="hidden" name="v2" value="'.$tahbebek.'" />';

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
echo '<input type="hidden" name="v173" value="'.$verim173.'" />';
echo '<input type="hidden" name="v174" value="'.$verim174.'" />';
echo '<input type="hidden" name="v175" value="'.$verim175.'" />';
echo '<input type="hidden" name="v176" value="'.$verim176.'" />';
echo '<input type="hidden" name="v177" value="'.$verim177.'" />';
echo '<input type="hidden" name="v178" value="'.$verim178.'" />';


?>
<input name="SUBMIT2" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($pdfbaslik); ?>"/>
<?php

echo '</form></th><th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">';

echo '<form action="topgrafikaralik.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelenorg.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelenorg.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

echo '<input type="hidden" name="selecttarilk" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilkgelen.'" />';

echo '<input type="hidden" name="selecttarson" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$songelen.'" />';

?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($topgrafciz); ?>"/>
<?

echo '</form>';

?></th>

<th class="style6" width="52%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($tarihgorbaslik); ?></font></th>

<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php

echo '<form action="grafikaralik.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelenorg.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelenorg.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

echo '<input type="hidden" name="selecttarilk" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilkgelen.'" />';

echo '<input type="hidden" name="selecttarson" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$songelen.'" />';

?><input TYPE="SUBMIT" value="<?php echo trsuz($icdgrafciz); ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/>
<?php

echo '</form></th><th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">';

echo '<form action="/excelmysql/abearalikxls.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ilgelen).'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelenorg.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelenorg.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($aygelen).'" />';

echo '<input type="hidden" name="selecttarilk" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilkgelen.'" />';

echo '<input type="hidden" name="selecttarson" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$songelen.'" />';

?>
<input name="SUBMIT3" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($excelbaslik); ?>"/>
<?

echo '</form>';

?>

<?php
/*
if($ilcegelen==trsuz($ilcesecim)){

$ilkod=substr(trim($socadi),0,2);

}elseif($ocgelen==trsuz($ahsecim)){

$ilkod=substr(trim($socadi),0,2);

$ilcekod=substr(trim($socadi),3,2);



}elseif($ilcegelen!=trsuz($ilcesecim) and $ocgelen!=trsuz($ahsecim)){

$ilkod=substr(trim($ocgelen),0,2);

$ilcekod=substr(trim($ocgelen),3,2);

$ahkod=substr(trim($ocgelen),6,3);



}else{

$ilkod=substr(trim($socadi),0,2);

$ilcekod=substr(trim($socadi),3,2);

$ahkod=substr(trim($socadi),6,3);



}*/

if($ilcegelen==trsuz($ilcesecim)){

$ililce=$ilinadi;

$kurum=$iltopbaslik;

$top=$iltopbaslik;

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and socad like '%HSM' or ilinad='$ilgelen' and socad='')");

while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){

$asead=$sorumlusonucum['aseadi'];

$aseunv=$sorumlusonucum['aseunvan'];

$drad=$sorumlusonucum['dradi'];

$onkurum=$sorumlusonucum['asmadi'];

$onsor="Sorumlusu";

$ahkodum=$onkurum.' '.$onsor;



//$ilceninadi=$ilinadi.' '.$iltoplami ;

}

}elseif($ocgelen==trsuz($ahsecim)){

$ililce=$ilinadi.'-'.$ilceninadi;

$kurum=$ilcetopbaslik;

$top=$ilcetopbaslik;

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");



while($ilcesonucum=mysql_fetch_array($ilceadi)){



$ilceno=$ilcesonucum['ilceid'];





}

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='')");



while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){

$asead=$sorumlusonucum['aseadi'];

$aseunv=$sorumlusonucum['aseunvan'];

$drad=$sorumlusonucum['dradi'];

$onkurum=$sorumlusonucum['asmadi'];

$onsor="Sorumlusu";

$ahkodum=$onkurum.' '.$onsor;

}

}elseif($ilcegelen!=trsuz($ilcesecim) and $ocgelen!=trsuz($ahsecim)){

$ililce=$ilinadi.'-'.$ilceninadi;

$top=$kbbaslik;

$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelenx')order by dradi asc";

  $sonucak=mysql_query($sql);

    while($satir=mysql_fetch_array($sonucak))

{

$asmninadine=$satir['asmadi'];

if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){

	$kurum=$asmninadine;

	}else{

	if(substr($ocgelen,-3)!="TSM"){

	$ahb="Aile Hekimliği Birimi";

	}

if(substr($ocgelen,-3)=="TSM"){

	$kurum=$asmninadine ;

	}else{	

	$kurum=$asmninadine.' - '.$ocgelen.' '.$ahb ;

	}

	}

//@mysql_close($conn);

$onkurum=$satir['socad'];

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

$ahkodum=$onkurum.' '.$ahno;

}

}else{

$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelenx')order by dradi asc";

  $sonucak=mysql_query($sql);

    while($satir=mysql_fetch_array($sonucak))

{

$asmninadine=$satir['asmadi'];



//@mysql_close($conn);

$onkurum=$satir['socad'];

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

$ahkodum=$onkurum.' '.$ahno;

}

}

?></th>

</table>

	<br>

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

    <tr>

    <th width="27%" align="center"bordercolor="#000000" bgcolor="white" class="style5"><? $aralik=$tariharasi; echo '<font size="3" family="Arial"><label>'.trsuz($ilinadi).'-'.trsuz($ilceninadi).'-'.trsuz($kurum).'-'.$tarihilkal.'-'.$tarihsonal.' '.trsuz($aralik).' '.trsuz($top).'</label></font>' ; ?></th>
</tr>
</table> 

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

    <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.trsuz($ililce).'</font>' ;?></th>
  </tr>

  <tr>

     <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo trsuz($kurumbaslik); ?></th>

	 <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.trsuz($kurum).'</font>' ;?></th>
  </tr>

  <tr>

    <th  width="12%" align="left"bordercolor="white"colspan="1"><?php echo trsuz($donembaslik); ?></th>

    <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.$tarihilkal.'-'.$tarihsonal.'</font>' ;?></th>
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