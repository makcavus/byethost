<?php
include("../con_023.php");
$subat="ŞUBAT"; 
$nisan="NİSAN"; 
$haziran="HAZİRAN"; 
$agustos="AĞUSTOS"; 
$eylul="EYLÜL"; 
$ekim="EKİM"; 
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$oran="Yılı Aşılama Oranları";
$oranx="AŞILAMA ORANLARI";
$baslik=$yilgelen.' '.$oran;	
$baslikx=$yilgelen.' '.$oranx;							 
// T O P L A M L A R   K I S M I *****************************************************************************************************************************
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}


$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$iltop='İL TOPLAMI';
$ilcetop='İLÇE TOPLAMI';
$ahektop='TOPLAMI';

if($ilcegelen=="İlçe Seçiniz"){
$kurum=$ilinadi;
$kurumt=$ilinadi.' '.$iltop;

}elseif($ocgelen=="İLÇE TOPLAMI"){
$kurum=$ilinadi.'-'.$ilceninadi;
$kurumt=$ilceninadi.' '.$ilcetop;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI"){
$kurum=$ilinadi.'-'.$ocgelen;
$kurumt=$ocgelen.' '.$ahektop;

}else{
$kurum='';
}


if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ŞUBAT"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MART"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="NİSAN"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MAYIS"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="HAZİRAN"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="TEMMUZ"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="AĞUSTOS"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="EYLÜL"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="EKİM"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="KASIM"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ARALIK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;

//İLÇE DÖKÜMÜ
}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="ŞUBAT"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="MART"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="NİSAN"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="MAYIS"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="HAZİRAN"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="TEMMUZ"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="AĞUSTOS"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="EYLÜL"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="EKİM"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="KASIM"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM')") ;

}elseif($ocgelen=="İLÇE TOPLAMI"  and $aygelen=="ARALIK"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='ARALIK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='ARALIK')") ;




}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI"  and $aygelen=="ŞUBAT"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="MART"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="NİSAN"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,

sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="MAYIS"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="HAZİRAN"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="TEMMUZ"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="AĞUSTOS"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="EYLÜL"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="EKİM"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="KASIM"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI" and $aygelen=="ARALIK"){
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi,
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='ARALIK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='ARALIK')") ;

}else{
//OCAK TOPLAMLARI
$tresultvyil = @mysqli_query($dbh,"select vayadi as ayadi, 
sum(v1) as v1,sum(v2) as v2,sum(v3) as v3,sum(v4) as v4,sum(v5) as v5,sum(v6) as v6,sum(v7) as v7,sum(v8) as v8,sum(v9) as v9,sum(v10) as v10,sum(v11) as v11,
sum(v12) as v12,sum(v13) as v13,sum(v14) as v14,sum(v15) as v15,sum(v16) as v16,sum(v17) as v17,sum(v18) as v18,sum(v19) as v19,sum(v20) as v20,sum(v21) as v21,
sum(v22) as v22,sum(v23) as v23,sum(v24) as v24,sum(v25) as v25,sum(v26) as v26,sum(v27) as v27,sum(v28) as v28,sum(v29) as v29,sum(v30) as v30,sum(v31) as v31,
sum(v32) as v32,sum(v33) as v33,sum(v34) as v34,sum(v35) as v35,sum(v36) as v36,sum(v37) as v37,sum(v38) as v38,sum(v39) as v39,sum(v40) as v40,sum(v41) as v41,
sum(v42) as v42,sum(v43) as v43,sum(v44) as v44,sum(v45) as v45,sum(v46) as v46,sum(v47) as v47,sum(v48) as v48,sum(v49) as v49,sum(v50) as v50,sum(v51) as v51,
sum(v52) as v52,sum(v53) as v53,sum(v54) as v54,sum(v55) as v55,sum(v56) as v56,sum(v57) as v57,sum(v58) as v58,sum(v59) as v59,sum(v60) as v60,sum(v61) as v61,
sum(v62) as v62,sum(v63) as v63,sum(v64) as v64,sum(v65) as v65,sum(v66) as v66,sum(v67) as v67,sum(v68) as v68,sum(v69) as v69,sum(v70) as v70,sum(v71) as v71,
sum(v72) as v72,sum(v73) as v73,sum(v74) as v74,sum(v75) as v75,sum(v76) as v76,sum(v77) as v77,sum(v78) as v78,sum(v79) as v79,sum(v80) as v80,sum(v81) as v81,
sum(v82) as v82,sum(v83) as v83,sum(v84) as v84,sum(v85) as v85,sum(v86) as v86,sum(v87) as v87,sum(v88) as v88,sum(v89) as v89,sum(v90) as v90,sum(v91) as v91, 
sum(v92) as v92,sum(v93) as v93,sum(v94) as v94,sum(v95) as v95,sum(v96) as v96,sum(v97) as v97,sum(v98) as v98,sum(v99) as v99,sum(v100) as v100,sum(v101) as v101,
sum(v102) as v102,sum(v103) as v103,sum(v104) as v104,sum(v105) as v105,sum(v106) as v106,sum(v107) as v107,sum(v108) as v108,sum(v109) as v109,sum(v110) as v110, 
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,sum(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
$btresultvyil = @mysqli_query($dbh,"select sum(v49) as v49 from verib where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;

}

while($sonucum=mysqli_fetch_array($tresultvyil)){
$tayadi=$sonucum['ayadi'];
//$ilcadi=$sonucum['iii'];
//$socadi=$sonucum['vvv'];
$tverim1=$sonucum['v1'];$tverim2=$sonucum['v2'];$tverim3=$sonucum['v3'];$tverim4=$sonucum['v4'];$tverim5=$sonucum['v5'];$tverim6=$sonucum['v6'];$tverim7=$sonucum['v7'];
$tverim8=$sonucum['v8'];$tverim9=$sonucum['v9'];$tverim10=$sonucum['v10'];$tverim11=$sonucum['v11'];$tverim12=$sonucum['v12'];$tverim13=$sonucum['v13'];
$tverim14=$sonucum['v14'];$tverim15=$sonucum['v15'];$tverim16=$sonucum['v16'];$tverim17=$sonucum['v17'];$tverim18=$sonucum['v18'];$tverim19=$sonucum['v19'];
$tverim20=$sonucum['v20'];$tverim21=$sonucum['v21'];$tverim22=$sonucum['v22'];$tverim23=$sonucum['v23'];$tverim24=$sonucum['v24'];$tverim25=$sonucum['v25'];
$tverim26=$sonucum['v26'];$tverim27=$sonucum['v27'];$tverim28=$sonucum['v28'];$tverim29=$sonucum['v29'];$tverim30=$sonucum['v30'];$tverim31=$sonucum['v31'];
$tverim32=$sonucum['v32'];$tverim33=$sonucum['v33'];$tverim34=$sonucum['v34'];$tverim35=$sonucum['v35'];$tverim36=$sonucum['v36'];$tverim37=$sonucum['v37'];
$tverim38=$sonucum['v38'];$tverim39=$sonucum['v39'];$tverim40=$sonucum['v40'];$tverim41=$sonucum['v41'];$tverim42=$sonucum['v42'];$tverim43=$sonucum['v43'];
$tverim44=$sonucum['v44'];$tverim45=$sonucum['v45'];$tverim46=$sonucum['v46'];$tverim47=$sonucum['v47'];$tverim48=$sonucum['v48'];$tverim49=$sonucum['v49'];
$tverim50=$sonucum['v50'];$tverim51=$sonucum['v51'];$tverim52=$sonucum['v52'];$tverim53=$sonucum['v53'];$tverim54=$sonucum['v54'];$tverim55=$sonucum['v55'];
$tverim56=$sonucum['v56'];$tverim57=$sonucum['v57'];$tverim58=$sonucum['v58'];$tverim59=$sonucum['v59'];$tverim60=$sonucum['v60'];$tverim61=$sonucum['v61'];
$tverim62=$sonucum['v62'];$tverim63=$sonucum['v63'];$tverim64=$sonucum['v64'];$tverim65=$sonucum['v65'];$tverim66=$sonucum['v66'];$tverim67=$sonucum['v67'];
$tverim68=$sonucum['v68'];$tverim69=$sonucum['v69'];$tverim70=$sonucum['v70'];$tverim71=$sonucum['v71'];$tverim72=$sonucum['v72'];$tverim73=$sonucum['v73'];
$tverim74=$sonucum['v74'];$tverim75=$sonucum['v75'];$tverim76=$sonucum['v76'];$tverim77=$sonucum['v77'];$tverim78=$sonucum['v78'];$tverim79=$sonucum['v79'];
$tverim80=$sonucum['v80'];$tverim81=$sonucum['v81'];$tverim82=$sonucum['v82'];$tverim83=$sonucum['v83'];$tverim84=$sonucum['v84'];$tverim85=$sonucum['v85'];
$tverim86=$sonucum['v86'];$tverim87=$sonucum['v87'];$tverim88=$sonucum['v88'];$tverim89=$sonucum['v89'];$tverim90=$sonucum['v90'];$tverim91=$sonucum['v91'];
$tverim92=$sonucum['v92'];$tverim93=$sonucum['v93'];$tverim94=$sonucum['v94'];$tverim95=$sonucum['v95'];$tverim96=$sonucum['v96'];$tverim97=$sonucum['v97'];
$tverim98=$sonucum['v98'];$tverim99=$sonucum['v99'];$tverim100=$sonucum['v100'];$tverim101=$sonucum['v101'];$tverim102=$sonucum['v102'];$tverim103=$sonucum['v103'];
$tverim104=$sonucum['v104'];$tverim105=$sonucum['v105'];$tverim106=$sonucum['v106'];$tverim107=$sonucum['v107'];$tverim108=$sonucum['v108'];$tverim109=$sonucum['v109'];
$tverim110=$sonucum['v110'];$tverim111=$sonucum['v111'];$tverim112=$sonucum['v112'];$tverim113=$sonucum['v113'];$tverim114=$sonucum['v114'];$tverim115=$sonucum['v115'];
$tverim116=$sonucum['v116'];$tverim117=$sonucum['v117'];$tverim118=$sonucum['v118'];$tverim119=$sonucum['v119'];$tverim120=$sonucum['v120'];$tverim121=$sonucum['v121'];
$tverim122=$sonucum['v122'];$tverim123=$sonucum['v123'];$tverim124=$sonucum['v124'];$tverim125=$sonucum['v125'];$tverim126=$sonucum['v126'];$tverim127=$sonucum['v127'];
$tverim128=$sonucum['v128'];$tverim129=$sonucum['v129'];$tverim130=$sonucum['v130'];$tverim131=$sonucum['v131'];$tverim132=$sonucum['v132'];$tverim133=$sonucum['v133'];
$tverim134=$sonucum['v134'];$tverim135=$sonucum['v135'];$tverim136=$sonucum['v136'];$tverim137=$sonucum['v137'];$tverim138=$sonucum['v138'];$tverim139=$sonucum['v139'];
$tverim140=$sonucum['v140'];$tverim141=$sonucum['v141'];$tverim142=$sonucum['v142'];$tverim143=$sonucum['v143'];$tverim144=$sonucum['v144'];$tverim145=$sonucum['v145'];
$tverim146=$sonucum['v146'];$tverim147=$sonucum['v147'];$tverim148=$sonucum['v148'];$tverim149=$sonucum['v149'];$tverim150=$sonucum['v150'];$tverim151=$sonucum['v151'];
$tverim152=$sonucum['v152'];$tverim153=$sonucum['v153'];$tverim154=$sonucum['v154'];$tverim155=$sonucum['v155'];$tverim156=$sonucum['v156'];$tverim157=$sonucum['v157'];
$tverim158=$sonucum['v158'];$tverim159=$sonucum['v159'];$tverim160=$sonucum['v160'];$tverim161=$sonucum['v161'];$tverim162=$sonucum['v162'];$tverim163=$sonucum['v163'];
$tverim164=$sonucum['v164'];$tverim165=$sonucum['v165'];$tverim166=$sonucum['v166'];$tverim167=$sonucum['v167'];$tverim168=$sonucum['v168'];$tverim169=$sonucum['v169'];
$tverim170=$sonucum['v170'];$tverim171=$sonucum['v171'];$tverim172=$sonucum['v172'];
while($bsonucum=mysqli_fetch_array($btresultvyil)){$btverim49=$bsonucum['v49'];
//echo $dabt;
$ttoplamhepbid=$tverim74+$tverim75;
$ttoplamgebetet1=$tverim108+$tverim113;
$ttoplamgebetet2=$tverim109+$tverim114;
if($aygelen=="OCAK"){
$ay=1;
}elseif($aygelen=="ŞUBAT"){
$ay=2;
}elseif($aygelen=="MART"){
$ay=3;
}elseif($aygelen=="NİSAN"){
$ay=4;
}elseif($aygelen=="MAYIS"){
$ay=5;
}elseif($aygelen=="HAZİRAN"){
$ay=6;
}elseif($aygelen=="TEMMUZ"){
$ay=7;
}elseif($aygelen=="AĞUSTOS"){
$ay=8;
}elseif($aygelen=="EYLÜL"){
$ay=9;
}elseif($aygelen=="EKİM"){
$ay=10;
}elseif($aygelen=="KASIM"){
$ay=11;
}elseif($aygelen=="ARALIK"){
$ay=12;
}else{
$ay="TOPLAM";
}

/*
echo $tverim1;
echo '<br>';
echo $tverim119;
echo '<br>';
echo $ay;
echo '<br>';*/
/******************* KARMA 1.AŞI **************************/
$dabt1=round(($tverim1*100)/((($tverim119/$ay)/12)*$ay),0);
$asim1="DaBT-1 (". $tverim1." - %".$dabt1.")";
/*echo $dabt;
echo '<br>';
echo 'xxxxxxxxxxx';
echo '<br>';
echo $tayadi;*/
$dabt2=round(($tverim5*100)/((($tverim119/$ay)/12)*$ay),0);
$asim2="DaBT-2 (". $tverim5." - %".$dabt2.")";
/******************* KARMA 3.AŞI **************************/
$dabt3=round(($tverim9*100)/((($tverim119/$ay)/12)*$ay),0);
$asim3="DaBT-3 (". $tverim9." - %".$dabt3.")";
/******************* KARMA RAPEL AŞI **************************/
$dabtr=round(($tverim13*100)/((($tverim119/$ay)/12)*$ay),0);
$asimr="DaBT-Rapel (". $tverim13." - %".$dabtr.")";
/******************* KPA 1.AŞI **************************/
$kpa1=round(($tverim19*100)/((($tverim119/$ay)/12)*$ay),0);
$askpa1="KPA-1 (". $tverim19." - %".$kpa1.")";
/******************* KPA 2.AŞI **************************/
$kpa2=round(($tverim22*100)/((($tverim119/$ay)/12)*$ay),0);
$askpa2="KPA-2 (". $tverim22." - %".$kpa2.")";
/******************* KPA 3.AŞI **************************/
$kpa3=round(($tverim25*100)/((($tverim119/$ay)/12)*$ay),0);
$askpa3="KPA-3 (". $tverim25." - %".$kpa3.")";
/******************* KPA RAPEL AŞI **************************/
$kpar=round(($tverim28*100)/((($tverim119/$ay)/12)*$ay),0);
$askpar="KPA-Rapel (". $tverim28." - %".$kpar.")";
/******************* POLİO 1.AŞI **************************/
$opa1=round(($tverim30*100)/((($tverim119/$ay)/12)*$ay),0);
$asopa1="OPA-1 (". $tverim30." - %".$opa1.")";
/******************* POLİO 2.AŞI **************************/
$opa2=round(($tverim37*100)/((($tverim119/$ay)/12)*$ay),0);
$asopa2="OPA-Rapel (". $tverim37." - %".$opa2.")";
/******************* KKK AŞISI **************************/
$kkk=round(($tverim53*100)/((($tverim119/$ay)/12)*$ay),0);
$askkk="KKK (". $tverim53." - %".$kkk.")";
/******************* BCG AŞISI **************************/
$bcg=round(($tverim69*100)/((($tverim119/$ay)/12)*$ay),0);
$asbcg="BCG (". $tverim69." - %".$bcg.")";
/******************* HEPATİT-B 1.AŞI **************************/
$toplamhepbid=$tverim74+$tverim75+$btverim49;
$hepb1=round(($toplamhepbid*100)/((($tverim119/$ay)/12)*$ay),0);
$ashepb1="Hepatit B-1 (". $toplamhepbid." - %".$hepb1.")";
/******************* HEPATİT-B 2.AŞI **************************/
$hepb2=round(($tverim82*100)/((($tverim119/$ay)/12)*$ay),0);
$ashepb2="Hepatit B-2 (". $tverim82." - %".$hepb2.")";
/******************* HEPATİT-B 3.AŞI **************************/
$hepb3=round(($tverim88*100)/((($tverim119/$ay)/12)*$ay),0);
$ashepb3="Hepatit B-3 (". $tverim88." - %".$hepb3.")";
/******************* HEPATİT-A 1.AŞI **************************/
$hepa1=round(($tverim120*100)/((($tverim119/$ay)/12)*$ay),0);
$ashepa1="Hepatit A-1 (". $tverim120." - %".$hepa1.")";
/******************* HEPATİT-A 2.AŞI **************************/
$hepar=round(($tverim126*100)/((($tverim119/$ay)/12)*$ay),0);
$ashepar="Hep. A-Rapel (". $tverim126." - %".$hepar.")";
/******************* SU ÇİÇEĞİ AŞISI **************************/
$sc=round(($tverim130*100)/((($tverim119/$ay)/12)*$ay),0);
$assc="Su Çiçeği (". $tverim130." - %".$sc.")";

}
}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
if($ilcegelen=="İlçe Seçiniz"){
$neresi=$ilinadi;
}elseif($ocgelen=="İLÇE TOPLAMI"){
$neresi=$ilinadi.'-'.$ilceninadi;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="İLÇE TOPLAMI"){
$neresi=$ilinadi.'-'.$ilceninadi.'-'.$ocgelen;
}else{
$neresi=$ilinadi;
}
?>
