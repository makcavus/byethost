<?php
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
//GRİ TONLAMALAR
$objPHPExcel->getSheet(0)->getStyle('H9:J10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('H9:J10')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(0)->getStyle('L9:L10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('L9:L10')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->getStartColor()->setARGB('# bebebe');
//YAZI TİPİ BİÇİMLERİ
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C1")->getFont()->setName('Arial')->setSize(12);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A7:N8")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("K7")->getFont()->setName('Arial')->setSize(7);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C9:C12")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A13:A30")->getFont()->setName('Arial')->setSize(10);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("D15:H15")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A34:A37")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("L34:L37")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("I15:M16")->getFont()->setName('Arial')->setSize(1);
$objPHPExcel->getActiveSheet(0)->getStyle('I15:M16')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getSheet(0)->getStyle('A1:N66')->getAlignment()->setWrapText(true);
$objPHPExcel->getSheet(0)->getStyle('N1')->getAlignment()->setWrapText(false);
$objPHPExcel->getSheet(0)->getStyle('C9:C12')->getAlignment()->setWrapText(false);

$objPHPExcel->getActiveSheet(0)->getStyle('A1:N66')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet(0)->getStyle('A3:A6')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('M1:M2')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A7:N8')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('C9:C12')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A13:A30')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('D15:H15')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A33:A37')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('L33:L37')->getFont()->setBold(false);

//METİN YÖNLERİ
$objPHPExcel->getSheet(0)->getStyle('A1:L1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('A1:L1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('C1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('M1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$objPHPExcel->getSheet(0)->getStyle('M2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$objPHPExcel->getSheet(0)->getStyle('N1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$objPHPExcel->getSheet(0)->getStyle('A7:N37')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('A7:N37')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

$objPHPExcel->getActiveSheet(0)->getStyle('A5:F5')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );	  

$objPHPExcel->getActiveSheet(0)->getStyle('A7:B7')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 90,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet(0)->getStyle('A6')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => false
	 		)
	  );

$objPHPExcel->getActiveSheet(0)->getStyle('C9:C12')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
	  	  
$objPHPExcel->getActiveSheet(0)->getStyle('A13:A30')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );
$objPHPExcel->getActiveSheet(0)->getStyle('A34:N37')->getAlignment()->applyFromArray(
			array(
	 			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
				'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
	 			'rotation'   => 0,
	 			'wrap'	   => true
	 		)
	  );	  
//HÜCRE YÜKSEKLİKLERİ
$objPHPExcel->getSheet(0)->getRowDimension('1')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('2')->setRowHeight(17.25);
$objPHPExcel->getSheet(0)->getRowDimension('3')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('4')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('5')->setRowHeight(18);
$objPHPExcel->getSheet(0)->getRowDimension('6')->setRowHeight(18);
$objPHPExcel->getSheet(0)->getRowDimension('7')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('8')->setRowHeight(44);
for ($row = '9'; $row != '38'; $row++) {
$objPHPExcel->getSheet(0)->getRowDimension($row)->setRowHeight(15);
}
//HÜCRE GENİŞLİKLERİ
$objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(13);
$objPHPExcel->getSheet(0)->getColumnDimension('B')->setWidth(14);
$objPHPExcel->getSheet(0)->getColumnDimension('C')->setWidth(14);
//$objPHPExcel->getSheet(0)->getColumnDimension('D')->setWidth(4.0);
//$objPHPExcel->getSheet(0)->getColumnDimension('E')->setWidth(7.3);
for ($col = 'D'; $col != 'K'; $col++) {
$objPHPExcel->getSheet(0)->getColumnDimension($col)->setWidth(11);
}
$objPHPExcel->getSheet(0)->getColumnDimension('K')->setWidth(13);
$objPHPExcel->getSheet(0)->getColumnDimension('L')->setWidth(13);
$objPHPExcel->getSheet(0)->getColumnDimension('M')->setWidth(15);
$objPHPExcel->getSheet(0)->getColumnDimension('N')->setWidth(15);

//HÜCRE BİRLEŞTİRMELERİ	  
$objPHPExcel->getSheet(0)->mergeCells("A1:B2");$objPHPExcel->getSheet(0)->mergeCells("C1:L3");$objPHPExcel->getSheet(0)->mergeCells("B4:C4");
$objPHPExcel->getSheet(0)->mergeCells("A5:B5");$objPHPExcel->getSheet(0)->mergeCells("C5:F5");$objPHPExcel->getSheet(0)->mergeCells("A6:C6");$objPHPExcel->getSheet(0)->mergeCells("A7:A8");
$objPHPExcel->getSheet(0)->mergeCells("B7:B8");$objPHPExcel->getSheet(0)->mergeCells("C7:C8");$objPHPExcel->getSheet(0)->mergeCells("D7:D8");
$objPHPExcel->getSheet(0)->mergeCells("E7:E8");$objPHPExcel->getSheet(0)->mergeCells("F7:F8");$objPHPExcel->getSheet(0)->mergeCells("G7:G8");
$objPHPExcel->getSheet(0)->mergeCells("H7:H8");$objPHPExcel->getSheet(0)->mergeCells("I7:I8");$objPHPExcel->getSheet(0)->mergeCells("J7:J8");
$objPHPExcel->getSheet(0)->mergeCells("K7:K8");$objPHPExcel->getSheet(0)->mergeCells("L7:L8");$objPHPExcel->getSheet(0)->mergeCells("M7:M8");
$objPHPExcel->getSheet(0)->mergeCells("N7:N8");$objPHPExcel->getSheet(0)->mergeCells("A9:A12");$objPHPExcel->getSheet(0)->mergeCells("B9:B12");
$objPHPExcel->getSheet(0)->mergeCells("C9:C10");$objPHPExcel->getSheet(0)->mergeCells("D9:D10");$objPHPExcel->getSheet(0)->mergeCells("E9:E10");
$objPHPExcel->getSheet(0)->mergeCells("F9:F10");$objPHPExcel->getSheet(0)->mergeCells("G9:G10");$objPHPExcel->getSheet(0)->mergeCells("H9:H10");
$objPHPExcel->getSheet(0)->mergeCells("I9:I10");$objPHPExcel->getSheet(0)->mergeCells("J9:J10");$objPHPExcel->getSheet(0)->mergeCells("K9:K10");
$objPHPExcel->getSheet(0)->mergeCells("L9:L10");$objPHPExcel->getSheet(0)->mergeCells("M9:M10");$objPHPExcel->getSheet(0)->mergeCells("N9:N10");
$objPHPExcel->getSheet(0)->mergeCells("C11:C12");$objPHPExcel->getSheet(0)->mergeCells("D11:D12");$objPHPExcel->getSheet(0)->mergeCells("E11:E12");
$objPHPExcel->getSheet(0)->mergeCells("F11:F12");$objPHPExcel->getSheet(0)->mergeCells("A13:C14");$objPHPExcel->getSheet(0)->mergeCells("A15:C16");
$objPHPExcel->getSheet(0)->mergeCells("D15:D16");$objPHPExcel->getSheet(0)->mergeCells("E15:E16");$objPHPExcel->getSheet(0)->mergeCells("F15:F16");
$objPHPExcel->getSheet(0)->mergeCells("G15:G16");$objPHPExcel->getSheet(0)->mergeCells("H15:H16");$objPHPExcel->getSheet(0)->mergeCells("A17:C18");
$objPHPExcel->getSheet(0)->mergeCells("D17:D18");$objPHPExcel->getSheet(0)->mergeCells("E17:E18");$objPHPExcel->getSheet(0)->mergeCells("F17:F18");
$objPHPExcel->getSheet(0)->mergeCells("G17:G18");$objPHPExcel->getSheet(0)->mergeCells("H17:H18");$objPHPExcel->getSheet(0)->mergeCells("A19:C20");
$objPHPExcel->getSheet(0)->mergeCells("D19:D20");$objPHPExcel->getSheet(0)->mergeCells("E19:E20");$objPHPExcel->getSheet(0)->mergeCells("F19:F20");
$objPHPExcel->getSheet(0)->mergeCells("G19:G20");$objPHPExcel->getSheet(0)->mergeCells("H19:H20");$objPHPExcel->getSheet(0)->mergeCells("A21:C22");
$objPHPExcel->getSheet(0)->mergeCells("D21:D22");$objPHPExcel->getSheet(0)->mergeCells("E21:E22");$objPHPExcel->getSheet(0)->mergeCells("F21:F22");
$objPHPExcel->getSheet(0)->mergeCells("G21:G22");$objPHPExcel->getSheet(0)->mergeCells("H21:H22");$objPHPExcel->getSheet(0)->mergeCells("A23:C24");
$objPHPExcel->getSheet(0)->mergeCells("D23:D24");$objPHPExcel->getSheet(0)->mergeCells("E23:E24");$objPHPExcel->getSheet(0)->mergeCells("F23:F24");
$objPHPExcel->getSheet(0)->mergeCells("G23:G24");$objPHPExcel->getSheet(0)->mergeCells("H23:H24");$objPHPExcel->getSheet(0)->mergeCells("A25:C26");
$objPHPExcel->getSheet(0)->mergeCells("D25:D26");$objPHPExcel->getSheet(0)->mergeCells("E25:E26");$objPHPExcel->getSheet(0)->mergeCells("F25:F26");
$objPHPExcel->getSheet(0)->mergeCells("G25:G26");$objPHPExcel->getSheet(0)->mergeCells("H25:H26");$objPHPExcel->getSheet(0)->mergeCells("A27:C28");
$objPHPExcel->getSheet(0)->mergeCells("D27:D28");$objPHPExcel->getSheet(0)->mergeCells("E27:E28");$objPHPExcel->getSheet(0)->mergeCells("F27:F28");
$objPHPExcel->getSheet(0)->mergeCells("G27:G28");$objPHPExcel->getSheet(0)->mergeCells("H27:H28");$objPHPExcel->getSheet(0)->mergeCells("A29:C30");
$objPHPExcel->getSheet(0)->mergeCells("D29:D30");$objPHPExcel->getSheet(0)->mergeCells("E29:E30");$objPHPExcel->getSheet(0)->mergeCells("F29:F30");
$objPHPExcel->getSheet(0)->mergeCells("G29:G30");$objPHPExcel->getSheet(0)->mergeCells("H29:H30");$objPHPExcel->getSheet(0)->mergeCells("L19:M20");
$objPHPExcel->getSheet(0)->mergeCells("N19:N20");
//AÇIKLAMALAR
$objPHPExcel->getSheet(0)->mergeCells("A33:D33");$objPHPExcel->getSheet(0)->mergeCells("L33:N33");$objPHPExcel->getSheet(0)->mergeCells("B34:D34");
$objPHPExcel->getSheet(0)->mergeCells("M34:N34");$objPHPExcel->getSheet(0)->mergeCells("B35:D35");$objPHPExcel->getSheet(0)->mergeCells("M35:N35");
$objPHPExcel->getSheet(0)->mergeCells("B36:D36");$objPHPExcel->getSheet(0)->mergeCells("M36:N36");$objPHPExcel->getSheet(0)->mergeCells("B37:D37");
$objPHPExcel->getSheet(0)->mergeCells("M37:N37");


//FORM YAZILARI
	  
$objPHPExcel->getSheet(0)->setCellValue('A1', 'T.C.                              SAĞLIK BAKANLIĞI');
$objPHPExcel->getSheet(0)->setCellValue('A3', 'İLÇE:');
$objPHPExcel->getSheet(0)->setCellValue('A4', 'ASM ADI:');
$objPHPExcel->getSheet(0)->setCellValue('A5','AİLE HEKİMİ KODU/ADI:');
$objPHPExcel->getSheet(0)->setCellValue('C1','AİLE PLANLAMASI ÇALIŞMALARI                                                                                                                 Form 102');
$objPHPExcel->getSheet(0)->setCellValue('A6', '1.AİLE PLANLAMASI YÖNTEMLERİ');
$objPHPExcel->getSheet(0)->setCellValue('A7', 'AP Polikliniğine Başvuran Kişi Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('B7', 'AP Danışmanlığı Alan Kişi Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('C7', '');
$objPHPExcel->getSheet(0)->setCellValue('D7', 'Hap');
$objPHPExcel->getSheet(0)->setCellValue('E7', 'Kondom');
$objPHPExcel->getSheet(0)->setCellValue('F7', 'Enjeksiyon');
$objPHPExcel->getSheet(0)->setCellValue('G7', 'RİA');
$objPHPExcel->getSheet(0)->setCellValue('H7', 'Deri Altı İmplantı');
$objPHPExcel->getSheet(0)->setCellValue('I7', 'Tüp Ligasyon');
$objPHPExcel->getSheet(0)->setCellValue('J7', 'Vazektomi');
$objPHPExcel->getSheet(0)->setCellValue('K7', 'Diğer Modern Yöntem (kadın kondomu,diafram,spermisit, jel,ovül vb.)');
$objPHPExcel->getSheet(0)->setCellValue('L7', 'Gebelik Sonlandırma Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('M7', 'Düşükten Sonra AP Yöntemi Başlayan Kişi Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('N7', 'Doğum Sonu 42.Güne Kadar AP Yöntemi Başlayan Kişi Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('C9', 'Yeni Başlayan Kişi Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('C11', 'Eski Kullanıcı Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('A13', '2.MALZEME DURUMU');
$objPHPExcel->getSheet(0)->setCellValue('A15', '');
$objPHPExcel->getSheet(0)->setCellValue('D15', 'Hap');
$objPHPExcel->getSheet(0)->setCellValue('E15', 'Kondom');
$objPHPExcel->getSheet(0)->setCellValue('F15', 'Enjeksiyon');
$objPHPExcel->getSheet(0)->setCellValue('G15', 'RİA');
$objPHPExcel->getSheet(0)->setCellValue('H15', 'Deri Altı İmplantı');

$objPHPExcel->getSheet(0)->setCellValue('A17', 'Geçen Aydan Devreden');
$objPHPExcel->getSheet(0)->setCellValue('A19', 'Ay İçinde Gelen / Alınan');
$objPHPExcel->getSheet(0)->setCellValue('A21', 'Diğer Gelen (Başka kurumdan gelen,kişilerin getirdiği vb.)');
$objPHPExcel->getSheet(0)->setCellValue('A23', 'Zayi,İmha');
$objPHPExcel->getSheet(0)->setCellValue('A25', 'Geri Alınan');
$objPHPExcel->getSheet(0)->setCellValue('A27', 'Sarf Edilen Malzeme');
$objPHPExcel->getSheet(0)->setCellValue('A29', 'Kalan Malzeme');
$objPHPExcel->getSheet(0)->setCellValue('L19', 'Çıkarılan RİA Sayısı');
$objPHPExcel->getSheet(0)->setCellValue('A33','DÜZENLEYEN');
$objPHPExcel->getSheet(0)->setCellValue('L33','ONAYLAYAN');
$objPHPExcel->getSheet(0)->setCellValue('A34','Adı Soyadı:');
$objPHPExcel->getSheet(0)->setCellValue('A35','Ünvanı:');
$objPHPExcel->getSheet(0)->setCellValue('A36','Tarih:');
$objPHPExcel->getSheet(0)->setCellValue('A37','İmza:');
$objPHPExcel->getSheet(0)->setCellValue('L34','Adı Soyadı:');
$objPHPExcel->getSheet(0)->setCellValue('L35','Ünvanı:');
$objPHPExcel->getSheet(0)->setCellValue('L36','Tarih:');
$objPHPExcel->getSheet(0)->setCellValue('L37','İmza:');
$objPHPExcel->getSheet(0)->setCellValue('M1','YIL:');
$objPHPExcel->getSheet(0)->setCellValue('M2','AY:');
//ÇİZGİLER	
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A7:F12")->applyFromArray($styleThinBlackBorderOutline);
//$objPHPExcel->setActiveSheetIndex(0)->getStyle("A6:K12")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("G7:N10")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A15:H30")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("L19:N20")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A33:D37")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("L33:N37")->applyFromArray($styleThinBlackBorderOutline);
//KİLİTSİZ HÜCRELER
$objPHPExcel->getActiveSheet(0)->getProtection()->setSheet(true);
$objPHPExcel->getActiveSheet()->getStyle('A9:B9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('D9:G9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('K9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('M9:N9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('D11:F11')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('D19:G27')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('N19')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('B34:B37')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('M34:M37')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);


$objPHPExcel->setActiveSheetIndex(0)

//->setCellValue('B2', mb_convert_encoding ($ilinadi, "UTF-8", "ISO-8859-9" ))
->setCellValue('B3', $kurumt)
->setCellValue('B4', $asm)
->setCellValue('C5', $top)
->setCellValue('N1', $yilgelen)
->setCellValue('N2', $ayadi)
//DEVİRLER
            ->setCellValue('I15', $tdevredengebe)
			->setCellValue('J15', $tdevredenbebek)
            ->setCellValue('K15', $tdevredenlohusa)
			->setCellValue('L15', $tdevredencocuk)
			->setCellValue('M15', $tdevredenimp)
			->setCellValue('I16', $tdevredengebeay)
			->setCellValue('J16', $tdevredenbebekay)
            ->setCellValue('K16', $tdevredenlohusaay)
			->setCellValue('L16', $tdevredencocukay)
			->setCellValue('M16', $tdevredenimpay)
//YÖNTEMLER          
            ->setCellValue('A9', $tverim1)

            ->setCellValue('B9', $tverim2)
			
			 ->setCellValue('D9', $tverim3)

            ->setCellValue('E9', $tverim4)
			
			->setCellValue('F9', $tverim5)
			
			->setCellValue('G9', $tverim6)

            ->setCellValue('H9', '')
			
			->setCellValue('I9', '')

            ->setCellValue('J9', '')
			
			->setCellValue('K9', $tverim10)
			
			->setCellValue('L9', '')

            ->setCellValue('M9', $tverim12)
			
			 ->setCellValue('N9', $tverim13)

            ->setCellValue('D11', $tverim14)
			
			->setCellValue('E11', $tverim15)
			
			->setCellValue('F11', $tverim16)
//MALZEME DURUMU
//HAP		 
			->setCellValue('D17', '=I15+I16')

            ->setCellValue('D19', $tverim17)
			
			->setCellValue('D21', $tverim18)
			
			->setCellValue('D23', $tverim19)

			->setCellValue('D25', $tverim20)
			
			->setCellValue('D27', $tverim21)
			
			->setCellValue('D29', '=D17+D19+D21-D23-D25-D27')

//KONDOM		 
			->setCellValue('E17', '=J15+J16')

            ->setCellValue('E19', $tverim22)
			
			->setCellValue('E21', $tverim23)
			
			->setCellValue('E23', $tverim24)

			->setCellValue('E25', $tverim25)
			
			->setCellValue('E27', $tverim26)
			
			->setCellValue('E29', '=E17+E19+E21-E23-E25-E27')
			
//ENJEKSİYON		 
			->setCellValue('F17', '=K15+K16')

            ->setCellValue('F19', $tverim27)
			
			->setCellValue('F21', $tverim28)
			
			->setCellValue('F23', $tverim29)

			->setCellValue('F25', $tverim30)
			
			->setCellValue('F27', $tverim31)
			
			->setCellValue('F29', '=F17+F19+F21-F23-F25-F27')
//RİA		 
			->setCellValue('G17', '=L15+L16')

            ->setCellValue('G19', $tverim32)
			
			->setCellValue('G21', $tverim33)
			
			->setCellValue('G23', $tverim34)

			->setCellValue('G25', $tverim35)
			
			->setCellValue('G27', $tverim36)
			
			->setCellValue('G29', '=G17+G19+G21-G23-G25-G27')
//İMPLANT		 
			->setCellValue('H17', '')

            ->setCellValue('H19', '')
			
			->setCellValue('H21', '')
			
			->setCellValue('H23', '')

			->setCellValue('H25', '')
			
			->setCellValue('H27', '')
			
			->setCellValue('H29', '')

//ÇIKARILAN RİA
			->setCellValue('N19', $tverim42)
			
//DÜZENLEYEN-ONAYLAYAN			 
			//->setCellValue('B34', $tverim173)
			 
			//->setCellValue('B35', $tverim174)
			 
			//->setCellValue('M34', $tverim176)	 

			//->setCellValue('M35', $tverim177);
?>