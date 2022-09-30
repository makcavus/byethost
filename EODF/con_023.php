<?php
$dbh=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die("Veritabanina baglanti saglanamiyor.Nedeni:".mysql_error());
mysql_select_db("b12_10384566_frm102");
mysql_query("SET NAMES 'latin5'"); 
mysql_query("SET CHARACTER SET latin5"); 
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  

?>