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
$sql=mysqli_query($dbh_barkod,"select * from asi_tanim where id=$id");
	while($list=mysqli_fetch_array($sql)){
?>
<div class="container mt-4">
	<div class="col-md-12">
	<form class="form-control mb-2 mt-4" id="testformup" name="testformup" action="javascript:void(0)" method="GET" onKeyUp="highlight(event)" 
	onClick="highlight(event)">
	<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
	<div class="row bg-warning ml-1 mr-1">
	<div class="col-md-12 ">
<h5 class="text-center bg-warning"><strong>Aşı Markası Düzenleme</strong></h5>
</div>
</div>
<?php
$asi_kodu=$list['asi_kod'];
$asi_adi_sorgula=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari where asi_kodu='$asi_kodu'");
while($asi_adi_yaz=mysqli_fetch_array($asi_adi_sorgula)){
$asi_adi_bas=$asi_adi_yaz['asi_adi'];
?>
<div class="row mt-3">
	<div class="col-md-12">
	<input class="form-control" id="cinsad" name="cinsad" type="text" size="70" placeholder="Aşı kodunu düzenleyiniz" value="<?php echo $list['asi_kod'].' - '.$asi_adi_bas;?>" readonly/>
</div>
</div>
<?php
}
?>
<div class="row mt-3 mb-3">
<div class="col-md-12">
<input class="form-control" id="gtin" name="gtin" type="text" size="70" placeholder="GTIN numarasını düzenleyiniz" value="<?php echo $list['gtin'];?>" readonly/>
</div>
</div>
<div class="row mt-3 mb-3">
<div class="col-md-12">
<input class="form-control" id="asi_marka" name="asi_marka" type="text" size="70" placeholder="Aşı markasını düzenleyiniz" value="<?php echo $list['asi_marka'];?>" autofocus/>
</div>
<div class="col-md-0">
<!--<label for="cins">Cinsi:</label>--><input class="form-control" id="cins" name="cins" value="<?php echo $list['asi_kod'];?>" type="hidden"/>
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
    <a href="#" onClick="asiekle()" class="btn btn-sm btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i> Aşı Adı Kaydet</a>
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