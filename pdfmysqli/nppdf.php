<?php
function turkce($k)
{
    return iconv('utf-8','iso-8859-9',$k);
}
require('fpdf.php');
include('../con_023.php');
include('../con_etf.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$resultvyil = @mysqli_query($dbh_etf,"select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
    include('../nufpramit/assets/etf_sablonlar/np_veri_seti.php');
}
include('../nufpramit/assets/etf_sablonlar/toplamsutunu.php');
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
//$pdf->Table('select * from yg order by vocadi');
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
$pdf->Cell(20,6,'',0,0,'C',1);
$pdf->SetY(0);
$pdf->SetX(50);
$pdf->Cell(120,6,turkce('DEMOGRAFİK VERİLER'),0,0,'C',1);
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
$pdf->Cell(35,6,'',0,0,'L',1);
$pdf->MultiCell(70,6,'',0,'L');
$pdf->SetY(6);
$pdf->SetX(140);
$pdf->Cell(20,6,'KURUM:',0,0,'R',1);
$pdf->MultiCell(40,6,$socadi,0,'L');
$pdf->SetY(12);
$pdf->SetX(140);
$pdf->Cell(20,6,'YIL:',0,0,'R',1);
$pdf->MultiCell(40,6,$yilim,0,'L');
$pdf->SetY(18);
$pdf->SetX(130);
$pdf->Cell(50,6,'',0,0,'R',1);
$pdf->MultiCell(20,6,'',0,'L');
//Çizgi
$pdf->Rect(14,19,187,128);
$pdf->SetY(20);
$pdf->SetX(15);
$pdf->Cell(185,6,turkce('NÜFUSUN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI'),1,0,'C',1);
$pdf->SetY(26);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('YAŞ GRUPLARI'),1,0,'C','L',1);
$pdf->Cell(46,6,'KADIN',1,0,'C',1);
$pdf->Cell(46,6,'ERKEK',1,0,'C',1);
$pdf->Cell(46,6,'TOPLAM',1,0,'C',1);
//$pdf->RotatedText(91,36,trsuz('1 yaş'),0);
//1.satır
$pdf->SetY(32);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('0-4 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim1,1,0,'C',1);
$pdf->Cell(46,6,$verim19,1,0,'C',1);
$pdf->Cell(46,6,$sifir,1,0,'C',1);
//2.satır
$pdf->SetY(38);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('5-9 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim2,1,0,'C',1);
$pdf->Cell(46,6,$verim20,1,0,'C',1);
$pdf->Cell(46,6,$bes,1,0,'C',1);
//3.satır
$pdf->SetY(44);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('10-14 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim3,1,0,'C',1);
$pdf->Cell(46,6,$verim21,1,0,'C',1);
$pdf->Cell(46,6,$on,1,0,'C',1);
//4.satır
$pdf->SetY(50);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('15-19 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim4,1,0,'C',1);
$pdf->Cell(46,6,$verim22,1,0,'C',1);
$pdf->Cell(46,6,$onbes,1,0,'C',1);
//5.satır
$pdf->SetY(56);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('20-24 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim5,1,0,'C',1);
$pdf->Cell(46,6,$verim23,1,0,'C',1);
$pdf->Cell(46,6,$yirmi,1,0,'C',1);
//6.satır
$pdf->SetY(62);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('25-29 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim6,1,0,'C',1);
$pdf->Cell(46,6,$verim24,1,0,'C',1);
$pdf->Cell(46,6,$yirmibes,1,0,'C',1);
//2.satır
$pdf->SetY(68);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('30-34 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim7,1,0,'C',1);
$pdf->Cell(46,6,$verim25,1,0,'C',1);
$pdf->Cell(46,6,$otuz,1,0,'C',1);
//3.satır
$pdf->SetY(74);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('35-39 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim8,1,0,'C',1);
$pdf->Cell(46,6,$verim26,1,0,'C',1);
$pdf->Cell(46,6,$otuzbes,1,0,'C',1);
//4.satır
$pdf->SetY(80);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('40-44 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim9,1,0,'C',1);
$pdf->Cell(46,6,$verim27,1,0,'C',1);
$pdf->Cell(46,6,$kirk,1,0,'C',1);
//5.satır
$pdf->SetY(86);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('45-49 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim10,1,0,'C',1);
$pdf->Cell(46,6,$verim28,1,0,'C',1);
$pdf->Cell(46,6,$kirkbes,1,0,'C',1);
//1.satır
$pdf->SetY(92);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('50-54 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim11,1,0,'C',1);
$pdf->Cell(46,6,$verim29,1,0,'C',1);
$pdf->Cell(46,6,$elli,1,0,'C',1);
//2.satır
$pdf->SetY(98);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('55-59 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim12,1,0,'C',1);
$pdf->Cell(46,6,$verim30,1,0,'C',1);
$pdf->Cell(46,6,$ellibes,1,0,'C',1);
//3.satır
$pdf->SetY(104);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('60-64 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim13,1,0,'C',1);
$pdf->Cell(46,6,$verim31,1,0,'C',1);
$pdf->Cell(46,6,$atmis,1,0,'C',1);
//4.satır
$pdf->SetY(110);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('65-69 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim14,1,0,'C',1);
$pdf->Cell(46,6,$verim32,1,0,'C',1);
$pdf->Cell(46,6,$atmisbes,1,0,'C',1);
//5.satır
$pdf->SetY(116);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('70-74 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim15,1,0,'C',1);
$pdf->Cell(46,6,$verim33,1,0,'C',1);
$pdf->Cell(46,6,$yetmis,1,0,'C',1);
//1.satır
$pdf->SetY(122);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('75-79 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim16,1,0,'C',1);
$pdf->Cell(46,6,$verim34,1,0,'C',1);
$pdf->Cell(46,6,$yetmisbes,1,0,'C',1);
//2.satır
$pdf->SetY(128);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('80-84 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim17,1,0,'C',1);
$pdf->Cell(46,6,$verim35,1,0,'C',1);
$pdf->Cell(46,6,$seksen,1,0,'C',1);
//3.satır
$pdf->SetY(134);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('85- + YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim18,1,0,'C',1);
$pdf->Cell(46,6,$verim36,1,0,'C',1);
$pdf->Cell(46,6,$seksenbes,1,0,'C',1);
//yaş grubu toplam
$pdf->SetY(140);
$pdf->SetX(15);
$pdf->Cell(47,6,'TOPLAM',1,0,'C','L',1);
$pdf->Cell(46,6,$ygkt,1,0,'C',1);
$pdf->Cell(46,6,$yget,1,0,'C',1);
$pdf->Cell(46,6,$ygt,1,0,'C',1);
//Çizgi
$pdf->Rect(14,148,187,50);
$pdf->SetY(149);
$pdf->SetX(15);
$pdf->Cell(185,6,turkce('NÜFUSUN MEDENİ HALİNE GÖRE DAĞILIMI'),1,0,'C',1);
$pdf->SetY(155);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('MEDENİ HALİ'),1,0,'C','L',1);
$pdf->Cell(46,6,'KADIN',1,0,'C',1);
$pdf->Cell(46,6,'ERKEK',1,0,'C',1);
$pdf->Cell(46,6,'TOPLAM',1,0,'C',1);
//$pdf->RotatedText(91,36,trsuz('1 yaş'),0);
//1.satır
$pdf->SetY(161);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('ÇOCUK'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim37,1,0,'C',1);
$pdf->Cell(46,6,$verim42,1,0,'C',1);
$pdf->Cell(46,6,$cocuk,1,0,'C',1);
//2.satır
$pdf->SetY(167);
$pdf->SetX(15);
$pdf->Cell(47,6,'BEKAR',1,0,'C','L',1);
$pdf->Cell(46,6,$verim38,1,0,'C',1);
$pdf->Cell(46,6,$verim43,1,0,'C',1);
$pdf->Cell(46,6,$bekar,1,0,'C',1);
//3.satır
$pdf->SetY(173);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('EVLİ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim39,1,0,'C',1);
$pdf->Cell(46,6,$verim44,1,0,'C',1);
$pdf->Cell(46,6,$evli,1,0,'C',1);
//4.satır
$pdf->SetY(179);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('BOŞANMIŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim40,1,0,'C',1);
$pdf->Cell(46,6,$verim45,1,0,'C',1);
$pdf->Cell(46,6,$bosanmis,1,0,'C',1);
//5.satır
$pdf->SetY(185);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('EŞİ ÖLMÜŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim41,1,0,'C',1);
$pdf->Cell(46,6,$verim46,1,0,'C',1);
$pdf->Cell(46,6,$esiolmus,1,0,'C',1);
//MEDENİ HAL TOPLAM
$pdf->SetY(191);
$pdf->SetX(15);
$pdf->Cell(47,6,'TOPLAM',1,0,'C','L',1);
$pdf->Cell(46,6,$mhkt,1,0,'C',1);
$pdf->Cell(46,6,$mhet,1,0,'C',1);
$pdf->Cell(46,6,$mht,1,0,'C',1);
//Çizgi
$pdf->Rect(14,199,187,62);
$pdf->SetY(200);
$pdf->SetX(15);
$pdf->Cell(185,6,turkce('NÜFUSUN ÖĞRENİM DURUMUNA GÖRE DAĞILIMI'),1,0,'C',1);
$pdf->SetY(206);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('ÖĞRENİM DURUMU'),1,0,'C','L',1);
$pdf->Cell(46,6,'KADIN',1,0,'C',1);
$pdf->Cell(46,6,'ERKEK',1,0,'C',1);
$pdf->Cell(46,6,'TOPLAM',1,0,'C',1);
//$pdf->RotatedText(91,36,trsuz('1 yaş'),0);
//1.satır
$pdf->SetY(212);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('OKUL ÇAĞINDA DEĞİL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim47,1,0,'C',1);
$pdf->Cell(46,6,$verim54,1,0,'C',1);
$pdf->Cell(46,6,$ocd,1,0,'C',1);
//2.satır
$pdf->SetY(218);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('OKUR YAZAR DEĞİL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim48,1,0,'C',1);
$pdf->Cell(46,6,$verim55,1,0,'C',1);
$pdf->Cell(46,6,$oyd,1,0,'C',1);
//3.satır
$pdf->SetY(224);
$pdf->SetX(15);
$pdf->Cell(47,6,'OKUR YAZAR',1,0,'C','L',1);
$pdf->Cell(46,6,$verim49,1,0,'C',1);
$pdf->Cell(46,6,$verim56,1,0,'C',1);
$pdf->Cell(46,6,$oy,1,0,'C',1);
//4.satır
$pdf->SetY(230);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('İLKOKUL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim50,1,0,'C',1);
$pdf->Cell(46,6,$verim57,1,0,'C',1);
$pdf->Cell(46,6,$ilk,1,0,'C',1);
//5.satır
$pdf->SetY(236);
$pdf->SetX(15);
$pdf->Cell(47,6,'ORTAOKUL',1,0,'C','L',1);
$pdf->Cell(46,6,$verim51,1,0,'C',1);
$pdf->Cell(46,6,$verim58,1,0,'C',1);
$pdf->Cell(46,6,$orta,1,0,'C',1);
//4.satır
$pdf->SetY(242);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('LİSE'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim52,1,0,'C',1);
$pdf->Cell(46,6,$verim59,1,0,'C',1);
$pdf->Cell(46,6,$lise,1,0,'C',1);
//5.satır
$pdf->SetY(248);
$pdf->SetX(15);
$pdf->Cell(47,6,turkce('YÜKSEKOKUL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim53,1,0,'C',1);
$pdf->Cell(46,6,$verim60,1,0,'C',1);
$pdf->Cell(46,6,$yo,1,0,'C',1);
//ÖĞRENİM DURUMU TOPLAM
$pdf->SetY(254);
$pdf->SetX(15);
$pdf->Cell(47,6,'TOPLAM',1,0,'C','L',1);
$pdf->Cell(46,6,$odkt,1,0,'C',1);
$pdf->Cell(46,6,$odet,1,0,'C',1);
$pdf->Cell(46,6,$odt,1,0,'C',1);
$pdf->SetFont('Arial','',10);
$pdf->SetY(264);
$pdf->SetX(15);
$pdf->Cell(50,4,turkce('Formu Düzenleyen'),0,0,'C',1);
$pdf->SetY(264);
$pdf->SetX(135);
$pdf->Cell(50,4,'Formu Onaylayan',0,0,'C',1);
$pdf->SetY(268);
$pdf->SetX(15);
//$pdf->Cell(30,4,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,4,turkce($verim173),0,0,'C',1);
$pdf->SetY(268);
$pdf->SetX(135);
//$pdf->Cell(30,4,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,4,turkce($verim176),0,0,'C',1);
$pdf->SetY(272);
$pdf->SetX(15);
//$pdf->Cell(30,4,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,4,turkce($verim174),0,0,'C',1);
$pdf->SetY(272);
$pdf->SetX(135);
//$pdf->Cell(30,4,trsuz('Ünvanı:'),1,0,'R',1);
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
$pdf->Cell(30,4,trsuz('İmza:'),1,0,'R',1);
$pdf->Cell(50,4,'',1,0,'C',1);
$pdf->SetY(277);
$pdf->SetX(120);
$pdf->Cell(30,4,trsuz('İmza-Mühür:'),1,0,'R',1);
$pdf->Cell(50,4,'',1,0,'C',1);
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
$pdf->MultiCell(100,6,trsuz($column_code),1,'L');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(20,6,$column_name,1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(135);
$pdf->MultiCell(30,6,trsuz($column_price),1,'L');
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
mysqli_close($dbh_etf);
?>
