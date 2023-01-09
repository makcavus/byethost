<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$tipgelen=$_GET['tipgir']; // get metodu ile formdan gelen ge�er al�n�yor
$resulttip = @mysqli_query($dbh,"select * from kurumtipi where(tipi='$tipgelen')") ;
while($sonucum=mysqli_fetch_array($resulttip)){
$tipnom=$sonucum['tipid'];
$tipadim=$sonucum['tipi'];
}
$resultadres = @mysqli_query($dbh,"select * from adres where(tipi='$tipnom')") ;
while($sonucum=mysqli_fetch_array($resultadres)){
$adresnom=$sonucum['tipi'];
$resultadressil = "delete from adres where(tipi='$adresnom')" ;
if(@mysqli_query($dbh,$resultadressil)){
}else{
}
}
$resultvyil = "delete from kurumtipi where(tipi='$tipgelen')" ;
if(@mysqli_query($dbh,$resultvyil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silindi.' 
<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';

}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silinemedi.'</th></tr></thead></table></div>';
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
