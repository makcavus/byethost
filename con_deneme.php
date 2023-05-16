<?php

include("connect_config.php");
$dbh_deneme=new mysqli($host_name,$user_name,$password) or die($error_message.''.mysqli_error($dbh_deneme));
$dbh_deneme->set_charset("utf8");
mysqli_select_db($dbh_deneme,$deneme_db_name);
?>