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
require('sumocak.php');
// create a blank image
$baslik=$ocakad;
$baslikfont=3 ;
$graphname=$_GET["selectyil"];
$boslukleft=(785-(($baslikfont+3)*strlen("$baslik")))/2;
$bosluktop=(630+(5*strlen("$graphname")))/2;
$yataygrid=6 ;
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

$Veri[0]     = $verim18;
$Veri[1]     = $verim17;
$Veri[2]     = $verim16;
$Veri[3]     = $verim15;
$Veri[4]     = $verim14;
$Veri[5]     = $verim13;
$Veri[6]     = $verim12;
$Veri[7]     = $verim11;
$Veri[8]     = $verim10;
$Veri[9]     = $verim9;
$Veri[10]    = $verim8;
$Veri[11]    = $verim7;
$Veri[12]     = $verim6;
$Veri[13]     = $verim5;
$Veri[14]     = $verim4;
$Veri[15]     = $verim3;
$Veri[16]     = $verim2;
$Veri[17]     = $verim1;
$VeriKova = array_values($Veri); // Veri dizisinin bire bir kopyasi
sort($VeriKova);
$Min = $VeriKova[0];
$Max = $VeriKova[17];
$Top = array_sum($Veri);
$Veri1[0]     = $verim36;
$Veri1[1]     = $verim35;
$Veri1[2]     = $verim34;
$Veri1[3]     = $verim33;
$Veri1[4]     = $verim32;
$Veri1[5]     = $verim31;
$Veri1[6]     = $verim30;
$Veri1[7]     = $verim29;
$Veri1[8]     = $verim28;
$Veri1[9]     = $verim27;
$Veri1[10]    = $verim26;
$Veri1[11]    = $verim25;
$Veri1[12]     = $verim24;
$Veri1[13]     = $verim23;
$Veri1[14]     = $verim22;
$Veri1[15]     = $verim21;
$Veri1[16]     = $verim20;
$Veri1[17]     = $verim19;
$VeriKova1 = array_values($Veri1); // Veri dizisinin bire bir kopyasi
sort($VeriKova1);
$Min1 = $VeriKova1[0];
$Max1 = $VeriKova1[17];
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
$Sutun = (630-($topm*3.2))/18;         // S�tunlarin cizilecegi alani 12 parcaya bol
$GrafikAlani = round($sagm-($topm*2.2)); // Grafigin toplam yuksekligi
$Birim = $GrafikAlani/$MaxTemp;     //S�tunlar icin 1 birimin px degeri
for($i=0; $i<18; $i++)
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
$Sutun1 = (630-($topm*3.2))/18;         // S�tunlarin cizilecegi alani 12 parcaya bol
$GrafikAlani1 = round($sagm-($topm*2.2)); // Grafigin toplam yuksekligi
$Birim1 = $GrafikAlani1/$MaxTemp;     //S�tunlar icin 1 birimin px degeri
for($i=0; $i<18; $i++)
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
imagestring($image,50,380,540,"0-4",$kirmizi);
imagestring($image,50,380,510,"5-9",$kirmizi);
imagestring($image,50,370,480,"10-14",$kirmizi);
imagestring($image,50,370,450,"15-19",$kirmizi);
imagestring($image,50,370,420,"20-24",$kirmizi);
imagestring($image,50,370,390,"25-29",$kirmizi);
imagestring($image,50,370,360,"30-34",$kirmizi);
imagestring($image,50,370,330,"35-39",$kirmizi);
imagestring($image,50,370,300,"40-44",$kirmizi);
imagestring($image,50,370,270,"45-49",$kirmizi);
imagestring($image,50,370,240,"50-54",$kirmizi);
imagestring($image,50,370,210,"55-59",$kirmizi);
imagestring($image,50,370,180,"60-64",$kirmizi);
imagestring($image,50,370,150,"65-69",$kirmizi);
imagestring($image,50,370,120,"70-74",$kirmizi);
imagestring($image,50,370,90,"75-79",$kirmizi);
imagestring($image,50,370,60,"80-84",$kirmizi);
imagestring($image,50,370,30,"85- +",$kirmizi);
imagestring($image,50,20,570,trsil("KADIN NÜFUSU:"),$kirmizi);
imagestring($image,50,580,570,trsil("ERKEK NÜFUSU:"),$kirmizi);
imagestring($image,50,300,570,trsil("TOPLAM NÜFUS:"),$kirmizi);
imagestring($image,50,160,600,trsil("$baslik"),$kirmizi);
//imagestring($image,5,500,600,"$graphname",$kirmizi);
imagestring($image,50,150,570,"$Top",$Kirmiz);
imagestring($image,50,710,570,"$Top1",$Mavi);
imagestring($image,50,430,570,"$GTop",$Yesil);
// output the picture
header("Content-type: image/png");
imagepng($image);
imagedestroy($image ); // res�m yokediliyor

?>
