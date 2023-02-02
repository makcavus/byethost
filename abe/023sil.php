<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
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
}
-->
</style>
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>

<body>
<?
include("con_023.php");
include('abealanlari.php');

$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$xaygelentam=iconv("UTF-8", "ISO-8859-9",$_GET['selectay']); 
$xaygelentarih=substr($xaygelentam,0,10); 
$xaygelentarihgun=substr($xaygelentarih,0,2);
$xaygelentarihay=substr($xaygelentarih,3,2);
$xaygelentarihyil=substr($xaygelentarih,6,4);
$aygelen=$xaygelentarihyil.'-'.$xaygelentarihay.'-'.$xaygelentarihgun;
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelen ;*/

$resultvyil = "delete from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')" ;
if(@mysql_query($resultvyil)){

echo '<label><font style="color:Red">'.trsuz($silindi).'</font></label><a href="#"  onclick="kontrol();">'.trsuz($geridon).'</a>';
}else{
echo trsuz($silinmedi);
}
@mysql_close($dbh);
?>

 </body>
</html>