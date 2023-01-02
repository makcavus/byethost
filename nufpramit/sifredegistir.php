<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Şifre Değiştirme</title>
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
//echo "Bu sayfayı görüntüleme yetkiniz yoktur.";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo '<table class="yukselti" align="center" cellpadding="0" cellspacing="0" width="33%" heighth="33%"><div align="center"></div>';
echo '<tr>';

$hosgeldin=trsuz("Hoşgeldiniz Sayın  ");
/*echo '<p align="center"><font color="black">'.$hosgeldin.'<font color="#FF0000">'.$_SESSION['uye'].'</font><font color="black"></p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';*/

}


$sdbaslik=trsuz('Şifre Değiştirme Sayfası');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#FFFF00" colspan="2"><p align="center"><font color="BLUE" size="4">Şifre Değiştirme Sayfası</font></p></th>';
   echo '<p>';
   echo '<br />';
   echo '<br />';
   echo '<br />';  
   echo '<p>';
 
echo '</tr>';
echo '<tr>';
 if(!isset($_SESSION["uye"])){
echo '<p align="center"><font color="black">Bu sayfayı görüntüleme yetkiniz yoktur.</font></p>';//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#00FF00" colspan="2"><p align="center"><font color="black" size="3">Hoşgeldiniz Sayın  <font size="4" color="#FF0000">'.$_SESSION['uye'].'</font><font color="black"></p></th>';
echo '</tr>';
$eskikul=trsuz('Şifreniz');
$kul=trsuz('Yeni Şifre');
$tkul=trsuz('Yeni Şifre Tekrar');
$sdbdeg=trsuz('Şifreyi Değiştir');
$vazgec=trsuz('Vazgeç');

?>

<form method="post" action="sifredegistir.php">
<input type="hidden" name="id">
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#99FFFF" colspan="2"><p align='center'><font color='black' size='2'><? echo 'Şifreniz:' ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="style5" type="password" name="eskisifre"></font><br></p></th>
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#99FFFF" colspan="2"><p align='center'><font color='black' size='2'><? echo 'Yeni Şifre:' ; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="style5" type="password" name="yeni"></font><br></p></th>
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#99FFFF" colspan="2"><p align='center'><font color='black' size='2'><? echo 'Yeni Şifre Tekrar:' ; ?>&nbsp;&nbsp;<input class="style5" type="password" name="yeni_tekrar"></font><br></p></th>
</tr>
<tr>
<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#FFCC00" colspan="2"><p align="center"><input type="submit" name="xxx" value="<? echo '     Vazgeç     ' ; ?>" style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="<? echo 'Şifreyi Değiştir' ; ?>" style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'"></p></th>
</form>
</tr>
<tr>
<?php
} 
function sha1cevir($SifreSTR){ 
	$SifreSTR=sha1($SifreSTR);
	return $SifreSTR;
}


session_start(); //oturum baÅŸlatÄ±lÄ±yor
$vazgecildi=$_POST['xxx'];
if($vazgecildi){
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasÄ±na yÃ¶nlendiriliyorsunuz
}
mysql_connect("localhost","root","malika") or die("mysqle baÄŸlanÄ±lamÄ±yor"); //root adlÄ± kullanÄ±cÄ± yok ise mysqle baÄŸlanamÄ±yorsunuz

mysql_select_db("frm013") or die("veritabanÄ± seÃ§ilemiyor"); //veri tabanÄ±nÄ±zda bÃ¶le bir veritabanÄ± oluÅŸturulmadÄ±ÄŸÄ±ndan veritabanÄ± seÃ§ilemiyor
$eski=strip_tags(mysql_real_escape_string($_POST['eskisifre']));
$sifregelen=$_SESSION['uyesif'];

//echo $sifregelen;
//echo '<br>';
$eskisha=sha1cevir($eski);
$eskisha1=sha1cevir($eskisha);
$eskisha2=sha1cevir($eskisha1);

//echo $eskisha;
//print("<b>Sifre : </b> ".$eski." <b> Sha1 Karşılığı : </b>".$eskisha);
$yenisi = strip_tags(mysql_real_escape_string($_POST['yeni'])); //Ã¼ye adÄ±nÄ± kÃ¶tÃ¼ huylu kiÅŸilerden korumak iÃ§in alÄ±nmÄ±ÅŸ bir Ã¶nlemdir(-->,",' bu tÃ¼r saldÄ±rÄ±larÄ± engellemek iÃ§in)

$tyenisi = strip_tags(mysql_real_escape_string($_POST['yeni_tekrar']));// ÅŸifreyi kÃ¶tÃ¼ huylu kiÅŸilerden korumak iÃ§in alÄ±nmÄ±ÅŸ bir Ã¶nlemdir(<,>,",' bu tÃ¼r saldÄ±rÄ±larÄ± engellemek iÃ§in) 
$yenisha=sha1cevir($yenisi);
$yenisha1=sha1cevir($yenisha);
$yenisha2=sha1cevir($yenisha1);

$uyekul=$_SESSION['uye'];
if(isset($_SESSION["uye"]) and $eski=="" || $yenisi == "" || $tyenisi == "") {
$doldur=trsuz("Lütfen Tüm Alanları Doldurun");
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Lütfen Tüm Alanları Doldurun.</font></p></th>';  // eÄŸer Ã¼ye adÄ± ve ÅŸifre boÅŸ iÅŸe boÅŸ alanlarÄ± doldurunuz
} elseif(isset($_SESSION["uye"]) and $sifregelen!=$eskisha2) {
$sifreyanlis=trsuz('Önceki Şifrenizi Yanlış Girdiniz.');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Önceki Şifrenizi Yanlış Girdiniz.</font></p></th>';
}elseif(isset($_SESSION["uye"]) and $yenisi!=$tyenisi) { 
$aynidegil=trsuz('Değiştirilmek istenen şifre doğrulanmadı.');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Değiştirilmek istenen şifre doğrulanmadı.</font></p></th>';
} elseif(isset($_SESSION["uye"]) and $yenisi==$eski) {
$aynisifre=trsuz('Eski Şifreyi Tekrar Girdiniz.');
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Eski Şifreyi Tekrar Girdiniz.</font></p></th>';
}else{
$guncelle=mysql_query("update uyeler set uyesifre = '$yenisha2' where uyekim = '$uyekul'");
//echo $yenisha;
//echo $uyekul;

$admin=trsuz("admin sayfasÄ±na yÃ¶nlendiriliyorsunuz");
echo '<th class="cizgi" width="25%"align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="2"><p align="center"><font color="#FFFF00" size="3">Kullanıcı Sayfasına Yönlendiriliyorsunuz</font></p></th>';
echo "<script>location.href='frm023kayit.php';</script>"; // admin.php sayfasÄ±na yÃ¶nlendiriliyorsunuz

}

?>
</tr>
</table>
</body>
</html>
