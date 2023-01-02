<?php header("Cache-Control: no-cache,no-store");
//echo rand();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<link href="arkakara.css" rel="stylesheet" type="text/css"/>

<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>	
</head>




<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include("con_023.php");
$ahekkodu=$_GET['ahekkod'];
$countryId=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$stateId=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocak=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yil=$_GET['selectyil'];
$ay=iconv("UTF-8", "ISO-8859-9", $_GET['selectay']); 
//echo $ahekkodu;
/*echo $countryId ;
echo $stateId ;
echo $ocak ;
echo $yil ;
echo $ay ;*/
//echo $ahekkodu ;
//echo $ocak ;
$ilkod=substr($ahekkodu,0,2);
$ilkodx=substr($ocak,0,2);

$ilhsm=substr($ahekkodu,-3,3);


$ilcekod=substr($ahekkodu,0,5);
$ilcekodx=substr($ocak,0,5);

$ilcetsm=substr($ahekkodu,-3,3);

//echo $ilcekod;
//echo $ilcekodx;
//echo $ilcetsm;


?>

<?php
$iladi=@mysql_query("select * from il where(ilid='$countryId')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$countryId' and ilceid='$stateId')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>
<?php
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and vocadi='$ocak' and vyiladi='$yil' and vayadi='$ay')";
$socsorgu=mysql_query($vtsec);
$say=mysql_num_rows($socsorgu);
echo '<p>';
if($countryId == "" and $say<1){
$uyar="İl Seçilmedi";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId == "İlçe Seçiniz" and $say<1){
$uyar="İlçe Seçilmedi.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != "İlçe Seçiniz" and $ocak == "Aile Hekimini Seçiniz" and $say<1){
$uyar="Aile Hekimliği Seçilmedi.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId !="İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil=="" and $say<1){
$uyar="Yılı Boş Bıraktınız.";
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId != "" and $ilceninadi != "İlçe Seçiniz" and $ocak != "Aile Hekimini Seçiniz" and $yil!="" and $say<1){
$uyar="";
echo '<font style="color:Green">'.$uyar.'</font>' ;


if($ilkod==$ilkodx and $ilhsm=="HSM" or $ilcekod==$ilcekodx and $ilcetsm=="TSM" or $ahekkodu==$ocak){
echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
}else{
$sizmisiniz="Bu kaydı yapmaya yetkiniz yoktur.";
echo '<font style="color:Red">'.$sizmisiniz.'</font>' ;
}
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
echo '<label><font size="2px" face="tahoma">'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocakyazi.'</FONT>-'.$yil.'-'.$ay.'&nbsp;&nbsp;&nbsp;&nbsp;</font></label>';
//$degsayfa="http://localhost/form023/frm023degistir.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$baksayfa="http://localhost/form023/cerceve1.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//$silsayfa="http://localhost/form023/023sil.php?ilgelen=".$countryId."&ilcegelen=".$stateId."&ocgelen=".$ocak."&yilgelen=".$yil."&aygelen=".$ay."";
//echo '<form action="frm023degistir.php" method="get" name="gor">' ;
//echo $yeni_url;
/*echo '<input type="hidden" name="ilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="ilcegelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="ocgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="yilgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="aygelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';*/

//echo '<p>';
echo '</form>';
if($ilcetsm=="HSM" or $ilcekod==$ilcekodx and $ilcetsm=="TSM" or $ahekkodu==$ocak){
?>
<body>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="deg();"><img src="images/degistir.png"></a></th>
<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href=# onClick="git();"><img src="images/goster.png"></a></th>
<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00"><a href="javascript:goster();"><img src="images/sil.png"></a></th>
<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">
		<div id="sifre" class="giris_zemin">
		  
		  <form action="onay.php" method="post" name="giris" id="giris">
		    <table width="100" border="0">
              
<?php 
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong></th>';
echo '<th height="50" class="style6"><strong><font size="3px" style="color:blue" face="tahoma">Kayıt Silme Onayı</font></strong></th>';	
echo '</tr>';
echo '</table>';	
echo '<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">';
echo '<tr>';
echo '<th class="style6" rowspan="2" align="center"><img src="images/siluyar.jpg"></th>';
echo '<th class="style6" align="center" height="30" colspan="2"><font size="2px" style="color:red" face="tahoma">Bu Kaydı Silmek İstediğinize Emin misiniz?</font></th>';
echo '</tr>';
echo '<tr>';
echo '<th class="style6" align="center"><a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.png"></a></th>';
echo '<th class="style6" align="center"><a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a></th>';
echo '</tr>';

?>
              
           </table>
	
		  </form>
		</div>
	<div id="fon" class="arka_fon"></div>


<?php
echo '<form action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>
<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value=" <?php echo "PDF Yazdır";?> "/></th>
<?php
echo '</form>';
?>
<th class="style6" width="20%" align="center" bordercolor="#FFCC00" bgcolor="#FFCC00">

<?php
echo '<form action="/excelmysql/form013ayxls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
?>

<input name="SUBMIT" type="SUBMIT"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<? echo 'Excele Yazdır';?>"/></th>
<?php
echo '</form>';
?>
</table>	
<?php
}else{
echo '<br>';
//echo '<form action="form023pdf.php" method="get" name="gor">' ;
echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
//echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
//echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
//echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
//echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
//echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
//echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
//echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
//echo '</form>';
}

}
?>
<?php
if($ilcetsm=="HSM" or $ilcekod==$ilcekodx and $ilcetsm=="TSM"){

$kacahek="select * from ocak where(ilinad='$countryId' and ilce='$stateId' and dradi like 'Dr.%' and asmadi like '%ASM')";
$sorgula=mysql_query($kacahek);
$kacaheksay=mysql_num_rows($sorgula);
//echo $kacaheksay;
//echo '<br>';
$kacveri="select * from veri where(ilidi='$countryId' and ilceidi='$stateId' and v176 like 'Dr.%' and v177 like '%Nolu A%' and vyiladi='$yil' and vayadi='$ay')";
$verisorgula=mysql_query($kacveri);
while($eksiksonucum=mysql_fetch_array($verisorgula)){
$eksikahek=$eksiksonucum['vocadi'];
//echo $eksikahek;
}
$kacverisay=mysql_num_rows($verisorgula);
//echo $kacverisay;
if($kacverisay==0){
$bos="Henüz hiçbir Aile Hekimliğine veri girilmemiştir.";
echo "<br>";
echo "<br>";

echo "<font size='2px' face='tahoma'>".$bos."</font>";
}elseif($kacaheksay!=$kacverisay){
$a="Aile Hekimliği Biriminden";
$b="Aile Hekimliğine ait veriler girilmiştir.";
$fark=$kacaheksay-$kacverisay;
$c="Aile Hekimliğine ait veri girilmemiştir.";
echo "<br>";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma'><?php echo $kacaheksay." ".$a." ".$kacverisay." ".$b."".$fark." ".$c;?></font></th>
</table>
<?php
$gelmeyenler="Verileri girilmeyen Aile Hekimliği Birimleri";
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="100%" align="center"><font size='2px' face='tahoma' color='red'><?php echo $gelmeyenler;?></font></th>
</table>

<?php
$eksiktablosu="SELECT ocak.*,veri.*
FROM ocak ocak
LEFT OUTER JOIN veri veri ON ocak.ilinad=veri.ilidi and ocak.ilce=veri.ilceidi and ocak.socad = veri.vocadi and veri.v176 like 'Dr.%' and veri.v177 like '%Nolu A%' and veri.vyiladi='$yil' and veri.vayadi='$ay'
WHERE veri.vocadi IS NULL";
$etablosu=mysql_query($eksiktablosu);
while($eahsonucum=mysql_fetch_array($etablosu)){
$eksikahadi=$eahsonucum['socad'];
$eksikdradi=$eahsonucum['dradi'];
?>
<table align="center" width="100%" border="1" bordercolor="#000000">
<th width="50%" align="right"><font size='2px' face='tahoma'><?php echo $eksikahadi.'--'; ?></font></th>
<th width="50%" align="left"><font size='2px' face='tahoma'><?php echo '--'.$eksikdradi; ?></font></th>
</table>
<?php
}
}else{
$tamam="Bütün Aile Hekimliği Birimlerine ait veri girişi yapılmıştır.";
echo "<br>";
echo "<font size='2px' face='tahoma'>".$tamam."</font>";
}
}
?>
<?php
@mysql_close($dbh) ;
?>
</body>
</html>