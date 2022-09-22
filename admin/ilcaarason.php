<?

include("index.php");

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";

}else{

// timeout periyodu, sn olarak

$inactive = 1300;

if(isset($_SESSION['timeout']) ) {

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)

{ 
unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor

session_destroy(); header("Location: cikis.php"); }

}

$_SESSION['timeout'] = time();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />

<title>Form 013 Kayıt Girişi</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="duyuru.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bootstrap-4/font-awesome/css/font-awesome.min.css">

</head>

<body>

<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://roshanbh.com.np
?>

<? $country=intval($_GET['selectil']);
include("../../con_023.php");
include("tanimveyetkiler.php");
function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

/*$link = mysql_connect('localhost', 'root', 'malika'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('frm023');*/
$solilce=substr($_SESSION["uyekodu"],0,5);

$resultocakilce = @mysql_query("select * from ocak where left(socad,5)='$solilce' order by socad asc");
while($rowilcekod=mysql_fetch_array($resultocakilce)) {
$ilcekodu=$rowilcekod['ilce'];
}
	
if(substr($hamkod,-3,3)==$bakanlikyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
}else if(substr($hamkod,-3,3)==$ilyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
}else if(substr($hamkod,-3,3)==$kurumyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE(ilceid='$ilcekodu' and ilinad='$country') order by ilcead asc";
}else if(substr($hamkod,-9,9)==$kulyetki){
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE(ilceid='$ilcekodu' and ilinad='$country') order by ilcead asc";
}

//$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
$result=mysql_query($query);

?>
<select class="form-control form-control-sm mt-1 mb-1 w-50" name="selectilce">
<option><?php echo trsuz("İlçe Seçiniz"); ?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['ilceid']?>><?=trsuz($row['ilcead'])?></option>
<? } ?>
</select>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../bootstrap-4/popper.js"></script>
<script src="../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>
<?

//unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor

//session_destroy(); // oturumları siler

}


?>