<?php
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
?>
<script type="text/javascript" src="jquery-latest.pack.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<link rel="stylesheet" href="assets/css/form013style.css">

<?php
include("../con_023.php");
include('frm013alanlari.php');
?>
<?php
//mysqli baglantisi
$result = @mysqli_query($dbh,"select ilid,ilad from il order by ilad asc");
?>
<div class="height-100 bg-light" id="nav-placeholder">
<div class="bg-primary


">
<form class="form-inline" action="023kekle.php" method="get" name="kaydet">
<div class="col-md-2 toplambar">
<select class="form-control form-control-sm" name="selectil" onChange="getStateTop(this.value)" onclick="toplamil();">
<option value=""><?php echo "İli Seçiniz";?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<?php } ?>
</select>
</div>

<div class="col-md-2 toplambar" id="statedivtop"><select class="form-control form-control-sm" name="selectilce" >
<option><?php echo "Önce İli Seçiniz";?></option>
</select>
</div>

<div class="col-md-4 toplambar" id="citydivtop"><select class="form-control form-control-sm" id="selectoc" name="selectoc" >
<option><?php echo "Önce İlçeyi Seçiniz";?></option>
</select>
</div>
<?php
//mysqli baglantisi
$resultyil = @mysqli_query($dbh,"select distinct yiladi from yil order by yiladi asc");
?>
<div class="col-md-2 toplambar">
<input class="form-control form-control-sm" name="selectyil" type="text" id="selectyil" value="<?php echo date("Y"); ?>">
</div>
<?php
//mysqli baglantisi
$resultay = @mysqli_query($dbh,"select distinct ayadi from ay order by ayid asc");
?>
<div class="col-md-2 toplambar">
<select class="form-control form-control-sm" name="selectay" id="selectay" onchange="kontroltoplam();" onclick="toplamay();">
<?php
while ($katay=mysqli_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
//echo $ilcekodu;
@mysqli_close($dbh);   
?>
</select>
</div>
</form>
</div>
<div class="row">
<div class="col-md-12" align="center" id="sonuc"></div>
</div>
</div>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>