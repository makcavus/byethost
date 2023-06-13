<?php
ob_start();
?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/form013style.css">
  
 <style>
      body{margin:0 0px;cursor:default;background-color:#000000;}
  </style>
<?php
include('../con_barkod.php');
$asi_kodu=$_GET['cins'];
//echo $asi_kodu;
$gtin=$_GET['gtin'];
$gtin=substr($gtin,1,12);
//echo $gtin;
$asi_marka=$_GET['asi_marka'];
//echo $asi_kodu;
//exit;
$barkod_kontrol=mysqli_query($dbh_barkod,"SELECT * from asi_tanim where(asi_kod='$asi_kodu' and gtin='$gtin')");
$asi_adi_kontrol=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari where(asi_kodu='$asi_kodu')");
$barkod_say=mysqli_num_rows($barkod_kontrol);
$asiadi_say=mysqli_num_rows($asi_adi_kontrol);
if($asi_marka!="" and $asi_kodu!="" and $barkod_say==0 and $asiadi_say>0){ 
$sql=mysqli_query($dbh_barkod,"INSERT INTO asi_tanim (asi_kod,gtin,asi_marka) VALUES('$asi_kodu','$gtin','$asi_marka')"); 
}
if (@$sql){
  echo '<div class="bg-dark"><button type="button" name="asiadikaydet" id="asiadikaydet" class="btn btn-primary btn-sm mt-3 mb-2" 
  data-dismiss="modal" onclick="asitanimekleme();">Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
  echo '<div class="bg-dark"><button type="button" name="asiadikaydet" id="asiadikaydet" class="btn btn-danger btn-sm mt-3 mb-2" 
  data-dismiss="modal" onclick="asitanimekleme();">Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
  
 }
   
   
mysqli_close($dbh_barkod);


/*
$barkod_kontrol=$db->prepare("SELECT * from asi_tanim where asi_kod=$asi_kodu and gtin=$gtin");
$barkod_kontrol->execute();
$barkod_say=$barkod_kontrol->rowCount();
//echo $barkod_say;
if($asi_marka!=null and $barkod_say==0){
$sql=$db->prepare("insert into asi_tanim set
asi_kod=:asi_kod,
gtin=:gtin,
asi_marka=:asi_marka
");
$res=$sql->execute(array(
'asi_kod'=>$asi_kodu,
'gtin'=>$gtin,
'asi_marka'=>$asi_marka
));
 }
if (@$res){
    echo "Bilgiler kaydedildi.";
    header("refresh: 1; url=asi_tanimlari.php");
    exit;
  }else{
    echo "Bilgiler kaydedilemedi.";
    header("refresh: 1; url=asi_tanimlari.php");
exit;
    }
   
mysql_close($con);*/
ob_end_flush();
?>
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
 <script language="JavaScript" type="text/javascript" src="toplama.js"></script>
<script src="assets/bootstrap-4/popper.js"></script>
<script src="assets/bootstrap-4/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
