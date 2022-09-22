<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">

<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>

<body>
<?
include("../../connect.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");

$tipgelen=iconv("utf-8","iso-8859-9",$_GET['tipgir']); // get metodu ile formdan gelen geğer alınıyor
//$tipgelen=toUpperCase($tipgelenx);
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;
$resulttip = @mysql_query("select * from kurumtipi where(tipi='$tipgelen')") ;
while($sonucum=mysql_fetch_array($resulttip)){
$tipnom=$sonucum['tipid'];
$tipadim=$sonucum['tipi'];

//echo $tipnom;
//echo $tipadim;

}

$resultadres = @mysql_query("select * from adres where(tipi='$tipnom')") ;
while($sonucum=mysql_fetch_array($resultadres)){
$adresnom=$sonucum['tipi'];
//$dosya=$sonucum['dosya_adi'];
//$resim=$sonucum['resim_adi'];

//echo $adresnom;

$resultadressil = "delete from adres where(tipi='$adresnom')" ;

if(@mysql_query($resultadressil)){
/*echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silindi.' 
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
*/
}else{
/*
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silinemedi.'</th></tr></thead></table></div>';
*/
}

}
//exit;
$resultvyil = "delete from kurumtipi where(tipi='$tipgelen')" ;
if(@mysql_query($resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silindi).' 
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></tr></thead></table></div>';

}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silinemedi).'</th></tr></thead></table></div>';

}
@mysql_close($dbh);
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

 </body>
</html>