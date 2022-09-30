<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
require('fpdf.php');
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
//$ocakyazi=iconv("iso-8859-9", "utf-8", $_GET['selectoc']);

$resultvyil = @mysql_query("select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$duzad=$sonucum['v173'];
$onad=$sonucum['v176'];
$duzun=$sonucum['v174'];
$onun=$sonucum['v177'];
}


$verim1=$_GET['v1'];
$verim2=$_GET['v2'];
$verim3=$_GET['v3'];
$verim4=$_GET['v4'];
$verim5=$_GET['v5'];
$verim6=$_GET['v6'];
$verim7=$_GET['v7'];
$verim8=$_GET['v8'];
$verim9=$_GET['v9'];
$verim10=$_GET['v10'];
$verim11=$_GET['v11'];
$verim12=$_GET['v12'];
$verim13=$_GET['v13'];
$verim14=$_GET['v14'];
$verim15=$_GET['v15'];
$verim16=$_GET['v16'];
$verim17=$_GET['v17'];
$verim18=$_GET['v18'];
$verim19=$_GET['v19'];
$verim20=$_GET['v20'];
$verim21=$_GET['v21'];
$verim22=$_GET['v22'];
$verim23=$_GET['v23'];
$verim24=$_GET['v24'];
$verim25=$_GET['v25'];
$verim26=$_GET['v26'];
$verim27=$_GET['v27'];
$verim28=$_GET['v28'];
$verim29=$_GET['v29'];
$verim30=$_GET['v30'];
$verim31=$_GET['v31'];
$verim32=$_GET['v32'];
$verim33=$_GET['v33'];
$verim34=$_GET['v34'];
$verim35=$_GET['v35'];
$verim36=$_GET['v36'];
$verim37=$_GET['v37'];
$verim38=$_GET['v38'];
$verim39=$_GET['v39'];
$verim40=$_GET['v40'];
$verim41=$_GET['v41'];
$verim42=$_GET['v42'];
$verim43=$_GET['v43'];
$verim44=$_GET['v44'];
$verim45=$_GET['v45'];
$verim46=$_GET['v46'];
$verim47=$_GET['v47'];
$verim48=$_GET['v48'];
$verim49=$_GET['v49'];
$verim50=$_GET['v50'];
$verim51=$_GET['v51'];
$verim52=$_GET['v52'];
$verim53=$_GET['v53'];
$verim54=$_GET['v54'];
$verim55=$_GET['v55'];
$verim56=$_GET['v56'];
$verim57=$_GET['v57'];
$verim58=$_GET['v58'];
$verim59=$_GET['v59'];
$verim60=$_GET['v60'];
$verim61=$_GET['v61'];
$verim62=$_GET['v62'];
$verim63=$_GET['v63'];
$verim64=$_GET['v64'];
$verim65=$_GET['v65'];
$verim66=$_GET['v66'];
$verim67=$_GET['v67'];
$verim68=$_GET['v68'];
$verim69=$_GET['v69'];
$verim70=$_GET['v70'];
$verim71=$_GET['v71'];
$verim72=$_GET['v72'];
$verim73=$_GET['v73'];
$verim74=$_GET['v74'];
$verim75=$_GET['v75'];
$verim76=$_GET['v76'];
$verim77=$_GET['v77'];
$verim78=$_GET['v78'];
$verim79=$_GET['v79'];
$verim80=$_GET['v80'];
$verim81=$_GET['v81'];
$verim82=$_GET['v82'];
$verim83=$_GET['v83'];
$verim84=$_GET['v84'];
$verim85=$_GET['v85'];
$verim86=$_GET['v86'];
$verim87=$_GET['v87'];
$verim88=$_GET['v88'];
$verim89=$_GET['v89'];
$verim90=$_GET['v90'];
$verim91=$_GET['v91'];
$verim92=$_GET['v92'];
$verim93=$_GET['v93'];
$verim94=$_GET['v94'];
$verim95=$_GET['v95'];
$verim96=$_GET['v96'];
$verim97=$_GET['v97'];
$verim98=$_GET['v98'];
$verim99=$_GET['v99'];
$verim100=$_GET['v100'];
$verim101=$_GET['v101'];
$verim102=$_GET['v102'];
$verim103=$_GET['v103'];
$verim104=$_GET['v104'];
$verim105=$_GET['v105'];
$verim106=$_GET['v106'];
$verim107=$_GET['v107'];
$verim108=$_GET['v108'];
$verim109=$_GET['v109'];
$verim110=$_GET['v110'];
$verim111=$_GET['v111'];
$verim112=$_GET['v112'];
$verim113=$_GET['v113'];
$verim114=$_GET['v114'];
$verim115=$_GET['v115'];
$verim116=$_GET['v116'];
$verim117=$_GET['v117'];
$devirgebe=$_GET['v118'];
$verim119=$_GET['v119'];
$verim120=$_GET['v120'];
$verim121=$_GET['v121'];
$verim122=$_GET['v122'];
$verim123=$_GET['v123'];
$verim124=$_GET['v124'];
$verim125=$_GET['v125'];
$verim126=$_GET['v126'];
$devirbebek=$_GET['v127'];
$verim128=$_GET['v128'];
$verim129=$_GET['v129'];
$verim130=$_GET['v130'];
$verim131=$_GET['v131'];
$verim132=$_GET['v132'];
$verim133=$_GET['v133'];
$verim134=$_GET['v134'];
$verim135=$_GET['v135'];
$devirlohusa=$_GET['v136'];
$verim137=$_GET['v137'];
$verim138=$_GET['v138'];
$verim139=$_GET['v139'];
$verim140=$_GET['v140'];
$verim141=$_GET['v141'];
$verim142=$_GET['v142'];
$verim143=$_GET['v143'];
$devircocuk=$_GET['v144'];
$verim145=$_GET['v145'];
$verim146=$_GET['v146'];
$verim147=$_GET['v147'];
$verim148=$_GET['v148'];
$verim149=$_GET['v149'];
$verim150=$_GET['v150'];
$verim151=$_GET['v151'];
$verim152=$_GET['v152'];
$verim153=$_GET['v153'];
$verim154=$_GET['v154'];
$verim155=$_GET['v155'];
$verim156=$_GET['v156'];
$verim157=$_GET['v157'];
$verim158=$_GET['v158'];
$verim159=$_GET['v159'];
$verim160=$_GET['v160'];
$verim161=$_GET['v161'];
$verim162=$_GET['v162'];
$verim163=$_GET['v163'];
$verim164=$_GET['v164'];
$verim165=$_GET['v165'];
$verim166=$_GET['v166'];
$verim167=$_GET['v167'];
$verim168=$_GET['v168'];
$verim169=$_GET['v169'];
$verim170=$_GET['v170'];
$verim171=$_GET['v171'];
$verim172=$_GET['v172'];
/*$verim173=$_GET['v173'];
$verim174=$_GET['v174'];
$verim175=$_GET['v175'];
$verim176=$_GET['v176'];
$verim177=$_GET['v177'];
$verim178=$_GET['v178'];*/

$toplam1=$verim4+$verim5;
$toplam2=$verim7+$verim8+$verim9+$verim10+$verim11;
$toplame=$verim24+$verim26+$verim28+$verim30+$verim32+$verim34+$verim36+$verim38+$verim40+$verim42+$verim44;
$toplamk=$verim25+$verim27+$verim29+$verim31+$verim33+$verim35+$verim37+$verim39+$verim41+$verim43+$verim45;
$toplames=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53+$verim54+$verim55+$verim56+$verim57;
$toplamhs=$verim58+$verim59+$verim60+$verim61+$verim62+$verim63+$verim64+$verim65+$verim66+$verim67+$verim68+$verim69;
$toplamhes=$verim70+$verim71+$verim72+$verim73+$verim74+$verim75+$verim76+$verim77+$verim78+$verim79+$verim80+$verim81;
$toplamsm=$verim82+$verim83+$verim84+$verim85+$verim86+$verim87+$verim88+$verim89+$verim90+$verim91+$verim92+$verim93;
$toplameb=$verim94+$verim95+$verim96+$verim97+$verim98+$verim99+$verim100+$verim101+$verim102+$verim103+$verim104+$verim105;
$toplamd=$verim106+$verim107+$verim108+$verim109+$verim110+$verim111+$verim112+$verim113+$verim114+$verim115+$verim116+$verim117;
$aysonugebemevcudu=$devirgebe+$verim119+$verim120-$verim121-$verim122-$verim123-$verim124;
$aysonubebekmevcudu=$devirbebek+$verim128+$verim129+$verim130-$verim131-$verim132-$verim133;
$aysonulohusamevcudu=$devirlohusa+$verim137+$verim138+$verim139-$verim140-$verim141-$verim142;
$aysonucocukmevcudu=$devircocuk+$verim145+$verim146+$verim147-$verim148-$verim149-$verim150;
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
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
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
$pdf->AddPage('P','A4');
$pdf->AddFont('arial','','arial_tr.php');
$pdf->SetFont('Arial','',9);
//Asagi dogru yazilar
$pdf->RotatedText(18,64,A,0);
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
$pdf->Rect(125,78,5,30);
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
$pdf->SetY(10);
$pdf->SetX(15);
$pdf->Cell(20,6,'T.C.',0,0,'C',1);

$pdf->SetY(10);
$pdf->SetX(50);
$pdf->Cell(120,6,trsuz('BİRİNCİ BASAMAK SAĞLIK KURUMU'),0,0,'C',1);

$pdf->SetY(16);
$pdf->SetX(15);
$pdf->Cell(20,6,trsuz('Sağlık Bakanlığı'),0,0,'C',1);

$pdf->SetY(16);
$pdf->SetX(50);
$pdf->Cell(120,6,trsuz('AYLIK ÇALIŞMA BİLDİRİMİ'),0,0,'C',1);


$pdf->SetY(22);
$pdf->SetX(15);
$pdf->Cell(20,6,'Form No:023',0,0,'C',1);

$pdf->SetY(28);
$pdf->SetX(15);
$pdf->Cell(10,6,trsuz('İL:'),0,0,'R',1);
$pdf->MultiCell(40,6,$ilinadi,0,'L');

$pdf->SetY(28);
$pdf->SetX(70);
$pdf->Cell(20,6,'KURUM:',0,0,'R',1);
$pdf->MultiCell(80,6,$ocgelen,0,'L');

$pdf->SetY(28);
$pdf->SetX(160);
$pdf->Cell(20,6,'YIL:',0,0,'R',1);
$pdf->MultiCell(20,6,$yilgelen,0,'L');

$pdf->SetY(34);
$pdf->SetX(15);
$pdf->Cell(10,6,trsuz('İLÇE:'),0,0,'R',1);
$pdf->MultiCell(40,6,$ilceninadi,0,'L');

$pdf->SetY(34);
$pdf->SetX(160);
$pdf->Cell(20,6,'AY:',0,0,'R',1);
$pdf->MultiCell(20,6,'TOPLAM',0,'L');

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

$pdf->Cell(15,6,trsuz('Yas'),1,0,'C',1);
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
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Ölen'),1,0,'L',1);
$pdf->Cell(20,6,$verim131,1,0,'C',1);

$pdf->SetY(46);
$pdf->SetX(15);
$pdf->Cell(5,6,'f',1,0,'C',1);
$pdf->Cell(55,6,trsuz('Bu Ay İçinde Ölen'),1,0,'L',1);
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
$pdf->Cell(30,6,trsuz('Özelliği'),1,0,'L',1);
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
$pdf->Cell(30,6,trsuz('İthal Aşı'),1,0,'C',1);
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
$pdf->Cell(50,6,$duzad,1,0,'C',1);

$pdf->SetY(252);
$pdf->SetX(120);
$pdf->Cell(30,6,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,6,$onad,1,0,'C',1);

$pdf->SetY(258);
$pdf->SetX(15);
$pdf->Cell(30,6,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,6,$duzun,1,0,'C',1);

$pdf->SetY(258);
$pdf->SetX(120);
$pdf->Cell(30,6,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,6,$onun,1,0,'C',1);

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
