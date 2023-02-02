<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
require('fpdf.php');
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
include('sum.php');
$resultvyil = @mysql_query("select * from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
/*$verim1=$sonucum['v1'];
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
$verim61=$sonucum['v61'];
$verim62=$sonucum['v62'];
$verim63=$sonucum['v63'];
$verim64=$sonucum['v64'];
$verim65=$sonucum['v65'];
$verim66=$sonucum['v66'];
$verim67=$sonucum['v67'];
$verim68=$sonucum['v68'];
$verim69=$sonucum['v69'];
$verim70=$sonucum['v70'];
$verim71=$sonucum['v71'];
$verim72=$sonucum['v72'];
$verim73=$sonucum['v73'];
$verim74=$sonucum['v74'];
$verim75=$sonucum['v75'];
$verim76=$sonucum['v76'];
$verim77=$sonucum['v77'];
$verim78=$sonucum['v78'];
$verim79=$sonucum['v79'];
$verim80=$sonucum['v80'];
$verim81=$sonucum['v81'];
$verim82=$sonucum['v82'];
$verim83=$sonucum['v83'];
$verim84=$sonucum['v84'];
$verim85=$sonucum['v85'];
$verim86=$sonucum['v86'];
$verim87=$sonucum['v87'];
$verim88=$sonucum['v88'];
$verim89=$sonucum['v89'];
$verim90=$sonucum['v90'];
$verim91=$sonucum['v91'];
$verim92=$sonucum['v92'];
$verim93=$sonucum['v93'];
$verim94=$sonucum['v94'];
$verim95=$sonucum['v95'];
$verim96=$sonucum['v96'];
$verim97=$sonucum['v97'];
$verim98=$sonucum['v98'];
$verim99=$sonucum['v99'];
$verim100=$sonucum['v100'];
$verim101=$sonucum['v101'];
$verim102=$sonucum['v102'];
$verim103=$sonucum['v103'];
$verim104=$sonucum['v104'];
$verim105=$sonucum['v105'];
$verim106=$sonucum['v106'];
$verim107=$sonucum['v107'];
$verim108=$sonucum['v108'];
$verim109=$sonucum['v109'];
$verim110=$sonucum['v110'];
$verim111=$sonucum['v111'];
$verim112=$sonucum['v112'];
$verim113=$sonucum['v113'];
$verim114=$sonucum['v114'];
$verim115=$sonucum['v115'];
$verim116=$sonucum['v116'];
$verim117=$sonucum['v117'];
$verim118=$sonucum['v118'];
$verim119=$sonucum['v119'];
$verim120=$sonucum['v120'];

$verim121=$sonucum['v121'];
$verim122=$sonucum['v122'];
$verim123=$sonucum['v123'];
$verim124=$sonucum['v124'];
$verim125=$sonucum['v125'];
$verim126=$sonucum['v126'];
$verim127=$sonucum['v127'];
$verim128=$sonucum['v128'];
$verim129=$sonucum['v129'];
$verim130=$sonucum['v130'];
$verim131=$sonucum['v131'];
$verim132=$sonucum['v132'];
$verim133=$sonucum['v133'];
$verim134=$sonucum['v134'];
$verim135=$sonucum['v135'];
$verim136=$sonucum['v136'];
$verim137=$sonucum['v137'];
$verim138=$sonucum['v138'];
$verim139=$sonucum['v139'];
$verim140=$sonucum['v140'];
$verim141=$sonucum['v141'];
$verim142=$sonucum['v142'];
$verim143=$sonucum['v143'];
$verim144=$sonucum['v144'];
$verim145=$sonucum['v145'];
$verim146=$sonucum['v146'];
$verim147=$sonucum['v147'];
$verim148=$sonucum['v148'];
$verim149=$sonucum['v149'];
$verim150=$sonucum['v150'];
$verim151=$sonucum['v151'];
$verim152=$sonucum['v152'];
$verim153=$sonucum['v153'];
$verim154=$sonucum['v154'];
$verim155=$sonucum['v155'];
$verim156=$sonucum['v156'];
$verim157=$sonucum['v157'];
$verim158=$sonucum['v158'];
$verim159=$sonucum['v159'];
$verim160=$sonucum['v160'];
$verim161=$sonucum['v161'];
$verim162=$sonucum['v162'];
$verim163=$sonucum['v163'];
$verim164=$sonucum['v164'];
$verim165=$sonucum['v165'];
$verim166=$sonucum['v166'];
$verim167=$sonucum['v167'];
$verim168=$sonucum['v168'];
$verim169=$sonucum['v169'];
$verim170=$sonucum['v170'];
$verim171=$sonucum['v171'];
$verim172=$sonucum['v172'];*/
$verim173=$sonucum['v173'];
$verim174=$sonucum['v174'];
$verim175=$sonucum['v175'];
$verim176=$sonucum['v176'];
$verim177=$sonucum['v177'];
$verim178=$sonucum['v178'];
}

?>
<?php
$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
$ilcesorumlulari=@mysql_query("select * from ocak where(ilinad='$ilgelen' and socad like '%HSM' or ilinad='$ilgelen' and socad='')");
while($sorumlusonucum=mysql_fetch_array($ilcesorumlulari)){
$asead=$sorumlusonucum['aseadi'];
$aseunv=$sorumlusonucum['aseunvan'];
$drad=$sorumlusonucum['dradi'];
$onkurum=$sorumlusonucum['asmadi'];
$onsor="Sorumlusu";
$ahkodum=$onkurum.' '.$onsor;
$iltoplami="İL TOPLAMI";
$ilceninadi=$ilinadi.' '.$iltoplami ;
}
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
mysql_close();


class PDF extends FPDF
{
function Header()
{
    //Title
    $this->SetFont('times','',18);
    $this->Cell(0,6,'',0,1,'C');
    $this->Ln(10);
    //Ensure table header is output
    parent::Header();
}
function RotatedText($x,$y,$txt,$angle)
{
    //Text rotated around its origin
    $this->Rotate($angle,$x,$y);
    $this->Text($x,$y,$txt);
    $this->Rotate(0);
}

function RotatedImage($file,$x,$y,$w,$h,$angle)
{
    //Image rotated around its upper-left corner
    $this->Rotate($angle,$x,$y);
    $this->Image($file,$x,$y,$w,$h);
    $this->Rotate(0);
}

}


$pdf=new PDF();
$pdf->AddPage('L','A4');
$pdf->AddFont('arial','','arial_tr.php');
$pdf->SetFont('Arial','',9);
//Asagi dogru yazilar
/*$pdf->RotatedText(18,64,A,0);
$pdf->RotatedText(18,68,D,0);
$pdf->RotatedText(18,72,L,0);
$pdf->RotatedText(18,76,I,0);
$pdf->Rect(15,60,10,18);

$pdf->RotatedText(126,47,D,0);
$pdf->RotatedText(126,51,O,0);
$pdf->RotatedText(126,55,trsuz('Ğ'),0);
$pdf->RotatedText(126,59,U,0);
$pdf->RotatedText(126,63,M,0);
$pdf->RotatedText(126,67,L,0);
$pdf->RotatedText(126,71,A,0);
$pdf->RotatedText(126,75,R,0);
$pdf->Rect(125,42,5,36);
$pdf->SetFont('Arial','',9);
$pdf->RotatedText(126,84,trsuz('İ'),0);
$pdf->RotatedText(126,87,Z,0);
$pdf->RotatedText(126,90,L,0);
$pdf->RotatedText(126,93,E,0);
$pdf->RotatedText(126,96,M,0);
$pdf->RotatedText(126,99,L,0);
$pdf->RotatedText(126,102,E,0);
$pdf->RotatedText(126,105,R,0);
$pdf->Rect(125,78,5,30);*/
//First table: put all columns automatically
//$pdf->Table('select * from veri order by vocadi');

//$pdf->AddPage('L','A4');
//Second table: specify 3 columns


//Fields Name position
$Y_Fields_Name_position = 280;
//Table position, under Fields Name
$Y_Table_Position = 286;

//First create each Field Name
//Gray color filling each Field Name box
//Bold Font for Field Name
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial','',12);
$pdf->SetY(10);
$pdf->SetX(15);
$pdf->Cell(276,5,trsuz('AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS VE İZLEME-DEĞERLENDİRME FORMU'),0,0,'C',1);

$pdf->SetFont('Arial','',10);
$pdf->SetY(20);
$pdf->SetX(15);
$pdf->Cell(25,4,trsuz('İl/İlçe:'),0,0,'L',1);
$pdf->MultiCell(80,4,$ilinadi,0,'L');

$pdf->SetY(24);
$pdf->SetX(15);
$pdf->Cell(25,4,trsuz('Kurum:'),0,0,'L',1);
$pdf->MultiCell(80,4,trsuz('İL TOPLAMI'),0,'L');

$pdf->SetY(28);
$pdf->SetX(15);
$pdf->Cell(25,4,trsuz('Dönem/Tarih:'),0,0,'L',1);
$pdf->MultiCell(80,4,$yilim.' '.trsuz('YILI'),0,'L');

$pdf->SetY(34);
$pdf->SetX(15);
$pdf->Cell(232,6,trsuz('AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS VE VAKA İZLEME FORMU'),1,0,'C',1);

$pdf->SetY(40);
$pdf->SetX(15);
$pdf->MultiCell(100,24,trsuz('Hastalık Sınıflamaları'),1,'C');
/* A 09 */
$pdf->SetY(40);
$pdf->SetX(115);
$pdf->Cell(44,4,trsuz('A09'),0,0,'C',1);

$pdf->SetY(45);
$pdf->SetX(115);
$pdf->Cell(44,4,trsuz('Diyare ve gastroenterit,'),0,0,'C',1);

$pdf->SetY(50);
$pdf->SetX(115);
$pdf->Cell(44,4,trsuz('enfeksiyöz kaynaklı'),0,0,'C',1);

$pdf->SetY(55);
$pdf->SetX(115);
$pdf->Cell(44,4,trsuz('tahmin edilen'),0,0,'C',1);

$pdf->SetY(60);
$pdf->SetX(115);
$pdf->Cell(22,4,trsuz('0-59 aylık'),1,0,'C',1);

$pdf->SetY(60);
$pdf->SetX(137);
$pdf->Cell(22,4,trsuz('5 yaş ve üzeri'),1,0,'C',1);

$pdf->SetY(40);
$pdf->SetX(115);
$pdf->MultiCell(44,20,'',1,'C');
 /*  R11   */
$pdf->SetY(40);
$pdf->SetX(159);
$pdf->Cell(44,4,trsuz('R11'),0,0,'C',1);

$pdf->SetY(45);
$pdf->SetX(159);
$pdf->Cell(44,4,trsuz(''),0,0,'C',1);

$pdf->SetY(50);
$pdf->SetX(159);
$pdf->Cell(44,4,trsuz('Bulantı ve kusma'),0,0,'C',1);

$pdf->SetY(55);
$pdf->SetX(159);
$pdf->Cell(44,4,trsuz(''),0,0,'C',1);

$pdf->SetY(60);
$pdf->SetX(159);
$pdf->Cell(22,4,trsuz('0-59 aylık'),1,0,'C',1);

$pdf->SetY(60);
$pdf->SetX(181);
$pdf->Cell(22,4,trsuz('5 yaş ve üzeri'),1,0,'C',1);

$pdf->SetY(40);
$pdf->SetX(159);
$pdf->MultiCell(44,20,'',1,'C');

/*   K52    */
$pdf->SetY(40);
$pdf->SetX(203);
$pdf->Cell(44,4,trsuz('K52'),0,0,'C',1);

$pdf->SetY(45);
$pdf->SetX(203);
$pdf->Cell(44,4,trsuz('Enfektif olmayan diğer'),0,0,'C',1);

$pdf->SetY(50);
$pdf->SetX(203);
$pdf->Cell(44,4,trsuz(''),0,0,'C',1);

$pdf->SetY(55);
$pdf->SetX(203);
$pdf->Cell(44,4,trsuz('gastroenterit ve kolit'),0,0,'C',1);

$pdf->SetY(60);
$pdf->SetX(203);
$pdf->Cell(22,4,trsuz('0-59 aylık'),1,0,'C',1);

$pdf->SetY(60);
$pdf->SetX(225);
$pdf->Cell(22,4,trsuz('5 yaş ve üzeri'),1,0,'C',1);

$pdf->SetY(40);
$pdf->SetX(203);
$pdf->MultiCell(44,20,'',1,'C');

$pdf->SetY(64);
$pdf->SetX(15);
$pdf->MultiCell(100,12,trsuz('Vaka Sayısı'),1,'C');

$pdf->SetFont('Arial','B',11);
$pdf->SetY(64);
$pdf->SetX(115);
$pdf->MultiCell(22,12,$verim1,1,'C');

$pdf->SetY(64);
$pdf->SetX(137);
$pdf->MultiCell(22,12,$verim2,1,'C');

$pdf->SetY(64);
$pdf->SetX(159);
$pdf->MultiCell(22,12,$verim3,1,'C');

$pdf->SetY(64);
$pdf->SetX(181);
$pdf->MultiCell(22,12,$verim4,1,'C');

$pdf->SetY(64);
$pdf->SetX(203);
$pdf->MultiCell(22,12,$verim5,1,'C');

$pdf->SetY(64);
$pdf->SetX(225);
$pdf->MultiCell(22,12,$verim6,1,'C');

$pdf->SetFont('Arial','',10);

$pdf->SetY(80);
$pdf->SetX(15);
$pdf->Cell(276,6,trsuz('AKUT BARSAK ENFEKSİYONLARI GÜNLÜK SÜRVEYANS LABORATUVAR SONUÇLARI İZLEME-DEĞERLENDİRME FORMU'),1,0,'C',1);

/*   KÜLTÜR   */
$pdf->SetY(86);
$pdf->SetX(15);
$pdf->Cell(56,8,trsuz('YAPILAN GAİTA KÜLTÜR SAYISI'),1,0,'C',1);

$pdf->SetY(86);
$pdf->SetX(71);
$pdf->Cell(44,8,trsuz('Vibrio cholerae (A00)'),1,0,'C',1);

$pdf->SetY(86);
$pdf->SetX(115);
$pdf->MultiCell(44,8,trsuz('Salmonella sp.(A02)'),1,'C');

$pdf->SetY(86);
$pdf->SetX(159);
$pdf->MultiCell(44,8,trsuz('Shigella sp.(A03)'),1,'C');

$pdf->SetY(86);
$pdf->SetX(203);
$pdf->MultiCell(44,4,trsuz('Enterohemorragic Escherichia Coli (A04.3)'),1,'C');

$pdf->SetY(86);
$pdf->SetX(247);
$pdf->Cell(44,8,trsuz('Campylobacter (A04.5)'),1,0,'C',1);
/* kültür veri */
$pdf->SetFont('Arial','B',11);

$pdf->SetY(94);
$pdf->SetX(15);
$pdf->MultiCell(56,10,$verim7,1,'C');

$pdf->SetY(94);
$pdf->SetX(71);
$pdf->MultiCell(44,10,$verim8,1,'C');

$pdf->SetY(94);
$pdf->SetX(115);
$pdf->MultiCell(44,10,$verim9,1,'C');

$pdf->SetY(94);
$pdf->SetX(159);
$pdf->MultiCell(44,10,$verim10,1,'C');

$pdf->SetY(94);
$pdf->SetX(203);
$pdf->MultiCell(44,10,$verim11,1,'C');

$pdf->SetY(94);
$pdf->SetX(247);
$pdf->MultiCell(44,10,$verim12,1,'C');
/*   PARAZİT    */
$pdf->SetFont('Arial','',10);

$pdf->SetY(104);
$pdf->SetX(15);
$pdf->MultiCell(56,4,trsuz('YAPILAN GAİTA PARAZİT İNCELEME SAYISI'),1,'C');

$pdf->SetY(104);
$pdf->SetX(71);
$pdf->MultiCell(44,4,trsuz('Entamobea histolytica (A06)'),1,'C');

$pdf->SetY(104);
$pdf->SetX(115);
$pdf->MultiCell(44,8,trsuz('Cryptosporodium (A07.2)'),1,'C');
/* parazit veri */
$pdf->SetFont('Arial','B',11);

$pdf->SetY(112);
$pdf->SetX(15);
$pdf->MultiCell(56,10,$verim13,1,'C');

$pdf->SetY(112);
$pdf->SetX(71);
$pdf->MultiCell(44,10,$verim14,1,'C');

$pdf->SetY(112);
$pdf->SetX(115);
$pdf->MultiCell(44,10,$verim15,1,'C');

/*   VİRAL   */
$pdf->SetFont('Arial','',10);

$pdf->SetY(122);
$pdf->SetX(15);
$pdf->MultiCell(56,4,trsuz('YAPILAN VİRAL ETKEN İNCELEME SAYISI'),1,'C');

$pdf->SetY(122);
$pdf->SetX(71);
$pdf->Cell(44,8,trsuz('Rota Virüs (A08.0)'),1,0,'C',1);

$pdf->SetY(122);
$pdf->SetX(115);
$pdf->MultiCell(44,8,trsuz('Noro Virüs (A08.1)'),1,'C');

$pdf->SetY(122);
$pdf->SetX(159);
$pdf->Cell(44,8,trsuz('Adeno Virüs (A08.2)'),1,'C');

$pdf->SetY(122);
$pdf->SetX(203);
$pdf->Cell(44,8,trsuz('Hepatit A Virüsü (B15)'),1,0,'C',1);


/* viral veri */
$pdf->SetFont('Arial','B',11);

$pdf->SetY(130);
$pdf->SetX(15);
$pdf->MultiCell(56,10,$verim16,1,'C');

$pdf->SetY(130);
$pdf->SetX(71);
$pdf->MultiCell(44,10,$verim17,1,'C');

$pdf->SetY(130);
$pdf->SetX(115);
$pdf->MultiCell(44,10,$verim18,1,'C');

$pdf->SetY(130);
$pdf->SetX(159);
$pdf->MultiCell(44,10,$verim19,1,'C');

$pdf->SetY(130);
$pdf->SetX(203);
$pdf->MultiCell(44,10,$verim20,1,'C');

// D?zenleyen onaylayan
$pdf->SetFont('Arial','',10);

$pdf->SetY(145);
$pdf->SetX(15);
$pdf->Cell(130,6,trsuz('DÜZENLEYEN'),1,0,'C',1);
$pdf->SetY(145);
$pdf->SetX(160);
$pdf->Cell(130,6,'ONAYLAYAN',1,0,'C',1);
$pdf->SetY(151);
$pdf->SetX(15);
$pdf->Cell(25,6,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(105,6,$asead,1,0,'L',1);

$pdf->SetY(151);
$pdf->SetX(160);
$pdf->Cell(25,6,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(105,6,$drad,1,0,'L',1);

$pdf->SetY(157);
$pdf->SetX(15);
$pdf->Cell(25,6,trsuz('Ünvanı/Görevi:'),1,0,'R',1);
$pdf->Cell(105,6,$aseunv,1,0,'L',1);

$pdf->SetY(157);
$pdf->SetX(160);
$pdf->Cell(25,6,trsuz('Ünvanı/Görevi:'),1,0,'R',1);
$pdf->Cell(105,6,$ahkodum,1,0,'L',1);

$pdf->SetY(163);
$pdf->SetX(15);
$pdf->Cell(25,6,trsuz('İmza:'),1,0,'R',1);
$pdf->Cell(105,6,'',1,0,'C',1);

$pdf->SetY(163);
$pdf->SetX(160);
$pdf->Cell(25,6,trsuz('İmza:'),1,0,'R',1);
$pdf->Cell(105,6,'',1,0,'C',1);


/*$pdf->SetY(22);
$pdf->SetX(15);
$pdf->Cell(20,6,'Form No:023',0,0,'C',1);

$pdf->SetY(28);
$pdf->SetX(15);
$pdf->Cell(10,6,trsuz('İL:'),0,0,'R',1);
$pdf->MultiCell(40,6,$ilinadi,0,'L');

$pdf->SetY(28);
$pdf->SetX(70);
$pdf->Cell(20,6,'KURUM:',0,0,'R',1);
$pdf->MultiCell(80,6,trsuz('İL TOPLAMI'),0,'L');

$pdf->SetY(28);
$pdf->SetX(160);
$pdf->Cell(20,6,'YIL:',0,0,'R',1);
$pdf->MultiCell(20,6,$yilim,0,'L');

$pdf->SetY(34);
$pdf->SetX(15);
$pdf->Cell(10,6,trsuz('İLÇE:'),0,0,'R',1);
$pdf->MultiCell(40,6,$ilceninadi,0,'L');

$pdf->SetY(34);
$pdf->SetX(160);
$pdf->Cell(20,6,'AY:',0,0,'R',1);
$pdf->MultiCell(20,6,'',0,'L');

$pdf->SetY(42);
$pdf->SetX(15);
$pdf->Cell(50,6,trsuz('Muayene Sayısı'),1,0,'L',1);
$pdf->MultiCell(20,6,$verim1,1,'C');

$pdf->SetY(42);
$pdf->SetX(130);
//$pdf->Cell(5,24,'',1,0,'B','L',1);
$pdf->Cell(50,6,'Hastanede',1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim7,1,'C');

$pdf->SetY(48);
$pdf->SetX(15);
$pdf->Cell(50,6,trsuz('Sağlık Kurumuna Sevk'),1,0,'L',1);
$pdf->MultiCell(20,6,$verim2,1,'C');

$pdf->SetY(48);
$pdf->SetX(130);

$pdf->Cell(50,6,'Hekim',1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim8,1,'C');

$pdf->SetY(54);
$pdf->SetX(15);
$pdf->Cell(50,6,trsuz('Küçük Cerrahi Müdahale'),1,0,'L',1);
$pdf->MultiCell(20,6,$verim3,1,'C');

$pdf->SetY(54);
$pdf->SetX(130);

$pdf->Cell(50,6,'Ebe',1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim9,1,'C');

$pdf->SetY(60);
$pdf->SetX(25);
//$pdf->Cell(10,18,'A',1,0,'C',1);
$pdf->Cell(40,6,trsuz('Klasik Otopsi Sayısı'),1,0,'L',1);
$pdf->MultiCell(20,6,$verim4,1,'C');

$pdf->SetY(60);
$pdf->SetX(130);

$pdf->SetFont('Arial','',9);
$pdf->Cell(50,6,trsuz('Diğer Sağlık Personeli Yardımı ile'),1,0,'B','L',1);

$pdf->SetFont('Arial','',10);
$pdf->MultiCell(20,6,$verim10,1,'C');

$pdf->SetY(66);
$pdf->SetX(25);

$pdf->Cell(40,6,trsuz('Adli Rapor Sayısı'),1,0,'L',1);
$pdf->MultiCell(20,6,$verim5,1,'C');

$pdf->SetY(66);
$pdf->SetX(130);

$pdf->SetFont('Arial','',9);
$pdf->Cell(50,6,trsuz('Sağlık Personeli Yardımı Olmadan'),1,0,'B','L',1);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(20,6,$verim11,1,'C');

$pdf->SetY(72);
$pdf->SetX(25);

$pdf->Cell(40,6,'Toplam',1,0,'L',1);
$pdf->MultiCell(20,6,$toplam1,1,'C');

$pdf->SetY(72);
$pdf->SetX(130);

$pdf->Cell(50,6,'TOPLAM',1,0,'B','L',1);
$pdf->MultiCell(20,6,$toplam2,1,'C');

$pdf->SetY(78);
$pdf->SetX(15);

$pdf->Cell(50,6,trsuz('Defin Ruhsatı Sayısı'),1,0,'L',1);
$pdf->MultiCell(20,6,$verim6,1,'C');

$pdf->SetY(78);
$pdf->SetX(130);
//$pdf->Cell(5,20,'I',1,0,'B','L',1);
$pdf->Cell(50,6,'Gebe',1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim19,1,'C');

$pdf->SetY(84);
$pdf->SetX(130);
$pdf->Cell(50,6,trsuz('Loğusa'),1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim20,1,'C');
//labaratuvar
$pdf->SetY(90);
$pdf->SetX(15);

$pdf->Cell(105,6,trsuz('LABARATUVAR ÇALIŞMALARI'),1,0,'C',1);

$pdf->SetY(96);
$pdf->SetX(15);
$pdf->Cell(10,6,'',1,0,'C',1);
$pdf->Cell(10,6,trsuz('İdrar'),1,0,'C',1);
$pdf->Cell(10,6,'Kan',1,0,'C',1);
$pdf->Cell(10,6,trsuz('Dışkı'),1,0,'C',1);
$pdf->Cell(15,6,'Seroloji',1,0,'C',1);
$pdf->Cell(20,6,trsuz('Sıtma Kanı'),1,0,'C',1);
$pdf->SetFont('Arial','',9);
$pdf->Cell(20,6,'Gebelik Testi',1,0,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,6,trsuz('Diğer'),1,0,'C',1);
$pdf->SetY(90);
$pdf->SetX(130);
$pdf->Cell(50,6,'Bebek',1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim21,1,'C');

$pdf->SetY(102);
$pdf->SetX(15);
$pdf->Cell(10,6,trsuz('Sayı'),1,0,'C',1);
$pdf->Cell(10,6,$verim12,1,0,'C',1);
$pdf->Cell(10,6,$verim13,1,0,'C',1);
$pdf->Cell(10,6,$verim14,1,0,'C',1);
$pdf->Cell(15,6,$verim15,1,0,'C',1);
$pdf->Cell(20,6,$verim16,1,0,'C',1);
$pdf->Cell(20,6,$verim17,1,0,'C',1);
$pdf->Cell(10,6,$verim18,1,0,'C',1);
$pdf->SetY(96);
$pdf->SetX(130);
$pdf->Cell(50,6,trsuz('Çocuk'),1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim22,1,'C');

$pdf->SetY(102);
$pdf->SetX(130);
$pdf->Cell(50,6,trsuz('15-49 Yaş Kadın'),1,0,'B','L',1);
$pdf->MultiCell(20,6,$verim23,1,'C');
//?L?MLER
$pdf->SetY(114);
$pdf->SetX(15);
$pdf->Cell(185,6,trsuz('BÜTÜN ÖLENLERİN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI'),1,0,'C',1);

$pdf->SetY(120);
$pdf->SetX(15);

$pdf->Cell(15,6,trsuz('Yaş'),1,0,'C',1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(12,6,trsuz('0-7 Gün'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('8-28 Gün'),1,0,'C',1);
$pdf->SetFont('Arial','',6);
$pdf->Cell(12,6,trsuz('29-364 Gün'),1,0,'C',1);
$pdf->SetFont('Arial','',7);
$pdf->Cell(12,6,trsuz('1-4 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('5-9 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('10-14 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('15-24 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('25-44 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('45-49 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('50-64 Yaş'),1,0,'C',1);
$pdf->Cell(12,6,trsuz('65 + Yaş'),1,0,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(38,6,'TOPLAM',1,0,'C',1);


$pdf->SetY(126);
$pdf->SetX(15);
$pdf->Cell(15,6,'Cinsiyet',1,0,'L',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(6,6,'E',1,0,'C',1);
$pdf->Cell(6,6,'K',1,0,'C',1);
$pdf->Cell(19,6,'E',1,0,'C',1);
$pdf->Cell(19,6,'K',1,0,'C',1);

$pdf->SetY(132);

$pdf->SetX(15);
$pdf->Cell(15,6,trsuz('Sayı'),1,0,'L',1);
$pdf->Cell(6,6,$verim24,1,0,'C',1);
$pdf->Cell(6,6,$verim25,1,0,'C',1);
$pdf->Cell(6,6,$verim26,1,0,'C',1);
$pdf->Cell(6,6,$verim27,1,0,'C',1);
$pdf->Cell(6,6,$verim28,1,0,'C',1);
$pdf->Cell(6,6,$verim29,1,0,'C',1);
$pdf->Cell(6,6,$verim30,1,0,'C',1);
$pdf->Cell(6,6,$verim31,1,0,'C',1);
$pdf->Cell(6,6,$verim32,1,0,'C',1);
$pdf->Cell(6,6,$verim33,1,0,'C',1);
$pdf->Cell(6,6,$verim34,1,0,'C',1);
$pdf->Cell(6,6,$verim35,1,0,'C',1);
$pdf->Cell(6,6,$verim36,1,0,'C',1);
$pdf->Cell(6,6,$verim37,1,0,'C',1);
$pdf->Cell(6,6,$verim38,1,0,'C',1);
$pdf->Cell(6,6,$verim39,1,0,'C',1);
$pdf->Cell(6,6,$verim40,1,0,'C',1);
$pdf->Cell(6,6,$verim41,1,0,'C',1);
$pdf->Cell(6,6,$verim42,1,0,'C',1);
$pdf->Cell(6,6,$verim43,1,0,'C',1);
$pdf->Cell(6,6,$verim44,1,0,'C',1);
$pdf->Cell(6,6,$verim45,1,0,'C',1);
$pdf->Cell(19,6,$toplame,1,0,'C',1);
$pdf->Cell(19,6,$toplamk,1,0,'C',1);

//Egitim
$pdf->SetY(144);
$pdf->SetX(15);
$pdf->Cell(185,6,trsuz('HALK EĞİTİMİ VE HİZMETİÇİ EĞİTİMLERİN SEANS SAYILARI'),1,0,'C',1);
$pdf->SetY(150);
$pdf->SetX(15);
$pdf->Cell(28,6,'Konular',1,0,'C',1);
$pdf->Cell(12,6,'01',1,0,'C',1);
$pdf->Cell(12,6,'02',1,0,'C',1);
$pdf->Cell(12,6,'03',1,0,'C',1);
$pdf->Cell(12,6,'04',1,0,'C',1);
$pdf->Cell(12,6,'05',1,0,'C',1);
$pdf->Cell(12,6,'06',1,0,'C',1);
$pdf->Cell(12,6,'07',1,0,'C',1);
$pdf->Cell(12,6,'08',1,0,'C',1);
$pdf->Cell(12,6,'09',1,0,'C',1);
$pdf->Cell(12,6,'10',1,0,'C',1);
$pdf->Cell(12,6,'11',1,0,'C',1);
$pdf->Cell(12,6,'12',1,0,'C',1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(13,6,'TOPLAM',1,0,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->SetY(156);
$pdf->SetX(15);
$pdf->Cell(28,6,trsuz('HALK EĞİTİMİ'),1,0,'C',1);
$pdf->Cell(12,6,$verim46,1,0,'C',1);
$pdf->Cell(12,6,$verim47,1,0,'C',1);
$pdf->Cell(12,6,$verim48,1,0,'C',1);
$pdf->Cell(12,6,$verim49,1,0,'C',1);
$pdf->Cell(12,6,$verim50,1,0,'C',1);
$pdf->Cell(12,6,$verim51,1,0,'C',1);
$pdf->Cell(12,6,$verim52,1,0,'C',1);
$pdf->Cell(12,6,$verim53,1,0,'C',1);
$pdf->Cell(12,6,$verim54,1,0,'C',1);
$pdf->Cell(12,6,$verim55,1,0,'C',1);
$pdf->Cell(12,6,$verim56,1,0,'C',1);
$pdf->Cell(12,6,$verim57,1,0,'C',1);
$pdf->Cell(13,6,$toplames,1,0,'C',1);

$pdf->SetY(162);
$pdf->SetX(15);
$pdf->SetFont('Arial','',9);
$pdf->RotatedText(19,191,trsuz('HİZMETİÇİ EĞİTİM'),90);
$pdf->Rect(15,162,5,30);

$pdf->SetY(162);
$pdf->SetX(20);
$pdf->SetFont('Arial','',10);
$pdf->Cell(23,6,'Hekim',1,0,'L',1);
$pdf->Cell(12,6,$verim58,1,0,'C',1);
$pdf->Cell(12,6,$verim59,1,0,'C',1);
$pdf->Cell(12,6,$verim60,1,0,'C',1);
$pdf->Cell(12,6,$verim61,1,0,'C',1);
$pdf->Cell(12,6,$verim62,1,0,'C',1);
$pdf->Cell(12,6,$verim63,1,0,'C',1);
$pdf->Cell(12,6,$verim64,1,0,'C',1);
$pdf->Cell(12,6,$verim65,1,0,'C',1);
$pdf->Cell(12,6,$verim66,1,0,'C',1);
$pdf->Cell(12,6,$verim67,1,0,'C',1);
$pdf->Cell(12,6,$verim68,1,0,'C',1);
$pdf->Cell(12,6,$verim69,1,0,'C',1);
$pdf->Cell(13,6,$toplamhs,1,0,'C',1);

$pdf->SetY(168);
$pdf->SetX(20);
$pdf->Cell(23,6,trsuz('Hemşire'),1,0,'L',1);
$pdf->Cell(12,6,$verim70,1,0,'C',1);
$pdf->Cell(12,6,$verim71,1,0,'C',1);
$pdf->Cell(12,6,$verim72,1,0,'C',1);
$pdf->Cell(12,6,$verim73,1,0,'C',1);
$pdf->Cell(12,6,$verim74,1,0,'C',1);
$pdf->Cell(12,6,$verim75,1,0,'C',1);
$pdf->Cell(12,6,$verim76,1,0,'C',1);
$pdf->Cell(12,6,$verim77,1,0,'C',1);
$pdf->Cell(12,6,$verim78,1,0,'C',1);
$pdf->Cell(12,6,$verim79,1,0,'C',1);
$pdf->Cell(12,6,$verim80,1,0,'C',1);
$pdf->Cell(12,6,$verim81,1,0,'C',1);
$pdf->Cell(13,6,$toplamhes,1,0,'C',1);

$pdf->SetY(174);
$pdf->SetX(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(23,6,trsuz('Sağlık Memuru'),1,0,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(12,6,$verim82,1,0,'C',1);
$pdf->Cell(12,6,$verim83,1,0,'C',1);
$pdf->Cell(12,6,$verim84,1,0,'C',1);
$pdf->Cell(12,6,$verim85,1,0,'C',1);
$pdf->Cell(12,6,$verim86,1,0,'C',1);
$pdf->Cell(12,6,$verim87,1,0,'C',1);
$pdf->Cell(12,6,$verim88,1,0,'C',1);
$pdf->Cell(12,6,$verim89,1,0,'C',1);
$pdf->Cell(12,6,$verim90,1,0,'C',1);
$pdf->Cell(12,6,$verim91,1,0,'C',1);
$pdf->Cell(12,6,$verim92,1,0,'C',1);
$pdf->Cell(12,6,$verim93,1,0,'C',1);
$pdf->Cell(13,6,$toplamsm,1,0,'C',1);

$pdf->SetY(180);
$pdf->SetX(20);
$pdf->Cell(23,6,'Ebe',1,0,'L',1);
$pdf->Cell(12,6,$verim94,1,0,'C',1);
$pdf->Cell(12,6,$verim95,1,0,'C',1);
$pdf->Cell(12,6,$verim96,1,0,'C',1);
$pdf->Cell(12,6,$verim97,1,0,'C',1);
$pdf->Cell(12,6,$verim98,1,0,'C',1);
$pdf->Cell(12,6,$verim99,1,0,'C',1);
$pdf->Cell(12,6,$verim100,1,0,'C',1);
$pdf->Cell(12,6,$verim101,1,0,'C',1);
$pdf->Cell(12,6,$verim102,1,0,'C',1);
$pdf->Cell(12,6,$verim103,1,0,'C',1);
$pdf->Cell(12,6,$verim104,1,0,'C',1);
$pdf->Cell(12,6,$verim105,1,0,'C',1);
$pdf->Cell(13,6,$toplameb,1,0,'C',1);

$pdf->SetY(186);
$pdf->SetX(20);
$pdf->SetFont('Arial','',9);
$pdf->Cell(23,6,trsuz('Diğer Personel'),1,0,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(12,6,$verim106,1,0,'C',1);
$pdf->Cell(12,6,$verim107,1,0,'C',1);
$pdf->Cell(12,6,$verim108,1,0,'C',1);
$pdf->Cell(12,6,$verim109,1,0,'C',1);
$pdf->Cell(12,6,$verim110,1,0,'C',1);
$pdf->Cell(12,6,$verim111,1,0,'C',1);
$pdf->Cell(12,6,$verim112,1,0,'C',1);
$pdf->Cell(12,6,$verim113,1,0,'C',1);
$pdf->Cell(12,6,$verim114,1,0,'C',1);
$pdf->Cell(12,6,$verim115,1,0,'C',1);
$pdf->Cell(12,6,$verim116,1,0,'C',1);
$pdf->Cell(12,6,$verim117,1,0,'C',1);
$pdf->Cell(13,6,$toplamd,1,0,'C',1);

$pdf->SetY(198);
$pdf->SetX(15);
$pdf->Rect(15,198,185,40);
$pdf->Cell(200,5,trsuz('HALK EĞİTİMİ KONU VE KODLARI'),0,0,'C',0);
$pdf->SetY(205);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  01 Hijyen ve Çevre Sağlığı'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  07 Uyuşturucu ve Keyif Verici Maddeler(Sigara vb.)'),0,0,'L',0);

$pdf->SetY(210);
$pdf->SetX(15);
$pdf->Cell(95,5,'  02 Beslenme',0,0,'L',0);
$pdf->Cell(95,5,trsuz('  08 İlk Yardım ve Kazalardan Korunma'),0,0,'L',0);

$pdf->SetY(215);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  03 Çocuk Sağlığı ve Çocukluk Dönemi Hastalıkları'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  09 Özel Gün ve Haftalar(Verem,Kanser Haftası gibi)'),0,0,'L',0);

$pdf->SetY(220);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  04 Ana Sağlığı ve Aile Planlaması'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  10 Ağız ve Diş Sağlığı'),0,0,'L',0);

$pdf->SetY(225);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  05 Bulaşıcı Hastalıklar,Korunma,Aşılar ve Serumlar'),0,0,'L',0);
$pdf->Cell(95,5,'  11 ',0,0,'L',0);

$pdf->SetY(230);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  06 Sosyal Hastalıklar(Verem,Sıtma,AIDS,Trohom vb.)'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  12 Diğer Sağlık Konuları'),0,0,'L',0);


$pdf->SetY(238);
$pdf->SetX(15);
$pdf->Rect(15,238,185,40);
$pdf->Cell(200,5,trsuz('HİZMET İÇİ EĞİTİM KONU VE KODLARI'),0,0,'C',0);
$pdf->SetY(245);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  01 Adaptasyon Eğitimi'),0,0,'L',0);
$pdf->Cell(95,5,'  07 Genel Beslenme',0,0,'L',0);

$pdf->SetY(250);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  02 Çevre Sağlığı'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  08 Ana ve Çocuk Sağlığı'),0,0,'L',0);

$pdf->SetY(255);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  03 Ruh Sağlığı'),0,0,'L',0);
$pdf->Cell(95,5,'  09 Meslek Esas ve Teknikleri',0,0,'L',0);

$pdf->SetY(260);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  04 Mikrobiyoloji ve Bağışıklama'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  10 Sağlık Eğitimi'),0,0,'L',0);

$pdf->SetY(265);
$pdf->SetX(15);
$pdf->Cell(95,5,trsuz('  05 Bulaşıcı Hastalıklar ve Epidemiyoloji'),0,0,'L',0);
$pdf->Cell(95,5,trsuz('  11 İlk Yardım'),0,0,'L',0);

$pdf->SetY(270);
$pdf->SetX(15);
$pdf->Cell(95,5,'  06 Farmakoloji',0,0,'L',0);
$pdf->Cell(95,5,trsuz('  12 Sağlık İstatistiği'),0,0,'L',0);
//**************1.Sayfa Sonu*****************************
$pdf->AddPage('P','A4');
$pdf->SetY(10);
$pdf->SetX(15);
$pdf->Cell(80,6,'GEBE DURUMU',1,0,'C',1);
$pdf->SetY(10);
$pdf->SetX(120);
$pdf->Cell(80,6,'BEBEK DURUMU',1,0,'C',1);
$pdf->SetY(16);
$pdf->SetX(15);
$pdf->Cell(5,6,'a',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Geçen Aydan Devreden'),1,0,'L',1);
$pdf->Cell(20,6,$devirgebe,1,0,'C',1);

$pdf->SetY(16);
$pdf->SetX(120);
$pdf->Cell(5,6,'a',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Geçen Aydan Devreden'),1,0,'L',1);
$pdf->Cell(20,6,$devirbebek,1,0,'C',1);

$pdf->SetY(22);
$pdf->SetX(15);
$pdf->Cell(5,6,'b',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Tesbit Edilen'),1,0,'L',1);
$pdf->Cell(20,6,$verim119,1,0,'C',1);

$pdf->SetY(22);
$pdf->SetX(120);
$pdf->Cell(5,6,'b',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Tesbit Edilen'),1,0,'L',1);
$pdf->Cell(20,6,$verim128,1,0,'C',1);

$pdf->SetY(28);
$pdf->SetX(15);
$pdf->Cell(5,6,'c',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Başka Bölgeden Gelen'),1,0,'L',1);
$pdf->Cell(20,6,$verim120,1,0,'C',1);

$pdf->SetY(28);
$pdf->SetX(120);
$pdf->Cell(5,6,'c',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Başka Bölgeden Gelen'),1,0,'L',1);
$pdf->Cell(20,6,$verim129,1,0,'C',1);

$pdf->SetY(34);
$pdf->SetX(15);
$pdf->Cell(5,6,'d',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Düşük Yapan'),1,0,'L',1);
$pdf->Cell(20,6,$verim121,1,0,'C',1);

$pdf->SetY(34);
$pdf->SetX(120);
$pdf->Cell(5,6,'d',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Canlı Doğan'),1,0,'L',1);
$pdf->Cell(20,6,$verim130,1,0,'C',1);

$pdf->SetY(40);
$pdf->SetX(15);
$pdf->Cell(5,6,'e',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Doğuran'),1,0,'L',1);
$pdf->Cell(20,6,$verim122,1,0,'C',1);

$pdf->SetY(40);
$pdf->SetX(120);
$pdf->Cell(5,6,'e',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde ölen'),1,0,'L',1);
$pdf->Cell(20,6,$verim131,1,0,'C',1);

$pdf->SetY(46);
$pdf->SetX(15);
$pdf->Cell(5,6,'f',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde ölen'),1,0,'L',1);
$pdf->Cell(20,6,$verim123,1,0,'C',1);

$pdf->SetY(46);
$pdf->SetX(120);
$pdf->Cell(5,6,'f',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bölgeden Ayrılan'),1,0,'L',1);
$pdf->Cell(20,6,$verim132,1,0,'C',1);

$pdf->SetY(52);
$pdf->SetX(15);
$pdf->Cell(5,6,'g',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bölgeden Ayrılan'),1,0,'L',1);
$pdf->Cell(20,6,$verim124,1,0,'C',1);

$pdf->SetY(52);
$pdf->SetX(120);
$pdf->Cell(5,6,'g',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bebeklikten Çıkan'),1,0,'L',1);
$pdf->Cell(20,6,$verim133,1,0,'C',1);

$pdf->SetY(58);
$pdf->SetX(15);
$pdf->Cell(5,10,'h',1,0,'C',1);
$pdf->Cell(55,5,'Ay Sonu Gebe Mevcudu',0,0,'L',1);
$pdf->SetY(64);
$pdf->SetX(20);
$pdf->Cell(55,5,'(a+b+c)-(d+e+f+g)',0,0,'L',1);
$pdf->Rect(20,58,55,10);
$pdf->SetY(58);
$pdf->SetX(75);
$pdf->Cell(20,10,$aysonugebemevcudu,1,0,'C',1);

$pdf->SetY(58);
$pdf->SetX(120);
$pdf->Cell(5,10,'h',1,0,'C',1);
$pdf->Cell(55,5,'Ay Sonu Bebek Mevcudu',0,0,'L',1);
$pdf->SetY(64);
$pdf->SetX(125);
$pdf->Cell(55,5,'(a+b+c+d)-(e+f+g)',0,0,'L',1);
$pdf->Rect(125,58,60,10);
$pdf->SetY(58);
$pdf->SetX(180);
$pdf->Cell(20,10,$aysonubebekmevcudu,1,0,'C',1);

$pdf->SetY(74);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Doğum Anında Ölen Gebe Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim126,1,0,'C',1);

$pdf->SetY(74);
$pdf->SetX(120);
$pdf->Cell(60,6,trsuz('Ölü Doğan Bebek Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim135,1,0,'C',1);


//Logusa ?ocuk Durumu

$pdf->SetY(86);
$pdf->SetX(15);
$pdf->Cell(80,6,'LOHUSA DURUMU',1,0,'C',1);
$pdf->SetY(86);
$pdf->SetX(120);
$pdf->Cell(80,6,trsuz('ÇOCUK DURUMU'),1,0,'C',1);
$pdf->SetY(92);
$pdf->SetX(15);
$pdf->Cell(5,6,'a',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Geçen Aydan Devreden'),1,0,'L',1);
$pdf->Cell(20,6,$devirlohusa,1,0,'C',1);

$pdf->SetY(92);
$pdf->SetX(120);
$pdf->Cell(5,6,'a',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Geçen Aydan Devreden'),1,0,'L',1);
$pdf->Cell(20,6,$devircocuk,1,0,'C',1);

$pdf->SetY(98);
$pdf->SetX(15);
$pdf->Cell(5,6,'b',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Tesbit Edilen'),1,0,'L',1);
$pdf->Cell(20,6,$verim137,1,0,'C',1);

$pdf->SetY(98);
$pdf->SetX(120);
$pdf->Cell(5,6,'b',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Tesbit Edilen'),1,0,'L',1);
$pdf->Cell(20,6,$verim145,1,0,'C',1);

$pdf->SetY(104);
$pdf->SetX(15);
$pdf->Cell(5,6,'c',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Başka Bölgeden Gelen'),1,0,'L',1);
$pdf->Cell(20,6,$verim138,1,0,'C',1);

$pdf->SetY(104);
$pdf->SetX(120);
$pdf->Cell(5,6,'c',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Başka Bölgeden Gelen'),1,0,'L',1);
$pdf->Cell(20,6,$verim146,1,0,'C',1);

$pdf->SetY(110);
$pdf->SetX(15);
$pdf->Cell(5,6,'d',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay Lohusalığa Geçen'),1,0,'L',1);
$pdf->Cell(20,6,$verim139,1,0,'C',1);

$pdf->SetY(110);
$pdf->SetX(120);
$pdf->Cell(5,6,'d',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay Çocukluğa Geçen'),1,0,'L',1);
$pdf->Cell(20,6,$verim147,1,0,'C',1);

$pdf->SetY(116);
$pdf->SetX(15);
$pdf->Cell(5,6,'e',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Ölen'),1,0,'L',1);
$pdf->Cell(20,6,$verim140,1,0,'C',1);

$pdf->SetY(116);
$pdf->SetX(120);
$pdf->Cell(5,6,'e',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Ölen'),1,0,'L',1);
$pdf->Cell(20,6,$verim148,1,0,'C',1);

$pdf->SetY(122);
$pdf->SetX(15);
$pdf->Cell(5,6,'f',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bölgeden Ayrılan'),1,0,'L',1);
$pdf->Cell(20,6,$verim141,1,0,'C',1);

$pdf->SetY(122);
$pdf->SetX(120);
$pdf->Cell(5,6,'f',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bölgeden Ayrılan'),1,0,'L',1);
$pdf->Cell(20,6,$verim149,1,0,'C',1);

$pdf->SetY(128);
$pdf->SetX(15);
$pdf->Cell(5,6,'g',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay Lohusalıktan Çıkan'),1,0,'L',1);
$pdf->Cell(20,6,$verim142,1,0,'C',1);

$pdf->SetY(128);
$pdf->SetX(120);
$pdf->Cell(5,6,'g',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Çocukluktan Çıkan'),1,0,'L',1);
$pdf->Cell(20,6,$verim150,1,0,'C',1);

$pdf->SetY(134);
$pdf->SetX(15);
$pdf->Cell(5,10,'h',1,0,'C',1);
$pdf->Cell(55,5,'Ay Sonu Lohusa Mevcudu',0,0,'L',1);
$pdf->SetY(140);
$pdf->SetX(20);
$pdf->Cell(55,5,'(a+b+c+d)-(e+f+g)',0,0,'L',1);
$pdf->Rect(20,134,55,10);
$pdf->SetY(134);
$pdf->SetX(75);
$pdf->Cell(20,10,$aysonulohusamevcudu,1,0,'C',1);

$pdf->SetY(134);
$pdf->SetX(120);
$pdf->Cell(5,10,'h',1,0,'C',1);
$pdf->Cell(55,5,trsuz('Ay Sonu Çocuk Mevcudu'),0,0,'L',1);
$pdf->SetY(140);
$pdf->SetX(125);
$pdf->Cell(55,5,'(a+b+c+d)-(e+f+g)',0,0,'L',1);
$pdf->Rect(125,134,55,10);
$pdf->SetY(134);
$pdf->SetX(180);
$pdf->Cell(20,10,$aysonucocukmevcudu,1,0,'C',1);


//Dis bilgileri
$pdf->SetY(150);
$pdf->SetX(15);
$pdf->Cell(80,6,trsuz('DİŞ SAĞLIĞI BİLGİLERİ'),1,0,'C',1);
$pdf->SetY(150);
$pdf->SetX(105);
$pdf->Cell(95,6,trsuz('DÜŞÜK DOĞUM AĞIRLIKLI BEBEK'),1,0,'C',1);
$pdf->SetY(156);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Muayene Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim152,1,0,'C',1);

$pdf->SetY(156);
$pdf->SetX(105);
$pdf->Cell(65,6,trsuz('Doğum Ağırlığı 1500 gr.ın Altında Olan'),1,0,'L',1);
$pdf->Cell(30,6,$verim161,1,0,'C',1);

$pdf->SetY(162);
$pdf->SetX(15);
$pdf->SetFont('Arial','',9);
$pdf->Cell(60,6,trsuz('Okul Taramaları Taranan Öğrenci Sayısı'),1,0,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,6,$verim153,1,0,'C',1);

$pdf->SetY(162);
$pdf->SetX(105);
$pdf->Cell(65,6,trsuz('Doğum Ağırlığı 1500-2500 gr Olan'),1,0,'L',1);
$pdf->Cell(30,6,$verim162,1,0,'C',1);

$pdf->SetY(168);
$pdf->SetX(15);
$pdf->SetFont('Arial','',9);
$pdf->Cell(60,6,trsuz('12-45 Yaşta Tes.Edilen Çürük Diş Say.'),1,0,'L',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(20,6,$verim154,1,0,'C',1);

$pdf->SetY(168);
$pdf->SetX(105);

$pdf->SetY(174);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Tesbit Edilen Dişeti Hastalıkları Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim155,1,0,'C',1);

$pdf->SetY(180);
$pdf->SetX(105);
$pdf->Cell(60,6,trsuz('ÇOĞUL DOĞUMLAR'),1,0,'C',1);


$pdf->SetY(180);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Tedavi Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim156,1,0,'C',1);

$pdf->SetY(186);
$pdf->SetX(105);
$pdf->Cell(30,6,trsuz('Özelligi'),1,0,'L',1);
$pdf->Cell(30,6,trsuz('Sayısı'),1,0,'L',1);


$pdf->SetY(186);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Çekim Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim157,1,0,'C',1);


$pdf->SetY(192);
$pdf->SetX(105);
$pdf->Cell(30,6,trsuz('İkiz'),1,0,'L',1);
$pdf->Cell(30,6,$verim163,1,0,'C',1);

$pdf->SetY(192);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Sevk Sayısı'),1,0,'L',1);
$pdf->Cell(20,6,$verim158,1,0,'C',1);

$pdf->SetY(198);
$pdf->SetX(105);
$pdf->Cell(30,6,trsuz('Üçüz'),1,0,'L',1);
$pdf->Cell(30,6,$verim164,1,0,'C',1);

$pdf->SetY(198);
$pdf->SetX(15);
$pdf->Cell(60,6,trsuz('Flor Uygulaması'),1,0,'L',1);
$pdf->Cell(20,6,$verim159,1,0,'C',1);

$pdf->SetY(204);
$pdf->SetX(105);
$pdf->Cell(30,6,'',1,0,'L',1);
$pdf->Cell(30,6,$verim165,1,0,'C',1);

$pdf->SetY(204);
$pdf->SetX(15);
$pdf->Cell(60,6,'',1,0,'L',1);
$pdf->Cell(20,6,$verim160,1,0,'C',1);

$pdf->SetY(186);
$pdf->SetX(170);
$pdf->Cell(30,6,trsuz('PREMATÜRE'),0,0,'C',1);
$pdf->SetY(192);
$pdf->SetX(170);
$pdf->Cell(30,6,trsuz('DOĞUM SAYISI'),0,0,'C',1);
$pdf->SetY(198);
$pdf->SetX(170);
$pdf->Cell(30,12,$verim166,1,0,'C',1);
$pdf->Rect(170,186,30,12);

$pdf->SetY(216);
$pdf->SetX(15);
$pdf->Cell(185,6,trsuz('KUDUZ ŞÜPHELİ ISIRIK VE KUDUZ VAKALARI İLE UYGULANAN TEDAVİLER'),1,0,'C',1);

$pdf->SetY(222);
$pdf->SetX(15);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,trsuz('Isırılan Kişi'),0,0,'C',1);
$pdf->Cell(30,6,trsuz('Kuduz Teşhis Edilen'),0,0,'C',1);
$pdf->Cell(60,6,trsuz('Kuduz Aşısı Uygulanan Kişiler'),1,0,'C',1);
$pdf->Cell(35,6,'Serum Uygulanan',0,0,'C',1);
$pdf->Cell(30,6,trsuz('Karantinaya Alınan'),0,0,'C',1);

$pdf->SetY(228);
$pdf->SetX(15);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,6,trsuz('Sayısı'),0,0,'C',1);
$pdf->Cell(30,6,trsuz('Kişi Sayısı'),0,0,'C',1);
$pdf->Cell(30,6,trsuz('Yerli Aşı'),1,0,'C',1);
$pdf->Cell(30,6,trsuz('İthal Aşi'),1,0,'C',1);
$pdf->Cell(35,6,trsuz('Kişi Sayısı'),0,0,'C',1);
$pdf->Cell(30,6,trsuz('Yerleşim Yeri Sayısı'),0,0,'C',1);

$pdf->Rect(15,222,30,12);
$pdf->Rect(45,222,30,12);
$pdf->Rect(135,222,35,12);
$pdf->Rect(170,222,30,12);
$pdf->SetFont('Arial','',10);

$pdf->SetY(234);
$pdf->SetX(15);
$pdf->Cell(30,6,$verim167,1,0,'C',1);
$pdf->Cell(30,6,$verim168,1,0,'C',1);
$pdf->Cell(30,6,$verim169,1,0,'C',1);
$pdf->Cell(30,6,$verim170,1,0,'C',1);
$pdf->Cell(35,6,$verim171,1,0,'C',1);
$pdf->Cell(30,6,$verim172,1,0,'C',1);
// D?zenleyen onaylayan
$pdf->SetY(246);
$pdf->SetX(15);
$pdf->Cell(80,6,trsuz('DÜZENLEYEN'),1,0,'C',1);
$pdf->SetY(246);
$pdf->SetX(120);
$pdf->Cell(80,6,'ONAYLAYAN',1,0,'C',1);
$pdf->SetY(252);
$pdf->SetX(15);
$pdf->Cell(30,6,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,6,$verim173,1,0,'C',1);

$pdf->SetY(252);
$pdf->SetX(120);
$pdf->Cell(30,6,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,6,$verim176,1,0,'C',1);

$pdf->SetY(258);
$pdf->SetX(15);
$pdf->Cell(30,6,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,6,$verim174,1,0,'C',1);

$pdf->SetY(258);
$pdf->SetX(120);
$pdf->Cell(30,6,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,6,$verim177,1,0,'C',1);

$pdf->SetY(264);
$pdf->SetX(15);
$pdf->Cell(30,6,'Tarih:',1,0,'R',1);
$pdf->Cell(50,6,$dtarih,1,0,'C',1);

$pdf->SetY(264);
$pdf->SetX(120);
$pdf->Cell(30,6,'Tarih:',1,0,'R',1);
$pdf->Cell(50,6,$otarih,1,0,'C',1);

$pdf->SetY(270);
$pdf->SetX(15);
$pdf->Cell(30,6,trsuz('İmza:'),1,0,'R',1);
$pdf->Cell(50,6,'',1,0,'C',1);

$pdf->SetY(270);
$pdf->SetX(120);
$pdf->Cell(30,6,trsuz('İmza-Mühür:'),1,0,'R',1);
$pdf->Cell(50,6,'',1,0,'C',1);



/*
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(100,6,'Kurum',1,0,'C',1);
$pdf->SetX(115);
$pdf->Cell(20,6,'Yil',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(30,6,'Ay',1,0,'C',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(100,6,$column_code),1,'L');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(20,6,$column_name,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,$column_price),1,'L');
$pdf->Ln();
//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(15);
    $pdf->MultiCell(150,6,'',1);
    $i = $i +1;
}

*/
$pdf->Output();

?>
