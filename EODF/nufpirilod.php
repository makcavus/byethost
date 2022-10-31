<?php
function trsil($q) { 
$q = str_replace("Ç","C",$q);
$q = str_replace ("ç","c",$q); 
$q = str_replace ("ğ","g",$q); 
$q = str_replace ("Ğ","G",$q); 
$q = str_replace ("İ","I",$q); 
$q = str_replace ("ı","i",$q); 
$q = str_replace ("ş","s",$q); 
$q = str_replace ("Ş","S",$q); 
$q = str_replace ("ö","o",$q); 
$q = str_replace ("Ö","O",$q); 
$q = str_replace ("u","u",$q); 
$q = str_replace ("Ü","U",$q); 
$q = str_replace (".",".",$q); 
$q = str_replace (" "," ",$q); 
$q = str_replace ("'","",$q); 
$q = str_replace ("/","",$q); 
$q = str_replace ("__","_",$q); 
 return $q; 
}  


?>
<?php
require('sum.php');
// create a blank image
if($_GET['selectyil']=="TÜM YILLAR TOPLAMI"){
       $graphname="TÜM YILLARDA";
}else{
       
       $graphname=$_GET["selectyil"].' YILINDA';
}
$baslik=$_GET['ilinadi'].' İLİ '.$graphname.trsil(' EVLENENLERİN ÖĞRENİM DURUMUNA GÖRE DAĞILIMI');
$baslikfont=3 ;
$graphname=$_GET["selectyil"];
$boslukleft=(785-(($baslikfont+3)*strlen("$baslik")))/2;
$bosluktop=(630+(5*strlen("$graphname")))/2;
$yataygrid=4 ;
$leftm=(785*(3/100))/2; //de�eri 12
$topm=(630*(9.52381/100))/2;//de�eri 30
$sutungen=630*4.762/100; //de�eri 30
$sagm=360;
$image = imagecreate(785, 630);
// fill the background color
$bg = imagecolorallocate($image, 0,0,0);
// choose a color for the polygon
$col_poly = imagecolorallocate($image, 155, 255, 255);
$col_poly1= imagecolorallocate($image, 155, 255, 255);
$col_poly2= imagecolorallocate($image, 155, 255, 255);
// draw the polygon
imagepolygon($image,
             array (
                    10, 560,
                    10, 10,
                    775, 10,
                    775,560
             ),
             4,
             $col_poly);
             imagepolygon($image,
             array (
                    358, 560,
                    358,10,
                    358,10,
                    358,10
                    
             ),
             4,
             $col_poly1);
             imagepolygon($image,
             array (
                    429, 560,
                    429,10,
                    429,10,
                    429,10
                    
             ),
             4,
             $col_poly2);
             /*
imagepolygon($image,
             array (
                    357, 10,
                    357,560,
                    775, 10,
                    775,560
             ),
             2,
             $col_poly1);
imagepolygon($image,
             array (
                    429, 10,
                    429, 560,
                    360, 10,
                    270,280
             ),
             2,
             $col_poly2);
*/
$Veri[0]     = $verim28;
$Veri[1]     = $verim27;
$Veri[2]     = $verim26;
$Veri[3]     = $verim25;
$Veri[4]     = $verim24;

$VeriKova = array_values($Veri); // Veri dizisinin bire bir kopyasi
sort($VeriKova);
$Min = $VeriKova[0];
$Max = $VeriKova[4];
$Top = array_sum($Veri);
$Veri1[0]     = $verim58;
$Veri1[1]     = $verim57;
$Veri1[2]     = $verim56;
$Veri1[3]     = $verim55;
$Veri1[4]     = $verim54;

$VeriKova1 = array_values($Veri1); // Veri dizisinin bire bir kopyasi
sort($VeriKova1);
$Min1 = $VeriKova1[0];
$Max1 = $VeriKova1[4];
$Top1 = array_sum($Veri1);
$GTop=$Top+$Top1;
$Siyah= imagecolorAllocate($image, 0, 0, 0);
$Beyaz= imagecolorallocate($image, 255, 255, 255);
$Mavi= imagecolorallocate($image, 100, 100, 255);
$Kirmiz= imagecolorAllocate($image, 255, 0, 0);
$Yesil= imagecolorAllocate($image, 0, 150, 0);
$Gri=imagecolorAllocate($image, 200, 200, 200);
$kirmizi=imagecolorAllocate($image,255,255,255);
$sari=imagecolorAllocate($image,255,255,0);
//Gridleri �iziyoruz
$CAAM = (605-($topm*3))/$yataygrid; // Cizgi Araligi Artis Miktari
$Cizgi[0] = $topm*1.5; // En ustteki Grid icin top margin degeri
$MaxTemp = Max($Max, $Max1); // Maximum degeri kova degiskene attik lazim olacak
if(strlen($MaxTemp)>=3):
$CizgiSayim = strrev(substr(strrev("$MaxTemp"), 0, 2));
$WhileGo = 10;
else:
$CizgiSayim = strrev(substr(strrev("$MaxTemp"), 0, 1));
$WhileGo = 1;
endif;
while(intval($CizgiSayim)<$WhileGo)
{
$CizgiSayim++;
$MaxTemp++;
}
$CizgiSayi[0] = $MaxTemp;
for($i=0; $i<=$yataygrid; $i++)
{
if(empty($CizgiSayi[$i]))
{
$CizgiSayi[$i] = round($MaxTemp*(($yataygrid-$i)/$yataygrid));
$Cizgi[$i] = $Cizgi[$i-1]+$CAAM;
}
switch(strlen($CizgiSayi[$i]))
{
case "1" ;  $spacer = "   "; break;
case "2" ; $spacer = "  "; break;
case "3" ; $spacer = " "; break;
case "4" ; $spacer = ""; break;
case "5" ; $spacer = ""; break;
case "6" ; $spacer = ""; break;
}
}
//--- Aylari ve SUTUNLARI cizmeye basliyoruz --------------------------------
$Sutun = (630-($topm*3.2))/5;         // S�tunlarin cizilecegi alani 12 parcaya bol
$GrafikAlani = round($sagm-($topm*2.2)); // Grafigin toplam yuksekligi
$Birim = $GrafikAlani/$MaxTemp;     //S�tunlar icin 1 birimin px degeri
for($i=0; $i<5; $i++)
{
if($Veri[$i]==$Max) : $Renk = $Kirmiz;
elseif($Veri[$i]==$Min) : $Renk = $Yesil;
else : $Renk = $Mavi;
endif;
$x1 = 2.1*$leftm+($Sutun*$i);
$y1 = ($topm*2.03)+$GrafikAlani-($Birim*$Veri[$i]);
$x2 = $x1+$sutungen;
$y2 = 627-$topm*9;
switch(strlen($Veri[$i]))
{
case "1" : $xcarpan = 10; break;
case "2" : $xcarpan = 18; break;
case "3" : $xcarpan = 25; break;
case "4" : $xcarpan = 32; break;
case "5" : $xcarpan = 39; break;
case "6" : $xcarpan = 47; break;
}
imagefilledRectangle($image, $y1, $x1, $y2, $x2, $Kirmiz);
imageRectangle($image, $y1, $x1, $y2, $x2, $Siyah);
imagestring($image,3,$y1-$xcarpan,$x1+9,"$Veri[$i]",$sari);
}
//--- End of Gunleri ve SUTUNLARI cizmeye basliyoruz -------------------------
//--- Aylari ve SUTUNLARI cizmeye basliyoruz --------------------------------
$Sutun1 = (630-($topm*3.2))/5;         // S�tunlarin cizilecegi alani 12 parcaya bol
$GrafikAlani1 = round($sagm-($topm*2.2)); // Grafigin toplam yuksekligi
$Birim1 = $GrafikAlani1/$MaxTemp;     //S�tunlar icin 1 birimin px degeri
for($i=0; $i<5; $i++)
{
if($Veri1[$i]==$Max1) : $Renk = $Kirmiz;
elseif($Veri1[$i]==$Min1) : $Renk = $Yesil;
else : $Renk = $Mavi;
endif;
$x3 = 4.67*$leftm+($Sutun1*$i);
$y3 = ($topm*4.63)+$GrafikAlani1+($Birim1*$Veri1[$i]);
$x4 = $x3-$sutungen;
$y4 = 701-$topm*9;
switch(strlen($Veri1[$i]))
{
case "1" : $xcarpan1 = 6; break;
case "2" : $xcarpan1 = 6; break;
case "3" : $xcarpan1 = 6; break;
case "4" : $xcarpan1 = 6; break;
case "5" : $xcarpan1 = 6; break;
case "6" : $xcarpan1 = 6; break;
}
imagefilledRectangle($image, $y3, $x3, $y4, $x4, $Mavi);
imageRectangle($image, $y3, $x3, $y4, $x4, $Siyah);
imagestring($image,3,$y3+$xcarpan1,$x3-20,"$Veri1[$i]",$sari);
}
//--- End of Gunleri ve SUTUNLARI cizmeye basliyoruz -------------------------
imagestring($image,50,370,458,"O.Y.D.",$kirmizi);
imagestring($image,50,370,354,"O.YAZ.",$kirmizi);
imagestring($image,50,370,246,"ILK-OR",$kirmizi);
imagestring($image,50,370,138,"LISE",$kirmizi);
imagestring($image,50,370,32,"Y.O.",$kirmizi);

imagestring($image,50,20,570,trsil("KADIN NÜFUSU:"),$kirmizi);
imagestring($image,50,580,570,trsil("ERKEK NÜFUSU:"),$kirmizi);
imagestring($image,50,300,570,trsil("TOPLAM NÜFUS:"),$kirmizi);
imagestring($image,5,80,600,trsil("$baslik"),$kirmizi);
//imagestring($image,5,500,600,"$graphname",$kirmizi);
imagestring($image,50,150,570,"$Top",$Kirmiz);
imagestring($image,50,710,570,"$Top1",$Mavi);
imagestring($image,50,430,570,"$GTop",$Yesil);
// output the picture
header("Content-type: image/png");
imagepng($image);
imagedestroy($image ); // res�m yokediliyor

?>
