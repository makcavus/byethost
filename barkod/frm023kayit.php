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
include("../form013/tanimveyetkiler.php");
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
while ($katay=mysqli_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
echo $ilcekodu;
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
<?php
//unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
//session_destroy(); // oturumları siler
}
?>
<div class="modal fade" id="iletiyaz" tabindex="-1" role="dialog" aria-labelledby="iletiyazLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php $labelulas="Formu doldurarak düşüncelerinizi bize iltebilirsiniz."; echo $labelulas; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="form-group">
 <form class="form" name="bizeulasin" id="bizeulasin" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">

<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
           <td><font class="Yazi">Ad Soyad:</font></td>
           <td>
             <input name="tarih" type="hidden" id="tarih" class="form-control form-control-sm" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>">
             <input name="adsoyad" type="text" id="adsoyad" class="form-control form-control-sm w-100 sm" tabindex="1" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">Telefon:</font></td>
             <td><input name="telefon" type="text" id="telefon" class="form-control form-control-sm w-100 sm" tabindex="2"></td>
           </tr>
           <tr>
             <td><font class="Yazi">E-mail Adresi:</font></td>
             <td><input name="emailadresi" type="text" id="emailadresi" class="form-control form-control-sm w-100 sm" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi"><?php $labeldusunce="Düşünceleriniz:"; echo $labeldusunce; ?></font></td>
             <td><textarea name="dusunceniz" rows="5" id="dusunceniz" class="form-control w-100" tabindex="4" required></textarea></td>
           </tr>
  </thead>
 </tbody>
 </table>
 </form>
 </div>
      </div>
      <div class="modal-footer">
      <a href="#" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i><?php $labeliptal=" İptal"; echo $labeliptal; ?></a>
      <a href="#" onClick="iletiyiekle();" class="btn btn-primary btn-sm ml-3"><i class="fa fa-check fa-lg"></i><?php $labelgonder=" Gönder"; echo $labelgonder; ?></a>  
      </div>
      <div id="sonuciletiyaz"></div>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>