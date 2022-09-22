<?php
set_time_limit(600);
function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 

$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 

$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 

$yilgelen=$_GET['selectyil'];

$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 

$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);

/** Error reporting */

error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

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

							 
require_once('con_abe.php');


if($yilgelen==""){

$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv,

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

v176 as v176

from veri where(ilidi='$ilgelen') group by ilceidi order by ilceidi desc") ;



}else{

$resultvyil = @mysql_query("select ilceidi as iii,vocadi as vvv,

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

v176 as v176

from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen') group by ilceidi order by ilceidi desc") ;

$oncekiadnks = @mysql_query("select sum(v1) as v1,sum(v3) as v3 from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen') group by ilceidi order by ilceidi desc") ;

}

while($sonucum=mysql_fetch_array($resultvyil)){

$ilcadi=$sonucum['iii'];

$socadi=$sonucum['vvv'];

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

$verim176=$sonucum['v176'];

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

$ilceno=$ilcesonucum['ilceid'];

$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and ilce='$ilceno' and socad like '%TSM' or ilinad='$ilgelen' and ilce='$ilceno' and socad='')");
}
while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){
$duzenleyenad=$sorumlusonucum['aseadi'];
$duzenleyenunv=$sorumlusonucum['aseunvan'];
$onaylayanad=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$onaylayanunv=$onkurum.' '.$onsor;


$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilceninadi=$ilcesonucum['ilcead'];

$ilkod=trsuz(substr(trim($socadi),0,2));

$ilcekod=trsuz(substr(trim($socadi),3,2));

$ahkod=trsuz(substr(trim($socadi),6,3));

$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");

while($ilsonucum=mysql_fetch_array($iladi)){

$ilinadi=$ilsonucum['ilad'];

$iletiket=trsuz('IL TOPLAMI');

$topil=$ilinadi.' '.$iletiket;



}			 
$say=mysql_num_rows($resultvyil);

//HEre your first sheet
   // $sheet = $objPHPExcel->getActiveSheet();

    //Start adding next sheets
    
    $objWorkSheet = $objPHPExcel->createSheet(1); //Setting index when creating






$styleThinBlackBorderOutline = array(

	'borders' => array(

		'allborders' => array(

			'style' => PHPExcel_Style_Border::BORDER_THIN,

			'color' => array('argb' => 'FF000000'),

		),

	),

);

$coklukenarlik = array(

	'borders' => array(

		'outline' => array(

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


$objPHPExcel->getSheet(1)->getColumnDimension('A')->setWidth(26);


for ($col = 'B'; $col != 'M'; $col++) {

$objPHPExcel->getSheet(1)->getColumnDimension($col)->setWidth(13);

}



//$objPHPExcel->getSheet(1)->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
/*
$objPHPExcel->getSheet(1)->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('I8:J12')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C11')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet(1)->getStyle('C12:H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet(1)->getStyle('C12:H12')->getFill()->getStartColor()->setARGB('# bebebe');*/

//satir y�ksekligi

//$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(230);

//Yazinin y�n�

//$objPHPExcel->getSheet(1)->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);*/

//h�cre degeri
$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('2')->setRowHeight(20);
$objPHPExcel->getSheet(1)->getRowDimension('3')->setRowHeight(20);
$objPHPExcel->getSheet(1)->getRowDimension('4')->setRowHeight(20);
$objPHPExcel->getSheet(1)->getRowDimension('5')->setRowHeight(20);
$objPHPExcel->getSheet(1)->getRowDimension('6')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('7')->setRowHeight(12);
$objPHPExcel->getSheet(1)->getRowDimension('8')->setRowHeight(12);
$objPHPExcel->getSheet(1)->getRowDimension('9')->setRowHeight(12);
$objPHPExcel->getSheet(1)->getRowDimension('10')->setRowHeight(12);
$objPHPExcel->getSheet(1)->getRowDimension('11')->setRowHeight(12);
$objPHPExcel->getSheet(1)->getRowDimension('12')->setRowHeight(50);
$objPHPExcel->getSheet(1)->getRowDimension('13')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('14')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('15')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('16')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('17')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('18')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('19')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('20')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('21')->setRowHeight(25);
$objPHPExcel->getSheet(1)->getRowDimension('22')->setRowHeight(30);
$objPHPExcel->getSheet(1)->getRowDimension('23')->setRowHeight(30);
$objPHPExcel->getSheet(1)->getRowDimension('24')->setRowHeight(30);
$objPHPExcel->getSheet(1)->getRowDimension('25')->setRowHeight(30);


$objPHPExcel->getSheet(1)->getStyle('A1:L66')->getAlignment()->setWrapText(true);

$objPHPExcel->getSheet(1)->getStyle('A6:L66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(1)->getStyle('A6:L66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(20);

$objPHPExcel->getSheet(1)->mergeCells("A1:L1");

$objPHPExcel->getActiveSheet()->getStyle('A1:L66')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E8:F11')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('G8:H11')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('I8:J11')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('A15:L15')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('A17:L17')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('A19:L19')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('E23:K25')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('F23:F25')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('J23:J25')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
	  
$objPHPExcel->getSheet(1)->mergeCells("B2:H2");
$objPHPExcel->getSheet(1)->mergeCells("B3:H3");
$objPHPExcel->getSheet(1)->mergeCells("B4:H4");
$objPHPExcel->getSheet(1)->mergeCells("A5:L5");
$objPHPExcel->getSheet(1)->mergeCells("A6:J6");
$objPHPExcel->getSheet(1)->mergeCells("A7:D11");
$objPHPExcel->getSheet(1)->mergeCells("A11:D11");
$objPHPExcel->getSheet(1)->mergeCells("E7:F7");
$objPHPExcel->getSheet(1)->mergeCells("E8:F8");
$objPHPExcel->getSheet(1)->mergeCells("E9:F9");
$objPHPExcel->getSheet(1)->mergeCells("E10:F10");
$objPHPExcel->getSheet(1)->mergeCells("G7:H7");
$objPHPExcel->getSheet(1)->mergeCells("G8:H10");
$objPHPExcel->getSheet(1)->mergeCells("I7:J7");
$objPHPExcel->getSheet(1)->mergeCells("I8:J9");
$objPHPExcel->getSheet(1)->mergeCells("I10:J10");
$objPHPExcel->getSheet(1)->mergeCells("A12:D12");
$objPHPExcel->getSheet(1)->mergeCells("A13:L13");
$objPHPExcel->getSheet(1)->mergeCells("A14:L14");
$objPHPExcel->getSheet(1)->mergeCells("A14:L14");
$objPHPExcel->getSheet(1)->mergeCells("A15:B15");
$objPHPExcel->getSheet(1)->mergeCells("A16:B16");
$objPHPExcel->getSheet(1)->mergeCells("A17:B17");
$objPHPExcel->getSheet(1)->mergeCells("A18:B18");
$objPHPExcel->getSheet(1)->mergeCells("A19:B19");
$objPHPExcel->getSheet(1)->mergeCells("A20:B20");

$objPHPExcel->getSheet(1)->mergeCells("C15:D15");
$objPHPExcel->getSheet(1)->mergeCells("C16:D16");
$objPHPExcel->getSheet(1)->mergeCells("C17:D17");
$objPHPExcel->getSheet(1)->mergeCells("C18:D18");
$objPHPExcel->getSheet(1)->mergeCells("C19:D19");
$objPHPExcel->getSheet(1)->mergeCells("C20:D20");

$objPHPExcel->getSheet(1)->mergeCells("E15:F15");
$objPHPExcel->getSheet(1)->mergeCells("E16:F16");
$objPHPExcel->getSheet(1)->mergeCells("E17:F17");
$objPHPExcel->getSheet(1)->mergeCells("E18:F18");
$objPHPExcel->getSheet(1)->mergeCells("E19:F19");
$objPHPExcel->getSheet(1)->mergeCells("E20:F20");

$objPHPExcel->getSheet(1)->mergeCells("G15:H15");
$objPHPExcel->getSheet(1)->mergeCells("G16:H16");
$objPHPExcel->getSheet(1)->mergeCells("G17:H17");
$objPHPExcel->getSheet(1)->mergeCells("G18:H18");
$objPHPExcel->getSheet(1)->mergeCells("G19:H19");
$objPHPExcel->getSheet(1)->mergeCells("G20:H20");

$objPHPExcel->getSheet(1)->mergeCells("I15:J15");
$objPHPExcel->getSheet(1)->mergeCells("I16:J16");

$objPHPExcel->getSheet(1)->mergeCells("K15:L15");
$objPHPExcel->getSheet(1)->mergeCells("K16:L16");

$objPHPExcel->getSheet(1)->mergeCells("H17:L18");

$objPHPExcel->getSheet(1)->mergeCells("K15:L15");
$objPHPExcel->getSheet(1)->mergeCells("K16:L16");

$objPHPExcel->getSheet(1)->mergeCells("I19:J19");
$objPHPExcel->getSheet(1)->mergeCells("I20:J20");
$objPHPExcel->getSheet(1)->mergeCells("K19:L20");

$objPHPExcel->getSheet(1)->mergeCells("E22:G22");
$objPHPExcel->getSheet(1)->mergeCells("I22:K22");
$objPHPExcel->getSheet(1)->mergeCells("F23:G23");
$objPHPExcel->getSheet(1)->mergeCells("J23:K23");
$objPHPExcel->getSheet(1)->mergeCells("F24:G24");
$objPHPExcel->getSheet(1)->mergeCells("J24:K24");
$objPHPExcel->getSheet(1)->mergeCells("F25:G25");
$objPHPExcel->getSheet(1)->mergeCells("J25:K25");
$objPHPExcel->getActiveSheet()->getStyle('A6:J6')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
	  
$objPHPExcel->getSheet(1)->setCellValue('A1', 'AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS VE İZLEME-DEĞERLENDİRME FORMU');

$objPHPExcel->getSheet(1)->setCellValue('A2', 'İl/İlçe:');

$objPHPExcel->getSheet(1)->setCellValue('A3', 'Kurum:');

$objPHPExcel->getSheet(1)->setCellValue('A4','Dönem/Tarih:');

$objPHPExcel->getSheet(1)->setCellValue('A6', 'AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS VE VAKA İZLEME FORMU');

$objPHPExcel->getSheet(1)->setCellValue('A7', 'Hastalık Sınıflamaları');
$objPHPExcel->getSheet(1)->setCellValue('A12', 'Vaka Sayısı');

$objPHPExcel->getSheet(1)->setCellValue('E7', 'A09');

$objPHPExcel->getSheet(1)->setCellValue('E8', 'Diyare ve gastroenterit,');

$objPHPExcel->getSheet(1)->setCellValue('E9', 'enfeksiyöz kaynaklı olduğu');
$objPHPExcel->setActiveSheetIndex(1)->getStyle("E11:J11")->getFont()->setName('Arial')->setSize(8);

$objPHPExcel->getSheet(1)->setCellValue('E10', 'tahmin edilen');
$objPHPExcel->getSheet(1)->setCellValue('E11', '0-59 aylık');
$objPHPExcel->getSheet(1)->setCellValue('F11', '5 yaş ve üzeri');

$objPHPExcel->getSheet(1)->setCellValue('G7', 'R11');

$objPHPExcel->getSheet(1)->setCellValue('G8', '');

$objPHPExcel->getSheet(1)->setCellValue('G9', '');

$objPHPExcel->getSheet(1)->setCellValue('G8', 'Bulantı ve kusma');
$objPHPExcel->getSheet(1)->setCellValue('G11', '0-59 aylık');
$objPHPExcel->getSheet(1)->setCellValue('H11', '5 yaş ve üzeri');	

$objPHPExcel->getSheet(1)->setCellValue('I7', 'K52');

$objPHPExcel->getSheet(1)->setCellValue('I8', '');

$objPHPExcel->getSheet(1)->setCellValue('I8', 'Enfektif olmayan diğer');

$objPHPExcel->getSheet(1)->setCellValue('I10', 'gastroenterit ve kolit');
$objPHPExcel->getSheet(1)->setCellValue('I11', '0-59 aylık');
$objPHPExcel->getSheet(1)->setCellValue('J11', '5 yaş ve üzeri');
$objPHPExcel->getSheet(1)->setCellValue('A14', 'AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS LABORATUVAR SONUÇLARI İZLEME-DEĞERLENDİRME FORMU');
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A15")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A17")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A19")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("C17")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet(1)->setCellValue('A15', 'YAPILAN GAİTA KÜLTÜR SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('A17', 'YAPILAN GAİTA PARAZİT İNCELEME SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('A19', 'YAPILAN VİRAL ETKEN İNCELEME SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('C15', 'Vibrio cholerae (A00)');
$objPHPExcel->getSheet(1)->setCellValue('E15', 'Salmonella sp.(A02)');
$objPHPExcel->getSheet(1)->setCellValue('G15', 'Shigella sp.(A03)');
$objPHPExcel->getSheet(1)->setCellValue('I15', 'Enterohemorragic Escherichia Coli(A04.3)');
$objPHPExcel->getSheet(1)->setCellValue('K15', 'Campylobacter (A04.5)');

$objPHPExcel->getSheet(1)->setCellValue('C17', 'Entamoeba histolytica(A06)');
$objPHPExcel->getSheet(1)->setCellValue('E17', 'Cryptosporodium(A07.2)');

$objPHPExcel->getSheet(1)->setCellValue('C19', 'Rota Virüs (A08.0)');
$objPHPExcel->getSheet(1)->setCellValue('E19', 'Noro Virüs (A08.1)');
$objPHPExcel->getSheet(1)->setCellValue('G19', 'Adeno Virüs (A08.2)');
$objPHPExcel->getSheet(1)->setCellValue('I19', 'Hepatit A Virüsüs (B15)');
$objPHPExcel->setActiveSheetIndex(1)->getStyle("E24")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("I24")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet(1)->setCellValue('E22', 'Formu Düzenleyen');
$objPHPExcel->getSheet(1)->setCellValue('E23', 'Ad/Soyad');
$objPHPExcel->getSheet(1)->setCellValue('E24', 'Ünvan/Görev');
$objPHPExcel->getSheet(1)->setCellValue('E25', 'İmza');

$objPHPExcel->getSheet(1)->setCellValue('I22', 'Onaylayan');
$objPHPExcel->getSheet(1)->setCellValue('I23', 'Ad/Soyad');
$objPHPExcel->getSheet(1)->setCellValue('I24', 'Ünvan/Görev');
$objPHPExcel->getSheet(1)->setCellValue('I25', 'İmza');
//$objPHPExcel->getSheet(1)->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
$objPHPExcel->getActiveSheet()->getStyle('H4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet()->getStyle('J2:J3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );

$objPHPExcel->getActiveSheet()->getStyle('E23:K25')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );	  



$objPHPExcel->getSheet(1)->getStyle('A6:L22')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(1)->getStyle('A6:L22')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A6:J6")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A12:J12")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A7:D11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("E11:F11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("G11:H11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("I11:J11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A14:L16")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A17:G18")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A19:J20")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("E22:G25")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("I22:K25")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("E7:F10")->applyFromArray($coklukenarlik);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("G7:H10")->applyFromArray($coklukenarlik);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("I7:J10")->applyFromArray($coklukenarlik);

//$objPHPExcel->setActiveSheetIndex(1)->getStyle("A6:K12")->applyFromArray($ciftcizgi);
$ilcetoplami='İLÇE TOPLAMI';
$ilce=trsuz($ilceninadi).' '.$ilcetoplami;
$yil="YILI";
$yili=$yilgelen.' '.$yil;
$ililce=trsuz($ilinadi).'-'.trsuz($ilceninadi);
$objPHPExcel->setActiveSheetIndex(1)



->setCellValue('B2', $ililce)
->setCellValue('B3', $ilce)
->setCellValue('B4', $yili)
//Vaka Sayıları
->setCellValue('E12', $verim1)
->setCellValue('F12', $verim2)
->setCellValue('G12', $verim3)
->setCellValue('H12', $verim4)
->setCellValue('I12', $verim5)
->setCellValue('J12', $verim6)
->setCellValue('A16', $verim7)
->setCellValue('C16', $verim8)
->setCellValue('E16', $verim9)
->setCellValue('G16', $verim10)
->setCellValue('I16', $verim11)
->setCellValue('K16', $verim12)
->setCellValue('A18', $verim13)
->setCellValue('C18', $verim14)
->setCellValue('E18', $verim15)
->setCellValue('A20', $verim16)
->setCellValue('C20', $verim17)
->setCellValue('E20', $verim18)
->setCellValue('G20', $verim19)
->setCellValue('I20', $verim20)
//DÜZENLEYEN-ONAYLAYAN			 
			 ->setCellValue('F23', trsuz($duzenleyenad))
			 
			 ->setCellValue('F24', trsuz($duzenleyenunv))
			 
			 ->setCellValue('J23', trsuz($onaylayanad))		 

			 ->setCellValue('J24', trsuz($onaylayanunv));		 

	 
$objPHPExcel->getSheet(1)->setTitle(trsuz($ilceninadi));

    
			
	



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
}
		
//TOPLAM




$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");

while($ilsonucum=mysql_fetch_array($iladi)){

$ilinadi=$ilsonucum['ilad'];

$iletiket=trsuz('IL TOPLAMI');

$topil=$ilinadi.' '.$iletiket;



}

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcadi')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceno=$ilcesonucum['ilceid'];

$ilceninadi=$ilcesonucum['ilcead'];

}

$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;

while($duztarih=mysql_fetch_array($atarih)){

$dtarih=$duztarih['yeni_tarih'];

}

$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;

while($ontarih=mysql_fetch_array($btarih)){

$otarih=$ontarih['yeni_tarih'];

}


if($yilgelen==""){

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

from veri where(ilidi='$ilgelen') group by ilceidi order by ilceidi desc") ;

$toncekiadnks = @mysql_query("select sum(v1) as v1,sum(v3) as v3 from veri where(ilidi='$ilgelen' and vayadi='OCAK')") ;

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

from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;

$toncekiadnks = @mysql_query("select sum(v1) as v1,sum(v3) as v3 from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;

}

while($tsonuc=mysql_fetch_array($toncekiadnks)){

$tadnks=$tsonuc['v1'];

$tkaybebek=$tsonuc['v3'];

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

$styleThinBlackBorderOutline = array(

	'borders' => array(

		'allborders' => array(

			'style' => PHPExcel_Style_Border::BORDER_THIN,

			'color' => array('argb' => 'FF000000'),

		),

	),

);

$coklukenarlik = array(

	'borders' => array(

		'outline' => array(

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


$objPHPExcel->getSheet()->getColumnDimension('A')->setWidth(26);


for ($col = 'B'; $col != 'M'; $col++) {

$objPHPExcel->getSheet()->getColumnDimension($col)->setWidth(13);

}



//$objPHPExcel->getSheet()->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);
/*
$objPHPExcel->getSheet()->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet()->getStyle('I8:J12')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet()->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet()->getStyle('C11')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet()->getStyle('C12:H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet()->getStyle('C12:H12')->getFill()->getStartColor()->setARGB('# bebebe');*/

//satir y�ksekligi

//$objPHPExcel->getSheet()->getRowDimension('1')->setRowHeight(230);

//Yazinin y�n�

//$objPHPExcel->getSheet()->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);*/

//h�cre degeri
$objPHPExcel->getSheet()->getRowDimension('1')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('2')->setRowHeight(20);
$objPHPExcel->getSheet()->getRowDimension('3')->setRowHeight(20);
$objPHPExcel->getSheet()->getRowDimension('4')->setRowHeight(20);
$objPHPExcel->getSheet()->getRowDimension('5')->setRowHeight(20);
$objPHPExcel->getSheet()->getRowDimension('6')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('7')->setRowHeight(12);
$objPHPExcel->getSheet()->getRowDimension('8')->setRowHeight(12);
$objPHPExcel->getSheet()->getRowDimension('9')->setRowHeight(12);
$objPHPExcel->getSheet()->getRowDimension('10')->setRowHeight(12);
$objPHPExcel->getSheet()->getRowDimension('11')->setRowHeight(12);
$objPHPExcel->getSheet()->getRowDimension('12')->setRowHeight(50);
$objPHPExcel->getSheet()->getRowDimension('13')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('14')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('15')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('16')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('17')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('18')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('19')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('20')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('21')->setRowHeight(25);
$objPHPExcel->getSheet()->getRowDimension('22')->setRowHeight(30);
$objPHPExcel->getSheet()->getRowDimension('23')->setRowHeight(30);
$objPHPExcel->getSheet()->getRowDimension('24')->setRowHeight(30);
$objPHPExcel->getSheet()->getRowDimension('25')->setRowHeight(30);


$objPHPExcel->getSheet()->getStyle('A1:L66')->getAlignment()->setWrapText(true);

$objPHPExcel->getSheet()->getStyle('A6:L66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet()->getStyle('A6:L66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getSheet()->getRowDimension('1')->setRowHeight(20);

$objPHPExcel->getSheet()->mergeCells("A1:L1");

$objPHPExcel->getActiveSheet()->getStyle('A1:L66')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E8:F11')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('G8:H11')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('I8:J11')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('A15:L15')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('A17:L17')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('A19:L19')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('E23:K25')->getFont()->setBold(FALSE);
$objPHPExcel->getActiveSheet()->getStyle('F23:F25')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('J23:J25')->getFont()->setBold(true);

$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
	  
$objPHPExcel->getSheet()->mergeCells("B2:H2");
$objPHPExcel->getSheet()->mergeCells("B3:H3");
$objPHPExcel->getSheet()->mergeCells("B4:H4");
$objPHPExcel->getSheet()->mergeCells("A5:L5");
$objPHPExcel->getSheet()->mergeCells("A6:J6");
$objPHPExcel->getSheet()->mergeCells("A7:D11");
$objPHPExcel->getSheet()->mergeCells("A11:D11");
$objPHPExcel->getSheet()->mergeCells("E7:F7");
$objPHPExcel->getSheet()->mergeCells("E8:F8");
$objPHPExcel->getSheet()->mergeCells("E9:F9");
$objPHPExcel->getSheet()->mergeCells("E10:F10");
$objPHPExcel->getSheet()->mergeCells("G7:H7");
$objPHPExcel->getSheet()->mergeCells("G8:H10");
$objPHPExcel->getSheet()->mergeCells("I7:J7");
$objPHPExcel->getSheet()->mergeCells("I8:J9");
$objPHPExcel->getSheet()->mergeCells("I10:J10");
$objPHPExcel->getSheet()->mergeCells("A12:D12");
$objPHPExcel->getSheet()->mergeCells("A13:L13");
$objPHPExcel->getSheet()->mergeCells("A14:L14");
$objPHPExcel->getSheet()->mergeCells("A14:L14");
$objPHPExcel->getSheet()->mergeCells("A15:B15");
$objPHPExcel->getSheet()->mergeCells("A16:B16");
$objPHPExcel->getSheet()->mergeCells("A17:B17");
$objPHPExcel->getSheet()->mergeCells("A18:B18");
$objPHPExcel->getSheet()->mergeCells("A19:B19");
$objPHPExcel->getSheet()->mergeCells("A20:B20");

$objPHPExcel->getSheet()->mergeCells("C15:D15");
$objPHPExcel->getSheet()->mergeCells("C16:D16");
$objPHPExcel->getSheet()->mergeCells("C17:D17");
$objPHPExcel->getSheet()->mergeCells("C18:D18");
$objPHPExcel->getSheet()->mergeCells("C19:D19");
$objPHPExcel->getSheet()->mergeCells("C20:D20");

$objPHPExcel->getSheet()->mergeCells("E15:F15");
$objPHPExcel->getSheet()->mergeCells("E16:F16");
$objPHPExcel->getSheet()->mergeCells("E17:F17");
$objPHPExcel->getSheet()->mergeCells("E18:F18");
$objPHPExcel->getSheet()->mergeCells("E19:F19");
$objPHPExcel->getSheet()->mergeCells("E20:F20");

$objPHPExcel->getSheet()->mergeCells("G15:H15");
$objPHPExcel->getSheet()->mergeCells("G16:H16");
$objPHPExcel->getSheet()->mergeCells("G17:H17");
$objPHPExcel->getSheet()->mergeCells("G18:H18");
$objPHPExcel->getSheet()->mergeCells("G19:H19");
$objPHPExcel->getSheet()->mergeCells("G20:H20");

$objPHPExcel->getSheet()->mergeCells("I15:J15");
$objPHPExcel->getSheet()->mergeCells("I16:J16");

$objPHPExcel->getSheet()->mergeCells("K15:L15");
$objPHPExcel->getSheet()->mergeCells("K16:L16");

$objPHPExcel->getSheet()->mergeCells("H17:L18");

$objPHPExcel->getSheet()->mergeCells("K15:L15");
$objPHPExcel->getSheet()->mergeCells("K16:L16");

$objPHPExcel->getSheet()->mergeCells("I19:J19");
$objPHPExcel->getSheet()->mergeCells("I20:J20");
$objPHPExcel->getSheet()->mergeCells("K19:L20");

$objPHPExcel->getSheet()->mergeCells("E22:G22");
$objPHPExcel->getSheet()->mergeCells("I22:K22");
$objPHPExcel->getSheet()->mergeCells("F23:G23");
$objPHPExcel->getSheet()->mergeCells("J23:K23");
$objPHPExcel->getSheet()->mergeCells("F24:G24");
$objPHPExcel->getSheet()->mergeCells("J24:K24");
$objPHPExcel->getSheet()->mergeCells("F25:G25");
$objPHPExcel->getSheet()->mergeCells("J25:K25");
$objPHPExcel->getActiveSheet()->getStyle('A6:J6')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
	  
$objPHPExcel->getSheet()->setCellValue('A1', 'AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS VE İZLEME-DEĞERLENDİRME FORMU');

$objPHPExcel->getSheet()->setCellValue('A2', 'İl/İlçe:');

$objPHPExcel->getSheet()->setCellValue('A3', 'Kurum:');

$objPHPExcel->getSheet()->setCellValue('A4','Dönem/Tarih:');

$objPHPExcel->getSheet()->setCellValue('A6', 'AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS VE VAKA İZLEME FORMU');

$objPHPExcel->getSheet()->setCellValue('A7', 'Hastalık Sınıflamaları');
$objPHPExcel->getSheet()->setCellValue('A12', 'Vaka Sayısı');

$objPHPExcel->getSheet()->setCellValue('E7', 'A09');

$objPHPExcel->getSheet()->setCellValue('E8', 'Diyare ve gastroenterit,');

$objPHPExcel->getSheet()->setCellValue('E9', 'enfeksiyöz kaynaklı olduğu');
$objPHPExcel->setActiveSheetIndex(1)->getStyle("E11:J11")->getFont()->setName('Arial')->setSize(8);

$objPHPExcel->getSheet()->setCellValue('E10', 'tahmin edilen');
$objPHPExcel->getSheet()->setCellValue('E11', '0-59 aylık');
$objPHPExcel->getSheet()->setCellValue('F11', '5 yaş ve üzeri');

$objPHPExcel->getSheet()->setCellValue('G7', 'R11');

$objPHPExcel->getSheet()->setCellValue('G8', '');

$objPHPExcel->getSheet()->setCellValue('G9', '');

$objPHPExcel->getSheet()->setCellValue('G8', 'Bulantı ve kusma');
$objPHPExcel->getSheet()->setCellValue('G11', '0-59 aylık');
$objPHPExcel->getSheet()->setCellValue('H11', '5 yaş ve üzeri');	

$objPHPExcel->getSheet()->setCellValue('I7', 'K52');

$objPHPExcel->getSheet()->setCellValue('I8', '');

$objPHPExcel->getSheet()->setCellValue('I8', 'Enfektif olmayan diğer');

$objPHPExcel->getSheet()->setCellValue('I10', 'gastroenterit ve kolit');
$objPHPExcel->getSheet()->setCellValue('I11', '0-59 aylık');
$objPHPExcel->getSheet()->setCellValue('J11', '5 yaş ve üzeri');
$objPHPExcel->getSheet()->setCellValue('A14', 'AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS LABORATUVAR SONUÇLARI İZLEME-DEĞERLENDİRME FORMU');
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A15")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A17")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A19")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("C17")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet()->setCellValue('A15', 'YAPILAN GAİTA KÜLTÜR SAYISI');
$objPHPExcel->getSheet()->setCellValue('A17', 'YAPILAN GAİTA PARAZİT İNCELEME SAYISI');
$objPHPExcel->getSheet()->setCellValue('A19', 'YAPILAN VİRAL ETKEN İNCELEME SAYISI');
$objPHPExcel->getSheet()->setCellValue('C15', 'Vibrio cholerae (A00)');
$objPHPExcel->getSheet()->setCellValue('E15', 'Salmonella sp.(A02)');
$objPHPExcel->getSheet()->setCellValue('G15', 'Shigella sp.(A03)');
$objPHPExcel->getSheet()->setCellValue('I15', 'Enterohemorragic Escherichia Coli(A04.3)');
$objPHPExcel->getSheet()->setCellValue('K15', 'Campylobacter (A04.5)');

$objPHPExcel->getSheet()->setCellValue('C17', 'Entamoeba histolytica(A06)');
$objPHPExcel->getSheet()->setCellValue('E17', 'Cryptosporodium(A07.2)');

$objPHPExcel->getSheet()->setCellValue('C19', 'Rota Virüs (A08.0)');
$objPHPExcel->getSheet()->setCellValue('E19', 'Noro Virüs (A08.1)');
$objPHPExcel->getSheet()->setCellValue('G19', 'Adeno Virüs (A08.2)');
$objPHPExcel->getSheet()->setCellValue('I19', 'Hepatit A Virüsüs (B15)');
$objPHPExcel->setActiveSheetIndex(1)->getStyle("E24")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("I24")->getFont()->setName('Arial')->setSize(9);

$objPHPExcel->getSheet()->setCellValue('E22', 'Formu Düzenleyen');
$objPHPExcel->getSheet()->setCellValue('E23', 'Ad/Soyad');
$objPHPExcel->getSheet()->setCellValue('E24', 'Ünvan/Görev');
$objPHPExcel->getSheet()->setCellValue('E25', 'İmza');

$objPHPExcel->getSheet()->setCellValue('I22', 'Onaylayan');
$objPHPExcel->getSheet()->setCellValue('I23', 'Ad/Soyad');
$objPHPExcel->getSheet()->setCellValue('I24', 'Ünvan/Görev');
$objPHPExcel->getSheet()->setCellValue('I25', 'İmza');
//$objPHPExcel->getSheet()->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
$objPHPExcel->getActiveSheet()->getStyle('H4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet()->getStyle('J2:J3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );

$objPHPExcel->getActiveSheet()->getStyle('E23:K25')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );	  



$objPHPExcel->getSheet()->getStyle('A6:L22')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet()->getStyle('A6:L22')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->setActiveSheetIndex()->getStyle("A6:J6")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A12:J12")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A7:D11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("E11:F11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("G11:H11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("I11:J11")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A14:L16")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A17:G18")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A19:J20")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("E22:G25")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("I22:K25")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex()->getStyle("E7:F10")->applyFromArray($coklukenarlik);
$objPHPExcel->setActiveSheetIndex()->getStyle("G7:H10")->applyFromArray($coklukenarlik);
$objPHPExcel->setActiveSheetIndex()->getStyle("I7:J10")->applyFromArray($coklukenarlik);

//$objPHPExcel->setActiveSheetIndex()->getStyle("A6:K12")->applyFromArray($ciftcizgi);

$ilim=trsuz($ilinadi);
$iltoplami='İL TOPLAMI';
$ilinadi=$ilim.' '.$iltoplami;
$yil="YILI";
$yili=$yilgelen.' '.$yil;
$objPHPExcel->setActiveSheetIndex()

->setCellValue('B2', $ilim)
->setCellValue('B3', $iltoplami)
->setCellValue('B4', $yili)



 //Vaka Sayıları
->setCellValue('E12', $tverim1)
->setCellValue('F12', $tverim2)
->setCellValue('G12', $tverim3)
->setCellValue('H12', $tverim4)
->setCellValue('I12', $tverim5)
->setCellValue('J12', $tverim6)
->setCellValue('A16', $tverim7)
->setCellValue('C16', $tverim8)
->setCellValue('E16', $tverim9)
->setCellValue('G16', $tverim10)
->setCellValue('I16', $tverim11)
->setCellValue('K16', $tverim12)
->setCellValue('A18', $tverim13)
->setCellValue('C18', $tverim14)
->setCellValue('E18', $tverim15)
->setCellValue('A20', $tverim16)
->setCellValue('C20', $tverim17)
->setCellValue('E20', $tverim18)
->setCellValue('G20', $tverim19)
->setCellValue('I20', $tverim20);

			
			

$objPHPExcel->getActiveSheet()->setTitle($ilinadi);

$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);

$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

//Kenar Bosluklari

// margin is set in inches (0.5cm)

$margin = 1.00 / 2.54;



$objPHPExcel->getActiveSheet()->getPageMargins()->setTop($margin);

$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom($margin);

$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft($margin);

$objPHPExcel->getActiveSheet()->getPageMargins()->setRight($margin);

}



$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);















// Redirect output to a client�s web browser (Excel5)

header('Content-Type: application/vnd.ms-excel');

header('Content-Disposition: attachment;filename="Form013_Yer-Yil.xls"');

header('Cache-Control: max-age=0');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

$objWriter->save('php://output');

exit;

