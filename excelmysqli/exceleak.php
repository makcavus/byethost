<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?
require_once('con_023.php'); // Veritabani Baglanti
// Mysql den gelen verileri excel stünlarina yazmak
if(isset($_POST["sql_excel"])){ // FORM SONUC
$dos = "aktar.xls"; // EXCEL TABLOSU ADI
$yaz = @fopen($dos,'w+'); 
$tablo_adi = "adres"; // DB'DEKI TABLO ADI
$tablo_sorgu = mysql_query("select * from $tablo_adi");//echo $tablo_sorgu;exit;
while ($tablo_sonuc = mysql_fetch_row($tablo_sorgu)) {
//$a = $tablo_sonuc; // (id) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
$b = $tablo_sonuc[1]; // (satir 2) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
$c = $tablo_sonuc[2]; // (satir 3) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
$d = $tablo_sonuc[3]; // (satir 4) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
$e = $tablo_sonuc[4]; // (satir 5) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
//$f = $tablo_sonuc[5]; // (satir 6) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
//$g = $tablo_sonuc[6]; // (satir 7) SQL'DEKI TABLOLARINIZDAKI SATIR ADLARI
 
fwrite($yaz,"$b\t $c\t $d\t $e\t \n"); // VE EXCELE SQL DEN GELEN VERILERI YAZIYORUZ
}
mysql_free_result($tablo_sorgu); // DB YI BOSALTIYORUZ
fclose($yaz); // EXCEL TABLOSUNU KAPATIYORUZ
echo "Veriler Aktarildi"; 
exit;
}
?>
<FORM METHOD=POST ACTION="">
<INPUT TYPE="submit" value="sql den excele aktar" name="sql_excel"> 
</FORM> 
</body>
</html>
