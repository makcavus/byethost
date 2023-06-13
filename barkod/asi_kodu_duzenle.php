<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/form013style.css">
<link rel="stylesheet" href="assets/bootstrap-4/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap-4/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/navbar_style.css">
  <style>
      body{margin:0 0px;cursor:default;background-color:#000000;}
  </style>
<?php
include('../con_barkod.php');
$id=$_GET['id'];
//echo $id;
	$sql=mysqli_query($dbh_barkod,"select * from asi_kodlari where id=$id");
	while($list=mysqli_fetch_array($sql)){
?>
<div class="container mt-5">
	<div class="col-md-12">
<form class="form-control" id="testform" name="testform" action="asi_kodu_update.php" method="post">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
	<h3 class="text-center">Aşı Kodu ve Adı Düzenleme</h3>
    <div class="text-center col-md-12 mt-2">
<input class="form-control" id="cins" name="cins" type="text" size="70" placeholder="Aşı kodunu düzenleyiniz" value="<?php echo $list['asi_kodu'];?>" readonly/>
</div>
<div class="text-center col-md-12 mt-2">
<input class="form-control" id="asi_adi" name="asi_adi" type="text" size="70" placeholder="Aşı adını düzenleyiniz" value="<?php echo $list['asi_adi'];?>" autofocus/>
 </div>
 <div class="text-center col-md-12 mt-2">
</div>
<div class="row">
	<div class="col-md-4 text-center">
    <a href="asi_kodlari.php" class="btn btn-sm btn-warning">İptal</a>
</div>
<div class="col-md-4 text-center">
    <a href="asi_tanimlari.php" class="btn btn-sm btn-primary">Ürün Marka Tanımı</a>
</div>
<div class="col-md-4 text-center">
	<input type="submit" id="guncelle" name="guncelle" class="btn btn-success btn-sm" value="Güncelle">
	</div>
	</div>
</form>
</div>
</div>
<?php
	}
?>
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<script type="text/javascript" src="assets/js/sayfa_linkleri.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<script language="JavaScript" type="text/javascript" src="assets/js/karekod_ayir.js"></script>