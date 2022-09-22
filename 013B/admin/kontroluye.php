<?php header("Cache-Control: no-cache,no-store");
//echo rand();
?>

<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include("con_023.php");
$kodgelen=iconv("utf-8","iso-8859-9",$_GET['uyekodum']);
$secim=trsuz("Üye Kodu Seçiniz");
//echo $kodgelen;
//echo $dradigelen;
//echo $kadigelen;
//echo $ksifgelen;
//echo $asegelen;
//echo $aseungelen;


//KURUM KONTROLU
$vtsec2="select * from uyeler where(uyekod='$kodgelen')";
$socsorgu2=mysql_query($vtsec2);
$say2=mysql_num_rows($socsorgu2);
//echo $say2;
echo '<p>';
if($kodgelen==""){
$uyar=trsuz("Kullanıcının Kurum Kodunu Seçiniz.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}elseif($kodgelen!="" and $say2==0){
$uyar=trsuz("Bu Kullanıcıyı Tanımlayabilirsiniz.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
//echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
?>
<form method="GET" name="form2" action="ilekle.php"> 
<input type="hidden" name="selectil" id="selectil" value="<? echo $kodgelen; ?>">


<a href=# onClick="ykayuye();"><img src="images/kekle.png"></a>
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png" /></a>
</form>
<?
}else{
$uyar=trsuz("BU KAYIT YAPILMIŞ...");
echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;
echo '<p>';
echo '<a href=# onClick="deguye();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/degistir.png"></a>';
//echo'&nbsp;&nbsp;&nbsp;&nbsp;';
//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onayuye();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/sil.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png"></a>';
}
/*
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
echo $ay ;
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
$uyar=trsuz("İl Seçilmedi");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId == trsuz("İlçe Seçiniz") and $say<1){
$uyar=trsuz("İlçe Seçilmedi.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != trsuz("İlçe Seçiniz") and $ocak == trsuz("Aile Hekimini Seçiniz") and $say<1){
$uyar=trsuz("Aile Hekimliği Seçilmedi.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId !="" and $stateId != trsuz("İlçe Seçiniz") and $ocak != trsuz("Aile Hekimini Seçiniz") and $yil=="" and $say<1){
$uyar=trsuz("Yılı Boş Bıraktınız.");
echo '<font style="color:Red">'.$uyar.'</font>' ;
}
elseif($countryId != "" and $ilceninadi != trsuz("İlçe Seçiniz") and $ocak != trsuz("Aile Hekimini Seçiniz") and $yil!="" and $say<1){
$uyar="";
echo '<font style="color:Green">'.$uyar.'</font>' ;
if($ahekkodu==$ocak or $ahekkodu=="TSM"){
echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
}else{
$sizmisiniz=trsuz("Sadece Kendinize ait Aile Hekimliği Koduna Kayıt Ekleyebilirsiniz.");
echo '<font style="color:Red">'.$sizmisiniz.'</font>' ;
}
}else{
$uyar=trsuz("BU KAYIT YAPILMIŞ...");
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
echo '<input type="hidden" name="aygelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';

echo '<p>';
echo '</form>';
if($ahekkodu==$ocak or $ahekkodu=="TSM"){
echo '<form action="form023pdf.php" method="get" name="gor">' ;
echo '<a href=# onClick="deg();"><img src="images/degistir.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onay();"><img src="images/sil.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<input type="hidden" name="ahekkod" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ahekkodu.'" />';
echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$countryId.'" />';
echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$stateId.'" />';
echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocak.'" />';
echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yil.'" />';
echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ay.'" />';
echo '<BUTTON TYPE=SUBMIT><IMG SRC="images/yazdir.png"></BUTTON>';
echo '</form>';
}else{
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
*/
@mysql_close($dbh) ;
?>
