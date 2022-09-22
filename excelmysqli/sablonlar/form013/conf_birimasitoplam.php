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
$objPHPExcel->getSheet(1)->getStyle('H16:I16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(1)->getStyle('H16:I16')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(1)->getStyle('H17:J20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(1)->getStyle('H17:J20')->getFill()->getStartColor()->setARGB('# bebebe');
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
$dbt1top=intval($verim1)+intval($verim2)+intval($verim3)+intval($verim4);
$dbt2top=intval($verim5)+intval($verim6)+intval($verim7)+intval($verim8);
$dbt3top=intval($verim9)+intval($verim10)+intval($verim11)+intval($verim12);
$dbtraptop=intval($verim13)+intval($verim14)+intval($verim15);
$toplamdbt=intval($dbt1top)+intval($dbt2top)+intval($dbt3top)+intval($dbtraptop);
//HİB
$toplamhib=intval($verim17)+intval($verim18);
//KPA
$kpa1top=intval($verim19)+intval($verim20)+intval($verim21)+intval($verim142);
$kpa2top=intval($verim22)+intval($verim23)+intval($verim24);
$kpa3top=intval($verim25)+intval($verim26)+intval($verim27);
$kparaptop=intval($verim28)+intval($verim29);
$toplamkpa=intval($kpa1top)+intval($kpa2top)+intval($kpa3top)+intval($kparaptop);
//POLİO
$pol1top=intval($verim30)+intval($verim31)+intval($verim32)+intval($verim33)+intval($verim34)+intval($verim35);
$pol2top=intval($verim37)+intval($verim38)+intval($verim39)+intval($verim40)+intval($verim41);
$toplampol=intval($pol1top)+intval($pol2top);
//KKK
$kkk1top=intval($verim53)+intval($verim54)+intval($verim55)+intval($verim56)+intval($verim57);
$kkkraptop=intval($verim58)+intval($verim59)+intval($verim60)+intval($verim61)+intval($verim62);
$toplamkkk=intval($kkk1top)+intval($kkkraptop);
//PPD
$ppdtop=intval($verim63)+intval($verim64)+intval($verim65)+intval($verim66)+intval($verim67)+intval($verim68);
//BCG
$bcgtop=intval($verim69)+intval($verim70)+intval($verim71)+intval($verim72);
//HEPATİT-B
$toplamhepbid=intval($verim74)+intval($verim75);
$toplamhep1=intval($toplamhepbid)+intval($verim77)+intval($verim78)+intval($verim79)+intval($verim80)+intval($verim81);
$toplamhep2=intval($verim82)+intval($verim83)+intval($verim84)+intval($verim85)+intval($verim86)+intval($verim87);
$toplamhep3=intval($verim88)+intval($verim89)+intval($verim90)+intval($verim91)+intval($verim92)+intval($verim93);
$toplamhep=intval($toplamhepbid)+intval($verim77)+intval($verim78)+intval($verim79)+intval($verim80)+intval($verim81)+intval($verim82)+intval($verim83)+intval($verim84)+intval($verim85)+intval($verim86)+intval($verim87)+intval($verim88)+intval($verim89)+intval($verim90)+intval($verim91)+intval($verim92)+intval($verim93);
//HEPATİT-A
$hepa1top=intval($verim120)+intval($verim121)+intval($verim122)+intval($verim123)+intval($verim124);
$heparaptop=intval($verim125)+intval($verim126)+intval($verim127)+intval($verim128)+intval($verim129);
$toplamhepa=intval($hepa1top)+intval($heparaptop);
//SU ÇİÇEĞİ
$suctop=intval($verim130)+intval($verim131)+intval($verim132)+intval($verim133)+intval($verim134);
//KIZAMIKÇIK
$toplamkizcik=intval($verim94)+intval($verim95)+intval($verim96);
//OKUL TD
$toplamokul=intval($verim97)+intval($verim98)+intval($verim99)+intval($verim100)+intval($verim101);
//DİĞER TD
$toplamdigertd=intval($verim102)+intval($verim103)+intval($verim104)+intval($verim105)+intval($verim106)+intval($verim107);
//GEBE
$toplamgebe=intval($verim108)+intval($verim109)+intval($verim110)+intval($verim111)+intval($verim112);
//GEBE DEĞİL
$toplamgebedegil=intval($verim113)+intval($verim114)+intval($verim115)+intval($verim116)+intval($verim117);
//GEBE 1-2-3-4-5.AŞILAE
$toplamgebetet1=intval($verim108)+intval($verim113);
$toplamgebetet2=intval($verim109)+intval($verim114);
$toplamgebetet3=intval($verim110)+intval($verim115);
$toplamgebetet4=intval($verim111)+intval($verim116);
$toplamgebetet5=intval($verim112)+intval($verim117);
//TOPLAM GEBE TETANOZ
$toplamgebetettop=intval($verim108)+intval($verim113)+intval($verim109)+intval($verim114)+intval($verim110)+intval($verim115)+intval($verim111)+intval($verim116)+intval($verim112)+intval($verim117);

$objPHPExcel->setActiveSheetIndex(1)
/*->setCellValue('B2', $ilinadi)
->setCellValue('B3', $ilceninadi)
->setCellValue('B4', $top)
->setCellValue('K2', $yilgelen)
->setCellValue('K3', $ayadi)
->setCellValue('K4', $verim119)*/
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
->setCellValue('J16',$verim142)
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
//KIZAMIK
->setCellValue('C61', $verim136)
->setCellValue('F61', $verim137)
->setCellValue('G61', $verim138)
->setCellValue('H61', $verim139)
->setCellValue('I61', $verim140)
->setCellValue('J61', $verim141)
->setCellValue('K61', '=C61+F61+G61+H61+I61+J61')
//DÜZENLEYEN-ONAYLAYAN			 
			->setCellValue('A65', $verim173)
			->setCellValue('A66', $verim174)
			->setCellValue('I65', $verim176)		 
			->setCellValue('I66', $verim177);		 
 
//$objPHPExcel->getSheet(1)->setTitle($kurum);
?>