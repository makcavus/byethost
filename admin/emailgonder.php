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
<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include('connect.php');
$email=$_POST["EmailAdresi"];
echo $_POST["Id"];
echo $_POST["CTarih"];
echo $_POST["AdSoyad"];
echo $_POST["Cevap"];
echo $_POST["EmailAdresi"];


function isValidEmail($email){

      $pattern = "^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$";

     //patternimizi (kalÄ±p) yukarÄ±daki gibi belirledik;

      if (eregi($pattern, $email)){ //eregi() fonksiyonu belirleyici patterne uygun deÄŸerlerin iÃ§erik iÃ§inde arar sonuÃ§ olarak true yada false deÄŸer dÃ¶ndÃ¼rÃ¼r.

         return true;

      }

      else {

         return false;

      }   

   }
   ?>
<form action="http://formspree.io/maliayak@gmail.com" method="post"> <!-- mailiniz@gmail.com yerine kendi mail adresimizi yazıyoruz. -->
    <p class="input">
        <label for="contact_author">
            <strong>Ad Soyad</strong> (gerekli)</label>
        <input type="text" name="contact_author" id="contact_author" required value="<?php echo $_POST["AdSoyad"]; ?>">
    </p>
    <p class="input-block">
        <label for="_replyto">
            <strong>E-Posta Adresi</strong> (gerekli)</label>
        <input type="email" name="_replyto" id="_replyto" required value="<?php echo $_POST["EmailAdresi"]; ?>">
    </p>            
    <p class="input-block">
        <label for="contact_subject">
            <strong>İleti Konusu</strong> (gerekli)</label>
        <input type="text" name="contact_subject" id="contact_subject" required value="<?php $tarihli="Tarihli İletiniz"; echo $_POST["Tarih"].' '.$tarihli; ?>">
    </p>
    <p class="textarea-block">
        <label for="contact_content">
            <strong>İleti</strong> (gerekli)</label>
        <textarea name="contact_content" id="contact_content" required><?php echo $_POST["Cevap"]; ?></textarea>
    </p>
    <input type="hidden" name="_next" value="//tesekkurler.html"> <!-- Form forms.brace.io adresine gönderildikten sonra tekrar sitenize dönüş yapılarak sitenizdeki tesekkurler.html dosyasının açılmasını sağlıyor. -->
    <input type="submit" value="GÖNDER">
</form>
 <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
