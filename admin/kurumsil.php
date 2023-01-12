<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../form013/tanimveyetkiler.php");

$ilseckrgelen=$_GET['selectil'];
$ilceseckrgelen=$_GET['selectilce'];
//$kurumgelen=$_GET['kurumgirgelen'];
$degkurumgelen=$_GET['kurumgir'];
$degkurumgelen=replace_tr($degkurumgelen);
//Üye Kayıt Sil Başlama..............................................
$resultocak = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelen')") ;
while($sonucum=mysqli_fetch_array($resultocak)){
$uyenom=$sonucum['socad'];
	//echo $uyenom;
}
$resultuye = @mysqli_query($dbh,"select * from uyeler where(uyekod='$uyenom')") ;
while($sonucum=mysqli_fetch_array($resultuye)){
$uyekodnom=$sonucum['uyekod'];
echo $uyekodnom;
$resultuyekodsil = "delete from uyeler where(uyekod='$uyekodnom')" ;
if(@mysqli_query($dbh,$resultuyekodsil)){
}else{
}
}
//// Üye Kayıt Sil Sonu.............................................
$resultvyil = "delete from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$degkurumgelen')";
if(@mysqli_query($dbh,$resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silindi...<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silinemedi...<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>