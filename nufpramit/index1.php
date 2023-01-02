<?php
session_start(); // oturumu başlatıyoruz
if(!isset($_SESSION['uye'])) { // eğer üye giriş yapmamış ise
/*
html komutlarını rahat bir şekilde yazmak için
php etiketini kapatıyoruz.
*/
// sayfanın içeriğini görmek için buradaki girişleri yapmalıdır.
?>
Bu sayfanın içeriğini görebilmek için üye girişi yapmalısınız.
<form action="index.php" method="post">
<input type="text" size="20" name="uyead" id="uyead" /><br />
<input type="password" size="20" name="sifre" id="sifre" /><br />
<input type="submit" id="giris" value="Giriş Yap" />
</form>
<?php
exit();
} else {
/* üye giriş yapmışsa hoşgeldin diyelim */
echo "Hoşgeldiniz Değerli Üyemiz " . $_SESSION['uye'] . "";
/*çıkış yapmak için tıklayınız*/
echo 'Çıkış Yapmak İçin <a href="cikis.php">Tıklayın</a><br/>'; //cikis.php ye yönlendiriliyorsunuz
}
?>