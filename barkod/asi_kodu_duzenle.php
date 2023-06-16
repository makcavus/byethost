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
<div class="container mt-4">
	<div class="col-md-12">
	<form class="form-control mb-2 mt-4" id="testformup" name="testformup" action="javascript:void(0)" method="GET" onKeyUp="highlight(event)" 
	onClick="highlight(event)">
	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
	<div class="row bg-warning ml-1 mr-1">
	<div class="col-md-12 ">
<h5 class="text-center bg-warning"><strong>Aşı Adı Düzenleme</strong></h5>
</div>
</div>
<div class="row mt-3">
	<div class="col-md-12">
	<input class="form-control" id="cins" name="cins" type="text" size="70" placeholder="Aşı kodunu düzenleyiniz" value="<?php echo $list['asi_kodu'];?>" readonly/>
</div>
</div>
<div class="row mt-3 mb-3">
<div class="col-md-12">
<input class="form-control" id="asi_adi" name="asi_adi" type="text" size="70" placeholder="Aşı adını düzenleyiniz" value="<?php echo $list['asi_adi'];?>" autofocus/>
</div>

<div class="col-md-0">
<!--<label for="cins">Cinsi:</label>--><input class="form-control" id="cins" name="cins" type="hidden"/>
</div>
</div>
<div class="row mt-3">
<div class="col-md-6 text-center">
<a href="#" onclick="asiadiekleme();" class="btn btn-sm btn-danger" style="width: 100px;">İptal</a>
	</div>
<div class="col-md-6 text-center">
<input class="btn btn-primary btn-sm" style="width: 100px;" type="button" name="guncelle" id="guncelle" value="Güncelle" onclick="asiadidegistir();"/>
</div>
	</div>
</form>
<div id="sonuckay"></div>
<div class="col-md-12 text-center">
    <a href="#" onClick="tanimekle()" class="btn btn-sm btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i> Ürün Marka Adı Ekle</a>
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