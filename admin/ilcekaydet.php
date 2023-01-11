<?php
$ilceok="İlçesi Kaydedildi...";
$ilceno="İlçe Kaydedilemedi...";
include("../con_023.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
include("../tanimlaranadizin.php");
$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=$_GET['ilcegir']; // get metodu ile formdan gelen ge�er al�n�yor
$ilcegelen=replace_tr($ilcegelen);
$ilcesec="select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')";
$socsorgu1=mysqli_query($dbh,$ilcesec);
$say1=mysqli_num_rows($socsorgu1);
//echo $say1;
if($say1<1 AND $ilcegelen !=""){
$kayit="INSERT INTO ilce(ilinad,ilcead) VALUES ('$ilsecgelen','$ilcegelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$ilcegelen.' '.$ilceok.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.$ilceno.'<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table></div>';
}
}
while($sonucum1=mysqli_fetch_array($socsorgu1)){
$ilceno=$sonucum1['ilceid'];
$ilinadi=$sonucum1['ilinad'];
$ilceadi=$sonucum1['ilcead'];
}
@mysqli_close($dbh);
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>