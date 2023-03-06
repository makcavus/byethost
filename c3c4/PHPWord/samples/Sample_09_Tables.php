<?php
include_once 'Sample_Header.php';
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9",$_GET['selectay']); 
$xaygelentarihgun=substr($aygelen,8,2);
$xaygelentarihay=substr($aygelen,5,2);
$xaygelentarihyil=substr($aygelen,0,4);
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;

//echo trsuz($ocgelen);
//echo $aygelen;
?>
<?php
$resultveri = @mysql_query("select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucumveri=mysql_fetch_array($resultveri)){
/*$vilim=$sonucumveri['ilidi'];
$vilcem=$sonucumveri['ilceidi'];
$vsocadi=$sonucumveri['vocadi'];
$vyilim=$sonucumveri['vyiladi'];
$vayim=$sonucumveri['vayadi'];*/
$vverim1=$sonucumveri['v1'];
$vverim2=$sonucumveri['v2'];
$vverim3=$sonucumveri['v3'];
$vverim4=$sonucumveri['v4'];
$vverim5=$sonucumveri['v5'];
$vverim6=$sonucumveri['v6'];
/*$vverim7=$sonucumveri['v7'];
$vverim8=$sonucumveri['v8'];
$vverim9=$sonucumveri['v9'];
$vverim10=$sonucumveri['v10'];
$vverim11=$sonucumveri['v11'];
$vverim12=$sonucumveri['v12'];
$vverim13=$sonucumveri['v13'];
$vverim14=$sonucumveri['v14'];
$vverim15=$sonucumveri['v15'];
$vverim16=$sonucumveri['v16'];
$vverim17=$sonucumveri['v17'];
$vverim18=$sonucumveri['v18'];
$vverim19=$sonucumveri['v19'];
$vverim20=$sonucumveri['v20'];
$vverim21=$sonucumveri['v21'];
$vverim22=$sonucumveri['v22'];
$vverim23=$sonucumveri['v23'];
$vverim24=$sonucumveri['v24'];
$vverim25=$sonucumveri['v25'];
$vverim26=$sonucumveri['v26'];
$vverim27=$sonucumveri['v27'];
$vverim28=$sonucumveri['v28'];
$vverim29=$sonucumveri['v29'];
$vverim30=$sonucumveri['v30'];
$vverim31=$sonucumveri['v31'];
$vverim32=$sonucumveri['v32'];
$vverim33=$sonucumveri['v33'];
$vverim34=$sonucumveri['v34'];
$vverim35=$sonucumveri['v35'];
$vverim36=$sonucumveri['v36'];
$vverim37=$sonucumveri['v37'];
$vverim38=$sonucumveri['v38'];
$vverim39=$sonucumveri['v39'];
$vverim40=$sonucumveri['v40'];
$vverim41=$sonucumveri['v41'];
$vverim42=$sonucumveri['v42'];
$vverim43=$sonucumveri['v43'];
$vverim44=$sonucumveri['v44'];
$vverim45=$sonucumveri['v45'];
$vverim46=$sonucumveri['v46'];
$vverim47=$sonucumveri['v47'];
$vverim48=$sonucumveri['v48'];
$vverim49=$sonucumveri['v49'];
$vverim50=$sonucumveri['v50'];
$vverim51=$sonucumveri['v51'];
$vverim52=$sonucumveri['v52'];
$vverim53=$sonucumveri['v53'];
$vverim54=$sonucumveri['v54'];
$vverim55=$sonucumveri['v55'];
$vverim56=$sonucumveri['v56'];
$vverim57=$sonucumveri['v57'];
$vverim58=$sonucumveri['v58'];
$vverim59=$sonucumveri['v59'];
$vverim60=$sonucumveri['v60'];
$vverim61=$sonucumveri['v61'];
$vverim62=$sonucumveri['v62'];
$vverim63=$sonucumveri['v63'];
$vverim64=$sonucumveri['v64'];
$vverim65=$sonucumveri['v65'];
$vverim66=$sonucumveri['v66'];
$vverim67=$sonucumveri['v67'];
$vverim68=$sonucumveri['v68'];
$vverim69=$sonucumveri['v69'];
$vverim70=$sonucumveri['v70'];
$vverim71=$sonucumveri['v71'];
$vverim72=$sonucumveri['v72'];
$vverim73=$sonucumveri['v73'];
$vverim74=$sonucumveri['v74'];
$vverim75=$sonucumveri['v75'];
$vverim76=$sonucumveri['v76'];
$vverim77=$sonucumveri['v77'];
$vverim78=$sonucumveri['v78'];
$vverim79=$sonucumveri['v79'];
$vverim80=$sonucumveri['v80'];
$vverim81=$sonucumveri['v81'];
$vverim82=$sonucumveri['v82'];
$vverim83=$sonucumveri['v83'];
$vverim84=$sonucumveri['v84'];
$vverim85=$sonucumveri['v85'];
$vverim86=$sonucumveri['v86'];
$vverim87=$sonucumveri['v87'];
$vverim88=$sonucumveri['v88'];
$vverim89=$sonucumveri['v89'];
$vverim90=$sonucumveri['v90'];
$vverim91=$sonucumveri['v91'];
$vverim92=$sonucumveri['v92'];
$vverim93=$sonucumveri['v93'];
$vverim94=$sonucumveri['v94'];
$vverim95=$sonucumveri['v95'];
$vverim96=$sonucumveri['v96'];
$vverim97=$sonucumveri['v97'];
$vverim98=$sonucumveri['v98'];
$vverim99=$sonucumveri['v99'];
$vverim100=$sonucumveri['v100'];
$vverim101=$sonucumveri['v101'];
$vverim102=$sonucumveri['v102'];
$vverim103=$sonucumveri['v103'];
$vverim104=$sonucumveri['v104'];
$vverim105=$sonucumveri['v105'];
$vverim106=$sonucumveri['v106'];
$vverim107=$sonucumveri['v107'];
$vverim108=$sonucumveri['v108'];
$vverim109=$sonucumveri['v109'];
$vverim110=$sonucumveri['v110'];
$vverim111=$sonucumveri['v111'];
$vverim112=$sonucumveri['v112'];
$vverim113=$sonucumveri['v113'];
$vverim114=$sonucumveri['v114'];
$vverim115=$sonucumveri['v115'];
$vverim116=$sonucumveri['v116'];
$vverim117=$sonucumveri['v117'];
$vverim118=$sonucumveri['v118'];
$vverim119=$sonucumveri['v119'];
$vverim120=$sonucumveri['v120'];
$vverim121=$sonucumveri['v121'];
$vverim122=$sonucumveri['v122'];
$vverim123=$sonucumveri['v123'];
$vverim124=$sonucumveri['v124'];
$vverim125=$sonucumveri['v125'];
$vverim126=$sonucumveri['v126'];
$vverim127=$sonucumveri['v127'];
$vverim128=$sonucumveri['v128'];
$vverim129=$sonucumveri['v129'];
$vverim130=$sonucumveri['v130'];
$vverim131=$sonucumveri['v131'];
$vverim132=$sonucumveri['v132'];
$vverim133=$sonucumveri['v133'];
$vverim134=$sonucumveri['v134'];
$vverim135=$sonucumveri['v135'];
$vverim136=$sonucumveri['v136'];
$vverim137=$sonucumveri['v137'];
$vverim138=$sonucumveri['v138'];
$vverim139=$sonucumveri['v139'];
$vverim140=$sonucumveri['v140'];
$vverim141=$sonucumveri['v141'];
$vverim142=$sonucumveri['v142'];
$vverim143=$sonucumveri['v143'];
$vverim144=$sonucumveri['v144'];
$vverim145=$sonucumveri['v145'];
$vverim146=$sonucumveri['v146'];
$vverim147=$sonucumveri['v147'];
$vverim148=$sonucumveri['v148'];
$vverim149=$sonucumveri['v149'];
$vverim150=$sonucumveri['v150'];
$vverim151=$sonucumveri['v151'];
$vverim152=$sonucumveri['v152'];
$vverim153=$sonucumveri['v153'];
$vverim154=$sonucumveri['v154'];
$vverim155=$sonucumveri['v155'];
$vverim156=$sonucumveri['v156'];
$vverim157=$sonucumveri['v157'];
$vverim158=$sonucumveri['v158'];
$vverim159=$sonucumveri['v159'];
$vverim160=$sonucumveri['v160'];
$vverim161=$sonucumveri['v161'];
$vverim162=$sonucumveri['v162'];
$vverim163=$sonucumveri['v163'];
$vverim164=$sonucumveri['v164'];
$vverim165=$sonucumveri['v165'];
$vverim166=$sonucumveri['v166'];
$vverim167=$sonucumveri['v167'];
$vverim168=$sonucumveri['v168'];
$vverim169=$sonucumveri['v169'];
$vverim170=$sonucumveri['v170'];
$vverim171=$sonucumveri['v171'];
$vverim172=$sonucumveri['v172'];
$vverim173=$sonucumveri['v173'];
$vverim174=$sonucumveri['v174'];
$vverim175=$sonucumveri['v175'];
$vverim176=$sonucumveri['v176'];
$vverim177=$sonucumveri['v177'];
$vverim178=$sonucumveri['v178'];*/
 }
$toplamvaka=$vverim1+$vverim2+$vverim3+$vverim4+$vverim5+$vverim6;
$resultvyil = @mysql_query("select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
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
if($verim81==0){$verim81=""; }else{$verim81=$verim81;}

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
?>
<?php
  
  if($verim26==0 and $verim27==0 and $verim28==0){
  $hepsifir="Gaita tahlili yapılmamıştır."; 
  }else if($verim26==0 and $verim29==0){
  $kultur="";
  }else if($verim26>=1 and $verim32==0){
$gkdurum="gaita kültürü yapılmıştır.Sonucu henüz belli değildir.";
  $kultur=$verim26.' '.$gkdurum ;
  }else if($verim26>=1 and $verim32>=1){
  $gkpozcik="kültür sonucu pozitif çıkmıştır.";
$gkdurum="gaita kültürü yapılmıştır.";
  $kultur=$verim26.' '.$gkdurum.''.$verim32.' '.$gkpozcik ;
  }
  if($verim27==0 and $verim30==0){
  $parazit="";
  }else if($verim27>=1 and $verim33==0){
$gpdurum="parazit incelemesi yapılmıştır.Parazit inceleme sonucu negatiftir.";
  $parazit=$verim27.' '.$gpdurum ;
  }else if($verim27>=1 and $verim33>=1){
  $gppozcik="parazit inceleme sonucu pozitif çıkmıştır.";
$gpdurum="parazit incelemesi yapılmıştır.";
  $parazit=$verim27.' '.$gpdurum.''.$verim33.' '.$gppozcik ;
  }
  if($verim28==0 and $verim31==0){
  $viral="";
  }else if($verim28>=1 and $verim34==0){
$gvdurum="viral etken incelemesi yapılmıştır.Viral etken inceleme sonucu negatiftir.";
  $viral=$verim28.' '.$gvdurum ;
  }else if($verim28>=1 and $verim34>=1){
  $gvpozcik="viral etken inceleme sonucu pozitif çıkmıştır.";
$gvdurum="viral etken incelemesi yapılmıştır.";
  $viral=$verim28.' '.$gvdurum.''.$verim34.' '.$gvpozcik ;
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
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
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
?>
<?php
// New Word Document
echo date('H:i:s'),' '.iconv("utf-8", "iso-8859-9",trsuz("Rapor Aşağıdaki Formatlarda Oluşturuldu.")).' ', EOL;
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 300,
        'marginTop'    => 600,
        'marginBottom' => 200,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
$noSpace = array('space' => array('before' => 80, 'after' => 80));
$paragraf="          ";
$kurum="TOPLUM SAĞLIĞI MERKEZİ";
$tarihinde="TARİHİNDE";
$arastirmadetay="tarihinde akut barsak enfeksiyonu ön tanı ve/veya tanısında önceki günlere göre meydana gelen artış sebebiyle vakalar ile ilgili olarak yaş, cins, yerleşim yerlerinin tesbiti, semptomların sağlık kurum veya kuruluşlarından tekrar sorgulaması yapılmış ve alınan koruyucu sağlık hizmeti önlemleri araştırılmıştır.";
$abebildirilen="tarihinde hastaneler tarafından bildirilen Akut Barsak Enfeksiyonları dağılımı aşağıdaki gibidir:";
$ne="'ne";
$basvuran="başvuran";
$hastadan="hastadan";
$nden="'nden";
$hastbildirilen="tarihinde bildirilen Akut Barsak Enfeksiyonlarının yaş ve cins gruplarına göre dağılımını gösterir tablo aşağıdaki gibidir:";
$degraporu="İLÇESİ HASTANELERİNCE GÜNLÜK BİLDİRİLEN AKUT BARSAK ENFEKSİYONARINDAKİ ARTIŞ İLE İLGİLİ DEĞERLENDİRME RAPORU";
$tsim="          Günlük olarak Sağlık Bakanlığı TSİM sistemine veri girişi yapılan A09, R11, K52 ICD-10 kodlu Akut Barsak Enfeksiyonlarında";
$arastirma="          İnceleme konusu olan artışla ilgili olarak bildirilen";
$sayisinda=" sayısında";
$etoplam=$verim4+$verim6+$verim8+$verim10+$verim12+$verim14+$verim16+$verim18+$verim20;
$ktoplam=$verim5+$verim7+$verim9+$verim11+$verim13+$verim15+$verim17+$verim19+$verim21;
$ektoplam=$etoplam+$ktoplam; 
if($toplamvaka>$ektoplam){
$esassayi="Veri hataları ve mükerrer kayıtlar kontrol edildikten sonra hasta sayısının";
$kalankisi="kişi olduğu tesbit edilmiştir.";
$esassonuc=$esassayi.' '.$ektoplam.' '.$kalankisi;
}else if($toplamvaka<$ektoplam){
$fazlasayi=$ektoplam-$toplamvaka;
$esassayi="Kayıtlar kontrol edildikten sonra hasta sayısının";
$kalankisi="kişi eksik bildirildiği tesbit edilmiştir.";
$esassonuc=$esassayi.' '.$fazlasayi.' '.$kalankisi;
}else{
$esassonuc="";
}
$hastalistesi="Kontrol edilen hasta listesi ekte sunulmuştur.";
$not="NOT: Aşağıdaki veriler sadece";
$icin="için düzenlenmiştir.";
 
$hastaliste="tarihli hasta listesi ektedir."; 
$header = array('size' => 16, 'bold' => true , 'name' => 'Times New Roman');
$ortala= array('align' => 'center');
$bilgi = array('size' => 12, 'bold' => true , 'name' => 'Times New Roman');
$soru = array('size' => 12, 'bold' => false , 'name' => 'Times New Roman');
$section->addText(htmlspecialchars('HASTANE AGE VAKA ARTIŞI (C3-C4 SİNYALİ) SORGULAMA FORMU'), $header, $ortala );
$section->addText(htmlspecialchars('1-Hastaneden A09-R11-K52 ICD 10 Kodlu hasta listesi alınır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$ilinadi.'-'.$ilceninadi.' '.$socadi.' '.$noktatarih.' '.$hastaliste),$bilgi,$noSpace);
$section->addText(htmlspecialchars('2-Veri giriş hatası olup olmadığı incelenir.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim1),$bilgi,$noSpace);
$section->addText(htmlspecialchars('3-Mükerrer kayıt olup olmadığı incelenir.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim2),$bilgi,$noSpace);
$section->addText(htmlspecialchars('4-İkamet adresleri dikkatlice kontrol edilerek kümelenme olup olmadığı araştırılır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim3),$bilgi,$noSpace);
$section->addText(htmlspecialchars('5-Listelerden hastaların yaş gruplarına göre dağılımı aşağıdaki tablo doldurularak yapılır.'), $soru,$noSpace);

// 1. Basic table
/*
$rows = 10;
$cols = 5;
$section->addText(htmlspecialchars('Basic table'), $header);

$table = $section->addTable();
for ($r = 1; $r <= 8; $r++) {
    $table->addRow();
    for ($c = 1; $c <= 5; $c++) {
        $table->addCell(1750)->addText(htmlspecialchars("Row {$r}, Cell {$c}"));
    }
}
*/
// 2. Advanced table
/*
$section->addTextBreak(1);
$section->addText(htmlspecialchars('Fancy table'), $header);

$styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
$fontStyle = array('bold' => true, 'align' => 'center' , 'name' => 'Times New Roman');
$phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
$table = $section->addTable('Fancy Table');
$table->addRow(900);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 1'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 2'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 3'), $fontStyle);
$table->addCell(2000, $styleCell)->addText(htmlspecialchars('Row 4'), $fontStyle);
$table->addCell(500, $styleCellBTLR)->addText(htmlspecialchars('Row 5'), $fontStyle);
for ($i = 1; $i <= 8; $i++) {
    $table->addRow();
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $table->addCell(2000)->addText(htmlspecialchars("Cell {$i}"));
    $text = (0== $i % 2) ? 'X' : '';
    $table->addCell(500)->addText(htmlspecialchars($text));
}
*/
// 3. colspan (gridSpan) and rowspan (vMerge)

//$section->addPageBreak();
//$section->addText(htmlspecialchars('Table with colspan and rowspan'), $header);

$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');
$cellHLefted = array('align' => 'left');
$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$cell1 = $table->addCell(1000, $cellColSpan);
$textrun1 = $cell1->addTextRun($cellHCentered);
$textrun1->addText(htmlspecialchars('0-11 ay'),$soru,$noSpace);
//$textrun1->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell2 = $table->addCell(1000, $cellColSpan);
$textrun2 = $cell2->addTextRun($cellHCentered);
$textrun2->addText(htmlspecialchars('1-4 y'),$soru,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell3 = $table->addCell(1000, $cellColSpan);
$textrun3 = $cell3->addTextRun($cellHCentered);
$textrun3->addText(htmlspecialchars('5-9 y'),$soru,$noSpace);
//$textrun3->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell4 = $table->addCell(1000, $cellColSpan);
$textrun4 = $cell4->addTextRun($cellHCentered);
$textrun4->addText(htmlspecialchars('10-14 y'),$soru,$noSpace);
//$textrun4->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell5 = $table->addCell(1000, $cellColSpan);
$textrun5 = $cell5->addTextRun($cellHCentered);
$textrun5->addText(htmlspecialchars('15-19 y'),$soru,$noSpace);
//$textrun5->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell6 = $table->addCell(1000, $cellColSpan);
$textrun6 = $cell6->addTextRun($cellHCentered);
$textrun6->addText(htmlspecialchars('20-29 y'),$soru,$noSpace);
//$textrun6->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell7 = $table->addCell(1000, $cellColSpan);
$textrun7 = $cell7->addTextRun($cellHCentered);
$textrun7->addText(htmlspecialchars('30-44 y'),$soru,$noSpace);
//$textrun7->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell8 = $table->addCell(1000, $cellColSpan);
$textrun8 = $cell8->addTextRun($cellHCentered);
$textrun8->addText(htmlspecialchars('45-64 y'),$soru,$noSpace);
//$textrun8->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell9 = $table->addCell(1000, $cellColSpan);
$textrun9 = $cell9->addTextRun($cellHCentered);
$textrun9->addText(htmlspecialchars('65 + y'),$soru,$noSpace);
//$textrun9->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell10 = $table->addCell(1200, $cellColSpan);
$textrun10 = $cell10->addTextRun($cellHCentered);
$textrun10->addText(htmlspecialchars('TOPLAM'),$soru,$noSpace);
//$textrun10->addFootnote()->addText(htmlspecialchars('Colspan span'));

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
//$table->addCell(null, $cellRowContinue);

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim4), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim5), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim6), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim7), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim8), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim9), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim10), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim11), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim12), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim13), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim14), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim15), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim16), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim17), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim18), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim19), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim20), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim21), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($etoplam), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($ktoplam), $bilgi, $cellHCentered,$noSpace);
//$table->addCell(null, $cellRowContinue);

// 4. Nested table
/*
$section->addTextBreak(2);
$section->addText(htmlspecialchars('Nested table in a centered and 50% width table.'), $header);

$table = $section->addTable(array('width' => 50 * 50, 'unit' => 'pct', 'align' => 'center'));
$cell = $table->addRow()->addCell();
$cell->addText(htmlspecialchars('This cell contains nested table.'));
$innerCell = $cell->addTable(array('align' => 'center'))->addRow()->addCell();

$innerCell->addText(htmlspecialchars('Inside nested table'));
*/
$section->addText(htmlspecialchars('6-Yaş grupları da dikkate alınarak kreş,anaokulu,okul,üniversite,lokanta,alışveriş merkezi,otel,doğum günü,miting,mevlit ve düğün gibi yemek yenilen toplu organizasyonda bulunup bulunmadığı araştırılır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim22),$bilgi,$noSpace);
$section->addText(htmlspecialchars('7-Aynı aileye mensup kişiler olup olmadığı araştırılır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim23),$bilgi,$noSpace);
$section->addText(htmlspecialchars('8-Hastaların meslek grupları sorgulanır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim25),$bilgi,$noSpace);
$section->addText(htmlspecialchars('9-Hastaneye başvuran hastalardan gaita mikroskopisi ve kültürü yapılıp,yapılmadığı araştırılır.'), $soru,$noSpace);
$section->addText($hepsifir.''.$kultur.''.$parazit.''.$viral,$bilgi,$noSpace);
$section->addText(htmlspecialchars('10-AGE şikayetleri ile hastaneye başvuran hastalardan kaçının ayaktan kaç tanesinin yatarak tedavi edildiği,yatarak tedavi gören hastaların genel durumlarının kötü olup olmadığı sorgulanmalıdır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim35),$bilgi,$noSpace);
$section->addText(htmlspecialchars('11-Klinisyenden olay/etken/hastalık hakkında görüş alınır.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim36),$bilgi,$noSpace);
$section->addText(htmlspecialchars('12-Geçmiş 2 aylık su numune sonuçları ile şimdiki klor bakiye sonucu kontrol edilirTüm sonuç raporları eklenerek Erken Uyarı-Cevap Birimine gönderilir.'), $soru,$noSpace);
$section->addText(iconv("iso-8859-9", "utf-8",$verim37),$bilgi,$noSpace);
$section->addText(htmlspecialchars('Yukarıdaki maddeler aynı gün içerisinde tek tek sorgulandıktan sonra oluşturulacak rapor ile birlikte sorgulama formu, bölgenin en son içme-kullanma suyu analiz raporları ve hasta listesi Antalya Halk Sağlığı Müdürlüğü Erken Uyarı-Cevap Birimi antalya.erkenuyari@saglik.gov.tr adresine ivedilikle gönderilir.'), $soru,$noSpace);
$section->addText(htmlspecialchars('Antalya Halk Sağlığı Müdürlüğü'), $soru , $cellHCentered,$noSpace);
$section->addText(htmlspecialchars('Erken Uyarı Cevap Birimi'), $soru , $cellHCentered,$noSpace);

//$section->addPageBreak();
$section = $phpWord->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 900,
        'marginTop'    => 1200,
        'marginBottom' => 1200,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
$duzaygelentarihgun=substr($verim178,8,2);
$duzaygelentarihay=substr($verim178,5,2);
$duzaygelentarihyil=substr($verim178,0,4);
$duznoktatarih= $duzaygelentarihgun.'.'.$duzaygelentarihay.'.'.$duzaygelentarihyil ;

$section->addText(iconv("iso-8859-9", "utf-8",$ilceninadi).' '.$kurum,$bilgi , $cellHCentered);
$section->addText($noktatarih.' '.$tarihinde.' '.iconv("iso-8859-9", "utf-8",$ilceninadi).' '.$degraporu,$bilgi, 
    array('space' => array('before' => 6500, 'after' => 480) , 'align' => 'center')
);
$section->addText($duznoktatarih,$bilgi, 
    array('space' => array('before' => 3000, 'after' => 480) , 'align' => 'center')
);
$section->addText(htmlspecialchars('Bulaşıcı Hastalıklar Kontrol Proğramları Birimi'),$bilgi, 
    array('space' => array('before' => 3000, 'after' => 480) , 'align' => 'center')
);
//$section->addPageBreak();
$section = $phpWord->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 900,
        'marginTop'    => 600,
        'marginBottom' => 100,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
$noSpace = array('space' => array('before' => 40, 'after' => 40));
$hiza = array('align' => 'justify');

$section->addText($tsim.' '.iconv("iso-8859-9", "utf-8",$verim38),$soru, $hiza, $noSpace);
$section->addText($arastirma.' '.$toplamvaka.' '.$sayisinda.' '.iconv("iso-8859-9", "utf-8",$verim1.' '.$verim2).' '.$esassonuc.' '.$hastalistesi,$soru, $hiza, $noSpace);
$section->addText($paragraf.' '.$noktatarih.' '.$arastirmadetay,$soru, $hiza, $noSpace);
$section->addText($paragraf.' '.$noktatarih.' '.$abebildirilen,$soru, $hiza, $noSpace);

$styleTable = array('borderSize' => 6, 'borderColor' => '000000', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '000000');
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
$fontStyle = array('size' => 12,'bold' => true, 'align' => 'center' , 'name' => 'Times New Roman');
$phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
$table = $section->addTable('Fancy Table');
$table->addRow();
$table->addCell(4000, $styleCell)->addText(htmlspecialchars('SAĞLIK KURULUŞU / ICD-10 KODU'), $soru,$noSpace, $cellHLefted);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('A09'), $soru, $cellHCentered);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('R11'), $soru, $cellHCentered);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('K52'), $soru, $cellHCentered);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('TOPLAM'), $soru, $cellHCentered);
$hresultveri = @mysql_query("select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vayadi='$aygelen') order by vocadi") ;
while($hsonucumveri=mysql_fetch_array($hresultveri)){ 
$kac=mysql_num_rows($hresultveri);
$hsocadi=$hsonucumveri['vocadi'];
$hverim1=$hsonucumveri['v1'];
$hverim2=$hsonucumveri['v2'];
$hverim3=$hsonucumveri['v3'];
$hverim4=$hsonucumveri['v4'];  
$hverim5=$hsonucumveri['v5'];
$hverim6=$hsonucumveri['v6'];  
 $table->addRow($kac);
    $table->addCell(4000)->addText($hsocadi, $fontStyle, $bilgi,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim1+$hverim2), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim3+$hverim4), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim5+$hverim6), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim1+$hverim2+$hverim3+$hverim4+$hverim5+$hverim6), $fontStyle, $cellHCentered,$noSpace);
	$i++;
	
}
$tresultveri = @mysql_query("select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vayadi='$aygelen')") ;
while($tsonucumveri=mysql_fetch_array($tresultveri)){ 
$tverim1=$tsonucumveri['a09'];
$tverim2=$tsonucumveri['r11'];
$tverim3=$tsonucumveri['k52'];
$toplam=$tverim1+$tverim2+$tverim3+$tverim4+$tverim5+$tverim6;  

$table->addRow();
	$table->addCell(4000)->addText('TOPLAM', $soru);
    $table->addCell(1500)->addText(htmlspecialchars($tverim1), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($tverim2), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($tverim3), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($toplam), $fontStyle, $cellHCentered,$noSpace);
}
//$section->addText('');
$section->addText($not.' '.iconv("iso-8859-9", "utf-8",$socadi).' '.$icin,$bilgi,$noSpace, $hiza);
$section->addText(iconv("iso-8859-9", "utf-8",$ilceninadi.' '.$socadi.''.$nden).' '.$noktatarih.' '.$hastbildirilen,$soru, $hiza, $noSpace);

$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$cell1 = $table->addCell(1000, $cellColSpan);
$textrun1 = $cell1->addTextRun($cellHCentered);
$textrun1->addText(htmlspecialchars('0-11 ay'),$soru,$noSpace);
//$textrun1->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell2 = $table->addCell(1000, $cellColSpan);
$textrun2 = $cell2->addTextRun($cellHCentered);
$textrun2->addText(htmlspecialchars('1-4 y'),$soru,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell3 = $table->addCell(1000, $cellColSpan);
$textrun3 = $cell3->addTextRun($cellHCentered);
$textrun3->addText(htmlspecialchars('5-9 y'),$soru,$noSpace);
//$textrun3->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell4 = $table->addCell(1000, $cellColSpan);
$textrun4 = $cell4->addTextRun($cellHCentered);
$textrun4->addText(htmlspecialchars('10-14 y'),$soru,$noSpace);
//$textrun4->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell5 = $table->addCell(1000, $cellColSpan);
$textrun5 = $cell5->addTextRun($cellHCentered);
$textrun5->addText(htmlspecialchars('15-19 y'),$soru,$noSpace);
//$textrun5->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell6 = $table->addCell(1000, $cellColSpan);
$textrun6 = $cell6->addTextRun($cellHCentered);
$textrun6->addText(htmlspecialchars('20-29 y'),$soru,$noSpace);
//$textrun6->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell7 = $table->addCell(1000, $cellColSpan);
$textrun7 = $cell7->addTextRun($cellHCentered);
$textrun7->addText(htmlspecialchars('30-44 y'),$soru,$noSpace);
//$textrun7->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell8 = $table->addCell(1000, $cellColSpan);
$textrun8 = $cell8->addTextRun($cellHCentered);
$textrun8->addText(htmlspecialchars('45-64 y'),$soru,$noSpace);
//$textrun8->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell9 = $table->addCell(1000, $cellColSpan);
$textrun9 = $cell9->addTextRun($cellHCentered);
$textrun9->addText(htmlspecialchars('65 + y'),$soru,$noSpace);
//$textrun9->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell10 = $table->addCell(1200, $cellColSpan);
$textrun10 = $cell10->addTextRun($cellHCentered);
$textrun10->addText(htmlspecialchars('TOPLAM'),$soru,$noSpace);
//$textrun10->addFootnote()->addText(htmlspecialchars('Colspan span'));

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
//$table->addCell(null, $cellRowContinue);

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim4), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim5), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim6), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim7), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim8), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim9), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim10), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim11), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim12), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim13), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim14), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim15), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim16), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim17), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim18), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim19), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim20), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim21), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($etoplam), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($ktoplam), $bilgi, $cellHCentered,$noSpace);

//$section->addText('');
$section->addText(iconv("iso-8859-9", "utf-8",$socadi.''.$ne).' '.$basvuran.' '.iconv("iso-8859-9", "utf-8",$ektoplam.' '.$hastadan.' '.$verim40) ,$bilgi,$noSpace);

//$section->addText('' ,$bilgi);
$section->addText(htmlspecialchars('HASTALARIN BAŞVURDUĞU POLİKLİNİĞE GÖRE DAĞILIMI'), $soru, $cellHCentered);

$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');

$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('POLİKLİNİK ADI'), $soru, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('BAŞVURU SAYISI'), $soru, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('MÜŞAHADE İÇİN YATIRILAN HASTA'), $soru, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('SERVİSE YATIRILAN HASTA'), $soru, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim82), $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim83, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim84, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim85, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim86), $bilgi, $cellHLefted);
$table->addCell(2000, $cellVCentered)->addText($verim87, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim88, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim89, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim90), $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim91, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim92, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim93, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim94), $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim95, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim96, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim97, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim98), $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim99, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim100, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim101, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim102), $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim103, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim104, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim105, $bilgi, $cellHCentered,$noSpace);

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('TOPLAM'), $soru, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim106, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim107, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim108, $bilgi, $cellHCentered,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));
//$section->addPageBreak();
$section = $phpWord->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 900,
        'marginTop'    => 900,
        'marginBottom' => 200,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
//$section->addText('' ,$bilgi);
$section->addText(htmlspecialchars('HASTALARIN İKAMET ADRESLERİNE GÖRE DAĞILIMI'), $soru , $cellHCentered,$noSpace);

$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');

$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('YERLEŞİM YERİ'), $soru, $cellHCentered,$noSpace);
$table->addCell(1000, $cellVCentered)->addText(htmlspecialchars('İKAMET EDEN SAYISI'), $soru, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('YERLEŞİM YERİ'), $soru, $cellHCentered,$noSpace);
$table->addCell(1000, $cellVCentered)->addText(htmlspecialchars('İKAMET EDEN SAYISI'), $soru, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim41), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim42, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim43), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim44, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim45), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim46, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim47), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim48, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim49), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim50, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim51), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim52, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim53), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim54, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim55), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim56, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim57), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim58, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim59), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim60, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim61), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim62, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim63), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim64, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim65), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim66, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim67), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim68, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim69), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim70, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim71), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim72, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim73), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim74, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim75), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim76, $bilgi, $cellHCentered,$noSpace);$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim77), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim78, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(iconv("iso-8859-9", "utf-8",$verim79), $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim80, $bilgi, $cellHCentered,$noSpace);
$table->addRow();

$cell11 = $table->addCell(5000, $cellColSpan);
$textrun11 = $cell11->addTextRun($cellHLefted);
$textrun11->addText(htmlspecialchars('TOPLAM'),$soru, $cellHLefted,$noSpace);
//$textrun1->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell22 = $table->addCell(5000, $cellColSpan);
$textrun22 = $cell22->addTextRun($cellHCentered);
$textrun22->addText($verim81,$bilgi,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));
$verideg="Hastane AGE Vaka Artışı Sorgulama Formu ve yukarıdaki veriler değerlendirildiğinde";
$digerhast="Diğer hastanelere ait verilerin normal olduğu görülmektedir.";
$episonuc="Sonuç olarak bu hastanedeki vakalar incelendiğinde epidemiyolojik bakımdan salgın niteliği taşıyacak bir durum tesbit edilmemiştir.";
if(substr($verim1,0,35)==iconv("utf-8", "iso-8859-9","Veri girişi hatası mevcut değildir.") and substr($verim2,0,38)==iconv("utf-8", "iso-8859-9","Mükerrer kayıt girişi mevcut değildir.")) {
$artıs="nde";
$sonuchata=iconv("utf-8", "iso-8859-9","hatalı veri girişi ve mükerrer kayıt girişi olmadığı görülmüştür.");
$sonuctop=$socadi.' '.$artıs.' '.$sonuchata;
}else if(substr($verim1,0,35)!=iconv("utf-8", "iso-8859-9","Veri girişi hatası mevcut değildir.") and substr($verim2,0,38)==iconv("utf-8", "iso-8859-9","Mükerrer kayıt girişi mevcut değildir.")){
$artıs=iconv("utf-8", "iso-8859-9","nde artış olmadığı,");
$sonuchata=iconv("utf-8", "iso-8859-9","hatalı veri girişinden dolayı vaka sayısının fazla olduğu görülmüştür.");
$sonuctop=$socadi.' '.$artıs.' '.$sonuchata;
}else if(substr($verim1,0,35)==iconv("utf-8", "iso-8859-9","Veri girişi hatası mevcut değildir.") and substr($verim2,0,38)!=iconv("utf-8", "iso-8859-9","Mükerrer kayıt girişi mevcut değildir.")) {
$artıs=iconv("utf-8", "iso-8859-9","nde artış olmadığı,");
$sonuchata=iconv("utf-8", "iso-8859-9","mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.");
$sonuctop=$socadi.' '.$artıs.' '.$sonuchata;
}else if(substr($verim1,0,35)!=iconv("utf-8", "iso-8859-9","Veri girişi hatası mevcut değildir.") and substr($verim2,0,38)!=iconv("utf-8", "iso-8859-9","Mükerrer kayıt girişi mevcut değildir.")) {
$artıs=iconv("utf-8", "iso-8859-9","nde artış olmadığı,");
$sonuchata=iconv("utf-8", "iso-8859-9","hatalı veri girişi ve mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.");
$sonuctop=$socadi.' '.$artıs.' '.$sonuchata;
}
$verim22=iconv("iso-8859-9", "utf-8",$verim22);
$verim3=iconv("iso-8859-9", "utf-8",$verim3);
$verim35=iconv("iso-8859-9", "utf-8",$verim35);
$verim109=iconv("iso-8859-9", "utf-8",$verim109);
$durumbil="Durumu bildirir değerlendirme raporudur.";

$section->addText('' ,$bilgi);
$section->addText($paragraf.' '.$verideg.' '.iconv("iso-8859-9", "utf-8",$sonuctop).' '.$digerhast.' '.$verim22.' '.$verim3.' '.$verim35.' '.$hepsifir.' '.$kultur.' '.$parazit.' '.$viral.' '.$episonuc.' '.$verim109, $soru , $hiza,$noSpace);
$section->addText($paragraf.' '.$durumbil.' '.$duznoktatarih, $soru , $hiza,$noSpace);

$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
  $sonucak=mysql_query($sql);
    while($satir=mysql_fetch_array($sonucak))
{
//@mysql_close($conn);
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
// Ads styles
$phpWord->addParagraphStyle(
    'multipleTab',
    array(
	'spaceAfter' => 20,
        'tabs' => array(
            new \PhpOffice\PhpWord\Style\Tab('left', 1),
            //new \PhpOffice\PhpWord\Style\Tab('center', 3200),
            new \PhpOffice\PhpWord\Style\Tab('right', 10000),
			
        )
    )
);
$phpWord->addParagraphStyle(
    'leftTab',
    array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 0)))
);
$phpWord->addParagraphStyle(
    'rightTab',
    array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 5000)))
);
$phpWord->addParagraphStyle(
    'centerTab',
    array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('center', 4680)))
);

// New portrait section
//$section = $phpWord->addSection();
$asead="\t".$asead;
$drad="\t".$drad;
$aseunv="\t".$aseunv;
$ahkodum="\t".$ahkodum.' '.$ahno;

$section->addText('' ,$bilgi);
$section->addText('' ,$bilgi);
//$section->addText('' ,$bilgi);
//$section->addText('' ,$bilgi);
//$section->addText('' ,$bilgi);

// Add listitem elements
$section->addText(iconv("iso-8859-9", "utf-8",$asead."".$drad),$soru, 'multipleTab');
$section->addText(iconv("iso-8859-9", "utf-8",$aseunv."".$ahkodum),$soru, 'multipleTab');

//$section->addText(iconv("iso-8859-9", "utf-8",$verim173), null, 'rightTab');
//$section->addText(htmlspecialchars("\tCenter Aligned"), null, 'centerTab');

}
// Save file
echo write($phpWord, basename(__FILE__, '.php'), $writers);
if (!CLI) {
    include_once 'Sample_Footer.php';
}
