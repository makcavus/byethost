<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;
border-style: none;
text-align: center; 
    font-size : 13px;
    color : #000000;
border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;	
	}
.style3 {font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;}
.style4 {color: #000000}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;
	border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;
border-top-style: solid;
border-right-style: solid;
border-bottom-style: solid;
border-left-style: solid;
border-top-color: #0066CC;
border-right-color: #0066CC;
border-left-color: #0066CC;
border-bottom-color: #0066CC;
}
.style6 {
font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;	
	border-style:none;
	
}
-->
</style>
<link href="Style.css" rel="stylesheet" type="text/css"/>
<link href="arkakara.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white"><div align="center" style="font-family:Arial, Helvetica, sans-serif","font-size:14px,border-style:none" id="sonuc">
<?php
$yeniyil=$_GET['yeniyil'];
include('con_023.php');
include('piramitalanlari.php');

//echo $yeniyil;
$resultvyil= @mysql_query("select * from yil where(yiladi='$yeniyil')");
while($yilsonucum=mysql_fetch_array($resultvyil)){
$yiladi=$yilsonucum['yiladi'];
//echo $yiladi;
}
$say=mysql_num_rows($resultvyil);
//echo $say;
if($say==0){
$kayit="INSERT INTO yil(yiladi) VALUES('$yeniyil')";

if(mysql_query($kayit)){

echo '<label align="center">'.$kayiteklendi.'</label><a href="frm023kayit.php" onClick="kontrol();">Geri</a>';
}
}else{
echo '<label><font style="color:Red">'.$yilkaydedilemedi.'</font>';
//echo mysql_error();
echo '<label><font style="color:Red">'.$yiloncekaydedilmis.'</font></label><meta http-equiv=refresh content="100; url=frm023kayit.php" /><a href="frm023kayit.php" _fcksavedurl="frm023kayit.php" onClick="kontrol();">'.$geridon.'</a>';
}
?>
</div></th>
</body>

</html>