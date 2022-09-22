<?php
include("connect_config.php");
$dbh=new mysqli($host_name,$user_name,$password) or die($error_message.''.mysqli_error($dbh));
$dbh->set_charset("utf8");
mysqli_select_db($dbh,$etf_db_name);

/*mysql_query("SET NAMES 'latin5'"); 

mysql_query("SET CHARACTER SET latin5"); 

mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  */



?>