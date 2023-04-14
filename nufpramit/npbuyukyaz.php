<?php
function trsil($q) { 
       $q = str_replace("ç","c",$q);
       $q = str_replace ("ç","c",$q); 
       $q = str_replace ("ð","g",$q); 
       $q = str_replace ("Ý","I",$q); 
       $q = str_replace ("ý","i",$q); 
       $q = str_replace ("þ","s",$q); 
       $q = str_replace ("ö","o",$q); 
       $q = str_replace ("ü","u",$q); 
       $q = str_replace ("Ü","U",$q); 
       $q = str_replace ("Ç","c",$q); 
       $q = str_replace ("İ","I",$q);
       $q = str_replace ("ı","i",$q); 
       //$q = str_replace (".","",$q); 
       $q = str_replace ("Ð","g",$q); 
       $q = str_replace ("Þ","S",$q); 
       $q = str_replace ("Ö","O",$q); 
       //$q = str_replace (" ","_",$q); 
       //$q = str_replace ("'","",$q); 
       //$q = str_replace ("/","",$q); 
       //$q = str_replace ("__","_",$q); 
       $q = str_replace ("Ã‡","C",$q);
       $q = str_replace ("Ã‡o","C",$q);
       $q = str_replace ("Ä?","G",$q);
       $q = str_replace ("Ä°","I",$q); 
       $q = str_replace ("Ä±","i",$q);
       $q = str_replace ("Ã–","O",$q);
       $q = str_replace ("Å?","S",$q);
       $q = str_replace ("Ãœ","U",$q);
       $q = str_replace ("Ã§","c",$q);
       $q = str_replace ("ÄŸ","g",$q);
       $q = str_replace ("Ä±","i",$q);
       $q = str_replace ("Ã¶","o",$q); 
       $q = str_replace ("ÅŸ","s",$q);
       $q = str_replace ("Ã¼","u",$q); 
       $q = str_replace ("&","ve",$q);
       $q = str_replace ("&","ve",$q); 
       //$q = str_replace ("'","",$q); 
       //$q = str_replace ("\n","",$q);
       //$q = str_replace (":","_",$q);
       //$q = str_replace ("?","_",$q);
       //$q = str_replace (" ","-",$q);
       //$q = str_replace ("!","_",$q); 
        return $q; 
       }
require('sumay.php');
//include 'npveri.php';
// create a blank image
$baslik=$ocakad;
$baslikfont=3 ;
$graphname=$_GET["selectyil"];
$boslukleft=(1620-(($baslikfont+3)*strlen("$baslik")))/2;
$bosluktop=(1080+(5*strlen("$graphname")))/2;
$yataygrid=17 ;
$leftm=(1620*(3/100))/2; //de�eri 12
$topm=(1080*(9.52381/100))/2;//de�eri 30
$sutungen=1080*4.762/100; //de�eri 30
$sagm=810;
$image = imagecreate(1620, 1080);
// fill the background color
$bg = imagecolorallocate($image, 255,255,255);
// choose a color for the polygon
$col_poly = imagecolorallocate($image, 255, 255, 255);
$col_poly1= imagecolorallocate($image, 255, 255, 255);
$col_poly2= imagecolorallocate($image, 255, 255, 255);
// draw the polygon
imagepolygon($image,
             array (
                    0, 950,
                    0, 0,
                    1620, 0,
                    1620,950
             ),
             4,
             $col_poly);
imagepolygon($image,
             array (
                    770, 0,
                    770, 950,
                    1620, 0,
                    1620,950
             ),
             4,
             $col_poly1);
imagepolygon($image,
             array (
                    850, 0,
                    850, 950,
                    770, 0,
                    670,680
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
$CAAM = (1080-($topm*3))/$yataygrid; // Cizgi Araligi Artis Miktari
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
$Sutun = (1080-($topm*3.2))/18;         // S�tunlarin cizilecegi alani 12 parcaya bol
$GrafikAlani = round($sagm-($topm*2.2)); // Grafigin toplam yuksekligi
$Birim = $GrafikAlani/$MaxTemp;     //S�tunlar icin 1 birimin px degeri
for($i=0; $i<18; $i++)
{
if($Veri[$i]==$Max) : $Renk = $Kirmiz;
elseif($Veri[$i]==$Min) : $Renk = $Yesil;
else : $Renk = $Mavi;
endif;
$x1 = 1.38*$leftm+($Sutun*$i);
$y1 = ($topm*1.33)+$GrafikAlani-($Birim*$Veri[$i]);
$x2 = $x1+$sutungen;
$y2 = 1230-$topm*9;
switch(strlen($Veri[$i]))
{
case "1" : $xcarpan = 13; break;
case "2" : $xcarpan = 21; break;
case "3" : $xcarpan = 33; break;
case "4" : $xcarpan = 50; break;
case "5" : $xcarpan = 59; break;
case "6" : $xcarpan = 69; break;
}
imagefilledRectangle($image, $y1, $x1, $y2, $x2, $Kirmiz);
imageRectangle($image, $y1, $x1, $y2, $x2, $Siyah);
imagestring($image,5,$y1-$xcarpan,$x1+20,number_format("$Veri[$i]",0,',','.'),$Siyah);
}
//--- End of Gunleri ve SUTUNLARI cizmeye basliyoruz -------------------------
//--- Aylari ve SUTUNLARI cizmeye basliyoruz --------------------------------
$Sutun1 = (1080-($topm*3.2))/18;         // S�tunlarin cizilecegi alani 12 parcaya bol
$GrafikAlani1 = round($sagm-($topm*2.2)); // Grafigin toplam yuksekligi
$Birim1 = $GrafikAlani1/$MaxTemp;     //S�tunlar icin 1 birimin px degeri
for($i=0; $i<18; $i++)
{
if($Veri1[$i]==$Max1) : $Renk = $Kirmiz;
elseif($Veri1[$i]==$Min1) : $Renk = $Yesil;
else : $Renk = $Mavi;
endif;
$x3 = 3.5*$leftm+($Sutun1*$i);
$y3 = ($topm*3.07)+$GrafikAlani1+($Birim1*$Veri1[$i]);
$x4 = $x3-$sutungen;
$y4 = 1315-$topm*9;
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
imagestring($image,5,$y3+$xcarpan1,$x3-35,number_format("$Veri1[$i]",0,',','.'),$Siyah);
}
//--- End of Gunleri ve SUTUNLARI cizmeye basliyoruz -------------------------
imagestring($image,50,800,915,"0-4",$Siyah);
imagestring($image,50,800,864,"5-9",$Siyah);
imagestring($image,50,790,813,"10-14",$Siyah);
imagestring($image,50,790,762,"15-19",$Siyah);
imagestring($image,50,790,711,"20-24",$Siyah);
imagestring($image,50,790,660,"25-29",$Siyah);
imagestring($image,50,790,609,"30-34",$Siyah);
imagestring($image,50,790,558,"35-39",$Siyah);
imagestring($image,50,790,507,"40-44",$Siyah);
imagestring($image,50,790,456,"45-49",$Siyah);
imagestring($image,50,790,405,"50-54",$Siyah);
imagestring($image,50,790,354,"55-59",$Siyah);
imagestring($image,50,790,303,"60-64",$Siyah);
imagestring($image,50,790,252,"65-69",$Siyah);
imagestring($image,50,790,201,"70-74",$Siyah);
imagestring($image,50,790,150,"75-79",$Siyah);
imagestring($image,50,790,99,"80-84",$Siyah);
imagestring($image,50,790,48,"85- +",$Siyah);
imagestring($image,50,20,960,trsil("KADIN NÜFUSU:"),$Siyah);
imagestring($image,50,1400,960,trsil("ERKEK NÜFUSU:"),$Siyah);
imagestring($image,50,720,960,trsil("TOPLAM NÜFUS:"),$Siyah);
imagestring($image,5,600,1020,trsil($baslik),$Siyah);
//imagestring($image,5,1000,1020,"$graphname",$Siyah);
imagestring($image,50,150,960,number_format($Top,0,',','.'),$Siyah);
imagestring($image,50,1530,960,number_format($Top1,0,',','.'),$Siyah);
imagestring($image,50,850,960,number_format($GTop,0,',','.'),$Siyah);
// output the picture
header("Content-type: image/png");
imagepng($image);
imagedestroy($image ); // res�m yokediliyor
?>
