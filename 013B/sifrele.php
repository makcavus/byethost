<form method="POST" action="md5.php">

<input type="text" name="SifreMD5" value="">
<input type="submit" value="Gonder">

</form>
<?php   

/* Programmer :İhsaN Ceylan (c) 2010*/

// Fonksiyon Yaratılıyor

function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}

$Sifresha1=$_POST['SifreMD5']; // get metodu ile formdan gelen geğer alınıyor
$sha1Yaz=sha1cevir($Sifresha1); // fonksiyon çağırılıor
 // ekrana md5 kodu yazdırılıyor
print("<b>Sifre : </b> ".$Sifresha1." <b> Sha1 Karşılığı : </b>".$sha1Yaz);				

?>

