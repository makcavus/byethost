<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kay�t Yap�ld�</title>
 <link href="Style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?
include("con_023.php");
include('../frm013alanlari.php');

function toUpperCase( $input ){	
return strtoupper( strtr( $input,'����i��', '���I���') );
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

$ilgelen=$_GET['kulkay']; // get metodu ile formdan gelen ge�er al�n�yor

$drgelen=$_GET['doktoradi']; // get metodu ile formdan gelen ge�er al�n�yor


$kadigelen=$_GET['kuladi']; // get metodu ile formdan gelen ge�er al�n�yor

$ksifgelen=$_GET['kulsifre']; // get metodu ile formdan gelen ge�er al�n�yor

//echo $ilgelen;
//echo $drgelen;

//echo $kadigelen;
//echo $ksifgelen;
//echo $ilcegelen;
//echo $kilgelen;
//echo $kilcegelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;

function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}

$sha1=sha1cevir($ksifgelen); // fonksiyon �a��r�l�or
$sha2=sha1cevir($sha1); // fonksiyon �a��r�l�or
$sha3=sha1cevir($sha2); // fonksiyon �a��r�l�or

 // ekrana md5 kodu yazd�r�l�yor
//print("<b>Sifre : </b> ".$ksigelen." <b> ------> </b>".$sha3);				





$ilsec="select * from uyeler where(uyekod='$ilgelen')";
$socsorgu=mysql_query($ilsec);
$say=mysql_num_rows($socsorgu);
//echo $say;
if($say==0 AND $ilgelen !=""){
$kayit="INSERT INTO uyeler(uyead,uyekim,uyesifre,uyekod) VALUES ('$kadigelen','$drgelen','$sha3','$ilgelen')";
if(mysql_query($kayit)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="red" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:blue">'.trsuz($ilgelen).' '.trsuz($kulok).'<a href="ilekle.php" onsubmit="javascript:reloadPage(this)">'.trsuz($geridon).'</a></font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">'.trsuz($kulkaydolmadi).'</font></th></table>';
}
}
while($sonucum=mysql_fetch_array($socsorgu)){
$ilno=$sonucum['ilid'];
$iladi=$sonucum['ilad'];
 // ekrana md5 kodu yazd�r�l�yor
//print("<b>Girilen �l : </b> ".$ilno."<br>".$iladi);				
}


/*

$ilcesec="select * from ilce where(ilcead='$ilcegelen')";
$socsorgu1=mysql_query($ilcesec);
$say1=mysql_num_rows($socsorgu1);
//echo "Say�:".$say1;
if($say1<1 AND $ilcegelen !=""){
$kayit1="INSERT INTO ilce (ilinad,ilcead) VALUES ('$ilsecgelen','$ilcegelen')";
if(mysql_query($kayit1)){
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:green">�l�e Kaydedildi...</font></th></table>';
}else{
echo '<br>';
echo '<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<label><font style="color:Red">�l�e Kaydedilemedi...</font></th></table>';
}
}
while($sonucum1=mysql_fetch_array($socsorgu1)){
$ilceno=$sonucum1['ilceid'];
$ilsecadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilcead'];

 // ekrana md5 kodu yazd�r�l�yor
//print("<b>Girilen �l : </b> ".$ilceno."<br>".$ilsecadi."<br>".$ilceadi);				
}

// KURUM KAYDI


$kurumsec="select * from ocak where(socad='$kurumgelen')";
$socsorgu2=mysql_query($kurumsec);
$say2=mysql_num_rows($socsorgu2);
//echo "Say�:".$say2;
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

 // ekrana md5 kodu yazd�r�l�yor
//print("<b>Girilen �l : </b> ".$kilceno."<br>".$kilsecadi."<br>".$kilceadi."<br>".$kkurumadi."<br>".$kasmadi."<br>".$kdradi."<br>".$kaseadi."<br>".$kaseunadi);				
}*/
@mysql_close($dbh);
 ?>

 </body>
</html>