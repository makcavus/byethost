<?php 
header("Cache-Control: no-cache,no-store");
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$kodgelen=$_GET['uyekodum'];
$secim=trsuz("Üye Kodu Seçiniz");
//KURUM KONTROLU
$vtsec2="select * from uyeler where(uyekod='$kodgelen')";
$socsorgu2=mysqli_query($dbh,$vtsec2);
$say2=mysqli_num_rows($socsorgu2);
if($koduc==$bakanlikyetki or $koduc==$ilyetki or $kod==$kurumililcekod){
if($kodgelen==""){
$uyar="Kullanıcının Kurum Kodunu Seçiniz.";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}elseif($kodgelen!="" and $say2==0){
$uyar="Bu Kullanıcıyı Tanımlayabilirsiniz.";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
?>
<form method="GET" name="form2" action="admin.php"> 
<input type="hidden" name="selectil" id="selectil" value="<?php echo $kodgelen; ?>">
<a href=# onclick="ykayuye();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i><?php echo '&nbsp;'.$iptal ; ?></a>
</form>
<?php
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href=# onClick="deguye();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> '.$degistir.'</a>';
//echo'&nbsp;&nbsp;&nbsp;&nbsp;';
//echo '<a href=# onClick="git();"><img src="images/goster.png"></a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onayuye();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> '.$sil.'</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
}else{
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$yetkiuyar.'</h6></div>' ;
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
@mysqli_close($dbh) ;
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>