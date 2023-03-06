<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">


<head>


<script type="text/javascript" src="jquery.js"></script><!--JQUEY Kütüphanemizi dahil ediyoruz.-->


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


function islem(id,komut) // islem  fonksiyomuzda id ve komut isimli iki deðiþken kullanacaðýz.id deðiþkeni ile verileri id deðerini taþýmak için, komut deðiþkenini ise güncelleme için kullanýcaðýz.


{





$.ajax({ 





type: 'GET',//verinin gönderilme yöntemini belirliyoruz.





url :noCache('adresislem.php?adrid='+id+'&komut='+komut),//islem yapýlacak dosyayý belirtiyoruz.fonksiyonumuzdan gelen deðiþkenleri islem.php sayfasýna get methodu ile gönderiyoruz.





data: $('form').serialize(),//gönderilecek veri olarak formdan elamlarýnýn deðerleri alýyoruz.





success: function(cevap) // iþlem.php sayfasýndan gelen sonuçlarý id özniteliði liste olan bir div'de görüntülyouz.


{


$('div#liste').html(cevap);


}


});}








</script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />


<title>Duyuru Ýþlemleri</title>


<!-- onload="islem('','') sayfa yüklendiðinde fonksiyonumuzu boþ deðerlerle otamatik olarak çalýþtýrýyoruz.-->


<style type="text/css">


<!--


.style1 {font-family: Arial, Helvetica, sans-serif}


.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }


.style4 {color: #000000}


.style5 {


	font-family: Arial, Helvetica, sans-serif;


	color: #000000;


	font-weight: bold;


}


-->


</style>


</head>





<?


$konu=$_GET["konu"];


$icerik=$_GET["icerik"];


$dosya=$_GET["dosya"];


$bilgi=$_GET["bilgi"];





//echo $konu;


//echo $icerik;


//echo $tarih;


include("con_023.php");


$conn=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die("Baðlanýlamadý");;


if($conn){


if(mysql_select_db("b12_10384566_etf",$conn)){


if($konu<>NULL){


$SQLInsert="insert into adres (adi,adres,telefon,fax) values('$konu','$icerik','$dosya','$bilgi')";


}else{


echo '<table width="97%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';


echo "<span class='style3'>Bilgi Girmediniz.</span>";


echo '</table>';


}


}


}


if(mysql_query($SQLInsert)){


echo '<table width="97%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';


echo "<span class='style3'><br><br>Adres Kaydý Yapýldý.<br><br></span>";


echo '</table>';


}else{


echo '<table width="97%" border="1" cellpadding="0" cellspacing="0" bordercolor="white" align="center">';


echo "<span class='style3'><br><br>Adres Kaydý Yapýlamadý.Tekrar deneyiniz.Silme veya Düzeltme Yapýlabilir.<br><br></span>";


echo '</table>';


}


@mysql_close($conn);


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


}else{echo "<span class='style3'>Bu Kayýt daha önce Girilmiþ</span>";


echo "<br><br>";


echo '<form action="yasgrubudegistir.php" method="get" name="degistir">';





echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socadi.'" />';


echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilidi.'" />';





echo '<input type="submit" name="degistir" class="style3" value="Veri Deðiþtir"/>';


echo '</form>';


echo '<form action="yasgrubusil.php" method="get" name="sil">';





echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socadi.'" />';


echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilidi.'" />';


echo '<input type="hidden" name="idgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$socidi.'" />';


echo '<span class="style3"><input type="submit" name="sil" class="style3" value="Verileri Sil  !"/></span>';


echo '</form>';


}


if(mysql_query($YGR)){


echo "<br><br><span class='style3'>Veriler Kaydedildi.Teþekkür ederiz.</span><br><br>";


}else{


 echo "<br><br><span class='style3'>Veriler Kaydedilemedi.<br>Deðiþtirmek ve Silmek için yukarýdaki Düðmeleri kullanýn.<br>Veya Tekrar deneyiniz.</span><br><br>";


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


<table width="97%" border="1" cellpadding="0" cellspacing="0" bordercolor="#666666" align="center">


<tr>


<td width="200" bgcolor="#FFCC00"  align="center"><span class="style4">Aile Hekiminin Adý</span></td>


<td width="200" bgcolor="#FFCC00"  align="center"><span class="style4">Aile Hekimliði Kodu-ASM Adý ve Adresi</span></td>


<td width="200" bgcolor="#FFCC00"  align="center"><span class="style4">ASM Telefonu</span></td>


<td width="200" bgcolor="#FFCC00"  align="center"><span class="style4">Cep Telefonu</span></td>


<td width="200" bgcolor="#FFCC00"  align="center">Ýþlemler</td>


</tr>


</table>


<div id="liste" align="center"></div> 


 </body>


 </html>


 