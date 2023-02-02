<?php

include("connect_config.php");
$dbhabe=new mysqli($host_name,$user_name,$password) or die($error_message.''.mysqli_error($dbh_abe));
$dbhabe->set_charset("utf8");
mysqli_select_db($dbhabe,$abe_db_name);

/*mysql_query("SET NAMES 'latin5'"); 

mysql_query("SET CHARACTER SET latin5"); 

mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  */




/*

$dbh=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die("Veritabanina baglanti saglanamiyor.Nedeni:".mysql_error());



mysql_select_db("b12_10384566_frm013");



mysql_query("SET NAMES 'latin5'"); 



mysql_query("SET CHARACTER SET latin5"); 



mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  

*/





?>