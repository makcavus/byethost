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
$objPHPExcel->getActiveSheet(1)->getProtection()->setSheet(true);
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
$objPHPExcel->getSheet(0)->setCellValue('A1', 'AŞI SONUÇLARI ÇİZELGESİ   (SURİYELİLER İÇİN FORM013)');
$objPHPExcel->getSheet(0)->setCellValue('A2', 'İL:');
$objPHPExcel->getSheet(0)->setCellValue('A3', 'İLÇE:');
$objPHPExcel->getSheet(0)->setCellValue('A4','KURUM:');
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
$objPHPExcel->getSheet(1)->getStyle('H16:I16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(1)->getStyle('H16:I16')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(1)->getStyle('H17:J20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(1)->getStyle('H17:J20')->getFill()->getStartColor()->setARGB('# bebebe');
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
$dbt1top=intval($tverim1)+intval($tverim2)+intval($tverim3)+intval($tverim4);
$dbt2top=intval($tverim5)+intval($tverim6)+intval($tverim7)+intval($tverim8);
$dbt3top=intval($tverim9)+intval($tverim10)+intval($tverim11)+intval($tverim12);
$dbtraptop=intval($tverim13)+intval($tverim14)+intval($tverim15);
$toplamdbt=intval($dbt1top)+intval($dbt2top)+intval($dbt3top)+intval($dbtraptop);
//HİB
$toplamhib=intval($tverim17)+intval($tverim18);
//KPA
$kpa1top=intval($tverim19)+intval($tverim20)+intval($tverim21)+intval($tverim142);
$kpa2top=intval($tverim22)+intval($tverim23)+intval($tverim24);
$kpa3top=intval($tverim25)+intval($tverim26)+intval($tverim27);
$kparaptop=intval($tverim28)+intval($tverim29);
$toplamkpa=intval($kpa1top)+intval($kpa2top)+intval($kpa3top)+intval($kparaptop);
//POLİO
$pol1top=intval($tverim30)+intval($tverim31)+intval($tverim32)+intval($tverim33)+intval($tverim34)+intval($tverim35);
$pol2top=intval($tverim37)+intval($tverim38)+intval($tverim39)+intval($tverim40)+intval($tverim41);
$toplampol=intval($pol1top)+intval($pol2top);
//KKK
$kkk1top=intval($tverim53)+intval($tverim54)+intval($tverim55)+intval($tverim56)+intval($tverim57);
$kkkraptop=intval($tverim58)+intval($tverim59)+intval($tverim60)+intval($tverim61)+intval($tverim62);
$toplamkkk=intval($kkk1top)+intval($kkkraptop);
//PPD
$ppdtop=intval($tverim63)+intval($tverim64)+intval($tverim65)+intval($tverim66)+intval($tverim67)+intval($tverim68);
//BCG
$bcgtop=intval($tverim69)+intval($tverim70)+intval($tverim71)+intval($tverim72);
//HEPATİT-B
$toplamhepbid=intval($tverim74)+intval($tverim75);
$toplamhep1=intval($toplamhepbid)+intval($tverim77)+intval($tverim78)+intval($tverim79)+intval($tverim80)+intval($tverim81);
$toplamhep2=intval($tverim82)+intval($tverim83)+intval($tverim84)+intval($tverim85)+intval($tverim86)+intval($tverim87);
$toplamhep3=intval($tverim88)+intval($tverim89)+intval($tverim90)+intval($tverim91)+intval($tverim92)+intval($tverim93);
$toplamhep=intval($toplamhepbid)+intval($tverim77)+intval($tverim78)+intval($tverim79)+intval($tverim80)+intval($tverim81)+intval($tverim82)+intval($tverim83)+intval($tverim84)+intval($tverim85)+intval($tverim86)+intval($tverim87)+intval($tverim88)+intval($tverim89)+intval($tverim90)+intval($tverim91)+intval($tverim92)+intval($tverim93);
//HEPATİT-A
$hepa1top=intval($tverim120)+intval($tverim121)+intval($tverim122)+intval($tverim123)+intval($tverim124);
$heparaptop=intval($tverim125)+intval($tverim126)+intval($tverim127)+intval($tverim128)+intval($tverim129);
$toplamhepa=intval($hepa1top)+intval($heparaptop);
//SU ÇİÇEĞİ
$suctop=intval($tverim130)+intval($tverim131)+intval($tverim132)+intval($tverim133)+intval($tverim134);
//KIZAMIKÇIK
$toplamkizcik=intval($tverim94)+intval($tverim95)+intval($tverim96);
//OKUL TD
$toplamokul=intval($tverim97)+intval($tverim98)+intval($tverim99)+intval($tverim100)+intval($tverim101);
//DİĞER TD
$toplamdigertd=intval($tverim102)+intval($tverim103)+intval($tverim104)+intval($tverim105)+intval($tverim106)+intval($tverim107);
//GEBE
$toplamgebe=intval($tverim108)+intval($tverim109)+intval($tverim110)+intval($tverim111)+intval($tverim112);
//GEBE DEĞİL
$toplamgebedegil=intval($tverim113)+intval($tverim114)+intval($tverim115)+intval($tverim116)+intval($tverim117);
//GEBE 1-2-3-4-5.AŞILAE
$toplamgebetet1=intval($tverim108)+intval($tverim113);
$toplamgebetet2=intval($tverim109)+intval($tverim114);
$toplamgebetet3=intval($tverim110)+intval($tverim115);
$toplamgebetet4=intval($tverim111)+intval($tverim116);
$toplamgebetet5=intval($tverim112)+intval($tverim117);
//TOPLAM GEBE TETANOZ
$toplamgebetettop=intval($tverim108)+intval($tverim113)+intval($tverim109)+intval($tverim114)+intval($tverim110)+intval($tverim115)+intval($tverim111)+intval($tverim116)+intval($tverim112)+intval($tverim117);

$objPHPExcel->setActiveSheetIndex(0)

->setCellValue('B2', $ilinadi)
->setCellValue('B3', $kurumt)
->setCellValue('B4', $top)
->setCellValue('K2', $yilgelen)
->setCellValue('K3', $ayadi)
->setCellValue('K4', $tverim119)
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
			->setCellValue('J16',$tverim142)
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
//KIZAMIK
			->setCellValue('C61', $tverim136)
			->setCellValue('F61', $tverim137)
			->setCellValue('G61', $tverim138)
			->setCellValue('H61', $tverim139)
			->setCellValue('I61', $tverim140)
			->setCellValue('J61', $tverim141)
			->setCellValue('K61', '=C61+F61+G61+H61+I61+J61');
//DÜZENLEYEN-ONAYLAYAN			 
		/*	->setCellValue('A65', $tverim173)
			->setCellValue('A66', $tverim174)
			->setCellValue('I65', $tverim176)
			->setCellValue('I66', $tverim177);	*/

$objPHPExcel->getActiveSheet(0)->setTitle($kurumb);
?>