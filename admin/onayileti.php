<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Silme Onayı</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<script language="JavaScript" src="toplama.js" type="text/javascript">

</script>	
<script type="text/JavaScript">
<!--
function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 
</script>
<script type="text/JavaScript">
<!--
function timedRefresh(timeoutPeriod) {
	setTimeout("location.reload(true);",timeoutPeriod);
}
//   -->
//<body onload="JavaScript:timedRefresh(100000);">
</script>
<script>
function goBack() {
    window.history.back();
	}
</script>
</head>

<body style="background:#000000">

<?php
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include("../../connect.php");
//include("../../con_023.php");
//include("tanimveyetkiler.php");
include('../frm013alanlari.php');
	
$email=$_GET["EmailAdresi"];
$ileti=$_GET["iltiid"];
$hayir="Hayır";
$evet="Evet";
//echo $ileti;
$ileticonnect= mysql_query("select * from bizeulasin where(iltiid='$ileti')");
while($donguileti=mysql_fetch_array($ileticonnect)){
$silinecekid=$donguileti["iltiid"];
$silinecektarih=$donguileti["tarih"];
$itarihorg=substr($silinecektarih,0,10);
$iyil=substr($itarihorg,0,4);
$iay=substr($itarihorg,5,2);
$igun=substr($itarihorg,8,2);
$silinecektarihn=$igun.'.'.$iay.'.'.$iyil;
$silinecekad=$donguileti["adsoyad"];
$silinecekileti=$donguileti["dusunceniz"];
$silinecekctarih=$donguileti["cevaptarihi"];
$tarihorg=substr($silinecekctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$silinecekctarihn=$gun.'.'.$ay.'.'.$yil;
$silinecekcevap=$donguileti["cevap"];

$tarih='Tarih:';

$adi='Gönderenin Adı Soyadı:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$iletisi="İletisi:";

$vtarih='Cevap Tarihi:';

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";
//echo $silinecekid;
?>
<div class="row" style="background:#000000">
  <div class="col-md-8 offset-md-2 mt-3" style="background:#000000">
    <div class="card">
      <div class="card-body">
	  <div class="card-header bg-success" align="left">
        <h5 class="card-title bg-success" align="left"><?php $labelulas="için Kayıt Silme Onayı"; echo trsuz($silinecekad).' '.$labelulas; ?><a href="ilekle.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
          <span aria-hidden="true"><h4>&times;</h4></span>
        </a></h5>
		</div>
        <div class="card-text">
	<form action="iletisil.php" name="iletisilform" id="iletisilform" method="GET">
 <div class="form-group">
 <input name="ileti" type="hidden" id="ileti" value="<?php echo $silinecekid; ?>" class="form-control form-control-sm w-100 sm">	
<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">

<tr>
<?php
echo '<th class="align-middle">'.trsuz($tarih).'</th>';

echo '<th class="align-middle">'.$adi.'</th>';

echo '<th class="align-middle">'.$iletisi.'</th>';

echo '<th class="align-middle">'.trsuz($vtarih).'</th>';

echo '<th class="align-middle">'.trsuz($vercevap).'</th>';

echo '</tr>';
	
echo '<tbody>';
	
echo '<tr>';

echo '<td class="align-middle">'.$silinecektarihn.'</td>';

echo '<td class="align-middle">'.trsuz($silinecekad).'</td>';

echo '<td class="align-middle">'.trsuz($silinecekileti).'</td>';

echo '<td class="align-middle">'.$silinecekctarihn.'</td>';

echo '<td class="align-middle">'.trsuz($silinecekcevap).'</td>';

echo '</tr>';

echo '<th colspan="5" class="text-danger bg-warning text-center">Bu Kaydı Silmek İstediğinize Emin misiniz?</th>';
	
echo '<tr>';


echo '</th></tr></thead></tbody></table>';
echo '</div>';

echo '</form>';
	
echo '</div>';	
}	
echo '<div class="card-footer" align="center">';

echo '<th colspan="5" class="text-danger bg-warning text-center"><a href="ilekle.php" tabindex="1" title="hayir" onClick="goBack();" class="btn btn-success btn-sm text-dark mr-5"><i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '<a href="#"  onclick="iletisilonay();" tabindex="2" title="evet"class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';

?>
<div id="sonuciletisil" align="center"></div>
</div>
</div>
</div>
</div>
</div>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
