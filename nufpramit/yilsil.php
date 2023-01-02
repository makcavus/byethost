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
<title>Yıl Girişi</title>
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
<table>
<th class="style6" width="100%" align="center" bordercolor="white" bgcolor="white"><div style="font-family:Arial, Helvetica, sans-serif","font-size:14px,border-style:none" id="sonuc">
<form name="yil" id="yil" action="yilksil.php" method="get">
<?php
//mysql baglantisi
include("con_023.php");
include('piramitalanlari.php');
$resultay = @mysql_query("select distinct yiladi from yil order by yiladi desc");
?>
<?php
//mysql baglantisi
$resultyil = @mysql_query("select distinct yiladi from yil order by yiladi desc");
?>
<?php
//mysql baglantisi
include('con_023.php');
$resultay = @mysql_query("select distinct yiladi from yil order by yiladi desc");
?>
<label for="selectay" class="style3">YIL:</label>

<select name="yeniyil" id="yeniyil">
<option value="<?php echo date("Y"); ?>"><?php echo date("Y");?></option>
<?php
while ($katay=mysql_fetch_assoc($resultay) ) {
echo '<option>'.$katay['yiladi'].'</option>';
}
@mysql_close($dbh);   
?>
</select>
<input name="submit" id="submit" type="submit"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($yilsil) ; ?>"/>
</form>
</div></th>
</table>

</body>
</html>


