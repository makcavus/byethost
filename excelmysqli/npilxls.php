<?php
set_time_limit(600);

function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

$ilgelen=$_GET['selectil']; 

$ilcegelen=$_GET['selectilce']; 

$ocgelen=$_GET['selectoc']; 

$yilgelen=$_GET['selectyil'];


/** Error reporting */

error_reporting(E_ALL);

date_default_timezone_set('Europe/London');

/** PHPExcel_IOFactory */

require_once ('phpexcel/Classes/PHPExcel.php');

require_once ('phpexcel/Classes/PHPExcel/IOFactory.php');

include('con_np.php');


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

sum(v60) as v60

from yg where(ilidi='$ilgelen' and vyiladi='$yilgelen') group by ilceidi order by ilceidi desc") ;

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

$ilceadi=@mysql_query("select * from ilce where(ilceid='$ilcadi' and ilinad='$ilgelen')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

//$ilceno=$ilcesonucum['ilceid'];

$ilceninadi=$ilcesonucum['ilcead'];

//$ilkod=trsuz(substr(trim($socadi),0,2));

//$ilcekod=trsuz(substr(trim($socadi),3,2));

//$ahkod=trsuz(substr(trim($socadi),6,3));

$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");

while($ilsonucum=mysql_fetch_array($iladi)){

$ilinadi=$ilsonucum['ilad'];

$iletiket=trsuz('IL TOPLAMI');

$topil=$ilinadi.' '.$iletiket;



			 
//$say=mysql_num_rows($resultvyil);

//HEre your first sheet
   // $sheet = $objPHPExcel->getActiveSheet(1);

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

$objPHPExcel->getSheet(1)->getColumnDimension($col)->setWidth(30);

}

//$objPHPExcel->getSheet(1)->getStyle('A1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_RED);

/*$objPHPExcel->getSheet(1)->getStyle('I8:J12')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);

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
for ($row = '1'; $row != '45'; $row++) {

$objPHPExcel->getSheet(1)->getRowDimension($row)->setRowHeight(19);

}


$objPHPExcel->getSheet(1)->getStyle('A1:D44')->getAlignment()->setWrapText(true);

//$objPHPExcel->getSheet(1)->getStyle('A6:K66')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(1)->getStyle('A6:K66')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getActiveSheet(1)->getStyle('A1:K44')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet(1)->getStyle('A1:D44')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getSheet(1)->mergeCells("A1:D1");	  
$objPHPExcel->getSheet(1)->mergeCells("A4:D4");
$objPHPExcel->getSheet(1)->mergeCells("A25:D25");
$objPHPExcel->getSheet(1)->mergeCells("A26:D26");
$objPHPExcel->getSheet(1)->mergeCells("A34:D34");
$objPHPExcel->getSheet(1)->mergeCells("A35:D35");
$objPHPExcel->getActiveSheet(1)->getStyle('A2:D3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );
	  
$objPHPExcel->getSheet(1)->setCellValue('A1', 'NÜFUSUN YAŞ,CİNS,MEDENİ HAL VE ÖĞRENİM DURUMUNA GÖRE DAĞILIM VERİLERİ');

$objPHPExcel->getSheet(1)->setCellValue('A2', 'İL:');

$objPHPExcel->getSheet(1)->setCellValue('A3', 'İLÇE:');

$objPHPExcel->getSheet(1)->setCellValue('C2','KURUM:');

$objPHPExcel->getSheet(1)->setCellValue('C3','YIL:');

$objPHPExcel->getSheet(1)->setCellValue('A4','NÜFUSUN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI:');

$objPHPExcel->getSheet(1)->setCellValue('A5','YAŞ GRUBU');

$objPHPExcel->getSheet(1)->setCellValue('B5','KADIN');

$objPHPExcel->getSheet(1)->setCellValue('C5','ERKEK');

$objPHPExcel->getSheet(1)->setCellValue('D5','TOPLAM');

$objPHPExcel->getSheet(1)->setCellValue('A6','0-4');

$objPHPExcel->getSheet(1)->setCellValue('A7','5-9');

$objPHPExcel->getSheet(1)->setCellValue('A8','10-14');

$objPHPExcel->getSheet(1)->setCellValue('A9','15-19');

$objPHPExcel->getSheet(1)->setCellValue('A10','20-24');

$objPHPExcel->getSheet(1)->setCellValue('A11','25-29');

$objPHPExcel->getSheet(1)->setCellValue('A12','30-34');

$objPHPExcel->getSheet(1)->setCellValue('A13','35-39');

$objPHPExcel->getSheet(1)->setCellValue('A14','40-44');

$objPHPExcel->getSheet(1)->setCellValue('A15','45-49');

$objPHPExcel->getSheet(1)->setCellValue('A16','50-54');

$objPHPExcel->getSheet(1)->setCellValue('A17','55-59');

$objPHPExcel->getSheet(1)->setCellValue('A18','60-64');

$objPHPExcel->getSheet(1)->setCellValue('A19','65-69');

$objPHPExcel->getSheet(1)->setCellValue('A20','70-74');

$objPHPExcel->getSheet(1)->setCellValue('A21','75-79');

$objPHPExcel->getSheet(1)->setCellValue('A22','80-84');

$objPHPExcel->getSheet(1)->setCellValue('A23','85- +');

$objPHPExcel->getSheet(1)->setCellValue('A24','TOPLAM');

$objPHPExcel->getSheet(1)->setCellValue('A26','NÜFUSUN MEDENİ HALE GÖRE DAĞILIMI');

$objPHPExcel->getSheet(1)->setCellValue('A27','MEDENİ HALİ');

$objPHPExcel->getSheet(1)->setCellValue('B27','KADIN');

$objPHPExcel->getSheet(1)->setCellValue('C27','ERKEK');

$objPHPExcel->getSheet(1)->setCellValue('D27','TOPLAM');

$objPHPExcel->getSheet(1)->setCellValue('A28','ÇOCUK');

$objPHPExcel->getSheet(1)->setCellValue('A29','BEKAR');

$objPHPExcel->getSheet(1)->setCellValue('A30','EVLİ');

$objPHPExcel->getSheet(1)->setCellValue('A31','BOŞANMIŞ');

$objPHPExcel->getSheet(1)->setCellValue('A32','EŞİ ÖLMÜŞ');

$objPHPExcel->getSheet(1)->setCellValue('A33','TOPLAM');

$objPHPExcel->getSheet(1)->setCellValue('A35','NÜFUSUN ÖĞRENİM DURUMUNA GÖRE DAĞILIMI');

$objPHPExcel->getSheet(1)->setCellValue('A36','ÖĞRENİM DURUMU');

$objPHPExcel->getSheet(1)->setCellValue('B36','KADIN');

$objPHPExcel->getSheet(1)->setCellValue('C36','ERKEK');

$objPHPExcel->getSheet(1)->setCellValue('D36','TOPLAM');

$objPHPExcel->getSheet(1)->setCellValue('A37','OKUL ÇAĞINDA DEĞİL');

$objPHPExcel->getSheet(1)->setCellValue('A38','OKUR YAZAR DEĞİL');

$objPHPExcel->getSheet(1)->setCellValue('A39','OKUR YAZAR');

$objPHPExcel->getSheet(1)->setCellValue('A40','İLKOKUL');

$objPHPExcel->getSheet(1)->setCellValue('A41','ORTAOKUL');

$objPHPExcel->getSheet(1)->setCellValue('A42','LİSE');

$objPHPExcel->getSheet(1)->setCellValue('A43','YÜKSEKOKUL');

$objPHPExcel->getSheet(1)->setCellValue('A44','TOPLAM');

//$objPHPExcel->getSheet(1)->setCellValue('E1','0-11 AY BEBEKLERE UYGULANAN BCG AŞI DOZU SAYISI');
/*$objPHPExcel->getActiveSheet(1)->getStyle('H4')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet(1)->getStyle('J2:J3')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );*/

/*$objPHPExcel->getSheet(1)->getStyle('A6:K60')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$objPHPExcel->getSheet(1)->getStyle('A6:K60')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);*/

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A4:D24")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A26:D33")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A35:D44")->applyFromArray($styleThinBlackBorderOutline);

$objPHPExcel->setActiveSheetIndex(1)->getStyle("A4:D24")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A26:D33")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex(1)->getStyle("A35:D44")->applyFromArray($ciftcizgi);


$objPHPExcel->setActiveSheetIndex(1)



->setCellValue('B2', trsuz($ilinadi))
->setCellValue('B3', trsuz($ilceninadi))
->setCellValue('D2', '')
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
	 
$objPHPExcel->getSheet(1)->setTitle(trsuz($ilceninadi));

    
			
	



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

sum(v60) as v60

from yg where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;

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

// YAŞ GRUBU TOPLAMLARI
$sifir=$tverim1+$tverim19 ;
$bes=$tverim2+$tverim20 ;
$on=$tverim3+$tverim21 ;
$onbes=$tverim4+$tverim22 ;
$yirmi=$tverim5+$tverim23 ;
$yirmibes=$tverim6+$tverim24 ;
$otuz=$tverim7+$tverim25 ;
$otuzbes=$tverim8+$tverim26 ;
$kirk=$tverim9+$tverim27 ;
$kirkbes=$tverim10+$tverim28 ;
$elli=$tverim11+$tverim29 ;
$ellibes=$tverim12+$tverim30 ;
$atmis=$tverim13+$tverim31 ;
$atmisbes=$tverim14+$tverim32 ;
$yetmis=$tverim15+$tverim33 ;
$yetmisbes=$tverim16+$tverim34 ;
$seksen=$tverim17+$tverim35 ;
$seksenbes=$tverim18+$tverim36 ;
$ygkt=$tverim1+$tverim2+$tverim3+$tverim4+$tverim5+$tverim6+$tverim7+$tverim8+$tverim9+$tverim10+$tverim11+$tverim12+$tverim13+$tverim14+$tverim15+$tverim16+$tverim17+$tverim18;
$yget=$tverim19+$tverim20+$tverim21+$tverim22+$tverim23+$tverim24+$tverim25+$tverim26+$tverim27+$tverim28+$tverim29+$tverim30+$tverim31+$tverim32+$tverim33+$tverim34+$tverim35+$tverim36;
$ygt=$tverim1+$tverim2+$tverim3+$tverim4+$tverim5+$tverim6+$tverim7+$tverim8+$tverim9+$tverim10+$tverim11+$tverim12+$tverim13+$tverim14+$tverim15+$tverim16+$tverim17+$tverim18+$tverim19+$tverim20+$tverim21+$tverim22+$tverim23+$tverim24+$tverim25+$tverim26+$tverim27+$tverim28+$tverim29+$tverim30+$tverim31+$tverim32+$tverim33+$tverim34+$tverim35+$tverim36;
// MEDENİ HAL TOPLAMLARI
$cocuk=$tverim37+$tverim42 ;
$bekar=$tverim38+$tverim43 ;
$evli=$tverim39+$tverim44 ;
$bosanmis=$tverim40+$tverim45 ;
$esiolmus=$tverim41+$tverim46 ;
$mhkt=$tverim37+$tverim38+$tverim39+$tverim40+$tverim41;
$mhet=$tverim42+$tverim43+$tverim44+$tverim45+$tverim46;
$mht=$tverim37+$tverim38+$tverim39+$tverim40+$tverim41+$tverim42+$tverim43+$tverim44+$tverim45+$tverim46;
// ÖĞRENİM DURUMU TOPLAMLARI
$ocd=$tverim47+$tverim54;
$oyd=$tverim48+$tverim55;
$oy=$tverim49+$tverim56;
$ilk=$tverim50+$tverim57;
$orta=$tverim51+$tverim58;
$lise=$tverim52+$tverim59;
$yo=$tverim53+$tverim60;
$odkt=$tverim47+$tverim48+$tverim49+$tverim50+$tverim51+$tverim52+$tverim53;
$odet=$tverim54+$tverim55+$tverim56+$tverim57+$tverim58+$tverim59+$tverim60;
$odt=$tverim47+$tverim48+$tverim49+$tverim50+$tverim51+$tverim52+$tverim53+$tverim54+$tverim55+$tverim56+$tverim57+$tverim58+$tverim59+$tverim60;

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


$ilim=trsuz($ilinadi);
$iltoplami='İL TOPLAMI';
$ilinadi=$ilim.' '.$iltoplami;

$objPHPExcel->setActiveSheetIndex()

->setCellValue('B2', $ilim)
->setCellValue('B3', $iltoplami)
->setCellValue('B4', '')
->setCellValue('D3', $yilgelen)


 //YAŞ GRUPLARI
 //KADIN          
            ->setCellValue('B6', $tverim1)

            ->setCellValue('B7', $tverim2)
			
			->setCellValue('B8', $tverim3)

            ->setCellValue('B9', $tverim4)
			
			->setCellValue('B10', $tverim5)

            ->setCellValue('B11', $tverim6)
			
			->setCellValue('B12', $tverim7)

            ->setCellValue('B13', $tverim8)
			
			->setCellValue('B14', $tverim9)

            ->setCellValue('B15', $tverim10)
			
			->setCellValue('B16', $tverim11)

            ->setCellValue('B17', $tverim12)
			
			->setCellValue('B18', $tverim13)
			
			 ->setCellValue('B19', $tverim14)

            ->setCellValue('B20', $tverim15)
			
			->setCellValue('B21', $tverim16)
			
			->setCellValue('B22', $tverim17)
			
			->setCellValue('B23', $tverim18)

            ->setCellValue('B24', $ygkt)
			
			 //ERKEK          
            ->setCellValue('C6', $tverim19)

            ->setCellValue('C7', $tverim20)
			
			->setCellValue('C8', $tverim21)

            ->setCellValue('C9', $tverim22)
			
			->setCellValue('C10', $tverim23)

            ->setCellValue('C11', $tverim24)
			
			->setCellValue('C12', $tverim25)

            ->setCellValue('C13', $tverim26)
			
			->setCellValue('C14', $tverim27)

            ->setCellValue('C15', $tverim28)
			
			->setCellValue('C16', $tverim29)

            ->setCellValue('C17', $tverim30)
			
			->setCellValue('C18', $tverim31)
			
			 ->setCellValue('C19', $tverim32)

            ->setCellValue('C20', $tverim33)
			
			->setCellValue('C21', $tverim34)
			
			->setCellValue('C22', $tverim35)
			
			->setCellValue('C23', $tverim36)

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
            ->setCellValue('B28', $tverim37)

            ->setCellValue('B29', $tverim38)
			
			->setCellValue('B30', $tverim39)

            ->setCellValue('B31', $tverim40)
			
			->setCellValue('B32', $tverim41)

            ->setCellValue('B33', $mhkt)
			
			//ERKEK
			
			->setCellValue('C28', $tverim42)

            ->setCellValue('C29', $tverim43)
			
			->setCellValue('C30', $tverim44)

            ->setCellValue('C31', $tverim45)
			
			->setCellValue('C32', $tverim46)

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
            ->setCellValue('B37', $tverim47)

            ->setCellValue('B38', $tverim48)
			
			->setCellValue('B39', $tverim49)

            ->setCellValue('B40', $tverim50)
			
			->setCellValue('B41', $tverim51)
			
			->setCellValue('B42', $tverim52)
			
			->setCellValue('B43', $tverim53)

            ->setCellValue('B44', $odkt)
			
			//ERKEK
			
			->setCellValue('C37', $tverim54)

            ->setCellValue('C38', $tverim55)
			
			->setCellValue('C39', $tverim56)

            ->setCellValue('C40', $tverim57)
			
			->setCellValue('C41', $tverim58)
			
			->setCellValue('C42', $tverim59)
			
			->setCellValue('C43', $tverim60)

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
			
$objPHPExcel->getActiveSheet()->setTitle($ilinadi);

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



$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);


// Redirect output to a client�s web browser (Excel5)

header('Content-Type: application/vnd.ms-excel');

header('Content-Disposition: attachment;filename="Nüfus Verileri.xls"');

header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');

$objWriter->save('php://output');

exit;

