<?php header("Cache-Control: no-cache,no-store");
include("../con_023.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];
$kurumgelen=$_GET['kurumgir'];
$asmgelen=$_GET['asmgir'];
$drgelen=$_GET['drgir'];
$asegelen=$_GET['asegir'];
$aseungelen=$_GET['aseungir'];
//KURUM KONTROLU
$vtsec2="select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')";
$socsorgu2=mysqli_query($dbh,$vtsec2);
$say2=mysqli_num_rows($socsorgu2);
echo '<p>';
if($ilseckrgelen == "" and $say2<1){
$uyar="İl Seçilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}elseif($ilseckrgelen != "" and $ilceseckrgelen== "İlçe Seçiniz" and $say2<1){
$uyar="İlçe Seçilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}elseif($ilseckrgelen != "" and $ilceseckrgelen !="" and $kurumgelen=="" and $say2<1){
$uyar="Kurum Seçilmedi";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm mb-1"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}elseif($ilseckrgelen != ""  and $ilceseckrgelen!= "İlçe Seçiniz" and $kurumgelen!="" and $say2<1){
$uyar="Bu Kurumu Kaydedebilirsiniz.";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
?>
<form method="GET" name="form2" action="admin.php"> 
<input type="hidden" name="selectil" id="selectil" value="<?php echo $ilseckrgelen; ?>">
<input type="hidden" name="selectilce" id="selectilce" value="<?php echo $ilceseckrgelen; ?>">
<input type="hidden" name="kurumgir" id="kurumgir" value="<?php echo $kurumgelen; ?>">
<input type="hidden" name="asmgir" id="asmgir" value="<?php echo $asmgelen; ?>">
<input type="hidden" name="drgir" id="drgir" value="<?php echo $drgelen; ?>">
<input type="hidden" name="asegir" id="asegir" value="<?php echo $asegelen; ?>">
<input type="hidden" name="aseungir" id="aseungir" value="<?php echo $aseungelen; ?>">
<a href=# onclick="kayitkurum();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i><?php echo '&nbsp;'.$iptal ; ?></a>
</form>
<?php
}else{
$uyar="BU KAYIT YAPILMIŞ...";
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href=# onClick="degkurum();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> '.$degistir.'</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onaykurum();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> '.$sil.'</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-light btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}
@mysqli_close($dbh) ;
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>