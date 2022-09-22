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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<script language="JavaScript" src="kontrol.js" type="text/javascript">
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
<div id="sonuc"><form name="form6" action="javascript:void(0)" method="get">

<?php
	/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
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
include("../frm013alanlari.php");
$birimgelenx=iconv("utf-8","iso-8859-9",$_GET['birimgir']); // get metodu ile formdan gelen geğer alınıyor
$birimgelen=replace_tr($birimgelenx);
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;




$resultvyil = @mysql_query("select * from birim where(birim_ad='$birimgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilnom=$sonucum['birim_id'];
$birimadim=$sonucum['birim_ad'];
//echo $iladim;
}
?>

<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontrolbirim();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-times-circle fa-lg"></i> <?php echo trsuz("İptal");?></a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<strong><?php echo trsuz($birimkaydeg); ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="birimdegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> <?php echo trsuz("Değiştir");?></a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th><?php echo trsuz("Değiştirilecek Şube/Birim Adı :");?>  <?php echo trsuz($birimadim);?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selectbirim" id="selectbirim" class="form-control form-control-sm" value="<? echo trsuz($birimadim); ?>" placeholder="Yeni Birimi Giriniz...">
<input id="birimgir" name="birimgir"  class="form-control form-control-sm w-50"  type="text" placeholder="Yeni Birimi Giriniz...">
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
