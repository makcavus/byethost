<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
</head>
<body>
<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://roshanbh.com.np
?>

<?php
 $uye=iconv("utf-8","iso-8859-9",$_GET['uyekodum']);
//echo $uye;
include("con_023.php");
if($uye==""){
$sec="Kurum Kodu Seçiniz";
?>
<table bordercolor="white" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<th bordercolor="white" bgcolor="yellow" align="center" colspan="7">  
<label for="selectilce" class="style3" ><font color="red" size="3" style="font-family:Arial, Helvetica, sans-serif">Kurum Kodunu Seçiniz</font></label></th>
</table>
<?php
}
/*$link = mysql_connect('localhost', 'root', 'malika'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('frm023');*/
$querykodx="SELECT uyeno,uyead,uyekim,uyesifre,uyekod FROM uyeler WHERE(uyekod='$uye')";
$resultkodx=mysql_query($querykodx);
$say3=mysql_num_rows($resultkodx);
//echo $say3;
if($uye!="" and $say3==0){?>

<form method="GET" name="form4" action="ilkaydet.php">
<table bordercolor="white" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th bordercolor="white" bgcolor="yellow" align="center" colspan="7">  
<label for="selectilce" class="style3" ><font color="red" size="3" style="font-family:Arial, Helvetica, sans-serif">Bu Kullanıcıyı Kaydedebilirsiniz</font></label></th>
</tr>
<tr>
<input type="hidden" name="kulkay" id="kulkay" value="<? echo $uye; ?>">
<th bordercolor="white" bgcolor="yellow" align="left"> 
<label class="style3" >Doktor Adı:</label></th>
<th bordercolor="white" bgcolor="yellow" align="left"><input type="text" name="doktoradi" id="doktoradi" /></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<label class="style3" >Kullanıcı Adı:</label></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<input type="text" name="kuladi" id="kuladi"></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<label class="style3" >Kullanıcı Şifresi:</label></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<input type="text" name="kulsifre" id="kulsifre"></th>
<th bordercolor="white" bgcolor="yellow" align="left">  
<a href=# onclick="uyekay();" onsubmit="javascript:reloadPage(this)"><img src="images/kaydet.png"></a>
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png" /></a></th> 
</tr>
<tr>
<th bordercolor="white" bgcolor="yellow" align="left" colspan="7">  
<div id="uyealan"></div></th>
</tr>
</table>
</form>

<? }else{
while($rowkodx=mysql_fetch_array($resultkodx)) { 
$drno=$rowkodx['uyeno'];
$dr=$rowkodx['uyead'];
$drkod=$rowkodx['uyekod'];

//echo $dr;

//echo $drkod;
?>
<form method="GET" name="form3" action="ilkaydet.php">

<table bordercolor="white" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th bordercolor="white" bgcolor="yellow" align="center" colspan="16">  
<label for="selectilce" class="style3" ><font color="red" size="3" style="font-family:Arial, Helvetica, sans-serif">Bu Kullanıcıyı Düzenleyebilirsiniz</font></label></th>
</tr>
<tr>
<input type="hidden" name="kulkay" id="kulkay" value="<? echo $uye; ?>">
<th bordercolor="white" bgcolor="yellow" colspan="1" align="left">  

<th bordercolor="white" bgcolor="yellow" colspan="3" align="left"><input type="hidden" name="uyegir" id="uyegir" value="<?=$rowkodx['uyekim']?>"/></th>
<th bordercolor="white" bgcolor="yellow"  colspan="2" align="left">

<th bordercolor="white" bgcolor="yellow"  colspan="2" align="left"><input type="hidden" name="kuladigir"  id="kuladigir" value="<?=$rowkodx['uyead']?>" /></th>
<th bordercolor="white" bgcolor="yellow"  colspan="2" align="left">

<th bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<input type="hidden" name="sifregir" id="sifregir" value="<?=$rowkodx['uyesifre']?>"></th>

<input type="hidden" name="kodgir" id="kodgir" value="<?=$rowkodx['uyekod']?>">
</tr>
<tr>
<th bordercolor="white" bgcolor="yellow"  colspan="16"><input name="submit3" type="button" value="Kullanıcı Düzenle" onclick="kontroluye();" onsubmit="javascript:reloadPage(this)" /></th>
</tr>
<tr>  
<th bordercolor="white" bgcolor="yellow" align="center" colspan="16">
<div style="font-family:Arial,Helvetica,sans-serif","font-size:14px,border-style:none" id="uyegosterdiv"></div></th>
</tr>
</table>
</form>
<?
}
}
?>

</body>
</html>