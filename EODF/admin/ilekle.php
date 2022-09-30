<?

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";

}else{



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Kullanıcı Düzenleme Paneli</title>

<link href="Style.css" rel="stylesheet" type="text/css"/>



<script type="text/javascript" src="jquery-latest.pack.js"></script>

<!-- Codes by Quackit.com -->

<script language="JavaScript" src="toplama.js" type="text/javascript">

</script>	

<script type="text/JavaScript">

<!--

function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 

</script>

<script type="text/JavaScript">

<!--

function timedRefresh(timeoutPeriod) {

	setTimeout("location.reload(true);",timeoutPeriod);

}

//   -->

//<body onload="JavaScript:timedRefresh(100000);">

</script>

</head>

<body onload="JavaScript:timedRefresh(10000000);">

<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">
<tr>

<th bordercolor="white" bgcolor="yellow" colspan="20"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Kayıt İşlemleri</font></th>
</tr>
<tr>

<th bordercolor="white" bgcolor="yellow" colspan="4" align="right"><a href="../engel.htm" target="sag" ><img src="images/Resim7.png" width="180" height="30" onmousemove="this.src='images/Resim8.png'" onmouseout="this.src='images/Resim7.png'" /></a></th>

<th bordercolor="white" bgcolor="yellow" align="left" colspan="4"><a href="../engel.htm" target="sag" ><img src="images/Resim9.png" width="180" height="30" onmousemove="this.src='images/Resim10.png'" onmouseout="this.src='images/Resim9.png'" /></a></th>
</tr>
</table>

<form method="GET" name="form0" action="ilekle.php">

<br>



<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">

<tr>

<th bordercolor="white" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">İl Girişi</font></th>

</tr>

<th bordercolor="white" bgcolor="yellow" colspan="4" align="left" >

<label class="style5">İl Adı:</label></th>

<th bordercolor="white" bgcolor="yellow" colspan="4" align="left">

<input type="text" name="ilgir" id="ilgir" value=""></th>

<th width="50%" colspan="8" bordercolor="white" bgcolor="yellow"><input name="button" type="button" onclick="kontrolil();" value="İl Kaydı Kontrol" onsubmit="javascript:reloadPage(this)" /></th>

<tr>  

<th bordercolor="white" bgcolor="yellow" align="center" colspan="16">

<div style="font-family:Arial,Helvetica,sans-serif","font-size:14px,border-style:none" id="sonuc"></div></th>

</tr>

</table>

</form>

<form method="GET" name="form1" action="ilekle.php"> 

<?

include("con_023.php");

$result = @mysql_query("select ilid,ilad from il order by ilad asc");

?>

<br>



<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">

<tr>

<th bordercolor="white" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">İlçe Girişi</font></th>

</tr>

<th bordercolor="white" bgcolor="yellow" colspan="3" align="left" >

<label for="selectil" class="style3">İL:</label></th>

<script language="JavaScript"><!--

function ilce(){

document.form1.ilno.value=document.form1.selectilno.options[document.form1.selectilno.selectedIndex].value;

//metin.value=menu.options[menu.selectedIndex].text;



}

</script>

<th bordercolor="white" bgcolor="yellow" colspan="3" align="left" ><select name="selectilno" id="selectilno" onchange="javascript:ilce()" onselect="javascript:reloadPage(this)">

  <option value=""><?php echo "İli Seçiniz";?></option>

  <? while($row=mysql_fetch_array($result)) { ?>

  <option value="<?=$row['ilid']?>">

  <?=$row['ilad']?>

  </option>

  <? }

@mysql_close($dbh);

 

   ?>

</select></th>





<input type="hidden" name="ilno" id="ilno">

<th bordercolor="white" bgcolor="yellow"  colspan="3" align="left">

<label class="style5">İlçe Adı:</label></th>

<th bordercolor="white" bgcolor="yellow"  colspan="3" align="left"><input type="text" name="ilcegir" id="ilcegir" value="" /></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left"><input name="submit2" type="button" value="İlçe Kaydı Kontrol" onclick="kontrolilce();" onsubmit="javascript:reloadPage(this)" /></th>

<tr>  

<th bordercolor="white" bgcolor="yellow" align="center" colspan="16">

<div style="font-family:Arial,Helvetica,sans-serif","font-size:14px,border-style:none" id="sonuc1"></div></th>

</tr>

</table>

</form>

<form method="GET" name="form2" action="ilkaydet.php">



<?php

//mysql baglantisi

include("con_023.php");



$result = @mysql_query("select ilid,ilad from il order by ilad asc");

?>

<br>

 <table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">

 <tr>

<th bordercolor="white" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Kurum Girişi</font></th>

</tr>

<tr>

 <th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<label for="selectil" class="style3">İL:</label></th>

<th  align="left" bordercolor="white" bgcolor="yellow" colspan="4"><select name="selectil" id="selectil" onchange="ilcegoster();" onselect="javascript:reloadPage(this)">

  <option value=""><?php echo "İli Seçiniz";?></option>

  <? while($row=mysql_fetch_array($result)) { ?>

  <option value="<?=$row['ilid']?>">

  <?=$row['ilad']?>

  </option>

  <? } 

 @mysql_close($dbh);

 

  ?>

</select></th>

 

<th bordercolor="white" bgcolor="yellow" colspan="4" align="left">  

<label for="selectilce" class="style3" >İLÇE:</label></th>

<th bordercolor="white" bgcolor="yellow" colspan="4" align="left">  

 <div id="statediv"><select name="selectilce" id="selectilce" onselect="javascript:reloadPage(this)"> 

	<option><?php echo "Önce İli Seçiniz";?></option>

        </select></div>	  </th>

		</tr>

		<tr>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<label class="style5">Kurum Adı:</label></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left"><input type="text" name="kurumgir" id="kurumgir" value="" /></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<label class="style5">ASM Adı:</label></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<input type="text" name="asmgir"  id="asmgir" value=""></th>

</tr>

<tr>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<label class="style5">A.Hek. Adı:</label></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<input type="text" name="drgir" id="drgir" value=""></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<label class="style5">ASE Adı:</label></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

 <input type="text" name="asegir" id="asegir" value=""></th>

 </tr>

<tr>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<label class="style5">ASE Ünvanı:</label></th>

<th bordercolor="white" bgcolor="yellow"  colspan="4" align="left">

<input type="text" name="aseungir" id="aseungir" value=""></th>

<th bordercolor="white" bgcolor="yellow"  colspan="16"><input name="submit3" type="button" value="Kurum Kaydı Kontrol" onclick="kontrolkurum();" onsubmit="javascript:reloadPage(this)" /></th>

<tr>  

<th bordercolor="white" bgcolor="yellow" align="center" colspan="16">

<div style="font-family:Arial,Helvetica,sans-serif","font-size:14px,border-style:none" id="sonuc2"></div></th>

</tr>

</table>

</form>

<form method="GET" name="form3" action="ilkaydet.php">



<?php

//mysql baglantisi

include("con_023.php");
//echo $_SESSION["uye"];
$kim=$_SESSION["uye"];
$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysql_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);

//echo substr($hamkod,-3,3);
//echo $kodiki;
}
if(substr($hamkod,-3,3)=="TSM"){
$resultkod = @mysql_query("select socad from ocak where(select left(socad,5)='$kod') order by socad asc");
}else if(substr($hamkod,-3,3)=="HSM"){
$resultkod = @mysql_query("select socad from ocak where(select left(socad,2)='$kodiki' and right(socad,3)='HSM' or left(socad,2)='$kodiki' and right(socad,3)='TSM') order by socad asc");
}
?>
<br>

<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">

  <tr>

    <th bordercolor="white" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Kullanıcı Girişi</font></th>

  </tr>

  <tr>

    <th bordercolor="white" bgcolor="yellow"  colspan="8" align="center"> <label for="label" class="style3">Kurum Kodu:</label>

    <select name="uyekodum" id="uyekodum" onchange="kontroluye();" onclick="kontroluye();" onselect="javascript:reloadPage(this)">

      <option value=""><?php echo "Üye Kodu Seçiniz";?></option>

      <? while($rowkod=mysql_fetch_array($resultkod)) { ?>

      <option value="<?=$rowkod['socad']?>">

        <?=$rowkod['socad']?>

        </option>

      <? } 

 @mysql_close($dbh);

 

  ?>

    </select></th>

<th bordercolor="white" bgcolor="yellow"  colspan="8"><input name="submit3" type="button" value="Kullanıcıları Listele" onclick="kontroluser();" onsubmit="javascript:reloadPage(this)" /></th>	

  </tr>

  <tr>

    <th bordercolor="white" bgcolor="yellow"  colspan="16" align="center"> <div id="drdiv"></div></th>

  </tr>

</table>

</form>

<br>

 <table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">

 <tr>

<th bordercolor="white" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Admin Paneli Çıkışı</font></th>

</tr>

<tr>

<?

$apc='Admin Panelden Çık';

$cikis='Proğramdan Çık';



?>

  <th bordercolor="white" bgcolor="yellow"  colspan="16"><a href="../frm023kayit.php" style="color:#FF0000" onmouseover="this.style.color='black'" onmouseout="this.style.color='#FF0000'" ><? echo $apc ; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../cikis.php" style="color:blue" onmouseover="this.style.color='red'" onmouseout="this.style.color='blue'" ><? echo $cikis ; ?></a></th>

</tr>

</table>

<?php

@mysql_close($dbh);

//unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor

//session_destroy(); // oturumları siler

}

/*

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





$ilgelenx=$_GET['ilgir']; // get metodu ile formdan gelen geğer alınıyor

$ilgelen=toUpperCase($ilgelenx);

$ilsecgelen=$_GET['ilno']; // get metodu ile formdan gelen geğer alınıyor

$ilcegelen=toUpperCase($_GET['ilcegir']); // get metodu ile formdan gelen geğer alınıyor

$kilgelen=$_GET['selectil'];

$kilcegelen=$_GET['selectilce'];

$kurumgelen=toUpperCase($_GET['kurumgir']);

$asmgelen=ucwords_tr($_GET['asmgir']);

$drgelen=ucwords_tr($_GET['drgir']);

$asegelen=ucwords_tr($_GET['asegir']);

$aseungelen=ucwords_tr($_GET['aseungir']);









//echo $ilgelen;

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

echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:green">İl Kaydedildi...</font></th></table>';

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

}

}

*/

?>



</body>

</html>