<?php

set_time_limit(600);

function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 

include('con_023.php');

$ilgelen=iconv("iso-8859-9", "utf-8", $_GET['selectil']); 

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







if($ilcegelen=="�l�e Se�iniz"){

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

}elseif($ocgelen=="Aile Hekimini Se�iniz"){

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

}elseif($ilcegelen!=trsuz("�l�e Se�iniz") and $ocgelen!="Aile Hekimini Se�iniz"){

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

if($verim1==0){$verim1=""; }else{$verim1=$verim1;}

if($verim2==0){$verim2=""; }else{$verim2=$verim2;}

if($verim3==0){$verim3=""; }else{$verim3=$verim3;}

if($verim4==0){$verim4=""; }else{$verim4=$verim4;}

if($verim5==0){$verim5=""; }else{$verim5=$verim5;}

if($verim6==0){$verim6=""; }else{$verim6=$verim6;}

if($verim7==0){$verim7=""; }else{$verim7=$verim7;}

if($verim8==0){$verim8=""; }else{$verim8=$verim8;}

if($verim9==0){$verim9=""; }else{$verim9=$verim9;}

if($verim10==0){$verim10=""; }else{$verim10=$verim10;}

if($verim11==0){$verim11=""; }else{$verim11=$verim11;}

if($verim12==0){$verim12=""; }else{$verim12=$verim12;}

if($verim13==0){$verim13=""; }else{$verim13=$verim13;}

if($verim14==0){$verim14=""; }else{$verim14=$verim14;}

if($verim15==0){$verim15=""; }else{$verim15=$verim15;}

if($verim16==0){$verim16=""; }else{$verim16=$verim16;}

if($verim17==0){$verim17=""; }else{$verim17=$verim17;}

if($verim18==0){$verim18=""; }else{$verim18=$verim18;}

if($verim19==0){$verim19=""; }else{$verim19=$verim19;}

if($verim20==0){$verim20=""; }else{$verim20=$verim20;}

if($verim21==0){$verim21=""; }else{$verim21=$verim21;}

if($verim22==0){$verim22=""; }else{$verim22=$verim22;}

if($verim23==0){$verim23=""; }else{$verim23=$verim23;}

if($verim24==0){$verim24=""; }else{$verim24=$verim24;}

if($verim25==0){$verim25=""; }else{$verim25=$verim25;}

if($verim26==0){$verim26=""; }else{$verim26=$verim26;}

if($verim27==0){$verim27=""; }else{$verim27=$verim27;}

if($verim28==0){$verim28=""; }else{$verim28=$verim28;}

if($verim29==0){$verim29=""; }else{$verim29=$verim29;}

if($verim30==0){$verim30=""; }else{$verim30=$verim30;}

if($verim31==0){$verim31=""; }else{$verim31=$verim31;}

if($verim32==0){$verim32=""; }else{$verim32=$verim32;}

if($verim33==0){$verim33=""; }else{$verim33=$verim33;}

if($verim34==0){$verim34=""; }else{$verim34=$verim34;}

if($verim35==0){$verim35=""; }else{$verim35=$verim35;}

if($verim36==0){$verim36=""; }else{$verim36=$verim36;}

if($verim37==0){$verim37=""; }else{$verim37=$verim37;}

if($verim38==0){$verim38=""; }else{$verim38=$verim38;}

if($verim39==0){$verim39=""; }else{$verim39=$verim39;}

if($verim40==0){$verim40=""; }else{$verim40=$verim40;}

if($verim41==0){$verim41=""; }else{$verim41=$verim41;}

if($verim42==0){$verim42=""; }else{$verim42=$verim42;}

if($verim43==0){$verim43=""; }else{$verim43=$verim43;}

if($verim44==0){$verim44=""; }else{$verim44=$verim44;}

if($verim45==0){$verim45=""; }else{$verim45=$verim45;}

if($verim46==0){$verim46=""; }else{$verim46=$verim46;}

if($verim47==0){$verim47=""; }else{$verim47=$verim47;}

if($verim48==0){$verim48=""; }else{$verim48=$verim48;}

if($verim49==0){$verim49=""; }else{$verim49=$verim49;}

if($verim50==0){$verim50=""; }else{$verim50=$verim50;}

if($verim51==0){$verim51=""; }else{$verim51=$verim51;}

if($verim52==0){$verim52=""; }else{$verim52=$verim52;}

if($verim53==0){$verim53=""; }else{$verim53=$verim53;}

if($verim54==0){$verim54=""; }else{$verim54=$verim54;}

if($verim55==0){$verim55=""; }else{$verim55=$verim55;}

if($verim56==0){$verim56=""; }else{$verim56=$verim56;}

if($verim57==0){$verim57=""; }else{$verim57=$verim57;}

if($verim58==0){$verim58=""; }else{$verim58=$verim58;}

if($verim59==0){$verim59=""; }else{$verim59=$verim59;}

if($verim60==0){$verim60=""; }else{$verim60=$verim60;}

if($verim61==0){$verim61=""; }else{$verim61=$verim61;}

if($verim62==0){$verim62=""; }else{$verim62=$verim62;}

if($verim63==0){$verim63=""; }else{$verim63=$verim63;}

if($verim64==0){$verim64=""; }else{$verim64=$verim64;}

if($verim65==0){$verim65=""; }else{$verim65=$verim65;}

if($verim66==0){$verim66=""; }else{$verim66=$verim66;}

if($verim67==0){$verim67=""; }else{$verim67=$verim67;}

if($verim68==0){$verim68=""; }else{$verim68=$verim68;}

if($verim69==0){$verim69=""; }else{$verim69=$verim69;}

if($verim70==0){$verim70=""; }else{$verim70=$verim70;}

if($verim71==0){$verim71=""; }else{$verim71=$verim71;}

if($verim72==0){$verim72=""; }else{$verim72=$verim72;}

if($verim73==0){$verim73=""; }else{$verim73=$verim73;}

if($verim74==0){$verim74=""; }else{$verim74=$verim74;}

if($verim75==0){$verim75=""; }else{$verim75=$verim75;}

if($verim76==0){$verim76=""; }else{$verim76=$verim76;}

if($verim77==0){$verim77=""; }else{$verim77=$verim77;}

if($verim78==0){$verim78=""; }else{$verim78=$verim78;}

if($verim79==0){$verim79=""; }else{$verim79=$verim79;}

if($verim80==0){$verim80=""; }else{$verim80=$verim80;}

if($verim81==0){$verim81=""; }else{$verim81=$verim81;}

if($verim82==0){$verim82=""; }else{$verim82=$verim82;}

if($verim83==0){$verim83=""; }else{$verim83=$verim83;}

if($verim84==0){$verim84=""; }else{$verim84=$verim84;}

if($verim85==0){$verim85=""; }else{$verim85=$verim85;}

if($verim86==0){$verim86=""; }else{$verim86=$verim86;}

if($verim87==0){$verim87=""; }else{$verim87=$verim87;}

if($verim88==0){$verim88=""; }else{$verim88=$verim88;}

if($verim89==0){$verim89=""; }else{$verim89=$verim89;}

if($verim90==0){$verim90=""; }else{$verim90=$verim90;}

if($verim91==0){$verim91=""; }else{$verim91=$verim91;}

if($verim92==0){$verim92=""; }else{$verim92=$verim92;}

if($verim93==0){$verim93=""; }else{$verim93=$verim93;}

if($verim94==0){$verim94=""; }else{$verim94=$verim94;}

if($verim95==0){$verim95=""; }else{$verim95=$verim95;}

if($verim96==0){$verim96=""; }else{$verim96=$verim96;}

if($verim97==0){$verim97=""; }else{$verim97=$verim97;}

if($verim98==0){$verim98=""; }else{$verim98=$verim98;}

if($verim99==0){$verim99=""; }else{$verim99=$verim99;}

if($verim100==0){$verim100=""; }else{$verim100=$verim100;}

if($verim101==0){$verim101=""; }else{$verim101=$verim101;}

if($verim102==0){$verim102=""; }else{$verim102=$verim102;}

if($verim103==0){$verim103=""; }else{$verim103=$verim103;}

if($verim104==0){$verim104=""; }else{$verim104=$verim104;}

if($verim105==0){$verim105=""; }else{$verim105=$verim105;}

if($verim106==0){$verim106=""; }else{$verim106=$verim106;}

if($verim107==0){$verim107=""; }else{$verim107=$verim107;}

if($verim108==0){$verim108=""; }else{$verim108=$verim108;}

if($verim109==0){$verim109=""; }else{$verim109=$verim109;}

if($verim110==0){$verim110=""; }else{$verim110=$verim110;}

if($verim111==0){$verim111=""; }else{$verim111=$verim111;}

if($verim112==0){$verim112=""; }else{$verim112=$verim112;}

if($verim113==0){$verim113=""; }else{$verim113=$verim113;}

if($verim114==0){$verim114=""; }else{$verim114=$verim114;}

if($verim115==0){$verim115=""; }else{$verim115=$verim115;}

if($verim116==0){$verim116=""; }else{$verim116=$verim116;}

if($verim117==0){$verim117=""; }else{$verim117=$verim117;}

if($verim118==0){$verim118=""; }else{$verim118=$verim118;}

if($verim119==0){$verim119=""; }else{$verim119=$verim119;}

if($verim120==0){$verim120=""; }else{$verim120=$verim120;}

if($verim121==0){$verim121=""; }else{$verim121=$verim121;}

if($verim122==0){$verim122=""; }else{$verim122=$verim122;}

if($verim123==0){$verim123=""; }else{$verim123=$verim123;}

if($verim124==0){$verim124=""; }else{$verim124=$verim124;}

if($verim125==0){$verim125=""; }else{$verim125=$verim125;}

if($verim126==0){$verim126=""; }else{$verim126=$verim126;}

if($verim127==0){$verim127=""; }else{$verim127=$verim127;}

if($verim128==0){$verim128=""; }else{$verim128=$verim128;}

if($verim129==0){$verim129=""; }else{$verim129=$verim129;}

if($verim130==0){$verim130=""; }else{$verim130=$verim130;}

if($verim131==0){$verim131=""; }else{$verim131=$verim131;}

if($verim132==0){$verim132=""; }else{$verim132=$verim132;}

if($verim133==0){$verim133=""; }else{$verim133=$verim133;}

if($verim134==0){$verim134=""; }else{$verim134=$verim134;}

if($verim135==0){$verim135=""; }else{$verim135=$verim135;}

if($verim136==0){$verim136=""; }else{$verim136=$verim136;}

if($verim137==0){$verim137=""; }else{$verim137=$verim137;}

if($verim138==0){$verim138=""; }else{$verim138=$verim138;}

if($verim139==0){$verim139=""; }else{$verim139=$verim139;}

if($verim140==0){$verim140=""; }else{$verim140=$verim140;}

if($verim141==0){$verim141=""; }else{$verim141=$verim141;}

if($verim142==0){$verim142=""; }else{$verim142=$verim142;}

if($verim143==0){$verim143=""; }else{$verim143=$verim143;}

if($verim144==0){$verim144=""; }else{$verim144=$verim144;}

if($verim145==0){$verim145=""; }else{$verim145=$verim145;}

if($verim146==0){$verim146=""; }else{$verim146=$verim146;}

if($verim147==0){$verim147=""; }else{$verim147=$verim147;}

if($verim148==0){$verim148=""; }else{$verim148=$verim148;}

if($verim149==0){$verim149=""; }else{$verim149=$verim149;}

if($verim150==0){$verim150=""; }else{$verim150=$verim150;}

if($verim151==0){$verim151=""; }else{$verim151=$verim151;}

if($verim152==0){$verim152=""; }else{$verim152=$verim152;}

if($verim153==0){$verim153=""; }else{$verim153=$verim153;}

if($verim154==0){$verim154=""; }else{$verim154=$verim154;}

if($verim155==0){$verim155=""; }else{$verim155=$verim155;}

if($verim156==0){$verim156=""; }else{$verim156=$verim156;}

if($verim157==0){$verim157=""; }else{$verim157=$verim157;}

if($verim158==0){$verim158=""; }else{$verim158=$verim158;}

if($verim159==0){$verim159=""; }else{$verim159=$verim159;}

if($verim160==0){$verim160=""; }else{$verim160=$verim160;}

if($verim161==0){$verim161=""; }else{$verim161=$verim161;}

if($verim162==0){$verim162=""; }else{$verim162=$verim162;}

if($verim163==0){$verim163=""; }else{$verim163=$verim163;}

if($verim164==0){$verim164=""; }else{$verim164=$verim164;}

if($verim165==0){$verim165=""; }else{$verim165=$verim165;}

if($verim166==0){$verim166=""; }else{$verim166=$verim166;}

if($verim167==0){$verim167=""; }else{$verim167=$verim167;}

if($verim168==0){$verim168=""; }else{$verim168=$verim168;}

if($verim169==0){$verim169=""; }else{$verim169=$verim169;}

if($verim170==0){$verim170=""; }else{$verim170=$verim170;}

if($verim171==0){$verim171=""; }else{$verim171=$verim171;}

if($verim172==0){$verim172=""; }else{$verim172=$verim172;}

/*if($verim173==0){$verim173=""; }else{$verim173=$verim173;}

if($verim174==0){$verim174=""; }else{$verim174=$verim174;}

if($verim175==0){$verim175=""; }else{$verim175=$verim175;}

if($verim176==0){$verim176=""; }else{$verim176=$verim176;}*/



$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceninadi=$ilcesonucum['ilcead'];



if($ilcegelen==trsuz("�l�e Se�iniz")){

$ilkod=trsuz(substr(trim($socadi),0,2));

$ilcekod=trsuz(substr(trim($socadi),3,2));

$ahkod=trsuz('');

$socadi=trsuz($ilkod.'.'.$ilcekod);

$verim176=$ilceninadi;



}elseif($ocgelen=="Aile Hekimini Se�iniz"){

$ilkod=trsuz(substr(trim($socadi),0,2));

$ilcekod=trsuz(substr(trim($socadi),3,2));

$ahkod=trsuz(substr(trim($socadi),6,3));

$socadi=trsuz($ilkod.'.'.$ilcekod.'.'.$ahkod);

$verim176=$sonucum['v176'];



}elseif($ilcegelen!=trsuz("�l�e Se�iniz") and $ocgelen!="Aile Hekimini Se�iniz"){

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



if($ilcegelen==trsuz("�l�e Se�iniz")){

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

}elseif($ocgelen=="Aile Hekimini Se�iniz"){

$kurum=$ahkod;

$kurumt=$ilceninadi.' '.$ilcetop;

$top=$socadi;



}elseif($ilcegelen!=trsuz("�l�e Se�iniz") and $ocgelen!="Aile Hekimini Se�iniz"){

$top=$ocgelen;

$kurum=$ocgelen;

$kurumt=$ocgelen.' '.$ahektop;



}else{

$kurum=trsuz('');

}

$harfsay=strlen($sonucum['vvv']);

if($harfsay>9){

$kurum=$say;

$top=$sonucum['vvv'];



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



$objPHPExcel->getActiveSheet(1)->getStyle('A1:K60')->getFont()->setBold(true);

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

$objPHPExcel->getActiveSheet(1)->getTabColor()->setARGB('##0000FF');

	  

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

$objPHPExcel->getActiveSheet(1)->getStyle('A61:A62')->getAlignment()->applyFromArray(

			array(

	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,

				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,

	 			'rotation'   => 0,

	 			'wrap'	   => false

	 		)

	  );

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A61:A62")->getFont()->setName('Arial')->setSize(8);

	  

$objPHPExcel->getSheet(1)->mergeCells("A61:K61");

$objPHPExcel->getSheet(1)->mergeCells("A62:K62");



$objPHPExcel->getSheet(1)->setCellValue('A61','Hepatit B aşısının 0-11 ay grubuna 1. doz uygulaması kendi bebeğiniz olup bölge dışında (hastane,resmi diğer kurumlar) yapıldı ise BD sütununa ');

$objPHPExcel->getSheet(1)->setCellValue('A62','kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.');

$objPHPExcel->getActiveSheet(1)->getStyle('A63:K66')->getFont()->setBold(true);



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

			

			->setCellValue('K8', '=C8+F8+G8+H8')

			

			->setCellValue('C9', $verim5)



            ->setCellValue('F9', $verim6)

			

			 ->setCellValue('G9', $verim7)



            ->setCellValue('H9', $verim8)

			

			->setCellValue('K9', '=C9+F9+G9+H9')

			

			->setCellValue('C10', $verim9)



            ->setCellValue('F10', $verim10)

			

			 ->setCellValue('G10', $verim11)



            ->setCellValue('H10', $verim12)

			

			->setCellValue('K10', '=C10+F10+G10+H10')

			

			->setCellValue('F11', $verim13)

			

			 ->setCellValue('G11', $verim14)



            ->setCellValue('H11', $verim15)

			

			->setCellValue('K11', '=F11+G11+H11')

			

			->setCellValue('K12', '=K8+K9+K10+K11')

//HİB			

			->setCellValue('H14', $verim17)

			

			->setCellValue('I14', $verim18)

			

			->setCellValue('K14', '=H14+I14')

//KPA

			->setCellValue('C16', $verim19)



            ->setCellValue('F16', $verim20)

			

			 ->setCellValue('G16', $verim21)



            ->setCellValue('K16', '=C16+F16+G16')

			

			->setCellValue('C17', $verim22)



            ->setCellValue('F17', $verim23)

			

			 ->setCellValue('G17', $verim24)



            ->setCellValue('K17', '=C17+F17+G17')

			

			->setCellValue('C18', $verim25)



            ->setCellValue('F18', $verim26)

			

			 ->setCellValue('G18', $verim27)



            ->setCellValue('K18', '=C18+F18+G18')

			

			->setCellValue('F19', $verim28)

			

			 ->setCellValue('G19', $verim29)



            ->setCellValue('K19', '=F19+G19')

			

			->setCellValue('K20', '=K16+K17+K18+K19')

//POLİO

			->setCellValue('C22', $verim30)



            ->setCellValue('F22', $verim31)

			

			 ->setCellValue('G22', $verim32)

			 

			 ->setCellValue('H22', $verim33)

			 

			 ->setCellValue('I22', $verim34)

			 

			  ->setCellValue('J22', $verim35)



            ->setCellValue('K22', '=C22+F22+G22+H22+I22+J22')

			

			->setCellValue('F23', $verim37)

			

			 ->setCellValue('G23', $verim38)

			 

			 ->setCellValue('H23', $verim39)

			

			 ->setCellValue('I23', $verim40)

			 

			  ->setCellValue('J23', $verim41)



            ->setCellValue('K23', '=F23+G23+H23+I23+J23')

			

			->setCellValue('K24', '0')

			

			->setCellValue('K25', '0')

			

			->setCellValue('K26', '=K22+K23')

//KKK

			->setCellValue('F28', $verim53)



            ->setCellValue('G28', $verim54)

			

			 ->setCellValue('H28', $verim55)

			 

			 ->setCellValue('I28', $verim56)

			 

			 ->setCellValue('J28', $verim57)

			 

			  ->setCellValue('K28', '=F28+G28+H28+I28+J28')



            ->setCellValue('F29', $verim58)

			

			->setCellValue('G29', $verim59)

			

			 ->setCellValue('H29', $verim60)

			 

			 ->setCellValue('I29', $verim61)

			

			 ->setCellValue('J29', $verim62)

			 

			 ->setCellValue('K29', '=F29+G29+H29+I29+J29')



             ->setCellValue('K30', '=K28+K29')

//PPD

			->setCellValue('C32', $verim63)



			->setCellValue('F32', $verim64)

			

			->setCellValue('G32', $verim65)

			

			 ->setCellValue('H32', $verim66)

			 

			 ->setCellValue('I32', $verim67)

			

			 ->setCellValue('J32', $verim68)

			 

			 ->setCellValue('K32', '=C32+F32+G32+H32+I32+J32')

//BCG

			->setCellValue('C34', $verim69)



			->setCellValue('F34', $verim70)

			

			->setCellValue('G34', $verim71)

			

			 ->setCellValue('H34', $verim72)

			 

			 ->setCellValue('K34', '=C34+F34+G34+H34')

//HEPATİT-B

			 ->setCellValue('C37', $verim74)



            ->setCellValue('D37', $verim75)

			

			 ->setCellValue('E37', '=C37+D37')



            ->setCellValue('F37', $verim77)

			

			->setCellValue('G37', $verim78)

			

			->setCellValue('H37', $verim79)



            ->setCellValue('I37', $verim80)

			

			 ->setCellValue('J37', $verim81)



            ->setCellValue('K37', '=E37+F37+G37+H37+I37+J37')

			

			->setCellValue('C38', $verim82)

			

			->setCellValue('F38', $verim83)



            ->setCellValue('G38', $verim84)

			

			 ->setCellValue('H38', $verim85)



            ->setCellValue('I38', $verim86)

			

			->setCellValue('J38', $verim87)

			

			->setCellValue('K38', '=C38+F38+G38+H38+I38+J38')

			

			->setCellValue('C39', $verim88)

			

			->setCellValue('F39', $verim89)



            ->setCellValue('G39', $verim90)

			

			 ->setCellValue('H39', $verim91)



            ->setCellValue('I39', $verim92)

			

			->setCellValue('J39', $verim93)

			

			->setCellValue('K39', '=C39+F39+G39+H39+I39+J39')

			

			->setCellValue('K40', '=K37+K38+K39')

//HEPATİT A

			->setCellValue('F42', $verim120)



            ->setCellValue('G42', $verim121)

			

			 ->setCellValue('H42', $verim122)

			 

			 ->setCellValue('I42', $verim123)

			 

			 ->setCellValue('J42', $verim124)

			 

			  ->setCellValue('K42', '=F42+G42+H42+I42+J42')



            ->setCellValue('F43', $verim125)

			

			 ->setCellValue('G43', $verim126)

			 

			 ->setCellValue('H43', $verim127)

			

			 ->setCellValue('I43', $verim128)

			 

			 ->setCellValue('J43', $verim129)

			 

			 ->setCellValue('K43', '=F43+G43+H43+I43+J43')



             ->setCellValue('K44', '=K42+K43')

			 

			 //SU ÇİÇEĞİ

			

			->setCellValue('F46', $verim130)

			

			->setCellValue('G46', $verim131)

			

			 ->setCellValue('H46', $verim132)

			 

			 ->setCellValue('I46', $verim133)

			 

			 ->setCellValue('J46', $verim134)

			 

			 ->setCellValue('K46', '=F46+G46+H46+I46+J46')

			

//KIZAMIKÇIK

			->setCellValue('J48', $verim96)

			

			->setCellValue('K48', '=J48')	

//OKUL TD

			->setCellValue('I50', $verim100)

			

			->setCellValue('J50', $verim101)	

			

			->setCellValue('K50', '=I50+J50')

	

//DİĞER TD

			->setCellValue('C52', $verim102)



			->setCellValue('F52', $verim103)

			

			->setCellValue('G52', $verim104)

			

			 ->setCellValue('H52', $verim105)

			 

			 ->setCellValue('I52', $verim106)

			

			 ->setCellValue('J52', $verim107)

			 

			 ->setCellValue('K52', '=C52+F52+G52+H52+I52+J52')

//15-49 YAŞ KADIN TD 1

			->setCellValue('C54', $verim108)

			

			 ->setCellValue('H54', $verim113)

			 

			 ->setCellValue('K54', '=C54+H54')

//15-49 YAŞ KADIN TD 2

			->setCellValue('C55', $verim109)

			

			 ->setCellValue('H55', $verim114)

			 

			 ->setCellValue('K55', '=C55+H55')

//15-49 YAŞ KADIN TD 3

			->setCellValue('C56', $verim110)

			

			 ->setCellValue('H56', $verim115)

			 

			 ->setCellValue('K56', '=C56+H56')

//15-49 YAŞ KADIN TD 4

			->setCellValue('C57', $verim111)

			

			 ->setCellValue('H57', $verim116)

			 

			 ->setCellValue('K57', '=C57+H57')

//15-49 YAŞ KADIN TD 5

			->setCellValue('C58', $verim112)

			

			 ->setCellValue('H58', $verim117)

			 

			 ->setCellValue('K58', '=C58+H58')

//15-49 YAŞ KADIN TD TOPLAM

			->setCellValue('C59', '=C54+C55+C56+C57+C58')

			

			 ->setCellValue('H59', '=H54+H55+H56+H57+H58')

			 

			 ->setCellValue('K59', '=C59+H59')

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

$i=$say+1;

while($i<38){

$objWorkSheet = $objPHPExcel->createSheet($i); //Setting index when creating



    //Write cells

    



    // Rename sheet

    $objWorkSheet->setTitle("$i");

	

	

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



$objPHPExcel->getSheet($i)->getColumnDimension('A')->setWidth(20);



$objPHPExcel->getSheet($i)->getColumnDimension('B')->setWidth(6.7);



$objPHPExcel->getSheet($i)->getColumnDimension('C')->setWidth(4.0);



$objPHPExcel->getSheet($i)->getColumnDimension('D')->setWidth(4.0);



$objPHPExcel->getSheet($i)->getColumnDimension('E')->setWidth(7.3);







for ($col = 'F'; $col != 'K'; $col++) {



$objPHPExcel->getSheet($i)->getColumnDimension($col)->setWidth(12.7);



}



$objPHPExcel->getSheet($i)->getColumnDimension('K')->setWidth(13);



//$objPHPExcel->getSheet($i)->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);



$objPHPExcel->getSheet($i)->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('I8:J12')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C11')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('C12:H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C12:H12')->getFill()->getStartColor()->setARGB('# bebebe');



//satir y�ksekligi



//$objPHPExcel->getSheet($i)->getRowDimension('1')->setRowHeight(230);



//Yazinin y�n�



//$objPHPExcel->getSheet($i)->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);*/



//h�cre degeri

$objPHPExcel->getSheet($i)->getRowDimension('1')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('5')->setRowHeight(5);

$objPHPExcel->getSheet($i)->getRowDimension('6')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('7')->setRowHeight(30);

$objPHPExcel->getSheet($i)->getRowDimension('8')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('9')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('10')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('11')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('12')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('14')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('16')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('17')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('18')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('19')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('20')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('22')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('23')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('24')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('25')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('26')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('28')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('29')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('30')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('32')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('34')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('36')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('37')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('38')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('39')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('40')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('42')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('44')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('46')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('47')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('48')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('49')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('50')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('51')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('52')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('53')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('54')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('55')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('56')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('57')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('58')->setRowHeight(15);

$objPHPExcel->getSheet($i)->getRowDimension('59')->setRowHeight(15);





$objPHPExcel->getSheet($i)->getStyle('A1:K66')->getAlignment()->setWrapText(true);



$objPHPExcel->getSheet($i)->getStyle('A6:K66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);



$objPHPExcel->getSheet($i)->getStyle('A6:K66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);



$objPHPExcel->getSheet($i)->getRowDimension('1')->setRowHeight(20);



$objPHPExcel->getSheet($i)->mergeCells("A1:K1");



$objPHPExcel->getActiveSheet($i)->getStyle('A1:K60')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet(0)->getStyle('A1')->getAlignment()->applyFromArray(

			array(

	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,

				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,

	 			'rotation'   => 0,

	 			'wrap'	   => true

	 		)

	  );

	  

$objPHPExcel->getSheet($i)->mergeCells("B2:H2");

$objPHPExcel->getSheet($i)->mergeCells("B3:H3");

$objPHPExcel->getSheet($i)->mergeCells("B4:G4");

$objPHPExcel->getActiveSheet(0)->getStyle('K2:K4')->getAlignment()->applyFromArray(

			array(

	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,

				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,

	 			'rotation'   => 0,

	 			'wrap'	   => false

	 		)

	  );

$objPHPExcel->getActiveSheet(1)->getTabColor()->setARGB('##0000FF');

	  

$objPHPExcel->getSheet($i)->setCellValue('A1', 'AŞI SONUÇLARI ÇİZELGESİ   (FORM013)');



$objPHPExcel->getSheet($i)->setCellValue('A2', 'İL:');



$objPHPExcel->getSheet($i)->setCellValue('A3', 'İLÇE:');



$objPHPExcel->getSheet($i)->setCellValue('A4','KURUM:');



//$objPHPExcel->getSheet($i)->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');

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



	  



$objPHPExcel->getSheet($i)->mergeCells("H4:J4");



$objPHPExcel->getActiveSheet(1)->getColumnDimension($col)->setWidth(15);







$objPHPExcel->getSheet($i)->setCellValue('H4','YILLIK 0-11 AY BEBEK NÜFUSU:');



$objPHPExcel->getSheet($i)->setCellValue('J2','YIL:');



$objPHPExcel->getSheet($i)->setCellValue('J3','AY:');



$objPHPExcel->getSheet($i)->setCellValue('A6','');



$objPHPExcel->getSheet($i)->mergeCells("B6:K6");



$objPHPExcel->getSheet($i)->getStyle('A6:K60')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);



$objPHPExcel->getSheet($i)->getStyle('A6:K60')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A6:K12")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A6:K12")->applyFromArray($ciftcizgi);







$objPHPExcel->getSheet($i)->setCellValue('B6','YAŞ GRUPLARINA GÖRE YAPILAN DOZ SAYISI');







$objPHPExcel->getSheet($i)->setCellValue('A7','AŞI');



$objPHPExcel->getSheet($i)->setCellValue('B8','I');



$objPHPExcel->getSheet($i)->setCellValue('B9','II');



$objPHPExcel->getSheet($i)->setCellValue('B10','III');



$objPHPExcel->getSheet($i)->setCellValue('B11','R');







$objPHPExcel->getSheet($i)->mergeCells("A8:A11");



$objPHPExcel->getSheet($i)->setCellValue('B7','Uygu- lama');



$objPHPExcel->getSheet($i)->mergeCells("C7:E7");



$objPHPExcel->getSheet($i)->setCellValue('C7','0 yaş              (0-11 ay)');



$objPHPExcel->getSheet($i)->setCellValue('F7','1 yaş');



$objPHPExcel->getSheet($i)->setCellValue('G7','2-4 yaş');



$objPHPExcel->getSheet($i)->setCellValue('H7','5-9 yaş');



$objPHPExcel->getSheet($i)->setCellValue('I7','10-14 yaş');



$objPHPExcel->getSheet($i)->setCellValue('J7','15 yaş ve üzeri');



$objPHPExcel->getSheet($i)->setCellValue('K7','TOPLAM');



$objPHPExcel->getSheet($i)->mergeCells("C8:E8");



$objPHPExcel->getSheet($i)->mergeCells("C9:E9");



$objPHPExcel->getSheet($i)->mergeCells("C10:E10");



$objPHPExcel->getSheet($i)->mergeCells("C11:E11");



$objPHPExcel->getSheet($i)->mergeCells("C12:E12");





$objPHPExcel->getSheet($i)->mergeCells("A12:B12");



$objPHPExcel->getSheet($i)->setCellValue('A8','DaBT-IPA-Hib AŞISI');



$objPHPExcel->getSheet($i)->setCellValue('A12','TOPLAM DaBT-IPA-Hib');



$objPHPExcel->getSheet($i)->getRowDimension('13')->setRowHeight(5);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A14:K14")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A14:K14")->applyFromArray($ciftcizgi);







//HiB AŞISI



$objPHPExcel->getSheet($i)->mergeCells("C14:E14");



$objPHPExcel->getSheet($i)->setCellValue('A14','Hib AŞISI');



$objPHPExcel->getSheet($i)->getStyle('B14:G14')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('B14:G14')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->setCellValue('B14','');



$objPHPExcel->getSheet($i)->getStyle('J14')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('J14')->getFill()->getStartColor()->setARGB('# bebebe');





//KONJUGE PNOMOKOK AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('15')->setRowHeight(5);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A16:K20")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A16:K20")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->mergeCells("A16:A19");



$objPHPExcel->getSheet($i)->setCellValue('A16','KONJUGE PNÖMOKOK AŞISI');



$objPHPExcel->getSheet($i)->mergeCells("A20:B20");



$objPHPExcel->getSheet($i)->setCellValue('A20','TOPLAM KPA');



$objPHPExcel->getSheet($i)->setCellValue('B16','I');



$objPHPExcel->getSheet($i)->setCellValue('B17','II');



$objPHPExcel->getSheet($i)->setCellValue('B18','III');



$objPHPExcel->getSheet($i)->setCellValue('B19','R');



$objPHPExcel->getSheet($i)->mergeCells("C16:E16");



$objPHPExcel->getSheet($i)->mergeCells("C17:E17");



$objPHPExcel->getSheet($i)->mergeCells("C18:E18");



$objPHPExcel->getSheet($i)->mergeCells("C19:E19");



$objPHPExcel->getSheet($i)->mergeCells("C20:E20");



$objPHPExcel->getSheet($i)->getStyle('H16:J20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('H16:J20')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('C19')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C19')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('C20:H20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C20:H20')->getFill()->getStartColor()->setARGB('# bebebe');







//POLİO AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('21')->setRowHeight(5);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A22:K26")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A22:K26")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->mergeCells("A22:A25");



$objPHPExcel->getSheet($i)->setCellValue('A22','ORAL POLİO AŞISI');



$objPHPExcel->getSheet($i)->mergeCells("A26:B26");



$objPHPExcel->getSheet($i)->setCellValue('A26','TOPLAM ORAL POLİO');



$objPHPExcel->getSheet($i)->setCellValue('B22','I');



$objPHPExcel->getSheet($i)->setCellValue('B23','II');



$objPHPExcel->getSheet($i)->setCellValue('B24','III');



$objPHPExcel->getSheet($i)->setCellValue('B25','R');



$objPHPExcel->getSheet($i)->mergeCells("C22:E22");



$objPHPExcel->getSheet($i)->mergeCells("C23:E23");



$objPHPExcel->getSheet($i)->mergeCells("C24:E24");



$objPHPExcel->getSheet($i)->mergeCells("C25:E25");



$objPHPExcel->getSheet($i)->mergeCells("C26:E26");



$objPHPExcel->getSheet($i)->getStyle('C23')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C23')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('C24:j26')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);





$objPHPExcel->getSheet($i)->getStyle('C24:j26')->getFill()->getStartColor()->setARGB('# bebebe');



//KIZAMIK AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('27')->setRowHeight(5);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A28:K30")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A28:K30")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->mergeCells("A28:A29");



$objPHPExcel->getSheet($i)->setCellValue('A28','K.K.K. AŞISI');



$objPHPExcel->getSheet($i)->mergeCells("A30:B30");



$objPHPExcel->getSheet($i)->setCellValue('A30','TOPLAM K.K.K.');



$objPHPExcel->getSheet($i)->setCellValue('B28','I');



$objPHPExcel->getSheet($i)->setCellValue('B29','R');



$objPHPExcel->getSheet($i)->mergeCells("C28:E28");



$objPHPExcel->getSheet($i)->mergeCells("C29:E29");



$objPHPExcel->getSheet($i)->mergeCells("C30:E30");



$objPHPExcel->getSheet($i)->getStyle('C28:C30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C28:C30')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('F30:j30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('F30:j30')->getFill()->getStartColor()->setARGB('# bebebe');



//PPD



$objPHPExcel->getSheet($i)->getRowDimension('31')->setRowHeight(5);



$objPHPExcel->getSheet($i)->mergeCells("C32:E32");



$objPHPExcel->getSheet($i)->setCellValue('A32','PPD');



$objPHPExcel->getSheet($i)->setCellValue('B32','');



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A32:K32")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A32:K32")->applyFromArray($ciftcizgi);



//BCG AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('33')->setRowHeight(5);



$objPHPExcel->getSheet($i)->mergeCells("C34:E34");



$objPHPExcel->getSheet($i)->setCellValue('A34','BCG AŞISI');



$objPHPExcel->getSheet($i)->setCellValue('B34','I');



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A34:K34")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A34:K34")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->getStyle('I34:j34')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('I34:j34')->getFill()->getStartColor()->setARGB('# bebebe');



//HEPATİT B Bİ BD VE TOPLAM

$objPHPExcel->setActiveSheetIndex($i)->getStyle("C36:E36")->getFont()->setName('Arial')->setSize(7);

$objPHPExcel->setActiveSheetIndex($i)->getStyle("C37")->getFont()->setName('Arial')->setSize(6);

$objPHPExcel->setActiveSheetIndex($i)->getStyle("D37")->getFont()->setName('Arial')->setSize(8);



$objPHPExcel->getSheet($i)->getRowDimension('35')->setRowHeight(4);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("C36:E36")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->getSheet($i)->setCellValue('C36','BD');



$objPHPExcel->getSheet($i)->setCellValue('D36','Bİ');



$objPHPExcel->getSheet($i)->setCellValue('E36','TOPLAM');



//HEPATİT B AŞISI



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A37:K40")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A37:K40")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->mergeCells("A37:A39");



$objPHPExcel->getSheet($i)->setCellValue('A37','  HEPATİT-B   AŞISI');



$objPHPExcel->getSheet($i)->mergeCells("A40:B40");



$objPHPExcel->getSheet($i)->setCellValue('A40','TOPLAM HEPATİT B');



$objPHPExcel->getSheet($i)->setCellValue('B37','I');



$objPHPExcel->getSheet($i)->setCellValue('B38','II');



$objPHPExcel->getSheet($i)->setCellValue('B39','III');



$objPHPExcel->getSheet($i)->mergeCells("C38:E38");



$objPHPExcel->getSheet($i)->mergeCells("C39:E39");



$objPHPExcel->getSheet($i)->mergeCells("C40:E40");



$objPHPExcel->getSheet($i)->getStyle('C40:J40')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C40:J40')->getFill()->getStartColor()->setARGB('# bebebe');



//HEPATİT A AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('41')->setRowHeight(5);

$objPHPExcel->getSheet($i)->getRowDimension('43')->setRowHeight(15);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A42:K44")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A42:K44")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->mergeCells("A42:A43");



$objPHPExcel->getSheet($i)->setCellValue('A42','HEPATİT A AŞISI');



$objPHPExcel->getSheet($i)->mergeCells("A44:B44");



$objPHPExcel->getSheet($i)->setCellValue('A44','TOPLAM HEPATİT A');



$objPHPExcel->getSheet($i)->setCellValue('B42','I');



$objPHPExcel->getSheet($i)->setCellValue('B43','R');



$objPHPExcel->getSheet($i)->mergeCells("C42:E42");



$objPHPExcel->getSheet($i)->mergeCells("C43:E43");



$objPHPExcel->getSheet($i)->mergeCells("C44:E44");



$objPHPExcel->getSheet($i)->getStyle('C42:C44')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C42:C44')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->getStyle('F44:j44')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('F44:j44')->getFill()->getStartColor()->setARGB('# bebebe');



//SU ÇİÇEĞİ AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('45')->setRowHeight(5);



$objPHPExcel->getSheet($i)->mergeCells("C46:E46");





$objPHPExcel->setActiveSheetIndex($i)->getStyle("A46")->getFont()->setName('Arial')->setSize(9);



$objPHPExcel->getSheet($i)->setCellValue('A46','SU ÇİÇEĞİ AŞISI');



$objPHPExcel->getSheet($i)->setCellValue('B46','');



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A46:K46")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A46:K46")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->getStyle('C46')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C46')->getFill()->getStartColor()->setARGB('# bebebe');





//KIZAMIKÇIK AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('47')->setRowHeight(5);



$objPHPExcel->getSheet($i)->mergeCells("C48:E48");





$objPHPExcel->setActiveSheetIndex($i)->getStyle("A48")->getFont()->setName('Arial')->setSize(9);



$objPHPExcel->getSheet($i)->setCellValue('A48','KIZAMIKÇIK AŞISI');



$objPHPExcel->getSheet($i)->setCellValue('B48','');



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A48:K48")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A48:K48")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->getStyle('C48:I48')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C48:I48')->getFill()->getStartColor()->setARGB('# bebebe');



//OKUL Td AŞISI



$objPHPExcel->getSheet($i)->getRowDimension('49')->setRowHeight(5);



$objPHPExcel->getSheet($i)->mergeCells("C50:E50");



$objPHPExcel->getSheet($i)->setCellValue('A50','OKUL Td AŞISI');



$objPHPExcel->getSheet($i)->setCellValue('B50','');



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A50:K50")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A50:K50")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->getStyle('C50:H50')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('C50:H50')->getFill()->getStartColor()->setARGB('# bebebe');



//Td AŞISI

$objPHPExcel->getSheet($i)->getRowDimension('51')->setRowHeight(5);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A52:K59")->applyFromArray($styleThinBlackBorderOutline);



$objPHPExcel->setActiveSheetIndex($i)->getStyle("A52:K59")->applyFromArray($ciftcizgi);



$objPHPExcel->getSheet($i)->mergeCells("C52:E52");



$objPHPExcel->getSheet($i)->setCellValue('A52','DİĞER Td');



$objPHPExcel->getSheet($i)->setCellValue('B52','');



$objPHPExcel->getSheet($i)->setCellValue('A53','');



$objPHPExcel->getSheet($i)->setCellValue('B53','');



$objPHPExcel->getSheet($i)->mergeCells("C53:G53");



$objPHPExcel->getSheet($i)->mergeCells("H53:J53");



$objPHPExcel->getSheet($i)->setCellValue('C53','GEBE');



$objPHPExcel->getSheet($i)->setCellValue('H53','GEBE DEĞİL');



$objPHPExcel->getSheet($i)->getStyle('B53:K53')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);



$objPHPExcel->getSheet($i)->getStyle('B53:K53')->getFill()->getStartColor()->setARGB('# bebebe');



$objPHPExcel->getSheet($i)->mergeCells("A54:A58");



$objPHPExcel->getSheet($i)->setCellValue('A54','15-49 YAŞ KADIN Td AŞISI');

$objPHPExcel->getSheet($i)->setCellValue('B54','Td1');

$objPHPExcel->getSheet($i)->setCellValue('B55','Td2');

$objPHPExcel->getSheet($i)->setCellValue('B56','Td3');

$objPHPExcel->getSheet($i)->setCellValue('B57','Td4');

$objPHPExcel->getSheet($i)->setCellValue('B58','Td5');

$objPHPExcel->getSheet($i)->setCellValue('A59','TOPLAM Td');





$objPHPExcel->getSheet($i)->mergeCells("C54:G54");

$objPHPExcel->getSheet($i)->mergeCells("C55:G55");

$objPHPExcel->getSheet($i)->mergeCells("C56:G56");

$objPHPExcel->getSheet($i)->mergeCells("C57:G57");

$objPHPExcel->getSheet($i)->mergeCells("C58:G58");

$objPHPExcel->getSheet($i)->mergeCells("C59:G59");



$objPHPExcel->getSheet($i)->mergeCells("A59:B59");

$objPHPExcel->getSheet($i)->mergeCells("H54:J54");

$objPHPExcel->getSheet($i)->mergeCells("H55:J55");

$objPHPExcel->getSheet($i)->mergeCells("H56:J56");

$objPHPExcel->getSheet($i)->mergeCells("H57:J57");

$objPHPExcel->getSheet($i)->mergeCells("H58:J58");

$objPHPExcel->getSheet($i)->mergeCells("H59:J59");



//AÇIKLAMALAR

$objPHPExcel->getSheet($i)->getRowDimension('60')->setRowHeight(12);

$objPHPExcel->getActiveSheet(0)->getStyle('A61:A62')->getAlignment()->applyFromArray(

			array(

	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,

				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,

	 			'rotation'   => 0,

	 			'wrap'	   => false

	 		)

	  );

$objPHPExcel->setActiveSheetIndex($i)->getStyle("A61:A62")->getFont()->setName('Arial')->setSize(8);

	  

$objPHPExcel->getSheet($i)->mergeCells("A61:K61");

$objPHPExcel->getSheet($i)->mergeCells("A62:K62");



$objPHPExcel->getSheet($i)->setCellValue('A61','Hepatit B aşısının 0-11 ay grubuna 1. doz uygulaması kendi bebeğiniz olup bölge dışında (hastane,resmi diğer kurumlar) yapıldı ise BD sütununa ');

$objPHPExcel->getSheet($i)->setCellValue('A62','kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.');

$objPHPExcel->getActiveSheet($i)->getStyle('A63:K66')->getFont()->setBold(true);



$objPHPExcel->getSheet($i)->mergeCells("A64:D64");

$objPHPExcel->getSheet($i)->mergeCells("I64:K64");

$objPHPExcel->getSheet($i)->setCellValue('A64','Formu Düzenleyen');

$objPHPExcel->getSheet($i)->setCellValue('I64','Formu Onaylayan');

$objPHPExcel->getSheet($i)->mergeCells("A65:D65");

$objPHPExcel->getSheet($i)->mergeCells("I65:K65");

$objPHPExcel->getSheet($i)->mergeCells("A66:D66");

$objPHPExcel->getSheet($i)->mergeCells("I66:K66");



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



$objPHPExcel->setActiveSheetIndex($i)







->setCellValue('B2', mb_convert_encoding ($ilinadi, "UTF-8", "ISO-8859-9" ))

->setCellValue('B3', mb_convert_encoding ($ilceninadi, "UTF-8", "ISO-8859-9" ))

->setCellValue('B4', mb_convert_encoding ($top, "UTF-8", "ISO-8859-9" ))

->setCellValue('K2', $yilgelen)

->setCellValue('K3', mb_convert_encoding ($ayadi, "UTF-8", "ISO-8859-9" ))





//DBT            

            ->setCellValue('C8', '')



            ->setCellValue('F8', '')

			

			 ->setCellValue('G8', '')



            ->setCellValue('H8', '')

			

			->setCellValue('K8', '=C8+F8+G8+H8')

			

			->setCellValue('C9', '')



            ->setCellValue('F9', '')

			

			 ->setCellValue('G9', '')



            ->setCellValue('H9', '')

			

			->setCellValue('K9', '=C9+F9+G9+H9')

			

			->setCellValue('C10', '')



            ->setCellValue('F10', '')

			

			 ->setCellValue('G10', '')



            ->setCellValue('H10', '')

			

			->setCellValue('K10', '=C10+F10+G10+H10')

			

			->setCellValue('F11', '')

			

			 ->setCellValue('G11', '')



            ->setCellValue('H11', '')

			

			->setCellValue('K11', '=F11+G11+H11')

			

			->setCellValue('K12', '=K8+K9+K10+K11')

//HİB			

			->setCellValue('H14', '')

			

			->setCellValue('I14', '')

			

			->setCellValue('K14', '=H14+I14')

//KPA

			->setCellValue('C16', '')



            ->setCellValue('F16', '')

			

			 ->setCellValue('G16', '')



            ->setCellValue('K16', '=C16+F16+G16')

			

			->setCellValue('C17', '')



            ->setCellValue('F17', '')

			

			 ->setCellValue('G17', '')



            ->setCellValue('K17', '=C17+F17+G17')

			

			->setCellValue('C18', '')



            ->setCellValue('F18', '')

			

			 ->setCellValue('G18', '')



            ->setCellValue('K18', '=C18+F18+G18')

			

			->setCellValue('F19', '')

			

			 ->setCellValue('G19', '')



            ->setCellValue('K19', '=F19+G19')

			

			->setCellValue('K20', '=K16+K17+K18+K19')

//POLİO

			->setCellValue('C22', '')



            ->setCellValue('F22', '')

			

			 ->setCellValue('G22', '')

			 

			 ->setCellValue('H22', '')

			 

			 ->setCellValue('I22', '')

			 

			  ->setCellValue('J22', '')



            ->setCellValue('K22', '=C22+F22+G22+H22+I22+J22')

			

			->setCellValue('F23', '')

			

			 ->setCellValue('G23', '')

			 

			 ->setCellValue('H23', '')

			

			 ->setCellValue('I23', '')

			 

			  ->setCellValue('J23', '')



            ->setCellValue('K23', '=F23+G23+H23+I23+J23')

			

			->setCellValue('K24', '0')

			

			->setCellValue('K25', '0')

			

			->setCellValue('K26', '=K22+K23')

//KKK

			->setCellValue('F28', '')



            ->setCellValue('G28', '')

			

			 ->setCellValue('H28', '')

			 

			 ->setCellValue('I28', '')

			 

			 ->setCellValue('J28', '')

			 

			  ->setCellValue('K28', '=F28+G28+H28+I28+J28')



            ->setCellValue('F29', '')

			

			->setCellValue('G29', '')

			

			 ->setCellValue('H29', '')

			 

			 ->setCellValue('I29', '')

			

			 ->setCellValue('J29', '')

			 

			 ->setCellValue('K29', '=F29+G29+H29+I29+J29')



             ->setCellValue('K30', '=K28+K29')

//PPD

			->setCellValue('C32', '')



			->setCellValue('F32', '')

			

			->setCellValue('G32', '')

			

			 ->setCellValue('H32', '')

			 

			 ->setCellValue('I32', '')

			

			 ->setCellValue('J32', '')

			 

			 ->setCellValue('K32', '=C32+F32+G32+H32+I32+J32')

//BCG

			->setCellValue('C34', '')



			->setCellValue('F34', '')

			

			->setCellValue('G34', '')

			

			 ->setCellValue('H34', '')

			 

			 ->setCellValue('K34', '=C34+F34+G34+H34')

//HEPATİT-B

			 ->setCellValue('C37', '')



            ->setCellValue('D37', '')

			

			 ->setCellValue('E37', '=C37+D37')



            ->setCellValue('F37', '')

			

			->setCellValue('G37', '')

			

			->setCellValue('H37', '')



            ->setCellValue('I37', '')

			

			 ->setCellValue('J37', '')



            ->setCellValue('K37', '=E37+F37+G37+H37+I37+J37')

			

			->setCellValue('C38', '')

			

			->setCellValue('F38', '')



            ->setCellValue('G38', '')

			

			 ->setCellValue('H38', '')



            ->setCellValue('I38', '')

			

			->setCellValue('J38', '')

			

			->setCellValue('K38', '=C38+F38+G38+H38+I38+J38')

			

			->setCellValue('C39', '')

			

			->setCellValue('F39', '')



            ->setCellValue('G39', '')

			

			 ->setCellValue('H39', '')



            ->setCellValue('I39', '')

			

			->setCellValue('J39', '')

			

			->setCellValue('K39', '=C39+F39+G39+H39+I39+J39')

			

			->setCellValue('K40', '=K37+K38+K39')

//HEPATİT A

			->setCellValue('F42', '')



            ->setCellValue('G42', '')

			

			 ->setCellValue('H42', '')

			 

			 ->setCellValue('I42', '')

			 

			 ->setCellValue('J42', '')

			 

			  ->setCellValue('K42', '=F42+G42+H42+I42+J42')



            ->setCellValue('F43', '')

			

			 ->setCellValue('G43', '')

			 

			 ->setCellValue('H43', '')

			

			 ->setCellValue('I43', '')

			 

			 ->setCellValue('J43', '')

			 

			 ->setCellValue('K43', '=F43+G43+H43+I43+J43')



             ->setCellValue('K44', '=K42+K43')

			 

			 //SU ÇİÇEĞİ

			

			->setCellValue('F46', '')

			

			->setCellValue('G46', '')

			

			 ->setCellValue('H46', '')

			 

			 ->setCellValue('I46', '')

			 

			 ->setCellValue('J46', '')

			 

			 ->setCellValue('K46', '=F46+G46+H46+I46+J46')

			

//KIZAMIKÇIK

			->setCellValue('J48', '')

			

			->setCellValue('K48', '=J48')	

//OKUL TD

			->setCellValue('I50', '')

			

			->setCellValue('J50', '')	

			

			->setCellValue('K50', '=I50+J50')

	

//DİĞER TD

			->setCellValue('C52', '')



			->setCellValue('F52', '')

			

			->setCellValue('G52', '')

			

			 ->setCellValue('H52', '')

			 

			 ->setCellValue('I52', '')

			

			 ->setCellValue('J52', '')

			 

			 ->setCellValue('K52', '=C52+F52+G52+H52+I52+J52')

//15-49 YAŞ KADIN TD 1

			->setCellValue('C54', '')

			

			 ->setCellValue('H54', '')

			 

			 ->setCellValue('K54', '=C54+H54')

//15-49 YAŞ KADIN TD 2

			->setCellValue('C55', '')

			

			 ->setCellValue('H55', '')

			 

			 ->setCellValue('K55', '=C55+H55')

//15-49 YAŞ KADIN TD 3

			->setCellValue('C56', '')

			

			 ->setCellValue('H56', '')

			 

			 ->setCellValue('K56', '=C56+H56')

//15-49 YAŞ KADIN TD 4

			->setCellValue('C57', '')

			

			 ->setCellValue('H57', '')

			 

			 ->setCellValue('K57', '=C57+H57')

//15-49 YAŞ KADIN TD 5

			->setCellValue('C58', '')

			

			 ->setCellValue('H58', '')

			 

			 ->setCellValue('K58', '=C58+H58')

//15-49 YAŞ KADIN TD TOPLAM

			->setCellValue('C59', '=C54+C55+C56+C57+C58')

			

			 ->setCellValue('H59', '=H54+H55+H56+H57+H58')

			 

			 ->setCellValue('K59', '=C59+H59')

//DÜZENLEYEN-ONAYLAYAN			 

			->setCellValue('A65', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ))

			 

			->setCellValue('A66', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ))

			 

			->setCellValue('I65', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ))		 



			->setCellValue('I66', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ));		 





    $i++;

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



if($ilcegelen==trsuz("�l�e Se�iniz")){

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

}elseif($ocgelen=="Aile Hekimini Se�iniz"){

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

}elseif($ilcegelen!=trsuz("�l�e Se�iniz") and $ocgelen!="Aile Hekimini Se�iniz"){

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

if($tverim1==0){$tverim1=""; }else{$tverim1=$tverim1;}

if($tverim2==0){$tverim2=""; }else{$tverim2=$tverim2;}

if($tverim3==0){$tverim3=""; }else{$tverim3=$tverim3;}

if($tverim4==0){$tverim4=""; }else{$tverim4=$tverim4;}

if($tverim5==0){$tverim5=""; }else{$tverim5=$tverim5;}

if($tverim6==0){$tverim6=""; }else{$tverim6=$tverim6;}

if($tverim7==0){$tverim7=""; }else{$tverim7=$tverim7;}

if($tverim8==0){$tverim8=""; }else{$tverim8=$tverim8;}

if($tverim9==0){$tverim9=""; }else{$tverim9=$tverim9;}

if($tverim10==0){$tverim10=""; }else{$tverim10=$tverim10;}

if($tverim11==0){$tverim11=""; }else{$tverim11=$tverim11;}

if($tverim12==0){$tverim12=""; }else{$tverim12=$tverim12;}

if($tverim13==0){$tverim13=""; }else{$tverim13=$tverim13;}

if($tverim14==0){$tverim14=""; }else{$tverim14=$tverim14;}

if($tverim15==0){$tverim15=""; }else{$tverim15=$tverim15;}

if($tverim16==0){$tverim16=""; }else{$tverim16=$tverim16;}

if($tverim17==0){$tverim17=""; }else{$tverim17=$tverim17;}

if($tverim18==0){$tverim18=""; }else{$tverim18=$tverim18;}

if($tverim19==0){$tverim19=""; }else{$tverim19=$tverim19;}

if($tverim20==0){$tverim20=""; }else{$tverim20=$tverim20;}

if($tverim21==0){$tverim21=""; }else{$tverim21=$tverim21;}

if($tverim22==0){$tverim22=""; }else{$tverim22=$tverim22;}

if($tverim23==0){$tverim23=""; }else{$tverim23=$tverim23;}

if($tverim24==0){$tverim24=""; }else{$tverim24=$tverim24;}

if($tverim25==0){$tverim25=""; }else{$tverim25=$tverim25;}

if($tverim26==0){$tverim26=""; }else{$tverim26=$tverim26;}

if($tverim27==0){$tverim27=""; }else{$tverim27=$tverim27;}

if($tverim28==0){$tverim28=""; }else{$tverim28=$tverim28;}

if($tverim29==0){$tverim29=""; }else{$tverim29=$tverim29;}

if($tverim30==0){$tverim30=""; }else{$tverim30=$tverim30;}

if($tverim31==0){$tverim31=""; }else{$tverim31=$tverim31;}
if($tverim32==0){$tverim32=""; }else{$tverim32=$tverim32;}

if($tverim33==0){$tverim33=""; }else{$tverim33=$tverim33;}

if($tverim34==0){$tverim34=""; }else{$tverim34=$tverim34;}

if($tverim35==0){$tverim35=""; }else{$tverim35=$tverim35;}

if($tverim36==0){$tverim36=""; }else{$tverim36=$tverim36;}

if($tverim37==0){$tverim37=""; }else{$tverim37=$tverim37;}

if($tverim38==0){$tverim38=""; }else{$tverim38=$tverim38;}

if($tverim39==0){$tverim39=""; }else{$tverim39=$tverim39;}

if($tverim40==0){$tverim40=""; }else{$tverim40=$tverim40;}

if($tverim41==0){$tverim41=""; }else{$tverim41=$tverim41;}

if($tverim42==0){$tverim42=""; }else{$tverim42=$tverim42;}

if($tverim43==0){$tverim43=""; }else{$tverim43=$tverim43;}

if($tverim44==0){$tverim44=""; }else{$tverim44=$tverim44;}

if($tverim45==0){$tverim45=""; }else{$tverim45=$tverim45;}

if($tverim46==0){$tverim46=""; }else{$tverim46=$tverim46;}

if($tverim47==0){$tverim47=""; }else{$tverim47=$tverim47;}

if($tverim48==0){$tverim48=""; }else{$tverim48=$tverim48;}

if($tverim49==0){$tverim49=""; }else{$tverim49=$tverim49;}

if($tverim50==0){$tverim50=""; }else{$tverim50=$tverim50;}

if($tverim51==0){$tverim51=""; }else{$tverim51=$tverim51;}

if($tverim52==0){$tverim52=""; }else{$tverim52=$tverim52;}

if($tverim53==0){$tverim53=""; }else{$tverim53=$tverim53;}

if($tverim54==0){$tverim54=""; }else{$tverim54=$tverim54;}

if($tverim55==0){$tverim55=""; }else{$tverim55=$tverim55;}

if($tverim56==0){$tverim56=""; }else{$tverim56=$tverim56;}

if($tverim57==0){$tverim57=""; }else{$tverim57=$tverim57;}

if($tverim58==0){$tverim58=""; }else{$tverim58=$tverim58;}

if($tverim59==0){$tverim59=""; }else{$tverim59=$tverim59;}

if($tverim60==0){$tverim60=""; }else{$tverim60=$tverim60;}

if($tverim61==0){$tverim61=""; }else{$tverim61=$tverim61;}

if($tverim62==0){$tverim62=""; }else{$tverim62=$tverim62;}

if($tverim63==0){$tverim63=""; }else{$tverim63=$tverim63;}

if($tverim64==0){$tverim64=""; }else{$tverim64=$tverim64;}

if($tverim65==0){$tverim65=""; }else{$tverim65=$tverim65;}

if($tverim66==0){$tverim66=""; }else{$tverim66=$tverim66;}

if($tverim67==0){$tverim67=""; }else{$tverim67=$tverim67;}

if($tverim68==0){$tverim68=""; }else{$tverim68=$tverim68;}

if($tverim69==0){$tverim69=""; }else{$tverim69=$tverim69;}

if($tverim70==0){$tverim70=""; }else{$tverim70=$tverim70;}

if($tverim71==0){$tverim71=""; }else{$tverim71=$tverim71;}

if($tverim72==0){$tverim72=""; }else{$tverim72=$tverim72;}

if($tverim73==0){$tverim73=""; }else{$tverim73=$tverim73;}

if($tverim74==0){$tverim74=""; }else{$tverim74=$tverim74;}

if($tverim75==0){$tverim75=""; }else{$tverim75=$tverim75;}

if($tverim76==0){$tverim76=""; }else{$tverim76=$tverim76;}

if($tverim77==0){$tverim77=""; }else{$tverim77=$tverim77;}

if($tverim78==0){$tverim78=""; }else{$tverim78=$tverim78;}

if($tverim79==0){$tverim79=""; }else{$tverim79=$tverim79;}

if($tverim80==0){$tverim80=""; }else{$tverim80=$tverim80;}

if($tverim81==0){$tverim81=""; }else{$tverim81=$tverim81;}

if($tverim82==0){$tverim82=""; }else{$tverim82=$tverim82;}

if($tverim83==0){$tverim83=""; }else{$tverim83=$tverim83;}

if($tverim84==0){$tverim84=""; }else{$tverim84=$tverim84;}

if($tverim85==0){$tverim85=""; }else{$tverim85=$tverim85;}

if($tverim86==0){$tverim86=""; }else{$tverim86=$tverim86;}

if($tverim87==0){$tverim87=""; }else{$tverim87=$tverim87;}

if($tverim88==0){$tverim88=""; }else{$tverim88=$tverim88;}

if($tverim89==0){$tverim89=""; }else{$tverim89=$tverim89;}

if($tverim90==0){$tverim90=""; }else{$tverim90=$tverim90;}

if($tverim91==0){$tverim91=""; }else{$tverim91=$tverim91;}

if($tverim92==0){$tverim92=""; }else{$tverim92=$tverim92;}

if($tverim93==0){$tverim93=""; }else{$tverim93=$tverim93;}

if($tverim94==0){$tverim94=""; }else{$tverim94=$tverim94;}

if($tverim95==0){$tverim95=""; }else{$tverim95=$tverim95;}

if($tverim96==0){$tverim96=""; }else{$tverim96=$tverim96;}

if($tverim97==0){$tverim97=""; }else{$tverim97=$tverim97;}

if($tverim98==0){$tverim98=""; }else{$tverim98=$tverim98;}

if($tverim99==0){$tverim99=""; }else{$tverim99=$tverim99;}

if($tverim100==0){$tverim100=""; }else{$tverim100=$tverim100;}

if($tverim101==0){$tverim101=""; }else{$tverim101=$tverim101;}

if($tverim102==0){$tverim102=""; }else{$tverim102=$tverim102;}

if($tverim103==0){$tverim103=""; }else{$tverim103=$tverim103;}

if($tverim104==0){$tverim104=""; }else{$tverim104=$tverim104;}

if($tverim105==0){$tverim105=""; }else{$tverim105=$tverim105;}

if($tverim106==0){$tverim106=""; }else{$tverim106=$tverim106;}

if($tverim107==0){$tverim107=""; }else{$tverim107=$tverim107;}

if($tverim108==0){$tverim108=""; }else{$tverim108=$tverim108;}

if($tverim109==0){$tverim109=""; }else{$tverim109=$tverim109;}

if($tverim110==0){$tverim110=""; }else{$tverim110=$tverim110;}

if($tverim111==0){$tverim111=""; }else{$tverim111=$tverim111;}

if($tverim112==0){$tverim112=""; }else{$tverim112=$tverim112;}

if($tverim113==0){$tverim113=""; }else{$tverim113=$tverim113;}

if($tverim114==0){$tverim114=""; }else{$tverim114=$tverim114;}

if($tverim115==0){$tverim115=""; }else{$tverim115=$tverim115;}

if($tverim116==0){$tverim116=""; }else{$tverim116=$tverim116;}

if($tverim117==0){$tverim117=""; }else{$tverim117=$tverim117;}

if($tverim118==0){$tverim118=""; }else{$tverim118=$tverim118;}

if($tverim119==0){$tverim119=""; }else{$tverim119=$tverim119;}

if($tverim120==0){$tverim120=""; }else{$tverim120=$tverim120;}

if($tverim121==0){$tverim121=""; }else{$tverim121=$tverim121;}

if($tverim122==0){$tverim122=""; }else{$tverim122=$tverim122;}

if($tverim123==0){$tverim123=""; }else{$tverim123=$tverim123;}

if($tverim124==0){$tverim124=""; }else{$tverim124=$tverim124;}

if($tverim125==0){$tverim125=""; }else{$tverim125=$tverim125;}

if($tverim126==0){$tverim126=""; }else{$tverim126=$tverim126;}

if($tverim127==0){$tverim127=""; }else{$tverim127=$tverim127;}

if($tverim128==0){$tverim128=""; }else{$tverim128=$tverim128;}

if($tverim129==0){$tverim129=""; }else{$tverim129=$tverim129;}

if($tverim130==0){$tverim130=""; }else{$tverim130=$tverim130;}

if($tverim131==0){$tverim131=""; }else{$tverim131=$tverim131;}

if($tverim132==0){$tverim132=""; }else{$tverim132=$tverim132;}

if($tverim133==0){$tverim133=""; }else{$tverim133=$tverim133;}

if($tverim134==0){$tverim134=""; }else{$tverim134=$tverim134;}

if($tverim135==0){$tverim135=""; }else{$tverim135=$tverim135;}

if($tverim136==0){$tverim136=""; }else{$tverim136=$tverim136;}

if($tverim137==0){$tverim137=""; }else{$tverim137=$tverim137;}

if($tverim138==0){$tverim138=""; }else{$tverim138=$tverim138;}

if($tverim139==0){$tverim139=""; }else{$tverim139=$tverim139;}

if($tverim140==0){$tverim140=""; }else{$tverim140=$tverim140;}

if($tverim141==0){$tverim141=""; }else{$tverim141=$tverim141;}

if($tverim142==0){$tverim142=""; }else{$tverim142=$tverim142;}

if($tverim143==0){$tverim143=""; }else{$tverim143=$tverim143;}

if($tverim144==0){$tverim144=""; }else{$tverim144=$tverim144;}

if($tverim145==0){$tverim145=""; }else{$tverim145=$tverim145;}

if($tverim146==0){$tverim146=""; }else{$tverim146=$tverim146;}

if($tverim147==0){$tverim147=""; }else{$tverim147=$tverim147;}

if($tverim148==0){$tverim148=""; }else{$tverim148=$tverim148;}

if($tverim149==0){$tverim149=""; }else{$tverim149=$tverim149;}

if($tverim150==0){$tverim150=""; }else{$tverim150=$tverim150;}

if($tverim151==0){$tverim151=""; }else{$tverim151=$tverim151;}

if($tverim152==0){$tverim152=""; }else{$tverim152=$tverim152;}

if($tverim153==0){$tverim153=""; }else{$tverim153=$tverim153;}

if($tverim154==0){$tverim154=""; }else{$tverim154=$tverim154;}

if($tverim155==0){$tverim155=""; }else{$tverim155=$tverim155;}

if($tverim156==0){$tverim156=""; }else{$tverim156=$tverim156;}

if($tverim157==0){$tverim157=""; }else{$tverim157=$tverim157;}

if($tverim158==0){$tverim158=""; }else{$tverim158=$tverim158;}

if($tverim159==0){$tverim159=""; }else{$tverim159=$tverim159;}

if($tverim160==0){$tverim160=""; }else{$tverim160=$tverim160;}

if($tverim161==0){$tverim161=""; }else{$tverim161=$tverim161;}

if($tverim162==0){$tverim162=""; }else{$tverim162=$tverim162;}

if($tverim163==0){$tverim163=""; }else{$tverim163=$tverim163;}

if($tverim164==0){$tverim164=""; }else{$tverim164=$tverim164;}

if($tverim165==0){$tverim165=""; }else{$tverim165=$tverim165;}

if($tverim166==0){$tverim166=""; }else{$tverim166=$tverim166;}

if($tverim167==0){$tverim167=""; }else{$tverim167=$tverim167;}

if($tverim168==0){$tverim168=""; }else{$tverim168=$tverim168;}

if($tverim169==0){$tverim169=""; }else{$tverim169=$tverim169;}

if($tverim170==0){$tverim170=""; }else{$tverim170=$tverim170;}

if($tverim171==0){$tverim171=""; }else{$tverim171=$tverim171;}

if($tverim172==0){$tverim172=""; }else{$tverim172=$tverim172;}



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



if($ilcegelen==trsuz("�l�e Se�iniz")){

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



}elseif($ocgelen=="Aile Hekimini Se�iniz"){

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

}elseif($ilcegelen!=trsuz("�l�e Se�iniz") and $ocgelen!="Aile Hekimini Se�iniz"){

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



$objPHPExcel->getActiveSheet(0)->getStyle('A1:K60')->getFont()->setBold(true);

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

$objPHPExcel->getActiveSheet(0)->getStyle('A61:A62')->getAlignment()->applyFromArray(

			array(

	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,

				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,

	 			'rotation'   => 0,

	 			'wrap'	   => false

	 		)

	  );

$objPHPExcel->setActiveSheetIndex(0)->getStyle("A61:A62")->getFont()->setName('Arial')->setSize(8);

	  

$objPHPExcel->getSheet(0)->mergeCells("A61:K61");

$objPHPExcel->getSheet(0)->mergeCells("A62:K62");



$objPHPExcel->getSheet(0)->setCellValue('A61','Hepatit B aşısının 0-11 ay grubuna 1. doz uygulaması kendi bebeğiniz olup bölge dışında (hastane,resmi diğer kurumlar) yapıldı ise BD sütununa ');

$objPHPExcel->getSheet(0)->setCellValue('A62','kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.');

$objPHPExcel->getActiveSheet(0)->getStyle('A63:K66')->getFont()->setBold(true);



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

            ->setCellValue('C8',"='1'!c8+'2'!c8+'3'!c8+'4'!c8+'5'!c8+'6'!c8+'7'!c8+'8'!c8+'9'!c8+'10'!c8+'11'!c8+'12'!c8+'13'!c8+'14'!c8+'15'!c8+'16'!c8+'17'!c8+'18'!c8+'19'!c8+'20'!c8+'21'!c8+'22'!c8+'23'!c8+'24'!c8+'25'!c8+'26'!c8+'27'!c8+'28'!c8+'29'!c8+'30'!c8+'31'!c8+'32'!c8+'33'!c8+'34'!c8+'35'!c8+'36'!c8+'37'!c8")



            ->setCellValue('F8', "='1'!F8+'2'!F8+'3'!F8+'4'!F8+'5'!F8+'6'!F8+'7'!F8+'8'!F8+'9'!F8+'10'!F8+'11'!F8+'12'!F8+'13'!F8+'14'!F8+'15'!F8+'16'!F8+'17'!F8+'18'!F8+'19'!F8+'20'!F8+'21'!F8+'22'!F8+'23'!F8+'24'!F8+'25'!F8+'26'!F8+'27'!F8+'28'!F8+'29'!F8+'30'!F8+'31'!F8+'32'!F8+'33'!F8+'34'!F8+'35'!F8+'36'!F8+'37'!F8")

			

			 ->setCellValue('G8', "='1'!G8+'2'!G8+'3'!G8+'4'!G8+'5'!G8+'6'!G8+'7'!G8+'8'!G8+'9'!G8+'10'!G8+'11'!G8+'12'!G8+'13'!G8+'14'!G8+'15'!G8+'16'!G8+'17'!G8+'18'!G8+'19'!G8+'20'!G8+'21'!G8+'22'!G8+'23'!G8+'24'!G8+'25'!G8+'26'!G8+'27'!G8+'28'!G8+'29'!G8+'30'!G8+'31'!G8+'32'!G8+'33'!G8+'34'!G8+'35'!G8+'36'!G8+'37'!G8")



            ->setCellValue('H8', "='1'!H8+'2'!H8+'3'!H8+'4'!H8+'5'!H8+'6'!H8+'7'!H8+'8'!H8+'9'!H8+'10'!H8+'11'!H8+'12'!H8+'13'!H8+'14'!H8+'15'!H8+'16'!H8+'17'!H8+'18'!H8+'19'!H8+'20'!H8+'21'!H8+'22'!H8+'23'!H8+'24'!H8+'25'!H8+'26'!H8+'27'!H8+'28'!H8+'29'!H8+'30'!H8+'31'!H8+'32'!H8+'33'!H8+'34'!H8+'35'!H8+'36'!H8+'37'!H8")

			

			->setCellValue('K8', '=C8+F8+G8+H8')

			

			->setCellValue('C9', "='1'!C9+'2'!C9+'3'!C9+'4'!C9+'5'!C9+'6'!C9+'7'!C9+'8'!C9+'9'!C9+'10'!C9+'11'!C9+'12'!C9+'13'!C9+'14'!C9+'15'!C9+'16'!C9+'17'!C9+'18'!C9+'19'!C9+'20'!C9+'21'!C9+'22'!C9+'23'!C9+'24'!C9+'25'!C9+'26'!C9+'27'!C9+'28'!C9+'29'!C9+'30'!C9+'31'!C9+'32'!C9+'33'!C9+'34'!C9+'35'!C9+'36'!C9+'37'!C9")



            ->setCellValue('F9', "='1'!F9+'2'!F9+'3'!F9+'4'!F9+'5'!F9+'6'!F9+'7'!F9+'8'!F9+'9'!F9+'10'!F9+'11'!F9+'12'!F9+'13'!F9+'14'!F9+'15'!F9+'16'!F9+'17'!F9+'18'!F9+'19'!F9+'20'!F9+'21'!F9+'22'!F9+'23'!F9+'24'!F9+'25'!F9+'26'!F9+'27'!F9+'28'!F9+'29'!F9+'30'!F9+'31'!F9+'32'!F9+'33'!F9+'34'!F9+'35'!F9+'36'!F9+'37'!F9")

			

			 ->setCellValue('G9', "='1'!G9+'2'!G9+'3'!G9+'4'!G9+'5'!G9+'6'!G9+'7'!G9+'8'!G9+'9'!G9+'10'!G9+'11'!G9+'12'!G9+'13'!G9+'14'!G9+'15'!G9+'16'!G9+'17'!G9+'18'!G9+'19'!G9+'20'!G9+'21'!G9+'22'!G9+'23'!G9+'24'!G9+'25'!G9+'26'!G9+'27'!G9+'28'!G9+'29'!G9+'30'!G9+'31'!G9+'32'!G9+'33'!G9+'34'!G9+'35'!G9+'36'!G9+'37'!G9")



            ->setCellValue('H9', "='1'!H9+'2'!H9+'3'!H9+'4'!H9+'5'!H9+'6'!H9+'7'!H9+'8'!H9+'9'!H9+'10'!H9+'11'!H9+'12'!H9+'13'!H9+'14'!H9+'15'!H9+'16'!H9+'17'!H9+'18'!H9+'19'!H9+'20'!H9+'21'!H9+'22'!H9+'23'!H9+'24'!H9+'25'!H9+'26'!H9+'27'!H9+'28'!H9+'29'!H9+'30'!H9+'31'!H9+'32'!H9+'33'!H9+'34'!H9+'35'!H9+'36'!H9+'37'!H9")

			

			->setCellValue('K9', '=C9+F9+G9+H9')

			

			->setCellValue('C10', "='1'!C10+'2'!C10+'3'!C10+'4'!C10+'5'!C10+'6'!C10+'7'!C10+'8'!C10+'9'!C10+'10'!C10+'11'!C10+'12'!C10+'13'!C10+'14'!C10+'15'!C10+'16'!C10+'17'!C10+'18'!C10+'19'!C10+'20'!C10+'21'!C10+'22'!C10+'23'!C10+'24'!C10+'25'!C10+'26'!C10+'27'!C10+'28'!C10+'29'!C10+'30'!C10+'31'!C10+'32'!C10+'33'!C10+'34'!C10+'35'!C10+'36'!C10+'37'!C10")

			

            ->setCellValue('F10', "='1'!F10+'2'!F10+'3'!F10+'4'!F10+'5'!F10+'6'!F10+'7'!F10+'8'!F10+'9'!F10+'10'!F10+'11'!F10+'12'!F10+'13'!F10+'14'!F10+'15'!F10+'16'!F10+'17'!F10+'18'!F10+'19'!F10+'20'!F10+'21'!F10+'22'!F10+'23'!F10+'24'!F10+'25'!F10+'26'!F10+'27'!F10+'28'!F10+'29'!F10+'30'!F10+'31'!F10+'32'!F10+'33'!F10+'34'!F10+'35'!F10+'36'!F10+'37'!F10")

			

			 ->setCellValue('G10', "='1'!G10+'2'!G10+'3'!G10+'4'!G10+'5'!G10+'6'!G10+'7'!G10+'8'!G10+'9'!G10+'10'!G10+'11'!G10+'12'!G10+'13'!G10+'14'!G10+'15'!G10+'16'!G10+'17'!G10+'18'!G10+'19'!G10+'20'!G10+'21'!G10+'22'!G10+'23'!G10+'24'!G10+'25'!G10+'26'!G10+'27'!G10+'28'!G10+'29'!G10+'30'!G10+'31'!G10+'32'!G10+'33'!G10+'34'!G10+'35'!G10+'36'!G10+'37'!G10")



            ->setCellValue('H10', "='1'!H10+'2'!H10+'3'!H10+'4'!H10+'5'!H10+'6'!H10+'7'!H10+'8'!H10+'9'!H10+'10'!H10+'11'!H10+'12'!H10+'13'!H10+'14'!H10+'15'!H10+'16'!H10+'17'!H10+'18'!H10+'19'!H10+'20'!H10+'21'!H10+'22'!H10+'23'!H10+'24'!H10+'25'!H10+'26'!H10+'27'!H10+'28'!H10+'29'!H10+'30'!H10+'31'!H10+'32'!H10+'33'!H10+'34'!H10+'35'!H10+'36'!H10+'37'!H10")

			

			->setCellValue('K10', '=C10+F10+G10+H10')

			

			->setCellValue('F11', "='1'!F11+'2'!F11+'3'!F11+'4'!F11+'5'!F11+'6'!F11+'7'!F11+'8'!F11+'9'!F11+'10'!F11+'11'!F11+'12'!F11+'13'!F11+'14'!F11+'15'!F11+'16'!F11+'17'!F11+'18'!F11+'19'!F11+'20'!F11+'21'!F11+'22'!F11+'23'!F11+'24'!F11+'25'!F11+'26'!F11+'27'!F11+'28'!F11+'29'!F11+'30'!F11+'31'!F11+'32'!F11+'33'!F11+'34'!F11+'35'!F11+'36'!F11+'37'!F11")

			

			 ->setCellValue('G11', "='1'!G11+'2'!G11+'3'!G11+'4'!G11+'5'!G11+'6'!G11+'7'!G11+'8'!G11+'9'!G11+'10'!G11+'11'!G11+'12'!G11+'13'!G11+'14'!G11+'15'!G11+'16'!G11+'17'!G11+'18'!G11+'19'!G11+'20'!G11+'21'!G11+'22'!G11+'23'!G11+'24'!G11+'25'!G11+'26'!G11+'27'!G11+'28'!G11+'29'!G11+'30'!G11+'31'!G11+'32'!G11+'33'!G11+'34'!G11+'35'!G11+'36'!G11+'37'!G11")



            ->setCellValue('H11', "='1'!H11+'2'!H11+'3'!H11+'4'!H11+'5'!H11+'6'!H11+'7'!H11+'8'!H11+'9'!H11+'10'!H11+'11'!H11+'12'!H11+'13'!H11+'14'!H11+'15'!H11+'16'!H11+'17'!H11+'18'!H11+'19'!H11+'20'!H11+'21'!H11+'22'!H11+'23'!H11+'24'!H11+'25'!H11+'26'!H11+'27'!H11+'28'!H11+'29'!H11+'30'!H11+'31'!H11+'32'!H11+'33'!H11+'34'!H11+'35'!H11+'36'!H11+'37'!H11")

			

			->setCellValue('K11', '=F11+G11+H11')

			

			->setCellValue('K12', '=K8+K9+K10+K11')

//HİB			

			->setCellValue('H14', "='1'!H14+'2'!H14+'3'!H14+'4'!H14+'5'!H14+'6'!H14+'7'!H14+'8'!H14+'9'!H14+'10'!H14+'11'!H14+'12'!H14+'13'!H14+'14'!H14+'15'!H14+'16'!H14+'17'!H14+'18'!H14+'19'!H14+'20'!H14+'21'!H14+'22'!H14+'23'!H14+'24'!H14+'25'!H14+'26'!H14+'27'!H14+'28'!H14+'29'!H14+'30'!H14+'31'!H14+'32'!H14+'33'!H14+'34'!H14+'35'!H14+'36'!H14+'37'!H14")

			

			->setCellValue('I14', "='1'!I14+'2'!I14+'3'!I14+'4'!I14+'5'!I14+'6'!I14+'7'!I14+'8'!I14+'9'!I14+'10'!I14+'11'!I14+'12'!I14+'13'!I14+'14'!I14+'15'!I14+'16'!I14+'17'!I14+'18'!I14+'19'!I14+'20'!I14+'21'!I14+'22'!I14+'23'!I14+'24'!I14+'25'!I14+'26'!I14+'27'!I14+'28'!I14+'29'!I14+'30'!I14+'31'!I14+'32'!I14+'33'!I14+'34'!I14+'35'!I14+'36'!I14+'37'!I14")

			

			->setCellValue('K14', '=H14+I14')

//KPA

			->setCellValue('C16', "='1'!C16+'2'!C16+'3'!C16+'4'!C16+'5'!C16+'6'!C16+'7'!C16+'8'!C16+'9'!C16+'10'!C16+'11'!C16+'12'!C16+'13'!C16+'14'!C16+'15'!C16+'16'!C16+'17'!C16+'18'!C16+'19'!C16+'20'!C16+'21'!C16+'22'!C16+'23'!C16+'24'!C16+'25'!C16+'26'!C16+'27'!C16+'28'!C16+'29'!C16+'30'!C16+'31'!C16+'32'!C16+'33'!C16+'34'!C16+'35'!C16+'36'!C16+'37'!C16")



            ->setCellValue('F16', "='1'!F16+'2'!F16+'3'!F16+'4'!F16+'5'!F16+'6'!F16+'7'!F16+'8'!F16+'9'!F16+'10'!F16+'11'!F16+'12'!F16+'13'!F16+'14'!F16+'15'!F16+'16'!F16+'17'!F16+'18'!F16+'19'!F16+'20'!F16+'21'!F16+'22'!F16+'23'!F16+'24'!F16+'25'!F16+'26'!F16+'27'!F16+'28'!F16+'29'!F16+'30'!F16+'31'!F16+'32'!F16+'33'!F16+'34'!F16+'35'!F16+'36'!F16+'37'!F16")

			

			 ->setCellValue('G16', "='1'!G16+'2'!G16+'3'!G16+'4'!G16+'5'!G16+'6'!G16+'7'!G16+'8'!G16+'9'!G16+'10'!G16+'11'!G16+'12'!G16+'13'!G16+'14'!G16+'15'!G16+'16'!G16+'17'!G16+'18'!G16+'19'!G16+'20'!G16+'21'!G16+'22'!G16+'23'!G16+'24'!G16+'25'!G16+'26'!G16+'27'!G16+'28'!G16+'29'!G16+'30'!G16+'31'!G16+'32'!G16+'33'!G16+'34'!G16+'35'!G16+'36'!G16+'37'!G16")



            ->setCellValue('K16', '=C16+F16+G16')

			

			->setCellValue('C17', "='1'!C17+'2'!C17+'3'!C17+'4'!C17+'5'!C17+'6'!C17+'7'!C17+'8'!C17+'9'!C17+'10'!C17+'11'!C17+'12'!C17+'13'!C17+'14'!C17+'15'!C17+'16'!C17+'17'!C17+'18'!C17+'19'!C17+'20'!C17+'21'!C17+'22'!C17+'23'!C17+'24'!C17+'25'!C17+'26'!C17+'27'!C17+'28'!C17+'29'!C17+'30'!C17+'31'!C17+'32'!C17+'33'!C17+'34'!C17+'35'!C17+'36'!C17+'37'!C17")



            ->setCellValue('F17', "='1'!F17+'2'!F17+'3'!F17+'4'!F17+'5'!F17+'6'!F17+'7'!F17+'8'!F17+'9'!F17+'10'!F17+'11'!F17+'12'!F17+'13'!F17+'14'!F17+'15'!F17+'16'!F17+'17'!F17+'18'!F17+'19'!F17+'20'!F17+'21'!F17+'22'!F17+'23'!F17+'24'!F17+'25'!F17+'26'!F17+'27'!F17+'28'!F17+'29'!F17+'30'!F17+'31'!F17+'32'!F17+'33'!F17+'34'!F17+'35'!F17+'36'!F17+'37'!F17")

			

			 ->setCellValue('G17', "='1'!G17+'2'!G17+'3'!G17+'4'!G17+'5'!G17+'6'!G17+'7'!G17+'8'!G17+'9'!G17+'10'!G17+'11'!G17+'12'!G17+'13'!G17+'14'!G17+'15'!G17+'16'!G17+'17'!G17+'18'!G17+'19'!G17+'20'!G17+'21'!G17+'22'!G17+'23'!G17+'24'!G17+'25'!G17+'26'!G17+'27'!G17+'28'!G17+'29'!G17+'30'!G17+'31'!G17+'32'!G17+'33'!G17+'34'!G17+'35'!G17+'36'!G17+'37'!G17")



            ->setCellValue('K17', '=C17+F17+G17')

			

			->setCellValue('C18', "='1'!C18+'2'!C18+'3'!C18+'4'!C18+'5'!C18+'6'!C18+'7'!C18+'8'!C18+'9'!C18+'10'!C18+'11'!C18+'12'!C18+'13'!C18+'14'!C18+'15'!C18+'16'!C18+'17'!C18+'18'!C18+'19'!C18+'20'!C18+'21'!C18+'22'!C18+'23'!C18+'24'!C18+'25'!C18+'26'!C18+'27'!C18+'28'!C18+'29'!C18+'30'!C18+'31'!C18+'32'!C18+'33'!C18+'34'!C18+'35'!C18+'36'!C18+'37'!C18")



            ->setCellValue('F18', "='1'!F18+'2'!F18+'3'!F18+'4'!F18+'5'!F18+'6'!F18+'7'!F18+'8'!F18+'9'!F18+'10'!F18+'11'!F18+'12'!F18+'13'!F18+'14'!F18+'15'!F18+'16'!F18+'17'!F18+'18'!F18+'19'!F18+'20'!F18+'21'!F18+'22'!F18+'23'!F18+'24'!F18+'25'!F18+'26'!F18+'27'!F18+'28'!F18+'29'!F18+'30'!F18+'31'!F18+'32'!F18+'33'!F18+'34'!F18+'35'!F18+'36'!F18+'37'!F18")

			

			 ->setCellValue('G18', "='1'!G18+'2'!G18+'3'!G18+'4'!G18+'5'!G18+'6'!G18+'7'!G18+'8'!G18+'9'!G18+'10'!G18+'11'!G18+'12'!G18+'13'!G18+'14'!G18+'15'!G18+'16'!G18+'17'!G18+'18'!G18+'19'!G18+'20'!G18+'21'!G18+'22'!G18+'23'!G18+'24'!G18+'25'!G18+'26'!G18+'27'!G18+'28'!G18+'29'!G18+'30'!G18+'31'!G18+'32'!G18+'33'!G18+'34'!G18+'35'!G18+'36'!G18+'37'!G18")



            ->setCellValue('K18', '=C18+F18+G18')

			

			->setCellValue('F19', "='1'!F19+'2'!F19+'3'!F19+'4'!F19+'5'!F19+'6'!F19+'7'!F19+'8'!F19+'9'!F19+'10'!F19+'11'!F19+'12'!F19+'13'!F19+'14'!F19+'15'!F19+'16'!F19+'17'!F19+'18'!F19+'19'!F19+'20'!F19+'21'!F19+'22'!F19+'23'!F19+'24'!F19+'25'!F19+'26'!F19+'27'!F19+'28'!F19+'29'!F19+'30'!F19+'31'!F19+'32'!F19+'33'!F19+'34'!F19+'35'!F19+'36'!F19+'37'!F19")

			

			 ->setCellValue('G19', "='1'!G19+'2'!G19+'3'!G19+'4'!G19+'5'!G19+'6'!G19+'7'!G19+'8'!G19+'9'!G19+'10'!G19+'11'!G19+'12'!G19+'13'!G19+'14'!G19+'15'!G19+'16'!G19+'17'!G19+'18'!G19+'19'!G19+'20'!G19+'21'!G19+'22'!G19+'23'!G19+'24'!G19+'25'!G19+'26'!G19+'27'!G19+'28'!G19+'29'!G19+'30'!G19+'31'!G19+'32'!G19+'33'!G19+'34'!G19+'35'!G19+'36'!G19+'37'!G19")



            ->setCellValue('K19', '=F19+G19')

			

			->setCellValue('K20', '=K16+K17+K18+K19')

//POLİO

			->setCellValue('C22', "='1'!C22+'2'!C22+'3'!C22+'4'!C22+'5'!C22+'6'!C22+'7'!C22+'8'!C22+'9'!C22+'10'!C22+'11'!C22+'12'!C22+'13'!C22+'14'!C22+'15'!C22+'16'!C22+'17'!C22+'18'!C22+'19'!C22+'20'!C22+'21'!C22+'22'!C22+'23'!C22+'24'!C22+'25'!C22+'26'!C22+'27'!C22+'28'!C22+'29'!C22+'30'!C22+'31'!C22+'32'!C22+'33'!C22+'34'!C22+'35'!C22+'36'!C22+'37'!C22")



            ->setCellValue('F22', "='1'!F22+'2'!F22+'3'!F22+'4'!F22+'5'!F22+'6'!F22+'7'!F22+'8'!F22+'9'!F22+'10'!F22+'11'!F22+'12'!F22+'13'!F22+'14'!F22+'15'!F22+'16'!F22+'17'!F22+'18'!F22+'19'!F22+'20'!F22+'21'!F22+'22'!F22+'23'!F22+'24'!F22+'25'!F22+'26'!F22+'27'!F22+'28'!F22+'29'!F22+'30'!F22+'31'!F22+'32'!F22+'33'!F22+'34'!F22+'35'!F22+'36'!F22+'37'!F22")

			

			 ->setCellValue('G22', "='1'!G22+'2'!G22+'3'!G22+'4'!G22+'5'!G22+'6'!G22+'7'!G22+'8'!G22+'9'!G22+'10'!G22+'11'!G22+'12'!G22+'13'!G22+'14'!G22+'15'!G22+'16'!G22+'17'!G22+'18'!G22+'19'!G22+'20'!G22+'21'!G22+'22'!G22+'23'!G22+'24'!G22+'25'!G22+'26'!G22+'27'!G22+'28'!G22+'29'!G22+'30'!G22+'31'!G22+'32'!G22+'33'!G22+'34'!G22+'35'!G22+'36'!G22+'37'!G22")

			 

			 ->setCellValue('H22', "='1'!H22+'2'!H22+'3'!H22+'4'!H22+'5'!H22+'6'!H22+'7'!H22+'8'!H22+'9'!H22+'10'!H22+'11'!H22+'12'!H22+'13'!H22+'14'!H22+'15'!H22+'16'!H22+'17'!H22+'18'!H22+'19'!H22+'20'!H22+'21'!H22+'22'!H22+'23'!H22+'24'!H22+'25'!H22+'26'!H22+'27'!H22+'28'!H22+'29'!H22+'30'!H22+'31'!H22+'32'!H22+'33'!H22+'34'!H22+'35'!H22+'36'!H22+'37'!H22")

			 

			 ->setCellValue('I22', "='1'!I22+'2'!I22+'3'!I22+'4'!I22+'5'!I22+'6'!I22+'7'!I22+'8'!I22+'9'!I22+'10'!I22+'11'!I22+'12'!I22+'13'!I22+'14'!I22+'15'!I22+'16'!I22+'17'!I22+'18'!I22+'19'!I22+'20'!I22+'21'!I22+'22'!I22+'23'!I22+'24'!I22+'25'!I22+'26'!I22+'27'!I22+'28'!I22+'29'!I22+'30'!I22+'31'!I22+'32'!I22+'33'!I22+'34'!I22+'35'!I22+'36'!I22+'37'!I22")

			 

			  ->setCellValue('J22', "='1'!J22+'2'!J22+'3'!J22+'4'!J22+'5'!J22+'6'!J22+'7'!J22+'8'!J22+'9'!J22+'10'!J22+'11'!J22+'12'!J22+'13'!J22+'14'!J22+'15'!J22+'16'!J22+'17'!J22+'18'!J22+'19'!J22+'20'!J22+'21'!J22+'22'!J22+'23'!J22+'24'!J22+'25'!J22+'26'!J22+'27'!J22+'28'!J22+'29'!J22+'30'!J22+'31'!J22+'32'!J22+'33'!J22+'34'!J22+'35'!J22+'36'!J22+'37'!J22")



            ->setCellValue('K22', '=C22+F22+G22+H22+I22+J22')

			

			->setCellValue('F23', "='1'!F23+'2'!F23+'3'!F23+'4'!F23+'5'!F23+'6'!F23+'7'!F23+'8'!F23+'9'!F23+'10'!F23+'11'!F23+'12'!F23+'13'!F23+'14'!F23+'15'!F23+'16'!F23+'17'!F23+'18'!F23+'19'!F23+'20'!F23+'21'!F23+'22'!F23+'23'!F23+'24'!F23+'25'!F23+'26'!F23+'27'!F23+'28'!F23+'29'!F23+'30'!F23+'31'!F23+'32'!F23+'33'!F23+'34'!F23+'35'!F23+'36'!F23+'37'!F23")

			

			 ->setCellValue('G23', "='1'!G23+'2'!G23+'3'!G23+'4'!G23+'5'!G23+'6'!G23+'7'!G23+'8'!G23+'9'!G23+'10'!G23+'11'!G23+'12'!G23+'13'!G23+'14'!G23+'15'!G23+'16'!G23+'17'!G23+'18'!G23+'19'!G23+'20'!G23+'21'!G23+'22'!G23+'23'!G23+'24'!G23+'25'!G23+'26'!G23+'27'!G23+'28'!G23+'29'!G23+'30'!G23+'31'!G23+'32'!G23+'33'!G23+'34'!G23+'35'!G23+'36'!G23+'37'!G23")

			 

			 ->setCellValue('H23', "='1'!H23+'2'!H23+'3'!H23+'4'!H23+'5'!H23+'6'!H23+'7'!H23+'8'!H23+'9'!H23+'10'!H23+'11'!H23+'12'!H23+'13'!H23+'14'!H23+'15'!H23+'16'!H23+'17'!H23+'18'!H23+'19'!H23+'20'!H23+'21'!H23+'22'!H23+'23'!H23+'24'!H23+'25'!H23+'26'!H23+'27'!H23+'28'!H23+'29'!H23+'30'!H23+'31'!H23+'32'!H23+'33'!H23+'34'!H23+'35'!H23+'36'!H23+'37'!H23")

			

			 ->setCellValue('I23', "='1'!I23+'2'!I23+'3'!I23+'4'!I23+'5'!I23+'6'!I23+'7'!I23+'8'!I23+'9'!I23+'10'!I23+'11'!I23+'12'!I23+'13'!I23+'14'!I23+'15'!I23+'16'!I23+'17'!I23+'18'!I23+'19'!I23+'20'!I23+'21'!I23+'22'!I23+'23'!I23+'24'!I23+'25'!I23+'26'!I23+'27'!I23+'28'!I23+'29'!I23+'30'!I23+'31'!I23+'32'!I23+'33'!I23+'34'!I23+'35'!I23+'36'!I23+'37'!I23")

			 

			  ->setCellValue('J23', "='1'!J23+'2'!J23+'3'!J23+'4'!J23+'5'!J23+'6'!J23+'7'!J23+'8'!J23+'9'!J23+'10'!J23+'11'!J23+'12'!J23+'13'!J23+'14'!J23+'15'!J23+'16'!J23+'17'!J23+'18'!J23+'19'!J23+'20'!J23+'21'!J23+'22'!J23+'23'!J23+'24'!J23+'25'!J23+'26'!J23+'27'!J23+'28'!J23+'29'!J23+'30'!J23+'31'!J23+'32'!J23+'33'!J23+'34'!J23+'35'!J23+'36'!J23+'37'!J23")



            ->setCellValue('K23', '=F23+G23+H23+I23+J23')

			

			->setCellValue('K24', '0')

			

			->setCellValue('K25', '0')

			

			->setCellValue('K26', '=K22+K23')

//KKK

			->setCellValue('F28', "='1'!F28+'2'!F28+'3'!F28+'4'!F28+'5'!F28+'6'!F28+'7'!F28+'8'!F28+'9'!F28+'10'!F28+'11'!F28+'12'!F28+'13'!F28+'14'!F28+'15'!F28+'16'!F28+'17'!F28+'18'!F28+'19'!F28+'20'!F28+'21'!F28+'22'!F28+'23'!F28+'24'!F28+'25'!F28+'26'!F28+'27'!F28+'28'!F28+'29'!F28+'30'!F28+'31'!F28+'32'!F28+'33'!F28+'34'!F28+'35'!F28+'36'!F28+'37'!F28")



            ->setCellValue('G28', "='1'!G28+'2'!G28+'3'!G28+'4'!G28+'5'!G28+'6'!G28+'7'!G28+'8'!G28+'9'!G28+'10'!G28+'11'!G28+'12'!G28+'13'!G28+'14'!G28+'15'!G28+'16'!G28+'17'!G28+'18'!G28+'19'!G28+'20'!G28+'21'!G28+'22'!G28+'23'!G28+'24'!G28+'25'!G28+'26'!G28+'27'!G28+'28'!G28+'29'!G28+'30'!G28+'31'!G28+'32'!G28+'33'!G28+'34'!G28+'35'!G28+'36'!G28+'37'!G28")

			

			 ->setCellValue('H28', "='1'!H28+'2'!H28+'3'!H28+'4'!H28+'5'!H28+'6'!H28+'7'!H28+'8'!H28+'9'!H28+'10'!H28+'11'!H28+'12'!H28+'13'!H28+'14'!H28+'15'!H28+'16'!H28+'17'!H28+'18'!H28+'19'!H28+'20'!H28+'21'!H28+'22'!H28+'23'!H28+'24'!H28+'25'!H28+'26'!H28+'27'!H28+'28'!H28+'29'!H28+'30'!H28+'31'!H28+'32'!H28+'33'!H28+'34'!H28+'35'!H28+'36'!H28+'37'!H28")

			 

			 ->setCellValue('I28', "='1'!I28+'2'!I28+'3'!I28+'4'!I28+'5'!I28+'6'!I28+'7'!I28+'8'!I28+'9'!I28+'10'!I28+'11'!I28+'12'!I28+'13'!I28+'14'!I28+'15'!I28+'16'!I28+'17'!I28+'18'!I28+'19'!I28+'20'!I28+'21'!I28+'22'!I28+'23'!I28+'24'!I28+'25'!I28+'26'!I28+'27'!I28+'28'!I28+'29'!I28+'30'!I28+'31'!I28+'32'!I28+'33'!I28+'34'!I28+'35'!I28+'36'!I28+'37'!I28")

			 

			 ->setCellValue('J28', "='1'!J28+'2'!J28+'3'!J28+'4'!J28+'5'!J28+'6'!J28+'7'!J28+'8'!J28+'9'!J28+'10'!J28+'11'!J28+'12'!J28+'13'!J28+'14'!J28+'15'!J28+'16'!J28+'17'!J28+'18'!J28+'19'!J28+'20'!J28+'21'!J28+'22'!J28+'23'!J28+'24'!J28+'25'!J28+'26'!J28+'27'!J28+'28'!J28+'29'!J28+'30'!J28+'31'!J28+'32'!J28+'33'!J28+'34'!J28+'35'!J28+'36'!J28+'37'!J28")

			 

			  ->setCellValue('K28', '=F28+G28+H28+I28+J28')



            ->setCellValue('F29', "='1'!F29+'2'!F29+'3'!F29+'4'!F29+'5'!F29+'6'!F29+'7'!F29+'8'!F29+'9'!F29+'10'!F29+'11'!F29+'12'!F29+'13'!F29+'14'!F29+'15'!F29+'16'!F29+'17'!F29+'18'!F29+'19'!F29+'20'!F29+'21'!F29+'22'!F29+'23'!F29+'24'!F29+'25'!F29+'26'!F29+'27'!F29+'28'!F29+'29'!F29+'30'!F29+'31'!F29+'32'!F29+'33'!F29+'34'!F29+'35'!F29+'36'!F29+'37'!F29")

			

			->setCellValue('G29', "='1'!G29+'2'!G29+'3'!G29+'4'!G29+'5'!G29+'6'!G29+'7'!G29+'8'!G29+'9'!G29+'10'!G29+'11'!G29+'12'!G29+'13'!G29+'14'!G29+'15'!G29+'16'!G29+'17'!G29+'18'!G29+'19'!G29+'20'!G29+'21'!G29+'22'!G29+'23'!G29+'24'!G29+'25'!G29+'26'!G29+'27'!G29+'28'!G29+'29'!G29+'30'!G29+'31'!G29+'32'!G29+'33'!G29+'34'!G29+'35'!G29+'36'!G29+'37'!G29")

			

			 ->setCellValue('H29', "='1'!H29+'2'!H29+'3'!H29+'4'!H29+'5'!H29+'6'!H29+'7'!H29+'8'!H29+'9'!H29+'10'!H29+'11'!H29+'12'!H29+'13'!H29+'14'!H29+'15'!H29+'16'!H29+'17'!H29+'18'!H29+'19'!H29+'20'!H29+'21'!H29+'22'!H29+'23'!H29+'24'!H29+'25'!H29+'26'!H29+'27'!H29+'28'!H29+'29'!H29+'30'!H29+'31'!H29+'32'!H29+'33'!H29+'34'!H29+'35'!H29+'36'!H29+'37'!H29")

			 

			 ->setCellValue('I29', "='1'!I29+'2'!I29+'3'!I29+'4'!I29+'5'!I29+'6'!I29+'7'!I29+'8'!I29+'9'!I29+'10'!I29+'11'!I29+'12'!I29+'13'!I29+'14'!I29+'15'!I29+'16'!I29+'17'!I29+'18'!I29+'19'!I29+'20'!I29+'21'!I29+'22'!I29+'23'!I29+'24'!I29+'25'!I29+'26'!I29+'27'!I29+'28'!I29+'29'!I29+'30'!I29+'31'!I29+'32'!I29+'33'!I29+'34'!I29+'35'!I29+'36'!I29+'37'!I29")

			

			 ->setCellValue('J29', "='1'!J29+'2'!J29+'3'!J29+'4'!J29+'5'!J29+'6'!J29+'7'!J29+'8'!J29+'9'!J29+'10'!J29+'11'!J29+'12'!J29+'13'!J29+'14'!J29+'15'!J29+'16'!J29+'17'!J29+'18'!J29+'19'!J29+'20'!J29+'21'!J29+'22'!J29+'23'!J29+'24'!J29+'25'!J29+'26'!J29+'27'!J29+'28'!J29+'29'!J29+'30'!J29+'31'!J29+'32'!J29+'33'!J29+'34'!J29+'35'!J29+'36'!J29+'37'!J29")

			 

			 ->setCellValue('K29', '=F29+G29+H29+I29+J29')



             ->setCellValue('K30', '=K28+K29')

//PPD

			->setCellValue('C32', "='1'!C32+'2'!C32+'3'!C32+'4'!C32+'5'!C32+'6'!C32+'7'!C32+'8'!C32+'9'!C32+'10'!C32+'11'!C32+'12'!C32+'13'!C32+'14'!C32+'15'!C32+'16'!C32+'17'!C32+'18'!C32+'19'!C32+'20'!C32+'21'!C32+'22'!C32+'23'!C32+'24'!C32+'25'!C32+'26'!C32+'27'!C32+'28'!C32+'29'!C32+'30'!C32+'31'!C32+'32'!C32+'33'!C32+'34'!C32+'35'!C32+'36'!C32+'37'!C32")



			->setCellValue('F32', "='1'!F32+'2'!F32+'3'!F32+'4'!F32+'5'!F32+'6'!F32+'7'!F32+'8'!F32+'9'!F32+'10'!F32+'11'!F32+'12'!F32+'13'!F32+'14'!F32+'15'!F32+'16'!F32+'17'!F32+'18'!F32+'19'!F32+'20'!F32+'21'!F32+'22'!F32+'23'!F32+'24'!F32+'25'!F32+'26'!F32+'27'!F32+'28'!F32+'29'!F32+'30'!F32+'31'!F32+'32'!F32+'33'!F32+'34'!F32+'35'!F32+'36'!F32+'37'!F32")

			

			->setCellValue('G32', "='1'!G32+'2'!G32+'3'!G32+'4'!G32+'5'!G32+'6'!G32+'7'!G32+'8'!G32+'9'!G32+'10'!G32+'11'!G32+'12'!G32+'13'!G32+'14'!G32+'15'!G32+'16'!G32+'17'!G32+'18'!G32+'19'!G32+'20'!G32+'21'!G32+'22'!G32+'23'!G32+'24'!G32+'25'!G32+'26'!G32+'27'!G32+'28'!G32+'29'!G32+'30'!G32+'31'!G32+'32'!G32+'33'!G32+'34'!G32+'35'!G32+'36'!G32+'37'!G32")

			

			 ->setCellValue('H32', "='1'!H32+'2'!H32+'3'!H32+'4'!H32+'5'!H32+'6'!H32+'7'!H32+'8'!H32+'9'!H32+'10'!H32+'11'!H32+'12'!H32+'13'!H32+'14'!H32+'15'!H32+'16'!H32+'17'!H32+'18'!H32+'19'!H32+'20'!H32+'21'!H32+'22'!H32+'23'!H32+'24'!H32+'25'!H32+'26'!H32+'27'!H32+'28'!H32+'29'!H32+'30'!H32+'31'!H32+'32'!H32+'33'!H32+'34'!H32+'35'!H32+'36'!H32+'37'!H32")

			 

			 ->setCellValue('I32', "='1'!I32+'2'!I32+'3'!I32+'4'!I32+'5'!I32+'6'!I32+'7'!I32+'8'!I32+'9'!I32+'10'!I32+'11'!I32+'12'!I32+'13'!I32+'14'!I32+'15'!I32+'16'!I32+'17'!I32+'18'!I32+'19'!I32+'20'!I32+'21'!I32+'22'!I32+'23'!I32+'24'!I32+'25'!I32+'26'!I32+'27'!I32+'28'!I32+'29'!I32+'30'!I32+'31'!I32+'32'!I32+'33'!I32+'34'!I32+'35'!I32+'36'!I32+'37'!I32")

			 			

			 ->setCellValue('J32', "='1'!J32+'2'!J32+'3'!J32+'4'!J32+'5'!J32+'6'!J32+'7'!J32+'8'!J32+'9'!J32+'10'!J32+'11'!J32+'12'!J32+'13'!J32+'14'!J32+'15'!J32+'16'!J32+'17'!J32+'18'!J32+'19'!J32+'20'!J32+'21'!J32+'22'!J32+'23'!J32+'24'!J32+'25'!J32+'26'!J32+'27'!J32+'28'!J32+'29'!J32+'30'!J32+'31'!J32+'32'!J32+'33'!J32+'34'!J32+'35'!J32+'36'!J32+'37'!J32")

			 

			 ->setCellValue('K32', '=C32+F32+G32+H32+I32+J32')

//BCG

			->setCellValue('C34', "='1'!C34+'2'!C34+'3'!C34+'4'!C34+'5'!C34+'6'!C34+'7'!C34+'8'!C34+'9'!C34+'10'!C34+'11'!C34+'12'!C34+'13'!C34+'14'!C34+'15'!C34+'16'!C34+'17'!C34+'18'!C34+'19'!C34+'20'!C34+'21'!C34+'22'!C34+'23'!C34+'24'!C34+'25'!C34+'26'!C34+'27'!C34+'28'!C34+'29'!C34+'30'!C34+'31'!C34+'32'!C34+'33'!C34+'34'!C34+'35'!C34+'36'!C34+'37'!C34")



			->setCellValue('F34', "='1'!F34+'2'!F34+'3'!F34+'4'!F34+'5'!F34+'6'!F34+'7'!F34+'8'!F34+'9'!F34+'10'!F34+'11'!F34+'12'!F34+'13'!F34+'14'!F34+'15'!F34+'16'!F34+'17'!F34+'18'!F34+'19'!F34+'20'!F34+'21'!F34+'22'!F34+'23'!F34+'24'!F34+'25'!F34+'26'!F34+'27'!F34+'28'!F34+'29'!F34+'30'!F34+'31'!F34+'32'!F34+'33'!F34+'34'!F34+'35'!F34+'36'!F34+'37'!F34")

			

			->setCellValue('G34', "='1'!G34+'2'!G34+'3'!G34+'4'!G34+'5'!G34+'6'!G34+'7'!G34+'8'!G34+'9'!G34+'10'!G34+'11'!G34+'12'!G34+'13'!G34+'14'!G34+'15'!G34+'16'!G34+'17'!G34+'18'!G34+'19'!G34+'20'!G34+'21'!G34+'22'!G34+'23'!G34+'24'!G34+'25'!G34+'26'!G34+'27'!G34+'28'!G34+'29'!G34+'30'!G34+'31'!G34+'32'!G34+'33'!G34+'34'!G34+'35'!G34+'36'!G34+'37'!G34")

			

			 ->setCellValue('H34', "='1'!H34+'2'!H34+'3'!H34+'4'!H34+'5'!H34+'6'!H34+'7'!H34+'8'!H34+'9'!H34+'10'!H34+'11'!H34+'12'!H34+'13'!H34+'14'!H34+'15'!H34+'16'!H34+'17'!H34+'18'!H34+'19'!H34+'20'!H34+'21'!H34+'22'!H34+'23'!H34+'24'!H34+'25'!H34+'26'!H34+'27'!H34+'28'!H34+'29'!H34+'30'!H34+'31'!H34+'32'!H34+'33'!H34+'34'!H34+'35'!H34+'36'!H34+'37'!H34")

			 

			 ->setCellValue('K34', '=C34+F34+G34+H34')

//HEPATİT-B

			 ->setCellValue('C37', "='1'!C37+'2'!C37+'3'!C37+'4'!C37+'5'!C37+'6'!C37+'7'!C37+'8'!C37+'9'!C37+'10'!C37+'11'!C37+'12'!C37+'13'!C37+'14'!C37+'15'!C37+'16'!C37+'17'!C37+'18'!C37+'19'!C37+'20'!C37+'21'!C37+'22'!C37+'23'!C37+'24'!C37+'25'!C37+'26'!C37+'27'!C37+'28'!C37+'29'!C37+'30'!C37+'31'!C37+'32'!C37+'33'!C37+'34'!C37+'35'!C37+'36'!C37+'37'!C37")



            ->setCellValue('D37', "='1'!D37+'2'!D37+'3'!D37+'4'!D37+'5'!D37+'6'!D37+'7'!D37+'8'!D37+'9'!D37+'10'!D37+'11'!D37+'12'!D37+'13'!D37+'14'!D37+'15'!D37+'16'!D37+'17'!D37+'18'!D37+'19'!D37+'20'!D37+'21'!D37+'22'!D37+'23'!D37+'24'!D37+'25'!D37+'26'!D37+'27'!D37+'28'!D37+'29'!D37+'30'!D37+'31'!D37+'32'!D37+'33'!D37+'34'!D37+'35'!D37+'36'!D37+'37'!D37")

			

			 ->setCellValue('E37', '=C37+D37')



            ->setCellValue('F37', "='1'!F37+'2'!F37+'3'!F37+'4'!F37+'5'!F37+'6'!F37+'7'!F37+'8'!F37+'9'!F37+'10'!F37+'11'!F37+'12'!F37+'13'!F37+'14'!F37+'15'!F37+'16'!F37+'17'!F37+'18'!F37+'19'!F37+'20'!F37+'21'!F37+'22'!F37+'23'!F37+'24'!F37+'25'!F37+'26'!F37+'27'!F37+'28'!F37+'29'!F37+'30'!F37+'31'!F37+'32'!F37+'33'!F37+'34'!F37+'35'!F37+'36'!F37+'37'!F37")

			

			->setCellValue('G37', "='1'!G37+'2'!G37+'3'!G37+'4'!G37+'5'!G37+'6'!G37+'7'!G37+'8'!G37+'9'!G37+'10'!G37+'11'!G37+'12'!G37+'13'!G37+'14'!G37+'15'!G37+'16'!G37+'17'!G37+'18'!G37+'19'!G37+'20'!G37+'21'!G37+'22'!G37+'23'!G37+'24'!G37+'25'!G37+'26'!G37+'27'!G37+'28'!G37+'29'!G37+'30'!G37+'31'!G37+'32'!G37+'33'!G37+'34'!G37+'35'!G37+'36'!G37+'37'!G37")

			

			->setCellValue('H37', "='1'!H37+'2'!H37+'3'!H37+'4'!H37+'5'!H37+'6'!H37+'7'!H37+'8'!H37+'9'!H37+'10'!H37+'11'!H37+'12'!H37+'13'!H37+'14'!H37+'15'!H37+'16'!H37+'17'!H37+'18'!H37+'19'!H37+'20'!H37+'21'!H37+'22'!H37+'23'!H37+'24'!H37+'25'!H37+'26'!H37+'27'!H37+'28'!H37+'29'!H37+'30'!H37+'31'!H37+'32'!H37+'33'!H37+'34'!H37+'35'!H37+'36'!H37+'37'!H37")



            ->setCellValue('I37', "='1'!I37+'2'!I37+'3'!I37+'4'!I37+'5'!I37+'6'!I37+'7'!I37+'8'!I37+'9'!I37+'10'!I37+'11'!I37+'12'!I37+'13'!I37+'14'!I37+'15'!I37+'16'!I37+'17'!I37+'18'!I37+'19'!I37+'20'!I37+'21'!I37+'22'!I37+'23'!I37+'24'!I37+'25'!I37+'26'!I37+'27'!I37+'28'!I37+'29'!I37+'30'!I37+'31'!I37+'32'!I37+'33'!I37+'34'!I37+'35'!I37+'36'!I37+'37'!I37")

			

			 ->setCellValue('J37', "='1'!J37+'2'!J37+'3'!J37+'4'!J37+'5'!J37+'6'!J37+'7'!J37+'8'!J37+'9'!J37+'10'!J37+'11'!J37+'12'!J37+'13'!J37+'14'!J37+'15'!J37+'16'!J37+'17'!J37+'18'!J37+'19'!J37+'20'!J37+'21'!J37+'22'!J37+'23'!J37+'24'!J37+'25'!J37+'26'!J37+'27'!J37+'28'!J37+'29'!J37+'30'!J37+'31'!J37+'32'!J37+'33'!J37+'34'!J37+'35'!J37+'36'!J37+'37'!J37")



            ->setCellValue('K37', '=E37+F37+G37+H37+I37+J37')

			

			->setCellValue('C38', "='1'!C38+'2'!C38+'3'!C38+'4'!C38+'5'!C38+'6'!C38+'7'!C38+'8'!C38+'9'!C38+'10'!C38+'11'!C38+'12'!C38+'13'!C38+'14'!C38+'15'!C38+'16'!C38+'17'!C38+'18'!C38+'19'!C38+'20'!C38+'21'!C38+'22'!C38+'23'!C38+'24'!C38+'25'!C38+'26'!C38+'27'!C38+'28'!C38+'29'!C38+'30'!C38+'31'!C38+'32'!C38+'33'!C38+'34'!C38+'35'!C38+'36'!C38+'37'!C38")

			

			->setCellValue('F38', "='1'!F38+'2'!F38+'3'!F38+'4'!F38+'5'!F38+'6'!F38+'7'!F38+'8'!F38+'9'!F38+'10'!F38+'11'!F38+'12'!F38+'13'!F38+'14'!F38+'15'!F38+'16'!F38+'17'!F38+'18'!F38+'19'!F38+'20'!F38+'21'!F38+'22'!F38+'23'!F38+'24'!F38+'25'!F38+'26'!F38+'27'!F38+'28'!F38+'29'!F38+'30'!F38+'31'!F38+'32'!F38+'33'!F38+'34'!F38+'35'!F38+'36'!F38+'37'!F38")



            ->setCellValue('G38', "='1'!G38+'2'!G38+'3'!G38+'4'!G38+'5'!G38+'6'!G38+'7'!G38+'8'!G38+'9'!G38+'10'!G38+'11'!G38+'12'!G38+'13'!G38+'14'!G38+'15'!G38+'16'!G38+'17'!G38+'18'!G38+'19'!G38+'20'!G38+'21'!G38+'22'!G38+'23'!G38+'24'!G38+'25'!G38+'26'!G38+'27'!G38+'28'!G38+'29'!G38+'30'!G38+'31'!G38+'32'!G38+'33'!G38+'34'!G38+'35'!G38+'36'!G38+'37'!G38")

			

			 ->setCellValue('H38', "='1'!H38+'2'!H38+'3'!H38+'4'!H38+'5'!H38+'6'!H38+'7'!H38+'8'!H38+'9'!H38+'10'!H38+'11'!H38+'12'!H38+'13'!H38+'14'!H38+'15'!H38+'16'!H38+'17'!H38+'18'!H38+'19'!H38+'20'!H38+'21'!H38+'22'!H38+'23'!H38+'24'!H38+'25'!H38+'26'!H38+'27'!H38+'28'!H38+'29'!H38+'30'!H38+'31'!H38+'32'!H38+'33'!H38+'34'!H38+'35'!H38+'36'!H38+'37'!H38")



            ->setCellValue('I38', "='1'!I38+'2'!I38+'3'!I38+'4'!I38+'5'!I38+'6'!I38+'7'!I38+'8'!I38+'9'!I38+'10'!I38+'11'!I38+'12'!I38+'13'!I38+'14'!I38+'15'!I38+'16'!I38+'17'!I38+'18'!I38+'19'!I38+'20'!I38+'21'!I38+'22'!I38+'23'!I38+'24'!I38+'25'!I38+'26'!I38+'27'!I38+'28'!I38+'29'!I38+'30'!I38+'31'!I38+'32'!I38+'33'!I38+'34'!I38+'35'!I38+'36'!I38+'37'!I38")

			

			->setCellValue('J38', "='1'!J38+'2'!J38+'3'!J38+'4'!J38+'5'!J38+'6'!J38+'7'!J38+'8'!J38+'9'!J38+'10'!J38+'11'!J38+'12'!J38+'13'!J38+'14'!J38+'15'!J38+'16'!J38+'17'!J38+'18'!J38+'19'!J38+'20'!J38+'21'!J38+'22'!J38+'23'!J38+'24'!J38+'25'!J38+'26'!J38+'27'!J38+'28'!J38+'29'!J38+'30'!J38+'31'!J38+'32'!J38+'33'!J38+'34'!J38+'35'!J38+'36'!J38+'37'!J38")

			

			->setCellValue('K38', '=C38+F38+G38+H38+I38+J38')

			

			->setCellValue('C39', "='1'!C39+'2'!C39+'3'!C39+'4'!C39+'5'!C39+'6'!C39+'7'!C39+'8'!C39+'9'!C39+'10'!C39+'11'!C39+'12'!C39+'13'!C39+'14'!C39+'15'!C39+'16'!C39+'17'!C39+'18'!C39+'19'!C39+'20'!C39+'21'!C39+'22'!C39+'23'!C39+'24'!C39+'25'!C39+'26'!C39+'27'!C39+'28'!C39+'29'!C39+'30'!C39+'31'!C39+'32'!C39+'33'!C39+'34'!C39+'35'!C39+'36'!C39+'37'!C39")

			

			->setCellValue('F39', "='1'!F39+'2'!F39+'3'!F39+'4'!F39+'5'!F39+'6'!F39+'7'!F39+'8'!F39+'9'!F39+'10'!F39+'11'!F39+'12'!F39+'13'!F39+'14'!F39+'15'!F39+'16'!F39+'17'!F39+'18'!F39+'19'!F39+'20'!F39+'21'!F39+'22'!F39+'23'!F39+'24'!F39+'25'!F39+'26'!F39+'27'!F39+'28'!F39+'29'!F39+'30'!F39+'31'!F39+'32'!F39+'33'!F39+'34'!F39+'35'!F39+'36'!F39+'37'!F39")



            ->setCellValue('G39', "='1'!G39+'2'!G39+'3'!G39+'4'!G39+'5'!G39+'6'!G39+'7'!G39+'8'!G39+'9'!G39+'10'!G39+'11'!G39+'12'!G39+'13'!G39+'14'!G39+'15'!G39+'16'!G39+'17'!G39+'18'!G39+'19'!G39+'20'!G39+'21'!G39+'22'!G39+'23'!G39+'24'!G39+'25'!G39+'26'!G39+'27'!G39+'28'!G39+'29'!G39+'30'!G39+'31'!G39+'32'!G39+'33'!G39+'34'!G39+'35'!G39+'36'!G39+'37'!G39")

			

			 ->setCellValue('H39', "='1'!H39+'2'!H39+'3'!H39+'4'!H39+'5'!H39+'6'!H39+'7'!H39+'8'!H39+'9'!H39+'10'!H39+'11'!H39+'12'!H39+'13'!H39+'14'!H39+'15'!H39+'16'!H39+'17'!H39+'18'!H39+'19'!H39+'20'!H39+'21'!H39+'22'!H39+'23'!H39+'24'!H39+'25'!H39+'26'!H39+'27'!H39+'28'!H39+'29'!H39+'30'!H39+'31'!H39+'32'!H39+'33'!H39+'34'!H39+'35'!H39+'36'!H39+'37'!H39")



            ->setCellValue('I39', "='1'!I39+'2'!I39+'3'!I39+'4'!I39+'5'!I39+'6'!I39+'7'!I39+'8'!I39+'9'!I39+'10'!I39+'11'!I39+'12'!I39+'13'!I39+'14'!I39+'15'!I39+'16'!I39+'17'!I39+'18'!I39+'19'!I39+'20'!I39+'21'!I39+'22'!I39+'23'!I39+'24'!I39+'25'!I39+'26'!I39+'27'!I39+'28'!I39+'29'!I39+'30'!I39+'31'!I39+'32'!I39+'33'!I39+'34'!I39+'35'!I39+'36'!I39+'37'!I39")

			

			->setCellValue('J39', "='1'!J39+'2'!J39+'3'!J39+'4'!J39+'5'!J39+'6'!J39+'7'!J39+'8'!J39+'9'!J39+'10'!J39+'11'!J39+'12'!J39+'13'!J39+'14'!J39+'15'!J39+'16'!J39+'17'!J39+'18'!J39+'19'!J39+'20'!J39+'21'!J39+'22'!J39+'23'!J39+'24'!J39+'25'!J39+'26'!J39+'27'!J39+'28'!J39+'29'!J39+'30'!J39+'31'!J39+'32'!J39+'33'!J39+'34'!J39+'35'!J39+'36'!J39+'37'!J39")

			

			->setCellValue('K39', '=C39+F39+G39+H39+I39+J39')

			

			->setCellValue('K40', '=K37+K38+K39')

//HEPATİT A

			->setCellValue('F42', "='1'!F42+'2'!F42+'3'!F42+'4'!F42+'5'!F42+'6'!F42+'7'!F42+'8'!F42+'9'!F42+'10'!F42+'11'!F42+'12'!F42+'13'!F42+'14'!F42+'15'!F42+'16'!F42+'17'!F42+'18'!F42+'19'!F42+'20'!F42+'21'!F42+'22'!F42+'23'!F42+'24'!F42+'25'!F42+'26'!F42+'27'!F42+'28'!F42+'29'!F42+'30'!F42+'31'!F42+'32'!F42+'33'!F42+'34'!F42+'35'!F42+'36'!F42+'37'!F42")



            ->setCellValue('G42', "='1'!G42+'2'!G42+'3'!G42+'4'!G42+'5'!G42+'6'!G42+'7'!G42+'8'!G42+'9'!G42+'10'!G42+'11'!G42+'12'!G42+'13'!G42+'14'!G42+'15'!G42+'16'!G42+'17'!G42+'18'!G42+'19'!G42+'20'!G42+'21'!G42+'22'!G42+'23'!G42+'24'!G42+'25'!G42+'26'!G42+'27'!G42+'28'!G42+'29'!G42+'30'!G42+'31'!G42+'32'!G42+'33'!G42+'34'!G42+'35'!G42+'36'!G42+'37'!G42")

			

			 ->setCellValue('H42', "='1'!H42+'2'!H42+'3'!H42+'4'!H42+'5'!H42+'6'!H42+'7'!H42+'8'!H42+'9'!H42+'10'!H42+'11'!H42+'12'!H42+'13'!H42+'14'!H42+'15'!H42+'16'!H42+'17'!H42+'18'!H42+'19'!H42+'20'!H42+'21'!H42+'22'!H42+'23'!H42+'24'!H42+'25'!H42+'26'!H42+'27'!H42+'28'!H42+'29'!H42+'30'!H42+'31'!H42+'32'!H42+'33'!H42+'34'!H42+'35'!H42+'36'!H42+'37'!H42")

			 

			 ->setCellValue('I42', "='1'!I42+'2'!I42+'3'!I42+'4'!I42+'5'!I42+'6'!I42+'7'!I42+'8'!I42+'9'!I42+'10'!I42+'11'!I42+'12'!I42+'13'!I42+'14'!I42+'15'!I42+'16'!I42+'17'!I42+'18'!I42+'19'!I42+'20'!I42+'21'!I42+'22'!I42+'23'!I42+'24'!I42+'25'!I42+'26'!I42+'27'!I42+'28'!I42+'29'!I42+'30'!I42+'31'!I42+'32'!I42+'33'!I42+'34'!I42+'35'!I42+'36'!I42+'37'!I42")

			 

			 ->setCellValue('J42', "='1'!J42+'2'!J42+'3'!J42+'4'!J42+'5'!J42+'6'!J42+'7'!J42+'8'!J42+'9'!J42+'10'!J42+'11'!J42+'12'!J42+'13'!J42+'14'!J42+'15'!J42+'16'!J42+'17'!J42+'18'!J42+'19'!J42+'20'!J42+'21'!J42+'22'!J42+'23'!J42+'24'!J42+'25'!J42+'26'!J42+'27'!J42+'28'!J42+'29'!J42+'30'!J42+'31'!J42+'32'!J42+'33'!J42+'34'!J42+'35'!J42+'36'!J42+'37'!J42")

			 

			  ->setCellValue('K42', '=F42+G42+H42+I42+J42')



            ->setCellValue('F43', "='1'!F43+'2'!F43+'3'!F43+'4'!F43+'5'!F43+'6'!F43+'7'!F43+'8'!F43+'9'!F43+'10'!F43+'11'!F43+'12'!F43+'13'!F43+'14'!F43+'15'!F43+'16'!F43+'17'!F43+'18'!F43+'19'!F43+'20'!F43+'21'!F43+'22'!F43+'23'!F43+'24'!F43+'25'!F43+'26'!F43+'27'!F43+'28'!F43+'29'!F43+'30'!F43+'31'!F43+'32'!F43+'33'!F43+'34'!F43+'35'!F43+'36'!F43+'37'!F43")

			

			 ->setCellValue('G43', "='1'!G43+'2'!G43+'3'!G43+'4'!G43+'5'!G43+'6'!G43+'7'!G43+'8'!G43+'9'!G43+'10'!G43+'11'!G43+'12'!G43+'13'!G43+'14'!G43+'15'!G43+'16'!G43+'17'!G43+'18'!G43+'19'!G43+'20'!G43+'21'!G43+'22'!G43+'23'!G43+'24'!G43+'25'!G43+'26'!G43+'27'!G43+'28'!G43+'29'!G43+'30'!G43+'31'!G43+'32'!G43+'33'!G43+'34'!G43+'35'!G43+'36'!G43+'37'!G43")

			 

			 ->setCellValue('H43', "='1'!H43+'2'!H43+'3'!H43+'4'!H43+'5'!H43+'6'!H43+'7'!H43+'8'!H43+'9'!H43+'10'!H43+'11'!H43+'12'!H43+'13'!H43+'14'!H43+'15'!H43+'16'!H43+'17'!H43+'18'!H43+'19'!H43+'20'!H43+'21'!H43+'22'!H43+'23'!H43+'24'!H43+'25'!H43+'26'!H43+'27'!H43+'28'!H43+'29'!H43+'30'!H43+'31'!H43+'32'!H43+'33'!H43+'34'!H43+'35'!H43+'36'!H43+'37'!H43")

			

			 ->setCellValue('I43', "='1'!I43+'2'!I43+'3'!I43+'4'!I43+'5'!I43+'6'!I43+'7'!I43+'8'!I43+'9'!I43+'10'!I43+'11'!I43+'12'!I43+'13'!I43+'14'!I43+'15'!I43+'16'!I43+'17'!I43+'18'!I43+'19'!I43+'20'!I43+'21'!I43+'22'!I43+'23'!I43+'24'!I43+'25'!I43+'26'!I43+'27'!I43+'28'!I43+'29'!I43+'30'!I43+'31'!I43+'32'!I43+'33'!I43+'34'!I43+'35'!I43+'36'!I43+'37'!I43")

			 

			 ->setCellValue('J43', "='1'!J43+'2'!J43+'3'!J43+'4'!J43+'5'!J43+'6'!J43+'7'!J43+'8'!J43+'9'!J43+'10'!J43+'11'!J43+'12'!J43+'13'!J43+'14'!J43+'15'!J43+'16'!J43+'17'!J43+'18'!J43+'19'!J43+'20'!J43+'21'!J43+'22'!J43+'23'!J43+'24'!J43+'25'!J43+'26'!J43+'27'!J43+'28'!J43+'29'!J43+'30'!J43+'31'!J43+'32'!J43+'33'!J43+'34'!J43+'35'!J43+'36'!J43+'37'!J43")

			 

			 ->setCellValue('K43', '=F43+G43+H43+I43+J43')



             ->setCellValue('K44', '=K42+K43')

			 

			 //SU ÇİÇEĞİ

			

			->setCellValue('F46', "='1'!F46+'2'!F46+'3'!F46+'4'!F46+'5'!F46+'6'!F46+'7'!F46+'8'!F46+'9'!F46+'10'!F46+'11'!F46+'12'!F46+'13'!F46+'14'!F46+'15'!F46+'16'!F46+'17'!F46+'18'!F46+'19'!F46+'20'!F46+'21'!F46+'22'!F46+'23'!F46+'24'!F46+'25'!F46+'26'!F46+'27'!F46+'28'!F46+'29'!F46+'30'!F46+'31'!F46+'32'!F46+'33'!F46+'34'!F46+'35'!F46+'36'!F46+'37'!F46")

			

			->setCellValue('G46', "='1'!G46+'2'!G46+'3'!G46+'4'!G46+'5'!G46+'6'!G46+'7'!G46+'8'!G46+'9'!G46+'10'!G46+'11'!G46+'12'!G46+'13'!G46+'14'!G46+'15'!G46+'16'!G46+'17'!G46+'18'!G46+'19'!G46+'20'!G46+'21'!G46+'22'!G46+'23'!G46+'24'!G46+'25'!G46+'26'!G46+'27'!G46+'28'!G46+'29'!G46+'30'!G46+'31'!G46+'32'!G46+'33'!G46+'34'!G46+'35'!G46+'36'!G46+'37'!G46")

			

			 ->setCellValue('H46', "='1'!H46+'2'!H46+'3'!H46+'4'!H46+'5'!H46+'6'!H46+'7'!H46+'8'!H46+'9'!H46+'10'!H46+'11'!H46+'12'!H46+'13'!H46+'14'!H46+'15'!H46+'16'!H46+'17'!H46+'18'!H46+'19'!H46+'20'!H46+'21'!H46+'22'!H46+'23'!H46+'24'!H46+'25'!H46+'26'!H46+'27'!H46+'28'!H46+'29'!H46+'30'!H46+'31'!H46+'32'!H46+'33'!H46+'34'!H46+'35'!H46+'36'!H46+'37'!H46")

			 

			 ->setCellValue('I46', "='1'!I46+'2'!I46+'3'!I46+'4'!I46+'5'!I46+'6'!I46+'7'!I46+'8'!I46+'9'!I46+'10'!I46+'11'!I46+'12'!I46+'13'!I46+'14'!I46+'15'!I46+'16'!I46+'17'!I46+'18'!I46+'19'!I46+'20'!I46+'21'!I46+'22'!I46+'23'!I46+'24'!I46+'25'!I46+'26'!I46+'27'!I46+'28'!I46+'29'!I46+'30'!I46+'31'!I46+'32'!I46+'33'!I46+'34'!I46+'35'!I46+'36'!I46+'37'!I46")

			 

			 ->setCellValue('J46', "='1'!J46+'2'!J46+'3'!J46+'4'!J46+'5'!J46+'6'!J46+'7'!J46+'8'!J46+'9'!J46+'10'!J46+'11'!J46+'12'!J46+'13'!J46+'14'!J46+'15'!J46+'16'!J46+'17'!J46+'18'!J46+'19'!J46+'20'!J46+'21'!J46+'22'!J46+'23'!J46+'24'!J46+'25'!J46+'26'!J46+'27'!J46+'28'!J46+'29'!J46+'30'!J46+'31'!J46+'32'!J46+'33'!J46+'34'!J46+'35'!J46+'36'!J46+'37'!J46")

			 

			 ->setCellValue('K46', '=F46+G46+H46+I46+J46')

			

//KIZAMIKÇIK

			->setCellValue('J48', "='1'!J48+'2'!J48+'3'!J48+'4'!J48+'5'!J48+'6'!J48+'7'!J48+'8'!J48+'9'!J48+'10'!J48+'11'!J48+'12'!J48+'13'!J48+'14'!J48+'15'!J48+'16'!J48+'17'!J48+'18'!J48+'19'!J48+'20'!J48+'21'!J48+'22'!J48+'23'!J48+'24'!J48+'25'!J48+'26'!J48+'27'!J48+'28'!J48+'29'!J48+'30'!J48+'31'!J48+'32'!J48+'33'!J48+'34'!J48+'35'!J48+'36'!J48+'37'!J48")

			

			->setCellValue('K48', '=J48')	

//OKUL TD

			->setCellValue('I50', "='1'!I50+'2'!I50+'3'!I50+'4'!I50+'5'!I50+'6'!I50+'7'!I50+'8'!I50+'9'!I50+'10'!I50+'11'!I50+'12'!I50+'13'!I50+'14'!I50+'15'!I50+'16'!I50+'17'!I50+'18'!I50+'19'!I50+'20'!I50+'21'!I50+'22'!I50+'23'!I50+'24'!I50+'25'!I50+'26'!I50+'27'!I50+'28'!I50+'29'!I50+'30'!I50+'31'!I50+'32'!I50+'33'!I50+'34'!I50+'35'!I50+'36'!I50+'37'!I50")

			

			->setCellValue('J50', "='1'!J50+'2'!J50+'3'!J50+'4'!J50+'5'!J50+'6'!J50+'7'!J50+'8'!J50+'9'!J50+'10'!J50+'11'!J50+'12'!J50+'13'!J50+'14'!J50+'15'!J50+'16'!J50+'17'!J50+'18'!J50+'19'!J50+'20'!J50+'21'!J50+'22'!J50+'23'!J50+'24'!J50+'25'!J50+'26'!J50+'27'!J50+'28'!J50+'29'!J50+'30'!J50+'31'!J50+'32'!J50+'33'!J50+'34'!J50+'35'!J50+'36'!J50+'37'!J50")	

			

			->setCellValue('K50', '=I50+J50')

	

//DİĞER TD

			->setCellValue('C52', "='1'!C52+'2'!C52+'3'!C52+'4'!C52+'5'!C52+'6'!C52+'7'!C52+'8'!C52+'9'!C52+'10'!C52+'11'!C52+'12'!C52+'13'!C52+'14'!C52+'15'!C52+'16'!C52+'17'!C52+'18'!C52+'19'!C52+'20'!C52+'21'!C52+'22'!C52+'23'!C52+'24'!C52+'25'!C52+'26'!C52+'27'!C52+'28'!C52+'29'!C52+'30'!C52+'31'!C52+'32'!C52+'33'!C52+'34'!C52+'35'!C52+'36'!C52+'37'!C52")



			->setCellValue('F52', "='1'!F52+'2'!F52+'3'!F52+'4'!F52+'5'!F52+'6'!F52+'7'!F52+'8'!F52+'9'!F52+'10'!F52+'11'!F52+'12'!F52+'13'!F52+'14'!F52+'15'!F52+'16'!F52+'17'!F52+'18'!F52+'19'!F52+'20'!F52+'21'!F52+'22'!F52+'23'!F52+'24'!F52+'25'!F52+'26'!F52+'27'!F52+'28'!F52+'29'!F52+'30'!F52+'31'!F52+'32'!F52+'33'!F52+'34'!F52+'35'!F52+'36'!F52+'37'!F52")

			

			->setCellValue('G52', "='1'!G52+'2'!G52+'3'!G52+'4'!G52+'5'!G52+'6'!G52+'7'!G52+'8'!G52+'9'!G52+'10'!G52+'11'!G52+'12'!G52+'13'!G52+'14'!G52+'15'!G52+'16'!G52+'17'!G52+'18'!G52+'19'!G52+'20'!G52+'21'!G52+'22'!G52+'23'!G52+'24'!G52+'25'!G52+'26'!G52+'27'!G52+'28'!G52+'29'!G52+'30'!G52+'31'!G52+'32'!G52+'33'!G52+'34'!G52+'35'!G52+'36'!G52+'37'!G52")

			

			 ->setCellValue('H52', "='1'!H52+'2'!H52+'3'!H52+'4'!H52+'5'!H52+'6'!H52+'7'!H52+'8'!H52+'9'!H52+'10'!H52+'11'!H52+'12'!H52+'13'!H52+'14'!H52+'15'!H52+'16'!H52+'17'!H52+'18'!H52+'19'!H52+'20'!H52+'21'!H52+'22'!H52+'23'!H52+'24'!H52+'25'!H52+'26'!H52+'27'!H52+'28'!H52+'29'!H52+'30'!H52+'31'!H52+'32'!H52+'33'!H52+'34'!H52+'35'!H52+'36'!H52+'37'!H52")

			 

			 ->setCellValue('I52', "='1'!I52+'2'!I52+'3'!I52+'4'!I52+'5'!I52+'6'!I52+'7'!I52+'8'!I52+'9'!I52+'10'!I52+'11'!I52+'12'!I52+'13'!I52+'14'!I52+'15'!I52+'16'!I52+'17'!I52+'18'!I52+'19'!I52+'20'!I52+'21'!I52+'22'!I52+'23'!I52+'24'!I52+'25'!I52+'26'!I52+'27'!I52+'28'!I52+'29'!I52+'30'!I52+'31'!I52+'32'!I52+'33'!I52+'34'!I52+'35'!I52+'36'!I52+'37'!I52")

			

			 ->setCellValue('J52', "='1'!J52+'2'!J52+'3'!J52+'4'!J52+'5'!J52+'6'!J52+'7'!J52+'8'!J52+'9'!J52+'10'!J52+'11'!J52+'12'!J52+'13'!J52+'14'!J52+'15'!J52+'16'!J52+'17'!J52+'18'!J52+'19'!J52+'20'!J52+'21'!J52+'22'!J52+'23'!J52+'24'!J52+'25'!J52+'26'!J52+'27'!J52+'28'!J52+'29'!J52+'30'!J52+'31'!J52+'32'!J52+'33'!J52+'34'!J52+'35'!J52+'36'!J52+'37'!J52")

			 

			 ->setCellValue('K52', '=C52+F52+G52+H52+I52+J52')

//15-49 YAŞ KADIN TD 1

			->setCellValue('C54', "='1'!C54+'2'!C54+'3'!C54+'4'!C54+'5'!C54+'6'!C54+'7'!C54+'8'!C54+'9'!C54+'10'!C54+'11'!C54+'12'!C54+'13'!C54+'14'!C54+'15'!C54+'16'!C54+'17'!C54+'18'!C54+'19'!C54+'20'!C54+'21'!C54+'22'!C54+'23'!C54+'24'!C54+'25'!C54+'26'!C54+'27'!C54+'28'!C54+'29'!C54+'30'!C54+'31'!C54+'32'!C54+'33'!C54+'34'!C54+'35'!C54+'36'!C54+'37'!C54")

			

			 ->setCellValue('H54', "='1'!H54+'2'!H54+'3'!H54+'4'!H54+'5'!H54+'6'!H54+'7'!H54+'8'!H54+'9'!H54+'10'!H54+'11'!H54+'12'!H54+'13'!H54+'14'!H54+'15'!H54+'16'!H54+'17'!H54+'18'!H54+'19'!H54+'20'!H54+'21'!H54+'22'!H54+'23'!H54+'24'!H54+'25'!H54+'26'!H54+'27'!H54+'28'!H54+'29'!H54+'30'!H54+'31'!H54+'32'!H54+'33'!H54+'34'!H54+'35'!H54+'36'!H54+'37'!H54")

			 

			 ->setCellValue('K54', '=C54+H54')

//15-49 YAŞ KADIN TD 2

			->setCellValue('C55', "='1'!C55+'2'!C55+'3'!C55+'4'!C55+'5'!C55+'6'!C55+'7'!C55+'8'!C55+'9'!C55+'10'!C55+'11'!C55+'12'!C55+'13'!C55+'14'!C55+'15'!C55+'16'!C55+'17'!C55+'18'!C55+'19'!C55+'20'!C55+'21'!C55+'22'!C55+'23'!C55+'24'!C55+'25'!C55+'26'!C55+'27'!C55+'28'!C55+'29'!C55+'30'!C55+'31'!C55+'32'!C55+'33'!C55+'34'!C55+'35'!C55+'36'!C55+'37'!C55")

			

			 ->setCellValue('H55', "='1'!H55+'2'!H55+'3'!H55+'4'!H55+'5'!H55+'6'!H55+'7'!H55+'8'!H55+'9'!H55+'10'!H55+'11'!H55+'12'!H55+'13'!H55+'14'!H55+'15'!H55+'16'!H55+'17'!H55+'18'!H55+'19'!H55+'20'!H55+'21'!H55+'22'!H55+'23'!H55+'24'!H55+'25'!H55+'26'!H55+'27'!H55+'28'!H55+'29'!H55+'30'!H55+'31'!H55+'32'!H55+'33'!H55+'34'!H55+'35'!H55+'36'!H55+'37'!H55")

			 

			 ->setCellValue('K55', '=C55+H55')

//15-49 YAŞ KADIN TD 3

			->setCellValue('C56', "='1'!C56+'2'!C56+'3'!C56+'4'!C56+'5'!C56+'6'!C56+'7'!C56+'8'!C56+'9'!C56+'10'!C56+'11'!C56+'12'!C56+'13'!C56+'14'!C56+'15'!C56+'16'!C56+'17'!C56+'18'!C56+'19'!C56+'20'!C56+'21'!C56+'22'!C56+'23'!C56+'24'!C56+'25'!C56+'26'!C56+'27'!C56+'28'!C56+'29'!C56+'30'!C56+'31'!C56+'32'!C56+'33'!C56+'34'!C56+'35'!C56+'36'!C56+'37'!C56")

			

			 ->setCellValue('H56', "='1'!H56+'2'!H56+'3'!H56+'4'!H56+'5'!H56+'6'!H56+'7'!H56+'8'!H56+'9'!H56+'10'!H56+'11'!H56+'12'!H56+'13'!H56+'14'!H56+'15'!H56+'16'!H56+'17'!H56+'18'!H56+'19'!H56+'20'!H56+'21'!H56+'22'!H56+'23'!H56+'24'!H56+'25'!H56+'26'!H56+'27'!H56+'28'!H56+'29'!H56+'30'!H56+'31'!H56+'32'!H56+'33'!H56+'34'!H56+'35'!H56+'36'!H56+'37'!H56")

			 

			 ->setCellValue('K56', '=C56+H56')

//15-49 YAŞ KADIN TD 4

			->setCellValue('C57', "='1'!C57+'2'!C57+'3'!C57+'4'!C57+'5'!C57+'6'!C57+'7'!C57+'8'!C57+'9'!C57+'10'!C57+'11'!C57+'12'!C57+'13'!C57+'14'!C57+'15'!C57+'16'!C57+'17'!C57+'18'!C57+'19'!C57+'20'!C57+'21'!C57+'22'!C57+'23'!C57+'24'!C57+'25'!C57+'26'!C57+'27'!C57+'28'!C57+'29'!C57+'30'!C57+'31'!C57+'32'!C57+'33'!C57+'34'!C57+'35'!C57+'36'!C57+'37'!C57")

			

			 ->setCellValue('H57', "='1'!H57+'2'!H57+'3'!H57+'4'!H57+'5'!H57+'6'!H57+'7'!H57+'8'!H57+'9'!H57+'10'!H57+'11'!H57+'12'!H57+'13'!H57+'14'!H57+'15'!H57+'16'!H57+'17'!H57+'18'!H57+'19'!H57+'20'!H57+'21'!H57+'22'!H57+'23'!H57+'24'!H57+'25'!H57+'26'!H57+'27'!H57+'28'!H57+'29'!H57+'30'!H57+'31'!H57+'32'!H57+'33'!H57+'34'!H57+'35'!H57+'36'!H57+'37'!H57")

			 

			 ->setCellValue('K57', '=C57+H57')

//15-49 YAŞ KADIN TD 5

			->setCellValue('C58', "='1'!C58+'2'!C58+'3'!C58+'4'!C58+'5'!C58+'6'!C58+'7'!C58+'8'!C58+'9'!C58+'10'!C58+'11'!C58+'12'!C58+'13'!C58+'14'!C58+'15'!C58+'16'!C58+'17'!C58+'18'!C58+'19'!C58+'20'!C58+'21'!C58+'22'!C58+'23'!C58+'24'!C58+'25'!C58+'26'!C58+'27'!C58+'28'!C58+'29'!C58+'30'!C58+'31'!C58+'32'!C58+'33'!C58+'34'!C58+'35'!C58+'36'!C58+'37'!C58")

			

			 ->setCellValue('H58', "='1'!H58+'2'!H58+'3'!H58+'4'!H58+'5'!H58+'6'!H58+'7'!H58+'8'!H58+'9'!H58+'10'!H58+'11'!H58+'12'!H58+'13'!H58+'14'!H58+'15'!H58+'16'!H58+'17'!H58+'18'!H58+'19'!H58+'20'!H58+'21'!H58+'22'!H58+'23'!H58+'24'!H58+'25'!H58+'26'!H58+'27'!H58+'28'!H58+'29'!H58+'30'!H58+'31'!H58+'32'!H58+'33'!H58+'34'!H58+'35'!H58+'36'!H58+'37'!H58")

			 

			 ->setCellValue('K58', '=C58+H58')

//15-49 YAŞ KADIN TD TOPLAM

			->setCellValue('C59', '=C54+C55+C56+C57+C58')

			

			 ->setCellValue('H59', '=H54+H55+H56+H57+H58')

			 

			 ->setCellValue('K59', '=C59+H59')

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



header('Content-Disposition: attachment;filename="Form013_SERIK.xls"');



header('Cache-Control: max-age=0');







$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');



$objWriter->save('php://output');



exit;