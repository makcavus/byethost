<?php
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay? g?r?nt?leme yetkiniz yoktur.";
}else{
      $inactive = 1300;
      if(isset($_SESSION['timeout']) ) {
      $session_life = time() - $_SESSION['timeout'];
      if($session_life > $inactive)
      {
      unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
      session_destroy(); header("Location: cikis.php"); }
      }
      $_SESSION['timeout'] = time();
header("Cache-Control: no-cache,no-store");
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../form013/tanimveyetkiler.php");
//include("tanimveyetkiler.php");
$ilgelen=$_GET['ilgir'];
$vtsec="select * from il where(ilad='$ilgelen')";
$socsorgu=mysqli_query($dbh,$vtsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
echo '<p>';
if($koduc==$bakanlikyetki or $koduc==$ilyetki){
if($ilgelen == "" and $say<1){
$uyar="İl İsmi Girilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
$iptal="İptal";
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}elseif($ilgelen != "" and $say<1){
$uyar="Bu İli Kaydedebilirsiniz.";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>'  ;?>
<form method="GET" name="form0" action="admin.php">
<input type="hidden" name="ilgir" id="ilgir" value="<?php echo $ilgelen; ?>">
<a href=# onclick="kayit();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-light btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</form>
<?php
//echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<p>';
echo '<a href=# onClick="deg();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> Değiştir</a>';
//echo'&nbsp;&nbsp;&nbsp;&nbsp;';
//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onay();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> Sil</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-light btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}
}else{
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$yetkiuyar.'</h6></div>' ;
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}
}
@mysqli_close($dbh) ;
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>