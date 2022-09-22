<?php
set_time_limit(600);
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
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
require_once('con_np.php');

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
?>
<?php

$resultvyil = @mysql_query("select vocadi as vvv,vyiladi as vyiladi,
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
sum(v60) as v60
from yg where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen') group by vyiladi order by vyiladi desc") or die (mysql_error()) ;

while($sonucum=mysql_fetch_array($resultvyil)){
$socadi=$sonucum['vvv'];
$yiladi=$sonucum['vyiladi'];
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

// YAŞ GRUBU TOPLAMLARI
$sifir=$verim1+$verim19 ;
$bes=$verim2+$verim20 ;
$on=$verim3+$verim21 ;
$onbes=$verim4+$verim22 ;
$yirmi=$verim5+$verim23 ;
$yirmibes=$verim6+$verim24 ;
$otuz=$verim7+$verim25 ;
$otuzbes=$verim8+$verim26 ;
$kirk=$verim9+$verim27 ;
$kirkbes=$verim10+$verim28 ;
$elli=$verim11+$verim29 ;
$ellibes=$verim12+$verim30 ;
$atmis=$verim13+$verim31 ;
$atmisbes=$verim14+$verim32 ;
$yetmis=$verim15+$verim33 ;
$yetmisbes=$verim16+$verim34 ;
$seksen=$verim17+$verim35 ;
$seksenbes=$verim18+$verim36 ;
$ygkt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18;
$yget=$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29+$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36;
$ygt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29+$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36;
// MEDENİ HAL TOPLAMLARI
$cocuk=$verim37+$verim42 ;
$bekar=$verim38+$verim43 ;
$evli=$verim39+$verim44 ;
$bosanmis=$verim40+$verim45 ;
$esiolmus=$verim41+$verim46 ;
$mhkt=$verim37+$verim38+$verim39+$verim40+$verim41;
$mhet=$verim42+$verim43+$verim44+$verim45+$verim46;
$mht=$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46;
// ÖĞRENİM DURUMU TOPLAMLARI
$ocd=$verim47+$verim54;
$oyd=$verim48+$verim55;
$oy=$verim49+$verim56;
$ilk=$verim50+$verim57;
$orta=$verim51+$verim58;
$lise=$verim52+$verim59;
$yo=$verim53+$verim60;
$odkt=$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
$odet=$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;
$odt=$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53+$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;

$ilkod=trsuz(substr(trim($socadi),0,2));
$ilcekod=trsuz(substr(trim($socadi),3,2));
$ahkod=trsuz(substr(trim($socadi),6,3));
$kodu=$ilkod.'.'.$ilcekod.'.'.$ahkod;

if(substr(trim($socadi),6,3)>99){
$ahkod=trsuz(substr(trim($socadi),6,3));
}else if(substr(trim($socadi),6,3)>9 and substr(trim($socadi),6,3)<99){
$ahkod=trsuz(substr(trim($socadi),7,2));
}else{
$ahkod=trsuz(substr(trim($socadi),8,1));

}
//$say=mysql_num_rows($resultvyil);

//HEre your first sheet
   // $sheet = $objPHPExcel->getActiveSheet(0);

    //Start adding next sheets
    
    $objWorkSheet = $objPHPExcel->createSheet(); //Setting index when creating
	
//Veritabani islemi deneme							 

//require_once('con_013.php');
//require_once('ilfrm013sql.php');

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

for ($col = 'A'; $col != 'E'; $col++) {

$objPHPExcel->getSheet()->getColumnDimension($col)->setWidth(30);

}

//$objPHPExcel->getSheet()->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);

/*$objPHPExcel->getSheet()->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet()->getStyle('I8:J12')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet()->getStyle('C11')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet()->getStyle('C11')->getFill()->getStartColor()->setARGB('# bebebe');

$objPHPExcel->getSheet()->getStyle('C12:H12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

$objPHPExcel->getSheet()->getStyle('C12:H12')->getFill()->getStartColor()->setARGB('# bebebe');

//satir y�ksekligi

//$objPHPExcel->getSheet()->getRowDimension('1')->setRowHeight(230);

//Yazinin y�n�

//$objPHPExcel->getSheet()->getStyle('A1:AD1')->getAlignment()->setTextRotation(90);*/

//h�cre degeri
for ($row = '1'; $row != '45'; $row++) {

$objPHPExcel->getSheet()->getRowDimension($row)->setRowHeight(19);

}


$objPHPExcel->getSheet()->getStyle('A1:D44')->getAlignment()->setWrapText(true);

//$objPHPExcel->getSheet()->getStyle('A6:K66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet()->getStyle('A6:K66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getActiveSheet()->getStyle('A1:K44')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A1:D44')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getSheet()->mergeCells("A1:D1");	  
$objPHPExcel->getSheet()->mergeCells("A4:D4");
$objPHPExcel->getSheet()->mergeCells("A25:D25");
$objPHPExcel->getSheet()->mergeCells("A26:D26");
$objPHPExcel->getSheet()->mergeCells("A34:D34");
$objPHPExcel->getSheet()->mergeCells("A35:D35");
$objPHPExcel->getActiveSheet()->getStyle('A2:D3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
	  
$objPHPExcel->getSheet()->setCellValue('A1', 'NÜFUSUN YAŞ,CİNS,MEDENİ HAL VE ÖĞRENİM DURUMUNA GÖRE DAĞILIM VERİLERİ');

$objPHPExcel->getSheet()->setCellValue('A2', 'İL:');

$objPHPExcel->getSheet()->setCellValue('A3', 'İLÇE:');

$objPHPExcel->getSheet()->setCellValue('C2','KURUM:');

$objPHPExcel->getSheet()->setCellValue('C3','YIL:');

$objPHPExcel->getSheet()->setCellValue('A4','NÜFUSUN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI:');

$objPHPExcel->getSheet()->setCellValue('A5','YAŞ GRUBU');

$objPHPExcel->getSheet()->setCellValue('B5','KADIN');

$objPHPExcel->getSheet()->setCellValue('C5','ERKEK');

$objPHPExcel->getSheet()->setCellValue('D5','TOPLAM');

$objPHPExcel->getSheet()->setCellValue('A6','0-4');

$objPHPExcel->getSheet()->setCellValue('A7','5-9');

$objPHPExcel->getSheet()->setCellValue('A8','10-14');

$objPHPExcel->getSheet()->setCellValue('A9','15-19');

$objPHPExcel->getSheet()->setCellValue('A10','20-24');

$objPHPExcel->getSheet()->setCellValue('A11','25-29');

$objPHPExcel->getSheet()->setCellValue('A12','30-34');

$objPHPExcel->getSheet()->setCellValue('A13','35-39');

$objPHPExcel->getSheet()->setCellValue('A14','40-44');

$objPHPExcel->getSheet()->setCellValue('A15','45-49');

$objPHPExcel->getSheet()->setCellValue('A16','50-54');

$objPHPExcel->getSheet()->setCellValue('A17','55-59');

$objPHPExcel->getSheet()->setCellValue('A18','60-64');

$objPHPExcel->getSheet()->setCellValue('A19','65-69');

$objPHPExcel->getSheet()->setCellValue('A20','70-74');

$objPHPExcel->getSheet()->setCellValue('A21','75-79');

$objPHPExcel->getSheet()->setCellValue('A22','80-84');

$objPHPExcel->getSheet()->setCellValue('A23','85- +');

$objPHPExcel->getSheet()->setCellValue('A24','TOPLAM');

$objPHPExcel->getSheet()->setCellValue('A26','NÜFUSUN MEDENİ HALE GÖRE DAĞILIMI');

$objPHPExcel->getSheet()->setCellValue('A27','MEDENİ HALİ');

$objPHPExcel->getSheet()->setCellValue('B27','KADIN');

$objPHPExcel->getSheet()->setCellValue('C27','ERKEK');

$objPHPExcel->getSheet()->setCellValue('D27','TOPLAM');

$objPHPExcel->getSheet()->setCellValue('A28','ÇOCUK');

$objPHPExcel->getSheet()->setCellValue('A29','BEKAR');

$objPHPExcel->getSheet()->setCellValue('A30','EVLİ');

$objPHPExcel->getSheet()->setCellValue('A31','BOŞANMIŞ');

$objPHPExcel->getSheet()->setCellValue('A32','EŞİ ÖLMÜŞ');

$objPHPExcel->getSheet()->setCellValue('A33','TOPLAM');

$objPHPExcel->getSheet()->setCellValue('A35','NÜFUSUN ÖĞRENİM DURUMUNA GÖRE DAĞILIMI');

$objPHPExcel->getSheet()->setCellValue('A36','ÖĞRENİM DURUMU');

$objPHPExcel->getSheet()->setCellValue('B36','KADIN');

$objPHPExcel->getSheet()->setCellValue('C36','ERKEK');

$objPHPExcel->getSheet()->setCellValue('D36','TOPLAM');

$objPHPExcel->getSheet()->setCellValue('A37','OKUL ÇAĞINDA DEĞİL');

$objPHPExcel->getSheet()->setCellValue('A38','OKUR YAZAR DEĞİL');

$objPHPExcel->getSheet()->setCellValue('A39','OKUR YAZAR');

$objPHPExcel->getSheet()->setCellValue('A40','İLKOKUL');

$objPHPExcel->getSheet()->setCellValue('A41','ORTAOKUL');

$objPHPExcel->getSheet()->setCellValue('A42','LİSE');

$objPHPExcel->getSheet()->setCellValue('A43','YÜKSEKOKUL');

$objPHPExcel->getSheet()->setCellValue('A44','TOPLAM');

//$objPHPExcel->getSheet()->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
/*$objPHPExcel->getActiveSheet()->getStyle('H4')->getAlignment()->applyFromArray(
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
	  );*/

/*$objPHPExcel->getSheet()->getStyle('A6:K60')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet()->getStyle('A6:K60')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);*/

$objPHPExcel->setActiveSheetIndex()->getStyle("A4:D24")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A26:D33")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex()->getStyle("A35:D44")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex()->getStyle("A4:D24")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex()->getStyle("A26:D33")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex()->getStyle("A35:D44")->applyFromArray($ciftcizgi);

$objPHPExcel->setActiveSheetIndex()

->setCellValue('B2', mb_convert_encoding ($ilinadi, "UTF-8", "ISO-8859-9" ))
->setCellValue('B3', mb_convert_encoding ($ilceninadi, "UTF-8", "ISO-8859-9" ))
->setCellValue('D2', mb_convert_encoding ($socadi, "UTF-8", "ISO-8859-9"))
->setCellValue('D3', $yilgelen)

 //YAŞ GRUPLARI
 //KADIN          
            ->setCellValue('B6', $verim1)

            ->setCellValue('B7', $verim2)
			
			->setCellValue('B8', $verim3)

            ->setCellValue('B9', $verim4)
			
			->setCellValue('B10', $verim5)

            ->setCellValue('B11', $verim6)
			
			->setCellValue('B12', $verim7)

            ->setCellValue('B13', $verim8)
			
			->setCellValue('B14', $verim9)

            ->setCellValue('B15', $verim10)
			
			->setCellValue('B16', $verim11)

            ->setCellValue('B17', $verim12)
			
			->setCellValue('B18', $verim13)
			
			 ->setCellValue('B19', $verim14)

            ->setCellValue('B20', $verim15)
			
			->setCellValue('B21', $verim16)
			
			->setCellValue('B22', $verim17)
			
			->setCellValue('B23', $verim18)

            ->setCellValue('B24', $ygkt)
			
			 //ERKEK          
            ->setCellValue('C6', $verim19)

            ->setCellValue('C7', $verim20)
			
			->setCellValue('C8', $verim21)

            ->setCellValue('C9', $verim22)
			
			->setCellValue('C10', $verim23)

            ->setCellValue('C11', $verim24)
			
			->setCellValue('C12', $verim25)

            ->setCellValue('C13', $verim26)
			
			->setCellValue('C14', $verim27)

            ->setCellValue('C15', $verim28)
			
			->setCellValue('C16', $verim29)

            ->setCellValue('C17', $verim30)
			
			->setCellValue('C18', $verim31)
			
			 ->setCellValue('C19', $verim32)

            ->setCellValue('C20', $verim33)
			
			->setCellValue('C21', $verim34)
			
			->setCellValue('C22', $verim35)
			
			->setCellValue('C23', $verim36)

            ->setCellValue('C24', $yget)		
			
	 //YAŞ GRUBU GENEL TOPLAM          
            ->setCellValue('D6', $sifir)

            ->setCellValue('D7', $bes)
			
			->setCellValue('D8', $on)

            ->setCellValue('D9', $onbes)
			
			->setCellValue('D10', $yirmi)

            ->setCellValue('D11', $yirmibes)
			
			->setCellValue('D12', $otuz)

            ->setCellValue('D13', $otuzbes)
			
			->setCellValue('D14', $kirk)

            ->setCellValue('D15', $kirkbes)
			
			->setCellValue('D16', $elli)

            ->setCellValue('D17', $ellibes)
			
			->setCellValue('D18', $atmis)
			
			 ->setCellValue('D19', $atmisbes)

            ->setCellValue('D20', $yetmis)
			
			->setCellValue('D21', $yetmisbes)
			
			->setCellValue('D22', $seksen)
			
			->setCellValue('D23', $seksenbes)

            ->setCellValue('D24', $ygt)	
			
			//MEDENİ HAL
			//KADIN          
            ->setCellValue('B28', $verim37)

            ->setCellValue('B29', $verim38)
			
			->setCellValue('B30', $verim39)

            ->setCellValue('B31', $verim40)
			
			->setCellValue('B32', $verim41)

            ->setCellValue('B33', $mhkt)
			
			//ERKEK
			
			->setCellValue('C28', $verim42)

            ->setCellValue('C29', $verim43)
			
			->setCellValue('C30', $verim44)

            ->setCellValue('C31', $verim45)
			
			->setCellValue('C32', $verim46)

            ->setCellValue('C33', $mhet)
			
			//TOPLAM
			
			->setCellValue('D28', $cocuk)
			
			->setCellValue('D29', $bekar)

            ->setCellValue('D30', $evli)
			
			->setCellValue('D31', $bosanmis)
			
			->setCellValue('D32', $esiolmus)
			
			->setCellValue('D33', $mht)

           //ÖĞRENİM DURUMU
		   //KADIN          
            ->setCellValue('B37', $verim47)

            ->setCellValue('B38', $verim48)
			
			->setCellValue('B39', $verim49)

            ->setCellValue('B40', $verim50)
			
			->setCellValue('B41', $verim51)
			
			->setCellValue('B42', $verim52)
			
			->setCellValue('B43', $verim53)

            ->setCellValue('B44', $odkt)
			
			//ERKEK
			
			->setCellValue('C37', $verim54)

            ->setCellValue('C38', $verim55)
			
			->setCellValue('C39', $verim56)

            ->setCellValue('C40', $verim57)
			
			->setCellValue('C41', $verim58)
			
			->setCellValue('C42', $verim59)
			
			->setCellValue('C43', $verim60)

            ->setCellValue('C44', $odet)
			
			//TOPLAM
			
			->setCellValue('D37', $ocd)
			
			->setCellValue('D38', $oyd)

            ->setCellValue('D39', $oy)
			
			->setCellValue('D40', $ilk)
			
			->setCellValue('D41', $orta)
			
			->setCellValue('D42', $lise)
			
			->setCellValue('D43', $yo)
			
			->setCellValue('D44', $odt);
			
$objPHPExcel->getSheet()->setTitle($yiladi);

 // Set active sheet index to the first sheet, so Excel opens this as the first sheet

//$objPHPExcel->setActiveSheetIndex();

$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);

$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);

//Kenar Bosluklari

// margin is set in inches (0.5cm)

$margin = 1.00 / 2.54;



$objPHPExcel->getActiveSheet()->getPageMargins()->setTop($margin);

$objPHPExcel->getActiveSheet()->getPageMargins()->setBottom($margin);

$objPHPExcel->getActiveSheet()->getPageMargins()->setLeft($margin);

$objPHPExcel->getActiveSheet()->getPageMargins()->setRight($margin);

}

// Redirect output to a client�s web browser (Excel5)

header('Content-Type: application/vnd.ms-excel');

header('Content-Disposition: attachment;filename="Nüfus_Verileri_Kurum.xls"');

header('Cache-Control: max-age=0');



$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

$objWriter->save('php://output');

exit;

