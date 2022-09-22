<?

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";

}else{



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Untitled Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">

<script type="text/javascript" src="jquery-1.9.1.min.js"></script>

<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>

<script language="JavaScript" src="arkakara.js" type="text/javascript">
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


</head>



<body>

<?php

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
//include('../frm013alanlari.php');
$gonileti="Gönderilmiş ileti yoktur.";


//mysql baglantisi
include("../../con_023.php");
include("../../connect.php");
//include("tanimveyetkiler.php");
include('../frm013alanlari.php');

$kim=$_SESSION["uye"];
$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysql_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);

//echo $kod;
$iptal="İptal";

} 
if(substr($hamkod,-3,3)==$bakanlikyetki or $ilyetki or $kurumyetki){
$resultuser = @mysql_query("select * from bizeulasin order by tarih desc");
}
$say=0;

$iletisayisi=mysql_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
echo '<div class="alert alert-primary text-danger">'.$gonileti.'</div>';
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';

}else{
$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';

echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';

$tarih='Tarih:';

$adi='Gönderenin Adı Soyadı:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$ileti="İletisi:";

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";
echo '<th class="align-middle">'.$tarih.'</th>';

echo '<th class="align-middle">'.$adi.'</th>';

echo '<th class="align-middle">'.$telefon.'</th>';

echo '<th class="align-middle">'.$email.'</th>';

echo '<th class="align-middle">'.$ileti.'</th>';

echo '<th class="align-middle">'.$ctarihi.'</th>';

echo '<th class="align-middle">'.$vercevap.'</th>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';
echo '<th colspan="3" class="align-middle">'."İşlem:".'</th>';

echo '</tr>';  

echo '</thead>';  

while($rowuser=mysql_fetch_array($resultuser)) {$say++;

$viletiid=$rowuser['iltiid'];

$vtarih=$rowuser['tarih'];

$itarihorg=substr($vtarih,0,10);
$iyil=substr($itarihorg,0,4);
$iay=substr($itarihorg,5,2);
$igun=substr($itarihorg,8,2);
$vtarihn=$igun.'.'.$iay.'.'.$iyil;

$vadi=$rowuser['adsoyad'];

$vtelefon=$rowuser['telefon'];

$vemail=$rowuser['emailadresi'];

$vileti=$rowuser['dusunceniz'];

$vctarih=$rowuser['cevaptarihi'];

$tarihorg=substr($vctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$vctarihn=$gun.'.'.$ay.'.'.$yil;

$vcevap=$rowuser['cevap'];

$vyayinda=$rowuser['yayinda'];	
												
echo '<tbody>';

echo '<tr>';

echo '<td class="align-middle"><h6>'.trsuz($vtarihn).'</h6></td>';

echo '<td class="align-middle"><h6>'.trsuz($vadi).'</h6></td>';

echo '<td class="align-middle"><h6>'.trsuz($vtelefon).'</h6></td>';

echo '<td class="align-middle"><h6>'.trsuz($vemail).'</h6></td>';

echo '<td class="align-middle"><h6>'.trsuz($vileti).'</h6></td>';

echo '<td class="align-middle"><h6>'.trsuz($vctarihn).'</h6></td>';

echo '<td class="align-middle"><h6>'.trsuz($vcevap).'</h6></td>';

if($vyayinda==0){
echo '<td class="align-middle text-center"><i class="fa fa-ban fa-2x text-danger" aria-hidden="true"></i></td>';
}else{
echo '<td class="align-middle text-center"><i class="fa fa-rss fa-2x text-success" aria-hidden="true"></i></td>';
}

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="3" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';
echo '<td class="align-middle text-center"><h6><a href="onayileti.php?iltiid='.$viletiid.'" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> '."Sil".'</a></h6></td>';

//Eğer önceden cevap verilmişse DEĞİŞTİR, yeni cevap verilecekse CEVAPLA butonu gözüksün........
if(isset($vcevap)){
	?>
	<td class="align-middle text-center"><h6><a href="cevapla.php?iltiid=<?php echo $viletiid ; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit fa-lg"></i> Değiştir</a></h6></td>
<?php }else{ ?>
<td class="align-middle text-center"><h6><a href="cevapla.php?iltiid=<?php echo $viletiid ; ?>" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Cevapla</a></h6></td>
<?php 
} 
												
echo '</tr>';
echo '</tbody>';

}

echo '</table>';
$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';

}
}
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

