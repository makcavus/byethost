<?php header("Cache-Control: no-cache,no-store");
//echo rand();
function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

?>
<?
include("con_023.php");
$countryId=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$stateId=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocak=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yil=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 

/*echo $countryId ;
echo $stateId ;
echo $ocak ;
echo $yil ;
echo $ay ;*/
?>
<?php
$iladi=@mysql_query("select * from il where(ilid='$countryId')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>
<?php
//ABE Formu doldurldu mu?
$abesec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vayadi='$ay')";
$abesorgu=mysql_query($abesec);
$abesay=mysql_num_rows($abesorgu);

$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysql_query($kachast);
$kachastsay=mysql_num_rows($hastsorgula);
//echo $kachastsay;

$vtsec="select * from veriage where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vayadi='$ay')";
$socsorgu=mysql_query($vtsec);
$say=mysql_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar="Il Seçilmedi";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId == "Ýlçe Seçiniz" and $say<1){
$uyar="Ilçe Seçilmedi.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != "Ýlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
$uyar="Aile Hekimi/Kurum Seçilmedi.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != "Ýlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $abesay!=$kachastsay and $say==0){
$uyar="Öncelikle ABE Veri Giriþlerini Tamamlamalýsýnýz.";
echo '<font style="color:Green">'.$uyar.'<br></font>' ;
echo '<a href="../abe/frm023kayit.php"><img src="../images/abekekle.png"></a>';
}
elseif($countryId !="" and $stateId != "Ýlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $abesay>0 and $say<1){
$uyar="";
echo '<font style="color:Green">'.$uyar.'</font>' ;
echo '<a href=# onClick="ykay();"><img src="../images/kekle.png"></a>';
}else{
$uyar="BU KAYIT YAPILMIÞ...";
//echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
//echo '<label><font size="2px" face="tahoma">'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocakyazi.'</FONT>-'.$yil.'-'.$ay.'&nbsp;&nbsp;&nbsp;&nbsp;</font></label>';
//$degsayfa="http://localhost/form023/frm023degistir.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$baksayfa="http://localhost/form023/cerceve1.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$silsayfa="http://localhost/form023/023sil.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//echo '<form action="frm023degistir.php" method="get" name="gor">' ;
//echo $yeni_url;
/*echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="ocgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="yilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="aygelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';*/
?>
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
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>	
</head>

<body>
<?php 
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$xaygelentam=iconv("UTF-8", "ISO-8859-9",$_GET['selectay']); 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,0,2);
$xaygelentarihay=substr($xaygelentarih,3,2);
$xaygelentarihyil=substr($xaygelentarih,6,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
//include('devir.php');
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
/*echo '<form action="form023pdf.php" method="get" name="gor">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';*/
?>


<?php

$resultvyil = @mysql_query("select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
$verim1=$sonucum['v1'];
$verim2=$sonucum['v2'];
$verim3=$sonucum['v3'];
$verim4=$sonucum['v4'];
$verim5=$sonucum['v5'];
$verim6=$sonucum['v6'];
$verim7=$sonucum['v7'];
$verim8=$sonucum['v8'];
$verim9=$sonucum['v9'];
$verim10=$sonucum['v10'];
$verim11=$sonucum['v11'];
$verim12=$sonucum['v12'];
$verim13=$sonucum['v13'];
$verim14=$sonucum['v14'];
$verim15=$sonucum['v15'];
$verim16=$sonucum['v16'];
$verim17=$sonucum['v17'];
$verim18=$sonucum['v18'];
$verim19=$sonucum['v19'];
$verim20=$sonucum['v20'];
$verim21=$sonucum['v21'];
$verim22=$sonucum['v22'];
$verim23=$sonucum['v23'];
$verim24=$sonucum['v24'];
$verim25=$sonucum['v25'];
$verim26=$sonucum['v26'];
$verim27=$sonucum['v27'];
$verim28=$sonucum['v28'];
$verim29=$sonucum['v29'];
$verim30=$sonucum['v30'];
$verim31=$sonucum['v31'];
$verim32=$sonucum['v32'];
$verim33=$sonucum['v33'];
$verim34=$sonucum['v34'];
$verim35=$sonucum['v35'];
$verim36=$sonucum['v36'];
$verim37=$sonucum['v37'];
$verim38=$sonucum['v38'];
$verim39=$sonucum['v39'];
$verim40=$sonucum['v40'];
$verim41=$sonucum['v41'];
$verim42=$sonucum['v42'];
$verim43=$sonucum['v43'];
$verim44=$sonucum['v44'];
$verim45=$sonucum['v45'];
$verim46=$sonucum['v46'];
$verim47=$sonucum['v47'];
$verim48=$sonucum['v48'];
$verim49=$sonucum['v49'];
$verim50=$sonucum['v50'];
$verim51=$sonucum['v51'];
$verim52=$sonucum['v52'];
$verim53=$sonucum['v53'];
$verim54=$sonucum['v54'];
$verim55=$sonucum['v55'];
$verim56=$sonucum['v56'];
$verim57=$sonucum['v57'];
$verim58=$sonucum['v58'];
$verim59=$sonucum['v59'];
$verim60=$sonucum['v60'];
$verim61=$sonucum['v61'];
$verim62=$sonucum['v62'];
$verim63=$sonucum['v63'];
$verim64=$sonucum['v64'];
$verim65=$sonucum['v65'];
$verim66=$sonucum['v66'];
$verim67=$sonucum['v67'];
$verim68=$sonucum['v68'];
$verim69=$sonucum['v69'];
$verim70=$sonucum['v70'];
$verim71=$sonucum['v71'];
$verim72=$sonucum['v72'];
$verim73=$sonucum['v73'];
$verim74=$sonucum['v74'];
$verim75=$sonucum['v75'];
$verim76=$sonucum['v76'];
$verim77=$sonucum['v77'];
$verim78=$sonucum['v78'];
$verim79=$sonucum['v79'];
$verim80=$sonucum['v80'];
$verim81=$sonucum['v81'];
$verim82=$sonucum['v82'];
$verim83=$sonucum['v83'];
$verim84=$sonucum['v84'];
$verim85=$sonucum['v85'];
$verim86=$sonucum['v86'];
$verim87=$sonucum['v87'];
$verim88=$sonucum['v88'];
$verim89=$sonucum['v89'];
$verim90=$sonucum['v90'];
$verim91=$sonucum['v91'];
$verim92=$sonucum['v92'];
$verim93=$sonucum['v93'];
$verim94=$sonucum['v94'];
$verim95=$sonucum['v95'];
$verim96=$sonucum['v96'];
$verim97=$sonucum['v97'];
$verim98=$sonucum['v98'];
$verim99=$sonucum['v99'];
$verim100=$sonucum['v100'];
$verim101=$sonucum['v101'];
$verim102=$sonucum['v102'];
$verim103=$sonucum['v103'];
$verim104=$sonucum['v104'];
$verim105=$sonucum['v105'];
$verim106=$sonucum['v106'];
$verim107=$sonucum['v107'];
$verim108=$sonucum['v108'];
$verim109=$sonucum['v109'];
$verim110=$sonucum['v110'];
$verim111=$sonucum['v111'];
$verim112=$sonucum['v112'];
$verim113=$sonucum['v113'];
$verim114=$sonucum['v114'];
$verim115=$sonucum['v115'];
$verim116=$sonucum['v116'];
$verim117=$sonucum['v117'];
$verim118=$sonucum['v118'];
$verim119=$sonucum['v119'];
$verim120=$sonucum['v120'];
$verim121=$sonucum['v121'];
$verim122=$sonucum['v122'];
$verim123=$sonucum['v123'];
$verim124=$sonucum['v124'];
$verim125=$sonucum['v125'];
$verim126=$sonucum['v126'];
$verim127=$sonucum['v127'];
$verim128=$sonucum['v128'];
$verim129=$sonucum['v129'];
$verim130=$sonucum['v130'];
$verim131=$sonucum['v131'];
$verim132=$sonucum['v132'];
$verim133=$sonucum['v133'];
$verim134=$sonucum['v134'];
$verim135=$sonucum['v135'];
$verim136=$sonucum['v136'];
$verim137=$sonucum['v137'];
$verim138=$sonucum['v138'];
$verim139=$sonucum['v139'];
$verim140=$sonucum['v140'];
$verim141=$sonucum['v141'];
$verim142=$sonucum['v142'];
$verim143=$sonucum['v143'];
$verim144=$sonucum['v144'];
$verim145=$sonucum['v145'];
$verim146=$sonucum['v146'];
$verim147=$sonucum['v147'];
$verim148=$sonucum['v148'];
$verim149=$sonucum['v149'];
$verim150=$sonucum['v150'];
$verim151=$sonucum['v151'];
$verim152=$sonucum['v152'];
$verim153=$sonucum['v153'];
$verim154=$sonucum['v154'];
$verim155=$sonucum['v155'];
$verim156=$sonucum['v156'];
$verim157=$sonucum['v157'];
$verim158=$sonucum['v158'];
$verim159=$sonucum['v159'];
$verim160=$sonucum['v160'];
$verim161=$sonucum['v161'];
$verim162=$sonucum['v162'];
$verim163=$sonucum['v163'];
$verim164=$sonucum['v164'];
$verim165=$sonucum['v165'];
$verim166=$sonucum['v166'];
$verim167=$sonucum['v167'];
$verim168=$sonucum['v168'];
$verim169=$sonucum['v169'];
$verim170=$sonucum['v170'];
$verim171=$sonucum['v171'];
$verim172=$sonucum['v172'];
$verim173=$sonucum['v173'];
$verim174=$sonucum['v174'];
$verim175=$sonucum['v175'];
$verim176=$sonucum['v176'];
$verim177=$sonucum['v177'];
$verim178=$sonucum['v178'];
if($verim42==0){$verim42=""; }else{$verim42=$verim42;}
if($verim44==0){$verim44=""; }else{$verim44=$verim44;}
if($verim46==0){$verim46=""; }else{$verim46=$verim46;}
if($verim48==0){$verim48=""; }else{$verim48=$verim48;}
if($verim50==0){$verim50=""; }else{$verim50=$verim50;}
if($verim52==0){$verim52=""; }else{$verim52=$verim52;}
if($verim54==0){$verim54=""; }else{$verim54=$verim54;}
if($verim56==0){$verim56=""; }else{$verim56=$verim56;}
if($verim58==0){$verim58=""; }else{$verim58=$verim58;}
if($verim60==0){$verim60=""; }else{$verim60=$verim60;}
if($verim62==0){$verim62=""; }else{$verim62=$verim62;}
if($verim64==0){$verim64=""; }else{$verim64=$verim64;}
if($verim66==0){$verim66=""; }else{$verim66=$verim66;}
if($verim68==0){$verim68=""; }else{$verim68=$verim68;}
if($verim70==0){$verim70=""; }else{$verim70=$verim70;}
if($verim72==0){$verim72=""; }else{$verim72=$verim72;}
if($verim74==0){$verim74=""; }else{$verim74=$verim74;}
if($verim76==0){$verim76=""; }else{$verim76=$verim76;}
if($verim78==0){$verim78=""; }else{$verim78=$verim78;}
if($verim80==0){$verim80=""; }else{$verim80=$verim80;}

if($verim83==0){$verim83=""; }else{$verim83=$verim83;}
if($verim84==0){$verim84=""; }else{$verim84=$verim84;}
if($verim85==0){$verim85=""; }else{$verim85=$verim85;}
if($verim87==0){$verim87=""; }else{$verim87=$verim87;}
if($verim88==0){$verim88=""; }else{$verim88=$verim88;}
if($verim89==0){$verim89=""; }else{$verim89=$verim89;}
if($verim91==0){$verim91=""; }else{$verim91=$verim91;}
if($verim92==0){$verim92=""; }else{$verim92=$verim92;}
if($verim93==0){$verim93=""; }else{$verim93=$verim93;}
if($verim95==0){$verim95=""; }else{$verim95=$verim95;}
if($verim96==0){$verim96=""; }else{$verim96=$verim96;}
if($verim97==0){$verim97=""; }else{$verim97=$verim97;}
if($verim99==0){$verim99=""; }else{$verim99=$verim99;}
if($verim100==0){$verim100=""; }else{$verim100=$verim100;}
if($verim101==0){$verim101=""; }else{$verim101=$verim101;}
if($verim103==0){$verim103=""; }else{$verim103=$verim103;}
if($verim104==0){$verim104=""; }else{$verim104=$verim104;}
if($verim105==0){$verim105=""; }else{$verim105=$verim105;}
if($verim106==0){$verim106=""; }else{$verim106=$verim106;}
if($verim107==0){$verim107=""; }else{$verim107=$verim107;}
if($verim108==0){$verim108=""; }else{$verim108=$verim108;}
}

?>
<body>
<?php
$iladi=@mysql_query("select * from il where(ilid='$ilim')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
 if($ilcegelen=="Ýlçe Seçiniz"){
$ilkod=substr(trim($socadi),0,2);

}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);

}elseif($ilcegelen!="Ýlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($ocgelen),0,2);
$ilcekod=substr(trim($ocgelen),3,2);
$ahkod=substr(trim($ocgelen),6,3);

}else{
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod=substr(trim($socadi),6,3);

}
?>
<?
include('con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysql_query($sql);
    while($satir=mysql_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysql_close($conn);
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
?>
<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onclick="deg();"><img src="../images/degistir.png" /></a></th>
<th class="style6" width="12%" align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="   Yazdýr   "  style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"/>
<?php
echo '<form action="toplamlar.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
</th> 
<?
echo '</form>';
?>
  <th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="#FFFFCC"><? $baslik='Kayýt Görüntüleme Ekraný'; echo $baslik;?></font></th>
	<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="listele();"><img src="../images/listele.png"></a></th>	
	<th class="style6" width="13%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="onay();"><img src="../images/sil.png"></a></th>
</table>
	<br>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
  <tr>
    <th  width="100%" align="center"bordercolor="white" colspan="20"><font size="3">HASTANE AGE VAKA ARTIÞI (C3-C4 SÝNYALÝ) SORGULAMA FORMU</font></th>
  </tr>
  <tr>
    <th  width="100%" align="center" bordercolor="white" colspan="20">&nbsp;</th>
  </tr>
  <?php
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine.' - '.$ocgelen;
	}
	?>
  <tr>
    <th  width="100%" align="left" colspan="20"><font size="2" family="times new roman" weight="bold">1-Hastaneden</font> A09-R11-K52 <font size="2" family="times new roman" weight="bold">ICD 10 Kodlu hasta listesi alýnýr.</font></th>
</tr>
    <th  width="100%" align="left" colspan="20"><?php $hastaliste="tarihli hasta listesi ektedir."; echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.' '.$kurum.' '.$noktatarih.' '.$hastaliste.'</font>' ;?></th>
  </tr>
  <tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">2-Veri giriþ hatasý olup olmadýðý incelenir.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim1.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">3-Mükerrer kayýt olup olmadýðý incelenir.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim2.'</font>'; ?></th>
  </tr>  
   <tr>
   <tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">4-Ýkamet adresleri dikkatlice kontrol edilerek kümelenme olup olmadýðý araþtýrýlýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim3.'</font>'; ?></th>
  </tr>
  <tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
   <tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">5-Listelerden hastalarýn yaþ gruplarýna göre daðýlýmý aþaðýdaki tablo doldurularak yapýlýr.</font></th>
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
  $hepsifir="Gaita tahlili yapýlmamýþtýr."; 
  }else if($verim26==0 and $verim29==0){
  $kultur="";
  }else if($verim26>=1 and $verim32==0){
$gkdurum="gaita kültürü yapýlmýþtýr.Sonucu henüz belli deðildir.";
  $kultur=$verim26.' '.$gkdurum ;
  }else if($verim26>=1 and $verim32>=1){
  $gkpozcik="kültür sonucu pozitif çýkmýþtýr.";
$gkdurum="gaita kültürü yapýlmýþtýr.";
  $kultur=$verim26.' '.$gkdurum.''.$verim32.' '.$gkpozcik ;
  }
  if($verim27==0 and $verim30==0){
  $parazit="";
  }else if($verim27>=1 and $verim33==0){
$gpdurum="parazit incelemesi yapýlmýþtýr.Parazit inceleme sonucu negatiftir.";
  $parazit=$verim27.' '.$gpdurum ;
  }else if($verim27>=1 and $verim33>=1){
  $gppozcik="parazit inceleme sonucu pozitif çýkmýþtýr.";
$gpdurum="parazit incelemesi yapýlmýþtýr.";
  $parazit=$verim27.' '.$gpdurum.''.$verim33.' '.$gppozcik ;
  }
  if($verim28==0 and $verim31==0){
  $viral="";
  }else if($verim28>=1 and $verim34==0){
$gvdurum="viral etken incelemesi yapýlmýþtýr.Viral etken inceleme sonucu negatiftir.";
  $viral=$verim28.' '.$gvdurum ;
  }else if($verim28>=1 and $verim34>=1){
  $gvpozcik="viral etken inceleme sonucu pozitif çýkmýþtýr.";
$gvdurum="viral etken incelemesi yapýlmýþtýr.";
  $viral=$verim28.' '.$gvdurum.''.$verim34.' '.$gvpozcik ;
  }
  ?>
</table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">6-Yaþ gruplarý da dikkate alýnarak kreþ,anaokulu,okul,üniversite,lokanta,alýþveriþ merkezi,otel,doðum günü,miting,mevlit ve düðün gibi yemek yenilen toplu organizasyonda bulunup bulunmadýðý araþtýrýlýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim22.'</font>'; ?></th>
  </tr>  
<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">7-Ayný aileye mensup kiþiler olup olmadýðý araþtýrýlýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim23.'</font>'; ?></th>
  </tr>
	<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
	</tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">8-Hastalarýn meslek gruplarý sorgulanýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim25.'</font>'; ?></th>
  </tr>
  <tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">9-Hastaneye baþvuran hastalardan gaita mikroskopisi ve kültürü yapýlýp,yapýlmadýðý araþtýrýlýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$hepsifir.''.$kultur.''.$parazit.''.$viral.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">10-AGE þikayetleri ile hastaneye baþvuran hastalardan kaçýnýn ayaktan kaç tanesinin yatarak tedavi edildiði,yatarak tedavi gören hastalarýn genel durumlarýnýn kötü olup olmadýðý sorgulanmalýdýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim35.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">11-Klinisyenden olay/etken/hastalýk hakkýnda görüþ alýnýr.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim36.'</font>'; ?></th>
  </tr>
<tr>
<th  width="100%" align="center" colspan="20">&nbsp;</th>
  </tr>
	<tr>
    <th  width="100%" align="left" bordercolor="white"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold">12-Geçmiþ 2 aylýk su numune sonuçlarý ile þimdiki klor bakiye sonucu kontrol edilirTüm sonuç raporlarý eklenerek Erken Uyarý-Cevap Birimine gönderilir.</font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim37.'</font>'; ?></th>
  </tr>		 		 
</table>	 
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="YELLOW">DEÐERLENDÝRME RAPORU BÖLÜMÜ</th>  
</tr>
<tr>
  <th  width="100%" align="left" colspan="20" class="style5"><?php echo '<font size="3" family="Arial">'.$verim38.'</font>'; ?></th>
  </tr>		
<tr>
  <th  width="100%" align="left" colspan="20"><?php echo '<font size="3" family="Arial">'.$verim40.'</font>'; ?></th>
  </tr>		  
</table> 
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr>
	<th width="100%" align="center" colspan="20" class="style5">HASTALARIN ÝKAMET ADRESLERÝNE GÖRE DAÐILIMI</th>
  </tr>
       <tr>
 <th width="25%" align="left" colspan="5" class="style5">YERLEÞÝM YERÝ</th>
 <th width="25%" align="center" colspan="5" class="style5">ÝKAMET EDEN SAYISI</th>
 <th width="25%" align="left" colspan="5" class="style5">YERLEÞÝM YERÝ</th>
 <th width="25%" align="center" colspan="5" class="style5">ÝKAMET EDEN SAYISI</th> 
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
    <th width="100%" align="center" bordercolor="white" colspan="20">&nbsp;</th>
  </tr>
</table>

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr>
	<th width="100%" align="center" colspan="20" class="style5">HASTALARIN BAÞVURDUÐU POLÝKLÝNÝÐE GÖRE DAÐILIMI</th>
  </tr>
       <tr>
 <th width="25%" align="left" colspan="5" class="style5">POLÝKLÝNÝK ADI</th>
 <th width="25%" align="center" colspan="5" class="style5">BAÞVURU SAYISI</th>
 <th width="25%" align="left" colspan="5" class="style5">MÜÞAHADE AMACIYLA YATIRILAN HASTA</th>
 <th width="25%" align="center" colspan="5" class="style5">SERVÝSE YATIRILAN HASTA</th> 
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
$verideg="Hastane AGE Vaka Artýþý Sorgulama Formu ve yukarýdaki veriler deðerlendirildiðinde";
$digerhast="Diðer hastanelere ait verilerin normal olduðu görülmektedir.";
$episonuc="Sonuç olarak bu hastanedeki vakalar incelendiðinde epidemiyolojik bakýmdan salgýn niteliði taþýyacak bir durum tesbit edilmemiþtir.";
if(substr($verim1,0,35)=="Veri giriþi hatasý mevcut deðildir." and substr($verim2,0,38)=="Mükerrer kayýt giriþi mevcut deðildir.") {
$artýs="nde";
$sonuchata="hatalý veri giriþi ve mükerrer kayýt giriþi olmadýðý görülmüþtür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri giriþi hatasý mevcut deðildir." and substr($verim2,0,38)=="Mükerrer kayýt giriþi mevcut deðildir."){
$artýs="nde artýþ olmadýðý,";
$sonuchata="hatalý veri giriþinden dolayý vaka sayýsýnýn fazla olduðu görülmüþtür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;
}else if(substr($verim1,0,35)=="Veri giriþi hatasý mevcut deðildir." and substr($verim2,0,38)!="Mükerrer kayýt giriþi mevcut deðildir.") {
$artýs="nde artýþ olmadýðý,";
$sonuchata="mükerrer kayýt giriþinden dolayý vaka sayýsýnýn fazla olduðu görülmüþtür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri giriþi hatasý mevcut deðildir." and substr($verim2,0,38)!="Mükerrer kayýt giriþi mevcut deðildir.") {
$artýs="nde artýþ olmadýðý,";
$sonuchata="hatalý veri giriþi ve mükerrer kayýt giriþinden dolayý vaka sayýsýnýn fazla olduðu görülmüþtür.";
$sonuctop=$kurum.' '.$artýs.' '.$sonuchata;

}
 
 ?>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="YELLOW">SONUÇ BÖLÜMÜ</th>  
</tr>
<tr>
  <th  width="100%" align="left" colspan="20" class="style5"><?php echo '<font size="3" family="Arial">'.$verideg.' '.$sonuctop.' '.$digerhast.' '.$verim22.' '.$verim3.' '.$verim35.' '.$hepsifir.''.$kultur.''.$parazit.''.$viral.' '.$episonuc.' '.$verim109.'</font>'; ?></th>
</tr>		
</table> 
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  
  <?php
include('con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
  $sonucak=mysql_query($sql);
    while($satir=mysql_fetch_array($sonucak))
{
//@mysql_close($conn);
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
?>
<input type="hidden" name="v24" value="0" size="5"/>
<input type="hidden" name="v39" value="0" size="5"/>
 
  
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
    <th  width="24%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">DÜZENLEYEN</th>
    <th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
    <th  width="8%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
	<th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Ad/Soyad</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo $asead ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Ad/Soyad</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo $drad ; ?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Ünvan/Görev</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo $aseunv ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Ünvan/Görev</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><? echo $ahkodum ;?></th>
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
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Ýmza</th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Ýmza</th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
  </tr>
</table>
</form>
</body>
</html>
<?php
//$degsayfa="http://localhost/form023/frm023degistir.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$baksayfa="http://localhost/form023/cerceve1.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$silsayfa="http://localhost/form023/023sil.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//echo '<form action="frm023degistir.php" method="get" name="gor">' ;
//echo $yeni_url;
/*echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="ocgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="yilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="aygelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';*/
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
//echo '<p>';
echo '</form>';
echo '<form action="phpword/samples/AGE_RAPORU.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<th class="style6" width="42%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="deg();"><img src="../images/degistir.png"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="git();"><img src="../images/goster.png"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="onay();"><img src="../images/sil.png"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.trsuz($ocak).'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<th class="style6" width="42%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="   Yazdýr   "  style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"/><div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get"></th>
</table>
<?php
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';
}
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysql_query($kachast);
$kachastsay=mysql_num_rows($hastsorgula);
//echo $kachastsay;
echo '<br>';
$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like '%Dr.%' and v177 like '%Hastane%' and vayadi='$ay')";
$hastverisorgula=mysql_query($kacverihast);
while($hasteksiksonucum=mysql_fetch_array($hastverisorgula)){
$eksikhast=$hasteksiksonucum['vocadi'];
//echo $eksikhast;
}
$hastkacverisay=mysql_num_rows($hastverisorgula);
//echo $hastkacverisay;
if($hastkacverisay==0){
$boshast="Henüz Hastanelere ait veri girilmemiþtir.";
echo "<br>";
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $boshast;?></font></th>
</table>
<?php
}elseif($hastkacverisay>0 and $kachastsay!=$hastkacverisay){
$girilmeyenhast=$kachastsay-$hastkacverisay;
$ahast="Hastaneden";
$bhast="Hastaneye ait veriler girilmemiþtir.";
echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kachastsay." ".$ahast." ".$girilmeyenhast." ".$bhast;?></font></th>
</table>
<?php
}else{
$tamamhast="Bütün Hastanelere ait veri giriþi yapýlmýþtýr.";
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma'><?php echo $tamamhast;?></font></th>
</table>
<?php
}
?>
<?php
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM')";
$sorgula=mysql_query($kacahek);
$kacaheksay=mysql_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veriage where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysql_query($kacveri);
while($eksiksonucum=mysql_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysql_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos="Henüz Aile Hekimlerine ait veri girilmemiþtir.";
echo "<br>";
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $bos;?></font></th>
</table>
<?php
}elseif($kacaheksay!=$kacverisay){
if($kacaheksay==$kacverisay){
$girilmeyenahek="Aile hekimlerine ait veri giriþi yoktur.";
?>
<?php
}else{
$girilmeyenahek=$kacaheksay-$kacverisay;
}
$a="Aile Hekimliði Biriminden";
$b="Aile Hekimliðine ait veriler girilmemiþtir.";
echo "<br>";
?>

<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kacaheksay." ".$a." ".$girilmeyenahek." ".$b;?></font></th>
</table>
<?php
$gelmeyenler="Verileri girilmeyen Aile Hekimliði Birimleri";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='blue'><?php echo $gelmeyenler;?></font></th>
</table>

<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vayadi='$ay'
WHERE veri.vocadi IS NULL";
$etablosu=mysql_query($eksiktablosu);
while($eahsonucum=mysql_fetch_array($etablosu)){
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
$tamam="Bütün Aile Hekimliði Birimlerine ait veri giriþi yapýlmýþtýr.";
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma'><?php echo $tamam;?></font></th>
</table>
<?php
}

@mysql_close($dbh) ;
?>
