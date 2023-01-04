<?php
error_reporting(0);
session_start();
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
?>
<?php
if(!isset($_SESSION['uye'])) { // eÄŸer Ã¼ye giriÅŸ yapmamÄ±ÅŸ ise  
?>
<style>
body{background-image:url(images/arka.jpg);background-attachment: fixed; background-repeat:repeat;}
</style>
<div class="w-100" id="nav-placeholder">
<div class="mr-3 mt-5">
<table class="table table-responsive w-100 d-flex justify-content-center">
<form class="form" action="index.php" method="post" id="gerekli">
<thead>
<tr>
<th class="bg-warning text-primary" colspan="2">
<h4 class="text-center">Kullanıcı Girişi</h4>
</th>
</tr>
<tr>
<th class="bg-success text-danger" colspan="2">
<h6 class="text-center">Bu sayfanın içeriğini görebilmek için giriş yapmalısınız.</h6>
</th>
</tr>
<tr>
<th class="bg-info text-dark">
<h6 class="text-right">Kullanıcı Adı :</h6>
</th>
<th class="bg-info text-dark"><input class="form-control form-control-sm w-75 mb-2" name="uyead" id="uyead" required autofocus>
<div class="invalid-feedback">Lütfen kullanıcı adını giriniz.</div>
</th>
</tr>
<tr>
<th class="bg-info text-dark">
<h6 class="text-right">Şifre :</h6>
</th>
<th class="bg-info text-dark"><input class="form-control form-control-sm w-75 mb-2" type="password" name="sifre" id="sifre" required>
<div class="invalid-feedback">Lütfen parolayı giriniz.</div>
</th>
</tr>
<tr>
<th class="bg-secondary text-warning">
<h6 class="text-right">Dogrulama Kodu:</h6>
</th>
<th class="bg-secondary text-warning">
<img src="img.php" height="25" width="75" class="mb-3">
</th>
</tr>
<tr>
<th class="bg-info text-dark">

	<h6 class="text-right">Kodu Giriniz:</h6>

		</th>

	

<th class="bg-info text-dark">

	<input class="form-control form-control-sm w-75 mb-2" name="kod" type="text" required>

	<div class="invalid-feedback">Lütfen doğrulama kodunu giriniz.</div>

</th>

</tr>

<tr>

<th class="bg-primary text-center" colspan="2">

<input class="btn btn-success btn-sm mt-2" type="submit" id="giris" value="Giriş Yap"  style="color:#000000;font-weight:bold;background:#66FF00; width:110px" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'"/>

</th>

</tr>

<tr>

</form>

<?php

//session_start(); //oturum baÅŸlatÄ±lÄ±yor

include("../con_023.php");

//include("tanimveyetkiler.php");

//include("frm013alanlari.php");

//$conn=@mysqli_connect($host_name,$user_name,$password,$form013_db_name) or die($error_message.' '.mysqli_error($conn)); //root adlÄ± kullanÄ±cÄ± yok ise mysqle baÄŸlanamÄ±yorsunuz

//mysqli_query("SET NAMES 'latin5'"); 

//mysqli_query("SET CHARACTER SET latin5");



$uyead = strip_tags(mysqli_real_escape_string($dbh,$_POST['uyead'])); //Ã¼ye adÄ±nÄ± kÃ¶tÃ¼ huylu kiÅŸilerden korumak iÃ§in alÄ±nmÄ±ÅŸ bir Ã¶nlemdir(-->,",' bu tÃ¼r saldÄ±rÄ±larÄ± engellemek iÃ§in)

$sifre = strip_tags(mysqli_real_escape_string($dbh,$_POST['sifre']));// ÅŸifreyi kÃ¶tÃ¼ huylu kiÅŸilerden korumak iÃ§in alÄ±nmÄ±ÅŸ bir Ã¶nlemdir(<,>,",' bu tÃ¼r saldÄ±rÄ±larÄ± engellemek iÃ§in) 

$kod = strip_tags(mysqli_real_escape_string($dbh,$_POST['kod']));// ÅŸifreyi kÃ¶tÃ¼ huylu kiÅŸilerden korumak iÃ§in alÄ±nmÄ±ÅŸ bir Ã¶nlemdir(<,>,",' bu tÃ¼r saldÄ±rÄ±larÄ± engellemek iÃ§in) 

/*echo "Session KOD :".$_SESSION['dogrulamakodu']."<br>";

echo "üye adı :".$uyead."<br>";

echo "şifre :".$sifre."<br>";

echo "KOD :".strtoupper($kod);*/

if($sifre == "" || $uyead == "") {

echo '<th class="bg-dark text-warning text-center" colspan="2">'.$doldur.'</th>';  // eÄŸer Ã¼ye adÄ± ve ÅŸifre boÅŸ iÅŸe boÅŸ alanlarÄ± doldurunuz

}elseif($sifre != "" and $uyead != "" and $kod==""){

echo '<th class="bg-dark text-warning text-center" colspan="2">'.$kodbos.'</th>';

?>

<!--<tr>

<th class="bg-dark text-warning" colspan="2">

<p align="center" class="text-muted"><small>Firefoxta tabloları düzgün görebilmek için IETAB eklentisini yükleyip,adresi bu eklentiye tanıtmalısınız.</small></p>

</th>

</tr>-->

<?php

} else { 

$sifresha = sha1($sifre); //ÅŸifreyi ÅŸifreliyor

$sifresha1 = sha1($sifresha); //ÅŸifreyi ÅŸifreliyor

$sifresha2 = sha1($sifresha1); //ÅŸifreyi ÅŸifreliyor

$sql = mysqli_query($dbh,"select uyesifre,uyekim,uyekod from uyeler where uyead='$uyead' and uyesifre='$sifresha2'"); //girilen Ã¼ye adÄ± ve ÅŸifre ile veritabanÄ±ndaki ad ile ÅŸifre eÅŸleÅŸtiriliyor

$uyevarmi = mysqli_num_rows($sql); // bÃ¶yle bir Ã¼ye varmÄ± sorgusu yapÄ±lÄ±yor

if($uyevarmi == 0) { //eÄŸer eÅŸleÅŸmiyorsa bÃ¶yle bir Ã¼ye yok ise 

echo '<th class="bg-dark text-warning text-center" colspan="2">'.$yok.'</th>'; //Ã¼yelik bilgileri bulunamadÄ± tekrar deneyin

}elseif($uyevarmi > 0 and strtoupper($kod) != $_SESSION['dogrulamakodu']) { //eÄŸer eÅŸleÅŸmiyorsa bÃ¶yle bir Ã¼ye yok ise 

echo '<th class="bg-dark text-warning text-center" colspan="2">'.$yanlis.'</th>'; //Ã¼yelik bilgileri bulunamadÄ± tekrar deneyin

?>

<!--<tr>

<th class="style5" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#FFFFFF" colspan="2">

<p align="center" class="text-muted"><small>Firefoxta tabloları düzgün görebilmek için IETAB eklentisini yükleyip,adresi bu eklentiye tanıtmalısınız.</small></p></th>

</tr>-->

<?php

} else { //eÅŸleÅŸiyorsa

$uyebilgi = mysqli_fetch_assoc($sql); // veri tabanÄ±ndaki bilgiler Ã§Ã¶zÃ¼lÃ¼r

$_SESSION['uyesif'] = $uyebilgi['uyesifre']; //oturum baÅŸlatÄ±lÄ±r

$_SESSION['uye'] = $uyebilgi['uyekim']; //oturum baÅŸlatÄ±lÄ±r
echo $_SESSION['uye'];

$_SESSION['uyekodu'] = $uyebilgi['uyekod']; //oturum baÅŸlatÄ±lÄ±r

echo '<th class="bg-dark text-warning text-center" colspan="2">'.$admin.'</th></thead>';

echo "<script>location.href='admin.php';</script>"; // admin.php sayfasÄ±na yÃ¶nlendiriliyorsunuz

} // if($uyevarmi == 0) kontrolÃ¼ bitiÅŸi 

} // if($sifre == "" || $uyead == "") kontrolÃ¼ bitiÅŸi

} else {

/* Ã¼ye giriÅŸ yapmÄ±ÅŸsa hoÅŸgeldin diyelim */

$hosgeldin="Hoşgeldiniz Sayın  ";

$cikis=" Çıkış Yapmak İçin ";

$tikla="tıklayınız";

$sd='Şifre Değiştir';

/*echo '<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%"><th class="style6" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000"><p align="center"><font color="yellow" size="3">'.$hosgeldin.'<font color="#99FFFF" size="4">'.$_SESSION['uye'].'</font><font color="yellow">'.$cikis.'</font><font color="yellow" size="4">';?><a href="cikis.php" style="color:#00FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><?php echo $tikla ; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo '</font><font color="yellow">';?><a href="sifredegistir.php" style="color:#00FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><?php echo $sd ; ?></a><?php echo '</font></p></th></table>';

/*Ã§Ä±kÄ±ÅŸ yapmak iÃ§in tÄ±klayÄ±nÄ±z*/

//echo '<p align="center"><font color="black">'.$cikis.'</font><font color="#FF0000"><a href="cikis.php">'.$tikla.'</a></font></p>';

//cikis.php ye yÃ¶nlendiriliyorsunuz

}

?>

</tr>

</table>

</div>

</div>

<!-- Optional JavaScript -->

<?php

include("../assets/sablon/form013/footer.php");

?>

<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>

			<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields

(function() {

  'use strict';



  window.addEventListener('load', function() {

    var form = document.getElementById('gerekli');

    form.addEventListener('submit', function(event) {

      if (form.checkValidity() === false) {

        event.preventDefault();

        event.stopPropagation();

      }

      form.classList.add('was-validated');

    }, false);

  }, false);

})();

</script>

</body>

</html>