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
<div class="height-100 renk" id="nav-placeholder">
<div class="border-0">
<!-- row fixed-top" style="margin-left:90px; margin-top:0px; padding-top:3px;-->
<div class="row">
<div class="col-md-12 text-success" align="center" style="background-color: black" colspan="10">
<span class="text-success mb-1" align="center"><?php echo $hosgeldin ;?></span>
<span class="text-light mb-1 mr-5"><strong><?php echo $_SESSION["uye"]/*.' '.$cikis*/;?></strong></span>
<a class="btn btn-outline-danger text-danger btn-sm mb-1" href="cikis.php" style="color:#00FF00; text-decoration:none;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'"><i class="fa fa-sign-out"></i> Oturumu Kapat</a>
<a class="btn btn-outline-info text-info btn-sm mb-1 mr-1" href="../form013/sifredegistir.php" style="color:#00FF00; text-decoration:none;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><i class="fa fa-key" aria-hidden="true"></i> <?php echo $sd ; ?> </a>
<?php /*if($sagdanadmin==$bakanlikyetki or $sagdanadmin==$ilyetki or $sagdanadmin==$kurumyetki){ ?>
<a class="btn btn-outline-success text-success btn-sm mb-1" href="admin.php" style="color:#00FF00; text-decoration:none;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Admin Panel</a>
<?php } */?>
</div>
</div>
</div>
</div>
<div class="height-100 renk" id="nav-placeholder">
<div class="border-0">
<div class="container">
<form method="GET" name="form4" action="admin.php" class="form-group form-inline">
<form method="GET" name="form0" action="admin.php" class="form-group form-inline">
<form method="GET" name="form1" action="admin.php" class="form-group form-inline"> 
<form method="GET" name="form2" action="ilkaydet.php">
<form method="GET" name="form3" action="ilkaydet.php">
<div class="panel-group mt-1 mb-1" id="accordion">
 
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#kayit" data-toggle="collapse" data-parent="#accordion"><strong>Kayıt İşlemleri</strong></a></h6></div>
</div>
<div id="kayit" class="panel-collapse collapse in">
<div class="row bg-primary">
<div class="col-md-4 ml-auto mt-1 mb-1" align="center"><a href="duyurukayit.php" class="btn btn-sm btn-success">Duyuru Kaydı</a></div>
<div class="col-md-4 ml-auto mt-1 mb-1" align="center"><a href="adreskayit.php" class="btn btn-sm btn-success">Adres Kaydı</a></div>
<div class="col-md-4 mr-auto mt-1 mb-1" align="center"><a href="gereklikayit.php" class="btn btn-sm btn-success">Döküman-Form Yükleme</a></div>
</div>
</div>

<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#birim" data-toggle="collapse" data-parent="#accordion"><strong>Şube-Birim Girişi</strong></a></h6></div>
</div>
<div id="birim" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input type="text" name="birimgir" id="birimgir" value="" class="form-control form-control-sm mr-1 w-50 mt-1 mb-1" placeholder="Şube/Birim adını giriniz...">
<input name="submit4" type="button" onclick="kontrolbirim();" value="Kontrol" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit32" type="button" value="Listele" onclick="listelebirim();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success ml-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonucbirim">
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#tip" data-toggle="collapse" data-parent="#accordion"><strong>Kurum Tipi Girişi</strong></a></h6></div>
</div>
<div id="tip" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input type="text" name="tipgir" id="tipgir" value="" class="form-control form-control-sm mr-1 w-50 mt-1 mb-1" placeholder="Kurum tipini giriniz...">
<input name="submit4" type="button" onclick="kontroltip();" value="Kontrol" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit32" type="button" value="Listele" onclick="listeletip();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success ml-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonucbirimtip">
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#ilgir" data-toggle="collapse" data-parent="#accordion"><strong>İl Girişi</strong></a></h6></div>
</div>
<div id="ilgir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input type="text" name="ilgir" id="ilgir" value="" class="form-control form-control-sm mr-1 w-25 mt-1 mb-1" placeholder="İl adını giriniz...">
<input name="button" type="button" onclick="kontrolil();" value="İl Kaydı Kontrol" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit33" type="button" value="İl Listele" onclick="listeleil();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonuc">
</div>
</div>
</div>

<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#ilcegir" data-toggle="collapse" data-parent="#accordion"><strong>İlçe Girişi</strong></a></h6></div>
</div>
<div id="ilcegir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<?php

include("../con_023.php");
include("../form013/tanimveyetkiler.php");
$solil=substr($_SESSION["uyekodu"],0,2);

$resultocak = @mysqli_query( $dbh , "select * from ocak where left(socad,2)='$solil' order by socad asc");
while($rowilkod=mysqli_fetch_array($resultocak)) {
$ilkodu=$rowilkod['ilinad'];
}
//mysqli baglantisi
if(substr($hamkod,-3,3)==$bakanlikyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il order by ilad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-9,9)==$koddokuz){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}
?>
<script language="JavaScript">

function ilce(){

document.form1.ilno.value=document.form1.selectilno.options[document.form1.selectilno.selectedIndex].value;

//metin.value=menu.options[menu.selectedIndex].text;
}

</script>
<select name="selectilno" id="selectilno" onchange="javascript:ilce()" onselect="javascript:reloadPage(this)" class="form-control form-control-sm w-25" style="font-size:14px;">

  <option value=""><?php echo "İli Seçiniz";?></option>

  <?php while($row=mysqli_fetch_array($result)) { ?>

  <option value="<?=$row['ilid']?>">

  <?=$row['ilad']?>

  </option>

  <?php }

@mysqli_close($dbh);

 

   ?>

</select>
<input type="hidden" name="ilno" id="ilno">
<input type="text" name="ilcegir" id="ilcegir" value="" class="form-control form-control-sm mr-1 w-25 mt-1 mb-1" placeholder="İlçe adını giriniz...">
<input name="submit2" type="button" value="İlçe Kaydı Kontrol" onclick="kontrolilce();" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit34" type="button" value="İlçe Listele" onclick="listeleilce();" class="form-control btn btn-sm btn-success mr-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonuc1">
</div>
</div>
</div>

</form>
</form>
</form>
</form>
</form>
<br>

<?php

//mysqli baglantisi

include("../con_023.php");
include("../form013/tanimveyetkiler.php");
$solil=substr($_SESSION["uyekodu"],0,2);

$resultocak = @mysqli_query( $dbh , "select * from ocak where left(socad,2)='$solil' order by socad asc");
while($rowilkod=mysqli_fetch_array($resultocak)) {
$ilkodu=$rowilkod['ilinad'];
}
//mysqli baglantisi
if(substr($hamkod,-3,3)==$bakanlikyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il order by ilad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-9,9)==$koddokuz){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}
?>

<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#kurumgir" data-toggle="collapse" data-parent="#accordion"><strong>Kurum Girişi</strong></a></h6></div>
</div>
<div id="kurumgir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<div class="row" align="left">
  <div class="col-6"><select name="selectil" id="selectil" onchange="ilcegoster();" onselect="javascript:reloadPage(this)" class="form-control form-control-sm mt-1 mb-1 w-50" style="font-size:14px;">

  <option value=""><?php echo "İli Seçiniz";?></option>

  <?php while($row=mysqli_fetch_array($result)) { ?>

  <option value="<?=$row['ilid']?>">

  <?=$row['ilad']?>
  </option>

  <?php } 

 @mysqli_close($dbh);

 

  ?>

</select></div>
  <div class="col-6"><div id="statediv">
<select name="selectilce" id="selectilce" onselect="javascript:reloadPage(this)" class="form-control form-control-sm mt-1 mb-1 w-50" style="font-size:14px;"> 

	<option><?php echo "�nce �li Se�iniz";?></option>

        </select>
		</div></div>
		</div>
		<div class="row" align="left">
  <div class="col-6"><input type="text" name="kurumgir" id="kurumgir" value="" class="form-control form-control-sm mr-1 mb-1 is-valid w-50" placeholder="Birim kodunu giriniz..."></div>
  <div class="col-6"><input type="text" name="asmgir"  id="asmgir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="Kurum adını giriniz..."></div>
</div>
<div class="row" align="left">
  <div class="col-6"><input type="text" name="drgir" id="drgir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="Doktor adını giriniz..."></div>
  <div class="col-6"><input type="text" name="asegir" id="asegir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="Görevli adını giriniz..."></div>
</div>
<div class="row" align="left">
  <div class="col-6"><input type="text" name="aseungir" id="aseungir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="Görevli Ünvanını giriniz..."></div>
  <div class="col-6"><input name="submit35" type="button" value="Kurum Kaydı Kontrol" onclick="kontrolkurum();" onsubmit="javascript:reloadPage(this)"  class="form-control btn btn-sm btn-danger mr-1">
<input name="submit32" type="button" value="Kurum Listele" onclick="listelekurum();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1"></div>
</div>
</div>
</div>
</div>

<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonuc2">
</div>
</div>
</div>
<?php
//mysqli baglantisi
include("../con_023.php");
include("../form013/tanimveyetkiler.php");


if($koduc==$bakanlikyetki){
$resultkod = @mysqli_query( $dbh , "select socad from ocak order by socad asc");
}else if($koduc==$ilyetki){
$resultkod = @mysqli_query( $dbh , "select socad from ocak where(select left(socad,2)='$kodiki') order by socad asc");
}else if($koduc==$kurumyetki){
$resultkod = @mysqli_query( $dbh , "select socad from ocak where(select left(socad,5)='$kod') order by socad asc");
}else{
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$yetkiuyar.'</h6></div>' ;
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}

?>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#kulgir" data-toggle="collapse" data-parent="#accordion"><strong>Kullanıcı Girişi</strong></a></h6></div>
</div>
<div id="kulgir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<select name="uyekodum" id="uyekodum" onchange="kontroluye();" onclick="kontroluye();" onselect="javascript:reloadPage(this)" class="form-control form-control-sm w-25 mb-1 mt-1" style="font-size:14px;">

      <option value=""><?php echo "Üye Kodu Seçiniz";?></option>

      <?php while($rowkod=mysqli_fetch_array($resultkod)) { ?>

      <option value="<?=$rowkod['socad']?>">

        <?=$rowkod['socad']?>
        </option>

      <?php } 

 @mysqli_close($dbh);

 

  ?>
    </select>
<input name="submit3" type="button" value="Kullanıcıları Listele" onclick="kontroluser();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1">	
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="drdiv">
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;padding-top:5px;" href="#msggir" data-toggle="collapse" data-parent="#accordion"><strong>İletilere Cevap Girişi</strong></a></h6></div>
</div>
<div id="msggir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input name="submit36" type="button" value="İletileri Listele" onclick="kontrolmsg();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1 mt-1 mb-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="msgdiv">
</div>
</div>
</div>

<br>
<br>
 
<?php

$apc='Admin Panelden Çık';

$cikis='Proğramdan Çık';

?>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><strong>Admin Paneli Çıkışı</strong></h6></div>
<div class="col-md-12 bg-primary" align="center">
<a href="../index.php" class="btn btn-outline-success btn-sm text-warning mr-3"><h6><i class="fa fa-reply-all"></i> Admin Panelden Çık</h6></a>
<button type="button" class="btn btn-outline-dark mt-1 mb-1 mr-3"><span class="badge badge-light mr-1"><i class="fa fa-user" fa-lg></i></span><span class="sr-only">unread messages</span><strong><?php echo $_SESSION["uye"]; ?></strong>
</button>
<a href="cikis.php" class="btn btn-outline-danger btn-sm text-warning mr-3"><h6><i class="fa fa-sign-out"></i> Oturumu Kapat</h6></a></div>
      </div>
</div>
      </div>
      </div>
<?php
@mysqli_close($dbh);
}
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
