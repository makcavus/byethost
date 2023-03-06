<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kayıt Değiştirildi</title>
 <link href="Style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?
include("con_023.php");
include("../frm013alanlari.php");

function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
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

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
$ilseckrgelen=iconv("utf-8","iso-8859-9",$_GET['selectil']);
$ilceseckrgelen=iconv("utf-8","iso-8859-9",$_GET['selectilce']);

$kurumgelenx=iconv("utf-8","iso-8859-9",$_GET['kurumgir']);
$kurumgelen=toUpperCase($kurumgelenx);

$asmgelenx=iconv("utf-8","iso-8859-9",$_GET['asmgir']);
$asmgelen=ucwords_tr($asmgelenx);
//$asmgelen=trsuz($asmgeleny);

$drgelen=iconv("utf-8","iso-8859-9",$_GET['drgir']);
//$drgelen=trsuz($drgelenx);

$asegelen=iconv("utf-8","iso-8859-9",$_GET['asegir']);
//$asegelen=trsuz($asegelenx);


$aseungelen=iconv("utf-8","iso-8859-9",$_GET['aseungir']);
//$aseungelen=trsuz($aseungelenx);


echo $ilseckrgelen;
echo $ilceseckrgelen;
echo trsuz($kurumgelen);
echo $asmgelen;
echo $drgelen;
echo $asegelen;
echo $aseungelen;

$kurumsec="select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')";
$socsorgu2=mysql_query($kurumsec);
$say2=mysql_num_rows($socsorgu2);
//echo $say2;
if($say2<1 AND $kurumgelen !=""){
$kayit="INSERT INTO ocak(ilinad,ilce,socad,asmadi,dradi,aseadi,aseunvan) VALUES ('$ilseckrgelen','$ilceseckrgelen','$kurumgelen','$asmgelen','$drgelen','$asegelen','$aseungelen')";
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:blue">'.trsuz($kurumgelen).' '.trsuz($kurumok).'<a href="ilekle.php" onsubmit="javascript:reloadPage(this)">'.trsuz($geridon).'</a></font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">'.trsuz($kurumkaydolmadi).'</font></th></table>';
}
}
while($sonucum2=mysql_fetch_array($socsorgu2)){
$kurumno=$sonucum1['ocid'];
$ilinadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilce'];
$kurumadi=$sonucum1['socad'];
$asmninadi=$sonucum1['asmadi'];
$tbbadi=$sonucum1['dradi'];
$aseninadi=$sonucum1['aseadi'];
$aseunv=$sonucum1['aseunvan'];



 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilno."<br>".$iladi);				
}


@mysql_close($dbh);
 ?>

 </body>
</html>