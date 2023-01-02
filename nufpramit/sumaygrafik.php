<?php
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('con_023.php');


$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 

if($ilcegelen==iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz")){
$vtsec="select sum(v1) as dbt1,sum(v5) as dbt2,sum(v9) as dbt3 from veri where ilidi='$ilgelen' and vyiladi='$yilgelen' group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen'  and vyiladi='$yilgelen' and vayadi='$aygelen' group by vayadi order by vayadi asc";

}elseif($ocgelen==iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtsec="select sum(v1) as dbt1,sum(v5) as dbt2,sum(v9) as dbt3 from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen' group by vayadi order by vayadi asc";

}elseif($ilcegelen!=iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz") and $ocgelen!=iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
$vtsec="select sum(v1) as dbt1,sum(v5) as dbt2,sum(v9) as dbt3 from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen'";

}else{
$vtsec="select sum(v1) as dbt1,sum(v5) as dbt2,sum(v9) as dbt3 from veri where ilidi='$ilgelen' and vyiladi='$yilgelen' group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen' group by vayadi order by vayadi asc";

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
$dbt1[]=$resultTotal["dbt1"];
$dbt2[]=$resultTotal["dbt2"];
$dbt3[]=$resultTotal["dbt3"];
//$tamtarih[]=$resultTotal[28];

}

$socsorgu=mysql_query($vtsecx);
while($resultTotal = mysql_fetch_array($socsorgu))
{

$ahb = $resultTotal[2];
$yili = $resultTotal[3];
$ayi = $resultTotal[4];
/*$R115[] = $resultTotal[8];
$K520[] = $resultTotal[9];
$K525[] = $resultTotal[10];
$A09T[]=$resultTotal[25];
$R11T[]=$resultTotal[26];
$K52T[]=$resultTotal[27];
$tamtarih[]=$resultTotal[28];*/

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
