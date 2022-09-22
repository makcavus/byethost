<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Haritadaki Yeri</title>
<style type="text/css">
body{margin:0 0px;cursor:default;background-color:#000000;}
.renk {background:#CCFFCC; font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}
.renk1 {background:#CCFFCC; font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}
</style>
<body>
<?php
include('connect.php');
$adrid=$_GET['adrid'];

 //echo "adrid".$adrid; 

//echo $ilidi;
$kriter="select * from adres where(adrid='$adrid')";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);
while($array_galeri=mysqli_fetch_array($sorgu)){
$haritam=$array_galeri['harita'] ;
//echo '<table align="left" width="79%" border="1" bordercolor="#000000" cellspacing="0" cellpadding="0">';
 
//echo '</table>';
//echo '<br>';
//echo '<br>';
?>
<div style="font-family:Arial,Helvetica,sans-serif","font-size:14px,border-style:none"><?php echo $haritam ; ?></div>
<?php
}
@mysqli_close($dbh);

?>
</body>
</html>

