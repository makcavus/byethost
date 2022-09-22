<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #000000;

}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #0000FF;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style1 {font-family: Verdana;
font-size:10px;
}
.style2 {font-family:Verdana;
font-size: 11px;
}
.style3 {font-family:Verdana;
font-size: 13px;
color:#FF0000;
}
.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold;
}
.style5 {font-family:Verdana;
font-size: 13px;
color:#000000; }
-->
</style>
<script type="text/javascript" src="jquery-latest.pack.js"></script>
<script type="text/javascript">
        <!--
        function doBlink() {
        var b = document.all.tags("BLINK")
        for ( i=0; i < b.length; i++)b[i].style.visibility = (b[i].style.visibility
        == "" )? "hidden" : "" }
        function startBlink() {
        if (document.all)setInterval("doBlink()",1600)}
        window.onload = startBlink;
        //-->
        </script>

</head>

<body>
<div align="center">
<?php

function metin_bol($metin,$baslangic,$uzunluk,$yaziid)
{
//$sayfa=$_SERVER['PHP_SELF'];
$devam="";
$harfsayi=strlen(trim($metin));
$metin=substr($metin,$baslangic,$uzunluk);
$dizi=explode(' ',$metin);
array_pop($dizi);
$metin=implode(' ',$dizi);
$metin=trim($metin);
$sonsayi=strlen($metin);
if($harfsayi>$sonsayi)
{

$devam='...<br><a href="yazilar.php?yaziid='.$yaziid.'"><font color="blue"><b><i>...devamı</i></b></font></a>';
}
$metin="$metin $devam";
return $metin;
}

include('connect.php');
$sorgum="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya from duyuru order by yaziid desc";
$basla=mysql_query($sorgum);
$ksay=mysql_num_rows($basla);
echo'
<table border="1" bordercolor="#000000" align="center" cellpadding="10" cellspacing="0" width="97%">';
for($i=0; $i<$ksay; $i++)
{

    $sonucum=mysql_fetch_array($basla); 
	$cumle=$sonucum['icerik'];
$yaziid=$sonucum['yaziid'];  
$bilgisi= $sonucum['bilgi'];
    if($i%1==0) //yan yana kaç resim istiyorsan 2 yarine o rakami yaz
	
    {
        echo'<tr align="left" bordercolor="#000000">';
    }
$cumle=str_replace("\n","<br />",$cumle);  
if(strlen($cumle)>300)
{
$bol=metin_bol($cumle,0,300,$yaziid);
$alo=$bol;

}else{
if($sonucum['dosya']!=NULL){
$link='<a href="Foto/'.$sonucum['dosya'].'">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue" style="font-weight:bold">'.$bilgisi.'</font></a>';
}else{
$link="";
}
$alo=$cumle.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link ;
}
echo '<td width="20%" align="left" class="style5" bordercolor="red" bgcolor=#ffff99>Tarih :<font color="red" style="font-weight:bold">'.$sonucum['tarih1'].'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue"><b>'.$sonucum['konu'].'</b></font><hr>'.$alo;

if($i%2==1) //burayida yan yana kaç resim istiyorsan onun  1 eksigine esitle yani 3 sira için $i%3==2 gibi
    {
        echo'</tr>';
    }
}
echo'
</table>';  

//echo metin_bol($cumle,0,150,$yazino).'<br>';
//echo $sonucum['icerik'].'<hr>';

@mysql_close($dbh);

?>
</div>
</body>
</html>
