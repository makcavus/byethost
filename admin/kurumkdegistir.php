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
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
include("tanimveyetkiler.php");
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}*/
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
function ucwords_tr($deger)
         {
         $deger = split(" ",trim($deger));
         $deger_tr = ""; 

         for($x=0; $x < count($deger); $x++)
             {
             $deger_bas = substr($deger[$x],0,1);
             $deger_son = substr($deger[$x],1);
             $deger_bas = replace_tr($deger_bas); 

             $deger_tr .= $deger_bas.$deger_son." ";
             } 

         $deger_tr = trim($deger_tr); 

         return $deger_tr;
         } 


$ilseckrgelen=$_GET['krselectilno'];
$ilceseckrgelen=$_GET['krilcegirgelen'];

$kurumgelen=iconv("iso-8859-9","utf-8",$_GET['kurumgir']);
$kurumgelen=replace_tr($kurumgelen);
$kurumgelenvt=iconv("utf-8","iso-8859-9",$kurumgelen);

$degkurumgelen=$_GET['kurumgirgelen'];
$degkurumgelen=replace_tr($degkurumgelen);
$degkurumgelenvt=$degkurumgelen;

$asmgelen=iconv("iso-8859-9","utf-8",$_GET['asmgir']); // get metodu ile formdan gelen ge�er al�n�yor
$asmgelen=ucwords_tr($asmgelen);
$asmgelenvt=iconv("utf-8","iso-8859-9",$asmgelen);

$drgelen=iconv("iso-8859-9","utf-8",$_GET['tbbgir']); // get metodu ile formdan gelen ge�er al�n�yor
$drgelen=ucwords_tr($drgelen);
$drgelenvt=iconv("utf-8","iso-8859-9",$drgelen);

$asegelen=iconv("iso-8859-9","utf-8",$_GET['asegir']); // get metodu ile formdan gelen ge�er al�n�yor
$asegelen=ucwords_tr($asegelen);
$asegelenvt=iconv("utf-8","iso-8859-9",$asegelen);


$aseungelen=iconv("iso-8859-9","utf-8",$_GET['aseungir']); // get metodu ile formdan gelen ge�er al�n�yor
$aseungelen=ucwords_tr($aseungelen);
$aseungelenvt=iconv("utf-8","iso-8859-9",$aseungelen);
/*
echo $ilseckrgelen;
echo $ilceseckrgelen;
echo '<br>';
echo $kurumgelen;
echo '<br>';
echo 'vt-'.$kurumgelenvt;
echo '<br>';
echo $degkurumgelen;
echo '<br>';
echo 'vt-deg'.$degkurumgelenvt;
echo '<br>';
echo $asmgelen;
echo '<br>';
echo $asmgelenvt;
echo '<br>';
echo $drgelen;
echo '<br>';
echo $drgelenvt;
echo '<br>';
echo $asegelen;
echo '<br>';
echo $asegelenvt;
echo '<br>';
echo $aseungelen;
echo '<br>';
echo $aseungelenvt;*/
//exit;
//echo $ilseckrgelen;
//echo "-";
//echo $ilceseckrgelen;
//echo "-";
//echo $kurumgelenx;
//echo "-";
//echo $degkurumgelenx;

//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;
//$vtsec="select * from il where(ilad='$ildeggelen')";
//$socsorgu=mysql_query($vtsec);
//$say=mysql_num_rows($socsorgu);
//if($say<1){
$kayit="UPDATE ocak SET  socad='$kurumgelenvt',asmadi='$asmgelenvt',dradi='$drgelenvt',aseadi='$asegelenvt',aseunvan='$aseungelenvt' where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelenvt')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($degkurumgelen).' '.$oncekikurum.' '.$kurumgelen.' '.trsuz($kurumsonraki).' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">'.trsuz("Kurum Değiştirelemedi...").'<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></thead></table>';
echo '</div>';
echo mysql_error();
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