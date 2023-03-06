<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
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
</style>
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>
<script language="JavaScript" src="kaydet.js" type="text/javascript">
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
include('connect.php');
include('c3c4alanlari.php');

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$xaygelentam=$_GET['selectay']; 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,0,2);
$xaygelentarihay=substr($xaygelentarih,3,2);
$xaygelentarihyil=substr($xaygelentarih,6,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;  
$ocakyazi=$_GET['selectoc'];
//include('devir.php');
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysqli_query($dbh,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
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

?>

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
?>
<?
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysqli_close($conn);
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
<br>
<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th class="style6" width="3%"align="left" bordercolor="yellow" bgcolor="#FFCC00" colspan="5"><a href=# onClick="kontrol();"><img src="images/iptal.PNG"></a></th>
<th class="style6" width="3%" align="center" bordercolor="white" bgcolor="blue" colspan="12" ><font size="4" color="yellow"><?php echo $deggorbaslik; ?></font></th>
<th class="style6" width="3%" align="right" bordercolor="yellow" bgcolor="FFCC00" colspan="5" ><a href=# onClick="girdiyidegistir();"><img src="images/degistir.PNG"></a></th>
</tr>
</table>

<br>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
  <tr class="style5">
    <th  width="100%" align="center"bordercolor="white" colspan="20"><font size="3"><?php echo $c3c4baslik; ?></font></th>
  </tr>
  <tr class="style5">
    <th  width="100%" align="center" bordercolor="white" colspan="20">&nbsp;</th>
  </tr>
  <?php
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine.' - '.$ocgelen;
	}
$xresultveri = @mysqli_query($dbh,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($xsonucumveri=mysqli_fetch_array($xresultveri)){ 
$xverim1=$xsonucumveri['a09'];
$xverim2=$xsonucumveri['r11'];
$xverim3=$xsonucumveri['k52'];
$xtoplam=$xverim1+$xverim2+$xverim3+$xverim4+$xverim5+$xverim6;  
}	
	
	$tresultveri = @mysqli_query($dbh,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($tsonucumveri=mysqli_fetch_array($tresultveri)){ 
$tverim1=$tsonucumveri['a09'];
$tverim2=$tsonucumveri['r11'];
$tverim3=$tsonucumveri['k52'];
$toplam=$tverim1+$tverim2+$tverim3+$tverim4+$tverim5+$tverim6;  
}
$hastayla="Hasta ile";
	?>
  <tr class="style5">
    <th  width="30%" align="left" class="style5" bgcolor="#CEF6EC" bordercolor="white" colspan="10"><?php echo $ageartiskurum; ?></th>
    <th  width="70%" align="left" bordercolor="white" colspan="10" class="style5"><?php echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.' '.$kurum.' '.$xtoplam.' '.$hastayla.'</font>' ;?></th>
  </tr>
  <tr class="style5">
    <th  width="30%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $ageartistarih; ?></th>
    <th  width="70%" align="left" bordercolor="white" colspan="10" class="style5"><?php echo '<font size="3" family="Arial">'.$xaygelentam.'</font>' ;?></th>
  </tr>
  <tr class="style5">
  <th  width="30%" align="left" bordercolor="white"colspan="10" rowspan="2" class="style5" bgcolor="#CEF6EC"><?php echo $verihatasi ?></th>
  </tr>
  <tr class="style5">
  <th  width="60%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v1" id="v1" type="text" value="<?php echo 
  $verim1; ?>" size="100%" tabindex="3"/></th>
  </tr>
  <tr class="style5">
    <th  width="30%" align="left" bordercolor="white"colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $mukerrerkayit; ?></th>
    <th  width="60%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v2" id="v2" type="text" value="<?php echo $verim2; ?>" size="100%" tabindex="6"/></th>
  </tr>
  <tr class="style5">
    <th  width="30%" align="left" bordercolor="white"colspan="10" rowspan="2" class="style5" bgcolor="#CEF6EC"><?php echo $ikametkum; ?></th>
    <th  width="60%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v3" id="v3" type="text" value="<?php echo $verim3; ?>" size="100%" tabindex="9"/></th>
  </tr>
</table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="#CEF6EC"><?php echo $yascinsgrubu; ?></th>
  </tr>
  <tr class="style5">
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
  <tr class="style5">
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
  <tr class="style5">
    <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v4" id="v4" type="text" value="<?php echo $verim4; ?>"  align="center" size="3" tabindex="10" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
    <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v5" id="v5" type="text" value="<?php echo $verim5; ?>"  align="center" size="3" tabindex="11" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v6" id="v6" type="text" value="<?php echo $verim6; ?>"  align="center" size="3" tabindex="12" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v7" id="v7" type="text" value="<?php echo $verim7; ?>"  align="center" size="3" tabindex="13" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v8" id="v8" type="text" value="<?php echo $verim8; ?>"  align="center" size="3" tabindex="14" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v9" id="v9" type="text" value="<?php echo $verim9; ?>"  align="center" size="3" tabindex="15" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v10" id="v10" type="text" value="<?php echo $verim10; ?>"  align="center" size="3" tabindex="16" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v11" id="v11" type="text" value="<?php echo $verim11; ?>"  align="center" size="3" tabindex="17" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v12" id="v12" type="text" value="<?php echo $verim12; ?>"  align="center" size="3" tabindex="18" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v13" id="v13" type="text" value="<?php echo $verim13; ?>"  align="center" size="3" tabindex="19" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v14" id="v14" type="text" value="<?php echo $verim14; ?>"  align="center" size="3" tabindex="20" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v15" id="v15" type="text" value="<?php echo $verim15; ?>"  align="center" size="3" tabindex="21" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v16" id="v16" type="text" value="<?php echo $verim16; ?>"  align="center" size="3" tabindex="22" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v17" id="v17" type="text" value="<?php echo $verim17; ?>"  align="center" size="3" tabindex="23" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v18" id="v18" type="text" value="<?php echo $verim18; ?>"  align="center" size="3" tabindex="24" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v19" id="v19" type="text" value="<?php echo $verim19; ?>"  align="center" size="3" tabindex="25" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="v20" id="v20" type="text" value="<?php echo $verim20; ?>"  align="center" size="3" tabindex="26" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="v21" id="v21" type="text" value="<?php echo $verim21; ?>"  align="center" size="3" tabindex="27" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="cyan"><input class="style1" name="sonuce" id="sonuce" type="text" value="0"  align="center" size="3" tabindex="28" readonly="true"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="1" class="style5" bgcolor="pink"><input class="style1" name="sonuck" id="sonuck" type="text" value="0"  align="center" size="3" tabindex="29" readonly="true"/></th>
  </tr>
  </table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr class="style5">
    <th  width="30%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC">Toplu Yemek Yeme Durumu:</th>
	<th  width="70%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v22" id="v22" type="text" value="<?php echo $verim22; ?>" size="100%" tabindex="32"/></th>
    </tr>
<tr class="style5">
    <th  width="30%" align="left"bordercolor="white"colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $ayniailemi; ?></th>
	<th  width="70%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v23" id="v23" type="text" value="<?php echo $verim23; ?>" size="100%" tabindex="35"/></th>
    </tr>	
	<tr class="style5">
    <th  width="30%" align="left"bordercolor="white"colspan="10" rowspan="2" class="style5" bgcolor="#CEF6EC">Meslek Grubu Durumu:</th>
	<th  width="70%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v25" id="v25" type="text" value="<?php echo $verim25; ?>" size="100%" tabindex="38"/></th>
    </tr>
</table>	
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="#CEF6EC"><?php echo $gaitatestbaslik; ?></th>
  </tr>
  <tr class="style5">
  <th  width="10%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC">Tahlilin Cinsi </th>
  <th  width="10%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><?php echo $gaitakultur; ?></th>
  <th  width="10%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><?php echo $gaitaparazit; ?></th>
  <th  width="10%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><?php echo $gaitaviral; ?></th>
  </tr>
  <tr class="style5">
  <th  width="5%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC"><?php echo $sayi; ?></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v26" id="v26" type="text" value="<?php echo $verim7; ?>" size="8" tabindex="39"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v27" id="v27" type="text" value="<?php echo $verim13; ?>" size="8" tabindex="40" onchange="topla4();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v28" id="v28" type="text" value="<?php echo $verim16; ?>" size="8" tabindex="41" onchange="topla5();"/></th>
  </tr>
  <tr class="style5">
  <th  width="5%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC">Negatif</th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v29" id="v29" type="text" value="<?php echo $verim29; ?>" size="8" tabindex="42" onchange="topla9();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v30" id="v30" type="text" value="<?php echo $verim13; ?>" size="8" tabindex="43" onchange="topla7();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v31" id="v31" type="text" value="<?php echo $verim16; ?>" size="8" tabindex="44" onchange="topla8();"/></th>
  </tr>
  <tr class="style5">
  <th  width="5%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC">Pozitif</th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v32" id="v32" type="text" value="<?php echo $verim32; ?>" size="8" tabindex="45" onchange="topla6();"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v33" id="v33" type="text" value="<?php echo $verim33; ?>" size="8" tabindex="46" readonly="true"/></th>
  <th  width="5%" align="center" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v34" id="v34" type="text" value="<?php echo $verim34; ?>" size="8" tabindex="47" readonly="true"/></th>
  </tr>
  </table>  
 <table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr class="style5">
    <th  width="30%" align="left" bordercolor="white"colspan="10" class="style5" bgcolor="#CEF6EC">Ayaktan/Yatarak Tedavi Durumu:</th>
	<th  width="70%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v35" id="v35" type="text" value="<?php echo $verim35; ?>" size="109%" tabindex="51"/></th>
    </tr>	
<tr class="style5">
    <th  width="30%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $klinisyengorusu; ?></th>
	<th  width="70%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v36" id="v36" type="text" value="<?php echo $verim36; ?>" size="109%" tabindex="52"/></th>
</tr>
<tr class="style5">
    <th  width="30%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $sunumune; ?></th>
	<th  width="70%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v37" id="v37" type="text" value="<?php echo $verim37; ?>" size="109%" tabindex="52"/></th>
</tr>			 		 
</table>
<script type="text/javascript">
//Sinyal T�r�
function yabuyr(){
var v39=parseInt(document.getElementById("v39").value);
var v40="<?php echo $yabanciuyrukdurumu; ?>";
var bos=v39+"<?php echo $yabanciuyrukvar; ?>";
if(document.getElementById("v39").value == 0){
    document.getElementById("v40").value =v40;
	return false;
}else{
document.getElementById("v40").value =bos;
}
return true;
}
</script>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr class="style5">
<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="YELLOW"><?php echo $degraporbaslik; ?></th>  
</tr>
<tr class="style5">
    <th  width="30%" align="left"bordercolor="white"colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $sinyalturu; ?></th>
	<th  width="70%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><textarea  style="font-weight:bold" align="left" name="v38" id="v38" tabindex="55" cols="110" rows="2"><?php echo $verim38; ?></textarea></th>
  </tr>
<tr class="style5">
    <th  width="30%" align="left" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><?php echo $yabanciuyruk; ?></th>
	<th  width="6%" align="left" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC"><?php echo $sayisi; ?></th>
	<th  width="6%" align="left" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC"><input  class="style1" align="center" name="v39" id="v39" type="text" value="0" size="5" tabindex="56" onchange="yabuyr();"/></th>
	<th  width="8%" align="left" bordercolor="white" colspan="2" class="style5" bgcolor="#CEF6EC"><?php echo $aciklama; ?></th>
	<th  width="50%" align="left" bordercolor="white" colspan="4" class="style5" bgcolor="#CEF6EC"><input  style="font-weight:bold" align="left" name="v40" id="v40" type="text" value="<?php echo $verim40; ?>" size="74%" tabindex="60"/></th>
    </tr>	
</table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="#CEF6EC"><?php echo $ikametbaslik; ?></th>
  </tr>
       <tr class="style5">
 <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $yerlesim; ?></th>
  <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $ikamet; ?></th>
  <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $yerlesim; ?></th>
  <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $ikamet; ?></th> 
       </tr>
	   
	   
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v41" id="v41" tabindex="61"><option value="<?php echo $verim41; ?>"><?php echo $verim41; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v42" id="v42" type="text" value="<?php echo $verim42; ?>" size="8" tabindex="62" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v43" id="v43" tabindex="63"><option value="<?php echo $verim43; ?>"><?php echo $verim43; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v44" id="v44" type="text" value="<?php echo $verim44; ?>" size="8" tabindex="64" onchange="topla10();"/></th>
    </tr>
     <?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v45" id="v45" tabindex="65"><option value="<?php echo $verim45; ?>"><?php echo $verim45; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v46" id="v46" type="text" value="<?php echo $verim46; ?>" size="8" tabindex="66" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v47" id="v47" tabindex="67"><option value="<?php echo $verim47; ?>"><?php echo $verim47; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v48" id="v48" type="text" value="<?php echo $verim48; ?>" size="8" tabindex="68" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v49" id="v49" tabindex="69"><option value="<?php echo $verim49; ?>"><?php echo $verim49; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v50" id="v50" type="text" value="<?php echo $verim50; ?>" size="8" tabindex="70" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v51" id="v51" tabindex="71"><option value="<?php echo $verim51; ?>"><?php echo $verim51; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v52" id="v52" type="text" value="<?php echo $verim52; ?>" size="8" tabindex="72" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v53" id="v53" tabindex="73"><option value="<?php echo $verim53; ?>"><?php echo $verim53; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v54" id="v54" type="text" value="<?php echo $verim54; ?>" size="8" tabindex="74" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v55" id="v55" tabindex="75"><option value="<?php echo $verim55; ?>"><?php echo $verim55; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v56" id="v56" type="text" value="<?php echo $verim56; ?>" size="8" tabindex="76" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v57" id="v57" tabindex="77"><option value="<?php echo $verim57; ?>"><?php echo $verim57; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v58" id="v58" type="text" value="<?php echo $verim58; ?>" size="8" tabindex="78" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v59" id="v59" tabindex="79"><option value="<?php echo $verim59; ?>"><?php echo $verim59; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v60" id="v60" type="text" value="<?php echo $verim60; ?>" size="8" tabindex="80" onchange="topla10();"/></th>
    </tr>
     <?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v61" id="v61" tabindex="81"><option value="<?php echo $verim61; ?>"><?php echo $verim61; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v62" id="v62" type="text" value="<?php echo $verim62; ?>" size="8" tabindex="82" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v63" id="v63" tabindex="83"><option value="<?php echo $verim63; ?>"><?php echo $verim63; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v64" id="v64" type="text" value="<?php echo $verim64; ?>" size="8" tabindex="84" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v65" id="v65" tabindex="85"><option value="<?php echo $verim65; ?>"><?php echo $verim65; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v66" id="v66" type="text" value="<?php echo $verim66; ?>" size="8" tabindex="86" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v67" id="v67" tabindex="87"><option value="<?php echo $verim67; ?>"><?php echo $verim67; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v68" id="v68" type="text" value="<?php echo $verim68; ?>" size="8" tabindex="88" onchange="topla10();"/></th>
</tr>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v69" id="v69" tabindex="89"><option value="<?php echo $verim69; ?>"><?php echo $verim69; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v70" id="v70" type="text" value="<?php echo $verim70; ?>" size="8" tabindex="90" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v71" id="v71" tabindex="91"><option value="<?php echo $verim71; ?>"><?php echo $verim71; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v72" id="v72" type="text" value="<?php echo $verim72; ?>" size="8" tabindex="92" onchange="topla10();"/></th>
    </tr>	
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v73" id="v73" tabindex="93"><option value="<?php echo $verim73; ?>"><?php echo $verim73; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v74" id="v74" type="text" value="<?php echo $verim74; ?>" size="8" tabindex="94" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v75" id="v75" tabindex="95"><option value="<?php echo $verim75; ?>"><?php echo $verim75; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v76" id="v76" type="text" value="<?php echo $verim76; ?>" size="8" tabindex="96" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v77" id="v77" tabindex="97"><option value="<?php echo $verim77; ?>"><?php echo $verim77; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v78" id="v78" type="text" value="<?php echo $verim78; ?>" size="8" tabindex="98" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbh,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v79" id="v79" tabindex="99"><option value="<?php echo $verim79; ?>"><?php echo $verim79; ?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v80" id="v80" type="text" value="<?php echo $verim80; ?>" size="8" tabindex="100" onchange="topla10();"/></th>
    </tr>	
<tr class="style5">
<th  width="50%" align="center" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
<th  width="50%" align="center" bordercolor="white" colspan="10" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v81" id="v81" type="text" value="<?php echo $verim81; ?>"  align="center" size="10" tabindex="101" readonly="true"/></th>
    </tr>   	   	      	   
 </table>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="style5" bgcolor="#CEF6EC"><?php echo $polibaslik; ?></th>
  </tr>
       <tr class="style5">
 <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $padi; ?></th>
  <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $bassay; ?></th>
  <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $musyatan; ?></th>
  <th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><?php echo $seryatan; ?></th> 
       </tr>
	   
	   
<?php $resultpol = @mysqli_query($dbh,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v82" id="v82" tabindex="102"><option value="<?php echo $verim82; ?>"><?php echo $verim82; ?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v83" id="v83" type="text" value="<?php echo $verim83; ?>" size="8" tabindex="103" onchange="topla11();"/></th>
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v84" id="v84" type="text" value="<?php echo $verim84; ?>" size="8" tabindex="104" onchange="topla12();"/></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v85" id="v85" type="text" value="<?php echo $verim85; ?>" size="8" tabindex="105" onchange="topla13();"/></th>
</tr>
     <?php $resultpol = @mysqli_query($dbh,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v86" id="v86" tabindex="106"><option value="<?php echo $verim86; ?>"><?php echo $verim86; ?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v87" id="v87" type="text" value="<?php echo $verim87; ?>" size="8" tabindex="107" onchange="topla11();"/></th>
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v88" id="v88" type="text" value="<?php echo $verim88; ?>" size="8" tabindex="108" onchange="topla12();"/></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v89" id="v89" type="text" value="<?php echo $verim89; ?>" size="8" tabindex="109" onchange="topla13();"/></th>
    </tr>
<?php $resultpol = @mysqli_query($dbh,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v90" id="v90" tabindex="110"><option value="<?php echo $verim90; ?>"><?php echo $verim90; ?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v91" id="v91" type="text" value="<?php echo $verim91; ?>" size="8" tabindex="111" onchange="topla11();"/></th>
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v92" id="v92" type="text" value="<?php echo $verim92; ?>" size="8" tabindex="112" onchange="topla12();"/></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v93" id="v93" type="text" value="<?php echo $verim93; ?>" size="8" tabindex="113" onchange="topla13();"/></th>
    </tr>
<?php $resultpol = @mysqli_query($dbh,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v94" id="v94" tabindex="114"><option value="<?php echo $verim94; ?>"><?php echo $verim94; ?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v95" id="v95" type="text" value="<?php echo $verim95; ?>" size="8" tabindex="115" onchange="topla11();"/></th>
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v96" id="v96" type="text" value="<?php echo $verim96; ?>" size="8" tabindex="116" onchange="topla12();"/></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v97" id="v97" type="text" value="<?php echo $verim97; ?>" size="8" tabindex="117" onchange="topla13();"/></th>
    </tr>
<?php $resultpol = @mysqli_query($dbh,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v98" id="v98" tabindex="118"><option value="<?php echo $verim98; ?>"><?php echo $verim98; ?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v99" id="v99" type="text" value="<?php echo $verim99; ?>" size="8" tabindex="119" onchange="topla11();"/></th>
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v100" id="v100" type="text" value="<?php echo $verim100; ?>" size="8" tabindex="120" onchange="topla12();"/></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v101" id="v101" type="text" value="<?php echo $verim101; ?>" size="8" tabindex="121" onchange="topla13();"/></th>
    </tr>
     <?php $resultpol = @mysqli_query($dbh,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr class="style5">  
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><select name="v102" id="v102" tabindex="122"><option value="<?php echo $verim102; ?>"><?php echo $verim102; ?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v103" id="v103" type="text" value="<?php echo $verim103; ?>" size="8" tabindex="123" onchange="topla11();"/></th>
<th width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v104" id="v104" type="text" value="<?php echo $verim104; ?>" size="8" tabindex="124" onchange="topla12();"/></th>	
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" align="center" name="v105" id="v105" type="text" value="<?php echo $verim105; ?>" size="8" tabindex="125" onchange="topla13();"/></th>
    </tr>
<tr class="style5">
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v106" id="v106" type="text" value="<?php echo $verim106; ?>"  align="center" size="8" tabindex="126" readonly="true"/></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v107" id="v107" type="text" value="<?php echo $verim107; ?>"  align="center" size="8" tabindex="127" readonly="true"/></th>
<th  width="25%" align="center" bordercolor="white" colspan="5" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v108" id="v108" type="text" value="<?php echo $verim108; ?>"  align="center" size="8" tabindex="128" readonly="true"/></th>

    </tr>   	
  </table> 
<script type="text/javascript">
//�kamet Tablosu Eki var m�?
function grafikmev(grafikyes){
if (document.getElementById("grafik").checked){
    document.getElementById("v109").value = "Akut Bağırsak Enfeksiyonları vakalarının ilçe ve hastane bazında son bir yıllık seyrine ait grafik ektedir.";
	document.getElementById("v109").readOnly = false;
	}else{
document.getElementById("v109").value = "";
document.getElementById("v109").readOnly = false;	
	}

}	

</script>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  width="30%" align="left" bordercolor="white" colspan="8" class="style5" bgcolor="#CEF6EC">
<label id="grafiksec" for="grafik"><?php echo $grafik;?></label><input type="checkbox" name="grafik" id="grafik" value="" onclick="grafikmev(this.value);"/>
<th  width="30%" align="left" bordercolor="white" colspan="12" class="style5"><input  style="font-weight:bold" align="left" name="v109" id="v109" type="text" value="<?php echo $verim109; ?>" size="118%" tabindex="129"/></th>		
</tr>
</table>		
<BR>  
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

  <?php
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
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
  
  
    
  <input name="v110"  type="hidden" value="<?php echo $toplam ; ?>" size="5"/>
  <input name="v111"  type="hidden" value="<?php echo $xtoplam ; ?>" size="5"/>
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
  
  <tr class="style5">
    <th  width="24%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $duzenleyen; ?></th>
    <th  width="8%" bgcolor="white" colspan="1" rowspan="11">&nbsp;</th>
    <th  width="8%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
  </tr>
  <tr class="style5">
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<?php echo $asead ; ?>" size="30" tabindex="173"/>
      </th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v176"  type="text" value="<?php echo $drad ; ?>" size="30" tabindex="176"/></th>
  </tr>
  <tr class="style5">
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="30" tabindex="174"/></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v177"  type="text" value="<?php echo $ahkodum.' '.$ahno ;?>" size="30" tabindex="177"/></th>
  </tr>
  <tr class="style5">
    <?php
   $a=Date("d/m/Y");
  
   ?>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input id="masktest" class="style1" name="v175"  type="text" value=<?php echo $a; ?> size="30" tabindex="175"/></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input id="masktest1" class="style1" name="v178"  type="text" value="<?php echo $a;?>" size="30" tabindex="178"/></th>
  </tr>
  <tr class="style5">
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
	</tr>
</table>
  </form>
</body>
</html>
