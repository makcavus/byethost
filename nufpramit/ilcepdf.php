<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
require('fpdf.php');
include('con_023.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
include('sumilce.php');
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/
$resultvyil = @mysql_query("select * from yg where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen')") ;
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
// YAŞ GRUBU TOPLAMLARI
$sifir=$verim1+$verim19 ;
$bes=$verim2+$verim20 ;
$on=$verim3+$verim21 ;
$onbes=$verim4+$verim22 ;
$yirmi=$verim5+$verim23 ;
$yirmibes=$verim6+$verim24 ;
$otuz=$verim7+$verim25 ;
$otuzbes=$verim8+$verim26 ;
$kirk=$verim9+$verim27 ;
$kirkbes=$verim10+$verim28 ;
$elli=$verim11+$verim29 ;
$ellibes=$verim12+$verim30 ;
$atmis=$verim13+$verim31 ;
$atmisbes=$verim14+$verim32 ;
$yetmis=$verim15+$verim33 ;
$yetmisbes=$verim16+$verim34 ;
$seksen=$verim17+$verim35 ;
$seksenbes=$verim18+$verim36 ;
$ygkt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18;
$yget=$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29+$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36;
$ygt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15+$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29+$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36;
// MEDENİ HAL TOPLAMLARI
$cocuk=$verim37+$verim42 ;
$bekar=$verim38+$verim43 ;
$evli=$verim39+$verim44 ;
$bosanmis=$verim40+$verim45 ;
$esiolmus=$verim41+$verim46 ;
$mhkt=$verim37+$verim38+$verim39+$verim40+$verim41;
$mhet=$verim42+$verim43+$verim44+$verim45+$verim46;
$mht=$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46;
// ÖĞRENİM DURUMU TOPLAMLARI
$ocd=$verim47+$verim54;
$oyd=$verim48+$verim55;
$oy=$verim49+$verim56;
$ilk=$verim50+$verim57;
$orta=$verim51+$verim58;
$lise=$verim52+$verim59;
$yo=$verim53+$verim60;
$odkt=$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
$odet=$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;
$odt=$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53+$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60;
?>
<?php
$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}

?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilim' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
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
$pdf->Cell(20,6,'',0,0,'C',1);

$pdf->SetY(0);
$pdf->SetX(50);
$pdf->Cell(120,6,trsuz('DEMOGRAFİK VERİLER'),0,0,'C',1);

$pdf->SetY(6);
$pdf->SetX(15);
$pdf->Cell(35,6,trsuz('İL:'),0,0,'L',1);
$pdf->MultiCell(40,6,$ilinadi,0,'L');
$pdf->SetY(11);
$pdf->SetX(50);


$pdf->SetY(12);
$pdf->SetX(15);
$pdf->Cell(35,6,trsuz('İLÇE:'),0,0,'L',1);
$pdf->MultiCell(40,6,$ilceninadi,0,'L');
$pdf->SetY(18);
$pdf->SetX(15);
$pdf->Cell(35,6,TRSUZ(''),0,0,'L',1);
$pdf->MultiCell(70,6,'',0,'L');



$pdf->SetY(6);
$pdf->SetX(140);
$pdf->Cell(20,6,'KURUM:',0,0,'R',1);
$pdf->MultiCell(40,6,TRSUZ('İLÇE TOPLAMI'),0,'L');



$pdf->SetY(12);
$pdf->SetX(140);
$pdf->Cell(20,6,'YIL:',0,0,'R',1);
$pdf->MultiCell(40,6,$yilim,0,'L');

$pdf->SetY(18);
$pdf->SetX(130);
$pdf->Cell(50,6,TRSUZ(''),0,0,'R',1);
$pdf->MultiCell(20,6,'',0,'L');
//Çizgi
$pdf->Rect(14,19,187,128);

$pdf->SetY(20);
$pdf->SetX(15);
$pdf->Cell(185,6,trsuz('NÜFUSUN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI'),1,0,'C',1);


$pdf->SetY(26);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('YAŞ GRUPLARI'),1,0,'C','L',1);
$pdf->Cell(46,6,trsuz('KADIN'),1,0,'C',1);
$pdf->Cell(46,6,trsuz('ERKEK'),1,0,'C',1);
$pdf->Cell(46,6,trsuz('TOPLAM'),1,0,'C',1);
//$pdf->RotatedText(91,36,trsuz('1 yaş'),0);

//1.satır
$pdf->SetY(32);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('0-4 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim1,1,0,'C',1);
$pdf->Cell(46,6,$verim19,1,0,'C',1);
$pdf->Cell(46,6,$sifir,1,0,'C',1);

//2.satır
$pdf->SetY(38);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('5-9 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim2,1,0,'C',1);
$pdf->Cell(46,6,$verim20,1,0,'C',1);
$pdf->Cell(46,6,$bes,1,0,'C',1);

//3.satır
$pdf->SetY(44);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('10-14 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim3,1,0,'C',1);
$pdf->Cell(46,6,$verim21,1,0,'C',1);
$pdf->Cell(46,6,$on,1,0,'C',1);

//4.satır
$pdf->SetY(50);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('15-19 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim4,1,0,'C',1);
$pdf->Cell(46,6,$verim22,1,0,'C',1);
$pdf->Cell(46,6,$onbes,1,0,'C',1);


//5.satır
$pdf->SetY(56);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('20-24 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim5,1,0,'C',1);
$pdf->Cell(46,6,$verim23,1,0,'C',1);
$pdf->Cell(46,6,$yirmi,1,0,'C',1);

//6.satır
$pdf->SetY(62);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('25-29 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim6,1,0,'C',1);
$pdf->Cell(46,6,$verim24,1,0,'C',1);
$pdf->Cell(46,6,$yirmibes,1,0,'C',1);

//2.satır
$pdf->SetY(68);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('30-34 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim7,1,0,'C',1);
$pdf->Cell(46,6,$verim25,1,0,'C',1);
$pdf->Cell(46,6,$otuz,1,0,'C',1);

//3.satır
$pdf->SetY(74);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('35-39 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim8,1,0,'C',1);
$pdf->Cell(46,6,$verim26,1,0,'C',1);
$pdf->Cell(46,6,$otuzbes,1,0,'C',1);

//4.satır
$pdf->SetY(80);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('40-44 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim9,1,0,'C',1);
$pdf->Cell(46,6,$verim27,1,0,'C',1);
$pdf->Cell(46,6,$kirk,1,0,'C',1);


//5.satır
$pdf->SetY(86);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('45-49 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim10,1,0,'C',1);
$pdf->Cell(46,6,$verim28,1,0,'C',1);
$pdf->Cell(46,6,$kirkbes,1,0,'C',1);

//1.satır
$pdf->SetY(92);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('50-54 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim11,1,0,'C',1);
$pdf->Cell(46,6,$verim29,1,0,'C',1);
$pdf->Cell(46,6,$elli,1,0,'C',1);

//2.satır
$pdf->SetY(98);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('55-59 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim12,1,0,'C',1);
$pdf->Cell(46,6,$verim30,1,0,'C',1);
$pdf->Cell(46,6,$ellibes,1,0,'C',1);

//3.satır
$pdf->SetY(104);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('60-64 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim13,1,0,'C',1);
$pdf->Cell(46,6,$verim31,1,0,'C',1);
$pdf->Cell(46,6,$atmis,1,0,'C',1);

//4.satır
$pdf->SetY(110);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('65-69 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim14,1,0,'C',1);
$pdf->Cell(46,6,$verim32,1,0,'C',1);
$pdf->Cell(46,6,$atmisbes,1,0,'C',1);


//5.satır
$pdf->SetY(116);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('70-74 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim15,1,0,'C',1);
$pdf->Cell(46,6,$verim33,1,0,'C',1);
$pdf->Cell(46,6,$yetmis,1,0,'C',1);

//1.satır
$pdf->SetY(122);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('75-79 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim16,1,0,'C',1);
$pdf->Cell(46,6,$verim34,1,0,'C',1);
$pdf->Cell(46,6,$yetmisbes,1,0,'C',1);

//2.satır
$pdf->SetY(128);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('80-84 YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim17,1,0,'C',1);
$pdf->Cell(46,6,$verim35,1,0,'C',1);
$pdf->Cell(46,6,$seksen,1,0,'C',1);

//3.satır
$pdf->SetY(134);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('85- + YAŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim18,1,0,'C',1);
$pdf->Cell(46,6,$verim36,1,0,'C',1);
$pdf->Cell(46,6,$seksenbes,1,0,'C',1);

//yaş grubu toplam
$pdf->SetY(140);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('TOPLAM'),1,0,'C','L',1);
$pdf->Cell(46,6,$ygkt,1,0,'C',1);
$pdf->Cell(46,6,$yget,1,0,'C',1);
$pdf->Cell(46,6,$ygt,1,0,'C',1);

//Çizgi
$pdf->Rect(14,148,187,50);

$pdf->SetY(149);
$pdf->SetX(15);
$pdf->Cell(185,6,trsuz('NÜFUSUN MEDENİ HALİNE GÖRE DAĞILIMI'),1,0,'C',1);


$pdf->SetY(155);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('MEDENİ HALİ'),1,0,'C','L',1);
$pdf->Cell(46,6,trsuz('KADIN'),1,0,'C',1);
$pdf->Cell(46,6,trsuz('ERKEK'),1,0,'C',1);
$pdf->Cell(46,6,trsuz('TOPLAM'),1,0,'C',1);
//$pdf->RotatedText(91,36,trsuz('1 yaş'),0);

//1.satır
$pdf->SetY(161);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('ÇOCUK'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim37,1,0,'C',1);
$pdf->Cell(46,6,$verim42,1,0,'C',1);
$pdf->Cell(46,6,$cocuk,1,0,'C',1);

//2.satır
$pdf->SetY(167);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('BEKAR'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim38,1,0,'C',1);
$pdf->Cell(46,6,$verim43,1,0,'C',1);
$pdf->Cell(46,6,$bekar,1,0,'C',1);

//3.satır
$pdf->SetY(173);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('EVLİ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim39,1,0,'C',1);
$pdf->Cell(46,6,$verim44,1,0,'C',1);
$pdf->Cell(46,6,$evli,1,0,'C',1);

//4.satır
$pdf->SetY(179);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('BOŞANMIŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim40,1,0,'C',1);
$pdf->Cell(46,6,$verim45,1,0,'C',1);
$pdf->Cell(46,6,$bosanmis,1,0,'C',1);


//5.satır
$pdf->SetY(185);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('EŞİ ÖLMÜŞ'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim41,1,0,'C',1);
$pdf->Cell(46,6,$verim46,1,0,'C',1);
$pdf->Cell(46,6,$esiolmus,1,0,'C',1);

//MEDENİ HAL TOPLAM
$pdf->SetY(191);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('TOPLAM'),1,0,'C','L',1);
$pdf->Cell(46,6,$mhkt,1,0,'C',1);
$pdf->Cell(46,6,$mhet,1,0,'C',1);
$pdf->Cell(46,6,$mht,1,0,'C',1);

//Çizgi
$pdf->Rect(14,199,187,62);

$pdf->SetY(200);
$pdf->SetX(15);
$pdf->Cell(185,6,trsuz('NÜFUSUN ÖĞRENİM DURUMUNA GÖRE DAĞILIMI'),1,0,'C',1);


$pdf->SetY(206);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('ÖĞRENİM DURUMU'),1,0,'C','L',1);
$pdf->Cell(46,6,trsuz('KADIN'),1,0,'C',1);
$pdf->Cell(46,6,trsuz('ERKEK'),1,0,'C',1);
$pdf->Cell(46,6,trsuz('TOPLAM'),1,0,'C',1);
//$pdf->RotatedText(91,36,trsuz('1 yaş'),0);

//1.satır
$pdf->SetY(212);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('OKUL ÇAĞINDA DEĞİL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim47,1,0,'C',1);
$pdf->Cell(46,6,$verim54,1,0,'C',1);
$pdf->Cell(46,6,$ocd,1,0,'C',1);

//2.satır
$pdf->SetY(218);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('OKUR YAZAR DEĞİL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim48,1,0,'C',1);
$pdf->Cell(46,6,$verim55,1,0,'C',1);
$pdf->Cell(46,6,$oyd,1,0,'C',1);

//3.satır
$pdf->SetY(224);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('OKUR YAZAR'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim49,1,0,'C',1);
$pdf->Cell(46,6,$verim56,1,0,'C',1);
$pdf->Cell(46,6,$oy,1,0,'C',1);

//4.satır
$pdf->SetY(230);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('İLKOKUL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim50,1,0,'C',1);
$pdf->Cell(46,6,$verim57,1,0,'C',1);
$pdf->Cell(46,6,$ilk,1,0,'C',1);


//5.satır
$pdf->SetY(236);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('ORTAOKUL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim51,1,0,'C',1);
$pdf->Cell(46,6,$verim58,1,0,'C',1);
$pdf->Cell(46,6,$orta,1,0,'C',1);

//4.satır
$pdf->SetY(242);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('LİSE'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim52,1,0,'C',1);
$pdf->Cell(46,6,$verim59,1,0,'C',1);
$pdf->Cell(46,6,$lise,1,0,'C',1);


//5.satır
$pdf->SetY(248);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('YÜKSEKOKUL'),1,0,'C','L',1);
$pdf->Cell(46,6,$verim53,1,0,'C',1);
$pdf->Cell(46,6,$verim60,1,0,'C',1);
$pdf->Cell(46,6,$yo,1,0,'C',1);

//ÖĞRENİM DURUMU TOPLAM
$pdf->SetY(254);
$pdf->SetX(15);
$pdf->Cell(47,6,trsuz('TOPLAM'),1,0,'C','L',1);
$pdf->Cell(46,6,$odkt,1,0,'C',1);
$pdf->Cell(46,6,$odet,1,0,'C',1);
$pdf->Cell(46,6,$odt,1,0,'C',1);

$pdf->SetFont('Arial','',10);

$pdf->SetY(264);
$pdf->SetX(15);
$pdf->Cell(50,4,trsuz('Formu Düzenleyen'),0,0,'C',1);
$pdf->SetY(264);
$pdf->SetX(135);
$pdf->Cell(50,4,'Formu Onaylayan',0,0,'C',1);
$pdf->SetY(268);
$pdf->SetX(15);
//$pdf->Cell(30,4,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,4,'',0,0,'C',1);

$pdf->SetY(268);
$pdf->SetX(135);
//$pdf->Cell(30,4,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,4,'',0,0,'C',1);

$pdf->SetY(272);
$pdf->SetX(15);
//$pdf->Cell(30,4,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,4,'',0,0,'C',1);

$pdf->SetY(272);
$pdf->SetX(135);
//$pdf->Cell(30,4,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,4,'',0,0,'C',1);
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

?>
