<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
</head>

<body>
<form action="<?php echo $PHP_SELF;?>" method="get" name="form1" id="form1">   
<?
include('con_023.php');
?>
<?php

//mysql baglantisi

$result = @mysql_query("select distinct socad from ocak order by socad asc");

?>


  <label for="select">Sağlık Ocağı:</label>
 <select name="select" id="select">
    <?php

while ($kat=mysql_fetch_assoc($result) ) {
echo '<option>'.$kat['socad'].'</option>';
}
//mysql_close($dbh);   
?>
  </select>
  &nbsp;&nbsp;&nbsp; &nbsp;
 
<?php

//mysql baglantisi

$resultyil = @mysql_query("select distinct yiladi from yil order by yiladi asc");

?>


  <label for="selectyil">Yıl:</label>
 <select name="selectyil" id="selectyil">
    <?php

while ($katyil=mysql_fetch_assoc($resultyil) ) {
echo '<option>'.$katyil['yiladi'].'</option>';
}
//mysql_close($dbh);   
?>
  </select> 
  &nbsp;&nbsp;&nbsp; &nbsp;   
<?php

//mysql baglantisi

$resultay = @mysql_query("select distinct ayadi from ay order by ayid asc");

?>


  <label for="selectay">Ay:</label>
 <select name="selectay" id="selectay">
    <?php

while ($katay=mysql_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
//mysql_close($dbh);   
?>
  </select> 

 <?php
  $socu=$_GET['select'];
  $resultsoc = @mysql_query("select * from ocak where(socad='$socu')");
while($sonucumsoc=mysql_fetch_array($resultsoc)){
$socno=$sonucumsoc['ocid'];
//echo $socno;
}
?>

<?php
$yil=$_GET['selectyil'];
$resultvyil = @mysql_query("select * from veri where(vocid='$socno' and vyilid='$yil' and vayid='".$_GET['selectay']."')");
while($sonucum=mysql_fetch_array($resultvyil)){

$yilim=$sonucum['vyilid'];
$verim=$sonucum['hamveri'];
//echo $yilim;
}
?>
<input type="submit" class="style5" value="Göster" />
<input name="" type="text" value="<?php echo $yilim ?>">
<input name="" type="text" value="<?php echo $verim ?>">
</form>

</body>
</html>
