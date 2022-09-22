<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
  
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>

<body>
<?
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'����i��', '���I���') );
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

$kurumgelenx=$_GET['kurumgirgelen'];
$kurumgelen=$kurumgelenx;

$degkurumgelen=$_GET['kurumgir'];
$degkurumgelen=replace_tr($degkurumgelen);
$degkurumgelenvt=iconv("utf-8","iso-8859-9",$degkurumgelen);

/*
$asmgelenx=$_GET['asmgir'];
$asmgeleny=trsuz($asmgelenx);
$asmgelen=ucwords_tr($asmgeleny);

$drgelenx=$_GET['tbbgir'];
$drgelen=$drgelenx;

$asegelenx=$_GET['asegir'];
$asegelen=$asegelenx;


$aseungelenx=$_GET['aseungir'];
$aseungelen=$aseungelenx;

echo $ilseckrgelen;
echo $ilceseckrgelen;
echo $degkurumgelen;
echo $degkurumgelenvt;
*/
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;
//exit;
//Üye Kayıt Sil Başlama..............................................
$resultocak = @mysql_query("select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelenvt')") ;
while($sonucum=mysql_fetch_array($resultocak)){
$uyenom=$sonucum['socad'];
//$ilnom=$sonucum['ilinad'];
	
	echo $uyenom;
    //echo $ilnom;

}
$resultuye = @mysql_query("select * from uyeler where(uyekod='$uyenom')") ;
while($sonucum=mysql_fetch_array($resultuye)){
$uyekodnom=$sonucum['uyekod'];
//$ocakilcenom=$sonucum['ilce'];
//$dosya=$sonucum['dosya_adi'];
//$resim=$sonucum['resim_adi'];

echo $uyekodnom;

$resultuyekodsil = "delete from uyeler where(uyekod='$uyekodnom')" ;

if(@mysql_query($resultuyekodsil)){
/*echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silindi.' 
<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
*/
}else{
/*
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silinemedi.'</th></tr></thead></table></div>';
*/
}

}
//exit;	


//// Üye Kayıt Sil Sonu.............................................
$resultvyil = "delete from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelenvt')";
if(@mysql_query($resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silindi...<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></tr></thead></table></div>';

}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silinemedi...<a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></tr></thead></table></div>';

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