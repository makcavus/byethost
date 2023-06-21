<?php
ob_start();
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/form013style.css">
<link rel="stylesheet" href="assets/bootstrap-4/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap-4/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/navbar_style.css">
<style>
body{margin:0 0px;cursor:default;background-color:#000000;}
</style>
<?php
include('../con_barkod.php');
$id=$_GET['id'];
$asi_marka=$_GET['cinsad'];
$gtin=$_GET['gtin'];
$asi_marka=$_GET['asi_marka'];
//echo $id;
//exit;
$barkod_kontrol=mysqli_query($dbh_barkod,"UPDATE asi_tanim SET asi_marka='$asi_marka' where id='$id'");
if (@$asi_marka!=null and $barkod_kontrol){
    echo '<div class="bg-dark"><button type="button" name="asiadiguncelle" id="asiadiguncelle" class="btn btn-primary btn-sm mt-3 mb-2" 
    data-dismiss="modal" onclick="asitanimekleme();">Kayıt Güncellendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
  }else{
    echo '<div class="bg-dark"><button type="button" name="asiadiguncelle" id="asiadiguncelle" class="btn btn-danger btn-sm mt-3 mb-2" 
    data-dismiss="modal" onclick="asitanimekleme();">Kayıt Güncellenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
    }   
mysqli_close($dbh_barkod);
ob_end_flush();
?>
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<script type="text/javascript" src="assets/js/sayfa_linkleri.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<script language="JavaScript" type="text/javascript" src="assets/js/karekod_ayir.js"></script>