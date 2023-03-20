<?php
require_once 'vendor/phpoffice/phpword/bootstrap.php';
include_once 'vendor/phpoffice/phpword/samples/Listele_Header.php';
include('c3c4alanlari.php');
include('../con_023.php');
include('../con_023.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$xaygelentam=$_GET['selectay']; 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,0,2);
$xaygelentarihay=substr($xaygelentarih,3,2);
$xaygelentarihyil=substr($xaygelentarih,6,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;
$ocakyazi=$_GET['selectoc'];
include('../con_abe.php');
$resultvyil = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen') order by vayadi asc") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/c3c4_sablonlar/c3c4_veri_seti.php');
?>
<?php
// New Word Document
//echo date('H:i:s'),' '.iconv("utf-8", "iso-8859-9","Rapor Aşağıdaki Formatlarda Oluşturuldu.").' ', EOL;
$phpWord = new \PhpOffice\PhpWord\PhpWord();
$section = $phpWord->addSection(
    array(
	'orientation' => 'landscape',
        'marginLeft'   => 900,
        'marginRight'  => 300,
        'marginTop'    => 600,
        'marginBottom' => 200,
        'headerHeight' => 50,
        'footerHeight' => 50,
    )
);
$noSpace = array('space' => array('before' => 80, 'after' => 80));

$baslik="YILINDA DÜZENLENEN HASTANE AGE VAKA ARTIŞI (C3-C4 SİNYALİ) RAPORU LİSTESİ";

$header = array('size' => 16, 'bold' => true , 'name' => 'Times New Roman');
$ortala= array('align' => 'center');
$bilgi = array('size' => 12, 'bold' => false , 'name' => 'Times New Roman');
$soru = array('size' => 8, 'bold' => false , 'name' => 'Times New Roman');
$section->addText(htmlspecialchars($yilgelen.' '.$baslik), $header, $ortala );


$styleTable = array('borderSize' => 6, 'borderColor' => '999999');
$cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center', 'bgColor' => 'FFFF00');
$cellRowContinue = array('vMerge' => 'continue');
$cellColSpan = array('gridSpan' => 2, 'valign' => 'center');
$cellHCentered = array('align' => 'center');
$cellVCentered = array('valign' => 'center');
$cellHLefted = array('align' => 'left');
$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');

$styleTable = array('borderSize' => 6, 'borderColor' => '000000', 'cellMargin' => 80);
$styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '000000');
$styleCell = array('valign' => 'center');
$styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
$fontStyle = array('size' => 8,'bold' => false, 'align' => 'center' , 'name' => 'Times New Roman');
$phpWord->addTableStyle('Fancy Table', $styleTable, $styleFirstRow);
$table = $section->addTable('Fancy Table');
$table->addRow();
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Tarih'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('İl'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('İlçe'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Kurum'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Bildirilen Toplam ABE Hasta Sayısı'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Bildirilen Hastane ABE Hasta Sayısı'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Gerçek Hastane ABE Hasta Sayısı'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Veri Giriş Hatası Var mı ?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Mükerrer Kayıt Var mı ?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Kümelenme Var mı ?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Toplu Yemek Bilgisi Var mı?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Aynı Aileye Mensup Kişi Var mı ?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Meslek Grubu Belli mi ?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Yatarak Tedavi Gören ve Durumu Ağır Olan Hasta Var mı ?'), $soru, $cellHCentered, $noSpace);
$table->addCell(1500, $styleCell)->addText(htmlspecialchars('Münferit Vakalar mı ?'), $soru, $cellHCentered, $noSpace);
$i=1;
$hresultveri = @mysqli_query($dbhabe,"select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen') order by vayadi asc") ;
while($hsonucumveri=mysqli_fetch_array($hresultveri)){ 
$kac=mysqli_num_rows($hresultveri);
$hsocadi=$hsonucumveri['vocadi'];
$hayadi=$hsonucumveri['vayadi'];
$hverim1=$hsonucumveri['v1'];
$hverim2=$hsonucumveri['v2'];
$hverim3=$hsonucumveri['v3'];
$hverim4=$hsonucumveri['v4'];  
$hverim5=$hsonucumveri['v5'];
$hverim6=$hsonucumveri['v6'];  
$hverim7=$hsonucumveri['v7'];
$hverim8=$hsonucumveri['v8'];
$hverim9=$hsonucumveri['v9'];
$hverim10=$hsonucumveri['v10'];
$hverim11=$hsonucumveri['v11'];
$hverim12=$hsonucumveri['v12'];
$hverim13=$hsonucumveri['v13'];
$hverim14=$hsonucumveri['v14'];
$hverim15=$hsonucumveri['v15'];
$hverim16=$hsonucumveri['v16'];
$hverim17=$hsonucumveri['v17'];
$hverim18=$hsonucumveri['v18'];
$hverim19=$hsonucumveri['v19'];
$hverim20=$hsonucumveri['v20'];
$hverim21=$hsonucumveri['v21'];
$hverim22=$hsonucumveri['v22'];
$hverim23=$hsonucumveri['v23'];
$hverim24=$hsonucumveri['v24'];
$hverim25=$hsonucumveri['v25'];
$hverim26=$hsonucumveri['v26'];
$hverim27=$hsonucumveri['v27'];
$hverim28=$hsonucumveri['v28'];
$hverim29=$hsonucumveri['v29'];
$hverim30=$hsonucumveri['v30'];
$hverim31=$hsonucumveri['v31'];
$hverim32=$hsonucumveri['v32'];
$hverim33=$hsonucumveri['v33'];
$hverim34=$hsonucumveri['v34'];
$hverim35=$hsonucumveri['v35'];
$hverim36=$hsonucumveri['v36'];
$hverim37=$hsonucumveri['v37'];
$hverim38=$hsonucumveri['v38'];
$hverim39=$hsonucumveri['v39'];
$hverim40=$hsonucumveri['v40'];
$hverim41=$hsonucumveri['v41'];
$hverim42=$hsonucumveri['v42'];
$hverim43=$hsonucumveri['v43'];
$hverim44=$hsonucumveri['v44'];
$hverim45=$hsonucumveri['v45'];
$hverim46=$hsonucumveri['v46'];
$hverim47=$hsonucumveri['v47'];
$hverim48=$hsonucumveri['v48'];
$hverim49=$hsonucumveri['v49'];
$hverim50=$hsonucumveri['v50'];
$hverim51=$hsonucumveri['v51'];
$hverim52=$hsonucumveri['v52'];
$hverim53=$hsonucumveri['v53'];
$hverim54=$hsonucumveri['v54'];
$hverim55=$hsonucumveri['v55'];
$hverim56=$hsonucumveri['v56'];
$hverim57=$hsonucumveri['v57'];
$hverim58=$hsonucumveri['v58'];
$hverim59=$hsonucumveri['v59'];
$hverim60=$hsonucumveri['v60'];
$hverim61=$hsonucumveri['v61'];
$hverim62=$hsonucumveri['v62'];
$hverim63=$hsonucumveri['v63'];
$hverim64=$hsonucumveri['v64'];
$hverim65=$hsonucumveri['v65'];
$hverim66=$hsonucumveri['v66'];
$hverim67=$hsonucumveri['v67'];
$hverim68=$hsonucumveri['v68'];
$hverim69=$hsonucumveri['v69'];
$hverim70=$hsonucumveri['v70'];
$hverim71=$hsonucumveri['v71'];
$hverim72=$hsonucumveri['v72'];
$hverim73=$hsonucumveri['v73'];
$hverim74=$hsonucumveri['v74'];
$hverim75=$hsonucumveri['v75'];
$hverim76=$hsonucumveri['v76'];
$hverim77=$hsonucumveri['v77'];
$hverim78=$hsonucumveri['v78'];
$hverim79=$hsonucumveri['v79'];
$hverim80=$hsonucumveri['v80'];
$hverim81=$hsonucumveri['v81'];
$hverim82=$hsonucumveri['v82'];
$hverim83=$hsonucumveri['v83'];
$hverim84=$hsonucumveri['v84'];
$hverim85=$hsonucumveri['v85'];
$hverim86=$hsonucumveri['v86'];
$hverim87=$hsonucumveri['v87'];
$hverim88=$hsonucumveri['v88'];
$hverim89=$hsonucumveri['v89'];
$hverim90=$hsonucumveri['v90'];
$hverim91=$hsonucumveri['v91'];
$hverim92=$hsonucumveri['v92'];
$hverim93=$hsonucumveri['v93'];
$hverim94=$hsonucumveri['v94'];
$hverim95=$hsonucumveri['v95'];
$hverim96=$hsonucumveri['v96'];
$hverim97=$hsonucumveri['v97'];
$hverim98=$hsonucumveri['v98'];
$hverim99=$hsonucumveri['v99'];
$hverim100=$hsonucumveri['v100'];
$hverim101=$hsonucumveri['v101'];
$hverim102=$hsonucumveri['v102'];
$hverim103=$hsonucumveri['v103'];
$hverim104=$hsonucumveri['v104'];
$hverim105=$hsonucumveri['v105'];
$hverim106=$hsonucumveri['v106'];
$hverim107=$hsonucumveri['v107'];
$hverim108=$hsonucumveri['v108'];
$hverim109=$hsonucumveri['v109'];
$hverim110=$hsonucumveri['v110'];
$hverim111=$hsonucumveri['v111'];
$hverim112=$hsonucumveri['v112'];
$hverim113=$hsonucumveri['v113'];
$hverim114=$hsonucumveri['v114'];
$hverim115=$hsonucumveri['v115'];
$hverim116=$hsonucumveri['v116'];
$hverim117=$hsonucumveri['v117'];
$hverim118=$hsonucumveri['v118'];
$hverim119=$hsonucumveri['v119'];
$hverim120=$hsonucumveri['v120'];
$hverim121=$hsonucumveri['v121'];
$hverim122=$hsonucumveri['v122'];
$hverim123=$hsonucumveri['v123'];
$hverim124=$hsonucumveri['v124'];
$hverim125=$hsonucumveri['v125'];
$hverim126=$hsonucumveri['v126'];
$hverim127=$hsonucumveri['v127'];
$hverim128=$hsonucumveri['v128'];
$hverim129=$hsonucumveri['v129'];
$hverim130=$hsonucumveri['v130'];
$hverim131=$hsonucumveri['v131'];
$hverim132=$hsonucumveri['v132'];
$hverim133=$hsonucumveri['v133'];
$hverim134=$hsonucumveri['v134'];
$hverim135=$hsonucumveri['v135'];
$hverim136=$hsonucumveri['v136'];
$hverim137=$hsonucumveri['v137'];
$hverim138=$hsonucumveri['v138'];
$hverim139=$hsonucumveri['v139'];
$hverim140=$hsonucumveri['v140'];
$hverim141=$hsonucumveri['v141'];
$hverim142=$hsonucumveri['v142'];
$hverim143=$hsonucumveri['v143'];
$hverim144=$hsonucumveri['v144'];
$hverim145=$hsonucumveri['v145'];
$hverim146=$hsonucumveri['v146'];
$hverim147=$hsonucumveri['v147'];
$hverim148=$hsonucumveri['v148'];
$hverim149=$hsonucumveri['v149'];
$hverim150=$hsonucumveri['v150'];
$hverim151=$hsonucumveri['v151'];
$hverim152=$hsonucumveri['v152'];
$hverim153=$hsonucumveri['v153'];
$hverim154=$hsonucumveri['v154'];
$hverim155=$hsonucumveri['v155'];
$hverim156=$hsonucumveri['v156'];
$hverim157=$hsonucumveri['v157'];
$hverim158=$hsonucumveri['v158'];
$hverim159=$hsonucumveri['v159'];
$hverim160=$hsonucumveri['v160'];
$hverim161=$hsonucumveri['v161'];
$hverim162=$hsonucumveri['v162'];
$hverim163=$hsonucumveri['v163'];
$hverim164=$hsonucumveri['v164'];
$hverim165=$hsonucumveri['v165'];
$hverim166=$hsonucumveri['v166'];
$hverim167=$hsonucumveri['v167'];
$hverim168=$hsonucumveri['v168'];
$hverim169=$hsonucumveri['v169'];
$hverim170=$hsonucumveri['v170'];
$hverim171=$hsonucumveri['v171'];
$hverim172=$hsonucumveri['v172'];
$hverim173=$hsonucumveri['v173'];
$hverim174=$hsonucumveri['v174'];
$hverim175=$hsonucumveri['v175'];
$hverim176=$hsonucumveri['v176'];
$hverim177=$hsonucumveri['v177'];
$hverim178=$hsonucumveri['v178'];
$xaygelentam=$ayim; 
$xaygelentarih=substr($hayadi,0,10); 
$xaygelentarihgun=substr($xaygelentarih,8,2);
$xaygelentarihay=substr($xaygelentarih,5,2);
$xaygelentarihyil=substr($xaygelentarih,0,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;
$noktatarih= $xaygelentarihgun.'.'.$xaygelentarihay.'.'.$xaygelentarihyil ;


if($hverim1=="Veri girişi hatası mevcut değildir."){
$vhata="Hayır";
}else if($hverim1=="Veri girişi hatası mevcuttur."){
$vhata="Evet";
}
if($hverim2=="Mükerrer kayıt girişi mevcut değildir."){
$mhata="Hayır";
}else if($hverim2=="Mükerrer kayıt girişi vardır."){
$mhata="Evet";
}
if($hverim3=="İkamete göre kümelenme yoktur.Fazla olan mahallelerde sokak/mevki bazında incelendiğinde kümelenme gözükmemektedir."){
$khata="Hayır";
}else if($hverim3=="İkamete göre kümelenme vardır."){
$khata="Evet";
}
if($hverim22=="Toplu yemek yenilen bir organizasyona katıldıklarına ilişkin bilgi edinilmemiştir."){
$tyhata="Hayır";
}else if($hverim22=="Toplu yemek yenilen bir organizasyona katıldıklarına ilişkin şu bilgiler edinilmiştir."){
$tyhata="Evet";
}
if($hverim23=="Aynı aileye mensup kişiler yoktur."){
$aahata="Hayır";
}else if($hverim23=="Aynı aileye mensup kişiler mevcuttur."){
$aahata="Evet";
}
if($hverim25=="Meslek gruplarına ait bilgi yoktur."){
$mghata="Hayır";
}else if($hverim25=="Meslek gruplarına ait şu bilgiler edinilmiştir:"){
$mghata="Evet";
}
if(substr($hverim35,0,41)=="Hastaların hepsi ayaktan tedavi olmuştur."){
$yhhata="Hayır";
}else if(substr($hverim35,0,34)=="Yatarak tedavi gören hasta vardır."){
$yhhata="Evet";
}
if($hverim35=="Hastaların hepsi ayaktan tedavi olmuştur.Durumu kötü hasta yoktur." or $hverim35=="Yatarak tedavi gören hasta vardır.Genel durumu kötü olan hasta yoktur."){
$dahata="Hayır";
}else{
$dahata="Evet";
}
if(substr($hverim36,0,46)=="Münferit vakalar olduğu görüşü bildirilmiştir."){
$mvhata="Evet";
}else{
$mvhata="Hayır";
}
$ygtoplam=$hverim4+$hverim5+$hverim6+$hverim7+$hverim8+$hverim9+$hverim10+$hverim11+$hverim12+$hverim13+$hverim14+$hverim15+$hverim16+$hverim17+$hverim18+$hverim19+$hverim20+$hverim21;
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
 $table->addRow($kac);
    $table->addCell(1500)->addText($noktatarih, $fontStyle, $cellHCentered, $noSpace);
	$table->addCell(1500)->addText($ilinadi, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($ilceninadi, $fontStyle, $cellHLefted, $noSpace);
    $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$hsocadi')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$xasmninadine=$satir['asmadi'];
    $table->addCell(1500)->addText($xasmninadine, $fontStyle, $cellHLefted, $noSpace);
}
    $table->addCell(1500)->addText($hverim110, $fontStyle, $cellHCentered, $noSpace);
    $table->addCell(1500)->addText($hverim111, $fontStyle, $cellHCentered, $noSpace);
    $table->addCell(1500)->addText($ygtoplam, $fontStyle, $cellHCentered, $noSpace);
    $table->addCell(1500)->addText($hverim1, $fontStyle, $cellHLefted, $noSpace);
	$table->addCell(1500)->addText($hverim2, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($hverim3, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($hverim22, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($hverim23, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($hverim25, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($hverim35, $fontStyle, $cellHLefted, $noSpace);
    $table->addCell(1500)->addText($hverim36, $fontStyle, $cellHLefted, $noSpace);

	$i++;
	
}

$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
$ahkod=$satir['socad'];
$ahkodum=$satir['asmadi'];
if(substr($ahkod,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
}elseif(substr($ahkod,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}elseif(substr($ahkod,-9)=='Hastanesi'){
$ahno='Kurum Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];


          
}
// Ads styles
$phpWord->addParagraphStyle(
    'multipleTab',
    array(
	'spaceAfter' => 20,
        'tabs' => array(
            new \PhpOffice\PhpWord\Style\Tab('left', 1),
            //new \PhpOffice\PhpWord\Style\Tab('center', 3200),
            new \PhpOffice\PhpWord\Style\Tab('right', 15000),
			
        )
    )
);
$phpWord->addParagraphStyle(
    'leftTab',
    array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 0)))
);
$phpWord->addParagraphStyle(
    'rightTab',
    array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 5000)))
);
$phpWord->addParagraphStyle(
    'centerTab',
    array('tabs' => array(new \PhpOffice\PhpWord\Style\Tab('center', 4680)))
);

// New portrait section
//$section = $phpWord->addSection();
$asead="\t".$asead;
$drad="\t".$drad;
$aseunv="\t".$aseunv;
$ahkodum="\t".$ahkodum.' '.$ahno;

$section->addText('' ,$bilgi);
$section->addText('' ,$bilgi);
//$section->addText('' ,$bilgi);
//$section->addText('' ,$bilgi);
//$section->addText('' ,$bilgi);

// Add listitem elements
$section->addText($asead."".$drad,$soru, 'multipleTab');
$section->addText($aseunv."".$ahkodum,$soru, 'multipleTab');

//$section->addText(iconv("iso-8859-9", "utf-8",$verim173), null, 'rightTab');
//$section->addText(htmlspecialchars("\tCenter Aligned"), null, 'centerTab');

}
// Save file
echo write($phpWord, basename(__FILE__, '.php'), $writers);
if (!CLI) {
    include_once 'Sample_Footer.php';
}
