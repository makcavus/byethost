<?php
//include('frm013alanlari.php');
require('fpdf.php');
include('../con_023.php');

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
//$ocakyazi=iconv("iso-8859-9", "utf-8", $_GET['selectoc']);

$resultvyil = @mysqli_query($dbh,"select * from veris where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
$duzad=$sonucum['v173'];
$onad=$sonucum['v176'];
$duzun=$sonucum['v174'];
$onun=$sonucum['v177'];
}

$ilceninadi='';  
  $socadi=$ocgelen;
  $yilim=$yilgelen;
  $ayim=$aygelen;
  if($ilgelen>0 and $ilcegelen==0){
  $ilceninadi='';  
  $socadi="İL TOPLAMI";
  $ocgelenx=$ocgelen;
  }elseif($ilgelen>0 and $ilcegelen==0 and $ocgelen==0){
  $socadi="İL TOPLAMI";
  }else if($ilgelen>0 and $ilcegelen>0 and $ocgelen==0){
  $socadi="İLÇE TOPLAMI";
  }elseif($ilgelen>0 and $ilcegelen>0 and $ocgelen!="Aile Hekimini Seçiniz"){
  $ocgelen=$ocgelen;
  }else{
  $socadi=$ilcetopbaslik;
  }
$verim1=$_GET['v1'];
$verim2=$_GET['v2'];
$verim3=$_GET['v3'];
$verim4=$_GET['v4'];
$verim5=$_GET['v5'];
$verim6=$_GET['v6'];
$verim7=$_GET['v7'];
$verim8=$_GET['v8'];
$verim9=$_GET['v9'];
$verim10=$_GET['v10'];
$verim11=$_GET['v11'];
$verim12=$_GET['v12'];
$verim13=$_GET['v13'];
$verim14=$_GET['v14'];
$verim15=$_GET['v15'];
$verim16=$_GET['v16'];
$verim17=$_GET['v17'];
$verim18=$_GET['v18'];
$verim19=$_GET['v19'];
$verim20=$_GET['v20'];
$verim21=$_GET['v21'];
$verim22=$_GET['v22'];
$verim23=$_GET['v23'];
$verim24=$_GET['v24'];
$verim25=$_GET['v25'];
$verim26=$_GET['v26'];
$verim27=$_GET['v27'];
$verim28=$_GET['v28'];
$verim29=$_GET['v29'];
$verim30=$_GET['v30'];
$verim31=$_GET['v31'];
$verim32=$_GET['v32'];
$verim33=$_GET['v33'];
$verim34=$_GET['v34'];
$verim35=$_GET['v35'];
$verim36=$_GET['v36'];
$verim37=$_GET['v37'];
$verim38=$_GET['v38'];
$verim39=$_GET['v39'];
$verim40=$_GET['v40'];
$verim41=$_GET['v41'];
$verim42=$_GET['v42'];
$verim43=$_GET['v43'];
$verim44=$_GET['v44'];
$verim45=$_GET['v45'];
$verim46=$_GET['v46'];
$verim47=$_GET['v47'];
$verim48=$_GET['v48'];
$verim49=$_GET['v49'];
$verim50=$_GET['v50'];
$verim51=$_GET['v51'];
$verim52=$_GET['v52'];
$verim53=$_GET['v53'];
$verim54=$_GET['v54'];
$verim55=$_GET['v55'];
$verim56=$_GET['v56'];
$verim57=$_GET['v57'];
$verim58=$_GET['v58'];
$verim59=$_GET['v59'];
$verim60=$_GET['v60'];
$verim61=$_GET['v61'];
$verim62=$_GET['v62'];
$verim63=$_GET['v63'];
$verim64=$_GET['v64'];
$verim65=$_GET['v65'];
$verim66=$_GET['v66'];
$verim67=$_GET['v67'];
$verim68=$_GET['v68'];
$verim69=$_GET['v69'];
$verim70=$_GET['v70'];
$verim71=$_GET['v71'];
$verim72=$_GET['v72'];
$verim73=$_GET['v73'];
$verim74=$_GET['v74'];
$verim75=$_GET['v75'];
$verim76=$_GET['v76'];
$verim77=$_GET['v77'];
$verim78=$_GET['v78'];
$verim79=$_GET['v79'];
$verim80=$_GET['v80'];
$verim81=$_GET['v81'];
$verim82=$_GET['v82'];
$verim83=$_GET['v83'];
$verim84=$_GET['v84'];
$verim85=$_GET['v85'];
$verim86=$_GET['v86'];
$verim87=$_GET['v87'];
$verim88=$_GET['v88'];
$verim89=$_GET['v89'];
$verim90=$_GET['v90'];
$verim91=$_GET['v91'];
$verim92=$_GET['v92'];
$verim93=$_GET['v93'];
$verim94=$_GET['v94'];
$verim95=$_GET['v95'];
$verim96=$_GET['v96'];
$verim97=$_GET['v97'];
$verim98=$_GET['v98'];
$verim99=$_GET['v99'];
$verim100=$_GET['v100'];
$verim101=$_GET['v101'];
$verim102=$_GET['v102'];
$verim103=$_GET['v103'];
$verim104=$_GET['v104'];
$verim105=$_GET['v105'];
$verim106=$_GET['v106'];
$verim107=$_GET['v107'];
$verim108=$_GET['v108'];
$verim109=$_GET['v109'];
$verim110=$_GET['v110'];
$verim111=$_GET['v111'];
$verim112=$_GET['v112'];
$verim113=$_GET['v113'];
$verim114=$_GET['v114'];
$verim115=$_GET['v115'];
$verim116=$_GET['v116'];
$verim117=$_GET['v117'];
$verim118=$_GET['v118'];
$verim119=$_GET['v119'];
$verim120=$_GET['v120'];
$verim121=$_GET['v121'];
$verim122=$_GET['v122'];
$verim123=$_GET['v123'];
$verim124=$_GET['v124'];
$verim125=$_GET['v125'];
$verim126=$_GET['v126'];
$verim127=$_GET['v127'];
$verim128=$_GET['v128'];
$verim129=$_GET['v129'];
$verim130=$_GET['v130'];
$verim131=$_GET['v131'];
$verim132=$_GET['v132'];
$verim133=$_GET['v133'];
$verim134=$_GET['v134'];
$verim135=$_GET['v135'];
$verim136=$_GET['v136'];
$verim137=$_GET['v137'];
$verim138=$_GET['v138'];
$verim139=$_GET['v139'];
$verim140=$_GET['v140'];
$verim141=$_GET['v141'];
$verim142=$_GET['v142'];
$verim143=$_GET['v143'];
$verim144=$_GET['v144'];
$verim145=$_GET['v145'];
$verim146=$_GET['v146'];
$verim147=$_GET['v147'];
$verim148=$_GET['v148'];
$verim149=$_GET['v149'];
$verim150=$_GET['v150'];
$verim151=$_GET['v151'];
$verim152=$_GET['v152'];
$verim153=$_GET['v153'];
$verim154=$_GET['v154'];
$verim155=$_GET['v155'];
$verim156=$_GET['v156'];
$verim157=$_GET['v157'];
$verim158=$_GET['v158'];
$verim159=$_GET['v159'];
$verim160=$_GET['v160'];
$verim161=$_GET['v161'];
$verim162=$_GET['v162'];
$verim163=$_GET['v163'];
$verim164=$_GET['v164'];
$verim165=$_GET['v165'];
$verim166=$_GET['v166'];
$verim167=$_GET['v167'];
$verim168=$_GET['v168'];
$verim169=$_GET['v169'];
$verim170=$_GET['v170'];
$verim171=$_GET['v171'];
$verim172=$_GET['v172'];
$verim173=$_GET['v173'];
$verim174=$_GET['v174'];
$verim175=$_GET['v175'];
$verim176=$_GET['v176'];
$verim177=$_GET['v177'];
//$verim178=$_GET['v178'];

include('../SForm013/assets/form013_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veris where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veris where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
if($ocgelen=="Önce İlçeyi Seçiniz"){
$kurum=turkce("İL TOPLAMI");
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$kurum=turkce("İLÇE TOPLAMI");
}else{
$kurum=$ocgelen;
}
mysqli_close($dbh);
include('../SForm013/assets/form013_sablonlar/form013_pdf_sablonu.php');
?>
