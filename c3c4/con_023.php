<?php

$dbh=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die("Veritabanina baglanti saglanamiyor.Nedeni:".mysql_error());

mysql_select_db("b12_10384566_abe");

mysql_query("SET NAMES 'utf8'"); 

mysql_query("SET CHARACTER SET utf8"); 

mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");  



?>