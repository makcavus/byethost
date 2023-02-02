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

<script language="JavaScript" src="kaydet.js" type="text/javascript">

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
include('abealanlari.php');

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

$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

//include('devir.php');

/*echo $ilgelen ;

echo $ilcegelen ;

echo $ocgelen ;

echo $yilgelen ;

echo $aygelen ;*/

$resultvyil = @mysql_query("select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;

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

?>

<br>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">

<tr>

<th class="style6" width="3%"align="left" bordercolor="yellow" bgcolor="#FFCC00" colspan="5"><a href=# onClick="kontrol();"><img src="images/iptal.PNG"></a></th>

<th class="style6" width="3%" align="center" bordercolor="white" bgcolor="blue" colspan="12" ><font size="4" color="yellow"><?php echo trsuz($deggorbaslik); ?></font></th>

<th class="style6" width="3%" align="right" bordercolor="yellow" bgcolor="FFCC00" colspan="5" ><a href=# onClick="girdiyidegistir();"><img src="images/degistir.PNG"></a></th>

</tr>

</table>



<br>

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />

  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />

  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo trsuz($ocgelen) ;?>" />

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

    <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.trsuz($ilinadi).'-'.trsuz($ilceninadi).'</font>' ;?></th>

  </tr>

  <tr>

    <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo trsuz($kurumbaslik); ?></th>

	<?php

	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){

	$kurum=$asmninadine;

	}else{

	$kurum=$asmninadine.' - '.$ocgelen;

	}

	?>

    <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.trsuz($kurum).'</font>' ;?></th>

  </tr>

  <tr>

    <th  width="12%" align="left"bordercolor="white"colspan="1"><?php echo trsuz($donembaslik); ?></th>

    <th  width="88%"align="left" bordercolor="white" colspan="11"><? echo '<font size="3" family="Arial">'.$xaygelentam.'</font>' ;?></th>

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

    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v1" id="v1" type="text" value="<?php echo $verim1; ?>" size="5" tabindex="1" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>

    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v2" id="v2" type="text" value="<?php echo $verim2; ?>" size="5" tabindex="2" onchange="topla1();" onkeyup="topla1();" onmouseout="topla1();"/></th>

    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v3" id="v3" type="text" value="<?php echo $verim3; ?>" size="5" tabindex="3" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>

    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v4" id="v4" type="text" value="<?php echo $verim4; ?>" size="5" tabindex="4" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>

    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v5" id="v5" type="text" value="<?php echo $verim5; ?>" size="5" tabindex="5" onchange="topla3();" onkeydown="topla3();" onmouseout="topla3();"/></th>

    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v6" id="v6" type="text" value="<?php echo $verim6; ?>" size="5" tabindex="6" onchange="topla3();" onkeydown="topla3();" onmouseout="topla3();"/></th>

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

    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v7" id="v7" type="text" value="<?php echo $verim7; ?>" size="5" tabindex="7"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v8" id="v8" type="text" value="<?php echo $verim8; ?>" size="5" tabindex="8"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v9" id="v9" type="text" value="<?php echo $verim9; ?>" size="5" tabindex="9"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v10" id="v10" type="text" value="<?php echo $verim10; ?>" size="5" tabindex="10"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v11" id="v11" type="text" value="<?php echo $verim11; ?>" size="5" tabindex="11"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v12" id="v12" type="text" value="<?php echo $verim12; ?>" size="5" tabindex="12"/></th>

  </tr>

  <tr>

    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo trsuz($parazitbaslik); ?></font></th>

    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Entamoeba histolytica (A06)</font></th>

    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Cryptosporodium (A07.2)</font></th>

    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2"><input class="style1" name="v21" id="v21" type="hidden" value="<?php echo $verim21; ?>" size="5"/>

    </font></th>

    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2"><input class="style1" name="v22" id="v22" type="hidden" value="<?php echo $verim22; ?>" size="5"/></font></th>

    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2"><input class="style1" name="v23" id="v23" type="hidden" value="<?php echo $verim23; ?>" size="5"/></font></th>

  </tr>

  <tr>

    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v13" id="v13" type="text" value="<?php echo $verim13; ?>" size="5" tabindex="13"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v14" id="v14" type="text" value="<?php echo $verim14; ?>" size="5" tabindex="14"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v15" id="v15" type="text" value="<?php echo $verim15; ?>" size="5" tabindex="15"/></th>

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

    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v16" id="v16" type="text" value="<?php echo $verim16; ?>" size="5" tabindex="16"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v17" id="v17" type="text" value="<?php echo $verim17; ?>" size="5" tabindex="17"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v18" id="v18" type="text" value="<?php echo $verim18; ?>" size="5" tabindex="18"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v19" id="v19" type="text" value="<?php echo $verim19; ?>" size="5" tabindex="19"/></th>

    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v20" id="v20" type="text" value="<?php echo $verim20; ?>" size="5" tabindex="20"/></th>

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

<input type="hidden" name="v24" value="<? echo $verim24 ; ?>" size="15"/>

<input type="hidden" name="v25" value="<? echo $verim25 ; ?>" size="15"/>

<input type="hidden" name="v26" value="<? echo $verim26 ; ?>" size="15"/>

<input type="hidden" name="v27" value="<? echo $verim27 ; ?>" size="15"/>

<input type="hidden" name="v28" value="<? echo $verim28 ; ?>" size="15"/>

<input type="hidden" name="v29" value="<? echo $verim29 ; ?>" size="15"/>

<input type="hidden" name="v30" value="<? echo $verim30 ; ?>" size="15"/>

<input type="hidden" name="v31" value="<? echo $verim31 ; ?>" size="15"/>

<input type="hidden" name="v32" value="<? echo $verim32 ; ?>" size="15"/>

<input type="hidden" name="v33" value="<? echo $verim33 ; ?>" size="15"/>

<input type="hidden" name="v34" value="<? echo $verim34 ; ?>" size="15"/>

<input type="hidden" name="v35" value="<? echo $verim35 ; ?>" size="15"/>

<input type="hidden" name="v36" value="<? echo $verim36 ; ?>" size="15"/>

<input type="hidden" name="v37" value="<? echo $verim37 ; ?>" size="15"/>

<input type="hidden" name="v38" value="<? echo $verim38 ; ?>" size="15"/>

<input type="hidden" name="v39" value="<? echo $verim39 ; ?>" size="15"/>

<input type="hidden" name="v40" value="<? echo $verim40 ; ?>" size="15"/>

<input type="hidden" name="v41" value="<? echo $verim41 ; ?>" size="15"/>

<input type="hidden" name="v42" value="<? echo $verim42 ; ?>" size="15"/>

    <input type="hidden" name="v43" value="<? echo $verim43 ; ?>" size="15"/>

    <input type="hidden" name="v44" value="<? echo $verim44 ; ?>" size="15"/>

    <input type="hidden" name="v45" value="<? echo $verim45 ; ?>" size="15"/>

    <input name="v46" type="hidden" value="<? echo $verim46 ; ?>" size="15"/>

    <input name="v47" type="hidden" value="<? echo $verim47 ; ?>" size="15"/>

    <input name="v48" type="hidden" value="<? echo $verim48 ; ?>" size="15"/>

    <input name="v49" type="hidden" value="<? echo $verim49 ; ?>" size="15"/>

    <input name="v50" type="hidden" value="<? echo $verim50 ; ?>" size="15"/>

    <input name="v51" type="hidden" value="<? echo $verim51 ; ?>" size="15"/>

    <input name="v52" type="hidden" value="<? echo $verim52 ; ?>" size="15"/>

    <input name="v53" type="hidden" value="<? echo $verim53 ; ?>" size="15"/>

    <input name="v54" type="hidden" value="<? echo $verim54 ; ?>" size="15"/>

    <input name="v55" type="hidden" value="<? echo $verim55 ; ?>" size="15"/>

    <input name="v56" type="hidden" value="<? echo $verim56 ; ?>" size="15"/>

    <input name="v57" type="hidden" value="<? echo $verim57 ; ?>" size="15"/>

    <input name="v58" type="hidden" value="<? echo $verim58 ; ?>" size="15"/>

    <input name="v59" type="hidden" value="<? echo $verim59 ; ?>" size="15"/>

    <input name="v60" type="hidden" value="<? echo $verim60 ; ?>" size="15"/>

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

    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<? echo trsuz($asead) ; ?>" size="30" tabindex="173"/></th>

    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($onadbaslik); ?></th>

    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v176"  type="text" value="<? echo trsuz($drad) ; ?>" size="30" tabindex="176"/></th>

  </tr>

  <tr>

    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($duzunbaslik); ?></th>

    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v174"  type="text" value="<? echo trsuz($aseunv) ; ?>" size="30" tabindex="174"/></th>

    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo trsuz($onunbaslik); ?></th>

    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v177"  type="text" value="<? echo trsuz($ahkod).' '.trsuz($ahno) ;?>" size="30" tabindex="177"/></th>

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

    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input id="masktest" class="style1" name="v175"  type="text" value=<? echo $duztarih; ?> size="30" tabindex="175"/></th>

    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>

    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input id="masktest1" class="style1" name="v178"  type="text" value="<? echo $ontarih;?>" size="30" tabindex="178"/></th>

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

