<?

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfayý görüntüleme yetkiniz yoktur.";

}else{



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>

</head>



<body>

<?php

function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 



//mysql baglantisi

include("con_023.php");

echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png"></a>';

echo'<table class="cizgi" bordercolor="black" border="1" align="center" cellpadding="0" cellspacing="0" width="94%">';

echo '<tr>';

$sno=trsuz("Sýra No:");

$kod=trsuz("Kurum Adý:");

$dr=trsuz("Doktor Adý:");

$user=trsuz("Kullanýcý Adý:");

$sifre=trsuz("Þifresi:");



echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sno.'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$kod.'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$dr.'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$user.'</font></td>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';



echo '</tr>';  

//echo $_SESSION["uye"];
$kim=$_SESSION["uye"];
$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysql_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);

//echo $kod;

} 
if(substr($hamkod,-3,3)=="TSM"){
$resultuser = @mysql_query("select * from uyeler where(select left(uyekod,5)='$kod') order by uyekod asc");
}else if(substr($hamkod,-3,3)=="HSM"){
$resultuser = @mysql_query("select * from uyeler where(select left(uyekod,2)='$kodiki' and right(uyekod,3)='HSM' or left(uyekod,2)='$kodiki' and right(uyekod,3)='TSM') order by uyekod asc");
}
while($rowuser=mysql_fetch_array($resultuser)) {

$no=$rowuser['uyeno'];

$kurum=$rowuser['uyekod'];

$dr=$rowuser['uyekim'];

$user=$rowuser['uyead'];

$pass=$rowuser['uyesifre'];



  echo '<tr>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$no.'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($kurum).'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($dr).'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($user).'</font></td>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';



echo '</tr>';

  

}

echo '</table>';

echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png"></a>';

}

?>

</body>

</html>

