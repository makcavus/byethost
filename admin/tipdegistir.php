<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
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
<script language="JavaScript" src="ktipikontrol.js" type="text/javascript">
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
<div id="sonuc"><form name="form7" action="javascript:void(0)" method="get">

<?php
$iptal="İptal";
$degistir="Değiştir";
$sil="Sil";
$kaydet="Kaydet";
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'����i��', '���I���') );
}
*/
function replace_tr($text) {
   $text = trim($text);
   $search = array('a','b','c','ç','d','e','f','g','ğ','h','ı','i','j','k','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z','x','w','q');
   $replace = array('A','B','C','Ç','D','E','F','G','Ğ','H','I','İ','J','K','L','M','N','O','Ö','P','R','S','Ş','T','U','Ü','V','Y','Z','X','W','Q');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
}
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include("../../connect.php");
$tipdegilismi="Değiştirilecek Kurum Tipi:";
$tipkaydeg="Kurum Tipi Kayıt Değiştirme Ekranı";

include("../frm013alanlari.php");
$tipgelen=$_GET['tipgir'];
//$tipgelen=replace_tr($tipgelen);
$tipgelenvt=iconv("utf-8","iso-8859-9",$tipgelen);
//echo $ilno;
//echo $tipgelen;
//echo $tipgelenx;
//echo $tipgelen;
//echo $tipgelenvt;



$resultvyil = @mysql_query("select * from kurumtipi where(tipi='$tipgelenvt')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$tipnom=$sonucum['tipid'];
$tipadim=$sonucum['tipi'];
//echo $iladim;
}
?>

<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontroltip();" class="btn btn-success btn-sm mt-1 mb-1""><i class="fa fa-times-circle fa-lg"></i> <?php echo $iptal;?></a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<strong><?php echo trsuz($tipkaydeg); ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="tipdegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> <?php echo trsuz($degistir);?></a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th><?php echo trsuz($tipdegilismi).' '.trsuz($tipadim);?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selecttip" id="selecttip" class="form-control form-control-sm" value="<? echo $tipadim; ?>" placeholder="Yeni Kurum Tipini Giriniz...">
<input id="tipgir" name="tipgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni Kurum Tipini Giriniz...">
</th>
</tr>
</thead>
</table>
</div>
</div>
   </form></div>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

</body>
</html>
