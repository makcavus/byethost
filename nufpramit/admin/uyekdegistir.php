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

$uyekodu=$_GET['krselectilno'];
$uyead=$_GET['asmgir'];

$drad=$_GET['kurumgirdeg'];
$kulsifre=$_GET['tbbgir'];

//echo $uyekodu;
//echo $uyead;
//echo $drad;
//echo $kulsifre;
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}

$sha1=sha1cevir($kulsifre); // fonksiyon çağırılıor
$sha2=sha1cevir($sha1); // fonksiyon çağırılıor
$sha3=sha1cevir($sha2); // fonksiyon çağırılıor

 // ekrana md5 kodu yazdırılıyor
print("<b>Sifre : </b> ".$ksigelen." <b> ------> </b>".$sha3);				

$kayit="UPDATE uyeler SET  uyead='$uyead',uyekim='$drad',uyesifre='$sha3' where(uyekod='$uyekodu')";
//}
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
$onceki="Kurumuna ait Kullanıcı Bilgileri";
$sonraki="değiştirildi...";
echo '<label><font style="color:blue">'.$uyekodu.' '.$onceki.' '.$sonraki.'<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)">Geri</a></font></label></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">Kurum Değiştirilemedi</label><a href=# onClick="kontrolkurum();"><img src="images/iptal.png"></a></th></table>';
echo mysql_error();
 }

@mysql_close($dbh);
 ?>

 </body>
</html>