<?php
include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
  // timeout periyodu, sn olarak
$inactive = 1300;
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
{
unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
session_destroy(); header("Location: cikis.php"); }
}
$_SESSION['timeout'] = time();
include("../connect.php");
$result_birim = @mysqli_query($dbh,"SELECT birim_id,birim_ad from birim order by birim_ad asc");
?>
<form class="form-group" id="form1" name="form1" method="POST" action="gereklikaydet.php" enctype="multipart/form-data">
<div class="row">
  <div class="col-md-8 offset-md-2 mt-1 mb-auto">
    <div class="card" style="background-color: black;">
      <div class="card-body">
	  <div class="card-header bg-success" align="left" style="max-height: 3rem;">
        <h5 class="card-title bg-success" align="left">Belge-Form Ekleme<a href="admin.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
          <span aria-hidden="true"><h4>&times;</h4></span>
        </a></h5>
		</div>
        <div class="card-text">
  <table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
<tr>
<td>
<select name="selectbirim" id="selectbirim" class="form-control form-control-sm" tabindex="1" onChange="getState(this.value)">
	<option value=""><?php echo "Birimi Seçiniz";?></option>
<?php while($row=mysqli_fetch_array($result_birim)) { ?>
<option value="<?=$row['birim_id']?>"><?=$row['birim_ad']?></option>
<?php } ?>
	</select>
	</td>
</tr>
<tr>
<td>
<div class="input-group">
        <div class="input-group-prepend">
        </div>
<input type="text" name="icerik" id="icerik" class="form-control form-control-sm" tabindex="2" placeholder="<?php echo 'İçerik';?>" required><!--required-->
	</div>
 </td>
 </tr>
 <td>
      <input type="text" name="formbaslik" class="form-control form-control-md text-danger bg-dark" placeholder="Form/Belge yükle..." disabled></td>
    </tr>
 <tr>
<td>
<input type="file" name="dosya" id="dosya" class="form-control form-control-sm btn-dark text-danger bg-dark" tabindex="3">
</td>
</tr>
 <tr>
<td>
<input type="text" name="bilgi" id="bilgi" class="form-control form-control-sm" value="<?php
   $a=Date("d.m.Y");
   echo $a;
   ?> " tabindex="4">
</td>
</tr>
<tr>
<td>
      <input type="text" name="resimbaslik" class="form-control form-control-md text-danger bg-dark" placeholder="Resim dosyası yükle..." disabled></td>
    </tr>
<tr bordercolor="#FFFF00">
<td>
<input type="file" name="resim" id="resim" class="form-control form-control-sm btn-dark text-danger bg-dark" tabindex="5">
</td>
</tr>
<tr>
  <td>
  <input name="tamtarih" id="tamtarih" type="hidden" tabindex="3" class="form-control form-control-sm" value="<?php $tarih=Date("Y-m-d");
  echo $tarih;?>"/></td>
  </tr>
<tr  bordercolordark="#0000FF" bordercolor="#FFFF00">
  <td align="center">
  <input name="gereklikayit" type="submit" class="form-control form-control-sm btn-success" id="gereklikayit" value="Belgeyi Kaydet" align="center">
  </td>
  </tr>  
</table>
</div>
		</div>
	  </div>
	</div>
	</div>
</form>
<?php
@mysqli_close($gerekli);
}
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



 