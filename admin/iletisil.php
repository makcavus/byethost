<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>
function goBack() {
    window.history.back();
	}
</script>
<?
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   }
include("../../connect.php");
//include("../../con_023.php");
//include("tanimveyetkiler.php");
include('../frm013alanlari.php');
$siteadresi=$_SERVER['SERVER_NAME'];
	
$email=$_GET["EmailAdresi"];
//echo $_GET["ileti"];
	//exit;
//echo $_GET["CTarih"];
//echo $_GET["Cevap"];
//$conn=mysql_connect("localhost","root","malika");
$SQLInsert="delete from bizeulasin where(iltiid='".$_GET["ileti"]."')";
 
 if(mysql_query($SQLInsert)){
 //echo '<br><br><label>'.trsuz("Cevabınız Kaydedildi. Teşekkür Ederiz...").'</label><a href="#" onClick="goBack()">Geri</a><br><br>';
 echo '<br><div class="alert-info"><a href="#" class="form-control btn btn-success btn-sm"> Kayıt Silindi. Geri yönlendirileceksiniz.<i class="fa fa-reply-all fa-lg"></i> Geri</a></div>';
	 
 echo '<meta http-equiv=refresh content="2; url=http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" /><a href="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" _fcksavedurl="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php"></a>';
 //echo $_GET["Tarih"];
 //echo $_GET["AdSoyad"];
 }else{
	 echo mysql_error();
 //echo '<br><br><label>'.trsuz("Cevabınız eklenemedi.Tekrar deneyiniz.").'</label><a href="#" onClick="goBack()">Geri</a><br><br>';
 echo '<br><div class="alert-info">Kayıt Silinemedi !!! Geri yönlendirileceksiniz.<a href="#" class="form-control btn btn-warning btn-sm"><i class="fa fa-reply-all fa-lg"></i></a></div>';
	 
 echo '<meta http-equiv=refresh content="2; url=http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" /><a href="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php" _fcksavedurl="http://'.$siteadresi.'/site-bs/form013/admin/ilekle.php"></a>';

 }
 @mysql_close($dbh);
 ?>

</body>
</html>
