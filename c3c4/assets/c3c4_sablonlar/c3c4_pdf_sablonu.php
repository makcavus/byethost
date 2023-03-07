<?php
function turkce($k)
{
    return iconv('utf-8','iso-8859-9',$k);
}
class PDF extends FPDF
{
function Header()
{
    //Title
    $this->SetFont('times','',18);
    $this->Cell(0,6,turkce(''),0,1,'C');
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
$pdf->AddPage('P','A4');
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
$pdf->RotatedText(126,55,'Ğ'),0);
$pdf->RotatedText(126,59,U,0);
$pdf->RotatedText(126,63,M,0);
$pdf->RotatedText(126,67,L,0);
$pdf->RotatedText(126,71,A,0);
$pdf->RotatedText(126,75,R,0);
$pdf->Rect(125,42,5,36);
$pdf->SetFont('Arial','',9);
$pdf->RotatedText(126,84,'İ'),0);
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
$pdf->SetFont('Arial','',10);
$pdf->SetY(0);
$pdf->SetX(15);
$pdf->Cell(20,6,turkce(''),0,0,'C',1);

$pdf->SetY(0);
$pdf->SetX(50);
$pdf->Cell(120,6,turkce('AŞI SONUÇLARI ÇİZELGESİ  (FORM 013)'),0,0,'C',1);

$pdf->SetY(6);
$pdf->SetX(15);
$pdf->Cell(35,6,turkce('İL:'),0,0,'L',1);
$pdf->MultiCell(40,6,turkce($ilinadi),0,'L');
$pdf->SetY(11);
$pdf->SetX(50);

$pdf->SetY(12);
$pdf->SetX(15);
$pdf->Cell(35,6,turkce('İLÇE:'),0,0,'L',1);
$pdf->MultiCell(40,6,turkce($ilceninadi),0,'L');
$pdf->SetY(18);
$pdf->SetX(15);
$pdf->Cell(35,6,turkce('AİLE HEKİMİ KODU:'),0,0,'L',1);
$pdf->MultiCell(70,6,turkce($socadi),0,'L');

$pdf->SetY(6);
$pdf->SetX(160);
$pdf->Cell(20,6,turkce('YIL:'),0,0,'R',1);
$pdf->MultiCell(20,6,turkce($yilim),0,'L');

$pdf->SetY(12);
$pdf->SetX(160);
$pdf->Cell(20,6,turkce('AY:'),0,0,'R',1);
$pdf->MultiCell(20,6,turkce($ayim),0,'L');

$pdf->SetY(18);
$pdf->SetX(130);
$pdf->Cell(50,6,turkce('YILLIK 0-11 AY BEBEK NÜFUSU:'),0,0,'R',1);
$pdf->MultiCell(20,6,$verim119,0,'L');
//Çizgi
$pdf->Rect(14,23,187,40.5);

$pdf->SetY(24);
$pdf->SetX(15);
$pdf->Cell(35,6,turkce(''),1,0,'R',1);
$pdf->Cell(150,6,turkce('YAŞ GRUPLARINA GÖRE YAPILAN DOZ SAYISI'),1,0,'C',1);

$pdf->SetY(30);
$pdf->SetX(15);
$pdf->Cell(35,10,'',1,0,'C',1);
$pdf->RotatedText(30,37,turkce('AŞI'),0);
$pdf->Cell(10,10,'',1,0,'C',1);
$pdf->RotatedText(50,35,turkce('Uygu-'),0);
$pdf->RotatedText(51,39,turkce('lama'),0);
$pdf->Cell(26,10,'',1,0,'C',1);
$pdf->RotatedText(68,34,turkce('0 yaş'),0);
$pdf->RotatedText(66,39,turkce('(0-11 ay)'),0);
$pdf->Cell(19,10,'',1,0,'C',1);
$pdf->RotatedText(91,36,turkce('1 yaş'),0);
$pdf->Cell(19,10,'',1,0,'C',1);
$pdf->RotatedText(109,36,turkce('2-4 yaş'),0);
$pdf->Cell(19,10,'',1,0,'C',1);
$pdf->RotatedText(128,36,turkce('5-9 yaş'),0);
$pdf->Cell(19,10,'',1,0,'C',1);
$pdf->RotatedText(144,36,turkce('10-14 yaş'),0);
$pdf->Cell(19,10,'',1,0,'C',1);
$pdf->RotatedText(164,34,turkce('15 yaş ve'),0);
$pdf->RotatedText(168,39,turkce('üzeri'),0);
$pdf->Cell(19,10,'',1,0,'C',1);
$pdf->RotatedText(183,36,turkce('TOPLAM'),0);
//1.satır
$pdf->SetY(40);
$pdf->SetX(15);
$pdf->Cell(35,20,'',1,0,'C',1);
$pdf->RotatedText(22,48,turkce('DaBT-İPA-Hib'),0);
$pdf->RotatedText(30,53,turkce('AŞISI'),0);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->Cell(26,4.5,$verim1,1,0,'C',1);
$pdf->Cell(19,4.5,$verim2,1,0,'C',1);
$pdf->Cell(19,4.5,$verim3,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamdbt1,1,0,'C',1);
//2.satır
$pdf->SetY(44.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'II',1,0,'C',1);
$pdf->Cell(26,4.5,$verim5,1,0,'C',1);
$pdf->Cell(19,4.5,$verim6,1,0,'C',1);
$pdf->Cell(19,4.5,$verim7,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamdbt2,1,0,'C',1);
//3.satır
$pdf->SetY(49);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'III',1,0,'C',1);
$pdf->Cell(26,4.5,$verim9,1,0,'C',1);
$pdf->Cell(19,4.5,$verim10,1,0,'C',1);
$pdf->Cell(19,4.5,$verim11,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamdbt3,1,0,'C',1);
//4.satır
$pdf->SetY(53.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'R',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim13,1,0,'C',1);
$pdf->Cell(19,4.5,$verim14,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamdbtR,1,0,'C',1);
//5.satır
$pdf->SetY(58);
$pdf->SetX(15);
$pdf->Cell(45,4.5,turkce('TOPLAM DaBT-İPA-Hib'),1,0,'C',1);
$pdf->SetFillColor(100,100,100);

$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamdbt,1,0,'C',1);
//Çizgi
$pdf->Rect(14,64.5,187,6.5);
$pdf->SetY(65.5);
$pdf->SetX(15);
$pdf->Cell(35,4.5,turkce('DaBT-İPA AŞISI'),1,0,'C',1);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim17,1,0,'C',1);
$pdf->Cell(19,4.5,$verim18,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamhib,1,0,'C',1);
//Çizgi
$pdf->Rect(14,72,187,25);
//1.satır
$pdf->SetY(73);
$pdf->SetX(15);
$pdf->Cell(35,20,'',1,0,'C',1);
$pdf->RotatedText(24,78,turkce('KONJUGE'),0);
$pdf->RotatedText(22,83,turkce('PNÖMOKOK'),0);
$pdf->RotatedText(27,88,turkce('AŞISI'),0);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->Cell(26,4.5,$verim19,1,0,'C',1);
$pdf->Cell(19,4.5,$verim20,1,0,'C',1);
$pdf->Cell(19,4.5,$verim21,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamkpa1,1,0,'C',1);
//2.satır
$pdf->SetY(77.5);
$pdf->SetX(50);
$pdf->Cell(10,5,'II',1,0,'C',1);
$pdf->Cell(26,5,$verim22,1,0,'C',1);
$pdf->Cell(19,5,$verim23,1,0,'C',1);
$pdf->Cell(19,5,$verim24,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,5,$toplamkpa2,1,0,'C',1);
//3.satır
$pdf->SetY(82);
$pdf->SetX(50);
$pdf->Cell(10,5,'III',1,0,'C',1);
$pdf->Cell(26,5,$verim25,1,0,'C',1);
$pdf->Cell(19,5,$verim26,1,0,'C',1);
$pdf->Cell(19,5,$verim27,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,5,$toplamkpa3,1,0,'C',1);
//4.satır
$pdf->SetY(86.5);
$pdf->SetX(50);
$pdf->Cell(10,5,'R',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,5,$verim28,1,0,'C',1);
$pdf->Cell(19,5,$verim29,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,5,$toplamkpar,1,0,'C',1);
//5.satır
$pdf->SetY(91);
$pdf->SetX(15);
$pdf->Cell(45,5,'TOPLAM K.P.A.',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->Cell(19,5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,5,$toplamkpa,1,0,'C',1);
//Çizgi
$pdf->Rect(14,98,187,24.5);
//1.satır
$pdf->SetY(99);
$pdf->SetX(15);
$pdf->Cell(35,20,'',1,0,'C',1);
$pdf->RotatedText(22,107,turkce('ORAL POLİO'),0);
$pdf->RotatedText(28,112,turkce('AŞISI'),0);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->Cell(26,4.5,$verim30,1,0,'C',1);
$pdf->Cell(19,4.5,$verim31,1,0,'C',1);
$pdf->Cell(19,4.5,$verim32,1,0,'C',1);
$pdf->Cell(19,4.5,$verim33,1,0,'C',1);
$pdf->Cell(19,4.5,$verim34,1,0,'C',1);
$pdf->Cell(19,4.5,$verim35,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamopv1,1,0,'C',1);
//2.satır
$pdf->SetY(103.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'II',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim37,1,0,'C',1);
$pdf->Cell(19,4.5,$verim38,1,0,'C',1);
$pdf->Cell(19,4.5,$verim39,1,0,'C',1);
$pdf->Cell(19,4.5,$verim40,1,0,'C',1);
$pdf->Cell(19,4.5,$verim41,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamopv2,1,0,'C',1);
//3.satır
$pdf->SetY(108);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'III',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamopv3,1,0,'C',1);
//4.satır
$pdf->SetY(112.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'R',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamopvr,1,0,'C',1);
//5.satır
$pdf->SetY(117);
$pdf->SetX(15);
$pdf->Cell(45,4.5,turkce('TOPLAM ORAL POLİO'),1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamopv,1,0,'C',1);
//Çizgi
$pdf->Rect(14,123.5,187,15.5);
//3.satır
$pdf->SetY(124.5);
$pdf->SetX(15);
$pdf->Cell(35,10,turkce('K.K.K.AŞISI'),1,0,'C',1);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim53,1,0,'C',1);
$pdf->Cell(19,4.5,$verim54,1,0,'C',1);
$pdf->Cell(19,4.5,$verim55,1,0,'C',1);
$pdf->Cell(19,4.5,$verim56,1,0,'C',1);
$pdf->Cell(19,4.5,$verim57,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamkkk1,1,0,'C',1);
//4.satır
$pdf->SetY(129);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'R',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim58,1,0,'C',1);
$pdf->Cell(19,4.5,$verim59,1,0,'C',1);
$pdf->Cell(19,4.5,$verim60,1,0,'C',1);
$pdf->Cell(19,4.5,$verim61,1,0,'C',1);
$pdf->Cell(19,4.5,$verim62,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamkkkr,1,0,'C',1);
//5.satır
$pdf->SetY(133.5);
$pdf->SetX(15);
$pdf->Cell(45,4.5,'TOPLAM K.K.K.',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamkkk,1,0,'C',1);
//Çizgi
$pdf->Rect(14,140,187,6.5);
$pdf->SetY(141);
$pdf->SetX(15);
$pdf->Cell(35,4.5,'PPD',1,0,'C',1);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->Cell(26,4.5,$verim63,1,0,'C',1);
$pdf->Cell(19,4.5,$verim64,1,0,'C',1);
$pdf->Cell(19,4.5,$verim65,1,0,'C',1);
$pdf->Cell(19,4.5,$verim66,1,0,'C',1);
$pdf->Cell(19,4.5,$verim67,1,0,'C',1);
$pdf->Cell(19,4.5,$verim68,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamppd,1,0,'C',1);
//Çizgi
$pdf->Rect(14,147.5,187,6.5);
$pdf->SetY(148.5);
$pdf->SetX(15);
$pdf->Cell(35,4.5,turkce('BCG AŞISI'),1,0,'C',1);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->Cell(26,4.5,$verim69,1,0,'C',1);
$pdf->Cell(19,4.5,$verim70,1,0,'C',1);
$pdf->Cell(19,4.5,$verim71,1,0,'C',1);
$pdf->Cell(19,4.5,$verim72,1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplambcg,1,0,'C',1);
$pdf->SetY(155);
$pdf->SetX(60);
$pdf->SetFont('Arial','',7);
$pdf->Cell(8,4.5,turkce('Bİ'),1,0,'C',1);
$pdf->Cell(8,4.5,'BD',1,0,'C',1);
$pdf->Cell(10,4.5,'TOPLAM',1,0,'C',1);
$pdf->SetFont('Arial','',10);
//Çizgi
$pdf->Rect(14,159.5,187,20);
//1.satır
$pdf->SetY(160.5);
$pdf->SetX(15);
$pdf->Cell(35,15,'',1,0,'C',1);
$pdf->RotatedText(22,166,turkce('HEPATİT-B'),0);
$pdf->RotatedText(27,171,turkce('AŞISI'),0);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->SetFont('Arial','',8);
$pdf->Cell(8,4.5,$verim74,1,0,'C',1);
$pdf->Cell(8,4.5,$verim75,1,0,'C',1);
$pdf->Cell(10,4.5,$toplamhepbid,1,0,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(19,4.5,$verim77,1,0,'C',1);
$pdf->Cell(19,4.5,$verim78,1,0,'C',1);
$pdf->Cell(19,4.5,$verim79,1,0,'C',1);
$pdf->Cell(19,4.5,$verim80,1,0,'C',1);
$pdf->Cell(19,4.5,$verim81,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamhep1,1,0,'C',1);
//2.satır
$pdf->SetY(165);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'II',1,0,'C',1);
$pdf->Cell(26,4.5,$verim82,1,0,'C',1);
$pdf->Cell(19,4.5,$verim83,1,0,'C',1);
$pdf->Cell(19,4.5,$verim84,1,0,'C',1);
$pdf->Cell(19,4.5,$verim85,1,0,'C',1);
$pdf->Cell(19,4.5,$verim86,1,0,'C',1);
$pdf->Cell(19,4.5,$verim87,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamhep2,1,0,'C',1);
//3.satır
$pdf->SetY(169.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'III',1,0,'C',1);
$pdf->Cell(26,4.5,$verim88,1,0,'C',1);
$pdf->Cell(19,4.5,$verim89,1,0,'C',1);
$pdf->Cell(19,4.5,$verim90,1,0,'C',1);
$pdf->Cell(19,4.5,$verim91,1,0,'C',1);
$pdf->Cell(19,4.5,$verim92,1,0,'C',1);
$pdf->Cell(19,4.5,$verim93,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamhep3,1,0,'C',1);
//4.satır
$pdf->SetY(174);
$pdf->SetX(15);
$pdf->Cell(45,4.5,turkce('TOPLAM HEPATİT-B'),1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamhep,1,0,'C',1);
//Çizgi
$pdf->Rect(14,180.5,187,15.5);
//3.satır
$pdf->SetY(181.5);
$pdf->SetX(15);
$pdf->Cell(35,9,turkce('HEPATİT-A AŞISI'),1,0,'C',1);
$pdf->Cell(10,4.5,'I',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim120,1,0,'C',1);
$pdf->Cell(19,4.5,$verim121,1,0,'C',1);
$pdf->Cell(19,4.5,$verim122,1,0,'C',1);
$pdf->Cell(19,4.5,$verim123,1,0,'C',1);
$pdf->Cell(19,4.5,$verim124,1,0,'C',1);
$pdf->Cell(19,4.5,$hepa1top,1,0,'C',1);
//4.satır
$pdf->SetY(186);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'R',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim125,1,0,'C',1);
$pdf->Cell(19,4.5,$verim126,1,0,'C',1);
$pdf->Cell(19,4.5,$verim127,1,0,'C',1);
$pdf->Cell(19,4.5,$verim128,1,0,'C',1);
$pdf->Cell(19,4.5,$verim129,1,0,'C',1);
$pdf->Cell(19,4.5,$heparaptop,1,0,'C',1);
//5.satır
$pdf->SetY(190.5);
$pdf->SetX(15);
$pdf->Cell(45,4.5,turkce('TOPLAM HEPATİT-A'),1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$toplamhepa,1,0,'C',1);
//Çizgi
$pdf->Rect(14,197,187,6.5);
$pdf->SetY(198);
$pdf->SetX(15);
$pdf->Cell(35,4.5,turkce('SU ÇİÇEĞİ'),1,0,'C',1);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim130,1,0,'C',1);
$pdf->Cell(19,4.5,$verim131,1,0,'C',1);
$pdf->Cell(19,4.5,$verim132,1,0,'C',1);
$pdf->Cell(19,4.5,$verim133,1,0,'C',1);
$pdf->Cell(19,4.5,$verim134,1,0,'C',1);
$pdf->Cell(19,4.5,$suctop,1,0,'C',1);
//Çizgi
$pdf->Rect(14,204.5,187,6.5);
$pdf->SetY(205.5);
$pdf->SetX(15);
$pdf->Cell(35,4.5,turkce('KIZAMIKÇIK AŞISI'),1,0,'C',1);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim96,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamkizcik,1,0,'C',1);
//Çizgi
$pdf->Rect(14,212,187,6.5);
$pdf->SetY(213);
$pdf->SetX(15);
$pdf->Cell(35,4.5,turkce('OKUL Td AŞISI'),1,0,'C',1);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(26,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(19,4.5,$verim100,1,0,'C',1);
$pdf->Cell(19,4.5,$verim101,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamokul,1,0,'C',1);
//Çizgi
$pdf->Rect(14,219.5,187,38);
//1.satır
$pdf->SetY(220.5);
$pdf->SetX(15);
$pdf->Cell(35,4.5,turkce('DİĞER Td'),1,0,'C',1);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->Cell(26,4.5,$verim102,1,0,'C',1);
$pdf->Cell(19,4.5,$verim103,1,0,'C',1);
$pdf->Cell(19,4.5,$verim104,1,0,'C',1);
$pdf->Cell(19,4.5,$verim105,1,0,'C',1);
$pdf->Cell(19,4.5,$verim106,1,0,'C',1);
$pdf->Cell(19,4.5,$verim107,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamdigertd,1,0,'C',1);
//2.satır
$pdf->SetY(225);
$pdf->SetX(15);
$pdf->Cell(35,4.5,'',1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->Cell(64,4.5,'GEBE',1,0,'C',1);
$pdf->Cell(57,4.5,turkce('GEBE DEĞİL'),1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);
//1.satır
$pdf->SetFillColor(255,255,255);
$pdf->SetY(229.5);
$pdf->SetX(15);
$pdf->Cell(35,25,'',1,0,'C',1);
$pdf->RotatedText(18,239,turkce('15-49 YAŞ KADIN'),0);
$pdf->RotatedText(26,244,turkce('Td AŞISI'),0);
$pdf->Cell(10,4.5,'Td1',1,0,'C',1);
$pdf->Cell(64,4.5,$verim108,1,0,'C',1);
$pdf->Cell(57,4.5,$verim113,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet1,1,0,'C',1);
//2.satır
$pdf->SetY(234);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'Td2',1,0,'C',1);
$pdf->Cell(64,4.5,$verim109,1,0,'C',1);
$pdf->Cell(57,4.5,$verim114,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet2,1,0,'C',1);
//3.satır
$pdf->SetY(238.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'Td3',1,0,'C',1);
$pdf->Cell(64,4.5,$verim110,1,0,'C',1);
$pdf->Cell(57,4.5,$verim115,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet3,1,0,'C',1);
//4.satır
$pdf->SetY(243);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'Td4',1,0,'C',1);
$pdf->Cell(64,4.5,$verim111,1,0,'C',1);
$pdf->Cell(57,4.5,$verim116,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet4,1,0,'C',1);
//5.satır
$pdf->SetY(247.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,'Td5',1,0,'C',1);
$pdf->Cell(64,4.5,$verim112,1,0,'C',1);
$pdf->Cell(57,4.5,$verim117,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet5,1,0,'C',1);
//6.satır
$pdf->SetY(252);
$pdf->SetX(15);
$pdf->Cell(45,4.5,'TOPLAM Td',1,0,'C',1);
$pdf->Cell(64,4.5,$toplamgebe,1,0,'C',1);
$pdf->Cell(57,4.5,$toplamgebedegil,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetettop,1,0,'C',1);
// D�zenleyen onaylayan
$pdf->SetY(258);
$pdf->SetX(15);
$pdf->SetFont('Arial','',8);
$pdf->Cell(185,3,turkce('Hepatit-B aşısının 0-11 ay grubuna 1.doz uygulaması kendi bebeğiniz olup bölge dışında(hastane,resmi diğer kurumlar)yapıldı ise BD sütununa'),0,0,'L',1);
$pdf->SetY(261);
$pdf->SetX(15);
$pdf->Cell(185,3,turkce('kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.'),0,0,'L',1);
$pdf->SetFont('Arial','',10);

$pdf->SetY(264);
$pdf->SetX(15);
$pdf->Cell(50,4,turkce('Formu Düzenleyen'),0,0,'C',1);
$pdf->SetY(264);
$pdf->SetX(135);
$pdf->Cell(50,4,turkce('Formu Onaylayan'),0,0,'C',1);
$pdf->SetY(268);
$pdf->SetX(15);
//$pdf->Cell(30,4,'Adı Soyadı:',1,0,'R',1);
$pdf->Cell(50,4,turkce($verim173),0,0,'C',1);

$pdf->SetY(268);
$pdf->SetX(135);
//$pdf->Cell(30,4,'Adı Soyadı:',1,0,'R',1);
$pdf->Cell(50,4,turkce($verim176),0,0,'C',1);

$pdf->SetY(272);
$pdf->SetX(15);
//$pdf->Cell(30,4,'Ünvanı:',1,0,'R',1);
$pdf->Cell(50,4,turkce($verim174),0,0,'C',1);

$pdf->SetY(272);
$pdf->SetX(135);
//$pdf->Cell(30,4,'Ünvanı:',1,0,'R',1);
$pdf->Cell(50,4,turkce($verim177),0,0,'C',1);
/*
$pdf->SetY(274);
$pdf->SetX(15);
$pdf->Cell(30,4,'Tarih:',1,0,'R',1);
$pdf->Cell(50,4,$dtarih,1,0,'C',1);

$pdf->SetY(274);
$pdf->SetX(120);
$pdf->Cell(30,4,'Tarih:',1,0,'R',1);
$pdf->Cell(50,4,$otarih,1,0,'C',1);
/*
$pdf->SetY(277);
$pdf->SetX(15);
$pdf->Cell(30,4,'İmza:',1,0,'R',1);
$pdf->Cell(50,4,'',1,0,'C',1);

$pdf->SetY(277);
$pdf->SetX(120);
$pdf->Cell(30,4,'İmza-Mühür:',1,0,'R',1);
$pdf->Cell(50,4,'',1,0,'C',1);



/*
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(100,6,turkce('Kurum',1,0,'C',1);
$pdf->SetX(115);
$pdf->Cell(20,6,turkce('Yil',1,0,'C',1);
$pdf->SetX(135);
$pdf->Cell(30,6,turkce('Ay',1,0,'C',1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial','',10);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(100,6,turkce($column_code),1,'L');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(20,6,turkce($column_name,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,turkce($column_price),1,'L');
$pdf->Ln();
//Create lines (boxes) for each ROW (Product)
//If you don't use the following code, you don't create the lines separating each row
$i = 0;
$pdf->SetY($Y_Table_Position);
while ($i < $number_of_products)
{
    $pdf->SetX(15);
    $pdf->MultiCell(150,6,turkce(''),1);
    $i = $i +1;
}

*/
$pdf->Output();
?>