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

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
//include('../frm013alanlari.php');



//mysql baglantisi

include("../../con_023.php");
include("tanimveyetkiler.php");
include('../frm013alanlari.php');	
if(substr($hamkod,-3,3)==$bakanlikyetki){
$resultuser = @mysql_query("select * from ocak order by ilinad desc,ilce desc,socad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$resultuser = @mysql_query("select * from ocak where(left(socad,2)='$kodiki') order by  ilce desc,socad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$resultuser = @mysql_query("select * from ocak where(ilinad='$ilno' and left(socad,5)='$kod') order by socad asc");
}
$say=0;
$iletisayisi=mysql_num_rows($resultuser);
if($iletisayisi==0){
$tamam="Tamam";
$yetkikayityok="Listeleme Yetkiniz veya Kurum Kaydı yoktur.";
echo '<div class="alert alert-primary text-danger">'.trsuz($yetkikayityok).'</div>';
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$tamam.'</a>';

}else{
//include("con_birim.php");
$iptal="İptal";
echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';

echo'<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">';
echo '<thead class="thead-dark" align="center">';
echo '<tr>';

$birimno='Sıra No:';

$birimadi='İl Adı:';

$ilceminadi='İlçe Adı';

$kurumadi="Birim Adı:";

$asmadim="Kurum Adı:";

$dradim="Yetkili Adı:";

$aseunvanim="Görevli Ünvan:";

$aseadim="Görevli Adı:";

echo '<th>'.$birimno.'</th>';

echo '<th>'.$birimadi.'</th>';

echo '<th>'.$ilceminadi.'</th>';

echo '<th>'.$kurumadi.'</th>';

echo '<th>'.$asmadim.'</th>';

echo '<th>'.$dradim.'</th>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$aseunvanim.'</font></td>';

echo '<th>'.$aseadim.'</th>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="center"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$sifre.'</font></td>';



echo '</tr>';  

echo '</thead>';  


while($rowuser=mysql_fetch_array($resultuser)) {

$no=$rowuser['ocid'];

$kurum=$rowuser['ilinad'];

$ilceadim=$rowuser['ilce'];

$ocakadim=$rowuser['socad'];

$asmem=$rowuser['asmadi'];

$yetkiliadi=$rowuser['dradi'];

$gorevliunv=$rowuser['aseunvan'];

$gorevliadi=$rowuser['aseadi'];

$resultiladi= @mysql_query("select * from il where(ilid='$kurum') order by ilad asc");

while($rowiladi=mysql_fetch_array($resultiladi)) {

$iladim=$rowiladi['ilad'];

$resultilceadi= @mysql_query("select * from ilce where(ilceid='$ilceadim' and ilinad='$kurum') order by ilcead asc");

while($rowilceadi=mysql_fetch_array($resultilceadi)) {$say++;

$ilceminadi=$rowilceadi['ilcead'];

echo '<tbody>';

echo '<tr>';

echo '<td align="center"><h6>'.$say.'</h6></td>';

echo '<td><h6>'.trsuz($iladim).'</h6></td>';

echo '<td><h6>'.trsuz($ilceminadi).'</h6></td>';

echo '<td><h6>'.trsuz($ocakadim).'</h6></td>';

echo '<td><h6>'.trsuz($asmem).'</h6></td>';

echo '<td><h6>'.trsuz($yetkiliadi).'</h6></td>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16" align="left"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.trsuz($gorevliunv).'</font></td>';

echo '<td><h6>'.trsuz($gorevliadi).'</h6></td>';

//echo '<td bordercolor="black" border="1" bgcolor="yellow" colspan="16"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">'.$pass.'</font></td>';



echo '</tr>';
echo '</tbody>';

  
}
}
}
echo '</table>';

echo '<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';}
}
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

