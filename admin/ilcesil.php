<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
<?php
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=replace_tr($ilcegelen);
$resultilce = @mysqli_query($dbh,"select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')") ;
while($sonucum=mysqli_fetch_array($resultilce)){
$ilcenom=$sonucum['ilceid'];
$ilnom=$sonucum['ilinad'];
}
$resultocak = @mysqli_query($dbh,"select * from ocak where(ilinad='$ilnom' and ilce='$ilcenom')") ;
while($sonucum=mysqli_fetch_array($resultocak)){
$ocakilnom=$sonucum['ilinad'];
$ocakilcenom=$sonucum['ilce'];
$resultocakilsil = "delete from ocak where(ilinad='$ocakilnom' and ilce='$ocakilcenom')" ;
if(@mysqli_query($dbh,$resultocakilsil)){
}else{
}
}
$resultvilce = "delete from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')";
if(@mysqli_query($dbh,$resultvilce)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>'.$silindi.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
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
