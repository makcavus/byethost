<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
include("assets/sablon/anadizin/header.php");
include("assets/sablon/anadizin/sidebar.php");
?>
<link rel="stylesheet" href="assets/css/tablo_form_styles.css">
<?php
include("con_023.php");
//mysqli baglantisi
$result = @mysqli_query($dbh,"select ilid,ilad from il order by ilad asc");
?>
<a id="basadon"></a>
<div class="height-100 bg-light" id="nav-placeholder">
  <div class="bg-warning" style="padding-top:3px;">
<form action="023kekle.php" method="get" name="kaydet" id="form" class="form-inline">
 <div class="col-md-2">
 <select name="selectil" id="selectil" onChange="getState(this.value)" onclick="adresgit();" class="form-control form-control-sm mr-5">
<option value="">İli Seçiniz</option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<?php } ?>
</select>
</div>
<div class="col-md-2">
<div id="statediv"><select name="selectilce" id="selectilce" class="form-control form-control-sm mr-5">
<option>Önce İli Seçiniz</option>
        </select></div>
		</div>        
<?php
include("connect.php");
//mysqli baglantisi
$result = @mysqli_query($dbh,"select tipid,tipi from kurumtipi order by tipi asc");
?>
<div class="col-md-3">
 <select name="selecttip" id="selecttip" onclick="adresgittip();" class="form-control form-control-sm mr-5">
	<option value="-1">Kurum Tipini Seçiniz</option>
    <option value="0">Tümü</option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['tipid']?>"><?=$row['tipi']?></option>
<?php } ?>
	</select>
</div>	
<div class="col-md-4">
<div id="citydiv"><select id="selectoc" name="selectoc" class="form-control form-control-sm mr-auto">
	<option>Önce İlçeyi Seçiniz</option>
        </select></div>
</div>
<div class="col-md-1">
 <a class="navbar-brand ml-auto mr-5" href="#" id="iletisimx" title="Filtreyi Temizle"><i class="fa fa-refresh fa-lg" aria-hidden="true"></i></a>
  </div>
<?php
@mysqli_close($dbh);   
?>
</form>
</div>
<br>
<div id="adressonuc" class="yukseklik">
<style type="text/css">
.renk {background:#CCFFCC; font:Arial, Helvetica, sans-serif; font:normal; border:#000000;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;}
</style>
<?php
include('connect.php');
$kriter="select * from adres order by adrid";
$sorgu=mysqli_query($dbh,$kriter);
$sonuc=mysqli_num_rows($sorgu);
include("assets/sablon/anadizin/adres_tablo_sorgu.php");
?>     
    </div>
  </div>
</div>  
</div>
</div>
<!-- Optional JavaScript -->
<?php
include("assets/sablon/anadizin/footer.php");
?>
<script type="text/javascript" src="iletikaydet.js">
</script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="jquery-latest.pack.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	

 <script>
    function FormSifirla($form) {
    $form.find('select[name="selectil"],select[name="selectilce"],select[name="selecttip"],select[name="selectoc"]').val('');
    $form.find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
}
          //İletişim Bilgileri
          $("#iletisimx").click(function(){
             
            FormSifirla($('#form'));  
            $("#selectilce").val(0);          
            $("#selecttip").val(0);
            });
        </script>
        <script>
          $("#selectilce").click(function(){
        
var ilidi=$("#selectil").val();
				//alert(ilceidi);
				console.log(ilidi);
				if(ilidi==''){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'Önce ili seçmelisiniz !!!'
})
				}
      });
			</script>
<script>
          $("#selectoc").click(function(){
        
var ilidi=$("#selectil").val();
				//alert(ilceidi);
				console.log(ilidi);
				if(ilidi==''){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'Önce il ve İlçeyi seçmelisiniz !!!'
})
				}
      });
			</script>  
      <script>
          $("#selectoc").click(function(){
        
var ilidi=$("#selectil").val();
var ilceidi=$("#selectilce").val();
				//alert(ilceidi);
				console.log(ilidi);
				if(ilidi>0 && ilceidi==undefined){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'İlçe seçilmedi !!!'
})
				}
      });
			</script>          

