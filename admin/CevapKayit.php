<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>

<body>
<script>
function goBack() {
    window.history.back();
	}
</script>
<?
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include('../../connect.php');
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

//$conn=mysql_connect("localhost","root","malika");
if($_GET["Cevap"]!=""){
$SQLInsert="update bizeulasin SET cevaptarihi='".$_GET["CTarih"]."', cevap='".trsuz($_GET["Cevap"])."' where(iltiid='".$_GET["Id"]."')";
}
 
 if(mysql_query($SQLInsert)){
 echo '<div class="alert-info">'.trsuz("Cevabınız Kaydedildi. Teşekkür Ederiz...").'<a href="cevapla.php?iltiid='.$_GET["Id"].'" class="form-control btn btn-success btn-sm ml-5"><i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 echo '<meta http-equiv=refresh content="5; url=http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" /><a href="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" _fcksavedurl="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php"></a>';
 //echo $_GET["Tarih"];
 //echo $_GET["AdSoyad"];
 }else{
 echo '<div class="alert-info">'.trsuz("Cevabınız eklenemedi.Tekrar deneyiniz.").'<a href="cevapla.php?iltiid='.$_GET["Id"].'" class="form-control btn btn-warning btn-sm ml-5"><i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
 echo '<meta http-equiv=refresh content="5; url=http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" /><a href="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" _fcksavedurl="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php"></a>';

 }
 @mysql_close($dbh);
 ?>
 <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
