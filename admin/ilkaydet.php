<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kayıt Değiştirildi</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css"></head>

<body>
<?
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");
	
$ilgelen=$_GET['ilgir'];
$ilgelen=replace_tr($ilgelen);
$ilgelenvt=iconv("utf-8","iso-8859-9",$ilgelen);

//echo $ilgelen;
//echo $ilgelenvt;

//echo $ilgelenz;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $kilgelen;
//echo $kilcegelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;


$ilsec="select * from il where(ilad='$ilgelenvt')";
$socsorgu=mysql_query($ilsec);
$say=mysql_num_rows($socsorgu);
//echo $say;
if($say<1 AND $ilgelenvt !=""){
$kayit="INSERT INTO il(ilad) VALUES ('$ilgelenvt')";
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ilgelen.' '.$ilok.' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 Geridön </a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">İl Kaydedilemedi... <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table></div>';
}
}
while($sonucum=mysql_fetch_array($socsorgu)){
$ilno=$sonucum['ilid'];
$iladi=$sonucum['ilad'];
 	
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