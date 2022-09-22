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
<script language="JavaScript" src="kaydet.js" type="text/javascript">
</script>	
<script type="text/javascript" src="../jquery-latest.min.js"></script> 
    <script type="text/javascript" src="../jquery.maskedinput-1.2.1.pack.js"></script> 
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
<?php
include("../../con_023.php");
include("tanimveyetkiler.php");
include('../frm013alanlari.php');
	
$uyekodu=iconv("utf-8","iso-8859-9",$_GET['uyekodum']);
$resultkod = @mysql_query("select * from ocak where(socad='$uyekodu')");
while($rowkod=mysql_fetch_array($resultkod)) {
$dradim=$rowkod['dradi'];
//echo $dradim;
//echo $uyekodu;
}
	//exit;
?>
<div id="drdiv"><form name="girdiekle" action="javascript:void(0)" method="get">
  <div class="row mt-1">
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="kontroluye();" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</div>
<div class="col-md-4 bg-info text-dark mb-1" align="center">
<strong><?php $ilcekaydeg="Yeni Kullanıcı Ekleme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<a href=# onClick="uyeekle();" class="btn btn-primary btn-sm nb-1"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
</div>
</div>

<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th>
<div class="form-row">
<input type="hidden" name="kulkay" id="kulkay" value="<? echo trsuz($uyekodu); ?>">

    <div class="col-4 text-dark" align="center">
	
	<input type="text" class="form-control form-control-sm w-100" name="doktoradi" id="doktoradi" value="<? echo trsuz($dradim); ?>">
    </div>
    <div class="col-4 text-dark" align="center">
      <input type="text" name="kuladi" id="kuladi" class="form-control form-control-sm w-100" placeholder="Kullanıcı Adı Belirleyin" required>
	  <div class="invalid-feedback">Lütfen bir kullanıcı adı belirleyiniz</div>
    </div>
	<div class="col-4 text-dark" align="center">
      <input type="text" name="kulsifre" id="kulsifre" class="form-control form-control-sm w-100" placeholder="Kullanıcı Şifresi Belirleyin" required>
     <div class="invalid-feedback">Lütfen bir kullanıcı şifresi oluşturun</div>
	 </div>
	 
	 <div id="uyealan"></div>
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
