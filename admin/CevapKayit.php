<script>
function goBack() {
    window.history.back();
	}
</script>
<?
include('../connect.php');
include('../form013/frm013alanlari.php');
//include("tanimveyetkiler.php");
$siteadresi=$_SERVER['SERVER_NAME'];
$email=$_GET["EmailAdresi"];
//echo $_GET["Id"];
//echo $_GET["CTarih"];
//echo $_GET["Cevap"];
function isValidEmail($email){
      $pattern = "^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$";
     //patternimizi (kalıp) yukarıdaki gibi belirledik;
      if (eregi($pattern, $email)){ //eregi() fonksiyonu belirleyici patterne uygun değerlerin içerik içinde arar sonuç olarak true yada false değer döndürür.
         return true;
      }
      else {
         return false;
      }   
   }
//$conn=mysqli_connect("localhost","root","malika");
if($_GET["Cevap"]!=""){
$SQLInsert="update bizeulasin SET cevaptarihi='".$_GET["CTarih"]."', cevap='".$_GET["Cevap"]."' where(iltiid='".$_GET["Id"]."')";
}
 if(mysqli_query($dbh,$SQLInsert)){
 echo '<div class="alert-info">'."Cevabınız Kaydedildi. Teşekkür Ederiz...".'<a href="cevapla.php?iltiid='.$_GET["Id"].'" class="form-control btn btn-success btn-sm ml-5"><i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 echo '<meta http-equiv=refresh content="5; url=http://'.$siteadresi.'/byethost/admin/admin.php" /><a href="http://'.$siteadresi.'/byethost/admin/admin.php" _fcksavedurl="http://'.$siteadresi.'/byethost/admin/admin.php"></a>';
 //echo $_GET["Tarih"];
 //echo $_GET["AdSoyad"];
 }else{
 echo '<div class="alert-info">'."Cevabınız eklenemedi.Tekrar deneyiniz.".'<a href="cevapla.php?iltiid='.$_GET["Id"].'" class="form-control btn btn-warning btn-sm ml-5"><i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 echo '<meta http-equiv=refresh content="5; url=http://'.$siteadresi.'/byethost/admin/admin.php" /><a href="http://'.$siteadresi.'/byethost/admin/admin.php" _fcksavedurl="http://'.$siteadresi.'/byethost/admin/admin.php"></a>';
 }
 @mysqli_close($dbh);
 ?>
 <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
