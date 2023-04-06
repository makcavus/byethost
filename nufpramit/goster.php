<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{

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
<script language="JavaScript" src="degistir.js" type="text/javascript">

</script>	

</head>



<body>

<?php 

include('../con_023.php');
include('../con_etf.php');
include('piramitalanlari.php');

$ahekgelen=$_GET['ahekkod'];

$ilgelen=$_GET['selectil']; 

$ilcegelen=$_GET['selectilce']; 

$ocgelen=$_GET['selectoc']; 

$yilgelen=$_GET['selectyil'];

/*echo $ilgelen ;

echo $ilcegelen ;

echo $ocgelen ;

echo $yilgelen ;

echo $aygelen ;*/



?>

<?php



$resultvyil = @mysqli_query($dbh_etf,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;

while($sonucum=mysqli_fetch_array($resultvyil)){

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

}

// YA� GRUBU TOPLAMLARI
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
// MEDEN� HAL TOPLAMLARI
$cocuk=$verim37+$verim42 ;
$bekar=$verim38+$verim43 ;
$evli=$verim39+$verim44 ;
$bosanmis=$verim40+$verim45 ;
$esiolmus=$verim41+$verim46 ;
$mhkt=$verim37+$verim38+$verim39+$verim40+$verim41;
$mhet=$verim42+$verim43+$verim44+$verim45+$verim46;
$mht=$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46;
// ��REN�M DURUMU TOPLAMLARI
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

<body>

<?php

$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");

while($ilsonucum=mysqli_fetch_array($iladi)){

$ilinadi=$ilsonucum['ilad'];

}

?>

<?php

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");

while($ilcesonucum=mysqli_fetch_array($ilceadi)){

$ilceninadi=$ilcesonucum['ilcead'];

}

$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;

while($duztarih=mysqli_fetch_array($atarih)){

$dtarih=$duztarih['yeni_tarih'];

}

$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;

while($ontarih=mysqli_fetch_array($btarih)){

$otarih=$ontarih['yeni_tarih'];

}

?>



<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">

<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onclick="kontrol();"><img src="images/geri.PNG" /></a></th>

<?php

echo '<form action="kurumpdfay.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

//echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

?><th class="style6" width="13%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="<?php echo $pdfbaslik ; ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/><div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get">

</th><?php

echo '</form>';

?>
	<th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><?php echo $kayitgorbaslik ; ?></font></th>
<?php

echo '<form action="/excelmysql/npyilxls.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

//echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

?>

<th class="style6" width="50%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $excelbaslik ; ?>"/></th>

<?php

echo '</form>';

?>	
	<?php

	$kim=$_SESSION["uye"];
$resultx = @mysqli_query($dbh_etf,"select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysqli_fetch_array($resultx)) {
$kod=substr($xkod['uyekod'],0,5);
$kodhsm=substr($xkod['uyekod'],0,2);

//echo $kod;

}
$resultkod = @mysqli_query($dbh_etf,"select socad from ocak where(select left(socad,5)='$kod') order by socad asc");
while($rowkod=mysqli_fetch_array($resultkod)) {
$kodbu=substr($rowkod['socad'],0,5);
//echo $kodbu;
} 	

	if($kod==substr($ocgelen,0,5) and $ahekgelen==$ocgelen or $kod==substr($ocgelen,0,5) and substr($ahekgelen,-3,3)=="TSM" or $kodhsm==substr($ocgelen,0,2) and substr($ahekgelen,-3,3)=="HSM"){

	echo '<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00""><a href=# onClick="deg();"><img src="images/degistir.png"></a></th>';	

	echo '<th class="style6" width="13%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.png"></a></th>';

	}else{

echo '<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00""></th>';	

	echo '<th class="style6" width="13%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"></th>';

	}

	?>	

</table>

<div id="sifre" class="giris_zemin">
		  
		  <form action="onay.php" method="post" name="giris" id="giris">
		    <table width="100" border="0">
              
<?php 
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></th>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">Kay�t Silme Onay�</font></strong></th>';	
echo '</tr>';
echo '</table>';	
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th class="style6" rowspan="2" align="center"><img src="images/siluyar.jpg"></th>';
echo '<th class="style6" align="center" height="30" colspan="2"><font size="2px" style="color:red" face="tahoma">Bu Kayd� Silmek �stedi�inize Emin misiniz?</font></th>';
echo '</tr>';
echo '<tr>';
echo '<th class="style6" align="center"><a href="#" tabindex="1" title="hayir" onClick="git();"><img src="images/hayir.png"></a></th>';
echo '<th class="style6" align="center"><a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a></th>';
echo '</tr>';

?>
              
           </table>
	
		  </form>
		</div>
	<div id="fon" class="arka_fon"></div>



	 <table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
    <th width="27%" align="center" bordercolor="#000000" bgcolor="white" class="style5" colspan="4">
      <?php $top="KURUM/A.HEK.B�R�M� DEMOGRAF�K VER�LER�"; echo '<font size="3" family="Arial"><label>'.$ilinadi.'-'.$ilceninadi.'-'.$socadi.'-'.$yilgelen.' '.$top.'</label></font>' ; ?></th>
</tr>
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo $ygbaslik ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $yasgrubu ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $sifiryas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim1  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim19  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $sifir  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $besyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim2  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim20  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $onyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim3  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim21  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $on  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $onbesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim4  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim22  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $onbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $yirmiyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim5  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim23  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yirmi  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $yirmibesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim6  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim24  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yirmibes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $otuzyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim7  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim25  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $otuz  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $otuzbesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim8  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim26  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $otuzbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $kirkyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim9  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim27  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $kirk  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $kirkbesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim10  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim28  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $kirkbes  ; ?></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $elliyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim11  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim29  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $elli  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $ellibesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim12  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim30  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ellibes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $atmisyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim13  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim31  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $atmis  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $atmisbesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim14  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim32  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $atmisbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $yetmisyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim15  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim33  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yetmis  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $yetmisbesyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim16  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim34  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $yetmisbes  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $seksenyas ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim17  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim35  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $seksen  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $seksenbesyas ; ?></th>
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
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo $mhalbaslik ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $medenihali ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $mhcocuk ; ?></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $mhevli ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim39  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim44  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $evli  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $mhbosanmis ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim40  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim45  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $bosanmis  ; ?></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $mhesiolmus ; ?></th>
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
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo $odurbaslik ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $ogrenimdurumu ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $odocd ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim47  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim54  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $ocd  ; ?></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $odoyd ; ?></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $odilk ; ?></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $odlise ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><?php echo $verim52  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><?php echo $verim59  ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><?php echo $lise  ; ?></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo $odyo ; ?></th>
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
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo $duzadbaslik ; ?></th>
       <th class="style5" align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim173 ; ?></th>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo $onadbaslik ; ?></th>
       <th class="style5" width="27%" align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim176 ; ?></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo $duzunbaslik ; ?></th>
       <th class="style5" align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim174 ; ?></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo $onunbaslik ; ?></th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $verim177 ; ?></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $a; ?></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><?php echo $a;?></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo $duzimzabaslik ; ?></th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo $onimzabaslik ; ?></th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table> 
   <?php
}
?>
   </form>
  