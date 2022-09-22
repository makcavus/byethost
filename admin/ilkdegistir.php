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
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
	
$ilgelen=$_GET['ilgir'];
$ilgelenconv=trsuz($ilgelen);
$ilgelenx=replace_tr($ilgelenconv);
$ilgelenvt=$ilgelenx;
$ilgelenvt=iconv("utf-8","iso_8859-9",$ilgelenvt);
	
$ildeggelen=$_GET['selectil'];
//$ildeggelen=replace_tr($ildeggelen);
$ildeggelenvt=$ildeggelen;
/*
echo '0-'.$ilgelen.'<br>';
echo '1-'.$ilgelenx.'<br>';
echo '2-'.$ilgelenvt.'<br>';
echo '3-'.$ildeggelen.'<br>';	
echo '4-'.$ildeggelenvt;
*/
$kayit="UPDATE il SET  ilad='$ilgelenvt' where(ilad='$ildeggelenvt')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($ildeggelenx).' '.trsuz($onceki).' '.$ilgelenx.' '.trsuz($sonraki).' <a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">İl Değiştirelemedi...<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön</a></th></thead></table>';
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