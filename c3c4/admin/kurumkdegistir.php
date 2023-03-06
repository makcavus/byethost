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
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
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
//$asmgeleny=trsuz($asmgelenx);
$asmgelen=ucwords_tr($asmgelenx);

$drgelenx=$_GET['tbbgir'];
$drgelen=trsuz($drgelenx);

$asegelenx=$_GET['asegir'];
$asegelen=trsuz($asegelenx);


$aseungelenx=$_GET['aseungir'];
$aseungelen=trsuz($aseungelenx);


//echo $ilseckrgelen;
//echo "-";
//echo $ilceseckrgelen;
//echo "-";
//echo $kurumgelenx;
//echo "-";
//echo $degkurumgelenx;

//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE ocak SET  socad='$kurumgelenx',asmadi='$asmgelen',dradi='$drgelenx',aseadi='$asegelenx',aseunvan='$aseungelenx' where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelenx')";
//}
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:blue">'.trsuz($kurumonceki).' '.trsuz($kurumsonraki).'<a href="ilekle.php" onsubmit="javascript:reloadPage(this)">'.trsuz($geridon).'</a></font></label></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">'.trsuz($kurbilolmadi).'</label><a href=# onClick="kontrolkurum();"><img src="images/iptal.png"></a></th></table>';
echo mysql_error();
 }

@mysql_close($dbh);
 ?>

 </body>
</html>