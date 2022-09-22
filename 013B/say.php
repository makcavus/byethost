<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?
include("con_023.php");
$vtsec="select * from verib";
$socsorgu=mysql_query($vtsec);
$say=mysql_num_rows($socsorgu);
echo $say ;

?>
</body>
</html>
