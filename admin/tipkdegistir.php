<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kay�t De�i�tirildi</title>
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
	
$tipgelen=$_GET['tipgir'];
$tipgelenconv=trsuz($tipgelen);
$tipgelenx=replace_tr($tipgelenconv);
$tipgelenvt=$tipgelenx;
$tipgelenvt=iconv("utf-8","iso_8859-9",$tipgelenvt);
	
$tipdeggelen=$_GET['selecttip'];
//$tipdeggelen=replace_tr($tipdeggelen);
$tipdeggelenvt=$tipdeggelen;
//echo $ilno;
/*echo '0-'.$tipgelen.'<br>';
echo '1-'.$tipgelenx.'<br>';
echo '2-'.$tipgelenvt.'<br>';*/
//echo '3-'.$tipdeggelenvt;

//echo $ildeggelen;
//echo $ildeggelenx;
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE kurumtipi SET  tipi='$tipgelenvt' where(tipi='$tipdeggelenvt')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($tipdeggelenx).' '.trsuz($oncekitip).' '.$tipgelenx.' '.trsuz($sonraki).'<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></font></label></th></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($tipdegismedi).'</label><a href=# onClick="kontroltip();"><a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.$geridon.'</a></font></label></th></table></div>';
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