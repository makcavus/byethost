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
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<script language="JavaScript" src="kontrolilce.js" type="text/javascript">
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
<div id="sonuc1"><form name="form6" action="javascript:void(0)" method="get">

<?php
include("../../con_023.php");
include("../frm013alanlari.php");
include("../../fonksiyonlar.php");
include("../../tanimlaranadizin.php");

$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen geðer alýnýyor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen geðer alýnýyor
$ilcegelenvt=iconv("utf-8","iso-8859-9",$ilcegelen);


//echo $ilgelenx;
//echo $ilgeleny;

//echo $ilgelenz;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $ilcegelenx;
//echo $ilcegeleny;




$resultilce = @mysql_query("select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelenvt')");
while($sonucum2=mysql_fetch_array($resultilce)){
$ilcenom=$sonucum2['ilceid'];
$ilnom=$sonucum2['ilinad'];
$ilceadi=$sonucum2['ilcead'];

//echo $ilnom;
//echo $ilceadi;

}
?>

<div class="row mt-1">
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="kontrolilce();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-times-circle fa-lg"></i> <?php echo $iptal;?></a>
</div>
<div class="col-md-4 bg-warning text-dark" align="center">
<strong><?php $ilcekaydeg="İlçe Kayıt Değiştirme Ekranı"; echo $ilcekaydeg; ?></strong>
</div>
<div class="col-md-4 bg-info text-dark" align="center">
<a href=# onClick="ilcedegistir();" class="btn btn-success btn-sm mt-1 mb-1"><i class="fa fa-pencil-square-o fa-lg"></i> <?php echo $degistir;?></a>
</div>
</div>
<div class="row">
<div class="col-md-12 bg-warning text-dark" align="center">
<table class="table table-striped table-primary table-sm table-responsive-lg">
<thead align="center">
<tr>
<th><?php $degilceadi="Değiştirilecek İlçe Adı :"; echo $degilceadi.' '.trsuz($ilceadi);?></th>
</tr>
<tr>
<th class="bg-success">
<input type="hidden" name="selectilno" id="selectilno" class="form-control form-control-sm" value="<? echo $ilnom; ?>">
<input type="hidden" name="ilcegirgelen" id="ilcegirgelen" class="form-control form-control-sm" value="<? echo trsuz($ilceadi); ?>">
<input id="ilcegir" name="ilcegir"  class="form-control form-control-sm w-50"  type="text" placeholder="<?php $yeniilce="Yeni İlçeyi Giriniz..."; echo $yeniilce;?>">
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