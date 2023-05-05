<?php
//ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kayıt Sayfası</title>
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/form013style.css">
  <script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script language="JavaScript" type="text/javascript" src="toplama.js"></script>
</head>
<body>
<?php
include('../con_barkod.php');
include('frm013alanlari.php');
$kurumid=$_POST['kurumid'];
$gtin=$_POST['gtin'];
$serino=$_POST['serino'];
$expdate=$_POST['expdate'];
$batch=$_POST['batch']; 
$cins=$_POST['cins'];
$mesaj=$_POST['mesaj'];
$miktar_kod=substr($gtin,0,1);
$token=$_POST['token'];
/*echo $kurumid."<br>";
echo $gtin."<br>";
echo $serino."<br>";
echo $expdate."<br>";
echo $batch."<br>";
echo $cins."<br>";
echo $mesaj."<br>";*/

//exit;
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

$barkod_kontrol=mysqli_query($dbh_barkod,"SELECT * from bilgiler where token='$token'");
$barkod_say=mysqli_num_rows($barkod_kontrol);
//echo $barkod_say;
//exit;
if($barkod_say==0){
$asi=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari where asi_kodu='$cins'");
while($listele=mysqli_fetch_array($asi)){
  //echo $listele['asi_kodu'];
  //exit;

if(strlen($gtin)==14 && $serino!="" && strlen($expdate)==6 && $batch!="" && $cins==$listele['asi_kodu'] && $mesaj>0){
$sql=mysqli_query($dbh_barkod,"INSERT INTO bilgiler(kurum_id,gtin,serino,expdate,batch,cins,mesaj,miktar_kod,token) 
VALUES('$kurumid','$gtin','$serino','$expdate','$batch','$cins','$mesaj','$miktar_kod','$token')");

 }
 }
if ($sql){
    echo '<div class="alert-light"><button type="button" class="btn btn-primary btn-sm mt-3 mb-2" data-dismiss="modal" onclick="kontrol();">Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
}else{
echo '<div class="alert-light"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="kontrol();">Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
	
	echo'<meta http-equiv=refresh content="10; url=http://'.$siteadresi.'/byethost/barkod/index.php" /><a href="http://'.$siteadresi.'/byethost/barkod/index.php" _fcksavedurl="http://'.$siteadresi.'/byethost/barkod/index.php">Oturum Sonlandırıldı Tekrar Giriş Yapınız....</a>';

 }
    
  }
mysqli_close($dbh_barkod);
//ob_end_flush();



/*----------------------   PDO   --------------------------
$barkod_kontrol=$db->prepare("SELECT * from bilgiler where token=?");
$barkod_kontrol->execute(array($token));
$barkod_say=$barkod_kontrol->rowCount();
if($barkod_say==0){
$asi=$db->prepare("SELECT * from asi_kodlari where asi_kodu=$cins");
$asi->execute();
$listele=$asi->fetch(PDO::FETCH_ASSOC);
if(strlen($gtin)==14 && $serial!="" && strlen($expdate)==6 && $batch!="" && $cins==$listele['asi_kodu'] && $mesaj>0){
$sql=$db->prepare("insert into bilgiler set
gtin=:gtin,
serial=:serial,
expdate=:expdate,
batch=:batch,
cins=:cins,
mesaj=:mesaj,
miktar_kod=:miktar_kod,
token=:token");
$res=$sql->execute(array(
'gtin'=>$gtin,
'serial'=>$serial,
'expdate'=>$expdate,
'batch'=>$batch,
'cins'=>$cins,
'mesaj'=>$mesaj,
'miktar_kod'=>$miktar_kod,
'token'=>$token
));
 }
 }
if (@$res){
    echo "Bilgiler kaydedildi.";
    header("refresh: 1; url=karekod.php");
    exit;
  }else{
    echo '<script>Swal.fire("Başarısız", "Bilgiler kaydedilmedi", "success"); </script>';
    header("refresh: 1; url=karekod.php");
exit;
    }
   
mysql_close($con);
ob_end_flush();*/
?>
<script src="assets/bootstrap-4/popper.js"></script>
<script src="assets/bootstrap-4/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
</body>
</html>
