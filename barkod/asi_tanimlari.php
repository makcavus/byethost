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
include("../con_barkod.php");
include('barkodalanlari.php');
?>
<!--Aşı adından alınan-->
<div class="container mt-4">
	<div class="col-md-12">
	<form class="form-control mb-2 mt-4" id="testform" name="testform" action="javascript:void(0)" method="GET" onKeyUp="highlight(event)" 
	onClick="highlight(event)" onreset="resetConsume()">
	<div class="row bg-warning ml-1 mr-1">
	<div class="col-md-12 ">
<h5 class="text-center bg-warning"><strong>Aşı Markası Tanımlama</strong></h5>
</div>
</div>
<div class="row mt-3">
	<div class="col-md-12">
<input class="form-control" id="asi_marka" name="asi_marka" type="text" size="70" placeholder="Aşı Markası adını giriniz" tabindex="1" autofocus required/>
</div>
</div>
<div class="row mt-3 mb-3">
<div class="text-center col-md-10">
<input class="form-control" id="token" name="token" type="text"  onkeydown="karekod_keydown(event)" onkeypress="karekod_keypress(event)" size="70" placeholder="Barkodu okutunuz" autofocus required/>
</div>

<div class="col-md-0">
<input class="form-control" id="cins" name="cins" type="text"/>
<input class="form-control" id="gtin" name="gtin" type="text" />
</div>
<div class="col-md-2">
<input class="btn btn-primary btn-sm" type="button" name="kaydet" id="kaydet" value="Kaydet" hidden/>
<input class="btn btn-primary btn-sm" type="button" name="asitanimkaydet" id="asitanimkaydet" value="Kaydet" onclick="asimarkaekle();"/>
<input class="btn btn-warning btn-sm" type="button" onclick="resetConsume()" value="Temizle"/>
</div>
</div>
</form>
<div id="sonuckay"></div>


<!--Aşı adından alınan sonu-->


<!--Aşı adı listeleme kontrol kısmı-->
<?php
$asi_adi_sorgula=mysqli_query($dbh_barkod,"SELECT * from asi_tanim");
$asi_adi_say=mysqli_num_rows($asi_adi_sorgula);
if($asi_adi_say>0){
   ?>
<div class="row">
	<!--<div class="col-md-4 text-center">
    <a href="karekod.php" class="btn btn-sm btn-primary">Barkod Girişi</a>
</div>-->
<div class="col-md-12 text-center">
    <a href="#" onClick="asiekle();" class="btn btn-sm btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i> Aşı Adı Kaydet</a>
</div>
</div>
</div>

<div class="container table-responsive" id="listele_asi_adi"></div>
<!--Aşı adı listeleme kontrol kısmı sonu-->

<div class="container table-responsive mt-1">
<table class="table table-sm table-striped table-bordered table-hover table-info">
<thead>
<th>Aşı Kodu</th>
<th>GTIN No</th>
<th>Aşı Adı</th>
<th>Aşı Markası</th>
<th>İşlem</th>
</thead>
<tbody>
<?php
	$sql=mysqli_query($dbh_barkod,"select * from asi_tanim order by asi_marka asc");
	while($liste=mysqli_fetch_array($sql)){	
    $cins=$liste['asi_kod'];
    $sqlx=mysqli_query($dbh_barkod,"select * from asi_kodlari where asi_kodu='$cins'");
	?>
<tr>
<td><?php echo $liste['asi_kod'];?></td>
<td><?php echo $liste['gtin'];?></td>
<?php	
	while($list=mysqli_fetch_array($sqlx)){	
?>
<td><?php echo $list['asi_adi'];?></td>
<?php
  }
?>
<td><?php echo $liste['asi_marka'];?></td>

<td class="text-center">
<a class="btn btn-success btn-sm" href="asi_tanim_duzenle.php?id=<?= $liste['id'] ?>">Düzenle</a>
<a class="btn btn-danger btn-sm" href="asi_tanim_sil.php?id=<?= $liste['id'] ?>">Sil</a>
</td>
</tr>
<?php
	}
}
	?>
</tbody>
</table>
</div>
</div>
<?php
?>
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<script type="text/javascript" src="assets/js/sayfa_linkleri.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<script language="JavaScript" type="text/javascript" src="assets/js/karekod_ayir.js"></script>