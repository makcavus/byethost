<?php
ob_start();
?>
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/form013style.css">
  <script type="text/javascript" src="jquery-1.3.2.js"></script> 
 <script language="JavaScript" type="text/javascript" src="toplama.js"></script>
 <style>
      body{margin:0 0px;cursor:default;background-color:#000000;}
  </style>
<?php
include('../con_barkod.php');
include('barkodalanlari.php');
$kurum_id=$_GET['kurum_id'];
$token=$_GET['token'];
$gtin=$_GET['gtin'];
$serino=$_GET['serino'];
$expdate=$_GET['expdate'];
$batch=$_GET['batch']; 
$cins=$_GET['cins'];
$mesaj=$_GET['mesaj'];
$miktar_kod=substr($gtin,0,1);
/*echo $kurum_id."<br>";
echo $gtin."<br>";
echo $serino."<br>";
echo $expdate."<br>";
echo $batch."<br>";
echo $cins."<br>";
echo $mesaj."<br>";

exit;*/
/*Burası miktar ile ilgili deneme aşamasındadır*/
//echo $mesaj;
if(substr($mesaj,0,1)==0){
$doz=intval(substr($mesaj,1,2));
$takdim="Doz";
$mesaj=$doz;
}elseif(substr($mesaj,0,1)==1){
$takdim_paket=intval(substr($mesaj,1,4));
$doz=intval(substr($mesaj,6,2));
$mesaj=$takdim_paket*$doz;
 // echo $mesaj;
}elseif(substr($mesaj,0,1)==2){ 
 $takdim_paket=intval(substr($mesaj,1,4));
 $takdim_kutu=$takdim_paket * intval(substr($mesaj,6,4));
 $doz=intval(substr($mesaj,11,2));
 $mesaj=$takdim_kutu*$doz;
 //echo $mesaj;
}elseif(substr($mesaj,0,1)==3){ 
  $takdim_paket=intval(substr($mesaj,11,4));
  $takdim_kutu=$takdim_paket * intval(substr($mesaj,6,4));
  $takdim_koli=$takdim_kutu * intval(substr($mesaj,1,4));
  $doz=intval(substr($mesaj,16,2));
  $mesaj=$takdim_koli*$doz;
  // echo $mesaj;
}elseif(substr($mesaj,0,1)==4){ 
  $takdim_paket=intval(substr($mesaj,16,4));
  $takdim_kutu=$takdim_paket * intval(substr($mesaj,11,4));
  $takdim_koli=$takdim_kutu * intval(substr($mesaj,6,4));
  $takdim_palet=$takdim_koli * intval(substr($mesaj,1,4));
  $doz=intval(substr($mesaj,21,2));
  $mesaj=$takdim_palet*$doz;
   echo $mesaj;
}
//exit;

$barkod_kontrol=mysqli_query($dbh_barkod,"SELECT * from bilgiler where kurum_id='$kurum_id' and token='$token'");
$barkod_say=mysqli_num_rows($barkod_kontrol);
$gtin_12=substr($gtin,1,12);
$gtin_kontrol=mysqli_query($dbh_barkod,"SELECT * from asi_tanim where(asi_kod='$cins' and gtin='$gtin_12')");
$gtin_say=mysqli_num_rows($gtin_kontrol);
//echo $gtin_say;
//exit;
if($barkod_say==0){
$asi=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari where asi_kodu='$cins'");
while($listele=mysqli_fetch_array($asi)){
  //echo $listele['asi_kodu'];
  //exit;

if(strlen($gtin)==14 && $serino!="" && strlen($expdate)==6 && $batch!="" && $cins==$listele['asi_kodu'] && $mesaj>0 && $gtin_say>0){
$sql=mysqli_query($dbh_barkod,"INSERT INTO bilgiler(kurum_id,gtin,serino,expdate,batch,cins,mesaj,miktar_kod,token) 
VALUES('$kurum_id','$gtin','$serino','$expdate','$batch','$cins','$mesaj','$miktar_kod','$token')");

 }else{
  echo '<div class="container">';
  echo '<div class="alert bg-warning">Bir hata var. Aşı adı kayıtlı olmayabilir. Lütfen Kontrol ediniz</div>';
  echo '</div>';
 }

//BİRDEN FAZLA SERİ NO GİRİŞİNİ SİLME
$kac_seri_sorgula=mysqli_query($dbh_barkod,"SELECT serino FROM bilgiler where(serino='$serino')");
$seri_sayisi=mysqli_num_rows($kac_seri_sorgula);
//echo "Seri Sayısı: ".$seri_sayisi;
if($seri_sayisi>1){
  $seri_sayisi=$seri_sayisi-1;
  mysqli_query($dbh_barkod,"DELETE FROM bilgiler WHERE serino='$serino' LIMIT $seri_sayisi");
}
//exit;
///////*****************SON */




 }
if (@$sql){
    echo '<div class="bg-dark"><button type="button" name="kodkaydet" id="kodkaydet" class="btn btn-primary btn-sm mt-3 mb-2" data-dismiss="modal" onclick="barkodkontrol();">Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
echo '<div class="bg-dark"><button type="button" name="kodkaydet" id="kodkaydet" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="barkodkontrol();">Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
 }
  }
mysqli_close($dbh_barkod);
ob_end_flush();

?>
<script src="assets/bootstrap-4/popper.js"></script>
<script src="assets/bootstrap-4/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
