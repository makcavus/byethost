<?

include("../index.php");

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";

}else{



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Silme Onay�</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>



<body>

<?php 
include("../../connect.php");
//include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");
	
$birimgelenx=iconv("utf-8","iso-8859-9",$_GET['birimgir']); // get metodu ile formdan gelen ge�er al�n�yor
$birimgelen=replace_tr($birimgelenx);
//$birimgelen=toUpperCase($birimgelenx);
//echo $birimgelen;
//echo $birimgelenvt;
//echo $birimgelenx;

//echo replace_tr($birimgelen);
//echo $birimgelen;
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;




$resultvyil = @mysql_query("select * from birim where(birim_ad='$birimgelenx')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilnom=$sonucum['birim_id'];
$birimadim=$sonucum['birim_ad'];
//echo $iladim;
}

echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silmeonay.'</th>';
echo '</tr>';
$resultgerekli = @mysql_query("select * from gerekli where(birim_idi='$ilnom')") ;
$say=@mysql_num_rows($resultgerekli);

while($sonucum=mysql_fetch_array($resultgerekli)){
$gereklinom=$sonucum['birim_idi'];
$icerik=$sonucum['icerik'];
$dosya=$sonucum['dosya_adi'];
$resim=$sonucum['resim_adi'];
/*echo '<tr>';
echo '<th>';
echo $icerik.' -- '.$dosya;
echo $resim.'<br>';
echo '</th>';
echo '</tr>';*/
}
echo '<tr>';
echo '<th class="bg-danger text-light">';
$silinecekler="Gerekli belge/form silinecektir.";
echo $say.' '.iconv("iso-8859-9","utf-8",$silinecekler);
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.replace_tr(iconv("iso-8859-9","utf-8",$birimgelenx)).'---</strong> '.$silemin.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrolbirim();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="birimsil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
echo '</th>';
echo '</tr>';
echo '<thead>';
echo '</table>';
echo '</div>';
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

</body>
<?php
}
?>
</html>

