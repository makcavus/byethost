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
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$ilsecgelen=$_GET['selectilno'];
$ilcedeggelen=$_GET['ilcegirgelen'];
//$ilcegelen=trsuz($ilcegelenx);

$ilcegelen=$_GET['ilcegir'];
$ilcegelenconv=trsuz($ilcegelen);
$ilcegelenx=replace_tr($ilcegelenconv);
$ilcegelenvt=$ilcegelenx;
$ilcegelenvt=iconv("utf-8","iso_8859-9",$ilcegelenvt);

$onceki="ilçesi";
$sonraki="olarak değiştirildi...";
$geridon="Geri Dön";

//echo $ilno;
//echo $ilsecgelen;
//echo $ilcegelenx;
//echo $ilcegelenvt;
//echo $ilcedeggelen;
//exit;
//echo $ilcegelenx;
//echo $ilcedeggelen;
//echo $ilcedeggelenx;
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE ilce SET  ilcead='$ilcegelenvt' where(ilinad='$ilsecgelen' and ilcead='$ilcedeggelen')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($ilcedeggelen).' '.trsuz($onceki).' '.$ilcegelenx.' '.trsuz($sonraki).' <a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">�l�e De�i�tirilemedi...<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.trsuz($geridon).'</a></th></thead></table>';
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