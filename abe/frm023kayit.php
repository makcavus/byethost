<?php
include("index.php");
error_reporting(0);
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
//include("../assets/sablon/form013/header.php");
//include("../assets/sablon/form013/sidebar.php");
?>
<script type="text/javascript" src="jquery-latest.pack.js"></script>
<style>
	.tablesecim {
    background-color: yellow  !important;
		margin-top: -8px !important;
    }
.divsecim {
		margin-top: -10px !important;
		padding-bottom:10px;
    }
	</style>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<?php
include("../con_023.php");
include("../con_abe.php");
include("tanimveyetkiler.php");
?>
<?php
$hosgeldin="Hoşgeldiniz Sayın  ";
$cikis=" çıkış yapmak için ";
$tikla="Tıklayınız";
$sd='Şifre Değiştir';
$kd='Kullanıcı Düzenle';
$sagdanadmin=substr($_SESSION["uyekodu"],-3,3);
$solil=substr($_SESSION["uyekodu"],0,2);
$resultocak = @mysqli_query($dbh,"select * from ocak where left(socad,2)='$solil' order by socad asc");
while($rowilkod=mysqli_fetch_array($resultocak)) {
$ilkodu=$rowilkod['ilinad'];
}
//mysqli baglantisi
if(substr($hamkod,-3,3)==$bakanlikyetki){
$result = @mysqli_query($dbh,"select ilid,ilad from il order by ilad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$result = @mysqli_query($dbh,"select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$result = @mysqli_query($dbh,"select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-9,9)==$koddokuz){
$result = @mysqli_query($dbh,"select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}
?>
<a id="basadon"></a>
<div class="height-100 bg-dark" id="nav-placeholder">
<div class="border-0">
<!-- row fixed-top" style="margin-left:90px; margin-top:0px; padding-top:3px;-->
<div class="row">
<div class="col-md-12 text-success" align="center" style="background-color: black" colspan="10">
<span class="text-success mb-1" align="center"><?php echo $hosgeldin ;?></span>
<span class="text-light mb-1 mr-5"><strong><?php echo $_SESSION["uye"]/*.' '.$cikis*/;?></strong></span>
<a class="btn btn-outline-danger text-danger btn-sm mb-1" href="cikis.php" style="color:#00FF00; text-decoration:none;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'"><i class="fa fa-sign-out"></i> Oturumu Kapat</a>
<a class="btn btn-outline-info text-info btn-sm mb-1 mr-1" href="sifredegistir.php" style="color:#00FF00; text-decoration:none;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><i class="fa fa-key" aria-hidden="true"></i> <?php echo $sd ; ?> </a>
<?php if($sagdanadmin==$bakanlikyetki or $sagdanadmin==$ilyetki or $sagdanadmin==$kurumyetki){ ?>
<a class="btn btn-outline-success text-success btn-sm mb-1" href="form_tanzim.php" style="color:#00FF00; text-decoration:none;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Tanzim Bilgileri</a>
<?php } ?>
</div>
<form class="form-control form-inline border-0" action="023kekle.php" method="get" name="kaydet" style="background-color: black">
<table class="table table-sm table-responsive-sm tablesecim">
<tbody align="center">
<tr>
<td>
<input type="hidden" name="ahekkod" id="ahekkod" value="<?php echo $_SESSION["uyekodu"]; ?>">
</td >
<td>
<select class="form-control form-control-sm" name="selectil" onChange="getState(this.value)">
<option value=""><?php echo "İli Seçiniz";?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<?php } ?>
</select>
</td>
<td>
<div id="statediv"><select class="form-control form-control-sm" name="selectilce" >
<option><?php echo "Önce İli Seçiniz";?></option>
</select></div>
</td>
<td>
<td>
<div id="citydiv"><select class="form-control form-control-sm" id="selectoc" name="selectoc" >
<option><?php echo "Önce İlçeyi Seçiniz";?></option>
</select>&nbsp;&nbsp;</div>
</td>
<td>
<?php
//mysqli baglantisi
$resultyil = @mysqli_query($dbh,"select distinct yiladi from yil order by yiladi asc");
?>
<td>
<input class="form-control form-control-sm" name="selectyil" type="text" id="selectyil" value="<?php echo date("Y"); ?>">
</td>
<?php
//mysqli baglantisi
$resultay = @mysqli_query($dbh,"select distinct ayadi from ay order by ayid asc");
?>
<td>
<select class="form-control form-control-sm" name="selectay" id="selectay" onchange="kontrol();" onclick="kontrol();">
<?php
$bitis = date("d.m.Y");
$once = time()-(8760*60*60);
$baslangic =date("d.m.Y",$once); 
$kes1=explode('.',$baslangic); 
$kes2=explode('.',$bitis); 
$time1=mktime(0,0,0,$kes1[1],$kes1[0],$kes1[2]); 
$time2=mktime(0,0,0,$kes2[1],$kes2[0],$kes2[2]); 
while($time1<=$time2) { 
$x=date('d.m.Y', ($time1)); 
$y=date('l', ($time1));
if($y=="Monday"){
$z="Pazartesi";
}
if($y=="Tuesday"){
$z="Salı";
}
if($y=="Wednesday"){
$z="Çarşamba";
}
if($y=="Thursday"){
$z="Perşembe";
}
if($y=="Friday"){
$z="Cuma";
}
if($y=="Saturday"){
$z="Cumartesi";
}
if($y=="Sunday"){
$z="Pazar";
}
echo '<option selected>'.$x.' '.$z.'</option>';
$time1=$time1+86400; 
} 
@mysqli_close($dbh);
?>
</select>
</td>
</tr>
</tbody>
</table>
</form>
</div>
<div class="row">
<div class="col-md-12 divsecim" align="center" id="sonuc"></div>
</div>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
<?php
//unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
//session_destroy(); // oturumları siler
}
?>