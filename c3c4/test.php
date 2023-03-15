<?php

require_once 'vendor/phpoffice/phpword/bootstrap.php';
include_once 'vendor/phpoffice/phpword/samples/Sample_Header.php';
include('c3c4alanlari.php');
include('../con_023.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$xaygelentarihgun=substr($aygelen,8,2);
$xaygelentarihay=substr($aygelen,5,2);
$xaygelentarihyil=substr($aygelen,0,4);
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
include('../con_abe.php');
$resultveri = @mysqli_query($dbhabe,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucumveri=mysqli_fetch_array($resultveri)){
$vverim1=$sonucumveri['v1'];
$vverim2=$sonucumveri['v2'];
$vverim3=$sonucumveri['v3'];
$vverim4=$sonucumveri['v4'];
$vverim5=$sonucumveri['v5'];
$vverim6=$sonucumveri['v6'];
}
 
$toplamvaka=$vverim1+$vverim2+$vverim3+$vverim4+$vverim5+$vverim6;
$resultvyil = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/c3c4_sablonlar/c3c4_veri_seti.php');
if($verim26==0 and $verim27==0 and $verim28==0){
    $kultur="";
    $hepsifir="Gaita tahlili yapılmamıştır."; 
    }else if($verim26==0 and $verim29==0){
    $kultur="";
    }else if($verim26>=1 and $verim32==0){
  $gkdurum="gaita kültürü yapılmıştır.Sonucu henüz belli değildir.";
    $kultur=$verim26.' '.$gkdurum ;
    }else if($verim26>=1 and $verim32>=1){
    $gkpozcik="kültür sonucu pozitif çıkmıştır.";
  $gkdurum="gaita kültürü yapılmıştır.";
    $kultur=$verim26.' '.$gkdurum.''.$verim32.' '.$gkpozcik ;
    }
    if($verim27==0 and $verim30==0){
    $parazit="";
    }else if($verim27>=1 and $verim33==0){
  $gpdurum="parazit incelemesi yapılmıştır.Parazit inceleme sonucu negatiftir.";
    $parazit=$verim27.' '.$gpdurum ;
    }else if($verim27>=1 and $verim33>=1){
    $gppozcik="parazit inceleme sonucu pozitif çıkmıştır.";
  $gpdurum="parazit incelemesi yapılmıştır.";
    $parazit=$verim27.' '.$gpdurum.''.$verim33.' '.$gppozcik ;
    }
    if($verim28==0 and $verim31==0){
    $viral="";
    }else if($verim28>=1 and $verim34==0){
  $gvdurum="viral etken incelemesi yapılmıştır.Viral etken inceleme sonucu negatiftir.";
    $viral=$verim28.' '.$gvdurum ;
    }else if($verim28>=1 and $verim34>=1){
    $gvpozcik="viral etken inceleme sonucu pozitif çıkmıştır.";
  $gvdurum="viral etken incelemesi yapılmıştır.";
    $viral=$verim28.' '.$gvdurum.''.$verim34.' '.$gvpozcik ;
    }

    $iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbhabe,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbhabe,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
 if($ilcegelen=="İlçe Seçiniz"){
$ilkod=substr(trim($socadi),0,2);

}elseif($ocgelen=="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);

}elseif($ilcegelen!="İlçe Seçiniz" and $ocgelen!="Aile Hekimini Seçiniz"){
$ilkod=substr(trim($ocgelen),0,2);
$ilcekod=substr(trim($ocgelen),3,2);
$ahkod=substr(trim($ocgelen),6,3);

}else{
$ilkod=substr(trim($socadi),0,2);
$ilcekod=substr(trim($socadi),3,2);
$ahkod=substr(trim($socadi),6,3);

}
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$asmninadine=$satir['asmadi'];
//@mysql_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];


          
}
echo date('H:i:s'),' '."Rapor Aşağıdaki Formatlarda Oluşturuldu.".' ', EOL;
$phpword = new \PhpOffice\PhpWord\PhpWord();
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setName('DejaVu Sans, sans-serif');
$fontStyle->setName('DejaVu Sans, sans-serif');
$section = $phpword->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 300,
        'marginTop'    => 20,
        'marginBottom' => 20,
        'headerHeight' => 20,
        'footerHeight' => 20,
    )
);
$noSpace = array('space' => array('before' => 80, 'after' => 80));
$paragraf="          ";
$kurum="İLÇE SAĞLIK MÜDÜRLÜĞÜ";
$tarihinde="TARİHİNDE";
$arastirmadetay="tarihinde akut barsak enfeksiyonu ön tanı ve/veya tanısında önceki günlere göre meydana gelen artış sebebiyle vakalar ile ilgili olarak yaş, cins, yerleşim yerlerinin tesbiti, semptomların sağlık kurum veya kuruluşlarından tekrar sorgulaması yapılmış ve alınan koruyucu sağlık hizmeti önlemleri araştırılmıştır.";
$abebildirilen="tarihinde hastaneler tarafından bildirilen Akut Barsak Enfeksiyonları dağılımı aşağıdaki gibidir:";
$ne="'ne";
$basvuran="başvuran";
$hastadan="hastadan";
$nden="'nden";
$hastbildirilen="tarihinde bildirilen Akut Barsak Enfeksiyonlarının yaş ve cins gruplarına göre dağılımını gösterir tablo aşağıdaki gibidir:";
$degraporu="İLÇESİ HASTANELERİNCE GÜNLÜK BİLDİRİLEN AKUT BARSAK ENFEKSİYONARINDAKİ ARTIŞ İLE İLGİLİ DEĞERLENDİRME RAPORU";
$tsim="          Günlük olarak Sağlık Bakanlığı TSİM sistemine veri girişi yapılan A09, R11, K52 ICD-10 kodlu Akut Barsak Enfeksiyonlarında";
$arastirma="          İnceleme konusu olan artışla ilgili olarak bildirilen";
$sayisinda=" sayısında";
$etoplam=$verim4+$verim6+$verim8+$verim10+$verim12+$verim14+$verim16+$verim18+$verim20;
$ktoplam=$verim5+$verim7+$verim9+$verim11+$verim13+$verim15+$verim17+$verim19+$verim21;
$ektoplam=$etoplam+$ktoplam; 
if($toplamvaka>$ektoplam){
$esassayi="Veri hataları ve mükerrer kayıtlar kontrol edildikten sonra hasta sayısının";
$kalankisi="kişi olduğu tesbit edilmiştir.";
$esassonuc=$esassayi.' '.$ektoplam.' '.$kalankisi;
}else if($toplamvaka<$ektoplam){
$fazlasayi=$ektoplam-$toplamvaka;
$esassayi="Kayıtlar kontrol edildikten sonra hasta sayısının";
$kalankisi="kişi eksik bildirildiği tesbit edilmiştir.";
$esassonuc=$esassayi.' '.$fazlasayi.' '.$kalankisi;
}else{
$esassonuc="";
}
$hastalistesi="Kontrol edilen hasta listesi ekte sunulmuştur.";
$not="NOT: Aşağıdaki veriler sadece";
$icin="için düzenlenmiştir.";
 
$hastaliste="tarihli hasta listesi ektedir."; 
$header = array('size' => 16, 'bold' => true , 'name' => 'Times New Roman');
$ortala= array('align' => 'center');
$bilgi = array('size' => 12, 'bold' => true , 'name' => 'DejaVu Sans');
$soru = array('size' => 12, 'bold' => false , 'name' => 'DejaVu Sans');
$section->addText(htmlspecialchars('HASTANE AGE VAKA ARTIŞI (C3-C4 SİNYALİ) SORGULAMA FORMU'), $header, $ortala );
$section->addText(htmlspecialchars('1-Hastaneden A09-R11-K52 ICD 10 Kodlu hasta listesi alınır.'), $soru,$noSpace);
$section->addText($ilinadi.'-'.$ilceninadi.' '.$asmninadine.' '.$noktatarih.' '.$hastaliste,$bilgi,$noSpace);
$section->addText(htmlspecialchars('2-Veri giriş hatası olup olmadığı incelenir.'), $soru,$noSpace);
$section->addText($verim1,$bilgi,$noSpace);
$section->addText(htmlspecialchars('3-Mükerrer kayıt olup olmadığı incelenir.'), $soru,$noSpace);
$section->addText($verim2,$bilgi,$noSpace);
$section->addText(htmlspecialchars('4-İkamet adresleri dikkatlice kontrol edilerek kümelenme olup olmadığı araştırılır.'), $soru,$noSpace);
$section->addText($verim3,$bilgi,$noSpace);
$section->addText(htmlspecialchars('5-Listelerden hastaların yaş gruplarına göre dağılımı aşağıdaki tablo doldurularak yapılır.'), $soru,$noSpace);
$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');
$cellHLefted = array('align' => 'both');
$phpword->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$cell1 = $table->addCell(1000, $cellColSpan);
$textrun1 = $cell1->addTextRun($cellHCentered);
$textrun1->addText(htmlspecialchars('0-11 ay'),$soru,$noSpace);
//$textrun1->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell2 = $table->addCell(1000, $cellColSpan);
$textrun2 = $cell2->addTextRun($cellHCentered);
$textrun2->addText(htmlspecialchars('1-4 y'),$soru,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell3 = $table->addCell(1000, $cellColSpan);
$textrun3 = $cell3->addTextRun($cellHCentered);
$textrun3->addText(htmlspecialchars('5-9 y'),$soru,$noSpace);
//$textrun3->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell4 = $table->addCell(1000, $cellColSpan);
$textrun4 = $cell4->addTextRun($cellHCentered);
$textrun4->addText(htmlspecialchars('10-14 y'),$soru,$noSpace);
//$textrun4->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell5 = $table->addCell(1000, $cellColSpan);
$textrun5 = $cell5->addTextRun($cellHCentered);
$textrun5->addText(htmlspecialchars('15-19 y'),$soru,$noSpace);
//$textrun5->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell6 = $table->addCell(1000, $cellColSpan);
$textrun6 = $cell6->addTextRun($cellHCentered);
$textrun6->addText(htmlspecialchars('20-29 y'),$soru,$noSpace);
//$textrun6->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell7 = $table->addCell(1000, $cellColSpan);
$textrun7 = $cell7->addTextRun($cellHCentered);
$textrun7->addText(htmlspecialchars('30-44 y'),$soru,$noSpace);
//$textrun7->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell8 = $table->addCell(1000, $cellColSpan);
$textrun8 = $cell8->addTextRun($cellHCentered);
$textrun8->addText(htmlspecialchars('45-64 y'),$soru,$noSpace);
//$textrun8->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell9 = $table->addCell(1000, $cellColSpan);
$textrun9 = $cell9->addTextRun($cellHCentered);
$textrun9->addText(htmlspecialchars('65 + y'),$soru,$noSpace);
//$textrun9->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell10 = $table->addCell(1200, $cellColSpan);
$textrun10 = $cell10->addTextRun($cellHCentered);
$textrun10->addText(htmlspecialchars('TOPLAM'),$soru,$noSpace);
//$textrun10->addFootnote()->addText(htmlspecialchars('Colspan span'));

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
//$table->addCell(null, $cellRowContinue);

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim4), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim5), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim6), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim7), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim8), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim9), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim10), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim11), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim12), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim13), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim14), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim15), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim16), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim17), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim18), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim19), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim20), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim21), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($etoplam), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($ktoplam), $bilgi, $cellHCentered,$noSpace);







$section->addText(htmlspecialchars('6-Yaş grupları da dikkate alınarak kreş,anaokulu,okul,üniversite,lokanta,alışveriş merkezi,otel,doğum günü,miting,mevlit ve düğün gibi yemek yenilen toplu organizasyonda bulunup bulunmadığı araştırılır.'), $soru,$noSpace);
$section->addText($verim22,$bilgi,$noSpace);
$section->addText(htmlspecialchars('7-Aynı aileye mensup kişiler olup olmadığı araştırılır.'), $soru,$noSpace);
$section->addText($verim23,$bilgi,$noSpace);
$section->addText(htmlspecialchars('8-Hastaların meslek grupları sorgulanır.'), $soru,$noSpace);
$section->addText($verim25,$bilgi,$noSpace);
$section->addText(htmlspecialchars('9-Hastaneye başvuran hastalardan gaita mikroskopisi ve kültürü yapılıp,yapılmadığı araştırılır.'), $soru,$noSpace);
$section->addText($hepsifir.''/*.$kultur.''*/.$parazit.''.$viral,$bilgi,$noSpace);
$section->addText(htmlspecialchars('10-AGE şikayetleri ile hastaneye başvuran hastalardan kaçının ayaktan kaç tanesinin yatarak tedavi edildiği,yatarak tedavi gören hastaların genel durumlarının kötü olup olmadığı sorgulanmalıdır.'), $soru,$noSpace);
$section->addText($verim35,$bilgi,$noSpace);
$section->addText(htmlspecialchars('11-Klinisyenden olay/etken/hastalık hakkında görüş alınır.'), $soru,$noSpace);
$section->addText($verim36,$bilgi,$noSpace);
$section->addText(htmlspecialchars('12-Geçmiş 2 aylık su numune sonuçları ile şimdiki klor bakiye sonucu kontrol edilirTüm sonuç raporları eklenerek Erken Uyarı-Cevap Birimine gönderilir.'), $soru,$noSpace);
$section->addText($verim37,$bilgi,$noSpace);
$section->addText(htmlspecialchars('Yukarıdaki maddeler aynı gün içerisinde tek tek sorgulandıktan sonra oluşturulacak rapor ile birlikte sorgulama formu, bölgenin en son içme-kullanma suyu analiz raporları ve hasta listesi Antalya Halk Sağlığı Müdürlüğü Erken Uyarı-Cevap Birimi antalya.erkenuyari@saglik.gov.tr adresine ivedilikle gönderilir.'), $soru,$noSpace);
$section->addText(htmlspecialchars('Antalya Sağlık Müdürlüğü'), $soru , $cellHCentered,$noSpace);
$section->addText(htmlspecialchars('Erken Uyarı Cevap Birimi'), $soru , $cellHCentered,$noSpace);

//$section->addPageBreak();
$section = $phpword->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 900,
        'marginTop'    => 1200,
        'marginBottom' => 1200,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
$duzaygelentarihgun=substr($verim178,8,2);
$duzaygelentarihay=substr($verim178,5,2);
$duzaygelentarihyil=substr($verim178,0,4);
$duznoktatarih= $duzaygelentarihgun.'.'.$duzaygelentarihay.'.'.$duzaygelentarihyil ;

$section->addText($ilceninadi.' '.$kurum,$bilgi , $cellHCentered);
$section->addText($noktatarih.' '.$tarihinde.' '.$ilceninadi.' '.$degraporu,$bilgi, 
    array('space' => array('before' => 6500, 'after' => 480) , 'align' => 'center')
);
$section->addText($duznoktatarih,$bilgi, 
    array('space' => array('before' => 3000, 'after' => 480) , 'align' => 'center')
);
$section->addText(htmlspecialchars('Bulaşıcı Hastalıklar Kontrol Proğramları Birimi'),$bilgi, 
    array('space' => array('before' => 3000, 'after' => 480) , 'align' => 'center')
);
//$section->addPageBreak();
$section = $phpword->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 900,
        'marginTop'    => 20,
        'marginBottom' => 20,
        'headerHeight' => 20,
        'footerHeight' => 20,
    )
);

//$noSpace = array('space' => array('before' => 40, 'after' => 40));
$hiza = array('align' => 'both');

$section->addText($tsim.' '.$verim38,$soru, $hiza, $noSpace);
$section->addText($arastirma.' '.$toplamvaka.' '.$sayisinda.' '.$verim1.' '.$verim2.' '.$esassonuc.' '.$hastalistesi,$soru, $hiza, $noSpace);
$section->addText($paragraf.' '.$noktatarih.' '.$arastirmadetay,$soru, $hiza, $noSpace);
$section->addText($paragraf.' '.$noktatarih.' '.$abebildirilen,$soru, $hiza, $noSpace);

$styleTable = array('borderSize' => 6, 'borderColor' => '000000', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '000000');
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\phpword\Style\Cell::TEXT_DIR_BTLR);
$fontStyle = array('size' => 12,'bold' => true, 'align' => 'center' , 'name' => 'Times New Roman');
$phpword->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
$table = $section->addTable('Fancy Table');
$table->addRow();
$table->addCell(4000, $styleCell)->addText(htmlspecialchars('SAĞLIK KURULUŞU / ICD-10 KODU'), $soru,$noSpace, $cellHLefted);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('A09'), $soru, $cellHCentered);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('R11'), $soru, $cellHCentered);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('K52'), $soru, $cellHCentered);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('TOPLAM'), $soru, $cellHCentered);
$i=1;

$hresultveri = @mysqli_query($dbhabe,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vayadi='$aygelen') order by vocadi") ;
while($hsonucumveri=mysqli_fetch_array($hresultveri)){ 
$kac=mysqli_num_rows($hresultveri);
$hsocadi=$hsonucumveri['vocadi'];
$hverim1=$hsonucumveri['v1'];
$hverim2=$hsonucumveri['v2'];
$hverim3=$hsonucumveri['v3'];
$hverim4=$hsonucumveri['v4'];  
$hverim5=$hsonucumveri['v5'];
$hverim6=$hsonucumveri['v6'];  
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$hsocadi')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$xasmninadine=$satir['asmadi'];

 $table->addRow($kac);
    $table->addCell(4000)->addText($xasmninadine, $fontStyle, $bilgi,$noSpace);
}
    $table->addCell(1500)->addText(htmlspecialchars($hverim1+$hverim2), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim3+$hverim4), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim5+$hverim6), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($hverim1+$hverim2+$hverim3+$hverim4+$hverim5+$hverim6), $fontStyle, $cellHCentered,$noSpace);
	$i++;
	
}

$tresultveri = @mysqli_query($dbhabe,"select sum(v1+v2) as a09, sum(v3+v4) as r11, sum(v5+v6) as k52 from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vayadi='$aygelen')") ;
while($tsonucumveri=mysqli_fetch_array($tresultveri)){ 
$tverim1=$tsonucumveri['a09'];
$tverim2=$tsonucumveri['r11'];
$tverim3=$tsonucumveri['k52'];
$toplam=($tverim1+$tverim2+$tverim3);

$table->addRow();
	$table->addCell(4000)->addText('TOPLAM', $soru);
    $table->addCell(1500)->addText(htmlspecialchars($tverim1), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($tverim2), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($tverim3), $fontStyle, $cellHCentered,$noSpace);
    $table->addCell(1500)->addText(htmlspecialchars($toplam), $fontStyle, $cellHCentered,$noSpace);
}

//$section->addText('');
$section->addText($not.' '.$asmninadine.' '.$icin,$bilgi,$noSpace, $hiza);
$section->addText($ilceninadi.' '.$asmninadine.''.$nden.' '.$noktatarih.' '.$hastbildirilen,$soru, $hiza, $noSpace);

$phpword->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$cell1 = $table->addCell(1000, $cellColSpan);
$textrun1 = $cell1->addTextRun($cellHCentered);
$textrun1->addText(htmlspecialchars('0-11 ay'),$soru,$noSpace);
//$textrun1->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell2 = $table->addCell(1000, $cellColSpan);
$textrun2 = $cell2->addTextRun($cellHCentered);
$textrun2->addText(htmlspecialchars('1-4 y'),$soru,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell3 = $table->addCell(1000, $cellColSpan);
$textrun3 = $cell3->addTextRun($cellHCentered);
$textrun3->addText(htmlspecialchars('5-9 y'),$soru,$noSpace);
//$textrun3->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell4 = $table->addCell(1000, $cellColSpan);
$textrun4 = $cell4->addTextRun($cellHCentered);
$textrun4->addText(htmlspecialchars('10-14 y'),$soru,$noSpace);
//$textrun4->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell5 = $table->addCell(1000, $cellColSpan);
$textrun5 = $cell5->addTextRun($cellHCentered);
$textrun5->addText(htmlspecialchars('15-19 y'),$soru,$noSpace);
//$textrun5->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell6 = $table->addCell(1000, $cellColSpan);
$textrun6 = $cell6->addTextRun($cellHCentered);
$textrun6->addText(htmlspecialchars('20-29 y'),$soru,$noSpace);
//$textrun6->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell7 = $table->addCell(1000, $cellColSpan);
$textrun7 = $cell7->addTextRun($cellHCentered);
$textrun7->addText(htmlspecialchars('30-44 y'),$soru,$noSpace);
//$textrun7->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell8 = $table->addCell(1000, $cellColSpan);
$textrun8 = $cell8->addTextRun($cellHCentered);
$textrun8->addText(htmlspecialchars('45-64 y'),$soru,$noSpace);
//$textrun8->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell9 = $table->addCell(1000, $cellColSpan);
$textrun9 = $cell9->addTextRun($cellHCentered);
$textrun9->addText(htmlspecialchars('65 + y'),$soru,$noSpace);
//$textrun9->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell10 = $table->addCell(1200, $cellColSpan);
$textrun10 = $cell10->addTextRun($cellHCentered);
$textrun10->addText(htmlspecialchars('TOPLAM'),$soru,$noSpace);
//$textrun10->addFootnote()->addText(htmlspecialchars('Colspan span'));

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('E'), $soru , $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars('K'), $soru , $cellHCentered,$noSpace);
//$table->addCell(null, $cellRowContinue);

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim4), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim5), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim6), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim7), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim8), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim9), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim10), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim11), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim12), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim13), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim14), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim15), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim16), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim17), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim18), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim19), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim20), $bilgi, $cellHCentered,$noSpace);
$table->addCell(500, $cellVCentered)->addText(htmlspecialchars($verim21), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($etoplam), $bilgi, $cellHCentered,$noSpace);
$table->addCell(600, $cellVCentered)->addText(htmlspecialchars($ktoplam), $bilgi, $cellHCentered,$noSpace);

//$section->addText('');
$section->addText($asmninadine.''.$ne.' '.$basvuran.' '.$ektoplam.' '.$hastadan.' '.$verim40 ,$bilgi,$noSpace);

//$section->addText('' ,$bilgi);
$section->addText(htmlspecialchars('HASTALARIN BAŞVURDUĞU POLİKLİNİĞE GÖRE DAĞILIMI'), $soru, $cellHCentered);

$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');

$phpword->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('POLİKLİNİK ADI'), $soru, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('BAŞVURU SAYISI'), $soru, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('MÜŞAHADE İÇİN YATIRILAN HASTA'), $soru, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText(htmlspecialchars('SERVİSE YATIRILAN HASTA'), $soru, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim82, $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim83, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim84, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim85, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim86, $bilgi, $cellHLefted);
$table->addCell(2000, $cellVCentered)->addText($verim87, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim88, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim89, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim90, $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim91, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim92, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim93, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim94, $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim95, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim96, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim97, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim98, $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim99, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim100, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim101, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim102, $bilgi, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim103, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim104, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim105, $bilgi, $cellHCentered,$noSpace);

$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('TOPLAM'), $soru, $cellHLefted,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim106, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim107, $bilgi, $cellHCentered,$noSpace);
$table->addCell(2000, $cellVCentered)->addText($verim108, $bilgi, $cellHCentered,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));
//$section->addPageBreak();
$section = $phpword->addSection(
    array(
        'marginLeft'   => 900,
        'marginRight'  => 900,
        'marginTop'    => 900,
        'marginBottom' => 200,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
//$section->addText('' ,$bilgi);
$section->addText(htmlspecialchars('HASTALARIN İKAMET ADRESLERİNE GÖRE DAĞILIMI'), $soru , $cellHCentered,$noSpace);

$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');

$phpword->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$table->addRow();

$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('YERLEŞİM YERİ'), $soru, $cellHCentered,$noSpace);
$table->addCell(1000, $cellVCentered)->addText(htmlspecialchars('İKAMET EDEN SAYISI'), $soru, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText(htmlspecialchars('YERLEŞİM YERİ'), $soru, $cellHCentered,$noSpace);
$table->addCell(1000, $cellVCentered)->addText(htmlspecialchars('İKAMET EDEN SAYISI'), $soru, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim41, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim42, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim43, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim44, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim45, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim46, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim47, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim48, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim49, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim50, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim51, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim52, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim53, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim54, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim55, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim56, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim57, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim58, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim59, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim60, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim61, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim62, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim63, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim64, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim65, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim66, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim67, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim68, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim69, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim70, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim71, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim72, $bilgi, $cellHCentered,$noSpace);
$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim73, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim74, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim75, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim76, $bilgi, $cellHCentered,$noSpace);$table->addRow();
//$table->addCell(null, $cellRowContinue);
$table->addCell(4000, $cellVCentered)->addText($verim77, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim78, $bilgi, $cellHCentered,$noSpace);
$table->addCell(4000, $cellVCentered)->addText($verim79, $bilgi, $cellHLefted,$noSpace);
$table->addCell(1000, $cellVCentered)->addText($verim80, $bilgi, $cellHCentered,$noSpace);
$table->addRow();

$cell11 = $table->addCell(5000, $cellColSpan);
$textrun11 = $cell11->addTextRun($cellHLefted);
$textrun11->addText(htmlspecialchars('TOPLAM'),$soru, $cellHLefted,$noSpace);
//$textrun1->addFootnote()->addText(htmlspecialchars('Colspan span'));

$cell22 = $table->addCell(5000, $cellColSpan);
$textrun22 = $cell22->addTextRun($cellHCentered);
$textrun22->addText($verim81,$bilgi,$noSpace);
//$textrun2->addFootnote()->addText(htmlspecialchars('Colspan span'));
$verideg="Hastane AGE Vaka Artışı Sorgulama Formu ve yukarıdaki veriler değerlendirildiğinde";
$digerhast="Diğer hastanelere ait verilerin normal olduğu görülmektedir.";
$episonuc="Sonuç olarak bu hastanedeki vakalar incelendiğinde epidemiyolojik bakımdan salgın niteliği taşıyacak bir durum tesbit edilmemiştir.";
if(substr($verim1,0,35)=="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)=="Mükerrer kayıt girişi mevcut değildir.") {
$artıs="nde";
$sonuchata="hatalı veri girişi ve mükerrer kayıt girişi olmadığı görülmüştür.";
$sonuctop=$asmninadine.' '.$artıs.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)=="Mükerrer kayıt girişi mevcut değildir."){
$artıs="nde artış olmadığı,";
$sonuchata="hatalı veri girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$asmninadine.' '.$artıs.' '.$sonuchata;
}else if(substr($verim1,0,35)=="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)!="Mükerrer kayıt girişi mevcut değildir.") {
$artıs="nde artış olmadığı,";
$sonuchata="mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$asmninadine.' '.$artıs.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)!="Mükerrer kayıt girişi mevcut değildir.") {
$artıs="nde artış olmadığı,";
$sonuchata="hatalı veri girişi ve mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$asmninadine.' '.$artıs.' '.$sonuchata;
}
$verim22=$verim22;
$verim3=$verim3;
$verim35=$verim35;
$verim109=$verim109;
$durumbil="Durumu bildirir değerlendirme raporudur.";
$section->addText('' ,$bilgi);
$section->addText($paragraf.' '.$verideg.' '.$sonuctop.' '.$digerhast.' '.$verim22.' '.$verim3.' '.$verim35.' '.$hepsifir.' '.$kultur.' '.$parazit.' '.$viral.' '.$episonuc.' '.$verim109, $soru , $hiza,$noSpace);
$section->addText($paragraf.' '.$durumbil.' '.$duznoktatarih, $soru , $hiza,$noSpace);
//$textrun3->addFootnote()->addText(htmlspecialchars('Colspan span'));
//$phpword->save('vendor/phpoffice/phpword/samples/hello.docx', 'Word2007');
}
echo write($phpword, basename(__FILE__, '.php'), $writers);
if (!CLI) {
    include_once 'Sample_Footer.php';
}