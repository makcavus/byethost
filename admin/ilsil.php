<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");

$ilgelen=iconv("utf-8","iso-8859-9",$_GET['ilgir']); // get metodu ile formdan gelen geğer alınıyor
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;
$resultil = @mysql_query("select * from il where(ilad='$ilgelen')") ;
while($sonucum=mysql_fetch_array($resultil)){
$ilnom=$sonucum['ilid'];
$iladim=$sonucum['ilad'];

//echo $ilnom;
//echo $tipadim;

}
$resultocak = @mysql_query("select * from ocak where(ilinad='$ilnom')") ;
while($sonucum=mysql_fetch_array($resultocak)){
$ocakilnom=$sonucum['ilinad'];
//$dosya=$sonucum['dosya_adi'];
//$resim=$sonucum['resim_adi'];

//echo $adresnom;

$resultocakilsil = "delete from ocak where(ilinad='$ocakilnom')" ;

if(@mysql_query($resultocakilsil)){
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
$resultilce = @mysql_query("select * from ilce where(ilinad='$ilnom')") ;
while($sonucum=mysql_fetch_array($resultilce)){
$ilceilnom=$sonucum['ilinad'];
//$dosya=$sonucum['dosya_adi'];
//$resim=$sonucum['resim_adi'];

//echo $adresnom;

$resultilceilsil = "delete from ilce where(ilinad='$ilceilnom')" ;

if(@mysql_query($resultilceilsil)){
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

$resultvil = "delete from il where(ilad='$ilgelen')" ;
if(@mysql_query($resultvil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silindi...<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön... </a></th></tr></thead></table></div>';

}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silinemedi.... </th></tr></thead></table></div>';

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