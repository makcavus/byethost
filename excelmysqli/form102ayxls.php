<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
set_time_limit(600);
date_default_timezone_set('Europe/London');
require_once ('phpexcel/Classes/PHPExcel.php');
require_once ('phpexcel/Classes/PHPExcel/IOFactory.php');
require_once('../con_023.php');
require_once('../con_102.php');
// Create new PHPExcel object
$objPHPExcel = new PHPExcel();
// Set properties
$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Test result file");

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelenx=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$ocakyazi=$_GET['selectoc'];
$ocgelen=$ocgelenx;
$aytoplami='AYI TOPLAMI';
/*$subat='ŞUBAT';
$nisan='NİSAN';
$haziran='HAZİRAN';
$agustos='AĞUSTOS';
$eylul='EYLÜL';
$ekim='EKİM';*/

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
$atarih=mysqli_query($dbh102,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh102,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}

if($ilcegelen=="İlçe Seçiniz"){
$resultvyil = @mysqli_query($dbh102,"select ilceidi as iii,vocadi as vvv, vayadi as vayadi,
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
sum(v172) as v172,
v173 as v173,
v174 as v174,
v175 as v175,
v176 as v176,
v177 as v177,
v178 as v178
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen') group by ilceidi order by ilceidi desc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$resultvyil = @mysqli_query($dbh102,"select ilceidi as iii,vocadi as vvv,vayadi as vayadi,
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
sum(v172) as v172,
v173 as v173,
v174 as v174,
v175 as v175,
v176 as v176,
v177 as v177,
v178 as v178
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen') group by vocadi order by vocadi desc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$resultvyil = @mysqli_query($dbh102,"select ilceidi as iii,vocadi as vvv,vayadi as vayadi,
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
sum(v172) as v172,
v173 as v173,
v174 as v174,
v175 as v175,
v176 as v176,
v177 as v177,
v178 as v178
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen') group by vocadi order by vocadi desc")  or die(mysqli_error()) ;
}else{
$resultvyil = @mysqli_query($dbh102,"select  ilceidi as iii,vocadi as vvv,vayadi as vayadi,
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
sum(v172) as v172,
v173 as v173,
v174 as v174,
v175 as v175,
v176 as v176,
v177 as v177,
v178 as v178
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen') order by desc") ;
}

while($sonucum=mysqli_fetch_array($resultvyil)){
include("sablonlar/form102/conf_birim_dongu.php");

if($ilcegelen=="İlçe Seçiniz"){
$gebedevir = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi<'$yilgelen') group by ilceidi order by ilceidi desc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$gebedevir = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi<'$yilgelen') group by vocadi order by vocadi desc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$gebedevir = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v12+v13) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen' and vocadi='$socadi') group by vocadi order by vocadi desc") ;
}
//DEVİRLER ayyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK') group by ilceidi order by ilceidi desc") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ŞUBAT"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK') group by ilceidi order by ilceidi desc") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MART"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="NİSAN"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MAYIS"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT'  or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="HAZİRAN"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="TEMMUZ"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="AĞUSTOS"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="EYLÜL"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="EKİM"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='EYLÜL') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="KASIM"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='EKİM') group by ilceidi order by ilceidi desc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ARALIK"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='EKİM' or ilidi='$ilgelen' and ilceidi='$ilcadi' and vyiladi='$yilgelen' and vayadi='KASIM') group by ilceidi order by ilceidi desc") ;

}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="OCAK"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="ŞUBAT"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK') group by vocadi order by vocadi asc") ;

}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="MART"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="NİSAN"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="MAYIS"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="HAZİRAN"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="TEMMUZ"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="AĞUSTOS"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="EYLÜL"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="EKİM"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="KASIM"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EKİM') group by vocadi order by vocadi asc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="ARALIK"){
$gebedeviray = @mysqli_query($dbh102,"select vocadi,sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EKİM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='KASIM') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="OCAK"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="ŞUBAT"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK') group by vocadi order by vocadi asc") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="MART"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="NİSAN"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="MAYIS"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="HAZİRAN"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="TEMMUZ"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="AĞUSTOS"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="EYLÜL"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="EKİM"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="KASIM"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EKİM') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="ARALIK"){
$gebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EKİM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='KASIM') group by vocadi order by vocadi asc") ;

}
while ($kayitlar = mysqli_fetch_array($gebedevir)) {

$devredengebe=$kayitlar["gsonucarti"]-$kayitlar["gsonuceksi"];
$devredenbebek=$kayitlar["bsonucarti"]-$kayitlar["bsonuceksi"];
$devredenlohusa=$kayitlar["lsonucarti"]-$kayitlar["lsonuceksi"];
$devredencocuk=$kayitlar["csonucarti"]-$kayitlar["csonuceksi"];
$devredenimp=$kayitlar["xsonucarti"]-$kayitlar["xsonuceksi"];

            
while($kayitlaray = mysqli_fetch_array($gebedeviray)) {

$devredengebeay=$kayitlaray["gsonucarti"]-$kayitlaray["gsonuceksi"];
$devredenbebekay=$kayitlaray["bsonucarti"]-$kayitlaray["bsonuceksi"];
$devredenlohusaay=$kayitlaray["lsonucarti"]-$kayitlaray["lsonuceksi"];
$devredencocukay=$kayitlaray["csonucarti"]-$kayitlaray["csonuceksi"];
$devredenimpay=$kayitlaray["xsonucarti"]-$kayitlaray["xsonuceksi"];

if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
$devredengebeay=0;
$devredenbebekay=0;
$devredenlohusaay=0;
$devredencocukay=0;
$devredenimpay=0;

}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="OCAK"){
$devredengebeay=0;
$devredenbebekay=0;
$devredenlohusaay=0;
$devredencocukay=0;
$devredenimpay=0;

}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];

if($ilcegelen=="İlçe Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod='';
$socadi=$ilkod.'.'.$ilcekod;
$verim176=$ilceninadi;

}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod=substr(trim($socadi),6,3);
$socadi=$ilkod.'.'.$ilcekod.'.'.$ahkod;
$verim176=$sonucum['v176'];

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($ocgelen),0,2);
$ilcekod=substr(trim($ocgelen),3,2);
$ahkod=substr(trim($ocgelen),6,3);
$socadi=$ilkod.'.'.$ilcekod.'.'.$ahkod;
$verim176=$sonucum['v176'];
}else{
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod=substr(trim($socadi),6,3);
$socadi=$ilkod.'.'.$ilcekod.'.'.$ahkod;
$verim176=$sonucum['v176'];

}
if(substr(trim($socadi),6,3)>99){
$ahkod=substr(trim($socadi),6,3);
}else if(substr(trim($socadi),6,3)>9 and substr(trim($socadi),6,3)<99){
$ahkod=substr(trim($socadi),7,2);
}else{
$ahkod=substr(trim($socadi),8,1);

}
$say=mysqli_num_rows($resultvyil);

//HEre your first sheet
   // $sheet = $objPHPExcel->getActiveSheet(0);

    //Start adding next sheets
    
    $objWorkSheet = $objPHPExcel->createSheet(1); //Setting index when creating
	
//Veritabani islemi deneme							 

//require_once('con_013.php');
//require_once('ilfrm013sql.php');

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh102,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh102,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$iltop='İL TOPLAMI';
$ilcetop='İLÇE TOPLAMI';
$ahektop='TOPLAMI';

if($ilcegelen=="İlçe Seçiniz"){
$top='İLÇE TOPLAMI';
$kurum=$ilceninadi;
$kurumt=$ilinadi.' '.$iltop;
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysqli_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='')");
}
while($sorumlusonucum=mysqli_fetch_array($ilcesorumlulari)){
$verim173=$sorumlusonucum['aseadi'];
$verim174=$sorumlusonucum['aseunvan'];
$verim176=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$verim177=$onkurum.' '.$onsor;
}
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$kurum=$ahkod;
$kurumt=$ilceninadi.' '.$ilcetop;
$top=$socadi.' / '.$verim176;

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysqli_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='$socadi') group by socad order by socad");
}
while($sorumlusonucum=mysqli_fetch_array($ilcesorumlulari)){
$onkurum=$sorumlusonucum['asmadi'];
//$verim173=$sorumlusonucum['aseadi'];
//$verim174=$sorumlusonucum['aseunvan'];
//$verim176=$sorumlusonucum['dradi'];
$onsor="Sorumlusu";
}
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$top=$socadi.' / '.$verim176;
$kurum=$ocgelen;
$kurumt=$ocgelen.' '.$ahektop;
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysqli_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad='$ocgelen')");
}
while($sorumlusonucum=mysqli_fetch_array($ilcesorumlulari)){
$verim173=$sorumlusonucum['aseadi'];
$verim174=$sorumlusonucum['aseunvan'];
$verim176=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
}

}else{
$kurum='';
}

include("sablonlar/form102/conf_birim102toplam.php");
            
}
}
$objPHPExcel->getSheet(1)->setTitle($kurum);
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
//$objPHPExcel->setActiveSheetIndex(1);
$objPHPExcel->getActiveSheet(1)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet(1)->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
//Kenar Bosluklari
// margin is set in inches (0.5cm)
$margin = 1.00 / 2.54;
$objPHPExcel->getActiveSheet(1)->getPageMargins()->setTop($margin);
$objPHPExcel->getActiveSheet(1)->getPageMargins()->setBottom($margin);
$objPHPExcel->getActiveSheet(1)->getPageMargins()->setLeft($margin);
$objPHPExcel->getActiveSheet(1)->getPageMargins()->setRight($margin);
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

$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

if($ilcegelen=="İlçe Seçiniz"){
$tresultvyil = @mysqli_query($dbh102,"select
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
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen') order by ilceidi desc") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$tresultvyil = @mysqli_query($dbh102,"select
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

from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen') order by vocadi desc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$tresultvyil = @mysqli_query($dbh102,"select
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

from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
}else{
$tresultvyil = @mysqli_query($dbh102,"select
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
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen'and vayadi='$aygelen')") ;
}

while($sonucum=mysqli_fetch_array($tresultvyil)){

include("sablonlar/form102/conf_toplam_dongu.php");
if($ilcegelen=="İlçe Seçiniz"){
$tgebedevir = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$tgebedevir = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$tgebedevir = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v12+v13) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi<'$yilgelen')") ;
}
//DEVİRLER ayyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ŞUBAT"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;

}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MART"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="NİSAN"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MAYIS"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT'  or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="HAZİRAN"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="TEMMUZ"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="AĞUSTOS"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="EYLÜL"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="EKİM"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="KASIM"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='EKİM')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ARALIK"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='EKİM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;

}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="OCAK"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="ŞUBAT"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;

}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="MART"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="NİSAN"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="MAYIS"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="HAZİRAN"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="TEMMUZ"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="AĞUSTOS"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="EYLÜL"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="EKİM"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="KASIM"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='EKİM')") ;
}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="ARALIK"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='EKİM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="OCAK"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="ŞUBAT"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK')") ;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="MART"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="NİSAN"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="MAYIS"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="HAZİRAN"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="TEMMUZ"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="AĞUSTOS"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="EYLÜL"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="EKİM"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="KASIM"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EKİM')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz" and $aygelen=="ARALIK"){
$tgebedeviray = @mysqli_query($dbh102,"select sum(v17+v18) as gsonucarti,sum(v22+v23) as bsonucarti,sum(v27+v28) as lsonucarti,sum(v32+v33) as csonucarti,sum(v37+v38) as xsonucarti,sum(v19+v20+v21) as gsonuceksi,sum(v24+v25+v26) as bsonuceksi,sum(v29+v30+v31) as lsonuceksi,sum(v34+v35+v36) as csonuceksi,sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='ŞUBAT' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='NİSAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='HAZİRAN' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='AĞUSTOS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EYLÜL' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='EKİM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$socadi' and vyiladi='$yilgelen' and vayadi='KASIM')") ;

}
while ($tkayitlar = mysqli_fetch_array($tgebedevir)) {

$tdevredengebe=$tkayitlar["gsonucarti"]-$tkayitlar["gsonuceksi"];
$tdevredenbebek=$tkayitlar["bsonucarti"]-$tkayitlar["bsonuceksi"];
$tdevredenlohusa=$tkayitlar["lsonucarti"]-$tkayitlar["lsonuceksi"];
$tdevredencocuk=$tkayitlar["csonucarti"]-$tkayitlar["csonuceksi"];
$tdevredenimp=$tkayitlar["xsonucarti"]-$tkayitlar["xsonuceksi"];

            
while($tkayitlaray = mysqli_fetch_array($tgebedeviray)) {

$tdevredengebeay=$tkayitlaray["gsonucarti"]-$tkayitlaray["gsonuceksi"];
$tdevredenbebekay=$tkayitlaray["bsonucarti"]-$tkayitlaray["bsonuceksi"];
$tdevredenlohusaay=$tkayitlaray["lsonucarti"]-$tkayitlaray["lsonuceksi"];
$tdevredencocukay=$tkayitlaray["csonucarti"]-$tkayitlaray["csonuceksi"];
$tdevredenimpay=$tkayitlaray["xsonucarti"]-$tkayitlaray["xsonuceksi"];

if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
$tdevredengebeay=0;
$tdevredenbebekay=0;
$tdevredenlohusaay=0;
$tdevredencocukay=0;
$tdevredenimpay=0;

}elseif($ocgelen=="Aile Hekimini Seçiniz" and $aygelen=="OCAK"){
$tdevredengebeay=0;
$tdevredenbebekay=0;
$tdevredenlohusaay=0;
$tdevredencocukay=0;
$tdevredenimpay=0;

}
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh102,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh102,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$iltop='İL TOPLAMI';
$ilcetop='İLÇE TOPLAMI';
$ahektop='TOPLAMI';

if($ilcegelen=="İlçe Seçiniz"){
$top='';

$kurum=$ilceninadi;
$kurumt=$ilinadi.' '.$iltop;
$kurumb=$ilinadi.' '.$iltop;
$asm='';
$ilcesorumlulari=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and socad like '%HSM' or ilinad='$ilgelen' and socad='')");
while($sorumlusonucum=mysqli_fetch_array($ilcesorumlulari)){
$tverim173=$sorumlusonucum['aseadi'];
$tverim174=$sorumlusonucum['aseunvan'];
$tverim176=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$tverim177=$onkurum.' '.$onsor;
}

}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$top='İLÇE TOPLAMI';
$asm='';
$kurum=$socadi;
$kurumt=$ilceninadi;
$kurumb=$ilceninadi.' '.$ilcetop;
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysqli_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysqli_query($dbh,"select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='')");
}
while($sorumlusonucum=mysqli_fetch_array($ilcesorumlulari)){
$tverim173=$sorumlusonucum['aseadi'];
$tverim174=$sorumlusonucum['aseunvan'];
$tverim176=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$tverim177=$onkurum.' '.$onsor;
}
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$top=$socadi.' / '.$verim176;
$asm=$onkurum;
$kurum=$ilinadi.'-'.$ocgelen;
$kurumt=$ilceninadi;
$kurumb=$ocgelen.' '.$ahektop;
$tresultvyil = @mysqli_query($dbh102,"select v173 as v173,v174 as v174,v176 as v176,v177 as v177 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($tresultvyil)){

$tverim173=$sonucum['v173'];
$tverim174=$sonucum['v174'];
$tverim176=$sonucum['v176'];
$tverim177=$sonucum['v177'];
}
}else{
$top=$ocgelen;
$kurum=$ilinadi.'-'.$ocgelen;
$kurumt=$ilceninadi;
$kurumb=$ocgelen.' '.$ahektop;
$tresultvyil = @mysqli_query($dbh102,"select v173 as v173,v174 as v174,v176 as v176,v177 as v177 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen'and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($tresultvyil)){

$tverim173=$sonucum['v173'];
$tverim174=$sonucum['v174'];
$tverim176=$sonucum['v176'];
$tverim177=$sonucum['v177'];
}
}


include("sablonlar/form102/conf_genel102toplam.php");
			}
			}		 

$objPHPExcel->getActiveSheet(0)->setTitle($kurumb);

$objPHPExcel->getActiveSheet(0)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

$objPHPExcel->getActiveSheet(0)->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

//Kenar Bosluklari

// margin is set in inches (0.5cm)

$margin = 1.00 / 2.54;



$objPHPExcel->getActiveSheet(0)->getPageMargins()->setTop($margin);

$objPHPExcel->getActiveSheet(0)->getPageMargins()->setBottom($margin);

$objPHPExcel->getActiveSheet(0)->getPageMargins()->setLeft($margin);

$objPHPExcel->getActiveSheet(0)->getPageMargins()->setRight($margin);


}

$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);















// Redirect output to a client�s web browser (Excel5)

header('Content-Type: application/vnd.ms-excel');

header('Content-Disposition: attachment;filename="Form102_SERİK.xls"');

header('Cache-Control: max-age=0');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

$objWriter->save('php://output');

exit;