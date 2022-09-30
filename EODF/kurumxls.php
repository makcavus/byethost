<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2011 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2011 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.6, 2011-02-27
 */

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
							 
$objPHPExcel->createSheet(1);
							 
//Veritabani islemi deneme							 
require_once('con_023.php');
							 
if($yilgelen==""){
$resultvyil = @mysql_query("select vocadi as vvv,
v1 as v1,
sum(v2) as v2, 
v3 as v3,
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

from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen') group by vocadi") ;

}else{
$resultvyil = @mysql_query("select vocadi as vvv,
v1 as v1,
sum(v2) as v2, 
v3 as v3,
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
from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen') group by vocadi") or die (mysql_error()) ;

}
$row = 2;
//$row = mysql_num_rows($result);
//echo $rows;
while($sonucum=mysql_fetch_array($resultvyil)){
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

$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz(substr(trim($socadi),6,3));
$kodu=$ilkod.'.'.$ilcekod.'.'.$ahkod;
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
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);

//yatay ve dikey ortala
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AD1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AD1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_BOTTOM);

//s�tun genisligi
$objPHPExcel->getActiveSheet(0)->getColumnDimension('A')->setWidth(10);
$objPHPExcel->getActiveSheet(0)->getColumnDimension('B')->setWidth(22);
$objPHPExcel->getActiveSheet(0)->getColumnDimension('C')->setWidth(7);


for ($col = 'D'; $col != 'AE'; $col++) {
$objPHPExcel->getActiveSheet(0)->getColumnDimension($col)->setWidth(5.3);
}
//satir y�ksekligi
$objPHPExcel->getActiveSheet(0)->getRowDimension('1')->setRowHeight(230);
//Yazinin y�n�
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);
//h�cre degeri
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AD1')->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)

->setCellValue('A1', 'AİLE HEKİMLİĞİ KODU')
->setCellValue('B1', 'AİLE HEKİMİNİN ADI')
->setCellValue('C1', 'KAYITLI NÜFUSU')
->setCellValue('D1','KAYITLI BEBEK SAYISI')
->setCellValue('E1','BEBEK İZLEM SAYISI')
->setCellValue('F1','ÖLEN BEBEK SAYISI')
->setCellValue('G1','YENİDOĞAN TARAMASI YAPILAN BEBEK SAYISI')
->setCellValue('H1','K.HİPOTROİDİ İÇİN ALINAN KAN ÖRNEĞİ SAYISI')
->setCellValue('I1','FENİLKETANÜRİ İÇİN ALINAN KAN ÖRNEĞİ SAYISI')
->setCellValue('J1','İŞİTME TARAMASI YAPILAN BEBEK SAYISI')
->setCellValue('K1','DEMİR VERİLEN BEBEK SAYISI')
->setCellValue('L1','DAĞITILAN DEMİR PREPARATI SAYISI(KUTU)')
->setCellValue('M1','D VİTAMİNİ VERİLEN BEBEK SAYISI')
->setCellValue('N1','DAĞITILAN D VİT PREPARATI SAYISI(KUTU)')
->setCellValue('O1','TESBİT EDİLEN GEBE')
->setCellValue('P1','GEBE İZLEM SAYISI')
->setCellValue('Q1','DEMİR VERİLEN GEBE SAYISI')
->setCellValue('R1','GEBELERE DAĞITILAN DEMİR PREPARATI SAYISI(KUTU)')
->setCellValue('S1','DEMİR VERİLEN LOHUSA SAYISI')
->setCellValue('T1','ÖLEN ANNE SAYISI')
->setCellValue('U1','HASTANEDE YAPILAN DOĞUM SAYISI')
->setCellValue('V1','SEZERYENLE DOĞUM SAYISI')
->setCellValue('W1','YÖNTEM DAĞITILAN KİŞİ SAYISI')
->setCellValue('X1','HAP')
->setCellValue('Y1','KONDOM')
->setCellValue('Z1','RİA')
->setCellValue('AA1','CERRAHİ YÖNTEM')
->setCellValue('AB1','DİĞER ETKİLİ YÖNTEMLER')
->setCellValue('AC1','BE ALINAN KAN ÖRNEĞİ SAYISI')
->setCellValue('AD1','TESBİT EDİLEN LOHUSA SAYISI');


// Rename sheet
$objPHPExcel->getActiveSheet(0)->setTitle('AÇS ve AP');
//2. ÇALIŞMA SAYFASI
//yatay ve dikey ortala
$objPHPExcel->getSheet(1)->getStyle('A1:T1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(1)->getStyle('A1:T1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_BOTTOM);


//h�creye kenarlik �iz
$objPHPExcel->getSheet(1)->getStyle('A1:T1')->applyFromArray($styleThinBlackBorderOutline);


//s�tun genisligi
$objPHPExcel->getSheet(1)->getColumnDimension('A')->setWidth(15);
$objPHPExcel->getSheet(1)->getColumnDimension('B')->setWidth(25);
$objPHPExcel->getSheet(1)->getColumnDimension('C')->setWidth(11);


for ($col = 'D'; $col != 'U'; $col++) {
$objPHPExcel->getSheet(1)->getColumnDimension($col)->setWidth(7.6);
}
//satir y�ksekligi
$objPHPExcel->getSheet(1)->getRowDimension('1')->setRowHeight(230);
//Yazinin y�n�
$objPHPExcel->getSheet(1)->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);
//h�cre degeri
$objPHPExcel->getSheet(1)->getStyle('A1:AD1')->getAlignment()->setWrapText(true);
$objPHPExcel->getSheet(1)->setCellValue('A1', 'AİLE HEKİMLİĞİ KODU');
$objPHPExcel->getSheet(1)->setCellValue('B1', 'AİLE HEKİMİNİN ADI');
$objPHPExcel->getSheet(1)->setCellValue('C1', 'KAYITLI NÜFUSU');
$objPHPExcel->getSheet(1)->setCellValue('D1','KAYITLI BEBEK SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('F1','0-11 AY BEBEKLERE UYGULANAN DaBT-İPA-Hib1 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('G1','0-11 AY BEBEKLERE UYGULANAN DaBT-İPA-Hib2 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('H1','0-11 AY BEBEKLERE UYGULANAN DaBT-İPA-Hib3 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('I1','DaBT-İPA-Hib RAPEL AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('J1','0-11 AY BEBEKLERE UYGULANAN HEPATİT B1 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('K1','0-11 AY BEBEKLERE UYGULANAN HEPATİT B2 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('L1','0-11 AY BEBEKLERE UYGULANAN HEPATİT B3 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('M1','0-11 AY BEBEKLERE UYGULANAN KPA1 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('N1','0-11 AY BEBEKLERE UYGULANAN KPA2 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('O1','0-11 AY BEBEKLERE UYGULANAN KPA3 AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('P1','12-23 AY BEBEKLERE UYGULANAN KPA RAPEL AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('Q1','12-23 AYDA UYGULANAN KKK AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('R1','İLKÖĞRETİM 1.SINIF DaBT-İPA AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('S1','İLKÖĞRETİM 1.SINIF KKK AŞI DOZU SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('T1','İLKÖĞRETİM 8.SINIF Td AŞI DOZU SAYISI');
/*$objPHPExcel->getSheet(1)->setCellValue('T1','ÖLEN ANNE SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('U1','HASTANEDE YAPILAN DOĞUM SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('V1','SEZERYENLE DOĞUM SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('W1','YÖNTEM DAĞITILAN KİŞİ SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('X1','HAP');
$objPHPExcel->getSheet(1)->setCellValue('Y1','KONDOM');
$objPHPExcel->getSheet(1)->setCellValue('Z1','RİA');
$objPHPExcel->getSheet(1)->setCellValue('AA1','CERRAHİ YÖNTEM');
$objPHPExcel->getSheet(1)->setCellValue('AB1','DİĞER ETKİLİ YÖNTEMLER');
$objPHPExcel->getSheet(1)->setCellValue('AC1','BE ALINAN KAN ÖRNEĞİ SAYISI');
$objPHPExcel->getSheet(1)->setCellValue('AD1','TESBİT EDİLEN LOHUSA SAYISI');*/
// Rename sheet
$objPHPExcel->getSheet(1)->setTitle('Bulaşıcı Hastalıklar');

// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
//echo date('H:i:s') . " Set header/footer\n";
//Sayfa �st-Alt Bilgisi
//$objPHPExcel->getActiveSheet(0)->getHeaderFooter()->setOddHeader('&L&BInvoice&RPrinted on &D');
//$objPHPExcel->getActiveSheet(0)->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

// Set page orientation and size
//echo date('H:i:s') . " Set page orientation and size\n";

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet(0)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet(0)->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
//Kenar Bosluklari
// margin is set in inches (0.5cm)
$margin = 0.5 / 2.54;

$objPHPExcel->getActiveSheet(0)->getPageMargins()->setTop($margin);
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setBottom($margin);
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setLeft($margin);
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setRight($margin);


//---------------------------------------------------------------------
//h�creye kenarlik �iz
$objPHPExcel->getActiveSheet(0)->getStyle('A1:AD1')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet(0)->getStyle("A$row:AD$row")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getActiveSheet(0)->getStyle("A$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet(0)->getStyle("B$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

$objPHPExcel->getActiveSheet(0)->getStyle("C$row:AD$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->setActiveSheetIndex(0)

            ->setCellValueExplicit('A'.$row, $socadi, PHPExcel_Cell_DataType::TYPE_STRING)
			->setCellValue('B'.$row, mb_convert_encoding ($verim176, "UTF-8", "ISO-8859-9" ))
            ->setCellValue('C'.$row, $verim1)
            ->setCellValue('D'.$row, $verim3)
            ->setCellValue('E'.$row, $verim4)
			->setCellValue('F'.$row, $verim5)
            ->setCellValue('G'.$row, $verim6)
            ->setCellValue('H'.$row, $verim7)
			->setCellValue('I'.$row, $verim8)
            ->setCellValue('J'.$row, $verim9)
            ->setCellValue('K'.$row, $verim10)
			->setCellValue('L'.$row, $verim11)
            ->setCellValue('M'.$row, $verim12)
            ->setCellValue('N'.$row, $verim13)
			->setCellValue('O'.$row, $verim14)
            ->setCellValue('P'.$row, $verim15)
            ->setCellValue('Q'.$row, $verim16)
			->setCellValue('R'.$row, $verim17)
            ->setCellValue('S'.$row, $verim18)
            ->setCellValue('T'.$row, $verim19)
			->setCellValue('U'.$row, $verim20)
            ->setCellValue('V'.$row, $verim21)
            ->setCellValue('W'.$row, $verim22)
			->setCellValue('X'.$row, $verim23)
            ->setCellValue('Y'.$row, $verim24)
            ->setCellValue('Z'.$row, $verim25)
			->setCellValue('AA'.$row, $verim26)
            ->setCellValue('AB'.$row, $verim27)
            ->setCellValue('AC'.$row, $verim28)
			->setCellValue('AD'.$row, $verim29);
			   //2 SAYFA verileri

			$objPHPExcel->getSheet(1)->getStyle('A1:T1')->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getSheet(1)->getStyle("A$row:T$row")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->getSheet(1)->getStyle("A$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(1)->getStyle("B$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

$objPHPExcel->getSheet(1)->getStyle("C$row:T$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->setActiveSheetIndex(1)

            ->setCellValueExplicit('A'.$row, $socadi, PHPExcel_Cell_DataType::TYPE_STRING)
			->setCellValue('B'.$row, mb_convert_encoding ($verim176, "UTF-8", "ISO-8859-9" ))
            ->setCellValue('C'.$row, $verim1)
            ->setCellValue('D'.$row, $verim3)
            ->setCellValue('E'.$row, $verim30)
			->setCellValue('F'.$row, $verim31)
            ->setCellValue('G'.$row, $verim32)
            ->setCellValue('H'.$row, $verim33)
			->setCellValue('I'.$row, $verim34)
            ->setCellValue('J'.$row, $verim35)
            ->setCellValue('K'.$row, $verim36)
			->setCellValue('L'.$row, $verim37)
            ->setCellValue('M'.$row, $verim38)
            ->setCellValue('N'.$row, $verim39)
			->setCellValue('O'.$row, $verim40)
            ->setCellValue('P'.$row, $verim41)
            ->setCellValue('Q'.$row, $verim42)
			->setCellValue('R'.$row, $verim43)
            ->setCellValue('S'.$row, $verim44)
            ->setCellValue('T'.$row, $verim45);
			/*->setCellValue('U'.$row, $verim20)
            ->setCellValue('V'.$row, $verim21)
            ->setCellValue('W'.$row, $verim22)
			->setCellValue('X'.$row, $verim23)
            ->setCellValue('Y'.$row, $verim24)
            ->setCellValue('Z'.$row, $verim25)
			->setCellValue('AA'.$row, $verim26)
            ->setCellValue('AB'.$row, $verim27)
            ->setCellValue('AC'.$row, $verim28)
			->setCellValue('AD'.$row, $verim29);*/
   $row++;
   
   
 
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
$ilceetiket=trsuz('NOLU AİLE HEKİMİ TOPLAMI');
$topilce=$ilceninadi.' '.$ilceetiket;
?>
<?php

   $row=$row+1;
   $durum=$socadi.' '.$ilceetiket;
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$row,mb_convert_encoding ($durum, "UTF-8", "ISO-8859-9" ));
$objPHPExcel->getActiveSheet(0)->mergeCells("T$row:AD$row");
$objPHPExcel->getActiveSheet(0)->getStyle("T$row:AD$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

   $objPHPExcel->setActiveSheetIndex(1)->setCellValue('K'.$row,mb_convert_encoding ($durum, "UTF-8", "ISO-8859-9" ));
$objPHPExcel->getSheet(1)->mergeCells("K$row:T$row");
$objPHPExcel->getSheet(1)->getStyle("K$row:T$row")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

// Set header and footer. When no different headers for odd/even are used, odd header is assumed.
//echo date('H:i:s') . " Set header/footer\n";
//Sayfa �st-Alt Bilgisi
//$objPHPExcel->getSheet(1)->getHeaderFooter()->setOddHeader('&L&BInvoice&RPrinted on &D');
//$objPHPExcel->getSheet(1)->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');

// Set page orientation and size
//echo date('H:i:s') . " Set page orientation and size\n";
$objPHPExcel->getSheet(1)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getSheet(1)->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
//Kenar Bosluklari
// margin is set in inches (0.5cm)
$margin = 0.5 / 2.54;

$objPHPExcel->getSheet(1)->getPageMargins()->setTop($margin);
$objPHPExcel->getSheet(1)->getPageMargins()->setBottom($margin);
$objPHPExcel->getSheet(1)->getPageMargins()->setLeft($margin);
$objPHPExcel->getSheet(1)->getPageMargins()->setRight($margin);
/*///KODLARRRRRRRRRRRRRRRRRRR
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);





*/

// Redirect output to a client�s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Degerlendirme Raporu Ah.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
