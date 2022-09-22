<?php
	
	###### www.phpkodlari.com #####	
	
	
	include("mysql_excel.inc.php");

$excel=new HarImport();

$sorgu="SELECT adi,adres From adres";

$import->ImportData($sorgu,"myXls.xls");



?>