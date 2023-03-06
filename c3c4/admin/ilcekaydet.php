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

$ilsecgelen=iconv("utf-8","iso-8859-9",$_GET['selectilno']); // get metodu ile formdan gelen geğer alınıyor
$ilcegelenx=iconv("utf-8","iso-8859-9",$_GET['ilcegir']); // get metodu ile formdan gelen geğer alınıyor
$ilcegelen=toUpperCase($ilcegelenx);


//echo $ilsecgelen;
//echo $ilcegelenx;

//echo $ilsecgeleny;

//echo $ilgelenz;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $kilgelen;
//echo $kilcegelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;






$ilcesec="select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')";
$socsorgu1=mysql_query($ilcesec);
$say1=mysql_num_rows($socsorgu1);
//echo $say1;
if($say1<1 AND $ilcegelen !=""){
$kayit="INSERT INTO ilce(ilinad,ilcead) VALUES ('$ilsecgelen','$ilcegelen')";
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:blue">'.trsuz($ilcegelen).' '.trsuz($ilceok).'<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)">'.trsuz($geridon).'</a></font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">'.trsuz($ilcekaydolmadi).'</font></th></table>';
}
}
while($sonucum1=mysql_fetch_array($socsorgu1)){
$ilceno=$sonucum1['ilceid'];
$ilinadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilcead'];

 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilno."<br>".$iladi);				
}


@mysql_close($dbh);
 ?>

 </body>
</html>