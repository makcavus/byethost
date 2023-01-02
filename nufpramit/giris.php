<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 

session_start(); //oturum başlatılıyor

mysql_connect("localhost","root","malika") or die("mysqle bağlanılamıyor"); //root adlı kullanıcı yok ise mysqle bağlanamıyorsunuz

mysql_select_db("frm013") or die("veritabanı seçilemiyor"); //veri tabanınızda böle bir veritabanı oluşturulmadığından veritabanı seçilemiyor

$uyead = strip_tags(mysql_real_escape_string($_POST['uyead'])); //üye adını kötü huylu kişilerden korumak için alınmış bir önlemdir(-->,",' bu tür saldırıları engellemek için)

$sifre = strip_tags(mysql_real_escape_string($_POST['sifre']));// şifreyi kötü huylu kişilerden korumak için alınmış bir önlemdir(<,>,",' bu tür saldırıları engellemek için) 

if($sifre == "" || $uyead == "") {
$doldur=trsuz("Lütfen Tüm Alanları Doldurun");
echo '<p align="center"><font color="#FF0000">'.$doldur.'</font></p>';  // eğer üye adı ve şifre boş işe boş alanları doldurunuz
} else { 

$sifre = sha1($sifre); //şifreyi şifreliyor

$sql = mysql_query("select uyead from uyeler where uyead='$uyead' and uyesifre='$sifre'"); //girilen üye adı ve şifre ile veritabanındaki ad ile şifre eşleştiriliyor

$uyevarmi = mysql_num_rows($sql); // böyle bir üye varmı sorgusu yapılıyor

if($uyevarmi == 0) { //eğer eşleşmiyorsa böyle bir üye yok ise 
$yok=trsuz("Kullanıcı Bulunamadı, Tekrar Deneyiniz.");

echo '<p align="center"><font color="#FF0000">'.$yok.'</font></p>'; //üyelik bilgileri bulunamadı tekrar deneyin

} else { //eşleşiyorsa

$uyebilgi = mysql_fetch_assoc($sql); // veri tabanındaki bilgiler çözülür

$_SESSION['uye'] = $uyebilgi['uyead']; //oturum başlatılır

echo "admin sayfasına yönlendiriliyorsunuz";
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasına yönlendiriliyorsunuz

} // if($uyevarmi == 0) kontrolü bitişi 

} // if($sifre == "" || $uyead == "") kontrolü bitişi
?>