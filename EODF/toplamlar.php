<?php
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
?>
<title>Evlilik Öncesi Danışmanlık Formu</title>
<script type="text/javascript" src="jquery-latest.pack.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<link rel="stylesheet" href="assets/css/eodfstyle.css">
<?php
include("../con_023.php");
include('eodfalanlari.php');
//mysqli baglantisi
$result = @mysqli_query($dbh,"select ilid,ilad from il order by ilad asc");
?>
<div class="height-100 bg-light" id="nav-placeholder">
<div class="bg-primary">
<form class="form-inline" action="023kekle.php" method="get" name="kaydet">
<div class="col-md-1 toplambar">
<select class="form-control form-control-sm" name="selectil" onchange="getilce(this.value)" onclick="toplamil();">
<option value=""><?php echo "İli Seçiniz";?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<?php } ?>
</select>
</div>

<div class="col-md-2 toplambar" id="statediv"><select class="form-control form-control-sm" name="selectilce" >
<option><?php echo "Önce İli Seçiniz";?></option>
</select>
</div>

<div class="col-md-2 toplambar" id="citydiv"><select class="form-control form-control-sm" id="selectoc" name="selectoc" >
<option><?php echo "Önce İlçeyi Seçiniz";?></option>
</select>
</div>
<?php
//mysqli baglantisi
$resultyil = @mysqli_query($dbh,"select distinct yiladi from yil order by yiladi asc");
?>
<div class="col-md-1 toplambar">
<input class="form-control form-control-sm" name="selectyil" type="text" id="selectyil" value="<?php echo date("Y"); ?>" size="5">
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
?>
</select>
</div>
<div class="col-md-2 toplambar">
<div class="col-md-4">
       <label>
         <input type="radio" class="form-control" name="sec" value="ilsec">
          &nbsp;&nbsp;İl</label>
          </div>
<div class="col-md-4">
         <label>
           <input type="radio" name="sec" value="ilcesec" />
           &nbsp;&nbsp;İlçe</label>
           </div>
           <div class="col-md-4">
         <label>
           <input type="radio" name="sec" value="aheksec" />
           &nbsp;&nbsp;A.Hek.</label>
           </div>
</div>
<div class="col-md-2 toplambar">
<select class="form-control form-control-sm" name="donem" tabindex="6"  onclick="toplamdonem();">
<option value="">Dönem Seçiniz</option>
<option value="ilk">1.Dönem</option>
<option value="ikinci">2.Dönem</option>
<option value="ucuncu">3.Dönem</option>
<option value="son">4.Dönem</option>
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
@mysqli_close($dbh);   
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>