<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kayıt Değiştirildi</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css"></head>

<body>
<?
include("../../con_023.php");
include("../../fonksiyonlar.php");
include("tanimveyetkiler.php");
include('../frm013alanlari.php');
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } */
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

$uyekodu=$_GET['krselectilno'];
$uyead=$_GET['asmgir'];
$uyeadtr=iconv("iso-8859-9","utf-8",$uyead);
$uyeadtrkrt=replace_tr_krt($uyeadtr);

$drad=$_GET['kurumgirdeg'];
$dradtrkrt=ucwords_tr($drad);

$kulsifre=$_GET['tbbgir'];
/*
echo $uyekodu.'<br>';
echo $uyead.'<br>';
echo $uyeadtr.'<br>';
echo $uyeadtrkrt.'<br>';
echo $drad.'<br>';
echo $dradtr.'<br>';
echo $dradtrkrt.'<br>';

echo $kulsifre;*/
	//exit;
$resultuye = @mysql_query("select * from uyeler where(uyead='$uyeadtrkrt')") ;
$say=mysql_num_rows($resultuye);
//echo $say;
//exit;
while($sonucum=mysql_fetch_array($resultuye)){
$uyekodnom=$sonucum['uyekod'];
$uyeadim=$sonucum['uyead'];

//echo $uyekodnom;
}
if($say==0){
	
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}

$sha1=sha1cevir($kulsifre); // fonksiyon çağırılıor
$sha2=sha1cevir($sha1); // fonksiyon çağırılıor
$sha3=sha1cevir($sha2); // fonksiyon çağırılıor

 // ekrana md5 kodu yazdırılıyor
//print("<b>Sifre : </b> ".$ksigelen." <b> ------> </b>".$sha3);				

$kayit="UPDATE uyeler SET  uyead='$uyeadtrkrt',uyekim='$dradtrkrt',uyesifre='$sha3' where(uyekod='$uyekodu')";
//}
if(mysql_query($kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-light">'.trsuz($uyekodu).' '.trsuz($oncekiuye).' '.trsuz($kurumsonraki).' <a href="ilekle.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</a></th></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">';
echo '<th class="bg-light">'.trsuz("Kullanıcı Bilgileri Değiştirelemedi...").'<a href="ilekle.php"  onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>'.trsuz($geridon).'</a></th></thead></table>';
echo '</div>';
 }
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.trsuz($uyeadim).' '.trsuz($kulmevcut).' <button name="submit3" type="button" onclick="kontroluye();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1"><i class="fa fa-reply-all fa-lg"></i> '.trsuz($geridon).'</button></th></thead></table></div>';
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