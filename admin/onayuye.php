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
</head>

<body>
<?php 
include("../../con_023.php");
include("../../fonksiyonlar.php");
include("tanimveyetkiler.php");
include('../frm013alanlari.php');
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
function ucwords_tr($deger)
         {
         $deger = split(" ",trim($deger));
         $deger_tr = ""; 

         for($x=0; $x < count($deger); $x++)
             {
             $deger_bas = substr($deger[$x],0,1);
             $deger_son = substr($deger[$x],1);
             $deger_bas = toUpperCase($deger_bas); 

             $deger_tr .= $deger_bas.$deger_son." ";
             } 

         $deger_tr = trim($deger_tr); 

         return $deger_tr;
         } 
*/
$ilseckrgelen=iconv("utf-8","iso-8859-9",$_GET['uyekodum']);
$ilceseckrgelen=iconv("utf-8","iso-8859-9",$_GET['doktoradi']);
$kurumgelen=iconv("utf-8","iso-8859-9",$_GET['kuladi']);
$asmgelen=iconv("utf-8","iso-8859-9",$_GET['kulsifre']);

//echo $ilseckrgelen;
//echo $ilceseckrgelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;




$resultkurum = @mysql_query("select * from uyeler where(uyekod='$ilseckrgelen')");
while($sonucum3=mysql_fetch_array($resultkurum)){
$kurumnom=$sonucum3['uyeno'];
$ilnom=$sonucum3['uyead'];
$ilcenom=$sonucum3['uyekim'];
$kurumadi=$sonucum3['uyesifre'];
$asmadi=$sonucum3['uyekod'];


//echo $ilnom;
//echo $ilcenom;
//echo $kurumadi;
//echo $asmadi;
//echo $tbbadi;
//echo $aseadi;
//echo $aseunv;

}

$silmek="Silmek İstediğinize Emin misiniz ?";
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silmeonay).'</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.trsuz($asmadi).' '.$virgul.' <span class="badge badge-success badge-pill" style="font-size:16px"><i class="fa fa-user" fa-lg></i> '.$ilnom.'</span> '.trsuz($kullanici).'</strong> '.$silmek.'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontroluye();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($hayir).'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="siluye();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
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
</html>
