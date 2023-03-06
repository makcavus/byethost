<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kayıt Değiştirildi</title>
 <link href="Style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include("con_023.php");
include("../frm013alanlari.php");
$ilsecgelen=$_GET['selectilno'];
$ilcegelenx=toUpperCase($_GET['ilcegirgelen']);
$ilcegelen=trsuz($ilcegelenx);

$ilcedeggelenx=toUpperCase($_GET['ilcegir']);
$ilcedeggelen=trsuz($ilcedeggelenx);

//echo $ilno;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $ilcegelenx;
//echo $ilcedeggelen;
//echo $ilcedeggelenx;
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE ilce SET  ilcead='$ilcedeggelenx' where(ilinad='$ilsecgelen' and ilcead='$ilcegelenx')";
//}
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:blue">'.trsuz($ilcegelenx).' '.trsuz($oncekiilce).' '.trsuz($ilcedeggelenx).' '.trsuz($sonraki).'<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)">Geri</a></font></label></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">'.trsuz($ilcedegismedi).'</label><a href=# onClick="kontrolilce();"><img src="images/iptal.png"></a></th></table>';
echo mysql_error();
 }

@mysql_close($dbh);
 ?>

 </body>
</html>