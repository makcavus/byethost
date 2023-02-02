<?php
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('con_023.php');


$ilgelen= $_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$ocakyazi=$_GET['selectoc'];
$donem=$_GET['donem'];
$secim=$_GET['sec'];
if($donem=="ilk"){
$aygelenx=$yilgelen.'-01-01';
$aygeleny=$yilgelen.'-03-31';
}else if($donem=="ikinci"){
$aygelenx=$yilgelen.'-04-01';
$aygeleny=$yilgelen.'-06-30';
}else if($donem=="ucuncu"){
$aygelenx=$yilgelen.'-07-01';
$aygeleny=$yilgelen.'-09-30';
}else if($donem=="son"){
$aygelenx=$yilgelen.'-10-01';
$aygeleny=$yilgelen.'-12-31';
}
/*echo $ilgelen;
echo $ilcegelen;
echo $ocgelen;
echo $aygelenx;
echo $aygeleny;
echo $donem;
echo $secim;*/
if($yilgelen==""){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where(ilidi='$ilgelen') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where(ilidi='$ilgelen') group by vayadi order by vayadi asc";
}elseif($secim=='ilsec' and $donem=='ilk'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilcesec' and $donem=='ilk'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='aheksec' and $donem=='ilk'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilsec' and $donem=='ikinci'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilcesec' and $donem=='ikinci'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='aheksec' and $donem=='ikinci'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilsec' and $donem=='ucuncu'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilcesec' and $donem=='ucuncu'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='aheksec' and $donem=='ucuncu'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilsec' and $donem=='son'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='ilcesec' and $donem=='son'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}elseif($secim=='aheksec' and $donem=='son'){
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$aygelenx' and '$aygeleny') group by vayadi order by vayadi asc";
}else{
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen') group by vayadi order by vayadi asc";
$vtsecx="select * from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen') group by vayadi order by vayadi asc";
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

}
$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}

$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
if($secim=='ilsec' and $secim!='ilcesec' and $secim!='aheksec'){
$neresi=$ilinadi;
}elseif($secim!='ilsec' and $secim=='ilcesec' and $secim!='aheksec'){
$neresi=$ilinadi.'-'.$ilceninadi;
}elseif($secim!='ilsec' and $secim!='ilcesec' and $secim=='aheksec'){
$neresi=$ilinadi.'-'.$ilceninadi.'-'.$ocgelen;
}else{
$neresi=$ilinadi;
}

?>
