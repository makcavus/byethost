<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Kurum Tipi Kontrol Paneli</title>

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
  </head>
<?php header("Cache-Control: no-cache,no-store");

//echo rand();

?>

<?
include("../../connect.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");
	
$tipgelen=$_GET['tipgir'];
$tipgelen=replace_tr($tipgelen);
$tipgelenvt=iconv("utf-8","iso-8859-9",$_GET['tipgir']);


//$tipgelen=iconv("utf-8","iso-8859-9",$_GET['tipgir']);

//$birimgelen=iconv("utf-8","iso-8859-9",$birimgelenx);

//echo $ilno;

//echo $birimgelenx;

//echo $tipgelen;
//echo $tipgelenvt;

$vtsec="select * from kurumtipi where(tipi='$tipgelenvt')";

$socsorgu=mysql_query($vtsec);

$say=mysql_num_rows($socsorgu);

//echo $say;

echo '<p>';

if($tipgelen == "" and $say<1){

$uyar=$tipgirilmedi;

echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
//$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}elseif($tipgelen != "" and $say<1){

$uyar=$tipgelen.'---'.$tipkaydet;

echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;

?>

<form method="GET" name="form4" action="ilekle.php">

<input type="hidden" name="tipgir" id="tipgir" value="<? echo $tipgelen; ?>">



<a href=# onclick="kayittip();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>

</form>

<?

//echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';

}else{

$uyar=$uyarbaslik;

echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.trsuz($uyar).'</h6></div>' ;

echo '<p>';

echo '<a href=# onClick="degtip();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>';

//echo'&nbsp;&nbsp;&nbsp;&nbsp;';

//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';

echo'&nbsp;&nbsp;&nbsp;&nbsp;';

echo '<a href=# onClick="onaytip();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> Sil</a>';

echo'&nbsp;&nbsp;&nbsp;&nbsp;';

echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';

}

@mysql_close($dbh) ;

?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

</body>

</html>
