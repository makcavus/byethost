﻿<!-- Bootstrap CSS -->
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
include("barkodalanlari.php");
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
<!--<label for="cins">Cinsi:</label>--><input class="form-control" id="cins" name="cins" type="hidden"/>
</div>
<div class="col-md-2">
<input class="btn btn-primary btn-sm" type="button" name="kaydet" id="kaydet" value="Kaydet" hidden/>
<input class="btn btn-primary btn-sm" type="button" name="asiadikaydet" id="asiadikaydet" value="Kaydet" onclick="asiadiekle();"/>
<input class="btn btn-warning btn-sm" type="button" onclick="resetConsume()" value="Temizle"/>
</div>
</div>
</form>
<div id="sonuckay"></div>
<?php
$asi_adi_sorgula=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari");
$asi_adi_say=mysqli_num_rows($asi_adi_sorgula);
if($asi_adi_say>0){
   ?>
<div class="row">
	<!--<div class="col-md-4 text-center">
    <a href="karekod.php" class="btn btn-sm btn-primary">Barkod Girişi</a>
</div>-->
<div class="col-md-12 text-center">
    <a href="#" onClick="tanimekle()" class="btn btn-sm btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i> Ürün Marka Adı Ekle</a>
</div>
</div>
</div>

<div class="container table-responsive" id="listele_asi_adi"></div>

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
    $id=$list['id'];
?>
<tr id="sat_<?php echo $id; ?>">
<td><?php echo $list['asi_kodu'];?></td>
<td><?php echo $list['asi_adi'];?></td>

<td class="text-center">
<form class="form-control-sm" name="testformx" id="testformx" method="GET" action="javascript:void(0);">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
<a class="btn btn-success btn-sm" href="#" onclick="asiadiduzenle(<?php echo $id; ?>);">Düzenle</a>
<button class="btn btn-sm btn-danger" id="<?php echo $id; ?>" data-id="<?php echo $list['asi_adi']; ?>"
style="width: 50px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</button></form>
</td>
</tr>

      <div id="sonucsil" align="center"></div>
    </div>
  </div>
</div>	
<?php
	}
	
	?>
</tbody>
</table>
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
<script language="JavaScript" type="text/javascript" src="assets/bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
<script >
 
var buttons = document.getElementsByTagName("button");
var buttonsCount = buttons.length;
for (var i = 0; i <= buttonsCount; i += 1) {
buttons[i].onclick = function tiklama() {
var id = this.id;
var asi_adi = $(this).attr("data-id")
//alert (asi_adi);
 //alert(id);
swal({
title: 'Emin Misin?',
html: "<p><b>"+asi_adi+"</b> adlı aşı <b>silinecek</b>.</p><p> Silinen veriler geri alınamaz!</p>",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
cancelButtonText: 'Hayır',
confirmButtonText: 'Evet'
}).then(function (result) {
  //alert(result.value);
  if(result.value){
var data = 'id='+id;
$.ajax({
type: 'GET',
url: "asi_kodu_sil.php",
data: data,
dataType: 'html',
context: document.body,
global: false,
async:false,
success: function(data) {
return data;
//$('div#sonucsil').html(data);
}
}).responseText;
 
swal(
'Başarılı!',
'Silinen aşı: '+asi_adi,
'success'
)
$("#sat_"+id).fadeOut("slow");
}else{
/*swal(
'İptal edildi!',
'Silmekten vazgeçildi.',
'error'
)*/
exit;
asiadiekleme();
}
})
};
}
</script>