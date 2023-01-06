<?php
include("../connect.php");
include("../form013/frm013alanlari.php");
include("../fonksiyonlar.php");
//include("../../tanimlaranadizin.php");
$birimgelen=$_GET['birimgir'];
//$birimsecgelen=$_GET['birimno']; // get metodu ile formdan gelen geğer alınıyor
$birimsec="select * from birim where(birim_ad='$birimgelen')";
$socsorgu=mysqli_query($dbh,$birimsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
if($say<1 AND $birimgelen !=""){
$kayit="INSERT INTO birim(birim_ad) VALUES ('$birimgelen')";
if(mysqli_query($dbh,$kayit)){
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<tr>';
echo '<th>Durum</th>';
echo '</tr>';
echo '<tr>';
echo '<th class="bg-light">'.$birimgelen.' '.$birimok.' <a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></tr></thead></table></div>';
}else{
echo '<div class="col-md-12 bg-warning text-dark mt-1" align="center">';
echo '<table class="table table-striped table-primary table-sm table-responsive-lg">';
echo '<thead align="center">';
echo '<th>Durum</th>';
echo '</tr>';
echo '<th class="bg-info">'.$birimkaydolmadi.'<a href="admin.php" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-reply-all fa-lg"></i>
 '.$geridon.'</a></th></thead></table>';
 echo '</div>';
}
}
while($sonucum=mysqli_fetch_array($socsorgu)){
$ilno=$sonucum['birim_id'];
$iladi=$sonucum['birim_ad'];
 // ekrana md5 kodu yazdırılıyor
//print("<b>Girilen İl : </b> ".$ilno."<br>".$iladi);				
}

@mysqli_close($dbh);
 ?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
