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
$objPHPExcel->getSheet(1)->getStyle('H16:I16')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(1)->getStyle('H16:I16')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(1)->getStyle('H17:J20')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(1)->getStyle('H17:J20')->getFill()->getStartColor()->setARGB('# bebebe');
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
$kpa1top=$verim19+$verim20+$verim21+$verim142;
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
    ->setCellValue('B2', $ilinadi)
    ->setCellValue('B3', $ilceninadi)
    ->setCellValue('B4', $top)
    ->setCellValue('K2', $yilgelen)
    ->setCellValue('K3', $ayadi)
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
    ->setCellValue('J16','')
    ->setCellValue('K16', '=C16+F16+G16+J16')
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
   /* ->setCellValue('A65', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ))
    ->setCellValue('A66', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ))
    ->setCellValue('I65', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ))
    ->setCellValue('I66', mb_convert_encoding ('', "UTF-8", "ISO-8859-9" ));*/
?>