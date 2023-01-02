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

</head>

<body>
<div align="center">
<?php
include('connect.php');
$sorgum="select date_format(tarih, '%d-%m-%Y')  AS tarih1,konu,icerik from duyuru order by tarih desc";
$basla=mysql_query($sorgum);
while($sonucum=mysql_fetch_array($basla)){
echo 'tarih : '; echo $sonucum['tarih1'].'&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;'; echo iconv("UTF-8", "ISO-8859-9",$sonucum['konu']).'<hr>';
/*function metin_bol($metin,$baslangic,$uzunluk,$yaziid)
{
$sayfa=$_SERVER['PHP_SELF'];
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
$devam='...<br><a href="'.$sayfa.'?yazi='.$yaziid.'">devami</a>';
}
$metin="$metin $devam";
return $metin;
}
echo'
<table border="1" bordercolor="#000000" align="left" cellpadding="10" cellspacing="0" width="54%">';
$cumle=$sonucum['icerik'];
echo metin_bol($cumle,0,25,1);*/
echo iconv("UTF-8", "ISO-8859-9",$sonucum['icerik']).'<hr>';
echo'
</table>';
}
@mysql_close($dbh);
?>
</div>
</body>
</html>

