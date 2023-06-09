<?php
//ob_start();
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
$asi_adi=$_GET['asi_adi'];
$token=$_GET['token'];
$gtin=$_GET['gtin'];
$serino=$_GET['serino'];
$expdate=$_GET['expdate'];
$batch=$_GET['batch']; 
$cins=$_GET['cins'];
$mesaj=$_GET['mesaj'];
echo "Aşı Kodu: ".$cins."<br>";
echo "Aşı Adı: ".$asi_adi;
//exit;
$barkod_kontrol=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari where asi_kodu='$cins'");
$barkod_say=mysqli_num_rows($barkod_kontrol);
echo "Sayısı: ".$barkod_say."<br>";
if($asi_adi!="" and $barkod_say==0){
  echo "Aşı Kodu ".$cins."<br>";
  echo "Aşı Adı ".$asi_adi;
  //exit;
$sql=mysqli_query($dbh_barkod,"INSERT INTO asi_kodlari (asi_kodu,asi_adi) VALUES('$cins','$asi_adi')"); 

if (@$sql){
  echo '<div class="bg-dark"><button type="button" name="asiadikaydet" id="asiadikaydet" class="btn btn-primary btn-sm mt-3 mb-2" 
  data-dismiss="modal" onclick="asiadikontrol();">Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
  echo '<div class="bg-dark"><button type="button" name="asiadikaydet" id="asiadikaydet" class="btn btn-danger btn-sm mt-3 mb-2" 
  data-dismiss="modal" onclick="asiadikontrol();">Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
 }
   
   
mysqli_close($dbh_barkod);
}
//ob_end_flush();
?>
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
 <script language="JavaScript" type="text/javascript" src="toplama.js"></script>
<script src="assets/bootstrap-4/popper.js"></script>
<script src="assets/bootstrap-4/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
