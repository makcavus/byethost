<?php
$dbh=mysql_connect("localhost","root","malika") or die("Veritabanina baglanti saglanamiyor.Nedeni:".mysql_error());
mysql_select_db("frm013");
mysql_query("SET NAMES 'latin5'"); 
mysql_query("SET CHARACTER SET latin5"); 
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  

?>