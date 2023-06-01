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
<div class="container mt-4">
	<div class="col-md-12">
<form class="form-control" id="testform" name="testform" action="asi_tanim_kaydet.php" method="post">
<div class="text-center col-md-12 mt-2">
<input class="form-control" id="token" name="token" type="text"  onkeydown="karekod_keydown(event)" onkeypress="karekod_keypress(event)" size="70" placeholder="Barkodu okutunuz" required/>
 </div>
	<h3 class="text-center">Aşı Markası Tanımlama</h3>
  <div class="text-center col-md-12 mt-2">
<input class="form-control" id="cins" name="cins" type="hidden"/>
<input class="form-control" id="gtin" name="gtin" type="hidden" />
<input class="form-control" id="asi_marka" name="asi_marka" type="text" size="70" placeholder="Aşı markasını giriniz" autofocus/>
 </div>
 <div class="text-center col-md-12 mt-2">
</div>
<div class="row">	
<div class="col-md-6 text-center">
    <a href="#" onClick="asiekle();" class="btn btn-sm btn-primary" style="width: 120px"><i class="fa fa-floppy-o" aria-hidden="true"></i>
 <?php echo $asiadiekle; ?></a>
</div>
<div class="col-md-6 text-center">
	<input type="submit" id="kaydet" name="kaydet" class="btn btn-success btn-sm" value="Kaydet">
	</div>
	</div>
</form>
</div>



<div class="container table-responsive">
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
    $asi_kodum=$liste['asi_kod'];
    $sqlx=mysqli_query($dbh_barkod,"select * from asi_kodlari where asi_kodu='$asi_kodum'");
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