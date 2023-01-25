<script>
function goBack() {
    window.history.back();
	}
</script>
<body>
<?php
// E-posta kontrol fonksiyonu
function epostakontrol($mail){
   if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
   return 1;
   } else {
   return 0; }
   }
include('connect.php');
$tarih=$_GET["tarih"] ;
$adsoyad=$_GET["adsoyad"] ;
$telefon=$_GET["telefon"] ;
$email=$_GET["emailadresi"];
$dusunceniz=$_GET["dusunceniz"] ;
$resultuser = @mysqli_query($dbh,"select * from bizeulasin where(adsoyad='$adsoyad' and dusunceniz='$dusunceniz')");
$say=mysqli_num_rows($resultuser);
/*function isValidEmail($email){
      $pattern = "^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$";
     //patternimizi (kalıp) yukarıdaki gibi belirledik;
      if (eregi($pattern, $email)){ //eregi() fonksiyonu belirleyici patterne uygun değerlerin içerik içinde arar sonuç olarak true yada false değer döndürür.
         return true;
      }
      else {
         return false;
      } 
   }*/
   if(!epostakontrol($email)){
      echo '<div class="alert-info"><a href="" onClick="goBack()" class="form-control btn btn-success btn-sm">'."Email adresi geçerli değil...".'
      <i class="fa fa-reply-all fa-lg"></i> Kapat</a></div>';
   }elseif($dusunceniz==NULL){
      echo '<div class="alert-info"><a href="" onClick="goBack()" class="form-control btn btn-success btn-sm">'."Gönderi metnini giriniz...".'
      <i class="fa fa-reply-all fa-lg"></i> Kapat</a></div>';
   }elseif($adsoyad!="" and epostakontrol($email) and $dusunceniz!="" and $say<1){
$SQLInsert="insert into bizeulasin(tarih,adsoyad,telefon,emailadresi,dusunceniz) values
('$tarih', '$adsoyad', '$telefon', '$email', '$dusunceniz')";
  if(mysqli_query($dbh,$SQLInsert)){
 echo '<div class="alert-info"><a href="" onClick="goBack()" class="form-control btn btn-success btn-sm">'."Görüşleriniz Eklendi. Teşekkür Ederiz...".'
 <i class="fa fa-reply-all fa-lg"></i> Kapat</a></div>';
} 
 }else{
 echo '<div class="alert-info"><a href="" onClick="goBack()" class="form-control btn btn-warning btn-sm">'."Görüşünüz eklenemedi.Tekrar deneyiniz.".'
 <i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 }
 @mysqli_close($dbh);
 //include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript 
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>-->