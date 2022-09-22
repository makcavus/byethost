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

<title>Untitled Document</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">

</head>



<body>

<?php

function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
//include('../frm013alanlari.php');



//mysql baglantisi

include("../../con_023.php");
include("../../connect.php");
//echo $_SESSION["uye"];
$kim=$_SESSION["uye"];
$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysql_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);

//echo $kod;

} 
if(substr($hamkod,-3,3)=="TSM" or "HSM"){
$resultuser = @mysql_query("select * from birim order by birim_ad asc");
//$say=mysql_num_rows($resultuser);
//echo $say;
}
$say=0;
$iletisayisi=mysql_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
$yetkikayityok="Birim Kaydı yoktur.";
echo '<div class="alert alert-primary text-danger">'.$yetkikayityok.'</div>';
echo '<div class="alert alert-primary text-danger">Kurum Kaydı yoktur.</div>';
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';

}else{

$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';

echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';

echo '<thead class="thead-dark" align="center">';

echo '<tr>';

$birimno='Sıra No:';

$birimadi='Şube-Birim Adı:';

echo '<th>'.$birimno.'</th>';

echo '<th>'.$birimadi.'</th>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';



echo '</tr>';
  
echo '</thead>';

while($rowuser=mysql_fetch_array($resultuser)) {$say++;

$no=$rowuser['birim_id'];

$kurum=$rowuser['birim_ad'];


echo '<tbody>';

echo '<tr>';

echo '<td align="center"><h6>'.$say.'</h6></td>';

echo '<td><h6 class="ml-2">'.iconv("iso-8859-9","utf-8",$kurum).'</h6></td>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';



echo '</tr>';

echo '<tbody>';

}

echo '</table>';

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

