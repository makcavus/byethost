<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Duyuru İşlemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="stylesheet" type="text/css" href="duyuru.css">-->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">

<script type="text/javascript" src="jquery.js"></script><!--JQUEY K�t�phanemizi dahil ediyoruz.-->


<script type="text/javascript">


function noCache(


uri 





){





return uri.concat( 








/\?/.test(uri) ?








"&"





:








"?",








"noCache=",








(new Date).getTime(),








".",








Math.random()*1234567





);








};


function islem(id,komut) // islem  fonksiyomuzda id ve komut isimli iki de�i�ken kullanaca��z.id de�i�keni ile verileri id de�erini ta��mak i�in, komut de�i�kenini ise g�ncelleme i�in kullan�ca��z.


{





$.ajax({ 





type: 'GET',//verinin g�nderilme y�ntemini belirliyoruz.





url :noCache('adresislem.php?adrid='+id+'&komut='+komut),//islem yap�lacak dosyay� belirtiyoruz.fonksiyonumuzdan gelen de�i�kenleri islem.php sayfas�na get methodu ile g�nderiyoruz.





data: $('form').serialize(),//g�nderilecek veri olarak formdan elamlar�n�n de�erleri al�yoruz.





success: function(cevap) // i�lem.php sayfas�ndan gelen sonu�lar� id �zniteli�i liste olan bir div'de g�r�nt�lyouz.


{


$('div#liste').html(cevap);


}


});}








</script>




<!-- onload="islem('','') sayfa y�klendi�inde fonksiyonumuzu bo� de�erlerle otamatik olarak �al��t�r�yoruz.-->
<!--

<style type="text/css">





.style1 {font-family: Arial, Helvetica, sans-serif}


.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }


.style4 {color: #000000}


.style5 {


	font-family: Arial, Helvetica, sans-serif;


	color: #000000;


	font-weight: bold;


}





</style>
-->

</head>





<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
	
$tipi=$_GET["selecttip"];

$ili=$_GET["selectil"];

$ilcesi=$_GET["selectilce"];

$konu=$_GET["konu"];

$icerik=$_GET["icerik"];

$dosya=$_GET["dosya"];

$bilgi=$_GET["bilgi"];

$email=$_GET["email"];

$web=$_GET["web"];

$harita=$_GET["harita"];

$vtkonu=trsuz($konu);
$vticerik=trsuz($icerik);
//echo $tipi;
//echo $ili;
//echo $ilcesi;
//echo $konu;
//echo $icerik;
//echo $dosya;
//echo $bilgi;
//echo $harita;

include("../../connect.php");

if($tipi>0 and $ili>0 and $ilcesi>0 and $konu<>NULL){

$SQLInsert="insert into adres (tipi,ilid,ilceid,adi,adres,telefon,fax,email,web,harita) values('$tipi','$ili','$ilcesi','$vtkonu','$vticerik','$dosya','$bilgi','$email','$web','$harita')";

}else{
//echo mysql_error($SQLInsert);
echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';

echo '<div class="alert alert-info text-dark">'."Eksik Bilgi Girdiniz.".'</div>';

echo '</table>';

}

if(mysql_query($SQLInsert)){
//echo mysql_error($SQLInsert);

echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';

echo '<div class="alert alert-info text-dark">'."Adres Kaydı Yapıldı.".'</div>';

echo '</table>';

}else{

echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';

echo '<div class="alert alert-info text-dark">'."Adres Kaydı Yapılamadı.Tekrar deneyiniz.Silme veya Düzeltme Yapılabilir.".'</div>';

echo '</table>';

}

@mysql_close($dbh);

/* $conn=mysql_connect("localhost","root","malika");

if($conn){

if(mysql_select_db("etf",$conn)){

$idara="select SOCID from soc where(SOC='".$_GET["soca"]."')";

$idsorgu=mysql_query($idara);

while($Haber=mysql_fetch_array($idsorgu)){

$idi=$Haber["SOCID"];

}

if('".$_GET["yili"]."'<>'NULL'){

$YILDA="INSERT INTO yil (OCID,YIL) VALUES ('$idi','".$_GET["yili"]."')";  

}else{echo "Piramidi yapilacak yili Girmediniz.";

}


if(mysql_query($YILDA)){


//echo "<br><br>Yil Kaydi Yapildi.<br><br>";


}else{


//echo "<br><br>Yil Kaydi Yapilamadi.Tekrar deneyiniz.<br><br>";


 }


 }


 }


@mysql_close($conn);


 include("con_023.php");


$conn=mysql_connect("localhost","root","malika");


if($conn){


if(mysql_select_db("etf",$conn)){


$soidara="select * from soc where(SOC='".$_GET["soca"]."')" ;


$soidsorgu=mysql_query($soidara);


while($soHaber=mysql_fetch_array($soidsorgu)){


$socidi=$soHaber["SOCID"];


$socadi=$soHaber["SOC"];


//echo "$socidi";


//echo "$socadi";


$yilidara="select * from yil where(YIL='".$_GET["yili"]."')" ;


$yilidsorgu=mysql_query($yilidara);


while($yilHaber=mysql_fetch_array($yilidsorgu)){


$yilidi=$yilHaber["YIL"];


//echo "$yilidi";


$say="select * from yg where(SOC='$socadi' and YIL='$yilidi')" ;


$ssonuc=mysql_query($say);


$sonuc=mysql_num_rows($ssonuc);


//echo "$sonuc";


}


if('".$_GET["soca"]."'<>'NULL' and '".$_GET["yili"]."'<>'NULL' and $sonuc==0){


$YGR="INSERT INTO yg (SOC,SOCID,YIL,0K,5K,10K,15K,20K,25K,30K,35K,40K,45K,50K,55K,60K,65K,70K,75K,80K,85K,0E,5E,10E,15E,20E,25E,30E,35E,40E,45E,50E,55E,60E,65E,70E,75E,80E,85E) VALUES ('$socadi','$socidi','$yilidi','".$_GET["0k"]."','".$_GET["5k"]."','".$_GET["10k"]."','".$_GET["15k"]."','".$_GET["20k"]."','".$_GET["25k"]."','".$_GET["30k"]."','".$_GET["35k"]."','".$_GET["40k"]."','".$_GET["45k"]."','".$_GET["50k"]."','".$_GET["55k"]."','".$_GET["60k"]."','".$_GET["65k"]."','".$_GET["70k"]."','".$_GET["75k"]."','".$_GET["80k"]."','".$_GET["85k"]."','".$_GET["0e"]."','".$_GET["5e"]."','".$_GET["10e"]."','".$_GET["15e"]."','".$_GET["20e"]."','".$_GET["25e"]."','".$_GET["30e"]."','".$_GET["35e"]."','".$_GET["40e"]."','".$_GET["45e"]."','".$_GET["50e"]."','".$_GET["55e"]."','".$_GET["60e"]."','".$_GET["65e"]."','".$_GET["70e"]."','".$_GET["75e"]."','".$_GET["80e"]."','".$_GET["85e"]."')";  


}else{echo "<span class='style3'>Bu Kay�t daha �nce Girilmi�</span>";


echo "<br><br>";


echo '<form action="yasgrubudegistir.php" method="get" name="degistir">';





echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socadi.'" />';


echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilidi.'" />';





echo '<input type="submit" name="degistir" class="style3" value="Veri De�i�tir"/>';


echo '</form>';


echo '<form action="yasgrubusil.php" method="get" name="sil">';





echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socadi.'" />';


echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilidi.'" />';


echo '<input type="hidden" name="idgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socidi.'" />';


echo '<span class="style3"><input type="submit" name="sil" class="style3" value="Verileri Sil  !"/></span>';


echo '</form>';


}


if(mysql_query($YGR)){


echo "<br><br><span class='style3'>Veriler Kaydedildi.Te�ekk�r ederiz.</span><br><br>";


}else{


 echo "<br><br><span class='style3'>Veriler Kaydedilemedi.<br>De�i�tirmek ve Silmek i�in yukar�daki D��meleri kullan�n.<br>Veya Tekrar deneyiniz.</span><br><br>";


 }


 }


 }


 }


 @mysql_close($conn);


$conn=mysql_connect("localhost","root","malika");


if($conn){


if(mysql_select_db("etf",$conn)){


$silsec="select * from soc";


$socsil=mysql_query($silsec);


while($silsonuc=mysql_fetch_array($socsil)){


}


$SILInsert="delete from soc where(SOC='' || SOC='NULL')";


if(mysql_query($SILInsert)){


//echo "<br><br>Bos veriler silindi.<br><br>";


}else{


 echo "<br><br>Islem Tamam.<br><br>";


 }


 }


 }*/


 ?>


 <body onload="islem('','')">


<table class="table table-sm table-responsive-sm table-stripped table-bordered table-hover">
<thead>
<tr>

<td width="150px"><?php echo "Kurumun Adı"; ?></td>

<td width="300px">Kurumun Adresi</td>

<td width="120px">Kurum Telefonu</td>

<td width="120px"><?php echo "Kurum Faksı";?></td>

<td width="150px"><?php echo "Kurum E-Postası";?></td>

<td width="150px">Kurum Web Adresi</td>

<!--<td><?php echo "Haritada Göster";?></td>-->

<td width="100px"><?php echo "İşlemler";?></td>

</tr>

<tr>
<td align="center" colspan="8">
<div id="liste" align="left"></div> 
</td>
</tr>
</thead>
</table>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../../bootstrap-4/popper.js"></script>
<script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

 