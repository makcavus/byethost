<script language="JavaScript" src="toplama.js" type="text/javascript"></script>	
<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
$ilgelen=$_GET['ilgir']; // get metodu ile formdan gelen geğer alınıyor
$resultil = @mysqli_query($dbh,"select * from il where(ilad='$ilgelen')") ;
while($sonucum=mysqli_fetch_array($resultil)){
$ilnom=$sonucum['ilid'];
$iladim=$sonucum['ilad'];
}
$resultocak = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilnom')") ;
while($sonucum=mysqli_fetch_array($resultocak)){
$ocakilnom=$sonucum['ilinad'];
$resultocakilsil = "delete from ocak where(ilinad='$ocakilnom')" ;
if(@mysqli_query($dbh,$resultocakilsil)){
}else{
}
}
$resultilce = @mysqli_query($dbh,"select * from ilce where(ilinad='$ilnom')") ;
while($sonucum=mysqli_fetch_array($resultilce)){
$ilceilnom=$sonucum['ilinad'];
$resultilceilsil = "delete from ilce where(ilinad='$ilceilnom')" ;
if(@mysqli_query($dbh,$resultilceilsil)){
}else{
}
}
$resultvil = "delete from il where(ilad='$ilgelen')" ;
if(@mysqli_query($dbh,$resultvil)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silindi...<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> Geridön... </a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Kayıt Silinemedi.... </th></tr></thead></table></div>';
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>