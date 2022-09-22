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
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
function ucwords_tr($deger)
         {
         $deger = split(" ",trim($deger));
         $deger_tr = ""; 

         for($x=0; $x < count($deger); $x++)
             {
             $deger_bas = substr($deger[$x],0,1);
             $deger_son = substr($deger[$x],1);
             $deger_bas = toUpperCase($deger_bas); 

             $deger_tr .= $deger_bas.$deger_son." ";
             } 

         $deger_tr = trim($deger_tr); 

         return $deger_tr;
         } 

$ilseckrgelen=$_GET['krselectilno'];
$ilceseckrgelen=$_GET['krilcegirgelen'];

$kurumgelenx=toUpperCase($_GET['kurumgir']);
$kurumgelen=trsuz($kurumgelenx);

$degkurumgelenx=toUpperCase($_GET['kurumgirgelen']);
$degkurumgelen=trsuz($degkurumgelenx);


$asmgelenx=$_GET['asmgir'];
$asmgeleny=trsuz($asmgelenx);
$asmgelen=ucwords_tr($asmgeleny);

$drgelenx=$_GET['tbbgir'];
$drgelen=trsuz($drgelenx);

$asegelenx=$_GET['asegir'];
$asegelen=trsuz($asegelenx);


$aseungelenx=$_GET['aseungir'];
$aseungelen=trsuz($aseungelenx);


$resultvyil = "delete from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelenx')";
if(@mysql_query($resultvyil)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">Kayıt Silindi...<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)">Geri</a></font></label>';
echo '</th></table>';

/*<a href="#"  onclick="kontrolil();">Geri Dön</a>'*/
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo "Kayıt silinemedi.";
echo '</th></table>';

}
@mysql_close($dbh);
?>

 </body>
</html>