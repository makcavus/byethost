<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
require('fpdf.php');
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
//$ocakyazi=iconv("iso-8859-9", "utf-8", $_GET['selectoc']);

$resultvyil = @mysql_query("select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
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
$verim173=$_GET['v173'];
$verim174=$_GET['v174'];
$verim175=$_GET['v175'];
$verim176=$_GET['v176'];
$verim177=$_GET['v177'];
$verim178=$_GET['v178'];

$toplamdbt1=$verim1+$verim2+$verim3+$verim4;
$toplamdbt2=$verim5+$verim6+$verim7+$verim8;
$toplamdbt3=$verim9+$verim10+$verim11+$verim12;
$toplamdbtR=$verim13+$verim14+$verim15;
$toplamdbt=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8+$verim9+$verim10+$verim11+$verim12+$verim13+$verim14+$verim15;
$toplamhib=$verim16+$verim17+$verim18;
$toplamkpa1=$verim19+$verim20+$verim21;
$toplamkpa2=$verim22+$verim23+$verim24;
$toplamkpa3=$verim25+$verim26+$verim27;
$toplamkpar=$verim28+$verim29;
$toplamkpa=$verim19+$verim20+$verim21+$verim22+$verim23+$verim24+$verim25+$verim26+$verim27+$verim28+$verim29;
$toplamopv1=$verim30+$verim31+$verim32+$verim33+$verim34+$verim35;
$toplamopv2=$verim36+$verim37+$verim38+$verim39+$verim40+$verim41;
$toplamopv3=$verim42+$verim43+$verim44+$verim45+$verim46+$verim47;
$toplamopvr=$verim48+$verim49+$verim50+$verim51+$verim52;
$toplamopv=$verim30+$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38+$verim39+$verim40+$verim41+$verim42+$verim43+$verim44+$verim45+$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52;
$toplamkkk1=$verim53+$verim54+$verim55+$verim56+$verim57;
$toplamkkkr=$verim58+$verim59+$verim60+$verim61+$verim62;
$toplamkkk=$verim53+$verim54+$verim55+$verim56+$verim57+$verim58+$verim59+$verim60+$verim61+$verim62;
$toplamppd=$verim63+$verim64+$verim65+$verim66+$verim67+$verim68;
$toplambcg=$verim69+$verim70+$verim71+$verim72+$verim73;
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
$toplamkizcik=$verim94+$verim95+$verim96;
$toplamokul=$verim97+$verim98+$verim99+$verim100+$verim101;
$toplamdigertd=$verim102+$verim103+$verim104+$verim105+$verim106+$verim107;
$toplamgebe=$verim108+$verim109+$verim110+$verim111+$verim112;
$toplamgebedegil=$verim113+$verim114+$verim115+$verim116+$verim117;
$toplamgebetet1=$verim108+$verim113;
$toplamgebetet2=$verim109+$verim114;
$toplamgebetet3=$verim110+$verim115;
$toplamgebetet4=$verim111+$verim116;
$toplamgebetet5=$verim112+$verim117;
$toplamgebetettop=$verim108+$verim113+$verim109+$verim114+$verim110+$verim115+$verim111+$verim116+$verim112+$verim117;
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
$atarih=mysql_query("SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($duztarih=mysql_fetch_array($atarih)){
$dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysql_query("SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
while($ontarih=mysql_fetch_array($btarih)){
$otarih=$ontarih['yeni_tarih'];
}
if($ocgelen==trsuz("Önce İlçeyi Seçiniz")){
$kurum=trsuz("İL TOPLAMI");
}elseif($ocgelen==trsuz("Aile Hekimini Seçiniz")){
$kurum=trsuz("İLÇE TOPLAMI");
}else{
$kurum=$ocgelen;
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
$pdf->Cell(120,6,trsuz('AŞI SONUÇLARI ÇİZELGESİ  (FORM 013)'),0,0,'C',1);

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
$pdf->Cell(35,6,TRSUZ('AİLE HEKİMİ KODU:'),0,0,'L',1);
$pdf->MultiCell(70,6,$kurum,0,'L');



$pdf->SetY(6);
$pdf->SetX(160);
$pdf->Cell(20,6,'YIL:',0,0,'R',1);
$pdf->MultiCell(20,6,$yilgelen,0,'L');



$pdf->SetY(12);
$pdf->SetX(160);
$pdf->Cell(20,6,'AY:',0,0,'R',1);
$pdf->MultiCell(20,6,$aygelen,0,'L');

$pdf->SetY(18);
$pdf->SetX(130);
$pdf->Cell(50,6,TRSUZ('YILLIK 0-11 AY BEBEK NÜFUSU:'),0,0,'R',1);
$pdf->MultiCell(20,6,$verim119,0,'L');
//Çizgi
$pdf->Rect(14,23,187,40.5);

$pdf->SetY(24);
$pdf->SetX(15);
$pdf->Cell(35,6,'',1,0,'R',1);
$pdf->Cell(150,6,trsuz('YAŞ GRUPLARINA GÖRE YAPILAN DOZ SAYISI'),1,0,'C',1);


$pdf->SetY(30);
$pdf->SetX(15);
$pdf->Cell(35,10,trsuz(''),1,0,'C','L',1);
$pdf->RotatedText(30,37,trsuz('AŞI'),0);
$pdf->Cell(10,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(50,35,trsuz('Uygu-'),0);
$pdf->RotatedText(51,39,trsuz('lama'),0);
$pdf->Cell(26,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(68,34,trsuz('0 yaş'),0);
$pdf->RotatedText(66,39,trsuz('(0-11 ay)'),0);
$pdf->Cell(19,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(91,36,trsuz('1 yaş'),0);
$pdf->Cell(19,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(109,36,trsuz('2-4 yaş'),0);
$pdf->Cell(19,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(128,36,trsuz('5-9 yaş'),0);
$pdf->Cell(19,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(144,36,trsuz('10-14 yaş'),0);
$pdf->Cell(19,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(164,34,trsuz('15 yaş ve'),0);
$pdf->RotatedText(168,39,trsuz('üzeri'),0);
$pdf->Cell(19,10,trsuz(''),1,0,'C',1);
$pdf->RotatedText(183,36,trsuz('TOPLAM'),0);
//1.satır
$pdf->SetY(40);
$pdf->SetX(15);
$pdf->Cell(35,20,trsuz(''),1,0,'C','L',1);
$pdf->RotatedText(22,48,trsuz('DaBT-İPA-Hib'),0);
$pdf->RotatedText(30,53,trsuz('AŞISI'),0);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('II'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('III'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('R'),1,0,'C',1);
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
$pdf->Cell(45,4.5,trsuz('TOPLAM DaBT-İPA-Hib'),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('DaBT-İPA AŞISI'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz(''),1,0,'C',1);
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
$pdf->Cell(35,20,trsuz(''),1,0,'C','L',1);
$pdf->RotatedText(24,78,trsuz('KONJUGE'),0);
$pdf->RotatedText(22,83,trsuz('PNÖMOKOK'),0);
$pdf->RotatedText(27,88,trsuz('AŞISI'),0);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(10,5,trsuz('II'),1,0,'C',1);
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
$pdf->Cell(10,5,trsuz('III'),1,0,'C',1);
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
$pdf->Cell(10,5,trsuz('R'),1,0,'C',1);
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
$pdf->Cell(45,5,trsuz('TOPLAM K.P.A.'),1,0,'C',1);
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
$pdf->Cell(35,20,trsuz(''),1,0,'C','L',1);
$pdf->RotatedText(22,107,trsuz('ORAL POLİO'),0);
$pdf->RotatedText(28,112,trsuz('AŞISI'),0);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('II'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('III'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('R'),1,0,'C',1);
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
$pdf->Cell(45,4.5,trsuz('TOPLAM ORAL POLİO'),1,0,'C',1);
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
$pdf->Cell(35,10,trsuz('K.K.K.AŞISI'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('R'),1,0,'C',1);
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
$pdf->Cell(45,4.5,trsuz('TOPLAM K.K.K.'),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('PPD'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz(''),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('BCG AŞISI'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(8,4.5,trsuz('Bİ'),1,0,'C','L',1);
$pdf->Cell(8,4.5,trsuz('BD'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz('TOPLAM'),1,0,'C','L',1);
$pdf->SetFont('Arial','',10);
//Çizgi
$pdf->Rect(14,159.5,187,20);

//1.satır
$pdf->SetY(160.5);
$pdf->SetX(15);
$pdf->Cell(35,15,trsuz(''),1,0,'C','L',1);
$pdf->RotatedText(22,166,trsuz('HEPATİT-B'),0);
$pdf->RotatedText(27,171,trsuz('AŞISI'),0);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('II'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('III'),1,0,'C',1);
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
$pdf->Cell(45,4.5,trsuz('TOPLAM HEPATİT-B'),1,0,'C',1);
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
$pdf->Cell(35,9,trsuz('HEPATİT-A AŞISI'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz('I'),1,0,'C',1);
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
$pdf->Cell(10,4.5,trsuz('R'),1,0,'C',1);
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
$pdf->Cell(45,4.5,trsuz('TOPLAM HEPATİT-A'),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('SU ÇİÇEĞİ'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz(''),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('KIZAMIKÇIK AŞISI'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz(''),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('OKUL Td AŞISI'),1,0,'C','L',1);
$pdf->Cell(10,4.5,trsuz(''),1,0,'C',1);
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
$pdf->Cell(35,4.5,trsuz('DİĞER Td'),1,0,'C',1);
$pdf->Cell(10,4.5,trsuz(''),1,0,'C',1);
$pdf->Cell(26,4.5,$verim102,1,0,'C',1);
$pdf->Cell(19,4.5,$verim103,1,0,'C',1);
$pdf->Cell(19,4.5,$verim104,1,0,'C',1);
$pdf->Cell(19,4.5,$verim105,1,0,'C',1);
$pdf->Cell(19,4.5,$verim106,1,0,'C',1);
$pdf->Cell(19,4.5,$verim107,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamhep3,1,0,'C',1);
//2.satır
$pdf->SetY(225);
$pdf->SetX(15);
$pdf->Cell(35,4.5,trsuz(''),1,0,'C',1);
$pdf->SetFillColor(100,100,100);
$pdf->Cell(10,4.5,'',1,0,'C',1);
$pdf->Cell(64,4.5,trsuz('GEBE'),1,0,'C',1);
$pdf->Cell(57,4.5,trsuz('GEBE DEĞİL'),1,0,'C',1);
$pdf->Cell(19,4.5,'',1,0,'C',1);

//1.satır
$pdf->SetFillColor(255,255,255);
$pdf->SetY(229.5);
$pdf->SetX(15);
$pdf->Cell(35,25,trsuz(''),1,0,'C','L',1);
$pdf->RotatedText(18,239,trsuz('15-49 YAŞ KADIN'),0);
$pdf->RotatedText(26,244,trsuz('Td AŞISI'),0);
$pdf->Cell(10,4.5,trsuz('Td1'),1,0,'C',1);
$pdf->Cell(64,4.5,$verim108,1,0,'C',1);
$pdf->Cell(57,4.5,$verim113,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet1,1,0,'C',1);
//2.satır
$pdf->SetY(234);
$pdf->SetX(50);
$pdf->Cell(10,4.5,trsuz('Td2'),1,0,'C',1);
$pdf->Cell(64,4.5,$verim109,1,0,'C',1);
$pdf->Cell(57,4.5,$verim114,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet2,1,0,'C',1);
//3.satır
$pdf->SetY(238.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,trsuz('Td3'),1,0,'C',1);
$pdf->Cell(64,4.5,$verim110,1,0,'C',1);
$pdf->Cell(57,4.5,$verim115,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet3,1,0,'C',1);
//4.satır
$pdf->SetY(243);
$pdf->SetX(50);
$pdf->Cell(10,4.5,trsuz('Td4'),1,0,'C',1);
$pdf->Cell(64,4.5,$verim111,1,0,'C',1);
$pdf->Cell(57,4.5,$verim116,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet4,1,0,'C',1);

//5.satır
$pdf->SetY(247.5);
$pdf->SetX(50);
$pdf->Cell(10,4.5,trsuz('Td5'),1,0,'C',1);
$pdf->Cell(64,4.5,$verim112,1,0,'C',1);
$pdf->Cell(57,4.5,$verim117,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetet5,1,0,'C',1);
//6.satır
$pdf->SetY(252);
$pdf->SetX(15);
$pdf->Cell(45,4.5,trsuz('TOPLAM Td'),1,0,'C',1);
$pdf->Cell(64,4.5,$toplamgebe,1,0,'C',1);
$pdf->Cell(57,4.5,$toplamgebedegil,1,0,'C',1);
$pdf->Cell(19,4.5,$toplamgebetettop,1,0,'C',1);

// D�zenleyen onaylayan
$pdf->SetY(258);
$pdf->SetX(15);
$pdf->SetFont('Arial','',8);
$pdf->Cell(185,3,trsuz('Hepatit-B aşısının 0-11 ay grubuna 1.doz uygulaması kendi bebeğiniz olup bölge dışında(hastane,resmi diğer kurumlar)yapıldı ise BD sütununa'),0,0,'L',1);
$pdf->SetY(261);
$pdf->SetX(15);
$pdf->Cell(185,3,trsuz('kendi bebeğiniz olup kendi kurumunuzda yapıldı ise Bİ (bölge içi) sütununa yazılacaktır.BD ve Bİ sütunları toplamı T (toplam) sütununda yazılacak.'),0,0,'L',1);
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
$pdf->Cell(50,4,$duzad,0,0,'C',1);

$pdf->SetY(268);
$pdf->SetX(135);
//$pdf->Cell(30,4,trsuz('Adı Soyadı:'),1,0,'R',1);
$pdf->Cell(50,4,$onad,0,0,'C',1);

$pdf->SetY(272);
$pdf->SetX(15);
//$pdf->Cell(30,4,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,4,$duzun,0,0,'C',1);

$pdf->SetY(272);
$pdf->SetX(135);
//$pdf->Cell(30,4,trsuz('Ünvanı:'),1,0,'R',1);
$pdf->Cell(50,4,$onun,0,0,'C',1);
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
