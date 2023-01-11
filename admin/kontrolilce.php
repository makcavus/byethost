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
$ilsecgelen=$_GET['selectilno'];
$ilcegelen=$_GET['ilcegir'];
//İLÇE KONTROLU
$vtsec1="select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')";
$socsorgu1=mysqli_query($dbh,$vtsec1);
$say1=mysqli_num_rows($socsorgu1);
echo '<p>';
if($koduc==$bakanlikyetki or $koduc==$ilyetki){
if($ilsecgelen == "" and $say1<1){
$uyar="İl Seçilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}elseif($ilsecgelen != "" and $ilcegelen=="" and $say1<1){
$uyar="ilçe Seçilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}elseif($ilsecgelen != ""  and $ilcegelen!="" and $say1<1){
$uyar="Bu ilçeyi Kaydedebilirsiniz.";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
?>
<form method="GET" name="form1" action="admin.php"> 
<input type="hidden" name="selectilno" id="selectilno" value="<? echo $ilsecgelen; ?>">
<input type="hidden" name="ilcegir" id="ilcegir" value="<? echo $ilcegelen; ?>">
<a href=# onclick="kayitilce();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> <?php echo $iptal;?></a>
</form>
<?php
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<p>';
echo '<a href=# onClick="degilce();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> '.$degistir.'</a>';
//echo'&nbsp;&nbsp;&nbsp;&nbsp;';
//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onayilce();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> '.$sil.'</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-light btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
}else{
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$yetkiuyar.'</h6></div>' ;
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
}
@mysqli_close($dbh) ;
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>