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

$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=replace_tr($ilcegelen);
$ilcegelenvt=iconv("utf-8","iso_8859-9",$ilcegelen);

//$ilcegeleny=trsuz($ilcegelenx);
//$ilcegelen=toUpperCase($ilcegeleny);
//echo $ilcegelenvt;
//exit;

//echo $ilgelenx;
//echo $ilgeleny;

//echo $ilgelenz;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $ilcegelenx;
//echo $ilcegeleny;

$resultilce = @mysql_query("select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelenvt')") ;
while($sonucum=mysql_fetch_array($resultilce)){
$ilcenom=$sonucum['ilceid'];
$ilnom=$sonucum['ilinad'];
	
	//echo $ilcenom;
    //echo $ilnom;

}
$resultocak = @mysql_query("select * from ocak where(ilinad='$ilnom' and ilce='$ilcenom')") ;
while($sonucum=mysql_fetch_array($resultocak)){
$ocakilnom=$sonucum['ilinad'];
$ocakilcenom=$sonucum['ilce'];
//$dosya=$sonucum['dosya_adi'];
//$resim=$sonucum['resim_adi'];

//echo $adresnom;

$resultocakilsil = "delete from ocak where(ilinad='$ocakilnom' and ilce='$ocakilcenom')" ;

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

$resultvilce = "delete from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelenvt')";
if(@mysql_query($resultvilce)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silindi).' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></tr></thead></table></div>';

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