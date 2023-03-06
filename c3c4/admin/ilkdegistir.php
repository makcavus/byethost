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
$ilgelenx=toUpperCase($_GET['ilgir']);
$ilgelen=trsuz($ilgelenx);
$ildeggelenx=toUpperCase($_GET['selectil']);
$ildeggelen=trsuz($ildeggelenx);

//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;
//echo $ildeggelen;
//echo $ildeggelenx;
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE il SET  ilad='$ilgelenx' where(ilad='$ildeggelenx')";
//}
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:blue">'.trsuz($ildeggelenx).' '.trsuz($oncekiil).' '.trsuz($ilgelenx).' '.trsuz($sonraki).'<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)">'.trsuz($geridon).'</a></font></label></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">'.trsuz($ildegismedi).'</label><a href=# onClick="kontrolil();"><img src="images/iptal.png"></a></th></table>';
echo mysql_error();
 }

@mysql_close($dbh);
 ?>

 </body>
</html>