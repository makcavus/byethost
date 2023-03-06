<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>C3-C4 Veritabanı Bağlantısı</title>
<link href="Style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
include("connect_config.php");
$dbh=new mysqli($host_name,$user_name,$password) or die($error_message.''.mysqli_error($dbh));
$dbh->set_charset("utf8");
mysqli_select_db($dbh,$c3c4_db_name);
/*if($dbh){
	echo "Bağlantı başarılı";
}else{
	echo "Bağlanılamadı";
}*/
/*mysql_query("SET NAMES 'latin5'"); 

mysql_query("SET CHARACTER SET latin5"); 

mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  */



?>
</body>
</html>