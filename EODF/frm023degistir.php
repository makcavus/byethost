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
 function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }

include('con_023.php');





$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 

$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 

$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 

$yilgelen=$_GET['selectyil'];

$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 

$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

include('devir.php');

/*echo $ilgelen ;

echo $ilcegelen ;

echo $ocgelen ;

echo $yilgelen ;

echo $aygelen ;*/

$resultvyil = @mysql_query("select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;

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

$ahb="NOLU AİLE HEKİMLİĞİ BİRİMİ";



?>

<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">

<tr>

<th class="style6" width="3%"align="left" bordercolor="yellow" bgcolor="#FFCC00" colspan="5"><a href=# onClick="kontrol();"><img src="images/iptal.PNG"></a></th>

<th class="style6" width="3%" align="center" bordercolor="white" bgcolor="blue" colspan="12" ><font size="4" color="yellow"><?php echo trsuz("Kayıt Değiştirme Ekranı");?></font></th>

<th class="style6" width="3%" align="right" bordercolor="yellow" bgcolor="FFCC00" colspan="5" ><a href=# onClick="girdiyidegistir();"><img src="images/degistir.PNG"></a></th>

</tr>

</table>

<br>

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />

  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo trsuz($ilcegelen) ;?>" />

  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo trsuz($ocgelen) ;?>" />

  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />

  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo trsuz($aygelen) ;?>" />

  <tr>

  <th  width="4%" align="left"bordercolor="white" colspan="25">EK 3</th>

	</tr>

    <tr>

    <th  width="4%" align="center" bordercolor="white" colspan="25"><font face="Arial" size="4"><?php echo trsuz("EVLİLİK ÖNCESİ DANIŞMANLIK FORMU");?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="center" bordercolor="white" colspan="25">&nbsp;</th>

  </tr>

  <tr>

    <th  width="4%" align="left"bordercolor="white" colspan="9"><?php echo trsuz("İLİN/İLÇENİN ADI:");?></th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.trsuz($ilinadi).' / '.trsuz($ilceninadi).'</font>' ;?></th>  

  </tr>

  <tr>	

    <th  width="4%" align="left"bordercolor="white" colspan="9"><?php echo trsuz("SAĞLIK RAPORU DÜZENLEYEN KURULUŞUN ADI:");?></th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.trsuz($asmninadine).'&nbsp;&nbsp;'.trsuz($ocgelen).'&nbsp;&nbsp;'.trsuz($ahb).'</font>' ;?></th>

  </tr>

  <tr>

    <th  width="4%" align="left"bordercolor="white"colspan="9"><?php echo trsuz("SAĞLIK RAPORUNUN DÜZENLENDİĞİ DÖNEM:");?></th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.trsuz($aygelen).'-'.$yilgelen.'</font>' ;?></th>

  </tr>

  <tr>

  <th  width="4%"align="center" bordercolor="white" colspan="25">&nbsp;</th>

  </tr>

  <tr>

    <th  width="10%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="5"><font face="Arial" size="3">&nbsp;</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="3"><font face="Arial" size="3">TOPLAM</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="8"><font face="Arial" size="3"><?php echo trsuz("YAŞ GRUPLARINA GÖRE DAĞILIM");?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="7"><font face="Arial" size="2"><?php echo trsuz("ÖĞRENİM DURUMUNA GÖRE DAĞILIM");?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="2"><font face="Arial" size="2">AKRABALIK DURUMU*</font></th>

</tr>

<tr>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("17 ve altı");?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">18-24</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">25-29</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">30-34</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">35-39</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">40-44</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">45-49</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("50 ve üzeri");?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("Okur Yazar Değil");?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Okur Yazar</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("İlk - Orta");?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Lise</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="3"><font face="Arial" size="2"><?php echo trsuz("Yüksekokul/ Üniversite");?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">VAR</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">YOK</font></th>

  </tr>

  <tr>

  <th  width="10%" height="50" align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz("DANIŞMANLIK VERİLEN KADIN SAYISI");?></font></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="dvks" id="dvks" type="text" value="0" size="2" readonly="true"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v1" id="v1" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim1; ?>" size="2" tabindex="1"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v2" id="v2" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim2; ?>" size="2" tabindex="2"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v3" id="v3" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim3; ?>" size="2" tabindex="3"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v4" id="v4" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim4; ?>" size="2" tabindex="4"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v5" id="v5" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim5; ?>" size="2" tabindex="5"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v6" id="v6" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim6; ?>" size="2" tabindex="6"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v7" id="v7" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim7; ?>" size="2" tabindex="7"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v8" id="v8" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim8; ?>" size="2" tabindex="8"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v9" id="v9" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim9; ?>" size="2" tabindex="9"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v10" id="v10" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim10; ?>" size="2" tabindex="10"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v11" id="v11" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim11; ?>" size="2" tabindex="11"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v12" id="v12" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim12; ?>" size="2" tabindex="12"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v13" onchange="topla10();" onkeydown="topla10();" id="v13" type="text" value="<?php echo $verim13; ?>" size="2" tabindex="13"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v14" id="v14" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim14; ?>" size="2" tabindex="14"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v15" id="v15" onchange="topla10();" onkeydown="topla10();" type="text" value="<?php echo $verim15; ?>" size="2" tabindex="15"/></th>

  </tr>

<tr>

   <th  width="10%" height="50" colspan="5" align="center" bgcolor="white" class="style5"><font face="Arial" size="2"><?php echo trsuz("SAĞLIK RAPORU DÜZENLENEN KADIN SAYISI");?></font></th> 

   <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="srdks" id="srdks" type="text" value="0" size="2" readonly="true"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v16" id="v16" type="text" value="<?php echo $verim16; ?>" size="2" tabindex="16" onchange="topla11();" onkeydown="topla11();"  onkeyup="esitmidvks();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v17" id="v17" type="text" value="<?php echo $verim17; ?>" size="2" tabindex="17" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v18" id="v18" type="text" value="<?php echo $verim18; ?>" size="2" tabindex="18" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v19" id="v19" type="text" value="<?php echo $verim19; ?>" size="2" tabindex="19" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v20" id="v20" type="text" value="<?php echo $verim20; ?>" size="2" tabindex="20" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v21" id="v21" type="text" value="<?php echo $verim21; ?>" size="2" tabindex="21" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v22" id="v22" type="text" value="<?php echo $verim22; ?>" size="2" tabindex="22" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v23" id="v23" type="text" value="<?php echo $verim23; ?>" size="2" tabindex="23" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v24" id="v24" type="text" value="<?php echo $verim24; ?>" size="2" tabindex="24" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v25" id="v25" type="text" value="<?php echo $verim25; ?>" size="2" tabindex="25" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v26" id="v26" type="text" value="<?php echo $verim26; ?>" size="2" tabindex="26" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v27" id="v27" type="text" value="<?php echo $verim27; ?>" size="2" tabindex="27" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v28" id="v28" type="text" value="<?php echo $verim28; ?>" size="2" tabindex="28" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v29" id="v29" type="text" value="<?php echo $verim29; ?>" size="2" tabindex="29" onchange="topla11();" onkeydown="topla11();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v30" id="v30" type="text" value="<?php echo $verim30; ?>" size="2" tabindex="30" onchange="topla11();" onkeydown="topla11();"/></th>

</tr>

<tr>

   <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz("DANIŞMANLIK VERİLEN ERKEK SAYISI");?></font></th>

   <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="dves" id="dves" type="text" value="0" size="2" readonly="true"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v31" id="v31" type="text" value="<?php echo $verim31; ?>" size="2" tabindex="31" onchange="topla12();" onkeydown="topla12();"  onkeyup="esitmisrdks();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v32" id="v32" type="text" value="<?php echo $verim32; ?>" size="2" tabindex="32" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v33" id="v33" type="text" value="<?php echo $verim33; ?>" size="2" tabindex="33" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v34" id="v34" type="text" value="<?php echo $verim34; ?>" size="2" tabindex="34" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v35" id="v35" type="text" value="<?php echo $verim35; ?>" size="2" tabindex="35" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v36" id="v36" type="text" value="<?php echo $verim36; ?>" size="2" tabindex="36" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v37" id="v37" type="text" value="<?php echo $verim37; ?>" size="2" tabindex="37" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v38" id="v38" type="text" value="<?php echo $verim38; ?>" size="2" tabindex="38" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v39" id="v39" type="text" value="<?php echo $verim39; ?>" size="2" tabindex="39" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v40" id="v40" type="text" value="<?php echo $verim40; ?>" size="2" tabindex="40" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v41" id="v41" type="text" value="<?php echo $verim41; ?>" size="2" tabindex="41" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v42" id="v42" type="text" value="<?php echo $verim42; ?>" size="2" tabindex="42" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v43" id="v43" type="text" value="<?php echo $verim43; ?>" size="2" tabindex="43" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v44" id="v44" type="text" value="<?php echo $verim44; ?>" size="2" tabindex="44" onchange="topla12();" onkeydown="topla12();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v45" id="v45" type="text" value="<?php echo $verim45; ?>" size="2" tabindex="45" onchange="topla12();" onkeydown="topla12();"/></th>

</tr>

<tr>

   <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz("SAĞLIK RAPORU DÜZENLENEN ERKEK SAYISI");?></font></th>

   <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="srdes" id="srdes" type="text" value="0" size="2" readonly="true"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v46" id="v46" type="text" value="<?php echo $verim46; ?>" size="2" tabindex="46" onchange="topla13();" onkeydown="topla13();"  onkeyup="esitmidves();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v47" id="v47" type="text" value="<?php echo $verim47; ?>" size="2" tabindex="47" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v48" id="v48" type="text" value="<?php echo $verim48; ?>" size="2" tabindex="48" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v49" id="v49" type="text" value="<?php echo $verim49; ?>" size="2" tabindex="49" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v50" id="v50" type="text" value="<?php echo $verim50; ?>" size="2" tabindex="50" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v51" id="v51" type="text" value="<?php echo $verim51; ?>" size="2" tabindex="51" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v52" id="v52" type="text" value="<?php echo $verim52; ?>" size="2" tabindex="52" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v53" id="v53" type="text" value="<?php echo $verim53; ?>" size="2" tabindex="53" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v54" id="v54" type="text" value="<?php echo $verim54; ?>" size="2" tabindex="54" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v55" id="v55" type="text" value="<?php echo $verim55; ?>" size="2" tabindex="55" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v56" id="v56" type="text" value="<?php echo $verim56; ?>" size="2" tabindex="56" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v57" id="v57" type="text" value="<?php echo $verim57; ?>" size="2" tabindex="57" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v58" id="v58" type="text" value="<?php echo $verim58; ?>" size="2" tabindex="58" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v59" id="v59" type="text" value="<?php echo $verim59; ?>" size="2" tabindex="59" onchange="topla13();" onkeydown="topla13();"/></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v60" id="v60" type="text" value="<?php echo $verim60; ?>" size="2" tabindex="60" onchange="topla13();" onkeydown="topla13();"/></th>

</tr>

  <tr>

     

    <input name="v61" type="hidden" value="<? echo $verim61 ; ?>" size="15"/>

    <input name="v62" type="hidden" value="<? echo $verim62 ; ?>" size="15"/>

    <input name="v63" type="hidden" value="<? echo $verim63 ; ?>" size="15"/>

    <input name="v64" type="hidden" value="<? echo $verim64 ; ?>" size="15"/>

    <input name="v65" type="hidden" value="<? echo $verim65 ; ?>" size="15"/>

    <input name="v66" type="hidden" value="<? echo $verim66 ; ?>" size="15"/>

    <input name="v67" type="hidden" value="<? echo $verim67 ; ?>" size="15"/>

    <input name="v68" type="hidden" value="<? echo $verim68 ; ?>" size="15"/>

    <input name="v69" type="hidden" value="<? echo $verim69 ; ?>" size="15"/>

    <input name="v70" type="hidden" value="<? echo $verim70 ; ?>" size="15"/>

    <input name="v71" type="hidden" value="<? echo $verim71 ; ?>" size="15"/>

    <input name="v72" type="hidden" value="<? echo $verim72 ; ?>" size="15"/>

    <input name="v73" type="hidden" value="<? echo $verim73 ; ?>" size="15"/>

    <input name="v74" type="hidden" value="<? echo $verim74 ; ?>" size="15"/>

    <input name="v75" type="hidden" value="<? echo $verim75 ; ?>" size="15"/>

    <input name="v76" type="hidden" value="<? echo $verim76 ; ?>" size="15"/>

    <input name="v77" type="hidden" value="<? echo $verim77 ; ?>" size="15"/>

    <input name="v78" type="hidden" value="<? echo $verim78 ; ?>" size="15"/>

    <input name="v79" type="hidden" value="<? echo $verim79 ; ?>" size="15"/>

    <input name="v80" type="hidden" value="<? echo $verim80 ; ?>" size="15"/>

    <input name="v81" type="hidden" value="<? echo $verim81 ; ?>" size="15"/>

    <input name="v82" type="hidden" value="<? echo $verim82 ; ?>" size="15"/>

    <input name="v83" type="hidden" value="<? echo $verim83 ; ?>" size="15"/>

    <input name="v84" type="hidden" value="<? echo $verim84 ; ?>" size="15"/>

    <input name="v85" type="hidden" value="<? echo $verim85 ; ?>" size="15"/>

    <input name="v86" type="hidden" value="<? echo $verim86 ; ?>" size="15"/>

    <input name="v87" type="hidden" value="<? echo $verim87 ; ?>" size="15"/>

    <input name="v88" type="hidden" value="<? echo $verim88 ; ?>" size="15"/>

    <input name="v89" type="hidden" value="<? echo $verim89 ; ?>" size="15"/>

    <input name="v90" type="hidden" value="<? echo $verim90 ; ?>" size="15"/>

    <input name="v91" type="hidden" value="<? echo $verim91 ; ?>" size="15"/>

    <input name="v92" type="hidden" value="<? echo $verim92 ; ?>" size="15"/>

    <input name="v93" type="hidden" value="<? echo $verim93 ; ?>" size="15"/>

    <input name="v94" type="hidden" value="<? echo $verim94 ; ?>" size="15"/>

    <input name="v95" type="hidden" value="<? echo $verim95 ; ?>" size="15"/>

    <input name="v96" type="hidden" value="<? echo $verim96 ; ?>" size="15"/>

    <input name="v97" type="hidden" value="<? echo $verim97 ; ?>" size="15"/>

    <input name="v98" type="hidden" value="<? echo $verim98 ; ?>" size="15"/>

    <input name="v99" type="hidden" value="<? echo $verim99 ; ?>" size="15"/>

    <input name="v100" type="hidden" value="<? echo $verim100 ; ?>" size="15"/>

    <input name="v101" type="hidden" value="<? echo $verim101 ; ?>" size="15"/>

    <input name="v102" type="hidden" value="<? echo $verim102 ; ?>" size="15"/>

    <input name="v103" type="hidden" value="<? echo $verim103 ; ?>" size="15"/>

    <input name="v104" type="hidden" value="<? echo $verim104 ; ?>" size="15"/>

    <input name="v105" type="hidden" value="<? echo $verim105 ; ?>" size="15"/>

    <input name="v106" type="hidden" value="<? echo $verim106 ; ?>" size="15"/>

    <input name="v107" type="hidden" value="<? echo $verim107 ; ?>" size="15"/>

    <input name="v108" type="hidden" value="<? echo $verim108 ; ?>" size="15"/>

    <input name="v109" type="hidden" value="<? echo $verim109 ; ?>" size="15"/>

    <input name="v110" type="hidden" value="<? echo $verim110 ; ?>" size="15"/>

    <input name="v111" type="hidden" value="<? echo $verim111 ; ?>" size="15"/>

    <input name="v112" type="hidden" value="<? echo $verim112 ; ?>" size="15"/>

    <input name="v113" type="hidden" value="<? echo $verim113 ; ?>" size="15"/>

    <input name="v114" type="hidden" value="<? echo $verim114 ; ?>" size="15"/>

    <input name="v115" type="hidden" value="<? echo $verim115 ; ?>" size="15"/>

    <input name="v116" type="hidden" value="<? echo $verim116 ; ?>" size="15"/>

    <input name="v117" type="hidden" value="<? echo $verim117 ; ?>" size="15"/>

    <input name="v118" type="hidden" value="<? echo $verim118 ; ?>" size="15"/>

    <input name="v119" type="hidden" value="<? echo $verim119 ; ?>" size="15"/>

    <input name="v120" type="hidden" value="<? echo $verim120 ; ?>" size="15"/>

    <input name="v121" type="hidden" value="<? echo $verim121 ; ?>" size="15"/>

    <input name="v122" type="hidden" value="<? echo $verim122 ; ?>" size="15"/>

    <input name="v123" type="hidden" value="<? echo $verim123 ; ?>" size="15"/>

    <input name="v124" type="hidden" value="<? echo $verim124 ; ?>" size="15"/>

    <input name="v125" type="hidden" value="<? echo $verim125 ; ?>" size="15"/>

    <input name="v126" type="hidden" value="<? echo $verim126 ; ?>" size="15"/>

    <input name="v127" type="hidden" value="<? echo $verim127 ; ?>" size="15"/>

    <input name="v128" type="hidden" value="<? echo $verim128 ; ?>" size="15"/>

    <input name="v129" type="hidden" value="<? echo $verim129 ; ?>" size="15"/>

    <input name="v130" type="hidden" value="<? echo $verim130 ; ?>" size="15"/>

    <input name="v131" type="hidden" value="<? echo $verim131 ; ?>" size="15"/>

    <input name="v132" type="hidden" value="<? echo $verim132 ; ?>" size="15"/>

    <input name="v133" type="hidden" value="<? echo $verim133 ; ?>" size="15"/>

    <input name="v134" type="hidden" value="<? echo $verim134 ; ?>" size="15"/>

    <input name="v135" type="hidden" value="<? echo $verim135 ; ?>" size="15"/>

    <input name="v136" type="hidden" value="<? echo $verim136 ; ?>" size="15"/>

    <input name="v137" type="hidden" value="<? echo $verim137 ; ?>" size="15"/>

    <input name="v138" type="hidden" value="<? echo $verim138 ; ?>" size="15"/>

    <input name="v139" type="hidden" value="<? echo $verim139 ; ?>" size="15"/>

    <input name="v140" type="hidden" value="<? echo $verim140 ; ?>" size="15"/>

    <input name="v141" type="hidden" value="<? echo $verim141 ; ?>" size="15"/>

    <input name="v142" type="hidden" value="<? echo $verim142 ; ?>" size="15"/>

    <input name="v143" type="hidden" value="<? echo $verim143 ; ?>" size="15"/>

    <input name="v144" type="hidden" value="<? echo $verim144 ; ?>" size="15"/>

    <input name="v145" type="hidden" value="<? echo $verim145 ; ?>" size="15"/>

    <input name="v146" type="hidden" value="<? echo $verim146 ; ?>" size="15"/>

    <input name="v147" type="hidden" value="<? echo $verim147 ; ?>" size="15"/>

    <input name="v148" type="hidden" value="<? echo $verim148 ; ?>" size="15"/>

    <input name="v149" type="hidden" value="<? echo $verim149 ; ?>" size="15"/>

    <input name="v150" type="hidden" value="<? echo $verim150 ; ?>" size="15"/>

    <input name="v151" type="hidden" value="<? echo $verim151 ; ?>" size="15"/>

    <input name="v152" type="hidden" value="<? echo $verim152 ; ?>" size="15"/>

    <input name="v153" type="hidden" value="<? echo $verim153 ; ?>" size="15"/>

    <input name="v154" type="hidden" value="<? echo $verim154 ; ?>" size="15"/>

    <input name="v155" type="hidden" value="<? echo $verim155 ; ?>" size="15"/>

    <input name="v156" type="hidden" value="<? echo $verim156 ; ?>" size="15"/>

    <input name="v157" type="hidden" value="<? echo $verim157 ; ?>" size="15"/>

    <input name="v158" type="hidden" value="<? echo $verim158 ; ?>" size="15"/>

    <input name="v159" type="hidden" value="<? echo $verim159 ; ?>" size="15"/>

    <input name="v160" type="hidden" value="<? echo $verim160 ; ?>" size="15"/>

    <input name="v161" type="hidden" value="<? echo $verim161 ; ?>" size="15"/>

    <input name="v162" type="hidden" value="<? echo $verim162 ; ?>" size="15"/>

    <input name="v163" type="hidden" value="<? echo $verim163 ; ?>" size="15"/>

    <input name="v164" type="hidden" value="<? echo $verim164 ; ?>" size="15"/>

    <input name="v165" type="hidden" value="<? echo $verim165 ; ?>" size="15"/>

    <input name="v166" type="hidden" value="<? echo $verim166 ; ?>" size="15"/>

    <input name="v167" type="hidden" value="<? echo $verim167 ; ?>" size="15"/>

    <input name="v168" type="hidden" value="<? echo $verim168 ; ?>" size="15"/>

    <input name="v169" type="hidden" value="<? echo $verim169 ; ?>" size="15"/>

    <input name="v170" type="hidden" value="<? echo $verim170 ; ?>" size="15"/>

    <input name="v171" type="hidden" value="<? echo $verim171 ; ?>" size="15"/>

    <input name="v172" type="hidden" value="<? echo $verim172 ; ?>" size="15"/>

  </tr>

<tr>

    <th  width="4%" align="center" bgcolor="white" colspan="25">&nbsp;</th>

  </tr>  

  <tr>

    <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10"><?php echo trsuz("DÜZENLEYEN");?></th>

    <th  width="4%" bgcolor="white" colspan="5" rowspan="5"></th>

    <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10">ONAYLAYAN</th>

  </tr>

  <tr>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("Adı Soyadı");?></th>

    <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<? echo trsuz($asead) ; ?>" size="40" tabindex="173"/></th>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("Adı Soyadı");?></th>

    <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v176"  type="text" value="<? echo trsuz($drad) ; ?>" size="40" tabindex="176"/></th>

  </tr>

  <tr>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("Ünvanı");?></th>

    <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v174"  type="text" value="<? echo trsuz($aseunv) ; ?>" size="40" tabindex="174"/></th>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("Ünvanı");?></th>

    <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v177"  type="text" value="<? echo trsuz($ahkod).' '.trsuz($ahno) ;?>" size="40" tabindex="177"/></th>

  </tr>

  <tr>

    <?php

   $a=Date("d/m/Y");

   ?>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Tarih</th>

    <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input id="masktest" class="style1" name="v175"  type="text" value=<? echo $a; ?> size="40" tabindex="175"/></th>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Tarih</th>

    <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input id="masktest1" class="style1" name="v178"  type="text" value="<? echo $a;?>" size="40" tabindex="178"/></th>

  </tr>

  <tr>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("İmza");?></th>

    <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>

    <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("İmza");?></th>

    <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;</font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;NOT:</font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<?php echo trsuz("*  Form aylık olarak,sağlık raporu düzenleyen kurum ve kuruluş tarafından TSM'ye,TSM tarafından da İl Halk Sağlığı Müdürlüğüne gönderilecektir.");?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  Halk Sağlığı Müdürlüğünce 3 ayda bir formun icmali alınarak THSK Kadın ve Üreme Sağlığı Daire Başkanlığına bildirilecektir.");?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  *Çiftler ilgili sütuna ayrı ayrı kaydedilecektir.");?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  Yaş Gruplarına Göre Dağılım = Öğrenim Durumuna Göre Dağılım = Akrabalık Durumu = Toplam olmalıdır.");?></font></th>

  </tr>

</table>

</form>

</body>

</html>

