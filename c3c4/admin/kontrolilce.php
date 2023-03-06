<?php header("Cache-Control: no-cache,no-store");

//echo rand();

?>



<?

//function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

include("con_023.php");
include('../frm013alanlari.php');


$ilsecgelen=$_GET['selectilno'];

$ilcegelenx=$_GET['ilcegir'];

$ilcegelen=iconv("utf-8","iso-8859-9",$ilcegelenx);



//echo $ilsecgelen;

//echo trsuz($ilcegelen);





//İLÇE KONTROLU

$vtsec1="select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')";

$socsorgu1=mysql_query($vtsec1);

$say1=mysql_num_rows($socsorgu1);

//echo $say1;

echo '<p>';

if($ilsecgelen == "" and $say1<1){

$uyar=trsuz($ilsecbaslik);

echo '<font style="color:Red">'.$uyar.'</font>' ;

}elseif($ilsecgelen != "" and $ilcegelen=="" and $say1<1){

$uyar=trsuz($ilcesecbaslik);

echo '<font style="color:Red">'.$uyar.'</font>' ;

}elseif($ilsecgelen != ""  and $ilcegelen!="" and $say1<1){

$uyar=trsuz($ilcekaydet);

echo '<font style="color:Red">'.$uyar.'</font>' ;

//echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';

?>

<form method="GET" name="form1" action="ilekle.php"> 

<input type="hidden" name="selectilno" id="selectilno" value="<? echo trsuz($ilsecgelen); ?>">

<input type="hidden" name="ilcegir" id="ilcegir" value="<? echo trsuz($ilcegelen); ?>">

<a href=# onclick="kayitilce();" onsubmit="javascript:reloadPage(this)"><img src="images/kaydet.png"></a>

<a href="ilekle.php" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png" /></a>

</form>

<?

}else{

$uyar=trsuz($uyarbaslik);

echo '<font style="color:red"  size="2px" face="tahoma">'.$uyar.'</font>' ;

echo '<p>';

echo '<a href=# onClick="degilce();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/degistir.png"></a>';

//echo'&nbsp;&nbsp;&nbsp;&nbsp;';

//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';

echo'&nbsp;&nbsp;&nbsp;&nbsp;';

echo '<a href=# onClick="onayilce();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)"><img src="images/sil.png"></a>';

echo'&nbsp;&nbsp;&nbsp;&nbsp;';

echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)"><img src="images/iptal.png"></a>';

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

elseif($countryId !="" and $stateId == trsuz("�l�e Se�iniz") and $say<1){

$uyar=trsuz("�l�e Se�ilmedi.");

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

