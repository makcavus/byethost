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

$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 

$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 

$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 

$yilgelen=$_GET['selectyil'];

$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 

$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

$donem=iconv("UTF-8", "ISO-8859-9", $_GET['donem']);

$secim=iconv("UTF-8", "ISO-8859-9", $_GET['sec']);

include('donemsum.php');

/*echo $ilgelen ;

echo $ilcegelen ;

echo $ocgelen ;

echo $yilgelen ;

echo $aygelen ;*/

/*$resultvyil = @mysql_query("select * from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;

while($sonucum=mysql_fetch_array($resultvyil)){

$ilim=$sonucum['ilidi'];

$ilcem=$sonucum['ilceidi'];

$socadi=$sonucum['vocadi'];

$yilim=$sonucum['vyiladi'];

$ayim=$sonucum['vayadi'];

}



*/

$ahb="NOLU A�LE HEK�ML��� B�R�M�";

$dvks=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8;

$srdks=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23;

$dves=$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38;

$srdes=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;

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

$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;

while($duztarih=mysql_fetch_array($atarih)){

$dtarih=$duztarih['yeni_tarih'];

}

$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;

while($ontarih=mysql_fetch_array($btarih)){

$otarih=$ontarih['yeni_tarih'];

}

?>

<br>

<?

	   $ilcegelenk=iconv("iso-8859-9", "utf-8", $_GET['selectilce']); 

       $ocgelenk=iconv("iso-8859-9", "utf-8",$_GET['selectoc']); 

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

if($ilcegelen=="�l�e Se�iniz" or $secim=='ilsec' and $ilcegelen!="�l�e Se�iniz"){

$kurum=$ilinadi;

}elseif($ocgelen=="Aile Hekimini Se�iniz"){

$kurum=$ilinadi.'-'.$ilceninadi;

}elseif($ilcegelen!="�l�e Se�iniz" and $ocgelen!="Aile Hekimini Se�iniz"){

$kurum=$ilinadi.'-'.$ilceninadi;

}else{

$kurum=trsuz('');

}

if($secim=='ilsec'){

$ilcesi=trsuz('');

$asmsi=trsuz('');

$ahkodad=trsuz('');

}elseif($secim=='ilcesec'){

$ilcesi=$ilceninadi;

$asmsi=trsuz('');

$ahkodad=trsuz('');

}elseif($secim=='aheksec'){

$ilcesi=$ilceninadi;

$asmsi=$asmninadine;

$ahkodad=$ocgelen.' '.$ahb;

}else{

$ilcesi=trsuz('');

$asmsi=trsuz('');

$ahkodad=trsuz('');

}



	   $top="�L TOPLAMI";

	   if($donem=='ilk'){

	   $donemi='1.D�NEM';

	   }elseif($donem=='ikinci'){

	   $donemi='2.D�NEM';

	   }elseif($donem=='ucuncu'){

	   $donemi='3.D�NEM';

	   }elseif($donem=='son'){

	   $donemi='4.D�NEM';

	   } 



	  // echo '<label>'.$kurum.' '.$yilgelen.'-'.$aygelen.' '.$donemi.'</label>' ; ?>

	   

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">

<th class="style6" width="24%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php

echo '<form action="engel.htm" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

echo '<input type="hidden" name="donem" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$donem.'" />';

echo '<input type="hidden" name="sec" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$secim.'" />';

?>

<input TYPE="SUBMIT" value="<?php echo trsuz($pdfbaslik); ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/>

<?

echo '</form>';

?>

</th>

<th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($donemgorbaslik); ?></font></th>

<th class="style6" width="24%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php

echo '<form action="/excelmysql/eodfdonemxls.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

echo '<input type="hidden" name="donem" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$donem.'" />';

echo '<input type="hidden" name="sec" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$secim.'" />';

?>

<input TYPE="SUBMIT" value="<?php echo trsuz($excelbaslik); ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/>

<?

echo '</form>';

?>

</th>

</table>

<br>

 <table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">



<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />

<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />

<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />

<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />

<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />

<tr>

    <th width="27%" align="center"bordercolor="#000000" bgcolor="white" class="style5"><? $top="�L TOPLAMI"; echo '<font size="3" family="Arial"><label>'.trsuz($kurum).' '.$yilgelen.'-'.trsuz($donemi).'</label></font>' ; ?></th>

</tr>

</TABLE>

<br>

<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">

      <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />

      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />

      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />

      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />

      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />

      <tr>

        <th  width="4%" align="left" bordercolor="white" colspan="25">EK 3</th>

	</tr>

    <tr>

    <th  width="4%" align="center" bordercolor="white" colspan="25"><font face="Arial" size="4"><?php echo trsuz($frmbaslik); ?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="center" bordercolor="white" colspan="25">&nbsp;</th>

  </tr>

  <tr>

    <th  width="4%" align="left" bordercolor="white" colspan="9"><?php echo trsuz($ililcebaslik); ?></th>

    <th  width="4%" align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.trsuz($kurum).'</font>' ;?></th>  

  </tr>

  <tr>	

    <th  width="4%" align="left" bordercolor="white" colspan="9"><?php echo trsuz($ahekkodbaslik); ?></th>

    <th  width="4%" align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.trsuz($asmsi).'&nbsp;&nbsp;'.trsuz($ahkodad).'</font>' ;?></th>

  </tr>

  <tr>

    <th  width="4%" align="left"bordercolor="white"colspan="9"><?php echo trsuz($sagrapdonembaslik); ?></th>

    <th  width="4%"align="left" bordercolor="white" colspan="16"><? echo '<font size="3" family="Arial">'.$yilgelen.' '.trsuz($donemi).'</font>' ;?></th>

  </tr>

  <tr>

  <th  width="4%"align="center" bordercolor="white" colspan="25">&nbsp;</th>

  </tr>

  <tr>

    <th  width="10%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="5"><font face="Arial" size="3">&nbsp;</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="3"><font face="Arial" size="3">TOPLAM</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="8"><font face="Arial" size="3"><?php echo trsuz($ygdagilimbaslik); ?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="7"><font face="Arial" size="2"><?php echo trsuz($oddagilimbaslik); ?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="2"><font face="Arial" size="2">AKRABALIK DURUMU*</font></th>

</tr>

<tr>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz($onyedibaslik); ?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">18-24</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">25-29</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">30-34</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">35-39</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">40-44</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">45-49</font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz($ellibaslik); ?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz($oydbaslik); ?></font></th>

    <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Okur Yazar</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz($ilkortabaslik); ?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz($lisebaslik); ?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="3"><font face="Arial" size="2"><?php echo trsuz($yobaslik); ?></font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">VAR</font></th>

	<th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">YOK</font></th>

  </tr>

  <tr>

  <th  width="10%" height="50" align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz($danverkadin); ?></font></th>

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

   <th  width="10%" height="50" colspan="5" align="center" bgcolor="white" class="style5"><font face="Arial" size="2"><?php echo trsuz($sagrapverkadin); ?></font></th> 

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

   <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz($danvererkek); ?></font></th>

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

   <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz($sagrapvererkek); ?></font></th>

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

        <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10"><?php echo trsuz($duzenleyen); ?></th>

        <th  width="4%" bgcolor="white" colspan="5" rowspan="5"></th>

        <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10">ONAYLAYAN</th>

      </tr>

      <tr>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz($duzadbaslik); ?></th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo trsuz($asead) ; ?></th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz($onadbaslik); ?></th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo trsuz($drad) ; ?></th>

      </tr>
      <tr>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz($duzadbaslik); ?></th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo trsuz($aseunv) ; ?></th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz($onunbaslik); ?></th>

        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><? echo trsuz($ahkod).' '.trsuz($ahno) ;?></th>

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

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz($duzimzabaslik); ?></th>

        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>

        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz($onimzabaslik); ?></th>

        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>

      </tr>

	  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;</font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;NOT:</font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz($not1); ?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz($not2); ?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz($not3); ?></font></th>

  </tr>

  <tr>

    <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz($not4); ?></font></th>

  </tr>

    </table>

	</form>

</body>

</html>