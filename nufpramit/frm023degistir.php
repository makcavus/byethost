<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}

?>
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
<script type="text/javascript" src="jquery-latest.min.js"></script> 
    <script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript"> 
        $(function() { 
            $("#masktest").mask("99.99.9999"); 
 $("#masktest1").mask("99.99.9999");
            // Contents of textboxes will be selected when receiving focus. 
            $("input[type=text]") 
                .focus(function() { 
                    $(this).select(); 
                }); 
        }); 
    </script> 
</head>

<body>
<div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get">

<?php
include('con_023.php');
include('piramitalanlari.php');

$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
//include('devir.php');
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysql_query("select * from yg where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
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
?>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="yellow" bgcolor="#FFCC00"><a href=# onClick="kontrol();"><img src="images/iptal.PNG"></a></th>
<th class="style6" width="50%" align="center" bordercolor="white" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($deggorbaslik) ; ?></font></th>
<th class="style6" width="25%" align="right" bordercolor="yellow" bgcolor="FFCC00"><a href=# onClick="girdiyidegistir();"><img src="images/degistir.PNG"></a></th>
</table>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v1" id="v1" type="text" value="<?php echo $verim1  ; ?>"  align="center" size="8" tabindex="1" onchange="toplayg1();" onkeydown="toplayg1();" onmouseout="toplayg1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v19" id="v19" type="text" value="<?php echo $verim19  ; ?>"  align="center" size="8" tabindex="19" onchange="toplayg19();" onkeydown="toplayg1();" onmouseout="toplayg1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg1" id="sonucyg1" type="text" value="<?php echo $sifir  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($besyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v2" id="v2" type="text" value="<?php echo $verim2  ; ?>"  align="center" size="8" tabindex="2" onchange="toplayg2();" onkeydown="toplayg2();" onmouseout="toplayg2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v20" id="v20" type="text" value="<?php echo $verim20  ; ?>"  align="center" size="8" tabindex="20" onchange="toplayg2();" onkeydown="toplayg2();" onmouseout="toplayg2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg2" id="sonucyg2" type="text" value="<?php echo $bes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v3" id="v3" type="text" value="<?php echo $verim3  ; ?>"  align="center" size="8" tabindex="3" onchange="toplayg3();" onkeydown="toplayg3();" onmouseout="toplayg3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v21" id="v21" type="text" value="<?php echo $verim21  ; ?>"  align="center" size="8" tabindex="21" onchange="toplayg3();" onkeydown="toplayg3();" onmouseout="toplayg3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg3" id="sonucyg3" type="text" value="<?php echo $on  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v4" id="v4" type="text" value="<?php echo $verim4  ; ?>"  align="center" size="8" tabindex="4" onchange="toplayg4();" onkeydown="toplayg4();" onmouseout="toplayg4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v22" id="v22" type="text" value="<?php echo $verim22  ; ?>"  align="center" size="8" tabindex="22" onchange="toplayg4();" onkeydown="toplayg4();" onmouseout="toplayg4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg4" id="sonucyg4" type="text" value="<?php echo $onbes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmiyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v5" id="v5" type="text" value="<?php echo $verim5  ; ?>"  align="center" size="8" tabindex="5" onchange="toplayg5();" onkeydown="toplayg5();" onmouseout="toplayg5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v23" id="v23" type="text" value="<?php echo $verim23  ; ?>"  align="center" size="8" tabindex="23" onchange="toplayg5();" onkeydown="toplayg5();" onmouseout="toplayg5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg5" id="sonucyg5" type="text" value="<?php echo $yirmi  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmibesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v6" id="v6" type="text" value="<?php echo $verim6  ; ?>"  align="center" size="8" tabindex="6" onchange="toplayg6();" onkeydown="toplayg6();" onmouseout="toplayg6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v24" id="v24" type="text" value="<?php echo $verim24  ; ?>"  align="center" size="8" tabindex="24" onchange="toplayg6();" onkeydown="toplayg6();" onmouseout="toplayg6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg6" id="sonucyg6" type="text" value="<?php echo $yirmibes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v7" id="v7" type="text" value="<?php echo $verim7  ; ?>"  align="center" size="8" tabindex="7" onchange="toplayg7();" onkeydown="toplayg7();" onmouseout="toplayg7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v25" id="v25" type="text" value="<?php echo $verim25  ; ?>"  align="center" size="8" tabindex="25" onchange="toplayg7();" onkeydown="toplayg7();" onmouseout="toplayg7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg7" id="sonucyg7" type="text" value="<?php echo $otuz  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v8" id="v8" type="text" value="<?php echo $verim8  ; ?>"  align="center" size="8" tabindex="8" onchange="toplayg8();" onkeydown="toplayg8();" onmouseout="toplayg8();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v26" id="v26" type="text" value="<?php echo $verim26  ; ?>"  align="center" size="8" tabindex="26" onchange="toplayg8();" onkeydown="toplayg8();" onmouseout="toplayg8();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg8" id="sonucyg8" type="text" value="<?php echo $otuzbes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v9" id="v9" type="text" value="<?php echo $verim9  ; ?>"  align="center" size="8" tabindex="9" onchange="toplayg9();" onkeydown="toplayg9();" onmouseout="toplayg9();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v27" id="v27" type="text" value="<?php echo $verim27  ; ?>"  align="center" size="8" tabindex="27" onchange="toplayg9();" onkeydown="toplayg9();" onmouseout="toplayg9();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg9" id="sonucyg9" type="text" value="<?php echo $kirk  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v10" id="v10" type="text" value="<?php echo $verim10  ; ?>"  align="center" size="8" tabindex="10" onchange="toplayg10();" onkeydown="toplayg10();" onmouseout="toplayg10();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v28" id="v28" type="text" value="<?php echo $verim28  ; ?>"  align="center" size="8" tabindex="28" onchange="toplayg10();" onkeydown="toplayg10();" onmouseout="toplayg10();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg10" id="sonucyg10" type="text" value="<?php echo $kirkbes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($elliyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v11" id="v11" type="text" value="<?php echo $verim11  ; ?>"  align="center" size="8" tabindex="11" onchange="toplayg11();" onkeydown="toplayg11();" onmouseout="toplayg11();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v29" id="v29" type="text" value="<?php echo $verim29  ; ?>"  align="center" size="8" tabindex="29" onchange="toplayg11();" onkeydown="toplayg11();" onmouseout="toplayg11();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg11" id="sonucyg11" type="text" value="<?php echo $elli  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ellibesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v12" id="v12" type="text" value="<?php echo $verim12  ; ?>"  align="center" size="8" tabindex="12" onchange="toplayg12();" onkeydown="toplayg12();" onmouseout="toplayg12();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v30" id="v30" type="text" value="<?php echo $verim30  ; ?>"  align="center" size="8" tabindex="30" onchange="toplayg12();" onkeydown="toplayg12();" onmouseout="toplayg12();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg12" id="sonucyg12" type="text" value="<?php echo $ellibes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v13" id="v13" type="text" value="<?php echo $verim13  ; ?>"  align="center" size="8" tabindex="13" onchange="toplayg13();" onkeydown="toplayg13();" onmouseout="toplayg13();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v31" id="v31" type="text" value="<?php echo $verim31  ; ?>"  align="center" size="8" tabindex="31" onchange="toplayg13();" onkeydown="toplayg13();" onmouseout="toplayg13();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg13" id="sonucyg13" type="text" value="<?php echo $atmis  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v14" id="v14" type="text" value="<?php echo $verim14  ; ?>"  align="center" size="8" tabindex="14" onchange="toplayg14();" onkeydown="toplayg14();" onmouseout="toplayg14();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v32" id="v32" type="text" value="<?php echo $verim32  ; ?>"  align="center" size="8" tabindex="32" onchange="toplayg14();" onkeydown="toplayg14();" onmouseout="toplayg14();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg14" id="sonucyg14" type="text" value="<?php echo $atmisbes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v15" id="v15" type="text" value="<?php echo $verim15  ; ?>"  align="center" size="8" tabindex="15" onchange="toplayg15();" onkeydown="toplayg15();" onmouseout="toplayg15();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v33" id="v33" type="text" value="<?php echo $verim33  ; ?>"  align="center" size="8" tabindex="33" onchange="toplayg15();" onkeydown="toplayg15();" onmouseout="toplayg15();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg15" id="sonucyg15" type="text" value="<?php echo $yetmis  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v16" id="v16" type="text" value="<?php echo $verim16  ; ?>"  align="center" size="8" tabindex="16" onchange="toplayg16();" onkeydown="toplayg16();" onmouseout="toplayg16();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v34" id="v34" type="text" value="<?php echo $verim34  ; ?>"  align="center" size="8" tabindex="34" onchange="toplayg16();" onkeydown="toplayg16();" onmouseout="toplayg16();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg16" id="sonucyg16" type="text" value="<?php echo $yetmisbes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v17" id="v17" type="text" value="<?php echo $verim17  ; ?>"  align="center" size="8" tabindex="17" onchange="toplayg17();" onkeydown="toplayg17();" onmouseout="toplayg17();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v35" id="v35" type="text" value="<?php echo $verim35  ; ?>"  align="center" size="8" tabindex="35" onchange="toplayg17();" onkeydown="toplayg17();" onmouseout="toplayg17();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg17" id="sonucyg17" type="text" value="<?php echo $seksen  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v18" id="v18" type="text" value="<?php echo $verim18  ; ?>"  align="center" size="8" tabindex="18" onchange="toplayg18();" onkeydown="toplayg18();" onmouseout="toplayg18();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v36" id="v36" type="text" value="<?php echo $verim36  ; ?>"  align="center" size="8" tabindex="36" onchange="toplayg18();" onkeydown="toplayg18();" onmouseout="toplayg18();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg18" id="sonucyg18" type="text" value="<?php echo $seksenbes  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="ygkadin" id="ygkadin" type="text" value="<?php echo $ygkt  ; ?>"  align="center" size="8" tabindex="" onchange="toplaygk();" onkeydown="toplaygk();" onmouseout="toplaygk();" onclick="toplayg();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="ygerkek" id="ygerkek" type="text" value="<?php echo $yget  ; ?>"  align="center" size="8" tabindex="" onchange="toplayge();" onkeydown="toplayge();" onmouseout="toplayge();" onclick="toplayg();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg" id="sonucyg" type="text" value="<?php echo $ygt  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v37" id="v37" type="text" value="<?php echo $verim37  ; ?>"  align="center" size="8" tabindex="37" onchange="toplamh1();" onkeydown="toplamh1();" onmouseout="toplamh1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v42" id="v42" type="text" value="<?php echo $verim42  ; ?>"  align="center" size="8" tabindex="42" onchange="toplamh1();" onkeydown="toplamh1();" onmouseout="toplamh1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh1" id="sonucmh1" type="text" value="<?php echo $cocuk  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">BEKAR </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v38" id="v38" type="text" value="<?php echo $verim38  ; ?>"  align="center" size="8" tabindex="38" onchange="toplamh2();" onkeydown="toplamh2();" onmouseout="toplamh2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v43" id="v43" type="text" value="<?php echo $verim43  ; ?>"  align="center" size="8" tabindex="43" onchange="toplamh2();" onkeydown="toplamh2();" onmouseout="toplamh2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh2" id="sonucmh2" type="text" value="<?php echo $bekar  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhevli) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v39" id="v39" type="text" value="<?php echo $verim39  ; ?>"  align="center" size="8" tabindex="39" onchange="toplamh3();" onkeydown="toplamh3();" onmouseout="toplamh3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v44" id="v44" type="text" value="<?php echo $verim44  ; ?>"  align="center" size="8" tabindex="44" onchange="toplamh3();" onkeydown="toplamh3();" onmouseout="toplamh3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh3" id="sonucmh3" type="text" value="<?php echo $evli  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhbosanmis) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v40" id="v40" type="text" value="<?php echo $verim40  ; ?>"  align="center" size="8" tabindex="40" onchange="toplamh4();" onkeydown="toplamh4();" onmouseout="toplamh4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v45" id="v45" type="text" value="<?php echo $verim45  ; ?>"  align="center" size="8" tabindex="45" onchange="toplamh4();" onkeydown="toplamh4();" onmouseout="toplamh4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh4" id="sonucmh4" type="text" value="<?php echo $bosanmis  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhesiolmus) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v41" id="v41" type="text" value="<?php echo $verim41  ; ?>"  align="center" size="8" tabindex="41" onchange="toplamh5();" onkeydown="toplamh5();" onmouseout="toplamh5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v46" id="v46" type="text" value="<?php echo $verim46  ; ?>"  align="center" size="8" tabindex="46" onchange="toplamh5();" onkeydown="toplamh5();" onmouseout="toplamh5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh5" id="sonucmh5" type="text" value="<?php echo $esiolmus  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="mhkadin" id="mhkadin" type="text" value="<?php echo $mhkt  ; ?>"  align="center" size="8" tabindex="" onchange="toplamhk();" onkeydown="toplamhk();" onmouseout="toplamhk();" onclick="toplamh();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="mherkek" id="mherkek" type="text" value="<?php echo $mhet  ; ?>"  align="center" size="8" tabindex="" onchange="toplamhe();" onkeydown="toplamhe();" onmouseout="toplamhe();" onclick="toplamh();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh" id="sonucmh" type="text" value="<?php echo $mht  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
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
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v47" id="v47" type="text" value="<?php echo $verim47  ; ?>"  align="center" size="8" tabindex="47" onchange="toplaod1();" onkeydown="toplaod1();" onmouseout="toplaod1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v54" id="v54" type="text" value="<?php echo $verim54  ; ?>"  align="center" size="8" tabindex="54" onchange="toplaod1();" onkeydown="toplaod1();" onmouseout="toplaod1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod1" id="sonucod1" type="text" value="<?php echo $ocd  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odoyd) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v48" id="v48" type="text" value="<?php echo $verim48  ; ?>"  align="center" size="8" tabindex="48" onchange="toplaod2();" onkeydown="toplaod2();" onmouseout="toplaod2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v55" id="v55" type="text" value="<?php echo $verim55  ; ?>"  align="center" size="8" tabindex="55" onchange="toplaod2();" onkeydown="toplaod2();" onmouseout="toplaod2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod2" id="sonucod2" type="text" value="<?php echo $oyd  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">OKUR YAZAR</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v49" id="v49" type="text" value="<?php echo $verim49  ; ?>"  align="center" size="8" tabindex="49" onchange="toplaod3();" onkeydown="toplaod3();" onmouseout="toplaod3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v56" id="v56" type="text" value="<?php echo $verim56  ; ?>"  align="center" size="8" tabindex="56" onchange="toplaod3();" onkeydown="toplaod3();" onmouseout="toplaod3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod3" id="sonucod3" type="text" value="<?php echo $oy  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odilk) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v50" id="v50" type="text" value="<?php echo $verim50  ; ?>"  align="center" size="8" tabindex="50" onchange="toplaod4();" onkeydown="toplaod4();" onmouseout="toplaod4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v57" id="v57" type="text" value="<?php echo $verim57  ; ?>"  align="center" size="8" tabindex="57" onchange="toplaod4();" onkeydown="toplaod4();" onmouseout="toplaod4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod4" id="sonucod4" type="text" value="<?php echo $ilk  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ORTAOKUL </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v51" id="v51" type="text" value="<?php echo $verim51  ; ?>"  align="center" size="8" tabindex="51" onchange="toplaod5();" onkeydown="toplaod5();" onmouseout="toplaod5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v58" id="v58" type="text" value="<?php echo $verim58  ; ?>"  align="center" size="8" tabindex="58" onchange="toplaod5();" onkeydown="toplaod5();" onmouseout="toplaod5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod5" id="sonucod5" type="text" value="<?php echo $orta  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odlise) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v52" id="v52" type="text" value="<?php echo $verim52  ; ?>"  align="center" size="8" tabindex="52" onchange="toplaod6();" onkeydown="toplaod6();" onmouseout="toplaod6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v59" id="v59" type="text" value="<?php echo $verim59  ; ?>"  align="center" size="8" tabindex="59" onchange="toplaod6();" onkeydown="toplaod6();" onmouseout="toplaod6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod6" id="sonucod6" type="text" value="<?php echo $lise  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odyo) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v53" id="v53" type="text" value="<?php echo $verim53  ; ?>"  align="center" size="8" tabindex="53" onchange="toplaod7();" onkeydown="toplaod7();" onmouseout="toplaod7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v60" id="v60" type="text" value="<?php echo $verim60  ; ?>"  align="center" size="8" tabindex="60" onchange="toplaod7();" onkeydown="toplaod7();" onmouseout="toplaod7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod7" id="sonucod7" type="text" value="<?php echo $yo  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="odkadin" id="odkadin" type="text" value="<?php echo $odkt  ; ?>"  align="center" size="8" tabindex="" onchange="toplaodk();" onkeydown="toplaodk();" onmouseout="toplaodk();" onclick="toplaod();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="oderkek" id="oderkek" type="text" value="<?php echo $odet  ; ?>"  align="center" size="8" tabindex="" onchange="toplaode();" onkeydown="toplaode();" onmouseout="toplaode();" onclick="toplaod();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod" id="sonucod" type="text" value="<?php echo $odt  ; ?>"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>                            
  </table>  
  <input name="v61"  type="hidden" value="0" size="15"/>
  <input name="v62"  type="hidden" value="0" size="15"/>
  <input name="v63"  type="hidden" value="0" size="15"/>
  <input name="v64"  type="hidden" value="0" size="15"/>
  <input name="v65"  type="hidden" value="0" size="15"/>
  <input name="v66"  type="hidden" value="0" size="15"/>
  <input name="v67"  type="hidden" value="0" size="15"/>
  <input name="v68"  type="hidden" value="0" size="15"/>
  <input name="v69"  type="hidden" value="0" size="15"/>
  <input name="v70"  type="hidden" value="0" size="15"/>
  <input name="v71"  type="hidden" value="0" size="15"/>
  <input name="v72"  type="hidden" value="0" size="15"/>
  <input name="v73"  type="hidden" value="0" size="15"/>
  <input name="v74"  type="hidden" value="0" size="15"/>
  <input name="v75"  type="hidden" value="0" size="15"/>
  <input name="v76"  type="hidden" value="0" size="15"/>
  <input name="v77"  type="hidden" value="0" size="15"/>
  <input name="v78"  type="hidden" value="0" size="15"/>
  <input name="v79"  type="hidden" value="0" size="15"/>
  <input name="v80"  type="hidden" value="0" size="15"/>
  <input name="v81"  type="hidden" value="0" size="15"/>
  <input name="v82"  type="hidden" value="0" size="15"/>
  <input name="v83"  type="hidden" value="0" size="15"/>
  <input name="v84"  type="hidden" value="0" size="15"/>
  <input name="v85"  type="hidden" value="0" size="15"/>
  <input name="v86"  type="hidden" value="0" size="15"/>
  <input name="v87"  type="hidden" value="0" size="15"/>
  <input name="v88"  type="hidden" value="0" size="15"/>
  <input name="v89"  type="hidden" value="0" size="15"/>
  <input name="v90"  type="hidden" value="0" size="15"/>
  <input name="v91"  type="hidden" value="0" size="15"/>
  <input name="v92"  type="hidden" value="0" size="15"/>
  <input name="v93"  type="hidden" value="0" size="15"/>
  <input name="v94"  type="hidden" value="0" size="15"/>
  <input name="v95"  type="hidden" value="0" size="15"/>
  <input name="v96"  type="hidden" value="0" size="15"/>
  <input name="v97"  type="hidden" value="0" size="15"/>
  <input name="v98"  type="hidden" value="0" size="15"/>
  <input name="v99"  type="hidden" value="0" size="15"/>
  <input name="v100"  type="hidden" value="0" size="15"/>
  <input name="v101"  type="hidden" value="0" size="15"/>
  <input name="v102"  type="hidden" value="0" size="15"/>
  <input name="v103"  type="hidden" value="0" size="15"/>
  <input name="v104"  type="hidden" value="0" size="15"/>
  <input name="v105"  type="hidden" value="0" size="15"/>
  <input name="v106"  type="hidden" value="0" size="15"/>
  <input name="v107"  type="hidden" value="0" size="15"/>
  <input name="v108"  type="hidden" value="0" size="15"/>
  <input name="v109"  type="hidden" value="0" size="15"/>
  <input name="v110"  type="hidden" value="0" size="15"/>
  <input name="v111"  type="hidden" value="0" size="15"/>
  <input name="v112"  type="hidden" value="0" size="15"/>
  <input name="v113"  type="hidden" value="0" size="15"/>
  <input name="v114"  type="hidden" value="0" size="15"/>
  <input name="v115"  type="hidden" value="0" size="15"/>
  <input name="v116"  type="hidden" value="0" size="15"/>
  <input name="v117"  type="hidden" value="0" size="15"/>
  <input name="v118"  type="hidden" value="0" size="15"/>
  <input name="v119"  type="hidden" value="0" size="15"/>
  <input name="v120"  type="hidden" value="0" size="15"/>
  <input name="v121"  type="hidden" value="0" size="15"/>
  <input name="v122"  type="hidden" value="0" size="15"/>
  <input name="v123"  type="hidden" value="0" size="15"/>
  <input name="v124"  type="hidden" value="0" size="15"/>
  <input name="v125"  type="hidden" value="0" size="15"/>
  <input name="v126"  type="hidden" value="0" size="15"/>
  <input name="v127"  type="hidden" value="0" size="15"/>
  <input name="v128"  type="hidden" value="0" size="15"/>
  <input name="v129"  type="hidden" value="0" size="15"/>
  <input name="v130"  type="hidden" value="0" size="15"/>
  <input name="v131"  type="hidden" value="0" size="15"/>
  <input name="v132"  type="hidden" value="0" size="15"/>
  <input name="v133"  type="hidden" value="0" size="15"/>
  <input name="v134"  type="hidden" value="0" size="15"/>
  <input name="v135"  type="hidden" value="0" size="15"/>
  <input name="v136"  type="hidden" value="0" size="15"/>
  <input name="v137"  type="hidden" value="0" size="15"/>
  <input name="v138"  type="hidden" value="0" size="15"/>
  <input name="v139"  type="hidden" value="0" size="15"/>
  <input name="v140"  type="hidden" value="0" size="15"/>
  <input name="v141"  type="hidden" value="0" size="15"/>
  <input name="v142"  type="hidden" value="0" size="15"/>
  <input name="v143"  type="hidden" value="0" size="15"/>
  <input name="v144"  type="hidden" value="0" size="15"/>
  <input name="v145"  type="hidden" value="0" size="15"/>
  <input name="v146"  type="hidden" value="0" size="15"/>
  <input name="v147"  type="hidden" value="0" size="15"/>
  <input name="v148"  type="hidden" value="0" size="15"/>
  <input name="v149"  type="hidden" value="0" size="15"/>
  <input name="v150"  type="hidden" value="0" size="15"/>
  <input name="v151"  type="hidden" value="0" size="15"/>
  <input name="v152"  type="hidden" value="0" size="15"/>
  <input name="v153"  type="hidden" value="0" size="15"/>
  <input name="v154"  type="hidden" value="0" size="15"/>
  <input name="v155"  type="hidden" value="0" size="15"/>
  <input name="v156"  type="hidden" value="0" size="15"/>
  <input name="v157"  type="hidden" value="0" size="15"/>
  <input name="v158"  type="hidden" value="0" size="15"/>
  <input name="v159"  type="hidden" value="0" size="15"/>
  <input name="v160"  type="hidden" value="0" size="15"/>
  <input name="v161"  type="hidden" value="0" size="15"/>
  <input name="v162"  type="hidden" value="0" size="15"/>
  <input name="v163"  type="hidden" value="0" size="15"/>
  <input name="v164"  type="hidden" value="0" size="15"/>
  <input name="v165"  type="hidden" value="0" size="15"/>
  <input name="v166"  type="hidden" value="0" size="15"/>
  <input name="v167"  type="hidden" value="0" size="15"/>
  <input name="v168"  type="hidden" value="0" size="15"/>
  <input name="v169"  type="hidden" value="0" size="15"/>
  <input name="v170"  type="hidden" value="0" size="15"/>
  <input name="v171"  type="hidden" value="0" size="15"/>
  <input name="v172"  type="hidden" value="0" size="15"/>
   <br>
   <table width="100%" bgcolor="#FFFFFF" class="style5"  cellpadding="0" cellspacing="0" >
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzadbaslik) ; ?></th>
       <td class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><input name="v173" class="style1"  type="text" value="<?php echo trsuz($verim173) ; ?>" size="40" tabindex="173" align="middle"/></td>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onadbaslik) ; ?></th>
       <td class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><input name="v176" class="style1"  type="text" value="<?php echo trsuz($verim176) ; ?>" size="40" tabindex="176" align="middle"/></td>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzunbaslik) ; ?></th>
       <td class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><input name="v174" class="style1"  type="text" value="<?php echo trsuz($verim174) ; ?>" size="40" tabindex="174" align="middle"/></td>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onunbaslik) ; ?></th>
       <td class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><input name="v177" class="style1"  type="text" value="<?php echo trsuz($verim177) ; ?>" size="40" tabindex="177" align="middle"/></td>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <td class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><input id="masktest" class="style1" name="v175"  type="text" value=<? echo $a; ?> size="40" tabindex="175"/></td>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <td class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><input id="masktest1" class="style1" name="v178"  type="text" value="<? echo $a;?>" size="40" tabindex="178"/></td>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzimzabaslik) ; ?></th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onimzabaslik) ; ?></th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table> 
</form>
</body>
</html>
