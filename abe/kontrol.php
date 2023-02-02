<a id="basadon"></a>
<?php header("Cache-Control: no-cache,no-store");
include("../con_023.php");
include("../con_abe.php");
include('abealanlari.php');
$countryId=$_GET['selectil']; 
$stateId= $_GET['selectilce']; 
$ocak=$_GET['selectoc']; 
$yil=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;
//echo '<br>';
//echo '<br>';
$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like '%Dr.%' and v177 like '%Hastane%' and vayadi='$ay')";
$hastverisorgula=mysqli_query($dbhabe,$kacverihast);
$hastkacverisay=mysqli_num_rows($hastverisorgula);
//echo $hastkacverisay;
//echo '<br>';
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM' or ilinad='$countryId' and ilce='$stateId' and dradi like 'Uzm.Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Uzm.Dr.%' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysqli_query($dbhabe,$kacveri);
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
//echo '<br>';
/*echo $countryId ;
echo $stateId ;
echo $ocak ;
echo $yil ;
echo $ay ;*/
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$countryId')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vayadi='$ay')";
$socsorgu=mysqli_query($dbhabe,$vtsec);
$say=mysqli_num_rows($socsorgu);
echo '<p>';
//echo $say;
if($countryId == "" and $say<1){
$uyar=$ilsecbaslik;
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId == $ilcesecim and $say<1){
$uyar=$ilcesecbaslik;
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != $ilcesecim and $ocak == $ahsecim and $say<1){
$uyar=$kursecbaslik;
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != $ilcesecim and $ocak != $ahsecim and $say<1){
$uyar="";
echo '<font style="color:Green">'.$uyar.'</font>' ;

  echo '<a class="btn btn-sm btn-primary" href=# onClick="ykay();" style="width: 100px"><i class="fa fa-floppy-o" aria-hidden="true"></i> '
   .$kayitekle.'</a>';
    echo "<br>";
    echo "<br>";
  }else{
$uyar=$uyarbaslik;
//echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=$_GET['selectoc'];

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
<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>	
<?php 
include('../con_023.php');
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

/*echo '<form action="form023pdf.php" method="get" name="gor">' ;

echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';

echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';

echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';

echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';

echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';

//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.PNG"></BUTTON>';

echo '</form>';*/
$resultvyil = @mysqli_query($dbhabe,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
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
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbhabe,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbhabe,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
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
include('../con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
$sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
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
<th class="style6" width="9%" align="left" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onclick="deg();"><img src="../images/degistir.PNG" /></a></th>
<th class="style6" width="9%" align="left" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="verikurumpdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
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
<input name="SUBMIT22" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value=" <?php echo $pdfbaslik; ?> "/></th>
<?php
echo '</form>';
?>
<th class="style6" width="2%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="toplamlar.php" style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color='orange'" onMouseOut="this.style.color='black'"><img src="../images/toplamlar.PNG" /></a></th>
  <th class="style6" width="50%" align="center" bordercolor="#FFCC00" bgcolor="blue"><font size="4" color="#FFFFCC"><?php echo $kayitgorbaslik; ?></font></th>
  <?php
  if($kachastsay==$hastkacverisay){
$rapor="Rapor";
echo '<th class="style6" width="2%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00""><a href="../c3c4/frm023kayit.php" style="color:#000000;font-weight:bold;background:#66FF00" onMouseOver="this.style.color="orange"" onMouseOut="this.style.color="black""><img src="../images/rapor.PNG" /></a></th>';
}
?>
  <th class="style6" width="12%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
<?php
echo '<form action="/excelmysql/abeaykontxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT12" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $excelbaslik; ?>"/></th>	
<?php
echo '</form>';
?>
	<th class="style6" width="8%" align="right" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.png"></a></th>
</table>
<div id="sifre" class="giris_zemin">
		  <form action="onay.php" method="post" name="giris" id="giris">
		    <table width="100" border="0">
<?php 
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></th>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">'.$silmeonay.'</font></strong></th>';	
echo '</tr>';
echo '</table>';	
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th class="style6" rowspan="2" align="center"><img src="images/siluyar.jpg"></th>';
echo '<th class="style6" align="center" height="30" colspan="2"><font size="2px" style="color:red" face="tahoma">'.$silemin.'</font></th>';
echo '</tr>';
echo '<tr>';
echo '<th class="style6" align="center"><a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.png"></a></th>';
echo '<th class="style6" align="center"><a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a></th>';
echo '</tr>';
?>
          </table>
		  </form>
</div>
	<div id="fon" class="arka_fon"></div>
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
  <tr>
    <th  width="100%" align="center"bordercolor="white" colspan="12"><font size="3"><?php echo $frmbaslik; ?></font></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo $ililcebaslik; ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><?php echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.'</font>' ;?></th>
  </tr>
  <tr>
     <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo $kurumbaslik; ?></th>
	 <?php
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine.' - '.$ocgelen;
	}
	?>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><?php echo '<font size="3" family="Arial">'.$kurum.'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white"colspan="1"><?php echo $donembaslik; ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><?php echo '<font size="3" family="Arial">'.$xaygelentam.'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="84%" align="center" class="style5" bgcolor="white" colspan="10"><font face="Arial" size="3"><?php echo $abevakabaslik; ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="3">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="36%"align="center" class="style5" bgcolor="#CEF6EC" colspan="4" rowspan="2"><font face="Arial" size="3"><?php echo $hastsinifbaslik; ?></font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">A09</font><br />
        <font face="Arial" size="2"><?php echo $addiarebaslik; ?></font><br />
      <font face="Arial" size="2"><?php echo $adenfbaslik; ?></font><br />
      <font face="Arial" size="2">tahmin edilen </font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">R11</font><br />
        <font face="Arial" size="2">&nbsp;</font><br />
      <font face="Arial" size="2"><?php echo $ronbirbaslik; ?></font><br />
      <font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">K52</font><br />
        <font face="Arial" size="2">&nbsp;</font><br />
      <font face="Arial" size="2"><?php echo $keienfbaslik; ?></font><br />
      <font face="Arial" size="2"><?php echo $keigastbaslik; ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="3">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="36%"align="center" class="style5" bgcolor="#CEF6EC" colspan="4"><font face="Arial" size="3"><?php echo $vakasaybaslik; ?></font></th>
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
    <th  width="100%" align="center" class="style5" bgcolor="white" colspan="12"><font face="Arial" size="3"><?php echo $labbaslik; ?></font></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $kulturbaslik; ?></font></th>
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
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $parazitbaslik; ?></font></th>
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
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $viralbaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $rotabaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $norobaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $adenobaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $hepabaslik; ?></font></th>
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
  <?php
include('../con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
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
$ahkodum=$ahkod.' '.$ahno;
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
<th  width="24%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $duzbaslik; ?></th>
<th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
<th  width="8%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
<th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
</tr>
<tr>
   <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></th>
   <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $asead ; ?></th>
   <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik; ?></th>
   <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $drad ; ?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $aseunv ; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $ahkodum ;?></th>
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
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $duztarih; ?></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><?php echo $ontarih?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></th>
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

echo '</form>';
echo '<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">';
//echo '<p>';
echo '<th class="style6" width="34%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">&nbsp;</th>';
echo '<th class="style6" width="8%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="deg();"><img src="../images/degistir.PNG"></a></th>';
//echo'&nbsp;&nbsp;&nbsp;&nbsp;';
//echo '<th class="style6" width="8%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="git();"><img src="../images/goster.PNG"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.png"></a></th>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">';
echo '<form action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT2" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value=" <?php echo $pdfbaslik; ?> "/>
<?php
echo '</th>';
echo '</form>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<th class="style6" width="8%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">';
echo '<form action="/excelmysql/abeaykontxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
?>
<input name="SUBMIT1" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo $excelbaslik; ?>"/>
<?php
echo '</th>';
echo '</form>';
echo '<th class="style6" width="34%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">&nbsp;</th>';
?>
</table>
<div id="sifre" class="giris_zemin">
		  <form action="onay.php" method="post" name="giris" id="giris">
		    <table width="100" border="0">
<?php 
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></th>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">'.$silmeonay.'</font></strong></th>';	
echo '</tr>';
echo '</table>';	
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th class="style6" rowspan="2" align="center"><img src="images/siluyar.jpg"></th>';
echo '<th class="style6" align="center" height="30" colspan="2"><font size="2px" style="color:red" face="tahoma">'.$silemin.'</font></th>';
echo '</tr>';
echo '<tr>';
echo '<th class="style6" align="center"><a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.png"></a></th>';
echo '<th class="style6" align="center"><a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a></th>';
echo '</tr>';
?>
          </table>
	  </form>
</div>
	<div id="fon" class="arka_fon"></div>
<?php
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.PNG"></BUTTON>';
echo '</form>';
}
$kachast="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like '%Dr.%' and asmadi like '%Hastane%')";
$hastsorgula=mysqli_query($dbh,$kachast);
$kachastsay=mysqli_num_rows($hastsorgula);
//echo $kachastsay;
echo '<br>';
$kacverihast="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like '%Dr.%' and v177 like '%Hastane%' and vayadi='$ay')";
$hastverisorgula=mysqli_query($dbhabe,$kacverihast);
while($hasteksiksonucum=mysqli_fetch_array($hastverisorgula)){
$eksikhast=$hasteksiksonucum['vocadi'];
//echo $eksikhast;
}
$hastkacverisay=mysqli_num_rows($hastverisorgula);
//echo $hastkacverisay;
if($hastkacverisay==0){
$boshast=$hastverigirilmedi;
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
$bhast=$hastveriyok;
echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kachastsay." ".$ahast." ".$girilmeyenhast." ".$bhast;?></font></th>
</table>
<?php
}else{
$tamamhast=$hastveritamam;
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma'><?php echo $tamamhast;?></font></th>
</table>
<?php
}
?>
<?php
$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM' or ilinad='$countryId' and ilce='$stateId' and dradi like 'Uzm.Dr.%' and asmadi like '%ASM')";
$sorgula=mysqli_query($dbh,$kacahek);
$kacaheksay=mysqli_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vayadi='$ay' or ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Uzm.Dr.%' and v177 like '%Nolu A%' and vayadi='$ay')";
$verisorgula=mysqli_query($dbhabe,$kacveri);
while($eksiksonucum=mysqli_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysqli_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos=$bosbaslik;
echo "<br>";
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $bos;?></font></th>
</table>
<?php
}elseif($kacaheksay!=$kacverisay){
if($kacaheksay==$kacverisay){
$girilmeyenahek=$ahveriyok;
}else{
$girilmeyenahek=$kacaheksay-$kacverisay;
}
$a=$ahbirbaslik;
$b=$ahvgbaslik;
echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $kacaheksay." ".$a." ".$girilmeyenahek." ".$b;?></font></th>
</table>
<?php
$gelmeyenler=$gelmeyenbaslik;
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='blue'><?php echo $gelmeyenler;?></font></th>
</table>
<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vyiladi='$yil' and veri.vayadi='$ay' or ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Uzm.Dr.%' and veri.v177 like '%Nolu A%' and veri.vyiladi='$yil' and veri.vayadi='$ay'
WHERE veri.vocadi IS NULL";
$etablosu=mysqli_query($dbhabe,$eksiktablosu);
while($eahsonucum=mysqli_fetch_array($etablosu)){
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
$tamam=$tamambaslik;
//echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma'><?php echo $tamam;?></font></th>
</table>
<?php
}
@mysqli_close($dbhabe) ;
?>


