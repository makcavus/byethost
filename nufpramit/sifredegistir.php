<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>�ifre De�i�tirme</title>
<link href="Style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<?php
@session_start();
?>

 <?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 

  
$user=$_SESSION['uye'];

if(!isset($_SESSION["uye"])){
//echo "Bu sayfay� g�r�nt�leme yetkiniz yoktur.";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
echo '<table class="yukselti" align="center" cellpadding="0" cellspacing="0" width="33%" heighth="33%"><div align="center"></div>';
echo '<tr>';

$hosgeldin=trsuz("Ho�geldiniz Say�n  ");
/*echo '<p align="center"><font color="black">'.$hosgeldin.'<font color="#FF0000">'.$_SESSION['uye'].'</font><font color="black"></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';*/

}


$sdbaslik=trsuz('�ifre De�i�tirme Sayfas�');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#FFFF00" colspan="2"><p align="center"><font color="BLUE" size="4">�ifre De�i�tirme Sayfas�</font></p></th>';
   echo '<p>';
   echo '<br />';
   echo '<br />';
   echo '<br />';  
   echo '<p>';
 
echo '</tr>';
echo '<tr>';
 if(!isset($_SESSION["uye"])){
echo '<p align="center"><font color="black">Bu sayfay� g�r�nt�leme yetkiniz yoktur.</font></p>';//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#00FF00" colspan="2"><p align="center"><font color="black" size="3">Ho�geldiniz Say�n  <font size="4" color="#FF0000">'.$_SESSION['uye'].'</font><font color="black"></p></th>';
echo '</tr>';
$eskikul=trsuz('�ifreniz');
$kul=trsuz('Yeni �ifre');
$tkul=trsuz('Yeni �ifre Tekrar');
$sdbdeg=trsuz('�ifreyi De�i�tir');
$vazgec=trsuz('Vazge�');

?>

<form method="post" action="sifredegistir.php">
<input type="hidden" name="id">
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#99FFFF" colspan="2"><p align='center'><font color='black' size='2'><? echo '�ifreniz:' ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="style5" type="password" name="eskisifre"></font><br></p></th>
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#99FFFF" colspan="2"><p align='center'><font color='black' size='2'><? echo 'Yeni �ifre:' ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="style5" type="password" name="yeni"></font><br></p></th>
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#99FFFF" colspan="2"><p align='center'><font color='black' size='2'><? echo 'Yeni �ifre Tekrar:' ; ?>&nbsp;&nbsp;<input class="style5" type="password" name="yeni_tekrar"></font><br></p></th>
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00" colspan="2"><p align="center"><input type="submit" name="xxx" value="<? echo '     Vazge�     ' ; ?>" style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="<? echo '�ifreyi De�i�tir' ; ?>" style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'"></p></th>
</form>
</tr>
<tr>
<?php
} 
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}


session_start(); //oturum başlatılıyor
$vazgecildi=$_POST['xxx'];
if($vazgecildi){
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasına yönlendiriliyorsunuz
}
mysql_connect("localhost","root","malika") or die("mysqle bağlanılamıyor"); //root adlı kullanıcı yok ise mysqle bağlanamıyorsunuz

mysql_select_db("frm013") or die("veritabanı seçilemiyor"); //veri tabanınızda böle bir veritabanı oluşturulmadığından veritabanı seçilemiyor
$eski=strip_tags(mysql_real_escape_string($_POST['eskisifre']));
$sifregelen=$_SESSION['uyesif'];

//echo $sifregelen;
//echo '<br>';
$eskisha=sha1cevir($eski);
$eskisha1=sha1cevir($eskisha);
$eskisha2=sha1cevir($eskisha1);

//echo $eskisha;
//print("<b>Sifre : </b> ".$eski." <b> Sha1 Kar��l��� : </b>".$eskisha);
$yenisi = strip_tags(mysql_real_escape_string($_POST['yeni'])); //üye adını kötü huylu kişilerden korumak için alınmış bir önlemdir(-->,",' bu tür saldırıları engellemek için)

$tyenisi = strip_tags(mysql_real_escape_string($_POST['yeni_tekrar']));// şifreyi kötü huylu kişilerden korumak için alınmış bir önlemdir(<,>,",' bu tür saldırıları engellemek için) 
$yenisha=sha1cevir($yenisi);
$yenisha1=sha1cevir($yenisha);
$yenisha2=sha1cevir($yenisha1);

$uyekul=$_SESSION['uye'];
if(isset($_SESSION["uye"]) and $eski=="" || $yenisi == "" || $tyenisi == "") {
$doldur=trsuz("L�tfen T�m Alanlar� Doldurun");
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">L�tfen T�m Alanlar� Doldurun.</font></p></th>';  // eğer üye adı ve şifre boş işe boş alanları doldurunuz
} elseif(isset($_SESSION["uye"]) and $sifregelen!=$eskisha2) {
$sifreyanlis=trsuz('�nceki �ifrenizi Yanl�� Girdiniz.');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">�nceki �ifrenizi Yanl�� Girdiniz.</font></p></th>';
}elseif(isset($_SESSION["uye"]) and $yenisi!=$tyenisi) { 
$aynidegil=trsuz('De�i�tirilmek istenen �ifre do�rulanmad�.');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">De�i�tirilmek istenen �ifre do�rulanmad�.</font></p></th>';
} elseif(isset($_SESSION["uye"]) and $yenisi==$eski) {
$aynisifre=trsuz('Eski �ifreyi Tekrar Girdiniz.');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Eski �ifreyi Tekrar Girdiniz.</font></p></th>';
}else{
$guncelle=mysql_query("update uyeler set uyesifre = '$yenisha2' where uyekim = '$uyekul'");
//echo $yenisha;
//echo $uyekul;

$admin=trsuz("admin sayfasına yönlendiriliyorsunuz");
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Kullan�c� Sayfas�na Y�nlendiriliyorsunuz</font></p></th>';
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasına yönlendiriliyorsunuz

}

?>
</tr>
</table>
</body>
</html>
