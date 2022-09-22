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

function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 

$ilgelenx=$_GET['ilgir']; // get metodu ile formdan gelen geğer alınıyor
$ilgeleny=trsuz($ilgelenx);
$ilgelen=toUpperCase($ilgeleny);

$ilsecgelen=$_GET['ilno']; // get metodu ile formdan gelen geğer alınıyor
$ilcegelen=toUpperCase($_GET['ilcegir']); // get metodu ile formdan gelen geğer alınıyor
$kilgelen=$_GET['selectil'];
$kilcegelen=$_GET['selectilce'];
$kurumgelen=toUpperCase($_GET['kurumgir']);
$asmgelen=ucwords_tr($_GET['asmgir']);
$drgelen=ucwords_tr($_GET['drgir']);
$asegelen=ucwords_tr($_GET['asegir']);
$aseungelen=ucwords_tr($_GET['aseungir']);



//echo $ilgelenx;
//echo $ilgeleny;

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






$ilsec="select * from il where(ilad='$ilgelen')";
$socsorgu=mysql_query($ilsec);
$say=mysql_num_rows($socsorgu);
//echo $say;
if($say<1 AND $ilgelen !=""){
$kayit="INSERT INTO il(ilad) VALUES ('$ilgelen')";
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
$ilok='İli Kaydedildi...';
echo '<label><font style="color:blue">'.$ilgelen.' '.$ilok.'<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)">...Geri</a></font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">İl Kaydedilemedi...</font></th></table>';
}
}
while($sonucum=mysql_fetch_array($socsorgu)){
$ilno=$sonucum['ilid'];
$iladi=$sonucum['ilad'];
 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilno."<br>".$iladi);				
}


/*

$ilcesec="select * from ilce where(ilcead='$ilcegelen')";
$socsorgu1=mysql_query($ilcesec);
$say1=mysql_num_rows($socsorgu1);
//echo "Sayı:".$say1;
if($say1<1 AND $ilcegelen !=""){
$kayit1="INSERT INTO ilce (ilinad,ilcead) VALUES ('$ilsecgelen','$ilcegelen')";
if(mysql_query($kayit1)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:green">İlçe Kaydedildi...</font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">İlçe Kaydedilemedi...</font></th></table>';
}
}
while($sonucum1=mysql_fetch_array($socsorgu1)){
$ilceno=$sonucum1['ilceid'];
$ilsecadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilcead'];

 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilceno."<br>".$ilsecadi."<br>".$ilceadi);				
}

// KURUM KAYDI


$kurumsec="select * from ocak where(socad='$kurumgelen')";
$socsorgu2=mysql_query($kurumsec);
$say2=mysql_num_rows($socsorgu2);
//echo "Sayı:".$say2;
if($say2<1 AND $kurumgelen!=""){
$kayit2="INSERT INTO ocak (ilinad,ilce,socad,asmadi,dradi,aseadi,aseunvan) VALUES ('$kilgelen','$kilcegelen','$kurumgelen','$asmgelen','$drgelen','$asegelen','$aseungelen')";
if(mysql_query($kayit2)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:green">Kurum Kaydedildi...</font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">Kurum Kaydedilemedi...</font></th></table>';
}
}
while($sonucum2=mysql_fetch_array($socsorgu2)){
$kilceno=$sonucum2['ocid'];
$kilsecadi=$sonucum2['ilinad'];
$kilceadi=$sonucum2['ilce'];
$kkurumadi=$sonucum2['socad'];
$kasmadi=$sonucum2['asmadi'];
$kdradi=$sonucum2['dradi'];
$kaseadi=$sonucum2['aseadi'];
$kaseunadi=$sonucum2['aseunvan'];

 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$kilceno."<br>".$kilsecadi."<br>".$kilceadi."<br>".$kkurumadi."<br>".$kasmadi."<br>".$kdradi."<br>".$kaseadi."<br>".$kaseunadi);				
}*/
@mysql_close($dbh);
 ?>

 </body>
</html>