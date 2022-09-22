<?

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfayï¿½ gï¿½rï¿½ntï¿½leme yetkiniz yoktur.";

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

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
//include('../frm013alanlari.php');



//mysql baglantisi

include("../../con_023.php");
include("tanimveyetkiler.php");
include('../frm013alanlari.php');

//echo $_SESSION["uye"];
$kim=$_SESSION["uye"];
$resultx = @mysql_query("select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
while($xkod=mysql_fetch_array($resultx)) {
$hamkod=$xkod['uyekod'];
$kod=substr($xkod['uyekod'],0,5);
$kodiki=substr($xkod['uyekod'],0,2);

//echo $kod;

} 
if(substr($hamkod,-3,3)==$bakanlikyetki){
$resultuser = @mysql_query("select * from uyeler order by uyekod asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$resultuser = @mysql_query("select * from uyeler where(select left(uyekod,2)='$kodiki' and right(uyekod,3)='$ilyetki' or left(uyekod,2)='$kodiki') order by uyekod asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$resultuser = @mysql_query("select * from uyeler where(select left(uyekod,5)='$kod') order by uyekod asc");
}
$say=0;

$iletisayisi=mysql_num_rows($resultuser);

$iptal="Ä°ptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';

echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';

$sno='Sıra No:';

$kod='Kurum Adı:';

$dr='Doktor Adı:';

$user='Kullanıcı Adı:';

$sifre='Şifre:';



echo '<th>'.$sno.'</th>';

echo '<th>'.$kod.'</th>';

echo '<th>'.$dr.'</th>';

echo '<th>'.$user.'</th>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';

echo '</tr>';  

echo '</thead>';  

while($rowuser=mysql_fetch_array($resultuser)) {$say++;

$no=$rowuser['uyeno'];

$kurum=$rowuser['uyekod'];

$dr=$rowuser['uyekim'];

$user=$rowuser['uyead'];

$pass=$rowuser['uyesifre'];

echo '<tbody>';

echo '<tr>';

echo '<td align="center"><h6>'.$say.'</h6></td>';

echo '<td><h6>'.trsuz($kurum).'</h6></td>';

echo '<td><h6>'.trsuz($dr).'</h6></td>';

echo '<td><h6>'.trsuz($user).'</h6></td>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';

echo '</tr>';

echo '</tbody>';  

}

echo '</table>';

echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1 mt-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';

}

?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

