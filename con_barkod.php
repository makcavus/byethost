<?php
include("connect_config.php");
$dbh_barkod=new mysqli($host_name,$user_name,$password) or die($error_message.''.mysqli_error($dbh_barkod));
$dbh_barkod->set_charset("utf8");
mysqli_select_db($dbh_barkod,$barkod_db_name);
?>