<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kayıt Değiştirildi</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>

<body>
<?
include("../../connect.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");

$birimgelen=$_GET['birimgir'];
$birimgelenconv=trsuz($birimgelen);
$birimgelenx=replace_tr($birimgelenconv);
$birimgelenvt=$birimgelenx;
$birimgelenvt=iconv("utf-8","iso_8859-9",$birimgelenvt);
	
$birimdeggelen=$_GET['selectbirim'];
//$birimdeggelen=replace_tr($birimdeggelen);
$birimdeggelenvt=$birimdeggelen;
	
/*
echo $birimgelen;
echo $birimgelenconv;
echo $birimgelenx;
	echo '<br>'.$birimgelenvt;*/
//echo $birimgelenvt;
//echo $ilgelenx;
//echo $ildeggelen;
//echo trsuz($birimdeggelen);
//	echo '<br>'.trsuz($birimdeggelenvt);
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE birim SET  birim_ad='$birimgelenvt' where(birim_ad='$birimdeggelenvt')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($birimdeggelen).' '.trsuz($oncekibirim).' '.replace_tr(trsuz($birimgelen)).' '.trsuz($sonraki).' <a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">'.trsuz($birimdegismedi).'<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.$geridon.'</a></th></thead></table>';
echo '</div>';

echo mysql_error();
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