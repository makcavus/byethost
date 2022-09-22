<?php
include('con_023.php');


$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

/*if($yilgelen==""){
$devirgebe=0;
$devirbebek=0;
$devirlohusa=0;
$devircocuk=0;
}else{
//GEBE
$gebearti = @mysql_query("select sum(v119+v120) as gsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebearti)) {
if($kayitlar['gsonucarti']==""){
$Toplamgarti=0 ;
}else{
$Toplamgarti=$kayitlar['gsonucarti'];
}
}
$gebeeksi = @mysql_query("select sum(v121+v122+v123+v124) as gsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebeeksi)) {
if($kayitlar['gsonuceksi']==""){
$Toplamgeksi=0 ;
}else{
$Toplamgeksi=$kayitlar['gsonuceksi'];
}
}
$devirgebe=$Toplamgarti-$Toplamgeksi;
//BEBEK
$bebekarti = @mysql_query("select sum(v128+v129+v130) as bsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v131+v132+v133) as bsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//LOHUSA
$lohusaarti = @mysql_query("select sum(v137+v138+v139) as lsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v140+v141+v142) as lsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirlohusa=$Toplamlarti-$Toplamleksi;
//COCUK
$cocukarti = @mysql_query("select sum(v145+v146+v147) as csonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v148+v149+v150) as csonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
}*/
if($yilgelen==""){
$resultvyil = @mysql_query("select 
sum(v1) as v1,
sum(v2) as v2, 
sum(v3) as v3,
sum(v4) as v4, 
sum(v5) as v5,
sum(v6) as v6, 
sum(v7) as v7,
sum(v8) as v8, 
sum(v9) as v9,
sum(v10) as v10, 
sum(v11) as v11,
sum(v12) as v12, 
sum(v13) as v13,
sum(v14) as v14, 
sum(v15) as v15,
sum(v16) as v16,
sum(v17) as v17,
sum(v18) as v18, 
sum(v19) as v19,
sum(v20) as v20, 
sum(v21) as v21,
sum(v22) as v22, 
sum(v23) as v23,
sum(v24) as v24,
sum(v25) as v25,
sum(v26) as v26, 
sum(v27) as v27,
sum(v28) as v28, 
sum(v29) as v29,
sum(v30) as v30, 
sum(v31) as v31,
sum(v32) as v32,   
sum(v33) as v33,
sum(v34) as v34, 
sum(v35) as v35,
sum(v36) as v36, 
sum(v37) as v37,
sum(v38) as v38, 
sum(v39) as v39,
sum(v40) as v40, 
sum(v41) as v41,
sum(v42) as v42, 
sum(v43) as v43,
sum(v44) as v44, 
sum(v45) as v45,
sum(v46) as v46, 
sum(v47) as v47,
sum(v48) as v48, 
sum(v49) as v49,
sum(v50) as v50, 
sum(v51) as v51,
sum(v52) as v52, 
sum(v53) as v53,
sum(v54) as v54, 
sum(v55) as v55,
sum(v56) as v56, 
sum(v57) as v57,
sum(v58) as v58, 
sum(v59) as v59,
sum(v60) as v60, 
sum(v61) as v61,
sum(v62) as v62, 
sum(v63) as v63,
sum(v64) as v64, 
sum(v65) as v65,
sum(v66) as v66, 
sum(v67) as v67,
sum(v68) as v68, 
sum(v69) as v69,
sum(v70) as v70, 
sum(v71) as v71,
sum(v72) as v72, 
sum(v73) as v73,
sum(v74) as v74, 
sum(v75) as v75,
sum(v76) as v76, 
sum(v77) as v77,
sum(v78) as v78, 
sum(v79) as v79,
sum(v80) as v80, 
sum(v81) as v81,
sum(v82) as v82, 
sum(v83) as v83,
sum(v84) as v84, 
sum(v85) as v85,
sum(v86) as v86, 
sum(v87) as v87,
sum(v88) as v88, 
sum(v89) as v89,
sum(v90) as v90,
sum(v91) as v91, 
sum(v92) as v92,
sum(v93) as v93, 
sum(v94) as v94,
sum(v95) as v95, 
sum(v96) as v96,
sum(v97) as v97, 
sum(v98) as v98,
sum(v99) as v99,
sum(v100) as v100, 
sum(v101) as v101,
sum(v102) as v102, 
sum(v103) as v103,
sum(v104) as v104, 
sum(v105) as v105,
sum(v106) as v106, 
sum(v107) as v107,
sum(v108) as v108, 
sum(v109) as v109,
sum(v110) as v110, 
sum(v111) as v111,
sum(v112) as v112, 
sum(v113) as v113,
sum(v114) as v114, 
sum(v115) as v115,
sum(v116) as v116, 
sum(v117) as v117,
sum(v118) as v118, 
sum(v119) as v119,
sum(v120) as v120, 
sum(v121) as v121,
sum(v122) as v122, 
sum(v123) as v123,
sum(v124) as v124, 
sum(v125) as v125,
sum(v126) as v126, 
sum(v127) as v127,
sum(v128) as v128, 
sum(v129) as v129,
sum(v130) as v130, 
sum(v131) as v131,
sum(v132) as v132, 
sum(v133) as v133,
sum(v134) as v134, 
sum(v135) as v135,
sum(v136) as v136, 
sum(v137) as v137,
sum(v138) as v138, 
sum(v139) as v139,
sum(v140) as v140, 
sum(v141) as v141,
sum(v142) as v142, 
sum(v143) as v143,
sum(v144) as v144, 
sum(v145) as v145,
sum(v146) as v146, 
sum(v147) as v147,
sum(v148) as v148, 
sum(v149) as v149,
sum(v150) as v150, 
sum(v151) as v151,
sum(v152) as v152, 
sum(v153) as v153,
sum(v154) as v154, 
sum(v155) as v155,
sum(v156) as v156, 
sum(v157) as v157,
sum(v158) as v158, 
sum(v159) as v159,
sum(v160) as v160,
sum(v161) as v161,
sum(v162) as v162, 
sum(v163) as v163,
sum(v164) as v164, 
sum(v165) as v165,
sum(v166) as v166, 
sum(v167) as v167,
sum(v168) as v168, 
sum(v169) as v169,
sum(v170) as v170, 
sum(v171) as v171,
sum(v172) as v172
from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen')") ;
}else{
$resultvyil = @mysql_query("select 
sum(v1) as v1,
sum(v2) as v2, 
sum(v3) as v3,
sum(v4) as v4, 
sum(v5) as v5,
sum(v6) as v6, 
sum(v7) as v7,
sum(v8) as v8, 
sum(v9) as v9,
sum(v10) as v10, 
sum(v11) as v11,
sum(v12) as v12, 
sum(v13) as v13,
sum(v14) as v14, 
sum(v15) as v15,
sum(v16) as v16,
sum(v17) as v17,
sum(v18) as v18, 
sum(v19) as v19,
sum(v20) as v20, 
sum(v21) as v21,
sum(v22) as v22, 
sum(v23) as v23,
sum(v24) as v24,
sum(v25) as v25,
sum(v26) as v26, 
sum(v27) as v27,
sum(v28) as v28, 
sum(v29) as v29,
sum(v30) as v30, 
sum(v31) as v31,
sum(v32) as v32,   
sum(v33) as v33,
sum(v34) as v34, 
sum(v35) as v35,
sum(v36) as v36, 
sum(v37) as v37,
sum(v38) as v38, 
sum(v39) as v39,
sum(v40) as v40, 
sum(v41) as v41,
sum(v42) as v42, 
sum(v43) as v43,
sum(v44) as v44, 
sum(v45) as v45,
sum(v46) as v46, 
sum(v47) as v47,
sum(v48) as v48, 
sum(v49) as v49,
sum(v50) as v50, 
sum(v51) as v51,
sum(v52) as v52, 
sum(v53) as v53,
sum(v54) as v54, 
sum(v55) as v55,
sum(v56) as v56, 
sum(v57) as v57,
sum(v58) as v58, 
sum(v59) as v59,
sum(v60) as v60, 
sum(v61) as v61,
sum(v62) as v62, 
sum(v63) as v63,
sum(v64) as v64, 
sum(v65) as v65,
sum(v66) as v66, 
sum(v67) as v67,
sum(v68) as v68, 
sum(v69) as v69,
sum(v70) as v70, 
sum(v71) as v71,
sum(v72) as v72, 
sum(v73) as v73,
sum(v74) as v74, 
sum(v75) as v75,
sum(v76) as v76, 
sum(v77) as v77,
sum(v78) as v78, 
sum(v79) as v79,
sum(v80) as v80, 
sum(v81) as v81,
sum(v82) as v82, 
sum(v83) as v83,
sum(v84) as v84, 
sum(v85) as v85,
sum(v86) as v86, 
sum(v87) as v87,
sum(v88) as v88, 
sum(v89) as v89,
sum(v90) as v90,
sum(v91) as v91, 
sum(v92) as v92,
sum(v93) as v93, 
sum(v94) as v94,
sum(v95) as v95, 
sum(v96) as v96,
sum(v97) as v97, 
sum(v98) as v98,
sum(v99) as v99,
sum(v100) as v100, 
sum(v101) as v101,
sum(v102) as v102, 
sum(v103) as v103,
sum(v104) as v104, 
sum(v105) as v105,
sum(v106) as v106, 
sum(v107) as v107,
sum(v108) as v108, 
sum(v109) as v109,
sum(v110) as v110, 
sum(v111) as v111,
sum(v112) as v112, 
sum(v113) as v113,
sum(v114) as v114, 
sum(v115) as v115,
sum(v116) as v116, 
sum(v117) as v117,
sum(v118) as v118, 
sum(v119) as v119,
sum(v120) as v120, 
sum(v121) as v121,
sum(v122) as v122, 
sum(v123) as v123,
sum(v124) as v124, 
sum(v125) as v125,
sum(v126) as v126, 
sum(v127) as v127,
sum(v128) as v128, 
sum(v129) as v129,
sum(v130) as v130, 
sum(v131) as v131,
sum(v132) as v132, 
sum(v133) as v133,
sum(v134) as v134, 
sum(v135) as v135,
sum(v136) as v136, 
sum(v137) as v137,
sum(v138) as v138, 
sum(v139) as v139,
sum(v140) as v140, 
sum(v141) as v141,
sum(v142) as v142, 
sum(v143) as v143,
sum(v144) as v144, 
sum(v145) as v145,
sum(v146) as v146, 
sum(v147) as v147,
sum(v148) as v148, 
sum(v149) as v149,
sum(v150) as v150, 
sum(v151) as v151,
sum(v152) as v152, 
sum(v153) as v153,
sum(v154) as v154, 
sum(v155) as v155,
sum(v156) as v156, 
sum(v157) as v157,
sum(v158) as v158, 
sum(v159) as v159,
sum(v160) as v160,
sum(v161) as v161,
sum(v162) as v162, 
sum(v163) as v163,
sum(v164) as v164, 
sum(v165) as v165,
sum(v166) as v166, 
sum(v167) as v167,
sum(v168) as v168, 
sum(v169) as v169,
sum(v170) as v170, 
sum(v171) as v171,
sum(v172) as v172
from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen')") ;
}

while($sonucum=mysql_fetch_array($resultvyil)){
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
/*$verim173=$sonucum['v173'];
$verim174=$sonucum['v174'];
$verim175=$sonucum['v175'];*/
}

?>
