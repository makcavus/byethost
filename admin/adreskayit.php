<?
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duyuru Kaydı</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<!--<style type="text/css">
<!--
body {
	background-color: #000000;
}
body,td,th {
font-family: Arial, Helvetica, sans-serif;
color: #0000FF;
}
a:link {
color: #000000;
text-decoration: none;
}
a:hover {
color: #FF0000;
text-decoration: none;
}
a:visited {
text-decoration: none;
}
a:active {
text-decoration: none;
}
.style2 {color: #00FF00}
.style5 {
font-family: Arial, Helvetica, sans-serif;
color: #000000;
font-weight: bold;
}
</style>-->
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>
</head>
<body style="background-color: black">
<?php include('tanimveyetkiler.php');
include('../form013alanlari.php');
 ?>
<form class="form-group" id="form1" name="form1" method="get" action="adreskaydet.php">
<div class="row">
  <div class="col-md-8 offset-md-2 mt-1 mb-auto">
    <div class="card" style="background-color: black;">
      <div class="card-body">
	  <div class="card-header bg-success" align="left" style="max-height: 3rem;">
        <h5 class="card-title bg-success" align="left">Rehbere Adres Ekleme<a href="ilekle.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
          <span aria-hidden="true"><h4>&times;</h4></span>
        </a></h5>
		</div>
        <div class="card-text">

<table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
<tbody>
<tr>
<td colspan="2">
<?php
include("../../connect.php");
//mysql baglantisi
$result = @mysql_query("select tipid,tipi from kurumtipi order by tipi asc");
?>

<select tabindex="1" name="selecttip" id="selecttip" onclick="adresgittip();" class="form-control form-control-sm" required><!--required-->
	<option value="0"><?php echo trsuz($kurumtipi);?></option>
    <option value="0"><?php echo trsuz($tumu);?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['tipid']?>"><?=trsuz($row['tipi'])?></option>
<? } ?>
	</select></td>
 </tr>
 <tr>
 
<?php
include("../../con_023.php");
//mysql baglantisi
$result = @mysql_query("select ilid,ilad from il order by ilad asc");
?>
<td>
<select tabindex="2" name="selectil" id="selectil" onChange="getStateSon(this.value)" class="form-control form-control-sm mt-1 mb-1 w-50">
	<option value=""><?php echo trsuz($ilsec);?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=trsuz($row['ilad'])?></option>
<? } ?>
	</select>
	</td>
	<td><div id="statedivson"><select tabindex="3" name="selectilce" class="form-control form-control-sm mt-1 mb-1 w-50">
	<option><?php echo trsuz($onceilsec);?></option>
        </select></div>
        </td>
 </tr>
<tr>
<td colspan="2">
<div class="input-group">
        <div class="input-group-prepend">
        </div>
<input name="konu" class="form-control form-control-sm" id="konu" type="text" tabindex="4" placeholder="Kurum ismini giriniz..." required><!--required-->
	</div>
</td>
</tr>
<tr>
<td colspan="2">

<textarea name="icerik" class="form-control form-control-sm" id="icerik" rows="8" tabindex="5" placeholder="Kurumun Adresini Giriniz...">
</textarea>
	
</td>
 </tr>
  <tr>
<td colspan="2">
<input type="text" name="dosya" class="form-control form-control-sm" tabindex="6" placeholder="Telefon No...(0 5XX XXX XX XX)">
</td>
</tr>
 <tr>
<td colspan="2">
<input type="text" name="bilgi" class="form-control form-control-sm" tabindex="7" placeholder="Faks No...(0 5XX XXX XX XX)">
</td>
</tr>
<tr>
<td colspan="2">
<input type="text" name="email" class="form-control form-control-sm" tabindex="8" placeholder="Email Adresi...">
</td>
</tr>
<tr>
<td colspan="2">
<input type="text" name="web" class="form-control form-control-sm" tabindex="9" placeholder="Web Adresi...">
</td>
</tr>
<tr>
<td colspan="2">
<textarea name="harita" class="form-control form-control-sm" id="harita" rows="8" tabindex="10" placeholder="Haritadaki Yeri...">
</textarea>
</td>
 </tr>
<tr>
<td colspan="2">
 <input name="duyurukayit" type="submit" class="form-control form-control-sm btn-success" id="duyurukayit" value="Adresi Kaydet" align="center" tabindex="11"></td>
  </tr>
  <tr>
  <td colspan="2">
  <input name="tarih" id="tarih" type="hidden" tabindex="12" value="<?php $tarih=Date("Y-m-d"); echo $tarih;?>">
  </td>
  </tr>
  </tbody>
</table>
</div>
		</div>
	  </div>
	</div>
	</div>
</form>
<?php 
}
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../bootstrap-4/popper.js"></script>
<script src="../bootstrap-4/js/bootstrap.min.js"></script>

</body>
</html>



