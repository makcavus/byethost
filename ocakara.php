<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Adresler</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4/font-awesome/css/font-awesome.min.css">
</head>

<body>
<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?php
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://php-ajax-guru.blogspot.com
?>

<?php $countryId=intval($_GET['selectil']);
$stateId=intval($_GET['selectilce']);
include("connect.php");
//include('form013/frm013alanlari.php');
/*$link = mysqli_connect('localhost', 'root', 'malika'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db('frm023');*/
$query="SELECT adrid,ilid,ilceid,adi FROM adres WHERE ilid='$countryId' AND ilceid='$stateId' order by adi asc";
$result=mysqli_query($dbh,$query);

?>
<select id="selectoc" name="selectoc" onclick="adreskurum();" class="form-control form-control-sm mr-5">
<option>Kurum/Kuruluş Seçiniz</option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value=<?=$row['adrid']?>><?=$row['adi']?></option>
<?php } ?>
</select>
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="bootstrap-4/popper.js"></script>
      <script src="bootstrap-4/js/bootstrap.min.js"></script>
	  
</body>

</html>
