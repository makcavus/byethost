<?php
include('../con_deneme.php');
if(! $dbh_deneme) die ("mysql bağlantısında hata oluştu");
//veritabanı bağlantı kodlarımız bitti
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$tel = $_POST['tel'];
$kayit = mysqli_query($dbh_deneme,"insert into kayitlar (ad, soyad, tel) values ('$ad', '$soyad', '$tel')");
if ($kayit)
{
echo "";
} else 
{
echo "hata";
}
?>