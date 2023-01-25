<?php
//include("index.php");
session_start();
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
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
</script>
<script>
function goBack() {
    window.history.back();
	}
</script>
</head>
<body style="background:#000000">
<?php
include("../connect.php");
include('../form013/frm013alanlari.php');
$email=$_GET["EmailAdresi"];
$ileti=$_GET["iltiid"];
$hayir="Hayır";
$evet="Evet";
$ileticonnect= mysqli_query($dbh,"select * from bizeulasin where(iltiid='$ileti')");
while($donguileti=mysqli_fetch_array($ileticonnect)){
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
?>
<div class="row" style="background:#000000">
  <div class="col-md-8 offset-md-2 mt-3" style="background:#000000">
    <div class="card">
      <div class="card-body">
	  <div class="card-header bg-success" align="left">
        <h5 class="card-title bg-success" align="left"><?php $silinecekad=="" ? $silinecekad="..." : $silinecekad; $labelulas="için Kayıt Silme Onayı"; echo $silinecekad.' '.$labelulas; ?>
        <a href="admin.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
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
echo '<th class="align-middle">'.$tarih.'</th>';
echo '<th class="align-middle">'.$adi.'</th>';
echo '<th class="align-middle">'.$iletisi.'</th>';
echo '<th class="align-middle">'.$vtarih.'</th>';
echo '<th class="align-middle">'.$vercevap.'</th>';
echo '</tr>';
echo '<tbody>';
echo '<tr>';
echo '<td class="align-middle">'.$silinecektarihn.'</td>';
echo '<td class="align-middle">'.$silinecekad.'</td>';
echo '<td class="align-middle">'.$silinecekileti.'</td>';
echo '<td class="align-middle">'.$silinecekctarihn.'</td>';
echo '<td class="align-middle">'.$silinecekcevap.'</td>';
echo '</tr>';
echo '<th colspan="5" class="text-danger bg-warning text-center">Bu Kaydı Silmek İstediğinize Emin misiniz?</th>';
echo '<tr>';
echo '</th></tr></thead></tbody></table>';
echo '</div>';
echo '</form>';
echo '</div>';	
}	
echo '<div class="card-footer" align="center">';
echo '<th colspan="5" class="text-danger bg-warning text-center"><a href="admin.php" tabindex="1" title="hayir" onClick="goBack();" class="btn btn-success btn-sm text-dark mr-5">
<i class="fa fa-reply-all fa-lg"></i> '.$hayir.'</a>';
echo '<a href="#"  onclick="iletisilonay();" tabindex="2" title="evet"class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
?>
<div id="sonuciletisil" align="center"></div>
</div>
</div>
</div>
</div>
</div>
<?php
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>