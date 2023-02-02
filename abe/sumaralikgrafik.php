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

$songelentarih=substr($gelentarson,0,10); 
$songelentarihgun=substr($songelentarih,0,2);
$songelentarihay=substr($songelentarih,3,2);
$songelentarihyil=substr($songelentarih,6,4);
$aygeleny=$songelentarihyil.'-'.$songelentarihay.'-'.$songelentarihgun;
//echo $aygelenx;
//echo $aygeleny;

if($ilcegelen==iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz")){
$vtsec="select sum(v21) as A09T,sum(v22) as R11T,sum(v23) as K52T from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}elseif($ocgelen==iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtsec="select sum(v21) as A09T,sum(v22) as R11T,sum(v23) as K52T from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}elseif($ilcegelen!=iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz") and $ocgelen!=iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtsec="select sum(v21) as A09T,sum(v22) as R11T,sum(v23) as K52T from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";

}else{
$vtsec="select sum(v21) as A09T,sum(v22) as R11T,sum(v23) as K52T from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
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
$A09T[]=$resultTotal["A09T"];
$R11T[]=$resultTotal["R11T"];
$K52T[]=$resultTotal["K52T"];
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
