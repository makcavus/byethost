<?php
include("../connect.php");
$tipok="Kurum Tipi Kaydedildi...";
$tipkaydolmadi="Kurum Tipi Kaydedilemedi...";
$geridon="Geri dön";
include('../form013/frm013alanlari.php');
include("../fonksiyonlar.php");
$tipgelen=$_GET['tipgir'];
$tipgelen=replace_tr($tipgelen);
$tipsecgelen=@$_GET['tipno']; // get metodu ile formdan gelen ge�er al�n�yor
$tipsec="select * from kurumtipi where(tipi='$tipgelen')";
$socsorgu=mysqli_query($dbh,$tipsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
if($say<1 AND $tipgelen !=""){
$kayit="INSERT INTO kurumtipi(tipi) VALUES ('$tipgelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$tipgelen.' '.$tipok.'<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i> '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$tipkaydolmadi.'</font></th></tr></thead></table></div>';
}
}
while($sonucum=mysqli_fetch_array($socsorgu)){
$ilno=$sonucum['tipid'];
$iladi=$sonucum['tipi']; 
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
