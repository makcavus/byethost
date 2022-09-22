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
include("../../tanimlaranadizin.php");
include("tanimveyetkiler.php");
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}*/
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

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];

$kurumgelen=$_GET['kurumgir']; // get metodu ile formdan gelen ge�er al�n�yor
$kurumgelen=replace_tr($kurumgelen);
$kurumgelenvt=iconv("utf-8","iso-8859-9",$kurumgelen);

$asmgelen=$_GET['asmgir']; // get metodu ile formdan gelen ge�er al�n�yor
$asmgelen=ucwords_tr($asmgelen);
$asmgelenvt=iconv("utf-8","iso-8859-9",$asmgelen);

$drgelen=$_GET['drgir']; // get metodu ile formdan gelen ge�er al�n�yor
$drgelen=ucwords_tr($drgelen);
$drgelenvt=iconv("utf-8","iso-8859-9",$drgelen);

$asegelen=$_GET['asegir']; // get metodu ile formdan gelen ge�er al�n�yor
$asegelen=ucwords_tr($asegelen);
$asegelenvt=iconv("utf-8","iso-8859-9",$asegelen);


$aseungelen=$_GET['aseungir']; // get metodu ile formdan gelen ge�er al�n�yor
$aseungelen=ucwords_tr($aseungelen);
$aseungelenvt=iconv("utf-8","iso-8859-9",$aseungelen);
/*
echo $ilseckrgelen;
echo $ilceseckrgelen;
echo $kurumgelen;
echo '<br>';
echo $kurumgelenvt;
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
echo $aseungelenvt;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;
exit;*/
$kurumsec="select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelenvt')";
$socsorgu2=mysql_query($kurumsec);
$say2=mysql_num_rows($socsorgu2);
//echo $say2;
if($say2<1 AND $kurumgelen !=""){
$kayit="INSERT INTO ocak(ilinad,ilce,socad,asmadi,dradi,aseadi,aseunvan) VALUES ('$ilseckrgelen','$ilceseckrgelen','$kurumgelenvt','$asmgelenvt','$drgelenvt','$asegelenvt','$aseungelenvt')";
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$kurumgelen.' '.$kurumok.' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.trsuz($geridon).'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">Kurum Kaydedilemedi... <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.trsuz($geridon).'</a></th></thead></table></div>';
}
}
while($sonucum2=mysql_fetch_array($socsorgu2)){
$kurumno=$sonucum1['ocid'];
$ilinadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilce'];
$kurumadi=$sonucum1['socad'];
$asmninadi=$sonucum1['asmadi'];
$tbbadi=$sonucum1['dradi'];
$aseninadi=$sonucum1['aseadi'];
$aseunv=$sonucum1['aseunvan'];



 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilno."<br>".$iladi);				
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