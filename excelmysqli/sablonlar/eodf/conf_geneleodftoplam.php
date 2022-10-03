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
/*$objPHPExcel->getSheet(0)->getStyle('H9:J10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('H9:J10')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(0)->getStyle('L9:L10')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('L9:L10')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->getStartColor()->setARGB('# bebebe');
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getSheet(0)->getStyle('H17:H30')->getFill()->getStartColor()->setARGB('# bebebe');*/
//YAZI TİPİ BİÇİMLERİ
$objPHPExcel->getDefaultStyle()->getFont()->setName('Arial')->setSize(10);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A3")->getFont()->setName('Arial')->setSize(12);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("B11:Q14")->getFont()->setName('Arial')->setSize(12);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("N20")->getFont()->setName('Arial')->setSize(9);
/*$objPHPExcel->setActiveSheetIndex(0)->getStyle("A7:N8")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("K7")->getFont()->setName('Arial')->setSize(7);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("C9:C12")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A13:A30")->getFont()->setName('Arial')->setSize(10);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("D15:H15")->getFont()->setName('Arial')->setSize(8);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A34:A37")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("L34:L37")->getFont()->setName('Arial')->setSize(9);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("I15:M16")->getFont()->setName('Arial')->setSize(1);*/
//$objPHPExcel->getActiveSheet(0)->getStyle('I15:M16')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_WHITE);
$objPHPExcel->getSheet(0)->getStyle('A1:Q25')->getAlignment()->setWrapText(true);
//$objPHPExcel->getSheet(0)->getStyle('N1')->getAlignment()->setWrapText(false);
//$objPHPExcel->getSheet(0)->getStyle('C9:C12')->getAlignment()->setWrapText(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A3:Q29')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet(0)->getStyle('A3:D33')->getFont()->setBold(true);
/*$objPHPExcel->getActiveSheet(0)->getStyle('M1:M2')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A7:N8')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('C9:C12')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A13:A30')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('D15:H15')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('A33:A37')->getFont()->setBold(false);
$objPHPExcel->getActiveSheet(0)->getStyle('L33:L37')->getFont()->setBold(false);*/
//METİN YÖNLERİ
$objPHPExcel->getSheet(0)->getStyle('A1:Q1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
$objPHPExcel->getSheet(0)->getStyle('A3:Q3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('A18:Q18')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getSheet(0)->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getSheet(0)->getStyle('C1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
//$objPHPExcel->getSheet(0)->getStyle('M1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
//$objPHPExcel->getSheet(0)->getStyle('M2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
//$objPHPExcel->getSheet(0)->getStyle('N1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
//$objPHPExcel->getSheet(0)->getStyle('A7:N37')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$objPHPExcel->getSheet(0)->getStyle('A7:N37')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getActiveSheet(0)->getStyle('A7:B7')->getAlignment()->applyFromArray(
    array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'rotation'   => 0,
        'wrap'	   => true
    )
);
$objPHPExcel->getActiveSheet(0)->getStyle('A9:Q14')->getAlignment()->applyFromArray(
    array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        'vertical'   => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        'rotation'   => 0,
        'wrap'	   => true
    )
);
/*$objPHPExcel->getActiveSheet(0)->getStyle('C9:C12')->getAlignment()->applyFromArray(
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
	  );	  */
//HÜCRE YÜKSEKLİKLERİ
$objPHPExcel->getSheet(0)->getRowDimension('1')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('2')->setRowHeight(7);
$objPHPExcel->getSheet(0)->getRowDimension('3')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('4')->setRowHeight(7);
$objPHPExcel->getSheet(0)->getRowDimension('5')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('6')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('7')->setRowHeight(15);
$objPHPExcel->getSheet(0)->getRowDimension('8')->setRowHeight(7);
$objPHPExcel->getSheet(0)->getRowDimension('9')->setRowHeight(30);
$objPHPExcel->getSheet(0)->getRowDimension('10')->setRowHeight(50);
for ($row = '11'; $row != '15'; $row++) {
    $objPHPExcel->getSheet(0)->getRowDimension($row)->setRowHeight(45);
}
for ($row = '15'; $row != '26'; $row++) {
    $objPHPExcel->getSheet(0)->getRowDimension($row)->setRowHeight(15);
}
//HÜCRE GENİŞLİKLERİ
$objPHPExcel->getSheet(0)->getColumnDimension('A')->setWidth(28);
$objPHPExcel->getSheet(0)->getColumnDimension('B')->setWidth(14);
//$objPHPExcel->getSheet(0)->getColumnDimension('D')->setWidth(4.0);
//$objPHPExcel->getSheet(0)->getColumnDimension('E')->setWidth(7.3);
for ($col = 'C'; $col != 'N'; $col++) {
    $objPHPExcel->getSheet(0)->getColumnDimension($col)->setWidth(8);
}
$objPHPExcel->getSheet(0)->getColumnDimension('O')->setWidth(14);
$objPHPExcel->getSheet(0)->getColumnDimension('P')->setWidth(8);
$objPHPExcel->getSheet(0)->getColumnDimension('Q')->setWidth(8);
//$objPHPExcel->getSheet(0)->getColumnDimension('N')->setWidth(15);
//HÜCRE BİRLEŞTİRMELERİ
$objPHPExcel->getSheet(0)->mergeCells("A3:Q3");$objPHPExcel->getSheet(0)->mergeCells("A5:D5");$objPHPExcel->getSheet(0)->mergeCells("A6:D6");
$objPHPExcel->getSheet(0)->mergeCells("A7:D7");$objPHPExcel->getSheet(0)->mergeCells("A9:A10");$objPHPExcel->getSheet(0)->mergeCells("B9:B10");$objPHPExcel->getSheet(0)->mergeCells("C9:J9");
$objPHPExcel->getSheet(0)->mergeCells("K9:O9");$objPHPExcel->getSheet(0)->mergeCells("P9:Q9");$objPHPExcel->getSheet(0)->mergeCells("A18:E18");
$objPHPExcel->getSheet(0)->mergeCells("K18:Q18");$objPHPExcel->getSheet(0)->mergeCells("B19:E19");$objPHPExcel->getSheet(0)->mergeCells("K19:M19");
$objPHPExcel->getSheet(0)->mergeCells("B20:E20");$objPHPExcel->getSheet(0)->mergeCells("K20:M20");$objPHPExcel->getSheet(0)->mergeCells("B21:E21");$objPHPExcel->getSheet(0)->mergeCells("K21:M21");
$objPHPExcel->getSheet(0)->mergeCells("B22:E22");$objPHPExcel->getSheet(0)->mergeCells("K22:M22");$objPHPExcel->getSheet(0)->mergeCells("N19:Q19");
$objPHPExcel->getSheet(0)->mergeCells("N20:Q20");$objPHPExcel->getSheet(0)->mergeCells("N21:Q21");$objPHPExcel->getSheet(0)->mergeCells("N22:Q22");
$objPHPExcel->getSheet(0)->mergeCells("E7:G7");$objPHPExcel->getSheet(0)->mergeCells("E5:Q5");$objPHPExcel->getSheet(0)->mergeCells("E6:Q6");
/*$objPHPExcel->getSheet(0)->mergeCells("G19:G20");$objPHPExcel->getSheet(0)->mergeCells("H19:H20");$objPHPExcel->getSheet(0)->mergeCells("A21:C22");
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
$objPHPExcel->getSheet(0)->mergeCells("N19:N20");*/
//AÇIKLAMALAR
//$objPHPExcel->getSheet(0)->mergeCells("A33:D33");$objPHPExcel->getSheet(0)->mergeCells("L33:N33");$objPHPExcel->getSheet(0)->mergeCells("B34:D34");
//$objPHPExcel->getSheet(0)->mergeCells("M34:N34");$objPHPExcel->getSheet(0)->mergeCells("B35:D35");$objPHPExcel->getSheet(0)->mergeCells("M35:N35");
//$objPHPExcel->getSheet(0)->mergeCells("B36:D36");$objPHPExcel->getSheet(0)->mergeCells("M36:N36");$objPHPExcel->getSheet(0)->mergeCells("B37:D37");
//$objPHPExcel->getSheet(0)->mergeCells("M37:N37");
//FORM YAZILARI
$objPHPExcel->getSheet(0)->setCellValue('A1', 'EK 3');
$objPHPExcel->getSheet(0)->setCellValue('A3', 'EVLİLİK ÖNCESİ DANIŞMANLIK FORMU');
$objPHPExcel->getSheet(0)->setCellValue('A5', 'İLİN ADI:');
$objPHPExcel->getSheet(0)->setCellValue('A6', 'SAĞLIK RAPORU DÜZENLEYEN KURULUŞUN ADI:');
$objPHPExcel->getSheet(0)->setCellValue('A7', 'SAĞLIK RAPORUNUN DÜZENLENDİĞİ DÖNEM:');
$objPHPExcel->getSheet(0)->setCellValue('A9', 'TOPLAM');
$objPHPExcel->getSheet(0)->setCellValue('C9', 'YAŞ GRUPLARINA GÖRE DAĞILIM');
$objPHPExcel->getSheet(0)->setCellValue('K9', 'ÖĞRENİM DURUMUNA GÖRE DAĞILIM');
$objPHPExcel->getSheet(0)->setCellValue('P9', 'AKRABALIK DURUMU*');
$objPHPExcel->getSheet(0)->setCellValue('C10', '17 ve altı');
$objPHPExcel->getSheet(0)->setCellValue('D10', '18-24');
$objPHPExcel->getSheet(0)->setCellValue('E10', '25-29');
$objPHPExcel->getSheet(0)->setCellValue('F10', '30-34');
$objPHPExcel->getSheet(0)->setCellValue('G10', '35-39');
$objPHPExcel->getSheet(0)->setCellValue('H10', '40-44');
$objPHPExcel->getSheet(0)->setCellValue('I10', '45-49');
$objPHPExcel->getSheet(0)->setCellValue('J10', '50 ve üzeri');
$objPHPExcel->getSheet(0)->setCellValue('K10', 'Okur Yazar Değil');
$objPHPExcel->getSheet(0)->setCellValue('L10', 'Okur Yazar');
$objPHPExcel->getSheet(0)->setCellValue('M10', 'İlk- Orta');
$objPHPExcel->getSheet(0)->setCellValue('N10', 'Lise');
$objPHPExcel->getSheet(0)->setCellValue('O10', 'Yüksekokul/ Üniversite');
$objPHPExcel->getSheet(0)->setCellValue('P10', 'VAR');
$objPHPExcel->getSheet(0)->setCellValue('Q10', 'YOK');
$objPHPExcel->getSheet(0)->setCellValue('A11', 'DANIŞMANLIK VERİLEN KADIN SAYISI');
$objPHPExcel->getSheet(0)->setCellValue('A12', 'SAĞLIK RAPORU DÜZENLENEN KADIN SAYISI');
$objPHPExcel->getSheet(0)->setCellValue('A13', 'DANIŞMANLIK VERİLEN ERKEK SAYISI');
$objPHPExcel->getSheet(0)->setCellValue('A14', 'SAĞLIK RAPORU DÜZENLENEN ERKEK SAYISI');
$objPHPExcel->getSheet(0)->setCellValue('A18','DÜZENLEYEN');
$objPHPExcel->getSheet(0)->setCellValue('K18','ONAYLAYAN');
$objPHPExcel->getSheet(0)->setCellValue('A19','Adı Soyadı:');
$objPHPExcel->getSheet(0)->setCellValue('A20','Ünvanı:');
$objPHPExcel->getSheet(0)->setCellValue('A21','Tarih:');
$objPHPExcel->getSheet(0)->setCellValue('A22','İmza:');
$objPHPExcel->getSheet(0)->setCellValue('K19','Adı Soyadı:');
$objPHPExcel->getSheet(0)->setCellValue('K20','Ünvanı:');
$objPHPExcel->getSheet(0)->setCellValue('K21','Tarih:');
$objPHPExcel->getSheet(0)->setCellValue('K22','İmza:');
$objPHPExcel->getSheet(0)->setCellValue('A25', '      NOT:');
$objPHPExcel->getSheet(0)->setCellValue('A26', '            *  Form aylık olarak,sağlık raporu düzenleyen kurum ve kuruluş tarafından TSM ye,TSM tarafından da İl Halk Sağlığı Müdürlüğüne gönderilecektir.');
$objPHPExcel->getSheet(0)->setCellValue('A27', '            *  Halk Sağlığı Müdürlüğünce 3 ayda bir formun icmali alınarak THSK Kadın ve Üreme Sağlığı Daire Başkanlığına bildirilecektir.');
$objPHPExcel->getSheet(0)->setCellValue('A28', '            *  *Çiftler ilgili sütuna ayrı ayrı kaydedilecektir.');
$objPHPExcel->getSheet(0)->setCellValue('A29', '            *  Yaş Gruplarına Göre Dağılım = Öğrenim Durumuna Göre Dağılım = Akrabalık Durumu = Toplam olmalıdır.');
//ÇİZGİLER
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A9:Q14")->applyFromArray($styleThinBlackBorderOutline);
//$objPHPExcel->setActiveSheetIndex(0)->getStyle("A18:E22")->applyFromArray($ciftcizgi);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A18:E22")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("K18:Q22")->applyFromArray($styleThinBlackBorderOutline);
/*$objPHPExcel->setActiveSheetIndex(0)->getStyle("L19:N20")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("A33:D37")->applyFromArray($styleThinBlackBorderOutline);
$objPHPExcel->setActiveSheetIndex(0)->getStyle("L33:N37")->applyFromArray($styleThinBlackBorderOutline);*/
//KİLİTSİZ HÜCRELER
$objPHPExcel->getActiveSheet(0)->getProtection()->setSheet(true);
$objPHPExcel->getActiveSheet()->getStyle('A19:Q22')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
/*$objPHPExcel->getActiveSheet()->getStyle('D9:G9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('K9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('M9:N9')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('D11:F11')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('D19:G27')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('N19')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('B34:B37')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);
$objPHPExcel->getActiveSheet()->getStyle('M34:M37')->getProtection()->setLocked(PHPExcel_Style_Protection::PROTECTION_UNPROTECTED);*/
      $tdvks=$tverim1+$tverim2+$tverim3+$tverim4+$tverim5+$tverim6+$tverim7+$tverim8;
      $tsrdks=$tverim16+$tverim17+$tverim18+$tverim19+$tverim20+$tverim21+$tverim22+$tverim23;
      $tdves=$tverim31+$tverim32+$tverim33+$tverim34+$tverim35+$tverim36+$tverim37+$tverim38;
      $tsrdes=$tverim46+$tverim47+$tverim48+$tverim49+$tverim50+$tverim51+$tverim52+$tverim53;
$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('E5', $ilinadi)
    ->setCellValue('E6', $ilceninadi.' '.$top)
    ->setCellValue('E7', $ayadi.'-'.$yilgelen)
//DANIŞMALIK VERİLEN KADIN SAYISI
    ->setCellValue('B11', $tdvks)
    ->setCellValue('C11', $tverim1)
    ->setCellValue('D11', $tverim2)
    ->setCellValue('E11', $tverim3)
    ->setCellValue('F11', $tverim4)
    ->setCellValue('G11', $tverim5)
    ->setCellValue('H11', $tverim6)
    ->setCellValue('I11', $tverim7)
    ->setCellValue('J11', $tverim8)
    ->setCellValue('K11', $tverim9)
    ->setCellValue('L11', $tverim10)
    ->setCellValue('M11', $tverim11)
    ->setCellValue('N11', $tverim12)
    ->setCellValue('O11', $tverim13)
    ->setCellValue('P11', $tverim14)
    ->setCellValue('Q11', $tverim15)
//SAĞLIK RAPORU DÜZENLENEN KADIN SAYISI
    ->setCellValue('B12', $tsrdks)
    ->setCellValue('C12', $tverim16)
    ->setCellValue('D12', $tverim17)
    ->setCellValue('E12', $tverim18)
    ->setCellValue('F12', $tverim19)
    ->setCellValue('G12', $tverim20)
    ->setCellValue('H12', $tverim21)
    ->setCellValue('I12', $tverim22)
    ->setCellValue('J12', $tverim23)
    ->setCellValue('K12', $tverim24)
    ->setCellValue('L12', $tverim25)
    ->setCellValue('M12', $tverim26)
    ->setCellValue('N12', $tverim27)
    ->setCellValue('O12', $tverim28)
    ->setCellValue('P12', $tverim29)
    ->setCellValue('Q12', $tverim30)
//DANIŞMANLIK VERİLEN ERKEK SAYISI
    ->setCellValue('B13', $tdves)
    ->setCellValue('C13', $tverim31)
    ->setCellValue('D13', $tverim32)
    ->setCellValue('E13', $tverim33)
    ->setCellValue('F13', $tverim34)
    ->setCellValue('G13', $tverim35)
    ->setCellValue('H13', $tverim36)
    ->setCellValue('I13', $tverim37)
    ->setCellValue('J13', $tverim38)
    ->setCellValue('K13', $tverim39)
    ->setCellValue('L13', $tverim40)
    ->setCellValue('M13', $tverim41)
    ->setCellValue('N13', $tverim42)
    ->setCellValue('O13', $tverim43)
    ->setCellValue('P13', $tverim44)
    ->setCellValue('Q13', $tverim45)
//SAĞLIK RAPORU DÜZENLENEN ERKEK SAYISI
    ->setCellValue('B14', $tsrdes)
    ->setCellValue('C14', $tverim46)
    ->setCellValue('D14', $tverim47)
    ->setCellValue('E14', $tverim48)
    ->setCellValue('F14', $tverim49)
    ->setCellValue('G14', $tverim50)
    ->setCellValue('H14', $tverim51)
    ->setCellValue('I14', $tverim52)
    ->setCellValue('J14', $tverim53)
    ->setCellValue('K14', $tverim54)
    ->setCellValue('L14', $tverim55)
    ->setCellValue('M14', $tverim56)
    ->setCellValue('N14', $tverim57)
    ->setCellValue('O14', $tverim58)
    ->setCellValue('P14', $tverim59)
    ->setCellValue('Q14', $tverim60)
//DÜZENLEYEN-ONAYLAYAN
    ->setCellValue('B19', $tverim173)
    ->setCellValue('B20', $tverim174)
    ->setCellValue('N19', $tverim176)
    ->setCellValue('N20', $tverim177);

$objPHPExcel->getActiveSheet(0)->setTitle($kurumb);
?>