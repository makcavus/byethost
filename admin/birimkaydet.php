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
$birimgelen=replace_tr($birimgelen);
$birimgelenvt=iconv("utf-8","iso-8859-9",$birimgelen); // get metodu ile formdan gelen geğer alınıyor

$birimsecgelen=$_GET['birimno']; // get metodu ile formdan gelen geğer alınıyor

$birimsec="select * from birim where(birim_ad='$birimgelenvt')";
$socsorgu=mysql_query($birimsec);
$say=mysql_num_rows($socsorgu);
//echo $say;
if($say<1 AND $birimgelen !=""){
$kayit="INSERT INTO birim(birim_ad) VALUES ('$birimgelenvt')";
if(mysql_query($kayit)){

echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$birimgelen.' '.trsuz($birimok).' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.trsuz($geridon).'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.trsuz($birimkaydolmadi).'<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.trsuz($geridon).'</a></th></thead></table>';
 echo '</div>';
}
}
while($sonucum=mysql_fetch_array($socsorgu)){
$ilno=$sonucum['birim_id'];
$iladi=$sonucum['birim_ad'];
 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilno."<br>".$iladi);				
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