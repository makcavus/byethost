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
  <script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<script type="text/javascript" src="assets/js/sayfa_linkleri.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<script language="JavaScript" type="text/javascript" src="assets/js/karekod_ayir.js"></script>
<?php
include("../con_barkod.php");
?>
<div class="container mt-4">
	<div class="col-md-12">
	<form class="form-control mb-2 mt-4" id="testform" name="testform" action="javascript:void(0)" method="GET" onKeyUp="highlight(event)" 
	onClick="highlight(event)" onreset="resetConsume()">
	<div class="row bg-warning ml-1 mr-1">
	<div class="col-md-12 ">
<h5 class="text-center bg-warning"><strong>Aşı Kodu ve Adı Tanımlama</strong></h5>
</div>
</div>
<div class="row mt-3">
	<div class="col-md-12">
<input class="form-control" id="asi_adi" name="asi_adi" type="text" size="70" placeholder="Aşı adını giriniz" tabindex="1" autofocus required/>
</div>
</div>
<div class="row mt-3 mb-3">
<div class="text-center col-md-10">
<input class="form-control" id="token" name="token" type="text"  onkeydown="karekod_keydown(event)" onkeypress="karekod_keypress(event)" size="70" placeholder="Barkodu okutunuz" autofocus required/>
</div>
<div class="col-md-0">
<!--<label for="gtin">GTIN:</label>--><input class="form-control" id="gtin" name="gtin" type="text" />
</div>
<div class="col-md-0">
<!--<label for="serino">Seri No:</label>--><input class="form-control" id="serino" name="serino" type="text" />
</div>
<div class="col-md-0">
<!--<label for="expdate">Son Kullanma Tarihi:</label>--><input class="form-control" id="expdate" name="expdate" type="text"/>
</div>
<div class="col-md-0">
<!--<label for="batch">Parti No:</label>--><input class="form-control" id="batch" name="batch" type="text"/>
</div>
<div class="col-md-0">
<!--<label for="cins">Cinsi:</label>--><input class="form-control" id="cins" name="cins" type="text"/>
</div>
<div class="col-md-0">
<!--<label for="mesaj">Takdim:</label>--><input class="form-control" id="mesaj" name="mesaj" type="text"/>
</div>
<div class="col-md-2">
<input class="btn btn-primary btn-sm" type="button" name="kaydet" id="kaydet" value="Kaydet" onclick="asiadiekle();" hidden/>
<input class="btn btn-primary btn-xs" type="button" onclick="resetConsume()" value="Temizle"/>
</div>
</div>
</form>
<div class="row">
	<!--<div class="col-md-4 text-center">
    <a href="karekod.php" class="btn btn-sm btn-primary">Barkod Girişi</a>
</div>-->
<div class="col-md-12 text-center">
    <a href="#" onClick="tanimekle()" class="btn btn-sm btn-warning">Ürün Marka Tanımı</a>
</div>
</div>
</div>
<div id="sonuckay"></div>




<div class="container table-responsive">
<table class="table table-sm table-striped table-bordered table-hover table-info mt-2">
<thead>
<th>Aşı Kodu</th>
<th>Aşı Adı</th>
<th>İşlem</th>
</thead>
<tbody>
<?php
	$sql=@mysqli_query($dbh_barkod,"select * from asi_kodlari order by asi_adi asc");
	while($list=mysqli_fetch_array($sql)){	
?>
<tr>
<td><?php echo $list['asi_kodu'];?></td>
<td><?php echo $list['asi_adi'];?></td>

<td class="text-center">
<a class="btn btn-success btn-sm" href="asi_kodu_duzenle.php?id=<?= $list['id'] ?>">Düzenle</a>
<a class="btn btn-danger btn-sm" href="asi_kodu_sil.php?id=<?= $list['id'] ?>">Sil</a>
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
