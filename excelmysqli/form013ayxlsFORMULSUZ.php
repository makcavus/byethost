<?php
set_time_limit(600);
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("iso-8859-9", "utf-8", $_GET['selectilce']); 
$ocgelen=iconv("iso-8859-9", "utf-8",$_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$ilceyazi=iconv("utf-8", "iso-8859-9", $_GET['selectilce']);
//include('sumay.php');
$aytoplami=trsuz('AYI TOPLAMI');

/** Error reporting */
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

//include "05featuredemo.inc.php";

/** PHPExcel_IOFactory */
require_once ('phpexcel/Classes/PHPExcel.php');
require_once ('phpexcel/Classes/PHPExcel/IOFactory.php');
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
//Veritabani islemi deneme							 
require_once('con_013.php');
?>
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

?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];

}
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}



if($ilcegelen=="İlçe Seçiniz"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, vayadi as vayadi,
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
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv,vayadi as vayadi,
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
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv,vayadi as vayadi,
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
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen') group by vocadi order by vocadi desc")  or die(mysql_error()) ;
}else{
$resultvyil = @mysql_query("select  ilceidi as iii,vocadi as vvv,vayadi as vayadi,
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

while($sonucum=mysql_fetch_array($resultvyil)){
$ilcadi=$sonucum['iii'];
$socadi=$sonucum['vvv'];
$ayadi=$sonucum['vayadi'];
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

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];

if($ilcegelen=="İlçe Seçiniz"){
$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz('');
$socadi=trsuz($ilkod.'.'.$ilcekod);
$verim176=$ilceninadi;

}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz(substr(trim($socadi),6,3));
$socadi=trsuz($ilkod.'.'.$ilcekod.'.'.$ahkod);
$verim176=$sonucum['v176'];

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$ilkod=trsuz(substr(trim($ocgelen),0,2));
$ilcekod=trsuz(substr(trim($ocgelen),3,2));
$ahkod=trsuz(substr(trim($ocgelen),6,3));
$socadi=trsuz($ilkod.'.'.$ilcekod.'.'.$ahkod);
$verim176=$sonucum['v176'];
}else{
$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz(substr(trim($socadi),6,3));
$socadi=trsuz($ilkod.'.'.$ilcekod.'.'.$ahkod);
$verim176=$sonucum['v176'];

}
if(substr(trim($socadi),6,3)>99){
$ahkod=trsuz(substr(trim($socadi),6,3));
}else if(substr(trim($socadi),6,3)>9 and substr(trim($socadi),6,3)<99){
$ahkod=trsuz(substr(trim($socadi),7,2));
}else{
$ahkod=trsuz(substr(trim($socadi),8,1));

}
$say=mysql_num_rows($resultvyil);

//HEre your first sheet
   // $sheet = $objPHPExcel->getActiveSheet(0);

    //Start adding next sheets
    
    $objWorkSheet = $objPHPExcel->createSheet(1); //Setting index when creating
	
//Veritabani islemi deneme							 

//require_once('con_013.php');
//require_once('ilfrm013sql.php');

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$iltop=trsuz('İL TOPLAMI');
$ilcetop=trsuz('İLÇE TOPLAMI');
$ahektop=trsuz('TOPLAMI');

if($ilcegelen=="İlçe Seçiniz"){
$top=trsuz('İLÇE TOPLAMI');
$kurum=$ilceninadi;
$kurumt=$ilinadi.' '.$iltop;
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='')");
}
while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){
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
$top=$socadi;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$top=$ocgelen;
$kurum=$ocgelen;
$kurumt=$ocgelen.' '.$ahektop;

}else{
$kurum=trsuz('');
}




$styleThinBlackBorderOutline = array(

	'borders' => array(

		'allborders' => array(

			'style' => PHPExcel_Style_Border::BORDER_THIN,

			'color' => array('argb' => 'FF000000'),

		),

	),

);

$ciftcizgi = array(

	'borders' => array(

		'outline' => array(

			'style' => PHPExcel_Style_Border::BORDER_DOUBLE,

			'color' => array('argb' => 'FF000000'),

		),

	),

);



$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);


$objPHPExcel->getSheet(1)->getColumnDimension('A')->setWidth(20);

$objPHPExcel->getSheet(1)->getColumnDimension('B')->setWidth(6.7);

$objPHPExcel->getSheet(1)->getColumnDimension('C')->setWidth(4.0);

$objPHPExcel->getSheet(1)->getColumnDimension('D')->setWidth(4.0);

$objPHPExcel->getSheet(1)->getColumnDimension('E')->setWidth(7.3);



for ($col = 'F'; $col != 'K'; $col++) {

$objPHPExcel->getSheet(1)->getColumnDimension($col)->setWidth(12.7);

}

$objPHPExcel->getSheet(1)->getColumnDimension('K')->setWidth(13);

//$objPHPExcel->getSheet(1)->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);

$objPHPExcel->getSheet(1)->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('I8:J12')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C11')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C12:H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C12:H12')->getFill()->getStartColor()->setARGB('# bebebe');

//satir y�ksekligi

//$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(230);

//Yazinin y�n�

//$objPHPExcel->getSheet(1)->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);*/

//h�cre degeri
$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('5')->setRowHeight(5);
$objPHPExcel->getSheet(1)->getRowDimension('6')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('7')->setRowHeight(30);
$objPHPExcel->getSheet(1)->getRowDimension('8')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('9')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('10')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('11')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('12')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('14')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('16')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('17')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('18')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('19')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('20')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('22')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('23')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('24')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('25')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('26')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('28')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('29')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('30')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('32')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('34')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('36')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('37')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('38')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('39')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('40')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('42')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('44')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('46')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('47')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('48')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('49')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('50')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('51')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('52')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('53')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('54')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('55')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('56')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('57')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('58')->setRowHeight(15);
$objPHPExcel->getSheet(1)->getRowDimension('59')->setRowHeight(15);


$objPHPExcel->getSheet(1)->getStyle('A1:K66')->getAlignment()->setWrapText(true);

$objPHPExcel->getSheet(1)->getStyle('A6:K66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(1)->getStyle('A6:K66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(20);

$objPHPExcel->getSheet(1)->mergeCells("A1:K1");

$objPHPExcel->getActiveSheet(0)->getStyle('A1:K66')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet(0)->getStyle('A1')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
	  
$objPHPExcel->getSheet(1)->mergeCells("B2:H2");
$objPHPExcel->getSheet(1)->mergeCells("B3:H3");
$objPHPExcel->getSheet(1)->mergeCells("B4:G4");
$objPHPExcel->getActiveSheet(0)->getStyle('K2:K4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
	  
$objPHPExcel->getActiveSheet(1)->getTabColor()->setARGB('##042EA0');
	  
$objPHPExcel->getSheet(1)->setCellValue('A1', 'AŞI SONUÇLARI ÇİZELGESİ   (FORM013)');

$objPHPExcel->getSheet(1)->setCellValue('A2', 'İL:');

$objPHPExcel->getSheet(1)->setCellValue('A3', 'İLÇE:');

$objPHPExcel->getSheet(1)->setCellValue('A4','KURUM:');

//$objPHPExcel->getSheet(1)->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
$objPHPExcel->getActiveSheet(0)->getStyle('H4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet(0)->getStyle('J2:J3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );

	  

$objPHPExcel->getSheet(1)->mergeCells("H4:J4");

$objPHPExcel->getActiveSheet(1)->getColumnDimension($col)->setWidth(15);



$objPHPExcel->getSheet(1)->setCellValue('H4','YILLIK 0-11 AY BEBEK NÜFUSU:');

$objPHPExcel->getSheet(1)->setCellValue('J2','YIL:');

$objPHPExcel->getSheet(1)->setCellValue('J3','AY:');

$objPHPExcel->getSheet(1)->setCellValue('A6','');

$objPHPExcel->getSheet(1)->mergeCells("B6:K6");

$objPHPExcel->getSheet(1)->getStyle('A6:K60')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(1)->getStyle('A6:K60')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A6:K12")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A6:K12")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet(1)->setCellValue('B6','YAŞ GRUPLARINA GÖRE YAPILAN DOZ SAYISI');



$objPHPExcel->getSheet(1)->setCellValue('A7','AŞI');

$objPHPExcel->getSheet(1)->setCellValue('B8','I');

$objPHPExcel->getSheet(1)->setCellValue('B9','II');

$objPHPExcel->getSheet(1)->setCellValue('B10','III');

$objPHPExcel->getSheet(1)->setCellValue('B11','R');



$objPHPExcel->getSheet(1)->mergeCells("A8:A11");

$objPHPExcel->getSheet(1)->setCellValue('B7','Uygu- lama');

$objPHPExcel->getSheet(1)->mergeCells("C7:E7");

$objPHPExcel->getSheet(1)->setCellValue('C7','0 yaş              (0-11 ay)');

$objPHPExcel->getSheet(1)->setCellValue('F7','1 yaş');

$objPHPExcel->getSheet(1)->setCellValue('G7','2-4 yaş');

$objPHPExcel->getSheet(1)->setCellValue('H7','5-9 yaş');

$objPHPExcel->getSheet(1)->setCellValue('I7','10-14 yaş');

$objPHPExcel->getSheet(1)->setCellValue('J7','15 yaş ve üzeri');

$objPHPExcel->getSheet(1)->setCellValue('K7','TOPLAM');

$objPHPExcel->getSheet(1)->mergeCells("C8:E8");

$objPHPExcel->getSheet(1)->mergeCells("C9:E9");

$objPHPExcel->getSheet(1)->mergeCells("C10:E10");

$objPHPExcel->getSheet(1)->mergeCells("C11:E11");

$objPHPExcel->getSheet(1)->mergeCells("C12:E12");


$objPHPExcel->getSheet(1)->mergeCells("A12:B12");

$objPHPExcel->getSheet(1)->setCellValue('A8','DaBT-IPA-Hib AŞISI');

$objPHPExcel->getSheet(1)->setCellValue('A12','TOPLAM DaBT-IPA-Hib');

$objPHPExcel->getSheet(1)->getRowDimension('13')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A14:K14")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A14:K14")->applyFromArray($ciftcizgi);



//HiB AŞISI

$objPHPExcel->getSheet(1)->mergeCells("C14:E14");

$objPHPExcel->getSheet(1)->setCellValue('A14','Hib AŞISI');

$objPHPExcel->getSheet(1)->getStyle('B14:G14')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('B14:G14')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->setCellValue('B14','');

$objPHPExcel->getSheet(1)->getStyle('J14')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('J14')->getFill()->getStartColor()->setARGB('# bebebe');


//KONJUGE PNOMOKOK AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('15')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A16:K20")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A16:K20")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->mergeCells("A16:A19");

$objPHPExcel->getSheet(1)->setCellValue('A16','KONJUGE PNÖMOKOK AŞISI');

$objPHPExcel->getSheet(1)->mergeCells("A20:B20");

$objPHPExcel->getSheet(1)->setCellValue('A20','TOPLAM KPA');

$objPHPExcel->getSheet(1)->setCellValue('B16','I');

$objPHPExcel->getSheet(1)->setCellValue('B17','II');

$objPHPExcel->getSheet(1)->setCellValue('B18','III');

$objPHPExcel->getSheet(1)->setCellValue('B19','R');

$objPHPExcel->getSheet(1)->mergeCells("C16:E16");

$objPHPExcel->getSheet(1)->mergeCells("C17:E17");

$objPHPExcel->getSheet(1)->mergeCells("C18:E18");

$objPHPExcel->getSheet(1)->mergeCells("C19:E19");

$objPHPExcel->getSheet(1)->mergeCells("C20:E20");

$objPHPExcel->getSheet(1)->getStyle('H16:J20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('H16:J20')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C19')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C20:H20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C20:H20')->getFill()->getStartColor()->setARGB('# bebebe');



//POLİO AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('21')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A22:K26")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A22:K26")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->mergeCells("A22:A25");

$objPHPExcel->getSheet(1)->setCellValue('A22','ORAL POLİO AŞISI');

$objPHPExcel->getSheet(1)->mergeCells("A26:B26");

$objPHPExcel->getSheet(1)->setCellValue('A26','TOPLAM ORAL POLİO');

$objPHPExcel->getSheet(1)->setCellValue('B22','I');

$objPHPExcel->getSheet(1)->setCellValue('B23','II');

$objPHPExcel->getSheet(1)->setCellValue('B24','III');

$objPHPExcel->getSheet(1)->setCellValue('B25','R');

$objPHPExcel->getSheet(1)->mergeCells("C22:E22");

$objPHPExcel->getSheet(1)->mergeCells("C23:E23");

$objPHPExcel->getSheet(1)->mergeCells("C24:E24");

$objPHPExcel->getSheet(1)->mergeCells("C25:E25");

$objPHPExcel->getSheet(1)->mergeCells("C26:E26");

$objPHPExcel->getSheet(1)->getStyle('C23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C23')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C24:j26')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);


$objPHPExcel->getSheet(1)->getStyle('C24:j26')->getFill()->getStartColor()->setARGB('# bebebe');

//KIZAMIK AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('27')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A28:K30")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A28:K30")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->mergeCells("A28:A29");

$objPHPExcel->getSheet(1)->setCellValue('A28','K.K.K. AŞISI');

$objPHPExcel->getSheet(1)->mergeCells("A30:B30");

$objPHPExcel->getSheet(1)->setCellValue('A30','TOPLAM K.K.K.');

$objPHPExcel->getSheet(1)->setCellValue('B28','I');

$objPHPExcel->getSheet(1)->setCellValue('B29','R');

$objPHPExcel->getSheet(1)->mergeCells("C28:E28");

$objPHPExcel->getSheet(1)->mergeCells("C29:E29");

$objPHPExcel->getSheet(1)->mergeCells("C30:E30");

$objPHPExcel->getSheet(1)->getStyle('C28:C30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C28:C30')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('F30:j30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('F30:j30')->getFill()->getStartColor()->setARGB('# bebebe');

//PPD

$objPHPExcel->getSheet(1)->getRowDimension('31')->setRowHeight(5);

$objPHPExcel->getSheet(1)->mergeCells("C32:E32");

$objPHPExcel->getSheet(1)->setCellValue('A32','PPD');

$objPHPExcel->getSheet(1)->setCellValue('B32','');

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A32:K32")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A32:K32")->applyFromArray($ciftcizgi);

//BCG AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('33')->setRowHeight(5);

$objPHPExcel->getSheet(1)->mergeCells("C34:E34");

$objPHPExcel->getSheet(1)->setCellValue('A34','BCG AŞISI');

$objPHPExcel->getSheet(1)->setCellValue('B34','I');

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A34:K34")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A34:K34")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->getStyle('I34:j34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('I34:j34')->getFill()->getStartColor()->setARGB('# bebebe');

//HEPATİT B Bİ BD VE TOPLAM
$objPHPExcel->setActiveSheetIndex(1)->getStyle("C36:E36")->getFont()->setName('Arial')->setSize(7);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("C37")->getFont()->setName('Arial')->setSize(6);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("D37")->getFont()->setName('Arial')->setSize(8);

$objPHPExcel->getSheet(1)->getRowDimension('35')->setRowHeight(4);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("C36:E36")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->getSheet(1)->setCellValue('C36','BD');

$objPHPExcel->getSheet(1)->setCellValue('D36','Bİ');

$objPHPExcel->getSheet(1)->setCellValue('E36','TOPLAM');

//HEPATİT B AŞISI

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A37:K40")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A37:K40")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->mergeCells("A37:A39");

$objPHPExcel->getSheet(1)->setCellValue('A37','  HEPATİT-B   AŞISI');

$objPHPExcel->getSheet(1)->mergeCells("A40:B40");

$objPHPExcel->getSheet(1)->setCellValue('A40','TOPLAM HEPATİT B');

$objPHPExcel->getSheet(1)->setCellValue('B37','I');

$objPHPExcel->getSheet(1)->setCellValue('B38','II');

$objPHPExcel->getSheet(1)->setCellValue('B39','III');

$objPHPExcel->getSheet(1)->mergeCells("C38:E38");

$objPHPExcel->getSheet(1)->mergeCells("C39:E39");

$objPHPExcel->getSheet(1)->mergeCells("C40:E40");

$objPHPExcel->getSheet(1)->getStyle('C40:J40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C40:J40')->getFill()->getStartColor()->setARGB('# bebebe');

//HEPATİT A AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('41')->setRowHeight(5);
$objPHPExcel->getSheet(1)->getRowDimension('43')->setRowHeight(15);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A42:K44")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A42:K44")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->mergeCells("A42:A43");

$objPHPExcel->getSheet(1)->setCellValue('A42','HEPATİT A AŞISI');

$objPHPExcel->getSheet(1)->mergeCells("A44:B44");

$objPHPExcel->getSheet(1)->setCellValue('A44','TOPLAM HEPATİT A');

$objPHPExcel->getSheet(1)->setCellValue('B42','I');

$objPHPExcel->getSheet(1)->setCellValue('B43','R');

$objPHPExcel->getSheet(1)->mergeCells("C42:E42");

$objPHPExcel->getSheet(1)->mergeCells("C43:E43");

$objPHPExcel->getSheet(1)->mergeCells("C44:E44");

$objPHPExcel->getSheet(1)->getStyle('C42:C44')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C42:C44')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('F44:j44')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('F44:j44')->getFill()->getStartColor()->setARGB('# bebebe');

//SU ÇİÇEĞİ AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('45')->setRowHeight(5);

$objPHPExcel->getSheet(1)->mergeCells("C46:E46");


$objPHPExcel->setActiveSheetIndex(1)->getStyle("A46")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet(1)->setCellValue('A46','SU ÇİÇEĞİ AŞISI');

$objPHPExcel->getSheet(1)->setCellValue('B46','');

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A46:K46")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A46:K46")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->getStyle('C46')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C46')->getFill()->getStartColor()->setARGB('# bebebe');


//KIZAMIKÇIK AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('47')->setRowHeight(5);

$objPHPExcel->getSheet(1)->mergeCells("C48:E48");


$objPHPExcel->setActiveSheetIndex(1)->getStyle("A48")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet(1)->setCellValue('A48','KIZAMIKÇIK AŞISI');

$objPHPExcel->getSheet(1)->setCellValue('B48','');

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A48:K48")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A48:K48")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->getStyle('C48:I48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C48:I48')->getFill()->getStartColor()->setARGB('# bebebe');

//OKUL Td AŞISI

$objPHPExcel->getSheet(1)->getRowDimension('49')->setRowHeight(5);

$objPHPExcel->getSheet(1)->mergeCells("C50:E50");

$objPHPExcel->getSheet(1)->setCellValue('A50','OKUL Td AŞISI');

$objPHPExcel->getSheet(1)->setCellValue('B50','');

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A50:K50")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A50:K50")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->getStyle('C50:H50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C50:H50')->getFill()->getStartColor()->setARGB('# bebebe');

//Td AŞISI
$objPHPExcel->getSheet(1)->getRowDimension('51')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A52:K59")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A52:K59")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(1)->mergeCells("C52:E52");

$objPHPExcel->getSheet(1)->setCellValue('A52','DİĞER Td');

$objPHPExcel->getSheet(1)->setCellValue('B52','');

$objPHPExcel->getSheet(1)->setCellValue('A53','');

$objPHPExcel->getSheet(1)->setCellValue('B53','');

$objPHPExcel->getSheet(1)->mergeCells("C53:G53");

$objPHPExcel->getSheet(1)->mergeCells("H53:J53");

$objPHPExcel->getSheet(1)->setCellValue('C53','GEBE');

$objPHPExcel->getSheet(1)->setCellValue('H53','GEBE DEĞİL');

$objPHPExcel->getSheet(1)->getStyle('B53:K53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('B53:K53')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->mergeCells("A54:A58");

$objPHPExcel->getSheet(1)->setCellValue('A54','15-49 YAŞ KADIN Td AŞISI');
$objPHPExcel->getSheet(1)->setCellValue('B54','Td1');
$objPHPExcel->getSheet(1)->setCellValue('B55','Td2');
$objPHPExcel->getSheet(1)->setCellValue('B56','Td3');
$objPHPExcel->getSheet(1)->setCellValue('B57','Td4');
$objPHPExcel->getSheet(1)->setCellValue('B58','Td5');
$objPHPExcel->getSheet(1)->setCellValue('A59','TOPLAM Td');


$objPHPExcel->getSheet(1)->mergeCells("C54:G54");
$objPHPExcel->getSheet(1)->mergeCells("C55:G55");
$objPHPExcel->getSheet(1)->mergeCells("C56:G56");
$objPHPExcel->getSheet(1)->mergeCells("C57:G57");
$objPHPExcel->getSheet(1)->mergeCells("C58:G58");
$objPHPExcel->getSheet(1)->mergeCells("C59:G59");

$objPHPExcel->getSheet(1)->mergeCells("A59:B59");
$objPHPExcel->getSheet(1)->mergeCells("H54:J54");
$objPHPExcel->getSheet(1)->mergeCells("H55:J55");
$objPHPExcel->getSheet(1)->mergeCells("H56:J56");
$objPHPExcel->getSheet(1)->mergeCells("H57:J57");
$objPHPExcel->getSheet(1)->mergeCells("H58:J58");
$objPHPExcel->getSheet(1)->mergeCells("H59:J59");

//AÇIKLAMALAR
$objPHPExcel->getSheet(1)->getRowDimension('60')->setRowHeight(12);
$objPHPExcel->getActiveSheet(0)->getStyle('A61:A61')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A61:A62")->getFont()->setName('Arial')->setSize(7);
	  
$objPHPExcel->getSheet(1)->mergeCells("A61:K61");
$objPHPExcel->getSheet(1)->mergeCells("A62:K62");

$objPHPExcel->getSheet(1)->setCellValue('A61','Hepatit B aşısının 0-11 ay grubuna 1. doz uygulaması kendi bebeğiniz olup bölge dışında (hastane,resmi diğer kurumlar) yapıldı ise BD sütununa ');
$objPHPExcel->getSheet(1)->setCellValue('A62','kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.');
$objPHPExcel->getSheet(1)->mergeCells("A64:D64");
$objPHPExcel->getSheet(1)->mergeCells("I64:K64");
$objPHPExcel->getSheet(1)->setCellValue('A64','Formu Düzenleyen');
$objPHPExcel->getSheet(1)->setCellValue('I64','Formu Onaylayan');
$objPHPExcel->getSheet(1)->mergeCells("A65:D65");
$objPHPExcel->getSheet(1)->mergeCells("I65:K65");
$objPHPExcel->getSheet(1)->mergeCells("A66:D66");
$objPHPExcel->getSheet(1)->mergeCells("I66:K66");

//DBT
$dbt1top=$verim1+$verim2+$verim3+$verim4;
$dbt2top=$verim5+$verim6+$verim7+$verim8;
$dbt3top=$verim9+$verim10+$verim11+$verim12;
$dbtraptop=$verim13+$verim14+$verim15;
$toplamdbt=$dbt1top+$dbt2top+$dbt3top+$dbtraptop;
//HİB
$toplamhib=$verim17+$verim18;
//KPA
$kpa1top=$verim19+$verim20+$verim21;
$kpa2top=$verim22+$verim23+$verim24;
$kpa3top=$verim25+$verim26+$verim27;
$kparaptop=$verim28+$verim29;
$toplamkpa=$kpa1top+$kpa2top+$kpa3top+$kparaptop;
//POLİO
$pol1top=$verim30+$verim31+$verim32+$verim33+$verim34+$verim35;
$pol2top=$verim37+$verim38+$verim39+$verim40+$verim41;
$toplampol=$pol1top+$pol2top;
//KKK
$kkk1top=$verim53+$verim54+$verim55+$verim56+$verim57;
$kkkraptop=$verim58+$verim59+$verim60+$verim61+$verim62;
$toplamkkk=$kkk1top+$kkkraptop;
//PPD
$ppdtop=$verim63+$verim64+$verim65+$verim66+$verim67+$verim68;
//BCG
$bcgtop=$verim69+$verim70+$verim71+$verim72;
//HEPATİT-B
$toplamhepbid=$verim74+$verim75;
$toplamhep1=$toplamhepbid+$verim77+$verim78+$verim79+$verim80+$verim81;
$toplamhep2=$verim82+$verim83+$verim84+$verim85+$verim86+$verim87;
$toplamhep3=$verim88+$verim89+$verim90+$verim91+$verim92+$verim93;
$toplamhep=$toplamhepbid+$verim77+$verim78+$verim79+$verim80+$verim81+$verim82+$verim83+$verim84+$verim85+$verim86+$verim87+$verim88+$verim89+$verim90+$verim91+$verim92+$verim93;
//HEPATİT-A
$hepa1top=$verim120+$verim121+$verim122+$verim123+$verim124;
$heparaptop=$verim125+$verim126+$verim127+$verim128+$verim129;
$toplamhepa=$hepa1top+$heparaptop;
//SU ÇİÇEĞİ
$suctop=$verim130+$verim131+$verim132+$verim133+$verim134;
//KIZAMIKÇIK
$toplamkizcik=$verim94+$verim95+$verim96;
//OKUL TD
$toplamokul=$verim97+$verim98+$verim99+$verim100+$verim101;
//DİĞER TD
$toplamdigertd=$verim102+$verim103+$verim104+$verim105+$verim106+$verim107;
//GEBE
$toplamgebe=$verim108+$verim109+$verim110+$verim111+$verim112;
//GEBE DEĞİL
$toplamgebedegil=$verim113+$verim114+$verim115+$verim116+$verim117;
//GEBE 1-2-3-4-5.AŞILAE
$toplamgebetet1=$verim108+$verim113;
$toplamgebetet2=$verim109+$verim114;
$toplamgebetet3=$verim110+$verim115;
$toplamgebetet4=$verim111+$verim116;
$toplamgebetet5=$verim112+$verim117;
//TOPLAM GEBE TETANOZ
$toplamgebetettop=$verim108+$verim113+$verim109+$verim114+$verim110+$verim115+$verim111+$verim116+$verim112+$verim117;



$objPHPExcel->setActiveSheetIndex(1)



->setCellValue('B2', mb_convert_encoding ($ilinadi, "UTF-8", "ISO-8859-9" ))
->setCellValue('B3', mb_convert_encoding ($ilceninadi, "UTF-8", "ISO-8859-9" ))
->setCellValue('B4', mb_convert_encoding ($top, "UTF-8", "ISO-8859-9" ))
->setCellValue('K2', $yilgelen)
->setCellValue('K3', mb_convert_encoding ($ayadi, "UTF-8", "ISO-8859-9" ))


//DBT            
            ->setCellValue('C8', $verim1)

            ->setCellValue('F8', $verim2)
			
			 ->setCellValue('G8', $verim3)

            ->setCellValue('H8', $verim4)
			
			->setCellValue('K8', $dbt1top)
			
			->setCellValue('C9', $verim5)

            ->setCellValue('F9', $verim6)
			
			 ->setCellValue('G9', $verim7)

            ->setCellValue('H9', $verim8)
			
			->setCellValue('K9', $dbt2top)
			
			->setCellValue('C10', $verim9)

            ->setCellValue('F10', $verim10)
			
			 ->setCellValue('G10', $verim11)

            ->setCellValue('H10', $verim12)
			
			->setCellValue('K10', $dbt3top)
			
			->setCellValue('F11', $verim13)
			
			 ->setCellValue('G11', $verim14)

            ->setCellValue('H11', $verim15)
			
			->setCellValue('K11', $dbtraptop)
			
			->setCellValue('K12', $toplamdbt)
//HİB			
			->setCellValue('H14', $verim17)
			
			->setCellValue('I14', $verim18)
			
			->setCellValue('K14', $toplamhib)
//KPA
			->setCellValue('C16', $verim19)

            ->setCellValue('F16', $verim20)
			
			 ->setCellValue('G16', $verim21)

            ->setCellValue('K16', $kpa1top)
			
			->setCellValue('C17', $verim22)

            ->setCellValue('F17', $verim23)
			
			 ->setCellValue('G17', $verim24)

            ->setCellValue('K17', $kpa2top)
			
			->setCellValue('C18', $verim25)

            ->setCellValue('F18', $verim26)
			
			 ->setCellValue('G18', $verim27)

            ->setCellValue('K18', $kpa3top)
			
			->setCellValue('F19', $verim28)
			
			 ->setCellValue('G19', $verim29)

            ->setCellValue('K19', $kparaptop)
			
			->setCellValue('K20', $toplamkpa)
//POLİO
			->setCellValue('C22', $verim30)

            ->setCellValue('F22', $verim31)
			
			 ->setCellValue('G22', $verim32)
			 
			 ->setCellValue('H22', $verim33)
			 
			 ->setCellValue('I22', $verim34)
			 
			  ->setCellValue('J22', $verim35)

            ->setCellValue('K22', $pol1top)
			
			->setCellValue('F23', $verim37)
			
			 ->setCellValue('G23', $verim38)
			 
			 ->setCellValue('H23', $verim39)
			
			 ->setCellValue('I23', $verim40)
			 
			  ->setCellValue('J23', $verim41)

            ->setCellValue('K23', $pol2top)
			
			->setCellValue('K24', '0')
			
			->setCellValue('K25', '0')
			
			->setCellValue('K26', $toplampol)
//KKK
			->setCellValue('F28', $verim53)

            ->setCellValue('G28', $verim54)
			
			 ->setCellValue('H28', $verim55)
			 
			 ->setCellValue('I28', $verim56)
			 
			 ->setCellValue('J28', $verim57)
			 
			  ->setCellValue('K28', $kkk1top)

            ->setCellValue('F29', $verim58)
			
			->setCellValue('G29', $verim59)
			
			 ->setCellValue('H29', $verim60)
			 
			 ->setCellValue('I29', $verim61)
			
			 ->setCellValue('J29', $verim62)
			 
			 ->setCellValue('K29', $kkkraptop)

             ->setCellValue('K30', $toplamkkk)
//PPD
			->setCellValue('C32', $verim63)

			->setCellValue('F32', $verim64)
			
			->setCellValue('G32', $verim65)
			
			 ->setCellValue('H32', $verim66)
			 
			 ->setCellValue('I32', $verim67)
			
			 ->setCellValue('J32', $verim68)
			 
			 ->setCellValue('K32', $ppdtop)
//BCG
			->setCellValue('C34', $verim69)

			->setCellValue('F34', $verim70)
			
			->setCellValue('G34', $verim71)
			
			 ->setCellValue('H34', $verim72)
			 
			 ->setCellValue('K34', $bcgtop)
//HEPATİT-B
			 ->setCellValue('C37', $verim74)

            ->setCellValue('D37', $verim75)
			
			 ->setCellValue('E37', $toplamhepbid)

            ->setCellValue('F37', $verim77)
			
			->setCellValue('G37', $verim78)
			
			->setCellValue('H37', $verim79)

            ->setCellValue('I37', $verim80)
			
			 ->setCellValue('J37', $verim81)

            ->setCellValue('K37', $toplamhep1)
			
			->setCellValue('C38', $verim82)
			
			->setCellValue('F38', $verim83)

            ->setCellValue('G38', $verim84)
			
			 ->setCellValue('H38', $verim85)

            ->setCellValue('I38', $verim86)
			
			->setCellValue('J38', $verim87)
			
			->setCellValue('K38', $toplamhep2)
			
			->setCellValue('C39', $verim88)
			
			->setCellValue('F39', $verim89)

            ->setCellValue('G39', $verim90)
			
			 ->setCellValue('H39', $verim91)

            ->setCellValue('I39', $verim92)
			
			->setCellValue('J39', $verim93)
			
			->setCellValue('K39', $toplamhep3)
			
			->setCellValue('K40', $toplamhep)
//HEPATİT A
			->setCellValue('F42', $verim120)

            ->setCellValue('G42', $verim121)
			
			 ->setCellValue('H42', $verim122)
			 
			 ->setCellValue('I42', $verim123)
			 
			 ->setCellValue('J42', $verim124)
			 
			  ->setCellValue('K42', $hepa1top)

            ->setCellValue('F43', $verim125)
			
			 ->setCellValue('G43', $verim126)
			 
			 ->setCellValue('H43', $verim127)
			
			 ->setCellValue('I43', $verim128)
			 
			 ->setCellValue('J43', $verim129)
			 
			 ->setCellValue('K43', $heparaptop)

             ->setCellValue('K44', $toplamhepa)
			 
			 //SU ÇİÇEĞİ
			
			->setCellValue('F46', $verim130)
			
			->setCellValue('G46', $verim131)
			
			 ->setCellValue('H46', $verim132)
			 
			 ->setCellValue('I46', $verim133)
			 
			 ->setCellValue('J46', $verim134)
			 
			 ->setCellValue('K46', $suctop)
			
//KIZAMIKÇIK
			->setCellValue('J48', $verim96)
			
			->setCellValue('K48', $toplamkizcik)	
//OKUL TD
			->setCellValue('I50', $verim100)
			
			->setCellValue('J50', $verim101)	
			
			->setCellValue('K50', $toplamokul)
	
//DİĞER TD
			->setCellValue('C52', $verim102)

			->setCellValue('F52', $verim103)
			
			->setCellValue('G52', $verim104)
			
			 ->setCellValue('H52', $verim105)
			 
			 ->setCellValue('I52', $verim106)
			
			 ->setCellValue('J52', $verim107)
			 
			 ->setCellValue('K52', $toplamdigertd)
//15-49 YAŞ KADIN TD 1
			->setCellValue('C54', $verim108)
			
			 ->setCellValue('H54', $verim113)
			 
			 ->setCellValue('K54', $toplamgebetet1)
//15-49 YAŞ KADIN TD 2
			->setCellValue('C55', $verim109)
			
			 ->setCellValue('H55', $verim114)
			 
			 ->setCellValue('K55', $toplamgebetet2)
//15-49 YAŞ KADIN TD 3
			->setCellValue('C56', $verim110)
			
			 ->setCellValue('H56', $verim115)
			 
			 ->setCellValue('K56', $toplamgebetet3)
//15-49 YAŞ KADIN TD 4
			->setCellValue('C57', $verim111)
			
			 ->setCellValue('H57', $verim116)
			 
			 ->setCellValue('K57', $toplamgebetet4)
//15-49 YAŞ KADIN TD 5
			->setCellValue('C58', $verim112)
			
			 ->setCellValue('H58', $verim117)
			 
			 ->setCellValue('K58', $toplamgebetet5)
//15-49 YAŞ KADIN TD TOPLAM
			->setCellValue('C59', $toplamgebe)
			
			 ->setCellValue('H59', $toplamgebedegil)
			 
			 ->setCellValue('K59', $toplamgebetettop)
//DÜZENLEYEN-ONAYLAYAN			 
			->setCellValue('A65', mb_convert_encoding ($verim173, "UTF-8", "ISO-8859-9" ))
			 
			->setCellValue('A66', mb_convert_encoding ($verim174, "UTF-8", "ISO-8859-9" ))
			 
			->setCellValue('I65', mb_convert_encoding ($verim176, "UTF-8", "ISO-8859-9" ))		 

			->setCellValue('I66', mb_convert_encoding ($verim177, "UTF-8", "ISO-8859-9" ));		 

	  
$objPHPExcel->getSheet(1)->setTitle(mb_convert_encoding ($kurum, "UTF-8", "ISO-8859-9" ));

    
			
	



// Set active sheet index to the first sheet, so Excel opens this as the first sheet

//$objPHPExcel->setActiveSheetIndex(1);

$objPHPExcel->getActiveSheet(1)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);

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
?>
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

?>
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

?>
<?php

if($ilcegelen=="İlçe Seçiniz"){
$tresultvyil = @mysql_query("select
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
$tresultvyil = @mysql_query("select
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
$tresultvyil = @mysql_query("select
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
$tresultvyil = @mysql_query("select
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

while($sonucum=mysql_fetch_array($tresultvyil)){

$tverim1=$sonucum['v1'];
$tverim2=$sonucum['v2'];
$tverim3=$sonucum['v3'];
$tverim4=$sonucum['v4'];
$tverim5=$sonucum['v5'];
$tverim6=$sonucum['v6'];
$tverim7=$sonucum['v7'];
$tverim8=$sonucum['v8'];
$tverim9=$sonucum['v9'];
$tverim10=$sonucum['v10'];
$tverim11=$sonucum['v11'];
$tverim12=$sonucum['v12'];
$tverim13=$sonucum['v13'];
$tverim14=$sonucum['v14'];
$tverim15=$sonucum['v15'];
$tverim16=$sonucum['v16'];
$tverim17=$sonucum['v17'];
$tverim18=$sonucum['v18'];
$tverim19=$sonucum['v19'];
$tverim20=$sonucum['v20'];
$tverim21=$sonucum['v21'];
$tverim22=$sonucum['v22'];
$tverim23=$sonucum['v23'];
$tverim24=$sonucum['v24'];
$tverim25=$sonucum['v25'];
$tverim26=$sonucum['v26'];
$tverim27=$sonucum['v27'];
$tverim28=$sonucum['v28'];
$tverim29=$sonucum['v29'];
$tverim30=$sonucum['v30'];
$tverim31=$sonucum['v31'];
$tverim32=$sonucum['v32'];
$tverim33=$sonucum['v33'];
$tverim34=$sonucum['v34'];
$tverim35=$sonucum['v35'];
$tverim36=$sonucum['v36'];
$tverim37=$sonucum['v37'];
$tverim38=$sonucum['v38'];
$tverim39=$sonucum['v39'];
$tverim40=$sonucum['v40'];
$tverim41=$sonucum['v41'];
$tverim42=$sonucum['v42'];
$tverim43=$sonucum['v43'];
$tverim44=$sonucum['v44'];
$tverim45=$sonucum['v45'];
$tverim46=$sonucum['v46'];
$tverim47=$sonucum['v47'];
$tverim48=$sonucum['v48'];
$tverim49=$sonucum['v49'];
$tverim50=$sonucum['v50'];
$tverim51=$sonucum['v51'];
$tverim52=$sonucum['v52'];
$tverim53=$sonucum['v53'];
$tverim54=$sonucum['v54'];
$tverim55=$sonucum['v55'];
$tverim56=$sonucum['v56'];
$tverim57=$sonucum['v57'];
$tverim58=$sonucum['v58'];
$tverim59=$sonucum['v59'];
$tverim60=$sonucum['v60'];
$tverim61=$sonucum['v61'];
$tverim62=$sonucum['v62'];
$tverim63=$sonucum['v63'];
$tverim64=$sonucum['v64'];
$tverim65=$sonucum['v65'];
$tverim66=$sonucum['v66'];
$tverim67=$sonucum['v67'];
$tverim68=$sonucum['v68'];
$tverim69=$sonucum['v69'];
$tverim70=$sonucum['v70'];
$tverim71=$sonucum['v71'];
$tverim72=$sonucum['v72'];
$tverim73=$sonucum['v73'];
$tverim74=$sonucum['v74'];
$tverim75=$sonucum['v75'];
$tverim76=$sonucum['v76'];
$tverim77=$sonucum['v77'];
$tverim78=$sonucum['v78'];
$tverim79=$sonucum['v79'];
$tverim80=$sonucum['v80'];
$tverim81=$sonucum['v81'];
$tverim82=$sonucum['v82'];
$tverim83=$sonucum['v83'];
$tverim84=$sonucum['v84'];
$tverim85=$sonucum['v85'];
$tverim86=$sonucum['v86'];
$tverim87=$sonucum['v87'];
$tverim88=$sonucum['v88'];
$tverim89=$sonucum['v89'];
$tverim90=$sonucum['v90'];
$tverim91=$sonucum['v91'];
$tverim92=$sonucum['v92'];
$tverim93=$sonucum['v93'];
$tverim94=$sonucum['v94'];
$tverim95=$sonucum['v95'];
$tverim96=$sonucum['v96'];
$tverim97=$sonucum['v97'];
$tverim98=$sonucum['v98'];
$tverim99=$sonucum['v99'];
$tverim100=$sonucum['v100'];
$tverim101=$sonucum['v101'];
$tverim102=$sonucum['v102'];
$tverim103=$sonucum['v103'];
$tverim104=$sonucum['v104'];
$tverim105=$sonucum['v105'];
$tverim106=$sonucum['v106'];
$tverim107=$sonucum['v107'];
$tverim108=$sonucum['v108'];
$tverim109=$sonucum['v109'];
$tverim110=$sonucum['v110'];
$tverim111=$sonucum['v111'];
$tverim112=$sonucum['v112'];
$tverim113=$sonucum['v113'];
$tverim114=$sonucum['v114'];
$tverim115=$sonucum['v115'];
$tverim116=$sonucum['v116'];
$tverim117=$sonucum['v117'];
$tverim118=$sonucum['v118'];
$tverim119=$sonucum['v119'];
$tverim120=$sonucum['v120'];
$tverim121=$sonucum['v121'];
$tverim122=$sonucum['v122'];
$tverim123=$sonucum['v123'];
$tverim124=$sonucum['v124'];
$tverim125=$sonucum['v125'];
$tverim126=$sonucum['v126'];
$tverim127=$sonucum['v127'];
$tverim128=$sonucum['v128'];
$tverim129=$sonucum['v129'];
$tverim130=$sonucum['v130'];
$tverim131=$sonucum['v131'];
$tverim132=$sonucum['v132'];
$tverim133=$sonucum['v133'];
$tverim134=$sonucum['v134'];
$tverim135=$sonucum['v135'];
$tverim136=$sonucum['v136'];
$tverim137=$sonucum['v137'];
$tverim138=$sonucum['v138'];
$tverim139=$sonucum['v139'];
$tverim140=$sonucum['v140'];
$tverim141=$sonucum['v141'];
$tverim142=$sonucum['v142'];
$tverim143=$sonucum['v143'];
$tverim144=$sonucum['v144'];
$tverim145=$sonucum['v145'];
$tverim146=$sonucum['v146'];
$tverim147=$sonucum['v147'];
$tverim148=$sonucum['v148'];
$tverim149=$sonucum['v149'];
$tverim150=$sonucum['v150'];
$tverim151=$sonucum['v151'];
$tverim152=$sonucum['v152'];
$tverim153=$sonucum['v153'];
$tverim154=$sonucum['v154'];
$tverim155=$sonucum['v155'];
$tverim156=$sonucum['v156'];
$tverim157=$sonucum['v157'];
$tverim158=$sonucum['v158'];
$tverim159=$sonucum['v159'];
$tverim160=$sonucum['v160'];
$tverim161=$sonucum['v161'];
$tverim162=$sonucum['v162'];
$tverim163=$sonucum['v163'];
$tverim164=$sonucum['v164'];
$tverim165=$sonucum['v165'];
$tverim166=$sonucum['v166'];
$tverim167=$sonucum['v167'];
$tverim168=$sonucum['v168'];
$tverim169=$sonucum['v169'];
$tverim170=$sonucum['v170'];
$tverim171=$sonucum['v171'];
$tverim172=$sonucum['v172'];


$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
$iltop=trsuz('İL TOPLAMI');
$ilcetop=trsuz('İLÇE TOPLAMI');
$ahektop=trsuz('TOPLAMI');

if($ilcegelen=="İlçe Seçiniz"){
$top=trsuz('');

$kurum=$ilceninadi;
$kurumt=$iltop;
$kurumb=$ilinadi.' '.$iltop;

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and socad like '%HSM' or ilinad='$ilgelen' and socad='')");
while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){
$tverim173=$sorumlusonucum['aseadi'];
$tverim174=$sorumlusonucum['aseunvan'];
$tverim176=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$tverim177=$onkurum.' '.$onsor;
}

}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$top=trsuz('İLÇE TOPLAMI');

$kurum=$socadi;
$kurumt=$ilceninadi;
$kurumb=$ilceninadi.' '.$ilcetop;
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='')");
}
while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){
$tverim173=$sorumlusonucum['aseadi'];
$tverim174=$sorumlusonucum['aseunvan'];
$tverim176=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$tverim177=$onkurum.' '.$onsor;
}
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$top=$ocgelen;
$kurum=$ilinadi.'-'.$ocgelen;
$kurumt=$ilceninadi;
$kurumb=$ocgelen.' '.$ahektop;
$tresultvyil = @mysql_query("select v173 as v173,v174 as v174,v176 as v176,v177 as v177 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysql_fetch_array($tresultvyil)){

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
$tresultvyil = @mysql_query("select v173 as v173,v174 as v174,v176 as v176,v177 as v177 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen'and vayadi='$aygelen')") ;
while($sonucum=mysql_fetch_array($tresultvyil)){

$tverim173=$sonucum['v173'];
$tverim174=$sonucum['v174'];
$tverim176=$sonucum['v176'];
$tverim177=$sonucum['v177'];
}
}


$styleThinBlackBorderOutline = array(

	'borders' => array(

		'allborders' => array(

			'style' => PHPExcel_Style_Border::BORDER_THIN,

			'color' => array('argb' => 'FF000000'),

		),

	),

);

$ciftcizgi = array(

	'borders' => array(

		'outline' => array(

			'style' => PHPExcel_Style_Border::BORDER_DOUBLE,

			'color' => array('argb' => 'FF000000'),

		),

	),

);



$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);


$objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(20);

$objPHPExcel->getSheet(0)->getColumnDimension('B')->setWidth(6.7);

$objPHPExcel->getSheet(0)->getColumnDimension('C')->setWidth(4.0);

$objPHPExcel->getSheet(0)->getColumnDimension('D')->setWidth(4.0);

$objPHPExcel->getSheet(0)->getColumnDimension('E')->setWidth(7.3);


for ($col = 'F'; $col != 'K'; $col++) {

$objPHPExcel->getSheet(0)->getColumnDimension($col)->setWidth(12.7);

}

$objPHPExcel->getSheet(0)->getColumnDimension('K')->setWidth(13);

//$objPHPExcel->getSheet(0)->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);

$objPHPExcel->getSheet(0)->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('I8:J12')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C11')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('C12:H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C12:H12')->getFill()->getStartColor()->setARGB('# bebebe');

//satir y�ksekligi

//$objPHPExcel->getSheet(0)->getRowDimension('1')->setRowHeight(230);

//Yazinin y�n�

//$objPHPExcel->getSheet(0)->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);

//h�cre degeri
$objPHPExcel->getSheet(0)->getRowDimension('1')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('5')->setRowHeight(5);
$objPHPExcel->getSheet(0)->getRowDimension('6')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('7')->setRowHeight(30);
$objPHPExcel->getSheet(0)->getRowDimension('8')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('9')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('10')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('11')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('12')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('14')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('16')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('17')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('18')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('19')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('20')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('22')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('23')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('24')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('25')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('26')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('28')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('29')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('30')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('32')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('34')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('36')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('37')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('38')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('39')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('40')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('42')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('44')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('46')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('47')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('48')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('49')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('50')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('51')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('52')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('53')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('54')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('55')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('56')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('57')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('58')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('59')->setRowHeight(15);


$objPHPExcel->getSheet(0)->getStyle('A1:K66')->getAlignment()->setWrapText(true);

$objPHPExcel->getSheet(0)->getStyle('A6:K66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(0)->getStyle('A6:K66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getSheet(0)->getRowDimension('1')->setRowHeight(20);

$objPHPExcel->getSheet(0)->mergeCells("A1:K1");

$objPHPExcel->getActiveSheet(0)->getStyle('A1:K66')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet(0)->getStyle('A1')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
	  
$objPHPExcel->getSheet(0)->mergeCells("B2:H2");
$objPHPExcel->getSheet(0)->mergeCells("B3:H3");
$objPHPExcel->getSheet(0)->mergeCells("B4:G4");
$objPHPExcel->getActiveSheet(0)->getStyle('K2:K4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
	  
$objPHPExcel->getActiveSheet(0)->getTabColor()->setARGB('#FFFF00');
	  
$objPHPExcel->getSheet(0)->setCellValue('A1', 'AŞI SONUÇLARI ÇİZELGESİ   (FORM013)');

$objPHPExcel->getSheet(0)->setCellValue('A2', 'İL:');

$objPHPExcel->getSheet(0)->setCellValue('A3', 'İLÇE:');

$objPHPExcel->getSheet(0)->setCellValue('A4','KURUM:');

//$objPHPExcel->getSheet(0)->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
$objPHPExcel->getActiveSheet(0)->getStyle('H4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet(0)->getStyle('J2:J3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );

	  

$objPHPExcel->getSheet(0)->mergeCells("H4:J4");

$objPHPExcel->getActiveSheet(0)->getColumnDimension($col)->setWidth(15);



$objPHPExcel->getSheet(0)->setCellValue('H4','YILLIK 0-11 AY BEBEK NÜFUSU:');

$objPHPExcel->getSheet(0)->setCellValue('J2','YIL:');

$objPHPExcel->getSheet(0)->setCellValue('J3','AY:');

$objPHPExcel->getSheet(0)->setCellValue('A6','');

$objPHPExcel->getSheet(0)->mergeCells("B6:K6");

$objPHPExcel->getSheet(0)->getStyle('A6:K60')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(0)->getStyle('A6:K60')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A6:K12")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A6:K12")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet(0)->setCellValue('B6','YAŞ GRUPLARINA GÖRE YAPILAN DOZ SAYISI');



$objPHPExcel->getSheet(0)->setCellValue('A7','AŞI');

$objPHPExcel->getSheet(0)->setCellValue('B8','I');

$objPHPExcel->getSheet(0)->setCellValue('B9','II');

$objPHPExcel->getSheet(0)->setCellValue('B10','III');

$objPHPExcel->getSheet(0)->setCellValue('B11','R');



$objPHPExcel->getSheet(0)->mergeCells("A8:A11");

$objPHPExcel->getSheet(0)->setCellValue('B7','Uygu- lama');

$objPHPExcel->getSheet(0)->mergeCells("C7:E7");

$objPHPExcel->getSheet(0)->setCellValue('C7','0 yaş              (0-11 ay)');

$objPHPExcel->getSheet(0)->setCellValue('F7','1 yaş');

$objPHPExcel->getSheet(0)->setCellValue('G7','2-4 yaş');

$objPHPExcel->getSheet(0)->setCellValue('H7','5-9 yaş');

$objPHPExcel->getSheet(0)->setCellValue('I7','10-14 yaş');

$objPHPExcel->getSheet(0)->setCellValue('J7','15 yaş ve üzeri');

$objPHPExcel->getSheet(0)->setCellValue('K7','TOPLAM');

$objPHPExcel->getSheet(0)->mergeCells("C8:E8");

$objPHPExcel->getSheet(0)->mergeCells("C9:E9");

$objPHPExcel->getSheet(0)->mergeCells("C10:E10");

$objPHPExcel->getSheet(0)->mergeCells("C11:E11");

$objPHPExcel->getSheet(0)->mergeCells("C12:E12");


$objPHPExcel->getSheet(0)->mergeCells("A12:B12");

$objPHPExcel->getSheet(0)->setCellValue('A8','DaBT-IPA-Hib AŞISI');

$objPHPExcel->getSheet(0)->setCellValue('A12','TOPLAM DaBT-IPA-Hib');

$objPHPExcel->getSheet(0)->getRowDimension('13')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A14:K14")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A14:K14")->applyFromArray($ciftcizgi);



//HiB AŞISI

$objPHPExcel->getSheet(0)->mergeCells("C14:E14");

$objPHPExcel->getSheet(0)->setCellValue('A14','Hib AŞISI');

$objPHPExcel->getSheet(0)->getStyle('B14:G14')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('B14:G14')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->setCellValue('B14','');

$objPHPExcel->getSheet(0)->getStyle('J14')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('J14')->getFill()->getStartColor()->setARGB('# bebebe');


//KONJUGE PNOMOKOK AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('15')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A16:K20")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A16:K20")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->mergeCells("A16:A19");

$objPHPExcel->getSheet(0)->setCellValue('A16','KONJUGE PNÖMOKOK AŞISI');

$objPHPExcel->getSheet(0)->mergeCells("A20:B20");

$objPHPExcel->getSheet(0)->setCellValue('A20','TOPLAM KPA');

$objPHPExcel->getSheet(0)->setCellValue('B16','I');

$objPHPExcel->getSheet(0)->setCellValue('B17','II');

$objPHPExcel->getSheet(0)->setCellValue('B18','III');

$objPHPExcel->getSheet(0)->setCellValue('B19','R');

$objPHPExcel->getSheet(0)->mergeCells("C16:E16");

$objPHPExcel->getSheet(0)->mergeCells("C17:E17");

$objPHPExcel->getSheet(0)->mergeCells("C18:E18");

$objPHPExcel->getSheet(0)->mergeCells("C19:E19");

$objPHPExcel->getSheet(0)->mergeCells("C20:E20");

$objPHPExcel->getSheet(0)->getStyle('H16:J20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('H16:J20')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('C19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C19')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('C20:H20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C20:H20')->getFill()->getStartColor()->setARGB('# bebebe');



//POLİO AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('21')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A22:K26")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A22:K26")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->mergeCells("A22:A25");

$objPHPExcel->getSheet(0)->setCellValue('A22','ORAL POLİO AŞISI');

$objPHPExcel->getSheet(0)->mergeCells("A26:B26");

$objPHPExcel->getSheet(0)->setCellValue('A26','TOPLAM ORAL POLİO');

$objPHPExcel->getSheet(0)->setCellValue('B22','I');

$objPHPExcel->getSheet(0)->setCellValue('B23','II');

$objPHPExcel->getSheet(0)->setCellValue('B24','III');

$objPHPExcel->getSheet(0)->setCellValue('B25','R');

$objPHPExcel->getSheet(0)->mergeCells("C22:E22");

$objPHPExcel->getSheet(0)->mergeCells("C23:E23");

$objPHPExcel->getSheet(0)->mergeCells("C24:E24");

$objPHPExcel->getSheet(0)->mergeCells("C25:E25");

$objPHPExcel->getSheet(0)->mergeCells("C26:E26");

$objPHPExcel->getSheet(0)->getStyle('C23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C23')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('C24:j26')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);


$objPHPExcel->getSheet(0)->getStyle('C24:j26')->getFill()->getStartColor()->setARGB('# bebebe');

//KIZAMIK AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('27')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A28:K30")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A28:K30")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->mergeCells("A28:A29");

$objPHPExcel->getSheet(0)->setCellValue('A28','K.K.K. AŞISI');

$objPHPExcel->getSheet(0)->mergeCells("A30:B30");

$objPHPExcel->getSheet(0)->setCellValue('A30','TOPLAM K.K.K.');

$objPHPExcel->getSheet(0)->setCellValue('B28','I');

$objPHPExcel->getSheet(0)->setCellValue('B29','R');

$objPHPExcel->getSheet(0)->mergeCells("C28:E28");

$objPHPExcel->getSheet(0)->mergeCells("C29:E29");

$objPHPExcel->getSheet(0)->mergeCells("C30:E30");

$objPHPExcel->getSheet(0)->getStyle('C28:C30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C28:C30')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('F30:j30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('F30:j30')->getFill()->getStartColor()->setARGB('# bebebe');

//PPD

$objPHPExcel->getSheet(0)->getRowDimension('31')->setRowHeight(5);

$objPHPExcel->getSheet(0)->mergeCells("C32:E32");

$objPHPExcel->getSheet(0)->setCellValue('A32','PPD');

$objPHPExcel->getSheet(0)->setCellValue('B32','');

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A32:K32")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A32:K32")->applyFromArray($ciftcizgi);

//BCG AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('33')->setRowHeight(5);

$objPHPExcel->getSheet(0)->mergeCells("C34:E34");

$objPHPExcel->getSheet(0)->setCellValue('A34','BCG AŞISI');

$objPHPExcel->getSheet(0)->setCellValue('B34','I');

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A34:K34")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A34:K34")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->getStyle('I34:j34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('I34:j34')->getFill()->getStartColor()->setARGB('# bebebe');

//HEPATİT B Bİ BD VE TOPLAM
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C36:E36")->getFont()->setName('Arial')->setSize(7);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C37")->getFont()->setName('Arial')->setSize(6);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("D37")->getFont()->setName('Arial')->setSize(8);

$objPHPExcel->getSheet(0)->getRowDimension('35')->setRowHeight(4);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("C36:E36")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->getSheet(0)->setCellValue('C36','BD');

$objPHPExcel->getSheet(0)->setCellValue('D36','Bİ');

$objPHPExcel->getSheet(0)->setCellValue('E36','TOPLAM');

//HEPATİT B AŞISI

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A37:K40")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A37:K40")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->mergeCells("A37:A39");

$objPHPExcel->getSheet(0)->setCellValue('A37','  HEPATİT-B   AŞISI');

$objPHPExcel->getSheet(0)->mergeCells("A40:B40");

$objPHPExcel->getSheet(0)->setCellValue('A40','TOPLAM HEPATİT B');

$objPHPExcel->getSheet(0)->setCellValue('B37','I');

$objPHPExcel->getSheet(0)->setCellValue('B38','II');

$objPHPExcel->getSheet(0)->setCellValue('B39','III');

$objPHPExcel->getSheet(0)->mergeCells("C38:E38");

$objPHPExcel->getSheet(0)->mergeCells("C39:E39");

$objPHPExcel->getSheet(0)->mergeCells("C40:E40");

$objPHPExcel->getSheet(0)->getStyle('C40:J40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C40:J40')->getFill()->getStartColor()->setARGB('# bebebe');

//HEPATİT A AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('41')->setRowHeight(5);
$objPHPExcel->getSheet(0)->getRowDimension('43')->setRowHeight(15);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A42:K44")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A42:K44")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->mergeCells("A42:A43");

$objPHPExcel->getSheet(0)->setCellValue('A42','HEPATİT A AŞISI');

$objPHPExcel->getSheet(0)->mergeCells("A44:B44");

$objPHPExcel->getSheet(0)->setCellValue('A44','TOPLAM HEPATİT A');

$objPHPExcel->getSheet(0)->setCellValue('B42','I');

$objPHPExcel->getSheet(0)->setCellValue('B43','R');

$objPHPExcel->getSheet(0)->mergeCells("C42:E42");

$objPHPExcel->getSheet(0)->mergeCells("C43:E43");

$objPHPExcel->getSheet(0)->mergeCells("C44:E44");

$objPHPExcel->getSheet(0)->getStyle('C42:C44')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C42:C44')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->getStyle('F44:j44')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('F44:j44')->getFill()->getStartColor()->setARGB('# bebebe');

//SU ÇİÇEĞİ AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('45')->setRowHeight(5);

$objPHPExcel->getSheet(0)->mergeCells("C46:E46");


$objPHPExcel->setActiveSheetIndex(0)->getStyle("A46")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet(0)->setCellValue('A46','SU ÇİÇEĞİ AŞISI');

$objPHPExcel->getSheet(0)->setCellValue('B46','');

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A46:K46")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A46:K46")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->getStyle('C46')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C46')->getFill()->getStartColor()->setARGB('# bebebe');


//KIZAMIKÇIK AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('47')->setRowHeight(5);

$objPHPExcel->getSheet(0)->mergeCells("C48:E48");


$objPHPExcel->setActiveSheetIndex(0)->getStyle("A48")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet(0)->setCellValue('A48','KIZAMIKÇIK AŞISI');

$objPHPExcel->getSheet(0)->setCellValue('B48','');

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A48:K48")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A48:K48")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->getStyle('C48:I48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C48:I48')->getFill()->getStartColor()->setARGB('# bebebe');

//OKUL Td AŞISI

$objPHPExcel->getSheet(0)->getRowDimension('49')->setRowHeight(5);

$objPHPExcel->getSheet(0)->mergeCells("C50:E50");

$objPHPExcel->getSheet(0)->setCellValue('A50','OKUL Td AŞISI');

$objPHPExcel->getSheet(0)->setCellValue('B50','');

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A50:K50")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A50:K50")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->getStyle('C50:H50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('C50:H50')->getFill()->getStartColor()->setARGB('# bebebe');

//Td AŞISI
$objPHPExcel->getSheet(0)->getRowDimension('51')->setRowHeight(5);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A52:K59")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A52:K59")->applyFromArray($ciftcizgi);

$objPHPExcel->getSheet(0)->mergeCells("C52:E52");

$objPHPExcel->getSheet(0)->setCellValue('A52','DİĞER Td');

$objPHPExcel->getSheet(0)->setCellValue('B52','');

$objPHPExcel->getSheet(0)->setCellValue('A53','');

$objPHPExcel->getSheet(0)->setCellValue('B53','');

$objPHPExcel->getSheet(0)->mergeCells("C53:G53");

$objPHPExcel->getSheet(0)->mergeCells("H53:J53");

$objPHPExcel->getSheet(0)->setCellValue('C53','GEBE');

$objPHPExcel->getSheet(0)->setCellValue('H53','GEBE DEĞİL');

$objPHPExcel->getSheet(0)->getStyle('B53:K53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(0)->getStyle('B53:K53')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(0)->mergeCells("A54:A58");

$objPHPExcel->getSheet(0)->setCellValue('A54','15-49 YAŞ KADIN Td AŞISI');
$objPHPExcel->getSheet(0)->setCellValue('B54','Td1');
$objPHPExcel->getSheet(0)->setCellValue('B55','Td2');
$objPHPExcel->getSheet(0)->setCellValue('B56','Td3');
$objPHPExcel->getSheet(0)->setCellValue('B57','Td4');
$objPHPExcel->getSheet(0)->setCellValue('B58','Td5');
$objPHPExcel->getSheet(0)->setCellValue('A59','TOPLAM Td');


$objPHPExcel->getSheet(0)->mergeCells("C54:G54");
$objPHPExcel->getSheet(0)->mergeCells("C55:G55");
$objPHPExcel->getSheet(0)->mergeCells("C56:G56");
$objPHPExcel->getSheet(0)->mergeCells("C57:G57");
$objPHPExcel->getSheet(0)->mergeCells("C58:G58");
$objPHPExcel->getSheet(0)->mergeCells("C59:G59");

$objPHPExcel->getSheet(0)->mergeCells("A59:B59");
$objPHPExcel->getSheet(0)->mergeCells("H54:J54");
$objPHPExcel->getSheet(0)->mergeCells("H55:J55");
$objPHPExcel->getSheet(0)->mergeCells("H56:J56");
$objPHPExcel->getSheet(0)->mergeCells("H57:J57");
$objPHPExcel->getSheet(0)->mergeCells("H58:J58");
$objPHPExcel->getSheet(0)->mergeCells("H59:J59");

//AÇIKLAMALAR
$objPHPExcel->getSheet(0)->getRowDimension('60')->setRowHeight(12);
$objPHPExcel->getActiveSheet(0)->getStyle('A61:A61')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A61:A62")->getFont()->setName('Arial')->setSize(7);
	  
$objPHPExcel->getSheet(0)->mergeCells("A61:K61");
$objPHPExcel->getSheet(0)->mergeCells("A62:K62");

$objPHPExcel->getSheet(0)->setCellValue('A61','Hepatit B aşısının 0-11 ay grubuna 1. doz uygulaması kendi bebeğiniz olup bölge dışında (hastane,resmi diğer kurumlar) yapıldı ise BD sütununa ');
$objPHPExcel->getSheet(0)->setCellValue('A62','kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.');

$objPHPExcel->getSheet(0)->mergeCells("A64:D64");
$objPHPExcel->getSheet(0)->mergeCells("I64:K64");
$objPHPExcel->getSheet(0)->setCellValue('A64','Formu Düzenleyen');
$objPHPExcel->getSheet(0)->setCellValue('I64','Formu Onaylayan');
$objPHPExcel->getSheet(0)->mergeCells("A65:D65");
$objPHPExcel->getSheet(0)->mergeCells("I65:K65");
$objPHPExcel->getSheet(0)->mergeCells("A66:D66");
$objPHPExcel->getSheet(0)->mergeCells("I66:K66");

//DBT
$dbt1top=$tverim1+$tverim2+$tverim3+$tverim4;
$dbt2top=$tverim5+$tverim6+$tverim7+$tverim8;
$dbt3top=$tverim9+$tverim10+$tverim11+$tverim12;
$dbtraptop=$tverim13+$tverim14+$tverim15;
$toplamdbt=$dbt1top+$dbt2top+$dbt3top+$dbtraptop;
//HİB
$toplamhib=$tverim17+$tverim18;
//KPA
$kpa1top=$tverim19+$tverim20+$tverim21;
$kpa2top=$tverim22+$tverim23+$tverim24;
$kpa3top=$tverim25+$tverim26+$tverim27;
$kparaptop=$tverim28+$tverim29;
$toplamkpa=$kpa1top+$kpa2top+$kpa3top+$kparaptop;
//POLİO
$pol1top=$tverim30+$tverim31+$tverim32+$tverim33+$tverim34+$tverim35;
$pol2top=$tverim37+$tverim38+$tverim39+$tverim40+$tverim41;
$toplampol=$pol1top+$pol2top;
//KKK
$kkk1top=$tverim53+$tverim54+$tverim55+$tverim56+$tverim57;
$kkkraptop=$tverim58+$tverim59+$tverim60+$tverim61+$tverim62;
$toplamkkk=$kkk1top+$kkkraptop;
//PPD
$ppdtop=$tverim63+$tverim64+$tverim65+$tverim66+$tverim67+$tverim68;
//BCG
$bcgtop=$tverim69+$tverim70+$tverim71+$tverim72;
//HEPATİT-B
$toplamhepbid=$tverim74+$tverim75;
$toplamhep1=$toplamhepbid+$tverim77+$tverim78+$tverim79+$tverim80+$tverim81;
$toplamhep2=$tverim82+$tverim83+$tverim84+$tverim85+$tverim86+$tverim87;
$toplamhep3=$tverim88+$tverim89+$tverim90+$tverim91+$tverim92+$tverim93;
$toplamhep=$toplamhepbid+$tverim77+$tverim78+$tverim79+$tverim80+$tverim81+$tverim82+$tverim83+$tverim84+$tverim85+$tverim86+$tverim87+$tverim88+$tverim89+$tverim90+$tverim91+$tverim92+$tverim93;
//HEPATİT-A
$hepa1top=$tverim120+$tverim121+$tverim122+$tverim123+$tverim124;
$heparaptop=$tverim125+$tverim126+$tverim127+$tverim128+$tverim129;
$toplamhepa=$hepa1top+$heparaptop;
//SU ÇİÇEĞİ
$suctop=$tverim130+$tverim131+$tverim132+$tverim133+$tverim134;
//KIZAMIKÇIK
$toplamkizcik=$tverim94+$tverim95+$tverim96;
//OKUL TD
$toplamokul=$tverim97+$tverim98+$tverim99+$tverim100+$tverim101;
//DİĞER TD
$toplamdigertd=$tverim102+$tverim103+$tverim104+$tverim105+$tverim106+$tverim107;
//GEBE
$toplamgebe=$tverim108+$tverim109+$tverim110+$tverim111+$tverim112;
//GEBE DEĞİL
$toplamgebedegil=$tverim113+$tverim114+$tverim115+$tverim116+$tverim117;
//GEBE 1-2-3-4-5.AŞILAE
$toplamgebetet1=$tverim108+$tverim113;
$toplamgebetet2=$tverim109+$tverim114;
$toplamgebetet3=$tverim110+$tverim115;
$toplamgebetet4=$tverim111+$tverim116;
$toplamgebetet5=$tverim112+$tverim117;
//TOPLAM GEBE TETANOZ
$toplamgebetettop=$tverim108+$tverim113+$tverim109+$tverim114+$tverim110+$tverim115+$tverim111+$tverim116+$tverim112+$tverim117;


$objPHPExcel->setActiveSheetIndex(0)

->setCellValue('B2', mb_convert_encoding ($ilinadi, "UTF-8", "ISO-8859-9" ))
->setCellValue('B3', mb_convert_encoding ($kurumt, "UTF-8", "ISO-8859-9" ))
->setCellValue('B4', mb_convert_encoding ($top, "UTF-8", "ISO-8859-9" ))
->setCellValue('K2', $yilgelen)
->setCellValue('K3', mb_convert_encoding ($ayadi, "UTF-8", "ISO-8859-9" ))


 //DBT            
            ->setCellValue('C8', $tverim1)

            ->setCellValue('F8', $tverim2)
			
			 ->setCellValue('G8', $tverim3)

            ->setCellValue('H8', $tverim4)
			
			->setCellValue('K8', $dbt1top)
			
			->setCellValue('C9', $tverim5)

            ->setCellValue('F9', $tverim6)
			
			 ->setCellValue('G9', $tverim7)

            ->setCellValue('H9', $tverim8)
			
			->setCellValue('K9', $dbt2top)
			
			->setCellValue('C10', $tverim9)

            ->setCellValue('F10', $tverim10)
			
			 ->setCellValue('G10', $tverim11)

            ->setCellValue('H10', $tverim12)
			
			->setCellValue('K10', $dbt3top)
			
			->setCellValue('F11', $tverim13)
			
			 ->setCellValue('G11', $tverim14)

            ->setCellValue('H11', $tverim15)
			
			->setCellValue('K11', $dbtraptop)
			
			->setCellValue('K12', $toplamdbt)
//HİB			
			->setCellValue('H14', $tverim17)
			
			->setCellValue('I14', $tverim18)
			
			->setCellValue('K14', $toplamhib)
//KPA
			->setCellValue('C16', $tverim19)

            ->setCellValue('F16', $tverim20)
			
			 ->setCellValue('G16', $tverim21)

            ->setCellValue('K16', $kpa1top)
			
			->setCellValue('C17', $tverim22)

            ->setCellValue('F17', $tverim23)
			
			 ->setCellValue('G17', $tverim24)

            ->setCellValue('K17', $kpa2top)
			
			->setCellValue('C18', $tverim25)

            ->setCellValue('F18', $tverim26)
			
			 ->setCellValue('G18', $tverim27)

            ->setCellValue('K18', $kpa3top)
			
			->setCellValue('F19', $tverim28)
			
			 ->setCellValue('G19', $tverim29)

            ->setCellValue('K19', $kparaptop)
			
			->setCellValue('K20', $toplamkpa)
//POLİO
			->setCellValue('C22', $tverim30)

            ->setCellValue('F22', $tverim31)
			
			 ->setCellValue('G22', $tverim32)
			 
			 ->setCellValue('H22', $tverim33)
			 
			 ->setCellValue('I22', $tverim34)
			 
			  ->setCellValue('J22', $tverim35)

            ->setCellValue('K22', $pol1top)
			
			->setCellValue('F23', $tverim37)
			
			 ->setCellValue('G23', $tverim38)
			 
			 ->setCellValue('H23', $tverim39)
			
			 ->setCellValue('I23', $tverim40)
			 
			  ->setCellValue('J23', $tverim41)

            ->setCellValue('K23', $pol2top)
			
			->setCellValue('K24', '0')
			
			->setCellValue('K25', '0')
			
			->setCellValue('K26', $toplampol)
//KKK
			->setCellValue('F28', $tverim53)

            ->setCellValue('G28', $tverim54)
			
			 ->setCellValue('H28', $tverim55)
			 
			 ->setCellValue('I28', $tverim56)
			 
			 ->setCellValue('J28', $tverim57)
			 
			  ->setCellValue('K28', $kkk1top)

            ->setCellValue('F29', $tverim58)
			
			->setCellValue('G29', $tverim59)
			
			 ->setCellValue('H29', $tverim60)
			 
			 ->setCellValue('I29', $tverim61)
			
			 ->setCellValue('J29', $tverim62)
			 
			 ->setCellValue('K29', $kkkraptop)

             ->setCellValue('K30', $toplamkkk)
//PPD
			->setCellValue('C32', $tverim63)

			->setCellValue('F32', $tverim64)
			
			->setCellValue('G32', $tverim65)
			
			 ->setCellValue('H32', $tverim66)
			 
			 ->setCellValue('I32', $tverim67)
			
			 ->setCellValue('J32', $tverim68)
			 
			 ->setCellValue('K32', $ppdtop)
//BCG
			->setCellValue('C34', $tverim69)

			->setCellValue('F34', $tverim70)
			
			->setCellValue('G34', $tverim71)
			
			 ->setCellValue('H34', $tverim72)
			 
			 ->setCellValue('K34', $bcgtop)
//HEPATİT-B
			 ->setCellValue('C37', $tverim74)

            ->setCellValue('D37', $tverim75)
			
			 ->setCellValue('E37', $toplamhepbid)

            ->setCellValue('F37', $tverim77)
			
			->setCellValue('G37', $tverim78)
			
			->setCellValue('H37', $tverim79)

            ->setCellValue('I37', $tverim80)
			
			 ->setCellValue('J37', $tverim81)

            ->setCellValue('K37', $toplamhep1)
			
			->setCellValue('C38', $tverim82)
			
			->setCellValue('F38', $tverim83)

            ->setCellValue('G38', $tverim84)
			
			 ->setCellValue('H38', $tverim85)

            ->setCellValue('I38', $tverim86)
			
			->setCellValue('J38', $tverim87)
			
			->setCellValue('K38', $toplamhep2)
			
			->setCellValue('C39', $tverim88)
			
			->setCellValue('F39', $tverim89)

            ->setCellValue('G39', $tverim90)
			
			 ->setCellValue('H39', $tverim91)

            ->setCellValue('I39', $tverim92)
			
			->setCellValue('J39', $tverim93)
			
			->setCellValue('K39', $toplamhep3)
			
			->setCellValue('K40', $toplamhep)
//HEPATİT A
			->setCellValue('F42', $tverim120)

            ->setCellValue('G42', $tverim121)
			
			 ->setCellValue('H42', $tverim122)
			 
			 ->setCellValue('I42', $tverim123)
			 
			 ->setCellValue('J42', $tverim124)
			 
			  ->setCellValue('K42', $hepa1top)

            ->setCellValue('F43', $tverim125)
			
			 ->setCellValue('G43', $tverim126)
			 
			 ->setCellValue('H43', $tverim127)
			
			 ->setCellValue('I43', $tverim128)
			 
			 ->setCellValue('J43', $tverim129)
			 
			 ->setCellValue('K43', $heparaptop)

             ->setCellValue('K44', $toplamhepa)
			 
			 //SU ÇİÇEĞİ
			
			->setCellValue('F46', $tverim130)
			
			->setCellValue('G46', $tverim131)
			
			 ->setCellValue('H46', $tverim132)
			 
			 ->setCellValue('I46', $tverim133)
			 
			 ->setCellValue('J46', $tverim134)
			 
			 ->setCellValue('K46', $suctop)
			
//KIZAMIKÇIK
			->setCellValue('J48', $tverim96)
			
			->setCellValue('K48', $toplamkizcik)	
//OKUL TD
			->setCellValue('I50', $tverim100)
			
			->setCellValue('J50', $tverim101)	
			
			->setCellValue('K50', $toplamokul)
//DİĞER TD
			->setCellValue('C52', $tverim102)

			->setCellValue('F52', $tverim103)
			
			->setCellValue('G52', $tverim104)
			
			 ->setCellValue('H52', $tverim105)
			 
			 ->setCellValue('I52', $tverim106)
			
			 ->setCellValue('J52', $tverim107)
			 
			 ->setCellValue('K52', $toplamdigertd)
//15-49 YAŞ KADIN TD 1
			->setCellValue('C54', $tverim108)
			
			 ->setCellValue('H54', $tverim113)
			 
			 ->setCellValue('K54', $toplamgebetet1)
//15-49 YAŞ KADIN TD 2
			->setCellValue('C55', $tverim109)
			
			 ->setCellValue('H55', $tverim114)
			 
			 ->setCellValue('K55', $toplamgebetet2)
//15-49 YAŞ KADIN TD 3
			->setCellValue('C56', $tverim110)
			
			 ->setCellValue('H56', $tverim115)
			 
			 ->setCellValue('K56', $toplamgebetet3)
//15-49 YAŞ KADIN TD 4
			->setCellValue('C57', $tverim111)
			
			 ->setCellValue('H57', $tverim116)
			 
			 ->setCellValue('K57', $toplamgebetet4)
//15-49 YAŞ KADIN TD 5
			->setCellValue('C58', $tverim112)
			
			 ->setCellValue('H58', $tverim117)
			 
			 ->setCellValue('K58', $toplamgebetet5)
//15-49 YAŞ KADIN TD TOPLAM
			->setCellValue('C59', $toplamgebe)
			
			 ->setCellValue('H59', $toplamgebedegil)
			 
			 ->setCellValue('K59', $toplamgebetettop)		 
//DÜZENLEYEN-ONAYLAYAN			 
			->setCellValue('A65', mb_convert_encoding ($tverim173, "UTF-8", "ISO-8859-9" ))
			 
			->setCellValue('A66', mb_convert_encoding ($tverim174, "UTF-8", "ISO-8859-9" ))
			 
			->setCellValue('I65', mb_convert_encoding ($tverim176, "UTF-8", "ISO-8859-9" ))		 

			->setCellValue('I66', mb_convert_encoding ($tverim177, "UTF-8", "ISO-8859-9" ));	

			
			

$objPHPExcel->getActiveSheet(0)->setTitle(mb_convert_encoding ($kurumb, "UTF-8", "ISO-8859-9" ));

$objPHPExcel->getActiveSheet(0)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);

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

header('Content-Disposition: attachment;filename="Form013_Yer-Ay-Yil.xls"');

header('Cache-Control: max-age=0');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

$objWriter->save('php://output');

exit;