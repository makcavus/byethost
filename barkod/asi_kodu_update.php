<?php
//ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Aşı Kodu Kayıt Sayfası</title>
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>

<body>
<?php
include('baglan_barkod.php');
$id=$_POST['id'];
$asi_kodu=$_POST['cins'];
$asi_adi=$_POST['asi_adi'];
//echo $id;
//exit;
$barkod_kontrol=$db->prepare("UPDATE asi_kodlari SET asi_kodu=? , asi_adi=? where id=?");
$update_kontrol=$barkod_kontrol->execute(array($asi_kodu,$asi_adi,$id));
if (@$asi_adi!=null and $update_kontrol){
    echo "Bilgiler güncellendi.";
    header("refresh: 1; url=asi_kodlari.php");
    exit;
  }else{
    echo "Bilgiler güncellenemedi.";
    header("refresh: 1; url=asi_kodlari.php");
exit;
    }
   
mysql_close($con);
//ob_end_flush();
?>
<script src="bootstrap-4/popper.js"></script>
<script src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
