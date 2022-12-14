<?php
set_time_limit(600);
/** Error reporting */
error_reporting(E_ALL);
ini_set("display_errors", 1);
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
require_once('../connect.php');
require_once('../con_023.php');	
$ilgelen=$_GET['selectil']; 
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$resultvyil = @mysqli_query($dbh,"select tipi,ilid,ilceid,adi,adres,telefon,fax,email,web from $etf_db_name.adres where(ilid='$ilgelen') order by ilceid desc, tipi desc") ;
$rows = 4;
while($sonucum=mysqli_fetch_array($resultvyil)){
$tipi=$sonucum['tipi'];
$iladi=$sonucum['ilid'];
$ilceadi=$sonucum['ilceid'];
$kurumadi=$sonucum['adi'];
$adres=$sonucum['adres'];
$telefon=$sonucum['telefon'];
$fax=$sonucum['fax'];
$email=$sonucum['email'];
//$emailx=substr($email,7,100);
$web=$sonucum['web'];
//$webx=substr($web,7,100);
$ilcesorgu=@mysqli_query($dbh,"select * from $form013_db_name.ilce where(ilinad='$ilgelen' and ilceid='$ilceadi')");
while($ilcesonucum=mysqli_fetch_array($ilcesorgu)){
$ilceninadi=$ilcesonucum['ilcead'];
$tipsorgu=@mysqli_query($dbh,"select * from  $etf_db_name.kurumtipi where(tipid='$tipi')");
while($tipsonucum=mysqli_fetch_array($tipsorgu)){
$tipinadi=$tipsonucum['tipi'];
$say=mysqli_num_rows($resultvyil);
$say=$say+3;

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
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A1")->getFont()->setName('Arial')->setSize(11);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("B2")->getFont()->setName('Arial')->setSize(11);
$objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(22);
$objPHPExcel->getSheet(0)->getColumnDimension('B')->setWidth(14);
$objPHPExcel->getSheet(0)->getColumnDimension('C')->setWidth(32);
$objPHPExcel->getSheet(0)->getColumnDimension('D')->setWidth(32);
$objPHPExcel->getSheet(0)->getColumnDimension('E')->setWidth(14);
$objPHPExcel->getSheet(0)->getColumnDimension('F')->setWidth(14);
$objPHPExcel->getSheet(0)->getColumnDimension('G')->setWidth(23);
$objPHPExcel->getSheet(0)->getColumnDimension('H')->setWidth(23);
$objPHPExcel->getSheet(0)->getRowDimension('2')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('3')->setRowHeight(15);
for ($row = '4'; $row != $say; $row++) {
$objPHPExcel->getSheet(0)->getRowDimension($row)->setRowHeight(20);
}
$objPHPExcel->getSheet(0)->getStyle("A1:H$say")->getAlignment()->setWrapText(true);
$objPHPExcel->getSheet(0)->getStyle("A3:H$say")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle("A3:H$say")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getSheet(0)->getRowDimension('1')->setRowHeight(20);
$objPHPExcel->getSheet(0)->mergeCells("A1:H1");
$objPHPExcel->getActiveSheet()->getStyle("A1:H$say")->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getSheet(0)->mergeCells("B2:H2");
$objPHPExcel->getSheet(0)->setCellValue('A1', 'ADRES B??LG??LER??');
$objPHPExcel->getSheet(0)->setCellValue('A2', '??L:');
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
$objPHPExcel->getSheet(0)->setCellValue('A3','KURUM T??P??:');
$objPHPExcel->getSheet(0)->setCellValue('B3','??L??E:');
$objPHPExcel->getSheet(0)->setCellValue('C3','KURUM ADI:');
$objPHPExcel->getSheet(0)->setCellValue('D3','KURUM ADRES??:');
$objPHPExcel->getSheet(0)->setCellValue('E3','TELEFON:');
$objPHPExcel->getSheet(0)->setCellValue('F3','FAKS:');
$objPHPExcel->getSheet(0)->setCellValue('G3','EMA??L ADRES??:');
$objPHPExcel->getSheet(0)->setCellValue('H3','WEB ADRES??:');
$objPHPExcel->getSheet(0)->getStyle("A4:H$say")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$objPHPExcel->getSheet(0)->getStyle("A6:H$say")->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A3:H$say")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A3:H3")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A3:H$say")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex(0)
->setCellValue('B2', $ilinadi)
//->setCellValue('B3', $ilceninadi)
//->setCellValue('B4', '')
//->setCellValue('K2', $yilgelen)
//DBT            
            ->setCellValue('A'.$rows, $tipinadi)
           	->setCellValue('B'.$rows, $ilceninadi)
			->setCellValue('C'.$rows, $kurumadi)
            ->setCellValue('D'.$rows, $adres)
			->setCellValue('E'.$rows, $telefon)
			->setCellValue('F'.$rows, $fax)
            ->setCellValue('G'.$rows, $email)
			->setCellValue('H'.$rows, $web);
  $rows++;          
}
}
}
$objPHPExcel->getSheet(0)->setTitle($ilinadi);
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
//$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet(0)->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet(0)->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
//Kenar Bosluklari
// margin is set in inches (0.5cm)
$margin = 1.00 / 2.54;
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setTop($margin);
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setBottom($margin);
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setLeft($margin);
$objPHPExcel->getActiveSheet(0)->getPageMargins()->setRight($margin);
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(8);
// Redirect output to a client???s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="??l_Adres.xls"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;

