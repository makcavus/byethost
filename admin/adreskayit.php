<?php
include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
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
?>
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>
<?php include('../form013/tanimveyetkiler.php');
include('../form013/form013alanlari.php');
 ?>
<form class="form-group" id="form1" name="form1" method="POST" action="adreskaydet.php">
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
include("../connect.php");
//mysql baglantisi
$result = @mysqli_query( $dbh,"select tipid,tipi from kurumtipi order by tipi asc");
?>

<select tabindex="1" name="selecttip" id="selecttip" onclick="adresgittip();" class="form-control form-control-sm" required><!--required-->
	<option value="0"><?php echo $kurumtipi;?></option>
    <option value="0"><?php echo $tumu;?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['tipid']?>"><?=$row['tipi']?></option>
<?php } ?>
	</select></td>
 </tr>
 <tr>
 
<?php
include("../con_023.php");
//mysql baglantisi
$result = @mysqli_query( $dbh,"select ilid,ilad from il order by ilad asc");
?>
<td>
<select tabindex="2" name="selectil" id="selectil" onChange="getStateSon(this.value)" class="form-control form-control-sm mt-1 mb-1 w-50">
	<option value=""><?php echo $ilsec;?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<?php } ?>
	</select>
	</td>
	<td><div id="statedivson"><select tabindex="3" name="selectilce" class="form-control form-control-sm mt-1 mb-1 w-50">
	<option><?php echo $onceilsec;?></option>
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
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



 