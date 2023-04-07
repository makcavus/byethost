<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
<?php
include("../con_023.php");
include("../fonksiyonlar.php");
include("../form013/tanimveyetkiler.php");
include('../form013/frm013alanlari.php');
$uyekodu=$_GET['uyekodum'];
$resultvyil = "delete from uyeler where(uyekod='$uyekodu')" ;
if(@mysqli_query($dbh,$resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$uyekodu.' '.$silindi.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm">
<i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silinemedi....</th></tr></thead></table></div>';
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>