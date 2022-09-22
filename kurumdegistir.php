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
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<script language="JavaScript" src="kontrolkurum.js" type="text/javascript">
</script>	
<script type="text/javascript" src="jquery-latest.min.js"></script> 
    <script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript"> 
        $(function() { 
            $("#masktest").mask("99.99.9999"); 
 $("#masktest1").mask("99.99.9999");
            // Contents of textboxes will be selected when receiving focus. 
            $("input[type=text]") 
                .focus(function() { 
                    $(this).select(); 
                }); 
        }); 
    </script> 
</head>

<body>
<div id="sonuc2"><form name="form7" action="javascript:void(0)" method="get">

<?php
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
*/
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

//echo $ilseckrgelen;
//echo $ilceseckrgelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;
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
//exit;
*/

$resultkurum = @mysql_query("select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelenvt')");
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
?>

<div class="row mt-1">
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kontrolkurum();" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-info text-dark mb-1" align="center">
<strong><?php $ilcekaydeg="Kurum Kayıt Değiştirme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kurumdegistir();" class="btn btn-success btn-sm nb-1"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>Değiştirilecek Kurum Adı :  <?php echo trsuz($kurumadi);?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="krselectilno" id="krselectilno" class="form-control form-control-sm" value="<? echo $ilnom; ?>">
<input type="hidden" name="krilcegirgelen" id="krilcegirgelen" class="form-control form-control-sm" value="<? echo $ilcenom; ?>">
<input type="hidden" name="kurumgirgelen" id="kurumgirgelen" value="<? echo trsuz($kurumadi); ?>">
<input id="kurumgir" name="kurumgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni Kurumu Giriniz..." value="<? echo trsuz($kurumadi) ;?>">
</th>
</tr>
</thead>
</table>
</div>
</div>
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<div class="row">
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="tbbgir" name="tbbgir" type="text" class="form-control form-control-sm w-75" placeholder="Hekim Adını Giriniz..." value="<?php echo trsuz($tbbadi) ; ?>">
</th>
</div>
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="asmgir" name="asmgir" type="text" class="form-control form-control-sm w-75" placeholder="ASM-Ana Birim Adını Giriniz..." value="<?php echo trsuz($asmadi) ; ?>">
</th>
</div>
</div>
</tr>
<tr>
<div class="row">
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="asegir" name="asegir" type="text" class="form-control form-control-sm w-75" placeholder="ASE-Görevli Adını Giriniz..." value="<?php echo trsuz($aseadi) ; ?>">
</th>
</div>
<div class="col-md-6 bg-warning text-dark" align="center">
<th>
<input id="aseungir" name="aseungir" type="text" class="form-control form-control-sm w-75" placeholder="ASE-Görevli Ünvanını Adını Giriniz..." value="<?php echo trsuz($aseunv) ; ?>">
</th>
</div>
</div>
</tr>
</thead>
</table>
</form></div>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
