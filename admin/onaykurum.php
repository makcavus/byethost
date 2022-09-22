<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayý görüntüleme yetkiniz yoktur.";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Silme Onayý</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>

<body>
<?php 
include("../../con_023.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");
include("../frm013alanlari.php");
include("tanimveyetkiler.php");
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ðüþýiöç', 'ÐÜÞIÝÖÇ') );
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
$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];

$kurumgelen=iconv("utf-8","iso-8859-9",$_GET['kurumgir']);
//$kurumgelen=replace_tr($kurumgelenx);



//echo $ilseckrgelen;
//echo $ilceseckrgelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;




$resultkurum = @mysql_query("select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')");
while($sonucum3=mysql_fetch_array($resultkurum)){
$kurumnom=$sonucum3['ocid'];
$ilnom=$sonucum3['ilinad'];
$ilcenom=$sonucum3['ilce'];
$kurumadi=$sonucum3['socad'];
$asmadi=$sonucum3['asmadi'];
$tbbadi=$sonucum3['dradi'];
$aseadi=$sonucum3['aseadi'];
$aseunv=$sonucum3['aseunvan'];

//echo $ilnom;
//echo $ilcenom;
//echo $kurumadi;
//echo $asmadi;
//echo $tbbadi;
//echo $aseadi;
//echo $aseunv;

}
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.trsuz($silmeonay).'</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light text-danger"><strong>'.iconv("iso-8859-9","utf-8",$kurumadi).'---</strong> '.trsuz($silemin).'</th>';
echo '</tr>';
echo '<tr>';
echo '<th>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrolkurum();" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($hayir).'</a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="silkurum();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> '.$evet.'</a>';
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
