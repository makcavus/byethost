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
<title>Silme Onayı</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="duyuru.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>

<body>
<?php 
echo '<label><font size="2px" style="color:red" face="tahoma">Bu Kaydı Silmek İstediğinize Emin misiniz?</font></label>';
echo '<br>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.png"></a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a>'
?>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
