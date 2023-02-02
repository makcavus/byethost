<?php
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('con_023.php');


$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
$gelentarilk=$_GET['selecttarilk'];
$gelentarson=$_GET['selecttarson'];
$ilkgelentarih=substr($gelentarilk,0,10); 
$ilkgelentarihgun=substr($ilkgelentarih,0,2);
$ilkgelentarihay=substr($ilkgelentarih,3,2);
$ilkgelentarihyil=substr($ilkgelentarih,6,4);
$aygelenx=$ilkgelentarihyil.'-'.$ilkgelentarihay.'-'.$ilkgelentarihgun;
/*Önceki 2.Yıl Başlama*/
$oncekiyililk=$ilkgelentarihyil-1;
$oncekitarihilk=$oncekiyililk.'-'.$ilkgelentarihay.'-'.$ilkgelentarihgun;
$oncekitarihilkal=$ilkgelentarihgun.'.'.$ilkgelentarihay.'.'.$oncekiyililk;

/*...*/
$songelentarih=substr($gelentarson,0,10); 
$songelentarihgun=substr($songelentarih,0,2);
$songelentarihay=substr($songelentarih,3,2);
$songelentarihyil=substr($songelentarih,6,4);
$aygeleny=$songelentarihyil.'-'.$songelentarihay.'-'.$songelentarihgun;
/*Önceki 2.Yıl Bitiş*/
$oncekiyilson=$songelentarihyil-1;
$oncekitarihson=$oncekiyilson.'-'.$songelentarihay.'-'.$songelentarihgun;
$oncekitarihsonal=$songelentarihgun.'.'.$songelentarihay.'.'.$oncekiyilson;

/*...*/
/*...*/
//echo $oncekiyililk;
//echo $oncekiyilson;
/*
echo $oncekitarihilk;
echo '<br>';
echo $oncekitarihilkal;
echo '<br>';
echo $oncekitarihson;
echo '<br>';
echo $oncekitarihsonal;
*/
/*Bittiiiiiiiiiiii*/
//echo $aygelenx;
//echo $aygeleny;

if($ilcegelen==iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz")){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}elseif($ocgelen==iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}elseif($ilcegelen!=iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz") and $ocgelen!=iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}else{
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}
$socsorgu=mysql_query($vtsec);
while($resultTotal = mysql_fetch_array($socsorgu))
{
//$tarih[] = $resultTotal[4];
/*$A090[] = $resultTotal[5];
$A095[] = $resultTotal[6];
$R110[] = $resultTotal[7];
$R115[] = $resultTotal[8];
$K520[] = $resultTotal[9];
$K525[] = $resultTotal[10];*/
$TOPLAM[]=$resultTotal["TOPLAM"];
//$R11T[]=$resultTotal["R11T"];
//$K52T[]=$resultTotal["K52T"];
//$tamtarih[]=$resultTotal[28];

}

$socsorgu=mysql_query($vtsecx);
while($resultTotal = mysql_fetch_array($socsorgu))
{
$tarih[] = $resultTotal[4];
$A090[] = $resultTotal[5];
$A095[] = $resultTotal[6];
$R110[] = $resultTotal[7];
$R115[] = $resultTotal[8];
$K520[] = $resultTotal[9];
$K525[] = $resultTotal[10];
/*$A09T[]=$resultTotal[25];
$R11T[]=$resultTotal[26];
$K52T[]=$resultTotal[27];*/
$tamtarih[]=$resultTotal[28];
$tamtarihx[]=substr($resultTotal[28],0,5);
}



if($ilcegelen==iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz")){
$vtseciki="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";
$vtsecxiki="select * from veri where ilidi='$ilgelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";

}elseif($ocgelen==iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtseciki="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";
$vtsecxiki="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";

}elseif($ilcegelen!=iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz") and $ocgelen!=iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtseciki="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";
$vtsecxiki="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";

}else{
$vtseciki="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";
$vtsecxiki="select * from veri where ilidi='$ilgelen' and (vayadi between '$oncekitarihilk' and '$oncekitarihson') group by vayadi order by vayadi asc";

}
$socsorguiki=mysql_query($vtseciki);
while($resultTotaliki = mysql_fetch_array($socsorguiki))
{
//$tarih[] = $resultTotal[4];
/*$A090[] = $resultTotal[5];
$A095[] = $resultTotal[6];
$R110[] = $resultTotal[7];
$R115[] = $resultTotal[8];
$K520[] = $resultTotal[9];
$K525[] = $resultTotal[10];*/
$TOPLAMIKI[]=$resultTotaliki["TOPLAM"];
//$R11T[]=$resultTotal["R11T"];
//$K52T[]=$resultTotal["K52T"];
//$tamtarih[]=$resultTotal[28];

}

$socsorguiki=mysql_query($vtsecxiki);
while($resultTotaliki = mysql_fetch_array($socsorguiki))
{
$tarihiki[] = $resultTotaliki[4];
$A090iki[] = $resultTotaliki[5];
$A095iki[] = $resultTotaliki[6];
$R110iki[] = $resultTotaliki[7];
$R115iki[] = $resultTotaliki[8];
$K520iki[] = $resultTotaliki[9];
$K525iki[] = $resultTotaliki[10];
/*$A09T[]=$resultTotal[25];
$R11T[]=$resultTotal[26];
$K52T[]=$resultTotal[27];*/
$tamtarihiki[]=$resultTotaliki[28];

}





$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
if($ilcegelen==iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz")){
$neresi=$ilinadi;
}elseif($ocgelen==iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$neresi=$ilinadi.'-'.$ilceninadi;
}elseif($ilcegelen!=iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz") and $ocgelen!=iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$neresi=$ilinadi.'-'.$ilceninadi.'-'.$ocgelen;
}else{
$neresi=$ilinadi;
}

?>
