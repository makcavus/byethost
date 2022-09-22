<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript" src="toplama.js" type="text/javascript">

</script>	
<script type="text/JavaScript">
<!--
function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 
</script>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
//<body onload="JavaScript:timedRefresh(100000);">
</script>
<script>
function goBack() {
    window.history.back();
	}
</script>
</head>

<body>
<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Silme Onayı</title>
</head>

<body bgcolor="#000000">
<?php 
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include('connect.php');
$email=$vemail;
$ileti=$viletiid;
//echo $ileti;
$ileticonnect= mysql_query("select * from bizeulasin where(iltiid='$ileti')");
while($donguileti=mysql_fetch_array($ileticonnect)){
$silinecekid=$donguileti["iltiid"];
$silinecektarih=$donguileti["tarih"];
$itarihorg=substr($silinecektarih,0,10);
$iyil=substr($itarihorg,0,4);
$iay=substr($itarihorg,5,2);
$igun=substr($itarihorg,8,2);
$silinecektarihn=$igun.'.'.$iay.'.'.$iyil;
$silinecekad=$donguileti["adsoyad"];
$silinecekileti=$donguileti["dusunceniz"];
$silinecekctarih=$donguileti["cevaptarihi"];
$tarihorg=substr($silinecekctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$silinecekctarihn=$gun.'.'.$ay.'.'.$yil;
$silinecekcevap=$donguileti["cevap"];
//echo $silinecekid;
echo '<br>';

echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';

$tarih='Tarih:';

$adi='Gönderenin Adı Soyadı:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$iletisi="İletisi:";

$vtarih='Cevap Tarihi:';

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";
echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($tarih).'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($adi).'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($iletisi).'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($vtarih).'</font></td>';

echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($vercevap).'</font></td>';

echo '</tr>';

echo '<tr>';

echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecektarihn.'</font></th>';

echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="left"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecekad.'</font></th>';

echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="left"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecekileti.'</font></th>';

echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecekctarihn.'</font></th>';

echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="left"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecekcevap.'</font></th>';

//echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecek.'</font></th>';

//echo '<th bordercolor="black" border="1" bgcolor="yellow" colspan="6" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$silinecek.'</font></th>';

echo '</tr>';


echo $_GET["CTarih"];
echo $_GET["Cevap"];

echo '<tr>';

echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="30"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">'.trsuz("Silme Onayı").'</font></th>';

echo '</tr>';
echo '<tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="30">';
echo '<label><font size="2px" style="color:red" face="tahoma">'.trsuz("Bu Kaydı Silmek İstediğinize Emin misiniz?").'</font></label>';
echo '<br>';
echo '<a href="ilekle.php" tabindex="1" title="hayir" onClick="goBack();"><img src="images/hayir.png"></a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="iletisil.php?iltiid='.$viletiid.'" tabindex="2" title="evet" ><img src="images/evet.png"></a>';
echo '</th></tr></table>';
}
?>
</body>
</html>
</body>
</html>
