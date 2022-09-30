<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Untitled Document</title>

<link href="arkakara.css" rel="stylesheet" type="text/css"/>



<script language="JavaScript" src="arkakara.js" type="text/javascript">

</script>

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

$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 

$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

include('devir.php');

/*echo $ilgelen ;

echo $ilcegelen ;

echo $ocgelen ;

echo $yilgelen ;

echo $aygelen ;*/

echo '<form action="form023pdf.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';

echo '<br>';

echo '</form>';

?>

<div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get">



<?php



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

$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;

while($duztarih=mysql_fetch_array($atarih)){

$dtarih=$duztarih['yeni_tarih'];

}

$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;

while($ontarih=mysql_fetch_array($btarih)){

$otarih=$ontarih['yeni_tarih'];

}

 if($ilcegelen=="İlçe Seçiniz"){

$ilkod=substr(trim($socadi),0,2);



}elseif($ocgelen=="Aile Hekimini Seçiniz"){

$ilkod=substr(trim($socadi),0,2);

$ilcekod=substr(trim($socadi),3,2);



}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){

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
$ahb="NOLU AİLE HEKİMLİĞİ BİRİMİ";

$dvks=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8;

$srdks=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23;

$dves=$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38;

$srdes=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;



?>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">

<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onclick="deg();"><img src="images/degistir.PNG" /></a></th>

<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php

echo '<form action="/excelmysql/form102ayxls.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

?><input TYPE="SUBMIT" value="Excele Yazdır"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/>

<?

echo '</form>';

?>

</th>

  <th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><? $baslik='Kayıt Görüntüleme Ekranı'; echo $baslik;?></font></th>

	<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"">&nbsp;</a></th>	

	<th class="style6" width="13%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.PNG"></a></th>

</table>

<div id="sifre" class="giris_zemin">

		  

		  <form action="onay.php" method="post" name="giris" id="giris">

		    <table width="100" border="0">

              

<?php 

echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';

echo '<tr>';

echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></th>';

echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">Kayıt Silme Onayı</font></strong></th>';	

echo '</tr>';

echo '</table>';	

echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';

echo '<tr>';

echo '<th class="style6" rowspan="2" align="center"><img src="images/siluyar.jpg"></th>';

echo '<th class="style6" align="center" height="30" colspan="2"><font size="2px" style="color:red" face="tahoma">Bu Kaydı Silmek İstediğinize Emin misiniz?</font></th>';

echo '</tr>';

echo '<tr>';

echo '<th class="style6" align="center"><a href="#" tabindex="1" title="hayir" onClick="git();"><img src="images/hayir.PNG"></a></th>';

echo '<th class="style6" align="center"><a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.PNG"></a></th>';

echo '</tr>';



?>

              

           </table>

	

		  </form>

		</div>

	<div id="fon" class="arka_fon"></div>

	<br>

	<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

      <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />

      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />

      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />

      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />

      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />

      <tr>

      <th  width="4%" align="left"bordercolor="white" colspan="25">EK 3</th>

	</tr>

    <tr>

    <th  width="4%" align="center" bordercolor="white" colspan="25"><font face="Arial" size="4">EVLİLİK ÖNCESİ DANIŞMANLIK FORMU</font></th>

  </tr>

  <tr>

    <th  width="4%" align="center" bordercolor="white" colspan="25">&nbsp;</th>

  </tr>

  <tr>

    <th  width="4%" align="left"bordercolor="white" colspan="9">İLİN/İLÇENİN ADI:</th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.$ilinadi.' / '.$ilceninadi.'</font>' ;?></th>  

  </tr>

  <tr>	

    <th  width="4%" align="left"bordercolor="white" colspan="9">SAĞLIK RAPORU DÜZENLEYEN KURULUŞUN ADI:</th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.$asmninadine.'&nbsp;&nbsp;'.$ocgelen.'&nbsp;&nbsp;'.$ahb.'</font>' ;?></th>

  </tr>

  <tr>

    <th  width="4%" align="left"bordercolor="white"colspan="9">SAĞLIK RAPORUNUN DÜZENLENDİĞİ DÖNEM:</th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.$aygelen.'-'.$yilgelen.'</font>' ;?></th>

  </tr>

  <tr>

  <th  width="4%"align="center" bordercolor="white" colspan="25">&nbsp;</th>

  </tr>

  <tr>

    <th  width="10%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="5"><font face="Arial" size="3">&nbsp;</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="3"><font face="Arial" size="3">TOPLAM</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="8"><font face="Arial" size="3">YAŞ GRUPLARINA GÖRE DAĞILIM</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="7"><font face="Arial" size="2">ÖĞRENİM DURUMUNA GÖRE DAĞILIM</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="2"><font face="Arial" size="2">AKRABALIK DURUMU*</font></th>

</tr>

<tr>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">17 ve altı</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">18-24</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">25-29</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">30-34</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">35-39</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">40-44</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">45-49</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">50 ve üzeri</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Okur Yazar Değil</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Okur Yazar</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">İlk - Orta</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Lise</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="3"><font face="Arial" size="2">Yüksekokul/ Üniversite</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">VAR</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">YOK</font></th>

  </tr>

  <tr>

  <th  width="10%" height="50" align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2">DANIŞMANLIK VERİLEN KADIN SAYISI</font></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $dvks; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim1; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim2; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim3; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim4; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim5; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim6; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim7; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim8; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim9; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim10; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim11; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim12; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $verim13; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim14; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim15; ?></th>

  </tr>

<tr>

   <th  width="10%" height="50" colspan="5" align="center" bgcolor="white" class="style5"><font face="Arial" size="2">SAĞLIK RAPORU DÜZENLENEN KADIN SAYISI</font></th> 

   <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $srdks; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim16; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim17; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim18; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim19; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim20; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim21; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim22; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim23; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim24; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim25; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim26; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim27; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $verim28; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim29; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim30; ?></th>

</tr>

<tr>

   <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2">DANIŞMANLIK VERİLEN ERKEK SAYISI</font></th>

   <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $dves; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim31; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim32; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim33; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim34; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim35; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim36; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim37; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim38; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim39; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim40; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim41; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim42; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $verim43; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim44; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim45; ?></th>

</tr>

<tr>

   <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2">SAĞLIK RAPORU DÜZENLENEN ERKEK SAYISI</font></th>

   <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $srdes; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim46; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim47; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim48; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim49; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim50; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim51; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim52; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim53; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim54; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim55; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim56; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim57; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $verim58; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim59; ?></th>

  <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><?php echo $verim60; ?></th>

</tr>

      <tr>

        

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

      </tr>

      <tr>

    <th  width="4%" align="center" bgcolor="white" colspan="25">&nbsp;</th>

  </tr>  

      <tr>

        <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10">DÜZENLEYEN</th>

        <th  width="4%" bgcolor="white" colspan="5" rowspan="5"></th>

        <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10">ONAYLAYAN</th>

      </tr>

      <tr>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Adı Soyadı</th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo $asead ; ?></th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Adı Soyadı</th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo $drad ; ?></th>

      </tr>

      <tr>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Ünvanı</th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo $aseunv ; ?></th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Ünvanı</th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo $ahkod.' '.$ahno ;?></th>

      </tr>

      <tr>

        <?php

   $a=Date("d/m/Y");

   ?>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Tarih</th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo $a; ?></th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Tarih</th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo $a;?></th>

      </tr>

      <tr>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;İmza</th>

        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;İmza</th>

        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>

      </tr>

    </table>

	</form>

</body>

</html>