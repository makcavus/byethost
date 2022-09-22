<?php
set_time_limit(600);
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('con_013.php');
$subat=trsuz("ŞUBAT"); 
$nisan=trsuz("NİSAN"); 
$haziran=trsuz("HAZİRAN"); 
$agustos=trsuz("AĞUSTOS"); 
$eylul=trsuz("EYLÜL"); 
$ekim=trsuz("EKİM"); 
$ilgelen=$_GET['selectil']; 

$ilgelen=$_GET['selectil']; 

$ilcegelen=$_GET['selectilce']; 

$ocgelenx=$_GET['selectoc']; 

$yilgelen=$_GET['selectyil'];

$aygelen=$_GET['selectay']; 

$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

$ocgelen=iconv("UTF-8", "ISO-8859-9", $ocgelenx);

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

$oran="Yılı Aşılama Oranları";
$oranx="AŞILAMA ORANLARI";
$baslik=$yilgelen.' '.$oran;	
$baslikx=$yilgelen.' '.$oranx;							 
						 
//$objPHPExcel->createSheet(0);
if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("ŞUBAT")){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MART"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("NİSAN")){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MAYIS"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("HAZİRAN")){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="TEMMUZ"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("AĞUSTOS")){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("EYLÜL")){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("EKİM")){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="KASIM"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM') group by ilceidi order by ilceidi asc") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ARALIK"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK') group by ilceidi order by ilceidi asc") ;
//İLÇE DÖKÜMÜ
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("ŞUBAT")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="MART"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("NİSAN")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="MAYIS"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("HAZİRAN")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="TEMMUZ"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("AĞUSTOS")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("EYLÜL")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("EKİM")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="KASIM"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM') group by vocadi order by vocadi asc") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="ARALIK"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='ARALIK') group by vocadi order by vocadi asc") ;




}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen="OCAK"){
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("ŞUBAT")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="MART"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("NİSAN")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,

sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="MAYIS"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("HAZİRAN")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="TEMMUZ"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("AĞUSTOS")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("EYLÜL")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("EKİM")){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="KASIM"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM') group by vocadi order by vocadi asc") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="ARALIK"){
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='ARALIK') group by vocadi order by vocadi asc") ;
}else{
//OCAK TOPLAMLARI
$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv, 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,avg(v119) as v119,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172,
v176 as v176
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK') group by ilceidi order by ilceidi asc") ;
}
$row = 4;

while($sonucum=mysql_fetch_array($resultvyil)){
$ilcadi=$sonucum['iii'];
$socadi=$sonucum['vvv'];$verim1=$sonucum['v1'];$verim2=$sonucum['v2'];$verim3=$sonucum['v3'];$verim4=$sonucum['v4'];$verim5=$sonucum['v5'];$verim6=$sonucum['v6'];$verim7=$sonucum['v7'];
$verim8=$sonucum['v8'];$verim9=$sonucum['v9'];$verim10=$sonucum['v10'];$verim11=$sonucum['v11'];$verim12=$sonucum['v12'];$verim13=$sonucum['v13'];
$verim14=$sonucum['v14'];$verim15=$sonucum['v15'];$verim16=$sonucum['v16'];$verim17=$sonucum['v17'];$verim18=$sonucum['v18'];$verim19=$sonucum['v19'];
$verim20=$sonucum['v20'];$verim21=$sonucum['v21'];$verim22=$sonucum['v22'];$verim23=$sonucum['v23'];$verim24=$sonucum['v24'];$verim25=$sonucum['v25'];
$verim26=$sonucum['v26'];$verim27=$sonucum['v27'];$verim28=$sonucum['v28'];$verim29=$sonucum['v29'];$verim30=$sonucum['v30'];$verim31=$sonucum['v31'];
$verim32=$sonucum['v32'];$verim33=$sonucum['v33'];$verim34=$sonucum['v34'];$verim35=$sonucum['v35'];$verim36=$sonucum['v36'];$verim37=$sonucum['v37'];
$verim38=$sonucum['v38'];$verim39=$sonucum['v39'];$verim40=$sonucum['v40'];$verim41=$sonucum['v41'];$verim42=$sonucum['v42'];$verim43=$sonucum['v43'];
$verim44=$sonucum['v44'];$verim45=$sonucum['v45'];$verim46=$sonucum['v46'];$verim47=$sonucum['v47'];$verim48=$sonucum['v48'];$verim49=$sonucum['v49'];
$verim50=$sonucum['v50'];$verim51=$sonucum['v51'];$verim52=$sonucum['v52'];$verim53=$sonucum['v53'];$verim54=$sonucum['v54'];$verim55=$sonucum['v55'];
$verim56=$sonucum['v56'];$verim57=$sonucum['v57'];$verim58=$sonucum['v58'];$verim59=$sonucum['v59'];$verim60=$sonucum['v60'];$verim61=$sonucum['v61'];
$verim62=$sonucum['v62'];$verim63=$sonucum['v63'];$verim64=$sonucum['v64'];$verim65=$sonucum['v65'];$verim66=$sonucum['v66'];$verim67=$sonucum['v67'];
$verim68=$sonucum['v68'];$verim69=$sonucum['v69'];$verim70=$sonucum['v70'];$verim71=$sonucum['v71'];$verim72=$sonucum['v72'];$verim73=$sonucum['v73'];
$verim74=$sonucum['v74'];$verim75=$sonucum['v75'];$verim76=$sonucum['v76'];$verim77=$sonucum['v77'];$verim78=$sonucum['v78'];$verim79=$sonucum['v79'];
$verim80=$sonucum['v80'];$verim81=$sonucum['v81'];$verim82=$sonucum['v82'];$verim83=$sonucum['v83'];$verim84=$sonucum['v84'];$verim85=$sonucum['v85'];
$verim86=$sonucum['v86'];$verim87=$sonucum['v87'];$verim88=$sonucum['v88'];$verim89=$sonucum['v89'];$verim90=$sonucum['v90'];$verim91=$sonucum['v91'];
$verim92=$sonucum['v92'];$verim93=$sonucum['v93'];$verim94=$sonucum['v94'];$verim95=$sonucum['v95'];$verim96=$sonucum['v96'];$verim97=$sonucum['v97'];
$verim98=$sonucum['v98'];$verim99=$sonucum['v99'];$verim100=$sonucum['v100'];$verim101=$sonucum['v101'];$verim102=$sonucum['v102'];$verim103=$sonucum['v103'];
$verim104=$sonucum['v104'];$verim105=$sonucum['v105'];$verim106=$sonucum['v106'];$verim107=$sonucum['v107'];$verim108=$sonucum['v108'];$verim109=$sonucum['v109'];
$verim110=$sonucum['v110'];$verim111=$sonucum['v111'];$verim112=$sonucum['v112'];$verim113=$sonucum['v113'];$verim114=$sonucum['v114'];$verim115=$sonucum['v115'];
$verim116=$sonucum['v116'];$verim117=$sonucum['v117'];$verim118=$sonucum['v118'];$verim119=$sonucum['v119'];$verim120=$sonucum['v120'];$verim121=$sonucum['v121'];
$verim122=$sonucum['v122'];$verim123=$sonucum['v123'];$verim124=$sonucum['v124'];$verim125=$sonucum['v125'];$verim126=$sonucum['v126'];$verim127=$sonucum['v127'];
$verim128=$sonucum['v128'];$verim129=$sonucum['v129'];$verim130=$sonucum['v130'];$verim131=$sonucum['v131'];$verim132=$sonucum['v132'];$verim133=$sonucum['v133'];
$verim134=$sonucum['v134'];$verim135=$sonucum['v135'];$verim136=$sonucum['v136'];$verim137=$sonucum['v137'];$verim138=$sonucum['v138'];$verim139=$sonucum['v139'];
$verim140=$sonucum['v140'];$verim141=$sonucum['v141'];$verim142=$sonucum['v142'];$verim143=$sonucum['v143'];$verim144=$sonucum['v144'];$verim145=$sonucum['v145'];
$verim146=$sonucum['v146'];$verim147=$sonucum['v147'];$verim148=$sonucum['v148'];$verim149=$sonucum['v149'];$verim150=$sonucum['v150'];$verim151=$sonucum['v151'];
$verim152=$sonucum['v152'];$verim153=$sonucum['v153'];$verim154=$sonucum['v154'];$verim155=$sonucum['v155'];$verim156=$sonucum['v156'];$verim157=$sonucum['v157'];
$verim158=$sonucum['v158'];$verim159=$sonucum['v159'];$verim160=$sonucum['v160'];$verim161=$sonucum['v161'];$verim162=$sonucum['v162'];$verim163=$sonucum['v163'];
$verim164=$sonucum['v164'];$verim165=$sonucum['v165'];$verim166=$sonucum['v166'];$verim167=$sonucum['v167'];$verim168=$sonucum['v168'];$verim169=$sonucum['v169'];
$verim170=$sonucum['v170'];$verim171=$sonucum['v171'];$verim172=$sonucum['v172'];



if($aygelen=="OCAK"){
$ay=1;
}elseif($aygelen==trsuz("ŞUBAT")){
$ay=2;
}elseif($aygelen=="MART"){
$ay=3;
}elseif($aygelen==trsuz("NİSAN")){
$ay=4;
}elseif($aygelen=="MAYIS"){
$ay=5;
}elseif($aygelen==trsuz("HAZİRAN")){
$ay=6;
}elseif($aygelen=="TEMMUZ"){
$ay=7;
}elseif($aygelen==trsuz("AĞUSTOS")){
$ay=8;
}elseif($aygelen==trsuz("EYLÜL")){
$ay=9;
}elseif($aygelen==trsuz("EKİM")){
$ay=10;
}elseif($aygelen=="KASIM"){
$ay=11;
}elseif($aygelen=="ARALIK"){
$ay=12;
}else{
$ay="TOPLAM";
}

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];

if($ilcegelen=="İlçe Seçiniz"){
$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz('');
$socadi=trsuz($ilkod.'.'.$ilcekod);
$verim176=$ilceninadi;

}elseif($ocgelen==trsuz("İLÇE TOPLAMI")){
$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz(substr(trim($socadi),6,3));
$socadi=trsuz($ilkod.'.'.$ilcekod.'.'.$ahkod);
$verim176=$sonucum['v176'];

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI")){
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


/*while($sonuc=mysql_fetch_array($oncekiadnks)){
$adnks=$sonuc['v1'];
//$tahbebek=$sonuc['v2'];
$kaybebek=$sonuc['v3'];
//$kaynufx=$kaynufx.$adnks."\n";
//$kaybebx=$kaybebx.$kaybebek."\n";*/
//kenarlik �izdiren d�ng�
$styleThinBlackBorderOutline = array(
	'borders' => array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => 'FF000000'),
		),
	),
);
//KENARLIK ÇİZGİLERİ

$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);
//YAZI BOYUTLARI
$objPHPExcel->setActiveSheetIndex(0)->getStyle("AT1:AW2")->getFont()->setName('Arial')->setSize(6);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("F3:AW3")->getFont()->setName('Arial')->setSize(6);

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A1:AW3")->applyFromArray($styleThinBlackBorderOutline);

//yatay ve dikey ortala
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AW3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AW3')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

//s�tun genisligi
$objPHPExcel->getActiveSheet(0)->getColumnDimension('A')->setWidth(9);
$objPHPExcel->getActiveSheet(0)->getColumnDimension('B')->setWidth(0);
$objPHPExcel->getActiveSheet(0)->getColumnDimension('C')->setWidth(6);
$objPHPExcel->getActiveSheet(0)->getColumnDimension('D')->setWidth(4);
$objPHPExcel->getActiveSheet(0)->getColumnDimension('E')->setWidth(6);

//HÜCRE BİRLEŞTİRMELERİ
$objPHPExcel->getSheet(0)->mergeCells("A1:A3");
$objPHPExcel->getSheet(0)->mergeCells("B1:B3");
$objPHPExcel->getSheet(0)->mergeCells("C1:C3");
$objPHPExcel->getSheet(0)->mergeCells("D1:D3");
$objPHPExcel->getSheet(0)->mergeCells("E1:E3");
$objPHPExcel->getSheet(0)->mergeCells("F1:M1");
$objPHPExcel->getSheet(0)->mergeCells("N1:U1");
$objPHPExcel->getSheet(0)->mergeCells("V1:Y1");
$objPHPExcel->getSheet(0)->mergeCells("Z1:AA2");
$objPHPExcel->getSheet(0)->mergeCells("AB1:AC2");
$objPHPExcel->getSheet(0)->mergeCells("AD1:AI1");
$objPHPExcel->getSheet(0)->mergeCells("AJ1:AM1");
$objPHPExcel->getSheet(0)->mergeCells("AN1:AO2");
$objPHPExcel->getSheet(0)->mergeCells("AP1:AS1");
$objPHPExcel->getSheet(0)->mergeCells("AT1:AU2");
$objPHPExcel->getSheet(0)->mergeCells("AV1:AW2");
$objPHPExcel->getSheet(0)->mergeCells("F2:G2");
$objPHPExcel->getSheet(0)->mergeCells("H2:I2");
$objPHPExcel->getSheet(0)->mergeCells("J2:K2");
$objPHPExcel->getSheet(0)->mergeCells("L2:M2");
$objPHPExcel->getSheet(0)->mergeCells("N2:O2");
$objPHPExcel->getSheet(0)->mergeCells("P2:Q2");
$objPHPExcel->getSheet(0)->mergeCells("R2:S2");
$objPHPExcel->getSheet(0)->mergeCells("T2:U2");
$objPHPExcel->getSheet(0)->mergeCells("V2:W2");
$objPHPExcel->getSheet(0)->mergeCells("X2:Y2");
$objPHPExcel->getSheet(0)->mergeCells("AD2:AE2");
$objPHPExcel->getSheet(0)->mergeCells("AF2:AG2");
$objPHPExcel->getSheet(0)->mergeCells("AH2:AI2");
$objPHPExcel->getSheet(0)->mergeCells("AJ2:AK2");
$objPHPExcel->getSheet(0)->mergeCells("AL2:AM2");
$objPHPExcel->getSheet(0)->mergeCells("AP2:AQ2");
$objPHPExcel->getSheet(0)->mergeCells("AR2:AS2");

//METİN KAYDIRMALARI
$objPHPExcel->getSheet(0)->getStyle('A1:AW3')->getAlignment()->setWrapText(true);

$objPHPExcel->getSheet(0)->setTitle($baslik);
for ($col = 'F'; $col != 'AX'; $col++) {
$objPHPExcel->getActiveSheet(0)->getColumnDimension($col)->setWidth(3.5);
}
//satir y�ksekligi
$objPHPExcel->getActiveSheet(0)->getRowDimension('1')->setRowHeight(20);
//Yazinin y�n�
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AD1')->getAlignment()->setTextRotation(0);
//h�cre degeri
$objPHPExcel->setActiveSheetIndex(0)

->setCellValue('A1', 'İl/İlçe A.Hek. Kodu ')
->setCellValue('B1', 'İl/İlçe Adı  Aile Hekiminin Adı')
->setCellValue('C1', 'Ortalama Bebek Sayısı')
->setCellValue('D1','Ay')
->setCellValue('E1','Aya göre hedef')
->setCellValue('F1','DaBT-IPA-Hib')
->setCellValue('N1','KONJUGE PNÖMOKOK AŞISI')
->setCellValue('V1','ORAL POLİO')
->setCellValue('Z1','KKK')
->setCellValue('AB1','BCG')
->setCellValue('AD1','HEPATİT B')
->setCellValue('AJ1','HEPATİT A')
->setCellValue('AN1','SU ÇİÇEĞİ')
->setCellValue('AP1','Td')
->setCellValue('AT1','DaBT-IPA-Hib1-3 devamsızlık')
->setCellValue('AV1','Hepatit B 1-3 devamsızlık')
->setCellValue('F2','I')
->setCellValue('H2','II')
->setCellValue('J2','III')
->setCellValue('L2','R')
->setCellValue('N2','I')
->setCellValue('P2','II')
->setCellValue('R2','III')
->setCellValue('T2','R')
->setCellValue('V2','I')
->setCellValue('X2','II')
->setCellValue('AD2','I')
->setCellValue('AF2','II')
->setCellValue('AH2','III')
->setCellValue('AJ2','I')
->setCellValue('AL2','II')
->setCellValue('AP2','I')
->setCellValue('AR2','II+')
->setCellValue('F3','Doz')
->setCellValue('G3','%')
->setCellValue('H3','Doz')
->setCellValue('I3','%')
->setCellValue('J3','Doz')
->setCellValue('K3','%')
->setCellValue('L3','Doz')
->setCellValue('M3','%')
->setCellValue('N3','Doz')
->setCellValue('O3','%')
->setCellValue('P3','Doz')
->setCellValue('Q3','%')
->setCellValue('R3','Doz')
->setCellValue('S3','%')
->setCellValue('T3','Doz')
->setCellValue('U3','%')
->setCellValue('V3','Doz')
->setCellValue('W3','%')
->setCellValue('X3','Doz')
->setCellValue('Y3','%')
->setCellValue('Z3','Doz')
->setCellValue('AA3','%')
->setCellValue('AB3','Doz')
->setCellValue('AC3','%')
->setCellValue('AD3','Doz')
->setCellValue('AE3','%')
->setCellValue('AF3','Doz')
->setCellValue('AG3','%')
->setCellValue('AH3','Doz')
->setCellValue('AI3','%')
->setCellValue('AJ3','Doz')
->setCellValue('AK3','%')
->setCellValue('AL3','Doz')
->setCellValue('AM3','%')
->setCellValue('AN3','Doz')
->setCellValue('AO3','%')
->setCellValue('AP3','Doz')
->setCellValue('AQ3','%')
->setCellValue('AR3','Doz')
->setCellValue('AS3','%')
->setCellValue('AT3','Doz')
->setCellValue('AU3','%')
->setCellValue('AV3','Doz')
->setCellValue('AW3','%');


$toplamhepbid=$verim74+$verim75;
$toplamgebetet1=$verim108+$verim113;
$toplamgebetet2=$verim109+$verim114;


$say=mysql_num_rows($resultvyil);
$sayson=$say+4;
$sontop=$say+3;
$objPHPExcel->getSheet(0)->getStyle("G4:G$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("G4:G$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("I4:I$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("I4:I$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("K4:K$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("K4:K$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("M4:M$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("M4:M$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("O4:O$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("O4:O$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("Q4:Q$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("Q4:Q$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("S4:S$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("S4:S$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("U4:U$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("U4:U$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("W4:W$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("W4:W$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("Y4:Y$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("Y4:Y$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AA4:AA$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AA4:AA$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AC4:AC$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AC4:AC$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AE4:AE$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AE4:AE$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AG4:AG$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AG4:AG$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AI4:AI$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AI4:AI$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AK4:AK$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AK4:AK$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AM4:AM$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AM4:AM$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AO4:AO$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AO4:AO$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AQ4:AQ$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AQ4:AQ$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AS4:AS$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AS4:AS$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AU4:AU$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AU4:AU$sayson")->getFill()->getStartColor()->setARGB('# f4a460');
$objPHPExcel->getSheet(0)->getStyle("AW4:AW$sayson")->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle("AW4:AW$sayson")->getFill()->getStartColor()->setARGB('# f4a460');


$objPHPExcel->getActiveSheet(0)->getStyle("A$row:AW$row")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet(0)->getStyle("C$row:AW$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C$row:AW$row")->getFont()->setName('Arial')->setSize(6);


$objPHPExcel->setActiveSheetIndex(0)

            ->setCellValueExplicit('A'.$row, $socadi, PHPExcel_Cell_DataType::TYPE_STRING)
			->setCellValue('B'.$row, mb_convert_encoding ($verim176, "UTF-8", "ISO-8859-9" ))
            ->setCellValue('C'.$row, round($verim119))
			->setCellValue('D'.$row, $ay)
            ->setCellValue('E'.$row, '=ROUNDUP((C'.$row.'*D'.$row.')/12,0)')
            ->setCellValue('F'.$row, $verim1)->setCellValue('G'.$row, '=ROUNDUP((F'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('H'.$row, $verim5)->setCellValue('I'.$row, '=ROUNDUP((H'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('J'.$row, $verim9)->setCellValue('K'.$row, '=ROUNDUP((J'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('L'.$row, $verim13)->setCellValue('M'.$row, '=ROUNDUP((L'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('N'.$row, $verim19)->setCellValue('O'.$row, '=ROUNDUP((N'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('P'.$row, $verim22)->setCellValue('Q'.$row, '=ROUNDUP((P'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('R'.$row, $verim25)->setCellValue('S'.$row, '=ROUNDUP((R'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('T'.$row, $verim28)->setCellValue('U'.$row, '=ROUNDUP((T'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('V'.$row, $verim30)->setCellValue('W'.$row, '=ROUNDUP((V'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('X'.$row, $verim37)->setCellValue('Y'.$row, '=ROUNDUP((X'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('Z'.$row, $verim53)->setCellValue('AA'.$row, '=ROUNDUP((Z'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AB'.$row, $verim69)->setCellValue('AC'.$row, '=ROUNDUP((AB'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AD'.$row, $toplamhepbid)->setCellValue('AE'.$row, '=ROUNDUP((AD'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('AF'.$row, $verim82)->setCellValue('AG'.$row, '=ROUNDUP((AF'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AH'.$row, $verim88)->setCellValue('AI'.$row, '=ROUNDUP((AH'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AJ'.$row, $verim120)->setCellValue('AK'.$row, '=ROUNDUP((AJ'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('AL'.$row, $verim126)->setCellValue('AM'.$row, '=ROUNDUP((AL'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AN'.$row, $verim130)->setCellValue('AO'.$row, '=ROUNDUP((AN'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AP'.$row, $toplamgebetet1)->setCellValue('AQ'.$row, '=ROUNDUP((AP'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('AR'.$row, $toplamgebetet2)->setCellValue('AS'.$row, '=ROUNDUP((AR'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			//DEVAMSIZLIKLAR
           ->setCellValue('AT'.$row, '=(J'.$row.'-F'.$row.')')->setCellValue('AU'.$row, '=ROUNDUP(((J'.$row.'-F'.$row.')*100)/F'.$row.',0)')
		  ->setCellValue('AV'.$row, '=(AH'.$row.'-AD'.$row.')')->setCellValue('AW'.$row, '=ROUNDUP(((AH'.$row.'-AD'.$row.')*100)/AD'.$row.',0)');
			
            /*->setCellValue('Z'.$row, $verim25)
			->setCellValue('AA'.$row, $verim26)
            ->setCellValue('AB'.$row, $verim27)
            ->setCellValue('AC'.$row, $verim28)
			->setCellValue('AD'.$row, $verim29);*/
			
   $row++;
}
}
// T O P L A M L A R   K I S M I *****************************************************************************************************************************

$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}


$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

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
$kurum=$ilinadi;
$kurumt=$ilinadi.' '.$iltop;

}elseif($ocgelen==trsuz("İLÇE TOPLAMI")){
$kurum=$ilinadi.'-'.$ilceninadi;
$kurumt=$ilceninadi.' '.$ilcetop;

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI")){
$kurum=$ilinadi.'-'.$ocgelen;
$kurumt=$ocgelen.' '.$ahektop;

}else{
$kurum=trsuz('');
}

if($ilcegelen=="İlçe Seçiniz" and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("ŞUBAT")){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MART"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("NİSAN")){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="MAYIS"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("HAZİRAN")){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="TEMMUZ"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("AĞUSTOS")){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("EYLÜL")){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen==trsuz("EKİM")){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="KASIM"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
}elseif($ilcegelen=="İlçe Seçiniz" and $aygelen=="ARALIK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
//İLÇE DÖKÜMÜ
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="OCAK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("ŞUBAT")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="MART"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("NİSAN")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="MAYIS"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("HAZİRAN")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="TEMMUZ"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("AĞUSTOS")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("EYLÜL")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("EKİM")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="KASIM"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM')") ;
}elseif($ocgelen==trsuz("İLÇE TOPLAMI")  and $aygelen=="ARALIK"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and  vyiladi='$yilgelen' and vayadi='ARALIK')") ;




}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen="OCAK"){
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI")  and $aygelen==trsuz("ŞUBAT")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="MART"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("NİSAN")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,

sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="MAYIS"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("HAZİRAN")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="TEMMUZ"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("AĞUSTOS")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("EYLÜL")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen==trsuz("EKİM")){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="KASIM"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM')") ;
}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!=trsuz("İLÇE TOPLAMI") and $aygelen=="ARALIK"){
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and  vyiladi='$yilgelen' and vayadi='ARALIK')") ;
}else{
//OCAK TOPLAMLARI
$tresultvyil = @mysql_query("select 
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
sum(v111) as v111,sum(v112) as v112,sum(v113) as v113,sum(v114) as v114,sum(v115) as v115,sum(v116) as v116,sum(v117) as v117,sum(v118) as v118,
sum(v120) as v120,sum(v121) as v121,sum(v122) as v122,sum(v123) as v123,sum(v124) as v124,sum(v125) as v125,sum(v126) as v126,sum(v127) as v127,sum(v128) as v128, 
sum(v129) as v129,sum(v130) as v130,sum(v131) as v131,sum(v132) as v132,sum(v133) as v133,sum(v134) as v134,sum(v135) as v135,sum(v136) as v136,sum(v137) as v137,
sum(v138) as v138,sum(v139) as v139,sum(v140) as v140,sum(v141) as v141,sum(v142) as v142,sum(v143) as v143,sum(v144) as v144,sum(v145) as v145,sum(v146) as v146, 
sum(v147) as v147,sum(v148) as v148,sum(v149) as v149,sum(v150) as v150,sum(v151) as v151,sum(v152) as v152,sum(v153) as v153,sum(v154) as v154,sum(v155) as v155,
sum(v156) as v156,sum(v157) as v157,sum(v158) as v158,sum(v159) as v159,sum(v160) as v160,sum(v161) as v161,sum(v162) as v162,sum(v163) as v163,sum(v164) as v164, 
sum(v165) as v165,sum(v166) as v166,sum(v167) as v167,sum(v168) as v168,sum(v169) as v169,sum(v170) as v170,sum(v171) as v171,sum(v172) as v172
from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM' or ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
}

while($sonucum=mysql_fetch_array($tresultvyil)){
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
$tverim116=$sonucum['v116'];$tverim117=$sonucum['v117'];$tverim118=$sonucum['v118'];$tverim120=$sonucum['v120'];$tverim121=$sonucum['v121'];
$tverim122=$sonucum['v122'];$tverim123=$sonucum['v123'];$tverim124=$sonucum['v124'];$tverim125=$sonucum['v125'];$tverim126=$sonucum['v126'];$tverim127=$sonucum['v127'];
$tverim128=$sonucum['v128'];$tverim129=$sonucum['v129'];$tverim130=$sonucum['v130'];$tverim131=$sonucum['v131'];$tverim132=$sonucum['v132'];$tverim133=$sonucum['v133'];
$tverim134=$sonucum['v134'];$tverim135=$sonucum['v135'];$tverim136=$sonucum['v136'];$tverim137=$sonucum['v137'];$tverim138=$sonucum['v138'];$tverim139=$sonucum['v139'];
$tverim140=$sonucum['v140'];$tverim141=$sonucum['v141'];$tverim142=$sonucum['v142'];$tverim143=$sonucum['v143'];$tverim144=$sonucum['v144'];$tverim145=$sonucum['v145'];
$tverim146=$sonucum['v146'];$tverim147=$sonucum['v147'];$tverim148=$sonucum['v148'];$tverim149=$sonucum['v149'];$tverim150=$sonucum['v150'];$tverim151=$sonucum['v151'];
$tverim152=$sonucum['v152'];$tverim153=$sonucum['v153'];$tverim154=$sonucum['v154'];$tverim155=$sonucum['v155'];$tverim156=$sonucum['v156'];$tverim157=$sonucum['v157'];
$tverim158=$sonucum['v158'];$tverim159=$sonucum['v159'];$tverim160=$sonucum['v160'];$tverim161=$sonucum['v161'];$tverim162=$sonucum['v162'];$tverim163=$sonucum['v163'];
$tverim164=$sonucum['v164'];$tverim165=$sonucum['v165'];$tverim166=$sonucum['v166'];$tverim167=$sonucum['v167'];$tverim168=$sonucum['v168'];$tverim169=$sonucum['v169'];
$tverim170=$sonucum['v170'];$tverim171=$sonucum['v171'];$tverim172=$sonucum['v172'];

$ttoplamhepbid=$tverim74+$tverim75;
$ttoplamgebetet1=$tverim108+$tverim113;
$ttoplamgebetet2=$tverim109+$tverim114;

$objPHPExcel->getActiveSheet(0)->getStyle("A$row:AW$row")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet(0)->getStyle("C$row:AW$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C$row:AW$row")->getFont()->setName('Arial')->setSize(6);


$objPHPExcel->setActiveSheetIndex(0)
->mergeCells("A$row:B$row")

            ->setCellValue('A'.$row, mb_convert_encoding ($kurumt, "UTF-8", "ISO-8859-9" ))
			//->setCellValue('B'.$row, mb_convert_encoding ($tverim176, "UTF-8", "ISO-8859-9" ))
            ->setCellValue('C'.$row, '=SUM(C4:C'.($sayson-1).')')
			->setCellValue('D'.$row, $ay)
            ->setCellValue('E'.$row, '=ROUNDUP((C'.$row.'*D'.$row.')/12,0)')
            ->setCellValue('F'.$row, $tverim1)->setCellValue('G'.$row, '=ROUNDUP((F'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('H'.$row, $tverim5)->setCellValue('I'.$row, '=ROUNDUP((H'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('J'.$row, $tverim9)->setCellValue('K'.$row, '=ROUNDUP((J'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('L'.$row, $tverim13)->setCellValue('M'.$row, '=ROUNDUP((L'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('N'.$row, $tverim19)->setCellValue('O'.$row, '=ROUNDUP((N'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('P'.$row, $tverim22)->setCellValue('Q'.$row, '=ROUNDUP((P'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('R'.$row, $tverim25)->setCellValue('S'.$row, '=ROUNDUP((R'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('T'.$row, $tverim28)->setCellValue('U'.$row, '=ROUNDUP((T'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('V'.$row, $tverim30)->setCellValue('W'.$row, '=ROUNDUP((V'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('X'.$row, $tverim37)->setCellValue('Y'.$row, '=ROUNDUP((X'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('Z'.$row, $tverim53)->setCellValue('AA'.$row, '=ROUNDUP((Z'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AB'.$row, $tverim69)->setCellValue('AC'.$row, '=ROUNDUP((AB'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AD'.$row, $ttoplamhepbid)->setCellValue('AE'.$row, '=ROUNDUP((AD'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('AF'.$row, $tverim82)->setCellValue('AG'.$row, '=ROUNDUP((AF'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AH'.$row, $tverim88)->setCellValue('AI'.$row, '=ROUNDUP((AH'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AJ'.$row, $tverim120)->setCellValue('AK'.$row, '=ROUNDUP((AJ'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('AL'.$row, $tverim126)->setCellValue('AM'.$row, '=ROUNDUP((AL'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AN'.$row, $tverim130)->setCellValue('AO'.$row, '=ROUNDUP((AN'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
            ->setCellValue('AP'.$row, $ttoplamgebetet1)->setCellValue('AQ'.$row, '=ROUNDUP((AP'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			->setCellValue('AR'.$row, $ttoplamgebetet2)->setCellValue('AS'.$row, '=ROUNDUP((AR'.$row.'*100)/((C'.$row.'/12)*D'.$row.'),0)')
			//DEVAMSIZLIKLAR
           ->setCellValue('AT'.$row, '=(J'.$row.'-F'.$row.')')->setCellValue('AU'.$row, '=ROUNDUP(((J'.$row.'-F'.$row.')*100)/F'.$row.',0)')
		  ->setCellValue('AV'.$row, '=(AH'.$row.'-AD'.$row.')')->setCellValue('AW'.$row, '=ROUNDUP(((AH'.$row.'-AD'.$row.')*100)/AD'.$row.',0)');
			
            $row=$row+1;
$objPHPExcel->getActiveSheet(0)->getStyle("AD$row:AW$row")->getFont()->setBold(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('AD'.$row,mb_convert_encoding ($kurum.' '.trsuz($aygelen).' '.trsuz($baslikx), "UTF-8", "ISO-8859-9" ));
$objPHPExcel->getActiveSheet(0)->mergeCells("AD$row:AW$row");
$objPHPExcel->getActiveSheet(0)->getStyle("AD$row:AW$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

}
$objPHPExcel->getActiveSheet(0)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

$objPHPExcel->getActiveSheet(0)->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
//Kenar Bosluklari
// margin is set in inches (0.5cm)
$margin = 0.5 / 5;

$objPHPExcel->getSheet(0)->getPageMargins()->setTop($margin);
$objPHPExcel->getSheet(0)->getPageMargins()->setBottom($margin);
$objPHPExcel->getSheet(0)->getPageMargins()->setLeft($margin);
$objPHPExcel->getSheet(0)->getPageMargins()->setRight($margin);
/*///KODLARRRRRRRRRRRRRRRRRRR
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);

*/
// Redirect output to a client�s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Degerlendirme Raporu Ay.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
