<?php header("Cache-Control: no-cache,no-store");
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
$birimgelen=$_GET['birimgir'];
$vtsec="select * from birim where(birim_ad='$birimgelen')";
$socsorgu=@mysqli_query($dbh,$vtsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
echo '<p>';
if($birimgelen == "" and $say<1){
$uyar=$birimgirilmedi;
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}elseif($birimgelen != "" and $say<1){
$uyar=$birimgelen.'---'.$birimkaydet;
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
?>
<form method="GET" name="form4" action="admin.php">
<input type="hidden" name="birimgir" id="birimgir" value="<?php echo $birimgelen; ?>">
<a href=# onclick="kayitbirim();" onsubmit="javascript:reloadPage(this)" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o fa-lg"></i> Kaydet</a>
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>
</form>
<?php
//echo '<a href=# onClick="ykay();"><img src="images/kekle.png"></a>';
}else{
$uyar=$uyarbaslik;
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$uyar.'</h6></div>' ;
echo '<p>';
echo '<a href=# onClick="degbirim();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o fa-lg"></i> '.$degistir.'</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href=# onClick="onaybirim();"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-danger btn-sm"><i class="fa fa-eraser fa-lg"></i> Sil</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="admin.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-light btn-sm"><i class="fa fa-times-circle fa-lg"></i> İptal</a>';
}
@mysqli_close($dbh) ;
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
