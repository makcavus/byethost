<?php header("Cache-Control: no-cache,no-store");
//echo rand();
//function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

?>
<?php
include("../con_023.php");
include("c3c4alanlari.php");
$countryId=$_GET['selectil']; 
$stateId=$_GET['selectilce']; 
$ocak=$_GET['selectoc']; 
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
$iladi=@mysqli_query($dbh,"SELECT * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
echo '<form action="PHPWord/samples/Listeleword.php" method="get" name="gor">' ;
?>
<br>
<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="12%"align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">&nbsp;</th>

<?php
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<th class="style6" width="12%" align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><input TYPE="SUBMIT" value="<?php echo $wordbaslik; ?>"  style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"/>
</th> 
<?
echo '</form>';
?>
  <th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="#FFFFCC"><?php echo $kaylisbaslik;?></font></th>
	<th class="style6" width="13%"align="right" bordercolor="yellow" bgcolor="#FFCC00" colspan="5"><a href=# onClick="kontrol();"><img src="images/iptal.PNG"></a></th>	
	<th class="style6" width="12%"align="right" bordercolor="#FFCC00" bgcolor="#FFCC00">&nbsp;</th>
</table>
<br>
<?php 
include("../con_abe.php");
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
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
$ocakyazi=$_GET['selectoc'];
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
echo '<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<th width="6%" align="center" bordercolor="white" class="style5">Tarih:</th><th width="6%" align="center" bordercolor="white" class="style5">'.$il.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$ilce.'</th><th width="15%" align="center" bordercolor="white" class="style5">Kurum</th><th width="4%" align="center" bordercolor="white" class="style5">Sinyal Türü</th><th width="4%" align="center" bordercolor="white" class="style5">'.$topabe.'</th><th width="4%" align="center" bordercolor="white" class="style5">'.$hastabe.'</th><th width="4%" align="center" bordercolor="white" class="style5">'.$esasabe.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$verihat.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$mukkay.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$kumvar.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$topvar.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$aynaile.'</th><th width="6%" align="center" bordercolor="white" class="style5">Meslek Grubu Belli mi ?</th><th width="6%" align="center" bordercolor="white" class="style5">'.$yattedgor.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$duraghasta.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$munvakavar.'</th>';
echo '</table>';
$resultvyil = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$xaygelentarihyil') order by vayadi desc") ;
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

$xaygelentam=$ayim; 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,8,2);
$xaygelentarihay=substr($xaygelentarih,5,2);
$xaygelentarihyil=substr($xaygelentarih,0,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
//echo substr($verim1,0,32);
if(substr($verim1,0,38)=="Veri girişi hatası mevcut değildir."){
$vhata="Hayır";
}else if(substr($verim1,0,32)=="Veri girişi hatası mevcuttur."){
$vhata="Evet";
}
//echo substr($verim2,0,33);
if(substr($verim2,0,42)=="Mükerrer kayıt girişi mevcut değildir."){
$mhata="Hayır";
}else if(substr($verim2,0,33)=="Mükerrer kayıt girişi vardır."){
$mhata="Evet";
}
//echo substr($verim3,0,33);
if(substr($verim3,0,33)=="İkamete göre kümelenme yoktur."){
$khata="Hayır";
}else if(substr($verim3,0,34)=="İkamete göre kümelenme vardır."){
$khata="Evet";
}
//echo substr($verim22,0,86);
if(substr($verim22,0,87)=="Toplu yemek yenilen bir organizasyona katıldıklarına ilişkin bilgi edinilmemiştir."){
$tyhata="Hayır";
}else if(substr($verim22,0,86)=="Toplu yemek yenilen bir organizasyona katıldıklarına ilişkin şu bilgiler edinilmi"){
$tyhata="Evet";
}
//echo substr($verim23,0,36);
if(substr($verim23,0,36)=="Aynı aileye mensup kişiler yoktur."){
$aahata="Hayır";
}else if(substr($verim23,0,39)=="Aynı aileye mensup kişiler mevcuttur."){
$aahata="Evet";
}
//echo substr($verim25,0,51);
if(substr($verim25,0,37)=="Meslek gruplarına ait bilgi yoktur."){
$mghata="Hayır";
}else if(substr($verim25,0,51)=="Meslek gruplarına ait şu bilgiler edinilmiştir:"){
$mghata="Evet";
}
//echo substr($verim35,0,36);
if(substr($verim35,0,43)=="Hastaların hepsi ayaktan tedavi olmuştur."){
$yhhata="Hayır";
}else if(substr($verim35,0,36)=="Yatarak tedavi gören hasta vardır."){
$yhhata="Evet";
}
//echo substr($verim35,0,74);
if(substr($verim35,0,71)=="Hastaların hepsi ayaktan tedavi olmuştur. Durumu kötü hasta yoktur." or substr($verim35,0,75)=="Yatarak tedavi gören hasta vardır. Genel durumu kötü olan hasta yoktur."){
$dahata="Hayır";
}else{
$dahata="Evet";
}
//echo substr($verim36,0,53);
if(substr($verim36,0,53)=="Münferit vakalar olduğu görüşü bildirilmiştir."){
$mvhata="Evet";
}else{
$mvhata="Hayır";
}
if(strstr($verim38, "C3 Sinyali")) 
{ 
 $sinyal="C3"; 
}else{
 $sinyal="C4";
}
$ygtoplam=$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18+$verim19+$verim20+$verim21;
echo '<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<th width="6%" align="center" bordercolor="white" class="style5">'.$noktatarih.'</th><th width="6%" align="left" bordercolor="white" class="style5">'.$ilinadi.'</th><th width="6%" align="left" bordercolor="white" class="style5">'.$ilceninadi.'</th><th width="15%" align="left" bordercolor="white" class="style5">'.$socadi.'</th><th width="4%" align="center" bordercolor="white" class="style5">'.$sinyal.'</th><th width="4%" align="center" bordercolor="white" class="style5">'.$verim110.'</th><th width="4%" align="center" bordercolor="white" class="style5">'.$verim111.'</th><th width="4%" align="center" bordercolor="white" class="style5">'.$ygtoplam.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$vhata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$mhata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$khata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$tyhata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$aahata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$mghata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$yhhata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$dahata.'</th><th width="6%" align="center" bordercolor="white" class="style5">'.$mvhata.'</th>';
echo '</table>';
}


@mysqli_close($dbhabe) ;
?>
</body>
</form>
</html>