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
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css"></head>

<script language="JavaScript" src="kontroluye.js" type="text/javascript">
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
<div id="drdiv"><form name="form8" action="javascript:void(0)" method="get">

<?php
include("../../con_023.php");
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
?>

<div class="row mt-1">
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kontroluye();" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-info text-dark mb-1" align="center">
<strong><?php $ilcekaydeg="Kullanıcı Kayıt Değiştirme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="uyedegistir();" class="btn btn-success btn-sm mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>
</div>
</div>

<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>
<div class="form-row">
<input type="hidden" name="krselectilno" id="krselectilno" value="<? echo trsuz($asmadi) ;?>">

    <div class="col-4 text-dark" align="center">
	
	<input type="text" class="form-control form-control-sm w-100" name="kurumgirdeg" id="kurumgirdeg" value="<?php echo trsuz($ilcenom) ; ?>">
    </div>
    <div class="col-4 text-dark" align="center">
      <input type="text" name="asmgir" id="asmgir" class="form-control form-control-sm w-100" value="<?php echo trsuz($ilnom) ; ?>" required>
	  <div class="invalid-feedback">Lütfen yeni kullanıcı adı belirleyiniz</div>
    </div>
	<div class="col-4 text-dark" align="center">
      <input type="text" name="tbbgir" id="tbbgir" class="form-control form-control-sm w-100" value="<?php echo trsuz($kurumadi) ; ?>" required>
     <div class="invalid-feedback">Lütfen yeni kullanıcı şifresi oluşturun</div>
	 </div>
	  
   </div>
   </div>
</th>
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
