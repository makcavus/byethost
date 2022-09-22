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
<script>
function goBack() {
    window.history.back();
	}
</script>
<body>

<?
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include('connect.php');
$tarih=$_GET["tarih"] ;
$adsoyad=iconv("utf-8","iso-8859-9",$_GET["adsoyad"]) ;
$telefon=$_GET["telefon"] ;
$email=$_GET["emailadresi"];
$dusunceniz=iconv("utf-8","iso-8859-9",$_GET["dusunceniz"]) ;
//echo $_GET["emailadresi"];
//echo '<br>';
//echo $_GET["adsoyad"];
//echo '<br>';
//echo $_GET["tarih"];
//echo '<br>';
//echo $_GET["telefon"];
//echo '<br>';
//echo $_GET["dusunceniz"];
$resultuser = @mysql_query("select * from bizeulasin where(adsoyad='$adsoyad' and dusunceniz='$dusunceniz')");
$say=mysql_num_rows($resultuser);
//echo $say;

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
if($adsoyad!="" and isValidEmail($email) and $dusunceniz!="" and $say<1){

$SQLInsert="insert into bizeulasin(tarih,adsoyad,telefon,emailadresi,dusunceniz) values
('$tarih', '$adsoyad', '$telefon', '$email', '$dusunceniz')";
 }
 
 if(mysql_query($SQLInsert)){
 echo '<div class="alert-info"><a href="" onClick="goBack()" class="form-control btn btn-success btn-sm">'."Görüşleriniz Eklendi. Teşekkür Ederiz...".'<i class="fa fa-reply-all fa-lg"></i> Kapat</a></div>';
 //echo $_GET["tarih"];
 //echo $_GET["adsoyad"];
 }else{
 echo '<div class="alert-info"><a href="" onClick="goBack()" class="form-control btn btn-warning btn-sm">'."Görüşünüz eklenemedi.Tekrar deneyiniz.".'<i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
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