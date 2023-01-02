<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>

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
<body onload="JavaScript:timedRefresh(1000000);">

<form method="GET" name="form0" action="ilekle.php">
<br>

<table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">
<tr>
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">İl Girişi</font></th>
</tr>
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="2" align="left" >
<label class="style5">İl Adı:</label> 
</th>
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="6" align="left">
<input type="text" name="ilgir" value="">
</th>
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" align="right" colspan="6">
<label class="style5">Güncellemek için butona iki defa tıkla</label>
</th>
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="2">
<input type="submit" value="İl Kaydet" onsubmit="javascript:reloadPage(this)">
</th>
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
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">İlçe Girişi</font></th>
</tr>
<th bordercolor="white" bgcolor="yellow"  colspan="2" align="left" >
<label for="selectil" class="style3">İL:</label>
</th>
<th bordercolor="white" bgcolor="yellow" colspan="3" align="left" >
<select name="selectil" onchange="javascript:ilce()" onselect="javascript:reloadPage(this)">
  <option value=""><?php echo "İli Seçiniz";?></option>
  <? while($row=mysql_fetch_array($result)) { ?>
  <option value="<?=$row['ilid']?>">
  <?=$row['ilad']?>
  </option>
  <? } ?>
</select>
</th>
<script language="JavaScript"><!--
function ilce(){
document.form1.ilno.value=document.form1.selectil.options[document.form1.selectil.selectedIndex].value;
//metin.value=menu.options[menu.selectedIndex].text;

}
</script>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="3" align="left">
<input type="hidden" name="ilno">
</th>
<th bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<label class="style5">İlçe Adı:</label> 
</th>
<th bordercolor="white" bgcolor="yellow"  colspan="3" align="left">
<input type="text" name="ilcegir" value="">
</th>
<th bordercolor="white" bgcolor="yellow"  colspan="3" align="left">
<input name="submit" type="submit" value="İlçe Kaydet" />
</th>
</table>
</form>
<form method="GET" name="form2" action="ilekle.php">

<?php
//mysql baglantisi
$result = @mysql_query("select ilid,ilad from il order by ilad asc");
?>
<br>
 <table class="cizgi" border="2" align="center" cellpadding="0" cellspacing="0" width="76%">
 <tr>
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Kurum Girişi</font></th>
</tr>
<tr>
 <th  align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<label for="selectil" class="style3">İL:</label>
</th>
<th  align="left" bordercolor="white" bgcolor="yellow" colspan="2">
<select name="selectil" onChange="getState(this.value)" onselect="javascript:reloadPage(this)"> 
	<option value=""><?php echo "İli Seçiniz";?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<? } ?>
	</select>
 </th>
 
<th  align="right" bordercolor="white" bgcolor="yellow" colspan="3" align="left">  
<label for="selectilce" class="style3" >İLÇE:</label>  
</th>
<th  align="left" bordercolor="white" bgcolor="yellow" colspan="3" align="left">  
 <div id="statediv"><select name="selectilce" onselect="javascript:reloadPage(this)"> 
	<option><?php echo "Önce İli Seçiniz";?></option>
        </select></div>
		</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="3" align="left">
<label class="style5">Kurum Adı:</label>
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="3" align="left">
 <input type="text" name="kurumgir" value="">
</th>
</tr>
<tr>
<th  align="left"bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<label class="style5">ASM Adı:</label>
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<input type="text" name="asmgir" value="">
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<label class="style5">A.Hek. Adı:</label> 
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<input type="text" name="drgir" value="">
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<label class="style5">ASE Adı:</label>
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
 <input type="text" name="asegir" value="">
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<label class="style5">ASE Ünvanı:</label> 
</th>
<th align="left" bordercolor="white" bgcolor="yellow"  colspan="2" align="left">
<input type="text" name="aseungir" value="">
</th>
</tr>
<th bordercolor="white" bgcolor="yellow"  colspan="16">
<input name="submit" type="submit" value="Kurum Kaydet" />		
</th> 
</table>
</form>

<?php
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


$ilgelen=toUpperCase($_GET['ilgir']); // get metodu ile formdan gelen geğer alınıyor

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


?>
 </body>
</html>